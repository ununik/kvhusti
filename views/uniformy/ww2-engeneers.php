<?php
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2">WW2</a>');
$page->addToDrobeckovaNavigace('<a href="index.php?page=uniformy&subpage=ww2&category=engeneers">Royal Engeneers</a>');
$page->setTitle("Royal Engeneers | KVH Ústí nad Labem");
$container = "<h2>Královští ženisté (Royal Engeneers)</h2>";

$container .= "<h3>Štábní seržant královských ženistů (léto 1944)</h3>";

$container .= "<p><img src='images/uniformy/7th_Armoured kopie.png' class='uniformy_logo'>Štábní seržant královských ženistů spadající pod ženijní rotu 7. obrněné divise je nedílnou součástí každé britské pozemní jednotky. Příslušníci sboru královských ženistů mají na starosti jak demoliční práce, tak i odminování cesty, stavění mostů, zpevňování silnic nebo obnovení základních inženýrských sítí pro civilisty v např. ostřelovaném městě. Tento štábní seržant odminovává cestu. Postup odminování cesty byl snadný, první šel s minohledačkou a druhý člen odminovacího družstva ladil dle potřeby, hlídal prvního a označoval místa min tzv. markrem (označovačem). Další družstvo jenž šlo za nimi pak přímo odminovávalo. Tento štábní seržant má na sobě uniformu Patt. 37 s GS Cap s odznakem Královských ženistů. Ženista je vystrojen základním webbingem P37. V sumkách webbingu P37 má nářadí nutné ke štelování či jiné úpravě minohledačky, náhradní cívky, reproduktor a pár kabelů. Na webbingu dále má kleště na drát, plynovou masku Mk. II Light a na zádech má zesilovací jednotku oscilátoru a baterii pro minohledačku. Minohledačka samotná - Minedetector No.3 Polish je též přezdívaná Polish, protože byla navržena a obhájena poručíkem Józefem Kosackim, důstojníkem polské armády ve Velké Británii, v roce 1941. Nejhojnější využití měla v Severní Africe, ale též při bitvě o Itálii a téměř na celém evropském bojišti. Minohledačka, vážící 30 liber (cca 14Kg) se skládá z disku, ve kterém jsou dvě kruhové cívky, jenž se překrývají tak, aby se jejich indukční prostor rovnal nule. Jedna je napojena na oscilátor, který generoval oscilační proud akustické frekvence a druhá na elektronkový zesilovač do sluchátek. Pokud se disk dostal nad kovový předmět, ve sluchátkách se ozval tón a dle síly se mohla určit hloubka i velikost předmětu. Minohledačka lze díky přepínači nastavit na větší nebo drobné předměty. Minohledačka měla dva bateriové zdroje, slabý tvořený ze čtyř 1,5V článků a silný tvořený 60V baterií.</p>";

$container .= '<div class="imgWrapper">';
for($i=1; $i < 12; $i++){
        $container .= "<a href='images/uniformy/royal_engeneers/large/$i.jpg' rel='lightbox[uniform]'><img src='images/uniformy/royal_engeneers/small/$i.jpg' class='img_uniformy'></a>";
}
$container .= '</div>';

$container .= "<div><h4>Zdroje:</h4>
                <ul>
                    <li>Equipment of the WWII Tommy, Gordon B., Pictorial Histories Publishing Co. 2010</li>
					<li>Bouchery J. The British Tommy in nort west Europe 1944-1945, volume 1, Historie & Collections, Paris 1998, ISBN: 2-908182-44-0</li>
					<li>Chappel M. British Battle Insignia 2 1939-45, Osprey publishing, Oxford 1987, ISBN: 0-85045-739-4</li>
                    <li><a href='https://en.wikipedia.org/wiki/Polish_mine_detector' target='_blank'>https://en.wikipedia.org/wiki/Polish_mine_detector</li>
                    <li><a href='http://www.rotanazdar.cz/?p=581' target='_blank'>http://www.rotanazdar.cz/?p=581</li>
                    <li><a href='http://www.iwm.org.uk/collections/item/object/30112573' target='_blank'>http://www.iwm.org.uk/collections/item/object/30112573</a></li>
                </ul>
                </div>";
return $container;