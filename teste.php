<?php

 $link = mysql_connect('mysql://root:xQlVlgxemypISxypEwapahlPJZKYjWTn@junction.proxy.rlwy.net:27648/railway');
if (!$link) 

{

	die('Não pode ser conectado: ' . mysql_error());

}

echo 'Conexão com sucesso!';
mysql_close($link);

?>
 