<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/common.css" />
</head>
<body id="qb-<?=$this->router->class.''?>" class="<?=isset($class)? $class:'' ?>">