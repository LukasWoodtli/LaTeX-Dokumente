/* generated javascript */
var skin = 'monobook';
var stylepath = '/skins-1.5';

/* MediaWiki:Common.js */
/* Jedes JavaScript hier wird für alle Benutzer für jede Seite geladen. */

/* MediaWiki:Monobook.js (deprecated; migrate to Common.js!) */
 /* tooltips and access keys */ 
 
 ta = new Object(); ta['pt-userpage'] = new Array('.','meine Benutzerseite');
 ta['pt-anonuserpage'] = new Array('.','Benutzerseite für die IP-Adresse, unter der du arbeitest');
 ta['pt-mytalk'] = new Array('n','meine Diskussionsseite');
 ta['pt-anontalk'] = new Array('n','Diskussion über Beiträge dieser IP-Adresse');
 ta['pt-preferences'] = new Array('','meine Einstellungen');
 ta['pt-watchlist'] = new Array('l','Liste meiner beobachteten Seiten');
 ta['pt-mycontris'] = new Array('y','Liste meiner Beiträge');
 ta['pt-login'] = new Array('o','Sich einzuloggen wird zwar gerne gesehen, ist aber keine Pflicht');
 ta['pt-anonlogin'] = new Array('o','Sich einzuloggen wird zwar gerne gesehen, ist aber keine Pflicht');
 ta['pt-logout'] = new Array('o','Abmelden');
 ta['ca-article'] = new Array('a','Artikel ansehen');
 ta['ca-talk'] = new Array('t','Diskussion zum Artikelinhalt');
 ta['ca-edit'] = new Array('e','Klicke hier, um diese Seite zu bearbeiten. Bitte benutze die Vorschau vor dem Speichern');
 ta['ca-addsection'] = new Array('+','Füge dieser Diskussion einen Kommentar zu');
 ta['ca-viewsource'] = new Array('e','Diese Seite ist geschützt. Du kannst den Quelltext betrachten');
 ta['ca-history'] = new Array('h','Frühere Versionen dieser Seite');
 ta['ca-protect'] = new Array('=','Seite vor Bearbeitung schützen');
 ta['ca-delete'] = new Array('d','entsorge diese Seite');
 ta['ca-undelete'] = new Array('d','schwupps, da isses wieder');
 ta['ca-move'] = new Array('m','durchs Verschieben wird die Seite umbenannt');
 ta['ca-nomove'] = new Array('','Du darfst diese Seite nicht verschieben');
 ta['ca-watch'] = new Array('w','Füge diese Seite deiner Beobachtungsliste hinzu');
 ta['ca-unwatch'] = new Array('w','Entferne diese Seite von deiner Beobachtungsliste');
 ta['search'] = new Array('f','Durchsuche dieses Wiki');
 ta['p-logo'] = new Array('','Hauptseite');
 ta['n-mainpage'] = new Array('z','Besuche die Hauptseite');
 ta['n-portal'] = new Array('','Über das Projekt, was du tun kannst, wo was zu finden ist');
 ta['n-currentevents'] = new Array('','Finde Hintergrundinformationen über aktuelle Ereignisse');
 ta['n-recentchanges'] = new Array('r','Liste der letzten Änderungen in der Wikipedia');
 ta['n-randompage'] = new Array('x','Lade eine zufällige Seite');
 ta['n-help'] = new Array('','Hilfe');
 ta['n-sitesupport'] = new Array('','Unterstütze uns');
 ta['t-whatlinkshere'] = new Array('j','Liste aller Wikipediaseiten mit Links auf diese Seite');
 ta['t-recentchangeslinked'] = new Array('k','Letzte Änderungen der hier verlinkten Seiten');
 ta['feed-rss'] = new Array('','RSS-Feed für diese Seite');
 ta['feed-atom'] = new Array('','Atom-Feed für diese Seite');
 ta['t-contributions'] = new Array('','Betrachte die Liste der Beiträge dieses Benutzers');
 ta['t-emailuser'] = new Array('','Sende diesem Benutzer eine E-Mail');
 ta['t-upload'] = new Array('u','Lade Bilder oder andere Multimedia-Dateien hoch');
 ta['t-specialpages'] = new Array('q','Liste aller Spezialseiten');
 ta['ca-nstab-main'] = new Array('c','Betrachte Artikelinhalt');
 ta['ca-nstab-user'] = new Array('c','Betrachte Benutzerseite');
 ta['ca-nstab-media'] = new Array('c','Betrachte Mediaseite');
 ta['ca-nstab-special'] = new Array('','Dies ist eine Spezialseite, sie kann nicht bearbeitet werden.');
 ta['ca-nstab-wp'] = new Array('a','Betrachte die Projektseite');
 ta['ca-nstab-image'] = new Array('c','Betrachte die Bildseite');
 ta['ca-nstab-mediawiki'] = new Array('c','Betrachte die Systemmeldung');
 ta['ca-nstab-template'] = new Array('c','Betrachte die Vorlage');
 ta['ca-nstab-help'] = new Array('c','Betrachte die Hilfeseite');
 ta['ca-nstab-category'] = new Array('c','Betrachte die Kategorienseite');

 // ============================================================
 // BEGIN Enable multiple onload functions
 
 // setup onload functions this way:
 // aOnloadFunctions[aOnloadFunctions.length] = function_name; // without brackets!
 
 if (!window.aOnloadFunctions) {
   var aOnloadFunctions = new Array();
 }
 
 window.onload = function() {
   if (window.aOnloadFunctions) {
     for (var _i=0; _i<aOnloadFunctions.length; _i++) {
       aOnloadFunctions[_i]();
     }
   }
 }
 
 // END Enable multiple onload functions
 // ============================================================

 // ============================================================
 // BEGIN Externhinweis
 // NEEDS Enable multiple onload functions
 
 function externHinweis() {
    if (
       (document.getElementById("pt-login")) &&  // ob der Benutzer NICHT angemeldet ist
       (document.getElementById("ca-edit")) &&   // ob die seite nicht geschützt ist
       (!document.getElementById("ca-nstab-user")) &&   // ob die seite keine benutzerseite ist
       (document.referrer != "") &&             // ob der referrer nicht leer ist
       (document.referrer.search(/wikipedia\.org/) == -1) // ob der Referrer NICHT wikipedia.org enthält
       )
    {
        var externHinweis = document.createElement("div");
        externHinweis.setAttribute('id','externHinweis');
            // Hier kann der Text verändert werden.
            // Bitte keine einfachen Anführungsstriche im Text verwenden!
            // Wikisyntax funktioniert nicht!
        externHinweis.innerHTML = '<a href="/wiki/Wikipedia:Willkommen" title="Wikipedia:Willkommen">Korrigiere Fehler oder erweitere diesen Artikel!</</a>';
       document.getElementById("content").appendChild(externHinweis);
    }
 }
 
 aOnloadFunctions[aOnloadFunctions.length] = externHinweis;
 
 // END Externhinweis
 // ============================================================

 // ============================================================
 // BEGIN Dynamic Navigation Bars
 // NEEDS Enable multiple onload functions 
 
 // set up the words in your language
 var NavigationBarHide = 'Einklappen';
 var NavigationBarShow = 'Ausklappen';
 
 // set up max count of Navigation Bars on page,
 // if there are more, all will be hidden
 // NavigationBarShowDefault = 0; // all bars will be hidden
 // NavigationBarShowDefault = 1; // on pages with more than 1 bar all bars will be hidden
 if (typeof NavigationBarShowDefault == 'undefined' ) {
     var NavigationBarShowDefault = 1;
 }
 
 // shows and hides content and picture (if available) of navigation bars
 // Parameters:
 //     indexNavigationBar: the index of navigation bar to be toggled
 function toggleNavigationBar(indexNavigationBar)
 {
    var NavToggle = document.getElementById("NavToggle" + indexNavigationBar);
    var NavFrame = document.getElementById("NavFrame" + indexNavigationBar);
 
    if (!NavFrame || !NavToggle) {
        return false;
    }
 
    // if shown now
    if (NavToggle.firstChild.data == NavigationBarHide) {
        for (
                var NavChild = NavFrame.firstChild;
                NavChild != null;
                NavChild = NavChild.nextSibling
            ) {
            if (NavChild.className == 'NavPic') {
                NavChild.style.display = 'none';
            }
            if (NavChild.className == 'NavContent') {
                NavChild.style.display = 'none';
            }
            if (NavChild.className == 'NavToggle') {
                NavChild.firstChild.data = NavigationBarShow;
            }
        }
 
    // if hidden now
    } else if (NavToggle.firstChild.data == NavigationBarShow) {
        for (
                var NavChild = NavFrame.firstChild;
                NavChild != null;
                NavChild = NavChild.nextSibling
            ) {
            if (NavChild.className == 'NavPic') {
                NavChild.style.display = 'block';
            }
            if (NavChild.className == 'NavContent') {
                NavChild.style.display = 'block';
            }
            if (NavChild.className == 'NavToggle') {
                NavChild.firstChild.data = NavigationBarHide;
            }
        }
    }
 }
 
 // adds show/hide-button to navigation bars
 function createNavigationBarToggleButton()
 {
    var indexNavigationBar = 0;
    // iterate over all < div >-elements
    for(
            var i=0; 
            NavFrame = document.getElementsByTagName("div")[i]; 
            i++
        ) {
        // if found a navigation bar
        if (NavFrame.className == "NavFrame") {
 
            indexNavigationBar++;
            var NavToggle = document.createElement("a");
            NavToggle.className = 'NavToggle';
            NavToggle.setAttribute('id', 'NavToggle' + indexNavigationBar);
            NavToggle.setAttribute('href', 'javascript:toggleNavigationBar(' + indexNavigationBar + ');');
 
            var NavToggleText = document.createTextNode(NavigationBarHide);
            NavToggle.appendChild(NavToggleText);
 
            // add NavToggle-Button as first div-element 
            // in < div class="NavFrame" >
            NavFrame.insertBefore(
                NavToggle,
                NavFrame.firstChild
            );
            NavFrame.setAttribute('id', 'NavFrame' + indexNavigationBar);
        }
    }
    // if more Navigation Bars found than Default: hide all
    if (NavigationBarShowDefault < indexNavigationBar) {
        for(
                var i=1; 
                i<=indexNavigationBar; 
                i++
        ) {
            toggleNavigationBar(i);
        }
    }
 
 }
 
 aOnloadFunctions[aOnloadFunctions.length] = createNavigationBarToggleButton;
 
 // END Dynamic Navigation Bars
 // ============================================================

 // ============================================================
 // BEGIN Configuration for "star" logo at the top of Featured Articles
 
 /** set to false in [[Special:Mypage/monobook.js]] to switch off this "feature" */
 var enable_linkFA = true;
 
 /** 
  * star logo for featured articles in other languages,
  * see [[:Template:Link_FA]] and [[MediaWiki:Common.css]]
  */
 function linkFA() {
     // early exit when diabled
     if (!enable_linkFA) return;
     
     // links are to replaced in p-lang only
     var    pLang   = document.getElementById("p-lang");
     if (!pLang)    return;
     var    lis = pLang.getElementsByTagName("li");
     for (var i=0; i<lis.length; i++) {
          var   li  = lis[i];
          // only links with a corresponding Link_FA template are interesting
          if (!document.getElementById("FA-" + li.className))   continue;
          
          li.className += " FA";
          li.title = "Dieser Artikel wurde als exzellent bewertet.";
     }
 }
 aOnloadFunctions[aOnloadFunctions.length] = linkFA;
     
 // END Configuration for "star" logo at the top of Featured Articles */
 // ============================================================

 // ============================================================
 // BEGIN Moving of the editsection links
 
 /*
 * moveEditsection
 * Dieses Script verschiebt die [Bearbeiten]-Buttons vom rechten Fensterrand
 * direkt rechts neben die jeweiligen Überschriften.
 * This script moves the [edit]-buttons from the right border of the window
 * directly right next to the corresponding headings.
 *
 * Zum Abschalten die folgende Zeile (ohne führendes Sternchen) in die eigene
 * monobook.js (zu finden unter [[Special:Mypage/monobook.js|Benutzer:Name/monobook.js]]) kopieren:
 * var oldEditsectionLinks = true;
 *
 * dbenzhuser (de:Benutzer:Dbenzhuser)
 */
 function moveEditsection() {
     if (typeof oldEditsectionLinks == 'undefined' || oldEditsectionLinks == false) {
         var spans = document.getElementsByTagName("span");
         for(var i = 0; i < spans.length; i++) {
             if(spans[i].className == "editsection") {
                 spans[i].style.fontSize = "x-small";
                 spans[i].style.fontWeight = "normal";
                 spans[i].style.cssFloat = "none";
                 spans[i].style.marginLeft = "0px";
                 spans[i].parentNode.appendChild(document.createTextNode(" "));
                 spans[i].parentNode.appendChild(spans[i]);
             }
         }
     }
 }
 // onload
 addOnloadHook(moveEditsection);
 
 // END Moving of the editsection links
 // ============================================================

 // ============================================================
 // BEGIN import Onlyifediting-functions
 // SEE ALSO [[MediaWiki:Onlyifediting.js]]
 
 if (document.URL.indexOf("action=edit") > 0 || document.URL.indexOf("action=submit") > 0) {
  document.write('<script type="text/javascript" src="/w/index.php?title=MediaWiki:Onlyifediting.js&action=raw&ctype=text/javascript&dontcountme=s"></script>');
 }
 
 // END import Onlyifediting-functions
 // ============================================================

 // ============================================================
 // BEGIN pageview counter
 // SEE ALSO [[MediaWiki:Pagecounter.js]]
 //     Please talk to User:LeonWeber before changing anyting or 
 //     if there are any issues with that.
 
 // disable the counter
 var disable_counter = 0; 
 
 document.write('<script type="text/javascript" src="/w/index.php?title=MediaWiki:Pagecounter.js&action=raw&ctype=text/javascript&dontcountme=s&smaxage=3600"></script>');
 
 // END pageview counter 
 // ============================================================