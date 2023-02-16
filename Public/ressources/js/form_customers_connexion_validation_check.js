//Ajax check connexion validation

let res=document.querySelector("#res_connexion");
let login_form=document.querySelector("#login_form");
let result=document.querySelector(".resultt_connexion");
let iconeverify=document.querySelector('.icone-verify-connexion')

function serialize(form){
    let requestArray=[];
    form.querySelectorAll('[name]').forEach((element) => {
        if(element.name!=="viewport" && element.name!=="submit"){
            requestArray.push(element.name+ '=' + element.value);
        }
    });
    if(requestArray.length>0){
        return requestArray.join('&');
    }else{
        return false;
    }
}


login_form.addEventListener('submit', function(event){
    event.preventDefault();
    let xhttp= new XMLHttpRequest();
    let form_url="/RequestHandler/validationLogin";
    let parameters=serialize(login_form);
    console.log(parameters);
    xhttp.open("POST", form_url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange=function(){
        //En cas d'erreur
        if(xhttp.readyState==4 && xhttp.status==200){  
            console.log(xhttp.responseText);
            res.innerHTML=xhttp.responseText;
            if(xhttp.responseText=="Connexion client réussi" ){
                iconeverify.setAttribute('src', "../ressources/svg/check.svg")
                setTimeout(() => {
                    window.location.href="/";
                }, 2000);        
            }else if(xhttp.responseText=="Connexion admin réussi"){
                iconeverify.setAttribute('src', "../ressources/svg/check.svg");
                setTimeout(() => {
                    window.location.href="/AdminControllers/getAllCustomers";
                }, 2000); 
            }         
        }
    }
    xhttp.send(parameters);
    result.style.display="inline-block";

});


/***********form connexion validation check */