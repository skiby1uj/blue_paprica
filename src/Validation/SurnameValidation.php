<?php
namespace App\Validation;

use App\Validation\Validator\ValidatorInterface;

class SurnameValidation implements ValidationInterface
{
	private $validator;
	private $errors;

	public function __construct(ValidatorInterface $validator)
	{
		$this->validator = $validator;
		$this->errors = [];
	}

	public function isValid($param): bool
	{
		$this->errors = $this->validator->validate($param);
		return (count($this->errors))? false: true;
	}

	public function getErrors(): array
	{
		return $this->errors;
	}
}