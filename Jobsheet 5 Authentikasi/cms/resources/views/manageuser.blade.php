@extends('layouts.Master')
@section('title', 'Kelola Data User')
    
@section('content')

<section class="about" style="margin-bottom: 14%">
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-4 mb">Kelola Data User</h1>
      

      <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th class="user">Nama</th>
 <th class="user">Email</th>
 <th class="user">Password</th>
 <th class="user">Roles</th>
 </tr>
 </thead>
 <tbody>
 @foreach($article as $a)
 <tr>
 <td>{{$a->id}}</td>
 <td>{{$a->title}}</td>
 <td>{{$a->created_at}}</td>
 <td><a href="manage/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
 <a href="manage/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a></td>
 </tr>
 
 @endforeach
 </tbody>
</table>
<a href="manage/add" class="btn btn-primary">Tambah Data User</a>

    </div>
  </div>
</section>
@endsection