<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function GetNome(){
        return $this->nome;
    }

    public function GetPreco(){
        return $this->preco;
    }

    public function GetQuantidade(){
        return $this->quantidade;
    }

    public function ValorTotal(){
        return $this->preco * $this->quantidade;
    }
}


?>