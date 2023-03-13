@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel Migration Seeder
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
       <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>
                    Treni di oggi {{ $currentDateTime }} -- {{ count($trains) }}
                </h1>
            </div>
        </div>
        <div class="row row-cols-6 g-5">
            @foreach ($trains as $item)
            
            <div class="col">
                <div class="card h-100">
                    <div class="card-header text-center">
                        {{ $item->id }}
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Agenzia:</strong>  {{ $item->agency }}</li>
                      <li class="list-group-item"><strong>Stazione partenza:</strong> {{ $item->departure_station }}</li>
                      <li class="list-group-item"><strong>Stazione arrivo:</strong> {{ $item->arrival_station }}</li>
                      <li class="list-group-item"><strong>Orario di partenza:</strong> {{ $item->departure_time }}</li>
                      <li class="list-group-item"><strong>Orario di arrivo:</strong> {{ $item->arrival_time }}</li>
                      <li class="list-group-item"><strong>Data partenza:</strong> {{ $item->departure_date }}</li>
                      <li class="list-group-item"><strong>Data di arrivo:</strong> {{ $item->arrival_date }}</li>
                      <li class="list-group-item"><strong>Codice Treno:</strong> {{ $item->train_code }}</li>
                      <li class="list-group-item"><strong>Numero Carrozze:</strong> {{ $item->carriages_number }}</li>
                      <li class="list-group-item"><strong>In orario:</strong> {{ $item->in_time }}</li>
                      <li class="list-group-item"><strong>Cancellato:</strong> {{ $item->deleted }}</li>
                    </ul>
                  </div>
            </div>
            
            @endforeach
        </div>
       </div>
    </main>
@endsection
