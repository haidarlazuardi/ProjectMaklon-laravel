<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use DB;

class ProdevController extends Controller
{
    public function getData()

    {
     $client = new Client();
     $request = $client->get('https://dbbd4a4d.ngrok.io/api/pkp');
     $datanya = json_decode($request->getBody());
     foreach($datanya as $data){
        $id = $data->id;
        $revisi = $data->revisi;
        $projectName =$data->project_name;
        $category =$data->kategori_bpom;
        $salesForecast =$data->price;
        $sellingPrice =$data->selling_price;
        $brand =$data->id_brand;
        $gramasi =$data->price;
        $uom =$data->UOM;
        $configuration =$data->primer;
        $umurSimpan =$data->sampaiumur;
        $gambaranProses =$data->gambaran_proses;
        $priorityProject =$data->prioritas;
        $timeline =$data->catatan;
        $statusProject =$data->status_project;
        $idea =$data->idea;
        $gender =$data->gender;
        $dariUmur =$data->dariumur;
        $sampaiUmur =$data->sampaiumur;
        $uniqueness =$data->Uniqueness;
        $reason =$data->reason;
        $estimated =$data->Estimated;
        $launch =$data->launch;
        $years =$data->years;
        $tglLaunch =$data->tgl_launch;
        $competitive =$data->competitive;
        $competitor =$data->competitor;
        $aisle =$data->aisle;
        $productForm =$data->product_form;
        $bpom =$data->bpom;
        $olahan =$data->olahan;
        $akg =$data->akg;
        $primary = $data->primer;
        $secondary =$data->secondary;
        $tertiary =$data->tertiary;
        $preferedFlavour =$data->prefered_flavour;
        $productBenefits =$data->product_benefits;
        $mandatoryIngredient =$data->mandatory_ingredient;
        $price =$data->price;
        $statusData =$data->status_data;
        $pkpNumber =$data->pkp_number;
        $id_project =$data->id_project;
        $ket_no =$data->ket_no;
        $jenis =$data->jenis;
        $created_date =$data->created_date;
        $last_update =$data->last_update;
        $author =$data->author;
        $perevisi =$data->perevisi;
        $tujuanKirim =$data->tujuankirim;
        $tujuanKirim2 =$data->tujuankirim2;
        $userPenerima =$data->userpenerima;
        $userPenerima2 =$data->userpenerima2;
        $status_freeze =$data->status_freeze;
        $jangka =$data->jangka;
        $freezeDiaktifkan =$data->freeze_diaktifkan;
        $noteFreeze =$data->note_freeze;



        $projek = ([
            "id_pkp" => $id,
            "revisi" =>$revisi,
            "nama_project"=>$projectName,
            "category"=>$category,
            "sales_forecast"=>$salesForecast,
            "selling_price"=>$sellingPrice,
            "brand"=>$brand,
            "gramasi"=>$gramasi,
            "UOM"=>$uom,
            "configuration"=>$configuration,
            "umur_simpan"=>$umurSimpan,
            "gambaran_proses"=>$gambaranProses,
            "priority_project"=>$priorityProject,
            "timeline"=>$timeline,
            "status_project"=>$statusProject,
            "idea"=>$idea,
            "gender"=>$gender,
            "dari_umur"=>$dariUmur,
            "sampai_umur"=>$sampaiUmur,
            "uniqueness"=>$uniqueness,
            "reason"=>$reason,
            "estimated"=>$estimated,
            "launch"=>$launch,
            "years"=>$years,
            "tgl_launch"=>$tglLaunch,
            "competitive"=>$competitive,
            "competitor"=>$competitor,
            "aisle"=>$aisle,
            "product_form"=>$productForm,
            "bpom"=>$bpom,
            "olahan"=>$olahan,
            "akg"=>$akg,
            "primary"=>$primary,
            "secondary"=>$secondary,
            "tertiary"=>$tertiary,
            "prefered_flavour"=>$preferedFlavour,
            "product_benefits"=>$productBenefits,
            "mandatory_ingredient"=>$mandatoryIngredient,
            "price"=>$price,
            "status_data"=>$statusData,
            "pkp_number"=>$pkpNumber,
            "id_project"=>$id_project,
            "ket_no"=>$ket_no,
            "jenis"=>$jenis,
            "created_date"=>$created_date,
            "last_update"=>$last_update,
            "author"=>$author,
            "perevisi"=>$perevisi,
            "tujuan_kirim"=>$tujuanKirim,
            "tujuan_kirim2"=>$tujuanKirim2,
            "user_penerima"=>$userPenerima,
            "user_penerima2"=>$userPenerima2,
            "status_freeze"=>$status_freeze,
            "jangka"=>$jangka,
            "freeze_diaktifkan"=>$freezeDiaktifkan,
            "note_freeze"=>$noteFreeze,
            ]);


    $count = DB::table('project')->where('nama_project', $projectName)->count();

    if($count > 0){
        return redirect('/project');
    }
    else{

        DB::table('project')->insert($projek);

        return redirect('/project');
    }

     }

    //  return response()->json([$pkp]);
    }

}
