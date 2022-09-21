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
                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addUser">ADD NOTE</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection