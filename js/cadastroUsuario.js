function createUsuario (){
    const nome = document.getElementById('nome').value
    const sobrenome = document.getElementById('sobrenome').value
    const cpf = document.getElementById('cpf').value
    const cargo = document.getElementById('cargo').value

    const form = new FormData()

    form.append('nome', nome);
    form.append('sobrenome', sobrenome);
    form.append('cpf', cpf);
    form.append('cargo', cargo);

    const url = 'http://127.0.0.1:80/trabalho/cadastroUsuario.php';

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
