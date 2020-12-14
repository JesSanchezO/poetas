<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS poet");
        DB::statement("CREATE TABLE poet (
        poet_code int(11) NOT NULL,
        first_name varchar(55) NOT NULL,
        surname varchar(55) NOT NULL,
        addressc varchar(55) NOT NULL,
        postcode varchar(55) NOT NULL,
        telephone_number varchar(55 )NOT NULL
)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::statement("DROP TABLE IF EXISTS poet");
    }
}
