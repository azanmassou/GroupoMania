<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Index</a>
        {{-- <a href="/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJJWanAKdNoltq1QkXasapIY92PI-LYekKZpz3WYlLQYD_v_m5wuEzOADteWHPhpTEO6A&usqp=CAU" alt=""></a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.create')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('salles.index')}}">Salles</a>
                </li>
                {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> --}}
            </ul>
            <form class="d-flex">
          {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
          <button class="btn btn-outline-success mx-1" type="submit">Sigin</button>
          <button class="btn btn-outline-success mx-1" type="submit">Login</button>
          <button class="btn btn-outline-danger mx-1" type="submit">Log Out</button>
        </form>
        </div>
    </div>
</nav>
