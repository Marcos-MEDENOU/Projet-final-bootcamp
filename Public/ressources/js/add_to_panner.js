//code add to paner
let panner_value=document.querySelector("#panner_value");
window.addEventListener("DOMContentLoaded", function(elems){
        let form_submit=document.querySelectorAll("#product_form");
    //function encode form element at submit 
    function serialize(form){
        let requestArray=[];
        form.querySelectorAll('[name]').forEach((element) => {
            if(element.name!=="viewport" && element.name!=="submit" && element.name!=="add_to_cart"){
                requestArray.push(element.name+ '=' + element.value);
            }
        });
        if(requestArray.length>0){
            return requestArray.join('&');
        }else{
            return false;
        }
    }
    // onClick form=> ajax execute
form_submit.forEach(function(el, index){
    el.addEventListener('submit', function(event){
            event.preventDefault();
            let xhttp= new XMLHttpRequest();
            let form_url="/ProductsControllers/updateUserProducts";
            let parameters=serialize(el); 
            xhttp.open("POST", form_url, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange=function(){
                //Interception de la reponse et execution d'une instruction en javaScript
                 if(xhttp.readyState==4 && xhttp.status==200){
                     if(Number(xhttp.responseText) ){
                        let response= xhttp.responseText;
                        panner_value.innerHTML=response;
                    }else{
                        let response= 0;
                        panner_value.innerHTML=response;
                    }      
                    console.log(xhttp.responseText);      
                }     
            }
        xhttp.send(parameters);        
    });
})

})




/******************nav products  ******/

// let prod_cat=document.querySelectorAll(".prod_cat>*");

// prod_cat.forEach(function(element){
//     element.addEventListener("click", function(e){
//         e.preventDefault();
//         element.style.backgroundColor="var(--red)"

//     })
// })
