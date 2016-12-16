<?php
/*Cette classe récupère des données d'utilisateur dans Dolibarr via le module Web Services REST*/

class Dolibarr {
	private $_url = "http://localhost/dolibarr/htdocs/api/index.php/user/";
	private $_key = "?api_key=663325f96837a0bf576b589c1322b851f641d578";

	public function getUser($id) {
		$apiURL = $this->_url.$id.$this->_key; // URL interrogeant les données d'un adhérent
		$user = header('Location: '.$apiURL);
		//$user = json_encode('{"element":"user","table_element":"user","id":"5","ldap_sid":"","search_sid":null,"employee":"0","gender":null,"email":"","skype":"","job":"","signature":"","address":"","zip":"","town":"","state_id":null,"state_code":null,"state":null,"office_phone":"","office_fax":"","user_mobile":"","admin":"0","login":"13","api_key":null,"entity":"1","pass":null,"pass_indatabase":null,"pass_indatabase_crypted":"30d69d863dde81562ce277fbc0a3cf18","datec":1481552807,"datem":1481552808,"societe_id":null,"contact_id":null,"socid":null,"contactid":null,"fk_member":null,"fk_user":null,"clicktodial_url":null,"clicktodial_login":null,"clicktodial_password":null,"clicktodial_poste":null,"datelastlogin":"","datepreviouslogin":"","statut":"1","photo":null,"lang":null,"rights":{"user":{"user":{},"self":{}}},"all_permissions_are_loaded":0,"conf":{},"oldcopy":null,"users":null,"parentof":null,"accountancy_code":"","thm":null,"tjm":null,"salary":null,"salaryextra":null,"weeklyhours":null,"color":"","error":null,"errors":[],"import_key":null,"array_options":[],"linkedObjectsIds":null,"linkedObjects":null,"context":[],"canvas":null,"project":null,"fk_project":null,"projet":null,"contact":null,"thirdparty":null,"user":null,"origin":null,"origin_id":null,"ref":"5","ref_previous":null,"ref_next":null,"ref_ext":null,"table_element_line":null,"country":null,"country_id":null,"country_code":"","barcode_type":null,"barcode_type_code":null,"barcode_type_label":null,"barcode_type_coder":null,"mode_reglement_id":null,"cond_reglement_id":null,"cond_reglement":null,"fk_delivery_address":null,"shipping_method_id":null,"modelpdf":null,"fk_account":null,"note_public":null,"note_private":null,"note":"","total_ht":null,"total_tva":null,"total_localtax1":null,"total_localtax2":null,"total_ttc":null,"lines":null,"fk_incoterms":null,"libelle_incoterms":null,"location_incoterms":null,"name":null,"lastname":"THEZE","firstname":"Julien","civility_id":null,"liste_limit":0,"clicktodial_loaded":0,"ref_int":null,"pass_temp":null,"openid":null}');
		//fake data
		return($user); //json
	}
}
?>
