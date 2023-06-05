@extends('layouts.adminbase')

@section('title', 'Songs List')

@section('content')

            <div class="row mb-4">

    <div class="col-sm-3">

        <a href="/admin/songs/create" class="btn btn-block btn-primary btn-lg" style="width: 200px; margin-left: 20px;"  >Add Song </a>

        </div>
            </div>




            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Music List</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Album</th>
                            <th>Song File</th>
                            <th>Genre</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $rs)
                        <tr>
                            <th>{{$rs -> id}}</th>
                            <th>{{$rs -> artist}} </th>
                            <th>{{$rs -> song}} </th>
                            <th>{{$rs -> album}}</th>
                            <th>{{$rs -> file}} </th>
                            <th>{{$rs -> genre}} </th>
                            <td><a href="/admin/songs/edit/{{$rs->id}}/" class="btn btn-block btn-info btn-sm">Edit</a> </td>
                            <td><a href="/admin/songs/destroy/{{$rs->id}}/" class="btn btn-block btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</a> </td>
                            <td><a href="/admin/songs/show/{{$rs->id}}/" class="btn btn-block btn-success btn-sm">Show</a> </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>


@endsection
