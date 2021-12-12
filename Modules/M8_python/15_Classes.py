"""
Almost everything is python is an object, with its properties and methods

A Class is like an object constructor, or a "blueprint" for creating objects
"""

# To create a class, use the keyword class:
class MyClass:
    x = 5

# Now we can use the class named myClass to create objects:
p1 = MyClass()
print(p1.x )
print(p1)

# All classes have a function __init__(), which is always executed when the class is being initiated

# Use the __init__() function to assign values to object properties
# or other operations that are necessary to do when the object is being created:
class Person:
    def __init__(self,name, age = 200):
        self.name = name
        self.age = age

p1 = Person("Marco",28)

print(p1.name)
print(p1.age)
print(p1)


#objects can also contain methods
#methods in objects are functions that belongs to the object.
class Person:
    def __init__(self,name,age):
        self.name = name
        self.age = age
    
    def myfunc(self):
        print("Hello my name is " + self.name)


p1 = Person("Danielle",19)
p1.myfunc()
print(p1)



# The self paraeter is a reference to the current instance of the class,
# and is used to access variables that belongs to the class
class Person:
    def __init__(mysillyobject,name,age):
        mysillyobject.name = name
        mysillyobject.age = age
    def myfunc(abc):
        print("Hello my name is " + abc.name)

p1 = Person("Steve",38)
p1.myfunc()
print(p1)

# you can modify properties on objects like this:
p1.age = 333

# You can delete properties on objects by using the del keyword:
del p1.age

p1.shoes = "Nike"

print(p1.shoes)

# You can delete objects by using the keyword del:
del p1


        