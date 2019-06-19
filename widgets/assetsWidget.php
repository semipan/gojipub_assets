<?php
namespace Plugins\Assets\Widgets;

use Core\Library\Widget;

class assetsWidget extends Widget
{
    /**
     * 获取记录数
     *
     * @return void
     */
    public function getRows()
    {
        return \Core\Library\Common::getDirContent(BASE_PATH . "/public/assets/");
    }
}