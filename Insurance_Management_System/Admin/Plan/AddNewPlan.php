<?php
require_once '../header.php';
 ?>
 <body>
   <style>
    body {
      background-image: url('3.jpg');
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

 <div>
 <hr size="5" noshade>
 <h1>ADD NEW PLAN</h1>
 <hr size="5" noshade>
 <br>
 <br>

 <form class="ff" action="../includes/AddNewPlan-inc.php" method="post">
   <input type="number" name="Plan_no" placeholder="Plan Number (3 digit)" min="100" max="999" style="width: 150px;" required>
   <input type="text" name="Name" placeholder="Name" required>
   <input type="number" name="MMA" placeholder="Maximum Maturity Age" required>
   <input type="number" name="min_SA" placeholder="Minimum Sum Assured" required>
   <input type="number" name="max_SA" placeholder="Maximum Sum Assured" required>
   <input type="number" name="min_age" placeholder="Minimum Age" required>
   <input type="number" name="max_age" placeholder="Maximum Age" required>
   <br><br>
   <h7><b>   Mode:  </h7>
   <input type="checkbox" name="Mode_Yearly" value=1>
   <label for="Mode_Yearly">Yearly</label>
   <input type="checkbox" name="Mode_Halfly" value=1>
   <label for="Mode_Halfly">Halfly</label>
   <input type="checkbox" name="Mode_Quartely" value=1>
   <label for="Mode_Quartely">Quartely</label>
   <input type="checkbox" name="Mode_Monthly" value=1>
   <label for="Mode_Monthly">Monthly</label>
   <input type="checkbox" name="Mode_Single" value=1>
   <label for="Mode_Single">Single Premium</label>
   <br><br>
   <h7>   Type of Term:  </h7>
   <input type="radio" id="Range" name="Type_term" value=0 checked>
   <label for="Range">Range</label>
   <input type="radio" id="Specific" name="Type_term" value=1>
   <label for="Specific">Specific</label>
   <br><br><b>
   <table>
     <tr><b>
       <td><h7> <b>Term: <b></h7></td>
       <td><input type="number" name="T1" required></td>
       <td><input type="number" name="T2" required></td>
       <td><input type="number" name="T3"></td>
       <td><input type="number" name="T4"></td>
     </b></tr>

     <tr><b>
       <td><h7><b> Premium Paying Term:<b> </h7></td>
       <td><input type="number" name="P1"></td>
       <td><input type="number" name="P2"></td>
       <td><input type="number" name="P3"></td>
       <td><input type="number" name="P4"></td>
     </b></tr>
   </table>

   <br><br>
   <button type="submit" name="submit">Add Plan</button>
 </form>

 </div>
 </body>


 <?php
 require_once '../footer.php';
  ?>
