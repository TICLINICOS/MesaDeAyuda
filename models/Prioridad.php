<?php
    class Prioridad extends Conectar{

        public function get_prioridad(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_prioridad WHERE est=1 ORDER BY pri_nom ASC;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>