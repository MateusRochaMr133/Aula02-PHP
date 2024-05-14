<?php
    $idade = 30;
    $sexo = 'masculino';
    

    /* Verificar se a pessoa tem idade entre 18 a 30 anos do sexo feminino */
    if ($idade >= 18 && $idade <=30 && $sexo=='masculino') {
        echo "atende aos critérios";
    }

    else {
        echo "Não atende aos critérios";
    }

?>