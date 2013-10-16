<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ URL::to('za/mdnite') }}">Midnight Offer</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offer <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('za/mdnite/all-offers') }}">All Offer</a></li>
          <li><a href="{{ URL::to('za/mdnite/all-offers/product') }}">Products</a></li>
          <li><a href="{{ URL::to('za/mdnite/all-offers/event') }}">Events</a></li>
          <li><a href="{{ URL::to('za/mdnite/add-offer') }}">Add New Offer</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Images<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('za/mdnite/all-images') }}">All Images</a></li>
          <li><a href="{{ URL::to('za/mdnite/upload') }}">Upload New</a></li>
        </ul>
      </li>
      
      <li><a href="{{ URL::to('/') }}">View Site</a></li>

    </ul>
   

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('za/mdnite/passchange') }}">Change Password</a></li>
          <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>