//Layer
//Administrasi
var BatasWilayah = new L.GeoJSON.AJAX(
	["assets/geojson/Batas_Administrasi/AdminWilayah.geojson"],
	{
		style: myStyle2,
	}
);
var BatasKabupaten = new L.GeoJSON.AJAX(
	["assets/geojson/Batas_Administrasi/AdminProvinsi.geojson"],
	{
		onEachFeature: popUp2,
		style: myStyle,
	}
);
var BatasKecamatan = new L.GeoJSON.AJAX(
	["assets/geojson/Batas_Administrasi/AdminKecamatan.geojson"],
	{
		onEachFeature: popUp,
		style: myStyle,
	}
);

//Perairan
var Bendungan = new L.GeoJSON.AJAX(
	["assets/geojson/Perairan/Bendungan_fix.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarkerBendungan,
	}
);
var Sungai = new L.GeoJSON.AJAX(
	["assets/geojson/Perairan/Sungai_fix.geojson"],
	{
		style: myStyle12,
		pointToLayer: featureToMarker,
	}
);
var Irigasi = new L.GeoJSON.AJAX(
	["assets/geojson/Perairan/SaluranIrigasi_fix.geojson"],
	{
		style: myStyle12,
		pointToLayer: featureToMarker,
	}
);

//Jaringan Jalan
var JalanArteri = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Jalan/JalanArteri_fix.geojson"],
	{
		style: jl_arteri,
		pointToLayer: featureToMarker,
	}
);
var JalanKolektor = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Jalan/JalanKolektor_fix.geojson"],
	{
		style: jl_kolektor,
		pointToLayer: featureToMarker,
	}
);
var JalanLokal = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Jalan/JalanLokal_fix.geojson"],
	{
		style: jl_lokal,
		pointToLayer: featureToMarker,
	}
);
var JalanLain = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Jalan/JalanLain_fix.geojson"],
	{
		style: jl_lokal,
		pointToLayer: featureToMarker,
	}
);

var GarduListrik = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Prasarana/GarduListrik_fix.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarkerGardu,
	}
);
var PipaGas = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Prasarana/JaringanPipaGas_fix.geojson"],
	{
		style: pipa,
		pointToLayer: featureToMarker,
	}
);
var Transmisi = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Prasarana/JaringanTransmisi_fix.geojson"],
	{
		style: transmisi,
		pointToLayer: featureToMarkerPipaGas,
	}
);
var PembangkitListrik = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Prasarana/PembangkitListrik_fix.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarkerPembangkit,
	}
);
var Tpa = new L.GeoJSON.AJAX(
	["assets/geojson/Jaringan_Prasarana/TPA_fix.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarkerTpa,
	}
);

var Lp2b = new L.GeoJSON.AJAX(["assets/geojson/LP2B_2022/LP2B.geojson"], {
	style: lp2b,
	pointToLayer: featureToMarker,
});

var lsd = new L.GeoJSON.AJAX(["assets/geojson/LSD_2022/LSD.geojson"], {
	style: lsd,
	pointToLayer: featureToMarker,
});

var HutanProduksi = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/HutanProduksi.geojson"],
	{
		style: hutan_produksi_clr,
		pointToLayer: featureToMarker,
	}
);
var Industri = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/Industri.geojson"],
	{
		style: industri_clr,
		pointToLayer: featureToMarker,
	}
);
var Perikanan = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/Perikanan.geojson"],
	{
		style: perikanan_clr,
		pointToLayer: featureToMarker,
	}
);
var Perkebunan = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/Perkebunan.geojson"],
	{
		style: perkebunan_clr,
		pointToLayer: featureToMarker,
	}
);
var Pertanian = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/Pertanian.geojson"],
	{
		style: pertanian_clr,
		pointToLayer: featureToMarker,
	}
);
var PermukimanDesa = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/PermukimanDesa.geojson"],
	{
		style: permukimanDesa_clr,
		pointToLayer: featureToMarker,
	}
);
var PermukimanKota = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/PermukimanKota.geojson"],
	{
		style: permukimanKota_clr,
		pointToLayer: featureToMarker,
	}
);
var SekitarDanau = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Budidaya/SekitarDanau.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarker,
	}
);

var HutanLindung = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Lindung/HutanLindung.geojson"],
	{
		onEachFeature: popUp_lindung,
		style: hutan_lindung_clr,
		pointToLayer: featureToMarker,
	}
);
var TamanNasional = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Lindung/TamanNasional.geojson"],
	{
		onEachFeature: popUp_lindung,
		style: TamanNasional_clr,
		pointToLayer: featureToMarker,
	}
);

var Pklp = new L.GeoJSON.AJAX(["assets/geojson/Pusat_Kegiatan/PKLP.geojson"], {
	style: myStyle7,
	pointToLayer: featureToMarkerPKLP,
});
var Pkw = new L.GeoJSON.AJAX(["assets/geojson/Pusat_Kegiatan/PKW.geojson"], {
	style: myStyle7,
	pointToLayer: featureToMarkerPKW,
});
var Pkwp = new L.GeoJSON.AJAX(["assets/geojson/Pusat_Kegiatan/PKWP.geojson"], {
	style: myStyle7,
	pointToLayer: featureToMarkerPKWP,
});
var Ppk = new L.GeoJSON.AJAX(["assets/geojson/Pusat_Kegiatan/PPK.geojson"], {
	style: myStyle7,
	pointToLayer: featureToMarkerPPK,
});
var s_ekonomi = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Strategis/Strategis_Ekonomi.geojson"],
	{
		style: ekonomi_style,
		pointToLayer: featureToMarker,
	}
);
var s_lingkungan = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Strategis/Strategis_Lingkungan.geojson"],
	{
		style: lingkungan_style,
		pointToLayer: featureToMarker,
	}
);
var s_sosbud = new L.GeoJSON.AJAX(
	["assets/geojson/Kawasan_Strategis/Strategis_SosialBudaya.geojson"],
	{
		style: sosbud_style,
		pointToLayer: featureToMarker,
	}
);

var RencanaTerminal = new L.GeoJSON.AJAX(
	["assets/geojson/Transportasi/RencanaTerminal_fix.geojson"],
	{
		style: myStyle7,
		pointToLayer: featureToMarkerTerminal,
	}
);
