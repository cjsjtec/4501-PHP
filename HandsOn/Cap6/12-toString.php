<?php
class Builder
{
	private $element;
	private $styles = array();
	private $value;
	public function element($element)
	{
		$this->element = $element;
		return $this;
	}

	public function style($name, $value)
	{
		$this->styles[$name] = $value;
		return $this;
	}

	public function value($value)
	{
		$this->value = $value;
		return $this;
	}

	public function get()
	{
		$clone = clone $this;
		$this->styles = array();
		return $clone;
	}

	public function __toString()
	{
		$style = '';
		foreach($this->styles as $name => $value) {
			$style .= "{$name} : {$value};";
		}
		return sprintf(
			'<%s style="%s">%s</%s>',
			$this->element,
			$style,
			$this->value,
			$this->element
			);
	}
}

$builder = new Builder();
$span   = $builder->element('span')
					->style('color', 'red')
					->value('Oi')
					->get();

$div = $builder->element('div')
					->style('font-size', '16px')
					->style('background-color', 'pink')
					->value($span)
					->get();

echo $div;
