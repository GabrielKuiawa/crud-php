<?php
  define('HOST', '127.0.0.1');
  define('USUARIO', 'usuario');
  define('SENHA', 'senha');
  define('DB', 'canalti');
  
  $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>
