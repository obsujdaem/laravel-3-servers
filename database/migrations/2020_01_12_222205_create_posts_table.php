<?php

use App\ServerModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        $servers = ServerModel::all();

        foreach ($servers as $server) {
            DB::purge('dop_servachek');
            Config::set('database.connections.dop_servachek.host', "$server->host");

            Schema::connection('dop_servachek')->create('user_posts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id');
                $table->string('title');
                $table->text('text');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
