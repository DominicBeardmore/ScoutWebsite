
@extends('layouts.base')

@section('pageTitle')
Authorize users
@endsection

@section('content')
<div class="card mb-4">
    <table class="table text-center">
        <tbody>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Authorized</th>
                <th>Super Admin</th>
            </tr>
        </thead>
            @foreach ($users as $user)
            <form method='POST' action='{{ route('authorize.update', [$user->id] )}}'>
                @csrf
                @method('PUT')
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->authorized}}</td>
                    <td>{{$user->super_admin}}</td>
                    <td><input type="submit" value="Auth" name="id"/></td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
