<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="row">
            
        <div class="col-sm-12 overflow-auto">

            <table id="topics" class="table table-striped mt-3">
                    <thead class="orangeBg">
                        <tr>
                            <td >ID</td>
                            <td>Topic</td>
                            <td>Content</td>
                            <td>Forum</td>
                            <td>Status</td>
                            <td style="white-space: nowrap; ">Comment By</td>
                            <td style="white-space: nowrap; ">Created At</td>
                            <td style="white-space: nowrap; ">Updated At</td>
                            <td style="white-space: nowrap; ">Deleted At</td>
                            <td>Action</td>                               
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >13</td>
                            <td style="white-space: nowrap; ">Payment Platforms That Serve Across Africa	</td>
                            <td style="white-space: nowrap; ">Nice Content</td>
                            <td style="white-space: nowrap; ">Uncategorised</td>
                            <td style="white-space: nowrap; ">OPEN</td>
                            <td style="white-space: nowrap; ">John Doe</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52</td>
                            <td>
                                <a class="btn py-1 btn-sm btn-warning" target="_blank" href="admin_viewComment.php">VIEW</a>
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