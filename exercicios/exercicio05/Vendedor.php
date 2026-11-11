<?php

class Vendedor{
    private string $nome;
    private float $salarioBase;
    private float $totalVendasMes;

    public function __construct($nome, $salarioBase, $totalVendasMes){
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->totalVendasMes = $totalVendasMes;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function getTotalVendasMes(){
        return $this->totalVendasMes;
    }

    public function calcularComissao(){
        if ($this->totalVendasMes <= 5000){
            return $this->totalVendasMes * 0.04;
        }
        else{
            return $this->totalVendasMes * 0.06;
        }
    }

    public function calcularBonus(){
        if ($this->totalVendasMes >= 10000){
            $this->salarioBase = $this->salarioBase + 100;
            return "Bônus de R$ 100,00!";
        }
        else{
            return "Sem Bônus!";
        }
    }

    public function calcularSalarioFinal(){
        return $this->calcularComissao() + $this->salarioBase;
    }
}

?>