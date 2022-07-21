
	function myFun(){
       
       document.querySelector("#submit").addEventListener("click",function(){
        var x = document.querySelector("#email").value;
        var y = document.querySelector("#password").value;
        var z = document.querySelector("#name").value;
        var t = document.querySelector("#last").value;

        if(x!="" && y!="" && z!="" && t!=""){
            return true;
            alert("Sign up succesful");
        }else{
            alert("Please Enter all of the fields");
            
        }
        
    }); 
        
        }