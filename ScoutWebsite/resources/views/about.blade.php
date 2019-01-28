@extends('layouts.base')

@section('pageTitle')
We are the 2nd Southwark
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 100">
        <div class="col-md-8 col-sm-12 d-flex flex-column justify-content-between">
            <div class="card">
                <div class="card-header">When we meet!</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Where we meet!</div>
                <div class="card-body">
                    <p class="card-text">Kingswood House on the Kingswood Estate</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.5096294496957!2d-0.08401768386858136!3d51.43043397962257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760158025bba69%3A0x533ce46e7f3260bb!2sKingswood+Community+Centre+-+Wedding+Venue+Crystal+Palace!5e0!3m2!1sen!2suk!4v1547236877669" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">When we meet!</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 d-flex flex-column justify-content-between">
            <div class="card">
                <div class="card-header text-center">THE LEADERS</div>
            </div>
            <div class="card">
                <img src="https://pbs.twimg.com/profile_images/1010979991897759746/70VaGEhw_400x400.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://pbs.twimg.com/profile_images/1010979991897759746/70VaGEhw_400x400.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
