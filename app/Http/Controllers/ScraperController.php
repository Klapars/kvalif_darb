<?php

namespace App\Http\Controllers;
use Goutte\Client as Goutte;

use Illuminate\Http\Request;
use mysqli;

class ScraperController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // create a new Goutte client
        $client = new Goutte();

        // send a request to the desired URL
        $crawler = $client->request('GET', 'https://www.floorball.lv/ajax/ajax_chempionats_tabula_mini.php');
        // select the table you want to scrape
        $json = $crawler->filter('p')->text();
        // // initialize an empty array to hold the table data
        // $data = array();
        // // // iterate over the rows in the table
        // $json->filter('p')->each(function($row) use (&$data) {
        // // // initialize an empty array to hold the row data
        // $rowData = array();
        // // iterate over the cells in the row
        // $row->filter('td, th')->each(function($cell) use (&$rowData) {
        //     // add the cell text to the row data array
        //     $rowData[] = $cell->text();
        // });
        // // add the row data to the table data array
        // $data[] = $rowData;
        // });
        //print the table data array
        dd(json_decode($json)->aaData);
        return view('scraper');
    }
}




