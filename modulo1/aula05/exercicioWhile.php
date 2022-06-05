<select>
    <option select> -- Selecione o Ano -- </option>

    <?php
    //Primeiro exemplo: incrementando
    $ano = 1900;

        while ($ano<=2022){
        
            echo "<option>{$ano}</option>";
        
            $ano++;
        }
    ?>
</select>


<select>
    <option select> -- Selecione o Ano -- </option>

    <?php

    //Segundo exemplo: Decrementando
    $ano = 2022;

        while ($ano>=1900){
        
            echo "<option>{$ano}</option>";
        
            $ano--;
        }
    ?>
</select>


