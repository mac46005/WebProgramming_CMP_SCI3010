"""
Python supports the usual logical conditions from mathematics:

Equals:     a == b
Not Equals: a != b
Less than:  a < b
Less than or equal to: a <= b
Greater than: a > b
Greater than or equal to: a >= b

These conditions can be used in several ways,
most commonly in "if statements" and loops
"""

# Python relies on indetation, using whitespace,
# to define scope in the code. Other programming languages
# often use curly brackets for this purpose
a = 33
b = 200

if b > a:
    print("b is greater than a")
    print("still in same block")

# The elif keyword is pythons way of saying
# "if the previous conditions were not true, then try this condition".
a = 33
b = 33
if b > a:
    print("b is greater than a")
elif a == b:
    print("a and b are equal")

# The else keyword catches anything which isn't caught by the preceding conditions
a = 200
b = 33
if b > a:
    print("b is greater tha a")
elif a == b:
    print("a and b are equal")
else:
    print("a is greater than b")

# The and keyword is logical operator, and is used to combine conditional statements:
a = 200
b = 33
c = 3000
if a > b and c > a:
    print("Both conditions are True")

# The or keyword is a logical operator, and is used to combine conditional statements:
if a > b or a > c:
    print("At least one of the conditions is True")

# Same as and logical operator in a single if check
if a > b:
    if c > a:
        print("Both conditions are True")
