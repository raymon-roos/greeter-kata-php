<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GroetTest extends TestCase
{
	public function testCanGreetByName()
	{
		$this->assertEquals(
			'Hello Marie Curie.',
			(new Groet())('Marie Curie')
		);
	}

	public function testCanGreetsStranger()
	{
		$this->assertEquals(
			'Hello friend.',
			(new Groet())(null)
		);
	}

	public function testCanYell()
	{
		$this->assertEquals(
			'HELLO ROSALIND FRANKLIN.',
			(new Groet())('ROSALIND FRANKLIN')
		);
	}

	public function testCanGreetTwoPeople()
	{
		$this->assertEquals(
			'Hello Jane Goodall and Ada Lovelace.',
			(new Groet())(['Jane Goodall', 'Ada Lovelace'])
		);
	}

	public function testCanGreetMoreThanTwoPeople()
	{
		$this->assertEquals(
			'Hello Grace Hopper, Emmy Noether and Chien-Shiung Wu.',
			(new Groet())(['Grace Hopper', 'Emmy Noether', 'Chien-Shiung Wu'])
		);
	}

	public function testCanGreetHardHearingPeopleSeparately()
	{
		$this->assertEquals(
			'Hello Rosalind Franklin, Curie and Ada Lovelace. AND HELLO MARIE CURIE, JANE GOODALL AND BARBARA MCCLINTOCK.',
			(new Groet())(['MARIE CURIE', 'Rosalind Franklin', 'JANE GOODALL', 'Curie', 'Ada Lovelace', 'BARBARA MCCLINTOCK'])
		);
	}

	public function testCanSplitNamesByComma()
	{
		$this->assertEquals(
			'Hello Rachel Carson, Dorothy Crowfoot Hodgkin, Barbara McClintock, Mae Jemison and Rita Levi-Montalcini.',
			(new Groet())(['Rachel Carson, Dorothy Crowfoot Hodgkin, Barbara McClintock', 'Mae Jemison', 'Rita Levi-Montalcini'])
		);
	}

	public function testCanGreetMixedGroupOfPeople()
	{
		$this->assertEquals(
			'Hello Rosalind Franklin, Curie, Dorothy Crowfoot Hodgkin, Chien-Shiung Wu, friend and Barbara McClintock. AND HELLO LOUISE PEARCE, JANE GOODALL AND RACHEL CARSON.',
			(new Groet())(['LOUISE PEARCE', 'Rosalind Franklin, Curie', 'JANE GOODALL, RACHEL CARSON', 'Dorothy Crowfoot Hodgkin, Chien-Shiung Wu', null, 'Barbara McClintock'])
		);
	}
}
