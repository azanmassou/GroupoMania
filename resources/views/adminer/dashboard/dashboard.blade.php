@php
    $route = request()->route()->getName();
@endphp

<!-- loader Start -->
@if ($route == 'posts.index')
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
@endif
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    @include('adminer.dashboard.sidebar')
    @include('adminer.dashboard.navbar')
    @include('adminer.dashboard.rsidebar')

    <div id="content-page" class="content-page">
        <div class="container">
            
            <div class="row">
                @include('adminer.dashboard.alerte')
                @yield('bank')
                <div class="col-lg-8 m-0 p-0">

                    @yield('contents')

                    {{-- <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="../assets/images/user/01.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                                 <span class="mb-0 d-inline-block">Add New Post</span>
                                 <p class="mb-0 text-primary">Just Now</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-close-circle-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-user-unfollow-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-notification-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                        <div class="row-span-2 row-span-md-1">
                           <img src="../assets/images/page-img/p2.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                        <div class="row-span-1">
                           <img src="../assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                        <div class="row-span-1 ">
                           <img src="../assets/images/page-img/p3.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Share</span></a>                           
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div> --}}

                    {{-- <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="../assets/images/user/04.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class=" d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Ira Membrit</h5>
                                 <p class="mb-0 d-inline-block">Update her Status</p>
                                 <p class="mb-0 text-primary">6 hour ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-save-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-close-circle-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-user-unfollow-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-notification-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="post-item">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid avatar-60" src="../assets/images/user/1.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Bni Cyst</h5>
                                 <p class="ms-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                 <p class="mb-0">3 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-save-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-close-circle-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-user-unfollow-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-notification-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-post text-center">
                     <a href="javascript:void();"><img src="../assets/images/page-img/p5.jpg" alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div> --}}
                    {{-- <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="../assets/images/user/02.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                                 <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                 <p class="mb-0 text-primary">1 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-save-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-close-circle-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-user-unfollow-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <i class="ri-notification-line h4"></i>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class="ratio ratio-16x9">
                        <iframe  src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex flex-wrap">
                              <div class="user-img">
                                 <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex flex-wrap">
                              <div class="user-img">
                                 <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                           <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div> --}}
                </div>
                {{-- @dd($route); --}}
                @if ($route !== 'users.edit' && $route !== 'privacy-setting' && $route !== 'account-setting')
                    <div class="col-lg-4">
                        <div class="card">
                            <div id="post-modal-data" class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title"> <a href="{{ route('posts.create') }}"> Create Post <i
                                                    class="ri-add-line"></i></a></h4>


                                    </div>
                                </div>
                                {{-- <h4 class="card-title float-right"> <a href="{{ route('posts.create') }}"> My Posts <i
                            class="ri-add-line"></i></a></h4> --}}
                                @if ($route === 'posts.me')
                                    <a href="{{ route('posts.dashbord') }}" class="btn btn-primary mx-3">Back
                                        Acceuil</a>
                                @else
                                    <a href="{{ route('posts.me') }}" class="btn btn-primary mx-3">See My Post</a>
                                @endif
                            </div>
                            {{-- <a href="#" class="btn btn-primary d-block mt-3">See All</a> --}}
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Stories</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="media-story list-inline m-0 p-0">
                                    <li class="d-flex mb-3 align-items-center">
                                        <i class="ri-add-line"></i>
                                        <div class="stories-data ms-3">
                                            <h5>Creat Your Story</h5>
                                            <p class="mb-0">time to story</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3 align-items-center active">
                                        <img src="{{ asset('masterAdminer/assets/images/page-img/s2.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Anna Mull</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3 align-items-center">
                                        <img src="{{ asset('masterAdminer/assets/images/page-img/s3.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Ira Membrit</h5>
                                            <p class="mb-0">4 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{ asset('masterAdminer/assets/images/page-img/s1.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Bob Frapples</h5>
                                            <p class="mb-0">9 hour ago</p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Events</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-expanded="false" role="button">
                                            <i class="ri-more-fill h4"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton" style="">
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-eye-fill me-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-pencil-fill me-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-printer-fill me-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-download-fill me-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="media-story list-inline m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center ">
                                        <img src="{{ asset('masterAdminer/assets/images/page-img/s4.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Web Workshop</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{ asset('masterAdminer/assets/images/page-img/s5.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Fun Events and Festivals</h5>
                                            <p class="mb-0">1 hour ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Upcoming Birthday</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="media-story list-inline m-0 p-0">
                                    <li class="d-flex mb-4 align-items-center">
                                        <img src="{{ asset('masterAdminer/assets/images/user/01.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Anna Sthesia</h5>
                                            <p class="mb-0">Today</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{ asset('masterAdminer/assets/images/user/02.jpg') }}"
                                            alt="story-img" class="rounded-circle img-fluid">
                                        <div class="stories-data ms-3">
                                            <h5>Paul Molive</h5>
                                            <p class="mb-0">Tomorrow</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Suggested Pages</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" id="dropdownMenuButton01"
                                            data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            <i class="ri-more-fill h4"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton01">
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-eye-fill me-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-pencil-fill me-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-printer-fill me-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-download-fill me-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="suggested-page-story m-0 p-0 list-inline">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="../assets/images/page-img/42.png" alt="story-img"
                                                class="rounded-circle img-fluid avatar-50">
                                            <div class="stories-data ms-3">
                                                <h5>Iqonic Studio</h5>
                                                <p class="mb-0">Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('masterAdminer/assets/images/small/img-1.jpg') }}"
                                            class="img-fluid rounded" alt="Responsive image">
                                        <div class="mt-3"><a href="#" class="btn d-block"><i
                                                    class="ri-thumb-up-line me-2"></i> Like Page</a></div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="../assets/images/page-img/42.png" alt="story-img"
                                                class="rounded-circle img-fluid avatar-50">
                                            <div class="stories-data ms-3">
                                                <h5>Cakes & Bakes </h5>
                                                <p class="mb-0">Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('masterAdminer/assets/images/small/img-2.jpg') }}"
                                            class="img-fluid rounded" alt="Responsive image">
                                        <div class="mt-3"><a href="#" class="btn d-block"><i
                                                    class="ri-thumb-up-line me-2"></i> Like Page</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-sm-12 text-center">
                    <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                    {{-- @include('logo') --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
