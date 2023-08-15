<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="d001.css">
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>

    <section>

    <main>

    <?php 

    $num = $_GET["numero"];
    //assigning Predec..and successor values
    $ant = $num-1;
    $sucessor = $num+1;

    echo "Entered Number is: $num"."\n";
    echo "The Predecessor is: $ant"."\n";
    echo "The Successor is: $sucessor";
    ?>
    
    </main>
    <p><a href="javascript:history.go(-1)">Back to first page</a></p>
    
    </section>
    
     
</body>
</html>