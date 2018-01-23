<?php
/**
 * Created by PhpStorm.
 * User: DrekTop
 * Date: 23/01/2018
 * Time: 09:32 AM
 */

namespace Josebefree\Tuieditor;


class TuieditorBuilder
{

    public  static $path = '/tuieditoreasy';
    public  static $prefix = 'josebefree_';

    protected function Url($url = null) {
        return Url(static::$path."/".$url);
    }

    protected function Name($name = null) {
        return static::$prefix.$name;
    }

    public function scripts() {
        $header = "
      <script src=\"".$this->Url("editor.js")."\"></script>
      <link rel=\"stylesheet\" href=\"".$this->Url("tui-editor.css")."\">
      <link rel=\"stylesheet\" href=\"".$this->Url("tui-editor-contents.css")."\">";
        return $header;
    }

    public function editor($name = null) {
        $div = "<div id='".$this->Name($name)."' name='".$this->Name($name)."'></div>";
        $javscript = "<script>
        var  = new tui.Editor({
        el: document.querySelector('#".$this->Name($name)."'),
        initialEditType: 'markdown',
        previewStyle: 'vertical',
        height: '300px'
      });
        </script>
        ";
        return $div.$javscript;
    }

}