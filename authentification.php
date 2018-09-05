<?php

// When activating the "Send" button on the login form, we retrieve the input data

if (isset($_POST['submit'])==true)
{
    $login = $_POST['login'];
    $password = $_POST['password'];


    // connection to the database

    require 'database.php';


    // Compare the filled user name with the user names stored in the database

    $req = $db->prepare('SELECT * FROM admin WHERE admin_login = :login');

    $req->execute(array(
       'login' => $login));

    $result = $req->fetch();


   // Compare the completed user password with the corresponding user passwords in the database

    if ($login != $result['admin_login'])
    {
      echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
      if ($password == $result['admin_password']) 
      {
        // If the password is correct, check the status of the user and redirect to appropriate pages

          session_start();
          $_SESSION['login'] = $login;
          $_SESSION['password'] = $password;              
            
          header('Location: home.php');
       
      }
      else 
      {
        echo 'Mauvais identifiant ou mot de passe !';
      }
    }
}
?>
