<?php 

    try
    {
        $db = new PDO("mysql:host=mysql.hostinger.web.tr; dbname=u452586645_hasta",'u452586645_huni','1806956');
        
    }catch(PDOException $e)
    {
            echo $e->getMessage();
    }

 $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

?>
