"""
There may be times when you want to specify a type on to a variable.
This can be done with casting.
Python is an object-orientated language,
and as such it uses classes to define data types,
including its primitive types

Casting in Python is therefore done using constructo functions:

int() - constructs an integer number form an integer literal,
a float literal(by rounding down to the previous whole number),
or a string literal (providing the string represents a whole number).

float() - constructs a float number from an integer literal,
a float literal or a string literal (providing the string represents a a float or an integer).

str() - constructs a string from a wide variety of data types,
including strings, integers literals and float literals

"""

print(int(1))
print(int(2.8))
print(int("3"))

print(float(1))
print(float(2.8))
print(float("3"))
print(float("4.8"))

print(str("s1"))
print(str(2))
print(str(2.8))

