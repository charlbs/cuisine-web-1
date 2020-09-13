<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
    width: 60%;
    height: 500PX;
    border: 4px solid #00ab44;
    display: flex;
    margin-top: 10%;
}
.gauche{
    height: 100%;
    width: 50%;
}
.droite{
    height: 100%;
    width: 50%;
    position: relative;
}
.form{
    position: absolute;
    height: 70%;
    width: 70%;
    margin-left: 15%;
    margin-top: 8%;
}
.img{
    height: 100%;
    width: 100%;
}
.champ{
    width: 98%;
    height: 10%;
    margin-top: 3%;
    border-radius: 2.5px;
    border: 0.5px solid #dbdbdb;
    color: black;
    padding-left: 5px;
}
.check{
    margin-top: 3%;
    color: #dbdbdb;
}
.button{
    margin-top: 3%;
    width: 100%;
    height: 10%;
    color: white;
    background-color: #08559d;
    border: none;
    border-radius: 1.5px;
}
.sing{
    margin-right: 55%;
    color: #194879;
    font-size: 1.5em;
}
h1{
    color: #0e569c;
}
.agree{
    color: #e7e7e7;
}
.champ:focus:valid{
    border:solid 2px blue;
}
input:focus{
    outline: none;
}
.champ:focus:invalid{
    border:solid 2px red;
}
    </style>
</head>
<body>
  <center>
    <div class="container">
        <div class="gauche">
              <img src="hotel.jpg" alt="hotel" class="img">
        </div>
        <div class="droite">
            <h1>Welcome to Hotel Arina</h1>
            <p>
                <center>
                <form action="#" method="POST" class="form">
                    <span class="sing">Sing up buddy</span><br>
                    <input type="text" placeholder="Name" class="champ" required title="entrez un nom commencant par une lettre majuscule et ayant au moins 10 caracteres" pattern="([A-Z][a-z])" minlength="10"> <br>
                    <input type="email" placeholder="Email" class="champ" required pattern="[a-z0-9._%+-]+@webcodepath+\.[a-z]{2,}$"> <br>
                    <input type="tel" placeholder="Phone" class="champ" required pattern="[6][0-9]{8}"> <br>
                    <input type="text" placeholder="Address" class="champ" required> <br>
                    <input type="checkbox" name="pfm" value="agree" class="check" checked> <span class="agree">I agree the terms & conditions </span> <br>
                    <input type="submit" value="Send Request" class="button">
                </form>
            </center>
            </p>
        </div>
    </div>
</center>
</body>
</html>