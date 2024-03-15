<form action="{{ route('homeDataUpdate', ['hms_id' => $row->hms_id]) }}" method="post"
    class="form-send" enctype="multipart/form-data" data-alert-show="true" data-alert-field-message="false">
    {{ csrf_field() }}
    
    <input type="hidden" name="language_id" value="{{ $language_id }}">
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
                        <label>Title</label>
                        <input type="text" name="hms_title" class="form-control" value="{{ $row->hms_title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="hms_description" class="form-control tinymce">{{ $row->hms_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <img
                                class="image-browse-preview"
                                src="{{ asset('images/'.$row->hms_img) }}"
                                style="max-width: 100%; max-height: 300px">
                        </div>
                        <br/>
                        <label>Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"
                                       name="hms_img"
                                       class="custom-file-input image-browse-preview"
                                       id="exampleInputFile"
                                       data-image-preview-target="image-browse-preview">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Active ?</label>
                        <br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hms_active_status" id="inlineRadio1"
                                value="yes" {{ $row->hms_active_status == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hms_active_status" id="inlineRadio2"
                                value="no" {{ $row->hms_active_status == 'no' ? 'checked' : '' }}>
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
