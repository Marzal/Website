<?php
$PAGE_TITLE    = "KXStudio : Applications : Catia";
$PAGE_TYPE     = "APPLICATION_NU";
$PAGE_SOURCE_1 = ARRAY("/Applications", "/Applications:Catia");
$PAGE_SOURCE_2 = ARRAY("Applications", "Catia");
include_once("includes/header.php");
?>

<!-- intro -->
<p>
    Catia is a JACK Patchbay, with some neat features like A2J bridge support and JACK Transport.<br/>
    It's supposed to be as simple as possible so it can work nicely on non-Linux platforms.
</p>

<!-- Interface -->
<h3><span class="mw-headline" id="Interface"> The Interface </span></h3>
<p>
    A screenshot follows:<br/>
    <a href="screenshots/catia.png" class="external text" rel="nofollow"><img src="screenshots/catia.png" alt="catia.png" /></a>
</p>

<!-- Download -->
<h3><span class="mw-headline" id="Download"> Download </span></h3>
<p>
    Catia is available in the KXStudio repositories and ArchLinux AUR ('catia' package in the KXStudio repositories, 'cadence' in AUR).<br/>
    <img src="images/ico_arch.png" alt="" class="img_text_align_spaced"/>
        <a href="https://aur.archlinux.org/packages/cadence/" class="external text a_bigger_text" rel="nofollow" target="_blank">
         ArchLinux</a> (AUR)<br/>
    <img src="images/ico_debian.png" alt="" class="img_text_align_spaced"/>
        <a href="apt://catia" class="external text a_bigger_text">
         Debian/Ubuntu</a> (via KXStudio repositories)<br/>
</p>
<p>
    Pre-compiled binaries are available for Linux and Windows (part of the Cadence bundle).<br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux32.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 32bit</a><br/>
    <img src="images/ico_linux.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-linux64.tar.xz/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Linux 64bit</a><br/>
    <img src="images/ico_windows.png" alt="" class="img_text_align_spaced"/>
        <a href="http://sourceforge.net/projects/kxstudio/files/Releases/cadence/Cadence-0.8.1-win32.zip/download" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Windows 32bit</a><br/>
</p>
<p>
    The latest source code is hosted on github, together with bug reports, feature requests, etc.<br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Source code</a><br/>
     <img src="images/ico_github.png" alt="" class="img_text_align_spaced"/>
        <a href="https://github.com/falkTX/Cadence/issues?state=open" class="external text a_bigger_text" rel="nofollow" target="_blank">
         Bug reports / Feature requests</a><br/>
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>
