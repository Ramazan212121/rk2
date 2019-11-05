<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
	    <h1>Task1</h1>
	    <?php
	        echo '<table>';
	        $a=0;
	        $b=2;
	            while ($a<=10) {
		        $c=$a*$a;
		        echo '<tr><td>'$c'</td></tr>';
	            }
	            while  ($b<=4) {
		        $d=$b*$b*$b;
	 	        echo '<tr><td>'$d'</td></tr>';
		        $b+=1;
	            }
	        echo '</table>';
	    ?><br/>
	    <h1>Task2</h1>
	    <form action="" method='get'>
		    <p><input type='text' name='length'/></p>
		    <p><input type='text' name='width'/></p>
		    <p><input type='text' name='height'/></p>
		    <p>Что вам нужно рассчитать?</p>
		    <input type='checkbox' name='square'/>
		    <label for='square'>Площадь</label>
		    <input type='checkbox' name='value'/>
		    <label for='value'>Объем</label>
	    </form><br/>
	    <?php
	     $l=int($_GET['length']);
	     $w=int($_GET['width']);
	     $h=int($_GET['height']);
	     if(isset($_GET['square'])){
		    $s=$l*$w;
		    echo "$s";
	     }
	     if(isset($_GET['value'])){
		    $v=$l*$w*$h;
		    echo "$v";
	     }
	    ?>
    </body>
</html>
