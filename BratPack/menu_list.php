<?php
//database connection
require_once 'classes/database.php';
require_once 'classes/MySqlDatabase.php';

$dbcon = Database::getDb();
$m = new MySqlDatabase();
$menu = $m->listMenu($dbcon);


include "includes/header.php";

?>




<h1 class="h1 text-center">Weekly Daycare Menu - Edit View</h1>

<a href="index.php">HOME</a>
<div class="m-1">
    <!-- calendar via table formatting -->
    <table class="table table-bordered tbl">
        <thead>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thursday</th>
        <th scope="col">Friday</th>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($menu as $m){ ?>
                <td>
                    <h2><?= $m['name']?> </h2>


                    <p><?= $m['description']?></p>


                    <form action="menu_add.php" method="post">
                        <input type="hidden" name="id" value="<?=$m['id'];?>" />
                        <input type="submit" class="button btn btn-primary" name="updateMenuItem" value="Update" />
                    </form>

                    <form action="menu_delete.php" method="post">
                        <input type="hidden" name="id" value="<?=$m['id'];?>" />
                        <input type="submit" class="button btn-danger" name="deleteMenuItem" value="Delete" />
                    </form>

                </td>
            <?php }?>
        </tr>
        </tbody>
    </table>
    <a href="menu_add.php" id="btn_addMenu" class="btn btn-success btn-lg float-right">Add Menu Item</a>
</div>
</body>
</html>