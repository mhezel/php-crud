<?php include "db_conn.php";?>
<?php 

function createUser(){

    if(isset($_POST['submit'])){
    global $conn;

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users(username, password) VALUES('$username','$password')";
    $result = mysqli_query($conn, $query);

    if(!$result){ 
        die("Error in connection!");
    }else{
        echo "Record created";
    }
  }
}

function readRows(){

    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
        
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        echo " username: " . $row['username'] . " password: " . $row['password'] . "<br>"; 
  }  
}   

function showAllUserData(){

    global $conn;

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if(!$result){

        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function updateUser(){

    if(isset($_POST['submit'])){
    global $conn;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($conn, $query);

    if(!$result){ 
        die("Error in connection!");
    }else{
        echo "Record Updated";
    }
  }
}

function deleteUser(){

    if(isset($_POST['submit'])){
    global $conn;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($conn, $query);

    if(!$result){ 
        die("Error in connection!");
    }else{
        echo "Record Deleted";
    }
  }
}

?>