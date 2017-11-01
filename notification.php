<?php
/*
@ 10.30 AM, on 27th September 2017
Tomorrow (18-09-17) will be a holiday for the college, due to heavy rains.
Free Software Conference organized by FISAT Free Software Cell (FFSC) on October 6,7 2017
for the academic year 2017-18
Click to Register
Invites application for INTERNATIONAL MBA PROGRAMME @ UK
Eligible candidates may contact the Admission Cell, Mob:9946160238, 9847410018 or register online
It is notified that the following students have applied for branch change in 1st year B.Tech KTU
Rank Holders 2015-16
AWARDS & DISTINCTIONS
FISAT bag Third rank in MG University MCA Degree Examination
Registrations Open
IIT Mumbai Joined hands with FISAT
Happy to inform that we have been awarded 'A' Grade by the NAAC
Congratulations to Ms. Nandana Varma and Ms. Muhsina K.S..
..
FISAT bag eight ranks in MG University M.Tech examinations 2015
The recruitment of the batch graduating in 2016 started during the month of September 2015

*/

//echo $_POST['title'];
//echo $_POST['date'];
$title=$_POST['title'];
$date=$_POST['date'];
$titles=explode(PHP_EOL,$title);
$dates=explode(PHP_EOL,$date);

for($i = 0; $i<count($titles);$i++){
        //echo $titles[$i]."\n";
	//echo $dates[$i]."\n";
sendFCM($titles[$i],"f1bWcoqtG18:APA91bFHmPC7PdXAmTiiJUmovykf2JS9cFj6KyDJZIlOt8W0Hyy8Cj2L1BZ2CX7t7wUZiDV-uSNITIhV5EN_6WGalZ8XgkllVgShX6Mslfonjr1D-lMCqvGMuuGZ84kpFKfAT6K8ZSYE");
}


function sendFCM($mess,$id) {
$url = 'https://fcm.googleapis.com/fcm/send';
$fields = array (
        'to' => $id,
        'notification' => array (
                "body" => $mess,
                "title" => "Title",
                "icon" => "myicon"
        )
);
$fields = json_encode ( $fields );
$headers = array (
        'Authorization: key=' . "AAAA1ic7B94:APA91bFw3nySVerGKgXzK3heE-vYE0X3EpLxJZDiYFGFMMU-hvoYy7T9dD4ikepfyolq0NMbgWPdphGH5PJJn4ECzqVUr858yb3yFFX0Biq4MJ2HHEE4kfNiSlZ7BtIpkTkOgrHyPqk7",
        'Content-Type: application/json'
);

$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_POST, true );
curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

$result = curl_exec ( $ch );
curl_close ( $ch );
}

?>
