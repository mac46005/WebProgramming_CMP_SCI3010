/*
ECMAScript 2015
ES2015 introduced two important new Javascript keywords: let and const. There two keywords provide block scope variables (and constant)
in Javascript. Before ES2015, Javascript had only two types of scope: Global and Function Scope.

Variables declared with the var keyword cannot have Block scope. Variables declared inside a block{} can be accessed from outside the block

{
    var x = 3;
}
x CAN be used here
 */

function varScope(){
    var x = 2;
}
x = 3;//x can be accessed outside of block

function blockScope(){
    let z = 2;
    const y = 4;
}
// z,y cannot be accessed outside of blockScope

//Hoisting
//Variables defined with var are hoisted to the top and can be initialized at any time. Meaning: you can use the variable before it is declared. This is ok:
carName = "Volvo";
alert(carName);
var carName;
// Variables defined with let and const are hoisted to the top of the block, but not initalized. Meaning: The block of code is aware of the variable, but cannot be used intil it has been declared. Using a let or const variable before it is declared will result in a ReferenceError. The variable is in a "temporal dead zone" from the start of the block until it is declared. This will result in a ReferenceError

let carName;

//Constant, but not really
//The keyword const is a little misleading. It does NOT define a constant value. It defines a constant reference to a value. Because of this, we cannot change constant primitive values, but we can change the properties of constant objects
//If we assign a primitive value to a constant, we cannot change the primitive value:
const car = {type:"Fiat",model:"500",color:"white"};
car.type = "shit";
car.owner = "marco";
car = {type:"o"};//<=error

const cars = [car,car,car];
cars[0].color;
cars = [{type:"fiat"}]//<=error cannot reassign new cars object