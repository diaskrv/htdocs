'use strict';

// Модуль каталога для работы с БД
var catalogDB = (function($) {

    var ui = {
        $prices: $('#prices'),
        $pricesLabel: $('#prices-label'),
        $minPrice: $('#min-price'),
        $maxPrice: $('#max-price')
    };

    // Инициализация модуля
    function init() {
        _initPrices({
            minPrice: 5000,
            maxPrice: 50000
        });
        _bindHandlers();
    }
    function _bindHandlers() {
        ui.$categoryBtn.on('click', _changeCategory);
        ui.$brandInput.on('change', _getData);
        ui.$sort.on('change', _getData);
    }
    // Смена категории
    function _changeCategory() {
        var $this = $(this);
        ui.$categoryBtn.removeClass('active');
        $this.addClass('active');
        selectedCategory = $this.attr('data-category');
        _getData();
    }

    // Изменение диапазона цен
    function _onChangePrices(event, elem) {
        var minPrice = elem.values[0],
            maxPrice = elem.values[1];
        ui.$pricesLabel.html(minPrice + ' - ' + maxPrice + ' руб.');
        ui.$minPrice.val(minPrice);
        ui.$maxPrice.val(maxPrice);
    }

    // Инициализация цен с помощью jqueryUI
    function _initPrices(options) {
        ui.$prices.slider({
            range: true,
            min: options.minPrice,
            max: options.maxPrice,
            values: [options.minPrice, options.maxPrice],
            slide: _onSlidePrices
        });
    }
    function _getData() {
        var catalogData = 'category=' + selectedCategory + '&' + ui.$form.serialize();
        $.ajax({
            url: 'scripts/catalog.php',
            data: catalogData,
            type: 'GET',
            cache: false,
            dataType: 'json',
            error: _catalogError,
            success: function(responce) {
                if (responce.code === 'success') {
                    _catalogSuccess(responce);
                } else {
                    _catalogError(responce);
                }
            }
        });
    }
        // Ошибка получения данных
    function _catalogError(responce) {
        console.error('responce', responce);
        // Далее обработка ошибки, зависит от фантазии
    }

    // Успешное получение данных
    function _catalogSuccess(responce) {
        console.log(responce);
    }

    // Экспортируем наружу
    return {
        init: init
    }

})(jQuery);
