<?php
require_once '../header.php';
 ?>
 <body>
 <style>
    body {
      background-image: url('6.jpg');
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
<hr size="5" noshade>
<div class="ff">
  <h1>DELETE POLICY RECORD</h1>
  <hr size="5" noshade>
  <br>
  <form class="" action="../includes/DeletePolicy-inc.php" method="post">
    <input type="number" name="Policy_no" placeholder="Policy Number" min="100000000" max="999999999" required>
    <input type="submit" name="submit"">
  </form>
  <br><br>
  <p> <b>Warning:</b> This will also Delete All Payment_records associated with this Policy_no.</p>
</div>

 <?php
 require_once '../footer.php';
  ?>
