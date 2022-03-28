<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    
    class Date extends Component
    {
        public $name;
        public $value;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $value = '', $errorName = '', $errorBag = '')
        {
            $this->name = $name;
            $this->value = $value;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::inputs.date');
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