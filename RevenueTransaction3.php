<?php

if(isset($_POST ["add"]))
{
	if(empty($_POST['date'])|| empty($_POST['details'])|| empty($_POST['lvl2'])|| empty($_POST['amount'])|| empty($_POST['mobNo']))
	{
		echo "<font color=red><b><h3>  --- The Fields With * are Required!! </h3></b></font>";
	} else 
	{
	require("connect1.php");
	$no = $_POST['recNo'];
	$date = $_POST['date'];
	$details = $_POST['details'];
	$level = $_POST['lvl2'];
	$amount = $_POST['amount'];
	$status = $_POST['status'];
	$mobNo = $_POST['mobNo'];
	$notes = $_POST['note'];
	
	$query = "INSERT INTO `shyawrevenue`(`recNo`, `date`, `details`, `level`, `amount`,`status`, `telNo.`, `notes` ) VALUES ('$no', '$date', '$details', '$level', '$amount','$status', '$mobNo', '$notes')";
	
	$result=mysql_query($query)  or die(mysql_error());
	
	if($result)
		{
			echo "<meta http-equiv='refresh' content='0; url=RevenueTransaction3.php'>";
	 echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
			exit;
		}
		else 
			{
				echo 'Data NOT Inserted';
			}
			mysql_free_result($result);

	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0069)http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-add.php?t=EX -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Revenue Transaction</title>

<link rel="stylesheet" type="text/css" href="./Add Transaction_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./Add Transaction_files/form.css" media="screen">
<script src="./Add Transaction_files/jquery.min.js.download"></script>
<script src="./Add Transaction_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./Add Transaction_files/jquery-ui.css">
<script src="./Add Transaction_files/jquery-ui.js.download"></script>

</head>
<body>
<div class="wrapper" style="width:1000px"><br>
  <div class="header">	
    <nav>
  <a href="main3.php">Home</a>
  <div class="clear"></div>
 </nav>	
</div>
  <h1>Add Revenue Transaction</h1>
<div style="position: absolute; width: 1000px"><p>To add a Revenue transaction you need to fill up the fields below</p></div><br /><br /><br />
<br>
<form action="RevenueTransaction3.php" method="post">
<label>Receipt No.: </label>
<input readonly type="text" name="recNo" style="width:150px" value="<?php  
require("connect1.php");
$q=  mysql_query("SELECT MAX(`recNo`) as maximum FROM `shyawrevenue` ");
{
	while ($r = mysql_fetch_assoc($q))
	{
		echo $r['maximum']+1;
	}
}
?>"/><br />
<label>Date: <font color="red" size="+2"> * </font></label><input type="date" name="date" style="width:130px;" value="<?php echo date ("Y-m-d"); ?>"><br>
<label>Details: <font color="red" size="+2"> * </font></label><input type="text" name="details" style="width:250px"  /><br />
<label>Level:<font color="red" size="+2"> * </font> </label><select name="lvl2" id="lvl2" style="width:150px">
    <option>--Select Level--</option>
    <option>First</option>
    <option>Second</option>
    <option>Third</option>
    <option>Fourth</option>
    <option>Fifth</option>
    <option>Sixth</option>
    <option>Seventh</option>
    <option>Eighth</option>
    <option>Ninth</option>
    <option>Tenth</option>
    <option>Eleventh</option>
    <option>Twelveth</option>
  </select>
  <div style="position: absolute; left: 527px; top: 348px; width: 125px;"> <select name="status" id="status" style="width:100px">
    <option>     </option>
    <option>Exempt</option>
    <option>Reduction</option>
    </select> 
  </div> <div style="position: absolute; left: 650px; top: 360px;">   <a href="levelSearch3.php"> Search </a> </div><br />
<label>Amount:<font color="red" size="+2"> * </font> </label><input type="text" name="amount" style="width:80px" ><br>
<label>Mobile No.:<font color="red" size="+2"> * </font></label><input type="text" name="mobNo" placeholder="07-- ---- ---" class="short"> <br>
<label>Notes:</label><input type="text" name="note" placeholder="Optional !!!" class="short"><br><br>
<button type="submit" name="add" style="background-color:#2c3e50; color:#FFF; font-style:italic; height:30px">Add Revenue Transaction</button>
<button type="submit" name="search" style="background-color:#F39C12; height:30px"><b><a href="search3.php">Search for a Receipt</a></b></button>
</form>
<br>

 <?php
 require("connect1.php");
$query1= "SELECT * FROM `shyawrevenue` ORDER BY `recNo` ASC ";
	if($is_query_run = mysql_query($query1))
	{
		echo "<center> 
		<table border=1 width=100%><thead><tr>
		<th>Receipt No.</th>
		<th>Transaction Date</th>
		<th>Details</th>
		<th>Level</th>
		<th>Amount</th>
		<th>Status</th>
		<th>Mobile No.</th>
		<th> Notes</th>
		</tr>		
		</thead>
				</center>";
			
			while($row=mysql_fetch_assoc($is_query_run))
				{		
					echo "<tr>";
					echo "<td>" .$row['recNo']. "</td>";
					echo "<td>" .$row['date']. "</td>";
					echo "<td>" .$row['details']. "</td>";
					echo "<td>" .$row['level']. "</td>";
					echo "<td>" .$row['amount']. "</td>";
					echo "<td>" .$row['status']. "</td>";
					echo "<td>" .$row['telNo.']. "</td>";
					echo "<td>" .$row['notes']. "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
	}
	

	
	?>
 <br>
<br>

<div class="footer">
			<p>© 2017 - Powered By 4F Group - v1.0</p>
</div></div>

</body></html>

