<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="row">

        <div class="col-12 mb-3">
            <a class="btn btn-warning" href="admin_createNewForum.php">Create Forum</a>
        </div>

        <div class="col-12 overflow-auto py-3">          
                

            <div class="row">
                <div class="col-sm-12 overflow-auto">

                <table id="example" class="table table-striped mt-3" style="width:100%">
                        <thead class="orangeBg">
                            <tr>
                                <td>ID</td>
                                <td>Forum</td>
                                <td>Slug</td>
                                <td>Status</td>
                                <td>Topics</td>
                                <td>Comments</td>
                                <td>Created By</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                                <td>Deleted At</td>
                                <td>Action</td>                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>Community Rules	</td>
                                <td>community-rules	</td>
                                <td></td>
                                <td>2</td>
                                <td>14</td>
                                <td>Alexander Kimaru</td>
                                <td>2022-02-24 11:14:52	</td>
                                <td>2022-02-24 11:14:52	</td>
                                <td>2022-02-24 11:14:52	</td>
                                <td>
                                <a class="btn py-1 btn-sm btn-warning" target="_blank" href="admin_editForum.php">Edit</a>

                                </td>
                            </tr>
                            <tr>
                                <td class="no-wrap">4</td>
                                <td class="no-wrap" style="white-space: nowrap; ">Community Rules	</td>
                                <td class="no-wrap" style="white-space: nowrap; ">community-rules	</td>
                                <td class="no-wrap"></td>
                                <td class="no-wrap">2</td>
                                <td class="no-wrap">14</td>
                                <td class="no-wrap" style="white-space: nowrap; ">Alexander Kimaru</td>
                                <td class="no-wrap">2022-02-24 11:14:52	</td>
                                <td class="no-wrap" style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                                <td class="no-wrap" style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                                <td class="no-wrap">
                                <a class="btn py-1 btn-sm btn-warning" target="_blank" href="/admin/forums_edit/5">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                </table>                                
        
            </div>

        </div>

</main>


<?php
include ("includes/admin_footer.php");

?>