<?php

function bakmi($no, $jumlah){

        $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nabil.my.id/Tools/Prank-Tools/Bakmi/api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nomor=$no&jumlah=$jumlah");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: nabil.my.id';
$headers[] = 'Accept: */*';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.122 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://nabil.my.id';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://nabil.my.id/Bakmi_Otp';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: ';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    echo "Success\n";
}
for ($i = 0; $i < $jumlah; $i++) {
    run();
}
function email($email, $jumlah){
        $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://nabil.my.id/Tools/Prank-Tools/Spam-Email/api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "email=$email&jumlah=$jumlah");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: nabil.my.id';
$headers[] = 'Accept: */*';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://nabil.my.id';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://nabil.my.id/Spam_Email';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: ';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    echo "Success\n";
}
for ($i = 0; $i < $jumlah; $i++) {
    run();
}
function phd($nomer, $jmlh){
    $headers = array();
    $headers[] = 'LANG: en';
    $headers[] = 'Content-Type: application/json; charset=UTF-8';
    $headers[] = 'Content-Length: 44';
    $headers[] = 'Host: phr.gms.digital';
    $headers[] = 'Connection: close';
    $headers[] = 'Accept-Encoding: gzip, deflate';

 //otp
$i = 0;
while($i < $jmlh) {
    $gtop = "{\"memberToken\":\"\",\"receivers\":\"$nomer\"}";
    $gotp = curl('https://phr.gms.digital/api/user/getOTP', $gtop, $headers);
    $gots = json_decode($gotp[1]); 
    if($gots == true ){
        echo "Success\n";
    }
  $i++;
  }
}
function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
    }