function enableButton()
{
	if (document.getElementById ("contact-policy").checked)
	{
		document.getElementById ("contact-submit").disabled = false;
	}
	else
	{
		document.getElementById ("contact-submit").disabled = true;
	}
}