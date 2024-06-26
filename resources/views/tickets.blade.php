@extends('layout.main')

@section('title')
    Tickets
@endsection

@section('content')

<h1 class="text-center my-3">Tickets</h1>

<div class="container">
    <div class="row row-cols-2">
        @foreach ($trains as $train)
        <div class="col px-2 py-3">
            <div class="ticket-card border border-2">
                {{-- card top --}}
                <div class="card-top d-flex justify-content-between  ">
                    <div>
                        <div class="company fs-3">
                            {{$train->company}}
                        </div>
                        {{-- cities --}}
                        <div class="cities">
                            <span class="d_station">{{$train->departure_station}}</span>
                            <span class="a_station">{{$train->arrival_station}}</span>
                        </div>
                    </div>
                    {{-- time --}}
                    <div>
                        <div class="d-flex flex-column justify-content-between text-end">
                            <span>Partenza: {{$train->departure_time}}</span>
                            <span>Arrivo: {{$train->arrival_time}}</span>
                        </div>
                    </div>

                </div>
                {{-- line --}}
                <div class="card-line my-3 border border-1"></div>
                {{-- card bottom --}}
                <div class="card-bottom">
                    <div class="d-flex justify-content-between">
                        <div class="status d-flex flex-column">
                            @if ($train->is_on_time)
                            <span class="text-black badge bg-warning fs-6 fw-semibold py-2 px-3">In ritardo</span>
                            @elseif ($train->is_cancelled)
                            <span class="text-black badge bg-danger fs-6 fw-semibold py-2 px-3">Cancellato</span>
                            @else
                            <span class="badge bg-success fs-6 fw-semibold py-2 px-3">In orario</span>
                            @endif
                        </div>
                        <div class="price mt-3 text-end">
                            <span>&euro;{{$train->ticket_price}}</span>
                        </div>
                    </div>

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
