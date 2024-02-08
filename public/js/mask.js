function mascaraCpf(campo, evento) {
    let tecla = (!evento) ? window.event.keyCode : evento.which;
    let valor = campo.value.replace(/\D/g, '');
    let resultado = "";
    let mascara = "###.###.###-##";
    for (let x = 0, y = 0; x < mascara.length && y < valor.length; ) {
        if (mascara.charAt(x) != "#") {
            resultado += mascara.charAt(x);
            x++;
        } else {
            resultado += valor.charAt(y);
            y++;
            x++;
        }
    }
    campo.value = resultado;
}
function mascaraRg(campo,evento){
    let tecla = (!evento) ? window.event.keyCode : evento.which;
    let valor = campo.value.replace(/\D/g,'');
    let resultado = "";
    let mascara = "##.###.###-#";
    for (let x=0, y=0; x < mascara.length && y<valor.length;){
        if(mascara.charAt(x) != '#'){
            resultado += mascara.charAt(x);
            x++;
        }else{
            resultado += valor.charAt(y);
            y++;
            x++;
        }
    }
    campo.value = resultado
}