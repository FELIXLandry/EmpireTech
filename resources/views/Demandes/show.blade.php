<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">

    <title>Document</title>
</head>

<style>
.h1{
    font-family: ui-monospace;
    color: grey;
    font-weight: 500;
}
.container{
    padding-top: 20%;
}
</style>

<body>
    <div class="container">
        <marquee behavior="slide" direction="down"><h6 class="text-center">Mr(Mme) {{$demande->name}} </h6></marquee>
        <h1 class="text-center"> Votre méssage a été bien envoyé, merci !!! </h1>
        <div class="row mt-4">
            <a href="/" class="btn btn-danger  m-auto"> Sortie <i class="fa fa-sign-out"></i></a>
        </div>
    </div>
</body>
</html>
