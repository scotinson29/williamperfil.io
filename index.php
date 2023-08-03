<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violet - Tienda</title>
    <link rel="shortcut icon" href="img\icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-s-12 col-m-2 col-l-2">
                <div include-html="partials/menu.html"></div>
            </div>
            
            <div class="col-m-10 col-l-7">
                <div include-html="partials/products.html"></div>
            </div> 
            
            <div class="col-m-12 col-l-3" >
                <div include-html="partials/aside.html"></div>
            </div>

        </div>
    </div>

    <div  include-html="partials/footer.html"></div>

    <footer>&copy; William Ortega</footer>

    <script src="js/include-html.js"></script>
</body>
</html>