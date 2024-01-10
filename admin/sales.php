<?php 
include ("..\database\connection.php");
$query = "select * from sales_details";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dasboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ("navbar.php"); ?>

    <div class="main-content">
        <header>
            <div class="header-title-wrapper">
                
                <div class="header-title">
                    <h1>
                        Sales
                    </h1>
                    <p>
                        Display Infomation About Website Sales<span class="las la-chart-lin"></span>
                    </p>
                </div>
            </div>
            

        </header>

        <main>

            <section>

                <h3 class="section-head">Overview</h3>
                <div class="analytics">
                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-eye"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Today Sales</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-store"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Orders</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                </div>
    
            </section>

            <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Total Sales</h3>
						<i class='las la-search' ></i>
						<i class='las la-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>#User ID</th>
                                <th>Name</th>
								<th>Order Date</th>
                                <th>Price</th>
                                <th>Payment</th>
                                <th>Order Status</th>
							</tr>
						</thead>
						<tbody>
                                <?php 
                                     while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['buyer_id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['order_date'];?></td>
                                            <td><?php echo $row['price'];?></td>
                                            <td><?php echo $row['payment'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            
                                        </tr>
                                            
                                        <?php
                                        }
                                   ?>
                            </tbody>
					</table>
				</div>
				
			</div>

         

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let ctx = document.querySelector("#revenueChart");
        ctx.height = 150;

        let revChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Sept 1", "Sept 3", "Sept 6", "Sept 9", "Sept 12", "Sept 15", "Sept 18", "Sept 21",
                "Sept 24", "Sept 27", "Sept 30"],
                datasets: [
                    {
                        label: "Sales",
                        borderColor: "green",
                        borderWidth: "3",
                        backgroundColor: "rgba(235, 247, 245, 0.7)",
                        data: [0,30,60,25,60,25,50,10,50,90,120]
                    },
                    {
                        label: "Viewers",
                        borderColor: "blue",
                        borderWidth: "3",
                        backgroundColor: "rgba(233, 238, 253, 0.7)",
                        data: [0,60,25,100,20,75,30,55,20,60,20]
                    }
                ]
            },
            options: {
                responsive: true,
                tooltips: {
                    intersect: false,
                    node: "index",
                }
            }
        });
          
    </script>
</body>
</html>