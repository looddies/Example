<? session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/jquery-3.3.1.js"></script>
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <section id="page_wrap">
            <section id="top">
                Теле
            </section>
            <section id="bottom">
                <? 
                if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
                echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
                echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить"; 
                ?>
            </section>
        </section>
    </body>
</html>
