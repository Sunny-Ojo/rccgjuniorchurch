<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .row{
        width: 80%;
        margin: auto;
    }
    .left{
        text-align: left;
    }
    .right{
        text-align: right;
    }
    .header{
        color: deeppink;
    }


</style>
<body>
    <div class="row">

    <img class="move"  style="width:60px; height:60px" src="{{ public_path('/img/download.png') }}" alt="Passport">
    <h3 class="header">RCCG Easter Campout 2020</h3>

 <div class="col-md-4 col-lg-4">
        <img style="width:70%; height:60%" src="{{ public_path('/storage/passports/'.$users->passport) }}" alt="Passport">
        </div>
        <div class="col-md-8 col-lg-8">
        <h4><strong>Surname:</strong> {{ $users->surname }}</h4>
        <h4><strong>First Name:</strong> {{ $users->firstName }}</h4>
        <h4><strong> Date of Birth:</strong> {{ $users->dob }}</h4>
        <h4><strong>Gender:</strong> {{ $users->gender }}</h4>
        <h4><strong>Area:</strong> {{ $users->Area }}</h4>
        {{-- @php
            $area = DB::select('select 1 from teachers where area = ?', [1])
        @endphp --}}
        </div>
        <br>
        <br>
        <br>
        <span class="left">__________________ <br>Parents signature</span>

        <p class="right">__________________ <br>Pastor's signature</p>
        <p class="right">______________________ <br>Area Co-ordinators signature</p>


                   </div>
</body>
</html>
