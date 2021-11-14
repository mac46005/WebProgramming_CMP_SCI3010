<!DOCTYPE html>
<!--
    What is AJAX?

    AJAX = Asynchonous Javascript and XML

    AJAX uses a combination of:
        A browser builtin XMLHTTPRequest object (to request data from a web server)
        Javascript and HTML FOM (to display or use the data)
    
    AJAX allows web pages to be updated asynchronously by exchanging data with a web
    server behind the scenes. This means that it is possible to update parts of a web
    page, without reloading the whole page
    **********************************

    How AJAX Works

    1. An event occurs in a web page (the page is loaded, a button is clicked)
    2. A XMLHttpRequest object is created by Javascript
    3. The XMLHttpRequest Object sends a request to a web server
    4. The server sends a response back to the web page
    5. The server sends a response back to the web page
    6. The response is read by Javascript
    7. Proper action (like page update) is performed by javascript
    **********************************

    The XMLHttpRequest Object

    All modern browsers (chrome, firefox, safari, and Opera) have a 
    built in XMLHttpRequest object

    Old Versions of internet explorers (IE5 and IE6) use an ActiveX object
    **********************************
    Same Original Policy

    For security reasons, modern browsers do not allow access across fomains.

    Under the policy, a web browser permits scripts contained in the first web page
    to access data in a second page, but only if both web pages have the same
    origin. An origin is defined as a ombination of URI scheme, hostname, and port number.
    This policy prevents a malicious script on one page from obtaining access to sensitive
    data on another web page through that page's DOM
    ***********************************

    XMLHTTPRequest object methods

    Method                          Description
    abort()                         Cancels the current request

    getAllResponseHeaders()         Returns header information

    getResponseHeader()             Returns specific header information

    open(method,uri,async,user,psw) Specifies the request
                                    method: the request type GET or POST
                                    usl: the file location
                                    async: true(asynchronous) or false(synchronous)
                                    user: optional user name
                                    psw: optional password

    send()                          Sends the request to the server
                                    Used for GET requests

    send(string)                    Sends the request to the server
                                    Used for POST requests

    setRequestHeader()              Adds a label/value pair to the header to be sent
    *****************************************

    XMLHttpRequest Object Properties

    Property                                Description
    onreadystatechange                      Defines a funtion to be called when the readyState property changes

    readyState                              Holds the status of the XMLHttpRequest.
                                            0: request to initialized
                                            1: sever connection established
                                            2: request recieved
                                            3: proccessing request
                                            4: request finished and response is ready

    responseText                            Returns the response data as a string

    responseXML                             Returns the response data as XML data

    status                                  Returns the status-number of a request
                                            200: "OK"
                                            403: "Forbidden"
                                            404: "Not Found"

    statusText                              Returns the status-text
    ***********************
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" onclick="loadDoc();">Change Content</button>

    <script type="text/javascript">
        var xhttp;
        if(window.XMLHttpRequest){
            xhttp = new XMLHttpRequest();
        }else{
            // code for IE6, IE5
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };

        function loadDoc(){
            //xhttp.open("GET","http://www.google.com",true);
            xhttp.open("GET","ajax.txt", true);
            //xhttp.open("GET", "ajax.txt?t=" + Math.random(),true);
            xhttp.setRequestHeader("Content-type","text/plain");
            xhttp.send();
        }
    </script>
</body>
</html>