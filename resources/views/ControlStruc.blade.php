<style>
    li{
        font-weight: bold;
    }
</style>

<h2>Hello {{$name}}</h2>

@isset( $name )
    @if( $name == 'Pranav' )
        <h4> You are in If block </h4>
        <ul>
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Doler</li>
            <li>Sit</li>
        </ul>
        @elseif( $name == "Singh" )
            <h4>You are in Else If block</h4>
            <ul>
                <li>Sit</li>
                <li>Amet</li>
            </ul>
        @else
            <h3>You are in else block</h3>
            <h5>There is nothing here to display</h5>
    @endif
@endisset


@unless($records)
    array will be empty
@endunless

<br><br><br>
<H4>More directives:</H4>
<ul>
    <li> 
        <pre>
        @ isset
            @ endisset 
        </pre>
    </li>
    <li> 
        <pre>
        @ empty 
            @ endempty
        </pre> 
    </li>
    <li>
        <pre>
        @ unless
            @ endunless
        </pre>
    </li>
    <li>
        <pre>
        @ foreach
            @ endforeach
        </pre>
    </li>
    <li>
        <pre>
        @ switch 
            @ case
        @ endswitch
        </pre>
    </li>
    <li>
        <pre>
        @ php
            @ endphp
        </pre>
    </li>
    <li>
        <pre>
        @ forelse
            @ empty 
        @ endforelse
        </pre>
    </li>
</ul>