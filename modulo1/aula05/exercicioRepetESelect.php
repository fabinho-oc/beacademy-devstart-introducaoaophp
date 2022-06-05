<select>
    <option select> -- Selecione o dia -- </option>

    <?php
    
        for ($dia = 1; $dia<= 31; $dia++){

              echo "<option>{$dia}</option>";

        }
        
    ?>
</select>

<select>
    <option select> -- Selecione o Mês -- </option>

    <?php
    
        for ($mes = 1; $mes<= 12; $mes++){

              echo "<option>{$mes}</option>";

        }
        
    ?>
</select>

<select>
    <option select> -- Selecione o Ano -- </option>

    <?php
    //exemplo realizado com decremento
        for ($ano = 2022; $ano>= 1900; $ano--){

              echo "<option>{$ano}</option>";

        }
        
    ?>
</select>

    <?php
    //Exercicio de repetção com For
           for ($refrao = 0; $refrao<= 20; $refrao++){

              echo "<br> É o pente";
        }
        
    ?>