<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
    <title>Kalendarz księżycowy</title>
</head>

<body>
    <h1 class="napis">Kalendarz księżycowy</h1>
    <br>
    <div class="">
        <form action="index.php" method="POST">
            <select id="mies" name="mies" class="mies">
                <option selected="" hidden="" value="0">Wybierz miesiąc</option>
                <option value="1">Styczeń</option>
                <option value="2">Luty</option>
                <option value="3">Marzec</option>
                <option value="4">Kwiecień</option>
                <option value="5">Maj</option>
                <option value="6"> Czerwiec</option>
                <option value="7">Lipiec</option>
                <option value="8">Sierpień</option>
                <option value="9">Wrzesień</option>
                <option value="10">Pazdziernik</option>
                <option value="11">Listopad</option>
                <option value="12">Grudzień</option>
            </select>
            <select id="lata" name="lata" class="lata">
                <option selected="" hidden="" value="0"> Wybierz rok</option>
                <option label="2030" value="2030">2030</option><br />
                <option label="2029" value="2029">2029</option><br />
                <option label="2028" value="2028">2028</option><br />
                <option label="2027" value="2027">2027</option><br />
                <option label="2026" value="2026">2026</option><br />
                <option label="2025" value="2025">2025</option><br />
                <option label="2024" value="2024">2024</option><br />
                <option label="2023" value="2023">2023</option><br />
                <option label="2022" value="2022">2022</option><br />
                <option label="2021" value="2021">2021</option><br />
                <option label="2020" value="2020">2020</option><br />
                <option label="2019" value="2019">2019</option><br />
                <option label="2018" value="2018">2018</option><br />
                <option label="2017" value="2017">2017</option><br />
                <option label="2016" value="2016">2016</option><br />
                <option label="2015" value="2015">2015</option><br />
                <option label="2014" value="2014">2014</option><br />
                <option label="2013" value="2013">2013</option><br />
                <option label="2012" value="2012">2012</option><br />
                <option label="2011" value="2011">2011</option><br />
                <option label="2010" value="2010">2010</option><br />
                <option label="2009" value="2009">2009</option><br />
                <option label="2008" value="2008">2008</option><br />
                <option label="2007" value="2007">2007</option><br />
                <option label="2006" value="2006">2006</option><br />
                <option label="2005" value="2005">2005</option><br />
                <option label="2004" value="2004">2004</option><br />
                <option label="2003" value="2003">2003</option><br />
                <option label="2002" value="2002">2002</option><br />
                <option label="2001" value="2001">2001</option><br />
                <option label="2000" value="2000">2000</option><br />
                <option label="1999" value="1999">1999</option><br />
                <option label="1998" value="1998">1998</option><br />
                <option label="1997" value="1997">1997</option><br />
                <option label="1996" value="1996">1996</option><br />
                <option label="1995" value="1995">1995</option><br />
                <option label="1994" value="1994">1994</option><br />
                <option label="1993" value="1993">1993</option><br />
                <option label="1992" value="1992">1992</option><br />
                <option label="1991" value="1991">1991</option><br />
                <option label="1990" value="1990">1990</option><br />
                <option label="1989" value="1989">1989</option><br />
                <option label="1988" value="1988">1988</option><br />
                <option label="1987" value="1987">1987</option><br />
                <option label="1986" value="1986">1986</option><br />
                <option label="1985" value="1985">1985</option><br />
                <option label="1984" value="1984">1984</option><br />
                <option label="1983" value="1983">1983</option><br />
                <option label="1982" value="1982">1982</option><br />
                <option label="1981" value="1981">1981</option><br />
                <option label="1980" value="1980">1980</option><br />
                <option label="1979" value="1979">1979</option><br />
                <option label="1978" value="1978">1978</option><br />
                <option label="1977" value="1977">1977</option><br />
                <option label="1976" value="1976">1976</option><br />
                <option label="1975" value="1975">1975</option><br />
                <option label="1974" value="1974">1974</option><br />
                <option label="1973" value="1973">1973</option><br />
                <option label="1972" value="1972">1972</option><br />
                <option label="1971" value="1971">1971</option><br />
                <option label="1970" value="1970">1970</option><br />
            </select>
            <input type="submit" name="guzik" class="guzik">
        </form>
    </div>
    <hr class="hr">
    <?php
    require './kalendarz.php';

    if (isset($_POST["mies"]) and isset($_POST["lata"])) {

        $mies = $_POST["mies"];
        $rok = $_POST["lata"];
        $moon = new Moon($rok, $mies);
        echo $moon->kalendarz();
    }

    ?>
</body>

</html>