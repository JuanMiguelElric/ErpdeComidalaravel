axios.defaults.headers.post['X-CSRF-TOKEN']= document.querySelector('meta[name="csrf-token"]').getAttribute('content');
saveData = function(){
    let nomealiemento = document.querySelector('input[name = "Nome"]').value
    let descriIngredientes = document.querySelector('textarea[name = "Ingredientes"]').value
    let price = document.querySelector('input[name="price"]').value
    let Alimentonum = document.querySelector('input[name = "AlimentoNum"]').value
    axios.post('/reports',{
        Nome:nomealiemento,
        ingredientes:descriIngredientes,
        price:price,
        AlimentoNum:Alimentonum

    })
    .then(function(response){
        if(response.status == "200"){
            window.location.href ="/refeicaofoicadastradacomsucesso";
            console.log('enviado')
        }
    })
    .catch(function(error){
        console.log(error)
    })
}