<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Manage Invoices</title>

<link rel="stylesheet" type="text/css" href="./Manage Invoices_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./Manage Invoices_files/form.css" media="screen">
<script src="./Manage Invoices_files/jquery.min.js.download"></script>
<script src="./Manage Invoices_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./Manage Invoices_files/jquery-ui.css">
<script src="./Manage Invoices_files/jquery-ui.js.download"></script>
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
</div>  <h1>Manage Invoices</h1>
  <p>These are the invoices which you have created and have been assigned to a client card account. You can use the open invoices and closed invoices quick link filters to manage viewing your invoices.</p>
  <p style="float:right;"><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice-create.php" class="button">Create New Invoice</a></p>
  <p style="float:left;"><a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?is=OP&amp;card_id=">Open Invoices</a> | <a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?is=CL&amp;card_id=">Closed Invoices</a> | <a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php">All Invoices</a></p>
  <div class="clear"></div>
  <p>Invoice amounts stated include TAX.</p>Only invoices which are still pending payment can be edited.<br><table><thead><tr>
<th>#</th>
        <th>Invoice Date</th>
		<th>Paid Date</th>
		<th>Company Name</th>
		<th>Invoice Status</th>
		<th>Invoice Amount</th>
		<th></th>
		</tr>		
		</thead><tbody><tr><td>RSA00017</td><td>08-22-2015</td><td>07-21-2015</td><td>ACME HOSTING CO</td><td>CLOSED</td><td>$97.90</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=17" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=54fcb789b02272de75b623e99ec1f75e" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=54fcb789b02272de75b623e99ec1f75e&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=17"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr><style type="text/css">
#rp-panel14 {
	display: none;
	background-color: #f3f3f3;
	border: solid 1px #ccc;
	border-radius: 3px;
	padding: 5px;
	position: relative;
	z-index: 100;
	margin-top: -22px;
	padding-top: 5px
}
#rp14 {
	text-align: center;
	position: relative;
	z-index: 50;
	margin-top: -3px;
	cursor: pointer;
}
#rp-close14 {
	float: right;
	cursor: pointer;
	font-size: 20px;
}
</style>

<script type="text/javascript">  
$(document).ready(function(){  
    $('#rp14').click(function(){  
     $('#rp-panel14').slideToggle('slow');  
    }); 
	 
	$('#rp-close14').click(function()
     {  
	   $('#rp-panel14').hide('slow');
	  });
});
  $(function() {
	$( '#datepicker14' ).datepicker({ 
		dateFormat: 'mm-dd-yy',
	    showOn: 'button',
        buttonImage: 'img/calendar.gif',
        buttonImageOnly: true
			 
		 });
  });  
</script></tr><tr><td>RSA00014</td><td>07-30-2015</td><td>-</td><td>Poker Club</td><td>OPEN <a id="rp14">record payment</a>
<div id="rp-panel14"><a id="rp-close14" title="close">x</a>
<form method="post">
<input type="hidden" name="op" value="rp">
<input type="hidden" name="id" value="14">
<input type="hidden" name="card_id" value="1434394850">
<label style="width:100px;">Payment Date:</label><input type="text" name="payment_date" id="datepicker14" style="width:80px;display:inline;" value="09-22-2017" class="hasDatepicker"><img class="ui-datepicker-trigger" src="./Manage Invoices_files/calendar.gif" alt="..." title="...">
<button type="submit" class="form-button">Record</button>

</form></div></td><td>$577.50</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=14" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=8f1f13d832eb18ed4f6c1d9db7fdb4e6" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=8f1f13d832eb18ed4f6c1d9db7fdb4e6&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=14"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice-edit.php?id=14"><img src="./Manage Invoices_files/icon-edit.png" border="0" title="edit invoice"></a></td></tr><tr></tr><tr><td>RSA00013</td><td>07-29-2015</td><td>06-23-2015</td><td>Poker Club</td><td>CLOSED</td><td>$2.20</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=13" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=5701e847f96c860fcd2d19c9ef869c48" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=5701e847f96c860fcd2d19c9ef869c48&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=13"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr><style type="text/css">
#rp-panel11 {
	display: none;
	background-color: #f3f3f3;
	border: solid 1px #ccc;
	border-radius: 3px;
	padding: 5px;
	position: relative;
	z-index: 100;
	margin-top: -22px;
	padding-top: 5px
}
#rp11 {
	text-align: center;
	position: relative;
	z-index: 50;
	margin-top: -3px;
	cursor: pointer;
}
#rp-close11 {
	float: right;
	cursor: pointer;
	font-size: 20px;
}
</style>

<script type="text/javascript">  
$(document).ready(function(){  
    $('#rp11').click(function(){  
     $('#rp-panel11').slideToggle('slow');  
    }); 
	 
	$('#rp-close11').click(function()
     {  
	   $('#rp-panel11').hide('slow');
	  });
});
  $(function() {
	$( '#datepicker11' ).datepicker({ 
		dateFormat: 'mm-dd-yy',
	    showOn: 'button',
        buttonImage: 'img/calendar.gif',
        buttonImageOnly: true
			 
		 });
  });  
</script></tr><tr><td>RSA00011</td><td>07-24-2015</td><td>-</td><td>ACME HOSTING CO</td><td>OPEN <a id="rp11">record payment</a>
<div id="rp-panel11"><a id="rp-close11" title="close">x</a>
<form method="post">
<input type="hidden" name="op" value="rp">
<input type="hidden" name="id" value="11">
<input type="hidden" name="card_id" value="1434493030">
<label style="width:100px;">Payment Date:</label><input type="text" name="payment_date" id="datepicker11" style="width:80px;display:inline;" value="09-22-2017" class="hasDatepicker"><img class="ui-datepicker-trigger" src="./Manage Invoices_files/calendar.gif" alt="..." title="...">
<button type="submit" class="form-button">Record</button>

</form></div></td><td>$72.87</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=11" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=1562acd913598d00a74f085170732f74" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=1562acd913598d00a74f085170732f74&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=11"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice-edit.php?id=11"><img src="./Manage Invoices_files/icon-edit.png" border="0" title="edit invoice"></a></td></tr><tr></tr><tr><td>RSA00010</td><td>07-29-2015</td><td>06-23-2015</td><td>ACME HOSTING CO</td><td>CLOSED</td><td>$27.50</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=10" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=810be5d855197932588acd1c3c66e3e0" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=810be5d855197932588acd1c3c66e3e0&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=10"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr><style type="text/css">
#rp-panel9 {
	display: none;
	background-color: #f3f3f3;
	border: solid 1px #ccc;
	border-radius: 3px;
	padding: 5px;
	position: relative;
	z-index: 100;
	margin-top: -22px;
	padding-top: 5px
}
#rp9 {
	text-align: center;
	position: relative;
	z-index: 50;
	margin-top: -3px;
	cursor: pointer;
}
#rp-close9 {
	float: right;
	cursor: pointer;
	font-size: 20px;
}
</style>

<script type="text/javascript">  
$(document).ready(function(){  
    $('#rp9').click(function(){  
     $('#rp-panel9').slideToggle('slow');  
    }); 
	 
	$('#rp-close9').click(function()
     {  
	   $('#rp-panel9').hide('slow');
	  });
});
  $(function() {
	$( '#datepicker9' ).datepicker({ 
		dateFormat: 'mm-dd-yy',
	    showOn: 'button',
        buttonImage: 'img/calendar.gif',
        buttonImageOnly: true
			 
		 });
  });  
</script></tr><tr><td>RSA0009</td><td>07-26-2015</td><td>-</td><td>ACME HOSTING CO</td><td>OPEN <a id="rp9">record payment</a>
<div id="rp-panel9"><a id="rp-close9" title="close">x</a>
<form method="post">
<input type="hidden" name="op" value="rp">
<input type="hidden" name="id" value="9">
<input type="hidden" name="card_id" value="1434493030">
<label style="width:100px;">Payment Date:</label><input type="text" name="payment_date" id="datepicker9" style="width:80px;display:inline;" value="09-22-2017" class="hasDatepicker"><img class="ui-datepicker-trigger" src="./Manage Invoices_files/calendar.gif" alt="..." title="...">
<button type="submit" class="form-button">Record</button>

</form></div></td><td>$308.00</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=9" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=2952302dcfba1cd7e7c51446ba1c516f" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=2952302dcfba1cd7e7c51446ba1c516f&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=9"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice-edit.php?id=9"><img src="./Manage Invoices_files/icon-edit.png" border="0" title="edit invoice"></a></td></tr><tr></tr><tr><td>RSA0008</td><td>07-26-2015</td><td>06-20-2015</td><td>Poker Club</td><td>CLOSED</td><td>$462.00</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=8" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=a5993025133062d448191c7ddc308c5d" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=a5993025133062d448191c7ddc308c5d&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=8"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr></tr><tr><td>RSA0006</td><td>07-22-2015</td><td>06-16-2015</td><td>ACME HOSTING CO</td><td>CLOSED</td><td>$46.74</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=6" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=b0a363b512ffe3ef1918f56542c97ff3" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=b0a363b512ffe3ef1918f56542c97ff3&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=6"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr></tr><tr><td>RSA0005</td><td>07-22-2015</td><td>06-16-2015</td><td>ACME HOSTING CO</td><td>CLOSED</td><td>$32.99</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=5" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=bf0a3be91b95592808506fd50bef5799" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=bf0a3be91b95592808506fd50bef5799&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=5"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr></tr><tr><td>RSA0004</td><td>07-21-2015</td><td>06-16-2015</td><td>Poker Club</td><td>CLOSED</td><td>$122.00</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=4" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=72bbcfee7d66e6b2c05ce29103809626" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=72bbcfee7d66e6b2c05ce29103809626&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=4"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr></tr><tr><td>RSA0003</td><td>07-21-2015</td><td>06-15-2015</td><td>Poker Club</td><td>CLOSED</td><td>$11.00</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=3" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=c82573d582473e3f9d5feb408abba086" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=c82573d582473e3f9d5feb408abba086&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=3"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr></tr><tr><td>RSA0001</td><td>07-21-2015</td><td>06-15-2015</td><td>Poker Club</td><td>CLOSED</td><td>$63.79</td><td>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php?op=di&amp;id=1" onclick="return confirm(&#39;Are you sure you want to delete this invoice?&#39;);" title="delete"><img src="./Manage Invoices_files/icon-delete.png" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/print.php?id=1aa9b899be61c546f665fe229b806fb4" target="blank_" title="print"><img src="./Manage Invoices_files/icon-print.png" width="18" height="18" border="0"></a>&nbsp;&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/invoice.php#" target="rsa" onclick="window.open(&#39;print.php?id=1aa9b899be61c546f665fe229b806fb4&#39;,&#39;rsa&#39;, 
&#39;height=800, width=750, toolbar=no, directories=no,status=no, menubar=no, scrollbars=yes,resizable=yes&#39;); 
return false;"><img src="./Manage Invoices_files/icon-view.png" width="14" height="12" border="0"></a>&nbsp;<a href="http://www.stevedawson.com/rsa/rsa-demo-v1.1/email.php?id=1"><img src="./Manage Invoices_files/icon-email.png" border="0" title="email invoice"></a></td></tr><tr> </tr></tbody></table>  <br>
  <br>
  <b>1</b>  <br>
  <div class="clear"></div>
  <br>
  <br>
  <div class="footer">
			<p>© 2017 - <a href="http://www.stevedawson.com/rsa/" target="blank_">Really Simple Accounts and Accounting</a> - v1.1</p>
</div></div>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>