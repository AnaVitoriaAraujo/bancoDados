<?php
namespace POO\ProjetoBDPhp\modelo;

class Pessoa{
    public int $cpf;
    public string $nome;
    public string $telefone;
    public string $endereco;
    public string $email;

    public function __construct(int $cpf, string $nome, string $telefone, string $endereco, string $email){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->email = $email;
        
    }//fim do contrutor

    public function getCPF():int{
        return $this->cpf;
    }//fim do cpf

    public function setCPF(int $cpf):void
    {
        $this->cpf =  $cpf;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function getTelefone():string{
        return $this->telefone;
    }

    public function setTelefone(string $Telefone):void{
        $this->telefone = $telefone;
    }

    public function getEndereco():string{
        return $this->endereco;
    }

    public function setEndereco():string{

        $this->endereco = $endereco;
    }
    public function getemail():string{
        return $this->email;
    }

    public function setemail():string{

        $this->email = $email;
    }
}
?>