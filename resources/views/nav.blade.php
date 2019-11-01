<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a href='/' class='navbar-brand'>Pjax - Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavBar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavBar">
            <!-- Links -->
            <ul class="nav navbar-nav mr-auto">
                <li  class='{{ $active == "home" ? "active" : '' }} nav-item'><a href="/" data-pjax='#main' class='nav-link'>Home</a></li>
                <li class='{{ $active == "about" ? "active" : '' }} nav-item'><a href="/about" data-pjax='#main' class='nav-link'>About</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
              <li class='nav-item'><a class="nav-link" href="#" >Guest</a></li>
            </ul>

        </div>
</nav>
