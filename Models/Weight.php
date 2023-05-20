<?php

trait Weight
{
	public $weight;

	public function setWeight($weight)
	{
		if ($weight === null) {
			throw new Exception('Peso non definito');
		}
		$this->weight = $weight;
	}
}
