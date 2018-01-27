@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Hello {{ $admin->name }}</div>

            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-12 col-md-offset-9">
        <a href="{{url('/admin/insert')}}" class="btn bg-primary  btn-flat"> Add</a>
    </div>
    </div>
    

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <table class="table">
        <thead>
            <tr>
                <th> id</th>
                <th> name</th>
                <th> email </th>
                <th> update/delete</th>
            </tr>
        </thead>
        <tbody>
             @foreach($admins as $admin)
              <tr>
                  <td> {{$admin->id}} </td>
                  <td> {{$admin->name}} </td>
                  <td> {{$admin->email}} </td>
                  <td>  
                         <button type="button" class="btn btn-primary">Update</button>
                         <button type="button" class="btn btn-danger"> Delete </button>
                 </td>
              </tr>
             @endforeach
       </tbody>
     </table>
        </div>
    </div>

        
        

</div>
@endsection