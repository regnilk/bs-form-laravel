<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    
    class SelectRange extends Component
    {
        public $name;
        public $start;
        public $end;
        public $selected;
        public $errorName;
        public $errorBag;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $start, $end, $selected=null, $errorName = null, $errorBag = null)
        {
            $this->name = $name;
            $this->start = $start;
            $this->end = $end;
            $this->selected = $selected;
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
            return view('bs-form-laravel::inputs.select-range');
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