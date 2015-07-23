<?
namespace x1\datetimepicker;

class DateTimePickerAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/eonasdan/bootstrap-datetimepicker/build';
	
	public $js         = [
		'js/bootstrap-datetimepicker.min.js',
	];

	public $css        = [
		'css/bootstrap-datetimepicker.min.css',
	];

	public $depends = [
		'x1\moment\MomentAsset',
	];
}
?>