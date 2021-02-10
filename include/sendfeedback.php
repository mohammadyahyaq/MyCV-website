<?php
    // this code will send the feedback to the database
    include "connection.php";

    // $arr = array("fname" => "");
    $fname        = $_POST["fname"];
    if ($fname != "") {
      $arr["fname"] = $fname;
    } else {
      exit(); // because it is required
    }

    $lname        = $_POST["lname"];
    if ($lname != "") {
      $arr["lname"] = $lname;
    } else {
      exit();
    }

    $email        = $_POST["email"];
    if ($email != "") {
      $arr["email"] = $email;
    } else {
      exit();
    }

    $phone        = $_POST["phone"];
    if ($phone != "") {
      $arr["phone"] = $phone;
    } else {
      exit();
    }

    $country      = $_POST["country"];
    if ($country != "") {
      $arr["country"] = $country;
    } else {
      exit();
    }

    $city         = $_POST["city"];
    if ($city != "") {
      $arr["city"] = $city;
    }

    $infoSource   = $_POST["infoSource"];
    if ($infoSource != "") {
      $arr["info_source"] = $infoSource;
    }

    $isEasy       = $_POST["isEasy"];
    if ($isEasy != "") {
      $arr["is_easy"] = $isEasy;
    }

    $radioEasy    = $_POST["radioEasy"];
    if ($radioEasy != "") {
      $arr["radio_easy"] = $radioEasy;
    }

    $radioRate    = $_POST["radioRate"];
    if ($radioRate != "") {
      $arr["radio_rate"] = $radioRate;
    }

    $recommendweb = $_POST["recommendweb"];
    if ($recommendweb) {
      $arr["recommend_web"] = $recommendweb;
    }

    $browse       = $_POST["browse"];
    if ($browse != "") {
      $arr["browse"] = $browse;
    }

    $subject      = $_POST["subject"];
    if ($subject != "") {
      $arr["subject"] = $subject;
    } else {
      exit();
    }

    $suggestion   = $_POST["suggestion"];
    if ($suggestion != "") {
      $arr["suggestion"] = $suggestion;
    }

    # We could save the first in a Session so we could access it on the next page
    session_start();
    $_SESSION["first_name"] = $fname;

    // We should generate the query we need
    $query = "INSERT INTO feedbacks (";
    foreach ($arr as $key => $value) {
      $query = $query . $key . ", ";
    }

    $query = substr($query, 0, -2) . ") VALUES (";
    foreach ($arr as $key => $value) {
      $query = $query . "'" . $value . "', ";
    }
    $query = substr($query, 0, -2) . ");";

    // echo $query;

    mysqli_query($conn, $query);

    header("Location: ../pages/submit_feedback.php");
?>
