<?php namespace MartiniMultimedia\Panorama\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Exception;

use Debugbar;

class Flat extends ComponentBase
{

    public $image="";
    public $height="";

    public function componentDetails()
    {
        return [
            'name'        => 'Flat',
            'description' => 'Flat panoramic image'
        ];
    }

    public function defineProperties()
    {

        return [
            'image' => [
                'title'       => 'Image',
                'description' => 'Image relative to media',
                'type'        => 'string',
                'default'     => ''
            ],
             'height' => [
                'title'       => 'Height',
                'description' => 'Panorama Height',
                'type'        => 'string',
                'default'     => '550px'
            ],
             'class' => [
                'title'       => 'Class',
                'description' => 'Panorama Wrapper class',
                'type'        => 'string',
                'default'     => ''
            ]
        ];
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
       // $this->addJs('/plugins/martinimultimedia/panorama/assets/cyclotron/jquery.js');
        $this->addJs('/plugins/martinimultimedia/panorama/assets/cyclotron/jquery.cyclotron.min.js');

    }

    public function onRender()
    {  
        $this->prepareVars();
    }

    public function prepareVars()
    {
      $this->image =$this->page['image']= "/storage/app/media/".$this->property('image');
      $this->height =$this->page['height']= $this->property('height');
      $this->class =$this->page['class']= $this->property('class');
     
    }

}
