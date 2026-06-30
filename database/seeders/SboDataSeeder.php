<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SboData;

class SboDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SboData::truncate();

        $data = [
            [
                'bucket' => 'Current',
                'os_awal_acc' => 450, 'os_awal_os' => 25296227000,
                'os_akhir_acc' => 423, 'os_akhir_os' => 22769202000, 'os_akhir_pct_acc' => 61.48, 'os_akhir_pct_os' => 55.30,
                'flow_down_acc' => 46, 'flow_down_os' => 3019080000, 'flow_down_pct_acc' => 10.22, 'flow_down_pct_os' => 11.93
            ],
            [
                'bucket' => 'OVD 1-30',
                'os_awal_acc' => 131, 'os_awal_os' => 9905598700,
                'os_akhir_acc' => 124, 'os_akhir_os' => 9117109300, 'os_akhir_pct_acc' => 18.02, 'os_akhir_pct_os' => 22.14,
                'flow_down_acc' => 38, 'flow_down_os' => 2904085800, 'flow_down_pct_acc' => 29.01, 'flow_down_pct_os' => 29.32
            ],
            [
                'bucket' => 'OVD 31-60',
                'os_awal_acc' => 76, 'os_awal_os' => 5650316997,
                'os_akhir_acc' => 74, 'os_akhir_os' => 5213750103, 'os_akhir_pct_acc' => 10.76, 'os_akhir_pct_os' => 12.66,
                'flow_down_acc' => 29, 'flow_down_os' => 2137109997, 'flow_down_pct_acc' => 38.16, 'flow_down_pct_os' => 37.82
            ],
            [
                'bucket' => 'OVD 61-90',
                'os_awal_acc' => 27, 'os_awal_os' => 1540167000,
                'os_akhir_acc' => 25, 'os_akhir_os' => 1492161000, 'os_akhir_pct_acc' => 3.63, 'os_akhir_pct_os' => 3.62,
                'flow_down_acc' => 16, 'flow_down_os' => 935493000, 'flow_down_pct_acc' => 59.26, 'flow_down_pct_os' => 60.74
            ],
            [
                'bucket' => 'OVD 91-120',
                'os_awal_acc' => 17, 'os_awal_os' => 1126685000,
                'os_akhir_acc' => 17, 'os_akhir_os' => 1091190000, 'os_akhir_pct_acc' => 2.47, 'os_akhir_pct_os' => 2.65,
                'flow_down_acc' => 9, 'flow_down_os' => 537575000, 'flow_down_pct_acc' => 52.94, 'flow_down_pct_os' => 47.71
            ],
            [
                'bucket' => 'OVD 121-150',
                'os_awal_acc' => 15, 'os_awal_os' => 772080000,
                'os_akhir_acc' => 15, 'os_akhir_os' => 756105000, 'os_akhir_pct_acc' => 2.18, 'os_akhir_pct_os' => 1.84,
                'flow_down_acc' => 13, 'flow_down_os' => 705855000, 'flow_down_pct_acc' => 86.67, 'flow_down_pct_os' => 91.42
            ],
            [
                'bucket' => 'OVD 151-180',
                'os_awal_acc' => 13, 'os_awal_os' => 830560000,
                'os_akhir_acc' => 10, 'os_akhir_os' => 734065000, 'os_akhir_pct_acc' => 1.45, 'os_akhir_pct_os' => 1.78,
                'flow_down_acc' => 8, 'flow_down_os' => 614265000, 'flow_down_pct_acc' => 61.54, 'flow_down_pct_os' => 73.96
            ],
            [
                'bucket' => 'OVD 1+',
                'os_awal_acc' => 279, 'os_awal_os' => 19825407697,
                'os_akhir_acc' => 265, 'os_akhir_os' => 18404380403, 'os_akhir_pct_acc' => 38.52, 'os_akhir_pct_os' => 44.70,
                'flow_down_acc' => 113, 'flow_down_os' => 7834383797, 'flow_down_pct_acc' => 40.50, 'flow_down_pct_os' => 39.52
            ],
            [
                'bucket' => 'OVD 30+',
                'os_awal_acc' => 148, 'os_awal_os' => 9919808997,
                'os_akhir_acc' => 141, 'os_akhir_os' => 9287271103, 'os_akhir_pct_acc' => 20.49, 'os_akhir_pct_os' => 22.56,
                'flow_down_acc' => 75, 'flow_down_os' => 4930297997, 'flow_down_pct_acc' => 50.68, 'flow_down_pct_os' => 49.70
            ],
            [
                'bucket' => 'OVD 60+',
                'os_awal_acc' => 72, 'os_awal_os' => 4269492000,
                'os_akhir_acc' => 67, 'os_akhir_os' => 4073521000, 'os_akhir_pct_acc' => 9.74, 'os_akhir_pct_os' => 9.89,
                'flow_down_acc' => 46, 'flow_down_os' => 2793188000, 'flow_down_pct_acc' => 63.89, 'flow_down_pct_os' => 65.42
            ],
            [
                'bucket' => 'OVD 90+',
                'os_awal_acc' => 45, 'os_awal_os' => 2729325000,
                'os_akhir_acc' => 42, 'os_akhir_os' => 2581360000, 'os_akhir_pct_acc' => 6.10, 'os_akhir_pct_os' => 6.27,
                'flow_down_acc' => 30, 'flow_down_os' => 1857695000, 'flow_down_pct_acc' => 66.67, 'flow_down_pct_os' => 68.06
            ],
            [
                'bucket' => 'OVD 180+',
                'os_awal_acc' => 0, 'os_awal_os' => 0,
                'os_akhir_acc' => 0, 'os_akhir_os' => 0, 'os_akhir_pct_acc' => 0.00, 'os_akhir_pct_os' => 0.00,
                'flow_down_acc' => 0, 'flow_down_os' => 0, 'flow_down_pct_acc' => 0.00, 'flow_down_pct_os' => 0.00
            ],
            [
                'bucket' => 'Current+Sales',
                'os_awal_acc' => 450, 'os_awal_os' => 25296227000,
                'os_akhir_acc' => 423, 'os_akhir_os' => 22769202000, 'os_akhir_pct_acc' => 61.48, 'os_akhir_pct_os' => 55.30,
                'flow_down_acc' => 46, 'flow_down_os' => 3019080000, 'flow_down_pct_acc' => 10.22, 'flow_down_pct_os' => 11.93
            ],
            [
                'bucket' => 'Total A/R---->',
                'os_awal_acc' => 729, 'os_awal_os' => 45121634697,
                'os_akhir_acc' => 688, 'os_akhir_os' => 41173582403, 'os_akhir_pct_acc' => 100.00, 'os_akhir_pct_os' => 100.00,
                'flow_down_acc' => 159, 'flow_down_os' => 10853463797, 'flow_down_pct_acc' => 21.81, 'flow_down_pct_os' => 24.05
            ],
        ];

        foreach ($data as $item) {
            SboData::create($item);
        }
    }
}
