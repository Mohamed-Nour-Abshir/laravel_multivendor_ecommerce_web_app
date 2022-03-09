<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRecords = ['id'=>1, 'name'=>'super Admin', 'type'=>'superadmin', 'vendor_id'=>0, 'mobile'=>'0000003423','email'=>'admin@gmail.com', 'password'=>'$2y$10$VaScVRQtlDN/LbcS6WTe2OLr0T/dmAhjZUh259FuMzb.4BKPSYRpi', 'image'=>'','status'=>1];

        Admin::insert($adminRecords);
    }
}
