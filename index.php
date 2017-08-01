    <?php
        include "common.php";
        include "header.php";
    ?>
    <?php
    require_once './plugins/acf/vendor/autoload.php';

    $helperLoader = new SplClassLoader('Helpers', './plugins/acf/vendor');
    $helperLoader->register();

    use Helpers\Config;

    $config = new Config;
    $config->load('./plugins/acf/config/config.php');

    ?>
            <!-- TOOLTIP -->
            <script>
                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>

            <?php if (!isset($_GET[ "p"]) || $_GET[ "p"]=="home" ) { $p="home" ; } else if ($_GET[ "p"]=="mobilbarat-weboldal-keszites" ) { $p="mobilbarat-weboldal-keszites" ; }
            else if ($_GET[ "p"]=="contact" ) { $p="contact" ; } else if ($_GET[ "p"]=="weboldal-keszites-arak-budapest-esztergom" && $_COOKIE[ 'lang']=="en" ) { $p="london-web-design-prices" ;}
            else if ($_GET[ "p"]=="weboldal-keszites-arak-budapest-esztergom" ) { $p="weboldal-keszites-arak-budapest-esztergom" ;} else if ($_GET[ "p"]=="london-web-design-prices" && $_COOKIE[ 'lang']=="en" ) { $p="london-web-design-prices" ;} else if ($_GET[ 'p']=="weblap-keszites-ar" ){ $p="weblap-keszites-ar" ; }
            else if ($_GET[ 'p']=="hosting" ){$p="hosting" ;}
            else { $p="home" ;}
            include($p . '.php');
            include "footer.php";
            ?>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 AlertMessage">
                    <?php if(isset($_SESSION["result"])){
                        echo $_SESSION["result"];
                        session_destroy();
                    }  ?>
                </div>
            </div>
            <script type="text/javascript">
                var AlertMessageHide = function() {
                    $(".AlertMessage").fadeOut(1000);
                };
                setTimeout(AlertMessageHide, 5000);
                $(document).ready();
            </script>
