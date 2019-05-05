<?php
    //detta eliminerar återsändningen av $_POST requesten som jag hade tidigare.
    //Jag valde att ta bort det för att det bara rätt ut sagt är irriterande
    //och kan vara farligt att använda om man t ex ber som transaktioner - 
    //det kan dras pengar igen om användaren refreshar sidan
    //nu istället så hanterar vi $_POST här och sedan redirectar vi till
    //en sida som bara får arrayen av den katalog vi sökte efter.

    //starta session för att kunna spara array variabeln
    session_start();

    //hantera POST
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //kolla om det verkligen är en inkommande $_POST förfrågan
        if(isset($_POST))
        {
            //hämta texten från searchfield formen
            $search_fetch = $_POST['search-field'];
            
            //spar variablen i en session
            $_SESSION['srchfield'] = $search_fetch;

            //redirect till display_images
            header('Location: display_images.php');
        }
        else//säg hejdå om det inte var en giltlig post förfrågan
        {
            echo "<a href='../index.html'>☇ Hem</a>";
            echo "<h1>inte en giltlig POST förfrågan.</h1>";
        }   
    }
?>
