<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
        // http://localhost:8888/test.php
        echo "Hello World";
        $variable12 = "randomword";
        echo "<br>"."$variable12";
        $name = "Patrick";
        $greeting = "Hi";
        echo $greeting."&nbsp;".$name;
        $consolelog = "This is same as console.log in Javascript.";
        $coffee = [ 'latte', 'espresso', 'Kenya' ];
    ?>
    <?php
        print_r($consolelog);
        print_r($coffee);
    ?>
    </h1>

    <!-- <script>
        const text = "This is MDIA 3294!";
        alert(text);
    </script> -->
</body>
</html>