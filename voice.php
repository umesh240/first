<?php 
/*
curl -X 'POST' \
  'https://api.elevenlabs.io/v1/text-to-speech/21m00Tcm4TlvDq8ikWAM/stream' \
  -H 'accept: /*' \
  -H 'xi-api-key: 6c71d78588a8553e7420030320c262f2' \
  -H 'Content-Type: application/json' \
  -d '{
  "text": "string",
  "voice_settings": {
    "stability": 0,
    "similarity_boost": 0
  }
}';
*/
$inputData = array(
    "text" => "string",
);
/*
$inputData = array(
    "xi-api-key" => "6c71d78588a8553e7420030320c262f2",
    "text" => "string"
);
*/
$url = 'https://api.elevenlabs.io/v1/text-to-speech/21m00Tcm4TlvDq8ikWAM/stream';



        $fields = json_encode($inputData);
        //$data = array("text" => "string", "voice_settings" => array("stability": 0, "similarity_boost": 0));
        $data = [];
        $data["text"] = "string 123"; 
        $data["voice_settings"] = []; 
        $data["voice_settings"]["stability"] = 0; 
        $data["voice_settings"]["similarity_boost"] = 0; 
        $data = json_encode($data);
        //print_r($data);
        $ch = curl_init($url);
        curl_setopt(
            $ch, 
            CURLOPT_HTTPHEADER, 
            array(
                'accept: /*',
                'access-control-allow-headers: * ',
                'access-control-allow-origin: * ',
                'xi-api-key: 6c71d78588a8553e7420030320c262f2',
                "Content-Type: application/json",
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);


        $response = curl_exec($ch);
        //$response = curl_getinfo( $ch );
        curl_close($ch);

        //$response = json_decode($response, true);

        echo '<pre>';
        print_r($response); 
        echo '</pre>';
        echo '<source src="'.$response.'" type="audio/mpeg"></audio>';
       /*

        $txt= "Hello Umesh, How are You";
        $txt=htmlspecialchars($txt);
        $txt=rawurlencode($txt);
        $audio = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
        $speech='<audio controls="controls" autoplay>
        <source src="'.$speech.'" type="audio/mpeg"></audio>';
        echo $speech;
  */
  
?>