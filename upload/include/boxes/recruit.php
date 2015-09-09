<style>
    .recruit {
        width: 100%;
    }
    .classes {
        width: 50%;
        float: left;
        margin: 2px 0;
        line-height: 21px;
    }
    .classspec {
        width: 84px;
        float: right;
        margin-top: 2px;
        margin-bottom: 2px;
    }
    .class {
        margin-left: 4px;
        float: left;
    }
    .classicon {
        width: 21px;
        height: 21px;
        float: left;
    }

    .druid {
        background-image: url('include/images/klassen/Druid.png');
    }    
    .druid_balance {
        background-image: url('include/images/klassen/skills/druid_balance.png');
    }    
    .druid_feral_bear {
        background-image: url('include/images/klassen/skills/druid_feral_bear.png');
    }    
    .druid_feral_cat {
        background-image: url('include/images/klassen/skills/druid_feral_cat.png');
    }    
    .druid_restoration {
        background-image: url('include/images/klassen/skills/druid_restoration.png');
    }

    .warlock {
        background-image: url('include/images/klassen/Warlock.png');
    }
    .warlock_affliction {
        background-image: url('include/images/klassen/skills/warlock_affliction.png');
    }
    .warlock_demonology {
        background-image: url('include/images/klassen/skills/warlock_demonology.png');
    }
    .warlock_destruction {
        background-image: url('include/images/klassen/skills/warlock_destruction.png');
    }

    .hunter {
        background-image: url('include/images/klassen/Hunter.png');
    }
    .hunter_beast_mastery {
        background-image: url('include/images/klassen/skills/hunter_beast_mastery.png');
    }
    .hunter_marksmanship {
        background-image: url('include/images/klassen/skills/hunter_marksmanship.png');
    }
    .hunter_survival {
        background-image: url('include/images/klassen/skills/hunter_survival.png');
    }

    .warrior {
        background-image: url('include/images/klassen/Warrior.png');
    }
    .warrior_arms {
        background-image: url('include/images/klassen/skills/warrior_arms.png');
    }
    .warrior_fury {
        background-image: url('include/images/klassen/skills/warrior_fury.png');
    }
    .warrior_protection {
        background-image: url('include/images/klassen/skills/warrior_protection.png');
    }

    .mage {
        background-image: url('include/images/klassen/Mage.png');
    }
    .mage_arcane {
        background-image: url('include/images/klassen/skills/mage_arcane.png');
    }
    .mage_fire {
        background-image: url('include/images/klassen/skills/mage_fire.png');
    }
    .mage_frost {
        background-image: url('include/images/klassen/skills/mage_frost.png');
    }

    .paladin {
        background-image: url('include/images/klassen/Paladin.png');
    }
    .paladin_holy {
        background-image: url('include/images/klassen/skills/paladin_holy.png');
    }
    .paladin_protection {
        background-image: url('include/images/klassen/skills/paladin_protection.png');
    }
    .paladin_retribution {
        background-image: url('include/images/klassen/skills/paladin_retribution.png');
    }

    .priest {
        background-image: url('include/images/klassen/Priest.png');
    }
    .priest_discipline {
        background-image: url('include/images/klassen/skills/priest_discipline.png');
    }
    .priest_holy {
        background-image: url('include/images/klassen/skills/priest_holy.png');
    }
    .priest_shadow {
        background-image: url('include/images/klassen/skills/priest_shadow.png');
    }

    .shaman {
        background-image: url('include/images/klassen/Shaman.png');
    }
    .shaman_elemental {
        background-image: url('include/images/klassen/skills/shaman_elemental.png');
    }
    .shaman_enhancement {
        background-image: url('include/images/klassen/skills/shaman_enhancement.png');
    }
    .shaman_restoration {
        background-image: url('include/images/klassen/skills/shaman_restoration.png');
    }

    .rogue {
        background-image: url('include/images/klassen/Rogue.png');
    }
    .rogue_assassination {
        background-image: url('include/images/klassen/skills/rogue_assassination.png');
    }
    .rogue_combat {
        background-image: url('include/images/klassen/skills/rogue_combat.png');
    }
    .rogue_subtlety {
        background-image: url('include/images/klassen/skills/rogue_subtlety.png');
    }

    .deathknight {
        background-image: url('include/images/klassen/DeathKnight.png');
    }
    .deathknight_blood {
        background-image: url('include/images/klassen/skills/deathknight_blood.png');
    }
    .deathknight_frost {
        background-image: url('include/images/klassen/skills/deathknight_frost.png');
    }
    .deathknight_unholy {
        background-image: url('include/images/klassen/skills/deathknight_unholy.png');
    }

    .monk {
        background-image: url('include/images/klassen/Monk.png');
    }
    .monk_brewmaster {
        background-image: url('include/images/klassen/skills/monk_brewmaster.png');
    }
    .monk_mistweaver {
        background-image: url('include/images/klassen/skills/monk_mistweaver.png');
    }
    .monk_windwalker {
        background-image: url('include/images/klassen/skills/monk_windwalker.png');
    }

    .specInvis {
        filter:alpha(opacity=20);
        -moz-opacity: 0.20;
        opacity: 0.20;
    }
</style>

<?php

function wow_class($class, $specnum) {
    $specnum = 'spec'. $specnum;

    $abf = db_query("SELECT * FROM `prefix_wow_recruit` WHERE `class` = '" . $class . "'");
    while ($row = db_fetch_object($abf)) {
        $spec = ($row->$specnum > 0 ? 'specInvis' : '');
    }

    return $spec;
}

echo '
<div class="recruit">
    <div class="classes">
        <div class="classicon druid"></div> <div class="class" style="color:#dc7d0a;">Druide</div>
    </div>
    <div class="classspec">
        <div class="classicon druid_balance ' . wow_class('druid', 1) . '" alt="Gleichgewicht" title="Gleichgewicht"></div>
        <div class="classicon druid_feral_bear ' . wow_class('druid', 2) . '" alt="Bär" title="Bär"></div>
        <div class="classicon druid_feral_cat ' . wow_class('druid', 3) . '" alt="Katze" title="Katze"></div>
        <div class="classicon druid_restoration ' . wow_class('druid', 4) . '" alt="Wiederherstellung" title="Wiederherstellung"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon warlock"></div> <div class="class" style="color:#9482c9;">Hexenmeister</div>
    </div>
    <div class="classspec">
        <div class="classicon warlock_affliction ' . wow_class('warlock', 1) . '" alt="Gebrechen" title="Gebrechen"></div>
        <div class="classicon warlock_demonology ' . wow_class('warlock', 2) . '" alt="Dämonologie" title="Dämonologie"></div>
        <div class="classicon warlock_destruction ' . wow_class('warlock', 3) . '" alt="Zerstörung" title="Zerstörung"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon hunter"></div> <div class="class" style="color:#94d473;">Jäger</div>
    </div>
    <div class="classspec">
        <div class="classicon hunter_beast_mastery ' . wow_class('hunter', 1) . '" alt="Tierherrschaft" title="Tierherrschaft"></div>
        <div class="classicon hunter_marksmanship ' . wow_class('hunter', 2) . '" alt="Treffsicherheit" title="Treffsicherheit"></div>
        <div class="classicon hunter_survival ' . wow_class('hunter', 3) . '" alt="Überleben" title="Überleben"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon warrior"></div> <div class="class" style="color:#c78760;">Krieger</div>
    </div>
    <div class="classspec">
        <div class="classicon warrior_arms ' . wow_class('warrior', 1) . '" alt="Waffen" title="Waffen"></div>
        <div class="classicon warrior_fury ' . wow_class('warrior', 2) . '" alt="Furor" title="Furor"></div>
        <div class="classicon warrior_protection ' . wow_class('warrior', 3) . '" alt="Schutz" title="Schutz"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon mage"></div> <div class="class" style="color:#5cccf0;">Magier</div>
    </div>
    <div class="classspec">
        <div class="classicon mage_arcane ' . wow_class('mage', 1) . '" alt="Arkan" title="Arkan"></div>
        <div class="classicon mage_fire ' . wow_class('mage', 2) . '" alt="Feuer" title="Feuer"></div>
        <div class="classicon mage_frost ' . wow_class('mage', 3) . '" alt="Frost" title="Frost"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon paladin"></div> <div class="class" style="color:#b28cba;">Paladin</div>
    </div>
    <div class="classspec">
        <div class="classicon paladin_holy ' . wow_class('paladin', 1) . '" alt="Heilig" title="Heilig"></div>
        <div class="classicon paladin_protection ' . wow_class('paladin', 2) . '" alt="Schutz" title="Schutz"></div>
        <div class="classicon paladin_retribution ' . wow_class('paladin', 3) . '" alt="Vergeltung" title="Vergeltung"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon priest"></div> <div class="class" style="color:#ffffff;">Priester</div>
    </div>
    <div class="classspec">
        <div class="classicon priest_discipline ' . wow_class('priest', 1) . '" alt="Disziplin" title="Disziplin"></div>
        <div class="classicon priest_holy ' . wow_class('priest', 2) . '" alt="Heilig" title="Heilig"></div>
        <div class="classicon priest_shadow ' . wow_class('priest', 3) . '" alt="Schatten" title="Schatten"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon shaman"></div> <div class="class" style="color:#2159ff;">Schamane</div>
    </div>
    <div class="classspec">
        <div class="classicon shaman_elemental ' . wow_class('shaman', 1) . '" alt="Elementar" title="Elementar"></div>
        <div class="classicon shaman_enhancement ' . wow_class('shaman', 2) . '" alt="Verstärkung" title="Verstärkung"></div>
        <div class="classicon shaman_restoration ' . wow_class('shaman', 3) . '" alt="Wiederherstellung" title="Wiederherstellung"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon rogue"></div> <div class="class" style="color:#dcf569;">Schurke</div>
    </div>
    <div class="classspec">
        <div class="classicon rogue_assassination ' . wow_class('rogue', 1) . '" alt="Meucheln" title="Meucheln"></div>
        <div class="classicon rogue_combat ' . wow_class('rogue', 2) . '" alt="Kampf" title="Kampf"></div>
        <div class="classicon rogue_subtlety ' . wow_class('rogue', 3) . '" alt="Täuschung" title="Täuschung"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon deathknight"></div> <div class="class" style="color:#aa1f3b;">Todesritter</div>
    </div>
    <div class="classspec">
        <div class="classicon deathknight_blood ' . wow_class('deathknight', 1) . '" alt="Blut" title="Blut"></div>
        <div class="classicon deathknight_frost ' . wow_class('deathknight', 2) . '" alt="Frost" title="Frost"></div>
        <div class="classicon deathknight_unholy ' . wow_class('deathknight', 3) . '" alt="Unheilig" title="Unheilig"></div>
    </div>

    <br clear="all">

    <div class="classes">
        <div class="classicon monk"></div> <div class="class" style="color:#00FF96;">Mönch</div>
    </div>
    <div class="classspec">
        <div class="classicon monk_brewmaster ' . wow_class('monk', 1) . '" alt="Braumeister" title="Braumeister"></div>
        <div class="classicon monk_mistweaver ' . wow_class('monk', 2) . '" alt="Nebelwirker" title="Nebelwirker"></div>
        <div class="classicon monk_windwalker ' . wow_class('monk', 3) . '" alt="Windläufer" title="Windläufer"></div>
    </div>
</div>
';

?>
