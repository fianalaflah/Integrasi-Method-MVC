<?php
class kat 
{
    public $id;
    public $nama;
    public $desc;
    
    public function get_id() {
        return $this->id;
    }
    
    public function set_id($id_baru)  {
        $this->id = $id_baru;
    }

    public function get_nama() {
        return $this->nama;
    }
    
    public function set_nama($nama_baru)  {
        $this->nama = $nama_baru;
    }
    public function get_desc() {
        return $this->desc;
    }
    
    public function set_desc($desc_baru)  {
        $this->desc = $desc_baru;
    }
}
?>