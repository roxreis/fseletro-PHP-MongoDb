function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName("boxProdutos");
    for (var i =0; i<elementos.length; i++) {
        if (categoria == elementos[i].id)
            elementos[i].style = "display:block";
            else
                elementos[i].style = "display:none"
        
    }

}

let exibirTodos = () => {
    let elementos = document.getElementsByClassName("boxProdutos");

    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:block";

        
    }
};


function semMouse(imagem) {
    
        imagem.width = 250;
        imagem.height = 165;
    };
  
function comMouse(imagem) {
    imagem.width = 300;
    imagem.height = 215;


};




