<div class="pageLoader flex-row-middle flex-center" style="opacity: 0.9;visibility: unset;" id="p1"><div></div><div></div><div></div><div></div></div><footer id="footer"><div class="container"><div class="copyright silver-color"><?php $this->options->dibus(); ?></div><div class="beian"><?php $this->options->dibux(); ?></div><style> {display:inline !important;font-size: 0 !important;line-height: 0 !important;float: left;}p+,h2+,h3+, {display: none !important;}</style></div></footer></div><div class="floatTools"><div class="tool-button backToTop unavailable" @click="this.backToTop()" style="transform: rotate(-45deg)"><i class="icon font_family icon-rocket"></i></div></div></div><script src="<?php $this->options->themeUrl('js.js'); ?>"></script></body><style>.noload{opacity: 0!important;visibility: hidden!important;}</style>
<script>$('body').on('click', 'a', function(){
    var href = $(this).attr('href');
    if(!href || /^(javascript:)|#/.test(href)) return;
    loading();
    setTimeout(window.location.href = href,300);
    return false;
 });
function openload(){
 var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center"; 
 }
 function closeload(){
 var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center noload"; 
 }
function loading() {
    var p1 = document.getElementById("p1");
 p1.className="pageLoader flex-row-middle flex-center"; 
}
window.onload = setTimeout(closeload,300);</script>