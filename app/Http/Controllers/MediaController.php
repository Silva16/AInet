<?php namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;

class MediaController extends Controller {

    private $disk;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $imgs = self::getImages();

    }

    public static function getImages(){

        $images = [storage_path() . "/app/imgs/DrivingHelper.png"];//, "imgs/FindMyBurger.png", "imgs/GuideTour.jpeg", "imgs/SeriesTime.png", "imgs/SimpleExpensesMananger.png
        return $images;
    }

    public static function getImage($filename) {

        // Append the filename to the path where our images are located
        $path = storage_path() . '/app/imgs/' . $filename;

        // Initialize an instance of Symfony's File class.
        // This is a dependency of Laravel so it is readily available.
        $file = new \Symfony\Component\HttpFoundation\File\File($path);

        // Make a new response out of the contents of the file
        // Set the response status code to 200 OK
        $response = \Illuminate\Support\Facades\Response::make(
            $file::get($path),
            200
        );

        // Modify our output's header.
        // Set the content type to the mime of the file.
        // In the case of a .jpeg this would be image/jpeg
        $response->header(
            'Content-type',
            $file->getMimeType()
        );

        // We return our image here.
        return $response;
    }

}