<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            spl_autoload_register(
                    function($class) {
                $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
                echo $path . ".php<br>";
                if (file_exists($path . '.php')) {
                    echo "ok";
                    require_once $path.'.php';
                }else{
                    echo "Blad ladowania: ".$path.'.php';
                }
            }
            );
            $test = new \php\libs\Testowa();
            echo $test;
            ?>
        </pre>
    </body>
</html>
