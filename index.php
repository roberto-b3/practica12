<HTML>
<HEAD>
<TITLE>PRACTICA 12-VARIABLES PHP</TITLE>
<META CHARSET="utf-8"/>
</HEAD>
	<BODY>
	<?php
	$nombre='ROBERTO';
	$edad='21';
	$salario=20000;
	$estatus=true;
	echo "valores<br/>";
	echo "NOMBRE:".$nombre.'<BR/>';
	echo "EDAD:".$edad.'<BR/>';
	echo "SALARIO:".$salario.'<BR/>';
	echo "ESTATUS:".$estatus.'<BR/>';
	?>
	<h1>operaciones aritmeticas</h1>
	<?php
	echo'<h1>operaciones aritmeticas</h1>';
	$valor1=15;
	$valor2=7;
	$suma=$valor1 + $valor2;
	echo "LAS SUMA ES:".$SUMA;
	?>
	
	<?
	ECHO'<H1> RESTA </H1>';
	$valor3=15;
	$valor4=9;
	$RESTA=$valor3 - $valor4;
	echo "LAS SUMA ES:".$RESTA;
	?>
	
	<?
	ECHO'<H1>MULTIPLICACION</H1>';
	$valor5=8;
	$valor6=9;
	$MULTIPLICACION= $valor3 * $valor4;
	echo "la mutliplicacion es:".$MULTIPLICACION;
	
    ?>
	
	<?
	ECHO'<H1>DIVISION </H1>';
	$valor7=10;
	$VALOR8=5;
	$DIVISION=$valor7/$VALOR8;
	ECHO "LA DIVISION ES:".$DIVISION;
    ?>

	</BODY>
</HTML>