        <?php
            if ($_GET['web'] == 'marak') {
                include 'components/footer/footer.marak.php';
            }

            if ($_GET['web'] == 'antonovic') {
                include 'components/footer/footer.antonovic.php';
            }

            if ($_GET['web'] == 'finomsport' OR $_SERVER['SERVER_NAME']=="finomsport.cz") {
                include 'components/footer/footer.finomsport.php';
            }

            if ($_GET['web'] == 'finomsportCP') {
                include 'components/footer/comingsoon/footer.finomsportCP.php';
            }

            if ($_GET['web'] == 'finomenergy') {
                include 'components/footer/footer.default.php';
            }
        ?>
    </body>
</html>
