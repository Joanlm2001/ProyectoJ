

const d = document;
let divContainer = document.querySelector('.container-users');




/* LEER PETICION API REST */

const getAllUsers = async () => {

    try{
        let res = await fetch('/api/user');
        json = await res.json();
        console.log(json);
        json.forEach((users)=>{


            let ul = d.createElement('ul');


        });
    }catch(err){
        let message = err.statusText || "Ocurrio un error";
        divContainer.insertAdjacentHTML("afterend",`<p><b>Error ${err.status}: ${message} </b></p>`);
    }
}

getAllUsers();
