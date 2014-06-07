<?php

/*
if(!$this->Session->isLogged() && isset($_COOKIE['AL']) && $_COOKIE['AL'] != "")
{
	$ident = explode('|', $this->Security->rc4Decrypt($_COOKIE['AL']));

	$this->loadModel('User');
	$user = $this->User->checkAccount(@$ident[0], @$ident[1]);

	if($user)
	{
		$this->Security->generateToken();

		$this->Session->write('User', $user);
		$this->Session->setFlash("Bonjour ".ucfirst($user->login).".");
		$this->Log("Authentification réussi", __METHOD__);
		$this->redirect();
	}
}
*/