<?php
interface Vehiculo{
    public function getMatricula();
    public function getModelo();
    public function getPotenciaCV();
}
interface Taxi{
    public function setNumeroLicencia($_numeroLicencia);
    public function getNumeroLicencia();
}
interface Autobus{
    public function setNumeroDePlazas($_nmeroPlazas);
    public function getNumeroDePlazas();
}

class Marca implements Vehiculo, Taxi, Autobus{
    private $matricula;
    private $modelo;
    private $potenciaCV;
    private $numeroPlazas;
    private $numeroLicencia;

    function __construct($_matricula, $_modelo, $_potenciaCV){
        $this->matricula=$_matricula;
        $this->modelo=$_modelo;
        $this->potenciaCV=$_potenciaCV;
        
    }

    public function setNumeroDePlazas($_numeroPlazas){
       $this->numeroPlazas=$_numeroPlazas;
    }

    public function getNumeroDePlazas(){
        return $this->numeroPlazas;
    }
    
 
    
    public function setNumeroLicencia($_numeroLicencia){
        $this->numeroLicencia=$_numeroLicencia;
    }

    public function getNumeroLicencia(){
        return $this->numeroLicencia;
    }
    
    
    public function getMatricula(){
        return $this->matricula;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getPotenciaCV(){
        return $this->potenciaCV;
    }
}
echo "<h2>Taxis</h2>";
echo "<table>";
echo "<tr>
<th>Matrícula</th>
<th> Modelo</th>
<th> Potencia CV</th>
<th> Número de plazas</th>
<th> Número de licencia</th>
</tr>";
$Chevrolet =new Marca (1255, " Corvette ", 600);
echo '<td>';
echo $Chevrolet->getMatricula();
echo '</td>';
echo '<td>';
echo $Chevrolet->getModelo();
echo '</td>';
echo '<td>';
echo $Chevrolet->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Chevrolet->setNumeroDePlazas(3);
echo $Chevrolet->setNumeroLicencia(150);
echo '<td>';
echo $Chevrolet->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Chevrolet->getNumeroLicencia();
echo '</td>';
