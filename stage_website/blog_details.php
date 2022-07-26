<?php
 $name=$_GET["name"];
 $id=$_GET["id"];
 
    include 'connection_moodle.php';


?>
<?php include "navbar.php" ?>

        <main>
           

            
            <section class="course_details_area pt-120 pb-90">
                <div class="container">
                    
                    <?php 
                    
                    if($mysqli)
                        {
                        
                            
                        $sql = "Select * from mdl_page WHERE name='$name'";
                       
                    
                        $result = mysqli_query($mysqli, $sql);
                        $row=mysqli_fetch_assoc($result);
                        
                        ?>
                        <h2><?php  echo $row['name']; ?></h2>
                        <div><?php echo $row['content']; ?></div>
                        <?php
                            
                        }
                    ?>
                    
                    
                </div>
            </section>
           

        </main>
  <?php include "footer.php" ?>