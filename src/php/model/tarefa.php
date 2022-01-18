<?php

namespace LyraMaker\src\php\model;

class Tarefas
{
    private ?int $cod;
    private string $nome;
    private string $descricao;
    private string $dataInicio;
    private string $dataFim;
    private string $urgencia;
    private bool $concluida;

    function __construct(?int $cod, string $nome, string $descricao, string $dataInicio, string $dataFim, string $urgencia)
    {
        $this->setCod($cod);
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setDataInicio($dataInicio);
        $this->setDataFim($dataFim);
        $this->setUrgencia($urgencia);
        $this->setConcluida(FALSE);
    }

    public function getCod()
    {
        return $this->cod;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    public function getDataFim()
    {
        return $this->dataFim;
    }

    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    public function getUrgencia()
    {
        return $this->urgencia;
    }

    public function setUrgencia($urgencia)
    {
        $this->urgencia = $urgencia;

        return $this;
    }

    public function getConcluida()
    {
        return $this->concluida;
    }

    public function setConcluida($concluida)
    {
        $this->concluida = $concluida;

        return $this;
    }
}
