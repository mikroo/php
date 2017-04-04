<?php 
// Ecrire un cookie
setcookie('pseudo','mikroo', time() + 365*24*3600);

// Sécuriser son cookie avec le mode httpOnly
setcookie('password','mikmikmai', time() + 365*24*3600, null, null, false, true);
