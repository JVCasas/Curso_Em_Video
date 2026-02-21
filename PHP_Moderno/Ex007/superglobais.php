<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Super globais</title>
</head>
<body>
    <main>
        <pre>
            <?php
            setcookie("dia-da-semana", "SEGUNDA", time() + 120);
            session_start();
            $_SESSION["teste"] = "funcionou";
            
            print "<h1>Superglobal GET</h1>"; 
            var_dump($_GET);
            print "<h1>Superglobal POST</h1>"; 
            var_dump($_POST);
            print "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);
            print "<h1>Superglobal Cookie</h1>";
            var_dump($_COOKIE);
            print "<h1>Superglobal Session</h1>";
            var_dump($_SESSION);
            print "<h1>Superglobal Env</h1>";
            var_dump($_ENV);
            print "<h1>Superglobal Server</h1>";
            var_dump($_SERVER);
            print "<h1>Superglobal Globals</h1>";
            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
    
</body>
</html>