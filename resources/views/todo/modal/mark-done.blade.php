<div class="modal fade" id="markDone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MARK DONE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="mark-done">
          @method('PUT')
          @csrf
          <div class="modal-body">
            Do you want to mark done this item?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  