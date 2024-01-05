<?php

namespace App\Http\Controllers;


class PagesController extends Controller {

        public function getIndex(){
            

            $first = 'Kristofers';
            $last = 'Rozevskis';

            $fullName = $first. " " . $last;
            $email = "epast@epast.com";

            $data = [];
            $data['email'] = $email;
            $data['fullName'] = $fullName;
        return view('pages.welcome')->withData($data);
        }
        public function getAbout(){
            return view('pages.about');
        }
        public function getContact(){
            return view('pages.contact');
        }

     
}

?>