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
      /* h7 {
          color:white;
        } */
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
  <h1> PLAN PRESENTATION </h1>
  <hr size="5" noshade>
  <table border="1" align=center>
    <tr>
      <th>  Plan_no</th>
      <th>  Name</th>
      <th>  MMA</th>
      <th>  min_SA</th>
      <th>  max_SA</th>
      <th>  min_age</th>
      <th>  max_age</th>
      <th>  MODE</th>
      <th>  Term</th>
      <th>  PPT   </th>
    </tr>
    <?php
    $sql = "SELECT * FROM Plan";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
      <tr>
        <td><?php echo $row['Plan_no'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['MMA'] ?></td>
        <td><?php echo $row['min_SA'] ?></td>
        <td><?php echo $row['max_SA'] ?></td>
        <td><?php echo $row['min_age'] ?></td>
        <td><?php echo $row['max_age'] ?></td>
        <td><?php  if ($row['MODE_YEARLY']==1) {
                echo 'Yearly |';
            }
            if ($row['MODE_HALFLY']==1) {
                echo 'Halfly |';
            }
            if ($row['MODE_QUARTELY']==1) {
                echo 'Quartely |';
            }
            if ($row['MODE_MONTHLY']==1) {
                echo 'Monthly |';
            }
            if ($row['MODE_SINGLE']==1) {
                echo 'Single';
            } ?></td>
        <td><?php echo $row['T1'],"-",$row['T2'],"-",$row['T3'],"-",$row['T4'] ?></td>
        <td><?php echo $row['P1'],"-",$row['P2'],"-",$row['P3'],"-",$row['P4'] ?></td>
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
</body>

 <?php
 require_once '../footer.php';
  ?>
