<?php

namespace Database\Seeders;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Pasien',
            'email' => 'pasien@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'pasien'
        ]);
        
        // Seeder Penyakit
        Penyakit::create([
            'kodepenyakit' => 'P001',
            'namapenyakit' => 'Karies Gigi',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P002',
            'namapenyakit' => 'Pulpitis',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P003',
            'namapenyakit' => 'Abses Gigi',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P004',
            'namapenyakit' => 'Abrasi Gigi',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P005',
            'namapenyakit' => 'Atrisi Gigi',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P006',
            'namapenyakit' => 'Erosi Gigi',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P007',
            'namapenyakit' => 'Gingivitis',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P008',
            'namapenyakit' => 'Periodintitis',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P009',
            'namapenyakit' => 'Frakur',
            'deskripsi' => 'deskripsi',
            'solusi' => 'solusi'
        ]);
        
        // Seeder Gejala
        Gejala::create([
            'kodegejala' => 'G001',
            'namagejala' => 'Gigi berlubang',
        ]);
        Gejala::create([
            'kodegejala' => 'G002',
            'namagejala' => 'Gigi terasa ngilu',
        ]);
        Gejala::create([
            'kodegejala' => 'G003',
            'namagejala' => 'Gigi sakit jika makan atau minum panas dan dingin',
        ]);
        Gejala::create([
            'kodegejala' => 'G004',
            'namagejala' => 'Gigi terasa sakit walaupun tidak makan atau minum',
        ]);
        Gejala::create([
            'kodegejala' => 'G005',
            'namagejala' => 'Demam',
        ]);
        Gejala::create([
            'kodegejala' => 'G006',
            'namagejala' => 'Gigi terasa sakit',
        ]);
        Gejala::create([
            'kodegejala' => 'G007',
            'namagejala' => 'Ada bagian gigi yang hilang atau terkikis',
        ]);
        Gejala::create([
            'kodegejala' => 'G008',
            'namagejala' => 'Gigi lebih menguning',
        ]);
        Gejala::create([
            'kodegejala' => 'G009',
            'namagejala' => 'Gusi atau pipi bengkak',
        ]);
        Gejala::create([
            'kodegejala' => 'G010',
            'namagejala' => 'Gigi goyang',
        ]);
        Gejala::create([
            'kodegejala' => 'G012',
            'namagejala' => 'Bentuk tepi gigi menjadi tampak tidak teratur dan kasar',
        ]);
        Gejala::create([
            'kodegejala' => 'G011',
            'namagejala' => 'Sering menggosok gigi dengan tekanan keras',
        ]);
        Gejala::create([
            'kodegejala' => 'G013',
            'namagejala' => 'Karang gigi banyak',
        ]);
        Gejala::create([
            'kodegejala' => 'G014',
            'namagejala' => 'Gusi sakit jika disentuh',
        ]);
        Gejala::create([
            'kodegejala' => 'G015',
            'namagejala' => 'Bagian gusi mudah berdarah',
        ]);
        Gejala::create([
            'kodegejala' => 'G016',
            'namagejala' => 'Merasakan tidak nyaman',
        ]);
        Gejala::create([
            'kodegejala' => 'G017',
            'namagejala' => 'Bau nafas tidak sedap',
        ]);
        Gejala::create([
            'kodegejala' => 'G018',
            'namagejala' => 'Nyeri bila malam hari',
        ]);
        Gejala::create([
            'kodegejala' => 'G019',
            'namagejala' => 'Bagian email gigi terkikis',
        ]);
        
        // Seeder Aturan
        Aturan::create([
            'id_penyakit' => '1',
            'daftargejala' => 'G001 - G002 - G003',
        ]);
        Aturan::create([
            'id_penyakit' => '2',
            'daftargejala' => 'G001 - G004 - G018',
        ]);
        Aturan::create([
            'id_penyakit' => '3',
            'daftargejala' => 'G001 - G005 - G006 - G009 - G010',
        ]);
        Aturan::create([
            'id_penyakit' => '4',
            'daftargejala' => 'G002 - G006 - G007 - G011',
        ]);
        Aturan::create([
            'id_penyakit' => '5',
            'daftargejala' => 'G002 - G007 - G019',
        ]);
        Aturan::create([
            'id_penyakit' => '6',
            'daftargejala' => 'G002 - G008 - G012',
        ]);
        Aturan::create([
            'id_penyakit' => '7',
            'daftargejala' => 'G009 - G013 - G014 - G015 - G017',
        ]);
        Aturan::create([
            'id_penyakit' => '8',
            'daftargejala' => 'G006 - G009 - G010 - G013 - G015 - G017',
        ]);
        Aturan::create([
            'id_penyakit' => '9',
            'daftargejala' => 'G006 - G007 - G010 - G016',
        ]);
    }
}
