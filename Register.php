<!doctype html>
<html class="no-js" lang=""> 
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
      
        .btn-sm.st-btn {
          border-radius: 0 !important;
          text-transform: capitalize;
          color: whitesmoke;
          padding: .3em .4em;
          transition: all .3s ease;
        }
      
        .btn.btn-danger {
          background-color: orangered !important;
        }
      
        .box.outlined-card,
        .small-box.shadowed-card {
          transform: unset !important;
        }

        .heading {
            font-weight: bold; 
            font-size: 1rem !important; 
            text-align: center;
            display: block !important;
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
            <h3>Register</h3>
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
            </div>
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <form>
                                <h3 class="heading">add register field</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="field-name" aria-describedby="field-name" placeholder="field name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="input-type" placeholder="input type">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Add Field</button>
                            </form>
                        </div>
                    </div>

                    <div class="col"></div>

                    <div class="col-lg-7 col-md-7">
                        <!-- small box -->
                        <div class="small-box shadowed-card">
                            <div class="box-body table-responsive-md">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th class="no-wrap">Field Name</th>
                                        <th>Type</th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class='hidden'></td>
                                            <td>username</td>
                                            <td>text</td>
                                            <td class="no-wrap">
                                                <button class='btn btn-success btn-sm edit btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#edit-field">
                                                    <i class='fa fa-edit'></i> Edit
                                                </button>
                                                
                                                <button class='btn btn-danger btn-sm delete btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#delete-field">
                                                    <i class='fa fa-trash'></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="box col outlined-card cornered-card">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-primary btn-sm btn-flat" data-bs-toggle="modal" data-bs-target="#add-new">
                                <i class="fa fa-plus"></i> New Poition
                            </button>
                        </div>
                        
                        <div class="box-body table-responsive-md">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <th class="hidden"></th>
                                    <th>Description</th>
                                    <th class="no-wrap">Maximum Vote</th>
                                    <th>Tools</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='hidden'></td>
                                        <td>chair</td>
                                        <td>1</td>
                                        <td class="no-wrap">
                                            <button class='btn btn-success btn-sm edit btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#edit-position">
                                                <i class='fa fa-edit'></i> Edit
                                            </button>
                                            
                                            <button class='btn btn-danger btn-sm delete btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#delete-position">
                                                <i class='fa fa-trash'></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer-->
    <?php include './Includes/Footer.php' ?>
    <!-- modal -->
    <?php include './Includes/register_modal.php' ?>
    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.bundle.js"></script>
    <!--Local Stuff-->
    <script src="./Includes/sideMenu.js"></script>
</body>
</html>
