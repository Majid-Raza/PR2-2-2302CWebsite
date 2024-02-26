<?php
session_start();
include('adminpanel/dbcon.php');  
if(isset($_POST['login'])){
    $useremail= $_POST['uEmail'];
    $userpassword= $_POST['uPassword'];
    $query= $pdo->prepare("select * from users where email = :useremail AND
    password= :userpassword");
    $query->bindParam('useremail',$useremail);
    $query->bindParam('userpassword',$userpassword);
    $query->execute();
    $user =$query->fetch(PDO::FETCH_ASSOC);
    //print_r($user);
    if($user['role_id'] == 1){
        $_SESSION['adminEmail']= $user['email'];
        $_SESSION['adminName']= $user['name'];
        echo"<script>alert('login successfully');
        location.assign('index.php')</script>";
    }
    else if($user['role_id'] == 2){
        $_SESSION['userEmail']= $user['email'];
        $_SESSION['userName']= $user['name'];
        echo"<script>alert('login successfully');
        location.assign('rough.php')</script>";
    }

}
?>