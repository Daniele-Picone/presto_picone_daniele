<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>
<body>
    <x-navbar></x-navbar>
 <div class="min-vh-100 header">
   {{$slot}}
 </div>



<x-footer></x-footer>
<script src="https://kit.fontawesome.com/2b8422c872.js" crossorigin="anonymous"></script>
</body>
</html>