<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/responsive.css">

<?php
$title='Our Partners';
$content='
<section class="checkout_area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="checkout_wrap">
                    <div class="radio_wrap">
                        <h3></h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <form class="form_wrap" method="Post" action="form.php">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <label for="fname">Your Full Name (as per AADHAR)<span>*</span></label>
                                        <input type="text" id="fname" name="fname" placeholder="Your Full Name">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="email">Your Email<span>*</span></label>
                                        <input type="text" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="email">Your Mobile Number<span>*</span></label>
                                        <input type="text" id="mobile" name="mobile" placeholder="Your Mobile Number">
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <label for="cname">College / Institute Name in full form<span>*</span></label>
                                        <input type="text" id="cname" name="cname" placeholder="College / Institute Name">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="cname">Training and Placement Officer (TPO) Name<span>(optional)</span></label>
                                        <input type="text" id="tpo" name="tpo" placeholder="Training and Placement Officer">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="email">Training and Placement Officer\'s Email address<span>(optional)</span></label>
                                        <input type="text" id="tpoemail" name="tpoemail" placeholder="TPO\'s Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <label for="select_graduation">Your graduation field<span>*</span></label>
                                        <div class="filter">
                                            <select name="select_graduation" id="select_graduation">
                                                <option value="BE computer">BE computer</option>
                                                <option value="BE information technology">BE information technology</option>
                                                <option value="MSC"> MSC</option>
                                                <option value="MCA">MCA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <label for="10thresult">Your 10th result in percentage<span>(optional)</span></label>
                                        <input type="text" id="10thresult" name="10thresult" placeholder="10th result in %">
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <label for="diploma_rresult">12th/Diploma result in percentage<span>(optional)</span></label>
                                        <input type="text" id="diploma_rresult" name="diploma_rresult" placeholder="12th/Diploma result in %">
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <label for="Graduation_CGPA">Graduation CGPA/ Percentage<span>(optional)</span></label>
                                        <input type="text" id="Graduation_CGPA" name="Graduation_CGPA" placeholder="Graduation CGPA/ Percentage">
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <label for="Post_CGPA">Post Graduation CGPA/ Percentage<span>(optional)</span></label>
                                        <input type="text" id="Post_CGPA" name="Post_CGPA" placeholder="Post Graduation CGPA/ Percentage">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="country">Domain (1st preference)<span>*</span></label>
                                        <div class="filter">
                                            <select name="domain" id="country">
                                                <option value="NET">NET</option>
                                                <option value="SharePoint">SharePoint</option>
                                                <option value="Android">Android</option>
                                                <option value="Flutter">Flutter</option>
                                                <option value="UI/UX">UI/UX</option>
                                                <option value="Business Development">Business Development</option>
                                                <option value="Systen Admin and Networking">Systen Admin and Networking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="experience">Time period of experience<span>(optional)</span></label>
                                        <input type="text" id="experience" name="experience" placeholder="Time period of experience">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="F_project">Final Year project title<span>(optional)</span></label>
                                        <input type="text" id="F_project" name="F_project" placeholder="Final Year project title">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="F_technology">Final Year project technology<span>(optional)</span></label>
                                        <input type="text" id="F_technology" name="F_technology" placeholder="Final Year project technology">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="city">Town / City<span>*</span></label>
                                        <input type="text" id="city" name="city" placeholder="Town / City">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <label for="State">State<span>*</span></label>
                                        <input type="text" id="State" name="State" placeholder="State">
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <input type="file" id="ct" class="ct" name="filename">
                                    </div>
                                    <div class="text-right">
										<button class="thm_btn thm_btn-black" value="submit" > Submit the application <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>'
?>

<?php include 'template.php'; ?>