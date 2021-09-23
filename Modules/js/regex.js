/*
Regular expressions in javascript start and end with / your expression here /
MODIFIERS
g   Performs a global match (find all matches rather than stopping after the first match)
i   Perform case-insensitive matching
m   Perform multiline matching

BRACKETS
[abc]   Find any character between the brackets
[^abc]  Find any character NOT between the brackets
[0-9]   Find any character between the brackets (any digit)
[^0-9]  Find any character NOT between the brackets (any non-digit)
(x|y)   Find any of the alternatives specified

METACHARACTERS
.   Find a single character, except newline or line terminator
\w  Find a word character 
\W  Find a non-word character
\d  Find a digit
\D  Find a non digit character
\s  Find a whitespace character
\S  Find a non whitespace character
\b  Find a match ar the beginning / end of a word
\B  Find a match not at the beginning / end of a word
\0  Find a NULL character
\n Find a new line character
\f  Find a form feed character
\r  Find a carriage return character
\t  Find a tab character
\v  Find a vertical tab character
\xxx    Find the character specified by an octal number xxx
\xdd    Find the character specified by a hexadecimal number dd

QUANTIFIER
n+  Matches any string that contains at least one n
n*  Matches any string that contains zero or more occurrences of n
n?  Matches any string that contains zero or one occurrence of n
n{x}    Matches any string that contains a squence of X n's
n{x,y}  Matched any string that contains a sequence of x to y's n's
n{x,}   Matches any string that contains a sequence of at least x n's
n$  Matches any string with n at the end of it
^n  Matches any string with n at the beginning of it
?=n matches any string that is followed by a specific string n
?!n Matches any string that is not followed by a specific string n

 
 */

function checkEmail(ele){
    console.debug("Checking email!");

    var emailValue = String(ele.value).trim();
    console.debug("value " + emailValue);

    console.debug(
        emailValue.search(/^\S+\@\S+\.\S+$/)
    )
    var index = emailValue.search(/^\S+\@\S+\.\S+$/);

    if(index > -1){
        var pEle = document.getElementById("msg");
        if(pEle){
            pEle.innerHTML = "Valid email";
            pEle.classList.add("valid");
        }
    }else{
        var pEle = document.getElementById("msg");
        if(pEle){
            pEle.innerHTML = "Invalid email!";
            pEle.classList.remove("valid");
            pEle.classList.add("invalid");
        }
    }
}