<!DOCTYPE html>
<?php
session_start();
if(isset($_GET['language'])) {
   $language = $_GET['language'];
} else {
   $language = "english";
}

#echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?language='.$language.'&width="+screen.width+"&height="+screen.height;</script>';

?>
<html>
<head>
    <title>DhammaVinaya | Saṃsāra</title>
    <meta charset="UTF-8">
    <link rel="icon" href="images/dhammacakka.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
    submitForms = function(){
       window.document.langForm.submit();
    }
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <?php
      if ($language == "english") {
        echo "<div class=\"container-fluid\">";
      } else {
        echo "<div class=\"container-fluid-si\">";
      }
      ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                if ($language == "english") {
                  echo "<a class=\"navbar-brand\" href=\"index.php\"><img src=\"images/logo.png\"/></a>";
                } else {
                  echo "<a class=\"navbar-brand\" href=\"index.php?language=sinhala\"><img src=\"images/logoSi.png\"/></a>";
                }
                ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php
                  echo "<form class=\"navbar-form navbar-right\" role=\"form\" name=\"langForm\" method=\"get\" action=\"samsara.php\">";
                  echo "<div class=\"form-group\">";
                  echo "<select class=\"form-control\" name=\"language\" onChange=\"submitForms()\">";
                  if(isset($_GET['language'])) {
                     $language = $_GET['language'];
                     if ($language == "english") {
                         echo "<option selected=\"selected\" value=\"english\">English</option>";
                         echo "<option value=\"sinhala\">සිංහල</option>";
                     } else {
                        echo "<option value=\"english\">English</option>";
                        echo "<option selected=\"selected\" value=\"Sinhala\">සිංහල</option>";
                     }
                  } else {
                      echo "<option selected=\"selected\" value=\"english\">English</option>";
                      echo "<option value=\"sinhala\">සිංහල</option>";
                      $language = "english";
                  }
                  echo "</select>";
                  echo "</div>";
                  echo "</form>";
              ?>
                <ul class="nav navbar-nav navbar">
                  <?php
                  if ($language == "english") {
                    echo "<li class=\"active\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Wandering <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"samsara.php\">Intoxication</a></li>";
                    echo "<li><a href=\"samsara.php#assu\">Inconceivable Beginning</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=\"buddha.php\">Buddha</a></li>";
                    echo "<li class=\"dropdown\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Path <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"magga.php\">Graduated</a></li>";
                    echo "<li><a href=\"magga.php#sekha\">To Be Trained</a></li>";
                    echo "<li><a href=\"magga.php#kalama\">Open to Investigation</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class=\"dropdown\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Generosity <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"dana.php\">Results of Giving</a></li>";
                    echo "<li><a href=\"dana.php#sap­purisa­dana\">Person of Integrity’s Gifts</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=\"sila.php\">Virtue</a></li>";
                    echo "<li><a href=\"nekkhamma.php\">Renunciation</a></li>";
                    echo "<li><a href=\"indriyasamvara.php\">Sense Restraint</a></li>";
                    echo "<li><a href=\"sati.php\">Mindfulness</a></li>";
                    echo "<li><a href=\"samadhi.php\">Concentration</a></li>";
                    echo "<li><a href=\"panna.php\">Discernment</a></li>";
                    echo "<li><a href=\"nibbana.php\">Unbinding</a></li>";
                    echo "<li><a href=\"about.php\">About</a></li>";
                  } else {
                    echo "<li class=\"active\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">සංසාරය <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"samsara.php?language=sinhala\">මත් බව</a></li>";
                    echo "<li><a href=\"samsara.php?language=sinhala#assu\">මුලක් දැකිය නොහැකි</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=\"buddha.php?language=sinhala\">බුදුන්</a></li>";
                    echo "<li class=\"dropdown\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">මාර්ගය <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"magga.php?language=sinhala\">පිළිවෙල</a></li>";
                    echo "<li><a href=\"magga.php?language=sinhala#sekha\">පුහුණූ කළ යුතු</a></li>";
                    echo "<li><a href=\"magga.php?language=sinhala#kalama\">විමර්ශනයට විවෘත</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class=\"dropdown\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">දානය <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"dana.php?language=sinhala\">දාන විපාක</a></li>";
                    echo "<li><a href=\"dana.php?language=sinhala#sap­purisa­dana\">සත්පුරුෂ දානය</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=\"sila.php?language=sinhala\">සීලය</a></li>";
                    echo "<li><a href=\"nekkhamma.php?language=sinhala\">නිෂ්ක්‍රමණය</a></li>";
                    echo "<li><a href=\"indriyasamvara.php?language=sinhala\">ඉදුරන් සංවරය</a></li>";
                    echo "<li><a href=\"sati.php?language=sinhala\">සතිය</a></li>";
                    echo "<li><a href=\"samadhi.php?language=sinhala\">සමාධිය</a></li>";
                    echo "<li><a href=\"panna.php?language=sinhala\">ප්‍රඥාව</a></li>";
                    echo "<li><a href=\"nibbana.php?language=sinhala\">නිවන</a></li>";
                    echo "<li><a href=\"about.php?language=sinhala\">විස්තර</a></li>";
                  }
                  ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    if ($language == "english") {
      echo "<section id=\"mainlinks\">";
      echo "<h2><b>Saṃsāra | Wandering</b></h2>";
    } else {
      echo "<section id=\"mainlinksSi\">";
      echo "<h2><b>සංසාර | සංසාරය</b></h2>";
    }
    ?>
    <br/>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
    <?php
    if ($language == "english") {
      echo "<h3>Intoxication</h3><br/>";
      echo "<div class=\"col-lg-6\">";
      echo "Tassa mayhaṃ, bhikkhave, evarūpāya iddhiyā samannāgatassa evarūpena ca sukhumālena etadahosi: ‘assutavā kho puthujjano attanā jarādhammo samāno jaraṃ anatīto paraṃ jiṇṇaṃ disvā aṭṭīyati harāyati jigucchati attānaṃyeva atisitvā, ahampi khomhi jarādhammo jaraṃ anatīto. Ahañceva kho pana jarādhammo samāno jaraṃ anatīto paraṃ jiṇṇaṃ disvā aṭṭīyeyyaṃ harāyeyyaṃ jiguccheyyaṃ na metaṃ assa patirūpan’ti. Tassa mayhaṃ, bhikkhave, iti paṭi­sañcik­khato yo yobbane yobbanamado so sabbaso pahīyi.<br/><br/>";
      echo "Assutavā kho puthujjano attanā byādhidhammo samāno byādhiṃ anatīto paraṃ byādhitaṃ disvā aṭṭīyati harāyati jigucchati attānaṃyeva atisitvā: ‘ahampi khomhi byādhidhammo byādhiṃ anatīto, ahañceva kho pana byādhidhammo samāno byādhiṃ anatīto paraṃ byādhikaṃ disvā aṭṭīyeyyaṃ harāyeyyaṃ jiguccheyyaṃ, na metaṃ assa patirūpan’ti. Tassa mayhaṃ, bhikkhave, iti paṭi­sañcik­khato yo ārogye ārogyamado so sabbaso pahīyi.<br/><br/>";
      echo "Assutavā kho puthujjano attanā maraṇadhammo samāno maraṇaṃ anatīto paraṃ mataṃ disvā aṭṭīyati harāyati jigucchati attānaṃyeva atisitvā: ‘ahampi khomhi maraṇadhammo, maraṇaṃ anatīto, ahaṃ ceva kho pana maraṇadhammo samāno maraṇaṃ anatīto paraṃ mataṃ disvā aṭṭīyeyyaṃ harāyeyyaṃ jiguccheyyaṃ, na metaṃ assa patirūpan’ti. Tassa mayhaṃ, bhikkhave, iti paṭi­sañcik­khato yo jīvite jīvitamado so sabbaso pahīyīti.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/pi/an3.39\">AN 3:39 - Sukhumāla</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "“Even though I was endowed with such fortune, such total refinement, the thought occurred to me: ‘When an untaught, run-of-the-mill person, himself subject to aging, not beyond aging, sees another who is aged, he is repelled, ashamed, & disgusted, oblivious to himself that he too is subject to aging, not beyond aging. If I—who am subject to aging, not beyond aging—were to be repelled, ashamed, & disgusted on seeing another person who is aged, that would not be fitting for me.’ As I noticed this, the young person’s intoxication with youth entirely dropped away.<br/><br/>";
      echo "“Even though I was endowed with such fortune, such total refinement, the thought occurred to me: ‘When an untaught, run-of-the-mill person, himself subject to illness, not beyond illness, sees another who is ill, he is repelled, ashamed, & disgusted, oblivious to himself that he too is subject to illness, not beyond illness. And if I—who am subject to illness, not beyond illness—were to be repelled, ashamed, & disgusted on seeing another person who is ill, that would not be fitting for me.’ As I noticed this, the healthy person’s intoxication with health entirely dropped away.<br/><br/>";
      echo "“Even though I was endowed with such fortune, such total refinement, the thought occurred to me: ‘When an untaught, run-of-the-mill person, himself subject to death, not beyond death, sees another who is dead, he is repelled, ashamed, & disgusted, oblivious to himself that he too is subject to death, not beyond death. And if I—who am subject to death, not beyond death—were to be repelled, ashamed, & disgusted on seeing another person who is dead, that would not be fitting for me.’ As I noticed this, the living person’s intoxication with life entirely dropped away.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/AN/AN3_39.html\">AN 3:39 - Refinement</a>";
      echo "</aside>";
      echo "</div>";
    } else {
      echo "<h3>මත් බව</h3><br/>";
      echo "<div class=\"col-lg-6\">";
      echo "‘‘තස්‌ස මය්‌හං, භික්‌ඛවෙ, එවරූපාය ඉද්‌ධියා සමන්‌නාගතස්‌ස එවරූපෙන ච සුඛුමාලෙන එතදහොසි – ‘අස්‌සුතවා ඛො පුථුජ්‌ජනො අත්‌තනා ජරාධම්‌මො සමානො ජරං අනතීතො පරං ජිණ්‌ණං දිස්‌වා අට්‌ටීයති හරායති ජිගුච්‌ඡති අත්‌තානංයෙව අතිසිත්‌වා, අහම්‌පි ඛොම්‌හි ජරාධම්‌මො ජරං අනතීතො. අහඤ්‌චෙව ඛො පන ජරාධම්‌මො සමානො ජරං අනතීතො පරං ජිණ්‌ණං දිස්‌වා අට්‌ටීයෙය්‍යං හරායෙය්‍යං ජිගුච්‌ඡෙය්‍යං න මෙතං අස්‌ස පතිරූප’න්‌ති. තස්‌ස මය්‌හං, භික්‌ඛවෙ, ඉති පටිසඤ්‌චික්‌ඛතො යො යොබ්‌බනෙ යොබ්‌බනමදො සො සබ්‌බසො පහීයි.<br/><br/>";
      echo "‘‘අස්‌සුතවා ඛො පුථුජ්‌ජනො අත්‌තනා බ්‍යාධිධම්‌මො සමානො බ්‍යාධිං අනතීතො පරං බ්‍යාධිතං දිස්‌වා අට්‌ටීයති හරායති ජිගුච්‌ඡති අත්‌තානංයෙව අතිසිත්‌වා – ‘අහම්‌පි ඛොම්‌හි බ්‍යාධිධම්‌මො බ්‍යාධිං අනතීතො, අහඤ්‌චෙව ඛො පන බ්‍යාධිධම්‌මො සමානො බ්‍යාධිං අනතීතො පරං බ්‍යාධිකං දිස්‌වා අට්‌ටීයෙය්‍යං හරායෙය්‍යං ජිගුච්‌ඡෙය්‍යං, න මෙතං අස්‌ස පතිරූප’න්‌ති. තස්‌ස මය්‌හං, භික්‌ඛවෙ, ඉති පටිසඤ්‌චික්‌ඛතො යො ආරොග්‍යෙ ආරොග්‍යමදො සො සබ්‌බසො පහීයි.<br/><br/>";
      echo "‘‘අස්‌සුතවා ඛො පුථුජ්‌ජනො අත්‌තනා මරණධම්‌මො සමානො මරණං අනතීතො පරං මතං දිස්‌වා අට්‌ටීයති හරායති ජිගුච්‌ඡති අත්‌තානංයෙව අතිසිත්‌වා – ‘අහම්‌පි ඛොම්‌හි මරණධම්‌මො, මරණං අනතීතො, අහං චෙව ඛො පන මරණධම්‌මො සමානො මරණං අනතීතො පරං මතං දිස්‌වා අට්‌ටීයෙය්‍යං හරායෙය්‍යං ජිගුච්‌ඡෙය්‍යං, න මෙතං අස්‌ස පතිරූප’න්‌ති. තස්‌ස මය්‌හං, භික්‌ඛවෙ, ඉති පටිසඤ්‌චික්‌ඛතො යො ජීවිතෙ ජීවිතමදො සො සබ්‌බසො පහීයී’’ති.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">අංගුත්තර 3:39 - සුඛුමාල</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "“මහණෙනි, මෙවැනි සමෘද්ධියකින්ද මෙවැනි සිව්මැලි බවකින්ද යුත් මට මෙසේ අදහස් විය. ඇසූ පිරූ තැන් නැත්තාවූ පෘථග්ජනතෙම වනාහි තමා ජරාව ස්වභාවකොට ඇත්තේම ජරාව නොඉක්මවූයේම ජරාවට ගිය අනිකෙකු දැක තමා ඉක්මවා හැකිලෙයි. අප්‍රිය කරයි. පිළිකුල් කරයි. ‘මම වනාහි ජරාව ස්වභාවකොට ඇත්තේ වෙමි. ජරාව නොනික්මවූයේ වෙමි. ජරාව ස්වභාව කොට ඇත්තාවූ ජරාව නොනික්මවූ මම ජරාවට ගියාවූ අනිකෙකු දැක තමා ප්‍රමාණය ඉක්මවා හැකිලෙන්නෙම් නම්, අප්‍රිය කරන්නෙම් නම්, පිළිකුල් කරන්නෙම් නම් එය මට සුදුසු නොවේය’ කියායි. මහණෙනි, මෙසේ සිතන්නාවූ ඒ මට යම් තරුණ මදයක් වූයේද එය නැතිවිය.<br/><br/>";
      echo "“ඇසූ පිරූ තැන් නැත්තාවූ පෘථග්ජනතෙම වනාහි තමා ව්‍යාධිය ස්වභාවකොට ඇත්තේම ව්‍යාධිය නොඉක්මවූයේම ව්‍යාධියට ගිය අනිකෙකු දැක තමා ඉක්මවා හැකිලෙයි. අප්‍රිය කරයි. පිළිකුල් කරයි. ‘මම වනාහි ව්‍යාධිය ස්වභාවකොට ඇත්තේ වෙමි. ව්‍යාධිය නොනික්මවූයේ වෙමි. ව්‍යාධිය ස්වභාව කොට ඇත්තාවූ ජරාව නොනික්මවූ මම ව්‍යාධියට ගියාවූ අනිකෙකු දැක තමා ප්‍රමාණය ඉක්මවා හැකිලෙන්නෙම් නම්, අප්‍රිය කරන්නෙම් නම්, පිළිකුල් කරන්නෙම් නම් එය මට සුදුසු නොවේය’ කියායි. මහණෙනි, මෙසේ සිතන්නාවූ ඒ මට යම් නිරොග මදයක් වූයේද එය නැතිවිය.<br/><br/>";
      echo "“ඇසූ පිරූ තැන් නැත්තාවූ පෘථග්ජනතෙම වනාහි තමා මරණය ස්වභාවකොට ඇත්තේම මරණය නොඉක්මවූයේම මරණයට ගිය අනිකෙකු දැක තමා ඉක්මවා හැකිලෙයි. අප්‍රිය කරයි. පිළිකුල් කරයි. ‘මම වනාහි මරණය ස්වභාවකොට ඇත්තේ වෙමි. මරණය නොනික්මවූයේ වෙමි. මරණය ස්වභාව කොට ඇත්තාවූ ජරාව නොනික්මවූ මම මරණයට ගියාවූ අනිකෙකු දැක තමා ප්‍රමාණය ඉක්මවා හැකිලෙන්නෙම් නම්, අප්‍රිය කරන්නෙම් නම්, පිළිකුල් කරන්නෙම් නම් එය මට සුදුසු නොවේය’ කියායි. මහණෙනි, මෙසේ සිතන්නාවූ ඒ මට යම් ජීවිත මදයක් වූයේද එය නැතිවිය.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/si/an3.39\">අංගුත්තර 3:39 - සුඛුමාල</a>";
      echo "</aside>";
      echo "</div>";
    }
     ?>
     <a name="assu"></a>
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
    <?php
    if ($language == "english") {
      echo "<h3>Inconceivable Beginning</h3><br/>";
      echo "<div class=\"col-lg-6\">";
      echo "Etadeva, bhikkhave, bahutaraṃ yaṃ vo iminā dīghena addhunā sandhāvataṃ saṃsarataṃ amanā­pa­sam­payogā manāpa­vippa­yogā kandantānaṃ rodantānaṃ assu passannaṃ paggharitaṃ, na tveva catūsu mahāsamuddesu udakaṃ.<br/><br/>";
      echo "Taṃ kissa hetu? Anamataggoyaṃ, bhikkhave, saṃsāro … pe … yāvañcidaṃ, bhikkhave, alameva sabba­saṅ­khā­resu nibbindituṃ, alaṃ virajjituṃ, alaṃ vimuccitun”ti.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/pi/sn15.3\">SN 15:3 - Assu</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "“This is the greater: the tears you have shed while transmigrating & wandering this long, long time—crying & weeping from being joined with what is displeasing, being separated from what is pleasing—not the water in the four great oceans.<br/><br/>";
      echo "“Why is that? From an inconceivable beginning comes transmigration. A beginning point is not evident, though beings hindered by ignorance and fettered by craving are transmigrating & wandering on. Long have you thus experienced stress, experienced pain, experienced loss, swelling the cemeteries—enough to become disenchanted with all fabricated things, enough to become dispassionate, enough to be released.”<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/SN/SN15_3.html\">SN 15:3 - Tears</a>";
      echo "</aside>";
      echo "</div>";
    } else {
      echo "<h3>මුලක් දැකිය නොහැකි</h3><br/>";
      echo "<div class=\"col-lg-6\">";
      echo "එතදෙව, භික්‌ඛවෙ, බහුතරං යං වො ඉමිනා දීඝෙන අද්‌ධුනා සන්‌ධාවතං සංසරතං අමනාපසම්‌පයොගා මනාපවිප්‌පයොගා කන්‌දන්‌තානං රොදන්‌තානං අස්‌සු පස්‌සන්‌නං පග්‌ඝරිතං, න ත්‌වෙව චතූසු මහාසමුද්‌දෙසු උදකං.<br/><br/>";
      echo "තං කිස්‌ස හෙතු? අනමතග්‌ගොයං, භික්‌ඛවෙ, සංසාරො …පෙ.… යාවඤ්‌චිදං, භික්‌ඛවෙ, අලමෙව සබ්‌බසඞ්‌ඛාරෙසු නිබ්‌බින්‌දිතුං, අලං විරජ්‌ජිතුං, අලං විමුච්‌චිතු’’න්‌ති.<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">සංයුත්ත 15:3 - අස්සු</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "මහණෙනි, ඇවිදින්නාවූ, සැරිසරන්නාවූ මේ දීර්ඝ කාලයෙහි අමනාපවූවන් හා සමග එක්වීමෙන් හා මනාපවූවන් ගෙන් වෙන්වීමෙන්ද, හඬන්නාවූ, වැළපෙන්නාවූ තොපගේ ගැලු යම් කඳුලක් වේද, එයම ඉතා අධිකවේ. සතර මහා සාගරයෙහි දිය අධික නොවේමය.<br/><br/>";
      echo "ඊට හේතුව කවරේද? මහණෙනි, අවිජ්ජාවෙන් වැසුණු තණ්හාවෙන් බැඳුනු, ඇවිදින්නාවූ, සැරිසරන්නාවූ සත්වයන්ගේ මේ සංසාරය නොදක්නා ලද, අග ඇත්තේ වේද, මුල් කොනත් නොදකියිද, එහෙයිනි. මහණෙනි, මෙසේ තොප විසින් දුක් අනුභව කරන ලදී. දැඩි දුක් අනුභව කරන ලදී. ව්‍යසන අනුභව කරන ලදී. සොහොන් බිම තර කරන ලදී. මහණෙනි, සියලු සංස්කාරයන් කෙරෙහි කලකිරීමට සුදුසුමය. නො ඇලීමට සුදුසුමය. ඔවුන්ගෙන් මිදීමට සුදුසුමය.”<br/><br/>";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/si/sn15.3\">සංයුත්ත 15:3 - කඳුලු</a>";
      echo "</aside>";
      echo "</div>";
    }
     ?>
    </div>
    </div>
    </div>
		</section>
</body>
</html>
