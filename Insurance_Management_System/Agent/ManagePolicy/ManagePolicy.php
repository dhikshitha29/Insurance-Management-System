<?php
require_once '../header.php';
 ?>
<body>
 <style>
    body {
      background-image: url('4.jpg');
      background-size:cover;
      }
      h1 {
        text-align: center;
        color:black;
        }
      .ff {
          text-align:center;
          color:white;
          /* size:20; */
        }
      /* ol li{
        text-align:center;
      } */
    </style>
<div class="ff">
  <hr size="5" noshade>
  <h1>MANAGE POLICY</h1>
  <hr size="5" noshade>
  <br>
  <b>To add new policy :</b><button name="To add new policy Click:"><a href="AddNewPolicy.php"> Add New Policy </a></button><br><br>
  <b>To update policy :</b><button name="To update policy Click:"><a href="UpdatePolicy.php"> Update Policy </a></button><br><br>
  <b>To delete policy :</b><button name="To delete policy Click:"><a href="DeletePolicy.php"> Delete Policy </a></button><br><br>
</div>
</body>
<?php
require_once '../footer.php';
 ?>
