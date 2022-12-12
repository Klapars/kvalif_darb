<?php
namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Controllers;
class ScraperController extends Controller

{
    private $results = array();
    public function scraper()
    {
        $client = new Client();
        $url = 'https://www.worldometers.info/coronavirus/';
        $page = $client->request('GET', $url);
       //echo "<pre>";
       //print_r($page);

       //echo $page->filter( selector: '.maincounter-number')->text();
       $page->filter( selector: '#maincounter-wrap')->each(function($item){
        $this-> results[$item->filter('h1')->text()]=$item->filter('maincounter-number')->text();
       });

       return $this->results;
        //return view(view:'scraper');
    }
}
?>