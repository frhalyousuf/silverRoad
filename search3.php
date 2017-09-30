<!DOCTYPE html>

<html>
<head>
<title>Search a Transaction</title>

<link rel="stylesheet" type="text/css" href="./Add Transaction_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./Add Transaction_files/form.css" media="screen">
<script src="./Add Transaction_files/jquery.min.js.download"></script>
<script src="./Add Transaction_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./Add Transaction_files/jquery-ui.css">
<script src="./Add Transaction_files/jquery-ui.js.download"></script>

</head>
<body>

  <div class="header">	
    <nav>
  <a href="main3.php">Home</a>
  <a href="RevenueTransaction3.php">Revenue Transaction</a>
  <a href="ExpensesTransaction3.php">Expenses Transaction</a>
 </nav>	
</div>
<h1>&nbsp;</h1>
  <div style="position: absolute; width: 496px; height: 222px; left: 702px; top: 48px;">
  <h1>&nbsp; &nbsp; Search Expenses Transaction</h1>
  <br />
<br>

<form action="search3.php" method="post">
<p style="left:50px" class="ui-state-default">Search by Receipt No.:
  <input type="search" name="srch3" autofocus style="width:100px">
  <input type="submit" name="recSearch3" value=">>" style="width:40px; height:30px"><br />
    
<?php
		
		if(isset($_POST["recSearch3"]))
		{
		require 'connect1.php';
		$srch3 = $_POST['srch3'];
		
		$query = "SELECT * FROM `shyawexpenses` WHERE `recNo` = '$srch3'";
		if($is_query_run = mysql_query($query))
{
	while($row=mysql_fetch_assoc($is_query_run))
	{
			
		echo "<center><label> No.
		<input readonly type=text name=no value= {$row['no.']}>
		</label>";
		echo "<center><label for=amount> <span>Date</span>
		<input readonly type=text name=date value= {$row['date']}>
		</label>";
		echo "<center><label for=detalis> <span>Amount</span>
		<input readonly type=text name=amount value= {$row['amount']}>
		</label>";
		echo "<center><label for=recNo> <span>Reciept No.</span>
		<input readonly type=text name=recNo value= {$row['recNo']}>
		</label>";
		echo "<center><label for=details> <span>Details</span>
		<input readonly type=text name=details value=  '$row[details]'>
		</label>";
		echo "<center><label for=cat> <span>Categories</span>
		<input readonly type=text name=categories value= {$row['categories']}>
		</label>";
		echo "<center><label for=note1> <span>Notes</span>
		<input  type=text name=note value= '$row[notes]'>
		</label><br><br><br>";
		}
		echo "<br><br><br><br><br><br><br>";
		echo "<input type=submit name=update1 style=width:70px value=Update>";
			}

} 
?>




</form>
</div>


<div style="position: absolute; width: 496px; height: 222px;">
  <h1>&nbsp; &nbsp; Search Revenue Transaction</h1>
  <br />
<br>

<form action="search3.php" method="post">
<p style="left:50px" class="ui-state-default">Search by Receipt No.:
  <input type="search" name="srch1" autofocus style="width:100px">
  <input type="submit" name="recSearch1" value=">>" style="width:40px; height:30px"><br />
  <p class="ui-state-default">Search by Name:
  <input type="text" name="srch2" style="width:150px"/>
  <input type="submit" name="stuSearch2" value=">>" style="width:40px; height:30px"><br />
  
<?php
		
		if(isset($_POST["recSearch1"]))
		{
		require 'connect1.php';
		$srch1 = $_POST['srch1'];
		
		$query = "SELECT * FROM `shyawrevenue` WHERE recNo = $srch1";
		if($is_query_run = mysql_query($query))
{
		while($row=mysql_fetch_array($is_query_run))
			{
		echo "<center><label> Receipt No.
		<input readonly type=text name=no value= $row[recNo]>
		</label>";
		echo "<center><label for=date> <span>Date</span>
		<input readonly type=text name=date value= {$row['date']}>
		</label>";
		echo "<center><label for=detalis> <span>Details</span>
		<input readonly type=text name=details value= '$row[details]'>
		</label>";
		echo "<center><label for=level1> <span>Level</span>
		<input readonly type=text name=level value= {$row['level']}>
		</label>";
		echo "<center><label for=amount1> <span>Amount</span>
		<input readonly type=text size=30 name=amount value= {$row['amount']}>
		</label>";
		echo "<center><label for=telNo> <span>Status</span>
		<input readonly type=text name=telNo value= {$row['status']}>
		</label>";
		echo "<center><label for=telNo> <span>Mobile No.</span>
		<input readonly type=text name=telNo value= {$row['telNo.']}>
		</label>";
		echo "<center><label for=note1> <span>Notes</span>
		<input  type=text name=note value= '$row[notes]'>
		</label><br><br><br>";
		}
		echo "<br><br><br><br><br><br>";
		echo "<input type=submit name=update style=width:70px value=Update>";
			}
} 
?>

<?php
		require 'connect1.php';
		
if(isset($_POST["stuSearch2"]))
		{
		$name2 = $_POST['srch2'];
		
		$query = "SELECT * FROM `shyawrevenue` WHERE details LIKE '%$name2%'";
		if($is_query_run = mysql_query($query))
{
	while($row=mysql_fetch_assoc($is_query_run))
	{
		echo "<center><label> Receipt No.
		<input readonly type=text name=no value= {$row['recNo']}>
		</label>";
		echo "<center><label for=date> <span>Date</span>
		<input readonly type=text name=date value= {$row['date']}>
		</label>";
		echo "<center><label for=detalis> <span>Details</span>
		<input readonly type=text name=details value= '$row[details]'>
		</label>";
		echo "<center><label for=level1> <span>Levels</span>
		<input readonly type=text name=level value= {$row['level']}>
		</label>";
		echo "<center><label for=amount1> <span>Amount</span>
		<input readonly type=text name=amount value= {$row['amount']}>
		</label>";
		echo "<center><label for=telNo> <span>Status</span>
		<input readonly type=text name=status value= {$row['status']}>
		</label>";
		echo "<center><label for=telNo> <span>Mobile No.</span>
		<input readonly type=text name=telNo value= {$row['telNo.']}>
		</label>";
		echo "<center><label for=note1> <span>Notes</span>
		<input  type=text name=note value= '$row[notes]'>
		</label><br><br><br><br><br><br>";
		echo "<br><br><br><br><br>	-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-";
		}
		echo "<br><br>";
		echo "<input type=submit name=update style=width:70px value=Update>";
			}

} 
 ?>


</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer">
			<p>© 2017 - Powered By 4F Group - v1.0</p>
</div></div>

</body></html>
<?php

if(isset($_POST['update'])){
	
	require("connect1.php");
	
	$no = $_POST['no'];
	$date = $_POST['date'];
	$details = $_POST['details'];
	$level = $_POST['level'];
	$amount = $_POST['amount'];
	$status = $_POST['status'];
	$telNo = $_POST['telNo'];
	$note = $_POST['note'];
		
	$UpdateQuery = "UPDATE `shyawrevenue` SET `recNo` = '$no', `date` = '$date', `details` = '$details', `level` = '$level', `amount` = '$amount', `status` = '$status', `telNo.` = '$telNo', `notes` = '$note' WHERE `recNo`= $no";
	$query = mysql_query($UpdateQuery);
	
	if($query)
	{
	 echo "<meta http-equiv='refresh' content='0;url=search3.php'>";
	 echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
	}
	else
	{
	 echo "<meta http-equiv='refresh' content='0;url=search3.php'>";
	 echo "<script type='text/javascript'>alert('Please check your codes!')</script>";
	}
	
}

?>
<?php

if(isset($_POST['update1'])){
	
	require("connect1.php");
	
	$no = $_POST['no'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$recNo = $_POST['recNo'];
	$details = $_POST['details'];
	$categories = $_POST['categories'];
	$note = $_POST['note'];
		
	$UpdateQuery = "UPDATE `shyawexpenses`  SET `no.` = '$no', `date` = '$date', `amount` = '$amount', `recNo` = '$recNo', `details` = '$details', `categories` = '$categories', `notes` = '$note' WHERE `recNo`= $recNo";
	$query = mysql_query($UpdateQuery);
	
	if($query)
	{
	 echo "<meta http-equiv='refresh' content='0;url=search3.php'>";
	 echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
	}
	else
	{
	 echo "<meta http-equiv='refresh' content='0;url=search3.php'>";
	 echo "<script type='text/javascript'>alert('Please check your codes!')</script>";
	}
	
}

?>

