<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">La liste des recents postes</h4>
                <div class="table-responsive">
                    @if ($posts->isEmpty())
                    <div class="alert alert-solid alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                            <use xlink:href="#exclamation-triangle-fill"></use>
                        </svg>
                        <div>
                            Aucun post n'est disponible pour le moment. La base de données est vide.
                        </div>
                    </div>
                    @else
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th> Auteur </th>
                                    <th> Title </th>
                                    {{-- <th> Auteur </th> --}}
                                    <th> Last Update </th>
                                    <th> Options </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <img src="{{ $post->image }}" class="me-2" alt="image">
                                            <button type="button" class="btn btn-link">{{ $post->user->name }}</button>
                                        </td>
                                        <td>
                                        
                                                <button type="button" class="btn btn-outline-secondary btn-sm">{{ $post->title }}</button>
                                        </td>
                                        {{-- <td>
                                            <label class="badge badge-gradient-success">DONE</label>
                                            {{ $post->user->name }}
                                        </td> --}}
                                        <td><i class="mdi mdi-clock icon-sm me-2"></i>{{ $post->created_at->diffForHumans() }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon-text">
                                                <i class="mdi mdi-reload btn-icon-prepend"></i> Block
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-icon-text">
                                                <i class="mdi mdi-reload btn-icon-prepend"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>

    </div>

</div>
@include('components.paginate')
