<?php
include("vues/v_header.php");

if(!isset($_REQUEST['uc']) || empty($_REQUEST['uc']))
        $uc = 'accueil';
    else{
        $uc = $_REQUEST['uc'];
    } 
switch($uc)
    {
        case 'accueil':
        {   
            include("vues/v_accueil.php");
            break;
        }

        case 'profil':
            {
                include("vues/v_profil.php");
                include("vues/v_footer.php");
                break;
            }

        case 'situation':
            {
                include("vues/v_situation.php");
                include("vues/v_footer.php");
                break;
            }

        case 'veille':
            {
                include("vues/v_veille.php");
                include("vues/v_footer.php");
                break;
            }
        
        case 'contact': 
            {
                include("vues/v_contact.php");
                include("vues/v_footer.php");
                break;
            }
    }

?>

