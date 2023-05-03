<!DOCTYPE html>
<?php
    define('WWW_ROOT', 'http://localhost');
?>
<html lang="en">
    <head>
        <title> Week 1: Exercise 2 </title>
    </head>
    <body>
        <h1>
            <a href="<?php echo WWW_ROOT; ?>">
                <?php
                    // PHP comments are not included in the final HTML
                    echo 'Welcome to Server-side Scripting';
                ?>
            </a>
        </h1>
        <?php
            echo '<h2>' . 'PHP: Hypertext Preprocessor' . '</h2>';
        ?>
        <?php
            $output_html = '<div>';
            $output_html .= '<p>PHP is a popular server-side scripting language</p>';
            $output_html .= '<p>WordPress is written in PHP</p>';
            $output_html .= '</div>';
            echo $output_html;
        ?>
    </body>
</html>