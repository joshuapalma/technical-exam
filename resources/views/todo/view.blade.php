@extends('layout.template')
@section('title', 'Todo Page')
@section('header', 'Todo Page')

@section('content')

    <div class="container-fluid">
        <div class="m-5">
            <h3>TODO PAGE</h3>
        </div>
        <div class="card todo-card m-5">
            <div class="row">
                <div class="col-md-12 mt-3 ms-3 mb-3">
                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addTodo">ADD TODO</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>TODO</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($todo as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    @if($row->is_done == "1")
                                        <td style="text-decoration: line-through; font-style: italic;">{{ $row->title }}</td>
                                    @else
                                        <td>{{ $row->title }}</td>
                                    @endif
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <input type="hidden" id="todo-details-{{$row->id}}" data-detail="{{ $row }}">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button 
                                                type="button" 
                                                class="btn btn-primary fw-bold mark"
                                                onclick="markDone(this)"
                                                data-toggle="modal" 
                                                data-target="#markDone"
                                                data-url="{{route('todo.mark-done', $row->id)}}">
                                                MARK AS DONE
                                            </button>
                                            <button 
                                                type="button" 
                                                class="btn btn-warning fw-bold"
                                                data-toggle="modal" 
                                                data-target="#editTodo"
                                                onclick = "editTodo('{{$row->id}}')">
                                                EDIT TODO
                                            </button>
                                            <button 
                                                type="button" 
                                                class="btn btn-danger fw-bold drop"
                                                onclick="deleteNote(this)"
                                                data-toggle="modal"
                                                data-target="#delete-modal"
                                                data-url="{{route('todo.destroy', $row->id)}}">
                                                DELETE TODO
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No data available in table</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('todo.modal.create')
    @include('todo.modal.edit')
    @include('todo.modal.mark-done')
    @include('components.modal.delete-modal')
@endsection

@section('scripts')
    <script>
        function markDone(id) {
            var data = $(id).data();
            var url = data.url;

            $('#mark-done').attr('action', url);
        }

        function editTodo(id) {
            const detail = $(`#todo-details-${id}`).data().detail;            

            $('#title-todo').attr('value',detail.title);
            $('#edit-todo').attr('action', `update/${detail.id}`)
        }

        function deleteNote(btn) {
            var data = $(btn).data();
            var url = data.url;

            $('#delete-form').attr('action', url);
        }
    </script>
@endsection