<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => "El campo :attribute debe ser aceptado",
	"active_url"       => "El campo :attribute no es válido.",
	"after"            => "El campo :attribute debe ser una fecha después de :date.",
	"alpha"            => "El campo :attribute debe contener solo letras.",
	"alpha_dash"       => "El campo :attribute solo puede contener letras, números y guiones.",
	"alpha_num"        => "El campo :attribute solo debe contener letras y números.",
	"array"            => "El campo :attribute debe ser un array.",
	"before"           => "El campo :attribute debe ser una fecha antes de :date.",
	"between"          => array(
		"numeric" => "El campo :attribute debe contener entre :min y :max números.",
		"file"    => "El archivo :attribute debe pesar entre :min - :max kilobytes.",
		"string"  => "El campo :attribute debe contener de :min - :max caracteres.",
		"array"   => "El campo :attribute debe ser de :min - :max espacios.",
	),
	"confirmed"        => "El campo :attribute confirmación no coincide.",
	"date"             => "La :attribute no es válida.",
	"date_format"      => "La :attribute no conincide con el formato :format.",
	"different"        => "El campo :attribute y el campo :other deben ser diferentes.",
	"digits"           => "El campo :attribute debe ser de :digits digitos.",
	"digits_between"   => "Los digitos en :attribute deben ser entre :min y :max.",
	"email"            => "El formato de :attribute es inválido.",
	"exists"           => "El campo seleccionado :attribute es inválido.",
	"image"            => "El campo :attribute debe contener una imágen.",
	"in"               => "el campo seleccionado :attribute es inválido.",
	"integer"          => "El campo :attribute debe contener un valor entero.",
	"ip"               => "El campo :attribute debe contener una dirección IP válida.",
	"max"              => array(
		"numeric" => "El campo :attribute no puede contener mas de :max números.",
		"file"    => "El archivo :attribute no puede ser mas grande que :max kilobytes.",
		"string"  => "El campo :attribute no puede contener más de :max caracteres.",
		"array"   => "El campo :attribute no puede contener más de :max arreglos.",
	),
	"mimes"            => "The :attribute must be a file of type: :values.",
	"min"              => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "El archivo :attribute no puede ser menor de :min kilobytes.",
		"string"  => "El campo :attribute no puede contener menos de :min caracteres.",
		"array"   => "El campo :attribute no puede contener menos de :min arreglos.",
	),
	"not_in"           => "La seleccion :attribute es inválida.",
	"numeric"          => "El campo :attribute debe ser un número.",
	"regex"            => "el campo :attribute tiene un formato inválido.",
	"required"         => "El campo :attribute es requerido.",
	"required_if"      => "El campo :attribute es requerido cuando :other es :value.",
	"required_with"    => "El campo :attribute es requerido cuando :values está presente.",
	"required_without" => "El campo :attribute es requerido cuando :values no está presente.",
	"same"             => "La :attribute y la :other deben coincidir.",
	"size"             => array(
		"numeric" => "El campo :attribute debe contener :size. números",
		"file"    => "El archivo :attribute debe pesar :size kilobytes.",
		"string"  => "El campo :attribute debe contener :size letras.",
		"array"   => "El :attribute debe contener :size espacios.",
	),
	"unique"           => "El campo :attribute ya ha sido utilizado.",
	"url"              => "El formato de :attribute no es válido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'alm_fullname' => 'Nombre completo',
		'alm_materia' => 'Materia',
		'alm_carrera' => 'Carrera',
		'alm_periodo' => 'Periodo',
		'alm_maestro' => 'Maestro',
		'alm_email'  => 'Email'
		),

);
