





<?php include 'navbar.php'; ?>

<section class="checkout_area pt-120 pb-120 ">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="checkout_wrap">
                                <div class="radio_wrap">
                                    <h3></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <form class="form_wrap" method="POST" action="in.php" enctype="multipart/form-data">
                                            <div class="row">
                                                
                                                
                                                <div class="col-xl-6 col-lg-6">
                                                    <label for="email">Email<span>*</span></label>
                                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                                </div>
   
                                                    
                                                 
                                                <div class="col-xl-12 col-lg-12">
                                                    <label for="fileToUpload">Upload Resume<span>*</span></label>    
                                                    <input type="file" id="fileToUpload" class="ct" name="fileToUpload" required>
                                                </div>


                                                <div class="text-right">
                                                 
													<button class="thm_btn thm_btn-black" value="submit" > Submit the application<i class="fal fa-long-arrow-right"></i></button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';


<?php include 'footer.php'; ?>