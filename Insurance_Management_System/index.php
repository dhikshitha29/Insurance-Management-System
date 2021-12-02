<?php
session_start();
if (isset($_SESSION['sessionId']) || isset($_SESSION['sessionId2'])) {
    session_unset();
    session_destroy();
    session_set_cookie_params(0);
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSURANCE MANAGEMENT SYSTEM</title>
  </head>
  <body>
    <hr size="20" noshade>
    <h1><b> INSURANCE MANAGEMENT SYSTEM </b></h1>
    <hr size="20" noshade>
    <style>
    body {
      background-image: url('in.jpg');
      }
    </style>
    <style>
      hr {
      display: block;
     margin-top: 0.5em;
     margin-bottom: 0.5em;
     margin-left: auto;
     margin-right: auto;
     border-style: inset;
     border-width: 1px;
    }
      h1 {
        text-align: center;
        color:white;
        }
      div {
        color:white;
        text-align: center;
        }
    </style>
    <br>
    <div class="">
    <br>
    <h2>LOGIN MODE:</h2> <br>
    <button type="button" name=""><a href="Admin/Admin-Login.php"> Admin Mode </a></button>
    <button type="button" name=""><a href="Agent/Agent-Login.php"> Agent Mode </a></button>
    </div>
  </body>
</html>
