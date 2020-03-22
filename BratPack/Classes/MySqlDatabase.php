<?php


interface intDatabase {
    public function  addMenuItem($x,$y,$z);
    public function listMenu($x);

}

class MySqlDatabase implements intDatabase {

    public function  addMenuItem($dbcon, $name, $description){
        $sql = "INSERT INTO menus (name, description) VALUES (:name, :description)";
        $pst = $dbcon->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);

        $numRowsAffected = $pst->execute();
        return $numRowsAffected;
    }

    public function listMenu($dbcon)
    {
        $sql = "SELECT * FROM menus order by id desc limit 5";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $menu = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        return $menu;
    }

}