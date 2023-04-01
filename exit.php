<?php

setcookie('loginName', '', time() - 3600);
header("Location: /index.php", TRUE, 307);

?>