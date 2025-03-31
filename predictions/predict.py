import pickle
import numpy as np
import sys

# Get the input values from the command line
input_values = sys.argv[1:]

# Convert the input values to a numpy array and reshape them to (1, 6)
x_input = np.array(input_values, dtype=float).reshape(1, -1)

# Load the trained model
with open('model/house_price_model.pickle', 'rb') as file:
    model = pickle.load(file)

# Make prediction
predicted_price = model.predict(x_input)[0]

# Print the result
print(predicted_price)