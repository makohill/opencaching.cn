<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from map2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'count', 'map2.tpl', 140, false),array('modifier', 'escape', 'map2.tpl', 2460, false),)), $this); ?>

<?php if ($this->_tpl_vars['old_msie']): ?>
    <script type="text/javascript">
    <?php echo '<!--
    function mapLoad()
    {
        document.getElementById(\'googlemap\').innerHTML =
            "<div style=\'position:relative; top:180px; left:10px\'><p>Your Internet Explorer is too old to display the map. Please upgrade at least to version 7, better 8.</p></div>";
    }
    -->'; ?>

    </script>
<?php else: ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_balloon.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_centerwindow.js"></script>

<?php echo '
<script type="text/javascript">
<!--

function trim(s)
{
    while (s.substring(0, 1) == \' \')
        s = s.substring(1, s.length);

    while (s.substring(s.length-1, s.length) == \' \')
        s = s.substring(0, s.length-1);

    return s;
}

function getTimeDiff(dTime1, dTime2)
{
    return ((dTime2-dTime1)/1000).toFixed(1);
}


/*=========================================================================
    Initialization and Configuration
 ==========================================================================*/

var bFullscreen = '; ?>
<?php echo $this->_tpl_vars['bFullscreen']; ?>
<?php echo ';
var nDefaultZoom = 13;

var mnInitLat = '; ?>
<?php echo $this->_tpl_vars['nGMInitLat']; ?>
<?php echo ';
var mnInitLon = '; ?>
<?php echo $this->_tpl_vars['nGMInitLon']; ?>
<?php echo ';
var mnInitZoom = '; ?>
(<?php echo $this->_tpl_vars['nGMInitZoom']; ?>
 < 0 ? nDefaultZoom : <?php echo $this->_tpl_vars['nGMInitZoom']; ?>
)<?php echo ';
var mbInitCookiePos = '; ?>
<?php echo $this->_tpl_vars['bGMInitCookiePos']; ?>
<?php echo ';
var msInitWaypoint = "'; ?>
<?php echo $this->_tpl_vars['sGMInitWaypoint']; ?>
<?php echo '";
var msInitType = \'roadmap\';
var msInitSiderbarDisplay = \'none\';
var msInitAttribSelection = false;
var miQueryID = '; ?>
<?php echo $this->_tpl_vars['queryid']; ?>
<?php echo ';

/* home coordinates */
var mnUserLat = '; ?>
<?php echo $this->_tpl_vars['nUserLat']; ?>
<?php echo ';
var mnUserLon = '; ?>
<?php echo $this->_tpl_vars['nUserLon']; ?>
<?php echo ';

var msSearchHint = "'; ?>
city, cachename or waypoint<?php echo '";
var mbResetSearchTextOnFocus = false;

var msInitCookieLastPosName = \'ocgmlastpos\';
var msInitCookieConfigName = \'ocgmconfig\';
var msInitCookieFilterName = \'ocgmfilter\';
var msInitCookiePermFilterName = \'ocgmfilter_saved\';
if (!navigator.cookieEnabled)
{
    // see doc/cookies.txt for information on cookies
    msInitCookieLastPosName = \'\';
    msInitCookieConfigName = \'\';
    msInitCookieFilterName = \'\';
    msInitCookiePermFilterName = \'\';
}

var moGeocoder = new google.maps.Geocoder();
var moSearchList = null;
var maSearchListCoords = new Array();
var moPermalinkBox = null;
var moMapSearch = null;
var moMap = null;
var moInfoWindow = null;
var moMarkerList = new Array();
var msPopupMarkerWP = \'\';
var mhInfoWindowHackTimer = null;
var mhInfoWindowHackTries = 0;
var moWpInfoWindow = null;
var maWpWaypoints;
var moWaypointList = new Array();
var mhPictureTimer = null;

var mnMapWidth = 770;
var mnMapHeight = 600;

var searchString = \'\';
var searchResultCoord = null;

// id of search.php result
var msURLSearchPHP = \'search.php\';
var msURLMapPHP = \'map2.php\';
var mnResultId = 0;
var mbDataDownloadHaveSecondChance = false;
var mbDataDownloadStartTime;
var moDataLoadTimer = null;
var copyrightDiv = null;
var mnMaxDownloadCount = 500;
var mbDownloadEnabled = false;

var bFilterChanged = false;
var sFilterSaveText;
var oFilterSaveColor;
var bAllAttribs = true;

'; ?>

var nCacheTypeCount = <?php echo smarty_function_count(array('array' => $this->_tpl_vars['aCacheType']), $this);?>
;
var nCacheSizeCount = <?php echo smarty_function_count(array('array' => $this->_tpl_vars['aCacheSize']), $this);?>
;
var nMaxAttributeId = <?php echo $this->_tpl_vars['maxAttributeId']; ?>
;
<?php echo '


function cookieLoad(saved_filter)
{
    if (msInitCookieConfigName == \'\')
        return;

    var mbCurrentFilterCookieLoaded = false;

    var sCookieContent = document.cookie.split(";");
    for (var nIndex = 0; nIndex < sCookieContent.length; nIndex++)
    {
        var sCookieValue = trim(sCookieContent[nIndex]).split("=");
        if (sCookieValue[0] == msInitCookieLastPosName)
        {
            if (mbInitCookiePos == 1)
            {
                var sValues = sCookieValue[1].split(":");
                mnInitZoom = parseInt(sValues[0]);
                mnInitLon = parseFloat(sValues[1]);
                mnInitLat = parseFloat(sValues[2]);
            }
        }
        else if (sCookieValue[0] == msInitCookieConfigName)
        {
            var sValues = sCookieValue[1].split(":");
            msInitType = sValues[0];
            if (sValues.length > 1)
                msInitSiderbarDisplay = sValues[1];
            if (sValues.length > 2)
                msInitAttribSelection = (sValues[2] > 0);
        }
        else if (sCookieValue[0] == msInitCookieFilterName && !saved_filter)
        {
            eval_filtercookies(sCookieValue[1].split(\'/\'));
            mbCurrentFilterCookieLoaded = true;
        }
        else if (sCookieValue[0] == msInitCookiePermFilterName && !mbCurrentFilterCookieLoaded)
            eval_filtercookies(sCookieValue[1].split(\'/\'));
    }
}

function eval_filtercookies(aValues)
{
    reset_filter_values();

    for (var iValue=0; iValue<aValues.length; iValue++)
    {
        fs = aValues[iValue].split(\':\');

        if (fs[0] == \'types\')
        {
            ftypes = \',\' + fs[1] + \',\';
            '; ?>

            <?php $_from = $this->_tpl_vars['aCacheType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachetype']):
?>
                document.getElementById('cachetype' + <?php echo $this->_tpl_vars['cachetype']['id']; ?>
).checked = ftypes.indexOf(',' + <?php echo $this->_tpl_vars['cachetype']['id']; ?>
 + ',') >= 0;
            <?php endforeach; endif; unset($_from); ?>
            <?php echo '
            cachetype_all_set();
        }
        else if (fs[0] == \'sizes\')
        {
            fsizes = \',\' + fs[1] + \',\';
            '; ?>

            <?php $_from = $this->_tpl_vars['aCacheSize']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachesize']):
?>
                document.getElementById('cachesize' + <?php echo $this->_tpl_vars['cachesize']['id']; ?>
).checked = fsizes.indexOf(',' + <?php echo $this->_tpl_vars['cachesize']['id']; ?>
 + ',') >= 0;
            <?php endforeach; endif; unset($_from); ?>
            <?php echo '
            cachesize_all_set();
        }
        else if (fs[0] == \'hide\')
        {
            document.getElementById(\'f_userowner\').checked = fs[1].indexOf(\'O\') >= 0;
            document.getElementById(\'f_userfound\').checked = fs[1].indexOf(\'F\') >= 0;
            document.getElementById(\'f_ignored\').checked   = fs[1].indexOf(\'I\') >= 0;
            document.getElementById(\'f_disabled\').checked  = fs[1].indexOf(\'T\') >= 0;
            document.getElementById(\'f_inactive\').checked  = fs[1].indexOf(\'D\') >= 0;
                // disabled and archived options have strange names and IDs for backward compatibility
            document.getElementById(\'f_otherPlatforms\').checked = fs[1].indexOf(\'M\') >= 0;
            document.getElementById(\'f_geokrets\').checked = fs[1].indexOf(\'G\') >= 0;
        }
        else if (fs[0] == \'rated\')
        {
            fr = fs[1].split(\',\');
            document.getElementById(\'terrainmin\').value = fr[0];
            document.getElementById(\'terrainmax\').value = fr[1];
            document.getElementById(\'difficultymin\').value = fr[2];
            document.getElementById(\'difficultymax\').value = fr[3];
            document.getElementById(\'recommendationmin\').value = fr[4];
        }
        else if (fs[0] == \'attr\')
        {
            fa = \',\' + fs[1] + \',\';

            '; ?>
<?php echo ''; ?><?php $_from = $this->_tpl_vars['aAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribGroupItem']):
?><?php echo ''; ?><?php $_from = $this->_tpl_vars['attribGroupItem']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribItem']):
?><?php echo 'eva(fa,'; ?><?php echo $this->_tpl_vars['attribItem']['id']; ?><?php echo ',\''; ?><?php echo $this->_tpl_vars['attribItem']['icon']; ?><?php echo '\');'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
<?php echo '
        }
    }

    mbFilterCookieLoaded = true;
}

function eva(fa,id,icon)
{
    if (fa.indexOf(\',\' + id + \'-1,\') >= 0)
    {
        document.getElementById(\'attribute\' + id).value = 1;
        document.getElementById(\'imgattribute\' + id).src = \'resource2/'; ?>
<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
<?php echo '/images/attributes/\' + icon + \'.png\';
    }
    else if (fa.indexOf(\',\' + id + \'-2,\') >= 0)
    {
        document.getElementById(\'attribute\' + id).value = 2;
        document.getElementById(\'imgattribute\' + id).src = \'resource2/'; ?>
<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
<?php echo '/images/attributes/\' + icon + \'-no.png\';
    }
}

function cookieSave(permanent_filter)
{
    if (msInitCookieConfigName == \'\')
        return;

    var dCookieExp = new Date(2049, 12, 31);

    // map type and sidebar state
    document.cookie = msInitCookieConfigName + "=" + moMap.getMapTypeId() + ":" + msInitSiderbarDisplay + ":" + (bAllAttribs ? "1" : "0") + ";expires=" + dCookieExp.toUTCString();

    // map position and zoom level
    var oCenterPos = moMap.getCenter();
    document.cookie = msInitCookieLastPosName + "=" + moMap.getZoom() + ":" + oCenterPos.lng() + ":" + oCenterPos.lat() + ";expires=" + dCookieExp.toUTCString();

    // filter settings
    var sFilter = \'\';

    if (!document.getElementById(\'all_cachetypes\').checked)
    {
        var sCtFilter = \'\';
        '; ?>

        <?php $_from = $this->_tpl_vars['aCacheType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachetype']):
?>
            if (document.getElementById('cachetype' + <?php echo $this->_tpl_vars['cachetype']['id']; ?>
).checked) sCtFilter += ',' + <?php echo $this->_tpl_vars['cachetype']['id']; ?>
;
        <?php endforeach; endif; unset($_from); ?>
        <?php echo '
        sFilter += \'/types:\' + sCtFilter.substring(1);
    }

    if (!document.getElementById(\'all_cachesizes\').checked)
    {
        var sCsFilter = \'\';
        '; ?>

        <?php $_from = $this->_tpl_vars['aCacheSize']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachesize']):
?>
            if (document.getElementById('cachesize' + <?php echo $this->_tpl_vars['cachesize']['id']; ?>
).checked) sCsFilter += ',' + <?php echo $this->_tpl_vars['cachesize']['id']; ?>
;
        <?php endforeach; endif; unset($_from); ?>
        <?php echo '
        sFilter += \'/sizes:\' + sCsFilter.substring(1);
    }

    sFilter += \'/hide:\';
    if (document.getElementById(\'f_userowner\').checked) sFilter += \'O\';
    if (document.getElementById(\'f_userfound\').checked) sFilter += \'F\';
    if (document.getElementById(\'f_ignored\').checked)   sFilter += \'I\';
    if (document.getElementById(\'f_disabled\').checked)  sFilter += \'T\';
    if (document.getElementById(\'f_inactive\').checked)  sFilter += \'D\';
    if (document.getElementById(\'f_otherPlatforms\').checked) sFilter += \'M\';
    if (document.getElementById(\'f_geokrets\').checked) sFilter += \'G\';

    sFilter += \'/rated:\' +
        document.getElementById(\'terrainmin\').value + \',\' +
        document.getElementById(\'terrainmax\').value + \',\' +
        document.getElementById(\'difficultymin\').value + \',\' +
        document.getElementById(\'difficultymax\').value + \',\' +
        document.getElementById(\'recommendationmin\').value;

    var sAttrFilter = \'\';
    for (nAttribId=1; nAttribId<=nMaxAttributeId; nAttribId++)
    {
        var ao = document.getElementById(\'attribute\' + nAttribId);
        if (ao)
            if (ao.value != 3)
                sAttrFilter += \',\' + nAttribId + \'-\' + ao.value;
    }
  if (sAttrFilter != "")
        sFilter += \'/attr:\' + sAttrFilter.substring(1);

    if (permanent_filter)
        document.cookie = msInitCookiePermFilterName + "=" + sFilter.substring(1)  + ";expires=" + dCookieExp.toUTCString();
    document.cookie = msInitCookieFilterName + "=" + sFilter.substring(1);
}


function mapLoad()
{
    cookieLoad();
    showcoords(mnInitLat, mnInitLon);

    if (!msInitAttribSelection)
        toggle_attribselection(false);

    if (bFullscreen && msInitSiderbarDisplay == "block")
    toggle_sidebar(false);

    var maptypes = [\'OSM\', \'MQ\', \'OCM\',
                    google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE,
                    google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN ];
  var initType = google.maps.MapTypeId.ROADMAP;
  for (var i=0; i<maptypes.length; i++)
    if (msInitType == maptypes[i])
            initType = msInitType;

    var myOptions = {
        zoom: mnInitZoom,
        center: new google.maps.LatLng(mnInitLat, mnInitLon),
        mapTypeId: initType,
        backgroundColor: "#d0dccc",

        mapTypeControl: true,
        mapTypeControlOptions: { mapTypeIds: maptypes, position: google.maps.ControlPosition.TOP_RIGHT },

        panControl: false,
        zoomControl: true,
        scaleControl: true,
        streetViewControl: false,

        overviewMapControl: true,  '; ?>

        <?php if ($this->_tpl_vars['opt_overview'] == 1): ?>
        overviewMapControlOptions: <?php echo '{ opened: true }'; ?>
,
        <?php endif; ?>  <?php echo '

        styles:
            [ { featureType:"poi.business", elementType:"labels", stylers: [{ visibility:"off" }] },
              { featureType:"poi.government", elementType:"labels", stylers: [{ visibility:"off" }] } ]
            // poi types: https://developers.google.com/maps/documentation/javascript/reference#MapTypeStyleFeatureType
    };

    moMap = new google.maps.Map(document.getElementById("googlemap"), myOptions);
    moMap.enableKeyDragZoom();

    '; ?>

    <?php if ($this->_tpl_vars['lat_min'] !== null): ?>
        var lat_margin = (<?php echo $this->_tpl_vars['lat_max']; ?>
 - <?php echo $this->_tpl_vars['lat_min']; ?>
) / 50;
        var lon_margin = (<?php echo $this->_tpl_vars['lon_max']; ?>
 - <?php echo $this->_tpl_vars['lon_min']; ?>
) / 50;
        moMap.fitBounds(
            new google.maps.LatLngBounds(
                new google.maps.LatLng(<?php echo $this->_tpl_vars['lat_min']; ?>
-lat_margin ,<?php echo $this->_tpl_vars['lon_min']; ?>
-lon_margin),
                new google.maps.LatLng(<?php echo $this->_tpl_vars['lat_max']; ?>
+lat_margin, <?php echo $this->_tpl_vars['lon_max']; ?>
+lon_margin)
            )
        );
    <?php endif; ?>
    <?php echo '

    setMapType("OSM", "OpenStreetMap", "http://tile.openstreetmap.org/", 18);
    setMapType("MQ"," MapQuest", "http://otile1.mqcdn.com/tiles/1.0.0/osm/", 19);
    setMapType("OCM", "OpenCycleMap", "http://tile.opencyclemap.org/cycle/", 18);

    moInfoWindow = new google.maps.InfoWindow();
    moWpInfoWindow = new google.maps.InfoWindow();

    moSearchList = document.getElementById(\'mapselectlist\');
    moMapSearch = document.getElementById(\'mapsearch\');
    moPermalinkBox = document.getElementById(\'permalink_box\');

    // Create div for showing copyrights.
    copyrightDiv = document.createElement("div");
    copyrightDiv.id = "map-copyright";
    copyrightDiv.style.fontSize = "11px";
    copyrightDiv.style.fontFamily = "Arial, sans-serif";
    copyrightDiv.style.padding = "0 2px 0 2px";
    copyrightDiv.style.whiteSpace = "nowrap";
    copyrightDiv.style.background = "#FFFFFF";
    copyrightDiv.style.opacity = "0.7";

    //copyrightDiv.class = "mapattribution";
    moMap.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(copyrightDiv);

    google.maps.event.addListener(moMap, "dragstart", function(){map_movestart()});
    google.maps.event.addListener(moMap, "dragend", function(){map_moveend()});
    google.maps.event.addListener(moMap, "bounds_changed", function(){map_moveend()});
    // google.maps.event.addListener(moMap, "zoom_changed", function(){map_moveend()});
    // is included in bounds_changed
    google.maps.event.addListener(moMap, "maptypeid_changed", function(){map_maptypechanged()});
    google.maps.event.addListener(moMap, "mousemove", function(event){map_mousemove(event)});
    google.maps.event.addListener(moMap, "click", function(){map_clicked()});
    // google.maps.event.addListener(moMap, "rightclick", function(){toggle_sidebar(false)});

    if (msInitWaypoint != "")
        show_cachepopup_wp(msInitWaypoint, true);

    if (moMapSearch)
        moMapSearch.value = msSearchHint;

    updateCopyrights();
    cookieSave(false);
    queue_dataload(500);
}

function setMapType(shortname,longname,url,max_zoom)
{
    moMap.mapTypes.set(shortname, new google.maps.ImageMapType({
        getTileUrl: function(coord, zoom) {
            return url + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: shortname,
        alt: longname,
        maxZoom: max_zoom
    }));
}

function mapUnload()
{
    cookieSave(false);
}


/*=========================================================================
    GM hooks and custom controls
 =========================================================================*/

function map_movestart()
{
    window.clearTimeout(moDataLoadTimer);
    moDataLoadTimer = null;
}

function map_moveend()
{
    cookieSave(false);
    queue_dataload(400);
}

function map_maptypechanged()
{
    updateCopyrights();
    cookieSave(false);
}

function map_mousemove(event)
{
    showcoords(event.latLng.lat(), event.latLng.lng());
}

function map_clicked()
{
    if (bFullscreen)
    {
        if (document.getElementById("sidebar").style.display != \'none\')
            toggle_sidebar();
    }
    else
        dataload_on_filterchange();
    mapselectlist_hide();        // firefox needs this
    moWpInfoWindow.close();
    close_infowindow(true);
    permalinkbox_hide();
}

function updateCopyrights()
{
    if (copyrightDiv == null )
        return;

    var newMapType = moMap.getMapTypeId();

    if (newMapType == "OSM" || newMapType == "MQ" || newMapType == "OCM")
    {
        '; ?>

        if (newMapType == "OCM")
            copyrightDiv.innerHTML = 'Map data &copy; <a href="http://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> and <a href="http://www.thunderforest.com/opencyclemap/" target="_blank">OpenCycleMap</a> contributors';
        else
            copyrightDiv.innerHTML = 'Map data &copy; <a href="http://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> contributors';
        if (newMapType == "MQ")
            copyrightDiv.innerHTML += ', ' + 'tiles provided by <a href="http://www.mapquest.com/" target="_blank">MapQuest</a>' + ' <img src="http://developer.mapquest.com/content/osm/mq_logo.png" />';
        <?php echo '
    }
    else
        copyrightDiv.innerHTML = "";
}


/*=========================================================================
    XML cache data download
 =========================================================================*/

function ajaxLoad( url, callback, postData )
{
    var http_request = false;

    if (window.XMLHttpRequest)
    { // Mozilla, Safari, ...
        http_request = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }
    if (!http_request)
    {
        alert(\'Giving up: Cannot create an XMLHTTP instance\');
        return false;
    }

    http_request.onreadystatechange =  function() {
        if (http_request.readyState == 4)
        {
            if (http_request.status == 200)
            {
                callback(http_request.responseText, http_request.status);
            }
            else if (http_request.status != 0)     // avoid dummy messages when aborting transfer
            {
                alert(\'Request Failed: \' + http_request.status);
            }
        }
    };

    if (postData)
    { // POST
        http_request.open(\'POST\', url, true);
        http_request.setRequestHeader(\'Content-Type\', \'application/x-www-form-urlencoded\');
        http_request.send(postData);
    }
    else
    {
        http_request.open(\'GET\', url, true);
        http_request.send(null);
    }
}

/**
* This functions wraps XMLHttpRequest open/send function.
* It lets you specify a URL and will call the callback if
* it gets a status code of 200.
* @param {String} url The URL to retrieve
* @param {Function} callback The function to call once retrieved.
*/
function downloadUrl( url, callback, postbody )
{
    ajaxLoad( url, callback, postbody );
    //GDownloadUrl( url, callback );
}

function downloadUrl2(url, callback, postbody) {
    ajaxLoad( url, callback, postbody );
    //GDownloadUrl( url, callback, postbody );
}

/**
 * Parses the given XML string and returns the parsed document in a
 * DOM data structure. This function will return an empty DOM node if
 * XML parsing is not supported in this browser.
 * @param {string} str XML string.
 * @return {Element|Document} DOM.
 */
function xmlParse( str )
{
    if (typeof ActiveXObject != \'undefined\' && typeof GetObject != \'undefined\')
    {
        var doc = new ActiveXObject(\'Microsoft.XMLDOM\');
        doc.loadXML(str);
        return doc;
    }

    if (typeof DOMParser != \'undefined\')
    {
        return (new DOMParser()).parseFromString(str, \'text/xml\');
    }

    return createElement(\'div\', null);
}

function queue_dataload(nMs)
{
    if (moDataLoadTimer != null)
        window.clearTimeout(moDataLoadTimer);
    moDataLoadTimer = window.setTimeout(\'data_load()\', nMs);
}

function dataload_on_filterchange()
{
    if (bFilterChanged)
        queue_dataload(100);
}

function data_load()
{
    if (bFilterChanged)
    {
        close_infowindow(true);
        clear_waypoints();
    }
    bResetFilterHeading = bFilterChanged;
    bFilterChanged = false;

    if (searchResultCoord != null)
    {
        var infowindow = new google.maps.InfoWindow({content: searchString});
        var marker = new google.maps.Marker({
                map:moMap,
                position: searchResultCoord,
                icon: new google.maps.MarkerImage(\'resource2/ocstyle/images/map/coordinate-marker.png\'),
                title: searchString});
        marker.addListener(\'click\', function() { infowindow.open(moMap, marker); });

        infowindow.open(moMap, marker);
        searchResultCoord = null;
    }

    window.clearTimeout(moDataLoadTimer);
    moDataLoadTimer = null;
    mbDataDownloadStartTime = new Date();

    if (mnResultId != 0)
    {
        tmd_hide();
        mbDataDownloadHaveSecondChance = true;
        ajaxLoad(msURLMapPHP, data_mapreceive, get_mapfilter_params());
    }
    else
    {
        gpx_download_enabled(false);
        ajaxLoad(msURLSearchPHP, data_searchreceive, get_searchfilter_params(\'map2\', true, false));
    }
}

function data_mapreceive(data, responseCode)
{
    if (bResetFilterHeading)
        reset_filter_heading();

    if (responseCode != 200)
    {
        var sMessage = \'Error: Unable to download the search result (HTTP error code %1)\';
        sMessage = sMessage.replace(/%1/, responseCode);
        alert(sMessage);
        return;
    }

    var oXML = xmlParse(data);

    if (oXML.documentElement.getAttribute("available") +0 == 0)
    {
        if (mbDataDownloadHaveSecondChance == true)
        {
            ajaxLoad(msURLSearchPHP, data_searchreceive, get_searchfilter_params(\'map2\', true, false));
        }
        else
        {
            // alert(\'Error: Unable to download the search result. The data was not available on the server.\');
            error_no_data(true);
        }
        return;
    }
    else
        error_no_data(false);

    var record_count = oXML.documentElement.getAttribute("count");

    gpx_download_enabled((record_count<=mnMaxDownloadCount) && (record_count>0));

    /* nee too many markers -> clear all and display message */
    if (oXML.documentElement.getAttribute("maxrecordreached") == 1)
    {
        data_clear();
        tmd_show(record_count);
        return;
    }

    /* compute set of markers to keep */
    var wpset = {};
    var oCachesList = oXML.documentElement.getElementsByTagName("c");
    for (var nIndex=0; nIndex<oCachesList.length; nIndex++)
    {
        var sCacheData = oCachesList[nIndex].getAttribute("d");
        var sWaypoint = sCacheData.substring(0,sCacheData.indexOf(\'/\'));
        wpset[sWaypoint] = true;
    }
    /* delete unneeded markers */
    var alreadythere = data_clear_except( wpset );

    /* add new markers (skip existing) */
    for (var nIndex=0; nIndex<oCachesList.length; nIndex++)
    {
        var aCacheData = oCachesList[nIndex].getAttribute("d").split(\'/\');
        var sWaypoint = aCacheData[0];
        if (!(sWaypoint in alreadythere))
        {
            var nLon = aCacheData[1];
            var nLat = aCacheData[2];
            var nType = aCacheData[3];
            var nFlags = aCacheData[4];

            addCacheToMap(sWaypoint, nLon, nLat, nType, nFlags,
                          oCachesList[nIndex].getAttribute("n"),
                          sWaypoint == msPopupMarkerWP ? 999999 : nIndex);
        }
    }

    document.getElementById(\'statCachesCount\').innerHTML = oCachesList.length;
    document.getElementById(\'statLoadTime\').innerHTML = getTimeDiff(mbDataDownloadStartTime, new Date());
}

// receives the result of map2.php (if result is not available, search.php has to be invoked)
function data_searchreceive(data, responseCode)
{
    // TODO: check
    if (responseCode == 200)
    {
        // TODO: make sure that data must is a numeric ID
        mnResultId = data;
    }

    // continue with data download
    tmd_hide();
    mbDataDownloadHaveSecondChance = false;
    ajaxLoad(msURLMapPHP, data_mapreceive, get_mapfilter_params());
}

function error_no_data(errorstate)
{
    var msgo = document.getElementById(\'mapstat_caches\');
    msgo.style.color = (errorstate ? \'red\' : \'black\');
    msgo.style.fontWeight = (errorstate ? \'bold\' : \'normal\');
}

function xmlentities(str)
{
    str = str.replace(/&/, \'&amp;\');
    str = str.replace(/</, \'&lt;\');
    str = str.replace(/>/, \'&gt;\');
    str = str.replace(/"/, \'&quot;\');
    // hack for phpDesigner syntax HL problem: "

    return str;
}


/*=========================================================================
    Markers
 =========================================================================*/

function NewCacheMarker(nLat, nLon, sWaypoint, nType, nFlags, sName, nZindex)
{
    var image, anchor;

    '; ?>

    <?php if ($this->_tpl_vars['opt_cacheicons'] == 1): ?>
        image = 'resource2/ocstyle/images/map/caches1/24x24-';
        anchor = new google.maps.Point(12,12);
    <?php else: ?>
        image = 'resource2/ocstyle/images/map/caches2/';
        anchor = new google.maps.Point(13,24);
    <?php endif; ?>
    <?php echo '

  if (nFlags & 1)       image += \'owned\';
  else if (nFlags & 2)  image += \'found\';
  else if (nFlags & 4)  image += \'notfound\';
  else                  image += \'cachetype-\' + nType;

  if (nFlags & 8)       image += \'-inactive\';
  else if (nFlags & 16) image += \'-oconly\';

    var mi = new google.maps.MarkerImage(image + \'.png\');
    mi.anchor = anchor;

    marker = new google.maps.Marker(
        {    position: new google.maps.LatLng(nLat, nLon),
            map: moMap,
            title: sName,
            icon: mi,
            zIndex: nZindex });
    marker.waypoint = sWaypoint;
    return marker;
}

function addCacheToMap(sWaypoint, nLon, nLat, nType, nFlags, sName, nZindex)
{
    var oMarker = NewCacheMarker(nLat, nLon, sWaypoint, nType, nFlags, sName, nZindex);
    google.maps.event.addListener(oMarker, "click", function(){show_cachepopup_wp(sWaypoint,false);});

    moMarkerList[moMarkerList.length] = oMarker;
}

function data_clear()
{
    document.getElementById(\'statCachesCount\').innerHTML = \'0\';
    for (var nIndex=0; nIndex<moMarkerList.length; nIndex++)
        moMarkerList[nIndex].setMap(null);
    moMarkerList = new Array();
    clear_waypoints();
}


/* delete all markers, except those specified in "wpset". return the set of remaining markers */
function data_clear_except(wpset)
{
    var existing = {};

    document.getElementById(\'statCachesCount\').innerHTML = \'0\';

    var newList = new Array();

    for (var nIndex=0; nIndex<moMarkerList.length; nIndex++)
    {
        var oMarker = moMarkerList[nIndex];
        var wp = oMarker.waypoint;

        if (wp != msPopupMarkerWP && !(wp in wpset))
        {
            oMarker.setMap(null);
        }
        else
        {
            existing[wp] = true;
            newList[newList.length] = oMarker;
        }
    }

    moMarkerList = newList;

    return existing;
}


/*=========================================================================
    InfoWindows (popups)
 =========================================================================*/

function show_cachepopup_wp(sWaypoint, bAllowZoomChange)
{
    var $url = msURLMapPHP + "?mode=wpsearch&wp=" + sWaypoint;

    // Locked caches normally are hidden on the map. As they are shown when searching,
    // we enable them on the map when displaying search results to avoid confusions:
    if (miQueryID > 0) $url += "&locked=1";

    show_cachepopup_url($url, sWaypoint, bAllowZoomChange);
}

function show_cachepopup_latlon(nLat, nLon, bAllowZoomChange)
{
    show_cachepopup_url(msURLMapPHP + "?mode=locate&lat=" + nLat + "&lon=" + nLon, "", bAllowZoomChange);
}

'; ?>

<?php echo '

function adjust_infowindow()
{
    if (mhInfoWindowHackTries > 0)
    try
    {
        var iw_frame = document.getElementById(\'mapinfowindow\').parentNode;
        iw_frame.parentNode.style.overflow = "visible";
        iw_frame.style.overflow = "visible";
            // BOTH divs overflow must be set so that it works right in all browsers!
        mhInfoWindowHackTries = 0;

        '; ?>

         <?php echo '
    }
    catch (e)
    {
        // we were too fast and will try again
            mhInfoWindowHackTries -= 1;
    }

    if (mhInfoWindowHackTries <= 0)
        clearInterval(mhInfoWindowHackTimer);
}

function hack_infowindow()
{
    mhInfoWindowHackTries = 150;
    mhInfoWindowHackTimer = window.setInterval("adjust_infowindow()",10);
}

function show_infowindow(oCoords, sText)
{
    close_infowindow(true);
    clear_waypoints();

    moInfoWindow = new google.maps.InfoWindow({ position: oCoords, content: sText });
    moInfoWindow.open( moMap, null, true );
    wid = document.getElementById(\'mapinfowindow\');
    hack_infowindow();
}

function init_waypoint_markers(aWaypoints)
{
    maWpWaypoints = aWaypoints;

    for (var nWp=0; nWp<aWaypoints.length; nWp++)
    {
        var imgparams = get_wp_imgparams(aWaypoints[nWp]);
        var image       = imgparams[0];
        var anchorx     = imgparams[3];
        var anchory     = imgparams[4];

        var latitude    = aWaypoints[nWp].getAttribute(\'latitude\');
        var longitude   = aWaypoints[nWp].getAttribute(\'longitude\');

        var mi = new google.maps.MarkerImage(image);
        mi.anchor = new google.maps.Point(anchorx, anchory);
        var coords = new google.maps.LatLng(latitude, longitude);

        marker = new google.maps.Marker(
            {    position: coords,
                map: moMap,
                icon: mi,
                zIndex: 99998 });

        '; ?>

                 <?php echo '

        google.maps.event.addListener(marker, "click",
            function (event)
            {
                var distance = 360;
                var reflat = event.latLng.lat();
                var reflon = event.latLng.lng();
                var nearestwp;

                for (nWp=0; nWp<maWpWaypoints.length; nWp++)
                {
                    var lat = maWpWaypoints[nWp].getAttribute(\'latitude\');
                    var lon = maWpWaypoints[nWp].getAttribute(\'longitude\');
                    var d = Math.sqrt((lat-reflat) * (lat-reflat) + (lon-reflon) * (lon-reflon));

                    if (d < distance)
                    {
                        nearestwp = nWp;
                        nearestlon = lon;
                        nearestlat = lat;
                        distance = d;
                    }
                }

                // if a picture is shown, it is from the same cache, so we keep it open
                // by the \'false\' param here
                close_infowindow(false);

                moWpInfoWindow.close();

                var imgparams     = get_wp_imgparams(aWaypoints[nearestwp]);
                var image       = aWaypoints[nearestwp].getAttribute(\'image\');
                var imagewidth  = aWaypoints[nearestwp].getAttribute(\'imagewidth\');
                var imageheight = aWaypoints[nearestwp].getAttribute(\'imageheight\');
                var wptype      = maWpWaypoints[nearestwp].getAttribute(\'typeid\');
                var typename    = maWpWaypoints[nearestwp].getAttribute(\'typename\');
                var preposition = maWpWaypoints[nearestwp].getAttribute(\'typepreposition\');
                var description = maWpWaypoints[nearestwp].getAttribute(\'description\');

                var maxwidth;
                if (description.length < 512)
                    maxwidth = "320px";
                else
                    maxwidth = "480px";

                '; ?>

                var text =
                    "<div id='mapinfowindow' style='max-height:320px;" + <?php if ($this->_tpl_vars['msie']): ?>" max-width:" + maxwidth + ";" +<?php endif; ?> " overflow:auto'><table class='mappopup'>" +
                    "<tr><td><table cellspacing='0' cellpadding='0'><tr><td>" +
                        "<img src='" + image + "' width='" + imagewidth + "' height='" + imageheight + "' /></td>" +
                        "<td class='wppopupheader'><span style='white-space:normal'>" + typename + "</span></td><td style='vertical-align:top'></td><td class='wppopupheader'>&nbsp;" + preposition + "</span></td>" +
                        "<td class='wppopupheader' style='font-weight:bold'>&nbsp;<a href='viewcache.php?wp=" + msPopupMarkerWP + "' target='_blank_'>" + msPopupMarkerWP + "</a></td>" +
                    "</tr></table></td></tr>";
                if (description != "")
                    text += "<tr><td style='padding:8px; max-width:" + maxwidth + "; white-space:normal' colspan='4'>" + description + "</td></tr>";
                text += "</table></div>";
                <?php echo '

                moWpInfoWindow = new google.maps.InfoWindow({ position: event.latLng, content: text });
                moWpInfoWindow.open( moMap, null, true );
                hack_infowindow();
            } );

        moWaypointList[moWaypointList.length] = marker;
    }
}

function get_wp_imgparams(wp)
{
    '; ?>

    <?php if ($this->_tpl_vars['opt_cacheicons'] == 1): ?>
        return [wp.getAttribute('image'), wp.getAttribute('imagewidth'), wp.getAttribute('imageheight'),
                wp.getAttribute('imagewidth')/2, wp.getAttribute('imageheight')/2];
    <?php else: ?>
        return [wp.getAttribute('image').replace('/misc/','/map/caches2/'),
                32, 32, 13, 24];
    <?php endif; ?>
    <?php echo '
}

function clear_waypoints()
{
    moWpInfoWindow.close();
    for (nOldWp = 0; nOldWp<moWaypointList.length; nOldWp++)
        moWaypointList[nOldWp].setMap(null);
    moWaypointList = new Array();
}

function show_cachepopup_url(sURL, sWaypoint, bAllowZoomChange)
{
    close_infowindow(true);
    moWpInfoWindow.close();

    ajaxLoad(sURL, function(data, responseCode) {
        var oXML = xmlParse(data);
        var oCoords = parseXML_GetPoint(oXML);
        if (!oCoords)
        {
            if (sWaypoint != \'\')
            {
                var sMessage = \'Waypoint %1 not found!\';
                sMessage = sMessage.replace(/%1/, sWaypoint);
                alert(sMessage);
            }

            return;
        }

        msPopupMarkerWP = parseXML_GetWaypoint(oXML);

        if (bAllowZoomChange==true)
        {
            moMap.setCenter(oCoords);
            if (Math.abs(moMap.getZoom() - nDefaultZoom) > 1)
              moMap.setZoom(nDefaultZoom);
        }

        show_infowindow(oCoords, parseXML_GetHTML(oXML));
        init_waypoint_markers(parseXML_GetWaypoints(oXML));
        load_cache_pic(oXML);
    });
}

function parseXML_GetWaypoint(xmlobject)
{
    var aCaches = xmlobject.documentElement.getElementsByTagName("cache");
    if (aCaches.length<1)
        return false;
    return aCaches[0].getAttribute("wpoc");
}

function parseXML_GetHTML(xmlobject)
{
    var aCaches = xmlobject.documentElement.getElementsByTagName("cache");
    if (aCaches.length<1)
        return false;

    var sName = aCaches[0].getAttribute("name");
    var sWPOC = aCaches[0].getAttribute("wpoc");
    var sCoords = aCaches[0].getAttribute("coords");
    var bInactive = aCaches[0].getAttribute("inactive");
    var sStatusText = aCaches[0].getAttribute("status_text");
    var nTypeId = aCaches[0].getAttribute("type_id");
    var sTypeText = aCaches[0].getAttribute("type_text");
    var sSizeText = aCaches[0].getAttribute("size");
    var nDifficulty = aCaches[0].getAttribute("difficulty");
    var nTerrain = aCaches[0].getAttribute("terrain");
    var sListedSince = aCaches[0].getAttribute("listed_since");
    var bIsPublishdate = aCaches[0].getAttribute("is_publishdate");
    var nTopRating = aCaches[0].getAttribute("toprating");
    var nGeoKreties = aCaches[0].getAttribute("geokreties");
    var bFound = aCaches[0].getAttribute("found");
    var bNotFound = aCaches[0].getAttribute("notfound");
    var bAttended = aCaches[0].getAttribute("attended");
    var bOconly = aCaches[0].getAttribute("oconly");
    var bOwner = aCaches[0].getAttribute("owner");
    var sUsername = aCaches[0].getAttribute("username");
    var nUserId = aCaches[0].getAttribute("userid");

    var oWaypoints = aCaches[0].getElementsByTagName("wpt");

    '; ?>

    var sHtml = "<div id='mapinfowindow' class='mappopup' style='z-index:800'><table class='mappopup'>";
    if (bInactive == 1)
        sHtml += "<tr><td colspan='2'><font size='2' color='red'><b>" + xmlentities(sStatusText) + "</b></font></td></tr>";

    // InfoWindows have a min width; set min width for content to avoid large right borders:
    apos = "'";   // fix for issue #11 / nested " ' " JavaScript parsing errors in some browsers
    sHtml += "<tr><td><img src=" +apos+"resource2/ocstyle/images/cacheicon/20x20-"+nTypeId+".png"+apos+ " alt=" + apos+xmlentities(sTypeText)+apos + " title=" + apos+xmlentities(sTypeText)+apos + " height='20px' width='20px' /></td><td style='min-width:150px";
    if (sName.length > 60)
        sHtml += "; white-space:normal";
    sHtml += apos+"><a href=" +apos+"viewcache.php?wp="+encodeURI(sWPOC)+apos +" target='_blank'><font size='2'>" + xmlentities(sName) + "</font></a></td><td align='right' vertical-align:'top'><font size='2'><b>&nbsp;" + xmlentities(sWPOC) + "</b></font></td></tr>";
    sHtml += "<tr><td colspan='2' style='vertical-align:top;'>by <a href=" +apos+"viewprofile.php?userid="+encodeURI(nUserId)+apos+ " target='_blank'>" + xmlentities(sUsername) + "</a></td><td align='right'><a class='nooutline' href='articles.php?page=cacheinfo#difficulty' target='_blank'><img src=" + apos+"resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/diff-"+String(nDifficulty*10)+".gif"+apos + " border='0' width='19' height='16' hspace='2' onmouseover=" +apos+"Tip(\"Difficulty: " + String(nDifficulty) + " of 5\", DELAY, 0, FADEIN, false, FADEOUT, false, BGCOLOR, \"#fffedf\", BORDERCOLOR, \"grey\")"+apos+ " onmouseout='UnTip()' /><img src=" +apos+"resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/terr-"+String(nTerrain*10)+".gif"+apos + " border='0' width='19' height='16' hspace='2' onmouseover=" +apos+"Tip(\"Terrain: " + String(nTerrain) + " of 5\", DELAY, 0, FADEIN, false, FADEOUT, false, BGCOLOR, \"#fffedf\", BORDERCOLOR, \"grey\")"+apos+ " onmouseout='UnTip()' /></a></td></tr>";
    sHtml += "<tr><td colspan='3' height='3px'></td></tr>";

    sHtml += "<tr><td colspan='2'>" + xmlentities(sTypeText) + " (" + xmlentities(sSizeText) + ")</td><td align='right' rowspan='2'>" + (bOconly==1 ? "<?php echo $this->_tpl_vars['help_oconly']; ?>
<img src='resource2/ocstyle/images/misc/is_oconly_small.png' alt='OConly' title='OConly' /></a>" : "") + "</td></tr>";
    sHtml += "<tr><td colspan='2'>" + (bIsPublishdate == true ? "Published on:" : "Listed since:") + " " + xmlentities(sListedSince) + "</td></tr>";

    sAddHtml = "";
    if (bOwner==1)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/misc/16x16-home.png' alt='' /> This cache is yours</td></tr>";

    if (bFound==1)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/viewcache/16x16-found.png' alt='' /> You found this cache</td></tr>";

    if (bNotFound==1)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/viewcache/16x16-dnf.png' alt='' /> You havn't found this cache, yet</td></tr>";

    if (bAttended==1)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/log/16x16-attended.png' alt='' /> You have attended this event!</td></tr>";

    if (nGeoKreties>0)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/viewcache/gk.png' alt='' /> This cache stores a GeoKrety</td></tr>";

    if (nTopRating>0)
        sAddHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/viewcache/rating-star.gif' alt='' /> This cache has %1 recommandation(s)</td></tr>".replace(/%1/, nTopRating);

    if (sAddHtml != "")
        sHtml +=     "<tr><td colspan='3' height='3px'></td></tr>" + sAddHtml;
    <?php echo '

    if (oWaypoints.length)
    {
        '; ?>

        var sMsg;
        if (oWaypoints.length > 1)
            sMsg = "The cache has %1 %2additional waypoints%3.";
        else
            sMsg = "The cache has an %2additional waypoint%3.";
        sMsg = sMsg.replace("%1",oWaypoints.length);
        sMsg = sMsg.replace("%2","<?php echo $this->_tpl_vars['help_wps']; ?>
");
        sMsg = sMsg.replace("%3","<?php if ($this->_tpl_vars['help_wps'] != ""): ?></a><?php endif; ?>");

        sHtml += "<tr><td colspan='3'><img src='resource2/ocstyle/images/misc/16x16-wp_reference.png' alt='' /> " + sMsg + "</td></tr>";
        <?php echo '
    }

    sHtml += "</table></div>";

    return sHtml;
}

function parseXML_GetWaypoints(xmlobject)
{
    var aCaches = xmlobject.documentElement.getElementsByTagName("cache");
    if (aCaches.length<1)
        return false;
    else
        return aCaches[0].getElementsByTagName("wpt");
}

function parseXML_GetPoint(oXMLObject)
{
    var oCaches = oXMLObject.documentElement.getElementsByTagName("cache");

    if (oCaches.length<1)
        return false;

    var oCoords = oCaches[0].getAttribute("coords").split(",");
    var oCoordsYX = new google.maps.LatLng(oCoords[1],oCoords[0]);

    return oCoordsYX;
}

function load_cache_pic(xmlobject)
{
    '; ?>
<?php if ($this->_tpl_vars['opt_pictures'] > 0): ?><?php echo '
        var aCaches = xmlobject.documentElement.getElementsByTagName("cache");
        if (aCaches.length<1)
            return "";

        var picurl = aCaches[0].getAttribute("picurl");
        var pictitle = aCaches[0].getAttribute("pictitle");  // "name"
        if (picurl != "")
        {
            if (pictitle != "")
            {
                document.getElementById(\'cachepictitle\').innerHTML = pictitle;
                document.getElementById(\'cachepictitle\').style.display = \'block\';
            }
            else
                document.getElementById(\'cachepictitle\').style.display = \'none\';

            var imagebox = document.getElementById(\'cachepiccontainer\');
            imagebox.removeChild(document.getElementById(\'cachepic\'))    ;

            var img = document.createElement("img");
            img.id = "cachepic";
            img.onload = function() { show_picture(1000); }
            imagebox.appendChild(img);
            img.src = picurl;
            img.style.cursor = "url(resource2/ocstyle/js/enlargeit/pluscur.cur), auto";
            imagebox.href = "javascript:toggle_imagesize()";
        }
    '; ?>
<?php endif; ?><?php echo '
}

function toggle_imagesize(img)
{
    img = document.getElementById(\'cachepic\');
    var enlarge = img.style.cursor.indexOf(\'pluscur\') > 0;
    if (enlarge)
    {
        img.width *= 2;
        img.height *= 2;
        img.style.cursor = "url(resource2/ocstyle/js/enlargeit/minuscur.cur), auto";
    }
    else
    {
        img.width /= 2;
        img.height /= 2;
        img.style.cursor = "url(resource2/ocstyle/js/enlargeit/pluscur.cur), auto";
    }
    set_img_title_width();
}

function fade_picture(step)
{
    '; ?>
<?php if ($this->_tpl_vars['opt_pictures'] > 0): ?><?php echo '
        if (mhPictureTimer != null)
            window.clearTimeout(mhPictureTimer);
        var next = parseFloat(document.getElementById(\'cachepicbox\').style.opacity) + step;
        next = Math.max(0,Math.min(next,1));
        document.getElementById(\'cachepicbox\').style.opacity = next;
        document.getElementById(\'oclogo\').style.opacity = 1 - Math.log(10*next)/Math.LN10;

        if (next <= 0)
        {
            var logo = document.getElementById(\'oclogo\');
            if (logo) logo.style.display = \'block\';
        }
        else if (next < 1)
            mhPictureTimer = window.setTimeout(\'fade_picture(\' + step + \')\', 20);
    '; ?>
<?php endif; ?><?php echo '
}

function show_picture(time_left)
{
    '; ?>
<?php if ($this->_tpl_vars['opt_pictures'] > 0): ?><?php echo '
    var img = document.getElementById(\'cachepic\');
    var mapwidth = document.getElementById(\'googlemap\').offsetWidth;
    var mapheight = document.getElementById(\'googlemap\').offsetHeight;
    var imgwidth = img.width;
    var imgheight = img.height;

    // alert(mapwidth+"x"+ mapheight + " " + imgwidth+"x"+imgheight);
    if (mapwidth * mapheight * imgwidth * imgheight < 100000)
    {
        if (time_left > 0)
        {
            // MSIE may need to show the image first before size is set
            document.getElementById(\'cachepicbox\').style.zIndex = 0;
            document.getElementById(\'cachepicbox\').style.display = \'block\';
            window.setTimeout(\'show_picture(\' + (time_left-100) + \')\', 100);
        }
        return;
    }

    var maximgpixels = mapwidth * mapheight * '; ?>
<?php echo $this->_tpl_vars['opt_pictures']; ?>
<?php echo ' / 100;
    var maxmappart = 0.6;
    var scale = Math.sqrt(maximgpixels / (imgwidth * imgheight));
    if (mapwidth*maxmappart/imgwidth < scale) scale = mapwidth*maxmappart/imgwidth;
    if (mapheight*maxmappart/imgheight < scale) scale = mapheight*maxmappart/imgheight;

    if (scale < 1)
    {
        var imgratio = imgwidth / imgheight;
        img.width *= scale;
        img.height = img.width / imgratio;
    }
    set_img_title_width();

    // document.getElementById(\'cachepicbox\').style.opacity = 0;
    // fade_picture(0.1);
    // fading does not work properly on all browsers.

    if (bFullscreen) document.getElementById(\'oclogo\').style.display = \'none\';
    document.getElementById(\'cachepicbox\').style.display = \'block\';
    document.getElementById(\'cachepicbox\').style.zIndex = 20;
    '; ?>
<?php endif; ?><?php echo '
}

function set_img_title_width()
{
    var img = document.getElementById(\'cachepic\');
    var imgtitle = document.getElementById(\'cachepictitle\').style;
    imgtitle.maxWidth = (img.width - parseInt(imgtitle.paddingLeft) - parseInt(imgtitle.paddingRight)) + "px";
}

function hide_picture()
{
    // fade_picture(-0.05);
    // fading does not work properly on all browsers.

    document.getElementById(\'cachepicbox\').style.display = \'none\';
    if (bFullscreen) document.getElementById(\'oclogo\').style.display = \'block\';
}

function close_infowindow(closepic)
{
    moInfoWindow.close();
    if (closepic) hide_picture();
}


/*=========================================================================
    Status display
 =========================================================================*/

function coordtext(coord)
{
    var deg = Math.floor(coord);
    var min = Math.floor(60*(coord-deg));
    var tmin = Math.round(1000*(60*(coord-deg)-min));

    if (tmin > 999) {
        tmin -= 1000;
        min += 1;
        if (min > 59)
        {
            min -= 60;
            deg += 1;
        }
    }

    return (deg < 10 ? "0" : "") + String(deg) + "°" + (min < 10 ? "0" : "") + String(min) + "." +
           (tmin < 10 ? "00" : (tmin < 100 ? "0" : "")) + String(tmin) + "\'";
}

function showcoords(lat,lng)
{
    if (lat < 0) { lattext = "S " + coordtext(-lat) }
    else { lattext = "N " + coordtext(lat); }

    if (lng < 0) { longtext = "W " + coordtext(-lng) }
    else { longtext = "E " + coordtext(lng); }

    '; ?>

        document.getElementById('coordbox').innerHTML = lattext + "&nbsp;&nbsp;" + longtext;
    <?php echo '
}

function tmd_show(number)
{
    var tmd = document.getElementById("toomanycaches");
    var txt = document.getElementById("toomanycaches_txt");

    var sMessage = \'There are %1 Geocaches in the selected area, matching the filter options. Please zoom in to display the caches.\';
    sMessage = sMessage.replace(/%1/, number);
    txt.innerHTML = sMessage;

    tmd.style.display = \'block\';
}

function tmd_hide()
{
    document.getElementById("toomanycaches").style.display = \'none\';
}


/*=========================================================================
    Function buttons
 =========================================================================*/

// HOME
function center_home()
{
    if (mnUserLat != 0 || mnUserLon != 0)
    {
        moMap.setCenter( new google.maps.LatLng(mnUserLat, mnUserLon) );
        moMap.setZoom( nDefaultZoom );
    }
    else
    {
        alert( "no home coordinates!" );
    }
}

// GPX DOWNLOAD
function gpx_download_enabled(enabled)
{
    mbDownloadEnabled = enabled;
    if (enabled)
        document.getElementById(\'download_gpx_img\').src = \'resource2/ocstyle/images/map/35x35-gpx-download.png\';
    else
        document.getElementById(\'download_gpx_img\').src = \'resource2/ocstyle/images/map/35x35-no-gpx-download.png\';
}

function download_gpx()
{
    var oBounds = moMap.getBounds();
    var params = get_searchfilter_params(\'gpx\', false, true);

    if (mbDownloadEnabled == false)
    {
        alert('; ?>
"Between 1 and 500 caches must be displayed for download."<?php echo ');
        return;
    }

    params += \'&bbox=\' + oBounds.getSouthWest().lng() + \',\' + oBounds.getSouthWest().lat() + \',\' + oBounds.getNorthEast().lng() + \',\' + oBounds.getNorthEast().lat();
    params += \'&count=max\';

    location.href = msURLSearchPHP + \'?\' + params;
}

// PERMALINK
function showPermlinkBox_click()
{
    var addfavorites = document.getElementById(\'permalink_addFavorites\');
    try
    {
        if ((typeof window.external.AddFavorite == \'undefined\') &&  // MSIE
            (typeof window.external.addPanel == \'undefined\'))         // Mozilla
                addfavorites.style.display = \'none\';
    }
    catch(e)
    {
        // Opera, Safari ...
        addfavorites.style.display = \'none\';
    }

    if (moPermalinkBox.style.display == \'none\')
    {
        var oCenterPos = moMap.getCenter();
        var nZoomLevel = moMap.getZoom();
        var msPermalink = msURLMapPHP + "?lat=" + Math.round(oCenterPos.lat()*1000000)/1000000 + "&lon=" + Math.round(oCenterPos.lng()*1000000)/1000000 + "&zoom=" + nZoomLevel + /* "&map=" + encodeURI(moMap.getMapTypeId()) + */ "&mode='; ?>
<?php if ($this->_tpl_vars['bFullscreen']): ?>full<?php else: ?>normal<?php endif; ?>screen"<?php echo ';
        // "map" currently is not evaluated anywhere

        var oPermalinkTextBox = document.getElementById(\'permalink_text\');
        if (oPermalinkTextBox)
            oPermalinkTextBox.value = "'; ?>
<?php echo $this->_tpl_vars['opt']['page']['absolute_url']; ?>
<?php echo '" + msPermalink;

        moPermalinkBox.style.display = \'block\';
        document.getElementById(\'permalink_text\').select();
    }
    else
        moPermalinkBox.style.display = \'none\';
}

function addFavorites_click()
{
    var sLink = document.getElementById(\'permalink_text\').value;
    var sTitle = \''; ?>
<?php echo $this->_tpl_vars['opt']['page']['title']; ?>
 - map<?php echo '\';

    if (typeof window.external.AddFavorite != \'undefined\')
        window.external.AddFavorite(sLink, sTitle);

    if (typeof window.external.addPanel != \'undefined\')
        window.external.addPanel(sTitle, sLink, \'\');
}

function permalinkbox_hide()
{
    moPermalinkBox.style.display = \'none\';
}

// SETTINGS
function toggle_settings()
{
    var so = document.getElementById(\'mapoptions\');
    if (so.style.display == \'block\')
      so.style.display = \'none\';
    else
    {
        '; ?>

        // set controls to config values
        document.getElementById('opt_menumap0').selected    = "<?php if ($this->_tpl_vars['opt_menumap'] == 0): ?>selected<?php endif; ?>";
        document.getElementById('opt_menumap1').selected    = "<?php if ($this->_tpl_vars['opt_menumap'] == 1): ?>selected<?php endif; ?>";
        document.getElementById('opt_overview').checked     = "<?php if ($this->_tpl_vars['opt_overview'] == 1): ?>checked<?php endif; ?>";
        document.getElementById('opt_maxcaches').value      = "<?php echo $this->_tpl_vars['opt_maxcaches']; ?>
";
        document.getElementById('opt_cacheicons1').selected = "<?php if ($this->_tpl_vars['opt_cacheicons'] == 1): ?>selected<?php endif; ?>";
        document.getElementById('opt_cacheicons2').selected = "<?php if ($this->_tpl_vars['opt_cacheicons'] == 2): ?>selected<?php endif; ?>";
        document.getElementById('opt_pictures').value       = "<?php echo $this->_tpl_vars['opt_pictures']; ?>
";

        so.style.display = 'block';
        <?php echo '
    }
}

// SEARCH
function mapselectlist_onblur()
{
    mapselectlist_hide();
}

function mapselectlist_clear()
{
    moSearchList.selectedIndex = 0;
    while (moSearchList.length>0)
        moSearchList.options[moSearchList.length-1] = null;
    moSearchList.scrollTop = 0;  // does not work in firefox - why?
    maSearchListCoords = new Array();
}

function add_searchlist_itemcoords(nLat, nLon, sWaypoint, sText)
{
    var aItem = new Array();
    aItem[\'lat\'] = nLat;
    aItem[\'lon\'] = nLon;
    aItem[\'wp\'] = sWaypoint;
    aItem[\'text\'] = sText;

    maSearchListCoords[maSearchListCoords.length] = aItem;
    return maSearchListCoords.length-1;
}

function mapselectlist_show()
{
    moSearchList.style.display = "block";
    moSearchList.focus();
}

function mapselectlist_hide()
{
    moSearchList.style.display = "none";
}

function mapselectlist_onclick()
{
    for (var nIndex=0; nIndex<moSearchList.length; nIndex++)
    {
        if (moSearchList.options[nIndex].selected)
        {
            if (moSearchList.options[nIndex].value == -1)
                return;

            var sText = moSearchList.options[nIndex].text;
            var nCoordsIndex = moSearchList.options[nIndex].value;
            document.getElementById(\'mapsearch\').value = trim(sText);
            mbResetSearchTextOnFocus = true;
            mapselectlist_hide();

            // go to the location
            searchlist_openitem(nCoordsIndex);

            return;
        }
    }
}

function mapselectlist_onkey(e)
{
    if (e.which == 13)
        mapselectlist_onclick();
    else if (e.which == 27)
        mapselectlist_hide();
}


function searchlist_openitem(nIndex)
{
    var nLat = maSearchListCoords[nIndex][\'lat\'];
    var nLon = maSearchListCoords[nIndex][\'lon\'];
    var sWaypoint = maSearchListCoords[nIndex][\'wp\'];
    var sText = maSearchListCoords[nIndex][\'text\'];

    if (sWaypoint != \'\')
    {
        queue_dataload(500);
        show_cachepopup_wp(sWaypoint, true);
    }
    else
    {
        var oCoords = new google.maps.LatLng(nLat, nLon);
        show_infowindow(oCoords, xmlentities(sText));
        moMap.setCenter(oCoords);
      moMap.setZoom(nDefaultZoom-1);

        queue_dataload(500);
    }
}

function mapsearch_click()
{
    flashbutton(\'mapsubmit\');

    var sSearchText = moMapSearch.value;
    var oTempOption;

    if (!moMap) return;

    if (msSearchHint==sSearchText || sSearchText==\'\')
    {
        alert(\'Enter a search text, please!\');
        return;
    }

    // coordinate search
    var lat = null;
    var lon = null;
    var searchupper = sSearchText.toUpperCase();
    '; ?>
<?php if ($this->_tpl_vars['opt']['template']['locale'] == 'DE'): ?>
        searchupper = searchupper.replace('O', 'E');
    <?php endif; ?><?php echo '

    // 1. (N|S|-)[ ]degrees[,][ ](E|W|-)[ ]degrees
    var deg = "\\\\s*(\\\\d{1,3}|\\\\d{1,3}\\\\.\\\\d{1,})\\\\s?°?\\\\s*"
    var rex = "^\\\\s*([NS]?|-?)" + deg + "[,]?\\\\s*([WE]?|-?)" + deg + "\\\\s*$";
    var result = searchupper.match(new RegExp(rex));
    if (result)
    { //}  // hack for phpDesigner syntax hilite bug
        lat = parseFloat(result[2]);
        if (result[1] == \'S\' || result[1] == \'-\') lat = -lat;
        lon = parseFloat(result[4]);
        if (result[3] == \'W\' || result[3] == \'-\') lon = -lon;
    }
    else
    { //}
        // 2. (N|S)[ ]degrees[°][ ]nn[.nnn][\'][ ](E|W)[ ]degrees[°][ ]nnn[.nnn][\']
        deg = "\\\\s*(\\\\d{1,3})\\\\s?°?\\\\s*";
        var min = "(\\\\d{1,2}(\\\\.\\\\d{1,})?)\\\\s?[\'´`]?";
        var rex_dm = "^\\\\s*([NS])" + deg+min + "\\\\s*([WE])" + deg+min + "\\\\s*$";
        var result = searchupper.match(new RegExp(rex_dm));
        if (result)
        { //}
            lat = parseInt(result[2]) + parseFloat(result[3] + result[4]) / 60;
            if (result[1] == \'S\') lat = -lat;
            lon = parseInt(result[6]) + parseFloat(result[7] + result[8] ) / 60;
            if (result[5] == \'W\') lon = -lon;
        }
        else
        { //}
            // 3. (N|S)[ ]degrees[°][ ]nn[ ][\'| ]nn[\'][ ](E|W)[ ]degrees[°][ ]nn[ ][\'| ]nn[\'\']
            var minsec = "(\\\\d{1,2})\\\\s?[\'´` ]\\\\s*(\\\\d{1,2})\\\\s?[\'´`]?[\'´`]?";
            var rex_dms = "^\\\\s*([NS])" + deg+minsec + "\\\\s*([WE])" + deg+minsec + "\\\\s*$";
            var result = searchupper.match(new RegExp(rex_dms));
            if (result)
            { //}
                lat = parseInt(result[2]) + parseInt(result[3]) / 60 + parseInt(result[4]) / 3600;
                if (result[1] == \'S\') lat = -lat;
                lon = parseInt(result[6]) + parseInt(result[7]) / 60 + parseInt(result[8]) / 3600;
                if (result[5] == \'S\') lon = -lon;
            }
        }
    }

    if (lat != null && lon != null)
    {
        searchString = searchupper;
        searchResultCoord = new google.maps.LatLng(lat, lon);
        moMap.setCenter(searchResultCoord);
        return;
    }

    // do search on opencaching.de
    // TODO: ensure mnResultId is set
    var oCenterPos = moMap.getCenter();

    // check for geocaching waypoint
    if (sSearchText.match(/^OC[\\S]{1,}$/i) ||
        sSearchText.match(/^GC[\\S]{1,}$/i) ||
        sSearchText.match(/^N[0-9]{1,5}$/i))
    {
        searchpar = "wpsearch&wp=" + sSearchText;
    }
    else
      searchpar = "namesearch&name=" + encodeURI(sSearchText) + "&lat=" + oCenterPos.lat() + "&lon=" + oCenterPos.lng() + "&resultid=" + mnResultId;

    // clear the result list
    mapselectlist_clear();

    // do search on google
    moGeocoder.geocode( { \'address\': sSearchText },
        function(results, status)
        {
            if (status == google.maps.GeocoderStatus.ZERO_RESULTS)
            {
                // no result
            }
            else if (status != google.maps.GeocoderStatus.OK)
            {
                //TODO: translate
                alert("Internal search error");
                return;
            }

            var nPlacemarksCount = 0;
            var nPlacemarkIndex;

            if (status == google.maps.GeocoderStatus.OK)
                nPlacemarksCount = results.length;

            if (nPlacemarksCount>0)
            {
                var oTempOption = new Option("Places found via Google:", -1);
                oTempOption.style.color = "gray";
                moSearchList.options[moSearchList.length] = oTempOption;

                for (nPlacemarkIndex=0; nPlacemarkIndex<nPlacemarksCount; nPlacemarkIndex++)
                {
                    var coord = results[nPlacemarkIndex].geometry.location;
                    var text = results[nPlacemarkIndex].formatted_address;
                    var value = add_searchlist_itemcoords(coord.lat(), coord.lng(), "", text);
                    var item = new Option("     " + text, value);  // spaces are ignored by Chrome
                    item.style.marginLeft = "20px";
                    moSearchList.options[moSearchList.length] = item;
                }
            }

            ajaxLoad(msURLMapPHP + "?mode=" + searchpar,
                function(data, responseCode) {
                    var xml = xmlParse(data);
                    var caches = xml.documentElement.getElementsByTagName("cache");

                    if (caches.length>0)
                    {
                        var oTempOption = new Option("Geocaches found, nearest first:", -1);
                        oTempOption.style.color = "gray";
                        moSearchList.options[moSearchList.length] = oTempOption;

                        for (var nCacheIndex=0; nCacheIndex<caches.length; nCacheIndex++)
                        {
                            var name = caches[nCacheIndex].getAttribute("name");
                            var wpoc = caches[nCacheIndex].getAttribute("wpoc");
                            var text = name + " (" + wpoc + ")";
                            var value = add_searchlist_itemcoords(0, 0, wpoc, text);
                            var item = new Option("     " + text, value);
                            item.style.marginLeft = "20px";

                            moSearchList.options[moSearchList.length] = item;
                        }

                        if (caches.length >= 30)
                        {
                            var item = new Option("     '; ?>
Some more items found...<?php echo '", -1);
                            item.style.marginLeft = "20px";
                            item.style.color = "gray";
                            moSearchList.options[moSearchList.length] = item;
                        }
                    }

                    if (moSearchList.length==0)
                    {
                        var coords = xml.documentElement.getElementsByTagName("coord");
                        for (var nCoordIndex=0; nCoordIndex<coords.length; nCoordIndex++)
                        {
                            var value = add_searchlist_itemcoords(coords[nCoordIndex].getAttribute("latitude"),
                                                                  coords[nCoordIndex].getAttribute("longitude"),
                                                                  "",
                                                                  coords[nCoordIndex].getAttribute("name"));
                            var item = new Option(coords[nCoordIndex].getAttribute("name"), value);
                            moSearchList.options[moSearchList.length] = item;
                        }
                    }

                    if (moSearchList.length==0)
                    {
                        mapselectlist_hide();
                        alert("\'" + sSearchText + "\' '; ?>
was not found (with the selected settings)<?php echo '");
                        return;
                    }
                    else if (maSearchListCoords.length==1)
                    {
                        mapselectlist_hide();
                        searchlist_openitem(0);
                        return;
                    }

                    // adjust size
                    if (moSearchList.length>20)
                        moSearchList.size = 20;
                    else
                        moSearchList.size = moSearchList.length;

                    mapselectlist_show();
                });
        });
}

function mapsearch_onfocus()
{
    if (moMapSearch.value==msSearchHint || mbResetSearchTextOnFocus==true)
        moMapSearch.value = \'\';
    mbResetSearchTextOnFocus = false;
}

function mapsearch_onblur()
{
    if (moMapSearch.value==\'\')
        moMapSearch.value = msSearchHint;
}


/*=========================================================================
    Filtering
 =========================================================================*/

function attribute_onmousedown(nId, sIcon)
{
    var oInputElement = document.getElementById(\'attribute\' + nId);
    var oImageElement = document.getElementById(\'imgattribute\' + nId);
    var nValue = oInputElement.value;

    if (nValue == 1)
        nValue = 2;
    else if (nValue == 2)
        nValue = 3;
    else if (nValue == 3)
        nValue = 1;

    '; ?>

    if (nValue == 1)
        oImageElement.src = 'resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/attributes/' + sIcon + '.png';
    else if (nValue == 2)
        oImageElement.src = 'resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/attributes/' + sIcon + '-no.png';
    else if (nValue == 3)
        oImageElement.src = 'resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/attributes/' + sIcon + '-disabled.png';
    <?php echo '

    oInputElement.value = nValue;

    filter_changed();
}

function filter_changed()
{
    if (!bFilterChanged)
    {
        bFilterChanged = true;
        msPopupMarkerWP = \'\';
        // we need a new mnResultId!
        mnResultId = 0;
        tmd_hide();
        gpx_download_enabled(false);

        var heading = document.getElementById("filterboxtitle");
        if (heading.style.color != "#f88c00")
        {
            sFilterSaveText = heading.innerHTML;
            bFilterSaveColor = heading.style.color;
            heading.innerHTML = "'; ?>
Map is being updated<?php echo ' ...";
            heading.style.color = "#f88c00";
        }
    }

    queue_dataload(2000);
    cookieSave(false);
}

function cachetype_all_set()
{
    var bAll = true;
    for (var i=1; i<=nCacheTypeCount; i++)
        if (!document.getElementById(\'cachetype\' + i).checked)
            bAll = false;
    document.getElementById("all_cachetypes").checked = bAll;
}

function cachetype_filter_changed()
{
    cachetype_all_set();
    filter_changed();
}

function cachesize_all_set()
{
    var bAll = true;
    for (var i=1; i<=nCacheSizeCount; i++)
        if (!document.getElementById(\'cachesize\' + i).checked)
            bAll = false;
    document.getElementById("all_cachesizes").checked = bAll;
}

function cachesize_filter_changed()
{
    cachesize_all_set();
    filter_changed();
}

function alltypes_changed()
{
    var bAll = document.getElementById("all_cachetypes").checked != false;
    for (var i=1; i<=nCacheTypeCount; i++)
        document.getElementById(\'cachetype\' + i).checked = bAll;
    filter_changed();
}

function allsizes_changed()
{
    var bAll = document.getElementById("all_cachesizes").checked != false;
    for (var i=1; i<=nCacheSizeCount; i++)
        document.getElementById(\'cachesize\' + i).checked = bAll;
    filter_changed();
}

function reset_filter_heading()
{
    var heading = document.getElementById("filterboxtitle");
    heading.innerHTML = sFilterSaveText;
    heading.style.color = bFilterSaveColor;
}

function reset_filter_values()
{
    document.getElementById(\'cachename\').value = "";

    for (var i=1; i<=nCacheTypeCount; i++)
        document.getElementById(\'cachetype\' + i).checked = "checked";
    document.getElementById(\'all_cachetypes\').checked = "checked";

    for (var i=1; i<=nCacheSizeCount; i++)
        document.getElementById(\'cachesize\' + i).checked = "checked";
    document.getElementById(\'all_cachesizes\').checked = "checked";

    document.getElementById(\'f_userowner\').checked = "";
    document.getElementById(\'f_userfound\').checked = "";
    document.getElementById(\'f_ignored\').checked = "checked";
    document.getElementById(\'f_disabled\').checked = "";
    document.getElementById(\'f_inactive\').checked = "checked";
    document.getElementById(\'f_otherPlatforms\').checked = "";
    document.getElementById(\'f_geokrets\').checked = "";

    document.getElementById(\'terrainmin\').value = "0";
    document.getElementById(\'terrainmax\').value = "0";
    document.getElementById(\'difficultymin\').value = "0";
    document.getElementById(\'difficultymax\').value = "0";
    document.getElementById(\'recommendationmin\').value = "0";

    '; ?>

    <?php $_from = $this->_tpl_vars['aAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribGroupItem']):
?>
        <?php $_from = $this->_tpl_vars['attribGroupItem']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribItem']):
?>
            document.getElementById('attribute<?php echo $this->_tpl_vars['attribItem']['id']; ?>
').value = "3";
            document.getElementById('imgattribute<?php echo $this->_tpl_vars['attribItem']['id']; ?>
').src = 'resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/attributes/<?php echo $this->_tpl_vars['attribItem']['icon']; ?>
-disabled.png';
        <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '
}

function reset_filter()
{
    flashbutton(\'resetfilter\');
    reset_filter_values();
    cookieLoad(true);   // will reload permamently saved settings if present
    filter_changed();   // will save temporary settings
}

function save_filter()
{
    cookieSave(true);
    '; ?>

    alert("The current filter settings have been permamently saved.");
    <?php echo '
}

// built query string for search.php
function get_searchfilter_params(output, skipqueryid, zip)
{
    var sPostBody = \'showresult=1&expert=0&output=\' + output + \'&utf8=1\';
    var sCacheName = document.getElementById(\'cachename\').value;

    if (skipqueryid)
        sPostBody += \'&skipqueryid=1\';

    if (zip)
        sPostBody += \'&zip=1\';

    if (miQueryID > 0)
        return sPostBody + "&queryid=" + String(miQueryID);

    if (sCacheName!=\'\')
        sPostBody += \'&searchto=searchbyname&cachename=\' + encodeURIComponent(sCacheName);
    else
        sPostBody += \'&searchto=searchbynofilter\';

    /* cachetype
     */
    var sCacheTypes = \'\';
    for (var i=1; i<=nCacheTypeCount; i++)
    {
        if (document.getElementById(\'cachetype\' + i).checked)
        {
            if (sCacheTypes != \'\') sCacheTypes += \';\';
            sCacheTypes += i;
        }
    }
    // search.php will traditionally ignore \'cachetype\' option if it is empty,
    // so we must force it to find nothing if nothing is selected here:
    if (sCacheTypes == \'\') sCacheTypes = \'none\';
    sPostBody += \'&cachetype=\' + sCacheTypes;

    /* cachesize
     */
    var sCacheSizes = \'\';
    for (var i=1; i<=nCacheSizeCount; i++)
    {
        if (document.getElementById(\'cachesize\' + i).checked)
        {
            if (sCacheSizes != \'\') sCacheSizes += \';\';
            sCacheSizes += i;
        }
    }
    if (sCacheSizes == \'\') sCacheSizes = \'none\';
    sPostBody += \'&cachesize=\' + sCacheSizes;

    /* hide options
     */
    sPostBody += document.getElementById(\'f_userowner\').checked ? \'&f_userowner=1\' : \'&f_userowner=0\';
    sPostBody += document.getElementById(\'f_userfound\').checked ? \'&f_userfound=1\' : \'&f_userfound=0\';
    sPostBody += document.getElementById(\'f_ignored\').checked ? \'&f_ignored=1\' : \'&f_ignored=0\';
    sPostBody += document.getElementById(\'f_disabled\').checked ? \'&f_disabled=1\' : \'&f_disabled=0\';
    sPostBody += document.getElementById(\'f_inactive\').checked ? \'&f_inactive=1\' : \'&f_inactive=0\';
    '; ?>

    <?php if ($this->_tpl_vars['nongc']): ?>
        var f_otherplatforms = true;
    <?php else: ?>
        var f_otherplatforms = document.getElementById('f_otherPlatforms').checked;
    <?php endif; ?>
    <?php echo '
    sPostBody += f_otherplatforms ? \'&f_otherPlatforms=1\' : \'&f_otherPlatforms=0\';
    sPostBody += document.getElementById(\'f_geokrets\').checked ? \'&f_geokrets=1\' : \'&f_geokrets=0\';

    /* rating options
     */
    nSelectValue = document.getElementById(\'terrainmin\').value;
    if (nSelectValue != 0) sPostBody += \'&terrainmin=\' + nSelectValue;
    nSelectValue = document.getElementById(\'terrainmax\').value;
    if (nSelectValue != 0) sPostBody += \'&terrainmax=\' + nSelectValue;
    nSelectValue = document.getElementById(\'difficultymin\').value;
    if (nSelectValue != 0) sPostBody += \'&difficultymin=\' + nSelectValue;
    nSelectValue = document.getElementById(\'difficultymax\').value;
    if (nSelectValue != 0) sPostBody += \'&difficultymax=\' + nSelectValue;
    nSelectValue = document.getElementById(\'recommendationmin\').value;
    if (nSelectValue != 0) sPostBody += \'&recommendationmin=\' + nSelectValue;

    /* attributes
     */
    sPostBody += \'&cache_attribs=\' + get_attrib_filter_params(false);
    sPostBody += \'&cache_attribs_not=\' + get_attrib_filter_params(true);

    return sPostBody;
}

function get_attrib_filter_params(no)
{
    var state = (no ? \'2\' : \'1\');
    var sAttribs = \'\';

    for (var nCacheAttribId=1; nCacheAttribId<=nMaxAttributeId; nCacheAttribId++)
        if (document.getElementById(\'attribute\' + nCacheAttribId))
            if (document.getElementById(\'imgattribute\' + nCacheAttribId).style.display != \'none\')
                if (document.getElementById(\'attribute\' + nCacheAttribId).value == state)
                {
                    if (sAttribs != \'\') sAttribs += \';\';
                    sAttribs += nCacheAttribId;
                }

    return sAttribs;
}

// built query string for map2.php
function get_mapfilter_params()
{
    var oBounds = moMap.getBounds();
    var sPostBody = \'mode=searchresult&compact=1&resultid=\' + mnResultId;
    sPostBody += \'&lat1=\' + oBounds.getSouthWest().lat();
    sPostBody += \'&lat2=\' + oBounds.getNorthEast().lat();
    sPostBody += \'&lon1=\' + oBounds.getSouthWest().lng();
    sPostBody += \'&lon2=\' + oBounds.getNorthEast().lng();

    '; ?>

        <?php echo '
    if (!bFullscreen) sPostBody += "&smallmap=1";

    return sPostBody;
}

function toggle_attribselection(bSaveCookies)
{
    '; ?>

    var filterbefore = get_attrib_filter_params(false) + '/' + get_attrib_filter_params(true);

    var tas = document.getElementById('toggle_attribselection');
    var bShow = !bAllAttribs;
    var sShow = (bShow ? 'inline-block' : 'none');

    <?php $_from = $this->_tpl_vars['aAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribGroupItem']):
?>
        <?php if (! $this->_tpl_vars['attribGroupItem']['search_default']): ?>
            document.getElementById('attribgroup<?php echo $this->_tpl_vars['attribGroupItem']['id']; ?>
').style.display = sShow;
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['attribGroupItem']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribItem']):
?>
            <?php if (! $this->_tpl_vars['attribItem']['search_default']): ?>
                document.getElementById('imgattribute<?php echo $this->_tpl_vars['attribItem']['id']; ?>
').style.display = sShow;
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>

    tas.innerHTML = (bShow ? "Less" : "Show all");
    if (bFullscreen)
        document.getElementById('attribcell').style.width = (bShow ? '675px' : '600px');
    bAllAttribs = !bAllAttribs;
    <?php echo '

    if (bSaveCookies)
    {
        if (get_attrib_filter_params(false) + \'/\' + get_attrib_filter_params(true) != filterbefore)
            filter_changed();
        cookieSave(false);
    }
}

/*=========================================================================
    End of JavaScript code
 =========================================================================*/

-->
</script>
'; ?>

<?php endif; ?>  

<div id="<?php if ($this->_tpl_vars['bFullscreen']): ?>fullmap<?php else: ?>smallmap<?php endif; ?>" class="mapframe">

    <?php if ($this->_tpl_vars['bFullscreen']): ?>
                <div id="maplangstripe" class="maplangstripe mapboxshadow" style="position:absolute; left:0; right:0; height:41px; border-bottom:solid 1px grey; z-index:5;">
            <div id="coordbox" class="mapcoord_fullscreen" style="z-index:10"></div>
            <div id="mapstat_caches" class="mapstat_fullscreen" style="z-index:5">Caches displayed: <span id="statCachesCount">0</span><span id="statLoadTime" style="display:none">0</span></div>
            <div style="position:absolute; top:0px; left:10px; right:180px; height:36px; z-index:15">
    <?php else: ?>
                <div class="buffer" style="width: 500px; height: 10px;">&nbsp;</div>
        <div id="coordbox" class="mapcoord_normalscreen" style="z-index:10">&nbsp;</div>
        <?php if ($this->_tpl_vars['msie']): ?>
            <p>
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Map display with Microsoft Internet Explorer is slow and restricted to <?php echo $this->_tpl_vars['maxrecords']; ?>
 geocaches. Use another browser for better performance.
            </p>
        <?php endif; ?>
    <?php endif; ?>

        <div class="mapform" style="position:relative; z-index:90">
    <form onsubmit="mapsearch_click(); return false;">
        <table class="mapsearch" align="center">
            <tr>
                <?php if ($this->_tpl_vars['bFullscreen']): ?>
                                        <td rowspan="2">&nbsp;</td>
                    <td rowspan="2" class="maplogin">
                        <?php if ($this->_tpl_vars['username'] != ""): ?>Logged in as<br /><a href="myhome.php"><b><?php echo $this->_tpl_vars['username']; ?>
</b></a> &nbsp;<a href="map2.php?action=logout&mode=fullscreen<?php if ($this->_tpl_vars['queryid'] > 0): ?>&queryid=<?php echo $this->_tpl_vars['queryid']; ?>
<?php endif; ?>"><img src="resource2/ocstyle/images/action/15x13-logout.png" style="margin-bottom:2px" alt="Logout" title="Logout" /></a><?php else: ?><a href="login.php?target=map2.php%3Fmode%3Dfullscreen<?php if ($this->_tpl_vars['queryid'] > 0): ?>%26queryid%3D<?php echo $this->_tpl_vars['queryid']; ?>
<?php endif; ?>">Login...</a><?php endif; ?>
                    </td>
                    <td rowspan="2">&nbsp;&nbsp;</td>
                <?php endif; ?>

                <td rowspan="2" class="mapheader_spacer"></td>

                                <td rowspan="2"><input type="text" id="mapsearch" style="margin-right:5px" value="" onfocus="mapsearch_onfocus()" onblur="mapsearch_onblur()" class="searchfield<?php if ($this->_tpl_vars['bFullscreen']): ?>_fullscreen<?php endif; ?>" size="<?php if ($this->_tpl_vars['bFullscreen']): ?>40<?php else: ?>50<?php endif; ?>" /></td><td rowspan="2"><input type="button" id="mapsubmit" name="mapsubmit" value="&nbsp;&nbsp;Search&nbsp;&nbsp;" class="formbutton" style="width:auto; font-size:<?php if ($this->_tpl_vars['bFullscreen']): ?>11px<?php else: ?>12px<?php endif; ?>" onclick="mapsearch_click()" /></td>
                <td rowspan="2" class="mapheader_spacer"></td>

                                <?php if ($this->_tpl_vars['nUserLat'] != 0 || $this->_tpl_vars['nUserLon'] != 0): ?>
                    <td rowspan="2"><a class="jslink" onclick="center_home()"><img id="center_home_img" style="margin-left:5px; margin-right:5px" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-home.png" alt="Go to home coordinates" title="Go to home coordinates" /></a></td>
                <?php endif; ?>

                                <td rowspan="2"><a class="jslink" onclick="download_gpx()"><img id="download_gpx_img" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/35x35-gpx-download.png" style="margin-left:5px; margin-right:5px" height="35" width="35" alt="Download GPX file (max. 500 caches)" title="Download GPX file (max. 500 caches)" /></a></td>

                                <td rowspan="2"><a class="jslink" onclick="showPermlinkBox_click()"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/35x35-star.png" style="margin-left:3px; margin-right:1px" height="35" width="35" alt="Show link to this map" title="Show link to this map" /></a></td>

                                <td rowspan="2"><a class="jslink" onclick="toggle_settings()"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/35x35-configure.png" class="mapbutton" style="margin-left:0px; margin-right:2px" height="35" width="35" alt="Settings" title="Settings" /></a></td>

                                <?php if ($this->_tpl_vars['help_map'] != ""): ?>
                    <td rowspan="2"><?php echo $this->_tpl_vars['help_map']; ?>
<img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-help.png" class="mapbutton" style="margin-left:2px; margin-right:4px" height="32" width="32" alt="Instructions" title="Instructions" /></a></td>
                <?php endif; ?>

                                <td rowspan="2">
                    <?php if ($this->_tpl_vars['bFullscreen']): ?>
                        <a class="nooutline" href="map2.php?mode=normalscreen<?php if ($this->_tpl_vars['queryid'] > 0): ?>&queryid=<?php echo $this->_tpl_vars['queryid']; ?>
<?php endif; ?>"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/35x35-normalscreen.png" align="right" style="margin-left:4px; margin-right:4px" height="35" width="35" alt="Switch to small map" title="Switch to small map" /></a>
                    <?php else: ?>
                        <a class="nooutline" href="map2.php?mode=fullscreen<?php if ($this->_tpl_vars['queryid'] > 0): ?>&queryid=<?php echo $this->_tpl_vars['queryid']; ?>
<?php endif; ?>"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/35x35-fullscreen.png" align="right" style="margin-left:4px; margin-right:4px" height="35" width="35" alt="show fullscreen" title="show fullscreen" /></a>
                    <?php endif; ?>
                </td>

            <td rowspan="2" class="mapheader_spacer"></td>
            <?php if (! $this->_tpl_vars['bFullscreen']): ?>
                <td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <?php endif; ?>
        </table>
        </form>
    </div>

        <div class="mapselectgeocode">
        <select id="mapselectlist" name="mapselectlist" class="mapselectlist<?php if ($this->_tpl_vars['bFullscreen']): ?>_fullscreen<?php endif; ?> mapboxshadow" onblur="mapselectlist_onblur()" onclick="mapselectlist_onclick()" onkeydown="mapselectlist_onkey(event)" >
        </select>
    </div>

        <div id="permalink_box" class="mappermalink mapboxframe mapboxshadow" style="display:none">
        <table>
            <tr><td><img src="resource2/ocstyle/images/viewcache/link.png" alt="" height="16" width="16" /> Link to this map view:</td><td align="right"><a href="javascript:permalinkbox_hide()"><img src="resource2/ocstyle/images/navigation/19x19-close.png" style="opacity:0.7" /></a></td></tr>
            <tr><td><input id="permalink_text" type="text" value="" size="55"/></td></tr>
            <tr id="permalink_addFavorites"><td align="right"><input type="button" value="Add to favorites..." onclick="addFavorites_click()" /></td></tr>
        </table>
    </div>
    <?php if ($this->_tpl_vars['bFullscreen']): ?>
        </div></div>            <?php endif; ?>

        <?php if ($this->_tpl_vars['bFullscreen']): ?>
                <div style="position:absolute; top:41px; bottom:0; width:100%; z-index:1">
    <?php else: ?>
        <div class="buffer" style="width: 500px; height: 18px;">&nbsp;</div>
        <div style="position:relative; width:770px; height:600px; z-index:1">
    <?php endif; ?>

                        <div id="toomanycaches" class="toomanycaches mapboxshadow" style="display:none; z-index:3">
                <table><tr><td id="toomanycaches_txt"></td></tr></table>
            </div>

            <div class="maploading">Loading map ...</div>
            <div class="mapversion">GM Version <script type="text/javascript">document.write(google.maps.version);</script></div>

            <div id="mapoptions" class="mapoptions mapboxframe mapboxshadow" style="z-index:999; display:none">
                <form action="map2.php?mode=<?php if ($this->_tpl_vars['bFullscreen']): ?>full<?php else: ?>normal<?php endif; ?>screen<?php if ($this->_tpl_vars['queryid'] > 0): ?>&queryid=<?php echo $this->_tpl_vars['queryid']; ?>
<?php endif; ?>" method="post" style="display:inline;">
                    <input type="hidden" name="submit" value="1" />
                    <table>
                        <tr><td><span style="font-size:1.2em; font-weight:bold">Settings</strong></td><td style="text-align:right"><a href="javascript:toggle_settings()"><img src="resource2/ocstyle/images/navigation/19x19-close.png" style="opacity:0.7" /></a></tr>
                        <tr><td>Menu option 'Map' shows:</td><td><select name="opt_menumap"><option id="opt_menumap0" value="0">small map</option><option id="opt_menumap1" value="1">fullscreen map</option></select></td></tr>
                        <tr><td>Show overview map:</td><td><input type="checkbox" id="opt_overview" name="opt_overview" value="1" /></td></tr>
                        <tr><td>Maximum caches on map<br />(<?php echo $this->_tpl_vars['min_maxrecords']; ?>
-<?php echo $this->_tpl_vars['max_maxrecords']; ?>
, 0=automatic):</td><td><input type="text" id="opt_maxcaches" name="opt_maxcaches" size="6" /></td></tr>
                        <?php if ($this->_tpl_vars['msie']): ?>
                            <tr><td colspan="2" style="padding-top:0; white-space:normal">
                                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" alt="" />
                                <small>Max. <?php echo $this->_tpl_vars['maxrecords']; ?>
 caches can be displayed with Microsoft Internet Explorer.
                            </td></tr>
                        <?php endif; ?>
                        <tr><td>Cache icons:</td><td><select name="opt_cacheicons"><option id="opt_cacheicons1" value="1">classic OC<option id="opt_cacheicons2" value="2">OKAPI style</option></select></td></tr>
                        <tr><td>Show <?php echo $this->_tpl_vars['help_previewpics']; ?>
preview pictures</a><br />(% of map area, 0=off):</td><td><input type="text" id="opt_pictures" name="opt_pictures" size="2" maxlength="2" /></td></tr>
                        <tr><td colspan="2"><?php if ($this->_tpl_vars['login']['userid'] > 0): ?><input type="button" class="formbutton" value="Cancel" onclick="toggle_settings()"/>&nbsp; <input type="submit" name="submitsettings" class="formbutton" value="OK" onclick="submitbutton('submitsettings')" /><?php else: ?><em>You must be logged in to change map settings.</em><?php endif; ?></td></tr>
                    </table>
                </form>
            </div>

            <div id="cachepicbox" class="default mapboxframe mapboxshadow" style="position:absolute; <?php if ($this->_tpl_vars['bFullscreen']): ?>left:4px; top:7px;<?php else: ?>left:0; top:0;<?php endif; ?> background:#fdfdfd; display:none; z-index:60">
                <div style="position:absolute; right:-19px; top:2px; opacity:0.7">
                    <img src="resource2/ocstyle/images/navigation/15x15-smallclose.png" onclick="hide_picture()" style="cursor:pointer" />
                </div>
                <div>
                    <a id="cachepiccontainer" class="nooutline"><img id="cachepic" /></a>
                </div>
                <div id="cachepictitle" style="clear:both; padding:0px 4px 0px 4px; line-height:1.3em; max-height:2.6em; overflow:hidden"></div>
            </div>

                        <div id="googlemap" style="position:absolute; top:0; bottom:0; left:0; width:100%; z-index:2"></div>
        </div>

    <?php if ($this->_tpl_vars['bFullscreen']): ?>
                <a href="index.php"><img id="oclogo" src="resource2/ocstyle/images/oclogo/oc_logo_alpha3.png" style="position:absolute; left:8px; top:50px; z-index:2; border:0" /></a>

                <?php if ($this->_tpl_vars['queryid'] > 0): ?>
            <div class="mapboxframe mapboxshadow" style="position:absolute; top:100px; right:10px; background:#fff; z-index:2">
                <a class="nooutline" href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&showresult=0"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-search.png" style="padding:2px" alt="Search options" title="Search options" /></a>
            </div>
        <?php endif; ?>

        <?php echo '
        <script type="text/javascript">
        function toggle_sidebar(savecookies)
        {
            var ele = document.getElementById("sidebar");
            var img = document.getElementById("sidbar-toggle-img");
            '; ?>

            // var hideimg = "resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/32x32-right.png";
            // var showimg = "resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/32x32-left.png";
            <?php echo '
            if (ele.style.display == "block") {
                ele.style.display = "none";
                // img.src=showimg;
                img.style.display = "block";
                dataload_on_filterchange();
            }
            else {
                ele.style.display = "block";
                // img.src=hideimg;
                img.style.display = "none";
                if (bFilterChanged)  // for the case ...
                    reset_filter_heading();
            }
            msInitSiderbarDisplay = ele.style.display;
            if (savecookies) cookieSave(false);
        }
        </script>
        '; ?>


                <div class="mapboxframe mapboxshadow" style="position:absolute; top: <?php if ($this->_tpl_vars['msie']): ?>98px<?php else: ?>104px<?php endif; ?>; right:0px; margin: 0px; padding: 4px; background:#fff; opacity: .9; z-index:2; <?php if ($this->_tpl_vars['queryid'] > 0): ?>display:none;<?php endif; ?>">
                        <a class="jslink nofocus" onclick="toggle_sidebar(true);" id='sidebar-toggle' style="width: 32px; height: 32px"><img id="sidbar-toggle-img" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/map/32x32-left.png" /></a>
                        <div id="sidebar" style="display:none; overflow:auto">

            <table cellspacing="0" cellpadding="0"><tr><td>
        <table style="width:100%">
            <tr>
                <td style="width:3px"></td>
                <td id="filterboxtitle" class="content-title-noshade-size1">Only show Geocaches with the following properties:</td>
                <td align="right"><a class="jslink" onclick="toggle_sidebar(true);"><img src="resource2/ocstyle/images/map/32x32-right.png" /></a></td>
            </tr>
        </table>
    <?php else: ?>
        <div class="buffer" style="width: 500px; height: 2px;">&nbsp;</div>
        <div style="width:770px;text-align:right;"><span id="mapstat_caches">Caches displayed: <span id="statCachesCount">0</span></span>, Time to load: <span id="statLoadTime">0</span> Sec.</div>
        <div style="<?php if ($this->_tpl_vars['queryid'] > 0): ?>display:none<?php endif; ?>">
        <p id="filterboxtitle" class="content-title-noshade-size1">Only show Geocaches with the following properties:</p>
        <div class="buffer" style="width: 500px; height: 5px;">&nbsp;</div>
    <?php endif; ?>

    
        <table>
        <tr>
            <td class="mapfilter pad10" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>600<?php else: ?>752<?php endif; ?>">
                <table style="width:100%">
                    <tr>
                        <td>
                            <strong>Name:</strong>&nbsp; <input type="text" id="cachename" name="cachename" value="" onkeyup="filter_changed()" onchange="filter_changed()" class="input200" /></td>
                        </td>
                        <td style="text-align:right">
                            <input type="button" name="resetfilter" class="formbutton" style="width:auto" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;" onclick="reset_filter()" />&nbsp;
                            <input type="button" name="savefilter" class="formbutton" style="width:auto" value="&nbsp;&nbsp;Save&nbsp;&nbsp;" onclick="save_filter()" />&nbsp;
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table>
        <tr>
                        <td valign="top" class="mapfilter pad10" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>140<?php else: ?>150<?php endif; ?>">
                <table>
                    <tr><td colspan="3" class="mapfiltertopic mft_withcheckbox"><input id="all_cachetypes" type="checkbox" checked="checked" onchange="alltypes_changed()" /> <label for="all_cachetypes">Cachetype</label></td></tr>
                    <tr><td><span style="line-height: 5px;">&nbsp;</span></td></tr>
                    <?php $_from = $this->_tpl_vars['aCacheType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cacheTypeItem']):
?>
                        <tr>
                            <td><input type="checkbox" id="cachetype<?php echo $this->_tpl_vars['cacheTypeItem']['id']; ?>
" name="cachetype<?php echo $this->_tpl_vars['cacheTypeItem']['id']; ?>
" value="1" checked="checked" onchange="cachetype_filter_changed()" class="checkbox" /></td>
                            <td><img src="resource2/ocstyle/images/cacheicon/16x16-<?php echo $this->_tpl_vars['cacheTypeItem']['id']; ?>
.gif" /></td>
                            <td style="white-space:nowrap;">&nbsp;<label for="cachetype<?php echo $this->_tpl_vars['cacheTypeItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheTypeItem']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </table>
            </td>

                        <td valign="top" class="mapfilter pad10" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>128<?php else: ?>137<?php endif; ?>">
                <table>
                    <tr><td class="mapfiltertopic mft_withcheckbox"><input id="all_cachesizes" type="checkbox" checked="checked" onchange="allsizes_changed()" /> <label for="all_cachesizes">Container</label></td></tr>
                    <tr><td><span style="line-height: 5px;">&nbsp;</span></td></tr>
                    <?php $_from = $this->_tpl_vars['aCacheSize']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cacheSizeItem']):
?>
                        <tr>
                            <td style="white-space:nowrap">
                                <input type="checkbox" id="cachesize<?php echo $this->_tpl_vars['cacheSizeItem']['id']; ?>
" name="cachesize<?php echo $this->_tpl_vars['cacheSizeItem']['id']; ?>
" value="1" checked="checked" onchange="cachesize_filter_changed()" class="checkbox" />
                                <label for="cachesize<?php echo $this->_tpl_vars['cacheSizeItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheSizeItem']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label>
                            </td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </table>
            </td>

                        <td valign="top" class="mapfilter pad10" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>130<?php else: ?>140<?php endif; ?>">
                <table>
                    <tr><td class="mapfiltertopic">Hide</td></tr>
                    <tr><td><span style="line-height: 5px;">&nbsp;</span></td></tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_userowner" name="f_userowner" value="1" onchange="filter_changed()" class="checkbox" <?php if ($this->_tpl_vars['username'] == ""): ?>disabled<?php endif; ?> />
                            <label for="f_userowner" <?php if ($this->_tpl_vars['username'] == ""): ?>style="color:grey"<?php endif; ?>>My owns</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_userfound" name="f_userfound" value="1" onchange="filter_changed()" class="checkbox"  <?php if ($this->_tpl_vars['username'] == ""): ?>disabled<?php endif; ?> />
                            <label for="f_userfound" <?php if ($this->_tpl_vars['username'] == ""): ?>style="color:grey"<?php endif; ?>>My finds</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_ignored" name="f_ignored" value="1" checked="checked" onchange="filter_changed()" class="checkbox"  <?php if ($this->_tpl_vars['username'] == ""): ?>disabled<?php endif; ?> />
                            <label for="f_ignored" <?php if ($this->_tpl_vars['username'] == ""): ?>style="color:grey"<?php endif; ?>>My ignored</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_inactive" name="f_inactive" value="1" checked="checked" onchange="filter_changed()" class="checkbox" />
                            <label for="f_inactive">archived</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_disabled" name="f_disabled" value="1" checked="checked" onchange="filter_changed()" class="checkbox" />
                            <label for="f_disabled">disabled</label>
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['nongc']): ?>style='display:none'<?php endif; ?>>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_otherPlatforms" name="f_otherPlatforms" value="1" onchange="filter_changed()" class="checkbox" />
                            <label for="f_otherPlatforms">GC listings</label>
                                                    </td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap">
                            <input type="checkbox" id="f_geokrets" name="f_geokrets" value="1" onchange="filter_changed()" class="checkbox" />
                            <label for="f_geokrets">without Geokrets</label>
                        </td>
                    </tr>
                </table>
            </td>

                        <td valign="top" class="mapfilter pad10" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>160<?php else: ?>282<?php endif; ?>">
                <table>
                    <tr>
                        <td colspan="2" class="mapfiltertopic">Rating</td>
                    <tr><td colspan="2"><span style="line-height: 5px;">&nbsp;</span></td></tr>
                    </tr>
                    <tr>
                        <td <?php if ($this->_tpl_vars['bFullscreen']): ?>colspan="2"<?php endif; ?>>Difficulty:</td>
                        <?php if ($this->_tpl_vars['bFullscreen']): ?></tr><tr><td colspan="2" style="white-space:nowrap; text-align:right"><?php else: ?><td><?php endif; ?>
                            <select id="difficultymin" name="difficultymin" onchange="filter_changed()">
                                <option value="0" selected="selected">-</option>
                                <option value="2">1.0</option>
                                <option value="3">1.5</option>
                                <option value="4">2.0</option>
                                <option value="5">2.5</option>
                                <option value="6">3.0</option>
                                <option value="7">3.5</option>
                                <option value="8">4.0</option>
                                <option value="9">4.5</option>
                                <option value="10">5.0</option>
                            </select>
                            &nbsp;&nbsp;to&nbsp;&nbsp;
                            <select id="difficultymax" name="difficultymax" onchange="filter_changed()">
                                <option value="0" selected="selected">-</option>
                                <option value="2">1.0</option>
                                <option value="3">1.5</option>
                                <option value="4">2.0</option>
                                <option value="5">2.5</option>
                                <option value="6">3.0</option>
                                <option value="7">3.5</option>
                                <option value="8">4.0</option>
                                <option value="9">4.5</option>
                                <option value="10">5.0</option>
                            </select>
                        </td>
                    </tr>
                    <?php if ($this->_tpl_vars['bFullscreen']): ?><tr><td style="height:4px"></td></tr><?php endif; ?>
                    <tr>
                        <td <?php if ($this->_tpl_vars['bFullscreen']): ?>colspan="2"<?php endif; ?>>Terrain:</td>
                            <?php if ($this->_tpl_vars['bFullscreen']): ?></tr><tr><td colspan="2" style="white-space:nowrap; text-align:right"><?php else: ?><td><?php endif; ?>
                            <select id="terrainmin" name="terrainmin" onchange="filter_changed()">
                                <option value="0" selected="selected">-</option>
                                <option value="2">1.0</option>
                                <option value="3">1.5</option>
                                <option value="4">2.0</option>
                                <option value="5">2.5</option>
                                <option value="6">3.0</option>
                                <option value="7">3.5</option>
                                <option value="8">4.0</option>
                                <option value="9">4.5</option>
                                <option value="10">5.0</option>
                            </select>
                            &nbsp;&nbsp;to&nbsp;&nbsp;
                            <select id="terrainmax" name="terrainmax" onchange="filter_changed()">
                                <option value="0" selected="selected">-</option>
                                <option value="2">1.0</option>
                                <option value="3">1.5</option>
                                <option value="4">2.0</option>
                                <option value="5">2.5</option>
                                <option value="6">3.0</option>
                                <option value="7">3.5</option>
                                <option value="8">4.0</option>
                                <option value="9">4.5</option>
                                <option value="10">5.0</option>
                            </select>
                        </td>
                    </tr>
                    <?php if ($this->_tpl_vars['bFullscreen']): ?><tr><td>&nbsp;</td></tr><?php endif; ?>
                    <tr>
                        <td>Min. recommendations:</td>
                        <td>
                            <select id="recommendationmin" name="recommendationmin" onchange="filter_changed()">
                                <option value="0" selected="selected">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

        <table>
        <tr>
            <td id="attribcell" valign="top" class="mapfilter pad10" style="padding-bottom:2px" width="<?php if ($this->_tpl_vars['bFullscreen']): ?>675<?php else: ?>752<?php endif; ?>">
                <table>
                    <tr><td class="mapfiltertopic">Attribute &nbsp; <span class="mapfiltertopic_add">[<a id="toggle_attribselection" class="jslink" onclick='toggle_attribselection(true)'>Less</a>]</span></td></tr>
                    <tr><td><span style="line-height: 5px;">&nbsp;</span></td></tr>
                    <tr>
                        <td>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_attribgroup.tpl", 'smarty_include_vars' => array('attriblist' => $this->_tpl_vars['aAttributes'],'onmousedown' => 'attribute_onmousedown','inputprefix' => 'attribute','stateDisable' => $this->_tpl_vars['aAttributesDisabled'],'searchsel' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <?php if ($this->_tpl_vars['bFullscreen']): ?>
        </td></tr></td></table>
        </div>
        </div>
    <?php else: ?>
        </div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['queryid'] == 0): ?>
        <div class="mapboxframe mapboxshadow" style="position:absolute; <?php if ($this->_tpl_vars['bFullscreen']): ?>top: <?php if ($this->_tpl_vars['msie']): ?>158px<?php else: ?>164px<?php endif; ?>; right:0px; margin: 0px;<?php else: ?>top: <?php if ($this->_tpl_vars['msie']): ?>274<?php else: ?>266<?php endif; ?>px; right:30px; margin: 0px;<?php endif; ?> padding:2px 0px 2px 1px; background:#fff; opacity: .9; z-index:1" >
            <a class="jslink nofocus" href="search.php?searchto=searchall&showresult=1&expert=0&output=HTML&utf8=1&sort=bycreated&orderRatingFirst=0&f_inactive=1&f_disabled=1&f_ignored=1&cache_attribs=61&submit_all=Suchen" style="width: 32px; height: 32px"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/attributes/safari.png" title="Safari caches list" /></a>
        </div>
    <?php endif; ?>

</div>