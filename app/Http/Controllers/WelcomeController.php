<?php namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        $json = $this->getJsonData();
        return view('welcome.index')
            ->with('bio', $json['bio'])
            ->with('contacts', $json['contacts'])
            ->with('musics', $json['musics'])
            ->with('shops', $json['shops']);
    }

    private function getJsonData() {
        $str = file_get_contents('public/contents/data.json');
        $json = json_decode($str, true);
        return $json;
    }
}
