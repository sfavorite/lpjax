<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href='/' class='navbar-brand'>Pjax - Laravel</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li  class='{{ $active == "home" ? "active" : '' }}'><a href="/" data-pjax='#main'>Home</a></li>
        <li class='{{ $active == "about" ? "active" : '' }}'><a href="/about" data-pjax='#main'>About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" >Guest</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
