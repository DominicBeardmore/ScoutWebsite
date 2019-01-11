@extends('layouts.base');

@section('pageTitle')
Make new and edit posts
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                + Add item
            </button>
        </div>
    </div>
@endsection

@include('adminPages.modalForms.addPost')
