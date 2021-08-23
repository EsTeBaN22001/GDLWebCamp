// Mapa de leaflet.js
var map = L.map('map').setView([-33.273946, -426.324935], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-33.273946, -426.324935]).addTo(map)
  .bindPopup('Este será el lugar de la conferencia')
  .openPopup()
  .bindTooltip('Un tooltip')
  .openTooltip();
