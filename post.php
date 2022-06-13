<?php
//curl -X POST -F "name=test" localhost:8000
//php -S localhost:8000 post.php
//https://www.php.net/manual/en/reserved.variables.post.php
echo 'Hello from C++ ' . htmlspecialchars($_POST["name"]) . '!';
?>
