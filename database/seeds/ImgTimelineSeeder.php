<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ImgTimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('imgtimelines')->truncate();
        DB::table('imgtimelines')->insert([
            [
                'id' => 1,
                'thumbnail' => '1493569_351417164996387_524079409_o_m1arbz',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'thumbnail' => '11053130_1608767839359261_1769128936354867755_o_l4wazx',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'thumbnail' => '11731883_572964042841697_6589992666285815759_o_el9cph',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'thumbnail' => 'IMG_1156_vs7ddn',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'thumbnail' => 'IMG_1262_ntoocc',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'thumbnail' => 'IMG_1155_fsibvq',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'thumbnail' => 'IMG_1151_myjfo7',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'thumbnail' => 'IMG_1159_pyl3p6',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'thumbnail' => 'IMG_1461_mwa1wc',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'thumbnail' => 'IMG_1541_wcrsrt',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'thumbnail' => 'IMG_3062_gk63nd',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'thumbnail' => 'IMG_3047_gq746k',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'thumbnail' => 'IMG_3065_nc0v3j',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'thumbnail' => 'IMG_3066_oqra0b',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'thumbnail' => 'IMG_3027_hycbwb',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'thumbnail' => 'IMG_3016_dzuw4l',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'thumbnail' => 'IMG_3076_i5ewfx',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'thumbnail' => 'IMG_3075_ejh63f',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'thumbnail' => 'IMG_1545_zrcnz6',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'thumbnail' => 'IMG_3371_mlzwmo',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'thumbnail' => 'IMG_3400_d9uerx',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'thumbnail' => 'IMG_3437_pjucnk',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'thumbnail' => 'IMG_3404_k2xvvh',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'thumbnail' => 'IMG_3395_io0f50',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'thumbnail' => 'IMG_3452_v3yr7m',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'thumbnail' => 'IMG_3432_dvhz1j',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'thumbnail' => 'IMG_3454_ls66gt',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'thumbnail' => 'IMG_9603_p8ljb1',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'thumbnail' => 'IMG_9635_xx25sw',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'thumbnail' => 'IMG_9730_jpysp1',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
//30->60
            [
                'id' => 31,
                'thumbnail' => 'IMG_9699_kkjt6t',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'thumbnail' => 'IMG_9643_vhm2rj',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'thumbnail' => 'IMG_9692_dvkpcw',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'thumbnail' => 'MG_9748_jp3rvn',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'thumbnail' => 'IMG_9767_x9wee5',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'thumbnail' => 'IMG_9759_di3ysm',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'thumbnail' => 'IMG_9782_iitchl',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'thumbnail' => 'IMG_9792_kfjfbq',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'thumbnail' => '8P7A2110.CR2_t9vtwc',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'thumbnail' => '8P7A2108.CR2_ouviht',
                'thumbnail_by'=> 11,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'thumbnail' => 'IMG_0585_us3gyi',
                'thumbnail_by'=> 12,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'thumbnail' => 'IMG_0413_fgpzvx',
                'thumbnail_by'=> 12,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'thumbnail' => 'IMG_3376_blyqxk',
                'thumbnail_by'=> 12,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'thumbnail' => 'IMG_3458_byxjra',
                'thumbnail_by'=> 12,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'thumbnail' => 'IMG_1325_iacbmd',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'thumbnail' => 'IMG_1432_z8yweg',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'thumbnail' => 'IMG_1411_gl7k3f',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 48,
                'thumbnail' => 'IMG_1433_fsfzwx',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'thumbnail' => 'IMG_1489_vub98f',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'thumbnail' => 'IMG_1492_rkvnn9',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'thumbnail' => 'IMG_5430_f7mnlm',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 52,
                'thumbnail' => 'IMG_5443_zkkncc',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 53,
                'thumbnail' => 'IMG_5536_hhm5yh',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 54,
                'thumbnail' => 'IMG_5554_ghmm5j',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 55,
                'thumbnail' => 'IMG_5547_u6femy',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 56,
                'thumbnail' => 'IMG_5558_ipzo0p',
                'thumbnail_by'=> 13,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 57,
                'thumbnail' => '052_i5xcxu',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 58,
                'thumbnail' => '085_khjpdt',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 59,
                'thumbnail' => '057_r5ekgb',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 60,
                'thumbnail' => '054_kjblmn',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
//60->90
            [
                'id' => 61,
                'thumbnail' => '133_rajjyl',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 62,
                'thumbnail' => '144_subx7o',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 63,
                'thumbnail' => '143_ffusrw',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 64,
                'thumbnail' => '271_nuba04',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 65,
                'thumbnail' => '262_cnde1k',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 66,
                'thumbnail' => '287_lmni4x',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 67,
                'thumbnail' => 'IMG_9662_cucwch',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 68,
                'thumbnail' => '285_d0zcmq',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 69,
                'thumbnail' => 'IMG_9661_vk2sos',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 70,
                'thumbnail' => 'IMG_9755_mxocir',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 71,
                'thumbnail' => 'IMG_9745_fhqklw',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 72,
                'thumbnail' => 'IMG_9757_nzv4zu',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 73,
                'thumbnail' => 'IMG_9758_usg0ep',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 74,
                'thumbnail' => 'IMG_9741_oxsocb',
                'thumbnail_by'=> 14,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 75,
                'thumbnail' => 'IMG_1454_sywqee',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 76,
                'thumbnail' => '189_prg3mz',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 77,
                'thumbnail' => '7IMG_1539_l0peyn',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 78,
                'thumbnail' => '111_stlnqg',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 79,
                'thumbnail' => '121_fyztvn',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 80,
                'thumbnail' => 'IMG_1749_oybhjl',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 81,
                'thumbnail' => 'IMG_1674_xtanze',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 82,
                'thumbnail' => 'IMG_2529_e4mb9s',
                'thumbnail_by'=> 15,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 83,
                'thumbnail' => 'IMG_1749_oybhjl',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 84,
                'thumbnail' => 'IMG_1777_v2je8a',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 85,
                'thumbnail' => 'IMG_1754_cbhunn',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 86,
                'thumbnail' => 'IMG_1788_qc5wq9',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 87,
                'thumbnail' => 'IMG_1789_blhezo',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 88,
                'thumbnail' => 'IMG_2603_edat8w',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 89,
                'thumbnail' => 'IMG_2634_ap5sjw',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 90,
                'thumbnail' => 'IMG_2682_on8nyp',
                'thumbnail_by'=> 16,
                'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
            ],
            [
                'id'=>91,
                'thumbnail'=>'images_8_i71vzt',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>92,
                'thumbnail'=>'images_7_kjp8o6',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>93,
                'thumbnail'=>'images_9_br6rdj',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>94,
                'thumbnail'=>'images_10_n3snkr',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>95,
                'thumbnail'=>'images_12_qzvrlz',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>96,
                'thumbnail'=>'images_11_on27kz',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>97,
                'thumbnail'=>'phoi-giong-cho-cho-Pug-1_ibjwye',
                'thumbnail_by'=> 1,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>98,
                'thumbnail'=>'images_20_cwvxd0',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>99,
                'thumbnail'=>'images_19_jjhbng',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>100,
                'thumbnail'=>'images_21_zpfpoq',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>101,
                'thumbnail'=>'images_22_hqrmef',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>102,
                'thumbnail'=>'images_eerxrf',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>103,
                'thumbnail'=>'images_49_b6cndo',
                'thumbnail_by'=> 2,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>104,
                'thumbnail'=>'images_dpi4kv',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>105,
                'thumbnail'=>'images_1_wxed0s',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>106,
                'thumbnail'=>'images_2_nmp0sg',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>107,
                'thumbnail'=>'images_3_p80dcj',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>108,
                'thumbnail'=>'images_4_biku6h',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>109,
                'thumbnail'=>'images_5_oab5ih',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>110,
                'thumbnail'=>'images_6_khpwfh',
                'thumbnail_by'=> 3,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>111,
                'thumbnail'=>'images_tgqyad',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>112,
                'thumbnail'=>'images_pv5p5v',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>113,
                'thumbnail'=>'images_f2asor',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>114,
                'thumbnail'=>'images_nf4y6r',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>115,
                'thumbnail'=>'images_kucxtt',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>116,
                'thumbnail'=>'images_lcpii5',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>117,
                'thumbnail'=>'images_taeaay',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>118,
                'thumbnail'=>'images_ncqcn4',
                'thumbnail_by'=> 4,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>119,
                'thumbnail'=>'images_28_exmtr5',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>120,
                'thumbnail'=>'images_25_otwax9',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>121,
                'thumbnail'=>'images_24_ulzdbr',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>122,
                'thumbnail'=>'images_26_lk1jn7',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>123,
                'thumbnail'=>'images_27_uxuuxy',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>124,
                'thumbnail'=>'images_29_ml9v2x',
                'thumbnail_by'=> 5,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>125,
                'thumbnail'=>'images_15_coiuch',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>126,
                'thumbnail'=>'images_14_bhxq8e',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>127,
                'thumbnail'=>'images_13_eufdn1',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>128,
                'thumbnail'=>'images_18_ck3nlv',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>129,
                'thumbnail'=>'images_16_qzgyxm',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>130,
                'thumbnail'=>'images_17_vvrvde',
                'thumbnail_by'=> 6,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>131,
                'thumbnail'=>'images_31_hhuk1e',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>132,
                'thumbnail'=>'images_33_ilfqxc',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>133,
                'thumbnail'=>'images_30_algqf1',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>134,
                'thumbnail'=>'images_34_zu3g0h',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>135,
                'thumbnail'=>'images_32_c2yokn',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>136,
                'thumbnail'=>'images_35_ojsnju',
                'thumbnail_by'=> 7,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>137,
                'thumbnail'=>'images_38_cog5lw',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>138,
                'thumbnail'=>'images_42_v72vcg',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>139,
                'thumbnail'=>'images_37_wew1u5',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>140,
                'thumbnail'=>'images_36_sbybjj',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>141,
                'thumbnail'=>'images_39_sy9knf',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>142,
                'thumbnail'=>'images_40_tg812h',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>143,
                'thumbnail'=>'images_41_lahvq3',
                'thumbnail_by'=> 8,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>144,
                'thumbnail'=>'images_49_b6cndo',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>145,
                'thumbnail'=>'images_46_pnzdh7',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>146,
                'thumbnail'=>'images_44_a8z6rk',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>147,
                'thumbnail'=>'images_48_vn2vew',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>148,
                'thumbnail'=>'images_47_gwiysz',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>149,
                'thumbnail'=>'images_43_c0gv1f',
                'thumbnail_by'=> 9,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>150,
                'thumbnail'=>'images_niotnl',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>151,
                'thumbnail'=>'images_htctyn',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>152,
                'thumbnail'=>'images_c0qjb4',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>153,
                'thumbnail'=>'images_sydrdf',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>154,
                'thumbnail'=>'images_zjo4ei',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>155,
                'thumbnail'=>'images_leobjh',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>156,
                'thumbnail'=>'images_inqf7z',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id'=>157,
                'thumbnail'=>'images_yaxql9',
                'thumbnail_by'=> 10,
                'created_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
