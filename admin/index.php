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
   
    <?php include ("navbar.php");
    ?>
    <div class="main-content">
        <header>
            <div class="header-title-wrapper">
                
                <div class="header-title">
                    <h1>
                        Dashboard
                    </h1>
                    <p>
                        Display Analytics About Website <span class="las la-chart-lin"></span>
                    </p>
                </div>
            </div>

        </header>

        <main>

            <section>
                <h3 class="section-head">Overview</h3>
                <div class="analytics">
                    <div class="analytic">
                        <div class="analytic-info">
                            <h4>Sales</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                    <div class="analytic">
                        <div class="analytic-info">
                            <h4>Users</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                    <div class="analytic">
                        <div class="analytic-info">
                            <h4>Buyer</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                    <div class="analytic">
                        <div class="analytic-info">
                            <h4>Orders</h4>
                            <h1>10.3M</h1>
                        </div>
                    </div>
                    
                    
                </div>
    
            </section>

            
            <section>

                <div class="block-grid">
                    <div class="revenue-card">
                        <h3 class="section-head">Total Revenue</h3>
                       <div class="rev-content">
                        <img src="images/adminrevenue.jpeg"  alt="">
                        <div class="rev-info">
                            <h3>
                                Tom Cruise
                            </h3>
                            <h1>3.5M <small>Users</small></h1>
                        </div>
                        <div class="rev-sum">
                            <h4>Total Income</h4>
                            <h2>$90,000</h2>
                        </div>
                       </div>
                    </div>

                    <div class="graph-card">
                        <h3 class="section-head">Graph</h3>
                        <div class="graph-content">
                            <div class="graph-head">
                                <div class="icons-wrapper">
                                    <div class="icon">
                                        <span class="las la-eye text-main"></span>
                                    </div>
                                    <div class="icon">
                                        <span class="las la-users text-success"></span>
                                    </div>
                                </div>
                                <div class="graph-select">
                                    <select name="" id="">
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">July</option>
                                        <option value="">August</option>
                                        <option value="">September</option>
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="graph-board">
                                <canvas id="revenueChart" weight="100%" height="50px"></canvas>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

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