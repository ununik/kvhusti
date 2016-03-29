<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2">WW2</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&category=seaforth">Seaforth Heighlanders</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&uniform=listopad1943">červenec 1943</a>');
$page->setTitle("Seaforth Highlanders (červenec 1943) | KVH Ústí nad Labem");

$container = "<h2>Seaforth Highlanders</h2>";
$container .= "<h3>WO1 2bn Seaforth Highlanders, Vizzini, Sicílie, 13. července 1943</h3>";

$container .= "<p><img src='images/uniformy/HD.png' class='uniformy_logo'>Warrant Officer 1st Class (WO1) je poddůstojnická hodnost, jenž má český ekvivalent praporčíka. Oproti jiným hodnostem jsou praporčíci britské armády označováni nad spodním okrajem rukávu. Na slavnostních uniformách i battledressu na obou rukávech, v tropickckých oblastech (džungle, poušť) na koženém řemínku většinou jen na jedné ruce, nejčastěji protější hodinkám. Tento praporčík příšluší druhému praporu Seaforth Highlanders spadající do 152. brigády 51. Highland divise, toto označení má na pruhu látky zavěšené za náramenník košile. Košile stejně jako i ohrnovací šortky (bombajky) nesou označení uniformy Khaki-Drill. Mezi Ammo boots a hnědými štulpnami s flashi typickými pro Seaforth má poddůstojník uvázané ovinky. Jeho výzbrojí je revolver Enfield No. 2 a pro britskou armádu typická dvoutónová píšťalka. Výstroj má jako ostatní mužstvo konopný webbing pattern 1937, který tvoří pár vysokých sumek, v tomto případě pro granáty, na pravém boku pak pouzdro na revolver a nábojovou sumku. Na zádech pak malá polní s pláštěnkou a smaltovaným hrnkem. Ve spodní části smaltovanou lahev ve filcovém pouzdru a rukávovém závěsu pro uchování teploty v tropických oblastech. Přes rameno a levý bok pak nový model lehké plynové masky a na hlavě ocelovou přilbu Mk. II se síťkou a obvazem. Na levé ruce má pak hodinky s koženým krytem ciferníku. Hodinky s krytem, šátek kolem krku, rukávový závěs na lahev a síťka na přilbě se v předchozí africké kampani velmi osvědčily do tohoto tropického i subtropického prostředí. Takto oděný, vystrojený i vyzbrojený poddůstojník byl po vylodění na Sicílii (operace Husky) nestandardně v čele svých mužů. Zde můžeme vidět, jak pročesává improvizovaný zákop před obcí Vizzini necelých 50km západně od Syrakůs. Dobytí Vizzini i severnějšího Palazzola umožnilo odlehčit tlaku kanadských jednotek na severozápadě, kterým se podařilo obsadit letiště a v následujícím dni kontaktovat Americké oddíly z jihozápadu. </p>";

$container .= '<div class="imgWrapper">';
for($i=101; $i < 107; $i++){
	$container .= "<a href='images/uniformy/seaforth/large/$i.jpg' rel='lightbox[uniform]'><img src='images/uniformy/seaforth/small/$i.jpg' class='img_uniformy'></a>";
}
$container .= '</div>';

$container .= "<div><h4>Zdroje:</h4>
                <ul>
                    <li>Bouchery J. The British Tommy in nort west Europe 1944-1945, volume 1, Historie & Collections, Paris 1998, ISBN: 2-908182-44-0</li>
                    <li>Brayley M. J. British web equipment of two word wars, the Crowood press Ltd. Ramsbury 2008, ISBN: 978-1-86126-743-6</li>
                    <li>Brayley M. J. The British Army 1939-45 (2) Middle East & Mediterranean, Osprey publishing, Oxford 2002, ISBN: 1-84176-237-7 </li>
                    <li>Gordon B. Equipment of the WWII Tommy, Pictorial Histories Publishing Co. 2010</li>
                    <li>Chappel M. British Battle Insignia 2 1939-45, Osprey publishing, Oxford 1987, ISBN: 0-85045-739-4</li>		
			</ul>
                </div>";
return $container;