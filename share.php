<div class="share-modal" style="text-align: center;">
<a class="toWeibo" target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&appkey=<?php $this->options->title(); ?>&title=<?php $this->fields->biaoti(); ?>&pic=<?php $this->fields->toutu(); ?>"><i class="icon font_family icon-weibo" data-toggle="tooltip" data-placement="auto top" data-original-title="分享到微博" style="background:radial-gradient(circle farthest-corner at 75% 25%,#ff7a60 0,#e6162d 100%)"></i></a>
<a class="toWeibo" target="_blank" href="https://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&title=<?php $this->fields->biaoti(); ?>&pics=<?php $this->fields->toutu(); ?>&summary=<?php $this->fields->miaoshu(); ?>&desc=我正在『叮当邻舍』阅读《<?php $this->fields->biaoti(); ?>》，你也一起来看吧！"><i class="icon font_family icon-qq" data-toggle="tooltip" data-placement="auto top" data-original-title="分享到 QQ" style="background:radial-gradient(circle farthest-corner at 75% 25%,#20b8ff 0,#20a0ff 100%);box-shadow:0 10px 10px -2px hsla(206, 100%, 56%, 0.6)"></i></a>
<a class="toWeibo" href="javascript: void(0);" onclick="qrcode();"><i class="icon font_family icon-qrcode" data-toggle="tooltip" data-placement="auto top" data-original-title="文章海报" style="background: radial-gradient(circle farthest-corner at 75% 25%,#737373 0,#393f47 100%);box-shadow: 0 10px 10px -2px rgba(57, 63, 71, 0.6)"></i></a>
<a class="toWeibo" target="_blank" href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->fields->biaoti(); ?>&site=<?php $this->options->title(); ?>&pics=<?php $this->fields->toutu(); ?>&summary=<?php $this->fields->miaoshu(); ?>&desc=我正在『叮当邻舍』阅读《<?php $this->fields->biaoti(); ?>》，你也一起来看吧！"><i class="icon font_family icon-star" data-toggle="tooltip" data-placement="auto top" data-original-title="分享到空间" style="background: radial-gradient(circle farthest-corner at 75% 25%,#ffce00 0,#ff9900 100%);box-shadow: 0 10px 10px -2px rgba(255, 153, 0, 0.6)"></i></a>
<a class="toWeibo" target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ;?>"><i class="icon font_family icon-google" data-toggle="tooltip" data-placement="auto top" data-original-title="分享到谷歌" style="background:radial-gradient(circle farthest-corner at 75% 25%,#9bd330 0,#67C23A 100%);box-shadow: 0 10px 10px -2px rgba(103,194,58,.6)"></i></a>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uuid-timestamp-1582358403386" style="display: none;" id="openbox"></button>
<div class="modal fade" id="uuid-timestamp-1582358403386" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none">
<div class="modal-dialog" role="document" style="width: 400px">
<div class="modal-content" style="">
<div class="modal-header" style="background: url(<?php $this->fields->toutu(); ?>) no-repeat;background-size: cover;height: 360px;text-align: center">
<h3 style="margin-top:308px;color:#fff"><?php $this->title() ?></h3><p>
</p></div>
<div class="modal-body" style="text-align:center"><img height="120px" width="120px" src="https://api.qrserver.com/v1/create-qr-code/?size=120%C3%97120&color=8492a6&margin=0&data=<?php $this->permalink() ?>" style="margin:0 0 12px 0"><p style="color: #8492a6">扫描二维码阅读详细内容</br><?php $this->options->haibaobq(); ?></p></div>
</div>
</div><div class="wechat-cover"><div class="wait"><span class="info">海报已生成，请截图分享给小伙伴吧！</span></div></div>
</div>
 <script>  
        function qrcode() {
            document.getElementById('openbox').click();
        }
</script>  