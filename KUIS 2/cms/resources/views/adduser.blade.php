@extends('layouts.Master')
@section('title', 'Add User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Add User</h1>
      <form action="/manageuser/create" method="post">
 @csrf
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control"
required="required" name="name"></br>
 </div>
 <div class="form-group">
 <label for="content">Email</label>
 <input type="text" class="form-control"
required="required" name="Email"></br>
 </div>
 <div class="form-group">
 <label for="image">Passsword</label>
 <input type="text" class="form-control"
required="required" name="Password"></br>
 </div>
 <div class="form-group">
 <label for="content">Roles</label>
 <input type="text" class="form-control"
required="required" name="roles"></br>
 </div>
 <button type="submit" name="add" class="btn btn-primary float-right">Add User</button>
 </form>

    </div>
  </div>
</section>
@endsection