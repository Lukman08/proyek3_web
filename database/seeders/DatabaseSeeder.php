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
            'deskripsi' => 'Karies gigi disebabkan oleh plak gigi dan konsumsi gula. Gejalanya termasuk nyeri gigi, sensitivitas, dan lubang pada gigi. Pencegahan meliputi kebersihan mulut, mengurangi gula, dan perawatan gigi.',
            'solusi' => 'Untuk mencegah karies gigi, jaga kebersihan mulut dengan menyikat gigi, menggunakan benang gigi, dan berkumur. Kurangi gula, kunjungi dokter gigi secara rutin.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P002',
            'namapenyakit' => 'Pulpitis',
            'deskripsi' => 'Pulpitis adalah  peradangan pulpa gigi akibat infeksi bakteri. Gejalanya: nyeri gigi, sensitivitas suhu/tekanan, pembengkakan. Perawatan segera penting untuk mencegah komplikasi.',
            'solusi' => 'Perawatan Pulpitis tergantung pada jenisnya. Untuk Pulpitis reversibel, penambalan gigi. Untuk Pulpitis ireversibel, perawatan saluran akar atau pencabutan gigi. Konsultasikan dengan dokter gigi.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P003',
            'namapenyakit' => 'Abses Gigi',
            'deskripsi' => 'Abses gigi: infeksi bakteri, nyeri, pembengkakan. Penyebab: kerusakan gigi/gusi, infeksi akar. Cari perawatan medis. Perawatan: drainase, antibiotik, akar/pencabutan. Kebersihan mulut, pemeriksaan gigi rutin, hindari abses.',
            'solusi' => 'Kunjungi dokter gigi segera untuk abses gigi. Perawatan meliputi evaluasi, antibiotik, drainase abses, atau perawatan akar gigi. Jangan abaikan abses gigi, cari perawatan untuk mencegah komplikasi dan meredakan nyeri.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P004',
            'namapenyakit' => 'Abrasi Gigi',
            'deskripsi' => 'Abrasi gigi terjadi karena gesekan berulang dengan faktor eksternal. Solusinya: gunakan sikat gigi lembut, teknik menyikat yang benar, hindari gesekan berlebihan. Perawatan meliputi penambalan atau lapisan pelindung gigi.',
            'solusi' => 'Solusi untuk abrasi gigi meliputi: gunakan sikat gigi lembut, sikat gigi dengan gerakan lembut, hindari menggigit benda keras, dan berkonsultasi dengan dokter gigi untuk perawatan tambahan.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P005',
            'namapenyakit' => 'Atrisi Gigi',
            'deskripsi' => 'Atrisi gigi adalah pengikisan lapisan gigi akibat gesekan berulang. Penyebabnya termasuk menggeretakkan gigi, menggigit benda keras, atau ketidakseimbangan gigi. Perawatannya melibatkan teknik sikat gigi yang benar dan konsultasi dengan dokter gigi.',
            'solusi' => 'Solusi untuk atrisi gigi meliputi identifikasi dan penanggulangan penyebab utama, penggunaan pelindung gigi, dan perawatan restorasi gigi. Jaga kebersihan mulut, makan sehat, dan konsultasikan dengan dokter gigi.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P006',
            'namapenyakit' => 'Erosi Gigi',
            'deskripsi' => 'Erosi gigi terjadi akibat asam pada makanan/minuman asam. Pencegahan: kurangi asupan asam, hindari menyikat gigi setelahnya. Perawatan: penambalan atau pelindung gigi. Konsultasikan dengan dokter gigi.',
            'solusi' => 'Solusi erosi gigi meliputi mengurangi makanan/minuman asam, sikat gigi lembut, hindari sikat gigi setelah asam, pasta gigi fluoride, dan perawatan gigi dokter.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P007',
            'namapenyakit' => 'Gingivitis',
            'deskripsi' => 'Gingivitis adalah peradangan gusi akibat penumpukan plak bakteri. Pencegahan melibatkan kebersihan mulut yang baik dengan menyikat gigi, menggunakan benang gigi, dan berkumur dengan mouthwash antiseptik. Kunjungan rutin ke dokter gigi penting.',
            'solusi' => 'Solusi untuk gingivitis: sikat gigi dan gunakan benang gigi secara teratur, hindari merokok, dan kunjungi dokter gigi.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P008',
            'namapenyakit' => 'Periodintitis',
            'deskripsi' => 'Periodontitis adalah penyakit gusi serius akibat penumpukan plak bakteri. Gejalanya: gusi merah, bengkak, berdarah, gigi longgar. Perawatan: pembersihan kantung gusi, penghalusan akar gigi, perubahan gaya hidup. Konsultasikan dengan dokter gigi.',
            'solusi' => 'Solusi periodontitis adalah sikat gigi, gunakan benang gigi, berkumur dengan mouthwash antiseptik, kurangi gula, kunjungi dokter gigi.'
        ]);
        Penyakit::create([
            'kodepenyakit' => 'P009',
            'namapenyakit' => 'Frakur',
            'deskripsi' => 'Fraktur gigi terjadi saat gigi pecah atau retak akibat trauma atau kerusakan sebelumnya. Gejalanya termasuk nyeri, sensitivitas gigi, dan gigi tampak pecah. Penanganannya melibatkan penambalan, mahkota gigi, perawatan akar gigi, atau pencabutan gigi. Konsultasikan segera dengan dokter gigi.',
            'solusi' => 'Solusi untuk fraktur gigi tergantung pada tingkat keparahan fraktur. Jika fraktur gigi ringan, dokter gigi mungkin melakukan perawatan restoratif seperti penambalan atau pemasangan mahkota gigi.'
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