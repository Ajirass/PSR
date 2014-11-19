<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 19/11/2014
 * Time: 17:48
 */
namespace Tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
	public function testGetRandomStringLengthEasy()
	{
		$length = mt_rand(1, 10000);
		$password = PasswordGenerator::generateCharacter($length, PasswordGenerator::PASSWORD_EASY);

		$this->assertEquals($length, mb_strlen($password));
	}

	public function testGetRandomStringLengthMedium()
	{
		$length = mt_rand(1, 10000);
		$password = PasswordGenerator::generateCharacter($length, PasswordGenerator::PASSWORD_MEDIUM);

		$this->assertEquals($length, mb_strlen($password));
	}

	public function testGetRandomStringLengthHard()
	{
		$length = mt_rand(1, 10000);
		$password = PasswordGenerator::generateCharacter($length, PasswordGenerator::PASSWORD_HARD);

		$this->assertEquals($length, mb_strlen($password));
	}

	public function testGetRandomStringNotEmpty()
	{
		$password = PasswordGenerator::generateCharacter(0);

		$this->assertNotEmpty($password);
	}
} 