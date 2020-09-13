<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid blue;
            width: 50%;
            text-align: center;
        }
        td{
            height: 50px;
            color: #37373d;
            background-color: #e7eaed;
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <?php
    $bdd = new PDO ('mysql:host=localhost;dbname=interface6', 'root', '');
    ?>
   <?php
   if(isset($_GET['submit']))
   {
       if(isset($_GET['name'])AND isset($_GET['email'])AND isset($_GET['phone'])AND isset($_GET['address']))
       {
        if($_GET['name'] !="" AND $_GET['email'] !=""  AND $_GET['phone'] !="" AND $_GET['address']!="" )
        {
            $name = $_GET['name'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $address = $_GET['address'];
            $input="INSERT INTO formulaire(nom,email,phone,adresse) VALUE('$name', ' $email', '$phone', '$address')";
            $execute=$bdd->query($input);
        }  
       }
   }
   ?>
 <center>
    <table cellspacing="0">
        <tr>
            <td>ID</td>
            <td>NOM</td>
            <td>EMAIL</td>
            <td>PHONE</td>
            <td>ADDRESS</td>
        </tr>
        <?php
        $montrer = $bdd -> query('SELECT * FROM formulaire');
        while($ID = $montrer ->fetch())
        {?>

        
        <tr>
            <td><?php echo $ID['ID'] ?></td>
            <td><?php echo $ID['nom'] ?></td>
            <td><?php echo $ID['email'] ?></td>
            <td><?php echo $ID['phone'] ?></td>
            <td><?php echo $ID['adresse'] ?></td>
        </tr>
        <?php
        }?>
    </table>
 </center>
</body>
</html>