// JavaScript Document

function validatio()
{
	if(document.frm.name.value=="") //document.getElementById('name')
	{
		//alert('Enter Name');
		document.getElementById('name_error').innerHTML='Enter Name';
		return false;
	}
	
	var x=/^[a-zA-Z]{1,20}$/;
	if(!document.frm.name.value.match(x))
	{
		alert('Please enter alphabets only in first name');
		return false;
	}
	
	
	if(document.frm.email.value=="")
	{
		alert('Enter Email');
		return false;
	}
	
	var y=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!document.frm.email.value.match(y))
	{
		alert('Enter Valid Email');
		return false;
	}
	if(document.frm.subject.value=="")
	{
		alert('Enter subject');
		return false;
	}
	
	var x=/^[a-zA-Z]{1,20}$/;
	if(!document.frm.subject.value.match(x))
	{
		alert('Please enter alphabets in subject');
		return false;
	}
	if(document.frm.msg.value=="")
	{
		alert('Enter message');
		return false;
	}
	
	
	
	
	return true;
}


