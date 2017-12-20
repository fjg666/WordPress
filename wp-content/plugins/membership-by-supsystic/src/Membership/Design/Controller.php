<?php

class Membership_Design_Controller extends Membership_Base_Controller
{

	public function indexAction(Rsc_Http_Request $request)
	{
		$settingsModel = $this->getModel('settings', 'design');
		$settings = $settingsModel->getSettings();
		$fontsList = $settingsModel->getFontsListForSelector();
		$rolesModel = $this->getModel('roles', 'roles');
		$roles = $rolesModel->getRoles();
		$wpMenuList = $settingsModel->getWpMenuListForSelector();

		return $this->response(
			'@design/backend/index.twig',
			array(
				'settings' => $settings,
				'roles' => $roles,
				'fontsList' => $fontsList,
				'wpMenuList' => $wpMenuList,
			)
		);
	}

	public function saveSettings($request) 
	{
		$settings = $request->get('settings');
		$this->getModel('settings', 'design')->saveSettings($settings);
	}
}
