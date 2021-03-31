</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
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
                            "locationType": locationType;
                        }
                    }]),
                    contentType: "application/json",
                    success: function(data) {
                        let searchResponse = data.dal.[`${name}`][`language:${lenguage};locationType:${locationType};query:${searchValue}`].data.location
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
</script>
</body>
</html>