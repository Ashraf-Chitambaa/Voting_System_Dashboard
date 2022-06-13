<!doctype html>
<html class="no-js" lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voting System</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="./Bootstrap_Files/css/bootstrap.css">
    <!-- linking with font awesome -->
    <script src="https://kit.fontawesome.com/6f9370842c.js" crossorigin="anonymous"></script>
    <!-- side menu links-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- all_styles css -->
    <link rel="stylesheet" href="./Includes/all_styles.css">
    <!-- MY OWN CSS -->
    <link rel="stylesheet" href="IMPORTEDSTYLES.css">
    <!-- adminLTE css -->
    <link rel="stylesheet" href="./AdminLTE-master/plugins/codemirror/addon/scroll/simplescrollbars.css">
    <link rel="stylesheet" href="./AdminLTE-master/dist/css/adminlte.min.css">
   <style>
        body {
            user-select: none;
            -webkit-user-drag: none;
        }

        .small-box.shadowed-card,
        .box.shadowed-card {
            transform: unset !important;
            background-color: white;
        }
        
        .small-box:hover {
            /* color: unset; */
        }
        
        .st-icon {
            color: #002A4B;
            font-size: 3.2em !important;
        }
   </style>
</head>

<body id="body-pd">
    <!-- SIDEMENU -->
    <?php include './Includes/sideMenu.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <h4>Home</h4>
        <section class="content">
            <div class="container">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <div class="inner">
                            <h3>0</h3>
                            <p>No. of Positions</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-tasks st-icon"></i>
                            </div>
                            <a href="positions.php" class="small-box-footer bg-blue st-btn">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <div class="inner">
                            <h3>0</h3>
                            <p>No. of Candidates</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-black-tie st-icon"></i>
                            </div>
                            <a href="candidates.php" class="small-box-footer bg-blue st-btn">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <div class="inner">
                            <h3>0</h3>
                            <p>Total Voters</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-users st-icon"></i>
                            </div>
                            <a href="voters.php" class="small-box-footer bg-blue st-btn">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <div class="inner">
                            <h3>0</h3>
                            <p>Voters Voted</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-edit st-icon"></i>
                            </div>
                            <a href="votes.php" class="small-box-footer bg-blue st-btn">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- votes tally -->
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Votes Tally
                        <span class="position-absolute top-50 end-0 mx-2 translate-middle-y">
                          <a href="print.php" class="btn btn-success btn-sm btn-flat"><i class="fa-solid fa-print"></i> Print</a>
                        </span>
                      </h3>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
        
    <?php include './Includes/Footer.php' ?>

    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.bundle.js"></script>
    <!--Local js file-->
    <script src="./Includes/sideMenu.js"></script>
</body>
</html>
