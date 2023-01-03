<?php
include ("includes/admin_header.php");
?>

<section class="mainSectionAccount">

<div class="row">
    <div class="col-md-12 col-12 mt-4">
        <div class="tabContent  rounded5 p-3">
            <div class="tabsHeaderWrapper">
                <nav >
                    <div class="nav nav-tabs personalDataTabs" id="nav-tab" role="tablist">
                        <button class="nav-link active navTabAdmin" id="nav-personalInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><h5>PERSONAL INFORMATION</h5></button>
                        <button class="nav-link navTabAdmin" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><h5>BIO</h5></button>
                        <button class="nav-link navTabAdmin" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>PROFILE PICTURE</h5></button>
                        <button class="nav-link navTabAdmin" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-projects" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>PROJECTS</h5></button>
                        <button class="nav-link navTabAdmin" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>PASSWORD</h5></button>

                    </div>
                    
                </nav>

            </div>
            <!-- tabs start here -->
        
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                    <div class="row">
                        <div class="col-12 ">
                            
                            <form action="" class="mt-3">
                            <div class="row">
                                <div class="col-md-4 col-12 col-sm-6 mb-3">
                                    <label for="disabledSelect" class="form-label">Membership Type</label>
                                    <select id="disabledSelect" class="form-select">
                                        <option>Administrator</option>
                                    </select>
                                </div>

                                <div class="col-md-4 col-12 col-sm-6">
                                    <label for="publishingRole" class="form-label">Publishing Role</label>
                                    <select class="form-select" id="publishingRole" aria-label="Default select example">
                                        <option value="2">Publisher</option>
                                        <option value="1">Other Role</option>
                                        <option value="3">Printer</option>
                                        <option value="4">Author</option>
                                        <option value="5">Distributor</option>
                                        <option value="6">Bookshop</option>
                                        <option value="7">Editor</option>
                                        <option value="8">Production Editor</option>
                                        <option value="9">Copy Editor</option>
                                        <option value="10">Marketing/Sales</option>
                                        <option value="11">Production</option>
                                        <option value="12">Designer</option>
                                    </select>                                                                                                                                                                                                                                    
                                </div>
                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="otherRole" class="form-label">Other Role</label>
                                    <input type="text" class="form-control" id="otherRole" value="Technical Site Admin">
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="Alexander">
                                </div>
                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" value="Kimaru">
                                </div>
                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" value="Kimaru">
                                </div>
                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" aria-label="Default select example">
                                        <option value="1">MALE</option>
                                        <option value="1">FEMALE</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6" >
                                    <label for="dob" class="form-label">Date of Birth (dd/mm/yyyy)</label>
                                    <input type="" id="dob" data-provide="datepicker" class="form-control">
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6" >
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="" id="email" class="form-control" value="akimaru@calvarystudio.co.ke">
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6" >
                                    <label for="cellphone" class="form-label">Cellphone Number</label>
                                    <input type="" id="celphone" class="form-control" value="+254722607303">
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="location" class="form-label">Location</label>
                                    <select class="form-select" id="location" aria-label="Default select example">
                                        <option value="1">Nairobi</option>                                            
                                    </select>
                                </div>

                                <div class="mb-3 col-md-4 col-12 col-sm-6">
                                    <label for="timezone" class="form-label">Timezone</label>
                                    <select class="form-select" id="location" aria-label="Default select example">
                                        <option value="1">Nairobi</option>                                            
                                    </select>
                                </div>

                                <div class="col-4 my-3">
                                    <button type="submit" class="btn btn-warning"><span class="commentBtnText">UPDATE</span></button>

                                </div>








                                

                            </div>
                            
                            </form>
                        </div>
                    </div>
            
            
                </div>

                <!-- ===================BIO TAB CONTENT======================= -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="row">
                        <div class="col-12">
                            <p>Provide brief bio</p>
                            <form action="">
                                <div id="bioEditor" class=""></div>

                                

                                <div class="col-4 my-4">
                                    <button type="submit" class="btn btn-warning"><span class="commentBtnText">UPDATE</span></button>

                                </div>
                            </form>

                        </div>

                    </div>
                </div>

                <!-- ================== PROFILE PIC SECTION=============== -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="row mt-4">
                        
                        <div class="col-12 col-sm-6 text-center  mb-2">
                            <div class="mx-auto">
                                <div class="avatarLarge avatarEnhance mx-auto">
                                    <div class="avatarInitials ">
                                        AK                                                      
                                    </div>
                                </div>

                            </div>
                            <div class="form-check mt-2 mx-auto">
                            <input class="form-check-input me-0" type="radio" name="mode" id="flexRadioDefault1">
                            <label class="form-check-label ms-0" for="flexRadioDefault1">
                                Default radio
                            </label>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 text-center">
                            <div class="mx-auto position-relative imagePreview">
                                <div class="position-absolute" style="width:100%; height: 100%;">
                                    <img class="img-fluid" id="uploadedImage" src="assets/images/alex_profile.jpg">
                                </div>
                                <div id="uploadImageBox" class="m-auto text-center position-absolute">
                                    <label style="cursor: pointer;" for="profile_picture">
                                        <i style="font-size: 48px;" class="bi bi-upload"></i>
                                        <p class="small">Click here to Change Profile Picture</p>
                                        <input accept="image/*" type="file" name="image" class="image" id="profile_picture" style="display:none">
                                    </label>

                                </div>
                            </div>

                            <div id="mode" class="form-check mt-2 ">
                                <input  id="mode_image" class="form-check-input" type="radio" name="mode" value="image">
                                <label for="mode_image" class="form-check-label">Use image as profile picture</label>

                            </div>

                        </div>
                
                    

                    

                    </div>
                </div>

                <!-- ================== PROFILE PIC SECTION=============== -->
                <div class="tab-pane fade" id="nav-projects" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-3 col-12 my-3">
                            <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#newProjectModal"><span class="commentBtnText">CREATE PROJECT</span></button>
                        </div>
                        <div class="col-9 my-4">
                            <p>A maximum of 5 projects allowed</p>
                        </div>
                        <!-- Table for projects -->
                        <div class="col-12 pt-3">
                                            <table class="table table-sm  border-top">
                                                <thead>
                                                    <tr><th>Project</th><th>Created At</th><th>Updated At</th><th>Options</th></tr>
                                                </thead>
                                                <tbody>
                                                                                                        </tbody>
                                            </table>
                                        </div>
                    </div>
                    
                    
                </div>

                 <!-- ================== Password Section============== -->
                 <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="container">
                    <div class="row">

                    <div class="col-12">
                        <form action="">
                            <div class="row mt-3">
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control">                                    
                            </div>
                            
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control">                                    
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">Prompt user to change password</label>
                                <select name="" id="" class="form-select">
                                    <option value="">YES</option>
                                    <option value="">NO</option>
                                </select>                                  
                            </div>

                            </div>
                           
                        </form>
                    </div>
</div>


</div>
                    </div>
                 
                
            </div>
        </div>
        
        
    
    </div>

    
</section>


<?php
include ("includes/admin_footer.php");

?>