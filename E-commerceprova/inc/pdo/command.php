<?php

/**
 * Create new entry in contacts table
 *
 * @param PDO $db
 * @param array $params
 *
 * @return bool
 */
function createContact(PDO $db, array $params): bool {

	try {

		$command = "INSERT INTO contacts (name, phone_number, email, surname)
					VALUES (?, ?, ?, ?)";

		$statement = $db->prepare($command);

		$name         = array_key_exists( 'name', $params ) ? $params['name'] : throw new Exception( 'Name is mandatory' );
		$phone_number = array_key_exists( 'phone', $params ) ? $params['phone'] : throw new Exception( 'Phone is mandatory' );
		$email        = array_key_exists( 'email', $params ) ? $params['email'] : throw new Exception( 'Email is mandatory' );
		$surname      = array_key_exists( 'surname', $params ) ? $params['surname'] : null;




		$statement->execute([
			$name,
			$phone_number,
			$email,
			$surname
		]);

		return true;

	} catch (Exception $e){

		addErrorToLog($e->getMessage());
		addErrorToLog($params);

		return false;

	}

}