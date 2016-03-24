<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2">WW2</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&category=seaforth">Seaforth Heighlanders</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&uniform=listopad1943">listopad 1943</a>');
$page->setTitle("Seaforth Highlanders (listopad 1943) | KVH Ústí nad Labem");
$container = "<h3>Vojín, 2. prapor Seaforth Highlanders, 152. brigáda, 51. horské divise, (listopad 1943)</h3>";

$container .= "<p>Vojín je oděn do battledressu P 37. Na vycházku má voják leštěné Ammo boots, nažehlené puky a stáhlý pas. Pro vycházky či tzv. \"off duty soldiers\" vojáci nenosili spinky ani pásek, nejčastěji je můžete potkat s brašnou přes rameno (malá polní, obal na gas masku, brašnu na světlice) místo kabely. Dle předpisů je možno mít u battledressu rozeplé nejen háčky u límce, ale též první knoflík (při boji je tento předpis podmíněn bojovými podmínkami).</p>

   <p>Battledress má ošitý barevnými vyšívanými či tkanými nášivkami (tištěné se v této době objevují zřídka, přesto plošně nahrazují tkané a vyšívané rokem roku 1944). Na vycházku tento vojín zvolil pokrývku hlavy zvanou Tam 'o' Shanter, jelikož je slunečné počasí, jindy by jistě volil známnější skotskou pokrývku hlavy - glengarry hat. Pěšáci fasovali žold 3 libry denně, přičemž jedna libra byla uložena do armádního fondu a vyplacena po odchodu z armády, zranění či po úmrtí rodině. Druhá libra byla šla na výlohy s vojákem spojené, čili jídlo, spaní, munici a třetí libru dostal voják do ruky. Nedostal ji každý den, nýbrž při odchodu na vycházku od příslušníka Army pay corps do Army pay book 63 (vojenská knížka a kniha žoldů). Tento voják má problém se zarůstajícími vousy a proto zažádal přes armádní lékařskou komisi o prominutí rozkazu se holit co dva dny. Dle bradky bylo jeho žádosti vyhověno, tento dekret je voják povinnen nosit ve své vojenské knížce.</p>";

$container .= '<div class="imgWrapper">';
for($i=1; $i < 3; $i++){
	$container .= "<a href='images/uniformy/seaforth/large/$i.jpg' rel='lightbox[uniform]'><img src='images/uniformy/seaforth/small/$i.jpg' class='img_uniformy'></a>";
}
$container .= '</div>';

$container .= "<div>Zdroje:
                <ul>
                    <li>Equipment of the WWII Tommy, Gordon B., Pictorial Histories Publishing Co. 2010</li>
                    <li><a href='https://en.wikipedia.org/wiki/Polish_mine_detector' target='_blank'>https://en.wikipedia.org/wiki/Polish_mine_detector</li>
                    <li><a href='http://www.rotanazdar.cz/?p=581' target='_blank'>http://www.rotanazdar.cz/?p=581</li>
                    <li><a href='http://www.iwm.org.uk/collections/item/object/30112573' target='_blank'>http://www.iwm.org.uk/collections/item/object/30112573</li>
                </ul>
                </div>";
return $container;