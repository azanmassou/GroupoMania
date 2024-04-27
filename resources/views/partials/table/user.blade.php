<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Utilisateurs N <i class="mdi mdi-account-outline"></i>{{ $user->id }}</h4>

                <div class="row">

                    <div class="d-flex justify-content-center">

                        <img src="{{ $user->image }}" class="me-2" alt="image">
                        {{ $user->name }}

                    </div>
                    <div class="divider"></div>
                    <div class="dropdown-divider"></div>
                </div>

                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div> --}}
                                <h4 class="card-title"><i class="mdi mdi-email btn-icon-prepend">
                                    </i><em>{{ $user->email }}</em></h4>
                                <h4 class="card-title"><i class="mdi mdi-clock icon-sm me-2"></i>
                                    {{ $user->created_at }}</h4>
                                {{-- <canvas id="areaChart" style="height: 275px; display: block; width: 550px;"
                                    width="1100" height="550" class="chartjs-render-monitor"></canvas> --}}
                                    <h3> Rolling</h3>
                                <form action="{{ route('users.admining', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                            <option value="">Choose .... Role</option>
                                            @foreach ($roles as $role)
                                                <option class="form-control" value="{{ old('role') ?? $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="role" class="invalid-feedback">
                                            {{ $errors->first('role') }}
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-outline-success btn-icon-text">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div> --}}
                                <h4 class="card-title">Actions <label @class([
                                    'badge',
                                    'badge-gradient-success' => $user->role->name === 'admin',
                                    'badge-gradient-warning' => $user->role->name === 'user',
                                    // 'badge-gradient-default' => !in_array($user->role->name, ['admin', 'user']),
                                ])>
                                        {{ $user->role->name }}
                                    </label> </h4>
                                <button type="button" class="btn mx-1 btn-sm btn-outline-warning btn-icon-text">
                                    <i class="mdi mdi-alert btn-icon-prepend"></i> Bannir </button>
                                <button type="button" class="btn btn-sm btn-outline-danger btn-icon-text">
                                    <i class="mdi mdi-reload btn-icon-prepend"></i> Delete
                                </button>

                                {{-- <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="mdi mdi-star text-primary"></i>
                                  </button> --}}
                                {{-- <canvas id="areaChart" style="height: 275px; display: block; width: 550px;"
                                    width="1100" height="550" class="chartjs-render-monitor"></canvas> --}}
                            </div>
                        </div>
                        <div class="drowpdown-divider"></div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
