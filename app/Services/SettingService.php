<?php 

namespace App\Services;

use App\Models\Admin\Setting;
use Illuminate\Support\Facades\Cache;
class SettingService
{
 function getSetting()
    {
        return Cache::rememberForever('settings', function () {
            return Setting::pluck('value', 'key')->toArray(); //['key' => 'value']
        });
    }
    //setGlobalSetting
function setGlobalSetting():void{
        $settings = $this->getSetting();
        config()->set('settings',$settings);
    }
    //clear privious Setting 
function clearCachedSettings():void{
        Cache::forget('settings');
    }
}

