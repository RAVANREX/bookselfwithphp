// JavaScript Document

function validation()
{
	if(document.frm.name.value=="") //document.getElementById('name')
	{
		//alert('Enter Name');
		document.getElementById('name_error').innerHTML='Enter Name';
		return false;
	}
	
	var x=/^[a-zA-Z]{1,20}$/;
	if(!document.frm.fname.value.match(x))
	{
		alert('Please enter alphabets only in first name');
		return false;
	}
	
	var x=/^[a-zA-Z]{1,20}$/;
	if(!document.frm.lname.value.match(x))
	{
		alert('Please enter alphabets only in last name');
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
	
	if(document.frm.pass.value=="")
	{
		alert('Enter Password');
	    return false;
	}
	
	var z=/\w{6,25}/;
	if(!document.frm.pass.value.match(z))
	{
		alert('Password minimum 6');
		return false;
	}
	if(document.frm.pwd.value=="")
	{
		alert('Re-Enter Password');
	    return false;
	}
	
	
	if(!document.frm.pwd.value.match(#pass))
	{
		alert('Re-Entered Password must be same');
		return false;
	}
	
	if(document.frm.phn.value=="")
	{
		alert('Enter Phone No');
		return false;
	}
	
	var ph=/^\d{10}$/;
	
	if(!document.frm.phn.value.match(ph))
	{
		alert('Enter Valid 10 digit mobile no');
		return false;
	}
	
	
	
	if(document.frm.gender[0].checked==false && document.frm.gender[1].checked==false)
	{
		alert('Specify gender');
		return false;
	}
	if(document.frm.sq.selectedIndex=="")
	{
		alert('Select question');
		return false;
	}
	if(document.frm.sans.value=="")
	{
		alert('Enter Ans');
		return false;
	}
	if(document.frm.dob.value=="")
	{
		alert('Enter date of birth');
		return false;
	}
	
	
	
	
	return true;
}


