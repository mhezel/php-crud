<?php include "db_conn.php";?>
<?php include "functions.php";?>

<?php 
    deleteUser(); 
?>
<?php include "includes/header.php";?>
<div class="container">
    <div class="col-sm-6">
        <h2 class="text-center">Delete User</h2>
        <form action="_delete.php" method="post">
            
            <div class="container">
            <div class="col-sm-6"> 
                <pre><?php readRows(); ?></pre>
            </div>
            </div>
            <div class="form-group">
             <select name="id" id="">
                <?php 
                showAllUserData();
                  ?>
             </select>
             </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
<?php include "includes/footer.php";?>