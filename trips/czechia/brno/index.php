<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brno | Erasmus in HK | Thodoris Kalatzis</title>
    <meta name="description" content="">

    <?php include("../../../base.html"); ?>
    <?php include("../../../css.html"); ?>
    <?php include("../../../js.html"); ?>

</head>

<body class="site">
    <header>
        <?php include("../../../menu.php"); ?>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <h4>Brno</h4>
                    <p>....</p>
                    <span>
                        <a class="weatherwidget-io" href="https://forecast7.com/en/49d2016d61/brno/" data-label_1="WEATHER">BRNO WEATHER</a>
                        <script>
                            <?php include('../../../js/weather_widget_io.js'); ?>
                        </script>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div id="photoswipe-gallery" class="photoswipe-gallery">
                        <a href="./images/brno_0.jpg" data-med="./images/brno_0.jpg" data-size="2000x1500" data-med-size="2000x1500" data-author="Theodoros Kalatzis">
                            <img src="./images/brno_0.jpg" alt="" />
                            <!-- <figure>This is dummy caption.</figure> -->
                        </a>

                        <a href="./images/brno_1.jpg" data-med="./images/brno_1.jpg" data-size="2000x1500" data-med-size="2000x1500" data-author="Theodoros Kalatzis">
                            <img src="./images/brno_1.jpg" alt="" />
                            <!-- <figure>This is dummy caption.</figure> -->
                        </a>

                        <a href="./images/brno_2.jpg" data-med="./images/brno_2.jpg" data-size="2000x1500" data-med-size="2000x1500" data-author="Theodoros Kalatzis">
                            <img src="./images/brno_2.jpg" alt="" />
                            <!-- <figure>This is dummy caption.</figure> -->
                        </a>

                        <a href="./images/brno_3.jpg" data-med="./images/brno_3.jpg" data-size="2000x1500" data-med-size="2000x1500" data-author="Theodoros Kalatzis">
                            <img src="./images/brno_3.jpg" alt="" />
                            <!-- <figure>This is dummy caption.</figure> -->
                        </a>

                        <a href="./images/brno_4.jpg" data-med="./images/brno_4.jpg" data-size="2000x1500" data-med-size="2000x1500" data-author="Theodoros Kalatzis">
                            <img src="./images/brno_4.jpg" alt="" />
                            <!-- <figure>This is dummy caption.</figure> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php include("../../../js/photoswipe_additional.html"); ?>
    </main>

    <footer class="footer">
        <?php include("../../../footer.php"); ?>
    </footer>
</body>

</html>