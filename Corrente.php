<?php

class Corrente extends Conta 

{

	private $extrato;

	public function __toString() 

	{

    return "Conta Corrente";

    }

    public function __construct() 

	{

    $this->extrato = array();

    $this->saldo = 0.0;

    }

	public function sacar($valor) 

	{

    $this->saldo = $this->saldo - $valor;

    $this->registrarMovimentacao($valor);

	}

	public function depositar($valor) 

	{

    $this->saldo = $this->saldo + $valor;

    $this->registrarMovimentacao($valor);

	}

	private function registrarMovimentacao($valor)

	{

		$this->extrato[] = $valor;

	}

	public function extrato() 

	{

		return implode($this->extrato , "\n");

	}

}