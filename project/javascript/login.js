const users= ["idan94","zivan94","hen89","hadas98","daniel95","adar97"]

function trytosignin(){
    var username =document.getElementById("username").value;
    var password =document.getElementById("password").value;
    
    for(var i=0;i<users.length;i++){

        if(username==users[i] && password=="123"){
            alert("Login successfully");
            location.replace('home.html');
            return true;
            }
    
    }
   
        alert("Login Faild");
         return false;
    
    }
