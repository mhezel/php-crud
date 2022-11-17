<?php include "db_conn.php";?>
<?php include "functions.php";?>

<?php 
    updateUser();
?>
<?php include "includes/header.php";?>
    <div class="col-sm-6">
       <h1 class="text-center">Update User</h1>
        <form action="_update.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
             </div>
             <input class="btn btn-primary" id="update" type="submit" name="submit" value="UPDATE">
             <select name="id" id="">
                <?php 
                showAllUserData();
                  ?>
             </select> 
        </form>
    </div>
<?php include "includes/footer.php";?>