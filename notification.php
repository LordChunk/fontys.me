<html>
<head>
    <!--OneSignal-->

    <!--OneSignal-->
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script async src="media/js/notification.js"></script>
</head>
<body>
<?php
//Notificatie: 1 dag en 1 week
?>
    <form method="post" action="notification.php">
        <input name="body" placeholder="body">
        <input name="title" placeholder="title">


    </form>
    <?PHP
    if ($_POST["send"]){

        //Get data from api
        include "media/includes/FHICT_api.inc.php";

        $service = new FHICTService();
        $data = $service->getServiceData('/canvas/upcoming/me');



        //Build message
        function sendMessage(){
            $content = array(
                "en" => 'Body enzo'
            );
            $headings = array(
                'en' => "Titel"
            );

            $fields = array(
                'app_id' => "d42d6e98-3d75-4968-bdf0-1cb00817fba3",
                'included_segments' => array('All'),
                //'data' => array("foo" => "bar"),
                'contents' => $content,
                "headings" => $headings,
                //'send_after' => "2017-10-13 14:00:00 ". " (CEST)"
            );

            $fields = json_encode($fields);
            echo("<br>JSON sent:<br><br>");
            echo($fields);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                'Authorization: Basic ZGU0NTU3ZTktMGJhNC00ZDMwLThmZTItNTFlNWRkYWY2MjJm'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        }

        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode( $return);

        echo("<br><br>JSON received:<br><br>");
        echo($return);
    }

    ?>

</body>
</html>
