<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class Textarea extends Component
{
    public string $name;
    public string $label;
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
        null|object|array $item)
    {
        $this->name = $name;
        $this->label = $label;
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
        return view('components.controls.textarea');
    }
}
