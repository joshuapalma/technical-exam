<div class="modal fade" id="editTodo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT TODO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('todo.update', $todo) }}" method="POST" enctype="multipart/form-data" id="edit-todo">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="basic-addon1">TITLE</span>
                        <input type="text" class="form-control" name="title" id="title-todo" value="" placeholder="ENTER TITLE" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>