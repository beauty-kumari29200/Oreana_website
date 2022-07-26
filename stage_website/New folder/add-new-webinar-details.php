<!-- css include -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

<?php
$title='Add new webinar details';
$content='
            <!-- course details start -->
            <section class="course_details_area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="course_dtls_left mb-30">
                                <div class="cdl_top mb-30">
                                    <div class="from_wrapper comment_form">
                                        <h3 class="comment_title" style="padding-bottom: 10px;">Add new Webinar</h3>
                                        <form action="add-new-webinar-details.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="text" name="wname"
                                                        placeholder="Title of the Webinar...">
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
                                                    <input type="time" name="time"
                                                        placeholder="Time...">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" name="duration"
                                                        placeholder="Duration...">
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="description" id="description" cols="30"
                                                        rows="10"
                                                        placeholder="Description..."></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="topics" id="topics" cols="30"
                                                        rows="10"
                                                        placeholder="Topics to be covered..."></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label style="padding-bottom: 10px;">Image Of the Instructor</label>
                                                    <input  type="file" id="img" name="img" >
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" name="instructor"
                                                        placeholder="Name of the Instructor...">
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="details" id="details" cols="30"
                                                        rows="10"
                                                        placeholder="Instructor details..."></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact_btn text-center">
                                                        <button type="submit" name="submit" class="thm_btn" href="#">Add New Webinar<i class="fal fa-long-arrow-right"></i></button>
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
            <!-- course details end -->

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
            <!-- bai end -->'
?>

<?php include 'template.php'; ?>

<?php
$con= mysqli_connect('localhost', 'root', '', 'orena_solutions');
if(isset($_POST["submit"]))
{
    if(isset($_POST["wname"]))
        $wname=$_POST["wname"];
    if(isset($_POST["category"]))
        $category=$_POST["category"];
    if(isset($_POST["date"]))
        $date=$_POST["date"];
    if(isset($_POST["time"]))
        $time=$_POST["time"];
    if(isset($_POST["duration"]))
        $duration=$_POST["duration"];
    if(isset($_POST["description"]))
        $description=$_POST["description"];
    if(isset($_POST["topics"]))
        $topics=$_POST["topics"];
    if(isset($_FILES["img"]))
    {
        $dimg = "Uploads/Webinars/Photos/";
        $img = $dimg . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $img);
    }
    if(isset($_POST["instructor"]))
        $instructor=$_POST["instructor"];
    if(isset($_POST["details"]))
        $details=$_POST["details"];

    $sql= "INSERT INTO `add-new-webinar-details` VALUES ('$wname', '$category', '$date', '$time', '$duration', '$description', '$topics', '$instructor', '$details')";
    $rs= mysqli_query($con, $sql);
    if($rs)
    {
        echo "<script>alert('Webinar saved successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Error! Webinar not saved.');</script>";
    }
}
?>

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