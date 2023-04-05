<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Wędkowanie</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
<?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","wedkowanie");
         
            

         ?>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

<div class="lewy">
    <div class="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        
        <ol>
            <?php 
           
            $sql="SELECT nazwa,akwen,wojewodztwo FROM Ryby JOIN lowisko ON Ryby.id=lowisko.id";
            $res = $con->query($sql);  
            $rows = $res->fetch_all(MYSQLI_ASSOC);
            
            
            
        for ($i=0;$i<count($rows);$i++){
            
            echo '<li>'.$rows[$i]["nazwa"].', '.$rows[$i]["akwen"].', '.$rows[$i]["wojewodztwo"].'<br>';
        }
            
            

            ?>
            <li><?php 
            
            
            ?></li>
          </ol>

    </div>

    <div class="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>

        
            <table onMouseover="this.bgColor='#4FB3BF'"onMouseout="this.bgColor=''">

            <?php 
            $sql2="SELECT * FROM ryby";
            $res2 = $con->query($sql2);  
            $rows2 = $res2->fetch_all(MYSQLI_ASSOC);
            
            
            
        for ($y=0;$i<count($rows2);$y++){
            
            echo ''.$rows[$y]["id"].', '.$rows[$y]["nazwa"].', '.$rows[$y]["wystepowanie"].'';
        }
            
            
            ?>

                <tr>
                    <td>L.p.</td><td>Gatunek</td><td>Występowanie</td>
                </tr>

                <tr>
                    <td>skrypt2</td><td>skrypt2</td><td>skrypt2skrypt2vskrypt2skrypt2skrypt2skrypt2skrypt2skrypt2skrypt2skrypt2</td>
                </tr>
                <tr>
                    <td>skrypt2</td><td>skrypt2</td><td>skrypt2</td>
                </tr>
             </table>
    </div>
</div>
    <div class="prawy">
        
        <center>
        <img src="ryba1.jpg" alt="Sum">
       
        
    </center> 
    
    <a href="kwerendy.txt"> Pobierz kwerendy</a>
    </div>
<div class="stopka">
    <p>Stronę wykonał:0000000000000</p>
</div>
        
    

</body>
</html>