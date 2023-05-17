<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equive="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show</title>
    </head>
    <body>
        <h1>Ini Show</h1>
        @for ($i = 0; $i < count($produk); $i++)
            <p> {{ 'No :'. $i+1 .' Nama Produk :'.$produk[$i] }}</p>
        @endfor
    </body>
</html>