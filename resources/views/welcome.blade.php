@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="test">
        @livewire('carousel')
    </div>

    <div class = "row" >
        <div class="container mt-3">
            @livewire('cards')
        </div>
    </div>

</div>
</div>
<div>
    @livewire('footer')
</div>
@endsection
