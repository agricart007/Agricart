<?php 
include ("..\database\connection.php");
$query = "select * from seller_details";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
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
            <h3>Total Seller</h3>
            <div>
                <input type="text" id="sellerSearch" placeholder="Search by Seller Name" oninput="filterSellers()">
            </div>
            <form id="download">
                <!-- Move the download button inside the table head -->
                <button onclick="downloadCSV()"><i class="fa-solid fa-file-export"></i></button>
            </form>
        </div>
                    <section>

                        <div class="table-data">
                            <div class="order">
                                <table id="table">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Created on</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['seller_id']; ?></td>
                                                    <!-- <td><?php echo $row['photo']; ?></td> -->
                                                    <td>
                                                        <?php
                                                        $photo = empty($row['photo']) ? '../photos/profile.jpg' : $row['photo'];
                                                        echo "<img src='$photo' alt='Seller Photo' style='width: 50px; height: 50px; border-radius: 50%;'>";
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row['first_name']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td><?php echo $row['created_on']; ?></td>
                                                    <td>
                                                        <button onclick="openPopup(<?php echo $row['seller_id']; ?>)"><i class="fa-solid fa-magnifying-glass"></i> Views</button>
                                                        <!-- <a href="action.php?id=<?=$row['seller_id']?>" class="deactivate-button">deactivate</a> -->
                                                        <?php
                                                        if ($row['status'] == 0) {
                                                            // Display Deactivate button
                                                            echo '<a href="deactivate_action.php?seller_id=' . $row['seller_id'] . '" class="deactivate-button"><i class="fa-solid fa-trash"></i> Deactivate</a>';
                                                        } elseif ($row['status'] == 1) {
                                                            // Display Activate button
                                                            echo '<a href="activate_action.php?seller_id=' . $row['seller_id'] . '" class="activate-button"><i class="fa-solid fa-check"></i> Activate</a>';
                                                        }
                                                        ?>

                                                        <div class="overlay" id="overlay_<?php echo $row['seller_id']; ?>">
                                                            <div class="popup">
                                                                <span class="close-btn" onclick="closePopup(<?php echo $row['seller_id']; ?>)">×</span>
                                                                <h2>Seller Details</h2>
                                                                <form>
                                                                <div style="max-height: 400px; overflow-y: auto;">
                                                                    <!-- Adjust the following lines to display the correct details -->
                                                                    <table>
                                                                        <tr>
                                                                            <td>ID</td>
                                                                            <td>
                                                                                <div id="sellerIdDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['seller_id']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Photo</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['photo']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>First Name</td>
                                                                            <td>
                                                                                <div id="sellerNameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['first_name']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Last Name</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['last_name']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Email</td>
                                                                            <td>
                                                                                <div id="sellerEmailDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['email']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Contact</td>
                                                                            <td>
                                                                                <div id="sellerContactDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['contact_no']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Shop Name</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['shop_name']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Shop Address</td>
                                                                            <td>
                                                                                <textarea id="sellerShopAddressDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;" readonly="false"><?php echo $row['shop_address']; ?></textarea>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Photo</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['shop_photo']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Government Id</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['government_id']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>GST Number</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['gst_no']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Created On</td>
                                                                            <td>
                                                                                <div id="sellerPhotoDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['created_on']; ?></div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                        <?php
                                            }
                                        } else {?>
                                            <tr>
                                                <td colspan="6">
                                                    <p class='no-data-found'>No seller data found.</p>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                       ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </section>

                </div>
            </div>

        </main>
    </div>

    <script>
        function openPopup(sellerId) {
            document.getElementById("overlay_" + sellerId).style.display = "flex";
        }

        function closePopup(sellerId) {
            document.getElementById("overlay_" + sellerId).style.display = "none";
        }
        function downloadCSV() {
        // Open a new window or iframe to trigger the download
        var downloadWindow = window.open('fetch_details/fetch_seller_details.php', '_blank');
        downloadWindow.focus();
        }

        function filterSellers() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById("sellerSearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                // Reset display style for each row
                tr[i].style.display = "";

                // Loop through all columns in the current row
                for (j = 0; j < tr[i].cells.length; j++) {
                    td = tr[i].cells[j];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        // If the column contains the search query, break out of the loop
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            break;
                        }
                    }
                }

                // If none of the columns contain the search query, hide the row
                if (j === tr[i].cells.length) {
                    tr[i].style.display = "none";
                }
            }
        }

    </script>


    

</body>

</html>
