@extends('layouts.adminbase')

@section('title', 'Details')

@section('content')

            <div class="row mb-3">
            <div class="col-sm-2">

                <a href="/admin/songs/edit/{{$data->id}}"  class="btn btn-block btn-primary btn-lg" style="width: 100px; margin-left: 10px;">Edit</a>

            </div>
            <div class="col-sm-2">

                <a href="/admin/songs/destroy/{{$data->id}}" onclick="return confirm('Are you sure?')" class="btn btn-block btn-primary btn-danger" style="width: 100px">Delete</a>

            </div>
            </div>

            <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">

                                <tr>
                                    <th style="width: 40px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Artist</th>
                                    <td>{{$data->artist}}</td>
                                </tr>
                                <tr>
                                    <th>Song</th>
                                    <td>{{$data->song}}</td>
                                </tr>

                                <tr>
                                    <th>Album</th>
                                    <td>{{$data->album}}</td>
                                </tr>
                                <tr>
                                <th>File</th>
                                <td>{{$data->file}}</td>
                                </tr>
                                <tr>
                                    <th>Genre</th>
                                    <td>{{$data->genre}}</td>
                                </tr>
                                <tr>
                                    <td>Creation Date</td>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Update Date</td>
                                    <td>{{$data->updated_at}}</td>
                                </tr>


                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

@endsection

