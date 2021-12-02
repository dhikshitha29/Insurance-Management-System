<?php
require_once '../header.php';
 ?>
 <body>
 <style>
    body {
      background-image: url('4.jpg');
      background-size:cover;
      }
      h1 {
        text-align: center;
        color:black;
        }
      h7 {
          color:white;
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
<h1>ADD NEW POLICY</h1>
<hr size="5" noshade>
  <div class="">
    <form class="" action="../includes/AddNewPolicy-inc.php" method="post">
        <input type="number" name="Policy_no" placeholder="Policy No. (9 digit)" min="100000000" max="999999999" style="width: 155px;" required>
        <input type="number" name="Plan_no" placeholder="Plan No. (3 digit)" min="100" max="999" style="width: 150px;" required> <br> <br>
        <input type="number" name="Premium" placeholder="Premium" required>
        <input type="number" name="Term" placeholder="Term" required>
        <input type="number" name="PPT" placeholder="Premium Paying Term">
        <input type="number" name="SA" placeholder="Sum Assured" required>
        <input type="number" name="Age" placeholder="Policy Holder's Age" required>
        <select name="Mode" required>
             <option value="" selected disabled>Select Mode</option>
             <option value="yearly">Yearly</option>
             <option value="halfly">Half-Yearly</option>
             <option value="monthly">Monthly</option>
             <option value="quartely">Quartely</option>
             <option value="single premium">Single Premium</option>
        </select>
        <br><br>
        <h7><b> Date of Commencement:</b></h7>
        <input type="date" name="DOC" placeholder="Date Of Commencement" required>
        <h7><b> First Unpaid Payment:</b></h7>
        <input type="date" name="FUP" placeholder="First Unpaid Payment">
        <br> <br>
        <button type="submit" name="submit">Add Policy</button>

    </form>
  </div>
</body>
<?php
require_once '../footer.php';
 ?>
