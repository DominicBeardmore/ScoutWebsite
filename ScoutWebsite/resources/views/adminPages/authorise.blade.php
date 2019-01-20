
@extends('layouts.base')

@section('pageTitle')
User Permissions
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
            <form method='POST' action='{{ route('authorize.update', [$user->id] )}}' id="authForm">
                @csrf
                @method('PUT')
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if ($user->authorized)
                        <td class="bg-success">YES</td>
                    @else
                        <td class="bg-danger">NO</td>
                    @endif

                    @if ($user->super_admin)
                        <td class="bg-success">YES</td>
                    @else
                        <td class="bg-danger">NO</td>
                    @endif
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Update User
                            </button>
                            <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                @if ($user->authorized)
                                    <div class="dropdown-item d-flex p-0 m-0"><button name="id" value="revokeAuth:{{$user->id}}" type="submit" form="authForm" class="btn btn-danger btn-sm btn-block">Revoke Auth</button></div>
                                @else
                                    <div class="dropdown-item d-flex p-0 m-0"><button name="id" value="makeAuth:{{$user->id}}" type="submit" form="authForm" class="btn btn-success btn-sm btn-block">Auth User</button></div>
                                @endif
                                @if ($user->super_admin)
                                    <div class="dropdown-item d-flex p-0 m-0"><button name="id" value="revokeSuper:{{$user->id}}" type="submit" form="authForm" class="btn btn-danger btn-sm btn-block">Revoke Admin</button></div>
                                @else
                                    <div class="dropdown-item d-flex p-0 m-0"><button name="id" value="makeSuper:{{$user->id}}" type="submit" form="authForm" class="btn btn-success btn-sm btn-block">Make Admin</button></div>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
