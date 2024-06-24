<?php
function seguranca()
{
          if (empty($_SESSION['login']) && empty($_SESSION['nivel'])) {
                    header("location:index.php");
          }
}

seguranca();
