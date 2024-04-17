@if ($posts->isEmpty())
<div class="col-sm-12">
    <div id="post-modal-data" class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title"> <a href="{{ route('posts.create') }}"> Create Post <i
                            class="ri-add-line"></i></a></h4>
            </div>
        </div>
       
        

        {{-- <div class="card-body">
    <div class="d-flex align-items-center">
        <div class="user-img">
            <img src="../assets/images/user/1.jpg" alt="userimg"
                class="avatar-60 rounded-circle">
        </div>
        <form class="post-text ms-3 w-100 " data-bs-toggle="modal"
            data-bs-target="#post-modal" action="javascript:void();">
            <input type="text" class="form-control rounded"
                placeholder="Write something here..." style="border:none;">
        </form>
    </div>
    <hr>
    <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
        <li class="me-3 mb-md-0 mb-2">
            <a href="#" class="btn btn-soft-primary">
                <img src="../assets/images/small/07.png" alt="icon"
                    class="img-fluid me-2"> Photo/Video
            </a>
        </li>
        <li class="me-3 mb-md-0 mb-2">
            <a href="#" class="btn btn-soft-primary">
                <img src="../assets/images/small/08.png" alt="icon"
                    class="img-fluid me-2"> Tag Friend
            </a>
        </li>
        <li class="me-3">
            <a href="#" class="btn btn-soft-primary">
                <img src="../assets/images/small/09.png" alt="icon"
                    class="img-fluid me-2"> Feeling/Activity
            </a>
        </li>
        <li>
            <button class="btn btn-soft-primary">
                <div class="card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="post-option"
                            data-bs-toggle="dropdown">
                            <i class="ri-more-fill"></i>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="post-option" style="">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#post-modal">Check in</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#post-modal">Live Video</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#post-modal">Gif</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#post-modal">Watch Party</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#post-modal">Play with Friend</a>
                        </div>
                    </div>
                </div>
            </button>
        </li>
    </ul>
</div>
<div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog   modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                        class="ri-close-fill"></i></button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center">
                    <div class="user-img">
                        <img src="../assets/images/user/1.jpg" alt="userimg"
                            class="avatar-60 rounded-circle img-fluid">
                    </div>
                    <form class="post-text ms-3 w-100" action="javascript:void();">
                        <input type="text" class="form-control rounded"
                            placeholder="Write something here..." style="border:none;">
                    </form>
                </div>
                <hr>
                <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/07.png" alt="icon"
                                class="img-fluid"> Photo/Video</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/08.png" alt="icon"
                                class="img-fluid"> Tag Friend</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/09.png" alt="icon"
                                class="img-fluid"> Feeling/Activity</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/10.png" alt="icon"
                                class="img-fluid"> Check in</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/11.png" alt="icon"
                                class="img-fluid"> Live Video</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/12.png" alt="icon"
                                class="img-fluid"> Gif</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/13.png" alt="icon"
                                class="img-fluid"> Watch Party</div>
                    </li>
                    <li class="col-md-6 mb-3">
                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                href="#"></a><img
                                src="../assets/images/small/14.png" alt="icon"
                                class="img-fluid"> Play with Friends</div>
                    </li>
                </ul>
                <hr>
                <div class="other-option">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="user-img me-3">
                                <img src="../assets/images/user/1.jpg" alt="userimg"
                                    class="avatar-60 rounded-circle img-fluid">
                            </div>
                            <h6>Your Story</h6>
                        </div>
                        <div class="card-post-toolbar">
                            <div class="dropdown">
                                <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    role="button">
                                    <span class="btn btn-primary">Friend</span>
                                </span>
                                <div class="dropdown-menu m-0 p-0">
                                    <a class="dropdown-item p-3" href="#">
                                        <div class="d-flex align-items-top">
                                            <i class="ri-save-line h4"></i>
                                            <div class="data ms-2">
                                                <h6>Public</h6>
                                                <p class="mb-0">Anyone on or off Facebook
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="#">
                                        <div class="d-flex align-items-top">
                                            <i class="ri-close-circle-line h4"></i>
                                            <div class="data ms-2">
                                                <h6>Friends</h6>
                                                <p class="mb-0">Your Friend on facebook
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="#">
                                        <div class="d-flex align-items-top">
                                            <i class="ri-user-unfollow-line h4"></i>
                                            <div class="data ms-2">
                                                <h6>Friends except</h6>
                                                <p class="mb-0">Don't show to some
                                                    friends</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item p-3" href="#">
                                        <div class="d-flex align-items-top">
                                            <i class="ri-notification-line h4"></i>
                                            <div class="data ms-2">
                                                <h6>Only Me</h6>
                                                <p class="mb-0">Only me</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="btn btn-primary d-block w-100 mt-3">Post</button>
            </div>
        </div>
    </div>
</div> --}}
    </div>
    <div class="alert alert-solid alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24">
              <use xlink:href="#exclamation-triangle-fill"></use>
        </svg>
        <div>
            Aucun post n'est disponible pour le moment. La base de données est vide.
        </div>
     </div>
</div>
@else
@foreach ($posts as $post)
<div class="col-sm-12">
    <div class="card card-block card-stretch">
        <div class="card-body">
            <div class="user-post-data">
                <div class="d-flex justify-content-between">
                    <div class="me-3">
                        <img class="rounded-circle img-fluid" src="../assets/images/user/03.jpg" alt="">
                    </div>
                    <div class="w-100">
                        <div class="d-flex  justify-content-between">
                            <div class="">
                                <h5 class="mb-0 d-inline-block">{{ $post->user->name }}</h5>
                                <span class="mb-0 d-inline-block">Added New Image in a Post</span>
                                <p class="mb-0 text-primary">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="card-post-toolbar">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                        <a class="dropdown-item p-3" href="#">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-save-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6>Save Post</h6>
                                                    <p class="mb-0">Add this to your saved items
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item p-3" href="#">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-close-circle-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6> Post</h6>
                                                    <p class="mb-0">See fewer posts like this.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item p-3" href="#">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-user-unfollow-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6>Unfollow User</h6>
                                                    <p class="mb-0">Stop seeing posts but stay
                                                        friends.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item p-3" href="#">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-notification-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6>Notifications</h6>
                                                    <p class="mb-0">Turn on notifications for
                                                        this post</p>
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
                <p>
                    {{ $post->content }}
                </p>
            </div>
            <div class="user-post">
                <img src="{{ asset('storage/post/' . $post->image) }}" alt="post-image"
                        class="img-fluid rounded w-100">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <!-- Bouton Like -->
                {{-- @if ($post->isLikedBy(auth()->user())) --}}
                <form action="" method="POST" style="display: inline;">
                    @csrf
                    {{-- <button type="submit" class="btn btn-danger">Unlike <i class="ri-thumb-down-line"></i></button> --}}
                    <button class="btn btn-outline-danger"><i class="ri-thumb-down-line"></i>
                        {{ $post->likes_count }}</button>
                </form>
                {{-- @else --}}
                <form action="" method="POST" style="display: inline;">
                    @csrf
                    {{-- <button type="submit" class="btn btn-primary">Like <i class="ri-thumb-up-line"></i></button> --}}
                    <button class="btn btn-outline-secondary"><i class="ri-thumb-up-line"></i>
                        {{ $post->likes_count }} </button>
                </form>
                {{-- @endif --}}

                <!-- Bouton Commenter -->
                <button class="btn btn-outline-secondary"><i class="fas fa-comment"></i>
                    Commenter</button>

                <!-- Bouton Partager -->
                <button class="btn btn-outline-success"><i class="fas fa-share"></i> Partager
                </button>
            </div>

        </div>
    </div>
</div>
@endforeach
@endif
