<?php
interface IItem
{
    public function defineCor($cor);
    public function defineTamanho($tamanho);
}

class venda extends aplicaDesconto implements IItem
{
    public function defineParcelas($parcelas){/* */}
    public function definePreco($preco){/* */}

    public function defineCor($cor){/* */}
    public function defineTamanho($tamanho){/* */}
}

class aplicaDesconto
{
    public function aplicaDesconto($desconto){/* */}
    public function aplicaCodigoPromocao($codigoPromocao){/* */}
}
?>