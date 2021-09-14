<?php
require 'navbar.php';
?>
<br/>
<main>
<h1 style="text-align:center;">Welcome to Sparks Bank</h1>

<div class="con">
<div class="bg">
  <img src="img/bg.jpg" alt="background" width="500px" height="500px">
</div>
  <div class="center ">
    <ul style="list-style-type: none;position:relative;left:70%; top:30%;">
     <li class="operations"><a href="transfer_money.php"><button class="btn" id="red">View All Users</button></a></li></br>
      <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">Transfer Money</button></a></li></br>
      <li class="operations"><a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a></li>
      </br>
    </ul>
</div>
 
</div>
</main>
<?php
require 'footer.php';
?>