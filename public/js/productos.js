/* Se ha cambiado */

const d = document;

let categoria = d.querySelector('.categoria');
let divContainer = d.querySelector('#container-products');
console.log('ie');
let cat = 0;

if(categoria.value === 'Muebles'){
    cat = 1;
}else if(categoria.value === 'Espejos'){
    cat = 2;
}else if(categoria.value === 'Accesorios'){
    cat = 3;
}else if(categoria.value === 'Patas'){
    cat = 4;
}

/* LEER PETICION API REST */

const getAll = async () => {
    try{
        let res = await fetch('/api/products');
        json = await res.json();
        console.log(json);
        json.forEach((productos)=>{
            let article = d.createElement('article');
            let divImg = d.createElement('div');
            let linkImg = d.createElement('a');
            let img = d.createElement('img');
            /* ------------------------------------ */
            let tituloProducto = d.createElement('h1');
            let linkH1 = d.createElement('a');
            /* ------------------------------------- */
            let descripcion = d.createElement('p');
            /* --------------------------------------- */
            let precio = d.createElement('p');
            /* --------------------------------------- */
            let divBoton = d.createElement('div');
            let boton = d.createElement('button');
            /* ---------------------------------------- */
            /* AÑADIR DATOS A LOS CAMPOSS */
            linkImg.href = '/inventado/inventado';
            img.src = '';
            linkH1.textContent = productos.name;
            linkH1.href = '/sas/asas'
            descripcion.textContent = "aqui irá la desc del producto";
            precio.textContent = productos.price;
            boton.textContent = "Añadir al carrito";
            /* AÑADIMOS TODO A LA PÁGINA */
            divImg.append(linkImg);
            linkImg.append(img);
            tituloProducto.append(linkH1);
            divBoton.append(boton);
            article.append(divImg,tituloProducto,descripcion,precio,divBoton);
            divContainer.append(article);
        });
    }catch(err){

    }
}

getAll();

