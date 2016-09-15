@extends('layouts.app')

@section('content')

<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
    word-wrap: break-word;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<table id="table_id" style="table-layout:fixed;width:100%;"> 
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Section</th>
        <th>Course Tag</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Question</th>
    </tr>
<?php $counter = 1 ?>
@foreach ($registrations as $registration)
<tr>
    <td>{{ $counter++ }}</td>
    <td>{{ $registration->name }}</td>
    <td>{{ $registration->username }}</td>
    <td>{{ $registration->password }}</td>
    <td>{{ $registration->section }}</td>
    <td>{{ $registration->tag }}</td>
    <td>{{ $registration->email }}</td>
    <td>{{ $registration->contact }}</td>
    <td>{{ $registration->question }}</td>
</tr>
@endforeach
</table>   
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
