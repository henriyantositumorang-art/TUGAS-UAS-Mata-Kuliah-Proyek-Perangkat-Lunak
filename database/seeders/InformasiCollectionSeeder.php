<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\InformasiCollection;

class InformasiCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InformasiCollection::truncate();

        $data = [
            [
                'tanggal' => '2023-05-15',
                'keterangan' => 'MI 4964 DISC APP GM COLL PENGAJUAN SILAHKAN MELALUI EMAIL KE COLLECTION HELPDESK',
            ],
            [
                'tanggal' => '2022-07-25',
                'keterangan' => 'PERHATIAN.... Untuk pendaftaran mitra pada kolom under PT yang diisi adalah nik PT nya jangan nama pt nya, sehingga dapat diupload',
            ],
            [
                'tanggal' => '2022-07-25',
                'keterangan' => '==> Utk Upload Internal saat ini harus diisi juga Kolom Agreement, kolom Coll ID, kolom koordinator, kolom head (jika ada) ==> Utk Upload Mitra Semua Kolom Wajib di isi',
            ],
            [
                'tanggal' => '2022-02-25',
                'keterangan' => 'PENTING: selama PT di ficom masih aktif, maka cabanng masih dapat gunakan, untuk update PKS yang expired silahkan diemail saja akan dicek satu-satu ya',
            ],
            [
                'tanggal' => '2021-09-15',
                'keterangan' => 'dear all, harap dapat dikirimkan UPDATE PKS... list sesuai email dan subject balasannya "PKS UPDATE - tulis nama PT"',
            ],
            [
                'tanggal' => '2020-07-10',
                'keterangan' => 'Untuk Proses Upload ID Coll di FICOMS Gunakan Format Baru, ==> File Upload Harus menggunakan Format Excel 2010 (xlsx) <=== , Format Excel 97 - 2003 (xls) tidak dapat di gunakan untuk Proses upload',
            ],
            [
                'tanggal' => '2019-10-10',
                'keterangan' => 'Proses Pengajuan FPH WG yang sesuai dengan MI, akan di Proses Maks H+2, jika H+2 belum terproses mohon koordinasi ke Coll Helpdesk',
            ],
            [
                'tanggal' => '2019-04-23',
                'keterangan' => 'Agreement yang dapat di Upload di system FICOMS dan RMS adalah, hanya agreement yang aktif di AGING FICOMS dan RMS bulan berjalan, Pastikan Agreement yang sukses ditangani Proffcoll segera di Upload',
            ],
            [
                'tanggal' => '2018-09-06',
                'keterangan' => 'Pada saat upload mohon dicek kembali apakah NIK-nya masih aktif di ESS',
            ],
        ];

        foreach ($data as $item) {
            InformasiCollection::create($item);
        }
    }
}
