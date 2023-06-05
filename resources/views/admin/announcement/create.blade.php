@extends('layouts.adminbase')

@section('title', 'create Announcement')

@section('content')

    <div class="card">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Announcement</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/admin/announcement/store" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="datetime-local" class="form-control" name="Date" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Reason</label>
                        <input type="text" class="form-control" name="reason" placeholder="Reason">
                    </div>



                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


