<?php
session_start();
?>
<html>
<head>
    <base href="http://dev.php.dan/public_html/">
</head>
<body>

<?= isset($_SESSION['msg']) ? "<p>".$_SESSION['msg']."</p>" : ""; ?>
<form action="login/testPOST" method="post">
    <input type="text" name="email">
    <input type="submit" name="submit">
</form>
</body>
</html>