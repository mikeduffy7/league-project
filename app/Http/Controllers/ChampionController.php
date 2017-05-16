<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LeagueWrap\Api;

class ChampionController extends Controller
{
    public function index(){

      // initialize api
      $mykey = 'RGAPI-839495b4-67ff-4335-ae88-5b6406d4114a';
      $api = new API($mykey);
      $api->attachStaticData();

      // initialize champion class
      $champion_init = $api->champion();

      // list of every champion
      $champions = $champion_init->all()->champions;

      $champion_names = [];
      /*
        loop throgh champion objects, get the static data,
        and stuff the names of every champion into array
      */
      foreach($champions as $champion){
        $champion = $champion->championStaticData->name;

        $champion_names[] = $champion;
      }


      return view('champion_page',
        [
          'champion_names' => $champion_names
        ]);
    }
}
