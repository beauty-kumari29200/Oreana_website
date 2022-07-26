<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/responsive.css">
<style>
    #img:hover
    {
        transition: transform .5s;
        transform: rotate(5deg) scale(1.1);
    }
    #img
    {
        transition: 0.5s;
    }
    #img-container
    {
        height: 200px;
        width: 300px; overflow: hidden;
        border: 1px solid #000089;
        border-radius:5px;
        box-shadow: 0 0 10px #000089;
        padding: 0px;
        margin-right: 30px;
    }
</style>
<?php
$title='Our Services';
$content='
<section class="checkout_area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="checkout_wrap" style="margin: auto;">
                    <div class="radio_wrap">
                        <h3></h3>
                    </div>
                    <div class="row">
                        <div id="img-container">
                            <img id="img" src="http://orena.solutions/images/campus_recruitment_drive.png" width="300">
                        </div>
                        <div id="img-container">
                            <img id="img" src="https://www.orena.solutions/images/talent_acquisition.png" width="300">
                        </div>
                        <div id="img-container">
                            <img id="img" src="https://www.orena.solutions/images/expert_exchange.png" height="544!important" width="600">
                        </div>
                        <div id="img-container">
                            <img id="img" src="https://www.orena.solutions/images/coporate_workshop.jpg" width="300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>'
?>
<?php include 'template.php'; ?>