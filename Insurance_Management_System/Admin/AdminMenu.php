<?php
require_once 'header.php';
 ?>
<body>
<style>
    body {
      background-image: url('admenu.jpg');
      background-size: cover;
      }
      h1 {
        text-align: center;
        color:black;
        }
        .myDiv {
        border: 5px outset black;
        /* background-color: lightblue; */
        text-align: center;
      }
    </style>
<div class="myDiv">
  <hr size="5" noshade>
  <h1>ADMIN MENU</h1>
  <hr size="5" noshade>
  <button name=""><a href="Admin-Register.php"> Add New Admin </a></button>
  <button name="" style="margin-left: 46px;"><a href="../Agent/Agent-Register.php"> Add New Agent </a></button><br><br>
  <button name=""><a href="View/ViewAgentList.php"> View Agent List </a></button>
  <button name="" style="margin-left: 50px;"><a href="View/ViewPolicy.php"> View Policy Record </a></button><br><br>
  <button name="" style="margin: 10px 0  90px;"><a href="Plan/PlanDetails.php"> Modify Plan </a></button>
</div>
</body>
 <?php
 require_once 'footer.php';
  ?>
