<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zone_name');
            $table->timestamps();
        });
        DB::table('zones')->insert(array(
            'zone_name' => 'ພາກເໜືອ',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('zones')->insert(array(
            'zone_name' => 'ນະຄອນຫຼວງ',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('zones')->insert(array(
            'zone_name' => 'ພາກກາງ',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('zones')->insert(array(
            'zone_name' => 'ພາກໃຕ້',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('zones')->where('name','=','ພາກເໜືອ')->delete();
        DB::table('zones')->where('name','=','ນະຄອນຫຼວງ')->delete();
        DB::table('zones')->where('name','=','ພາກກາງ')->delete();
        DB::table('zones')->where('name','=','ພາກໃຕ້')->delete();
        Schema::dropIfExists('zones');
    }
}
