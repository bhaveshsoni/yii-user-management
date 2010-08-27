<?php
$this->title = Yii::t('UserModule.user', 'Statistics');

$this->breadcrumbs = array(
	Yii::t("UserModule.user", 'Users') => array('index'),
	Yii::t("UserModule.user", 'Statistics'));

$path = Yii::app()->getBasePath(). '/modules/user/views/statistics/statistics.css';
$cssfile = Yii::app()->assetManager->publish($path);
Yii::app()->clientScript->registerCssFile($cssfile);
$this->renderPartial('/messages/new_messages');

if(Yii::app()->getModule('user')->debug===true) {
	echo CHtml::openTag('div', array('style'=>'background-color: red;color:white;'));
	echo Yii::t('UserModule.user',
			'You are running the Yii User Management Module {version} in Debug Mode!',
			array( '{version}'=>Yii::app()->controller->module->version));
	echo CHtml::closeTag('div');
}

echo '<table style="width:300px;">';
$f = '<tr><td>%s</td><td>%s</td></tr>';
printf($f, Yum::t('Active users'), $active_users);
printf($f, Yum::t('Inactive users'), $inactive_users);
printf($f, Yum::t('Banned users'), $banned_users);
printf($f, Yum::t('Admin users'), $admin_users);
if(Yii::app()->controller->module->enableRoles)printf($f, Yum::t('Roles'), $roles);
if(Yii::app()->controller->module->enableProfiles)printf($f, Yum::t('Profiles'), $profiles);
printf($f, Yum::t('Profile fields'), $profile_fields);
printf($f, Yum::t('Profile field groups'), $profile_field_groups);
printf($f, Yum::t('Messages'), $messages); 
printf($f, Yum::t('Different users logged in today'), $logins_today); 
echo '</table>';
?>
