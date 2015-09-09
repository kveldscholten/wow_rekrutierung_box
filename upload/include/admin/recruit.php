<?php

defined('main') or die('no direct access');
defined('admin') or die('only admin access');

$design = new design('Admins Area', 'Admins Area', 2);
$design->header();

$class = $menu->get(1);
$spec = $menu->get(2);

if (!empty($class) AND !empty($spec)) {
    $abf = db_result(db_query("SELECT " . $spec . " FROM `prefix_wow_recruit` WHERE `class` = '" . $class . "'"), 0);

    if ($abf == 0) {
        db_query("UPDATE `prefix_wow_recruit` SET " . $spec . " = 1 WHERE `class` = '" . $class . "'");
    } else {
        db_query("UPDATE `prefix_wow_recruit` SET " . $spec . " = 0 WHERE `class` = '" . $class . "'");
    }
}

function wow_class($class, $specnum) {
    $specnum = 'spec'. $specnum;

    $abf = db_query("SELECT * FROM `prefix_wow_recruit` WHERE `class` = '" . $class . "'");
    while ($row = db_fetch_object($abf)) {
        $spec = ($row->$specnum > 0 ? 'class="specInvis"' : '');
    }

    return $spec;
}

$ar = array(
    'druid_spec1' => wow_class('druid', 1),
    'druid_spec2' => wow_class('druid', 2),
    'druid_spec3' => wow_class('druid', 3),
    'druid_spec4' => wow_class('druid', 4),

    'warlock_spec1' => wow_class('warlock', 1),
    'warlock_spec2' => wow_class('warlock', 2),
    'warlock_spec3' => wow_class('warlock', 3),

    'hunter_spec1' => wow_class('hunter', 1),
    'hunter_spec2' => wow_class('hunter', 2),
    'hunter_spec3' => wow_class('hunter', 3),

    'warrior_spec1' => wow_class('warrior', 1),
    'warrior_spec2' => wow_class('warrior', 2),
    'warrior_spec3' => wow_class('warrior', 3),

    'mage_spec1' => wow_class('mage', 1),
    'mage_spec2' => wow_class('mage', 2),
    'mage_spec3' => wow_class('mage', 3),

    'paladin_spec1' => wow_class('paladin', 1),
    'paladin_spec2' => wow_class('paladin', 2),
    'paladin_spec3' => wow_class('paladin', 3),

    'priest_spec1' => wow_class('priest', 1),
    'priest_spec2' => wow_class('priest', 2),
    'priest_spec3' => wow_class('priest', 3),

    'shaman_spec1' => wow_class('shaman', 1),
    'shaman_spec2' => wow_class('shaman', 2),
    'shaman_spec3' => wow_class('shaman', 3),

    'rogue_spec1' => wow_class('rogue', 1),
    'rogue_spec2' => wow_class('rogue', 2),
    'rogue_spec3' => wow_class('rogue', 3),

    'deathknight_spec1' => wow_class('deathknight', 1),
    'deathknight_spec2' => wow_class('deathknight', 2),
    'deathknight_spec3' => wow_class('deathknight', 3),

    'monk_spec1' => wow_class('monk', 1),
    'monk_spec2' => wow_class('monk', 2),
    'monk_spec3' => wow_class('monk', 3),
);

$tpl = new tpl('recruit', 1);
$tpl->set_ar_out($ar, 0);

$design->footer();

?>