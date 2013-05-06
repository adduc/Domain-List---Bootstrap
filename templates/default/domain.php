<!DOCTYPE html>
<html>
	<head>
		<title>Domains</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//56d5b6a811eb63366b5b-abd8dd3b60fe71e7b4688619b28627d4.r72.cf1.rackcdn.com/bootstrap-combined.min.css" rel="stylesheet">
		<link href="<?php echo $template; ?>css/custom.css" rel="stylesheet">
		<style>
			body { padding-top: 60px; }
			@media (max-width: 979px) {
  				body { padding-top: 0px; }
			}
		</style>
	</head>
    
<?php	
$domain = $_GET['domain'];
$domain_mx = dns_get_record("bcarlsonmedia.com", DNS_MX);
$domain_cname = dns_get_record("bcarlsonmedia.com", DNS_CNAME);
$domain_ns = dns_get_record("bcarlsonmedia.com", DNS_NS);
;
?>
    
<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="./#">Domains</a>
		</div>
	</div>
</div>

<div class="container content">
	<table class="table table-striped table-condensed">
		<thead>
		<tr>
			<th id="$ips">Domain</th>
			<th id="$value">A - IP Address</th>
		</tr>
</thead>
    
<tbody>
<tr>
<td>
	<?php
	$ips = gethostbynamel($domain);
	echo $domain;
	?>
</td>
<td>
	<?php	
	foreach ($ips as $ip => $value){
	echo $value . "\n";
	}
	?>	
</td>	
<tr>
	<th id="$ips">Domain</th>
	<th id="$value">MX Records</th>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[0]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[0]['target'])) { }
	else {
	echo $domain_mx[0]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[1]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[1]['target'])) { }
	else {
	echo $domain_mx[1]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[2]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[2]['target'])) { }
	else {
	echo $domain_mx[2]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[3]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[3]['target'])) { }
	else {
	echo $domain_mx[3]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[4]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[4]['target'])) { }
	else {
	echo $domain_mx[4]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[5]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[5]['target'])) { }
	else {
	echo $domain_mx[5]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_mx[6]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_mx[6]['target'])) { }
	else {
	echo $domain_mx[6]['target'];
	}
	?>
</td>
</tr>
<tr>
	<th id="$ips">Domain</th>
	<th id="$value">CNAME Records</th>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[0]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[0]['target'])) { }
	else {
	echo $domain_cname[0]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[1]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[1]['target'])) { }
	else {
	echo $domain_cname[1]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[2]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[2]['target'])) { }
	else {
	echo $domain_cname[2]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[3]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[3]['target'])) { }
	else {
	echo $domain_cname[3]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[4]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[4]['target'])) { }
	else {
	echo $domain_cname[4]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[5]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[5]['target'])) { }
	else {
	echo $domain_cname[5]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[6]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[6]['target'])) { }
	else {
	echo $domain_cname[6]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[7]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[7]['target'])) { }
	else {
	echo $domain_cname[7]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[8]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[8]['target'])) { }
	else {
	echo $domain_cname[8]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[9]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[9]['target'])) { }
	else {
	echo $domain_cname[9]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[10]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[10]['target'])) { }
	else {
	echo $domain_cname[10]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[10]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[10]['target'])) { }
	else {
	echo $domain_cname[10]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[11]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[11]['target'])) { }
	else {
	echo $domain_cname[11]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[12]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[12]['target'])) { }
	else {
	echo $domain_cname[12]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[13]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[13]['target'])) { }
	else {
	echo $domain_cname[13]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_cname[14]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_cname[14]['target'])) { }
	else {
	echo $domain_cname[14]['target'];
	}
	?>
</td>
</tr>
<tr>
	<th id="$ips">Domain</th>
	<th id="$value">NS Records</th>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_ns[0]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_ns[0]['target'])) { }
	else {
	echo $domain_ns[0]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_ns[1]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_ns[1]['target'])) { }
	else {
	echo $domain_ns[1]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_ns[2]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_ns[2]['target'])) { }
	else {
	echo $domain_ns[2]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_ns[3]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_ns[3]['target'])) { }
	else {
	echo $domain_ns[3]['target'];
	}
	?>
</td>
</tr>
<tr>
<td>
	<?php
	if (empty ($domain_ns[4]['target'])) { }
	else {
	echo $domain;
	}
	?>
</td>
<td>
	<?php
	if (empty ($domain_ns[4]['target'])) { }
	else {
	echo $domain_ns[4]['target'];
	}
	?>
</td>
</tr>

<?php echo $sTable; ?>
</tbody>
</table>

</div>
	<div class="container">
	</div>
	<script src="//56d5b6a811eb63366b5b-abd8dd3b60fe71e7b4688619b28627d4.r72.cf1.rackcdn.com/jquery-1.9.1.min.js"></script>
	<script src="//56d5b6a811eb63366b5b-abd8dd3b60fe71e7b4688619b28627d4.r72.cf1.rackcdn.com/bootstrap.min.js"></script>
	<?php echo $sJavascript; ?>
</body>
</html>