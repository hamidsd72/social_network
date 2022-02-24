<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDIV *").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script> --}}

<script>
    function myFunction() {
        var input, filter, cards, cardContainer, title, i;
        input = document.getElementById("myFilter");
        filter = input.value.toUpperCase();
        cardContainer = document.getElementById("myProducts");
        cards = cardContainer.getElementsByClassName("group");
        for (i = 0; i < cards.length; i++) {
            title = cards[i].querySelector(".title");
            if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
            } else {
            cards[i].style.display = "none";
            }
        }
    }
</script>