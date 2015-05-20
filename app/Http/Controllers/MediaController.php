<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class MediaController extends Controller {

    private $disk;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public static function getImages(){

        $images = [storage_path() . "/imgs/DrivingHelper.png"];//, "imgs/FindMyBurger.png", "imgs/GuideTour.jpeg", "imgs/SeriesTime.png", "imgs/SimpleExpensesMananger.png
        return $images;
    }

}