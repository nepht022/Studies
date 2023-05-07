$(document).ready(function(){
    console.log($('#exemplo'))
    //normalmente nao da pra selecionar um elemento que ainda nao existe, porem, usando o jquery é possivel pois o script só é carregado após todo o arquivo ser carregado
});

// ou

$(function teste(){
    console.log($('#exemplo'))
});