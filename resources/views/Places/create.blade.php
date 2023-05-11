<div class="modal fade" id="create-place" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Place</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST" action="{{ route('Place.store') }}">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Place Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="grache_id" class="col-form-label">Grache</label>
                    <select name="grache_id" id="grache_id" class="form-select">
                        @foreach ($graches as $grache)
                            <option value="{{ $grache->id }}">{{ $grache->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>