<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPanelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',250);
            $table->tinyInteger('system_status')->default('1')->comment('واحد مفعل - صفر معطل');
            $table->string('image',250)->nullable();
            $table->string('phones',250); 
            $table->string('address',250);
            $table->string('email',100);
            $table->integer('added_by');
            $table->integer('updated_by')->nullable();
            $table->integer('com_code');
            $table->decimal('after_miniute_calculate_delay',10,2)->default(0)->comment("بعد كم دقيقة نحسب تاخير حضور	");
            $table->decimal('after_miniute_calculate_early_departure',10,2)->default(0)->comment("بعد كم دقيقة نحسب انصراف مبكر	");
            $table->decimal('after_miniute_quarterday',10,2)->default(0)->comment("بعد كم دقيقه مجموع الانصارف المبكر او الحضور المتأخر نحصم ربع يوم	");
            $table->decimal('after_time_half_daycut',10,2)->default(0)->comment("بعد كم مرة تأخير او انصارف مبكر نخصم نص يوم	");
            $table->decimal('after_time_allday_daycut',10,2)->default(0)->comment("نخصم بعد كم مره تاخير او انصارف مبكر يوم كامل	");
            $table->decimal('monthly_vacation_balance',10,2)->default(0)->comment("رصيد اجازات الموظف الشهري	");
            $table->decimal('after_days_begin_vacation',10,2)->default(0)->comment("بعد كم يوم ينزل للموظف رصيد اجازات	");
            $table->decimal('first_balance_begin_vacation',10,2)->default(0)->comment("الرصيد الاولي المرحل عند تفعيل الاجازات للموظف مثل نزول عشرة ايام ونص بعد سته شهور للموظف	");
            $table->decimal('sanctions_value_first_abcence',10,2)->default(0)->comment("قيمة خصم الايام بعد اول مرة غياب بدون اذن	");
            $table->decimal('sanctions_value_second_abcence',10,2)->default(0)->comment("قيمة خصم الايام بعد ثاني مرة غياب بدون اذن	");
            $table->decimal('sanctions_value_thaird_abcence',10,2)->default(0)->comment("قيمة خصم الايام بعد ثالث مرة غياب بدون اذن	");
            $table->decimal('sanctions_value_forth_abcence',10,2)->default(0)->comment("قيمة خصم الايام بعد رابع مرة غياب بدون اذن	");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_panel_settings');
    }
}
