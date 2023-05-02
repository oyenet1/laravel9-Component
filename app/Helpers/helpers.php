<?php

function isSuperAdmin(): bool
{
  return auth()->user()->role == 'superadmin';
}
function isAdmin(): bool
{
  return auth()->user()->role == 'admin';
}

?>