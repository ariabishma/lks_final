<?php
namespace Core;

class BaseController{
    private $data;
    public function view($file,$data=[])
    {
        $this->data = $data;
        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        return include BASE_DIR."/Views/".$file.".bsm.php";
    }

    public function component($file,$data=[])
    {
       
        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        foreach ($this->data as $key => $value) {
            ${$key} = $value;
        }

        return include BASE_DIR."/Views/components/".$file.".bsm.php";
    }

    public function asset($asset)
    {
        echo BASE_URL."/assets/".$asset;
    }

    public function request($key)
    {
        return mysqli_real_escape_string(new \Mysqli("localhost","root","","lks"),$_REQUEST[$key]);
    }
}