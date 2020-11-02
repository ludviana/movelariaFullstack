const product = window.document.getElementsByClassName("produto");
const categorias = window.document.getElementsByClassName("categorias")


// seleciona os produtos por categoria
function categ(categoria){

    for(let i=0; i<product.length; i++){
        if(categoria == product[i].id){
            product[i].style = "display:block";
        } else{
            product[i].style = "display:none"; 
        }
    }
};

// exibe todos os produtos novamente
function todos(){
    for(let i=0; i<product.length; i++){
        product[i].style = "display:block";
    }
};



function entrei(){
    console.log("entrei")
}

function sai(){
    console.log("sai")  
}


/*
Primeira forma de Menu dinamico da minha vida 


// coleta todos os arrays
let todosarmarios = [

 guardaroupa = [],
 cozinha = [],
 painelTV = [],
 armarioAlto = [],
 armarioPequeno = []

];

// conta quantos itens tem de cada produto
for(let i=0; i<product.length; i++){
    if(product[i].id == "guardaRoupa"){
        todosarmarios[0].push( product[i]);

    }else if(product[i].id == "cozinha"){
        todosarmarios[1].push( product[i]);

    }else if(product[i].id == "painelTV"){
        todosarmarios[2].push( product[i]);

    }else if(product[i].id == "armarioAlto"){
        todosarmarios[3].push( product[i]);

    }else if(product[i].id == "armarioPequeno"){
        todosarmarios[4].push( product[i]);
    }
    
};

//mostra todo os conteudos automaticamente

categorias[0].innerText = `Todos (${product.length })`;
categorias[1].innerText += `Guarda-Roupas (${guardaroupa.length })`;
categorias[2].innerText += `Cozinhas (${cozinha.length })`;
categorias[3].innerText += `Painel de TV (${painelTV.length })`;
categorias[4].innerText += `Armario Alto( ${armarioAlto.length })`;
categorias[5].innerText += `Armario pequeno (${armarioPequeno.length })`;

*/