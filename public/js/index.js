console.log("arquivo")
function nomeAlimento(){
    let nome = document.querySelector("#nome").value
    //nome.value = nome.value.toUpperCase();
    
    if(nome.length <= 1 || nome.length === ''){
        alert('errroooooo')
    }else if(!isNaN(nome)){
        alert('errado juan')
    }else if (nome.length >= 60){
        alert('nome muito extenso')
    }
    console.log('nome')
}