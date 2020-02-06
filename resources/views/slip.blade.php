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
        width: 100%;
        margin: auto;
    }
    .left{
        text-align: left;
    }
    .right{
        text-align: right;
    }
    .header{
        color: red;
        position: absolute;
        left: 10%!important;
    }
    .move{
        position: absolute;
        left: 40%!important;
    }
    .details{
        position: absolute;
        left: 60%;
        top: 10%
    }


</style>
<body>
    <div class="row">
<div>
    <img class="move"  style="width:65px; height:65px" src="{{ public_path('/img/download.png') }}" alt="Passport">
    <br><br> <br>
    <h3 class="header">The Redeemed Christian church of God, Easter Campout 2020</h3>
</div>
<br>
<br>
<br>

        <div class="col-md-8 col-lg-8 details">
        <h2><strong>Surname:</strong> {{ ucfirst( $users->surname) }}</h2>
        <h2><strong>First Name:</strong> {{ucfirst( $users->firstName) }}</h2>
        <h2><strong> Date of Birth:</strong> {{ ucfirst( $users->dob) }}</h2>
        <h2><strong>Gender:</strong> {{ ucfirst( $users->gender) }}</h2>
        <h2><strong>Area:</strong> {{ ucfirst( $users->area) }}</h2>

        </div>
        <div class="col-md-4 col-lg-4">
        <img class="image" style="width:51mm%; height:51mm%" src="{{ public_path('/storage/passports/'.$users->passport) }}" alt="Passport">
        </div><br>
        <br>
        <br>
        <p class="left">__________________ <br>Parents signature</p>

        <p class="right">__________________ <br>Pastor's signature</p>
        <p class="right">______________________ <br>Area Co-ordinators signature</p>


                   </div>
</body>
</html>
