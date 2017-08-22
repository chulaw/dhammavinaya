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
    <title>DhammaVinaya | Path</title>
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
                  echo "<form class=\"navbar-form navbar-right\" role=\"form\" name=\"langForm\" method=\"get\" action=\"magga.php\">";
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
                    echo "<li class=\"active\">";
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
                    echo "<li class=\"active\">";
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
      echo "<h2><b>Magga | Path</b></h2>";
    } else {
      echo "<section id=\"mainlinksSi\">";
      echo "<h2><b>මග්ග | මාර්ගය</b></h2>";
    }
    ?>
    <br/>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
      <?php
      if ($language == "english") {
        echo "<h3>Graduated</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "Suppabuddhaṃ kuṭṭhiṃ ārabbha anupubbiṃ kathaṃ kathesi, seyyathidaṃ—dānakathaṃ sīlakathaṃ saggakathaṃ; kāmānaṃ ādīnavaṃ okāraṃ saṃkilesaṃ; nekkhamme ānisaṃsaṃ pakāsesi. Yadā bhagavā aññāsi suppabuddhaṃ kuṭṭhiṃ kallacittaṃ muducittaṃ vinīvara­ṇa­cittaṃ udaggacittaṃ pasannacittaṃ, atha yā buddhānaṃ sāmukkaṃsikā dhammadesanā taṃ pakāsesi—dukkhaṃ, samudayaṃ, nirodhaṃ, maggaṃ.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/ud5.3\">Ud 5.3: Kuṭṭhi­</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "So, aiming at Suppabuddha the leper, he gave a step-by-step talk: he proclaimed a talk on generosity, on virtue, on heaven; he declared the drawbacks, degradation, and corruption of sensuality, and the rewards of renunciation. Then when the Blessed One knew that Suppabuddha the leper’s mind was ready, malleable, free from hindrances, elevated and clear, he then gave the Dhamma-talk peculiar to Awakened Ones: stress, origination, cessation and path.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/KN/Ud/ud5_3.html\">Ud 5.3: The Leper</a>";
        echo "</aside>";
        echo "</div>";
      } else {
        echo "<h3>පිළිවෙල</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "සුප්‌පබුද්‌ධං කුට්‌ඨිං ආරබ්‌භ ආනුපුබ්‌බිං කථං කථෙසි, සෙය්‍යථිදං – දානකථං සීලකථං සග්‌ගකථං; කාමානං ආදීනවං ඔකාරං සඞ්‌කිලෙසං; නෙක්‌ඛම්‌මෙ ආනිසංසං පකාසෙසි. යදා භගවා අඤ්‌ඤාසි සුප්‌පබුද්‌ධං කුට්‌ඨිං කල්‌ලචිත්‌තං මුදුචිත්‌තං විනීවරණචිත්‌තං උදග්‌ගචිත්‌තං පසන්‌නචිත්‌තං, අථ යා බුද්‌ධානං සාමුක්‌කංසිකා ධම්‌මදෙසනා තං පකාසෙසි – දුක්‌ඛං, සමුදයං, නිරොධං, මග්‌ගං.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">උදාන 5.3 - සුප්‌පබුද්‌ධකුට්‌ඨි</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "සුප්‍රබුද්ධ නම් කුෂ්ට රෝගියා වෙනුවෙන් දාන කථා, ශීල කථා, ස්වර්ග කථා, කම්සැපයේ දෝෂය, පහත් බව, කිලිටුවීම, ගිහිගෙන් නික්මීමෙහි අනුසස් යන මේ පිළිවෙළ කථාව ප්‍රකාශ කළ සේක. භාග්‍යවතුන් වහන්සේ සුවපත් මෘදු නීවරණ පහවූ, ඔද වැඩි, පැහැදුනු සිත් ඇති සුප්‍රබුද්ධ නම් කුෂ්ට රෝගියා යම් අවස්ථාවක දත් සේක්ද, ඉක්බිති බුදුවරුන්ගේ යම් තමාම උසස් වන ධර්ම දේශනාවක් ඇද්ද, ඒ දුක දුක ඉපදීමට හේතුව, දුක් නැති කිරීම, දුක්නැති කිරීමේ මාර්ගය ප්‍රකාශ කළ සේක.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/si/ud5.3\">උදාන 5.3 - සුප්පබුද්ධ කුෂ්ට රෝගියා</a>";
        echo "</aside>";
        echo "</div>";
      }
       ?>
    <a name="sekha"></a>
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
      <?php
      if ($language == "english") {
        echo "<h3>To Be Trained</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "Atha kho āyasmā ānando mahānāmaṃ sakkaṃ āmantesi: “idha, mahānāma, ariyasāvako sīlasampanno hoti, indriyesu guttadvāro hoti, bhojane mattaññū hoti, jāgariyaṃ anuyutto hoti, sattahi saddhammehi samannāgato hoti, catunnaṃ jhānānaṃ ābhi­ce­tasi­kā­naṃ diṭṭha­dhamma­su­kha­vihārā­naṃ nikāmalābhī hoti akicchalābhī akasiralābhī.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/mn53\">MN 53: Sekha-paṭipadā</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "Then Ven. Ānanda addressed Mahānāma the Sakyan: “There is the case, Mahānāma, where a disciple of the noble ones is consummate in virtue, guards the doors to his sense faculties, knows moderation in eating, is devoted to wakefulness, is endowed with seven qualities, and obtains at will—without trouble or difficulty—the four jhānas that constitute heightened awareness and a pleasant abiding in the here and now.”";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/MN/MN53.html\">MN 53: The Practice for One in Training</a>";
        echo "</aside>";
        echo "</div>";
      } else {
        echo "<h3>පුහුණූ කළ යුතු</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "අථ ඛො ආයස්‌මා ආනන්‌දො මහානාමං සක්‌කං ආමන්‌තෙසි – ‘‘ඉධ , මහානාම, අරියසාවකො සීලසම්‌පන්‌නො හොති, ඉන්‌ද්‍රියෙසු ගුත්‌තද්‌වාරො හොති, භොජනෙ මත්‌තඤ්‌ඤූ හොති, ජාගරියං අනුයුත්‌තො හොති, සත්‌තහි සද්‌ධම්‌මෙහි සමන්‌නාගතො හොති, චතුන්‌නං ඣානානං ආභිචෙතසිකානං දිට්‌ඨධම්‌මසුඛවිහාරානං නිකාමලාභී හොති අකිච්‌ඡලාභී අකසිරලාභී.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">මජ්ඣිම 53 - සෙඛ</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "ඉක්බිති ආයුෂ්මත් ආනන්ද ස්ථවිර තෙම මහානාම ශාක්‍ය රජුට මෙසේ කීහ. “මහානාමය, මේ ශාසනයෙහි ආර්‍ය්‍ය ශ්‍රාවක තෙම සීලයෙන් යුක්තවූයේ වෙයිද, ඉන්ද්‍රියන්හි වැසූ දොරටු ඇත්තේ වෙයිද, භොජනයෙහි පමණ දන්නේ වෙයිද, නිදි දුරුකිරීමෙහි යෙදුනේ වෙයිද, සත්වැදෑරුම්වූ සද්ධර්මයන් ගෙන් යුක්තවූයේ වෙයිද, ශ්‍රෙෂ්ඨ සිත ඇසුරුකළාවූ මේ ආත්මයෙහි සැප විහරණ ඇත්තාවූ සිවු වැදෑරුම් ධ්‍යානයන් කැමති පරිදි ලබන්නේ වෙයි, සුවසේ ලබන්නේ වෙයි, මහත් වශයෙන් ලබන්නේ වෙයි.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/si/mn53\">මජ්ඣිම 53 - පුහුණූ කරන්නාගේ ප්‍රතිපදාව</a>";
        echo "</aside>";
        echo "</div>";
      }
       ?>
    <a name="kalama"></a>
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
      <?php
      if ($language == "english") {
        echo "<h3>Open to Investigation</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "“Alañhi vo, kālāmā, kaṅkhituṃ alaṃ vicikicchituṃ. Kaṅkhanīyeva pana vo ṭhāne vicikicchā uppannā. Etha tumhe, kālāmā, mā anussavena, mā paramparāya, mā itikirāya, mā piṭaka­sam­padā­nena, mā takkahetu, mā nayahetu, mā ākāra­pari­vitak­kena, mā diṭṭhi­nij­jhā­nak­khan­tiyā, mā bhabbarūpatāya, mā samaṇo no garūti. Yadā tumhe, kālāmā, attanāva jāneyyātha: ‘ime dhammā akusalā, ime dhammā sāvajjā, ime dhammā viññugarahitā, ime dhammā samattā samādinnā ahitāya dukkhāya saṃvattantī’ti, atha tumhe, kālāmā, pajaheyyātha.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/pi/an3.65\">AN 3:65 - Kālāmā</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "“Of course you are uncertain, Kālāmas. Of course you are in doubt. When there are reasons for doubt, uncertainty is born. So in this case, Kālāmas, don’t go by reports, by legends, by traditions, by scripture, by logical conjecture, by inference, by analogies, by agreement through pondering views, by probability, or by the thought, ‘This contemplative is our teacher.’ When you know for yourselves that, ‘These qualities are unskillful; these qualities are blameworthy; these qualities are criticized by the observant; these qualities, when adopted & carried out, lead to harm & to suffering’—then you should abandon them.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://www.dhammatalks.org/suttas/AN/AN3_66.html\">AN 3:66: To the Kalamas</a>";
        echo "</aside>";
        echo "</div>";
      } else {
        echo "<h3>විමර්ශනයට විවෘත</h3><br/>";
        echo "<div class=\"col-lg-6\">";
        echo "‘‘අලඤ්‌හි වො, කාලාමා, කඞ්‌ඛිතුං අලං විචිකිච්‌ඡිතුං. කඞ්‌ඛනීයෙව පන වො ඨානෙ විචිකිච්‌ඡා උප්‌පන්‌නා. එථ තුම්‌හෙ, කාලාමා, මා අනුස්‌සවෙන, මා පරම්‌පරාය, මා ඉතිකිරාය, මා පිටකසම්‌පදානෙන, මා තක්‌කහෙතු, මා නයහෙතු, මා ආකාරපරිවිතක්‌කෙන , මා දිට්‌ඨිනිජ්‌ඣානක්‌ඛන්‌තියා, මා භබ්‌බරූපතාය, මා සමණො නො ගරූති. යදා තුම්‌හෙ, කාලාමා, අත්‌තනාව ජානෙය්‍යාථ – ‘ඉමෙ ධම්‌මා අකුසලා, ඉමෙ ධම්‌මා සාවජ්‌ජා, ඉමෙ ධම්‌මා විඤ්‌ඤුගරහිතා, ඉමෙ ධම්‌මා සමත්‌තා සමාදින්‌නා අහිතාය දුක්‌ඛාය සංවත්‌තන්‌තී’’’ති, අථ තුම්‌හෙ, කාලාමා, පජහෙය්‍යාථ.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"http://tipitaka.org/sinh/\">අංගුත්තර 3:65 - කාලාම</a>";
        echo "</aside>";
        echo "</div>";
        echo "<div class=\"col-lg-6\">";
        echo "“කාලාමයෙනි, තොප විසින් සැක සාංකා ඉපදවීමට සුදුසුය. සැක කිරීමට සුදුසුය. තොපට සාංකා කළයුතු තන්හිම සැක උපන්නේය. කාලාමයෙනි, තෙපි අනුන් කියනු ඇසීමෙන් නොපිළිගනිව්. පරම්පරායෙහි ආ හෙයින් නොපිළිගනිව්. මෙය මෙසේ විය හැකියයිද නොපිළිගනිව්. අපගේ පිටක පාළිය යනු සමාන වේයයිද නොපිළිගනිව්. තර්කානුකූලයයිද නොපිළිගනිව්. න්‍යායට අනුකූලයයිද නොපිළිගනිව්. මේ කාරණය යහපතැයි කල්පනා කිරීමෙන්ද නොපිළිගත යුතුයි. අප නුවණින් තීරණය කොට ගන්නා ලද දෘෂ්ටියට සමානයයිද නොපිළිගනිව්. මේ මහණ තෙමේ යහපත් කෙනෙකි. ඔහුගේ කීම පිළිගත යුතුයයිද නොපිළිගනිව්. මේ ශ්‍රමණ තෙම අපගේ ගුරු යයිද නොපිළිගනිව්. කාලාමයෙනි යම් කලෙක්හි තෙපි මේ ධර්මයෝ අකුසල්ය. මේ ධර්මයෝ වරද සහිතය, මේ ධර්මයෝ නුවණැත්තන් විසින් ගර්හා කරනලදහ. පුරන ලද්දාවූ සමාදන් වන ලද්දාවූ මේ ධර්මයෝ අහිත පිණිස දුක් පිණිස පවතිත් යයි තුමූම දන්නාහුද එසේ ඇති කල්හි, කාලාමයෙනි තෙපි ඒ අකුශල ධර්මයන් දුරු කරන්නහුය.";
        echo "<aside id=\"notesQuote\">";
        echo "<br/>— <a href=\"https://suttacentral.net/si/an3.65\">අංගුත්තර 3:65 - කාලාමයන්ට</a>";
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
