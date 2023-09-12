<?php

declare(strict_types=1);

class Groet
{
	public function __invoke(null|string|array $names): string
	{
		return $this->greet($names);
	}

	public function greet(null|string|array $names): string
	{
		if (empty($names)) {
			return 'Hello friend.';
		}

		$names = $this->normalize($names);

		[$people, $hardHearingPeople]
			= $this->separateHardHearingPeople($names);

		if ($people) {
			$greeting = $this->composeGreeting($people);
		}

		if ($hardHearingPeople) {
			$loudGreeting = strtoupper($this->composeGreeting($hardHearingPeople));
		}

		return implode(' AND ', array_filter([$greeting, $loudGreeting]));
	}

	private function separateHardHearingPeople(array &$people): array
	{
		foreach ($people as $key => $name) {
			if ($this->shouldYell($name)) {
				$hardHearingPeople[] = $name;
				unset($people[$key]);
			}
		}

		return [$people, $hardHearingPeople];
	}

	private function shouldYell(?string $name): bool
	{
		return !empty($name) && $name === strtoupper($name);
	}

	private function composeGreeting(array $names): string
	{
		$lastPerson = array_pop($names) ?: 'friend';

		if (count($names) > 0) {
			$subjects = array_reduce(
				$names,
				fn (?string $carry, ?string $item) => implode(', ', array_filter([$carry, $item ?: 'friend'])),
			) . " and $lastPerson";
		}

		$subjects ??= $lastPerson;

		return "Hello {$subjects}.";
	}

	private function normalize(string|array $names): array
	{
		if (is_array($names)) {
			$names = implode(', ', $names);
		}

		if (is_string($names)) {
			$names = explode(', ', $names);
		}

		return $names;
	}
}
