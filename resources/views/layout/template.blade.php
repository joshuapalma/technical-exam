<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.header')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          <img src="{{ asset('images/icon.png') }}" width="60" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          @if(Request::route()->getName() == "todo.index")
            <li class="nav-item active">
              <a class="nav-link font-weight-bold" id="todo" href="{{ url('/todo/view') }}">TODO <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link font-weight-bold" id="take-note" href="{{ url('/take-note/view') }}">TAKE NOTE <span class="sr-only">(current)</span></a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link font-weight-bold" id="todo" href="{{ url('/todo/view') }}">TODO <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link font-weight-bold" id="take-note" href="{{ url('/take-note/view') }}">TAKE NOTE <span class="sr-only">(current)</span></a>
            </li>
          @endif
          
        </ul>
      </div>
    </nav>
    @include('components.flash-message')
    @yield('content')
    @include('layout.footer')
</body>
</html>