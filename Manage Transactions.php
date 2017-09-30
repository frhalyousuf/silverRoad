<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0067)http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Manage Transactions</title>

<link rel="stylesheet" type="text/css" href="./Manage Transactions_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./Manage Transactions_files/form.css" media="screen">
<script src="./Manage Transactions_files/jquery.min.js.download"></script>
<script src="./Manage Transactions_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./Manage Transactions_files/jquery-ui.css">
<script src="./Manage Transactions_files/jquery-ui.js.download"></script>
<script>

  $(function() {
	$( "#datepicker" ).datepicker({ 
		dateFormat: "mm-dd-yy",
	    showOn: "button",
        buttonImage: "img/calendar.gif",
        buttonImageOnly: true
			 
		 });
  });
  
$(function() {
	$( "#datepicker-edate" ).datepicker({ 
		dateFormat: "mm-dd-yy",
	    showOn: "button",
        buttonImage: "img/calendar.gif",
        buttonImageOnly: true
			 
		 });
  });
	
 $(function() {
	$( "#datepicker-sdate" ).datepicker({ 
		dateFormat: "mm-dd-yy",
	    showOn: "button",
        buttonImage: "img/calendar.gif",
        buttonImageOnly: true
			 
		 });
	
  });
	  
</script>
</head>
<body>
<div class="wrapper">
<div style="background-color:#2d2d2d;margin:0px;padding:5px;padding-top:5px;">
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/main.php" style="font-weight:bold;margin-left:30px;color:#FFC;">DEMO - Really Simple Accounting and Invoicing  - SOME FUNCTIONS DISABLED</a>
<a href="http://www.stevedawson.com/rsa/" style="font-weight:bold;margin-left:30px;color:#FFF;">Close Demo</a>
</div>
<br><div class="header">
<div class="switch"><div class="logo">Really Simple Accounts</div>

Dawson Test Account  - balance: <span class="account-balance">$1,556.27</span></div>		
<nav>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/main.php">Home</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php">Transactions</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php">Invoices</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/quote.php">Quotes</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/card.php">Cards</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/settings.php">Settings</a>
<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/logout.php">Logout</a>
<div class="clear"></div>
 </nav>	
</div><h1>Manage Your Transactions</h1>
<p>You can edit or delete any of the incoming or outgoing payments you have made. All changes made here will be refelected in your accounting reports. New transaction entries are listed first.</p>
<div style="float:right"><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-add.php?t=IN" class="button">Record an Income</a> <a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-add.php?t=EX" class="button">Record an Expense</a></div>
<div class="clear"></div>
<br>

<table><thead><tr>
<th>ID</th>
		<th>Date</th>
		<th>Transaction Type</th>
		<th>Type</th>
		<th>Account File</th>
		<th>Incoming: $2,076.27</th>
		<th>Outgoing: $520.00</th>
		<th></th>
		</tr>		
		</thead><tbody><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=54fcb789b02272de75b623e99ec1f75e&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA00017</a></td><td>08-26-2015</td><td>IN</td><td>Invoice</td><td>ACME HOSTING CO</td><td>$89.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=54fcb789b02272de75b623e99ec1f75e&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=22&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#22</a></td><td>08-23-2015</td><td>IN</td><td>PayPal</td><td>Misc. Sales</td><td>$444.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=22"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=22" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=21&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#21</a></td><td>07-31-2015</td><td>EX</td><td>Cheque</td><td>Office Equipment</td><td>-</td><td>$495.00</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=21"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=21" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=5701e847f96c860fcd2d19c9ef869c48&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA00013</a></td><td>07-29-2015</td><td>IN</td><td>Invoice</td><td>Poker Club</td><td>$2.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=5701e847f96c860fcd2d19c9ef869c48&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=810be5d855197932588acd1c3c66e3e0&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA00010</a></td><td>07-29-2015</td><td>IN</td><td>Invoice</td><td>ACME HOSTING CO</td><td>$25.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=810be5d855197932588acd1c3c66e3e0&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=a5993025133062d448191c7ddc308c5d&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0008</a></td><td>07-26-2015</td><td>IN</td><td>Invoice</td><td>Poker Club</td><td>$420.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=a5993025133062d448191c7ddc308c5d&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=17&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#17</a></td><td>07-22-2015</td><td>IN</td><td>Bank Transfer</td><td>Product Sales</td><td>$50.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=17"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=17" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=b0a363b512ffe3ef1918f56542c97ff3&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0006</a></td><td>07-22-2015</td><td>IN</td><td>Invoice</td><td>ACME HOSTING CO</td><td>$42.49</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=b0a363b512ffe3ef1918f56542c97ff3&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=12&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#12</a></td><td>07-22-2015</td><td>IN</td><td>Cash</td><td>Online Sales</td><td>$100.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=12"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=12" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=11&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#11</a></td><td>07-22-2015</td><td>IN</td><td>Cash</td><td>Owner Investment</td><td>$500.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=11"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=11" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=bf0a3be91b95592808506fd50bef5799&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0005</a></td><td>07-22-2015</td><td>IN</td><td>Invoice</td><td>ACME HOSTING CO</td><td>$32.99</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=bf0a3be91b95592808506fd50bef5799&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=5&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#5</a></td><td>07-22-2015</td><td>IN</td><td>Cash</td><td>Misc. Sales</td><td>$10.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=5"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=5" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=6&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#6</a></td><td>07-22-2015</td><td>IN</td><td>Bank Transfer</td><td>Misc. Sales</td><td>$20.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=6"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=6" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=7&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#7</a></td><td>07-22-2015</td><td>IN</td><td>Bank Transfer</td><td>Misc. Sales</td><td>$20.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=7"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=7" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=8&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#8</a></td><td>07-22-2015</td><td>IN</td><td>Bank Transfer</td><td>Misc. Sales</td><td>$40.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=8"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=8" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=72bbcfee7d66e6b2c05ce29103809626&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0004</a></td><td>07-22-2015</td><td>IN</td><td>Invoice</td><td>Poker Club</td><td>$122.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=72bbcfee7d66e6b2c05ce29103809626&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=1aa9b899be61c546f665fe229b806fb4&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0001</a></td><td>07-21-2015</td><td>IN</td><td>Invoice</td><td>Poker Club</td><td>$63.79</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=1aa9b899be61c546f665fe229b806fb4&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=c82573d582473e3f9d5feb408abba086&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#RSA0003</a></td><td>07-21-2015</td><td>IN</td><td>Invoice</td><td>Poker Club</td><td>$10.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;print.php?id=c82573d582473e3f9d5feb408abba086&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Transactions_files/icon-view.png" width="14" height="16" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=2&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#2</a></td><td>07-20-2015</td><td>EX</td><td>Cash</td><td>Telephone</td><td>-</td><td>$25.00</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=2"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=2" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr></tr><tr><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php#" target="rsa" onclick="window.open(&#39;transaction-view.php?id=1&#39;,&#39;rsa&#39;, 
&#39;height=500, width=400, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;">#1</a></td><td>07-20-2015</td><td>IN</td><td>Cash</td><td>Misc. Sales</td><td>$85.00</td><td>-</td><td><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-edit.php?id=1"><img src="./Manage Transactions_files/icon-edit.png" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/transaction-manage.php?op=dt&amp;id=1" onclick="return confirm(&#39;Are you sure you want to delete this transaction?&#39;);"><img src="./Manage Transactions_files/icon-delete.png" border="0"></a></td></tr><tr> </tr></tbody></table><br>
<br>
<b>1</b>
<div class="clear"></div>
<br>
<br>
<div class="footer">
			<p>© 2017 - <a href="http://www.stevedawson.com/rsa/" target="blank_">Really Simple Accounts and Accounting</a> - v1.1</p>
</div></div>


</body></html>