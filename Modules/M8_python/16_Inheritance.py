"""
Inheritance allows us to define a class that inherits all the moethods and properties from another class

Parent lass is the class being inherited from, also called base class

Child class is the class that inherits from another class, also called  derived class.
"""

# Any class can be a parent class,
# so the syntax is the same as creating any other class:
class Person:
    def __init__(self,fname,lname):
        self.firstname = fname
        self.lastname = lname
    
    def printname(self):
        print(self.firstname,self.lastname)

x = Person("Marco", "Preciado")

x.printname()

# To create a class that inherits the functionality from another class,
# send the parent class as a parameter when creating child class:
class Student(Person):
    pass
# use the pass keyword when you do not want to 
# add any other properties or methods to the class

x = Student("Marco","Person")
x.printname()

# so far we have created a child class that inherits the properties and
# methods from its parent

# We want to add the __init__() function to the child class
# instead of the pass keyword

# when you add the __init__() function, the child class will no
# longer inherit the parents __init__() functioin,

# To keep the ingeritance of the perent's __init)_ function,
# add a call to the parent's __init__() function:

class Student(Person):
    def __init__(self, fname, lname,year):
        super().__init__(fname, lname)
        self.graduationyear = year
    
    def welcome(self):
        print("Welcome",self.firstname,self.lastname,"to the class of",self.graduationyear)

x = Student("Steve","LastName",2016)
x.printname()
x.welcome()

y = Person("Marco","Lastrnmjakljg")
y.welcome()