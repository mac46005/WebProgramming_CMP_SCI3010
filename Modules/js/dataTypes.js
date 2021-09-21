window.onload = function(){
    var dataTypeElement = document.getElementById("datatypes");
    if(dataTypeElement){
        var x;

        dataTypeElement.innerHTML =
        "<code>var x;</code> // x is  " + typeof x + "<br/>";

        x = 5;

        dataTypeElement.innerHTML = dataTypeElement.innerHTML +
        "<code> x = 5;</code> // x is a " + typeof x + "<br/>";

        x = "Marco Preciado";

        dataTypeElement.innerHTML = dataTypeElement.innerHTML + 
        "<code> x = \"Marco Preciado\"</code> // x is a " + typeof x + "<br/>";

        x = false;

        dataTypeElement.innerHTML = dataTypeElement.innerHTML +
        "<code> x = false </code> // x is a " + typeof x + "<br/>";

        x = {};

        dataTypeElement.innerHTML = dataTypeElement.innerHTML + 
        "<code> x = {} </code> // x is a " + typeof x + "<br/>";

        x = null;

        dataTypeElement.innerHTML + dataTypeElement.innerHTML +
        "<code> x = null </code> // x is a " + typeof x;
    }
}