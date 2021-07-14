<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Exemplos.css">
    <title>Exemplos</title>
</head>
<body>
    <?php include_once 'commons/nav.php' ?>

    <!-- Slider -->
    <div id="slider">
        <figure>
            <img src="Images/1.jpg" >
            <img src="Images/2.jpg" >
            <img src="Images/3.jpg" >
            <img src="Images/1.jpg">
        </figure>
    </div>
    <!-- grid -->
    <div class="grid">
            <div class="grid-item">
                <div class="card">
                    <img class="img-card" src="Images/fog.jpg">
                    <div class="content">
                        <h2 class="card-header">Estores</h2>
                        <button onclick="window.location.href='Estores.php';" class="card-btn">Visit<span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            
            <div class="grid-item">
                <div class="card">
                    <img class="img-card" src="Images/fog.jpg">
                    <div class="content">
                        <h2 class="card-header">Marquises</h2>
                        <button onclick="window.location.href='Marquises.php';" class="card-btn">Visit<span>&rarr;</span></button>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <img class="img-card" src="Images/fog.jpg">
                    <div class="content">
                        <h2 class="card-header">Janelas</h2>
                        <button onclick="window.location.href='Janelas.php';" class="card-btn">Visit<span>&rarr;</span></button>
                    </div>
                </div>
            </div>
    </div>

    <div>
        <h1>Esta pagina ainda esta em contrução</h1>
    </div>
</body>
</html>