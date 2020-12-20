function checkEname()
{
    let obj = document.getElementById('ename').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}



function checkCno()
{
    let obj = document.getElementById('c_no').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}



function checkUn()
{
    let obj = document.getElementById('un').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}



function checkPass()
{
    let obj = document.getElementById('pass').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function formvalidation(){
    let obj1 = checkEname();
    let obj2 = checkCno();
    let obj3 = checkUn();
    let obj4 = checkPass();

    if(obj1 == true && obj2 == true && obj3 == true && obj4 == true)
    {
        return true;
    }
    else{
        alert("Fill the form");
        return false;
    }
}