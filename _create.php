<?php include "db_conn.php";?>
<?php include "functions.php";?>

<?php  
    createUser();
?>
<?php include "includes/header.php";?>
    <div class="col-sm-6">
       <h1 class="text-center">Create</h1>
        <form action="_create.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
             </div>
             <input class="btn btn-primary" id="create" type="submit" name="submit" value="CREATE">
        </form>
    </div>
<?php include "includes/footer.php";?>