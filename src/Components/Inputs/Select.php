<?php
    
    namespace Regnilk\BsFormLaravel\Components\Inputs;
    
    use Illuminate\View\Component;
    
    class Select extends Component
    {
        public $name;
        public $options;
        public $selected;
        public $key;
        public $label;
        public $errorName;
        public $errorBag;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($name, $options = [], $selected = NULL, $key = 'id', $label, $errorName = '', $errorBag = '')
        {
            $this->name = $name;
            $this->options = $options;
            $this->selected = $selected;
            $this->key = $key;
            $this->label = $label;
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
            return view('bs-form-laravel::inputs.select');
        }
        
        public function buildSelect()
        {
            $retour = [];
            
            if (is_array($this->options)):
                foreach($this->options as $option):
                    $retour[$option[$this->key]] = $option[$this->label];
                endforeach;
            else:
                foreach($this->options as $option):
                    $retour[$option->{$this->key}] = $option->{$this->label};
                endforeach;
            endif;
            
            return $retour;
        }
        
        public function clean($data)
        {
            $retour = [];
            
            foreach ($data as $key => $value):
                if ($key !== 'options'):
                    $retour[$key] = $value;
                endif;
            endforeach;
            
            return $retour;
        }
    }