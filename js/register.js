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
	
	var pos2 = init.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/);
	
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

function chkPhone() 
{
  var myPhone = document.getElementById("telephone");
  
  var pos = myPhone.value.search(/^\d{3}-\d{3}-\d{4}$/);

  if (pos != 0) 
  {
    alert("The phone number you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The correct form is: ddd-ddd-dddd \n" +
          "Please go back and fix your phone number");
    return false;
  } 
  else
    return true;
}


