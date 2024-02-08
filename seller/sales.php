<!Doctype HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"   />

</head>

<body>
	<?php
	include("navigation.php");
	?>


	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: #000e04;" class="nav"><i
						class="fa-solid fa-bars"></i> Sales</span>
				<span style="font-size:30px;cursor:pointer; color: rgb(0, 0, 0);" class="nav2"><i
						class="fa-solid fa-bars"></i> </span>
			</div>


			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />

		<div class="col-div-3">
			<div class="box">
				<p>67<br /><span>Total Sales</span></p>
				<!-- <i class="fa fa-users box-icon"></i> -->
				<i class="fa-solid fa-cart-shopping"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>88<br /><span>Order</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br /><br />
		<div class="col-div-8">
			<div class="box-8">
				<div class="content">

					<br />
					<table>
						<tr>
							<th>SR. no</th>
							<th>Product Name</th>
							<th>Buyer Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total</th>
						</tr>


					</table>
				</div>
			</div>
		</div>


		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

		$(".nav").click(function () {
			$("#mySidenav").css('width', '70px');
			$("#main").css('margin-left', '70px');
			$(".logo").css('visibility', 'visible');
			$(".logo span").css('visibility', 'visible');
			$(".logo span").css('margin-left', '-10px');
			$(".icon-a").css('visibility', 'visible');
			$(".icons").css('visibility', 'visible');
			$(".icons").css('margin-left', '-8px');
			$(".nav").css('display', 'none');
			$(".nav2").css('display', 'block');
			$(".img").css('width', '60px');
			$(".img").css('height', '45px');
			$(".white").css('color', 'white');
		});

		$(".nav2").click(function () {
			$("#mySidenav").css('width', '300px');
			$("#main").css('margin-left', '300px');
			$(".logo").css('visibility', 'visible');
			$(".icon-a").css('visibility', 'visible');
			$(".icons").css('visibility', 'visible');
			$(".nav").css('display', 'block');
			$(".nav2").css('display', 'none');
			$(".img").css('width', '160px');
			$(".img").css('height', '110px');
			$(".white").css('color', '#818181');
		});

	</script>

</body>


</html>