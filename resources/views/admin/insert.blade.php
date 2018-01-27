@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="padding-left:20px;padding-right:20px;">

                <div class="panel-heading">Add user</div>

                <form name='formdata' action={{url('admin/insert')}} method='post' >
                <p></p>
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <div class=form-group>
                    <input type="text" name="name" placeholder="name" class="form-control">
                </div>
                <div class=form-group>
                    <input type="text" name="email" placeholder="email" class="form-control">
                </div>
                <div class=form-group>
                    <input name="password" type="password" placeholder="password" class="form-control">
                </div>
                <button type="submit" class="btn bg-primary  btn-flat"> REGISTER NOW!</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection