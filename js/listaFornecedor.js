function listarFornecedor(){
    const url = 'http://127.0.0.1:80/trabalho/listaFornecedor.php';
    fetch(url,{
        method:"GET",
    }).then(response => response.text())
    .then(response =>{results.innerHTML = response;})
    .catch(err => console.log(err));
}
listarFornecedor()