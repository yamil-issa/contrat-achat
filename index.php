<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="signature.js"></script>
    <title>Contrat d'achat</title>
    <link rel="stylesheet" href="css/formStyle.css">
</head>
<body>
    <div class="form-container">
        <form class="form"  method="POST" action="makePdf.php">
            <p>veuillez remplir les informations </p>
            <input type="text" name="nom" placeholder="nom">
            <input type="text" name="prenom" placeholder="prenom">
            <input type="date" name="dateNaissance" placeholder="date de naissance" required pattern="\d{4}-\d{2}-\d{2}">
            <input type="text" name="telephone" placeholder="telephone">
            <input type="text" name="adresse" placeholder="adresse">
            <label for="pieceIdentite">Selectionnez le type de la piece d'identité:</label>
            <select name="pieceIdentite" id="pieceIdentite">
            <option value="carte de séjour">Carte de séjour</option>
            <option value="CNI">CNI</option>
            <option value="passeport">Passeport</option>
           </select>
            <input type="select" name="numero" placeholder="numero de la piece d'identité">

            <p>Délivré(e) par Préfecture de : </p>
            <input type="text" name="prefecture" placeholder="prefecture">
            <input type="textarea" name="materiel" placeholder="info matériel">

            <input type="text" name="prix" placeholder="prix">
            <label for="typePaiement">Selectionnez le moyen de paiement:</label>
            <select name="typePaiement" id="typePaiement">
            <option value="virements">virements</option>
            <option value="cheques">chèques</option>
            <option value="especes">espèces</option>
           </select>
           <div class="canvas-container">
           <div id="canvas">
            
           </div>
           
            <script>
				zkSignature.capture();
			</script>

           <button type="button" onclick="zkSignature.clear()">Clear</button>

           </div>

        

        

            <input class="submit-button" type="submit" value="generer attestation de vente" onclick="zkSignature.send()">



        </form>
    </div>
    
    
</body>
</html>
