<?php

include_once('database.php');





session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];


// si le message est envoyé correctement
    // récupérer les données dans des variables
    // si les valeurs récupéré sont vides
        //se redériger ver la page index avec le message d'erreur sauvgarde dans un query string
    // si non afficher préparer la requête d'insertion
    // vérifier qu'elle s'execute correctement
    // s'il y a une erreur afficher le message puis arrêter le programme avec la "die"
    // si non se redériger à la page index qui devera insérer le message nouvellement inséré
    
    if (isset($_POST['envoyer'])){
        $user = $_POST['utilisateur'];
        $messag = $_POST['message'];

        $query = "INSERT INTO messages (utilisateur, contenu_message) VALUES ('$user','$messag')";
        $results =mysqli_query($link, $query); 
        header("Location: index.php");
    }
   



 if(isset($_POST['submit'])){
     if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['Email']) && !empty($_POST['userName']) && isset($_POST['password'])) {
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $Email = $_POST['Email'];
     $userName = $_POST['userName'];
     $password = $_POST['password'];

     $query_s = "SELECT * FROM `user` WHERE userName='$userName'";
     $query_e = "SELECT * FROM `user` WHERE Email='$Email'";

     $results = mysqli_query($link,$query_s);
     $result = mysqli_query($link,$query_e);

     if (mysqli_num_rows($results) > 0 ){
         echo "user name deja kaain";

     }elseif(mysqli_num_rows($result) > 0){
         echo "email deja kaain";
         
     }else{
        $query = "INSERT INTO user (fname, lname, Email, userName, password) VALUES ('$fname','$lname','$Email','$userName','$password')";
        $results = mysqli_query($link,$query);
     
     
        header("Location: login.php");
     }

    }
 }

 if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  

 

  $qry = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";

  $results = mysqli_query($link,$qry);


  if (mysqli_num_rows($results) > 0 ){
         header("Location: index.php");
     }else{
        $query = "INSERT INTO user (email, password) VALUES ('$email','$password')";
        $results = mysqli_query($link,$query);
     
     
        header("Location: login.php?Empty='Your username or password is incorrect'");
     }

    }


   


   

 

    
 


