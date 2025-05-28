

<?php

class DBGestionLibreria {

    private $servidor = 'localhost';
    private $dataBase = 'libreria';
    private $user = 'root';
    private $password = 'MR2905$';
    
    private function getConexion() {
        $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
        $obPDO = new PDO($dns, $this->user, $this->password);
        return $obPDO;
    }

    //Presentar la tabla libros
    public function getlibros (){
        $pdoConexion = $this->getConexion();

        $resultado = ['no se encontraron datos'];

        if( is_object($pdoConexion) ) {
            $sql = "SELECT * FROM titulos";
            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }


    //Presentar la tabla autores
    public function getautores (){
        $pdoconexion = $this->getconexion();

        $resultado = ['no se encontraron datos'];

        if( is_object($pdoconexion) ) {
            $sql = "SELECT * FROM autores";
            $resultado = $pdoconexion->query($sql);
        }

        return $resultado;
    }

    
}
?>