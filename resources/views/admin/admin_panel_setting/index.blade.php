@extends('layouts.admin')
@section('title')
general settings
@endsection
@section('contentheader')
settings list
@endsection
@section('contentheaderactivelink')
<a href="{{ route('admin_panel_settings.index') }}"> general settings</a>
@endsection
@section('contentheaderactive')
View
@endsection
@section('content')
<div class="col-12">
   <div class="card">
      <div class="card-header">
         <h3 class="card-title card_title_center">  general settings data</h3>
      </div>
      <div class="card-body">
         @if(@isset($data) and !@empty($data))
         <table id="example2" class="table table-bordered table-hover">
            <tr>
               <td class="width30">Company Name</td></td>
               <td> {{ $data['company_name'] }}</td>
            </tr>
            <tr>
               <td class="width30">Status</td>
               <td> @if($data['saysem_status']==1) Active @else Disabled  @endif</td>
            </tr>
            <tr>
               <td class="width30">Phone</td>
               <td> {{ $data['phones'] }}</td>
            </tr>
            <tr>
               <td class="width30">Adress</td>
               <td> {{ $data['address'] }}</td>
            </tr>
            <tr>
               <td class="width30">Email</td>
               <td> {{ $data['email'] }}</td>
            </tr>
            <tr>
               <td class="width30">Minutes for delay caluclation</td>
               <td> {{ $data['after_miniute_calculate_delay'] }}</td>
            </tr>
            <tr>
               <td class="width30"> Miniute calculate delay</td>
               <td> {{ $data['after_miniute_calculate_delay'] }}</td>
            </tr>
            <tr>
               <td class="width30"> after_miniute_quarterday</td>
               <td> {{ $data['after_miniute_quarterday'] }}</td>
            </tr>
            <tr>
               <td class="width30"> after_time_half_daycut</td>
               <td> {{ $data['after_time_half_daycut'] }}</td>
            </tr>
            <tr>
               <td class="width30">after_time_allday_daycut</td>
               <td> {{ $data['after_time_allday_daycut'] }}</td>
            </tr>
            <tr>
               <td class="width30">رصيد اجازات الموظف الشهري	</td>
               <td> {{ $data['monthly_vacation_balance'] }}</td>
            </tr>
            <tr>
               <td class="width30">بعد كم يوم ينزل للموظف رصيد اجازات	</td>
               <td> {{ $data['after_days_begin_vacation'] }}</td>
            </tr>
            <tr>
               <td class="width30">الرصيد الاولي المرحل عند تفعيل الاجازات للموظف مثل نزول عشرة ايام ونص بعد سته شهور للموظف	</td>
               <td> {{ $data['first_balance_begin_vacation'] }}</td>
            </tr>
            <tr>
               <td class="width30">قيمة خصم الايام بعد اول مرة غياب بدون اذن	</td>
               <td> {{ $data['sanctions_value_first_abcence'] }}</td>
            </tr>
            <tr>
               <td class="width30">قيمة خصم الايام بعد ثاني مرة غياب بدون اذن	  	</td>
               <td> {{ $data['sanctions_value_second_abcence'] }}</td>
            </tr>
            <tr>
               <td class="width30">قيمة خصم الايام بعد ثالث مرة غياب بدون اذن	 	</td>
               <td> {{ $data['sanctions_value_thaird_abcence'] }}</td>
            </tr>
            <tr>
               <td class="width30">قيمة خصم الايام بعد رابع مرة غياب بدون اذن	 	</td>
               <td> {{ $data['sanctions_value_forth_abcence'] }}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">  <a href="#" class="btn btn-sm btn-danger">Edit</a> </td>
            </tr>
         </table>
         @else
         <p class="bg-danger text-center"> عفوا لاتوجد بيانات لعرضها</p>
         @endif
      </div>
   </div>
</div>
@endsection