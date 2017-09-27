</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('.collapsible').collapsible();
        $('input#input_text, textarea#textarea1').characterCounter();

        $("form").submit(function() {
            var isFormValid = true;
            $(".required").each(function() {
                if ($.trim($(this).val()) == "") {
                    $(this).addClass("highlight");
                    isFormValid = false;
                } else {
                    $(this).removeClass("highlight");
                }

            });
        });
        $(".button-collapse").sideNav();
    });
</script>
