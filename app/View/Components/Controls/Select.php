<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class Select extends Component
{
    public string $name;
    public string $label;
    public null|object|array $options;
    public string $id;
    public string $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label,
        null|object|array $item,
        null|object|array $options)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->id = "field-$name";
        $this->value = old($name) ?? (($item[$name] ?? ''));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.select');
    }
}
