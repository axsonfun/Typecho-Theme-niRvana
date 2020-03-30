<div id="vcomments"></div><script src="<?php $this->options->themeUrl('comment.js'); ?>"></script><script>
  var valine = new Valine();
  valine.init({
    el: '#vcomments' ,
    appId: '<?php $this->options->pinglunid(); ?>',
    appKey: '<?php $this->options->pinglunkey(); ?>',
    placeholder: '您的评论可以一针见血！' ,
	recordIP: false,
	verify: true
})
    if(window.location.hash){
        var checkExist = setInterval(function() {
           if ($(window.location.hash).length) {
              $('html, body').animate({scrollTop: $(window.location.hash).offset().top-90}, 1000);
              clearInterval(checkExist);
           }
        }, 100);
    }
</script>