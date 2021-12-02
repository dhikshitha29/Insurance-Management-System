<?php
require_once '../header.php';
require '../../database.php';
 ?>
 <body>
 <style>
    body {
      background-image: url('2.jpg');
      }
      h1 {
        text-align: center;
        color:black;
        }
      .ff {
          text-align: center;
          size: 50px;
        }
  </style>

<div class="ff">
  <hr size="5" noshade>
  <h1> AGENCY LIST - TABLE</h1>
  <hr size="5" noshade>
  <br>
  <br>
  <table border="1"  align="center" >
    <tr>
      <th>  Agency Code</th>
      <th>  Branch ID</th>
      <th>  Name</th>
      <th>  Admin ID</th>
      <th>  Mobile Number</th>
      <th>  Email ID</th>
      <th>  Date Of Birth</th>
      <th>  Designation</th>
      <th>  City  </th>
    </tr>
    <?php
    $Admin_id = $_SESSION['sessionId2'];
    $sql = "SELECT * FROM Agent WHERE Admin_id = $Admin_id";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
      <tr>
        <td><?php echo $row['Agency_code'] ?></td>
        <td><?php echo $row['Branch_id'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Admin_id'] ?></td>
        <td><?php echo $row['Mobile_no'] ?></td>
        <td><?php echo $row['Email_id'] ?></td>
        <td><?php echo $row['DOB'] ?></td>
        <td><?php echo $row['Designation'] ?></td>
        <td><?php echo $row['City'] ?>  </td>
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

 <?php
 require_once '../footer.php';
  ?>
