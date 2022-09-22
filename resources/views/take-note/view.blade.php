@extends('layout.template')
@section('title', 'Take Note Page')
@section('header', 'Take Note Page')

@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="m-5">
                <h3>TAKE NOTE PAGE</h3>
            </div>
            <div class="card todo-card m-5">
                <div class="row">
                    <div class="col-md-12 mt-3 ms-3 mb-3">
                        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addNote">ADD NOTE</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>CREATED AT</th>
                                    <th>ACTION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($takenote as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{{ $row->note }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>
                                                <input type="hidden" id="takenote-details-{{$row->id}}" data-detail="{{ $row }}">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button 
                                                        type="button" 
                                                        class="btn btn-warning fw-bold"
                                                        data-toggle="modal" 
                                                        data-target="#editNote"
                                                        onclick = "editNote('{{$row->id}}')">
                                                        EDIT NOTE
                                                    </button>
                                                    <button 
                                                        type="button" 
                                                        class="btn btn-danger fw-bold drop"
                                                        onclick="deleteNote(this)"
                                                        data-toggle="modal"
                                                        data-target="#delete-modal"
                                                        data-url="{{route('take-note.destroy', $row->id)}}">
                                                        DELETE NOTE
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No data available in table</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $takenote->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('take-note.modal.create')
    @include('take-note.modal.edit')
    @include('components.modal.delete-modal')
@endsection

@section('scripts')
    <script>
        function editNote(id) {
            const detail = $(`#takenote-details-${id}`).data().detail;            

            $('#title-takenote').attr('value',detail.title);
            $('#note-takenote').val(detail.note);
            $('#edit-note').attr('action', `update/${detail.id}`)
        }

        function deleteNote(btn) {
            var data = $(btn).data();
            console.log(data)
            var url = data.url;
            $('#delete-form').attr('action', url);
        }
    </script>
@endsection