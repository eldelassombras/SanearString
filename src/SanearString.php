<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SanearString
 *
 * @author csanhueza
 */
class SanearString {

	function __construct() {

	}

	//put your code here
	function sanear_string($string) {
		$string = trim($string);

		$string = str_replace(['á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'], ['a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'], $string);

		$string = str_replace(['é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'], ['e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'], $string);

		$string = str_replace(['í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'], ['i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'], $string);

		$string = str_replace(['ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'], ['o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'], $string);

		$string = str_replace(['ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'], ['u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'], $string);

		$string = str_replace(['ñ', 'Ñ', 'ç', 'Ç'], ['n', 'N', 'c', 'C',], $string);

		//Esta parte se encarga de eliminar cualquier caracter extraño
		//$string = str_replace(["\", "¨", "º", "-", "~","#", "@", "|", "!", ""","·", "$", "%", "&", "/","(", ")", "?", "'", "¡","¿", "[", "^", "<code>", "]","+", "}", "{", "¨", "´",">", "< ", ";", ",", ":",".", " "),'', $string);

		return $string;
	}

}
