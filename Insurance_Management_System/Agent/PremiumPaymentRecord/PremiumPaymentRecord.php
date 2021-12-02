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
 

<div class="ff">
<hr size="5" noshade>
  <h1>PREMIUM PAYMENT RECORD</h1>
  <hr size="5" noshade>
  <br>
  Add payment record:<button name=""><a href="AddPaymentRecord.php"> Add Payment Record </a></button>
  <br><br>Show Record book:<button name=""><a href="ShowRecordBook.php"> Show Record Book </a></button>
</div>

<?php
require_once '../footer.php';
 ?>
