<?php 
require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Europe/Paris');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['dateNaissance'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$pieceIdentite = $_POST['pieceIdentite'];
$numero = $_POST['numero'];
$prefecture = $_POST['prefecture'];
$materiel = $_POST['materiel'];
$prix = $_POST['prix'];
$typePaiement = $_POST['typePaiement'];
$signature = $_POST['image'];
$date = date('d/m/y');






$mpdf = new \Mpdf\Mpdf();

if(isset($signature)) {

    $data = "<div>
<h1>CONTRAT ACHAT - LETTRE DE CESSION</h1>
<div class='info'>
    <p>Je soussigné(e) $prenom $nom</p></br>
    <p>domicilié(e) au $adresse</p></br>
    <p>né(e) le $dateNaissance</p></br>
    <p>N° de téléphone $telephone</p></br>
    <p>Pièce d’identité : $pieceIdentite </p></br>
    <p> n° $numero</p></br>
    <p>Délivré(e) par Préfecture de $prefecture</p></br>
    <p class='text'>certifie que les marchandises visées ci-après et vendues à PARIS SOULT, dont le
        siège social est situé 78 boulevard Mortier 75020 PARIS, sont ma propriété, ne sont
        ni gagées , ni nanties et ne sont soumises à aucune clause de réserve de propriété :</br>

    <p>$materiel</p>
    
    <p>Je reconnais avoir reçu pour paiement du prix de ces marchandises, la somme de
        $prix euros en bonne et valable quittance.
    </p>

    <p class='paiement'>Le paiement a été effectué par $typePaiement </p>

    <p class='date'>Fait le $date à Paris.</p></br></br></br></br>
    <p>Pour faire valoir ce que de droit.</p></br></br></br></br>
    <p class='signature'>[Signature du client]</p>

    <img src='$signature'>



</div>
</div>

<style>
* {
    font-family: 'Arial Narrow';
    margin: 0;
}

div {
   
    margin-top: 100px;
    margin-left: 4%;
    margin-right: 4%;
}

h1 {
    font-size: 15px;
    margin: 0;
    text-align: center;

}
.text {
    font-weight: bold;
    margin-bottom: 70px;
}

.paiement {
    margin-top: 60px;
}

.date {
    margin-top: 90px;
}
.signature {
    font-weight: bold;
    margin-bottom: 7%;
}
</style>";



$mpdf->WriteHtml($data);

$mpdf->Output('contrat.pdf', 'D');

}
else {
    echo"l'image n'a pas chargé";
}






?>
