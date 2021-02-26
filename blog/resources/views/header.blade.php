<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="top:0; position: sticky">
  <!-- Brand -->
  <a class="navbar-brand" href="{{url('/')}}">E-Commerce</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/order_list">Orders</a>
    </li>

    <form action="/search_item" method="POST" class="d-flex ml-5">
        @csrf
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-success ml-2" type="submit">Search</button>
    </form>
    <li class="nav-item ml-5">
      @php
        $total = App\Http\Controllers\ProductController::countOrder();
      @endphp
       <a class="nav-link" href="/cart_list">Cart({{ $total}})</a>
    </li> 
    @if(Session::has('user'))
     <li class="nav-item dropdown ml-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
    </li>
    @else
        <li class="nav-item ml-5">
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">Registration</a>
        </li>
   
    @endif
  </ul>
</nav>