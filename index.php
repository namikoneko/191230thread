<?php
ini_set('display_errors', "On");

require_once 'idiorm.php';

ORM::configure('sqlite:./sqlite.db');
ORM::configure('return_result_sets', true);

require 'flight/Flight.php';

require_once '../libs/Smarty.class.php';
Flight::register('view', 'Smarty', array(), function($smarty){
	$smarty->template_dir = "./templates";
	$smarty->compile_dir = "./templates_c";
});
//Flight::view()->assign("scriptName",dirname($_SERVER["SCRIPT_NAME"]));

// title_list ##################################################
Flight::route('/title', function(){
	$rows = ORM::for_table('title')->find_result_set();
	Flight::view()->assign("rows",$rows);
	Flight::view()->display("title.tpl");
});

// title_ins_exe ##################################################
Flight::route('/title_ins_exe', function(){
	$result = ORM::for_table('title')->create();
	$result->title = Flight::request()->data->title;
	$result->save();
	Flight::redirect('/title');
});

// title_upd ##################################################
Flight::route('/title_upd/@id', function($id){
    $row = ORM::for_table('title')->find_one($id);
    Flight::view()->assign("row",$row);
    Flight::view()->display("title_upd.tpl");
});

// title_upd_exe ##################################################
Flight::route('/title_upd_exe', function(){
    $id = Flight::request()->data->id;
    $result = ORM::for_table('title')->find_one($id);
    $title = Flight::request()->data->title;
    $result->title = $title;
    $result->save();
    //Flight::redirect('/title');
    Flight::redirect('/thread/' . $id);
});

// thread_list ##################################################
Flight::route('/thread/@id', function($id){
    //$id = Flight::request()->query->id;
    $title_row = ORM::for_table('title')->find_one($id);
    Flight::view()->assign("title_row",$title_row);

    $rows = ORM::for_table('thread')->where('title_id',$id)->find_many();
    Flight::view()->assign("rows",$rows);
    Flight::view()->display("thread_list.tpl");
});

// thread_ins_exe ##################################################
Flight::route('/thread_ins_exe', function(){
    $id = Flight::request()->data->id;
    $result = ORM::for_table('thread')->create();
    //$result->date = date('Y-m-d');
    $result->title_id = $id;
    $result->text = Flight::request()->data->text;
    //$result->updated = time();
    $result->save();
    Flight::redirect('/thread/' . $id);
});

// thread_upd ##################################################
Flight::route('/thread_upd/@id/@threadId', function($id,$threadId){
    $row = ORM::for_table('thread')->find_one($threadId);
    Flight::view()->assign("id",$id);
    Flight::view()->assign("row",$row);
    Flight::view()->display("thread_upd.tpl");
});

// thread_upd_exe ##################################################
Flight::route('/thread_upd_exe', function(){
	$result = ORM::for_table('thread')->find_one(Flight::request()->data->thread_id);
	$result->text = Flight::request()->data->text;
	$result->save();
	Flight::redirect('/thread/' . Flight::request()->data->id);
});

// title_del ##################################################
Flight::route('/title_del/@id', function($id){
	$result = ORM::for_table('title')->find_one($id);
	$result->delete();
	Flight::redirect('/title');
});

// thread_del ##################################################
Flight::route('/thread_del/@id/@threadId', function($id,$threadId){
	$result = ORM::for_table('thread')->find_one($threadId);
	$result->delete();
	Flight::redirect('/thread/' . $id);
});

// smarty_test ##################################################
Flight::route('/s', function(){

	Flight::view()->assign("now",time());
	Flight::view()->display("sample.tpl");

	/*
	Flight::map('render', function($template, $data){
    		Flight::view()->assign($data);
    		Flight::view()->display($template);
	});
	*/

});

// test ##################################################
Flight::route('/*', function(){
    $title = ORM::for_table('title')->where('id', 1)->find_one();

  echo $title->title;
});

Flight::start();
