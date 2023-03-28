// Escolhemos o elemento 'produtos' do HTML, que
// lá é uma tabela vazia sem linhas ou dados

let tabela = document.querySelector("#produtos");

// Inserimos uma linha na tabela produtos

let linha = tabela.insertRow();

// Inserimos células nas linhas da tabela

let celTipo = linha.insertCell();
let celMarca = linha.insertCell();
let celModelo = linha.insertCell();
let celPreco = linha.insertCell();

celTipo.innerHTML = "a";
celMarca.innerHTML = "b";
celModelo.innerHTML = "c";
celPreco.innerHTML = "d";