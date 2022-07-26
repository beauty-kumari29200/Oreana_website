<!doctype html>
<?php include "navbar.php" ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>Feedback</title>
  </head>
  <body>
    <section class="admission-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">Feedback</h5>
                        <h2 class="section__title">Feedback Form</h2>
                        <span class="section-divider"></span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-30px">
                <div class="col-lg-10 mx-auto">
                    <div class="card-box-shared">
                        <div class="card-box-shared-body">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Who Are You?<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <div class="sort-ordering user-form-short">
                                                        <select class="sort-ordering-select" name="User" required>
                                                            <option value="" selected="">SELECT</option>
                                                            <option value="student">Student</option>
                                                            <option value="expert">Expert</option>
                                                            <option value="employee">Employee</option>
                                                            <option value="customer">Corporate</option>
                                                            <option value="other">University</option> 
                                                        </select>
                                                    </div><!-- end sort-ordering -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="name" placeholder="name" required>
                                                    <span class="la la-user input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <!-- <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Last Name<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="text" placeholder="Last name">
                                                    <span class="la la-user input-icon"></span>
                                                </div>
                                            </div>
                                        </div> --><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="Email" placeholder="Email address" required>
                                                    <span class="la la-envelope input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Phone Number<span class="primary-color-2 ml-1"></span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" pattern="[0-9]{10}" name="Phone_Number" placeholder="Phone number">
                                                    <span class="la la-phone input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">	
                                            <div class="input-box">
                                                <label class="label-text">Upload photo<span class="primary-color-2 ml-1"></span></label>
                                                <div class="form-group">
                                                 <input type="file" class="form-control" name="P_fileToUpload" id="P_fileToUpload">
                                                </div>
                                            </div>
                                        </div>	
                                       
                                        <!-- <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">City<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="name" placeholder="City">
                                                    <span class="la la-map-marker input-icon"></span>
                                                </div>
                                            </div>
                                        </div> --><!-- end col-lg-6 -->
                                        
                                        <!-- <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Select Gender<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <label for="radio-1" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-1" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Male</span>
                                                    </label>
                                                    <label for="radio-2" class="radio-trigger mb-0">
                                                        <input type="radio" id="radio-2" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --><!-- end col-lg-12 -->
                                        
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">How did You Know About Orena ?<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <div class="sort-ordering user-form-short">
                                                        <select class="sort-ordering-select" name="Medium" required>
                                                            <option value="" selected="">Select</option>
                                                            <option value="student">LinkedIn</option>
                                                            <option value="student">Facebook</option>
                                                            <option value="expert">Instagram</option>
                                                            <option value="employee">University/College</option>
                                                            <option value="customer">Friends</option>
                                                            <option value="customer">Internet</option>
                                                            <option value="other">Others</option> 
                                                        </select>
                                                    </div><!-- end sort-ordering -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                                                                                
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">How was Youe Experience with Orena ?<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <label for="radio-1" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-1" name="Orena_Experience" value="Excellent" required>
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Excellent</span>
                                                    </label>
                                                    <label for="radio-2" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-2" name="Orena_Experience" value="Very_Good">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Very Good</span>
                                                    </label>
                                                    <label for="radio-3" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-3" name="Orena_Experience" value="Good">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Good</span>
                                                    </label>
                                                    <label for="radio-4" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-4" name="Orena_Experience" value="IT's_OK">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">It's OK</span>
                                                    </label>
                                                    <label for="radio-5" class="radio-trigger mb-0">
                                                        <input type="radio" id="radio-5" name="Orena_Experience" value="Bad">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Bad</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Would You Recommend Orena to Others ?<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <label for="radio-6" class="radio-trigger mb-0 mr-2">
                                                        <input type="radio" id="radio-6" name="Recommend_Orena" value="Yes" required>
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">Yes</span>
                                                    </label>
                                                    <label for="radio-7" class="radio-trigger mb-0">
                                                        <input type="radio" id="radio-7" name="Recommend_Orena" value="No">
                                                        <span class="checkmark"></span>
                                                        <span class="font-size-15 primary-color-3">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Your Valuable Suggestion<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <textarea class="message-control form-control" name="Suggestion" placeholder="Write Suggestions" required></textarea>
                                                        <i class="la la-pencil input-icon"></i>
                                                    </div>
                                                </div>
                                        </div><!-- end col-lg-12 -->
                                        
                                        <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text" >Additional Feedback<span class="primary-color-2 ml-1"></span></label>
                                                    <div class="form-group">
                                                        <textarea class="message-control form-control" name="Short_Feedback" placeholder="Write Feedback (additional if any)"></textarea>
                                                        <i class="la la-pencil input-icon"></i>
                                                    </div>
                                                </div>
                                        </div><!-- end col-lg-12 -->
                                
                                        <div class="col-lg-12">
                                            <div class="form-group" style="margin-top: 20px; margin-bottom: 40px";>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="chb1">
                                                 <center>   <label for="chb1">by signing i agree to the terms and conditions and privacy policy</label></center>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        
                                        <div class="col-lg-12">
                                            <center>
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">Submit Feedback</button>
                                            </div>
                                            </center>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <?php include "footer.php"; ?>
</html>