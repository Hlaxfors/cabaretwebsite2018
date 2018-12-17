<?php

$filename = (isset($_POST['goodQuality'])) ? 'goodQuality' : 'badQuality';

header('Location: something/nothing/this/is/big/secure/' . $filename . '.mp4');
