function search() {
    let searchValue;
    let searchLength;
    let language;
    let length = 3;
    let locationType = "locale";
    let name = "getSunV3LocationSearchUrlConfig";
    let delay = 500;

    $('#Search').on('input', function() {
        searchLength = $(this).val().length;

        if (searchLength < length){
            hideCities();
        }
        if (searchLength >= length){
            searchValue = $(this).val();
            language = $('#navbarDropdownMenuLink').attr('data-value');

            clearTimeout($(this).data('timer'));

            $(this).data('timer', setTimeout(function(){
                $(this).removeData('timer');

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
                        if (typeof(data.dal[`${name}`][`language:${language};locationType:${locationType};query:${searchValue}`]) == "undefined") {
                            alert("Not Defind!!!");
                            return;
                        }
                        if (data.dal[`${name}`][`language:${language};locationType:${locationType};query:${searchValue}`].status != '200'){
                            alert(data.dal[`${name}`][`language:${language};locationType:${locationType};query:${searchValue}`].statusText);
                            return;
                        }

                        let cityResponse = data.dal[`${name}`][`language:${language};locationType:${locationType};query:${searchValue}`].data.location;

                        setCityList(cityResponse);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }, delay));
        }
    });

    $('#Search').on('focusout', function() {
        $(this).val('');
        hideCities();
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
}

function clickCity() {
    //$('#cityCase').
}

function setLenguage() {
    $('#langCase').children('.dropdown-item').on('click', function() {
        $(this).siblings('*[disabled]').removeAttr('disabled');
        $(this).attr('disabled', true);

        $('#navbarDropdownMenuLink').text($(this).text());
        $('#navbarDropdownMenuLink').attr('data-value', $(this).attr('data-value'));
    });
}

function hideCities(){
    $('#cityCase').hide();
    $('#cityCase').children().slice(1).remove();
}

$(document).ready(function(){
    search();
    setLenguage();
});