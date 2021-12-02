<?php
require_once '../header.php';
require '../../database.php';

$plan_no = $_GET['Plan_no'];
$name = $_GET['Name'];

$sql = "SELECT * FROM Plan WHERE Plan_no = $plan_no AND Name = '$name'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        $row = mysqli_fetch_assoc($result); ?>
<body>
      <hr size="5" noshade> 
      
      <h1>EDIT PLAN</h1>
      
      <hr size="5" noshade>
      <br>
<style>
    body {
      background-image: url('5.jpg');
      background-size: cover;
      
      }
      h1 {
        text-align: center;
        color:black;
        }
      .ff {
          text-align: center;
        }
    </style>

<form action = "../includes/changePlan-inc.php" method = "post">
	<input hidden name="Plan_no" value="<?php echo $row['Plan_no'] ?>">
   <b>Name:</b><input type="text" name="Name" placeholder="Name" value = "<?php echo $row['Name'] ?>" required>
   <b>MMA:</b><input type="number" name="MMA" placeholder="Maximum Maturity Age" value="<?php echo $row['MMA'] ?>" required>
   <b>MinSA:</b><input type="number" name="min_SA" placeholder="Minimum Sum Assured" value="<?php echo $row['min_SA'] ?>" required>
   <b>MaxSA:</b><input type="number" name="max_SA" placeholder="Maximum Sum Assured" value="<?php echo $row['max_SA'] ?>">
   <br><br><b>MinAge:</b><input type="number" name="min_age" placeholder="Minimum Age" value="<?php echo $row['min_age'] ?>" required>
   <b>MaxAge:</b><input type="number" name="max_age" placeholder="Maximum Age" value="<?php echo $row['max_age'] ?>" required>
   <br><br>
   <h7><b>   Mode: </b> </h7>
   <input type="checkbox" name="Mode_Yearly" <?php if ($row['MODE_YEARLY']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Mode_Yearly"><b>Yearly</b></label>
   <input type="checkbox" name="Mode_Halfly" <?php if ($row['MODE_HALFLY']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Mode_Halfly"><b>Halfly</b></label>
   <input type="checkbox" name="Mode_Quartely" <?php if ($row['MODE_QUARTELY']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Mode_Quartely"><b>Quartely</b></label>
   <input type="checkbox" name="Mode_Monthly" <?php if ($row['MODE_MONTHLY']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Mode_Monthly"><b>Monthly</b></label>
   <input type="checkbox" name="Mode_Single" <?php if ($row['MODE_SINGLE']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Mode_Single"><b>Single Premium</b></label>
   <br><br>
   <h7> <b>  Type of Term: </b> </h7>
   <input type="radio" id="Range" name="Type_term" <?php if ($row['Type_term']==0) {
            echo 'checked';
        } ?> value=0>
   <label for="Range"><b>Range</b></label>
   <input type="radio" id="Specific" name="Type_term" <?php if ($row['Type_term']==1) {
            echo 'checked';
        } ?> value=1>
   <label for="Specific"><b>Specific</b></label>
   <br><br>
   <table>
     <tr>
       <td><h7><b> Term: </b></h7></td>
       <td><input type="number" name="T1" value="<?php echo $row['T1']?>" required></td>
       <td><input type="number" name="T2" value="<?php echo $row['T2']?>" required></td>
       <td><input type="number" name="T3" value="<?php echo $row['T3']?>" ></td>
       <td><input type="number" name="T4" value="<?php echo $row['T4']?>" ></td>
     </tr>

     <tr>
       <td><h7><b> Premium Paying Term:</b> </h7></td>
       <td><input type="number" name="P1" value="<?php echo $row['P1']?>"></td>
       <td><input type="number" name="P2" value="<?php echo $row['P2']?>"></td>
       <td><input type="number" name="P3" value="<?php echo $row['P3']?>"></td>
       <td><input type="number" name="P4" value="<?php echo $row['P4']?>"></td>
     </tr>
   </table>

   <br><br>
   <button type="submit" name="submit">Update Plan</button>
</form>
</body>

 <?php
    } else {
        header("Location: ../View/ViewPlan.php?error=Plan_Does_Not_Exist");
        exit();
    }
 require_once '../footer.php';
  ?>
