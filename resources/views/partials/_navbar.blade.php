<div class="container-fluid bg-primary">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand  text-light fs-4" href="#">{{ env('APP_NAME') }}</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link  active  text-light" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active  text-light" aria-current="page" href="{{ route('comic-list') }}">Comics</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>

<div class="container-fluid jumbo">
    <img class="" src="" alt="">
</div>
