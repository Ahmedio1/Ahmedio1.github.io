<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Spartan' rel='stylesheet'>
    <link href="https://fr.allfont.net/allfont.css?fonts=arimo-bold" rel="stylesheet" type="text/css" />
    <link href="https://fr.allfont.net/allfont.css?fonts=league-spartan" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="{{ URL::asset('css/style.css') }} " rel="stylesheet">
    <title>Portfolio Ahmed</title>
</head>
<header>
    @include('header')
</header>
<body >


<main role="main">
    @yield('main')
</main>
@include('footer')
@yield('scripts')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
