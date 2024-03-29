<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" href="dist/css/style.css">
	<link rel="stylesheet" href="dist/css/all.min.css">
	<link rel="stylesheet" href="dist/css/fontawesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<div class="animated slideInDown">
					<div class="card mt-5 border-success">
						<div class="card-body">
							<form action="sign/sign.php" method="post">
								<div class="form-group">
									<label for="username" class="label-control">Nomor Username / Email</label>
									<input type="text" name="username" id="username" class="form-control mt-3" placeholder="Masukkan Username / Email" aria-describedby="helpId" autocomplete="off">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<div class="input-group">
										<input type="password" name="password" id="password" class="form-control mt-3" placeholder="Password" aria-describedby="helpId">
										<div class="input-group-append mt-3">
											<button type="button" class="btn btn-outline-secondary" id="eye" onclick="viewPass();"><i class="fas fa-eye"></i></button>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-success btn-md" id="sign" name="sign">Masuk <i class="fas fa-sign-in-alt"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
	<script type="text/javascript">
		function viewPass(){
			var p = document.getElementById("password");
			if(p.type === "password"){
				p.type = "text";
			} else {
				p.type = "password";
			}
		}
	</script>
</body>
</html>