<?php
session_start();
unset($_SESSION['IS_LOGIN']);
?>
<script>
    window.location.href = "index.php";
</script>