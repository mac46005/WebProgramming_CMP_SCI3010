function registerEvents(){
    /*
    Notice that only the name of the handler function is assigned
    to the property. It is neither a string nor a call to the funtion

    There is no way to specify parameters on the handler function when 
    it is registered by assigning its name to the event property.
    Therfore, event handlers that are registered this way cannot use parameters
    */
   document.getElementById("thirdButton").onclick = sendAlert;
   /*Can pass in a value if using an anonymous function like so...

   onclick = functiion(){sendAlert(this.value)}
    */
}
function sendAlert(val){
    alert("You clicked my button!" + val);
}