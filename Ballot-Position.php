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
</head>

<body id="body-pd">
        <!-- SIDEMENU -->
    <?php include './Includes/sideMenu.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <h4>Ballot Position</h4>
        <section class="content">
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
            </div>
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
            </div>

        <div class="row" style="background-color: #fbfbfb;">
            <div class="col-xs-10 col-xs-offset-1" id="content">

            </div>
        </div>
      
    </section>
    </div>

    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.bundle.js"></script>
    <!--Local Stuff-->
    <script src="./Includes/sideMenu.js"></script>
    <script>
        $(function(){
            fetch();

            $(document).on('click', '.reset', function(e){
            e.preventDefault();
            var desc = $(this).data('desc');
            $('.'+desc).iCheck('uncheck');
            });

            $(document).on('click', '.moveup', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#'+id).animate({
                'marginTop' : "-300px"
            });
            $.ajax({
                type: 'POST',
                url: 'ballot_up.php',
                data:{id:id},
                dataType: 'json',
                success: function(response){
                if(!response.error){
                    fetch();
                }
                }
            });
            });

            $(document).on('click', '.movedown', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#'+id).animate({
                'marginTop' : "+300px"
            });
            $.ajax({
                type: 'POST',
                url: 'ballot_down.php',
                data:{id:id},
                dataType: 'json',
                success: function(response){
                if(!response.error){
                    fetch();
                }
                }
            });
            });

        });

        function fetch(){
            $.ajax({
            type: 'POST',
            url: 'ballot_fetch.php',
            dataType: 'json',
            success: function(response){
                $('#content').html(response).iCheck({checkboxClass: 'icheckbox_flat-green',radioClass: 'iradio_flat-green'});
            }
            });
        }
    </script>
</body>
</html>
