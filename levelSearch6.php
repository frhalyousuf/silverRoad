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


<script>
function myFunction() {
    window.print();
	
}
	</script>
	  

</head>
<bodydata-gr-c-s-loaded="true">

	
<div class="header" >	
    <nav>
  <a href="main6.php">Home</a></nav>	
</div>
<h1>&nbsp;</h1>
<div id="hideAll" style="position: absolute; width: 1099px; height: 140px; left: 7px; top: 72px;">
<h1><center> Search By levels </center></h1><br /><br>
<br>

<form action="levelSearch6.php" method="post">
 <center>

<font size="+1"><b> Select the Level:</b></font>
  <select name="lvl2" id="lvl2" style="width:150px">
    <option>   </option>
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
    &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;
  <font size="+1"><b> Select ٍStatus:</b></font>
  <select name="status" id="status" style="width:150px">
    <option>  </option>
    <option>Exempt</option>
    <option>Reduction</option>
   </select>
  <input type="submit" name="find" id=" finding" value=">>" style="width:40px; height:30px"><br />
  </center>
  <div style="position: absolute; width: 1101px; left: 2px; top: 139px; height: 951px;">
  
  <?php
 require 'connect1.php';
		
		if(isset($_POST["find"]))
		{
		$lvl = $_POST['lvl2'];
		
		$query1 = "SELECT `recNo`, `date`, `details`, `level`, SUM(`amount`) AS amount, `status`, `telNo.`, `notes` FROM `zanisterevenue` WHERE `level` = '$lvl' && `status` = '$status' GROUP BY `details` ORDER BY `recNo`";
	if($is_query_run = mysql_query($query1))
	{
		echo "<center>
		<table border=1 width=100% bordercolor=#0033FF bgcolor=#CCCCCC>
				<tr>
				<th>Receipt No.</th>
				<th>Date</th>
				<th>Details</th>
				<th>Level</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Notes</th>
				</tr>
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
					echo "<td>" .$row['notes']. "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
	}
	echo "<br><br>";
	echo "<button id=prnt onclick= myFunction() > Print This Page </button>";
	
		}
	
	?> 
  
  </div>
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer">
			<p>© 2017 - Powered By 4F Group - v1.0</p>
</div></div>

</body></html>
