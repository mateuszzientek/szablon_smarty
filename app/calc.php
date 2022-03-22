<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['opr'] = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;	;	
}

function validate(&$form,&$msgs,&$hide_intro){

	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['opr']) ))	return false;	

	$hide_intro = false;
 
	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['lata'] == "") $msgs [] = 'Nie podano lat';
	if ( $form['opr'] == "") $msgs [] = 'Nie podano oprocentowania';

	if ( count($msgs)==0 ) {
		
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota nie jest liczbą';
		if (! is_numeric( $form['lata'] )) $msgs [] = 'Lata nie są liczbą';
		if (! is_numeric( $form['opr'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	

function process(&$form,&$msgs,&$result){

	if(empty($msgs))
{
    if($form['kwota']>0 && $form['lata']>0 && $form['opr']>0)
	{
	$form['kwota'] = intval($form['kwota']);
	$form['lata'] = intval($form['lata']);
	$form['opr'] = intval($form['opr']);
	
    $procenty= $form['kwota']*($form['opr']/100);
	$result= ($form['kwota']/($form['lata']*12))+$procenty;
	}
	else $msgs [] ='Podano wartosci ujemne';
}
}


$form = null;
$messages = array();
$result = null;
$hide_intro = true;
	
getParams($form);
if ( validate($form,$messages,$hide_intro) ){
	process($form,$messages,$result);
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.html');