<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $email = [
		'name'    => 'required',
		'email'   => 'required|valid_email',
		'comment' => 'required|max_length[200]',
	];

	public $email_errors = [
		'name' => [
			'required'    => '必ず入力してください',
		],
		'email' => [
			'required'    => '必ず入力してください',
			'valid_email' => '正しいメールアドレスを入力してください',
		],
		'comment' => [
			'required'  			=> '必ず入力してください',
			'max_length[200]' => '200文字いないで入力してください',
		]
	];
}
