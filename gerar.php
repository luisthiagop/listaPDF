<?php      
    $dir = "./uploads/";
    $lista =[];
    // Abre um diretorio conhecido, e faz a leitura de seu conteudo
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($d = readdir($dh)) !== false && is_dir($dir.$d)) {
                if($d != "." && $d!=".."){
                    //lista para salvar os arquivos
                    $lista[$d]=[];
                    if ($dh1 = opendir($dir.$d)) {
                        $i=0;
                        while (($d1 = readdir($dh1)) !== false) {
                            if($d1 != "." && $d1!=".."){
                                //echo $dir.$d.$d1.'<br>';
                                $lista[$d][$i]['nome']=$d1;
                                $lista[$d][$i++]['url']=$dir.$d.'/'.$d1;
                            }
                        }
                    }
                }
            }
            closedir($dh);
        }
    }
    

    file_put_contents('lista.json', json_encode($lista));


    

  ?>