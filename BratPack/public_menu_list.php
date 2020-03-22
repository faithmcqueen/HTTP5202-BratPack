<?php
//database connection
require_once 'classes/database.php';
require_once 'classes/MySqlDatabase.php';
$dbcon = Database::getDb();
$m = new MySqlDatabase();
$menu = $m->listMenu($dbcon);

include_once 'includes/header.php';



?>



<h1 class="h1 text-center">Weekly Daycare Menu</h1>
<div class="m-1 ">
    <!-- calendar via table formatting -->
    <table class="table table-bordered tbl container">
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
                </td>
            <?php }?>
        </tr>
        </tbody>
    </table>
</div>

<?php
include "includes/footer.php";
?>
