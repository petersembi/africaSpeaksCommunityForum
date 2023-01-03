<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="row">
        <div class="col-12">
        <form action="" class="mb-3">
            <div class="mb-4">
                <label for="forumName" class="form-label">Topic Name</label>
                <input type="text" class="form-control" id="forumName">

            </div>

            <div class="mb-4">
                <label for="forum" class="form-label">Forum</label>
                <select name="" class="form-select" id="">
                    <option value="0">--Select Forum--</option>
                    <option value="1">Uncategorised</option>
                    <option value="2">Publishing</option>                
                </select>
            </div>

            <div class="mb-4">
                <label for="forum" class="form-label">Status</label>
                <select name="" class="form-select" id="">
                    <option value="0">--Select Status--</option>
                    <option value="1">OPEN</option>
                    <option value="2">CLOSED</option>                
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <div id="newTopicEditorAdmin">

                </div>
            </div>

            <button class="btn btn-lg btn-warning"><span class="commentBtnText">UPDATE TOPIC</span></button>
    </form>
        </div>
    </div>
    

</main>


<?php
include ("includes/admin_footer.php");

?>