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
    
    document.getElementById("myForm").onsubmit = chkPassword;
}
