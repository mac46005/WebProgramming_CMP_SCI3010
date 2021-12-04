"""
A for loop is used for iterating over a sequence
(that is either a list, a tuple, a dictionary, a set , or a string)

This is less like the for keyword in other programming language,
and works more like an iterator method as found in other object orientated
programming language.

With the for loop we can execute a set of statements,
once for each item in a list, tuple, set etc.
"""

# The for loop does not require an indexing variable to set beforehand
fruits = ["apple", "banana", "cherry"]
for x in fruits:
    print(x)

# Even strings are iterable objects, they contain a sequence of characters:
for x in "banana":
    print(x)

# With the break statement we can stop the loop before it has looped through all the items:
for x in fruits:
    print(x)
    if x == "banana":
        break

# with the continue statement we can stop the current iteration of the loop, and continue with the next :
for x in fruits:
    if x == "banana":
        continue
    print(x)

# To loop through a set of code a specified number of times,
# we can use the range() function
# The range() function returns a sequence of numbers,
# starting from 0 by default, and increments by 1 by default
# and ends at a specified number
for x in range(6):
    print(x)

# The else keyword in a for loop specified a block of code
# to be executed when the loop is finished:
for x in range(6):
    print(x)
    # break
else:
    print("Finally Finished!")

