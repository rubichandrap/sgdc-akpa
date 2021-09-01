<!-- SCRIPTS -->

<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/aos.js')}}"></script>

<!-- Maps -->

<script>
    function initMap() {
        var uluru = {
            lat: -6.139031,
            lng: 106.823909
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru,
            gestureHandling: 'none'
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>

<!-- AOS Animation -->

<script type="text/javascript">
    AOS.init({
        offset: 100,
        duration: 900,
        once: true
    });
</script>
<script type="text/javascript" src="{{asset('assets/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/animate.js')}}"></script>
