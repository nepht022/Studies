alert('Seja bem vindo(a) ao curso')/*aparece um pop-up com a mensagem*/ 

/*var texto = "Curso de JS "
var num = 5.78
var comeu = false
var ano = prompt("Ano atual") serve para o usuario digitar no browser*/


/*var teste1 = null sem valor no momento intencionalmente
var teste2 = undefined sem valor definido, aponta para um valor inexistente*/

/*document.write(num) escreve valores no browser
document.write("<h1>"+texto+ano+"</h1>")
console.log(comeu) mostra o valor da variavel no console*/


/*var num = prompt("Digite a nota")
if(num>=6){ //!(not), ||(or), &&(and)
    document.write("Aprovado Nota= "+num)
}else if(num<4){
    document.write("Reprovado Nota= "+num)
}else{
    document.write("Recuperação Nota= "+num)
}

var resultado = num%2==0 ? resultado="Numero Par" : resultado="Numero Impar"//operador ternário
document.write(resultado)*/

/*var var1 = prompt("Digite um numero")
var var2 = prompt("Digite outro numero")
var1 = parseInt(var1) transforma em inteiro
var2 = parseInt(var2)
document.write(var1+var2)*/


/*var x = 2
switch(x){
    case 1:
        document.write("Valor é 1")
        break
    
    case 2:
        document.write("Valor é 2")
        break

    default:
        document.write("Valor é desconhecido")
        break
}*/


/*var f1 = "Ola, "
var f2 = "Tudo bem?"
f1+=f2
document.write(f1)*/


/*var qt = 0
var num = prompt("Digite um numero até 20")
verificarQt(parseInt(num))
function verificarQt(val){ se na chamada da função tiver mais parametros que o que deveria, os extras sao desconsiderados
    while(val<20){ variaveis criadas dentro da função não podem ser acessadas fora dela sem ser retornada
        val+=1
        qt+=1
    }
    return qt
}
document.write("O valor da variavel foi incrementado "+qt+" vezes")*/


/*var nome = prompt("Digite seu nome")
var saudacao = function(nome){ //atribuição de uma função a uma variavel(tecnica wrapper de embrulhamento de funções)
    document.write("Olá "+nome+", bem vindo(a)")
}
saudacao(nome)*/

/*var idade = prompt("Digite sua idade")
function verificarIdade(idade, maior, menor){
    if(idade>=18){
        maior()
    }else{
        menor()
    }
}
var maior = function(){ //vale mais a pena criar uma função anonima e atribuir a uma variavel
    document.write("Como voce é maior de idade, pode seguir para a próxima página")
}
var menor = function(){
    document.write("Infelizmente voce tem acesso restrito por conta de sua idade, volte quando for maior de 18")
}

verificarIdade(idade, maior, menor)*/


/*var saudacao = "Ola, tudo bem"
document.write("Ola, tudo bem".length)
document.write("Ola, tudo bem".charAt(5))
document.write(saudacao.replace("bem", "mal"))*/


/*var x = 10.380
document.write(x+"<br>")
document.write(Math.ceil(x)+"<br>")
document.write(Math.floor(x)+"<br>")
document.write(Math.random())*/


/*var data = new Date()
var dataFuturo = new Date("2023", "11", "02")
document.write(data.getDate() +"/"+ data.getMonth()+1 +"/"+ data.getFullYear()+"<br>")

data.setDate(data.getDate()+5)
document.write(data.toString()+"<br>")

document.write("Faltam "+Math.round((dataFuturo.getTime() - data.getTime()) / 86400000)+" dias")*/
