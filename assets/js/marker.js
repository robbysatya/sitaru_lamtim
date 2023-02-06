function popUp(f, l) {
  var out = [];
  if (f.properties) {
    // for(key in f.properties){
    // 	console.log(key);

    // }
    out.push("Kecamatan: " + f.properties["KEC"]);
    l.bindPopup(out.join("<br />"));
  }
}

function popUp_lindung(f, l) {
  var out = [];
  if (f.properties) {
    // for(key in f.properties){
    // 	console.log(key);

    // }
    out.push("Jenis Hutan: " + f.properties["JnsHutan"]);
    l.bindPopup(out.join("<br />"));
  }
}

function popUp2(f, l) {
  var out = [];
  if (f.properties) {
    // for(key in f.properties){
    // 	console.log(key);

    // }
    out.push("Kabupaten: " + f.properties["KABUPATEN"]);
    l.bindPopup(out.join("<br />"));
  }
}

function featureToMarker(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-" + feature.properties.jenis,
      html: iconByName(feature.properties.jenis),
      iconUrl:
        "assets/js/leaflet-panel-layers-master/examples/images/markers/" +
        feature.properties.jenis +
        ".png",
      iconSize: [25, 41],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPipaGas(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-PipaGas",
      iconUrl: "assets/icons/transmisi.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}
function featureToMarkerGardu(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-gardu",
      iconUrl: "assets/icons/gardu_listrik1.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPembangkit(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-pembangkit_listrik",
      iconUrl: "assets/icons/pltu.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerTpa(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-tpa",
      iconUrl: "assets/icons/tpa.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerBendungan(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-bendungan",
      iconUrl: "assets/icons/bendungan.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPKLP(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-pklp",
      iconUrl: "assets/icons/pklp.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPKW(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-pkw",
      iconUrl: "assets/icons/pkw.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPKWP(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-pkwp",
      iconUrl: "assets/icons/pkwp.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerPPK(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-ppk",
      iconUrl: "assets/icons/ppk.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function featureToMarkerTerminal(feature, latlng) {
  return L.marker(latlng, {
    icon: L.divIcon({
      className: "marker-terminal",
      iconUrl: "assets/icons/ppk.png",
      iconSize: [48, 48],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      shadowSize: [41, 41],
    }),
  });
}

function iconByName(name) {
  return '<i class="icon icon-' + name + '"></i>';
}
