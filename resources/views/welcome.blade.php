<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 190vh;
    margin: 0;
}

.full-height {
    height: 160vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}

.Main-div {
    background-color: white;
    padding: 12px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.title-input{
    font-weight: 100;
    font-size: 40px;
    text-align: left;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: white;
}

</style>
</head>
<body style="background-color:Cornsilk ;">
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Code Knights Registration 
        </div>

@if (count($errors) > 0)
    <div class="alert alert-danger" style="color:red;text-align:left;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif


        <div class="links">
            <a href="https://iiumicpcteam.com/2016/06/code-knights/">Code Knights</a>
            <a href="http://contest.iiumicpcteam.com/">Contest</a>
            <a href="http://ranking.iiumicpcteam.com/">Ranking</a>
        </div>

        <div class="Main-div">

            <form action="{{ URL::to('registrations') }}" method="post">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="title-input">
                    Name<span style="color:red;" >*</span>
                </div>
                <br>
                <div>
                    <input type="text" name="name" />
                </div>
                <div class="title-input">
                    Matric No<span style="color:red;" >*</span>
                </div>
                <br>
                <div>
                    <input type="text" name="matric" />
                </div>
                <div class="title-input">
                    Desired Username<span style="color:red;" >*</span><span style="font-size:15px;color:black;">(This is the username you will use to login into Code Knight. Also shown in the ranking board.)</span>
                </div>
                <br>
                <div>
                    <input type="text" name="username" />
                </div>
                <div class="title-input">
                    Desired Password<span style="color:red;" >*</span>
                </div>
                <br>
                <div>
                    <input type="password" name="password" />
                </div>
                <div class="title-input">
                    Email<span style="color:red;" >*</span>
                </div>
                <br>
                <div>
                    <input type="text" name="email" />
                </div>
                <div class="title-input">
                    Contact No.<span style="color:red;" >*</span><span style="font-size:15px;color:black;">Provide your WhatsApp activated number, we will announce everything there.</span>
                </div>
                <br>
                <div>
                    <input type="text" name="contact" />
                </div>

                <div class="title-input">
                    Course Tag<span style="color:red;" >*</span>
                </div>
                <br>
                <div style="text-align:left;">
                     <input type="radio" name="tag" value="DSA" /><strong>DSA</strong>
                </div>

                <div class="title-input">
                    Section<span style="color:red;" >*</span><span style="font-size:15px;color:black;">Choose carefully otherwise your marks will not be recorded properly.</span>
                </div>
                <br>
                <div style="text-align:left;" >
                    <input type="radio" name="section" value="1"/><strong>1</strong><br>
                    <input type="radio" name="section" value="2"/><strong>2</strong><br>
                    <input type="radio" name="section" value="3"/><strong>3</strong><br>
                    <input type="radio" name="section" value="4"/><strong>4</strong><br>
                </div>

                <div class="title-input">
                    Have you particiapted in any online contest before?<span style="color:red;" >*</span>
                </div>
                <br>
                <div style="align-items: center;text-align:left;">
                    <input type="radio" name="question" value="YES" /><strong>Yes</strong><br>
                    <input type="radio" name="question" value="NO" /><strong>No</strong><br>
                    <input type="radio" name="question" value="Didnt heard of it" /><strong>Didn't Even heard of it before </strong><br>
                </div>

                <br>
                <br>

                <div>
                    <input style="background-color:gray;color:white;width: 100%;" type="submit" value="Submit">
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
