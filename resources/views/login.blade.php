<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>حقيبة المعلم الرقمية المتميزة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="حقيبة المعلم الرقمية المتميزة — نظام إدارة مدرسي رقمي متكامل">
    <meta name="author" content="">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body style="background:linear-gradient(135deg,#eff6ff 0%,#f8fafc 55%,#ecfeff 100%);font-family:Tajawal,Cairo,sans-serif;">
<div class="ch-container">
    <div class="row">

        <div class="row">
            <div class="col-md-12 center login-header">
                <h2 style="font-weight:800;color:#0f172a;">حقيبة المعلم الرقمية المتميزة</h2><p style="color:#64748b;">نظام الإدارة المدرسية الرقمي</p>
            </div>
            <!--/span-->
        </div><!--/row-->

        <div class="row">
            <div class="well col-md-5 center login-box">
                @if (Session::get('message'))
                    <div class="alert alert-success text-center">
                        <button data-dismiss="alert" class="close" type="button">×</button>
                        <strong> {{ Session::get('message')}} </strong>

                    </div>
                @endif
                <div style="margin:0 auto 18px;width:96px;height:96px;border-radius:24px;background:linear-gradient(135deg,#2563eb,#06b6d4);display:flex;align-items:center;justify-content:center;color:#fff;font-size:38px;box-shadow:0 12px 30px rgba(37,99,235,.22);"><i class="glyphicon glyphicon-education"></i></div>

                <form class="form-horizontal" action="users/login" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" name="login" placeholder="اسم المستخدم">
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور">
                        </div>
                        <div class="clearfix"></div>

                    
                        <div class="clearfix"></div>
                        @if (isset($error))
                                <div class="alert alert-danger">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <strong>{{ $error }}.</strong>
                            </div>
                        @endif


                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-primary">دخول</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="js/charisma.js"></script>


</body>
</html>
