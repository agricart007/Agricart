<?php 
include ("..\database\connection.php");
$query = "select * from seller_details";
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
                        Seller
                    </h1>
                    <p>
                        Display Information About Sellers<span class="las la-chart-lin"></span>
                    </p>
                </div>
            </div>
            

        </header>

        <main>
        <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Total Sellers</h3>
						<i class='las la-search' ></i>
						<i class='las la-filter' ></i>
					</div>
            <section>
                
                <div class="table-data">
                    <div class="order">
                        
                        <table>
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Created on</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                   <?php 
                                        while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['seller_id'];?></td>
                                            <td><?php echo $row['first_name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact_no'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['created_on'];?></td>
                                        </tr>
                                            
                                        <?php
                                        }
                                   ?>
                                    
                            </tbody>
                        </table>
                    </div>
                    
                </div>
    
            </section>

            
        

        </main>
    </div>

   
</body>
</html>