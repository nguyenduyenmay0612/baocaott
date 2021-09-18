@extends('admin.dashboard')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Câu hỏi tiếp nhận
    </div>
    <div class="table-responsive">
       <?php 
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên khách hàng</th>
              <th>Số điện thoại</th>
            <th>Câu hỏi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_cauhoi as $key=>$cauhoi )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" ><i></i></label></td>
            <td>{{ $cauhoi->name}}</td>
             <td>{{ $cauhoi->phone}}</td>
            <td>{{ $cauhoi->cauhoi}}</td>
          <td> <a onclick="return confirm('Bạn có muốn xoá  không?')" href="{{URL::to('delete-cauhoi/'.$cauhoi->id_cauhoi)}}">Xoá</a> </td>
           @endforeach 
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection