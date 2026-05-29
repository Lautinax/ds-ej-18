<?php

require_once 'modelo/motor.php';
require_once 'modelo/auto.php';


$m = new Motor();
$m->Tipo = '3.0';

$m->Potencia = '300 HP';
$m->Combustible = 'GNC';


$a = new Auto();
$a->Marca = 'Peugeot';
$a->Modelo = 'Planchado';
$a->Color = 'Verde';
$a->Motor = $m;

$a->MostrarAuto();
