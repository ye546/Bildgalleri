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

                        //gets sub directories of PDFS directory
                        $subDirectories = scandir($mainDir);

                        //removes the first two indexes in the directories array that are just dots
                        unset($subDirectories[0]);
                        unset($subDirectories[1]);

                        // first loop through all sub directories ...
                        foreach($subDirectories as $subDirectory) {

                            //echo '<h1>'.$subDirectory.'</h1>';
                            // ... and then loop through all files in each sub directory
                            foreach(glob($mainDir.'/'.$subDirectory.'/*') as $file) 
                            {
                                $file_extension = pathinfo($file);
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
