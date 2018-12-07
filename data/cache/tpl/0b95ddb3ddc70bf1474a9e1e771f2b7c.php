<?php exit;?>00157294991833116687aa01e2fa8a1cbdab2a3e4fe6s:3942:"a:2:{s:8:"template";s:3878:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url('qiniu');?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong>七牛云配置</strong>
        </div>
        <div class="panel-body">
           <div class="form-group">
                <div class="label">
                    <label>使用状态</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['QINIU_STATUS']){ ?>
                            <label class="button active"><input name="QINIU_STATUS" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="QINIU_STATUS" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['QINIU_STATUS']){ ?>
                            <label class="button active"><input name="QINIU_STATUS" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="QINIU_STATUS" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">开启后将使用七牛云存储图片</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>AccessKey</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="QINIU_AK" name="QINIU_AK" size="60" datatype="*" value="<?php echo $info["QINIU_AK"];?>">
                    <div class="input-note">七牛云安全密钥</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>SecretKey</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="QINIU_SK" name="QINIU_SK" size="60" datatype="*" value="<?php echo $info["QINIU_SK"];?>">
                    <div class="input-note">七牛云安全密钥</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>存储空间名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="QINIU_BUCKET" name="QINIU_BUCKET" size="60" datatype="*" value="<?php echo $info["QINIU_BUCKET"];?>">
                    <div class="input-note">存储空间名称——bucket</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分配的域名</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="QINIU_URL" name="QINIU_URL" size="60" datatype="url" value="<?php echo $info["QINIU_URL"];?>">
                    <div class="input-note">必填,不填的话上传的图片无法访问,最后的/一定要带</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxForm();
    });
</script>
";s:12:"compile_time";i:1541413918;}";