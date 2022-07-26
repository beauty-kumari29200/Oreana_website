<?php include "navbar.php" ?>

<body>
    <section class="page_title_area" data-overlay="6" data-background="asset/img/bg/page_title_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-l2">
                    <div class="page_title text-center">
                         <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $content; ?>

    <?php include "footer.php" ?>

</html>