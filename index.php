<?php

require_none 'app/config.php';
require_once 'app/modules/hg-api.php';

$hg = new HG_API(HG_API_KEY);
$dolar = $hg->dolar_quotation();


?>
<!doctype html>
<html lang="en">
	<head>
		<title>Cotação Dolar</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit-no">

		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="bootstrap.min.js">
		<link rel="stylesheet" href="jquery-3.3.1.min.js">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Cotação Dolar</p>
					<?php if ($hg->is_error() == false);?>
					<p>USD <span class="badge badge-pill badge-primary"><?php echo ($dolar['buy'];)?></span></p>
					<?php else: ?>
					<p>USD <span class="badge badge-pill badge-danger">Serviços Indisponível</span></p>	

					<?php endif; ?>	

					<p>USD<span class="badge badge-pill badge-primary">XXXX</span></p>	
				</div>
			</div>
		</div>
	<!-- Optional JavaScript -->
	<!--JQuery first, then Popper.js, then Bootstrap JS -->
	<script src="./jquery-3.3.1.min.js"></script>
	<script src="./popper.min.js"></script>
	<script src="./bootstrap.min.js"></script>
  </body>
</html>
