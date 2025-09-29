<?php include 'includes/header.php'; ?>
<h2 style="text-align: center; font-family: 'Segoe UI', sans-serif; color: #388e3c; font-size: 2.5em; margin-top: 30px;">Compost Bin Locator</h2>

<section style="padding: 40px 20px; background-color: #f9f9f9; text-align: center;">
    <p style="font-size: 1.2em; color: #555; margin-bottom: 30px; font-family: Arial, sans-serif;">
        Use the interactive map below to find compost drop-off bins near you.
    </p>

    <div style="width: 100%; height: 450px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);" id="map"></div>
</section>

<script>
function initMap() {
    const defaultLocation = { lat: 28.6139, lng: 77.2090 }; // Example: New Delhi
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: defaultLocation,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#212121"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            }
        ]
    });

    // Example locations
    const bins = [
        { lat: 28.615, lng: 77.205, title: "Bin #1 - Central Park" },
        { lat: 28.618, lng: 77.212, title: "Bin #2 - Eco Market" },
        { lat: 28.620, lng: 77.200, title: "Bin #3 - Community Center" }
    ];

    bins.forEach((bin) => {
        new google.maps.Marker({
            position: { lat: bin.lat, lng: bin.lng },
            map: map,
            title: bin.title,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/green-dot.png"
            }
        });
    });
}
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&callback=initMap">
</script>

<?php include 'includes/footer.php'; ?>
