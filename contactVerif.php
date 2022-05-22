<?php
$nom_error=$prenom_error=$genre_error=$date_error=$sujet_error=$mail_error=$message_error=$date_ojd=$user_fonc_error="";
$erreur=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nom_error = "First Name is required";
    $erreur=true;
  } else {
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["nom"])) {
      $nom_error = "Only letters and white space allowed";
      $erreur=true;
    }
  }
  if (empty($_POST["prenom"])) {
    $prenom_error = "Name is required";
    $erreur=true;
  } else {
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["prenom"])) {
      $prenom_error = "Only letters and white space allowed";
      $erreur=true;
    }
  }
  
  if (empty($_POST["mail"])) {
    $mail_error = "Email is required";
    $erreur=true;
  } else {
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
      $mail_error = "Invalid email format";
      $erreur=true;
    }
  }

  if (empty($_POST["usermessage"])) {
    $message_error="Message is required";
    $erreur=true;
  } 

  if (empty($_POST["gender"])) {
    $genre_error = "Gender is required";
    $erreur=true;
  } 
  if (empty($_POST["user_date"])) {
    $date_error = "Date is required";
    $erreur=true;
  }
  if (empty($_POST["user_fonc"])) {
    $user_fonc_error = "Fonction is required";
    $erreur=true;
  }
  else{
    $user_date = new DateTime($_POST["user_date"]);
    $current_date = new DateTime();

    if ($user_date > $current_date)
    {
        $date_error = "Date is invalid";
        $erreur=true;
    } 
    }
    if (empty($_POST["user_date_contact"])) {
      $date_ojd="Date is invalid";
      $erreur=true;
    }else{
      date_default_timezone_set('Europe/Paris');  
      $current_date = new DateTime();
      $date=$_POST["user_date_contact"];
      if(strcmp($date,$current_date->format('Y-m-d'))!=0 && strcmp($date,$current_date->format('d-m-Y'))!=0 && strcmp($date,$current_date->format('m-d-Y'))!=0){
        $date_ojd="Must be today's date.";
        $erreur=true;
      }
    }
    
  }
?>