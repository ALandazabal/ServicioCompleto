<?php
class BuscarVisitaForm extends CFormModel {
	public $nombre;
	public function rules() {
	return array(
		array('nombre','required'),
	);
	}
}