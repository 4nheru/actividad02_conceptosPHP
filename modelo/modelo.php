<?php
class conversor
{

    public $_numero, $_numero2, $_numero3, $convertL, $convertV, $convertM, $opt, $optV, $optM;
    public $cadenaResul, $cadenaResulV, $cadenaResulM;

    public function setDatos($num, $num2, $num3, $opcionL, $opcionV, $opcionM)
    {
        $this->_numero = $num;
        $this->_numero2 = $num2;
        $this->_numero3 = $num3;
        $this->opt = $opcionL;
        $this->optV = $opcionV;
        $this->optM = $opcionM;
    }

    public function _longitud()
    {
        $this->cadenaResul = "";
        switch ($this->opt) {
            case 'cm':
                $this->convertL = $this->_numero * 100;
                $this->cadenaResul = "Metros a Centimetros: " . $this->convertL;
                break;
            case 'mm':
                $this->convertL = $this->_numero * 1000;
                $this->cadenaResul = "Metros a Milimetros: " . $this->convertL;
                break;
            case 'km':
                $this->convertL = $this->_numero / 1000;
                $this->cadenaResul = "Metros a Kilometros: " . $this->convertL;
                break;
        }
        return $this->cadenaResul;
    }
    public function _volumen()
    {
        $this->cadenaResulV = "";
        switch ($this->optV) {
            case 'dec':
                $this->convertV = $this->_numero2 * 10;
                $this->cadenaResulV = "Litros a Decilitros: " . $this->convertV;
                break;
            case 'mil':
                $this->convertV = $this->_numero2 * 1000;
                $this->cadenaResulV = "Litros a Mililitros: " . $this->convertV;
                break;
        }
        return $this->cadenaResulV;
    }
    public function _masa()
    {
        $this->cadenaResulM = "";
        switch ($this->optM) {
            case 'mg':
                $this->convertM = $this->_numero3 * 1000000;
                $this->cadenaResulM = "Kilos a Miligramos: " . $this->convertM;
                break;
            case 'gm':
                $this->convertM = $this->_numero3 * 1000;
                $this->cadenaResulM = "Kilos a Gramos: " . $this->convertM;
                break;
        }
        return $this->cadenaResulM;
    }
}
