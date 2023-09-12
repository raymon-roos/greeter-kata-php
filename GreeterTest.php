<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
	public function testCanGreetByName()
	{
		$this->assertEquals(
			'Hello Marie Curie.',
			(new Greeter())('Marie Curie')
		);
	}

	public function testCanGreetsStranger()
	{
		$this->assertEquals(
			'Hello friend.',
			(new Greeter())(null)
		);
	}

	public function testCanYell()
	{
		$this->assertEquals(
			'HELLO ROSALIND FRANKLIN.',
			(new Greeter())('ROSALIND FRANKLIN')
		);
	}

	public function testCanGreetTwoPeople()
	{
		$this->assertEquals(
			'Hello Jane Goodall and Ada Lovelace.',
			(new Greeter())(['Jane Goodall', 'Ada Lovelace'])
		);
	}

	public function testCanGreetMoreThanTwoPeople()
	{
		$this->assertEquals(
			'Hello Grace Hopper, Emmy Noether and Chien-Shiung Wu.',
			(new Greeter())(['Grace Hopper', 'Emmy Noether', 'Chien-Shiung Wu'])
		);
	}

	public function testCanGreetHardHearingPeopleSeparately()
	{
		$this->assertEquals(
			'Hello Rosalind Franklin, Curie and Ada Lovelace. AND HELLO MARIE CURIE, JANE GOODALL AND BARBARA MCCLINTOCK.',
			(new Greeter())(['MARIE CURIE', 'Rosalind Franklin', 'JANE GOODALL', 'Curie', 'Ada Lovelace', 'BARBARA MCCLINTOCK'])
		);
	}

	public function testCanSplitNamesByComma()
	{
		$this->assertEquals(
			'Hello Rachel Carson, Dorothy Crowfoot Hodgkin, Barbara McClintock, Mae Jemison and Rita Levi-Montalcini.',
			(new Greeter())(['Rachel Carson, Dorothy Crowfoot Hodgkin, Barbara McClintock', 'Mae Jemison', 'Rita Levi-Montalcini'])
		);
	}

	public function testCanGreetMixedGroupOfPeople()
	{
		$this->assertEquals(
			'Hello Rosalind Franklin, Curie, Dorothy Crowfoot Hodgkin, Chien-Shiung Wu, friend and Barbara McClintock. AND HELLO LOUISE PEARCE, JANE GOODALL AND RACHEL CARSON.',
			(new Greeter())(['LOUISE PEARCE', 'Rosalind Franklin, Curie', 'JANE GOODALL, RACHEL CARSON', 'Dorothy Crowfoot Hodgkin, Chien-Shiung Wu', null, 'Barbara McClintock'])
		);
	}
}
