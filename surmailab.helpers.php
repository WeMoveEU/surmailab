<?php

function _surmailab_compose_body($body, $surveyId, $language) {
  $parts = array(
    '<p>'._surmailab_get_welcome($language).'</p>',
    '<p>'._surmailab_compose_link($surveyId, $language, _surmailab_get_linklabel1($language)).'</p>',
    $body,
    '<p>'._surmailab_compose_link($surveyId, $language, _surmailab_get_linklabel2($language)).'</p>',
    '<p>'._surmailab_get_goodbye($language).'</p>',
  );
  return implode('', $parts);
}


function _surmailab_get_welcome($language) {
  switch ($language) {
    case 'de':
      return 'Hallo';
      break;

    case 'es':
      return 'Hola,';
      break;

    case 'fr':
      return 'Bonjour,';
      break;

    case 'it':
      return 'Ciao,';
      break;

    default:
      return 'Dear,';
  }
}


function _surmailab_get_goodbye($language) {
  switch ($language) {
    case 'de':
      return 'Mit freundlichen Grüßen,<br>das gesamte WeMove.EU-Team';
      break;

    case 'es':
      return 'Con indignación,<br>todo el equipo de Movemos Europa';
      break;

    case 'fr':
      return 'Merci,<br>toute l’équipe de WeMove.EU.';
      break;

    case 'it':
      return 'Con determinazione,<br>il team di WeMove';
      break;

    default:
      return 'Best regards,<br>We Move Europe team';
  }
}


function _surmailab_get_linklabel1($language) {
  switch ($language) {
    case 'de':
      return 'Nehmen Sie an unserer Online-Umfrage teil.';
      break;

    case 'es':
      return 'Pincha aquí para realizar la encuesta';
      break;

    case 'fr':
      return 'Répondez au questionaire.';
      break;

    case 'it':
      return 'Clicca qui per compilare il sondaggio online';
      break;

    default:
      return 'Click here to take the online survey';
  }
}


function _surmailab_get_linklabel2($language) {
  switch ($language) {
    case 'de':
      return 'Sagen Sie uns Ihre Meinung! Beteiligen Sie sich an unserer Online-Umfrage!';
      break;

    case 'es':
      return 'Realiza la encuesta. ¡Es solo un minuto!';
      break;

    case 'fr':
      return 'Répondez au questionaire.';
      break;

    case 'it':
      return 'Fai il sondaggio online!';
      break;

    default:
      return 'Take the online survey!';
  }
}

function _surmailab_compose_link($surveyId, $language, $label) {
  $url = $_SERVER['HTTP_HOST'].'/'.$language.'/node/'.$surveyId;
  return '<a href="https://'.$url.'">'.$label.'</a>';
}
