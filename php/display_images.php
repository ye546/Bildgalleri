<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <a href=""></a>
            <div class="row">
                <?php
                    //svara på inkommande post request från submit
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        //kolla om det verkligen är en inkommande $_POST förfrågan
                        if(isset($_POST))
                        {
                            //hämta texten från searchfield formen
                            $search_fetch = $_POST['search-field']; 
                            
                            if(empty($search_fetch))
                                goto hejda;

                            echo "<title>$search_fetch</title>";
                            
                            //kolla om katalogen finns
                            $dir = "../imgs/".$search_fetch;
                            if(is_dir($dir))
                            {
                                //skanna katalogen till en fält
                                $file_array = scandir($dir);
                                

                                //läs igenom fältet
                                foreach($file_array as $f)
                                {
                                    //hämta filinformation för att kolla dess filändelse
                                    $file_extension = pathinfo($f);
                                    
                                    $f_path = $dir."/".$f;

                                    //än så länge hanterar vi bara png och jpg filer, skippa att visa allting annat.
                                    if($file_extension['extension'] == "png" || $file_extension['extension'] == "jpg")
                                    {
                                        //visa bild(er)
                                        
                                        echo "<a href='$f_path'><img class='rounded' height='100px' width='100px'src='$f_path' alt='bild'></a>";
                                    }
                                }
                            }
                            else if(!is_dir($search_fetch))//om inte, gör detta
                            {
                                hejda:
                                echo"
                                <div class='col-sm'>
                                    <a href='../index.html'>☇ Hem</a>
                                    <h1>Hittade inga resultat.</h1>
                                    <h4>Se kategorier <a href='categories.php'>här</a>.</h4>
                                </div>
                                ";
                            }
                        }
                        else//säg hejdå om det inte var en giltlig post förfrågan
                        {
                            echo "<a href='../index.html'>☇ Hem</a>";
                            echo "<h1>inte en giltlig POST förfrågan.</h1>";
                        } 
                            
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
