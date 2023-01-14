<?php

namespace FormClasses;

class Form extends HtmlElement
{

  public string $action;
  public string $method;

  public function __construct(string $action = '', string $method = 'get')
  {
    $this->action = $action;
    $this->method = $method;
  }

  /**
   * @var \HtmlElement[]
   */
  protected array $elements = [];

  public function addElement(HtmlElement $el)
  {
    $this->elements[] = $el;
  }

  public function render(): string
  {
    $content = implode(PHP_EOL, array_map(fn ($el) => $el->render(), $this->elements));
    return sprintf('<form action="%s" method="%s">%s</form>', $this->action, $this->method, $content);
  }
}
