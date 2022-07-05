<?php

$headers = array();
$headers[] = 'Cookie: sss=1; sp_m=id; __Host-sp_csrf_sid=e26fffd6910886673e66825b62f88fc1bce9f24147c67c61c5557f9859c03bba; sp_t=d4f84eb6-c72d-46c1-abcc-26ea2c2465d9; sp_new=1; sp_landing=https%3A%2F%2Fwww.spotify.com%2Fid%2Fsignup%2F; sp_landingref=https%3A%2F%2Faccounts.spotify.com%2F; sp_adid=63203a50-f413-4221-a95f-317f1cc8606d; OptanonConsent=isIABGlobal=false&datestamp=Wed+Jul+06+2022+01%3A14%3A11+GMT%2B0700+(Indochina+Time)&version=6.26.0&hosts=&landingPath=NotLandingPage&groups=s00%3A1%2Cf00%3A1%2Cm00%3A1%2Ct00%3A1%2Ci00%3A1%2Cf02%3A1%2Cm02%3A1%2Ct02%3A1&AwaitingReconsent=false&geolocation=ID%3BJT; _gcl_au=1.1.2132990505.1657042343; _ga_S35RN5WNT2=GS1.1.1657042342.1.1.1657044858.4; _ga=GA1.2.812179292.1657042343; _scid=57e9f593-1d14-45eb-b90e-2c519617efae; _cs_c=0; _cs_id=7ba2fa0f-956e-af9f-bda0-2cc9979bcbd8.1657042343.1.1657044851.1657042343.1.1691206343287; _cs_s=19.5.1.1657046651174; _gid=GA1.2.67619082.1657042345; _fbp=fb.1.1657042345681.81306280; _sctr=1|1657040400000; _fbc=fb.1.1657042379131.IwAR0PRJLlRR6f6sOTA1vax4aRHxDW_VOoYa00PVJ5Ce_e6xgSN-Sd1AWNuQM; _rdt_uuid=1657042385295.b1f11fb0-e88d-490d-aff4-033a33d149ed; OptanonAlertBoxClosed=2022-07-05T17:33:24.547Z; checkout-sdk-service-otc=; spsess=S1US5dA1myDfzCg85y0AVW0HsLIrOR8EH8a2ABcgvvwyoXRn; sp_usid=b28332d8-7894-45b8-a2d4-02b11d90027d; sp_ab=%7B%222019_04_premium_menu%22%3A%22control%22%7D; spot=%7B%22t%22%3A1657042530%2C%22m%22%3A%22id%22%2C%22p%22%3Anull%7D; spAnalytics_id=eyJkZXZpY2VJZCI6Ijg2OTg0ODg2OThmOWIyMDM4OWNjNTFiNmQ2NWZlNWMwIiwidXNlcklkIjpudWxsfQ==; amplitude_id=eyJkZXZpY2VJZCI6ImY3ZGUwODU2N2NhMmMyZWMzMTIxZWEyZTQ2MmMxODllIiwidXNlcklkIjpudWxsfQ==; ki_t=1657042539582%3B1657042539582%3B1657044830702%3B1%3B5; ki_r=aHR0cHM6Ly9hY2NvdW50cy5zcG90aWZ5LmNvbS8%3D; _tt_enable_cookie=1; _ttp=0887db87-426f-4735-bb46-b05b2123a933; _pin_unauth=dWlkPU56TXhOamczTm1VdFlUTTBaQzAwWVdFMUxXSTROak10T0RkbU1qQXdaV0ppWXpVMA; _clck=5bp999|1|f2w|0; _clsk=sqdznn|1657043495599|3|1|b.clarity.ms/collect; _ga_ZWG1NSHWD8=GS1.1.1657044806.2.1.1657044840.0; _uetsid=e58e9110fc8811ec807bab4303057086; _uetvid=e58e9ff0fc8811ec85386d2a61e38de6; _cs_mk_ga=0.7238176074131519_1657044294308; _gat_UA-5784146-31=1; _gat=1; sp_dc=AQB1h-SRa6KYYUOQzd3W3w4RRa0ASaFKYTTedRENwYRukEtSG0_h8zkzMosLEd_L855vdhozrEORIYgemiOISn1_GUV6LVlIDdd11d7NGpXAUGmbXkDs_Fl4jB_52OYiCa0VMq3kPMtDYXQx84DHGzb0czfQnMLv; sp_key=5f122d3e-93f8-4220-b252-783c58dc10ed; _gali=checkout_submit';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0';
$headers[] = 'X-Csrf-Token: 013acda71954d61308e41f3308ff9c79fe7b35435431363537303434383531353137';
$headers[] = 'Content-Type: multipart/form-data; boundary=---------------------------';

echo color("blue", "[+]") . " Spotify Auto Get Trx Rp.800 - By: GidhanB.A\n\n";

$qty = 1;
while (true) {
    $gas = curl('https://www.spotify.com/id/api/payment-sdk/prepare/premium/?clientName=premium-www-checkout&clientContext=premium-checkout&version=4.8.0', '-----------------------------
Content-Disposition: form-data; name="checkout.paymentProviderId"

billing_boku_gopay_rpsp
-----------------------------
Content-Disposition: form-data; name="checkout.checkoutViewId"

88407268-5dff-4f43-8940-8869521a27fe
-----------------------------
Content-Disposition: form-data; name="checkout.attemptId"

ff99913a-01d2-467a-aee4-ee65d0c187d1
-----------------------------
Content-Disposition: form-data; name="checkout.flowId"

ca451ce1-d59f-4f60-8dcf-28bd205b49c9
-----------------------------
Content-Disposition: form-data; name="checkout.country"

ID
-----------------------------
Content-Disposition: form-data; name="checkout.returnUrl"

https://www.spotify.com/id/purchase/continue/purchase/premium_mini_7d/?orderReference={checkoutId}&offerId=premium-mini-7d
-----------------------------
Content-Disposition: form-data; name="checkout.originUrl"

https://www.spotify.com/id/purchase/offer/2022-artist-mini-premium-mini-7d/?campaign=artist&fbclid=IwAR0PRJLlRR6f6sOTA1vax4aRHxDW_VOoYa00PVJ5Ce_e6xgSN-Sd1AWNuQM
-----------------------------
Content-Disposition: form-data; name="checkout.offerCountryProductId"

default:premium-mini-7d:3
-----------------------------
Content-Disposition: form-data; name="checkout.offerUuid"

aa72c91c-7e0a-463e-b026-1ce46b9b3b5d
-----------------------------
Content-Disposition: form-data; name="checkout.offerKey"

premium_mini_7d
-----------------------------
Content-Disposition: form-data; name="checkout.productDescription"

Spotify 7 hari
-----------------------------
Content-Disposition: form-data; name="checkout.isChangeDetails"

false
-------------------------------', $headers);

    if (strpos($gas[1], '"success":true')) {
        $id = get_between($gas[1], 'checkoutidentify/', '/buy.js');
        $boku = array();
        $boku[] = 'Cookie: SD-rememberUserInfo=0';
        $boku[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0';
        $boku[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';

        $gpy = curl("https://buy2.boku.com/transaction/$id/purchase", 'network=id-gopay&remember-msisdn=0&deviceFingerprint=undefined', $boku);
        if (strpos($gpy[1], 'PROGRESS')) {
            $qr = curl("https://buy.boku.com/checkout-aux/receive-carrier-flow/transaction-status?transaction-id=$id", null, $boku);
            if (strpos($qr[1], 'url')) {
                $qr = str_replace("qr-code?width=null&height=null", "", urldecode(json_decode($qr[1])->url));
                echo color("green", "[$qty]") . " Success => $qr\n";
                file_put_contents("urlpayspotify.txt", "$qr\n", FILE_APPEND);
                $qty++;
            } else {
                echo color("red", "[$qty]") . " Error!\n";
            }
        } else {
            die($gpy[1]);
        }
    } else {
        die($gas[1]);
    }
}

function curl($url, $post, $headers, $follow = false, $method = null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    if ($follow == true) curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if ($method !== null) curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    if ($headers !== null) curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    if ($post !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($ch);
    $header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
    $cookies = array();
    foreach ($matches[1] as $item) {
        parse_str($item, $cookie);
        $cookies = array_merge($cookies, $cookie);
    }
    return array(
        $header,
        $body,
        $cookies
    );
}

function get_between($string, $start, $end)
{
    $string = " " . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function color($color, $text)
{
    $arrayColor = array(
        'grey'      => '1;30',
        'red'       => '1;31',
        'green'     => '1;32',
        'yellow'    => '1;33',
        'blue'      => '1;34',
        'purple'    => '1;35',
        'nevy'      => '1;36',
        'white'     => '1;0',
    );
    return "\033[" . $arrayColor[$color] . "m" . $text . "\033[0m";
}
