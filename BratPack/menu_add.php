<?php
//database connection
require_once 'classes/database.php';
//class used to add a menu item
require_once 'classes/MySqlDatabase.php';
//check if form is submitted
if(isset($_POST['addMenuItem'])){
    //get the values from form
    $name = $_POST['name'];
    $description = $_POST['description'];

    //check for data
    if($name == ""||$description == ""){
        echo "please enter a menu item";
    }
    $dbcon = Database::getDb();
    $m = new MySqlDatabase();
    $numRowsAffected = $m->addMenuItem($dbcon,$name,$description);

    if($numRowsAffected){
        header('Location: menu_list.php');
    } else {
        echo "problem inserting new menu item, looks like we're having leftovers";
    }


}
include_once 'includes/header.php'
?>


<h1 class="h1 text-center">Add New Menu Item</h1>
<div>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Menu Item Name">
            <span></span>
        </div>
        <div class="form-group">
            <textarea name="description" rows="10" cols="100" placeholder="please enter a brief description of the menu item"></textarea>
            <span></span>
        </div>
        <a href="menu_list.php" id="btn_back" class="btn btn-success float-left">BacK</a>
        <button type="submit" name="addMenuItem" class="btn btn-primary float-right" id="btn-submit">
            Add New Menu Item
        </button>
    </form>
</div>
</body>

</html>