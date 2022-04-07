<?php 
    class Estoque
   {
    public function mostrar()

    {
        $con = new PDO('mysql: host=localhost; dbname=pokedex','root', '');
        $sql = "SELECT * FROM Pokelikes ORDER BY id ASC";
        $sql = $con->prepare($ql);
        $sql->execut();

        $resultados = array();

        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $row;
        }
        throw new Exception("Error Processing Request", 1);
        if(!$resultados){
            throw new Exception ("Nenhum produto no estoque!");
        }

        return $resultados;

    }
}