<?php 
    class users
   {
    public function mostrar()

    {
        $con = new PDO('mysql: host=localhost; dbname=pokedex','root', '');

        $sql = "SELECT * FROM users ORDER BY id ASC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultados = array();

        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $row;
        }
        if(!$resultados){
            throw new Exception ("Nenhum produto no estoque!");
        }

        return $resultados;

    }
}