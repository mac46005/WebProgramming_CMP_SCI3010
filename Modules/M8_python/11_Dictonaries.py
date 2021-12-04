"""
Dictionary is a collection which is unordered, changeable and indexed.
No duplicate members.
"""

# Create and print a dictionary
carDictionary = {
    "brand" : "Ford",
    "model" : "Mustang",
    "year" : 1964
}

print(carDictionary)

# Get the value of the "model" key:
x = carDictionary["model"]
print(x)

# Get the value of the "model" key:
x = carDictionary.get("model")
print(x)

# Change the "year" to 2018:
carDictionary["year"] = 2018
print(carDictionary)

# Print all key names in the dictionary, one by one:
for x in carDictionary:
    print(carDictionary[x])

# Print all values in dictionary, one by one:
for x in carDictionary.values():
    print(x)

# Print all values in the dictionary, one by one:
for x,y in carDictionary.items():
    print(x,y)

# chech if "model" is present in the dictionary:
if "model" in carDictionary:
    print("Yes, 'model' is one of the keys in the carDictionary dictionary")

# Print the number of items in the dictionary:
print(len(carDictionary))

# Adding an item to the dictionary is done by using a new index key
# and assigning a value to it:
carDictionary["color"] = "red"
print(carDictionary)

# The pop() method removes the tiem with te specified key name:
carDictionary.pop("model")
print(carDictionary)

# The popitem() method removes the last insereted item
# (in versions before 3.7, a random item is removed instead):
carDictionary.popitem()
print(carDictionary)

# The del keyword will delete the dictionary completely:
del carDictionary

