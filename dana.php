<!DOCTYPE html>
<?php
session_start();
if(isset($_GET['language'])) {
   $language = $_GET['language'];
} else {
   $language = "english";
}
?>
<html>
<head>
    <title>DhammaVinaya | Generosity</title>
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
                  echo "<form class=\"navbar-form navbar-right\" role=\"form\" name=\"langForm\" method=\"get\" action=\"dana.php\">";
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
                    echo "<li class=\"active\">";
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
                    echo "<li class=\"active\">";
                    echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">දානය <span class=\"caret\"></span></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"dana.php?language=sinhala\">දානයේ විපාක</a></li>";
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
      echo "<h2><b>Dāna | Generosity</b></h2>";
    } else {
      echo "<section id=\"mainlinksSi\">";
      echo "<h2><b>දාන | දානය</b></h2>";
    }
    ?>
    <br/>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
      <?php
      if ($language == "english") {
        echo "<h3>Results of Giving</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "“Evañce, bhikkhave, sattā jāneyyuṃ dāna­saṃ­vibhā­gassa vipākaṃ yathāhaṃ jānāmi, na adatvā bhuñjeyyuṃ, na ca nesaṃ maccheramalaṃ cittaṃ pariyādāya tiṭṭheyya. Yopi nesaṃ assa carimo ālopo carimaṃ kabaḷaṃ, tatopi na asaṃvibhajitvā bhuñjeyyuṃ, sace nesaṃ paṭiggāhakā assu. Yasmā ca kho, bhikkhave, sattā na evaṃ jānanti dāna­saṃ­vibhā­gassa vipākaṃ yathāhaṃ jānāmi, tasmā adatvā bhuñjanti, mac­chera­malañca nesaṃ cittaṃ pariyādāya tiṭṭhatī”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/iti26\">It 26: Dāna</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "“Monks, if beings knew, as I know, the results of giving and sharing, they would not eat without having given, nor would the stain of selfishness overcome their minds. Even if it were their last bite, their last mouthful, they would not eat without having shared, if there were someone to receive their gift. But because beings do not know, as I know, the results of giving and sharing, they eat without having given. The stain of selfishness overcomes their minds.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/KN/Iti/iti26.html\">It 26: Giving</a>";
        echo "</aside>";
        echo "</div>";
      } else {
        echo "<h3>දානයේ විපාක</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "‘‘එවඤ්‌චෙ, භික්‌ඛවෙ, සත්‌තා ජානෙය්‍යුං දානසංවිභාගස්‌ස විපාකං යථාහං ජානාමි, න අදත්‌වා භුඤ්‌ජෙය්‍යුං, න ච නෙසං මච්‌ඡෙරමලං චිත්‌තං පරියාදාය තිට්‌ඨෙය්‍ය. යොපි නෙසං අස්‌ස චරිමො ආලොපො චරිමං කබළං, තතොපි න අසංවිභජිත්‌වා භුඤ්‌ජෙය්‍යුං, සචෙ නෙසං පටිග්‌ගාහකා අස්‌සු. යස්‌මා ච ඛො, භික්‌ඛවෙ, සත්‌තා න එවං ජානන්‌ති දානසංවිභාගස්‌ස විපාකං යථාහං ජානාමි, තස්‌මා අදත්‌වා භුඤ්‌ජන්‌ති, මච්‌ඡෙරමලඤ්‌ච නෙසං චිත්‌තං පරියාදාය තිට්‌ඨතී’’";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">ඉතිවුත්තක 26: දාන</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "“මහණෙනි, මම යම් ප්‍රකාරයකින් දාන සංවිභාගයාගේ විපාකය එපරිද්දෙන් සත්වයෝ ඉදින් දන්නාහු නම් නොදී අනුභව නොකරන්නාහුය. ඔවුන්ගේ මසුරු මලද (නොහොත්) මසුරු බව හා දානයට අන්තරාය කරන්නාවූ ඊර්ෂ්‍යා (ලොභ ද්වෙෂාදී ක්ලෙශමලද සිත මැඩ නොම සිටින්නේය, ඔවුන්ගේ (සියල්ලට) පසුවූ ආලොපයෙක් අන්තිම බත් පිඬෙක් වන්නේද, ඉනිදු බෙදා නොදී අනුභව නොකරන්නාහුය, “ඉදින් ඔවුනට ප්‍රතිග්‍රාහකයෝ වන්නාහුනම් (දෙත්මය) “මහණෙනි, යම් හෙයකින් වනාහි යම්සේ මම දාන සංවිභාගයාගේ විපාකය දනිම්ද එපරිද්දෙන් සත්වයෝ නොදනිද්ද, එහෙයින් නොදී අනුභව කරති, මසුරු මලද ඔවුන්ගේ සිත මැඩගෙන සිටීයයි.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/iti26\">ඉතිවුත්තක 26: දානය</a>";
        echo "</aside>";
        echo "</div>";
      }
       ?>
    <a name="sap­purisa­dana"></a>
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
      <?php
      if ($language == "english") {
        echo "<h3>Person of Integrity’s Gifts</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "“Saddhāya kho pana, bhikkhave, dānaṃ datvā yattha yattha tassa dānassa vipāko nibbattati, aḍḍho ca hoti mahaddhano mahābhogo, abhirūpo ca hoti dassanīyo pāsādiko paramāya vaṇṇa­pok­kha­ra­tāya samannāgato.<br/><br/>";
        echo "Sakkaccaṃ kho pana, bhikkhave, dānaṃ datvā yattha yattha tassa dānassa vipāko nibbattati, aḍḍho ca hoti mahaddhano mahābhogo. Yepissa te honti puttāti vā dārāti vā dāsāti vā pessāti vā kammakarāti vā, tepi sussūsanti sotaṃ odahanti aññā cittaṃ upaṭṭhapenti.<br/><br/>";
        echo "Kālena kho pana, bhikkhave, dānaṃ datvā yattha yattha tassa dānassa vipāko nibbattati, aḍḍho ca hoti mahaddhano mahābhogo; kālāgatā cassa atthā pacurā honti.<br/><br/>";
        echo "Anug­gahi­ta­citto kho pana, bhikkhave, dānaṃ datvā yattha yattha tassa dānassa vipāko nibbattati, aḍḍho ca hoti mahaddhano mahābhogo; uḷāresu ca pañcasu kāmaguṇesu bhogāya cittaṃ namati.<br/><br/>";
        echo "Attānañca parañca anupahacca kho pana, bhikkhave, dānaṃ datvā yattha yattha tassa dānassa vipāko nibbattati, aḍḍho ca hoti mahaddhano mahābhogo; na cassa kutoci bhogānaṃ upaghāto āgacchati aggito vā udakato vā rājato vā corato vā appiyato vā dāyādato.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/an5.148\">AN 5.148: Sap­purisa­dāna</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "“Having given a gift with a sense of conviction, he—wherever the result of that gift ripens—is rich, with much wealth, with many possessions. And he is well-built, handsome, extremely inspiring, endowed with a lotus-like complexion.<br/><br/>";
        echo "Having given a gift attentively, he—wherever the result of that gift ripens—is rich, with much wealth, with many possessions. And his children, wives, slaves, servants, and workers listen carefully to him, lend him their ears, and serve him with understanding hearts.<br/><br/>";
        echo "Having given a gift in season, he—wherever the result of that gift ripens—is rich, with much wealth, with many possessions. And his goals are fulfilled in season.<br/><br/>";
        echo "Having given a gift with an empathetic heart, he—wherever the result of that gift ripens—is rich, with much wealth, with many possessions. And his mind inclines to the enjoyment of the five strings of lavish sensuality.<br/><br/>";
        echo "Having given a gift without adversely affecting himself or others, he—wherever the result of that gift ripens—is rich, with much wealth, with many possessions. And not from anywhere does destruction come to his property—whether from fire, from water, from kings, from thieves, or from hateful heirs.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/AN/AN5_148.html\">AN 5.148: A Person of Integrity’s Gifts</a>";
        echo "</aside>";
        echo "</div>";
      } else {
        echo "<h3>සත්පුරුෂ දානය</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "‘‘සද්‌ධාය ඛො පන, භික්‌ඛවෙ, දානං දත්‌වා යත්‌ථ යත්‌ථ තස්‌ස දානස්‌ස විපාකො නිබ්‌බත්‌තති, අඩ්‌ඪො ච හොති මහද්‌ධනො මහාභොගො, අභිරූපො ච හොති දස්‌සනීයො පාසාදිකො පරමාය වණ්‌ණපොක්‌ඛරතාය සමන්‌නාගතො.";
        echo "‘‘සක්‌කච්‌චං ඛො පන, භික්‌ඛවෙ, දානං දත්‌වා යත්‌ථ යත්‌ථ තස්‌ස දානස්‌ස විපාකො නිබ්‌බත්‌තති, අඩ්‌ඪො ච හොති මහද්‌ධනො මහාභොගො. යෙපිස්‌ස තෙ හොන්‌ති පුත්‌තාති වා දාරාති වා දාසාති වා පෙස්‌සාති වා කම්‌මකරාති වා, තෙපි සුස්‌සූසන්‌ති සොතං ඔදහන්‌ති අඤ්‌ඤා චිත්‌තං උපට්‌ඨපෙන්‌ති.";
        echo "‘‘කාලෙන ඛො පන, භික්‌ඛවෙ, දානං දත්‌වා යත්‌ථ යත්‌ථ තස්‌ස දානස්‌ස විපාකො නිබ්‌බත්‌තති, අඩ්‌ඪො ච හොති මහද්‌ධනො මහාභොගො; කාලාගතා චස්‌ස අත්‌ථා පචුරා හොන්‌ති.";
        echo "‘‘අනුග්‌ගහිතචිත්‌තො ඛො පන, භික්‌ඛවෙ, දානං දත්‌වා යත්‌ථ යත්‌ථ තස්‌ස දානස්‌ස විපාකො නිබ්‌බත්‌තති, අඩ්‌ඪො ච හොති මහද්‌ධනො මහාභොගො; උළාරෙසු ච පඤ්‌චසු කාමගුණෙසු භොගාය චිත්‌තං නමති.";
        echo "‘‘අත්‌තානඤ්‌ච පරඤ්‌ච අනුපහච්‌ච ඛො පන, භික්‌ඛවෙ, දානං දත්‌වා යත්‌ථ යත්‌ථ තස්‌ස දානස්‌ස විපාකො නිබ්‌බත්‌තති, අඩ්‌ඪො ච හොති මහද්‌ධනො මහාභොගො; න චස්‌ස කුතොචි භොගානං උපඝාතො ආගච්‌ඡති අග්‌ගිතො වා උදකතො වා රාජතො වා චොරතො වා අප්‌පියතො වා දායාදතො වා.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">අංගුත්තර 5:148 - සප්පුරිසදාන</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "’’මහණෙනි, ශ්‍රද්‍ධාවෙන් වනාහි දානය දී යම් යම් තැනෙක්හි ඒ දානයාගේ විපාතය උපදීද, (ඒ ඒ තන්හි) ආඪ්‍ය වූයේද, මහත් ධන ඇත්තේද, මහත් සම්පත් ඇත්තේද වේ. විශිෂ්ට රූ ඇත්තේ, දැකුම්කළුවූයේ, ප්‍රසාද එළවන්නේ, උතුම්වූ වර්‍ණ සෞන්‍දර්‍ය්‍යයෙන් යුක්තවූයේද වේ.";
        echo "’’මහණෙනි, සකස් වශයෙන් වනාහි දානය දී යම් යම් තැනෙක්හි ඒ දානයාගේ විපාතය උපදීද, (ඒ ඒ තන්හි) ආඪ්‍ය වූයේද, මහත් ධන ඇත්තේද, මහත් සම්පත් ඇත්තේද වේ. මොහුගේ පුත්‍රයෝය කියා හෝ, භාර්‍ය්‍යාවය කියා හෝ, දාසයෝය කියා හෝ, පණිවිඩකාරයෝය කියා හෝ, කම්කරුවෝය කියා හෝ ඒ යම් කෙනෙකුන් වෙද්ද, ඔවුහුද කියන ලද්ද අසන්ට කැමති වෙත්. කණ එළවා තබත්. දැන ගැනීමට සිත එළවා තබත්.";
        echo "’’මහණෙනි, සුදුසු කාලයෙහි වනාහි දානය දී යම් යම් තැනෙක්හි ඒ දානයාගේ විපාතය උපදීද, (ඒ ඒ තන්හි) ආඪ්‍ය වූයේද, මහත් ධන ඇත්තේද, මහත් සම්පත් ඇත්තේද වේ. මොහුට සුදුසු කල්හි පැමිණියාවූ සම්පත්ද බොහෝ වෙත්.";
        echo "’’මහණෙනි, මුදනලද සිත් ඇතිව වනාහි දානය දී යම් යම් තැනෙක්හි ඒ දානයාගේ විපාතය උපදීද, (ඒ ඒ තන්හි) ආඪ්‍ය වූයේද, මහත් ධන ඇත්තේද, මහත් සම්පත් ඇත්තේද වේ. මහත්වූද පස්කම් ගුණයන්හි පරිභෝ්ග කිරීමට සිත නැමෙයි.";
        echo "’’මහණෙනි, තමන්ද අනුන්ද නොපෙලා වනාහි දානය දී යම් යම් තැනෙක්හි ඒ දානයාගේ විපාතය උපදීද, (ඒ ඒ තන්හි) ආඪ්‍ය වූයේද, මහත් ධන ඇත්තේද, මහත් සම්පත් ඇත්තේද වේ. මොහුගේ සම්පත්වලට ගින්නෙන් හෝ දියෙන් හෝ, රජුන්ගෙන් හෝ, සොරුන්ගෙන් හෝ, අප්‍රිය දායාදයන්ගෙන් හෝ, කොයිනුත් වැනසීමක්ද නොපැමිණේ.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/si/an5.148\">අංගුත්තර 5:148 - සත්පුරුෂ දානය</a>";
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
