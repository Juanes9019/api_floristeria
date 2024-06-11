<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API extends Model
{
    public function up()
    {
        Schema::create('api', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('api');
    }
}
