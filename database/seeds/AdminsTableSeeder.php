<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
             ['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'8700807259','email'=>'admin@admin.com','password'=>'$2y$10$9jPgTtT0AvXGU5Jtwlw4s.yoQkf8a/Oh7QK6.kZPPV6MEUTybQKI.','image'=>'','status'=>1 ],
        ];

        DB::table('admins')->insert($adminRecords);

        /*foreach ($adminRecords as $key => $record) {
            \App\Admin::create($record);
        }*/
    }
}
