<?php

class Cliente
{
    private $Nome;
    private $Email;
    private $Telefone;
    private $Endereco;
    private $Cpf;


    /**
     * Cliente constructor.
     * @param $nome
     * @param $email
     * @param $telefone
     * @param $endereco
     * @param $cpf
     */
    function __construct($nome, $email, $telefone, $endereco, $cpf)
    {
        $this->Nome = (string)$nome;
        $this->Email = (string)$email;
        $this->Telefone = (string)$telefone;
        $this->Endereco = (string)$endereco;
        $this->Cpf =(int)$cpf;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->Telefone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->Cpf;
    }



}