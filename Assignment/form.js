function validateEmail(){
    var emailAddress = document.getElementById("lblEmail").value;
    
    var atSymbol = emailAddress.indexOf("@"); 
    var dotSymbol = emailAddress.lastIndexOf("."); 
    var spaceSymbol = emailAddress.indexOf(" "); 

    if ((atSymbol != -1) && 
        (atSymbol != 0) && 
        (dotSymbol != -1) && 
        (dotSymbol != 0) && 
        (dotSymbol > atSymbol + 1) && 
        (emailAddress.length > dotSymbol + 1) && 
        (spaceSymbol == -1)){
           document.getElementById("msgEmail").innerHTML = "";
        }
        else{
           document.getElementById("msgEmail").innerHTML = "Please enter valid email";
        }
}

function ageInsert(){
    var age = document.getElementById("lblAge").value;
    
    if(age !=0){
        document.getElementById("msgAge").innerHTML = "";
    }
    else{
        document.getElementById("msgAge").innerHTML = "Age must be +ve number";
    }
}