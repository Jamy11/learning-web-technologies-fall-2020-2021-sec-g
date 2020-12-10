function formvalidation()
{
    let name = checkName();
    let email = checkEmail();
    let gender = checkGender();
    let dob = checkDob();
    let blood = checkBlood();
    let degree = checkDegree();

    if(name == true && email == true && gender == true && dob == true && blood == true && degree == true)
    {
        alert('All done');
        return true;
    }
    else
    {
        alert('Try again');
        return false;
    }

}

function checkName()
{
    let obj = document.getElementById('name').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}

// function checkEmail()
// {
//     let obj = document.getElementById('email').value;
//     if(obj != '')
//     {
//         return true;
//     }
//     else{
//         return false;
//     }
// }

function checkEmail()
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
    else
    {
        document.getElementById("emailDiv").innerHTML = "*Valid";
        return true; 
    }

}


function checkGender()
{
    let obj1 = document.getElementById('gender1').value;
    let obj2 = document.getElementById('gender2').value;
    let obj3 = document.getElementById('gender3').value;
    let gen;

    if (obj1 !='')
    {
        gen =obj1;
    }

    if (obj2 !='')
    {
        gen =obj2;
    }

    if (obj3 !='')
    {
        gen =obj3;
    }


    if(gen != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkDob()
{
    let obj = document.getElementById('dob').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkBlood()
{
    let obj = document.getElementById('blood').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkDegree()
{
    let obj1 = document.getElementById('deg1').value;
    let obj2 = document.getElementById('deg2').value;
    let obj3 = document.getElementById('deg3').value;
    let deg;

    if (obj1 !='')
    {
        deg += obj1;
    }

    if (obj2 !='')
    {
        deg +=obj2;
    }

    if (obj3 !='')
    {
        deg +=obj3;
    }

    if(deg != '')
    {
        return true;
    }
    else{
        return false;
    }
}


