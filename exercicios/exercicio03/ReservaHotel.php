<?php

class ReservaHotel{
    private string $nome;
    private string $tipoQuarto;
    private int $qtdDiarias;
    private string $cafeManha;

    public function __construct($nome, $tipoQuarto, $qtdDiarias, $cafeManha){
        $this->nome = $nome;
        $this->tipoQuarto = $tipoQuarto;
        $this->qtdDiarias = $qtdDiarias;
        $this->cafeManha = $cafeManha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTipoQuarto(){
        return $this->tipoQuarto;
    }

    public function getqtdDiarias(){
        return $this->qtdDiarias;
    }

    public function getCafeManha(){
        return $this->cafeManha;
    }

    public function calcularHospedagem(){
        if ($this->tipoQuarto == "Standard"){
            return $this->qtdDiarias * 150;
        }
        elseif ($this->tipoQuarto == "Suite"){
            return $this->qtdDiarias * 230;
        }
    }

    public function calcularDesconto(){
        if ($this->qtdDiarias >= 5){
            return $this->calcularHospedagem() * 0.08;
        }else{
            return 0;
        }
    }

    public function calcularCafe(){
        if ($this->cafeManha == "Sim"){
            return 25 * $this->qtdDiarias;
        }else{
            return 0;
        }
    }

    public function calcularTotal(){
        return $this->calcularHospedagem() - $this->calcularDesconto() + $this->calcularCafe();
    }
}

?>