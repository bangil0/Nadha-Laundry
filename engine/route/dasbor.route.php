<?php

class Dasbor extends Route{

    public function __construct()
    {
    $this -> st = new state;
    
    }

    // public function cekUser()
    // {
    //     if(!ISSET($_SESSION['userSes'])){
    //         echo 'gak ada';
    //         // $this -> goto(HOMEBASE.'login');
    //         die();
    //     }else{
    //         echo 'gak ada';
    //         // $this -> goto(HOMEBASE.$to);
    //     }    
    // }

    public function index()
    {       
       $cu = $this -> cekSesi('userSes');
       if($cu == 'false'){
        $this -> goto(HOMEBASE.'login');
        die();
       }else{
        $this -> bind('/dasbor/index');
       }
    }

    public function logOut()
    {
        $this -> destses();
        $this -> goto(HOMEBASE.'login');
    }

}