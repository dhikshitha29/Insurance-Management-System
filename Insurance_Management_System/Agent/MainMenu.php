<?php
require_once 'header.php';
 ?>
 <body>
 <style>
    body {
      background-image: url('1.png');
      background-size:"cover";
      }
      h1 {
        text-align: center;
        color:black;
        }
      /* .ff {
          text-align:center;
        } */
      /* ol li{
        text-align:center;
      } */
    </style>
  <hr size="5" noshade>
 <h1>AGENT MENU</h1>
 <hr size="5" noshade>
<div class="ff">
  <ol >
    <li>
      <a href="ManagePolicy/ManagePolicy.php"> Manage Policy </a> </li><br>
    <li>
      <a href="PolicyOptions/PlanPresentation.php"> Plan Presentaion </a> </li><br>
      <li>
      <a href="PolicyOptions/SearchPolicyDetails.php"> Search Policy Details </a> </li><br>
      <li>
      <a href="PolicyOptions/CommissionReports.php"> Commission Reports </a> </li><br>
      <li>
      <a href="PolicyOptions/BusinessReport.php"> Business Reports </a></li><br>
      <li>
      <a href="PremiumPaymentRecord/PremiumPaymentRecord.php"> Premium Payment Record </a> </li>
  </ol>

</div>
</body>

<?php
require_once 'footer.php';
 ?>
