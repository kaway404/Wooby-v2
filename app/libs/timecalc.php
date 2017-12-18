<?php 
namespace Libs;
class Timemanager{
	static function dias_transcurridos($y,$m){
		if($m==date('m') and $y==date('Y')){
			return date('d');
		}
		else{
			return cal_days_in_month(0, $m, $y);
		}
	}

	static function is_laborable($y,$m,$d){
		$date=$y.'-'.$m.'-'.$d;
		return date('w', strtotime($date)) != 0;
	}

	static function is_holiday($y,$m,$d){
		$x= \Feriado::count(['conditions'=>['start = ?',$y.'-'.$m.'-'.$d]]);
		return $x>0;
	}

	static function seconds_to_hours($seconds){
		return bcdiv($seconds/3600, 1, 2);
	}

	static $meses=[
		'ES'=>['01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre'],
		'PT'=>['01'=>'Janeiro','02'=>'Fevereiro','03'=>'Março','04'=>'Abril','05'=>'Maio','06'=>'Junho','07'=>'Julho','08'=>'Agosto','09'=>'Setembro','10'=>'Outubro','11'=>'Novembro','12'=>'Dezembro']
	];
}



?>