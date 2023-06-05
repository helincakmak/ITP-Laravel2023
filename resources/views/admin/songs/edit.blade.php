@extends('layouts.adminbase')

@section('title', 'edit')

@section('content')

            <div class="card">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit {{$data->artist}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/songs/update{{$data->id}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Artist</label>
                                <input type="text" class="form-control" name="artist" value="{{$data->Artist}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Song</label>
                                <input type="text" class="form-control" name="song" value="{{$data->Song}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Album</label>
                                <input type="text" class="form-control" name="album" value="{{$data->Album}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="File">
                                        <label class="custom-file-label" for="exampleInputFile">Choose song file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label>Choose Music Genre</label>
                                <select class="form-control" name="genre">
                                    <option selected>{{$data->Album}}</option>
                                    <option>Pop</option>
                                    <option>Rock</option>
                                    <option>Indie</option>
                                    <option>Country</option>
                                    <option>Metal</option>
                                    <option>Jazz</option>


                                </select>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


@endsection

