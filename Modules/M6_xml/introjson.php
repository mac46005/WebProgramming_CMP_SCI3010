<!DOCTYPE html>
<!--
    JSON = Javascript object Notation

    JSON is a syntax for storing and exchanging data

    JSON is text, written with Javascript object notation

    JSON is text, and we can convert any Javascript object into JSON,
    and send JSON to the server

    We can also convert any JSON recieved from the server into Javascript objects

    This way we can work with the data as Javascript objects, with no complicated parsing
    and translation, unlike XML.

    JSON uses Javascript Synctax, but the JSON format is text only.
    Text can be read and used as data format by any programming language

    ********************************

    Why use JSON?

    Since the JSON format is text-only, it can easily be sent to and from a server,
    and used as data format by any programming language.

    Javascript has a built in function to convert a string, written in JSON format,
    into native Javascript objects: JSON.parse()

    WEb Browser Support for JSON.parse()
    -Firefox
    -Internet Explorer 8
    -Chrome
    -Opera
    -Safari

    So, if you recieve data from a server, in JSON format, you can use it like any other Javascript object.

    **********************************
    JSON Syntax Rules

    Data in in name / value pairs

    Data is separated by commas

    Curley braces hold objects

    Square brackets hold arrays

    {"employee":[
        {"firstName":"John","lastName":"Doe"},
        {"firstName":"Jose","lastName":"Preciado"},
        {"firstName":"Marco","lastName":"Preciado"}
        ]}
    var jsonObject = JSON.parse(
       {"employee":[
        {"firstName":"John","lastName":"Doe"},
        {"firstName":"Jose","lastName":"Preciado"},
        {"firstName":"Marco","lastName":"Preciado"}
        ]} 
    )
    var jonesValue = jsonObject.employees[2].lastName;
    ************************

    JSON vs XML

    Both JSON and XML can be used to recieve data fro a web server.

    JSON is like XML because:
    - Both JSON and XML are "self descibing" (human readable)
    - Both JSON and XML are hierarchical (values within values)
    - Both JSON and XML can be parsed and used by lots of programming languages
    - Both JSON and XML can be fetched with an XMLHttpRequest

    JSON is Unlike XML because
    - JSON doesnt use end tag
    - JSON is shorter
    - JSON is quicker to read and write
    - JSON can use arrays

    XML has to be parsed with an XML parser. JSON can be parsed by a standard Javascript function

    For AJAX applications, JSON is faster and easier than XML:

    Using XML
    - Fetch an XML document
    - Use the XML DOM to loop through the document
    - Extract values and store in variables

    Using JSON
    - Fetch a JSON string
    - JSON.Parse the JSON string
    **************************************************

    JSON Data Types

    In JSON keys must be strings, written with double quotes:
    {"name":"Marco"}

    In JSON, values must be one of the following data types:
    - a string
    - a number
    - an object (JSON object)
    - an array
    - a boolean
    - null

    JSON values cannot be oe of the following data types:
    - a function
    - a date
    - undefined

    JSON Strings

    Strings in JSON must be written in double quotes.
    {"name":"Marco"}

    JSON Numbers

    Numbers in JSON must be an integer or a floating point.
    {"age":30}

    JSON Objects

    Values in JSON can be objects.
    {
        "employee":{"name":"Marco","age":30,"city":"SomeCity"}
    }

    JSON Arrays
    Values in JSON can be Arrays
    {
        "employee":["John","Marco","Jose"]
    }

    JSON Booleans
    Values in JSON can be true/false
    {"sale":true}

    JSON null
    Values in JSON can be null
    {"middleName":null}
    ********************************************

    JSON Objects

    JSON objects are surrounded by curly braces {}.
    JSON objects is written in key/value pairs.
    Keys must be strings, and values must be a valid JSON data type
    (string,number, object, array, boolean or null).
    Keys and values are separated by a colon.
    Each key/value pair is separated by a comma
    *****************************************
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="demo1">Access using dot (.): </p>
    <p class="demo2">Access using bracket ([]):</p>
    <p class="demo3">Loop keys: </p>
    <p class="demo4">Loop values: </p>
    <p class="demo5">AccessD nested using dot (.): </p>
    <p class="demo6">Access nested using brackets ([]): </p>
    <p class="demo7">JSON parse loop keys: </p>
    <p class="demo8">JSON parse loop values: </p>
    <p class="demo9">JSON Ajax response: </p>
    
    <script type="text/javascript">
        //You can access the object by using dot (.) notation:
        var myObj = JSON.parse('| "name":"John", "age":30, "car":null|');
        //myObj = { "name":"John","age":30,"car":null};
        x = myObj.name;
        document.getElementById("demo1").innerHTML += x;

        //You can also access the object values by using brackets ([]) notation:
        x = myObj["age"];
        document.getElementById("demo2").innerHTML += x;

        //You can loop through the object properties by using the for-in loop:
        for(x in myObj){
            document.getElementById("demo3").innerHTML += x + " : ";
        }

        for(x in myObj){
            document.getElementById("demo4").innerHTML += myObj[x] + " : ";
        }

        //Values in a JSON object can be another JSON object
        myObj = {
            "name" : "Marco",
            "age" : 29,
            "cars": {
                "car1":"Ford",
                "car2":"FIAT",
                "car3":"Nissan"
            }
        }

        //You can access nested JSON objects by using the dot notation or brackets notation:
        x = myObj.cars.car3;
        document.getElementById("demo5").innerHTML += x;
        //or
        x = myObj.cars["car1"];
        document.getElementById("demo6").innerHTML += x;

        var obj = JSON.parse('|"name":"John","age":40,"city":"LA"|');
        for(x in obj){
            document.getElementById("demo7").innerHTML += x + " : ";
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var myArr = JSON.parse(this.responseText);
                console.debug("myArr: "  + myArr);
                console.debug("myArr.cars: " + myArr.cars);
                console.debug("myArr.cars[0].Ford: " + myArr.cars[0].Ford);
                document.getElementById("demo9").innerHTML += myArr.cars[0].Ford;
            }
        }
        xmlhttp.open("GET","json_demo_array.txt",true);
        xmlhttp.send();
    </script>
</body>
</html>