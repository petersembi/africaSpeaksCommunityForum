<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- External links -->
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap DatePicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Datatables CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    
   
    <!-- Javascript for datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!-- CK editor -->
    
     <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">

    <script defer src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="assets/js/main.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

<!-- ================HEADER SECTION============ -->
<header class="sticky-top" style="background-color:#000;">
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ps-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/comm_logo.png" alt="Africaspeaks comm logo" style="height: 59px; width:80px;">
                <span class="text-white header-brand ps-3">Admin > Forums</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a target="_blank" class="nav-link" href="admin_forums.php">FORUMS</a>
                </li>
                <li class="nav-item nav-admin">
                    <a data-nav="Home" class="nav-link" href="admin_topics.php">TOPICS</a>
                </li>
                <li class="nav-item nav-admin">
                    <a data-nav="Forum"  class="nav-link" href="admin_comments.php">COMMENTS</a>
                </li>
                <li class="nav-item nav-admin">
                    <a data-nav="Directory" class="nav-link" href="admin_abuse_reports.php">ABUSE REPORTS</a>
                </li>
                <li  class="nav-item nav-admin">
                    <a data-nav="Admin" class="nav-link" href="admin_users.php">USERS</a>
                </li>   
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdownIndicator dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatarEnhance avatar32">
                            <div>
                                <img class="img-fluid avatar" src="assets/images/alex_profile.jpg" alt="your profile pic">
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="account.php">My Account</a>
                            <a class="dropdown-item" href="notifications.php">Notifications <span class="badge text-bg-danger">0</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/account/signout">Sign Out</a>
                    </ul>
                </li>  
                
            </ul>

            

           
            </div>
        </div>
    </nav>

</header>
