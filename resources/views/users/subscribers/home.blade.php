@extends('layouts.app')

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <hr>

                    <a href="#">Podcast 1</a><br>
                    <a href="#">Podcast 2</a><br>
                    <a href="#">Podcast 3</a><br>
                    <a href="#">Podcast 4</a><br>
                    <a href="#">Podcast 5</a><br>
                    <a href="#">Podcast 6</a><br>
                    <a href="#">Podcast 7</a><br>
                    <a href="#">Podcast 8</a><br>
                    <a href="#">Podcast 9</a><br>
                    <a href="#">Podcast 10</a><br>
                    <a href="#">Podcast 11</a><br>
                    <a href="#">Podcast 12</a><br>
                    <a href="#">Podcast 13</a><br>
                    <a href="#">Podcast 14</a><br>
                    <a href="#">Podcast 15</a><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
