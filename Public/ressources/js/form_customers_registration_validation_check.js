
let res=document.querySelector("#res");

let register_form=document.querySelector("#register_form");

let result=document.querySelector(".resultt");

let iconeverify=document.querySelector('.icone-verify')

//Une fonction qui retourne les elements soumis a travers le formulaire sauf ceux ayant 
//un attribut de type viewport ou sumit
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

//Code ajax;
register_form.addEventListener('submit', function(event){
    event.preventDefault();
    let xhttp= new XMLHttpRequest();
    let form_url="/RequestHandler/validationRegister";
    let parameters=serialize(register_form);
    xhttp.open("POST", form_url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange=function(){
        //En cas d'erreur
        
        if(xhttp.readyState==4 && xhttp.status==200){
            //message retourner par le serveur , ici le fichier php
            // this.setCustomValidity(xhttp.responseText);
            console.log(xhttp.responseText);
            res.innerHTML=xhttp.responseText;     
            
            if(xhttp.responseText=="Inscription réussi"){
                iconeverify.setAttribute('src', "../ressources/svg/check.svg ")
                setTimeout(() => {
                    window.location.href="/HomeControllers/Login";
                }, 2000);
            }
        }
    }
    xhttp.send(parameters);
    result.style.display="inline-block";

});


/***********form inscription validation check */


/***********form validation check end */






