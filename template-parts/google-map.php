<?php
// カスタムフィールドから住所を取得
$address = get_field('address');

if (empty($address)) {
    echo '<p>住所が設定されていません。</p>';
    return;
}
?>
<div id="map" style="width: 540px; height: 360px;"></div>
<script>
    function initMap() {
        const address = "<?php echo esc_js($address); ?>";
        const geocoder = new google.maps.Geocoder();
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: { lat: 35.6895, lng: 139.6917 }, // 仮の中心地
        });

        geocoder.geocode({ address: address }, function (results, status) {
            if (status === "OK") {
                const location = results[0].geometry.location;
                map.setCenter(location);
                new google.maps.Marker({
                    position: location,
                    map: map,
                    title: address,
                });
            } else {
                console.error("Geocode was not successful for the following reason: " + status);
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmiDUMStFabnD_-h0VJqHQzVtAt8LbRoU&callback=initMap" async defer></script>
