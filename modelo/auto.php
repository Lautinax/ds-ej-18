
<?php

class Auto
{
    public $Marca;
    public $Modelo;
    public $Color;
    public $Motor;

    public function MostrarAuto()
    {
        echo 'Datos del auto: <br>';
        echo 'Marca: ' . $this->Marca . '<br>';
        echo 'Modelo: ' . $this->Modelo . '<br>';
        echo 'Color: ' . $this->Color . '<br><br>';
        echo 'Datos del motor: <br>';
        echo 'Tipo: ' . $this->Motor->Tipo . '<br>';
        echo 'Potencia: ' . $this->Motor->Potencia . '<br>';
        echo 'Combustible: ' . $this->Motor->Combustible . '<br>';
    }
}
