<?php 
    include ('includes/header.php');
?>

<div class="container-fluid">

    <section class="mainSectionAccount">

        <div class="row">
            <div class="col-md-8 col-12 me-5 mt-4">
                <div class="tabContent darkBrownBg text-white rounded5 p-3">
                    <div class="tabsHeaderWrapper">
                        <nav >
                            <div class="nav nav-tabs personalDataTabs" id="nav-tab" role="tablist">
                                <button class="nav-link active " id="nav-personalInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PERSONAL INFORMATION</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">BIO</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">PROFILE PICTURE</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-projects" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">PROJECTS</button>

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

                                        <div class="alert alert-info d-flex align-items-center mt-4" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            <div>
                                            Please note your biography will be visible to the Africa Speaks Community

                                            </div>
                                        </div>


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
                                <div class="col-12 text-white pt-3">
                                                    <table class="table table-sm text-white border-top">
                                                        <thead>
                                                            <tr><th>Project</th><th>Created At</th><th>Updated At</th><th>Options</th></tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                </tbody>
                                                    </table>
                                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
                
                
            
            </div>

            <div class="col-md-3 col-12">
            <div class="row">
                        <div class="col-12">

                            <!-- settings pane -->
                            <div class="col-12 boxShadow rounded10 mb-5 p-3 mt-4">
                                <div class="p-2">
                                    <table class="topicDetailTable table table-sm table-borderless">
                                        <tbody><tr><td colspan="2"><h4 class="greyColor">My Account</h4></td></tr>
                                        <tr>
                                            <td><img src="assets/images/schedule.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">Last Signed In:</strong> <br> 2022-12-23 08:28:28</td></tr>
                                        <tr>
                                        </tr><tr class="d-none">
                                        <td><img src="assets/images/schedule.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">Last Updated:</strong> <br> 12 hours ago</td></tr>
                                        <tr>
                                        </tr><tr>
                                            <td><img src="assets/images/schedule.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">User Since:</strong> <br> 2021-04-14 09:25:12</td></tr>
                                        <tr>
                                            <td><img src="assets/images/messaging.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">Total Topics:</strong> <br> 1</td></tr>
                                        <tr>
                                            <td><img src="assets/images/reading.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">Total Comments:</strong> <br> 8</td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/terms_and_conditions.png" width="32" height="32"></td>
                                            <td><strong class="lightGreyColor">Agreements:</strong> <br>
                                                <a data-bs-toggle="modal" data-bs-target="#LausanneModal"  class="userName d-block" href="#">Lausanne Covenant</a>
                                                <a data-bs-toggle="modal" data-bs-target="#TermsAndConditionsModal" class="userName d-block" href="#">Africa Speaks Terms &amp; Conditions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="/account/password" class="btn btn-warning mt-3 d-block">Change Password</a>
                                                <a data-bs-toggle="modal" data-bs-target="#accountClosureModal" class="btn btn-danger mt-3 d-block">Close Account</a>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </div>
                <!-- end settings pane -->

                    <ul class="subNavigation pt-3">
                        <li><a href="/account">PERSONAL DATA &amp; BIO</a> </li>
                    </ul>                     
                </div>


                                </div>

            </div>
        </div>
    </section>



</div>


<?php 
    include ('includes/footer.php');
?>
