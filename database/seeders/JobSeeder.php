<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'image' => 'loker.jpg',
            'title' => 'Web Developer',
            'company' => 'Hucle Consulting',
            'location' => 'Jakarta Raya',
            'salary' => 'Rp 7.000.000 - Rp 12.000.000',
            'type' => 'Full-time',
            'requirements' => "1. S1 Teknik Informatika/Teknik Komputer\n2. Berpengalaman membuat program dengan framework Codeigniter (CI) dan Laravel\n3. Familiar dengan sistem kerja OOP (Object Oriented Programming)\n4. Menguasai PHP, MsSql, MySql, HTML, CSS, Javascript, JQuery\n5. Berpengalaman menggunakan GIT\n6. Mampu bekerja sama dalam tim",
            'posted_date' => '2023-11-15',
            'description' => 'Kirim CV dan Application letter ke: hucleconsultingnew@gmail.com maksimal 15 November 2023.'
        ]);

        Job::create([
            'image' => '2.jpg',
            'title' => 'Staff IT / Teknisi',
            'company' => 'Griyacom',
            'location' => 'Bandar Lampung',
            'salary' => 'Di atas Rp 3.000.000',
            'type' => 'Full-time',
            'requirements' => "1. Pria/wanita\n2. Pendidikan Minimal SMA/SMK\n3. Usia Minimal 18 Tahun\n4. Bisa kerja dengan team\n5. Diutamakan Memiliki Pengalaman\n\nPersyaratan lampiran:\n- Surat lamaran kerja\n- Foto Copy KTP & Kartu Keluarga\n- Foto Copy Ijazah terakhir\n- No. HP & E-mail (Aktif)\n- Foto Berwarna (Wajah saja + semua badan)",
            'posted_date' => '2018-03-31',
            'description' => 'Perusahaan yang bergerak di bidang teknologi informasi. Bawa/kirim langsung surat lamaran Anda ke Griyacom: Jl. Teuku Umar No.55 Kedaton, Bandar Lampung. Hubungi: (0721)780974.'
        ]);

        Job::create([
            'image' => '3.jpg',
            'title' => 'Marketing',
            'company' => 'Giggling Platypus Co.',
            'location' => 'Any City, ST 12345',
            'salary' => 'Kompetitif',
            'type' => 'Full-time',
            'requirements' => "- Lulusan SMK/Sederajat\n- Berpengalaman bekerja dibidang yang sama minimal 1 tahun\n- Bisa bekerja dengan tim\n- Bersedia ditempatkan diluar kota\n- Bekerja waktu penuh",
            'posted_date' => '2024-01-15',
            'description' => 'Bergabunglah bersama kami! Kirimkan CV & Portofolio Anda ke: hello@reallygreatsite.com. Walk in Interview: Rabu, 15 Jan 2024 mulai dari jam 08.00 WIB.'
        ]);
        Job::create([
            'image' => '4.jpg',
            'title' => 'Account Manager',
            'company' => 'Ruangguru',
            'location' => 'Grobogan',
            'salary' => 'Kompetitif',
            'type' => 'Full-time',
            'requirements' => "- Pendidikan minimal S1\n- Memiliki kemampuan negosiasi dan analisis yang baik\n- Berpengalaman dalam dunia Sales & Marketing minimal 2 tahun\n- Memiliki kepemimpinan yang baik\n- Tidak sedang berkuliah/terikat instansi\n- Sehat rohani & jasmani\n- Terbiasa menggunakan Ms Office & Google Drive\n- Memiliki laptop pribadi",
            'posted_date' => '2026-10-31',
            'description' => "Deskripsi Pekerjaan:\n- Melakukan negosiasi ke sekolah-sekolah\n- Monitoring kerja tim sales\n- Pekerjaan berorientasi target\n\nNarahubung WA: Joko Setyawan 081325162634\nKirim CV ke: bit.ly/amruangguru"
        ]);

        Job::create([
            'image' => '5.jpg',
            'title' => 'Admin',
            'company' => 'Shodwe Company',
            'location' => 'Remote / Fleksibel',
            'salary' => 'Kompetitif',
            'type' => 'Full-time',
            'requirements' => "- Mengelola data perusahaan\n- Mengatur dan mengelola jadwal rapat\n- Mengelola komunikasi internal\n- Mengelola surat masuk dan keluar\n- Menangani panggilan telepon dan kebutuhan\n- Menyusun laporan rutin perusahaan",
            'posted_date' => '2026-10-31',
            'description' => 'Kirimkan CV, dan surat lamaran ke hello@reallygreatsite.com'
        ]);
    }
}