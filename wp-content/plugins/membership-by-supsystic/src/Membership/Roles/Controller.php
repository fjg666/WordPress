<?php
class Membership_Roles_Controller extends Membership_Base_Controller {

	public function indexAction(Rsc_Http_Request $request) {

		$rolesModel = $this->getModel('Roles');
		$roles = $rolesModel->getRoles(true);
		$wpRoles = $rolesModel->getWpRoles();
		$defaultWpRole = get_option('default_role');

		return $this->response(
			'@roles/backend/index.twig',
			array(
				'roles' => $roles,
				'wpRoles' => $wpRoles,
				'wpDefaultRole' => $defaultWpRole,
			)
		);
	}

	public function createRole(Rsc_Http_Parameters $parameters) {

		$name = $parameters->get('name');
		$rolesModel = $this->getModel();
		$roleId = $rolesModel->createRole($name, serialize(array()), 'custom', serialize(array()));
		$error = $rolesModel->getError();

		if ($error) {
			return $this->response('ajax', array(
				'success' => false,
				'error' => $error
			));
		}

		return $this->response('ajax', array(
			'success' => true
		));
	}

	public function updateRole(Rsc_Http_Parameters $parameters) {

		$roleId = $parameters->get('roleId');
		$name = $parameters->get('name');
		$value = $parameters->get('value');
		$rolesModel = $this->getModel();
		$role = $rolesModel->getRoleById($roleId);

		if ($name == 'name') {
			$role['name'] = $value;
		} else if(in_array($name, array('wp-role'))) {
			$role['settings'][$name] = $value; 
		} else {
			$role['permissions'][$name] = $value;
		}

		$rolesModel->updateRole($roleId, $role['name'], serialize($role['permissions']), null, serialize($role['settings']));

		$error = $rolesModel->getError();

		if ($error) {
			return $this->response('ajax', array(
				'success' => false,
				'error' => $error
			));
		}
		
		return $this->response('ajax', array(
			'success' => true
		));
	}

	public function deleteRole(Rsc_Http_Parameters $parameters) {
		$roleId = $parameters->get('roleId');
		$rolesModel = $this->getModel();
		$rolesModel->deleteRole($roleId);

		$error = $rolesModel->getError();

		if ($error) {
			return $this->response('ajax', array(
				'success' => false,
				'error' => $error
			));
		}
		
		return $this->response('ajax', array(
			'success' => true
		));
	}
}