<!-- Add -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="add-newLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Voter</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 col-form-label col-form-label-sm">Firstname</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 col-form-label col-form-label-sm">Lastname</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 col-form-label col-form-label-sm">Password</label>

                    <div class="col-sm-12">
                      <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 col-form-label col-form-label-sm">Photo</label>

                    <div class="col-sm-12">
                      <input type="file" class="form-control form-control-sm" id="edit-photo" name="photo">
                    </div>
                </div>
            </div>

            <div class="modal-footer position-relative">
              <button type="button" class="btn btn-sm btn-outline-danger btn-flat position-absolute top-1 start-0 mx-2"
                data-bs-dismiss="modal"><i class="fa fa-close"></i> Close
              </button>
              <button type="submit" class="btn btn-sm btn-primary btn-flat" name="add" data-bs-dismiss="modal"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><span class="fullname">ashraf chitambaa</span></h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
            <input type="hidden" class="id" name="id">
            <div class="form-group">
                <label for="photo" class="col-sm-3 col-form-label col-form-label-sm">Photo</label>

                <div class="col-sm-12">
                  <input type="file" id="photo" class="form-control" name="photo" required>
                </div>
            </div>
          </form>
        </div>

        <div class="modal-footer position-relative">
          <button type="button" class="btn btn-flat btn-sm btn-outline-danger position-absolute top-1 start-0 mx-2" data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-primary btn-sm btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
        </div>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Voter</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 col-form-label col-form-label-sm">Firstname</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 col-form-label col-form-label-sm">Lastname</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 col-form-label col-form-label-sm">Password</label>

                    <div class="col-sm-12">
                      <input type="password" class="form-control form-control-sm" id="edit_password" name="password">
                    </div>
                </div>
            </div>

            <div class="modal-footer position-relative">
              <button type="button" class="btn btn-sm btn-outline-danger btn-flat position-absolute top-1 start-0 mx-2"
                data-bs-dismiss="modal"><i class="fa fa-close"></i> Close
              </button>
              <button type="submit" class="btn btn-sm btn-primary btn-flat" name="add" data-bs-dismiss="modal"><i class="fa fa-check-square-o mx-1"></i>Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Deleting...</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="voters_delete.php">
            <input type="hidden" class="id" name="id">
            <div class="text-center">
                <p>Delete Voter</p>
                <h2 class="bold fullname">memory jackson</h2>
            </div>
        </div>

        <div class="modal-footer position-relative">
          <button type="button" class="btn btn-flat btn-sm btn-outline-danger position-absolute top-1 start-0 mx-2" data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          <button type="submit" class="btn btn-danger btn-flat btn-sm" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
    </div>
  </div>
</div>



     