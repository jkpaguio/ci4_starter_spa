<!DOCTYPE html>
<html lang="en" x-data="router">

<head>

    <?= $header ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <?= $navigation ?>

        <main x-html="content" x-transition></main>

        <?= $footer ?>

        <script type="module">
            import '/js/alpine.js';
            import '/js/router.js';
        </script>
    </div>
</body>

</html>