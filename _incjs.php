<?php
if($refer) {
    
} else {
    echo "ERROR: Inclusion failed. Unrefered inclusion.";
    die();
}
?>

<!-- JS, Popper.js, and jQuery -->
<script src="<?php echo $config;?>/js/jquery-3.5.1.min.js"></script>
<script src="https://research.faisalhanif.me/unify/assets/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="<?php echo $config;?>/js/aos.js"></script>


<script>
	$(function () {
            $(document).scroll(function () {
                var $scroll = $("#scrollTop");
                $scroll.toggleClass("hide", $(this).scrollTop() < $scroll.height());
            });
        });

        $(function () {
            $(document).scroll(function () {
                var $spy = $("#scrollespionage");
                $spy.toggleClass("hide", $(this).scrollTop() < screen.availHeight-10);
                var $nav = $("#mainNav");
                $nav.toggleClass("masak-nav-2", $(this).scrollTop() > window.innerHeight-70);
                $nav.toggleClass("mx-2", $(this).scrollTop() > window.innerHeight-70);
                $nav.toggleClass("m-card", $(this).scrollTop() > window.innerHeight-70);
            });
        });

        $(document).ready(function(){
            $( "a.change-section" ).click(function( event ) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
            });
        });   
</script>

<script>
    //Animate on Scroll
    AOS.init({
        easing: 'ease-out-back',
        duration: '1000',
        delay: '100'
    });    
</script>
<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
    echo '
<script>
    document.getElementById("accountControl").innerHTML = \'<!--Account Button--><text class="mr-2">Hai, '.$_SESSION['username'].'!</text><a class="btn btn-outline-danger"  style="border-radius:0px;" href="https://masak.faisalhanif.me/login?account=logout">Log out</a>\'
</script>';
} else {
    $_SESSION['loginReferer'] = "";
    echo '
    <script>
        document.getElementById("accountControl").innerHTML = \'<a class="btn btn-outline-success" style="border-radius:0px;" href="https://masak.faisalhanif.me/login"><i class="fa fa-sign-in-alt pr-1"></i><b>Login</b></a>\'
    </script>
    ';
}
?>