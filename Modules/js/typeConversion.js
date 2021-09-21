
window.onload = function(){
    // string takes precedence when being concatinated
    var add = 5 + 4 + 1;
    var x = "5" + 4 + 1;
    var y = 4 + 1 + "5";
    var z = 7 * "3";
    var w = "3" * 7;
    var v = "some string" * 7;

    var typeElement = document.getElementById("type");
    if(typeElement){
        typeElement.innerHTML = 
        "\"5\" + 4 + 1 = " + x + "<br/>" +
        "4 + 1 + \"5\" = " + y + "<br/>" +
        "7 * \"3\" = " + z + "<br/>" +
        "\"3\" * 7 = " + w + "<br/>" +
        "\"some string\" * 7 = " + v + "<br/>" +
        "5 + 4 + 1 = " + add;
    }
}