<?php
class dao_kat  {
    
    private $db;
    
    public function __construct()
    {
        $this -> db = new db(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    }

    public function select()
    {
        $sql = "select * from categories";
        $hasil = $this -> db -> proses($sql);
        $result = array();
        while($baris=mysqli_fetch_array($hasil)){
            $kat = new kat();
            $kat->set_id($baris['cat_id']);
            $kat->set_nama($baris['cat_name']);
            $kat->set_desc($baris['cat_description']);
            $result[]=$kat;
        }
        return $result;
    }

    public function simpan($nama, $desc)
    {
        $sql = "insert into categories(cat_name,cat_description) values('".$nama."','".$desc."')";
        $hasil = $this -> db -> proses($sql);
		return $hasil;
    }
        
}
?>    