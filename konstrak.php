<?php
class sekolah
{
	public $namasekolah;
	public $alamat;
	public $jenisjurusan;

	public function __construct($namasekolah, $alamat, $jenisjurusan)
	{
		$this->namasekolah = $namasekolah;
		$this->alamat = $alamat;
		$this->jenisjurusan = $jenisjurusan;
	}

	public function get_namasekolah()
	{
		return $this->namasekolah;
	}
	public function get_alamat()
	{
		return $this->alamat;
	}
	public function get_jenisjurusan()
	{
		return $this->jenisjurusan;
	}
}
?>