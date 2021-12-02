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
  <h1> SEARCH POLICY DETAILS </h1>
  <hr size="5" noshade>
  <br>
<div class="ff">
  <form class="ff" action="" method="post">
    <label for="UserSearch"><b>Search by Name:<b></label>
  <input type="search" name="UserSearch" placeholder="Holder's Name">
  <button type="submit" name="search"> Search </button>
  <br><br>
  <button type="submit" name="AllPolicy"> Show All Policys </button>
  <br><br>
  </form>
</div>

<div class="ff">
  <table border="1" align=center>
    <tr>
      <th> Policy Number </th>
      <th> Plan_no </th>
      <th>  Agency_code </th>
      <th>  Premium </th>
      <th>  Date of Commencement </th>
      <th>  Mode </th>
      <th>  Sum Assured</th>
      <th>  First Unpaid Payment </th>
      <th> Term </th>
      <th> Premium Paying Term </th>
      <th> Status </th>
    </tr>
    <?php
    $Agency_code = $_SESSION['sessionId'];
    if (isset($_POST['search'])) {
        $Value = $_POST['UserSearch'];
        $sql = "SELECT * FROM Policy NATURAL join Policy_holder WHERE Agency_code = $Agency_code AND Name = ?";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $Value);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }
    } else {
        $sql = "SELECT * FROM Policy WHERE Agency_code = $Agency_code";
        $result = mysqli_query($conn, $sql);
    }

    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
      <tr>
        <td><?php echo $row['Policy_no'] ?></td>
        <td><?php echo $row['Plan_no'] ?></td>
        <td><?php echo $row['Agency_code'] ?></td>
        <td><?php echo $row['Premium'] ?></td>
        <td><?php echo $row['DOC'] ?></td>
        <td><?php echo $row['Mode'] ?></td>
        <td><?php echo $row['SA'] ?></td>
        <td><?php echo $row['FUP'] ?>  </td>
        <td><?php echo $row['Term'] ?></td>
        <td><?php echo $row['PPT'] ?></td>
        <td><?php if ($row['Status']==1) {
                echo 'Active';
            } else {
                echo 'Deactivated';
            } ?></td>
      </tr>
  <?php
        }
    } else {
        ?> </table> <?php
      echo "No results found"; ?> <table> <?php
    }
 ?>
 </table>
</div>

 <?php
 require_once '../footer.php';
  ?>
