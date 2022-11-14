
<div class="modal fade" id="fabricModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Fabric</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{route('admin.fabric.add')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3" id="modal-id">
                        <label for="id-field" class="form-label">Fabric Title</label>
                        <input type="text" id="id-field" class="form-control  @error('title') is-invalid @enderror"
                               placeholder="Fabric Title" name="title" value="{{old('title')}}"/>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3" id="modal-id">
                        <label for="id-field" class="form-label">Fabric Details</label>
                        <textarea type="text" id="id-field" class="form-control  @error('details') is-invalid @enderror"
                                  placeholder="Fabric Details" name="details"  rows="10">{{old('details')}}</textarea>
                        @error('details')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--- fabric --->
{{--    Edit Modal--}}
<div class="modal fade" id="editFabric" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{route('admin.fabric.update')}}" method="post">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="mb-3" id="modal-id">
                        <label for="id-field" class="form-label">Fabric Title</label>
                        <input type="text" id="id-field" class="form-control  @error('title') is-invalid @enderror"
                               placeholder="Fabric Title" name="title" value="{{old('title')}}"/>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3" id="modal-id">
                        <label for="id-field" class="form-label">Fabric Care</label>
                        <textarea type="text" id="id-field" class="form-control  @error('care') is-invalid @enderror"
                                  placeholder="Fabric Details" name="care" rows="10">{{old('care')}}</textarea>
                        @error('care')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
