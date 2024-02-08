<!Doctype HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
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
						class="fa-solid fa-bars"></i> Order</span>
				<span style="font-size:30px;cursor:pointer; color: rgb(0, 0, 0);" class="nav2"><i
						class="fa-solid fa-bars"></i> Order</span>
			</div>

			<div class="col-div-6">

			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />


		<div class="clearfix"></div>
		<br /><br />
		<div class="col-div-8">
			<div class="box-8">
				<div class="content">
					<p>
					<h1>Total Orders</h1>
					</p>
					<br />
					<table>
						<tr>
							<th>SR No.</th>
							<th>Order Number</th>
							<th>Photo</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Tools</th>
						</tr>
						<tr>
							<td>Alfreds Futterkiste</td>
							<td>Maria Anders</td>
							<td>Germany</td>
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