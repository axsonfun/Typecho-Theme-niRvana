<!DOCTYPE html>
<html lang="zh-CN"><head><title><?php $this->archiveTitle(array('category'  =>  _t('%s'),), '', ''); ?> | <?php $this->options->title(); ?></title>
<?php include('head.php'); ?>
</head><body class="black-color dark-slider"><div id="wrapper"><div class="row">
<?php include('sidebar.php'); ?>
</div></div><div id="main"><div class="container postListsModel"><div class="row"><div class="col-md-12 col-lg-12"><div class="categoryNav-wrapper" style="width: 100%;"><div pandatab="" class="categoryNav" active-class=".current-menu-item,.current-menu-ancestor" sub-class=".sub-menu"><ul id="menu-cattab" class="menu"><li class="anchor" style="position: absolute; left: 0px; width: 78px; opacity: 1;"></li>
<?php include('menu.php'); ?>
</ul></div></div>
<div class="col-xs-12"><div class="row"><div class="row postLists cards" height-to="sidebar">
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<div class="col-xxs-6 col-xs-4 col-lg-3 post-card-wrapper"><div class="card"><a href="<?php $this->permalink() ?>" class="cover" style="background-image: url(<?php $this->fields->toutu(); ?>);" showas="padding"></a><a href="<?php $this->permalink() ?>" showas="img"><img src="<?php $this->fields->toutu(); ?>" class="cover" alt=""></a><div class="meta"><div class="date"><?php $this->date('n月j日 · Y年'); ?></div><h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><div class="tags"><a class="color-1" style="margin-left: -20px;"><?php $this->category(','); ?></a>
</div><div class="summary"><span class="comments"><i class="icon font_family icon-user"></i> Dorasees</span> </div></div></div></div>   </div>
<?php include('pagenav.php'); ?>
<?php endwhile; ?>		
<?php else: ?>
</div>
<br>
<br>
<br>
<br>
<br>
<p style="font-size:3em;margin: 0 auto;text-align: center;color:#8492a6">没有找到文章</p><br>
<br><?php include('sousuo.php'); ?>
<br>
<br>
<br>
<br>
<?php endif; ?>
</div></div></div></div></div>
<?php include('footer.php'); ?>