<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<div class="control-group">
    <label class="control-label"><?php echo $label; ?></label>
    <?php if ($description): ?>
        <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo $description; ?>"></i>
    <?php endif; ?>
    <div class="controls controls-bb">
        <div class="ccm-ui">
            <?php echo $view->inc('form.php', array('view' => $view)); ?>
        </div>
    </div>
</div>

<style>
    div.ccm-panel-detail .controls-bb hr {
        margin-left: 0;
        margin-right: 0;
        border-bottom-width: 0;
    }
</style>