<?php

interface GerarTabela
{
	public function init();
	public function header();
	public function body();
	public function footer();
}

class ReportPj implements GerarTabela
{
	public function init()
	{
		echo "Initi PJ <br>";
	}

	public function header()
	{
		echo "Header PJ <br>";
	}

	public function body()
	{
		echo "Body PJ <br>";
	}

	public function footer()
	{
		echo "Footer PJ <br>";
	}
}

class ReportPf implements GerarTabela
{
	public function init()
	{
		echo "Initi PF <br>";
	}

	public function header()
	{
		echo "Header PF <br>";
	}

	public function body()
	{
		echo "Body PF <br>";
	}

	public function footer()
	{
		echo "Footer PF <br>";
	}
}

class Pf extends ReportPf
{
	private $codigo;
	private $nome;
	private $cpf;
	private $rg;
}

class Pj extends ReportPj
{
	private $codigo;
	private $nome;
	private $cnpj;
	private $ie;
}



$pessoaF = new Pf();
$pessoaJ = new Pj();

echo "<pre>";

echo $pessoaJ->init();
echo $pessoaJ->header();
echo $pessoaJ->body();
echo $pessoaJ->footer();

echo "<hr>";

echo $pessoaF->init();
echo $pessoaF->header();
echo $pessoaF->body();
echo $pessoaF->footer();

echo "</pre>";