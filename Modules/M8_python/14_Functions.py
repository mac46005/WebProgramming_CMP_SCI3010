"""
A function is a block of code which only runs when it is called

You can pass data, known as parameters, into a function

A function can return data as a result
"""

# In python a function is defined using the def keyword:
def my_function():
    print("Hello from a function")

# To call a function, use the function name followed by parenthesis:
my_function()

"""
Information can be pased to functions name followed by parentheses:
Parameters are specified after the function name,
insdie the parantheses. You can add as many parameters as you want,
just separate them with a comma
"""
def my_function(fname):
    print(fname + "Marco")

my_function("Marco")
my_function("Preciado")


"""
We can set a default parameter value
If we call the function without parameter, ut uses the default value:
"""
def my_function(country = "USA"):
    print("I am from " + country)

"""
You can send any data types of parameter to a function
(string, number, list, dictionary etc.), and it will be
treated as the same data type inside the function
"""

def my_function(food):
    for x in food:
        print(x)


fruits = ["apple", "banana", "cherry"]

my_function(fruits)

# To let a function return a value , use the return statement
def my_function(x,y):
    return x + y