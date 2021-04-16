<?php
    
    namespace Regnilk\BsFormLaravel\Components\Buttons;
    
    use Illuminate\View\Component;
    
    class Reset extends Component
    {
        public $text;
        public $icon;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($text='Reset', $icon=null)
        {
            $this->text = $text;
            $this->icon = $icon;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::buttons.reset');
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
