<div id="content">
    <div class="container">
        <div class="row-fluid">

            <style>

.tips-top-title{
    margin: 0 0 1em;
    padding-bottom: .73em;
    background: transparent url("http://dev.openvim.com/public/img/bg_divider.png") repeat-x bottom;
    font-size: 1.8em;
    display: block;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
 }

.post-parter {
float: right;
margin-top: 5px;
color: #999;
vertical-align: top;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

.post-parter img {
margin: 3px 10px 0 20px;
}
.avatar-32 {
width: 32px;
height: 32px;
}

            </style>
            <h2 class="tips-top-title"><span class="de-em"><?php echo $tips_detail['tipsTitle'];?></span></h2>
        </div>
        <div class="row">

            <!--Main Content-->
            <div class="span-tips-main blog-post">

                <!-- Blog post -->
                <div class="media row-fluid">
                    <div class="span1 hidden-phone">
                        <!-- Date desktop -->
                        <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">07</span> </div>
                        <!-- Meta details desktop -->
                        <p class="meta muted"> <i class="icon-user"></i> <a href="#">Erin</a> </p>
                    </div>
                    <div class="span11">
                        <div class="media-body">
                            <h3 class="title media-heading"></h3>

                            <!-- Meta details mobile -->
                            <ul class="inline meta muted visible-phone">
                                <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Mon 7th Jan 2013</li>
                                <li><i class="icon-user"></i> <a href="#">Erin</a></li>
                            </ul>
                            <div class="media-object">  </div>
                            <div class="tips-content">
                       <pre><?php echo $tips_detail['tipsContent'];?></pre>
                            </div>
                        </div>
                    </div>
                </div>


    <!--Comments-->
        <div class="comments" id="comments">
          <h3>Comments</h3>
          <ul class="media-list">
          <li class="media row-fluid"> <a class="span1" href="#"><img src="<?php echo base_url("public/img/team/jobs.jpg")?>" alt="Picture of Tom" class="media-object img-polaroid" /> </a>
              <div class="span11 media-body">
                <ul class="inline meta muted">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Tue 1st Jan 2013</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Tom</a></li>
                </ul>
                <h5 class="media-heading">Urna natoque in phasellus rhoncus aliquet penatibus</h5>
                <p>Urna natoque in phasellus rhoncus aliquet penatibusUrna natoque in phasellus rhoncus aliquet penatibusUrna natoque in phasellus rhoncus aliquet penatibusUrna natoque in phasellus rhoncus aliquet penatibus</p>

                <table class="post-parter"><tbody>
                <tr><td>
                 <a class="span1" href="#"> <img src="<?php echo base_url('public/img/team/jobs.jpg')?>" alt="Picture of Dave" class="avatar-32 media-object img-polaroid" /> </a>
                </td>
                <td>
                <h4>111</h4>
                aabc
                </td></tr>


                </tbody></table>


              </div>
            </li>
            <li class="media row-fluid"> <a class="span1" href="#"> <img src="<?php echo base_url('pulic/img/team/adele.jpg')?>" alt="Picture of Dave" class="media-object img-polaroid" /> </a>
              <div class="span11 media-body">
                <ul class="inline meta muted">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Fri 28th Dec 2012</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Erin</a></li>
                </ul>
                <h5 class="media-heading">Porta risus porttitor facilisis sit dapibus</h5>
                <p>Porta risus porttitor facilisis sit dapibusPorta risus porttitor facilisis sit dapibusPorta risus porttitor facilisis sit dapibusPorta risus porttitor facilisis sit dapibus</p>
              </div>
            </li>
          </ul>
      </div>










                <div class="media-body" style="padding:30px 0 0 50px">
                  <?php if(!$this->session->userdata('is_login')){?>
                    <div class="wmd-panel">
                        <h2>撰写评论</h2>
                        <div style="border:1px solid #eee;padding:30px;text-align:center;background:rgba(255,255,255,0.75);">请先 <a href="#">登录</a> 后撰写评论</div>

                    </div>


                 <?php }else{?>
                    <div class="wmd-panel">
                        <div id="wmd-button-bar"></div>
                        <textarea class="wmd-input" id="wmd-input" holder="为此问题提供一个答案"  autocomplete="off" spellcheck="false" name="text" style="width:630px;height: 193px;"></textarea>
                    </div>
                    <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                <?php }?>
                </div>
