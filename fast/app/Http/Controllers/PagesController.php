<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller{
        public function getIndex(){
            return view('pages/welcome');
        }
        
        public function getContact(){
            return view('pages/contact');
        }
        
        public function getAbout(){
            $address = "Galle Rd, Colombo.";
            $phone = "0112225222";
            $email = "fastsrilanka@gmail.com";
            
            return view('pages/about')->withAddress($address)->withPhone($phone)->withEmail($email);
        }
        
        public function getPackages(){
            return view('pages/packages');
        }
        
        public function getServices(){
            return view('pages/services');
        }
    }
        
?>