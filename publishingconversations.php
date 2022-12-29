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
                    <div class="col-12 my-4">
                        <div id="addCommentEditor" class=""></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-end summaryIndicatorsDiv">
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

                    <div class="col-12 lightGreyBg comment p-3 mt-2">
                        <div class="row mt-3">
                            <div class="col-md-1 col-12 avatarCol">
                                <div class="avatarEnhanceComment avatar32 ">
                                    <div>
                                        <img class=" avatar " height="46px" width="46px" src="assets/images/alex_profile.jpg" alt="your profile pic">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-11 col-12 p-0">
                                <div class="row ">
                                    <div class="col-9 commentedByCol">
                                         <span ><strong class="commentedBy">Alexander Kimaru (akimaru)</strong></span><br>
                                         <p class="textGrey mt-2">6 months ago (May 25,2022 01:37:54 am)</p>
                                    </div>
                                    <div class="col-3 ">
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
                                        <div class="d-flex ">
                                            <div class="text-center d-none d-md-flex">
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
                                                <span class="commentbtn" data-bs-toggle="modal" data-bs-target="#deleteModal">DELETE</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <span class="float-sm-
                                        end pe-5 reportComment" data-bs-toggle="modal" data-bs-target="#reportModal">REPORT</span>
                                    </div>

                                    <div class="col-12 pe-5 mt-3 mb-3">
                                        <form action="">
                                            <!-- <h3 class="editorHeading">Edit Comment</h3> -->
                                            <h3 class="editorHeading">Add Reply </h3>
                                            <div id="editor"></div>
                                            <button class="btn btn-warning mt-3 me-3 commentBtn" type="submit"><span class="commentBtnText">ADD REPLY</span> </button>
                                            <!-- <button class="btn btn-warning mt-3 me-3 commentBtn" type="submit"><span class="commentBtnText">UPDATE</span> </button> -->

                                            <button class="btn btn-danger mt-3" type="submit"> <span class="commentBtnText">CANCEL</span> </button>

                                        </form>
                                        
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
       
        <div class="col-12 col-md-3 ps-4">
            <h4 class="greyColor">Trending</h4>
            <h5 class="redColor py-3"><a class="trendingConversations" href="/forum/home/improving-quality-and-encouraging-publishing">Publishing Conversations | S01EP03 | Improving Quality &amp; Encouraging Publishing</a> </h5>
            <h5 class="redColor py-3"><a class="trendingConversations" href="/forum/home/the-future-of-africas-christianity-and-publishing">Publishing Conversations | S01EP05 | The Future of Africa’s Christianity and Publishing</a> </h5>
            <h5 class="redColor py-3"><a class="trendingConversations" href="/forum/home/myths-about-christian-publishing-in-africa">Publishing Conversations | S01EP02 | Myths About Christian Publishing In Africa</a> </h5>
            <h5 class="redColor py-3"><a class="trendingConversations" href="/forum/home/the-place-of-writing-in-the-history-of-christianity-in-africa">Publishing Conversations | S01EP01 | The Place of Writing in The History of Christianity In Africa</a> </h5>
        </div>
    </div>


</div>

</main>






<?php 
    include ('includes/footer.php');
?>
