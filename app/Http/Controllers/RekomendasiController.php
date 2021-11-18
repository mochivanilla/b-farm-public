<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RekomendasiController extends Controller
{

    private $params;

    public function index()
    {
        $url = \Config::get('api_config.get_all_rekomendasi');
        $rekomendasi = Http::get($url);

        $this->params['response'] = json_decode($rekomendasi, false);
        // $this->params['response'] = $rekomendasi;
        // return $this->params['response'];
        return view('rekomendasi.index', $this->params);
    }

    public function show($id)
    {
        $url = \Config::get('api_config.get_rekomendasi_by_id');
        $url = $url.'/'.$id;

        $rekomendasi = Http::get($url);

        $this->params['response'] = json_decode($rekomendasi, false);
        // $this->params['response'] = $rekomendasi;
        // return $this->params['response'];
        return view('rekomendasi.show', $this->params);
    }
}
