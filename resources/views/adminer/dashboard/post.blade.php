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
                                        <a class="dropdown-item p-3" href="{{route('posts.destroy' ,['post' => $post->id])}}">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-close-circle-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6>Hide Post</h6>
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
                                        <a class="dropdown-item p-3" href="{{route('posts.edit', ['post' => $post->id])}}">
                                            <div class="d-flex align-items-top">
                                                <i class="ri-notification-line h4"></i>
                                                <div class="data ms-2">
                                                    <h6>Editer</h6>
                                                    <p class="mb-0">Updating
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