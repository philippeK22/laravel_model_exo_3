@extends('layout.index')

@section('content')

<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($membres) }} membres</h2>
            @foreach ($membres as $item)

            <span class="{{ $item->genre == 'Femme'? 'text-warning':'text-info' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>
<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($hommes) }} membres</h2>
            @foreach ($hommes as $item)

            <span class="{{ $item->genre == 'Homme'? 'text-danger':'text-info' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>
<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($femmes) }} membres</h2>
            @foreach ($femmes as $item)

            <span class="{{ $item->genre == 'Femme'? 'text-primary':'text-info' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>
<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($homme_condition) }} membres</h2>
            @foreach ($homme_condition as $item)

            <span class="{{ $item->age == '[18,24]'? 'text-danger':'text-success' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>
<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($femmes_condition) }} membres</h2>
            @foreach ($femmes_condition as $item)

            <span class="{{ $item->age == '[18,24]'? 'text-danger':'text-info' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>
<section>
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibol">SECTION:{{ count($hors_condition) }} membres</h2>
            @foreach ($hors_condition as $item)

            <span class="{{ $item->age == '[18,24]'? 'text-danger':'text-danger' }}">{{ $item->nom }}</span>

            @endforeach
        </div>

</section>



@endsection

