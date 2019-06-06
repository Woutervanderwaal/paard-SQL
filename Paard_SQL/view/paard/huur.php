<?php
    $paardArray = getAllHorses();

?>

<div class="container">
            <a class="btn btn-primary" href="<?=URL?>paard/paardAdd" role="button">Paard Toevoegen</a>
            <h2 style="margin-top:52px;margin-left:34px;font-family:'Open Sans', sans-serif;font-size:22px;font-weight:800;line-height:32px;color:rgb(0,0,0);">Paarden</h2>
            <div class="cust_bloglistintro">
                <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
            </div>
            <div class="row">
                <?php
                    foreach($paardArray as $paard)
                    {
                ?>
                <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="height:auto;" src="<?=URL?>images/fillGray.jpg"></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;"><?= $paard['naam'] ?><br></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;"><?= $paard['discription'] ?></p>
                    <a class="h4" href="#">
                        <h6 style="margin-left: 20px;">Huur</h6>
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
