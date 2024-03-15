<form action="{{ route('masterLanguageUpdate', ['language_id' => $row->language_id]) }}"
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
                        <div class="text-center">
                            <img
                                class="image-browse-preview"
                                src="{{ asset('images/'.$row->lng_flag_filename) }}"
                                style="max-width: 100%; max-height: 300px">
                        </div>
                        <br/>
                        <label>Wine Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"
                                       name="lng_flag_filename"
                                       class="custom-file-input image-browse-preview"
                                       id="exampleInputFile"
                                        data-image-preview-target="image-browse-preview">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>lnguage Name</label>
                        <input type="text" name="lng_name" value="{{ $row->lng_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>lnguage Code</label>
                        <input type="text" name="lng_code" value="{{ $row->lng_code }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >lnguage Status:</label>
                        <select name="lng_active_status" class="form-control">
                            <option value="yes" {{ $row->lng_active_status === 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ $row->lng_active_status === 'no' ? 'selected' : '' }}>No</option>
                        </select>
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