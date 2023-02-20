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
        $data["text"] = "If you have an account, you can find your API key here. If not, you're more than welcome to register here."; 
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
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);


        $response = curl_exec($ch);
        //$response = curl_getinfo( $ch );
        curl_close($ch);
        
        $local_file = 'mppp123.mp3';
if(!file_exists($local_file)){
 $myfile = fopen($local_file, "w");
}
fwrite($myfile, $response);

        //$response = json_decode($response, true);

        echo '<pre>';
        //print_r($response); 
        echo '</pre>';
        //echo '<source src="'.$response.'" type="audio/mpeg"></audio>';
       /*

        $txt= "Hello Umesh, How are You";
        $txt=htmlspecialchars($txt);
        $txt=rawurlencode($txt);
        $audio = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
        $speech='<audio controls="controls" autoplay>
        <source src="'.$speech.'" type="audio/mpeg"></audio>';
        echo $speech;
  */


echo '<br><br>-------------------------------------------------<br><br>';
$url = 'https://play.ht/api/v1/convert';

/*

$data = [];
$data["title"] = "Testing public api convertion"; 
$data["voice"] = "en-US-MichelleNeural"; 
$data["ssml"] = '<speak><p>Hello my fried <break time=\"0.5s\"/></p></speak>",
"<speak><p>--BEGIN-PLAYHT-CUSTOM-VOICE--en-US-AmberNeural--END-PLAYHT-CUSTOM-VOICE--How are you doing</p></speak>'; 
$data = json_encode($data);
//print_r($data);
$ch = curl_init($url);
curl_setopt(
    $ch, 
    CURLOPT_HTTPHEADER, 
    array(
        'accept: /*',
        'Authorization: 823171c575184a238cc88e9cb0d1f835',
        'aX-User-ID: Jjzx3WK1YjXBM6gCW45o4sjOUTK2',
        "Content-Type: application/json",
    )
);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);


$response = curl_exec($ch);
//$response = curl_getinfo( $ch );
curl_close($ch);

//$response = json_decode($response, true);

echo '<pre>';
print_r($response); 
echo '</pre>';
*/
echo '<br><br>-------------------------------------------------<br><br>';
$data = 'JavaScript is a high-level, dynamic, untyped, and interpreted programming language.It has been standardized in the ECMAScript language specification. Alongside HTML and CSS, JavaScript is one of the three core technologies of World Wide Web content production; the majority of websites employ it, and all modern Web browsers support it without the need for plug-ins.[6] JavaScript is prototype-based with first-class functions, making it a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles. It has an API for working with text, arrays, dates and regular expressions, but does not include any I/O, such as networking, storage, or graphics facilities, relying for these upon the host environment in which it is embedded.
Although there are strong outward similarities between JavaScript and Java, including language name, syntax, and respective standard libraries, the two are distinct languages and differ greatly in their design. JavaScript was influenced by programming languages such as Self and Scheme.';

$data = urlencode($data);
echo $url = 'https://api.voicerss.org/?key=b0115a38104048838db6e9dd4fcf9c35&hl=en-us&v=Jai&c=MP3&f=16khz_16bit_stereo&src='.$data;
$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $url);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curlSession);
//$response = curl_getinfo( $ch );
curl_close($curlSession);
echo '<audio><source src="'.$response.'" type="audio/mpeg"></audio>';
//$response = json_decode($response, true);
$response = file_get_contents($url);
$file = $response = stream_get_contents(fopen($url, "rb"));
$local_file = 'mppp.mp3';
if(!file_exists($local_file)){
 $myfile = fopen($local_file, "w");
}
fwrite($myfile, $response);
echo '<br><br>'.$response.'<br><br>';
echo '<pre>';
//print_r($response); 
echo '</pre>';
  
  
?>
