"""
String literals in python are surrounded by either single quotation marks,
or double quotation marks

Strings can be output to screen using the prin function.

Like many othe popular programming languages, strings in Python are arrays
of bytes representing unicode characters. However, Python does not have character data type, a single character is simply 
a string with a length of 1. Square brackets can be used to access elements of the string
"""

# Get the character at position 1
# remeber that the first character has the position 0:
a = "Hello World!"
print(a[1])

# Get the character from position 2 to position 5 (not included):
print(a[2:5])

# The strip() method removes any whitespace from the beginning and end:
a = "  Test    "
print(a.strip())

# The len() method returns the length of a string
a = "Hello World!"
print(len(a))

# The lower() method returns the string in lower case:
print(a.lower())

# The upper() method returns the string in upper case:
print(a.upper())

# The split() method splits the string into substrings
# if it finds instances of the separator:
a = "Hello, World!"
print(a.split(",")) # returns {'Hello', 'World!'}

# The replace() method replaces a string with another string:
print(a.replace("H","J"))