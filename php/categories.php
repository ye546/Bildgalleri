<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <title>Kategorier</title>
</head>
<body>
<div class="container">
        <div class="jumbotron">
            <div class="row">
                <ul>
                    <?php
                        $dirs = scandir("../imgs");

                        foreach($dirs as $d)
                        {   
                            $path = "..imgs/".$d."/";
                            //visa om endast om det är en katalog
                            if($d == "." || $d == '..')
                                continue;
                            else
                                echo "<li><a href='../imgs/$d'>$d</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>



