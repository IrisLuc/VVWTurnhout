<?php
$strAntwoord = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!isset($_POST['fnaam']) || $_POST['fnaam'] == ''){
        $strAntwoord .= '<br>Gelieve je naam in te vullen.';
    }
    if (!isset($_POST['fadres']) || $_POST['fadres'] == ''){
        $strAntwoord .= '<br>Gelieve je adres in te vullen.';
    }
    if (!isset($_POST['fwoonplaats']) || $_POST['fwoonplaats'] == ''){
        $strAntwoord .= '<br>Gelieve je woonplaats in te vullen.';
    }
    if (!isset($_POST['fgeboorte']) || $_POST['fgeboorte'] == ''){
        $strAntwoord .= '<br>Gelieve je geboortedatum in te vullen.';
    }
    if (!isset($_POST['fsoort']) || $_POST['fsoort'] == ''){
        $strAntwoord .= '<br>Gelieve je een type boot te selecteren.';
    }
    if (!isset($_POST['fgraden']) || $_POST['fgraden'] == ''){
        $strAntwoord .= '<br>Gelieve een graad te selecteren.';
    }
	if (!isset($_POST['fdata']) || $_POST['fdata'] == ''){
        $strAntwoord .= '<br>Gelieve een van de data te selecteren.';
    }
} else {
    $strAntwoord .= '<br>Server kan nog respond to this request.';
}
if ($strAntwoord == ''){
    $strAntwoord .= 'U inschrijving werd goed geregistreerd.';
}
print("Antwoord van de server: " . $strAntwoord);
?>