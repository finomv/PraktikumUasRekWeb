<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COBA CRUD DENGAN LIVE WIRE BESERTA POSTMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a  class="navbar-brand" href="/">COBA CRUD DENGAN LIVE WIRE BESERTA POSTMAN</a>
        </div> 
    </nav>

    <div class="container"> 
        <div class="row justify-content-center mt-3">
            @livewire('mahasiswa')
        </div>
    </div>
    @livewireScripts 
</body>
</html>