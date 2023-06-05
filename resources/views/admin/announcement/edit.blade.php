@extends('layouts.adminbase')

@section('title', 'edit')

@section('content')

    <div class="card">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit {{$data->title}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/admin/announcement/update{{$data->id}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->Title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="datetime-local" class="form-control" name="date" value="{{$data->Date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Reason</label>
                        <input type="text" class="form-control" name="reason" value="{{$data->Reason}}">
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


