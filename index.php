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
    <title>DhammaVinaya</title>
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
                  echo "<form class=\"navbar-form navbar-right\" role=\"form\" name=\"langForm\" method=\"get\" action=\"index.php\">";
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
                    echo "<li class=\"dropdown\">";
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
                    echo "<li class=\"dropdown\">";
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
    } else {
      echo "<section id=\"mainlinksSi\">";
    }
    ?>
    <div class="panel panel-inverse">
    <div class="panel-body">
    <div class="row">
    <?php

    if ($language == "english") {
      echo "<div class=\"col-lg-6\">";
      echo "Atha kho bhagavā āyasmantaṃ ānandaṃ āmantesi: “siyā kho panānanda, tumhākaṃ evamassa: ‘atītasatthukaṃ pāvacanaṃ, natthi no satthā’ti. Na kho panetaṃ, ānanda, evaṃ daṭṭhabbaṃ. Yo vo, ānanda, mayā dhammo ca vinayo ca desito paññatto, so vo mamaccayena satthā.";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/pi/dn16\">DN 16 - Mahāparinibbāna</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "Then the Blessed One said to Ven. Ānanda, “Now, if the thought occurs to any of you—‘The teaching has lost its arbitrator; we are without a Teacher’—do not view it in that way. Whatever Dhamma and Vinaya I have pointed out and formulated for you, that will be your Teacher after my passing.”";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/DN/DN16.html\">DN 16 - The Great Total Unbinding</a>";
      echo "</aside>";
      echo "</div>";
    } else {
      echo "<div class=\"col-lg-6\">";
      echo "අථ ඛො භගවා ආයස්‌මන්‌තං ආනන්‌දං ආමන්‌තෙසි – ‘‘සියා ඛො පනානන්‌ද, තුම්‌හාකං එවමස්‌ස – ‘අතීතසත්‌ථුකං පාවචනං, නත්‌ථි නො සත්‌ථා’ති. න ඛො පනෙතං, ආනන්‌ද, එවං දට්‌ඨබ්‌බං. යො වො, ආනන්‌ද, මයා ධම්‌මො ච විනයො ච දෙසිතො පඤ්‌ඤත්‌තො, සො වො මමච්‌චයෙන සත්‌ථා.";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/pi/dn16\">දීඝ 16 - මහාපරිනිබ්‌බාන</a>";
      echo "</aside>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
      echo "එවිට භාග්‍යවතුන් වහන්සේ ගෞරවනීය ආනන්ද තෙරුන් වහන්සේට මෙසේ වදාළ සේක. “ආනන්දය, ‘ශාසනය ශාස්තෘන් වහන්සේගෙන් පහව ගියේය. දැන් අපට අනුශාසනා කරන ගුරුවරයෙක් නැත’ යන අදහස ඉපදිය හැක්කේය. මේ කාරණය එසේ නොදත යුත්තේය. ආනන්දය, මා විසින් ඔබට දේශනා කළ ධර්මය සහ පණවන ලද විනය මාගේ ඇවෑමෙන් ඔබේ ගුරුවරයා වන්නේය.”";
      echo "<aside id=\"notesQuote\">";
      echo "<br/>— <a href=\"https://suttacentral.net/si/dn16\">දීඝ 16 - මහා පරිනිර්වාණ</a>";
      echo "</aside>";
      echo "</div>";
    }
     ?>
    </div>
    <br/><img id="bo" src="images/bo.gif"/>
    </div>
    </div>
		</section>
</body>
</html>
