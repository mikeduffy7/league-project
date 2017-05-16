<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LeagueWrap\Api;

class SummonerController extends Controller
{

    public function index(){
      return view('summoner_page');
    }


    public function show(Request $request){
      // initialize api
      // LeagueWrap\StaticApi::mount();
      // Api::setKey('RGAPI-839495b4-67ff-4335-ae88-5b6406d4114a');

      $mykey = 'RGAPI-839495b4-67ff-4335-ae88-5b6406d4114a';
      $api = new API($mykey);
      $api->attachStaticData();

      $summoner = $api->summoner();
                      // ->remember(3600);   MEMCACHED REQUIRED TO USE THIS

      $input = $request->input('summoner_name');

      $summoner_info = $summoner->info($input);

      $summoner_name = $summoner_info->name;

      $summoner_details = [];

      $summoenr_id = $summoner_info->id;
      $summoner_level = $summoner_info->summonerLevel;

      // $masteries = $summoner->masteryPages($id);
      // $runes = runePages($ryook);



      return view('summoner_page', [
        'name'=>$summoner_name,
        'level'=>$summoner_level]);
    }
}
