<?php
require_once '../Admin/header.php';
 ?>
 <body>
 <style>
    body {
      background-image: url('1.png');
      }
      h1 {
        text-align: center;
        color:black;
        }
      .ff {
          text-align: center;
        }
    </style>

<div>
<hr size="5" noshade>
<h1>AGENT SIGN-UP</h1>
<hr size="5" noshade>

<form class="ff" action="includes/Agent-register-inc.php" method="post">
  <input type="number" name="Agency_code" placeholder="Agency_code (7 digit)" min="1000000" max="9999999" style="width: 160px;" required><br><br>
  <input type="password" name="password" placeholder="Password" required>
  <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br><br>
  <input type="text" name="Name" placeholder="Name" required>
  <input type="number" name="Mobile_no" placeholder="Mobile Number" min="5000000000" max="9999999999" required>
  <input type="email" name="Email_id" placeholder="E-mail" required><br><br>
  <input type="text" name="Designation" placeholder="Designation">
  <input type="text" name="City" placeholder="City"><br><br>
  <h7>Date of Birth:</h7>
  <input type="date" name="DOB" placeholder="Date of Birth"><br><br>
  <button type="submit" name="submit">Register</button>
</form>

</div>
</body>

<?php
require_once '../Admin/footer.php';
 ?>
