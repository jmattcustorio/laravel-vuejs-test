
<style>
    
    table{
        width: 50% !important;
        border: 2px solid #e9ecef;
        text-align: center;
        
       
    }
   
    tr:nth-child(even) td {
        background: #e9ecef;
    }
    tr:nth-child(odd) td {
        background:#FFFFFF;
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@extends('layouts.app')

@section('content')

 <a href="{{ route('create') }}" class="btn btn-success far fa-user"style="margin:10px;"> Create User </a>
    <table id="example" class="table row-border hover order-column" style="width:100%" >
   
        <tbody> 
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            @foreach($users as $users)
            <tr>
                <td>{{ $users->id }} </td>
                <td>{{ $users->name }} </td>
                <td>{{ $users->email }} </td>

                <td >
                    <a href="{{ route('user.edit', ['id' => $users->id]) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route('user.delete', ['id' => $users->id]) }}" class="btn btn-danger">delete</a>
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    
    

@endsection