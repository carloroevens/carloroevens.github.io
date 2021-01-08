<?php
/*
*	Cette class récupére les logs pour la vérification de la connection de l'admin
*/
class AdminManager extends Manager
{
	public function getLog()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT email, password FROM admin');
		$data = $req->fetch();

		return $data;
	}
}