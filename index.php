<?php
/**
 * 作品展示模板，适用于设计稿、摄影、图片新闻等以图片为中心的展示。本模板版权归 PANDA Studio 所有，Dorasees 为本主题正版用户，移植本主题仅供学习参考，请勿用于商业用途，必须在24小时内删除！
 * @package niRvana
 * @author Dorasees
 * @version 1.0
 * @link https://www.dorasees.com
 */
 ?>
<!DOCTYPE html>
<html lang="zh-CN"><head><title><?php $this->options->title() ?> | <?php $this->options->description() ?></title><meta name="keywords" content="<?php $this->options->guanjianci(); ?>"/>
<meta name="description" content="<?php $this->options->miaoshu(); ?>"/>
<?php include('head.php'); ?>
</head><body class="black-color dark-slider"><div id="wrapper"><div class="row">
<?php include('sidebar.php'); ?>
</div></div><div id="main"><div class="container postListsModel"><div class="row"><div class="col-md-12 col-lg-12"><div class="categoryNav-wrapper" style="width: 100%;"><div pandatab="" class="categoryNav" active-class=".current-menu-item,.current-menu-ancestor" sub-class=".sub-menu"><ul id="menu-cattab" class="menu"><li class="anchor" style="position: absolute; left: 0px; width: 78px; opacity: 1;"></li>
<?php include('menu.php'); ?>
</ul></div></div>
<div class="col-xs-12"><div class="row"><div class="row postLists cards" height-to="sidebar">
<?php while($this->next()): ?>
<div class="col-xxs-6 col-xs-4 col-lg-3 post-card-wrapper"><div class="card"><a href="<?php $this->permalink() ?>" class="cover" style="background-image: url(<?php $this->fields->toutu(); ?>);" showas="padding"></a><a href="<?php $this->permalink() ?>" showas="img"><img src="<?php $this->fields->toutu(); ?>" class="cover" alt=""></a><div class="meta"><h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><div class="tags"><a class="color-1" style="margin-left: -20px;"><?php $this->category(','); ?></a>
</div><div class="summary"><span class="comments"><i class="icon font_family icon-clock"></i> <?php $this->date('n月j日 · Y年'); ?></span> </div></div></div></div>
<?php endwhile; ?>
</div>
<?php include('pagenav.php'); ?>
</div></div></div></div></div>
<?php include('footer.php'); ?>