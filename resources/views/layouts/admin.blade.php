<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Online Pharmacy</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&amp;display=swap" rel="stylesheet">
    
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="assets/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets//dist//js//adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets//overlayScrollbars//js//jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- bs-custome-file-input -->
<script src="assets/bs-custom-file-input//bs-custom-file-input.min.js"></script>

    </body>
</html>