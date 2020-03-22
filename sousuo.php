<div class="global_search_form fullscreen_search visible container" style="padding-top: 160px;"><div class="searchbox clearfix">
<form name="myform" onkeydown="if(event.keyCode==13){return false;}">
<input style="color:#8492a6" name="name" type="search" placeholder="请输入关键词"></form>
<span class="button" @click="so()"><span class="icon"><i class="icon font_family icon-search"></i></span></span></div></div><div class="custom-scrollbar-content" style="width: 50%;margin: auto;padding-bottom: 80px;"><aside data-id="sidebar-1" class="sidebar" style="display: block;"><ul class="widget-list"><li id="pf_tag_cloud-widget-3" class="widget pf_tag_cloud"><h2 class="widgettitle">猜你喜欢</h2><ul class="tag">
	<?php $this->options->likekey(); ?>
	</ul></aside></div>
<a href="search" id="overso" style="display:none"></a>
<script type="text/javascript">
function so(){
var name=document.myform.name.value;
var overhref = "search/"+name;
document.getElementById("overso").setAttribute("href",overhref); 
document.getElementById("overso").click();
};
</script>