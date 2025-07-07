<html>
<head>
    <title>Mapa de Comunidades Quilombolas em Nioaque</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map { height: 600px; width: 100%; }
    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Inicializa o mapa e define o centro em Nioaque, MS (Mudar depois para o centro do Brasil)
        var map = L.map('map').setView([-21.141, -55.825], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var comunidades = [
            {
                name: "Família Cardoso",
                lat: -21.141,
                lng: -55.825,
                desc: "Comunidade rural no Largo da Baía, próxima ao rio Nioaque."
            },
            {
                name: "Famílias Araújo e Ribeiro",
                lat: -21.139,
                lng: -55.827,
                desc: "Localizada na saída da cidade, vizinha ao rio Urumbeva."
            },
            {
                name: "Família Romano Martins da Conceição",
                lat: -21.143,
                lng: -55.823,
                desc: "Comunidade rural em Nioaque."
            },
            {
                name: "Família Bulhões",
                lat: -21.140,
                lng: -55.829,
                desc: "Comunidade rural em Nioaque."
            },
            {
                name: "Dezideiro Felipe de Oliveira e Picadinha",
                lat: -22.163,
                lng: -54.978,
                desc: "Dourados" 
            },
            {
                name: "COMUNIDADE QUILOMBOLA PICADINHA",
                lat: -22.156,
                lng: -54.945,
                desc: "Dourados" 
            },
        ];

        // Adiciona marcadores e quadrados para cada comunidade
        comunidades.forEach(function(comunidade) {
            // Adiciona o marcador
            var marker = L.marker([comunidade.lat, comunidade.lng]).addTo(map);
            marker.bindPopup(`<b>${comunidade.name}</b><br>${comunidade.desc}`).openPopup();

            // cria um quadrado de 200 m por 200 m ao redor do marcador
            var bounds = [
                [comunidade.lat - 0.0009, comunidade.lng - 0.00097], // Canto inferior esquerdo
                [comunidade.lat + 0.0009, comunidade.lng + 0.00097]  // Canto superior direito
            ];
            var rectangle = L.rectangle(bounds, {
                color: "#ff7800",    //borda
                weight: 2,           //espessura da borda
                fillColor: "#ff7800",//Cor de preenchimento
                fillOpacity: 0.2     //transparência do preenchimento
            }).addTo(map);
        });
    </script>
</body>
</html>
