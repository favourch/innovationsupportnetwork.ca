<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnManualPaymentAttachmentToDonationLogsTable extends Migration
{

    public function up()
    {
        Schema::table('donation_logs', function (Blueprint $table) {
            $table->string('manual_payment_attachment')->nullable();
        });
    }


    public function down()
    {
        Schema::table('donation_logs', function (Blueprint $table) {
            $table->dropColumn('manual_payment_attachment');
        });
    }
}