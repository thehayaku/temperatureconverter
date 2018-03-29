<?php 
function output(){
  if(is_numeric($_GET['degree'])){
  if($_GET['D'] == $_GET['C']) {
  	same($_GET['degree']);
  } else if($_GET['D'] == 'C' and $_GET['C'] == 'F') {
  	ctf($_GET['degree']);
  } else if($_GET['D'] == 'C' and $_GET['C'] == 'R') {
  	ctr($_GET['degree']);
  } else if($_GET['D'] == 'C' and $_GET['C'] == 'K') {
  	ctk($_GET['degree']);
  } else if($_GET['D'] == 'F' and $_GET['C'] == 'C') {
  	ftc($_GET['degree']);
  } else if($_GET['D'] == 'F' and $_GET['C'] == 'R') {
  	ftr($_GET['degree']);
  } else if($_GET['D'] == 'F' and $_GET['C'] == 'K') {
  	ftk($_GET['degree']);
  } else if($_GET['D'] == 'R' and $_GET['C'] == 'C') {
  	rtc($_GET['degree']);
  } else if($_GET['D'] == 'R' and $_GET['C'] == 'F') {
  	rtf($_GET['degree']);
  } else if($_GET['D'] == 'R' and $_GET['C'] == 'k') {
  	rtk($_GET['degree']);
  } else if($_GET['D'] == 'K' and $_GET['C'] == 'C') {
  	ktc($_GET['degree']);
  } else if($_GET['D'] == 'K' and $_GET['C'] == 'R') {
  	ktr($_GET['degree']);
  } else if($_GET['D'] == 'K' and $_GET['C'] == 'F') {
  	ktf($_GET['degree']);
  }} else {
  	echo 'please input numeric';
  }
  echo ' degree';
}
function same($d) {
    $result = $d;
    echo $result;	
}
  
function ctr($d) {
	$result = 4 * $d / 5;
	echo $result;
}

function ctk($d) {
	$result = $d + 273;
	echo $result;
}

function ctf($d) {
	$result = 9 * $d / 5 + 32;
	echo $result;
}

function rtc($d) {
	$result = 5 * $d / 4;
	echo $result;
}

function rtk($d) {
	$result = 5 * $d / 4 + 273;
	echo $result;
}

function rtf($d) {
	$result = 9 * $d / 4 + 32;
	echo $result;
}

function ftc($d) {
	$result = 5 * ($d-32) / 9;
	echo $result;
}

function ftr($d) {
	$result = 4 * ($d-32) / 9;
	echo $result;
}

function ftk($d) {
	$result = 5 * ($d-32) / 9 + 273;
	echo $result;
}

function ktc($d) {
	$result = $d - 273;
	echo $result;
}

function ktr($d) {
	$result = ($d - 273) * 4 / 5;
	echo $result;
}

function ktf($d) {
	$result = ($d - 273) * 9 / 5 + 32;
	echo $result;
}

?>