function search() {
    let length = 3;
    let searchValue = " ";
    let searchLength = " ";
    let lenguage = $('#navbarDropdownMenuLink').attr('data-value');
    let locationType = "locale";
    let name = "getSunV3LocationSearchUrlConfig";

    $('#Search').on('input', function() {
        searchLength = $(this).val().length;

        if (searchLength >= length){
            searchValue = $(this).val();

            $.ajax({
                url: "https://weather.com/api/v1/p/redux-dal",
                type: "POST",
                dataType: "json",
                data: JSON.stringify([{
                    "name": name,
                    "params":{
                        "query":searchValue,
                        "language":lenguage,
                        "locationType": locationType
                    }
                }]),
                contentType: "application/json",
                success: function(data) {
                    console.log("data", data);
                    if (data.dal[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].status != '404'){
                        let cityResponse = data.dal[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].data.location;

                        setCityList(cityResponse);
                    }
                    /*console.log("dal", data.dal[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].status);
                    let cityResponse = data.dal[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].data.location;

                    setCityList(cityResponse);*/
                },
                error: function(data) {
                    let errorData = data;
                }
            });
        }
    });

    $('#Search').on('focusout', function() {
        $(this).val('');
        $('#cityCase').hide();
        $('#cityCase').children().slice(1).remove();
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

function setLenguage() {
    $('#langCase').children('.dropdown-item').on('click', function() {
        $('#navbarDropdownMenuLink').text( $(this).text());
    });
}

$(document).ready(function(){
    search();
    setLenguage();
});