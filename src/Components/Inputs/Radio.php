<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    use Illuminate\Support\Str;
    
    class Radio extends Component
    {
        public $name;
        public $value;
        public $checked;
        public $label;
        public $slug;
        public $labelClass;
        public $errorName;
        public $errorBag;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $label, $value = '', $checked = false, $labelClass='', $errorName = '', $errorBag = '')
        {
            $this->name = $name;
            $this->label = $label;
            $this->value = $value;
            $this->checked = $checked;
            $this->slug = Str::slug(trim($label));
            $this->labelClass = $labelClass;
            $this->errorName = $errorName ?? $this->name;
            $this->errorBag = $errorBag;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::inputs.radio');
        }
        
        public function clean($data)
        {
            $retour = [];
            
            foreach($data as $key => $value):
                $retour[$key] = $value;
            endforeach;
            
            return $retour;
        }
    }