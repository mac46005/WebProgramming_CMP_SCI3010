function chkPasswords(){
    var init = document.getElementById("initial");
    var sec = document.getElementById("second");

    if(init.value == ""){
        var initDiv = document.getElementById("passDiv");
        if(initDiv){
            initDiv.classList.add("border-danger");
            initDiv.classList.remove("has-validation");
        }

        var initErr = document.getElementById("passErr");
        if(initErr){
            initErr.classList.remove("visually-hidden");
            initErr.classList.add("show");
        }

        return false;
    }
    else{
        var initDiv = documet.getElementById("passDiv");
        if(initDiv){
            initDiv.classList.remove("border-danger");
            initDiv.classList.add("has-validation");
        }
        var initErr = document.getElementById("passErr");
        if(initErr){
            initErr.classList.add("visually-hidden");
            initErr.classList.remove("show");
        }
    }

    // Check password confirmation
    if(init.value != sec.value){
        var secDiv = document.getElementById("verPassDiv");
        if(secDiv){
            secDiv.classList.add("border-danger");
            secDiv.classList.remove("has-validation");
        }
        var secErr = document.getElementById("verPassErr");
        if(secErr){
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }
        return false;
    }
    else{
        var secDiv = document.getElementById("verPassDiv");
        if(secDiv){
            secDiv.classList.remove("border-danger");
            secDiv.classList.add("has-validation");
        }
        var secErr = document.getElementById("verPassErr");
        if(secErr){
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }

        var subBtn = document.getElementById("submitButton");
        if(subBtn){
            subBtn.disabled = false;
        }
        return true;
    }
    return false;
}

function registerHandlers(){
    document.getElementById("second").onblur = chkPasswords;
    document.getElementById("myForm").onsubmit = chkPasswords;
}