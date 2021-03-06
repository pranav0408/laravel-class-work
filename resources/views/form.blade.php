@extends('welcome-layout.layout')

<style>
*{
    font-weight: bold;
}
    h2{
        text-align: center;
    }
    input{
        padding: 10px;
        width: 40vw;
        margin: 10px;
    }
    table{
        text-align: center !important;
        left: 50%;
        right: 50%;
        margin-left: auto;
        margin-right: auto;
    }
    textarea{
        margin-left: 8vw;
        width: 84vw;
        margin-bottom: 60px;
        padding: 20px;
    }
    button{
        width: 100px;
        height: 50px;
        padding: 10px 20px;
        background: #52af32;
        color: rgba(255,255,255,0.8);
        cursor: pointer;
        border: 1px solid #ccc; 
        outline: none;
        transition: all 0.5s ease;
    }
    button:hover{
        transform: translate(-8px,-8px);
    }
    .err{
        margin: 5px;
        width: 80%;
        background: #ff191945;
        color: tomato;
        margin-left: auto;
        margin-right: auto;
    }
    .success{
        margin: 5px;
        width: 80%;
        background: #3cff1945;
        color: #2b862a;
        margin-left: auto;
        margin-right: auto;
    }
    li{
        padding: 5px;
    }

</style>


<form action="form" method="POST">
    @csrf

    <h2>Form Validation</h2>

    <table>

        <tr>
            <td>
                <div id="fname">
                    First Name: <br>
                    <input type="text" name="fname" placeholder="Enter First Name">
                </div>
            </td>
            <td>
                <div id="lname">
                    Last Name: <br>
                    <input type="text" name="lname" placeholder="Enter Last Name">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="pass">
                    Email: <br>
                    <input type="email" name="email" placeholder="Enter Email">
                </div>        
            </td>
            <td>
                <div id="cpass">
                    Mobile Number: <br>
                    <input type="text" name="mobile" placeholder="Enter Mobile Number">
                </div>        
            </td>
        </tr>
        <tr>
            <td>
                <div id="pass">
                    Password: <br>
                    <input type="password" name="pass" placeholder="Enter Password">
                </div>
            </td>
            <td>
                <div id="cpass">
                    Confirm Password: <br>
                    <input type="password" name="cpass" placeholder="Re-Enter Password">
                </div>        
            </td>
        </tr>
    </table>

    <textarea name="details" rows="10" placeholder="Add your Details"></textarea>

    <div id="submit" align="center">
        <button type="submit">Submit</button>
    </div>

</form>

<br>
<br>

<ul class="err">
    @error("fname")
        <li>{{$message}}</li>
    @enderror
    @error("lname")
        <li>{{$message}}</li>
    @enderror
    @error("email")
        <li>{{$message}}</li>
    @enderror
    @error("mobile")
        <li>{{$message}}</li>
    @enderror
    @error("pass")
        <li>{{$message}}</li>
    @enderror
    @error("cpass")
        <li>{{$message}}</li>
    @enderror
    @error("details")
        <li>{{$message}}</li>
    @enderror

</ul>

<ul class="success">
    @isset($token)
        <li> 
            Token associated with the form is : {{ $token }}
        </li>
    @endisset
    @isset($fname)
        <li> 
            First Name entered is : {{ $fname }}
        </li>
    @endisset
    @isset($lname)
        <li> 
            Last Name entered is : {{ $lname }}
        </li>
    @endisset
    @isset($email)
        <li> 
            Email entered is : {{ $email }}
        </li>
    @endisset
    @isset($mobile)
        <li> 
            Mobile Number entered is : {{ $mobile }}
        </li>
    @endisset
    @isset($pass)
        <li> 
            Password entered is : {{ $pass }}
        </li>
    @endisset
    @isset($details)
        <li> 
            Details entered is : {{ $details }}
        </li>
    @endisset
</ul>