<?php 
    include ('includes/header.php');
?>

<div class="container-fluid">

    
<!-- ==========MAIN SECTION============== -->

<main class="mainSectionForum p-5 pt-1">
    <div class="row mt-0">
    <div class="col-md-9 col-12">
        <div class="row">
            <div class="col-12 boxShadow rounded10 p-3">
                <h2 class="brownColor">New Topic</h2>

                <form action="" class="mb-3">
                    <div class="mb-4">
                        <label for="topicTitle" class="form-label">Topic Title</label>
                        <input type="text" class="form-control" id="topicTitle">

                    </div>

                    <div class="mb-4">
                        <label for="forum" class="form-label">Forum</label>
                        <select name="" class="form-select" id="">
                            <option value="1">Uncategorised</option>
                            <option value="2">Publishing</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <div id="newTopicEditor">

                        </div>
                    </div>

                    <button class="btn btn-lg btn-warning"><span class="commentBtnText">CREATE TOPIC</span></button>
                </form>
                

            </div>
        </div>

    </div>

    <div class="col-md-3 col-12 ps-4">
            <div class="row ms-3 mt-3">

                <div class="col-12 ps-md-3">
                    <ul class="subNavigation ">
                        <li><a href="">MY TOPICS</a></li>
                        <li><a href="">MY COMMENTS</a></li>
                    </ul>
                </div>
            
            
            </div>
    </div>


    </div>

   

   
</main>
    

   
</div>





<?php 
    include ('includes/footer.php');
?>
