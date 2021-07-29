<template>
    <div>
        <div id="wrapper">
            <!-- Header -->
            <Header></Header>
            <!-- sidebar -->
            <Sidebar></Sidebar>
            <!-- Main Contents -->
            <div class="main_content">
                <div class="mcontainer">
                    <div class="profile user-profile">
                        <div class="profiles_banner">
                            <img src="frontend/assets/images/avatars/profile-cover.jpg" alt="">
                            <div
                                class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 hidden lg:flex">
                                <!-- <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                              <ion-icon name="crop-outline" class="text-xl"></ion-icon>
                              <span> Crop  </span>
                          </a> -->
                                <a href="#"
                                    class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5">
                                    <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                    <span> Edit </span>
                                </a>
                            </div>
                        </div>
                        <div class="profiles_content">

                            <div class="profile_avatar">
                                <div class="profile_avatar_holder">
                                    <img src="frontend/assets/images/avatars/avatar-8.jpg" alt="">
                                </div>
                                <div class="user_status status_online"></div>
                                <div class="icon_change_photo" hidden>
                                    <ion-icon name="camera" class="text-xl"></ion-icon>
                                </div>
                            </div>

                            <div class="profile_info">
                                <h1> Josephine Williams </h1>
                                <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p>
                            </div>

                        </div>

                        <div class="flex justify-between lg:border-t flex-col-reverse lg:flex-row">
                            <nav class="responsive-nav pl-2 is_ligh -mb-0.5 border-transparent">
                                <ul uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                    <li><a href="#"> Photoes</a></li>
                                    <li><a href="#"> Personal Information </a></li>
                                    <li><a href="#"> Contacts </a></li>
                                    <li><a href="#"> Exprience</a></li>
                                </ul>
                            </nav>

                            <div class="flex items-center space-x-1.5 flex-shrink-0 pr-3  justify-center order-1">
                                <!-- <a href="#" class="text-blue-500"> See all </a> -->
                                <a href="#"
                                    class="flex items-center justify-center h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span> Add Your Story </span>
                                </a>
                                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="arrow-redo-outline" class="pr-2 text-xl"></ion-icon>
                                                Share Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon> Account
                                                setting
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg">
                                                </ion-icon> Disable notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon> Add
                                                favorites
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                <ion-icon name="stop-circle-outline" class="pr-2 text-xl"></ion-icon>
                                                Unfriend
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                        <!-- Photos  -->
                        <div class="card md:p-6 p-2 max-w-4xl mx-auto">

                            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                                <div class="flex-1">
                                    <h2 class="text-2xl font-semibold"> Photos </h2>
                                    <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                        <ul>
                                            <li class="active"><a href="#"> Photos of you <span> 230</span> </a></li>
                                            <li><a href="#"> Recently added </a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <a href="#offcanvas-create" uk-toggle
                                    class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0"
                                    data-tippy-placement="left" title="Create New Album">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                                <div>
                                    <div
                                        class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <img src="frontend/assets/images/post/img-1.jpg"
                                            class="w-full h-full absolute object-cover inset-0">
                                        <!-- overly-->
                                        <div
                                            class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full">
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> Image description </div>
                                            <div class="flex justify-between text-xs">
                                                <!-- <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <img src="frontend/assets/images/post/img-2.jpg"
                                            class="w-full h-full absolute object-cover inset-0">
                                        <!-- overly-->
                                        <div
                                            class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full">
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> Image description </div>
                                            <div class="flex justify-between text-xs">
                                                <!-- <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <img src="frontend/assets/images/avatars/avatar-3.jpg"
                                            class="w-full h-full absolute object-cover inset-0">
                                        <!-- overly-->
                                        <div
                                            class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full">
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> Image description </div>
                                            <div class="flex justify-between text-xs">
                                                <!-- <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <img src="frontend/assets/images/post/img-4.jpg"
                                            class="w-full h-full absolute object-cover inset-0">
                                        <!-- overly-->
                                        <div
                                            class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full">
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> Image description </div>
                                            <div class="flex justify-between text-xs">
                                                <!-- <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <img src="frontend/assets/images/avatars/avatar-7.jpg"
                                            class="w-full h-full absolute object-cover inset-0">
                                        <!-- overly-->
                                        <div
                                            class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full">
                                        </div>
                                        <div
                                            class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> Image description </div>
                                            <div class="flex justify-between text-xs">
                                                <!-- <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center mt-6">
                                <a href="#"
                                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>
                        </div>




                        <!-- Personal Information  -->
                        <div class="card md:p-6 p-2 max-w-4xl mx-auto">
                            <h2 class="text-xl font-semibold"> Personal Information</h2>
                            <nav class="responsive-nav border-b">
                                <ul>
                                    <li class="active"><a href="#" class="lg:px-2"> All Friends <span> 3,4510 </span>
                                        </a></li>
                                    <li><a href="#" class="lg:px-2"> Recently added </a></li>
                                    <li><a href="#" class="lg:px-2"> Family </a></li>
                                    <li><a href="#" class="lg:px-2"> University </a></li>
                                </ul>
                            </nav>

                            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-2.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-3.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-4.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Martin Gray </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-7.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Alex Michael
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-5.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Jesse Stevens
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-6.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Erica Jones </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-2.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-3.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <div class="flex justify-center mt-6">
                                <a href="#"
                                    class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>

                        </div>
                        <!-- contacts -->
                        <div class="card md:p-6 p-2 max-w-4xl mx-auto">
                            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                                <div class="flex-1">
                                    <h2 class="text-2xl font-semibold"> Contacts List </h2>

                                </div>
                                <a href="create-group.html" data-tippy-placement="left" data-toggle="modal"
                                    data-target="#exampleModal" data-tippy="" data-original-title="Create New Album"
                                    class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                                    Add Contacts
                                </a>
                            </div>
                            <!--request modal start  -->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                             <input type="text" class="uk-input" placeholder="Search in Messages">
                                             <div class="header_search">
                                                  <div class="header_search_dropdown">
                                                      <ul>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-1.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Erica Jones </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-2.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Coffee Addicts </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-3.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Mountain Riders </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-4.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Property Rent And Sale </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-5.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Erica Jones </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                               </div>
                                             </div>
                                              
                                          
                                            <!-- <div class="header_search"><i class="uil-search-alt"></i>
                                                <input value="" type="text" class="form-control"
                                                    placeholder="Search for Contacts" autocomplete="off">
                                                <div uk-drop="mode: click" class="header_search_dropdown">

                                                    <h4 class="search_title"> Recently </h4>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-1.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Erica Jones </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-2.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Coffee Addicts </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-3.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Mountain Riders </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-4.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Property Rent And Sale </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <img src="public/frontend/assets/images/avatars/avatar-5.jpg"
                                                                    alt="" class="list-avatar">
                                                                <div class="list-name"> Erica Jones </div>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--request modal end  -->




                            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-2.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-3.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-4.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Martin Gray </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-7.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Alex Michael
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-5.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Jesse Stevens
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-6.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Erica Jones </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-2.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> James Lewis </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-2">
                                    <a href="timeline.html">
                                        <img src="frontend/assets/images/avatars/avatar-3.jpg"
                                            class="h-36 object-cover rounded-md shadow-sm w-full">
                                    </a>
                                    <div class="pt-3 px-1">
                                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker
                                        </a>
                                        <p class="font-medium text-sm">843K Following </p>
                                        <button
                                            class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                            Following
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <div class="flex justify-center mt-6">
                                <a href="#"
                                    class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>

                        </div>

                        <!-- Exprience  -->
                        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                                <div class="flex-1">
                                    <h2 class="text-2xl font-semibold"> Exprience </h2>
                                </div>
                                <a href="create-group.html" data-tippy-placement="left" data-tippy=""
                                    data-original-title="Create New Album"
                                    class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                                    Add
                                </a>
                            </div>

                            <div class="grid md:grid-cols-1  grid-cols-1 gap-x-2 gap-y-4 mt-3">

                                <div
                                    class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                    <a href="timeline-group.html" iv=""
                                        class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="frontend/assets/images/group/group-3.jpg"
                                            class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic
                                            Design </a>
                                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                    </div>
                                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                        Edit
                                    </button>
                                </div>
                                <div
                                    class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                    <a href="timeline-group.html" iv=""
                                        class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="frontend/assets/images/group/group-1.jpg"
                                            class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize">
                                            Architecture </a>
                                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                    </div>
                                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                        Edit
                                    </button>
                                </div>
                                <div
                                    class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                    <a href="timeline-group.html" iv=""
                                        class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="frontend/assets/images/group/group-3.jpg"
                                            class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic
                                            Design </a>
                                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                    </div>
                                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                        Edit
                                    </button>
                                </div>
                            </div>

                            <div class="flex justify-center mt-6">
                                <a href="#"
                                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                    Load more ..</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- open chat box -->
        <div uk-toggle="target: #offcanvas-chat" class="start-chat">
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                </path>
            </svg>
        </div>

        <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">


                <div class="relative pt-5 px-4">

                    <h3 class="text-2xl font-bold mb-2"> Chats </h3>

                    <div class="absolute right-3 top-4 flex items-center">

                        <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                            type="button" uk-close></button>

                        <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                            <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full">
                            </ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full">
                            </ion-icon>
                        </a>
                        <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                            uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                            <ul class="space-y-1">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon> Mark all as
                                        read
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon> Chat setting
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>
                                        Disable notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon> Create a group
                                        chat
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>


                </div>

                <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                    id="search" hidden>
                    <input type="text" placeholder="Search.." class="flex-1">
                    <ion-icon name="close-outline"
                        class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                        uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon>
                </div>

                <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                    <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                        <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                        <li><a href="#0">Groups <span> 10 </span> </a></li>
                    </ul>
                </nav>

                <div class="contact-list px-2 uk-switcher" id="chats-tab">

                    <div class="p-1">
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-7.jpg" alt="">
                            </div>
                            <div class="contact-username"> Alex Dolgove</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-8.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="contact-username">Stella Johnson</div>
                        </a>

                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-5.jpg" alt="">
                            </div>
                            <div class="contact-username">Adrian Mohani </div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="contact-username"> Jonathan Madano</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-1.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>


                    </div>
                    <div class="p-1">
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-7.jpg" alt="">
                            </div>
                            <div class="contact-username"> Alex Dolgove</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-8.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="contact-username">Stella Johnson</div>
                        </a>

                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-5.jpg" alt="">
                            </div>
                            <div class="contact-username">Adrian Mohani </div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="contact-username"> Jonathan Madano</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username"> Erica Jones</div>
                        </a>
                        <a href="timeline.html">
                            <div class="contact-avatar">
                                <img src="frontend/assets/images/avatars/avatar-1.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username"> Dennis Han</div>
                        </a>


                    </div>

                </div>
            </div>
        </div>

        <!-- Craete post modal -->
        <div id="create-post-modal" class="create-post" uk-modal>
            <div
                class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">

                <div class="text-center py-4 border-b">
                    <h3 class="text-lg font-semibold"> Create Post </h3>
                    <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button"
                        uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
                </div>
                <div class="flex flex-1 items-start space-x-4 p-5">
                    <img src="frontend/assets/images/avatars/avatar-2.jpg"
                        class="bg-gray-200 border border-white rounded-full w-11 h-11">
                    <div class="flex-1 pt-2">
                        <textarea
                            class="uk-textare text-black shadow-none focus:shadow-none text-xl font-medium resize-none"
                            rows="5" placeholder="What's Your Mind ? Stella!"></textarea>
                    </div>

                </div>
                <div class="bsolute bottom-0 p-4 space-x-4 w-full">
                    <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-3 shadow-sm items-center">
                        <div class="lg:block hidden"> Add to your post </div>
                        <div class="flex flex-1 items-center lg:justify-end justify-center space-x-2">

                            <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                                </path>
                            </svg>
                            <svg class="text-green-600 h-9 p-1.5 rounded-full bg-green-100 w-9 cursor-pointer"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                            <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"> </path>
                            </svg>
                            <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer"
                                id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer"
                                id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            <svg class="text-purple-600 h-9 p-1.5 rounded-full bg-purple-100 w-9 cursor-pointer"
                                id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3">
                                </path>
                            </svg>

                            <!-- view more -->
                            <svg class="hover:bg-gray-200 h-9 p-1.5 rounded-full w-9 cursor-pointer" id="veiw-more"
                                uk-toggle="target: #veiw-more; animation: uk-animation-fade" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                </path>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full justify-between p-3 border-t">

                    <select class="selectpicker mt-2 col-4 story">
                        <option>Only me</option>
                        <option>Every one</option>
                        <option>People I Join </option>
                        <optionion>People Join Me</optionion>
                    </select>

                    <div class="flex space-x-2">
                        <a href="#"
                            class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                            <svg class="h-5 pr-1 rounded-full text-red-500 w-6 fill-current" id="veiw-more" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="false" style="">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            Live </a>
                        <a href="#"
                            class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                            Share </a>
                    </div>

                    <a href="#" hidden
                        class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                        Share </a>
                </div>
            </div>
        </div>

        <!-- Create new album -->

        <div id="offcanvas-create" uk-offcanvas="flip: true; overlay: true">
            <div
                class="uk-offcanvas-bar lg:w-4/12 w-full dark:bg-gray-700 dark:text-gray-300 p-0 bg-white flex flex-col justify-center">

                <button class="uk-offcanvas-close absolute" type="button" uk-close></button>

                <!-- notivication header -->
                <div class="-mb-1 border-b font-semibold px-5 py-5 text-lg">
                    <h4> Create album </h4>
                </div>

                <div class="p-6 space-y-3 flex-1">
                    <div>
                        <label> Album Name </label>
                        <input type="text" class="with-border" placeholder="">
                    </div>
                    <div>
                        <label> Visibilty </label>
                        <select id="" name="" class="shadow-none selectpicker with-border">
                            <option data-icon="uil-bullseye"> Private </option>
                            <option data-icon="uil-chat-bubble-user">My Following</option>
                            <option data-icon="uil-layer-group-slash">Unlisted</option>
                            <option data-icon="uil-globe" selected>Puplic</option>
                        </select>
                    </div>
                    <div uk-form-custom class="w-full py-3">
                        <div
                            class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-12">
                                <path
                                    d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                            </svg>
                        </div>
                        <input type="file">
                    </div>

                </div>
                <div class="p-5">
                    <button type="button" class="button w-full">
                        Create Now
                    </button>
                </div>


            </div>
        </div>
    </div>

</template>
<script>
    import Header from '../frontend/layouts/Header.vue'
    import Sidebar from '../frontend/layouts/Sidebar.vue'

    export default {
        components: {
            Header,
            Sidebar
        },



    }

</script>
