<?php
/**
 * @package Xtense 2
 * @author Unibozu
 * @version 1.0
 * @licence GNU
 */

namespace Ogsteam\Ogspy;

if (!defined('IN_SPYOGAME')) die("Hacking Attempt!");

$mod_tools = new Mod_DevTools('xtense');

global $table_prefix;
$mod_uninstall_table = array(
    $table_prefix."xtense_groups",
    $table_prefix."xtense_callbacks",
    $table_prefix."parsedrec",
    $table_prefix."parsedspyen");

$mod_tools->mod_remove_tables($mod_uninstall_table);

$mod_tools->mod_del_option('xtense_allow_connections');
$mod_tools->mod_del_option('xtense_log_empire');
$mod_tools->mod_del_option('xtense_log_ranking');
$mod_tools->mod_del_option('xtense_log_spy');
$mod_tools->mod_del_option('xtense_log_system');
$mod_tools->mod_del_option('xtense_log_ally_list');
$mod_tools->mod_del_option('xtense_log_messages');
$mod_tools->mod_del_option('xtense_log_reverse');
$mod_tools->mod_del_option('xtense_strict_admin');
$mod_tools->mod_del_option('xtense_universe');
$mod_tools->mod_del_option('xtense_spy_autodelete');

generate_config_cache();

