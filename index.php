<?php
    //include "media/includes/head.inc.php";
    session_start();
?>
<!-- Body
<div class="container">
    <section class="block">
        <h2>Block 1</h2>
        <p>

        </p>
    </section>
    <section class="block">
        <h2>Block 1</h2>
    </section>
</div>
</body>
</html>
-->
<?php
include "media/includes/FHICT_api.inc.php";

$service = new FHICTService();

$data = $service->getServiceData('/canvas/todo/me');
$dump = $data[0]->{"assignment"}->{"name"};
//var_dump($dump);

$i = 0;
foreach ($data as $course)
{
    echo $data[$i]->{"assignment"}->{"name"} . "<br>";
    $i++;
}
?>
