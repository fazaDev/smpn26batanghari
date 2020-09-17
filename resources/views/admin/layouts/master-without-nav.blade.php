<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SMPN 26 Batang Hari</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('admin.layouts.head')
  </head>
<body>
    <!-- Begin page -->
        <div id="wrapper">
            @yield('content')
        </div>
    @include('admin.layouts.footer-script')
    </body>
</html>
