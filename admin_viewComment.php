<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="container-fluid">

        <form class="row">

            <div class="col-12 py-2">
                <a class="btn btn-danger">Delete Comment</a>
            </div>

            <div class="col-12 my-1 ajaxStatus">
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Comment ID</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="26">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Comment By</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="Modupe Ehirim(ModEh)">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Comment Likes</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="0">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Comment Flags</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="0">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="status">Comment Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0">--Select Status--</option>
                        <option value="NORMAL">NORMAL</option>
                        <option value="HIDE">HIDE</option>
                    </select>
                </div>

            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Posted On</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="2022-10-20 15:34:58">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Deleted At</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Topic ID</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="4">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="name">Topic By</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="Modupe Ehirim(ModEh)">
                </div>
            </div>
            <div class="col-md-9 mb-3">
                <div class="form-group">
                    <label for="name">Topic</label>
                    <input disabled="" class="form-control" type="text" id="title" name="title" value="Payment Platforms That Serve Across Africa">
                </div>

            </div>


            <div class="col-12 my-2">
            
                <div class="form-group">
                    <label for="description">Comment</label>
                    <div class="viewCommentEditor">

                    </div>
                    


                </div>
            </div>
            <div class="col-12 my-2">
                <div class="form-group">

                    <button data-reset-form="false" data-endpoint="/api/comment_update" class="ajaxBtns btn btn-warning">UPDATE COMMENT</button>
                </div>
            </div>
        </form>
    </div>
</main>


<?php
include ("includes/admin_footer.php");

?>