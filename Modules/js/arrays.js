window.onload = function(){
    /*
    Arrays can be created using the new expression,
    which must include a call to the Array constructor method.

    Below an Array object of length 4 is created and initialized.
     */
    var my_array = new Array(1,2,"three","four");
    /*
    Below is a new Array object of length 100 is created,
    without actually creating any elements.

    Whenever a call to the Array constructor has a single parameter,
    that parameter is taken to be the number of elements,
    not the initial value of a one-element array.
     */
    var oneHundredArray = new Array(100);
    /* Arrays can also be created using an array literal */
    var cars = ["Saab","Volvo", "BMW"]

    /* You access an array element by referring to the index number */

    var arrayElement = document.getElementById("arrays");
    if(arrayElement){
        arrayElement.innerHTML =
        "cars array: " + cars + "<br/>" + 
        "length of cars array: " + cars.length + "<br/>";

        /* The easiest way to add a new element to an array is using the push method */
        cars.push("Mercedes");
        arrayElement.innerHTML = arrayElement.innerHTML + 
        "Pushed Mercedes onto cars Array<br/>";

        /*
        Two options to loop over an array.
         */
        for (let i = 0; i < cars.length; i++) {
            arrayElement.innerHTML +=
            "for loop : cars [" + i + "]: " + cars[i] + "<br/>";
            
        }

        var x = cars.pop();

        arrayElement.innerHTML += "Pop" + x + " out of cars Array<br/>";

        /*Using Arrays.foreach() method */
        cars.forEach(function(value){
            arrayElement.innerHTML += 
            "Arrays.foreach :" + value + "<br/>";
        })
    }

};