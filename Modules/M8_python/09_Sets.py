"""
Set is a collection which is unordered and unindexed.
No duplicate memebers.
"""

# Create a Set:
fruitSet = {"apple","banana","cherry"}
print(fruitSet)

# Loop through the set, and print the values:
for x in fruitSet:
    print(x)

# Chech if "banana" is present in the set:
print("banana" in fruitSet)

# Add an item to a set, using the add() method:
fruitSet.add("orange")
print(fruitSet)

# Add multiple items to set, using the update() method:
fruitSet.update(["apricot","mango","grapes"])
print(fruitSet)

# Get the number of items in a set:
print(len(fruitSet))

# Remove "apricot" by using the discard() method:
fruitSet.discard("apricot")
print(fruitSet)

# Remove the last item by using the pop() method:
# sets are unordered, so when using the pop() method,
# you will not know which item that gets removed.
x = fruitSet.pop()
print(x)
print(fruitSet)

# The clear() method empties the set:
fruitSet.clear()


# the del keyword will delete the set completely
del fruitSet
print(fruitSet)

