<form action="{{ route('masterEmailUpdate', ['email_id' => $row->email_id]) }}"
      method="post"
      class="form-send"
      enctype="multipart/form-data"
      data-alert-show="true"
      data-alert-field-message="false">
    {{ csrf_field() }}
    <div class="modal fade" id="modal-general" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="eml_name" value="{{ $row->eml_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="eml_email" value="{{ $row->eml_email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Active Status ?</label>
                        <br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eml_active_status" {{ $row->eml_active_status == 'yes' ? 'checked':'' }} id="inlineRadio1" value="yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eml_active_status"{{ $row->eml_active_status == 'no' ? 'checked':'' }} id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </div>
        </div>
    </div>
</form>
