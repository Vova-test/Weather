function search() {
    let searchValue;
    let searchLength;
    let language;
    let length = 3;
    let locationType = "locale";
    let name = "getSunV3LocationSearchUrlConfig";
    let delay = 500;
    let langObject;

    $('#Search').on('input', function() {
        langObject = $(this);
        searchLength = langObject.val().length;

        if (searchLength < length){
            hideCities();
        }
        if (searchLength >= length){
            language = $('#navbarDropdownMenuLink').attr('data-value');

            clearTimeout($(this).data('timer'));

            $(this).data('timer', setTimeout(function(){
                $(this).removeData('timer');

                searchValue = langObject.val();
                searchRequest(name, searchValue, language, locationType);
            }, delay));
        }
    });
}

function searchRequest(
    name,
    searchValue,
    language,
    locationType
) {
    let dataMethodKey = `language:${language};locationType:${locationType};query:${searchValue}`;

    $.ajax({
        url: "https://weather.com/api/v1/p/redux-dal",
        type: "POST",
        dataType: "json",
        data: JSON.stringify([{
            "name": name,
            "params":{
                "query":searchValue,
                "language":language,
                "locationType": locationType
            }
        }]),
        contentType: "application/json",
        success: function(data) {

            if (data.dal[name][dataMethodKey].status != '200'){
                alert(data.dal[name][dataMethodKey].statusText);
                return;
            }

            let cityResponse = data.dal[name][dataMethodKey].data.location;

            setCityList(cityResponse);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
}

function setCityList(cityData) {
    $('#cityCase').children().slice(1).remove();

    for (var i in cityData.address) {
        $('<a/>', {
            "class": 'dropdown-item city-item',
            href: "#",
            id: cityData.placeId[i],
            text: cityData.address[i]
        }).appendTo('#cityCase');
    }

    $('#cityCase').show();

    changeCity();
}

function changeCity() {
    let cityCode;
    let cityCodeInput;

    $('#cityCase').children('.city-item').on('click', function() {
        event.preventDefault();

        cityCode = $(this).attr('id');
        cityCodeInput = $('#weatherForm').find(":input[name='cityCode']");

        if (cityCodeInput.val() != cityCode) {
            cityCodeInput.val(cityCode);

            $('#weatherForm').submit();
        }

        hideCities();
    });
}

function hideCities() {
    $('#cityCase').hide();
}

function changeLenguage() {
    let lang;
    let weatherForm;
    let langInput;

    $('#langCase').children('.dropdown-item').on('click', function() {
        event.preventDefault();

        weatherForm = $('#weatherForm');

        lang = $(this).attr('data-value');
        langInput = weatherForm.find(":input[name='lang']");find(":input[name='cityCode']")

        langInput.val(lang);
        $('#weatherForm').submit();
    });
}

function cleanSearchList() {
    $('#Search').on('focusout', function() {
        setTimeout(function(){
            $(this).val('');
            hideCities();
        },500);
    });
}

function changeMode() {
    $('#modeType').find('a.navbar-brand').not('.active').on('click', function() {
        let weatherForm = $('#weatherForm');

        weatherForm.attr('action', $(this).attr('href'));
        weatherForm.submit();
    });
}

$(document).ready(function(){
    search();
    changeLenguage();
    cleanSearchList();
    changeMode();
});