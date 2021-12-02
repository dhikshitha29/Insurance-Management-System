<?php
require_once '../header.php';
require '../../database.php';
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

<div class="ff">
<hr size="5" noshade>
  <h1> POLICY HOLDER DETAILS </h1>
  <hr size="5" noshade>
  <table border="1">
    <tr>
      <th>  Policy_No</th>
      <th>  Name</th>
      <th>  Mobile_no</th>
      <th>  Email_id</th>
      <th>  City</th>
      <th>  Colony</th>
      <th>  House_no</th>
      <th>  Pincode</th>
      <th>  Nominee_name</th>
      <th>  Nominee_relation</th>
      <th>  Gender</th>
      <th>  Occupation</th>
      <th>  Date Of Birth</th>
      <th>  Age</th>
      <th>  Edu_ql</th>
	    <th>  Operations   </th>
    </tr>
    <?php
    $Agency_code = $_SESSION['sessionId'];
    $sql = "SELECT * FROM policy_holder NATURAL join policy WHERE Agency_code = $Agency_code";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $url = "Policy_no=".$row['Policy_no']."&Name=".$row['Name']; ?>
      <tr>
        <td><?php echo $row['Policy_no'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Mobile_no'] ?></td>
        <td><?php echo $row['Email_id'] ?></td>
        <td><?php echo $row['City'] ?></td>
        <td><?php echo $row['Colony'] ?></td>
        <td><?php echo $row['House_no'] ?></td>
        <td><?php echo $row['Pincode'] ?></td>
        <td><?php echo $row['Nominee_name'] ?></td>
        <td><?php echo $row['Nominee_relation'] ?></td>
        <td><?php echo $row['Gender'] ?></td>
        <td><?php echo $row['Occupation'] ?></td>
        <td><?php echo $row['DOB'] ?></td>
        <td><?php echo $row['AGE'] ?></td>
        <td><?php echo $row['Edu_ql'] ?></td>
		<td style="text-align:center" onclick="window.open('EditPolicyHolder.php?<?php echo $url ?>','_self')"><button> Edit</button></td>
      </tr>
  <?php
  //cursor:pointer;
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
