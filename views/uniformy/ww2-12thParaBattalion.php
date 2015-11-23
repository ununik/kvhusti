<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14. 9. 2015
 * Time: 7:34
 */
$container = "<h2>12th parachute battalion</h2>";

$container .= "<h3>Vojín, 12th parachute battalion, 26. duben 1944, Wales</h3>";

$container .= "<p>Vojín příslušel 12. (Yorkshirskému) parapluku 5. výsadkové brigádě 6. výsadkové divise. Ve výcvikovém prostoru ve Walesu se tento parapluk po nočním výsadku cvičí na repliky svých cílů pro operaci Tonga, nočního výsadku 5. 6. 1944 v ústí řeky Orne a Caenského kanálu, kde je primární cíl potlačení odporu a obsazení pobřežních baterií. 
Vojín má na sobě Battledress patt. 40 s maskovacím převlečníkem Denisson. Na náramenících denissonu by měl mít světle modrý proužek s nápisem Yorkshire, který přísluší 12. parapluku, ovšem na základě rozkazu o sundání všech demaskujících prvků je vojín sundal již před cvičením. Na hlavě má parapřilbu Mk. II s plátěným (konopným) podbradníkem a uzlíkovou síťkou s maskovacími prvky. Obuv tvoří Ammo Boots, které má mezi kotníkem a nohavicemi seplé spinkami. Jeho výstroj tvoří webbing patt. 37, výsadkáři užívali širší sumky pro větší objem munice. V prostoru mezi levou sumkou a popruhem má bojovou dýku Farbairn-Sykes. Na pásku webbingu má taktéž polní lahev v rukávovém pouzdře, kopání, plynovou masku Mk. II Light, závěs na Spike (malý, kratší bajonet pro pušky No. 4 Mk. I a některé druhy samopalů Sten) a kleště na drát. Na zádech má malou polní, kterou má při seskoku seplou pod denissonem v oblasti třísel čí boků nebo ve vaku na noze, jelikož na zádech má padák typu X. Přes rameno má pak bandalír se zásobníky pro samopal sten, který je zároveň jeho primární zbraní. Přes ramena k bedrům má napínací lano tvořené tlustými a tenkými prameny.</p>";

for($i=1; $i < 7; $i++){
    $container .= "<a href='images/uniformy/parachute/large/$i.jpg' rel='lightbox[uniform]'><img src='images/uniformy/parachute/small/$i.jpg' class='img_uniformy'></a>";
}

$container .= "<div>Zdroje:
                <ul>
                    <li>Bouchery J. The British Tommy in nort west Europe 1944-1945, volume 1, Historie & Collections, Paris 1998, ISBN: 2-908182-44-0</li>
                    <li>Chappel M. British Battle Insignia 2 1939-45, Osprey publishing, Oxford 1987, ISBN: 0-85045-739-4</li>
                    <li>Jewell B. British Battledress 1937-1961, Osprey publishing Ltd. London 1981, ISBN: 0-85045-387-9</li>
                </ul>
                </div>";
return $container;