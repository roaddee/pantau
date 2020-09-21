<?php

define("STATUS_AKTIF", serialize([
	'0' => 'Tidak Aktif',
	'1' => 'Aktif'
]));

define("JENIS_NOTIF", serialize([
	'pemberitahuan',
	'pengumuman',
	'peringatan'
]));

define("SERVER_NOTIF", serialize([
	'TrackSID'
]));

define("JENIS_PELANGGAN", serialize([
	1 => 'hosting saja',
	2 => 'update saja',
	3 => 'hosting dan update',
	4 => 'premium'
]));

define("PELAKSANA", serialize([
	1 => 'Herry Wanda',
	2 => 'Rudy Purwanto',
	3 => 'Mohammad Ihsan',
	99 => '- Tidak Perlu -'
]));

class Referensi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
  }

	public function list_ref($stat)
	{
		$list_ref = unserialize($stat);
		return $list_ref;
	}


}
?>