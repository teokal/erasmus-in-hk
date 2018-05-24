<html>

<head>
    <meta charset="utf-8">
    <title>Hradec Kralove | Erasmus in HK</title>
    <meta name="description" content="Hradec Kralove">

    <?php include("../base.html"); ?>
    <?php include("../css.html"); ?>
    <?php include("../js.html"); ?>

</head>

<body class="site">
    <header>
        <?php include("../menu.php"); ?>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="row twelve columns">
                <h3>Hradec Králové</h3>
                <div>
                    <p>Hradec Králové is a city of the Czech Republic, in the Hradec Králové Region of Bohemia. The city's economy
                        is based on food-processing technology, photochemical, electronics manufacture and IT. Traditional
                        industries include musical instrument manufacturing – the best known being PETROF pianos. The
                        <a href="hradec_kralove/#uhk">
                            <strong>University of Hradec Králové</strong>
                        </a> is located in the city, the University of Defense has its only medical faculty in Hradec Králové
                        and Charles University in Prague also has its Faculty of Medicine in Hradec Králové and Faculty of
                        Pharmacy there.</p>
                </div>

                <h4>Geography</h4>
                <p>The city lies at the confluence of the Elbe and the Orlice river close to Krkonoše (Giant Mountains), the
                    highest Czech mountains, with its peak, Sněžka (Snowhill), of 1602m.</p>

                <h4 id="uhk">University of Hradec Kralove</h4>
                <div id="directions" class="four columns">
                    <form action="http://maps.google.com/maps" method="get" target="_blank">
                        <label for="saddr">Get driving directions to UHK - building F</label>
                        <input type="text" name="saddr" placeholder="Directions from ..." />
                        <input type="hidden" name="daddr" value="Univerzita Hradec Králové - budova F" />
                        <input type="submit" value="Get directions" />
                    </form>
                </div>
                <p>University of Hradec Králové was founded on June 21, 2000 by renaming the University College of Education
                    (Vysoká škola pedagogická), which itself traces its roots back to 1959. It is attended by around 8,500
                    students.
                </p>

                <p>The University of Hradec Králové comprises the following parts: Faculty of Education, Faculty of Informatics
                    and Management, Philosophical Faculty, Faculty of Science, Institute of Social Work. It belongs to one
                    of the most important education and research institutions in the Eastern Bohemia.</p>

                <p>Source:
                    <a href="https://en.wikipedia.org/wiki/Hradec_Kr%C3%A1lov%C3%A9" target="_blank">Wikipedia</a>
                    <br>Official Website:
                    <a href="https://www.hradeckralove.eu/?lang=2" targer="_blank">hradeckralove.eu</a>
                    <br>UHK Website:
                    <a href="https://www.uhk.cz/en-GB/UHK" targer="_blank">uhk.cz</a>
                </p>

                <h4>Suggested Places</h4>
                <div id="places-table" class="row twelve columns">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Cost</th>
                                <th>Offers</th>
                                <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NaPlavka</td>
                                <td>Nám. 5. května 835/10</td>
                                <td>Café</td>
                                <td>
                                    <span class="grey">
                                        <span class="black">$$$</span>$$</span>
                                </td>
                                <td>Yes</td>
                                <td>
                                    <a href="http://www.naplavkahk.cz" target="">Visit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Salieri Café</td>
                                <td>Nám. 5. května 835/10</td>
                                <td>Café</td>
                                <td>
                                    <span class="grey">
                                        <span class="black">$$$</span>$$</span>
                                </td>
                                <td>Yes</td>
                                <td>
                                    <a href="http://salieri.cz" target="">Visit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mexita</td>
                                <td>Velké náměstí 148</td>
                                <td>Restaurant</td>
                                <td>
                                    <span class="grey">
                                        <span class="black">$$$$</span>$</span>
                                </td>
                                <td>No</td>
                                <td>
                                    <a href="http://www.mexita.cz/tp/restaurace.html" target="">Visit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Na Hradě</td>
                                <td>Špitálská 175/5</td>
                                <td>Restaurant</td>
                                <td>
                                    <span class="grey">
                                        <span class="black">$$</span>$$$</span>
                                </td>
                                <td>No</td>
                                <td>
                                    <a href="http://restaurace-nahrade.cz" target="">Visit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Matys' Bar</td>
                                <td>Palachova 1136/3</td>
                                <td>Café - Bar</td>
                                <td>
                                    <span class="grey">
                                        <span class="black">$$</span>$$$</span>
                                </td>
                                <td>No</td>
                                <td>
                                    <a href="https://www.facebook.com/matysbar" target="">Visit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include("../footer.php"); ?>
    </footer>
</body>

</html>