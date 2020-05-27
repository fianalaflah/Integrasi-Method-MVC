<?php

class page_controller{
    public $dao_kat;
    
    public function __construct()
    {
        $this->dao_kat = new dao_kat();
    }

    public function invoke()
    {
        //print_r($_SERVER);
        $result=$this->dao_kat->select();
        if(isset($_SERVER['HTTP_ACCEPT'])){
            $type=$_SERVER['HTTP_ACCEPT'];
            if(strpos($type,'text/html')!== false){
                if((!isset($_GET['nama']))&&(!isset($_GET['deskripsi']))&&(!isset($_GET['simpan'])))
                {
                    include 'view/input.php';
                }
                else{
                    $hasil=$this->dao_kat->simpan($_GET['nama'],$_GET['deskripsi']);
                    $result=$this->dao_kat->select();
                    include 'view/cetak.php';
                }            
            }
        }
        
        if(isset($_SERVER['CONTENT_TYPE'])){
            $type1=$_SERVER['CONTENT_TYPE'];
            if(strpos($type1,'application/json')!== false){
				if((!isset($_POST['nama']))&&(!isset($_POST['deskripsi']))&&(!isset($_POST['simpan'])))
                {
					header('Content-Type: application/json');
					echo json_encode($result);
                }
				
			}
			if(strpos($type1,'application/x-www-form-urlencoded')!== false){
					if((isset($_POST['nama']))&&(isset($_POST['deskripsi'])))
					{
						$hasil=$this->dao_kat->simpan($_POST['nama'],$_POST['deskripsi']);
						if($hasil==1){
							header('Content-Type: application/json');
							echo json_encode('status simpan:berhasil');
						}
					}
				}
				
		}
	}
}
?>