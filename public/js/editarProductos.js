
const d = document;
$table = d.querySelector(".crud-table");
$form = d.querySelector(".crud-form");
$table = d.querySelector(".crud-table");
$template = d.getElementById("crud-template").content;
$fragment = d.createDocumentFragment();
editar = d.querySelector('.accion');

/* LEER LAS PETICIONES */

const getAll = async () => {
    try{
        let res = await fetch('/api/products');
        json = await res.json();

        if(!res.ok) throw{status: res.status, statusText: res.statusText};

        console.log(json);

        json.forEach((index)=>{
            $template.querySelector(".nombre").textContent = index.name;
            $template.querySelector(".id").textContent = index.id;
            $template.querySelector(".precio").textContent = index.price;
            $template.querySelector(".edit").dataset.id = index.id;
            $template.querySelector(".edit").dataset.nombre = index.name;
            $template.querySelector(".edit").dataset.precio = index.price;
            $template.querySelector(".eliminar").dataset.id = index.id;

            let $clone = d.importNode($template, true);
            $fragment.append($clone);

        });

        $table.querySelector("tbody").append($fragment);

    }catch(err){
        let message = err.statusText || "Ocurrio un error";
        $table.insertAdjacentHTML("afterend",`<p><b>Error ${err.status}: ${message} </b></p>`);
    }
}
d.addEventListener("DOMContentLoaded",getAll);

/* Delegacion de eventos para el crud */

d.addEventListener('submit', async e =>{

    if(e.target === $form){
        e.preventDefault();

        if(!e.target.id.value){
            //CREATE-POST
            try{
                let options = {
                    method:"POST",
                    headers:{
                        "Content-type": "application/json;charset=UTF-8"
                    },
                    body:JSON.stringify({
                        name:e.target.name.value,
                        price:e.target.price.value
                    })
                };

                let res = await fetch('/api/products',options);
                json = await res.json();

                //manipulacion del error
                if(!res.ok) throw{status: res.status, statusText: res.statusText};

                //recargar página despues de ver si hay algun error
                location.reload();
            }catch(err){
                let message = err.statusText || "Ocurrio un error";
                $form.insertAdjacentHTML("afterend",`<p><b>Error ${err.status}: ${message} </b></p>`);
            }
        }else{
            //ACTULIZACION UPDATE-PUT
            try{
                let options = {
                    method:"PUT",
                    headers:{
                        "Content-type": "application/json;charset=UTF-8"
                    },
                    body:JSON.stringify({
                        nombre:e.target.name.value,
                        precio:e.target.price.value
                    })
                };
                console.log(`${e.target.id.value}`);
                //añadimos a productos/ruta de el valor de el id de la variable = `${e.target.id.value}`
                let res = await fetch(`/api/products/${e.target.id.value}`,options);
                json = await res.json();

                //manipulacion del error
                if(!res.ok) throw{status: res.status, statusText: res.statusText};

                //recargar la pagina
                location.reload();

            }catch(err){
                let message = err.statusText || "Ocurrio un error";
                $form.insertAdjacentHTML("afterend",`<p><b>Error ${err.status}: ${message} </b></p>`);
            }
        }
    }
});

d.addEventListener('click', async e =>{
    if(e.target.matches(".edit")){
        editar.textContent = 'Editar';
        $form.nombre.value = e.target.dataset.nombre;
        $form.precio.value = e.target.dataset.precio;
        $form.id.value = e.target.dataset.id;
    }
    if(e.target.matches(".eliminar")){

        let isDelete = confirm(`Estas seguro de querer eliminar el producto ${e.target.dataset.id}?`);

        if(isDelete){
            //Delete - DELETE BORRAR PRODUCTO
            try{
                let options ={
                    method:"DELETE",
                    headers:{
                        "Content-type": "application/json;charset=utf-8"
                    }
                }

                let res = await fetch(`/api/products/${e.target.dataset.id}`,options)
                json = await res.json();

                //manipulacion del error
                if(!res.ok) throw{status: res.status, statusText: res.statusText};

                //recargar la pagina
                location.reload();

            }catch(err){
                let message = err.statusText || "Ocurrio un error";
                alert(`Error ${err.status}: ${message}`);
            }
        }
    }
})
