@extends('welcome-layout.layout')

<form action="form" method="POST">
    @csrf
    <div id="name">
        Name: <br>
        <input type="text" name="name">
    </div>
    <br>
    <div id="pass">
        Password: <br>
        <input type="password" name="pass">
    </div>
    <br>
    <div id="submit">
        <button type="submit">Submit</button>
    </div>

</form>

<br>
<br>

@isset($name)
     <li> Entered name is : {{ $name }} </li> 
@endisset

@isset($pass)
     <li> Entered password is : {{ $pass }} </li> 
@endisset