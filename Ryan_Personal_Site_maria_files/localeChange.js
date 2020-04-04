function toLocalizeDate(t){var n={day:"numeric",month:"short",year:"numeric"},e=document.cookie,a=getLanguage(e),r="strings_",o=r.length,s=a.slice(o,o+2)+"-"+a.slice(o+2,o+4),i=t.toLocaleDateString(s,n);return i}function getLangFromMap(t){return langMap[t]}function getLanguage(t){for(var n,e=t.split(";"),a=e.length,r="currentLanguage=",o=0;a>o;o++){for(var s=e[o];" "===s.charAt(0);)s=s.substring(1);if(0===s.indexOf(r)&&(n=s.substring(r.length,s.length),-1!==validLanguages.indexOf(n)))return n}return"strings_enUS"}function setLanguage(){var t=document.cookie,n=getLanguage(t);return n=getLangFromMap(n),$(".dropbtn").text(n),n}function showOrHideDropdown(){for(var t=document.getElementsByClassName("language-dropdown-content"),n=0;n<t.length;n++){var e=t[n];e.classList.contains("show")?e.classList.remove("show"):e.classList.add("show")}}function hideDropdown(){for(var t=document.getElementsByClassName("language-dropdown-content"),n=0;n<t.length;n++){var e=t[n];e.classList.contains("show")&&e.classList.remove("show")}}function parametrizeString(t,n){for(var e=n.length,a=0;e>a;a++)t=t.replace("^"+(a+1),n[a]);return t}var langMap=function(){var t={};return t.English="strings_enUS",t["日本語"]="strings_jaJP",t["français"]="strings_frFR",t.Deutsche="strings_deDE",t.strings_enUS="English",t.strings_jaJP="日本語",t.strings_frFR="français",t.strings_deDE="Deutsche",t}(),validLanguages=function(){var t=["strings_enUS","strings_jaJP","strings_frFR","strings_deDE"];return t}(),getLocaleForGlobalNav=function(){var t=document.cookie,n=getLanguage(t),e="strings_",a=e.length,r=n.slice(a,a+2)+"_"+n.slice(a+2,a+4);return r}();$(document).ready(function(){{var t=setLanguage();$(".langBox")}$(".langBox").each(function(){if($(this).find("a").text()===t){var n=$(this).find("span").css("color");$(this).find("a").css({color:n,opacity:"1"})}else $(this).find("span").text("")});var n=function(t,n){return(t.matches||t.matchesSelector||t.msMatchesSelector||t.mozMatchesSelector||t.webkitMatchesSelector||t.oMatchesSelector).call(t,n)};window.onclick=function(t){n(t.target,".dropbtn")||hideDropdown()},$(".language-dropdown-content a").click(function(){var t=$(this).text();$(".dropbtn").text($(this).text()),t=getLangFromMap(t);var n=new Date,e=new Date(n.getFullYear()+50,n.getMonth(),n.getDate());e=e.toUTCString();window.location.host;document.cookie="currentLanguage="+t+"; expires="+e+";path=/",window.location.reload()})});