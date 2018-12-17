<a href="?page=home">[back]</a><br><br>

<form action="#" method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Generate Key">
</form>

<?php

if (isset($_POST['email'])) {
    require '../inc/key.php';
    echo '<table><tr><td>key:</td><td><code>' . create_key($_POST['email']) . '</code></td></tr><tr><td>email:</td><td><code>' . $_POST['email'] . '</code></td></tr></table>';
}

?>
