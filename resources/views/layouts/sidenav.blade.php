<!-- sidebar navigation -->
<div class="sidenav">
  <h1 class="title"><a href="/">ProDocument</a></h1>
  @if (Auth::check())
    <h3 class="title">User: {{ Auth::user()->name }}</h3>
  @endif
  <input type="text" name="search" size="12" placeholder="Search...">
  <a href="#" class="main-link">General</a>
  <a href="#" class="main-link">Software</a>
  <a href="#" class="main-link">Workstations</a>
  <a href="#" class="main-link">Hardware</a>
  <a href="#" class="main-link">User Administration</a>
  <a href="#" class="main-link">Other Department</a>
  @if (Auth::check())
    <a href="#" class="main-link">Make New Document</a>
    <a href="/logout" class="main-link">Sign Out</a>
  @else
    <a href="/login" class="main-link">Sign In</a>
  @endif

</div>
