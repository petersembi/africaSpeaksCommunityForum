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
                            <td>Type</td>
                            <td>Reported By</td>
                            <td>Reported By User Id</td>
                            <td>Reported By Username</td>
                            <td >Offended By User Id</td>
                            <td >Offended By Username</td>
                            <td >Offended By</td>
                            <td >Topic</td>
                            <td>Object</td>
                            <td>Created At</td>                                  
                            <td>Updated At</td>                                  
                            <td>Deleted At</td> 
                            <td></td>                                 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="white-space: nowrap; " >21</td>
                            <td style="white-space: nowrap; ">OTHER REASON	</td>
                            <td style="white-space: nowrap; "> 1</td>
                            <td style="white-space: nowrap; ">akimaru</td>
                            <td style="white-space: nowrap; ">Alexander Kimaru </td>
                            <td style="white-space: nowrap; ">210</td>
                            <td style="white-space: nowrap; ">john_doe</td>
                            <td style="white-space: nowrap; ">John Doe</td>
                            <td style="white-space: nowrap; ">publishing</td>
                            <td style="white-space: nowrap; ">topic</td>
                            <td style="white-space: nowrap; "> 2022-05-20 14:28:00</td>                                  
                            <td style="white-space: nowrap; ">2022-05-20 14:28:00</td>                                  
                            <td style="white-space: nowrap; "></td> 
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