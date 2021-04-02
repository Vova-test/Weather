function search() {
    let length = 3;
    let searchValue = " ";
    let searchLength = " ";
    let lenguage = $('#navbarDropdownMenuLink').attr('data-value');
    let locationType = "locale";
    let name = "getSunV3LocationSearchUrlConfig";

    $('#search').on('input', function() {
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
                    let searchResponse = data.dal[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].data.location;
                    console.log(searchResponse);
                    $('#cityCase').show();
                },
                error: function(data) {
                    let errorData = data;
                }
            });
        }
    });
}

function setLenguage() {
    $('#langCase').children('.dropdown-item').on('click', function() {
        $('#navbarDropdownMenuLink').attr('data-value', $(this).attr('data-value'));
        $('#navbarDropdownMenuLink').text( $(this).text());
    });
}

$(document).ready(function(){
    search();
    setLenguage();
});