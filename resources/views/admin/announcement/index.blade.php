@extends('layouts.adminbase')

@section('title', 'Announcement')

@section('content')

    <div class="row mb-4">

        <div class="col-sm-3">

            <a href="/admin/announcement/create" class="btn btn-block btn-primary btn-lg" style="width: 200px; margin-left: 20px;"  >Add Announcement </a>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>title</th>
                            <th>date</th>
                            <th>reason</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $rs)
                            <tr>
                                <th>{{$rs -> id}}</th>
                                <th>{{$rs -> title}} </th>
                                <th>{{$rs -> date}} </th>
                                <th>{{$rs -> reason}}</th>
                                <td><a href="/admin/announcement/edit/{{$rs->id}}/" class="btn btn-block btn-info btn-sm">Edit</a> </td>
                                <td><a href="/admin/announcement/destroy/{{$rs->id}}/" class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure?')">Delete</a> </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
