<?php namespace MartiniMultimedia\Panorama;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	 return [
            'MartiniMultimedia\Panorama\Components\Equirectangular'  => 'equirectangular',
            'MartiniMultimedia\Panorama\Components\Flat'  => 'flat'
        ];
    }

    public function registerSettings()
    {
    }
}
