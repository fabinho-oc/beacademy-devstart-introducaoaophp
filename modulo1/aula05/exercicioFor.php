<select>
    <option select> -- Selecione o Ano -- </option>

    <?php
    //exemplo realizado com decremento
        for ($ano = 2022; $ano>= 1900; $ano--){

              echo "<option>{$ano}</option>";

        }
        
    ?>
</select>

<select>
    <option select> -- Selecione o Ano -- </option>

    <?php
    //exemplo realizado com incremento
        for ($ano = 1900; $ano<= 2022; $ano++){

              echo "<option>{$ano}</option>";

        }
        
    ?>
</select>