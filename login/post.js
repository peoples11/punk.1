var xmlHttp=createxmlHTTPRequest();

function createxmlHTTPRequest(){
	
	try{
		xmlHttp=new XMLHttpRequest;
	}catch(e){
		xmlHttp=false;
	}
	if(!xmHttp){
		alert("err1");
	}else{
		return xmlHttp;
	}
	
}

function post_sync(){
	if(getElementsByName("post")[0].value==''){
		alert("u must post something");
		return false;
	}else if(xmlHttp.readyState==4||xmlHttp.readyState==0){
		ip=document.getElementsByName("post")[0].value;
		xmlHttp.onreadyStateChange=handleresponse();
		xmlHttp.open("GET","http://localhost/posturself/ur_prof2.php?ip="+ip,true);

		xmlHttp.send();
		xmlHttp.onreadyStateChange=handleresponse();

}












