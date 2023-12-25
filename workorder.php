<?php

    include 'conixion.php';
    include 'login-connection.php'
?>
<!DOCTYPE html>


<html lang="en" class="light">
    <!-- BEGIN: Head -->
    
<!-- Mirrored from rubick-html.vercel.app/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:52:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Futurewayy - Workorder</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
             <!-- BEGIN: Mobile Menu -->
             <div class="mobile-menu md:hidden">
                <div class="mobile-menu-bar">
                    <a href="#" class="flex mr-auto">
                        <img alt="Midone - HTML Admin Template" class="w-6" src="assets/images/logo/favicon.png">
                    </a>
                    <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                </div>
                <div class="scrollable">
                    <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                    <ul class="scrollable__content py-2">
                        <li>
                            <a href="Dashboard.php" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                                <div class="menu__title"> Dashboard </div>
                            </a>
                         
                        </li>
    
                     
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                                <div class="menu__title"> Work Order </div>
                            </a>
                        </li>
                        <li>
                            <a href="request.php" class="menu">
                                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                                <div class="menu__title"> Requests </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                                <div class="menu__title"> Technician </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-lucide="users"></i> </div>
                                <div class="menu__title"> Customers </div>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="#" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" width="100%" src="assets/images/logo/logo.png">
                 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="Dashboard.php" class="side-menu ">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                
                            </div>
                        </a>
                    
                    </li>
             
                    <li>
                        <a href="#" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="side-menu__title"> Work Order</div>
                        </a>
                    </li>
                    <li>
                        <a href="request.php" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title"> Requests </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                            <div class="side-menu__title"> Technician </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title"> Customers </div>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Change Password </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.php" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="side-menu__title"> Logout </div>
                        </a>
                    </li> -->
                 
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Application</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Work Order</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                            <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                        </div>
                      
                    </div>
                    <!-- END: Search -->
                 
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <img alt="Midone - HTML Admin Template" src="assets/images/logo/favicon.png" style="width: 50;">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="font-medium">Futurewayy Computers</div>
                                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">System sales and service</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                                </li>
                            
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Welcome to Futurewayy Computers
                                </h2>
                                <a href="#" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                            </div>
                      
                        </div>
                   
                        <div class="col-span-12 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Work Orders
                                </h2>
                                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                    <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                </div>
                            </div>
                            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="text-center whitespace-nowrap">CUSTOMER ID</th>
                                            <th class="text-center whitespace-nowrap">CUSTOMER NAME</th>
                                            <th class="text-center whitespace-nowrap">REQUEST INFO</th>
                                            <th class="text-center whitespace-nowrap">ADDRESS</th>
                                            <th class="text-center whitespace-nowrap">MOBILE</th>
                                            <th class="text-center whitespace-nowrap">EMAIL</th>
                                            <th class="text-center whitespace-nowrap">TECHNICIAN NAME</th>
                                            <th class="text-center whitespace-nowrap">ASSIGNED DATE</th>
                                            <th class="text-center whitespace-nowrap">STATUS</th>
                                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">CUST001</td>                       
                                      
                                            <td>
                                                <a href="#" class="font-medium whitespace-nowrap">Janakrishnamoorthy</a> 
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">jana@gmail.com</div>
                                            </td>
                                            <td class="w-20">Laptop Problem</td>
                                            <td  class="w-100">xyz west street, Bodinayakanur, Theni Dt - 625513</td>
                                            <td  class="w-40">9876543210</td>
                                            <td class="text-center">Janakrishnamoorthy@gmail.com</td>
                                            <td  class="w-40">Tamil</td>
                                            <td class="w-40">12.12.2023</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                            </td>
                                            <td class="table-report__action w-80">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center text-success" href="#"> <i data-lucide="view" class="w-4 h-4 mr-1"></i> View </a>
                                                    <a class="flex items-center mr-3" href="#"> <i data-lucide="check-square" class="w-4 h-4 ml-2"></i> Edit </a>
                                                    <a class="flex items-center text-danger" href="#"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        

                                
                                      
                                    </tbody>
                                </table>
                            </div>
                            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                <nav class="w-full sm:w-auto sm:mr-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <select class="w-20 form-select box mt-3 sm:mt-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Weekly Top Products -->
                    </div>
                </div>
            
            </div>
            <!-- END: Content -->
        </div>
    
        
        <!-- BEGIN: JS Assets-->
        <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>

<!-- Mirrored from rubick-html.vercel.app/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 05:52:48 GMT -->
</html>