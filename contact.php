<?php
// activate php session
session_start();
// usual utilies
include("/rcl/www/funktionen.php");
// generate nounce on a seperate ajax post request, only before sending
if(isset($_POST['nounce'])){
    list($id, $n) = $rcl->contact_gen_nounce();
    exit("$id;$n");
}

// Translations
// Contact Form
i18n("h3",      "Kontaktformular", "Contact Form");
i18n("email",   "Ihre E-Mail-Adresse", "Your email address");
i18n("subje",   "Betreff", "Subject");
i18n("msg",     "Nachrichtentext", "Message content");
i18n("nojs",    "Das Kontaktformular benötigt JavaScript.", "The contact form requires JavaScript.");
i18n("subm",    "Nachricht abschicken", "Send message");
i18n("sending", "Sende", "Sending");
i18n("succ",    "Ihre Nachricht wurde erfolgreich versendet.", "Your message was sent successfully.");
i18n("again",   "Sie haben bereits eine Nachricht versendet.", "You already sent a message.");
i18n("errdata", "Fehler: ungültige Eingabedaten.", "Error: invalid input data.");
i18n("errunkn", "Fehler beim Senden der Nachricht. Versuchen Sie es erneut.", "An error occured while sending your message. Please try it again.");
// Profiles
i18n("gaming",   "Videospiele", "Gaming");
i18n("socialmedia",   "Soziale Medien", "Social Media");
i18n("coding",   "Programmierung", "Coding");
i18n("other",   "Sonstiges", "Other");
//i18n("jserr",      "JavaScript benötigt", "JavaScript required");
//i18n("sa-click",   "anzeigen", "show");
?>
<?php $title = $rcl->lang("Impressum", "Contact");  $path = strtok($_SERVER['REQUEST_URI'],'?'); ?>
<?php include("include1.php"); ?>

<!-- Legal Infos -->
<div id="contact-legal" class="clearfix">
<?php $rcl->impressum(); ?>
</div>

<!-- Contact Form -->
<?php
$email = '';
$subj  = '';
$msg   = '';
$disable = isset($_SESSION['RCL::contact-sent']);
if(    isset($_POST['id'])
    && isset($_POST['secret'])
    && isset($_POST['email'])
    && isset($_POST['subject'])
    && isset($_POST['msg'])
) {
    $contact_status = 'disabled';

    $email = trim(post('email'));
    $subj  = trim(post('subject'));
    $msg   = trim($_POST['msg']);

    if(    ! $disable
        && isset($_POST["sp-hidden"]) && $_POST["sp-hidden"] === ""
        && isset($_POST["sp-style"]) && $_POST["sp-style"] === ""
        && isset($_POST["sp-css"]) && $_POST["sp-css"] === ""
        && ! isset($_POST["sp-js"])
    ){
        // send email
        $contact_status = $rcl->contact_send('RCL', 'id', 'secret', 'email', 'subject', 'msg');
        $disable = isset($_SESSION['RCL::contact-sent']);

        $_SESSION['RCL::contact-email'] = $email;
        $_SESSION['RCL::contact-subj']  = $subj;
        $_SESSION['RCL::contact-msg']   = $msg;
    }
}
$dis = $disable ? 'disabled="disabled"' : '';

$email = isset($_SESSION['RCL::contact-email']) ? $_SESSION['RCL::contact-email'] : $email;
$subj  = isset($_SESSION['RCL::contact-subj'])  ? $_SESSION['RCL::contact-subj']  : $subj;
$msg   = isset($_SESSION['RCL::contact-msg'])   ? $_SESSION['RCL::contact-msg']   : $msg;

?>
<form id="contact-form" class="jsform" method="post" action="<?=langUrl($path)?>" style="">
    <h3><?=i18n("h3")?></h3>
    <noscript>
        <div><input type="text" placeholder="<?=i18n("email")?>" disabled="disabled" value="<?=$email?>"/></div>
        <div><input type="text" placeholder="<?=i18n("subje")?>" disabled="disabled" value="<?=$subj?>"/></div>
        <div><textarea placeholder="<?=i18n("msg")?>" rows="4" disabled="disabled"><?=$msg?></textarea></div>
        <div class="clearfix">
            <span class="error"><?=i18n("nojs")?></span>
            <input type="submit" value="<?=i18n("subm")?>" disabled="disabled"/>
        </div>
    </noscript>
<?php if(! $rcl->screenreader){ ?>
    <div class="jsonly">
        <div><input id="contact-email" name="email" type="text" placeholder="<?=i18n("email")?>" <?=$dis?> value="<?=$email?>"/></div>
        <div><input id="contact-subject" name="subject" type="text" placeholder="<?=i18n("subje")?>" <?=$dis?> value="<?=$subj?>"/></div>
        <div><textarea id="contact-msg" name="msg" placeholder="<?=i18n("msg")?>" class="autoheight" rows="4" data-min-rows="4" data-max-rows="14" <?=$dis?>><?=$msg?></textarea></div>
        <div class="clearfix">
            <span<?php
            if(isset($contact_status)) {
                if($contact_status === 0) { echo ' class="ok">' . i18n("succ");}
                else {
                    echo ' class="error" data-error="' . $contact_status . '">';
                    if ($contact_status === 'disabled') {echo i18n("again");}
                    else if ($contact_status >= 2 && $contact_status <= 5) {echo i18n("errdata");}
                    else {echo i18n("errunkn");}
                }
            } else if($disable) {
                echo ' class="ok">' . i18n("succ");
            } else if($msg !== '') {
                echo ' class="error">' . i18n("errunkn");
            } else { echo '>'; }
            ?></span>
            <input type="submit" value="<?=i18n("subm");?>" <?=$dis?>/>
        </div>
<?php if(! $disable) { ?>
        <!-- spam protection -->
        <input name="sp-hidden" type="hidden" value="" />
        <input name="sp-style" type="text" style="display: none;" value="" />
        <input name="sp-css" type="text" value="" />
        <input name="sp-js" type="text" value="" />
        <script type="text/javascript">
        $(function(){
            // elements
            var form = $('#contact-form');
            var submit = $('input:submit', form);
            var email = $('#contact-email', form);
            var subject = $('#contact-subject', form);
            var msg = $('#contact-msg', form);

            // spam protection
            $('input[name="sp-js"]', form).remove();

            // colour input element el regarding predicate p
            var color = function(el, p){
                $(el).removeClass('red green');
                if(el.value.length !== 0){
                    $(el).addClass(p ? 'green' : 'red');
                }
                // en-/disable submit button
                var green = $('input.green, textarea.green', form);
                submit.prop('disabled', green.length !== 3);
            };
            // is string str a valid email?
            var valid = function(str){
                return str.match(/^[^@]+@[^@\.]{2,64}(\.[^@\.]{2,64})*\.[^@\.\d]{2,64}\.?$/i)
                    && str.match(/^[\w\d@\-_+\.]+$/i)
                    && ! str.match(/^.+@(.*\.)?blackpinguin(\.spdns)?\.de$/i)
                ;
            };
            // validate email input
            var mailCheck = function(){
                color(this, valid(this.value.trim()));
            };
            // validate input by length
            var lengthCheck = function(min, max){
                return function(){
                    var lmin = this.value.replace(/\s/gi, '').length;
                    var lmax = this.value.trim().length;
                    color(this, lmin >= min && lmax <= max);
                };
            };

            // input listener
            email.on('input', mailCheck).trigger('input');
            subject.on('input', lengthCheck(5, 80)).trigger('input');
            msg.on('input', lengthCheck(20, 3000)).trigger('input');

            // submit condition
            form.submit(function(){
                // abort if invalid input
                var green = $('input.green, textarea.green', form);
                if(green.length !== 3){return false;}

                // do submit
                if($('input[name="id"], input[name="secret"]', form).length === 2){
                    return true;
                }
                submit.prop('disabled', true);
                setInterval(function(){
                    var n = 4;
                    var d = true;
                    var f = function(){
                        var s = ''; for(var i=n; i--; i>0){s+='.';}
                        if(n === 4 || n === 0){d = !d;}
                        n += d ? +1 : -1;
                        submit.val('<?=i18n("sending")?>'+s);
                    };
                    submit.css('width', submit.width());
                    f();
                    return f;
                }(), 250);

                //spam protection
                $.post('/contact', {'nounce': null}, function(data){
                    data = data.split(';');
                    $('<input type="hidden" name="id"/>')
                        .appendTo(form)
                        .val(data[0])
                    ;
                    $('<input type="hidden" name="secret"/>')
                        .appendTo(form)
                        .val(<?=$rcl->contact_js()?>(Number(data[1]), msg.val()))
                    ;
                    setTimeout(function(){form.submit();}, 2000); // sleep 2s
                }, 'text');

                return false;
            });
        });
        </script>
<?php } ?>
    </div>
<?php } ?>
</form>


<!-- Profiles -->
<div id="profiles" class="clearfix">
    <div id="profiles-gaming"><div>
        <h3><?=i18n('gaming');?></h3>
        <div>HowLongToBeat<div><?php extern('https://howlongtobeat.com/user?n=RCL','RCL');?></div></div>
        <div>Steam<div><?php extern('https://steamcommunity.com/id/blackpinguin/','blackpinguin');?><br/><?php extern('https://steamcommunity.com/id/istador/','istador');?></div></div>
        <div>PSN<div><?php /* https://my.playstation.com/profile/BlackPinguin89/ */ extern('https://psnprofiles.com/BlackPinguin89/','BlackPinguin89');?></div></div>
        <div class="fade">Battle.net<div>D3: <?php extern('https://eu.battle.net/d3/de/profile/BlackPinguin-2234/','BlackPinguin#2234');?></div></div>
        <div class="fade">Origin<div><a class="private">RCLadiges</a></div></div>
        <div class="fade">Ubisoft Connect<div><?php extern('https://ubisoftconnect.com/en-US/profile/Istador89', 'Istador89') ?></div></div>
        <div class="fade">MobyGames<div><?php extern('https://www.mobygames.com/user/sheet/userSheetId,617035/', 'Robin C. Ladiges'); ?></div></div>
    </div></div>

    <div id="profiles-social-media"><div>
        <h3><?=i18n('socialmedia');?></h3>
        <div>Twitter<div><?php extern('https://twitter.blackpinguin.de/','@Istador');?></div></div>
        <div>YouTube<div><?php extern('https://youtube.com/@RCL89','@RCL89');?><br/>Old: <a class="private strike">15t4d0r</a></div></div>
        <div>Discord<div><?php extern('https://discord.com/users/495528563509035028', '@rcl89'); ?><br/>Old: <a class="private strike">RCL#1878</a></div></div>
        <div class="fade">XING<div><?php extern('https://xing.com/profile/RobinChristopher_Ladiges','Robin C. Ladiges');?></div></div>
        <div class="fade">Facebook<div><?php extern('https://www.facebook.com/robin.ladiges','robin.ladiges');?></div></div>
        <div class="fade strike">Google+<div><?php extern('https://plus.google.com/101325682758740139657/','Robin C. Ladiges');?></div></div>
    </div></div>

    <div id="profiles-other"><div>
        <h3><?=i18n('other');?></h3>
        <div>GitHub<div><?php extern('https://github.com/Istador','Istador');?></div></div>
        <div>GitLab<div><?php extern('https://gitlab.com/Istador','Istador');?></div></div>
        <div>Stack Overflow<div><?php extern('https://stackoverflow.com/users/2349701/istador','Istador');?></div></div>
        <div>Rosetta@home<div><?php extern('https://boinc.bakerlab.org/rosetta/view_profile.php?userid=184656','Istador');?></div></div>
        <div>Wikipedia<div><?php extern('https://de.wikipedia.org/wiki/User:Istador','Istador');?></div></div>
        <div>Amazon<div><?php extern('https://www.amazon.de/gp/profile/amzn1.account.AECPSINP4PGTMGB4TN3GM6TKE77A','Robin Ladiges');?></div></div>
        <div>Kickstarter<div><?php extern('https://www.kickstarter.com/profile/rcl','RCL');?></div></div>
        <div class="fade">Startnext<div><?php extern('https://www.startnext.de/profile/istador','Istador');?></div></div>
    </div></div>

</div>


<?php include("include2.php"); ?>
