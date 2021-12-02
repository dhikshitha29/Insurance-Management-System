<?php
require_once '../header.php';
 ?>
<body>
 <style>
    body {
      background-image: url('1.jpg');
      background-size:cover;
      }
      h1 {
        text-align: center;
        color:black;
        }
      h4 {
        text-align: center;
        color:black;
        }
      
      .ff {
          text-align:center;
          color:black;
          /* size:20; */
        }
      /* ol li{
        text-align:center;
      } */
    </style>
<div class="">
<hr size="5" noshade>
  <h1>ADD PAYMENT RECORD</h1>
  <hr size="5" noshade>

  <form class="ff" action="../includes/AddPaymentRecord-inc.php" method="post">
    <input type="number" name="Policy_no" placeholder="Policy Number (9 digit)" min="100000000" max="999999999" style="width: 165px;">
    <select name="Mode" required>
         <option value="" selected disabled>Mode of Payment</option>
         <option value="Cash">Cash</option>
         <option value="Other">Other</option>
    </select>
    <input type="number" name="Amount" placeholder="Amount">
    <br> <br>
    <button type="submit" name="submit" style="margin-left: 325px;">Add Payment Record</button>
    <br> <br> <br>
    <button name=""><a href="ShowRecordBook.php"> Show Record Book </a></button>
  </form>
</div>

 <?php
 require_once '../footer.php';
  ?>
