
<?php
class Empleado{
    private $nombre;
    private $horas;
    private $saldo;
    function __construct($nom,$h,$s){
      $this->nombre = $nom;
      $this->horas = $h;
      $this->saldo = $s;
    }
  
    public function getNombre()
    {
      return $this->nombre;
    }
    public function getHoras()
    {
      return $this->horas;
    }
    public function getSueldoH()
    {
      return $this->saldo;
    }
   
    public function calcularSueldo()
    {
      return $this->horas * $this->saldo;
    }
  }
  
  $empleado = new Empleado($_POST['nombre'], $_POST['horas'], $_POST['saldo']);

  echo "Su nombre: ".$empleado->getNombre() ."<br>";
  echo "Horas trabajadas: " .$empleado->getHoras() ."<br>";
  echo "Sueldo por hora: " .$empleado->getSueldoH() ."<br>";
  echo "Sueldo total empleado ".$empleado->getNombre()." : ". $empleado->calcularSueldo() ."<br>";

?>
