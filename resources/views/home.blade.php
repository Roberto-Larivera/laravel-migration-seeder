@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel Migration Seeder
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
       <div class="container">
        <div class="row">
            @foreach ($trains as $item)
            
            <div class="col text-center text-danger">
                <ul>
                    <li>
                        {{ $item->id }}
                    </li>
                    <li>
                        {{ $item->agency }}
                    </li>
                    <li>
                        {{ $item->departure_station }}
                    </li>
                    <li>
                        {{ $item->arrival_station }}
                    </li>
                    <li>
                        {{ $item->departure_time }}
                    </li>
                    <li>
                        {{ $item->arrival_time }}
                    </li>
                    <li>
                        {{ $item->train_code }}
                    </li>
                    <li>
                        {{ $item->carriages_number }}
                    </li>
                    <li>
                        {{ $item->in_time }}
                    </li>
                    <li>
                        {{ $item->deleted }}
                    </li>
                </ul>
            </div>
            
            @endforeach
        </div>
       </div>
    </main>
@endsection
