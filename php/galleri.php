

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <title>Galleri</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <?php
                    /*DENNA KOD BEHÖVER REWORKING, FÖR DEN FUNGERAR INTE AV NÅGON ANLEDNING*/

                    //skanna alla kataloger som finns 
                    $dir = scandir("../imgs");
                    $handle = null;
                    $n = null;

                    foreach($dir as $d)
                    {
                        //kolla om katalogen finns
                        if(is_dir($d))
                        {
                            //kolla om vi kan öppna katalogen
                            if($handle = opendir($d)) //checking if return value is != FALSE
                            {
                                $scanDir = readdir($handle);
                                foreach($scanDir as $f)
                                {
                                     //hämta filändelse
                                    $p_info = pathinfo($f);
                                    //visa endast bilder om det är png eller jpg fil
                                    $path = $d."/".$f;
                                    if($p_info['extension'] == "png" || $p_info['extension'] == "jpg" )
                                        echo "<img class='rounded' height='100px' width='100px'src='$path' alt='bild'>";
                                }
                            }
                        }
                        else if(!is_dir($d))
                        {
                            echo "<h1>not a dir</h1>";
                        }
                        
                    }
                    

                    /*
                    $cats = scandir("../imgs/cats");
                    $dogs = scandir("../imgs/dogs");

                    foreach($cats as $c)
                    {
                        //hämta filändelse
                        $p_info = pathinfo($c);
                        //visa endast bilder om det är png eller jpg fil
                        if($p_info['extension'] == "png" || $p_info['extension'] == "jpg" )
                            echo "<a href='../imgs/cats/$c'><img class='rounded' height='100px' width='100px'src='../imgs/cats/$c' alt='bild'></a>";
                    }

                    foreach($dogs as $d)
                    {
                        //hämta filändelse
                        $p_info = pathinfo($d);
                        //visa endast bilder om det är png eller jpg fil
                        if($p_info['extension'] == "png" || $p_info['extension'] == "jpg" )
                            echo "<a href='../imgs/dogs/$d'><img class='rounded' height='100px' width='100px'src='../imgs/dogs/$d' alt='bild'></a>";
                    }
                    */
                ?>
            </div>
        </div>
    </div>



</body>
</html>