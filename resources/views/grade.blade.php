@extends('welcome-layout.layout')

<style>
    *{
        font-weight: bold;
    }
</style>

@php
    $i = $check
@endphp

@switch( $i )
    @case('A')
        <div>
            Grade is A
        </div>
    @break
    @case('B')
        <div>
            Grade is B
        </div>
    @break
    @default
        <div>
            Grade is not inclusive {A,B}
        </div>
    @break
@endswitch