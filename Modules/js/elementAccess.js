window.onload = function(){
    /*The DOM address of the button in this example,
    using the forms and elements arrays is as follows */
    var dom = document.forms[0].elements[0];
    console.log(dom);

    /*Using the name attributes, the button's DOM address is as follows */
    dom = document.myForm.turnItOn;
    console.log(dom);

    /*If the id attribute of our button is set to "turniton" 
    the following could be used to get the DOM address of that button element:
    */
   dom = document.getElementById("turnItOn");
   console.log(dom);

   /*If the name attribute of our checkboxes is set to "vehicles" 
   the following could be used to get the DOM address of those element:*/
   dom = document.getElementsByName("vehicles");
   console.log(dom);
}