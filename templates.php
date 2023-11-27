<?php
$loginForm = "    <form method='post'>
        <div>
            <input type='text' placeholder='username' name='username' id='' class='form-control'>
        </div>
        <div>
            <input type='password' placeholder='password' name='password' id='' class='form-control'>
        </div>
        <div>
            <button type='submit' class='btn btn-success'>log in</button>
        </div>

    </form>";

$badUsername = "<p>Username inconnu</p> <a href='/'>Retour</a>";
$wrongPassword = "<p>mauvais mot de passe</p> <a href='/'>Retour</a>";

function showCardsPoulet($tableauPoulets){

    $cardsPoulet = "<div class='row'>";

    foreach ($tableauPoulets as $poulet){

        $cardsPoulet.="        <div class='col-3 border border-dark'>
            <img width='150px' src='${poulet['image']}' alt=''>
            <p><strong>${poulet['nom']}</strong></p>
            <p>cuisson : ${poulet['cuisson']}</p>
            <p>accompagnement : ${poulet['accompagnement']}</p>
            <p>sauce : ${poulet['sauce']}</p>
            <form action='' method='post'>
                <input type='hidden' name='idPoulet' value='${poulet['id']}' >
                <input type='hidden' name='username' value='${_POST['username']}' >
                <input type='hidden' name='password' value='${_POST['password']}' >
            <button type='submit' class='btn btn-primary'>voir</button>
                </form>
        </div>";

    }

    $cardsPoulet.=" </div>";
    return $cardsPoulet;

}




function afficheUnPlat($tableauPoulet, $id)
{
    $pouletTrouve = "";
    foreach ($tableauPoulet as $poulet){


        if($poulet['id']== $id){
            $pouletTrouve = $poulet;
        }


    }

    $platDansUnTemplate = " <div class='col d-flex flex-column align-items-center border border-dark'>
            <img width='150px' src='${pouletTrouve['image']}' alt=''>
            <p><strong>${pouletTrouve['nom']}</strong></p>
            <p>cuisson : ${pouletTrouve['cuisson']}</p>
            <p>accompagnement : ${pouletTrouve['accompagnement']}</p>
            <p>sauce : ${pouletTrouve['sauce']}</p>
            <form method='post'>
            <input type='hidden' name='username' value='${_POST['username']}' >
            <input type='hidden' name='password' value='${_POST['password']}' >
            <button class='btn btn-warning' type='submit'>retour</button>
</form>
        </div>";

    return $platDansUnTemplate;
}

