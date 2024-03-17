<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('card-title')</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            {{-- <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div> --}}
                            <a href="@yield('route')" class="btn btn-primary">Ajouter un @yield('btn-title')</a>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>@yield('btn-title')</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            @yield('foreach')

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            @yield('links')
        </div>
    </div>
</div>
