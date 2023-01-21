@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container" style="width: 70%; margin-bottom: 5px; padding: 0; text-align: right;">
            <a href=" {{route('users.create')}} " class="btn btn-success">Create User</a>
        </div>
        <div class="card m-auto" style="width: 70%">
            <div class="card-body">
                {{-- Table --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{$user->id}} </td>
                                <td> {{$user->name}} </td>
                                <td> {{ $user->email }} </td>
                                <td> {{ $user->created_at }} </td>
                                <td>
                                    <a href=" {{route('users.edit', ['id' => $user->id])}} " class="btn btn-warning mr-1" style="margin-right: 5px">Edit</a>
                                    <form 
                                    method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}" 
                                    style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection