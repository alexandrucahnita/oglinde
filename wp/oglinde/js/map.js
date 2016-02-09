function initialize() {
    var position = new google.maps.LatLng(47.167855, 27.577791);
    var myOptions = {
        zoom:17,
        center: position,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);

    var marker = new google.maps.Marker({
        position: position,
        //position: new google.maps.LatLng(47.167855, 27.577791),
        map: map,
        title:"This is the place."
    });

    var contentString = 'Cabinet Medicina Familie Mihaela Vicol';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

}
