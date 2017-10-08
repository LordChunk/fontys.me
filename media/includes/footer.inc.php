<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 02/10/2017
 * Time: 20:03
 */
?>
</body>
</html>


<!--Import jQuery before js files-->
<script async src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!--My own javascript stuff -->
<script async src="/media/js/main.js" type="text/javascript"></script>

<!--Cookie consent -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
  "palette": {
        "popup": {
            "background": "#ee6e73",
      "text": "#ffffff"
    },
    "button": {
            "background": "#26a69a",
      "text": "#ffffff"
    }
  },
  "theme": "classic"
})});
</script>