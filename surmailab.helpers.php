<?php

/**
 * @param $language
 *
 * @return string
 */
function _surmailab_choose_fromname($language) {
  switch ($language) {
    case 'es':
      return 'Virginia - Movemos Europa';
    case 'de':
      return 'Jörg Rohwedder - WeMove.EU';
    case 'fr':
      return 'Marine Gauthier - WeMove.EU';
    case 'it':
      return 'Olga - WeMove.EU';
    case 'pl':
      return 'Julia - WeMove.EU';
    default:
      return 'Mika - WeMove.EU';
  }
}


/**
 * @param $language
 *
 * @return int
 */
function _surmailab_choose_footer($language) {
  switch ($language) {
    case 'es':
      return 13;
    case 'de':
      return 10;
    case 'fr':
      return 12;
    case 'it':
      return 11;
    case 'pl':
      return 15;
    default:
      return 14;
  }
}


/**
 * @param $language
 *
 * @return int
 */
function _surmailab_choose_campaign($language) {
  switch ($language) {
    case 'es':
      return 309;
    case 'de':
      return 306;
    case 'fr':
      return 304;
    case 'it':
      return 305;
    case 'pl':
      return 307;
    default:
      return 308;
  }
}
