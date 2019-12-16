<?php

use App\User;
use App\Maklon;
use App\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'PRO',
            'role'       => 'Admin',
            'email'     => 'adminpro@gmail.com',
            'password'  => Hash::make('12345678'),
            'remember_token' => Hash::make('adminnutrifood2')

        ]);

        // Project::create([

        //     'nama_project'=> 'Origuma soka',
        //     'category'=> 'Makanan',
        //     'sales_forecast'=> '1000000',
        //     'selling_price'=> '10.000',
        //     'brand'=> 'lmen',
        //     'gramasi'=> '125',
        //     'UOM'=> 'gram',
        //     'configuration'=> '15X2kg',
        //     'umur_simpan'=> '9 bulan',
        //     'gambaran_proses'=> 'ehehe',
        //     'priority_project'=> 'Normal',
        //     'timeline'=> 'index.html',
        //     'status_project'=> 0,

        // ]);

        Maklon::create([
            'nama_maklon'=> 'Drink oline',
            'nama_pic'=> 'Haidar lazuardi',
            'status'=> 'active',
            'alamat'=> 'bogor',
            'kontak'=>'098790090',
             'email'=>'drink@gmail.com',
            'fasilitas_produksi'=>'index.html',
            'kategori'=>'makanan',
            'skala_kategori'=>'Perusahaan',
            'berbadan_hukum'=>'PT',
            'website'=>'drink.com',
            'product_exist'=>'hello',
            'keterangan'=>'hello',
            ]);
    }
}
