<?php include 'header.php'?>

<!-- Content Us -->

<div class="contectUs">
    <h2>Contact Us</h2>
    <div class="left-content">
        <h1> Leave a message</h1>
        <div class="contectUs-name">
            <p>Your name *</p>
            <input name="contectUs-user-name" type="name" >
        </div>

        <div class="contectUs-email">
            <p>Your email *</p>
            <input name="contectUs-email" type="email" >
        </div>


        <div class="contectUs-message">
            <p>Your message *</p>
            <textarea></textarea>
        </div>

        <div class="contectUs-button">
            <input type="button" value="Submit">
            <p>*These feilds are required</p>
        </div>

    </div>

    <div class="right-content">
        <h1>Contact Information</h1>
        <p>Intel Corporation (also known as Intel and stylized as intel) is an American multinational
            technology company headquartered in Santa Clara, California. It is one of the world's largest
            and highest valued semiconductor chip makers based on revenue.</p>
        <p class="contectUs-address">
            18-A New Shalimar Town Gulshan-e-Ravi Lahore
        </p>
        <p class="contectUs-number">
            +92 302 961 8473
        </p>
        <p class="contectUs-email">
            mrjac1111@gmail.com
        </p>

        <p class="contectUs-website">
            www.sajblog.com
        </p>
        <div class="contectUs-socila">
            <img src="img/F_icon.svg.png">
            <img src="img/Twitter-icon.png">
            <img src="img/Google-Plus-icon.png">
            <img src="img/Youtube1.png">
        </div>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div style='overflow:hidden;height:180px;width:570px;'>
            <div id='gmap_canvas' style='height:180px;width:600px;'></div>
            <div><small><a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions									Get found</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">Monitored 24/7</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(31.5711904,74.36461220000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.5711904,74.36461220000001)});infowindow = new google.maps.InfoWindow({content:'<strong>JAS BLOG</strong><br>Mughalpura, Lahore, Pakistan<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

    </div>
</div>
</div>
<!-- End of Contect Us -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YLN9evy_MLlJcHA4cu3dsJ6Ongov3VM&callback=initMap"
        type="text/javascript"></script>
<?php include 'footer.php'?>
