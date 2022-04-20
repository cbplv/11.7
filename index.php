<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
<?php $a = 0; $b=0; ?>
<table class="table">
    <thead> 
    <tr class="table-active">
        <th><strong>A</strong></th>
        <th><strong>B</strong></th>
        <th><strong>!A</strong></th>
        <th><strong>A || B</strong></th>
        <th><strong>A & B</strong></th>
        <th><strong>A xor B</strong></th>
    </tr>
    </thead>
    <tbody>
<?php  
    $ths = "<th>"; $the = "</th>"; $thm = $the.$ths;
    $a = 0; $b = 0; 

    for ($i = 1; $i <= 4; $i++) {
        if( $i%2 == 0 || $i == 4 ) $b = 1 ; else $b = 0;
        if( $i>2 ) $a=1;

            echo "<tr>";
            echo $ths.$a.$thm.$b.$thm;
            echo (int)!$a.$thm.(int)($a || $b).$thm.(int)(  $a & $b).$thm.(int)($a xor $b).$the;
            echo "</tr>";
    }        
?>        
    </tbody>
</table>
«Гибкое сравнение в PHP»
<table class="table table-striped">
    <?php
        $var1 = true; $var2 = false; $var3 = 1; $var4 = 0; $var5= -1; $var6 = '1'; $var7 = null; $var8 = 'php';
        $ths = "<th>"; $the = "</th>"; $thm = $the.$ths;
    echo '<thead><tr class="table-active">';
    echo $ths.$thm.var_export($var1, true).$thm.var_export($var2, true).$thm.$var3.$thm.$var4.$thm.$var5.$thm.var_export($var6, true).$thm.var_export($var7, true).$thm.var_export($var8, true).$thm.$the;
    echo '</tr></thead>';
    echo '<tbody>';
        for ($i = 1; $i <= 8; $i++){
            if ( $i == 1 ) {
                $var = $var1;
                $preStr = '<tr>'.$ths.var_export($var1, true).$thm.(int)((bool)$var==$var1).$thm.(int)((bool)$var==$var2);
            }
            elseif ($i == 2 ) {
                $var = $var2;
                $preStr = '<tr>'.$ths.var_export($var2, true).$thm.(int)((bool)$var==$var1).$thm.(int)((bool)$var==$var2);
            }                    
            elseif ($i == 3 ) $var = $var3;
            elseif ($i == 4 ) $var = $var4;
            elseif ($i == 5 ) $var = $var5;
            elseif ($i == 6 ) $var = $var6;
            elseif ($i == 7 ) $var = $var7;
            elseif ($i == 8 ) $var = $var8;

            if ($i > 2 && $i <= 8) $preStr = '<tr>'.$ths.var_export($var, true).$thm.(int)($var==$var1).$thm.(int)($var==$var2);
            
            echo $preStr.$thm.(int)($var==$var3).$thm.(int)($var==$var4).$thm.(int)($var==$var5).$thm.(int)($var==$var6).$thm.(int)($var==$var7).$thm.(int)($var==$var8).$thm.$the.'</tr>';
            }
        echo '</tbody>';
    ?>
</table> 
«Жёсткое сравнение в PHP»
<table class="table table-striped">
    <?php
        $var1 = true; $var2 = false; $var3 = 1; $var4 = 0; $var5= -1; $var6 = '1'; $var7 = null; $var8 = 'php';
        $ths = "<th>"; $the = "</th>"; $thm = $the.$ths;
    echo '<thead><tr class="table-active">';
    echo $ths.$thm.var_export($var1, true).$thm.var_export($var2, true).$thm.$var3.$thm.$var4.$thm.$var5.$thm.var_export($var6, true).$thm.var_export($var7, true).$thm.var_export($var8, true).$thm.$the;
    echo '</tr></thead><tbody>';
        for ($i = 1; $i <= 8; $i++){
            if ( $i == 1 ) {
                $var = $var1;
                $preStr = '<tr>'.$ths.var_export($var1, true).$thm.(int)((bool)$var===$var1).$thm.(int)((bool)$var===$var2);
            }
            elseif ($i == 2 ) {
                $var = $var2;
                $preStr = '<tr>'.$ths.var_export($var2, true).$thm.(int)((bool)$var===$var1).$thm.(int)((bool)$var===$var2);
            }                    
            elseif ($i == 3 ) $var = $var3;
            elseif ($i == 4 ) $var = $var4;
            elseif ($i == 5 ) $var = $var5;
            elseif ($i == 6 ) $var = $var6;
            elseif ($i == 7 ) $var = $var7;
            elseif ($i == 8 ) $var = $var8;

            if ($i > 2 && $i <= 8) $preStr = '<tr>'.$ths.var_export($var, true).$thm.(int)($var===$var1).$thm.(int)($var===$var2);
            
            echo $preStr.$thm.(int)($var===$var3).$thm.(int)($var===$var4).$thm.(int)($var===$var5).$thm.(int)($var===$var6).$thm.(int)($var===$var7).$thm.(int)($var===$var8).$thm.$the.'</tr>';
            }
    echo '</tbody>';
    ?>
</table> 