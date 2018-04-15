<?php namespace MartiniMultimedia\Panorama\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Exception;

use Debugbar;

class Equirectangular extends ComponentBase
{

    public $image="";
    public $autoRotate="";
    public $autoLoad="";

    public function componentDetails()
    {
        return [
            'name'        => 'Equirectangular',
            'description' => 'Equirectangular image'
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
            ],
             'autoRotate' => [
                'title'       => 'Auto Rotate',
                'description' => 'Autorotate speed',
                'type'        => 'string',
                'default'     => ''
            ],
             'autoLoad' => [
                'title'       => 'Auto Load',
                'description' => 'Auto Load image',
                'type'        => 'checkbox',
                'default'     => true
            ]
        ];
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
        $this->addJs('/plugins/martinimultimedia/panorama/assets/pannellum/pannellum.js');
        $this->addCss('/plugins/martinimultimedia/panorama/assets/pannellum/pannellum.css');
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
        $this->autoRotate =$this->page['autoRotate']= $this->property('autoRotate');
        $this->autoLoad =$this->page['autoLoad']= $this->property('autoLoad');

    }

}
