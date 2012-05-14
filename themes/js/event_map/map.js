jQuery(document).ready(function($)
{
    var e = new EventMap($);
});

function EventMap($)
{
  var geocoder = new google.maps.Geocoder()
  , map
  , healthtronicsLatLang = new google.maps.LatLng(30.479878, -97.77771100000001)
  , mapOptions = 
    {
        zoom: 15,
        center: healthtronicsLatLang,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  
    findMaps();
    
    function findMaps()
    {
        var maps = $('.map')
          , total = maps.length-1
          , i = 0;

        for(i;i <= total; i++)
        {
            if($(maps[i]).attr('data-location') != '')
            {
                codeAddress($(maps[i]).attr('data-location'), $(maps[i]));
            }else{
                $(maps[i]).css({display:'none'});
            }
        }
        
    };
    
    function codeAddress( a, mapElement) {
        var address = a
          , map     = new google.maps.Map(mapElement[0], mapOptions);
          
        geocoder.geocode( { 'address': a}, 
        function(results, status) 
        {
            if (status == google.maps.GeocoderStatus.OK) 
            {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                        map: map, 
                        position: results[0].geometry.location
                    });
            } else {
                mapElement.text('This map could not be displayed.');
                mapElement.css({display:'none'});
            }
        });
    }
}