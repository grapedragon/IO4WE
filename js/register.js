function chkName()
{
    var myName = document.getElementById("userName");
    
    var pos = myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/);
    
    if (pos != 0)
    {
        alert("The name you entered (" + myName.value + ") is not in the correct form.");
        myName.focus();
        myName.select();
        return false;
    }
    else
    {
        return true;   
    }
}

function chkPassword() 
{
    var init = document.getElementById("initial");
    if (init.value == "") 
	{
        alert("You did not enter a password \n" + "Please enter one now");   
        init.focus();
        return false;
    }
    else 
    {
        return true;
    }
}


