function createFornecedor (){
    const nome = document.getElementById('nome').value
    const produto = document.getElementById('produto').value
    const telefone = document.getElementById('telefone').value

    const form = new FormData()

    form.append('nome', nome);
    form.append('produto', produto);
    form.append('telefone', telefone);

    const url = 'http://127.0.0.1:80/trabalho/cadastroFornecedor.php';

    fetch(url, {
        method:'POST',
        body:form
    }).then(response =>{
       response.json().then(result =>{
        //console.log(result)
        Swal.fire(result.message);
      
       }).catch(err => console.log(err)) 
    })
}
