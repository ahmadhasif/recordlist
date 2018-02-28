@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/record" class="btn btn-primary">Record List</a>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <label>New Record</label>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>
                    <div class="col-md-6">
                        <input name="name" type="text" class="form-control" value="{{old('name')}}" required autofocus>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
                    <label for="ic_number" class="col-md-4 control-label">IC Number</label>
                    <div class="col-md-6">
                        <input name="ic_number" type="number" class="form-control" value="{{old('name')}}" required autofocus>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Phone No.</label>
                    <div class="col-md-6">
                        <input name="phone" type="tel" class="form-control" value="{{old('name')}}" required autofocus>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input name="email" type="email" class="form-control" value="{{old('name')}}" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Create Record
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="container">

    </div>

    @endsection