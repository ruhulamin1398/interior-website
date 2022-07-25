<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Abasas Tech">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Abasas Tech">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('theme/backend/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Dashboard</title>
    <!-- StyleSheets  -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">



    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('theme/backend/assets/css/theme.css?ver=2.4.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin.include.sideNav')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('admin.include.mainHeader')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('admin')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    @include('admin.include.footer')
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <script src="{{asset('theme/backend/assets/js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/backend/assets/js/scripts.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/backend/assets/js/charts/gd-default.js?ver=2.4.0')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @yield('js')
</body>

</html>