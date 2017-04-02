<?php 
// Les ternaires : des condition condensées

// cas condition normal (if else)
$age = 24;
if($age >= 18)
{
	$majeur = true;
} 
else 
{
	$majeur = false;
}

// ternaire
$age = 24;
$majeur = ($age >= 18) ? true : false;
echo $majeur;