@extends('layouts.app')

@section('content')

<a href="{{ route('create') }}" class="btn btn-success">Create User </a>

    <table class="table" >
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

                <td>
                    <a href="{{ route('user.edit', ['id' => $users->id]) }}" class="btn btn-primary">edit</button>
                    <a href="{{ route('user.delete', ['id' => $users->id]) }}" class="btn btn-danger">delete</button>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
    

@endsection