function chkName()
{
    var myName = document.getElementById("custName");
    
    var pos = myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/);
    
    if (pos != 0)
    {
        alert("The name you entered (" + myName.value + ") is not in the correct form. \n" +    "The correct form is: "+ "last-name, first-name, middle-initial \n" + "Please go back and fix your name");
        myName.focus();
        myName.select();
        return false;
    }
    else
    {
        return true;   
    }
}