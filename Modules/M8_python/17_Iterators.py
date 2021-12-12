"""
An iterator is an object that contains a countable number of values.

An iterator is an object that can be iterated upon,
meaning that y can traverse though all the values

Techically in python an iterator is an object which implements
the iterator protocol , which consists of the methods __iter__() and ___next__()

"""

# lists,tuples,dictionaries and sets are all iterable objects
# they are iteratable containers which you can get an iterator from

# all these objects have a iter() method which is used to get an iterator:
myTuple = ("apple", "banana" ,"cherry")
myIt = iter(myTuple)
print(next(myTuple))
print(next(myTuple))
print(next(myTuple))


# strings are also iterable objects, containing a sequence of characters:
myStr = "banana"
myIt = iter(myStr)

print(next(myIt))
print(next(myIt))
print(next(myIt))
print(next(myIt))
print(next(myIt))

"""
 To create an object/class as an iterator you have to implement
 the methods __iter__() and __next__() to your object

 As you have learned in the python classes/objects chapter,
 all classes have a function called __init__()
 which allows you do some initializing when the object is being created

 The __iter__() method acts similar , you can do operations
 and must return the next item in the sequence
"""

class MyNumbers:
    def __iter__(self):
        self.a = 1
    def __next__(self):
        x = self.a
        self.a += 1
        return x

myClass = MyNumbers()
myIter = iter(myClass)

print(next(myIter))
print(next(myIter))
print(next(myIter))

