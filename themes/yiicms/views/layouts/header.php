<?php
  $back_url = str_ireplace('http://', '', (Yii::app()->request->hostInfo . Yii::app()->createUrl('site/index')));
  GamePortal::getInstance()->initGP();
?>
<div class="l-header header clearfix js-dev-header">
  <div class="clearfix l-header-menu">
    <ul class="nav nav-pills pull-left js-header-nav">
      <li class="js-home-link selected">
        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><?php echo Yii::t('admin', 'manage_first_page'); ?></a>
      </li>
      <li class="js-game-link">
        <a href="<?php echo Yii::app()->createUrl('site/game'); ?>"><?php echo Yii::t('global', 'game_dev'); ?></a>
      </li>
      <li class="js-document-link">
        <a href="<?php echo Yii::app()->createUrl('site/document'); ?>"><?php echo Yii::t('global', 'document'); ?></a>
      </li>
      <li class="js-support-link">
        <a href="<?php echo Yii::app()->createUrl('site/support'); ?>"><?php echo Yii::t('global', 'support'); ?></a>
      </li>
      <li class="js-management-link">
      <?php if (isset(Yii::app()->session['hasValidated'])) : ?>
        <a href="<?php echo Yii::app()->createUrl('management'); ?>"><?php echo Yii::t('global', 'game_manage'); ?></a>
      <?php else : ?>
        <a class="js-login-btn" href="javascript:void(0);"><?php echo Yii::t('global', 'game_manage'); ?></a>
      <?php endif; ?>
      </li>
      <?php if ( Yii::app()->session['isadmin'] ) : ?>
      <li class="js-admin-link">
        <a href="<?php echo Yii::app()->createUrl('admin/index'); ?>"><?php echo Yii::t('admin', 'user_page_link_to_admin'); ?></a>
      </li>
      <?php endif; ?>
    </ul>
    <a class="js-btn-language pull-right" href="javascript:void(0);">
    <?php $language = (LANGUAGE_ZH_CN == Yii::app()->language) ? LANGUAGE_EN : LANGUAGE_ZH_CN;
    echo Yii::t('global', 'current_language', array(), null, $language); ?>
    </a>
    <?php if (isset(Yii::app()->session['hasValidated'])) : ?>
    <div class="pull-right">
      <span><?php echo Yii::t('user', 'welcome_you') . urldecode($_COOKIE['user_username']); ?></span>
      <a class="js-btn-logout header__link" href="javascript:void(0);" data-logouturl="<?php echo Yii::app()->params['gp_url'] . Yii::app()->params['gp_logouturl']; ?>" data-iframeurl="<?php echo Yii::app()->params['gp_url']; ?>"><?php echo Yii::t('user', 'user_logout'); ?></a>
    </div>
    <?php else : ?>
    <!--<a class="pull-right col-md-1" href="<?php echo Yii::app()->params['gp_url'] . Yii::app()->params['gp_loginurl'] . '&back-uri=' . $back_url; ?>"><?php echo Yii::t('user', 'login'); ?></a>-->
    <a class="pull-right col-md-1 js-login-btn" href="javascript:void(0);"><?php echo Yii::t('user', 'login'); ?></a>
    <!--<a class="pull-right" href="<?php echo Yii::app()->params['gp_url'] . Yii::app()->params['register_url'] . '&back-uri=' . $back_url; ?>"><?php echo Yii::t('user', 'register'); ?></a> -->
    <?php endif; ?>
  </div>

  <div class="modal fade js-login-popup login-popup" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog header-iframe__popup">
      <div class="modal-content login-popup__content">
        <div class="modal-header login-popup__header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <!--<h4 class="modal-title login-popup__title"><?php echo Yii::t('user', 'login'); ?></h4>
        --></div>
        <div class="modal-body js-popup-body login-popup__body" data-iframeurl="<?php echo Yii::app()->params['gp_url'] . Yii::app()->params['gp_loginurl'] . '&back-uri=' . $back_url; ?>"></div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>
