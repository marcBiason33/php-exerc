<?php

abstract class Conta 

{

	public $numeroDaConta;

	public $agencia;

    public abstract function extrato();
	
}