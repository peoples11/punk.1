var err = 0;

var xmlHttp = createxmlHttpobject();

function createxmlHttpobject(){
	
	try{
		xmlHttp= new XMLHttpRequest();
	}catch(err){
		xmlHttp= false;
	}
	if(!xmlHttp){
		alert ("err1");
	}else{
		return xmlHttp ;
	}
}

function process(){
	if(ip=document.getElementsByName("uname")[0].value==''){
		document.getElementById("change").innerHTML="Enter a Username";
		setTimeout(process,100)
	}
	else if(xmlHttp.readyState==4||xmlHttp.readyState==0){
		ip=document.getElementsByName("uname")[0].value;
		xmlHttp.onreadyStateChange=handleresponse();
		xmlHttp.open("GET","http://localhost/punk.1/signup/checkuser.php?ip=" + ip,true);

		xmlHttp.send();
		xmlHttp.onreadyStateChange=handleresponse();

		kill=setTimeout(process,100);
	}
	
}

function handleresponse(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			xmlresponse=xmlHttp.responseText;
			document.getElementById("change").innerHTML=xmlresponse;
			if(xmlresponse=='problem'){
				err++;
			}
			
			
		}else{
			setTimeout(process,100);
		}
	}else{
			setTimeout(process,100);
		}
}

function kill_func(){
	clearTimeout(kill);
}

function con_passB(){
	var pass1;var pass2;
	pass1=document.getElementsByName("pword")[0].value;
	pass2=document.getElementsByName("pword2")[0].value;
	if(pass1==pass2 && pass1!=''){
		document.getElementsByName("con_pass")[0].innerHTML="<span style='color:green;'>&#10004</span>";
	}else if(pass1==pass2 && pass1==''){
		
	}
	else{
		document.getElementsByName("con_pass")[0].innerHTML="<span style='color:red;'>Password doesn't match the above</span>";
		err++;
	}
	
}

function con_passA(){
	var pass1;
	pass1=document.getElementsByName("pword")[0].value;
	if(pass1==''){
		alert("Enter a password first");
		document.getElementsByName("pword")[0].focus();
	}
}

function validation(){
	
	
	if(document.getElementsByName("firstname")[0].value==''){
	return false;}
	 if(document.getElementsByName("lastname")[0].value==''){
	 return false;}
	 if(document.getElementsByName("uname")[0].value==''){
	 return false;}
	 if(document.getElementsByName("pword")[0].value==''){
	 return false;}
	 if(err>0){
		 return false;
	 }
}	
	
function funky(){
   this.style.position='relative';
		  this.style.top='-3px';
		  this.style.left='-3px';}	






