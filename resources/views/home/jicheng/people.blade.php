@extends('home.jicheng.touti') @section('content')
<script src="/sj/js/jquery.cxselect.js"></script>
<style type="text/css">
table.dataintable {
    margin-top: 15px;
    border-collapse: collapse;
    border: 1px solid #aaa;
    width: 100%;
}
table.dataintable th {
    vertical-align: baseline;
    padding: 5px 15px 5px 6px;
    background-color: #3F3F3F;
    border: 1px solid #3F3F3F;
    text-align: left;
    color: #fff;
}

table.dataintable td {
    vertical-align: text-top;
    padding: 6px 15px 6px 6px;
    border: 1px solid #aaa;
}

table.dataintable tr:nth-child(odd) {
    background-color: #F5F5F5;
}

table.dataintable tr:nth-child(even) {
    background-color: #fff;
}
</style>


    <div class="container">
        <div class="col-md-8 contact-grids1 animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <form action="/people/z" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="contact-form2">
                    <h4>头像</h4>
                    <p class="grid1">
                    	<img src="{{$user['image']}}" width="50" height="50">
                        <input type="file" placeholder="" required="" name="image">
                    </p>
                </div>
                <div class="contact-form2">
                    <h4>姓名</h4>
                    <p class="grid1">
                        <input type="text" placeholder="" required="" name="name" value="{{$user['name']}}" style="width: 85%">
                    </p>
                </div>
                
                <div class="contact-form2">
                    <h4>电话</h4>
                    <input type="text" maxlength="11" placeholder="" required="" name="phone" value="{{$user['phone']}}" style="width: 85%">
                </div>
                <div class="contact-form2">
                    <h4>性别</h4>
                    <input type="radio" 

                        @if($user['sex'] == 0) checked @endif
                    placeholder="" required="" name="sex" value="0">男
                    <input type="radio" 
                    	@if($user['sex'] == 1) checked @endif
                    placeholder="" required="" name="sex" value="1">女
                </div>
                
                <input type="submit" value="Submit">

            </form>
        </div>
        <div class="col-md-4 contact-grids">
                @foreach($setting as $v)
                <div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 ">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Address</h4>
                            <p>{{$v['address']}}</p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid4">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Call Us</h4>
                            <p>{{$v['phone']}}</p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid5">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Email</h4>
                            <p>{{$v['email']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection