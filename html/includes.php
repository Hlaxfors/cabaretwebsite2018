<?php

function generateHeader(String $activePage)
{

?>

<!-- Header -->
<div class="row header">
    <div class="col-lg-4 title">
        <div class="mx-auto">
            <span class="maintitle">
                PLAYBACK
            </span>
            <br>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="mx-auto">
                <img class="rewindlogo" src="./resources/icons/logo/rewindlogo.png">
            </div>
        </div>
    </div>
    <div class="col-lg-4 title">
        <div class="pageTabContainer">
            <span class="pageTab">
                <?=$activePage ?>
            </span>
        </div>
    </div>
</div>
<!--Background-->
<div class="row background">
    <div class="mx-auto">
        <img class="buildings" src="./resources/icons/buildings/BuildingsRed.png">
    </div>
</div>

<?php

}

?>
