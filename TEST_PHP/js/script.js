"use strict"

function validateName()
{
    let name = document.getElementById("name").value;

    if (name == "")
    {
        
        document.getElementById("nameDiv").innerHTML = "*required";
        return false;
    }
        
    else
    {
        if (name.split(" ").length < 2 && !(name.toLowerCase() != name.toUpperCase()))
        {
            
            document.getElementById("nameDiv").innerHTML = "*invalid";
            return false;
        }

    }

    
}



function validateEmail()
{
    let email = document.getElementById("email").value;

    if (email == "")
    {
        document.getElementById("emailDiv").innerHTML = "*required";
        return false;
    }

    var at = email.indexOf("@");
    var dot = email.lastIndexOf("\.");
    if (!(email.length > 0 && at > 0 && email[at + 1] !== "." && dot > at + 1 && dot < email.length && email.indexOf(" ") === -1 && email.indexOf("..") === -1))
    {
        document.getElementById("emailDiv").innerHTML = "*invalid";
        return false;
    }

}
