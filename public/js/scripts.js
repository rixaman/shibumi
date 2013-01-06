// джейквери
$(function () {
	$('.carousel').carousel()
});

// виджетывк 
//VK.Widgets.Group("vk_groups", {mode: 0, width: "298", height: "200"}, 42669816);
//VK.Widgets.Group("vk_news", {mode: 2, width: "940", height: "500"}, 42669816);

// яндекс карта
function fid_135219974509787097091(ymaps) {
    var map = new ymaps.Map("ymaps-map-id_135219974509787097091", {
        center: [58.99795455819696, 53.41802369888945],
        zoom: 17,
        type: "yandex#map"
    });
    map.controls
        .add("zoomControl");
    map.geoObjects
        .add(new ymaps.Placemark([58.9984609593899, 53.41804292705937], {
            balloonContent: "Кафе НИРВАНА"
        }, {
            preset: "twirl#violetDotIcon"
        }));
};

// далее