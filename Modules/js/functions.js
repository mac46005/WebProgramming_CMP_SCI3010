window.onload = function(){
    /*
    A Javascript function is defines with the function keyword,
    followed by a name, followed by parentheses ().

    Function names can contain Letters, digits, underscores, and dollar signs (same rules as variables)
    The parentheses may include parameter names separated by commas:
    (parameter1, parameter2,...)

    The code to be executed, by the function, is placed inside curly brackets:
    function blah(myparametes){
        functions implemented
    }

    When Javascript reaches a return statement, the function will stop executing

    If the function invoked from a statement, Javascript will "return"
    to execute the code after the invoking statement.

    Functions often compute a return value. The return value is "returned"
    back to the "caller"
     */

    var z = myFunction(3,5);
    var a = myFunction(3);
    var b = myFunction(3,4,5);


    var functionElement = document.getElementById("functions");
    if(functionElement){
        functionElement.innerHTML = "Calling myFunctions(3,5): " + z + "<br/>" +
        "Calling myFunction(3)" + a + "<br/>" + 
        "Calling myFunction(3,5,7): " + b + "<br/>";
    }



}

 function myFunction(x,y){
     var w = x * y;
     return w;
 }
/*
There is no such thing as function overloading
 */
