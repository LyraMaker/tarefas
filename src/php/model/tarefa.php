<?php

namespace LyraMaker\src\php\model;

class Tarefa
{
 //   private ?int $cod;
    private string $nome;
    private string $descricao;
    private \DateTimeInterface $dataInicio;
    private \DateTimeInterface $dataFim;
    private string $urgencia;
    private bool $concluida;

    function __construct(string $nome, string $descricao, \DateTimeInterface $dataInicio, \DateTimeInterface $dataFim, string $urgencia)
    {
 //       $this->setCod($cod);
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setDataInicio($dataInicio);
        $this->setDataFim($dataFim);
        $this->setUrgencia($urgencia);
        $this->setConcluida(false);
  
    }

/*    public function getCod()
    {
        return $this->cod;
    }

    public function setCod(string $cod)
    {
        $this->cod = $cod;

        return $this;
    }
**/
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome (string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getDataInicio()
    {
        return $this->dataInicio->format('d-m-Y');
    }

    public function setDataInicio(\DateTimeInterface $dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    public function getDataFim()
    {
        return $this->dataFim->format('d-m-Y');
    }

    public function setDataFim(\DateTimeInterface $dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    public function getUrgencia()
    {
        return $this->urgencia;
    }

    public function setUrgencia(string $urgencia)
    {
        $this->urgencia = $urgencia;

        return $this;
    }

    public function getConcluida():bool
    {
        return $this->concluida;
    }

    public function setConcluida(bool $concluida)
    {
        $this->concluida = $concluida;

        return $this;
    }

     public function prazo(){
         $vAtual =  new \DateTimeImmutable(date('d-m-Y'));
         $vFim = new \DateTimeImmutable($this->getDataFim());

         $dias = $vAtual->diff($vFim)->days;

         return $dias;
     }

     public function printTarefa(){
        echo $this->getNome().PHP_EOL;
        echo $this->getDescricao().PHP_EOL;
        echo $this->getDataInicio().PHP_EOL;
        echo $this->getDataFim().PHP_EOL;
        echo $this->getUrgencia().PHP_EOL;
        echo $this->getConcluida().PHP_EOL;
        echo $this->prazo().PHP_EOL;
     }
}
