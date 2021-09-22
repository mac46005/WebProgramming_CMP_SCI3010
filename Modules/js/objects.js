var myObject = {
    FistName : "Marco",
    LastName : "Preciado",
    Age : 29,
    EyeColor : "hazel",
    FullName : function(){return this.FistName + this.LastName;},
    FullNameLength : String(this.FullName).length

}
var myCar = new Object();

myCar.make = "Ford";
myCar.model = "Fusion";

var myPage = document.getElementById("objects");
window.onload = function(){
    myPage.innerHTML += 
    writeLine("FirstName",myObject.FistName) + 
    writeLine("LastName",myObject.LastName) + 
    writeLine("Age",myObject.Age) +
    writeLine("EyeColor",myObject.EyeColor) + 
    writeLine("FullName",myObject.FullName()) +
    writeLine("FullNameLength",myObject.FullNameLength);
}

function writeLine(str1,str2){
    return str1 + ": " + str2 + "<br/>"
}