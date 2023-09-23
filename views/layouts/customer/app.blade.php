<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    @include("layouts.customer.head")
</head>
<body class="goto-here">
@include("layouts.customer.item")
@include("layouts.customer.nav")
<section >
    @yield("main")
</section>
@include("layouts.customer.footer")
@include("layouts.customer.scripts")
</body>
</html>
