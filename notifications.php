<?php 
    include ('includes/header.php');
?>

<div class="container-fluid">

    
<!-- ==========MAIN SECTION============== -->

    <main class="mainSectionNotifications">
        <!-- header section -->

        <section class="headerSection">
            <div class="row">
                <div class="col-12">
                <h2 class="redColor headerBg ps-3 d-none">New Notifications</h2>
                <h2 class="redColor headerBg ps-3"> <span class="notificationHeaderText">All Notifications</span> </h2>
                </div>
            </div>

        </section>
        <div class="row mt-5 notificationSection ">
            <div class="col-12 col-md-9 p-2">
                <div class="alert alert-info" role="alert">
                    You have no new notifications
                </div>
                


            </div>

            <div class="col-12 col-md-3">                
            <ul class="subNavigation pt-3">
                              <li><a href="">NEW NOTIFICATIONS</a> </li>
                              <li><a href="">ALL NOTIFICATIONS</a> </li>
                          </ul>
            </div>
        </div>

    </main>
    

   
</div>





<?php 
    include ('includes/footer.php');
?>
