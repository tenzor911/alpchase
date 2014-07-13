<?php
session_start();
session_destroy();
setcookie("uname","",time()-7200);
header ("location: index");
?>