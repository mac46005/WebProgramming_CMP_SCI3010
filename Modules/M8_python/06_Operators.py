"""
Operators are used to perform operations on variables and values

Python divides the operators in the following groups:

Arithmetic
Assignment
Comparison
Identity
Membership
"""

x = 4
y = 3

# Arithmetic Operators

print("Arithmetic Operators")
print(str(x) + "+" + str(y) + " = " + str(x + y))
print(str(x) + "-" + str(y) + " = " + str(x - y))
print(str(x) + "*" + str(y) + " = " + str(x * y))
print(str(x) + "/" + str(y) + " = " + str(x / y))
print(str(x) + "%" + str(y) + " = " + str(x % y))
# {**} Raises to the power
print(str(x) + "**" + str(y) + " = " + str(x ** y))
# (//) Florine divide 
print(str(x) + "//" + str(y) + " = " + str(x // y))

# Identity Operators
print("Identity Operators")
print("x is x:" + str(x is x))
print("x is not y" + str(x is not y))

# Membership Operators
cars = ["Ford", "Volvo", "BMW"]
print("Membership Operators")
print("X in cars: " + str(x in cars))
print("x not in cars : " + str(x not in cars))



