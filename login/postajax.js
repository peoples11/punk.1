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