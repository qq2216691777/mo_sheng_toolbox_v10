
<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>跑路云防红源码免费版</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="http://cdn.95jw.vip/fh/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://cdn.95jw.vip/fh/assets/css/material-kit.css" rel="stylesheet"/>
	<link href="http://cdn.95jw.vip/fh/assets/css/demo.css" rel="stylesheet" />
<style>
img.logo{width:14px;height:14px;margin:0 5px 0 3px;}
body{
background:#ecedf0 url("http://cdn.95jw.vip/fh/assets/img/bj.png") fixed;
background-repeat:repeat;}
</style>
</head>
<body class="index-page">
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
						<div class="title" align="center">
							<h3><font color="#fff"><b>跑路云防红源码免费版</b></font></h3>
						</div>
						<div class="card card-nav-tabs">
							<div class="header header-primary text-center">
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active" style="width: 50%;" align="center">
												<a href="#profile" data-toggle="tab">
													<i class="material-icons">face</i>
													网站公告
												</a>
											</li>
											<li style="width: 50%;" align="center">
												<a href="#messages" data-toggle="tab">
													<i class="material-icons">build</i>
													防红生成
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
                                                                                <p>我曾经以为学会了免杀就能绕过你的主防御</p>
                                                                                <p>我曾经以为学会了编程就能编出完美的爱情</p>
										<p>纵使我多么的不可一世，也不是你的admin</p>
										<p>即使我社工玩的多么好,也社不到你锁的心的pas</p>
										<p><a style="" href="http://suo.95jw.vip/ply.zip">源码下载</a>
									</div>
							<div class="tab-pane" id="messages">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">chat</i>
									</span>
										<input type="text" name="url" type="text" class="form-control" placeholder="请输入域名" value=""/>
								</div>
										<button class="btn btn-primary btn-round" onclick="sub()">立即生成</button>
	            	                    <br>
	            	                    <b><span id="res"></span></b>						
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
	<script src="http://cdn.95jw.vip/fh/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="http://cdn.95jw.vip/fh/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="http://cdn.95jw.vip/fh/assets/js/material.min.js"></script>
	<script src="http://cdn.95jw.vip/fh/assets/js/nouislider.min.js" type="text/javascript"></script>
	<script src="http://cdn.95jw.vip/fh/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="http://cdn.95jw.vip/fh/assets/js/material-kit.js" type="text/javascript"></script>
	<script src="https://cdn.bootcss.com/layer/3.1.0/layer.js"></script>
<script>
    function sub() {
        url = $(':input[name=\'url\']').val();
        if (!url || url == '') {
            layer.alert('域名不能为空');
            return false;
        }

        var load = layer.load();
        $.ajax({
            type:"post",
            url: "http://fh.95jw.vip/dwz.php",
            dataType: "json",
            data:"longurl="+url,
            async:true,
            success: function (json) {
                var strJson = JSON.stringify(json) 
                var data = $.parseJSON(strJson);
                layer.close(load);
                if (data.code == 1) {
                    $('#res').html(data.ae_url);
                } else {
                    layer.alert(data.msg);
                }
            },
            error: function () {
                layer.alert('服务器内部错误');
            }
        })
    }
</script>
	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/51fh/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>