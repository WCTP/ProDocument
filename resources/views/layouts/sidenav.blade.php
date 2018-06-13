<!-- sidebar navigation -->
<div class="sidenav">
  <h1 class="title"><a href="/">Pro<span class="link-text">Document</span></a></h1>
  @if (Auth::check())
    <h3 class="title">User: <span class="link-text">{{ Auth::user()->name }}</span></h3>
  @endif
  <a href="/document_general/index/General" class="main-link"><i class="fa fa-book"></i> <span class="link-text">&nbsp&nbspGeneral</span></a>
  <a href="/document_general/index/Software" class="main-link"><i class="fa fa-cloud"></i> <span class="link-text">&nbsp&nbspSoftware</span></a>
  <a href="/document_general/index/Workstation" class="main-link"><i class="fa fa-desktop"></i> <span class="link-text">&nbsp&nbspWorkstations</span></a>
  <a href="/document_general/index/Hardware" class="main-link"><i class="fa fa-gear"></i> <span class="link-text">&nbsp&nbspHardware</span></a>
  <a href="/document_general/index/User Administration" class="main-link"><i class="fa fa-users"></i> <span class="link-text">&nbsp&nbspUser Administration</span></a>
  <a href="/document_general/index/Other Department" class="main-link"><i class="fa fa-institution"></i> <span class="link-text">&nbsp&nbspOther Department</span></a>
  @if (Auth::check())
    <a href="/create" class="main-link"><i class="fa fa-file-code-o"></i> <span class="link-text">&nbsp&nbspMake New Document</span></a>
    <a href="/logout" class="main-link"><i class="fa fa-sign-out"></i> <span class="link-text">&nbsp&nbspSign Out</span></a>
  @else
    <a href="/login" class="main-link"><i class="fa fa-sign-in"></i> <span class="link-text">&nbsp&nbspSign In</span></a>
  @endif
  <a href="#" id="hide-nav" class="main-link"><i class="fa fa-bell-slash"></i> <span class="link-text">&nbsp&nbspHide Navigation</span></a>
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
