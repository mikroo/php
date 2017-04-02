<?php 
// Les deux types de tableaux

// Tableau numéroté
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
// Créer manuellement le tableau case par case
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';
// Tableau manuellement san numéroté
$prenoms[] = 'François';
$prenoms[] = 'Michel';
$prenoms[] = 'Nicole';

// Afficher un élément du tableau
echo $prenoms[3];

// Tableau associatifs
$coordonnees = array(
	'prenom' => 'François',
	'nom' => 'Dupont',
	'adresse' => '3 Rue du Parasis',
	'ville' => 'Marseille');
// Créer manuellement le tableau case par case
$coordonnees['prenom'] = 'François';
// etc ...

// Parcourir un tableau

// boucle for
for($i = 0; $i < count($prenoms); $i++){
	echo $prenoms[$i]. '<br />';
}

// boucle forEach
foreach ($prenoms as $element) {
	echo $element . '<br />'; // Affichera $prenom[0], $prenom[1], etc..
}

// parcourir tableau associatif
foreach ($coordonnees as $element) {
	echo $element . '<br />'; 
}
foreach ($coordonnees as $key => $element) {
	echo '['.$key.'] vaut '. $element.'<br />';
}

// Afficher avec print_r
echo '<pre>';
print_r($coordonnees);
echo '<pre/>';

// Rechercher dans un tableau
// array_key_exists
echo array_key_exists('prenom', $coordonnees);
// in_array
echo in_array('Michel', $prenoms);

//array_search
echo in_array('Nicole', $prenoms);
