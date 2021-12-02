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
    

<div class="">
<hr size="5" noshade>
  <h1> COMMISSION REPORTS </h1>
  <hr size="5" noshade>
  <br>
  <table border="1" align=center>
    <tr>
      <th>  Policy_no</th>
      <th>  Premium</th>
      <th>  Commission</th>

    </tr>

    <?php
    $Agency_code = $_SESSION['sessionId'];
    $sql = "SELECT `Policy_no`, `Premium`, COM(Premium,Term) AS C FROM `policy` WHERE `Agency_code` = '$Agency_code'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

        if ($rowCount>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
          <tr>
            <td><?php echo $row['Policy_no'] ?></td>
            <td><?php echo $row['Premium'] ?></td>
            <td><?php echo $row['C'] ?></td>
          </tr>
      <?php
            }
        }

      $sql = "SELECT SUM(`C`) AS S FROM (SELECT COM(Premium,Term) AS C FROM `policy` WHERE `Agency_code` = '$Agency_code' ) AS T";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount>0) {
        $row = mysqli_fetch_assoc($result);
        $TotalCommission = $row['S'];
      }
     ?>
     </table>

     <h4>Total Commission = <b> <?php echo $TotalCommission; ?> </b> </h4>

</div>

 <?php
 require_once '../footer.php';
  ?>
