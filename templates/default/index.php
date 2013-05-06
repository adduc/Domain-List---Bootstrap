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
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	  	<div class="container">
		    <a class="brand" href="#">Domains</a>
		</div>
	  </div>
	</div>

	<div class="container content">
		<table class="table table-striped table-condensed">
			<thead>
			<tr>
				<th id="domain">Domain</th>
				<th id="registrar">Registrar</th>
				<th id="exdate">Expiration Date</th>
				<th id="host">Host</th>
			</tr>
			</thead>
			<tbody>
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