<?php
session_start();
require_once 'C:\xampp\htdocs\Insurance-Management-System\DBMS\database.php';

   if (!isset($_SESSION['sessionId2'])) {
       if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Admin/Admin-Login.php')) {
           header('Location: http://localhost/Insurance-Management-System/DBMS');
       }
   }
  ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Insurance Management System</title>
   </head>
   <body>
   <style>
    body {
      background-image: url('ad.jpg');
      }
      h1 {
        text-align: center;
        color:black;
        }
      .ff {
          text-align: center;
        }
    </style>
     <header>
       <nav>

       </nav>
     </header>

<div>
<hr size="5" noshade>
<h1>ADMIN LOGIN</h1>
<hr size="5" noshade>
<br>

<form class="ff" action="includes/Admin-Login-inc.php" method="post">
  <br>
  <input type="number" name="Admin_id" placeholder="Admin ID" required>
  <br>
  <br>
  <input type="password" name="password" placeholder="Password" required>
  <br>
  <br>
  <button type="submit" name="submit">Login</button>
  <br>
  <br>
  <button type="button" name="Home"> <a href="../index.php">Home</a> </button>
</form>

</div>
<br><br>


</body>
</html>
