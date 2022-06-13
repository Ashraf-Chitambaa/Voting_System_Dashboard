<!doctype html>
<html class="HH" lang=""> 
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
        * {
        -webkit-user-drag: none;
        user-select: none;
        -moz-user-select: none;
        }

        select {
            all: unset;
            width: max-content !important;
            height: 25px !important;
        }

        .box.shadowed-card {
            background-color: #fbfbfb !important;
            transform: unset !important;
        }

        .box.shadowed-card.bott-line::after {
            width: 100%;
            background-color: #002A4B;
        }

        .table-responsive-sm::-webkit-scrollbar {
            height: 5px !important;
        }
    </style>
</head>

<body id="body-pd">
    <?php include './Includes/sideMenu.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <section class="content">
            <h3>Votes</h3>
            <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-warning'></i> Error!</h4>
            </div>
            <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Success!</h4>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="box shadowed-card bott-line">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-danger btn-sm btn-flat my-2" data-bs-toggle="modal" data-bs-target="#reset">
                                <i class="fa fa-refresh"></i> Reset
                            </button>
                        </div>
                        <div class="box-body table-responsive-sm">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                <th class="hidden"></th>
                                <th>Position</th>
                                <th>Candidate</th>
                                <th>Voter</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class='hidden'></td>
                                        <td>description</td>
                                        <td>justice</td>
                                        <td>ashraf</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </div>

    <?php include './Includes/Footer.php' ?>
    <?php include './Includes/votes_modal.php' ?>

    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.min.js"></script>
    <script src="./Bootstrap_Files/js/bootstrap.js"></script>
    <!--Local js file-->
    <script src="./Includes/sideMenu.js"></script>
</body>
</html>
