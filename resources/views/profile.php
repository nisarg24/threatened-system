<?php 
include_once("layout/header.php");
include_once("layout/header-top.php");
include_once("layout/sidebar.php") 
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Client Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <!-- <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?php echo URL_ROOT ?>/resources/assets/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div> -->

                            <h3 class="profile-username text-center"><?php echo $clientInfo['client_name'] ?></h3>

                            <p class="text-muted text-center"><?php echo $clientInfo['client_industry'] ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Threatent</b> <a class="float-right"><?php echo $clientInfo['Threatent'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Alertness</b> <a class="float-right"><?php echo $clientInfo['Alertness'] ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Email</strong>

                            <p class="text-muted">
                                <?php echo $clientInfo['client_email'] ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Web IP</strong>

                            <p class="text-muted"><?php echo $clientInfo['client_web_ip'] ?></p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Final Score</strong>

                            <p class="text-muted"><?php echo $clientInfo['final_score'] ?></p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Status</strong>

                            <p style="color: <?php echo $clientInfo['status_color']; ?>"><?php echo $clientInfo['status'] ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#vulnerability_details"
                                        data-toggle="tab">Vulnerability Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="#system_defence"
                                            data-toggle="tab">System Defence</a></li>
                                <li class="nav-item"><a class="nav-link" href="#databreach"
                                                data-toggle="tab">Databreach</a></li>
                                <li class="nav-item"><a class="nav-link" href="#threatened_list"
                                        data-toggle="tab">Threatened list</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="vulnerability_details">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">General User Per Conduct</span>
                                                    <span class="info-box-number text-center text-muted mb-0"><?php echo $clientInfo['General_User_Conduct_per'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Severity</span>
                                                    <span class="info-box-number text-center mb-0 <?php echo $saverityClass; ?>"><?php echo $clientInfo['severity'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Vulnerability in numbers</h3>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Vulnerability in %</h3>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <dl class="row">
                                                    <dt class="col-sm-4">Description</dt>
                                                    <dd class="col-sm-8"><?php echo $clientInfo['description'] ?></dd>
                                                    <dt class="col-sm-4">Solution</dt>
                                                    <dd class="col-sm-8"><?php echo $clientInfo['solution'] ?></dd>
                                                </dl>
                                            </div>
                                            <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="system_defence">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comment bg-primary"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header"><?php echo $threatenedInfo['system_defense']; ?></h3>
                                                <div class="timeline-body">
                                                    <?php echo $threatenedInfo['system_defense_description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="far bg-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="databreach">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comment bg-primary"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header"><?php echo $threatenedInfo['databreach']; ?></h3>
                                                <div class="timeline-body">
                                                    <?php echo $threatenedInfo['databreach_description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="far bg-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="threatened_list">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline item -->
                                        <?php
                                        foreach ($segregatedThreat as $threat) {
                                        ?>
                                            <div>
                                                <i class="fas fa-comments bg-info"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-map-marker-alt"></i> <?php echo $threat['geolocation'] ?></span>
                                                    <h3 class="timeline-header"><?php echo $threat['title'] ?></h3>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <span class="info-box-text text-center text-muted">Attack complexity</span>
                                                                        <span class="info-box-number text-center mb-0 <?php echo $threat['attackcomplexity_class'] ?>"><?php echo $threat['attackcomplexity'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <span class="info-box-text text-center text-muted">Confidentiality Impact</span>
                                                                        <span class="info-box-number text-center mb-0 <?php echo $threat['confidentialityimpact_class'] ?>"><?php echo $threat['confidentialityimpact'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php echo $threat['description'] ?>
                                                    </div>
                                                    <div class="timeline-footer"></div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div>
                                            <i class="far bg-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include_once("layout/footer.php") ?>
<script>
$(function () {
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
        labels: [
            'Low',
            'Medium',
            'High',
            'Critical',
        ],
        datasets: [
            {
                data: [
                    <?php echo $clientInfo['Low_vuln'] ?>,
                    <?php echo $clientInfo['Medium_vuln'] ?>,
                    <?php echo $clientInfo['High_vuln'] ?>,
                    <?php echo $clientInfo['Critical_vuln'] ?>,
                ],
                backgroundColor : ['#00a65a', '#00c0ef', '#f39c12', '#f56954'],
            }
        ]
    }
    var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
        labels: [
            'Low',
            'Medium',
            'High',
            'Critical',
        ],
        datasets: [
            {
                data: [
                    <?php echo $clientInfo['low_per'] ?>,
                    <?php echo $clientInfo['medium_per'] ?>,
                    <?php echo $clientInfo['high_per'] ?>,
                    <?php echo $clientInfo['critical_per'] ?>,
                ],
                backgroundColor : ['#00a65a', '#00c0ef', '#f39c12', '#f56954'],
            }
        ]
    };
    var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })
});
</script>
</body>

</html>