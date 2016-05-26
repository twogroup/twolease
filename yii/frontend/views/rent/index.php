<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<h1>rent/index</h1>

<div class="">
    <button class="kk">hhhhhhhhhhhhhhh</button>
</div>
<table style="width: 100%; height: auto" id="sample-table-2" class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th width="40px;" class="center">
            <label>
                <input type="checkbox"  class="ace" />
                <span class="lbl"></span>
            </label>
        </th>
        <th width="60px;">租客</th>
        <?php    foreach ($list as $v) { ?>
    <tr>
        <td class="center">
            <label>
                <input type="checkbox" class="ace" />
                <span class="lbl"></span>
            </label>
        </td>
        <td><?php echo $v->rent_area?></td>
        </tr>
    <?php }?>
<!-- <script src='--><?//=Yii::$app->request->baseUrl?><!--/assets/js/jquery-2.0.3.min.js'></script>;-->
<?//=Html::jsFile('@web/assets/js/jquery-2.0.3.min.js')?><!-- //这里***代表你的目录名或者文件名-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/typeahead-bs2.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>
<script>
   $(".kk").click(function(){
       alert("hkkkkkkkkkkkkkk");
   })
   $('table th input:checkbox').on('click' , function(){
       var that = this;
       $(this).closest('table').find('tr > td:first-child input:checkbox')
           .each(function(){
               this.checked = that.checked;
               $(this).closest('tr').toggleClass('selected');
           });

   });
</script>