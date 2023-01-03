<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="row">

        <div class="col-12  mb-3">
            <btn class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#createNewRoleModal" >CREATE ROLES</btn>
            
        </div>               
                

            
        <div class="col-12 col-sm-6 overflow-auto">

            <table id="topics" class="table table-striped mt-3">
                    <thead class="orangeBg">
                        <tr>
                            <td>ID</td>
                            <td>Role</td>
                            <td>Users</td>
                            <td>Action</td>                                                         
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>19</td>
                            <td>author</td>
                            <td>3</td>                           
                            <td>
                                <a class="btn py-1 btn-sm btn-warning" target="_blank" href="admin_editUserRole.php">Edit</a>
                                <button class="btn py-1 btn-sm btn-warning" target="_blank" href=""  data-bs-toggle="modal" data-bs-target="#deleteRoleModal">DELETE</button>
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