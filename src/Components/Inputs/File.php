<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    
    class File extends Component
    {
        public $name;
        public $errorName;
        public $errorBag;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $errorName = null, $errorBag = null)
        {
            $this->name = $name;
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
            return view('bs-form-laravel::inputs.file');
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