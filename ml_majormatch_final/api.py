from flask import Flask, request, jsonify
import joblib
import numpy as np
import os
import pandas as pd

app = Flask(__name__)

base_path = os.path.dirname(os.path.abspath(__file__))

# Load models and encoders
model_saintek = joblib.load(os.path.join(base_path, "saintek_model.pkl"))
model_soshum = joblib.load(os.path.join(base_path, "soshum_model.pkl"))
le_saintek = joblib.load(os.path.join(base_path, "saintek_label_encoder.pkl"))
le_soshum = joblib.load(os.path.join(base_path, "soshum_label_encoder.pkl"))
feature_encoders_saintek = joblib.load(os.path.join(base_path, "saintek_feature_encoders.pkl"))
feature_encoders_soshum = joblib.load(os.path.join(base_path, "soshum_feature_encoders.pkl"))

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    category = data.get('category')  # 'saintek' or 'soshum'
    features = data.get('features')
    
    if category == 'saintek':
        encoders = feature_encoders_saintek
        model = model_saintek
        label_encoder = le_saintek
        feature_names = ['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Minat', 'Prestasi']
    elif category == 'soshum':
        encoders = feature_encoders_soshum
        model = model_soshum
        label_encoder = le_soshum
        feature_names = ['Matematika', 'Ekonomi', 'Sosiologi', 'Geografi', 'Minat', 'Prestasi']
    else:
        return jsonify({'error': 'Invalid category'})

    # Encode categorical features
    for col in ['Minat', 'Prestasi']:
        features[col] = encoders[col].transform([features[col]])[0]

    # Prepare input for prediction
    input_features = [
        features['Matematika'],
        features['Fisika'] if category == 'saintek' else features['Ekonomi'],
        features['Kimia'] if category == 'saintek' else features['Sosiologi'],
        features['Biologi'] if category == 'saintek' else features['Geografi'],
        features['Minat'],
        features['Prestasi']
    ]

    # Convert to DataFrame with feature names
    input_df = pd.DataFrame([input_features], columns=feature_names)

    # Perform prediction
    prediction = model.predict(input_df)
    predicted_label = label_encoder.inverse_transform(prediction)[0]

    return jsonify({'prediction': predicted_label})

if __name__ == '__main__':
    app.run(port=5000)