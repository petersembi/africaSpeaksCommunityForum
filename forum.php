<?php 
    include ('includes/header.php');
?>

<div class="container-fluid">

    
<!-- ==========MAIN SECTION============== -->

<main class="mainSectionForum ">

    <!-- search field -->

    <form action="" class="mb-5">
        <input type="search" class="form-control mb-4" placeholder="Search for a topic or comment in the forum">

    </form>
        <!-- header section -->

    <section class="headerSection ">
        <div class="row">
            <div class="col-12">             
            <h2 class="redColor headerBg ps-3"> <span class="notificationHeaderText ">Forums</span> </h2>
            </div>
        </div>

    </section>

    <!-- ==============FORUMS SECTION=============== -->

    <div class="row mt-3">

    
        <div class="col-md-9">
            <div class="col-12 rounded10 boxShadow p-4 brown mt-5">
                <h2>
                  <span class="brownColor">Uncategorised</span> <span class="greyColor">(1)</span>  
                </h2>

                

                <h5 class="brownColor mt-4">
                    <a href="me-4" class="btn btn-sm btn-warning">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                    <a href="" class="brownColor forumTopic">
                    Payment Platforms That Serve Across Africa
                    </a>
                </h5>
                <div class="row topicAttributes">
                    <div class="col-sm-6 col-12">
                        <p class="lightGreyColor small postedBy">
                        Posted By Modupe Ehirim (ModEh) 7 months ago (2022-05-20 16:41:23)
                        </p>
                    </div>

                    <div class="col-sm-6 col-12 ">
                        <div class="d-flex float-end">

                            <div class="likesDiv me-4 text-center">
                                <img src="assets/images/heart_like.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Likes: 2</span>

                            </div>
                            <div class="commentsDiv me-4 text-center">
                                <img src="assets/images/messaging.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Comments: 4</span>

                            </div>
                            <div class="viewsDiv me-4 text-center">
                                <img src="assets/images/reading.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Views: 20</span>


                            </div>

                        </div>

                        
                    </div>

                   <div class="col-12">
                    <hr>
                   </div>

                  


                </div>
                <a class="btn btn-lg btn-warning" href="topicsPerForum.php">
                    <span class="commentBtnText">VIEW ALL 1 TOPICS</span> 
                </a>                    

            </div>

            <div class="col-12 rounded10 boxShadow p-4 brown mt-5">
                <h2>
                  <span class="brownColor">Publishing</span> <span class="greyColor">(1)</span>  
                </h2>

                <h5 class="brownColor mt-4">
                    <a href="me-4" class="btn btn-sm btn-warning">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                    <a href="" class="brownColor forumTopic">
                    Self Publishing
                    </a>
                </h5>
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <p class="lightGreyColor small postedBy">
                            Posted By Gathuku Kibunga (ES_AfricaSpeaks) 9 months ago (2022-03-04 13:16:18)
                        </p>
                    </div>

                    <div class="col-sm-6 col-12 ">
                        <div class="d-flex float-end">

                            <div class="likesDiv me-4 text-center">
                                <img src="assets/images/heart_like.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Likes: 2</span>

                            </div>
                            <div class="commentsDiv me-4 text-center">
                                <img src="assets/images/messaging.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Comments: 4</span>

                            </div>
                            <div class="viewsDiv me-4 text-center">
                                <img src="assets/images/reading.png" class="imgForumSummary" alt="">
                                <span class="small lightGreyColor">Views: 20</span>


                            </div>

                        </div>

                        
                    </div>

                   <div class="col-12">
                    <hr>
                   </div>

                  


                </div>
                <a class="btn btn-lg btn-warning" href="topicsPerForum.php">
                    <span class="commentBtnText">VIEW ALL 1 TOPICS</span> 
                </a>                    

            </div>
        </div>

        <div class="col-md-3 pt-4 ps-4">
            <div class="row mt-1 p-4">
                <a href="createNewTopic.php" class="btn btn-lg btn-warning "><span class="commentBtnText">CREATE NEW TOPIC</span></a>

                <div class="col-12 ps-md-3">
                    <ul class="subNavigation mt-5">
                        <li><a href="myTopics.php">MY TOPICS</a></li>
                        <li><a href="myComments.php">MY COMMENTS</a></li>
                    </ul>
                </div>
            
            
            </div>

            <div class="row ms-md-3">
                <div class="col-12">
                    <h4 class="greyColor">Forums</h4>
                    <table class="table table-sm contributorsTable"> 
                        <tbody>
                            <tr>
                                <td>
                                    <!-- <a class="text-decoration-none" href="/forum/topics/uncategorised"><h6 class="redColor forumCategories">Uncategorised <span class="greyColor float-end">(1)</span></h6></a> -->
                                    <a class="text-decoration-none" href="topicsPerForum.php"><h6 class="redColor forumCategories">Uncategorised <span class="greyColor float-end">(1)</span></h6></a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <a class="text-decoration-none" href="/forum/topics/publishing"><h6 class="redColor forumCategories">Publishing <span class="greyColor float-end">(1)</span></h6></a> -->
                                    <a class="text-decoration-none" href="topicsPerForum.php"><h6 class="redColor forumCategories">Publishing <span class="greyColor float-end">(1)</span></h6></a>

                                </td>
                            </tr>
                    </tbody>
                    </table>


                    <h4 class="greyColor mt-5">Top Contributors</h4>
                    <table class="table table-sm contributorsTable mt-3"> 
                        <tbody>
                            <tr>
                                <td>
                                    <div class="avatar avatar32">
                                        <span><img class="img-fluid avatarImage" src="assets/images/alex_profile.jpg"></span>
                                    </div>
                                    <a class=" userName font-weight-bold" href="memberSummary.php">Alexander Kimaru (akimaru)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar32">
                                        <span><img class="img-fluid avatarImage" src="assets/images/modupe_profile.jpg"></span>
                                    </div>
                                    <a class="font-weight-bold userName" href="/members/view/214">Modupe Ehirim (ModEh)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar32">
                                        <span><img class="img-fluid avatarImage" src="/api/render_image?path=uploads/215/3b8a614226a953a8cd9526fca6fe9ba5.jpg"></span>
                                    </div>
                                    <a class="font-weight-bold userName" href="/members/view/215">Edward Elliott (EElliott)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar32">
                                        <span><img class="img-fluid avatarImage" src="/api/render_image?path=uploads/211/eb163727917cbba1eea208541a643e74.jpg"></span>
                                    </div>
                                    <a class="font-weight-bold userName" href="/members/view/211">James Mbugua (jmbugua)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar avatar32">
                                        <span><img class="img-fluid avatarImage" src="/api/render_image?path=uploads/210/6f3ef77ac0e3619e98159e9b6febf557.jpg"></span>
                                    </div>
                                    <a class="font-weight-bold userName" href="/members/view/210">Gathuku Kibunga (ES_AfricaSpeaks)</a>
                                </td>
                            </tr>
                     </tbody>
                    </table>
                </div>
            </div>

            



            

        </div>

    </div>
    

</main>
    

   
</div>





<?php 
    include ('includes/footer.php');
?>
