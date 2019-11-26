<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url()?>assets/image/favicon.ico" type="image/x-icon">
	<title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/common.css" />
</head>
<body id="qb-<?=$this->router->class.''?>" class="<?=isset($class)? $class:'' ?>">