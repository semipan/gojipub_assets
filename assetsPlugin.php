<?php
/**
 * 资源管理器插件
 */
class assetsPlugin extends Core\Library\Plugins
{
    /**
     * 用来初始化插件，一般用于安装时使用
     *
     * @return void
     */
    public function init()
    {
        echo '资源管理器';
    }

    /**
     * 遍历资源目录
     *
     * @return void
     */
    public function index()
    {
        $this->view->pagetitle = '资源管理器';
        $rows = Core\Library\Common::getDirContent(BASE_PATH . "/public/assets/");
        $this->view->rows = $rows;
    }

    /**
     * 删除文件
     *
     * @return void
     */
    public function delete()
    {
        echo $this->request->getQuery("file");
    }
}
