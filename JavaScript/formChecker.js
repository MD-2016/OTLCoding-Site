/*
 * Form Checker for user input
 * Jay
 * 5/4/2012
 */

function validateForm(formname)
{
	if(!chkText(formname.firstname.value))
	{
		alert("Please enter your first name");
		formname.firstname.focus();
		formname.firstname.select();
		return false;
	}
	if(!chkText(formname.lastname.value))
	{
		alert("Please enter your last name");
		formname.lastame.focus();
		formname.lastname.select();
		return false;
	}
	if(!chkText(formname.email.value))
	{
		alert("Please enter your email");
		formname.email.focus();
		formname.email.select();
		return false;
	}
	if(!chkText(formname.subject.value))
	{
		alert("Please enter your subject");
		formname.subject.focus();
		formname.subject.select();
		return false;
	}
	if(!chkText(formname.message.value))
	{
		alert("Please enter your message");
		formname.message.focus();
		formname.message.select();
		return false;
	}
	if(!chkEmail(formname.email.value))
	{
		alert("Please enter a vaild email address");
		formname.email.focus();
		formname.email.select();
		return false;
	}
	return true;
}
// Test that Text field was not left empty:
function chkText(EltValue) //Text verification
{
    if (EltValue == "") //Value empty?
    {
        return false;
    }
    return true; //Text was entered!
}
function chkEmail(var mail, var atpos, var dotpos)
{
	atpos = mail.indexOf("@");
	dotpos = mail.lastIndex(".");
	if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= mail.length)
    {
	  return false;
	}
	return true;
}
