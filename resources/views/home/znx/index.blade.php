@extends('home.jicheng.touti') @section('content')

<style type="text/css">
  .one{
    width: 1100px;
    margin: 40px 210px;
  }
  .content {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    padding: 0px 20px;
}
</style>
<script src="/ueditor/jquery-3.3.1.js"></script>
<hr>
<div class="one">
  <table class="table table-hover">
    <tr>
      <th style="width:3%"></th>
      <th style="width: 65%">消息内容</th>
      <td style="width: 10%">来自</td>
      <td style="width: 10%">操作</td>
      <td style="float:left; width: 100%">消息时间</td>
    </tr>
    @foreach($messages as $v)
      @if($v['catch_id'] == Session::get('id') || $v['catch_id'] == 0 || $v['send_id'] == Session::get('id'))
      <?php 
        $mtime = strtotime($v['created_at']);
        $utime = Session::get('created_at');
        $utime = strtotime($utime);
       ?>
      <tr>
        <td style="width:3%" name="status" >
            @if($v['status'] == 0 && $v['send_id'] != Session::get('id'))
            <i class="am-badge tpl-badge-danger am-round">1</i>
            @endif
        </td>
        <td style="width: 65%"><a href="/reply/{{$v['id']}}"><div class="content" style="width: 99%">{{$v['content']}}</div></a></td>
        <td style="width: 10%">{{$v['send_name']}}</td>
        <td style="width: 10%">
          <a href="/reply/{{$v['id']}}"><button class="label label-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回复</font></font></button></a>
          
          <form style="float:left; width: 62.5px" action="/del/{{$v['id']}}" method="post">
              <button class="label label-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
              {{csrf_field()}} 
          </form>

        </td>
        <td style="width: 20%">{{$v['created_at']}}</td>
      </tr>
      @endif
    @endforeach
  </table>
</div>
@endsection