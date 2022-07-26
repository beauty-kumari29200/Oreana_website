<?php
$title='ADD NEW BLOG DETAILS';
ob_start();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
function SwapDivsWithClick(div1,div2)
{
   d1 = document.getElementById(div1);
   d2 = document.getElementById(div2);
   if( d2.style.display == "none" )
   {
      d1.style.display = "none";
      d2.style.display = "block";
   }
   else
   {
      d1.style.display = "block";
      d2.style.display = "none";
   }
}
</script>
            <!-- blog details start -->
            <section class="course_details_area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="course_dtls_left mb-30">
                                <div class="cdl_top mb-30">
                                    <div class="from_wrapper comment_form">
                                        <h3 class="comment_title" style="padding-bottom: 10px;">Add new Blog</h3>
                                        <form action="add-new-blog-details.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="text" name="bname"
                                                        placeholder="Title of the Blog...">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" name="category"
                                                        placeholder="Category...">
                                                </div>
                                                <div class="col-lg-12 datetime" style="color: #a3a3a3;">
                                                    <input type="date" name="date"
                                                        placeholder="Date...">
                                                </div>
                                                <div class="col-lg-12 datetime">
                                                    <input type="text" name="aname"
                                                        placeholder="Author Name...">
                                                </div>
                                                <div class="col-12">
                                                    <label style="padding-bottom: 10px;">Image Of the Author</label>
                                                    <input  type="file" id="img" name="img" >
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="description" id="description" cols="30"
                                                        rows="60"
                                                        placeholder="Description..."></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label style="padding-bottom: 10px;">Cover image of the Blog</label>
                                                    <input required type="file" style="cursor: pointer;" id="photo" name="photo">
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact_btn text-center">
                                                        <button type="submit" name="submit" class="thm_btn" href="#">Add New Blog<i class="fal fa-long-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </section>
            <!-- blog details end -->

            <!-- bai start -->
<!--             <section class="bai_area bai_bootom_space">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="bai_wrap bai_left theme_bg">
                                <span># Become A Instructor</span>
                                <h3>Become a Instructor</h3>
                                <a class="thm_btn thm_btn-border" href="contact.html">apply now<i class="fal fa-long-arrow-right"></i></a>
                                <div class="bai_shape">
                                    <img src="asset/img/icon/bai_shape_01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bai_wrap bai_right white_bg">
                                <span># Become A Partner</span>
                                <h3>Become a Partner</h3>
                                <a class="thm_btn thm_btn-2" href="contact.html">Contact us<i class="fal fa-long-arrow-right"></i></a>
                                <div class="bai_shape">
                                    <img src="asset/img/icon/bai_shape_02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- bai end -->
            
<script>
function addNewWebinar() {
    var parentGuest = document.getElementById("one");
    let btn = document.createElement("button");
    btn.innerHTML = "New Category";
    if (parentGuest.nextSibling) {
        parentGuest.parentNode.insertBefore(btn, parentGuest.nextSibling);
        }
        else {
        parentGuest.parentNode.appendChild(btn);
        }  
    }
</script>
<?php
$content=ob_get_contents();
ob_end_clean();
?>

<?php include 'template.php' ?>

<?php
$con= mysqli_connect('localhost', 'root', '', 'orena_solutions');
if(isset($_POST["submit"]))
{
    if(isset($_POST["bname"]))
        $bname=$_POST["bname"];
    if(isset($_POST["category"]))
        $category=$_POST["category"];
    if(isset($_POST["date"]))
        $date=$_POST["date"];
    if(isset($_POST["aname"]))
        $aname=$_POST["aname"];
    if(isset($_FILES["img"]))
    {
        $dimg = "Uploads/Blogs/Photos/";
        $img = $dimg . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $img);
    }
    if(isset($_POST["description"]))
        $description=$_POST["description"];
        if(isset($_FILES["photo"]))
        {
            $filename=$_FILES["photo"]["name"];
            $newname=$_POST["bname"];
            $newfilename=$newname .".jpg";
            $dphoto = "images/Blogs/";
            $photo = $dphoto . basename($newfilename);
            move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
        }
    $sql= "INSERT INTO `add-new-blog-details` VALUES ('$bname', '$category', '$date', '$aname', '$description')";
    $rs= mysqli_query($con, $sql);
    if($rs)
    {
        echo "<script>alert('Blog saved successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Error! Blog not saved.');</script>";
    }
}
?>