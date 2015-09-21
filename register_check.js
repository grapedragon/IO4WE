function chkName()
{
    var myName = document.getElementById("firstName");
    var mySurname = document.getElementById("surnameName");
    var myInitial = document.getElementById("middleInitial")
    
    //var pos = myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/);
    var namePos = myName.value.search(/^[A-Z][a-z]+/);
    var surnamePos = mySurname.value.search(/^[A-Z][a-z]+/);
    var initialPos = myInitial.value.search(/?[A-Z]\.?$/);
    
    if (namePos != 0)
    {
        alert("The name you entered (" + myName.value + ") is not in the correct form. \n" + "Please go back and fix your name");
        myName.focus();
        myName.select();
        return false;
    }
    if (surnamePos != 0)
    {
        alert("The name you entered (" + mySurname.value + ") is not in the correct form. \n" + "Please go back and fix your name");
        mySurname.focus();
        mySurame.select();
        return false;
    }
    if (initialPos != 0)
    {
        alert("The name you entered (" + myInitial.value + ") is not in the correct form. \n" + "Please go back and fix your name");
        myInitial.focus();
        myInitial.select();
        return false;
    }
    else
    {
        return true;   
    }
}
