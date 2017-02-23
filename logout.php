<?php
setcookie('login',"true",time()-3600);
setcookie('ID',"",time()-3600); 
setcookie('loginw',"true",time()-3600);
setcookie('IDw',"",time()-3600);
  echo "<script language='javascript'>window.location.href='index.php'</script>";

?>