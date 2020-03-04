<!-- @php
    $i = 1;
@endphp

@while( $i <= 10 )
    <p> {{ $i++ }} </p>
@endwhile -->

@foreach ($records as $value)
    @php
        echo dd($loop)
    @endphp
@endforeach