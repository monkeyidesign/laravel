<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MONKEYiDESIGN | DASHBOARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/admin.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        @include('admin.masters.header_left')
        @include('admin.masters.header_right')
    </nav>
    @include('admin.masters.main_sidebar')
    @include('admin.masters.content')
    @include('admin.masters.footer')
    @include('admin.masters.control_sidebar')
</div>
<script src="/js/app.js"></script>
</body>
</html>
