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




