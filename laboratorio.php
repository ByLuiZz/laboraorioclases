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


//Taxi

echo
"<h1>TAXI</h1>";
echo
"<table border='5'>";
echo "<tr>
<th>Matricula</th>
<th> Modelo</th>
<th> Potencia CV</th>
<th> Numero de plazas</th>
<th> Numero de licencia</th>
</tr>";
$Taxi =new Marca (1255, " Chevrolet Corvette ", 600);
echo '<td>';
echo $Taxi->getMatricula();
echo '</td>';
echo '<td>';
echo $Taxi->getModelo();
echo '</td>';
echo '<td>';
echo $Taxi->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Taxi->setNumeroDePlazas(3);
echo $Taxi->setNumeroLicencia(15089);
echo '<td>';
echo $Taxi->getNumeroDePlazas(3);
echo '</td>';
echo '<td>';
echo $Taxi->getNumeroLicencia();
echo '</td>';

echo "<tr>";
$Taxi =new Marca (1589, " Nissan GT-R ", 800);
echo '<td>';
echo $Taxi->getMatricula();
echo '</td>';
echo '<td>';
echo $Taxi->getModelo();
echo '</td>';
echo '<td>';
echo $Taxi->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Taxi->setNumeroDePlazas(5);
echo $Taxi->setNumeroLicencia(88590);
echo '<td>';
echo $Taxi->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Taxi->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Taxi =new Marca (8088, " Mustang Shelby  ", 600);
echo '<td>';
echo $Taxi->getMatricula();
echo '</td>';
echo '<td>';
echo $Taxi->getModelo();
echo '</td>';
echo '<td>';
echo $Taxi->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Taxi->setNumeroDePlazas(6);
echo $Taxi->setNumeroLicencia(85968);
echo '<td>';
echo $Taxi->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Taxi->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Taxi =new Marca (5896, " Ford Shelby  ", 850);
echo '<td>';
echo $Taxi->getMatricula();
echo '</td>';
echo '<td>';
echo $Taxi->getModelo();
echo '</td>';
echo '<td>';
echo $Taxi->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Taxi->setNumeroDePlazas(6);
echo $Taxi->setNumeroLicencia(896378);
echo '<td>';
echo $Taxi->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Taxi->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Taxi =new Marca (5963, " Chevrolet Camaro  ", 800);
echo '<td>';
echo $Taxi->getMatricula();
echo '</td>';
echo '<td>';
echo $Taxi->getModelo();
echo '</td>';
echo '<td>';
echo $Taxi->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Taxi->setNumeroDePlazas(4);
echo $Taxi->setNumeroLicencia(59638);
echo '<td>';
echo $Taxi->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Taxi->getNumeroLicencia();
echo '</td>';
echo "<tr>";
echo "</table>";

echo "<tr>";
echo
"<h1>AUTOBUS</h1>";
echo "</tr>";
echo
"<table border='5'>";
echo "<tr>
<th>Matricula</th>
<th> Modelo</th>
<th> Potencia CV</th>
<th> Numero de plazas</th>
<th> Numero de licencia</th>
</tr>";



echo "<tr>";
$Bus =new Marca (8596, " 10Scania  ", 500);
echo '<td>';
echo $Bus ->getMatricula();
echo '</td>';
echo '<td>';
echo $Bus ->getModelo();
echo '</td>';
echo '<td>';
echo $Bus ->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Bus ->setNumeroDePlazas(25);
echo $Bus ->setNumeroLicencia(45896);
echo '<td>';
echo $Bus ->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Bus ->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Bus =new Marca (7799, " 9Autobuses Volvo  ", 500);
echo '<td>';
echo $Bus ->getMatricula();
echo '</td>';
echo '<td>';
echo $Bus ->getModelo();
echo '</td>';
echo '<td>';
echo $Bus ->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Bus ->setNumeroDePlazas(25);
echo $Bus ->setNumeroLicencia(89636);
echo '<td>';
echo $Bus ->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Bus ->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Bus =new Marca (8080, " 8Autobus  ", 330);
echo '<td>';
echo $Bus ->getMatricula();
echo '</td>';
echo '<td>';
echo $Bus ->getModelo();
echo '</td>';
echo '<td>';
echo $Bus ->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Bus ->setNumeroDePlazas(30);
echo $Bus ->setNumeroLicencia(89632);
echo '<td>';
echo $Bus ->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Bus ->getNumeroLicencia();
echo '</td>';
echo "<tr>";

echo "<tr>";
$Bus =new Marca (7777, " 6Zhongtong  ", 450);
echo '<td>';
echo $Bus ->getMatricula();
echo '</td>';
echo '<td>';
echo $Bus ->getModelo();
echo '</td>';
echo '<td>';
echo $Bus ->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Bus ->setNumeroDePlazas(30);
echo $Bus ->setNumeroLicencia(85965);
echo '<td>';
echo $Bus ->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Bus ->getNumeroLicencia();
echo '</td>';
echo "<tr>";


echo "<tr>";
$Bus =new Marca (111, " 5Marcopolo SA  ", 650);
echo '<td>';
echo $Bus ->getMatricula();
echo '</td>';
echo '<td>';
echo $Bus ->getModelo();
echo '</td>';
echo '<td>';
echo $Bus ->getPotenciaCV();
echo '</td>';
echo '<td>';
echo $Bus ->setNumeroDePlazas(35);
echo $Bus ->setNumeroLicencia(85693);
echo '<td>';
echo $Bus ->getNumeroDePlazas();
echo '</td>';
echo '<td>';
echo $Bus ->getNumeroLicencia();
echo '</td>';
echo "<tr>";
