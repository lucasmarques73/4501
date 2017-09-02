<?php 

 include 'namespace_ex.php';

 use Modelo\Cliente as ModeloCliente;

 $cliente = new Modelo\Cliente('Lucas');
 $cliente2 = new ModeloCliente('João');


 echo $cliente->getNome();
 echo "<br>";
 echo $cliente2->getNome();