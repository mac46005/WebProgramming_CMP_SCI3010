window.onload(){
    /*
    Hoisting is Javascipt's default behavior of moving declarations
    to the top

    In Javascript, a variable can be declared after it has been used.

    In other words; a viariable can be used before it has been declared.

    Javascript only hoists declarations, not initializations.
     */

    var hoistingElement = document.getElementById("hoisting");
    if(hoistingElement){
        x = 42;
        hoistingElement.innerHTML = x;
        hoistingElement.innerHTML = hoistingElement.innerHTML + y;
        hoistingElement.innerHTML = hoistingElement.innerHTML + 
        "<br/>Hoisting element is an unknown or overlooked behavior of Javascript." +
        "<br/>" +
        "If a developer doesnt understand hoisting, programs may contain bugs." +
        " To avoid bugs, always declare all variables at the beginning of every scope."
    }
}