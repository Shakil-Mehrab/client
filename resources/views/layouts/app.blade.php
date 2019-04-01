<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    
      <link rel="stylesheet" href="{{asset('style/bootstrap/css/bootstrap.min.css')}}">
      <link href="{{asset('style/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">   
      <link rel="stylesheet" href="{{asset('style/ownstyle.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      @yield('link')
</head>
<body>
 @include('layouts.includes.nav')
<section class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
             <div class="panel-body">
                @include('layouts.includes.left-side')
             </div>
            </div>
        </div> 
        <div class="col-md-9" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12 ">             
                        @yield('navigation')
                    </div>
                </div>
            </div>
             <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12 text-center">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>         
</section>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
 @yield('js')   
<script>
$(document).on("click","#delete",function(e){
e.preventDefault();
var link=$(this).attr("href");
bootbox.confirm("Are you sure to delete",function(confirmed){
if(confirmed){
window.location.href=link;
};
});
    });
</script>
</body>
</html>
