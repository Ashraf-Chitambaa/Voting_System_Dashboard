<!-- Add -->
<div class="modal fade" id="add-new" tabindex="-1" aria-labelledby="add-newLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-pos">Add New Position</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="row mb-3 text-md-center">
            <label for="description" class="col-sm-4 col-form-label col-form-label-sm">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="description" placeholder="description">
            </div>
          </div>

          <div class="row mb-3 text-md-center">
            <label for="maximum-vote" class="col-sm-4 col-form-label col-form-label-sm">Maximum Vote</label>
            <div class="col-sm-8">
              <input type="number" class="form-control form-control-sm" id="maximum-vote">
            </div>
          </div>
        </form>
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

<!-- Edit Position-->
<div class="modal fade" id="edit-position" tabindex="-1" aria-labelledby="editPosLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-pos">Edit Position</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="row mb-3 text-md-center">
            <label for="description" class="col-sm-4 col-form-label col-form-label-sm">Description</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="description" placeholder="description">
            </div>
          </div>

          <div class="row mb-3 text-md-center">
            <label for="maximum-vote" class="col-sm-4 col-form-label col-form-label-sm">Maximum Vote</label>
            <div class="col-sm-8">
              <input type="number" class="form-control form-control-sm" id="maximum-vote">
            </div>
          </div>
        </form>
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

<!-- Delete Position-->
<div class="modal fade" id="delete-position" tabindex="-1" aria-labelledby="deletePosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="delete-pos">Deleting...</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>

          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="positions_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>Delete Position</p>
                  <h2 class="bold description">Chair</h2>
              </div>
          </div>

          <div class="modal-footer position-relative">
            <button type="button" class="btn btn-sm btn-outline-danger btn-flat position-absolute top-1 start-0 mx-2"
               data-bs-dismiss="modal"><i class="fa fa-close"></i> Close
            </button>
            <button type="submit" class="btn btn-sm btn-danger btn-flat" name="add" data-bs-dismiss="modal"><i class="fa fa-trash mx-1"></i>Delete</button>
          </div>
        </div>
    </div>
</div>

<!-- Edit Field-->
<div class="modal fade" id="edit-field" tabindex="-1" aria-labelledby="editFieldLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-field">Edit Field</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="row mb-3 text-md-center">
            <label for="field-name" class="col-sm-4 col-form-label col-form-label-sm">Field Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="field-name-edit" placeholder="field name">
            </div>
          </div>

          <div class="row mb-3 text-md-center">
            <label for="field-type" class="col-sm-4 col-form-label col-form-label-sm">Field Type</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="field-type-edit" placeholder="field type">
            </div>
          </div>
        </form>
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

<!-- Delete Field-->
<div class="modal fade" id="delete-field" tabindex="-1" aria-labelledby="deleteFieldLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="delete-field">Deleting...</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>

          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="positions_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>Delete Field</p>
                  <h2 class="bold description">username</h2>
              </div>
          </div>

          <div class="modal-footer position-relative">
            <button type="button" class="btn btn-sm btn-outline-danger btn-flat position-absolute top-1 start-0 mx-2"
               data-bs-dismiss="modal"><i class="fa fa-close"></i> Close
            </button>
            <button type="submit" class="btn btn-sm btn-danger btn-flat" name="add" data-bs-dismiss="modal"><i class="fa fa-trash mx-1"></i>Delete</button>
          </div>
        </div>
    </div>
</div>



     