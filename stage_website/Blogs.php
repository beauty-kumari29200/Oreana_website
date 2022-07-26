<?php
$title='BLOGS';
ob_start();
?>
<section class="courses_area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="masonry_active mb-40">
                            <button class="active" data-filter="*">all categories</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <?php
                        $con=mysqli_connect("localhost", "root", "", "orena_solutions");
                        $query=mysqli_query($con,"select * from `add-new-blog-details`");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1">
                                <div class="course_single mb-30" style="height: 376px;">
                                    <div class="course_content">
                                        <a href="blog-career-in-gis.php"><img src='images/Blogs/<?php echo "$row[Title]".".jpg"?>'></a>
                                        <h3><a href="blog-career-in-gis.php" class="title"><?php echo "$row[Title]" ?></a></h3>
                                        <span class="cat">By <?php echo "$row[Author_Name]" ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
                                <!--                     
                <div class="row">
                    <div class="col-12">
                        <div class="load_more_btn text-center pt-10">
                            <a class="thm_btn thm_btn-white" href="courses.html">Load More <i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
<!-- jquery include -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">  
    function Reset() {  
        var dropDown = document.getElementById("category");  
        dropDown.selectedIndex = 0;
        var dD = document.getElementById("sortby");  
        dD.selectedIndex = 0; 
    }
</script>
<?php 
$content=ob_get_contents();
ob_end_clean();
?>

<?php include 'template.php'?>