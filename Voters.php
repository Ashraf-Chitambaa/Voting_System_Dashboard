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
        * {
          -webkit-user-drag: none;
          user-select: none;
          -moz-user-select: none;
        }
        
        img {
          object-fit: cover;
          width: 35px;
          height: 35px;
        }

        select {
            all: unset;
            width: max-content !important;
            height: 25px !important;
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
      
        .box.outlined-card {
          transform: unset !important;
        }

        .table-responsive-sm::-webkit-scrollbar {
          height: 5px !important;
        }
    </style>
</head>

<body id="body-pd">
    <!-- SIDEMENU -->
    <?php include './Includes/sideMenu.php' ?>
    <!--Container Main start-->
    <div class="height-100">
      <h4>Voters</h4>
      <section class="content">
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
            <div class="box outlined-card cornered-card">
              <div class="box-header with-border">
                <button  class="btn btn-primary btn-sm btn-flat"  data-bs-toggle="modal" data-bs-target="#addnew"><i class="fa fa-plus"></i> New</button>
              </div>

              <div class="box-body table-responsive-md">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Photo</th>
                    <th>Voters ID</th>
                    <th>Tools</th>
                  </thead>

                  <tbody>
                    <tr>
                      <td>banda</td>
                      <td>joyce</td>
                      <td class="position-relative">
                        <img src='./images/admin_Image.jpg'>
                        <button class='photo btn btn-link position-absolute top-50 end-0 translate-middle-y'><span class='fa fa-edit' data-bs-toggle='modal' data-bs-target='#edit_photo'></span></button>
                      </td>
                      <td>grtyrhhha2</td>
                      <td class="no-wrap">
                        <button class='btn btn-success btn-sm edit btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#edit"><i class='fa fa-edit'></i> Edit</button>
                        <button class='btn btn-danger btn-sm delete btn-flat st-btn' data-bs-toggle="modal" data-bs-target="#delete"><i class='fa fa-trash'></i> Delete</button>
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
    <!-- footer -->
    <?php include './Includes/Footer.php' ?>
    <!-- modal -->
    <?php include './Includes/voters_modal.php' ?>
    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.bundle.min.js"></script>
    <script src="./Bootstrap_Files/js/bootstrap.min.js"></script>
    <!--Local js file-->
    <script src="./Includes/sideMenu.js"></script>
    
</body>
</html>
