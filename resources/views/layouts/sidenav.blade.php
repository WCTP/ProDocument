<!-- sidebar navigation -->
<div class="sidenav">
  <h1 class="title"><a href="/">ProDocument</a></h1>
  @if (Auth::check())
    <h3 class="title">User: {{ Auth::user()->name }}</h3>
  @endif
  <a href="/document_general/index/General" class="main-link">General</a>
  <a href="/document_general/index/Software" class="main-link">Software</a>
  <a href="/document_general/index/Workstation" class="main-link">Workstations</a>
  <a href="/document_general/index/Hardware" class="main-link">Hardware</a>
  <a href="/document_general/index/User Administration" class="main-link">User Administration</a>
  <a href="/document_general/index/Other Department" class="main-link">Other Department</a>
  @if (Auth::check())
    <a href="/create" class="main-link">Make New Document</a>
    <a href="/logout" class="main-link">Sign Out</a>
  @else
    <a href="/login" class="main-link">Sign In</a>
  @endif
  <a href="#" id="hide-nav" class="main-link">Hide Navigation</a>
  <div class="search">
    <input type="text" name="search" id="search-box" size="12" placeholder="Search...">
  </div>
  <div class="search-results"></div>

</div>

<script type="text/javascript">
  /* Script for searchbar function */
  $("#search-box").keyup($.debounce(500, function () {
    if ($(this).val() === "") {
      $(".search-results").css("display", "none");
    } else {
      $(".search-results").css("display", "block");
      $(".search-results").empty();
      $.get("/search/" + $("#search-box").val(), function(data) {
        if (data != null) {
          $(".search-results").append('<h3 class="title">Search Results</h3>');
          data.forEach(function(result) {
            $(".search-results").append('<a href="/document_general/' + result.id + '">'+ result.title + '</a>');
          });
        }
      });
    }
  }));

  $("#hide-nav").click(function() {
    $(".sidenav").hide();
    $("#show-nav").show();
    $(".main").css("margin-left", "3%");
  });


</script>
