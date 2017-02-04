<?php

namespace App;


class View
    implements \Countable
{
    protected $data;

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function __isset($k)
    {
       if(isset($this->data[$k])){
           echo 'ALl ok!!!';
       }else{
           echo 'Smth bad!!!';
       }
    }

    public function render($template)
    {
        ob_start();
        foreach($this->data as $prop => $value)  {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    /**
     * @param $template string путь к шаблону
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count ($this->data);
    }
}