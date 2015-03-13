<?php

session_start();
include_once("db_connect.php");
require_once("models/User.php");

$title = $_POST["title"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$suburb = $_POST["suburb"];
$city = $_POST["city"];
$zipCode = $_POST["zipCode"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$sql = "INSERT INTO user (title, firstName, lastName,gender,dob,address,suburb,city,zipCode,phone,email)
 VALUES (:title, :firstName, :lastName,:gender,:dob,:address,:suburb,:city,:zipCode,:phone,:email)";
$q = $dbh->prepare($sql);
$q->execute(array(':title' => $title,
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':gender' => $gender,
    ':dob' => $dob,
    ':address' => $address,
    ':suburb' => $suburb,
    ':city' => $city,
    ':zipCode' => $zipCode,
    ':phone' => $phone,
    ':email' => $email));

$user = User::create(array('title' => $title,
    'firstName' => $firstName,
    'lastName' => $lastName,
    'gender' => $gender,
    'dob' => $dob,
    'address' => $address,
    'suburb' => $suburb,
    'city' => $city,
    'zipCode' => $zipCode,
    'phone' => $phone,
    'email' => $email));

$user->save();

header('Location: ' . "index.php");

?>