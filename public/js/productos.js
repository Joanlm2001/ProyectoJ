/* Se ha cambiado */

const d = document;

let categoria = d.querySelector('.categoria');
let categoriaProducto = categoria.textContent;
categoria.textContent = categoria.textContent.toLocaleUpperCase();
let divContainer = d.querySelector('#container-products');




/* LEER PETICION API REST */

const getAll = async () => {

    try{
        let res = await fetch('/api/products');
        json = await res.json();
        console.log(json);
        json.forEach((productos)=>{
            if(productos.category === categoriaProducto){

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
                linkH1.textContent = productos.name;
                descripcion.textContent = productos.description;
                precio.textContent = productos.price;
                boton.textContent = "Añadir al carrito";
                /* AÑADIMOS LAS CLASES*/
                linkImg.className = "products";
                img.className = "img-products";
                linkH1.className = 'nombre-producto';
                descripcion.className = 'descripcion-producto';
                precio.className = 'precio-producto';
                /*AÑADIR SRC/ALT/ENLACES ECT*/
                linkImg.href = '#';
                img.title = 'Ver producto'
                img.alt = `Foto de ${productos.name}`;
                img.src = '#';
                linkH1.href = '#';
                boton.src = '#'
                /* AÑADIMOS TODO A LA PÁGINA */
                divImg.append(linkImg);
                linkImg.append(img);
                tituloProducto.append(linkH1);
                divBoton.append(boton);
                article.append(divImg,tituloProducto,descripcion,precio,divBoton);
                divContainer.append(article);
            }
        });
    }catch(err){

    }
}

getAll();

