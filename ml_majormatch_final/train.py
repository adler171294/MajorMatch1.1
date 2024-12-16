# Step 1: Import Libraries
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder, StandardScaler
from sklearn.tree import DecisionTreeClassifier
import joblib
import os

base_path = os.path.dirname(os.path.abspath(__file__))

# Step 2: Load Data
saintek_file = r"saintek.xlsx"
soshum_file = r"soshum.xlsx"

saintek_data = pd.read_excel(saintek_file)
soshum_data = pd.read_excel(soshum_file)

# Step 3: Preprocess Data
def preprocess_data(data, target_column, features, categorical_features, weight_factors):
    le_target = LabelEncoder()

    # Encode categorical features
    le_features = {col: LabelEncoder() for col in categorical_features}
    for col, le in le_features.items():
        data[col] = le.fit_transform(data[col])

    # Separate features and target
    X = data[features].copy()  # Gunakan .copy() untuk memastikan DataFrame independen
    y = le_target.fit_transform(data[target_column])

    # Apply weights to numeric features (prioritize nilai)
    for feature, weight in weight_factors.items():
        if feature in X.columns:
            X.loc[:, feature] = X[feature] * weight  # Gunakan .loc untuk menghindari SettingWithCopyWarning

    return X, y, le_target, le_features

# Define features for each category
saintek_features = ['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Minat', 'Prestasi']
soshum_features = ['Matematika', 'Ekonomi', 'Sosiologi', 'Geografi', 'Minat', 'Prestasi']

categorical_features = ['Minat', 'Prestasi']

# Define weights for numeric features (prioritize nilai)
saintek_weights = {'Matematika': 2.0, 'Fisika': 2.0, 'Kimia': 2.0, 'Biologi': 2.0, 'Minat': 1.0, 'Prestasi': 1.0}
soshum_weights = {'Matematika': 2.0, 'Ekonomi': 2.0, 'Sosiologi': 2.0, 'Geografi': 2.0, 'Minat': 1.0, 'Prestasi': 1.0}

def train_and_save_model(data, features, target_column, model_name, weight_factors):
    # Preprocess the data
    X, y, le_target, le_features = preprocess_data(data, target_column, features, categorical_features, weight_factors)

    # Train-test split
    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

    # Train Decision Tree model
    model = DecisionTreeClassifier(criterion="entropy", random_state=42)
    model.fit(X_train, y_train)

    # Save the model and encoders
    joblib.dump(model, f"{model_name}_model.pkl")
    joblib.dump(le_target, f"{model_name}_label_encoder.pkl")
    joblib.dump(le_features, f"{model_name}_feature_encoders.pkl")
    print(f"Model {model_name} saved successfully.")

# Train and save models
train_and_save_model(saintek_data, saintek_features, "Prediksi Jurusan", "saintek", saintek_weights)
train_and_save_model(soshum_data, soshum_features, "Prediksi Jurusan", "soshum", soshum_weights)
