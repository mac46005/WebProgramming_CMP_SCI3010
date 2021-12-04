"""
Tuple is a collection which is ordered and unchangeable.
Allows duplicate memebers
"""

# Create a Tuple:
fruitTuple = ("apple","banana","cherry")
print(fruitTuple)

# return the item in postion 1:
print(fruitTuple[1])

# iterate through the tuple and print the values
for x in fruitTuple:
    print(x)

# check if "apple" is present in the tuple:
if "apple" in fruitTuple:
    print("Yes, 'apple' is in the fruits tuple")

# Print the number of items in the tuple:
print(len(fruitTuple))

# The del keyword can delete the tuple completely
del fruitTuple

# print(fruitTuple)
# gets an error  

