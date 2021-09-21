window.onload = function(){
    var x;
    var y;
    x = 5;
    y = 8;
    
    var opElement = document.getElementById("operators");

    if(opElement){
        opElement.innerHTML = 
        "5 + 8 =" + (x + y) + "<br/>" +
        "8 - 5 = " + (x - y) + "<br/>" +
        "5 * 8 =" + (x * y) + "<br/>" +
        "8 / 5 =" + (x / y) + "<br/>";
    }
}

function myFunc(){
    alert("Bitch");
}