var x = 5;
var y = 4;
var z = 3;

function ifStatement(){
    if(x > y){
        return true;
    }else{
        return false;
    }
}
function switchStatement(someShit){
    var isTrue = true;

    switch(someShit){
        case someShit > x:
        isTrue = true;
        break;

        case someShit < x:
        isTrue = false;
        break;
    }
}
function whileStatement(){
    while(x > y){
        //this while go forever
    }
}

function doStatement(){
    do{
        //goes forever
    }while(x > y)
}

function doFunction(){
    for(var x = 1; 100 > x; x++){
        console.log(x);
    }
}
