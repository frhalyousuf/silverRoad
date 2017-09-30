<?php

if(isset($_POST ["add"]))
{
	if(empty($_POST['no']) || empty($_POST['date'])|| empty($_POST['amount'])|| empty($_POST['recNo'])|| empty($_POST['details'])|| empty($_POST['cat'])|| empty($_POST['type']))
	{
		echo "<font color=red><b><h3>  --- The Fields With * are Required!! </h3></b></font>";
	} else 
	{
	require("connect1.php");
	$no = $_POST['no'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$type = $_POST['type'];
	$recNo = $_POST['recNo'];
	$details = $_POST['details'];
	$cat = $_POST['cat'];
	$notes = $_POST['note'];
	
	$query = "INSERT INTO `bryarexpenses`(`no.`, `date`, `amount`, `type`, `recNo`, `details`, `categories`, `notes` ) VALUES ('$no', '$date', '$amount', '$type', '$recNo', '$details', '$cat', '$notes')";
	
	$result=mysql_query($query)  or die(mysql_error());
	
	if($result)
		{
			echo "<meta http-equiv='refresh' content='0; url=ExpensesTransaction1.php'>";
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
<title>Expenses Transaction</title>

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
  <a href="main1.php">Home</a>
  <div class="clear"></div>
 </nav>	
</div>
  <h1>Add Expenses Transaction</h1>
<div style="position: absolute; width: 1000px"><p>To add an Expenses transaction you need to fill up the fields below</p></div><br /><br /><br />
<br>
<form action="ExpensesTransaction1.php" method="post">

<label>No.: <font color="red" size="+2"> * </font></label>
<input readonly type="text" name="no" style="width:150px" value="<?php  
require("connect1.php");
$q=  mysql_query("SELECT MAX(`no.`) as maximum FROM `bryarexpenses`");
{
	while ($r = mysql_fetch_assoc($q))
	{
		echo $r['maximum']+1;
	}
}
?>"/><br />

<label>Date: <font color="red" size="+2"> * </font></label><input type="date" name="date" style="width:130px;"value="<?php echo date ("Y-m-d"); ?>"><br>
<label>Amount: <font color="red" size="+2"> * </font></label><input type="text" name="amount" style="width:80px"  />
<div style="position: absolute; left: 464px; top: 268px;"> <label> Affiliated to: <font color="red" size="+2"> *</font></label> </div><div style="position: absolute; left: 575px; top: 264px; width: 125px;"> <select name="type" id="status" style="width:120px">
    <option>General</option>
    <option>Kurdish School</option>
    <option>Arabic School</option>
    <option>Kindergarten</option>
    </select> 
  </div><br />
<label>Receipt No.:<font color="red" size="+2"> * </font></label><input type="text" name="recNo" style="width:80px"  /><br />
<label>Details:<font color="red" size="+2"> * </font> </label><input type="text" name="details" style="width:250px" ><br>
<label>Categories:<font color="red" size="+2"> * </font> </label><select name="cat" id="level"; style="height:35px; width:150px">
      <option>Select Category</option>
    <option>Electricity</option>
    <option>Water/Sewer</option>
    <option>Gasoil</option>
    <option>Telephone</option>
    <option>Elephone</option>
    <option>Fees</option>
    <option>Wages</option>
    <option>Salaries</option>
    <option>Supplies</option>
    <option>Travel</option>
    <option>Hospitality exp.</option>
    <option>Training</option>
    <option>Maintenance</option>
    <option>Construction</option>
    <option>Stationary</option>
    </select><br>
<label>Notes:</label><input type="text" name="note" placeholder="Optional !!!" class="short"><br><br>
<button type="submit" name="add" style="background-color:#2c3e50; color:#FFF; font-style:italic; height:30px">Add Expenses Transaction</button>
<button type="submit" name="search" style="background-color:#F39C12; height:30px"><b><a href="search1.php">Search for a Receipt</a></b></button>
</form>
<br>

<?php
 require("connect1.php");
$query1= "SELECT * FROM `bryarexpenses` ORDER BY `no.` ASC ";
	if($is_query_run = mysql_query($query1))
	{
		echo "<center> 
		<table border=1 width=100%><thead><tr>
		<th>No.</th>
		<th>Date</th>
		<th>Amount</th>
		<th>Affiliated to</th>
		<th>Reciept No.</th>
		<th>Details</th>
		<th>Categories</th>
		<th>Notes</th>
		</tr>		
		</thead>
				</center>";
			
			while($row=mysql_fetch_assoc($is_query_run))
				{		
					echo "<tr>";
					echo "<td>" .$row['no.']. "</td>";
					echo "<td>" .$row['date']. "</td>";
					echo "<td>" .$row['amount']. "</td>";
					echo "<td>" .$row['type']. "</td>";
					echo "<td>" .$row['recNo']. "</td>";
					echo "<td>" .$row['details']. "</td>";
					echo "<td>" .$row['categories']. "</td>";
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

