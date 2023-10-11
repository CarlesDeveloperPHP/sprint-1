<?php
/*
P...#...
.##...#.
####....
######..
...##...

Un tauler de 8 x 5 caselles. En aquest tauler:

"P" representa el personatge que ha de creuar de dalt a baix el tauler.

"." representa caselles a les quals el personatge es pot moure.

"#" són caselles a les que el personatge no es pot moure.

El tauler es genera aleatòriament en cada partida, tenint en compte, però, que la casella del racó superior esquerra començarà amb el personatge allà.

L'objectiu és moure el personatge de dalt a baix mitjançant instruccions de teclat. El personatge es pot moure a dalt, a baix, a l'esquerra i a la dreta. Si el personatge no pot arribar(perquè el tauler aleatòriament generat ho impedeix), la partida acabarà també.

Podeu triar altres elements gràfics per representar la informació de la partida.

Bonus track: Posar un temps límit per acabar la partida(10 segons, per exemple)
*/

$horizontal = ["P"];
$vertical = array();

$casillasHorizontal =8;
$casillasVertical =5;
$punto =".";
$almohadilla ="#";

for ($j=0; $j < $casillasVertical ; $j++) { 
    echo PHP_EOL;
    for ($i=0; $i < $casillasHorizontal ; $i++) { 
        $casilla = rand(1,3);
        if ($casilla == 1){
        array_push($horizontal,$almohadilla);
        //echo $almohadilla;
        }else{
        array_push($horizontal,$punto);
        //echo $punto;
        }
    }  
}
array_unshift($horizontal,"P");



?>