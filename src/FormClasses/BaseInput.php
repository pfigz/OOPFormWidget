<?php

namespace FormClasses;

abstract class BaseInput extends HtmlElement
{
  public string $label;
  public string $name;
  public string $value;

  public function __construct(string $name, string $label = '', string $value = '')
  {

    $this->label = $label;
    $this->name = $name;
    $this->value = $value;
  }

  public function render(): string
  {
    return sprintf('<div>
                <label>%s</label><br>
                %s
              </div>', $this->label, $this->renderInput());
  }

  abstract public function renderInput(): string;
}
