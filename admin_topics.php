<?php
include ("includes/admin_header.php");
?>

<main class="mainSectionForum p-5 pt-0">
    <div class="row">

        <div class="col-12 mb-3">
            <a class="btn btn-warning" href="admin_createNewTopic.php">CREATE TOPIC</a>
        </div>               
                

            
        <div class="col-sm-12 overflow-auto">

            <table id="topics" class="table table-striped mt-3">
                    <thead class="orangeBg">
                        <tr>
                            <td >ID</td>
                            <td>Topic</td>
                            <td>Slug</td>
                            <td>Forum</td>
                            <td>Status</td>
                            <td>Comments</td>
                            <td>Flags</td>
                            <td style="white-space: nowrap; ">Created By</td>
                            <td style="white-space: nowrap; ">Created At</td>
                            <td style="white-space: nowrap; ">Updated At</td>
                            <td style="white-space: nowrap; ">Deleted At</td>
                            <td>Action</td>                               
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4</td>
                            <td style="white-space: nowrap; ">Payment Platforms That Serve Across Africa		</td>
                            <td style="white-space: nowrap; ">payment-platforms-that-serve-across-africa		</td>
                            <td style="white-space: nowrap; ">Uncategorised</td>
                            <td>OPEN</td>
                            <td>14</td>
                            <td>0</td>
                            <td>John Doe</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td>
                            <a class="btn py-1 btn-sm btn-warning" target="_blank" href="admin_updateTopic.php">Edit</a>

                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td style="white-space: nowrap; ">Payment Platforms That Serve Across Africa		</td>
                            <td style="white-space: nowrap; ">payment-platforms-that-serve-across-africa		</td>
                            <td style="white-space: nowrap; ">Uncategorised</td>
                            <td>OPEN</td>
                            <td>14</td>
                            <td>0</td>
                            <td>John Doe</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td>
                            <a class="btn py-1 btn-sm btn-warning" target="_blank" href="admin_updateTopic.php">Edit</a>

                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td style="white-space: nowrap; ">Payment Platforms That Serve Across Africa		</td>
                            <td style="white-space: nowrap; ">payment-platforms-that-serve-across-africa		</td>
                            <td style="white-space: nowrap; ">Uncategorised</td>
                            <td>OPEN</td>
                            <td>14</td>
                            <td>0</td>
                            <td>John Doe</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td>
                            <a class="btn py-1 btn-sm btn-warning" target="_blank" href="updateTopic.php">Edit</a>

                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td style="white-space: nowrap; ">Payment Platforms That Serve Across Africa		</td>
                            <td style="white-space: nowrap; ">payment-platforms-that-serve-across-africa		</td>
                            <td style="white-space: nowrap; ">Uncategorised</td>
                            <td>OPEN</td>
                            <td>14</td>
                            <td>0</td>
                            <td>John Doe</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td style="white-space: nowrap; ">2022-02-24 11:14:52	</td>
                            <td>
                            <a class="btn py-1 btn-sm btn-warning" target="_blank" href="updateTopic.php">Edit</a>

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