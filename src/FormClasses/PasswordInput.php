<?php

namespace FormClasses;

class PasswordInput extends BaseInput
{
  public function renderInput(): string
  {

    return sprintf('<input type="password" name="%s" value="%s"/>', $this->name, $this->value);
  }
}
