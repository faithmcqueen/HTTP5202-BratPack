<?php
$name = $description = "";

if(isset($_POST['updateMenuItem'])){
    $id= $_POST['id'];

    require_once ('classes/database.php');
    require_once 'classes/MySqlDatabase.php';
    $dbcon = Database::getDb();
    $m = new MySqlDatabase();


    // grab existing information
    $sql = "SELECT * FROM menu where id = :id";
    $pst = $dbcon->prepare($sql);
    $pst->bindParam(':id', $id);
    $pst->execute();
    $menu = $pst->fetch(PDO::FETCH_OBJ);

    $name = $menu->name;
    $description = $menu->description;
}
if(isset($_POST['updMenuItem'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_POST['sid'];

    require_once ('database.php');
    require_once 'MySqlDatabase.php';
    $dbcon = Database::getDb();
    $m = new MySqlDatabase();


    //update with new information
    $sql = "UPDATE menu 
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

include_once 'includes/header.php'
?>


<h1 class="h1 text-center">Update Details for Menu Item: <?= $name ?></h1>

<div>
    <form action="" method="post">
        <input type="hidden" name="sid" value="<?= $id; ?>" />
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text"class="form-control" name="name" id="name" value="<?= $name?>" placeholder="Enter name">
            <span></span>
        </div>
        <div class="form-group">

            <textarea  name="description" rows="10" cols="100" placeholder="please enter a brief description of the menu item"><?=  $description;?></textarea>
            <span></span>
        </div>
        <a href="menu_list.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="updMenuItem" class="btn btn-primary float-right" id="btn-submit">Update Menu Item</button>

    </form>
</div>
</body>
</html>