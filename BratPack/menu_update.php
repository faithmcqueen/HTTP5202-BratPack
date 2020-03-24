<?php
$name = $description = "";

if(isset($_POST['updateMenuItem'])){
    $id= $_POST['id'];

    require_once 'classes/database.php';
    require_once 'classes/MySqlDatabase.php';
    $dbcon = Database::getDb();
    $m = new MySqlDatabase();
    $menu = $m->showMenu($dbcon,$id);

    $name = $menu->name;
    $description = $menu->description;
}
if(isset($_POST['updMenuItem'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_POST['sid'];

    require_once 'classes/database.php';
    require_once 'classes/MySqlDatabase.php';
    $dbcon = Database::getDb();
    $m = new MySqlDatabase();

    $menu = $m->updateMenu($dbcon,$name,$description,$id);

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