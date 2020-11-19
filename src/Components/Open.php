<?php
    
    namespace Regnilk\BsFormLaravel\Components;
    
    use Illuminate\View\Component;
    
    class Open extends Component
    {
        public $url;
        public $route;
        public $action;
        public $method;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($url = NULL, $route = NULL, $action = NULL, $method = 'post')
        {
            $this->url = $url;
            $this->route = (is_null($url)) ? $route : NULL;
            $this->action = (is_null($route) and is_null($route)) ? $action : NULL;
            $this->method = mb_strtolower($method);
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-form-laravel::open');
        }
        
        public function clean($data)
        {
            $retour = [];
            
            foreach ($data as $key => $value):
                if ($key == 'method' and $value != "post"):
                    $retour['method'] = 'post';
                elseif(!in_array($key, ['route', 'action'])):
                    $retour[$key] = $value;
                endif;
            endforeach;
            
            return $retour;
        }
    }
