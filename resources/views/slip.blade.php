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
        /* left: 10%!important; */
    }
    .line{
        color: red;
        position: absolute;
        top: 12%!important;
    }
    .move{
        position: absolute;
        left: 40%!important;
    }
    .details{
        position: absolute;
        left: 60%;
        top: 16%
    }


</style>
<body>
    <div class="row">
<div>
    <img class="move"  style="width:65px; height:65px" src="{{ public_path('/img/download.png') }}" alt="Passport">
    <br><br> <br>
    <h3 class="header">Redeemed Christian church of God, Easter Campout 2020</h3>
<br>
<br>
</div>
___________________________________________________________<br>
<br>
<br>

        <div class="col-md-8 col-lg-8 details">
            <br>
        <p><strong>Surname:</strong> {{ ucfirst( $users->surname) }}</p>
        <p><strong>First Name:</strong> {{ucfirst( $users->firstName) }}</p>
        <p><strong> Date of Birth:</strong> {{ ucfirst( $users->dob) }}</p>
        <p><strong>Gender:</strong> {{ ucfirst( $users->gender) }}</p>
        <p><strong>Area:</strong> {{ ucfirst( $users->area) }}</p>

        </div>
        <div class="col-md-4 col-lg-4">
        <img class="image" style="width:60mm; height:50mm" src="{{ public_path('/storage/passports/'.$users->passport) }}" alt="Passport">
        </div>
        <br>
        <p class="right">______________________ <br>Mummy PICP's signature</p>


                   </div>
</body>
</html>
