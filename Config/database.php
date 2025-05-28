<?php

class DBGestiontiendacyber {

    private $servidor = 'localhost';
    private $dataBase = 'tienda-cyber';
    private $user = 'root';
    private $password = 'MR2905$';
    
     function getConexion() {
        $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
        $obPDO = new PDO($dns, $this->user, $this->password);
        return $obPDO;
    }

        //Presentar la tabla producto
        public function getproducto (){
            $pdoConexion = $this->getConexion();
    
            $resultado = ['no se encontraron datos'];
    
            if( is_object($pdoConexion) ) {
                $sql = "SELECT * FROM producto";
                $resultado = $pdoConexion->query($sql);
            }
    
            return $resultado;
        }

}
?>