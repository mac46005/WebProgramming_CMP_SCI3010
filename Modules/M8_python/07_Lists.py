"""
List is a collection which is ordered and changeable
Allows duplication members
"""

# Create a List:
fruitList = ["apple","banana","cherry"]
print(fruitList)

# Print the second item of the list
print(fruitList[1])

# change the second item:
fruitList[1] = "mango"
print(fruitList)

# Print all items in the list, one by one:
for x in fruitList:
    print(x)

# Check if "apple" is present in the list:
if "apple" in fruitList:
    print("Yes, 'apple' is in the fruits list")

# Print the number of items in the list:
print(len(fruitList))

# Using the append() method to append an item:
fruitList.append("orange")
print(fruitList)

# Insert an item as the second position:
fruitList.insert(1,"orange")
print(fruitList)

# The remove() method removes the specifies item:
fruitList.remove("orange")
print(fruitList)

# The pop() method removes the specified index
# for the last item if index is not specified:
fruitList.pop()
print(fruitList)

# The del keyword removes the specified index:
del fruitList[3]
print(fruitList)

# The clear() method empties the list:
fruitList.clear()
print(fruitList)



