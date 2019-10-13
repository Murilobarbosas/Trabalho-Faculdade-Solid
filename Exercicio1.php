<?php
class Venda extends nota implements bdPedido
{
    public function calcularSomaTotal(){/*...*/}
}

interface bdPedido
{
    public function carrega();
    public function salva();
    public function atualiza();
    public function exclui();
}

abstract class nota extends Produto
{
    public function imprimePedido(){/*...*/}
    public function mostraHTMLPedido(){/*...*/}
}

abstract class Produto extends Produto
{
    public function retornaItens(){/*...*/}
    public function retornaQuantidade(){/*...*/}
    
}

abstract class Produto
{
    public function adicionaItem($item){/*...*/}
    public function excluirItem($item){/*...*/}
}
?>