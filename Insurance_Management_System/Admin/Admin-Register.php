<?php
require_once 'header.php';
 ?>

<body>
<style>
    body {
      background-image: url('admenu.jpg');
      background-size: cover;
      }
      h1 {
        text-align: center;
        color:black;
        }
        .myDiv {
        border: 5px outset black;
        /* background-color: lightblue; */
        text-align: center;
      }
      .ff {
          text-align: center;
        }
    </style>
<div>

<h1>ADMIN REGISTER</h1>

<form class="ff" action="includes/Admin-register-inc.php" method="post">

  <input type="number" name="Admin_id" placeholder="Admin_id (5 digit)" min="10000" max="99999" style="width: 130px;" required><br><br>
  <input type="password" name="password" placeholder="Password" required>
  <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br><br>
  <input type="number" name="Branch_id" placeholder="Branch_id (5 digit)" min="10000" max="99999" style="width: 140px;" required>
  <input type="text" name="Name" placeholder="Name" required><br><br>
  <input type="number" name="Mobile_no" placeholder="Mobile Number" min="5000000000" max="9999999999" required>
  <input type="email" name="Email_id" placeholder="E-mail" required><br><br>
  <!-- <br><br> -->
  <input type="text" name="Designation" placeholder="Designation">
  <input type="text" name="City" placeholder="City"><br>
  <h4>Date of Birth:</h4>
  <input type="date" name="DOB" placeholder="Date of Birth"><br><br>
  <button type="submit" name="submit">Register</button>
</form>

</div>
</body>
<?php
require_once 'footer.php';
 ?>
