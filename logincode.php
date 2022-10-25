<?php

session_start();
include('database/server.php');


// Login code to make sure the user account is Valid on the database
if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $login_query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data) {
           $user_id = $data['id'];
           $user_name = $data['name']. ''.$data['username'];
           $user_email = $data['email'];
           $role_as = $data['Check'];
        }
        // Check ROW on database is either Admin or User
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; //1 = admin , 0 = user on the database check role
        $_SESSION['auth_user'] = [
            'user_id' =>$user_id,
            'user_name' =>$user_name,
            'user_email' =>$user_email,
        ];
        if($_SESSION['auth_role']== '1') // admin = 1

        {
            $_SESSION['message'] = "Welcome to dashboard";
        header("Location: Admin.php");
        exit(0);

        } else if($_SESSION['auth_role']== '0') // user = 0
        
        { 
            $_SESSION['message'] = "Welcome to Home Page";
            header("Location: index.php");
            exit(0);

        }
    }
    else 
    {
        //If any wrong information not available int the database, get this error message
        $_SESSION['message'] = "Invalid email or password";
        header("Location: login.php");
        exit(0);
    }
}
else 
{  
    $_SESSION['message'] ="You are not logged in";
 header("Location: login.php");
 exit();

}
?>