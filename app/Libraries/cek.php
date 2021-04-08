<?php

namespace App\Libraries;

use App\Controllers\BaseController;
use App\Libraries\defaultlibrary;

class cek extends BaseController
{
    public function __construct()
    {
        $this->deflib = new defaultlibrary();
    }
    public function email($cookie, $email)
    {
        $cookie = $cookie;
        $url = "https://mbasic.facebook.com/login/identify/?ctx=recover&search_attempts=0&alternate_search=0&toggle_search_mode=1";
        $ch = curl_init();
        $headers = array();
        $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
        $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        $headers[] = "Connection: keep-alive";
        $headers[] = "Upgrade-Insecure-Requests: 1";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->deflib->getua());
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result1 = curl_exec($ch);
        curl_close($ch);
        $lsd = $this->deflib->fetch_value($result1, 'name="lsd" value="', '"');
        $jazoest = $this->deflib->fetch_value($result1, 'name="jazoest" value="', '"');
        $did_submit = $this->deflib->fetch_value($result1, 'name="did_submit" value="', '"');
        $url2 = "https://mbasic.facebook.com/login/identify/?ctx=recover&search_attempts=1&alternate_search=1&show_friend_search_filtered_list=0&birth_month_search=0&city_search=0";
        $post = "lsd=$lsd&jazoest=$jazoest&email=$email&did_submit=Search&submit=$did_submit";
        $ch = curl_init();
        $headers = array();
        $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
        $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        $headers[] = "Connection: keep-alive";
        $headers[] = "Upgrade-Insecure-Requests: 1";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->deflib->getua());
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result2 = curl_exec($ch);
        curl_close($ch);
        if ($this->deflib->inStr($result2, "password")) {
            return 'valid';
        } else {
            return 'invalid';
        }
    }
}
