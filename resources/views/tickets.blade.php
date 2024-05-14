@extends('layout.main')

@section('title')
    Tickets
@endsection

@section('content')

<h1>Tickets</h1>

<div class="container">
    <div class="row row-cols-2">
        @foreach ($trains as $train)
        <div class="col px-2 py-3">
            <div class="ticket-card border border-2">
                <div class="cities">
                    <span class="d_station">{{$train->departure_station}}</span>
                    <span class="a_station">{{$train->arrival_station}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    {{$trains->links()}}

</div>

@endsection
