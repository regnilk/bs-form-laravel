<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;

    //Toggle is a different checkbox

    class Toggle extends Component
    {
        public $name;
        public $value;
        public $checked;
        public $label;
        public $labelClass;
        public $errorName;
        public $errorBagName;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $label, $value = '', $checked = false, $labelClass='', $errorName = null, $errorBagName = null)
        {
            $this->name = $name;
            $this->label = $label;
            $this->value = $value;
            $this->checked = $checked;
            $this->labelClass = $labelClass;
            $this->errorName = $errorName ?? $this->name;
            $this->errorBagName = $errorBagName;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::inputs.toggle');
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
