<?php
function themeConfig($form) {
	$logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('LOGO'), _t(''));
    $form->addInput($logo);
	$sourl = new Typecho_Widget_Helper_Form_Element_Text('sourl', NULL, NULL, _t('搜索地址'), _t(''));
    $form->addInput($sourl);
	$favico = new Typecho_Widget_Helper_Form_Element_Text('favico', NULL, NULL, _t('favico'), _t(''));
    $form->addInput($favico);
	$pinglunid = new Typecho_Widget_Helper_Form_Element_Text('pinglunid', NULL, NULL, _t('评论id'), _t(''));
    $form->addInput($pinglunid);
	$pinglunkey = new Typecho_Widget_Helper_Form_Element_Text('pinglunkey', NULL, NULL, _t('评论key'), _t(''));
    $form->addInput($pinglunkey);
	$pnfpic = new Typecho_Widget_Helper_Form_Element_Text('pnfpic', NULL, NULL, _t('404图片'), _t(''));
    $form->addInput($pnfpic);
	$dibus = new Typecho_Widget_Helper_Form_Element_Text('dibus', NULL, NULL, _t('网站版权'), _t(''));
    $form->addInput($dibus);
	$dibux = new Typecho_Widget_Helper_Form_Element_Text('dibux', NULL, NULL, _t('备案号'), _t(''));
    $form->addInput($dibux);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('描述'), _t(''));
    $form->addInput($miaoshu);
    $guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('关键词'), _t(''));
    $form->addInput($guanjianci);
    $haibaobq = new Typecho_Widget_Helper_Form_Element_Text('haibaobq', NULL, NULL, _t('海报版权'), _t(''));
    $form->addInput($haibaobq);
    $xgwz = new Typecho_Widget_Helper_Form_Element_Text('xgwz', NULL, NULL, _t('相关文章'), _t(''));
    $form->addInput($xgwz);
       $banquan = new Typecho_Widget_Helper_Form_Element_Radio('banquan',
        array(
            'display:none' => _t('关闭'),
            '' => _t('开启'),
        ), _t('是否页脚处展现主题版权'), _t('是否页脚处展现主题版权'));
    $form -> addInput($banquan);
}
function themeFields($layout) {
    $toutu = new Typecho_Widget_Helper_Form_Element_Text('toutu', NULL, NULL, _t('文章头图'), _t(''));
    $layout->addItem($toutu);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('关键词'), _t(''));
    $layout->addItem($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('描述'), _t(''));
    $layout->addItem($miaoshu);
	$biaoti = new Typecho_Widget_Helper_Form_Element_Text('biaoti', NULL, NULL, _t('标题'), _t(''));
    $layout->addItem($biaoti);
	$ico = new Typecho_Widget_Helper_Form_Element_Text('ico', NULL, NULL, _t('图标'), _t(''));
    $layout->addItem($ico);
	$pic = new Typecho_Widget_Helper_Form_Element_Text('pic', NULL, NULL, _t('长头图'), _t(''));
    $layout->addItem($pic);
}
function spacing ($text)
{
    $text = preg_replace ('~((?![年月日号])\p{Han})([a-zA-Z0-9+$@#\[\(\/‘“])~u', '\1 \2', $text);
    $text = preg_replace ('~([a-zA-Z0-9+$’”\]\)@#!\/]|[\d [年月日]]{2,})((?![年月日号])\p{Han})~u', '\1 \2', $text);
    $text = preg_replace ('~([a-zA-Z0-9]+)([\[\(‘“])~u', '\1 \2', $text);
    $text = preg_replace ('~([\)\]’”])([a-zA-Z0-9]+)~u', '\1 \2', $text);
    return $text;
}
?>