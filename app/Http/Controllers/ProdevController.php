<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ProdevController extends Controller
{
    public function getData()

    {
     $client = new Client();
     $request = $client->get('https://dbbd4a4d.ngrok.io/api/pkp');
     $datanya = json_decode($request->getBody());
     foreach($datanya as $data){
        $id = $data->id;
        $projectName =$data->project_name;
        $category = $data->Estimated;
        $salesForecast = $data->Estimated;
        $sellingPrice = $data->Estimated;
        $brand = $data->Estimated;
        $gramasi = $data->akg;
        $uom = $data->UOM;
        $configuration = $data->mandatory_ingredient;
        $umurSimpan = $data->Estimated;
        $gambaranProses = $data->Estimated;
        $priorityProject = $data->Estimated;
        $timeline = $data->Estimated;
        $projek = \App\Project::create([
            "id" => $id,
            "nama_project" => $projectName,
            "category" => $category,
            "sales_forecast" => $salesForecast,
            "selling_price" => $sellingPrice,
            "brand" => $brand,
            "gramasi" => $gramasi,
            "UOM" => $uom,
            "configuration" => $configuration,
            "umur_simpan" => $umurSimpan,
            "gambaran_proses" => $gambaranProses,
            "priority_project" => $priorityProject,
            "timeline" => $timeline,

        ]);
        $projek->save();
    }

    //  return response()->json([$pkp]);
    }

}
