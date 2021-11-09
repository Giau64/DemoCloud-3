<?php
if(isset($_SESSION['us'])){
    session_destroy();
    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>'; 
}
?>