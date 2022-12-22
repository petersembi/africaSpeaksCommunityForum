<?php 
    include ('includes/header.php');
?>

<!-- ==========MAIN SECTION============== -->
<main class="main_section_home">


<div class="container-fluid " id="frameWrapper">

    <!-- button section -->

    <div class="row">
        <div class="col-12 pt-1">
            <a id="backHome" class="btn btn-warning font-weight-bold" style="font-weight:700;" href="home.php"><i class="bi bi-arrow-return-left"></i> BACK HOME</a>
        </div>

    </div>

    <!-- ==============VIDEO SECTION============= -->
    <div class="row mt-5">
        <div class="col-12 col-md-9">
        <!-- <iframe width="560" height="315" class="img-fluid" src="https://www.youtube.com/embed/j-p-_I1ukv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <div class="iframe-container"> 
                <iframe  class="responsive-iframe" src="https://www.youtube.com/embed/j-p-_I1ukv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <h1 class="conversationsh1Text">
            Publishing Conversations | S01EP01 | The Place of Writing in The History of Christianity In Africa
            </h1>

            <p class="mt-5">In this conversation, Dr. Kyama Mugambi of Africa Theological Network Press on the issues around Africa and Christian publishing.</p>
        
            <!-- Comments section -->

            <div class="commentsWrapper">
                <div class="row mt-5">
                    <div class="col-12 col-md-6">
                        <div class="commentActions">
                            <a data-topic-id="2" class="mx-2 btn btn-warning commentBtn">Add Comment</a>
                        </div>                       

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-end">
                        <div class="likesDiv me-4">
                            <!-- <div class="likesImageContainer">
                                <img src="assets/images/imgLikes.png" class="darkBrownBg text-center" alt="" height="40" width="40">                           
                                <div class="centered">0</div>
                                <span class="text-center">Likes: 0</span>
                                
                            </div> -->
                            <div class="">
                                <img src="assets/images/imgLikes.png" class="darkBrownBg text-center" alt="" height="40" width="40">                         
                                
                                                              
                            </div>
                            <span class="text-center textGrey">Likes: 0</span>                      
                                
                                 
                            
                            
                            
                        </div>
                        <div class="commentsDiv me-4">
                        <div class="text-center">
                                <img src="assets/images/messaging.png" alt="" height="40" width="40">                         
                                
                                                              
                            </div>
                            <span class="text-center textGrey">Comments: 1</span>                      
                                

                        </div>
                        <div class="viewsDiv me-4">
                        <div class="text-center">
                                <img src="assets/images/reading.png" alt="" height="40" width="40">                         
                                
                                                              
                            </div>
                            <span class="text-center textGrey">Views: 10</span> 

                                
                        </div>
                        </div>
                        
                    </div>

                    <div class="col-12 lightGreyBg comment p-3">
                        <div class="row mt-3">
                            <div class="col-md-1 col-12 ">
                                <div class="avatarEnhanceComment avatar32 ">
                                    <div>
                                        <img class=" avatar " height="46px" width="46px" src="assets/images/alex_profile.jpg" alt="your profile pic">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-11 col-12 p-0">
                                <div class="row ">
                                    <div class="col-md-6">
                                         <span ><strong class="commentedBy">Alexander Kimaru (akimaru)</strong></span><br>
                                         <p class="textGrey mt-2">6 months ago (May 25,2022 01:37:54 am)</p>
                                    </div>
                                    <div class="col-md-6 ">
                                        <span class="float-end pe-5">#1</span>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <p>Interesting Video</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex  ">
                                            <div class="text-center ">
                                                <div class="likesImageContainer">
                                                    <img src="assets/images/imgLikes.png" class="darkBrownBg text-center commentLikeImg" alt="" height="40" width="40">                           
                                                    <div class="centered">0</div>
                                                 </div>
                                           
                                            </div>
                                            <div class="text-center ">
                                                <span class="commentbtn">REPLY</span>
                                            </div>
                                            <div class="text-center ">
                                                <span class="commentbtn">EDIT</span>
                                            </div>
                                            <div class="text-center ">
                                                <span class="commentbtn">DELETE</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <span class="float-end pe-5 reportComment">REPORT</span>
                                    </div>

                                    <div class="col-12">
                                        <div id="editor"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div> <!-- row --->
                <div class="row">
                <div class="col-12 comment">

                </div>
                </div>
               
            </div>
            
        </div>
        <div class="col-12 col-md-3">

        </div>
    </div>


</div>

</main>

<?php 
    include ('includes/footer.php');
?>
