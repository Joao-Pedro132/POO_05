<?php

class EmprestimoLivro{
    private string $nome;
    private string $titulo;
    private int $qtdAtraso;

    public function __construct($nome, $titulo, $qtdAtraso){
        $this->nome = $nome;
        $this->titulo = $titulo;
        $this->qtdAtraso = $qtdAtraso;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getQtdAtraso(){
        return $this->qtdAtraso;
    }

    public function calcularMulta(){
        if ($this->qtdAtraso == 0){   
            return "0";
        }
        elseif ($this->qtdAtraso <= 5){
            return 2 * $this->qtdAtraso;
        }
        else{
            return (2 * 5) + (($this->qtdAtraso - 5) * 3);
        }
    }

    public function verificarSituacao(){
        if ($this->qtdAtraso == 0){
            return "Em dia!";
        }
        else{
            return "Atrasado!";
        }
    }
}

?>