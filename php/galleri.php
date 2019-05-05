<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <title>Galleri</title>
</head>
<body>
    <div class="container">
    
        <div class="jumbotron">
        <a href="../index.html">☇ Hem</a>
        <br>
        <a href="categories.php">☇ Kategorier</a>
        <h1>Bildgalleri.</h1>
            <div class="row">
                <?php
                    //skanna alla kataloger som finns 
                    //set main directory
                    $mainDir = '../imgs';
                    
                    //hämtar underkatalog
                    $subDirectories = scandir($mainDir);

                    //tar bort dem två första indexeringarna ur fältet för dem två är bara '.' & '..'
                    unset($subDirectories[0]);
                    unset($subDirectories[1]);

                    //Första loopen genom alla underkataloger
                    foreach($subDirectories as $subDirectory) 
                    {
                        //loopa sedan igenom alla filer i varje underkatalog
                        foreach(glob($mainDir.'/'.$subDirectory.'/*') as $file) 
                        {
                            //hämta filinformation för att kolla dess filändelse
                            $file_extension = pathinfo($file);

                            //Visa bara png och jpg filer
                            if($file_extension['extension'] == "png" || $file_extension['extension'] == "jpg")
                            {
                                echo "<a href='$file'><img class='rounded' height='100px' width='100px'src='$file' alt='bild'></a>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
