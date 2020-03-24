<?php


interface intDatabase {
    public function  addMenuItem($x,$y,$z);
    public function listMenu($x);
    public function showMenu($x,$y);
    public function updateMenu($a,$x,$y,$z);

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

    public function showMenu($dbcon, $id){
        $sql = "SELECT * FROM menus where id = :id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        $menu = $pst->fetch(PDO::FETCH_OBJ);

        return $menu;

    }
    public function updateMenu($dbcon, $name, $description, $id){
        $sql = "UPDATE menus 
            set name = :name, 
            description = :description 
            WHERE id= :id";

        $pst = $dbcon ->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
        $pst->bindParam(':id', $id);

        //return back to list view to confirm updated information
        $count = $pst->execute();
        if($count){
            header("Location: menu_list.php");
        } else {
            echo "problem updating menu, looks like it's leftovers again!";
        }
    }
    public function readMenu($dbcon){
        $sql = "SELECT * FROM menus order by id desc limit 5";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $menu = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $menu;

    }

}