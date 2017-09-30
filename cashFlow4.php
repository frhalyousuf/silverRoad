<?php

if(isset($_POST ["subWith"]))
{
	if(empty($_POST['withNo']) || empty($_POST['withAmount'])|| empty($_POST['withDate']))
	{
		echo "<font color=red><b><h3>  --- The Fields are Required!! </h3></b></font>";
	} else 
	{
	require("connect1.php");
	$no = $_POST['withNo'];
	$amount = $_POST['withAmount'];
	$date = $_POST['withDate'];
	$notes = $_POST['withNote'];
	
	$query = "INSERT INTO `banwithdrawal` (`no.`, `amount`, `date`, `note`) VALUES ('$no', '$amount', '$date', '$notes') ";
	
	$result=mysql_query($query)  or die(mysql_error());
	
	if($result)
		{
			echo "<meta http-equiv='refresh' content='0; url=cashFlow4.php'>";
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
<?php

if(isset($_POST ["subPay"]))
{
	if(empty($_POST['payNo']) || empty($_POST['payAmount'])|| empty($_POST['payDate']))
	{
		echo "<font color=red><b><h3>  --- The Fields are Required!! </h3></b></font>";
	} else 
	{
	require("connect1.php");
	$no = $_POST['payNo'];
	$amount = $_POST['payAmount'];
	$date = $_POST['payDate'];
	$notes = $_POST['payNote'];
	
	$query = "INSERT INTO `banpayment` (`no.`, `amount`, `date`, `notes`) VALUES ('$no', '$amount', '$date', '$notes') ";
	
	$result=mysql_query($query)  or die(mysql_error());
	
	if($result)
		{
			echo "<meta http-equiv='refresh' content='0; url=cashFlow4.php'>";
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
<!-- saved from url=(0053)http://www.stevedawson.com/rsa/rsa-demo-v1.1/main.php -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="gr__stevedawson_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Cash Flow</title>

<link rel="stylesheet" type="text/css" href="./Main Overview_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./Main Overview_files/form.css" media="screen">
<script src="./Main Overview_files/jquery.min.js.download"></script>
<script src="./Main Overview_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./Main Overview_files/jquery-ui.css">
<script src="./Main Overview_files/jquery-ui.js.download"></script>


<link href="./Main Overview_files/tooltip.css" rel="stylesheet" type="text/css">
<style type="text/css">
.table{
	height: 10px;
    overflow: auto;
	}
</style>
</head>
<body data-gr-c-s-loaded="true">
<nav><br /><br /><br /><br />
<div style="position: absolute; left: 25px; top: 14px; width: 219px;">
<a href="main4.php">Home</a>
<a href="logout4.php">Logout</a>
</div>
</nav>	
</div>
<form action="cashFlow4.php" method="post">
<div style="position: absolute; width: 238px; left: 567px; top: 28px;" >
<h3>Insert a Withrawal</h3>
No.:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="withNo" style="width:50px" /><br />
Amount: <input type="text" name="withAmount" style="width:80px" /><br />
Date: &nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="withDate" style="width:120px" /><br />
Notes:&nbsp;&nbsp; <input type="text" name="withNote" style="width:50px" /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="subWith" style="width:60px" />

</div>

<div style="position: absolute; width: 238px; left: 950px; top: 28px;">
<h3>Insert a Payment</h3>
No.: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="payNo" style="width:50px" /><br />
Amount: <input type="text" name="payAmount" style="width:80px" /><br />
Date: &nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="payDate" style="width:120px" /><br />
Notes:&nbsp;&nbsp; <input type="text" name="payNote" style="width:50px" /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="subPay" style="width:60px" />

</div>

<div class="table" style="position: absolute; left: 552px; top: 325px; width: 337px; height: 231px;">

<?php
 require("connect1.php");
$query1= "SELECT * FROM `banwithdrawal` ORDER BY `no.` ASC ";
	if($is_query_run = mysql_query($query1))
	{
		echo "<center><caption><b>Withdrawal</b></caption> 
		<table border=1 width=100%><thead><tr>
		<th>No.</th>
		<th>Amount</th>
		<th>Date</th>
		<th> Notes</th>
		</tr>		
		</thead>
				</center>";
			
			while($row=mysql_fetch_assoc($is_query_run))
				{		
					echo "<tr>";
					echo "<td>" .$row['no.']. "</td>";
					echo "<td>" .$row['amount']. "</td>";
					echo "<td>" .$row['date']. "</td>";
					echo "<td>" .$row['note']. "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
	}
	

	
	?>

</div>

<div style="position: absolute; left: 928px; top: 327px; width: 337px; height: 231px;">

<?php
 require("connect1.php");
$query1= "SELECT * FROM `banpayment` ORDER BY `no.` ASC ";
	if($is_query_run = mysql_query($query1))
	{
		echo "<center><caption><b>Payment</b></caption> 
		<table border=1 width=100%><thead><tr>
		<th>No.</th>
		<th>Amount</th>
		<th>Date</th>
		<th> Notes</th>
		</tr>		
		</thead>
				</center>";
			
			while($row=mysql_fetch_assoc($is_query_run))
				{		
					echo "<tr>";
					echo "<td>" .$row['no.']. "</td>";
					echo "<td>" .$row['amount']. "</td>";
					echo "<td>" .$row['date']. "</td>";
					echo "<td>" .$row['notes']. "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
	}
	

	
	?>

</div>

<div class="index-box" style="position: absolute; left: 76px; top: 150px; width: 437px;">
<div style="position: absolute; left: 14px; top: -35px;"> <label><b> Total<br /> Expenses: </b></label> </div>
<input readonly type="text" name="totlEx" style="width:40px; height:40px; color:black" class="sub-box" value=" <?php
  require("connect1.php");
$q = mysql_query("SELECT SUM(amount) as total FROM `banexpenses`");
{
	while($r = mysql_fetch_assoc($q))
	{
	echo $r['total'];
	}
}
?>				
">
<div style="position: absolute; left: 254px; top: -40px; width: 178px;"> <label><b> S.R.Co. Withdrawals: </b></label> </div>
<input readonly type="text" style="width:40px; height:40px; color:black" class="sub-box" value=" <?php
  require("connect1.php");
$q = mysql_query("SELECT SUM(amount) as totalR FROM `banwithdrawal`");
{
	while($r = mysql_fetch_assoc($q))
	{
	echo $r['totalR'];
	}
}
?>				
">
<br /><br /><br /><br /><br /><br /><br />
<div style="position: absolute; left: 15px; top: 106px;"> <label><b> Total<br /> Revenue: </b></label> </div>
<input readonly type="text" style="width:40px; height:40px; color:black" class="sub-box" value=" <?php
  require("connect1.php");
$q = mysql_query("SELECT SUM(amount)  as totalre FROM `banrevenue`");
{
	while($r = mysql_fetch_assoc($q))
	{
	echo $r['totalre'];
	}
}
?>				
">
<div style="position: absolute; left: 243px; top: 109px; width: 108px;" > <label><b> S.R.Co. <br />Payments: </b></label> </div>
<input readonly type="text" style="width:40px; height:40px; color:black" class="sub-box" value=" <?php
  require("connect1.php");
$q = mysql_query("SELECT SUM(amount)  as totalp FROM `banpayment`");
{
	while($r = mysql_fetch_assoc($q))
	{
	echo $r['totalp'];
	}
}
?>				
">
<br /><br /><br /><br /><br /><br /><br />
<div style="position: absolute; left: 11px; top: 241px; width: 183px;"> <label><b> Cash Balance/ Virtual: </b></label> </div>
<input readonly type="text" name="virtu" style="width:40px; height:40px" class="sub-box" value=" <?php
  require("connect1.php");
  $q4 = mysql_query("SELECT SUM(amount) as total1 FROM 
	(
	SELECT amount 
	FROM `banwithdrawal` 
	UNION ALL 
	SELECT amount
	FROM `banexpenses`
	) t");
	$q6 = mysql_query("SELECT SUM(amount) as total2 FROM 
	(
	SELECT amount 
	FROM `banpayment`
	UNION ALL 
	SELECT amount
	FROM `banrevenue`
	) t");
	while($r4 = mysql_fetch_assoc($q4))
				{
					while($r6 = mysql_fetch_assoc($q6))
					{
	$rr['totaly'] = ($r4['total1'] - $r6['total2']) ;
	echo $rr['totaly'];
					}
				}
  ?>">
<div style="position: absolute; left: 243px; top: 246px; width: 183px;"> <label><b> Cash Balance/ Actual: </b></label> </div>
<input type="text" name="actu" style="width:40px; height:40px" class="sub-box">
</div>
<br><br>
</form>

<script type="text/javascript" src="./Main Overview_files/jsapi"></script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Incoming', 'Outgoing'],
	
	['Jan-17',0.00,0.00],['Feb-17',0.00,0.00],['Mar-17',0.00,0.00],['Apr-17',0.00,0.00],['May-17',0.00,0.00],['Jun-17',0.00,0.00],['Jul-17',0.00,0.00],['Aug-17',0.00,0.00],['Sep-17',0.00,0.00],['Oct-17',0.00,0.00],['Nov-17',0.00,0.00],['Dec-17',0.00,0.00],    ]);

        var options = {
          title: ' Yearly Accounts Overview',
		  colors: ['green','#da4b39'],
		  is3D:true,
          hAxis: {title: 'Yearly Accounts Overview', titleTextStyle: {color: '#666666'}}
		  
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script><script src="./Main Overview_files/saved_resource" type="text/javascript"></script><link href="./Main Overview_files/ui+en_GB.css" type="text/css" rel="stylesheet"><script src="./Main Overview_files/format+en_GB,default+en_GB,ui+en_GB,corechart+en_GB.I.js.download" type="text/javascript"></script>
  <div class="footer" style="position: absolute; left: 505px; top: 648px; width: 259px;">
	<p>© 2017 - Powered By 4F Group - v1.0</p>
</div></div><div style="position: absolute; display: none;"><div style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">Incoming</div></div><div style="position: absolute; display: none;"><div style="background: infobackground; padding: 1px; border: 1px solid infotext; font-size: 14px; margin: 14px; font-family: Arial;">Outgoing</div></div>


</body></html>