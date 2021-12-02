<?php
require_once '../header.php';
require '../../database.php';
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
<hr size="5" noshade>

<div class="">
  <h1>PAYMENT RECORD BOOK</h1>
  <hr size="5" noshade>
  <table border="1" align=center>
    <tr>
      <th>  Policy Number</th>
      <th>  Mode</th>
      <th>  Date & Time</th>
      <th>  Amount</th>
      <th>  Next P.D.</th>
    </tr>
    <?php
    $Agency_code = $_SESSION['sessionId'];
    $sql = "SELECT * FROM policy as p, payment_record as pm WHERE p.Policy_no=pm.Policy_no AND Agency_code = $Agency_code";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //  print_r($row);
            ?>
      <tr>
        <td><?php echo $row['Policy_no'] ?></td>
        <td><?php echo $row['Mode'] ?></td>
        <td><?php echo $row['Date_Time'] ?></td>
        <td><?php echo $row['Amount'] ?></td>
        <td><?php echo $row['FUP'] ?></td>
      </tr>
  <?php
        }
    } else {
        ?> </table> <?php
      echo "No results found";
    }
 ?>
  </table>
</div>
<br><br>
<button name=""><a href="AddPaymentRecord.php"> Add Payment Record </a></button>

 <?php
 require_once '../footer.php';
  ?>
