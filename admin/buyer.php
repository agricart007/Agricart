<?php 
include ("..\database\connection.php");
$query = "select * from buyer_details";
$result = mysqli_query($conn, $query);
include ("../session/session_start.php");
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
                        Buyer
                    </h1>
                    <p>
                        Display Information About Buyers<span class="las la-chart-lin"></span>
                    </p>
                </div>
            </div>


        </header>

        <main>
            <div class="table-data">
                <div class="order">
                <div class="head">
            <h3>Total Buyers</h3>
            <form id="csvForm">
                <!-- Move the download button inside the table head -->
                <button type="button" onclick="downloadCSV()"><i class="fa-solid fa-file-export"></i></button>
            </form>
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
                                            <th>Created on</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['Buyer_id']; ?></td>
                                                <td><?php echo $row['first_name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['created_on']; ?></td>
                                                <td>
                                                    <button onclick="openPopup(<?php echo $row['Buyer_id']; ?>)"><i class="fa-solid fa-magnifying-glass"></i> Views Details</button>
                                                    <div class="overlay" id="overlay_<?php echo $row['Buyer_id']; ?>">
                                                        <div class="popup">
                                                            <span class="close-btn" onclick="closePopup(<?php echo $row['Buyer_id']; ?>)">×</span>
                                                            <h2>Buyer Details</h2>
                                                            <form>
                                                            <div style="max-height: 400px; overflow-y: auto;">
                                                                <!-- Adjust the following lines to display the correct details -->
                                                                <table>
                                                                    <tr>
                                                                        <td>id</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['Buyer_id']; ?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Photo</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['photo'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>First Name</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['first_name'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Last Name</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['last_name'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>E-mail</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['email'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Contact</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['contact'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Created On</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['created_on'];?></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Address</td>
                                                                        <td>
                                                                            <div id="usernameDisplay" style="border: 1px solid #ccc; padding: 5px; width: 700px; height: 50px;"><?php echo $row['address'];?></div>
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
        function openPopup(buyerId) {
            document.getElementById("overlay_" + buyerId).style.display = "flex";
        }

        function closePopup(buyerId) {
            document.getElementById("overlay_" + buyerId).style.display = "none";
        }

        function downloadCSV() {
    // Open a new window or iframe to trigger the download
    var downloadWindow = window.open('fetch_details/fetch_buyer_details.php', '_blank');
    downloadWindow.focus();
}

    </script>

</body>

</html>
