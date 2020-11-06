@extends('layouts.Master')
@section('title', 'Edit User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Edit</h1>
      <form action="/manage/update/{{$article->id}}" method="post">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$article->id}}"></br>
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control"
required="required" name="title" value="{{$article->name}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Email</label>
 <input type="text" class="form-control"
required="required" name="content" value="{{$article->email}}"></br>
 </div>
 <div class="form-group">
 <label for="image">Password</label>
 <input type="text" class="form-control"
required="required" name="image" value="{{$article->password}}"></br>
 </div>
 <div class="form-group">
 <label for="image">Roles</label>
 <input type="text" class="form-control"
required="required" name="image" value="{{$article->roles}}"></br>
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data User</button>
 </form>
    </div>
  </div>
</section>
@endsection