<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder" />

    <link rel="icon" href="../../img/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="../../css/general/site/bootstrap.css">
    <link rel="stylesheet" href="../../css/general/site/style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?php
        session_start();
        if($_SESSION['logged-in'] == "y" AND $_SESSION['account-type'] == "admin") {
          header("Location: ../../admin/");
          exit;
        }
        if (isset($_SESSION['Rooms']) AND isset($_SESSION['Adults']) AND isset($_SESSION['Children'])) {
            $location = $_SESSION['Location'];
            $checkin = $_SESSION['Checkin'];
            $checkout = $_SESSION['Checkout'];
            $rooms = $_SESSION['Rooms'];
            $adults = $_SESSION['Adults'];
            $children = $_SESSION['Children'];
        } else {
            $location = "Kannur,Kerala";
            $rooms = 1;
            $adults = 2;
            $children = 0;
        }
        $location_array = explode(',', $location);
        if (count($location_array) == 3) {
            $town = $location_array[0];
            $district = $location_array[1];
            $state = $location_array[2];
            echo "<title>Zephyr | Resorts In $town</title>";
        }
        elseif (count($location_array) == 2) {
            $town = "";
            $district = $location_array[0];
            $state = $location_array[1];
            echo "<title>Zephyr | Resorts In $district</title>";
        }
        else {
            $town = "";
            $district = "";
            $state = $location_array[0];
            echo "<title>Zephyr | Resorts In $state</title>";
        }
        echo "
            <script>
                var locationValue = '{$location}';
                var town = '{$town}';
                var district = '{$district}';
                var state = '{$state}';
                var Rooms = '{$rooms}' - 1;
                var Adults = '{$adults}' - 1;
                var Children = '{$children}' - 1;
            </script>
        ";
    ?>

    <style>
        #meshbg_1 {
            background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #FFFFAC 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%);
        }
        .QOX0dS.JCRlLH.comp-lrt6suuu-container.comp-lrt6suuu.wixui-box:last-child {
            margin-bottom: 30px !important;
        }
        #ui-datepicker-div {
            top: 130px !important;
            width: 216px;
        }
    </style>

    <!-- Safari Pinned Tab Icon -->
    <!-- <link rel="mask-icon" href="https://www.wix.com/favicon.ico"> -->

    <!-- Original trials -->

    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/originTrials.41d7301a.bundle.min.js"></script>


    <!-- Legacy Polyfills -->
    <script nomodule="" src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js"></script>
    <script nomodule="" src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js"></script>
    <script nomodule="" src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>

    <!-- Performance API Polyfills -->
    <script>
        (function() {
            var noop = function noop() {};
            if ("performance" in window === false) {
                window.performance = {};
            }
            window.performance.mark = performance.mark || noop;
            window.performance.measure = performance.measure || noop;
            if ("now" in window.performance === false) {
                var nowOffset = Date.now();
                if (performance.timing && performance.timing.navigationStart) {
                    nowOffset = performance.timing.navigationStart;
                }
                window.performance.now = function now() {
                    return Date.now() - nowOffset;
                };
            }
        })();
    </script>

    <!-- Globals Definitions -->
    <script>
        (function() {
            var now = Date.now()
            window.initialTimestamps = {
                initialTimestamp: now,
                initialRequestTimestamp: Math.round(performance.timeOrigin ? performance.timeOrigin : now - performance.now())
            }

            window.thunderboltTag = "libs-releases-GA-local"
            window.thunderboltVersion = "1.13494.0"
        })();
    </script>




    <!-- sendFedopsLoadStarted.inline -->
    <script type="application/json" id="wix-fedops">
        {
            "data": {
                "site": {
                    "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                    "userId": "75fa7506-e8f4-4ca7-99d3-49c713bef2e6",
                    "siteId": "bed0d4ad-2fc4-4f5c-bf69-7224c394f235",
                    "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                    "siteRevision": 134,
                    "siteType": "UGC",
                    "dc": "uw2-pub-1",
                    "isResponsive": true,
                    "editorName": "Studio",
                    "sessionId": "20a4840f-c367-4624-85c3-e70063250e5c",
                    "isSEO": false,
                    "appNameForBiEvents": "wix-studio"
                },
                "rollout": {
                    "siteAssetsVersionsRollout": false,
                    "isDACRollout": 0,
                    "isTBRollout": false
                },
                "fleetConfig": {
                    "fleetName": "thunderbolt-renderer-user-code",
                    "type": "GA",
                    "code": 0
                },
                "requestUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                "isInSEO": false,
                "platformOnSite": true
            }
        }
    </script>
    <script>
        window.fedops = JSON.parse(document.getElementById('wix-fedops').textContent)
    </script>
    <script id='sendFedopsLoadStarted'>
        function e(e, r) {
            var t = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e);
                r && (n = n.filter((function(r) {
                    return Object.getOwnPropertyDescriptor(e, r).enumerable
                }))), t.push.apply(t, n)
            }
            return t
        }

        function r(e, r, t) {
            return (r = function(e) {
                var r = function(e, r) {
                    if ("object" != typeof e || null === e) return e;
                    var t = e[Symbol.toPrimitive];
                    if (void 0 !== t) {
                        var n = t.call(e, r || "default");
                        if ("object" != typeof n) return n;
                        throw new TypeError("@@toPrimitive must return a primitive value.")
                    }
                    return ("string" === r ? String : Number)(e)
                }(e, "string");
                return "symbol" == typeof r ? r : String(r)
            }(r)) in e ? Object.defineProperty(e, r, {
                value: t,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[r] = t, e
        }! function() {
            var t = function(e) {
                var r, t, n, i = !1;
                if (null === (r = window.viewerModel) || void 0 === r || !/\(iP(hone|ad|od);/i.test(null === (t = window) || void 0 === t || null === (n = t.navigator) || void 0 === n ? void 0 : n.userAgent)) try {
                    i = navigator.sendBeacon(e)
                } catch (e) {}
                i || ((new Image).src = e)
            };
            var n = window.fedops.data,
                i = n.site,
                o = n.rollout,
                a = n.fleetConfig,
                s = n.requestUrl,
                c = n.isInSEO,
                u = n.frogOnUserDomain,
                d = function(e) {
                    var r = e.navigator.userAgent;
                    return /instagram.+google\/google/i.test(r) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(r) ? "ua" : ""
                }(window) || function() {
                    try {
                        if (window.self === window.top) return ""
                    } catch (e) {}
                    return "iframe"
                }() || function() {
                    var e;
                    if (!Function.prototype.bind) return "bind";
                    var r = window,
                        t = r.document,
                        n = r.navigator;
                    if (!t || !n) return "document";
                    var i = n.webdriver,
                        o = n.userAgent,
                        a = n.plugins,
                        s = n.languages;
                    if (i) return "webdriver";
                    if (!a || Array.isArray(a)) return "plugins";
                    if (null !== (e = Object.getOwnPropertyDescriptor(a, "0")) && void 0 !== e && e.writable) return "plugins-extra";
                    if (!o) return "userAgent";
                    if (o.indexOf("Snapchat") > 0 && t.hidden) return "Snapchat";
                    if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                    try {
                        throw Error()
                    } catch (e) {
                        if (e instanceof Error) {
                            var c = e.stack;
                            if (c && / (\(internal\/)|(\(?file:\/)/.test(c)) return "stack"
                        }
                    }
                    return ""
                }() || (c ? "seo" : ""),
                p = !!d,
                l = function(t, n) {
                    var i, o = "none",
                        a = t.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                    if (!a && window.PerformanceServerTiming) {
                        var s = function(e) {
                            var r, t;
                            try {
                                r = e()
                            } catch (e) {
                                r = []
                            }
                            var n = [];
                            return r.forEach((function(e) {
                                switch (e.name) {
                                    case "cache":
                                        n[1] = e.description;
                                        break;
                                    case "varnish":
                                        n[2] = e.description;
                                        break;
                                    case "dc":
                                        t = e.description
                                }
                            })), {
                                microPop: t,
                                matches: n
                            }
                        }(n);
                        i = s.microPop, a = s.matches
                    }
                    if (a && a.length && (o = `${a[1]},${a[2]||"none"}`, i || (i = a[3])), "none" === o) {
                        var c = "undefined" != typeof performance ? performance.timing : null;
                        c && c.responseStart - c.requestStart == 0 && (o = "browser")
                    }
                    return function(t) {
                        for (var n = 1; n < arguments.length; n++) {
                            var i = null != arguments[n] ? arguments[n] : {};
                            n % 2 ? e(Object(i), !0).forEach((function(e) {
                                r(t, e, i[e])
                            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : e(Object(i)).forEach((function(e) {
                                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                            }))
                        }
                        return t
                    }({
                        caching: o,
                        isCached: 0 === o.indexOf("hit")
                    }, i ? {
                        microPop: i
                    } : {})
                }(document.cookie, (function() {
                    return performance.getEntriesByType("navigation")[0].serverTiming || []
                })),
                f = l.isCached,
                v = l.caching,
                m = l.microPop,
                g = {
                    WixSite: 1,
                    UGC: 2,
                    Template: 3
                }[i.siteType] || 0,
                w = i.isResponsive ? "thunderbolt-responsive" : "thunderbolt",
                h = o.isDACRollout,
                b = o.siteAssetsVersionsRollout,
                x = h ? 1 : 0,
                y = b ? 1 : 0,
                O = 0 === a.code || 1 === a.code ? a.code : null,
                P = Date.now() - window.initialTimestamps.initialTimestamp,
                S = Math.round(performance.now()),
                j = document.visibilityState,
                _ = window,
                E = _.fedops,
                T = _.addEventListener,
                $ = _.thunderboltVersion;
            E.apps = E.apps || {}, E.apps[w] = {
                startLoadTime: S
            }, E.sessionId = i.sessionId, E.vsi = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function(e) {
                var r = 16 * Math.random() | 0;
                return ("x" === e ? r : 3 & r | 8).toString(16)
            })), E.is_cached = f, E.phaseStarted = A(28), E.phaseEnded = A(22), performance.mark("[cache] " + v + (m ? " [" + m + "]" : "")), E.reportError = function(e) {
                var r = (null == e ? void 0 : e.reason) || (null == e ? void 0 : e.message);
                r ? D(26, `&errorInfo=${r}&errorType=load`) : e.preventDefault()
            }, T("error", E.reportError), T("unhandledrejection", E.reportError);
            var k = !1;

            function D(e) {
                var r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                if (!s.includes("suppressbi=true")) {
                    var n = (u ? i.externalBaseUrl.replace(/^https?:\/\//, "") + "/_frog" : "//frog.wix.com") + "/" + "bolt-performance?src=72&evid=" + e + "&appName=" + w + "&is_rollout=" + O + "&is_sav_rollout=" + y + "&is_dac_rollout=" + x + "&dc=" + i.dc + (m ? "&microPop=" + m : "") + "&is_cached=" + f + "&msid=" + i.metaSiteId + "&session_id=" + window.fedops.sessionId + "&ish=" + p + "&isb=" + p + (p ? "&isbr=" + d : "") + "&vsi=" + window.fedops.vsi + "&caching=" + v + (k ? ",browser_cache" : "") + "&pv=" + j + "&pn=1&v=" + $ + "&url=" + encodeURIComponent(s) + "&st=" + g + `&ts=${P}&tsn=${S}` + r;
                    t(n)
                }
            }

            function A(e) {
                return function(r, t) {
                    var n = `&name=${r}&duration=${Date.now()-P}`,
                        i = t && t.paramsOverrides ? Object.keys(t.paramsOverrides).map((function(e) {
                            return e + "=" + t.paramsOverrides[e]
                        })).join("&") : "";
                    D(e, i ? `${n}&${i}` : n)
                }
            }
            T("pageshow", (function(e) {
                e.persisted && (k || (k = !0, E.is_cached = !0))
            }), !0), window.__browser_deprecation__ || D(21, `&platformOnSite=${window.fedops.data.platformOnSite}`)
        }();
    </script>

    <!-- Polyfills check -->
    <script>
        if (
            typeof Promise === 'undefined' ||
            typeof Set === 'undefined' ||
            typeof Object.assign === 'undefined' ||
            typeof Array.from === 'undefined' ||
            typeof Symbol === 'undefined'
        ) {
            // send bi in order to detect the browsers in which polyfills are not working
            window.fedops.phaseStarted('missing_polyfills')
        }
    </script>

    <!-- Essential Viewer Model -->
    <script type="application/json" id="wix-essential-viewer-model">
        {
            "fleetConfig": {
                "fleetName": "thunderbolt-renderer-user-code",
                "type": "GA",
                "code": 0
            },
            "mode": {
                "qa": false,
                "enableTestApi": false,
                "debug": false,
                "ssrIndicator": false,
                "ssrOnly": false,
                "siteAssetsFallback": "enable"
            },
            "componentsLibrariesTopology": [{
                "artifactId": "editor-elements",
                "namespace": "wixui",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
            }, {
                "artifactId": "editor-elements",
                "namespace": "dsgnsys",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
            }],
            "siteFeaturesConfigs": {
                "sessionManager": {
                    "isRunningInDifferentSiteContext": false
                }
            },
            "language": {
                "userLanguage": "en"
            },
            "siteAssets": {
                "clientTopology": {
                    "mediaRootUrl": "https:\/\/static.wixstatic.com",
                    "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                    "moduleRepoUrl": "https:\/\/static.parastorage.com\/unpkg",
                    "fileRepoUrl": "https:\/\/static.parastorage.com\/services",
                    "siteAssetsUrl": "https:\/\/siteassets.parastorage.com",
                    "pageJsonServerUrls": ["https:\/\/pages.parastorage.com", "https:\/\/staticorigin.wixstatic.com", "https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],
                    "pathOfTBModulesInFileRepoForFallback": "wix-thunderbolt\/dist\/"
                }
            },
            "siteFeatures": ["assetsLoader", "businessLogger", "captcha", "clickHandlerRegistrar", "commonConfig", "componentsLoader", "componentsRegistry", "consentPolicy", "customCss", "cyclicTabbing", "environmentWixCodeSdk", "environment", "locationWixCodeSdk", "navigationManager", "navigationPhases", "ooi", "pages", "panorama", "renderer", "reporter", "router", "scrollRestoration", "seoWixCodeSdk", "seo", "sessionManager", "siteMembersWixCodeSdk", "siteMembers", "siteScrollBlocker", "siteWixCodeSdk", "stores", "structureApi", "thunderboltInitializer", "tpaCommons", "translations", "warmupData", "windowMessageRegistrar", "windowWixCodeSdk", "wixEmbedsApi", "componentsReact", "platform"],
            "site": {
                "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                "isSEO": false
            },
            "media": {
                "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                "mediaRootUrl": "https:\/\/static.wixstatic.com\/",
                "staticVideoUrl": "https:\/\/video.wixstatic.com\/"
            },
            "requestUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
            "rollout": {
                "siteAssetsVersionsRollout": false,
                "isDACRollout": 0,
                "isTBRollout": false
            },
            "commonConfig": {
                "brand": "studio",
                "host": "VIEWER",
                "bsi": "",
                "consentPolicy": {},
                "consentPolicyHeader": {}
            },
            "interactionSampleRatio": 0.01,
            "dynamicModelUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5\/_api\/v2\/dynamicmodel",
            "experiments": {}
        }
    </script>
    <script>
        window.viewerModel = JSON.parse(document.getElementById('wix-essential-viewer-model').textContent)
    </script>

    <script>
        window.fetchDynamicModel = () => (window.viewerModel.siteFeaturesConfigs.sessionManager.isRunningInDifferentSiteContext ? Promise.resolve({}) : fetch(window.viewerModel.dynamicModelUrl, {
            credentials: 'same-origin'
        }).then(function(r) {
            if (!r.ok) throw new Error(`[${r.status}]${r.statusText}`);
            return r.json()
        }))
        window.dynamicModelPromise = window.fetchDynamicModel()
        window.commonConfig = viewerModel.commonConfig
    </script>


    <!-- initCustomElements -->
    <meta name="wix-dynamic-custom-elements" content="">

    <!-- Initial CSS -->
    <style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.c1956e3f.min.css">
        body.device-mobile-optimized {
            overflow-x: hidden;
            overflow-y: scroll
        }

        body.device-mobile-optimized:not(.responsive) #SITE_CONTAINER {
            margin-left: auto;
            margin-right: auto;
            overflow-x: visible;
            position: relative;
            width: 320px
        }

        body.device-mobile-optimized:not(.responsive):not(.blockSiteScrolling) #SITE_CONTAINER {
            margin-top: 0
        }

        body.device-mobile-optimized>* {
            max-width: 100% !important
        }

        body.device-mobile-optimized #site-root {
            overflow-x: hidden;
            overflow-y: hidden
        }

        @supports(overflow:clip) {
            body.device-mobile-optimized #site-root {
                overflow-x: clip;
                overflow-y: clip
            }
        }

        body.device-mobile-non-optimized #SITE_CONTAINER #site-root {
            overflow-x: hidden;
            overflow-y: auto
        }

        body.device-mobile-non-optimized.fullScreenMode {
            background-color: #5f6360
        }

        body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,
        body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
        body.device-mobile-non-optimized.fullScreenMode #site-root,
        body.fullScreenMode #WIX_ADS {
            visibility: hidden
        }

        body.fullScreenMode {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode.device-mobile-optimized #TINY_MENU {
            opacity: 0;
            pointer-events: none
        }

        body.fullScreenMode-scrollable.device-mobile-optimized {
            overflow-x: hidden !important;
            overflow-y: auto !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
        body.fullScreenMode-scrollable.device-mobile-optimized #site-root {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,
        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
            height: auto !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout {
            height: 0 !important
        }

        body.blockSiteScrolling {
            position: fixed;
            width: 100%
        }

        body.blockSiteScrolling #SITE_CONTAINER {
            margin-top: calc(var(--blocked-site-scroll-margin-top)*-1)
        }

        body.blockSiteScrolling:not(.responsive) #WIX_ADS {
            margin-top: var(--blocked-site-scroll-margin-top)
        }

        body.blockSiteScrollingWithOverflow {
            overflow-y: hidden
        }

        @keyframes slide-horizontal-new {
            0% {
                transform: translateX(100%)
            }
        }

        @keyframes slide-horizontal-old {
            80% {
                opacity: 1
            }
            to {
                opacity: 0;
                transform: translateX(-100%)
            }
        }

        @keyframes slide-vertical-new {
            0% {
                transform: translateY(-100%)
            }
        }

        @keyframes slide-vertical-old {
            80% {
                opacity: 1
            }
            to {
                opacity: 0;
                transform: translateY(100%)
            }
        }

        @keyframes out-in-new {
            0% {
                opacity: 0
            }
        }

        @keyframes out-in-old {
            to {
                opacity: 0
            }
        }

        html[data-page-transition=SlideHorizontal]::view-transition-old(page-group) {
            animation: slide-horizontal-old .6s cubic-bezier(.83, 0, .17, 1) forwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideHorizontal]::view-transition-new(page-group) {
            animation: slide-horizontal-new .6s cubic-bezier(.83, 0, .17, 1) backwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideVertical]::view-transition-old(page-group) {
            animation: slide-vertical-old .6s cubic-bezier(.83, 0, .17, 1) forwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=SlideVertical]::view-transition-new(page-group) {
            animation: slide-vertical-new .6s cubic-bezier(.83, 0, .17, 1) backwards;
            mix-blend-mode: normal
        }

        html[data-page-transition=OutIn]::view-transition-old(page-group) {
            animation: out-in-old .35s cubic-bezier(.64, 0, .78, 0) forwards
        }

        html[data-page-transition=OutIn]::view-transition-new(page-group) {
            animation: out-in-new .35s cubic-bezier(.22, 1, .36, 1) .35s backwards
        }

        @media(prefers-reduced-motion:reduce) {
            ::view-transition-group(*),
            ::view-transition-new(*),
            ::view-transition-old(*) {
                animation: none !important
            }
        }

        body,
        html {
            background: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }

        body {
            --scrollbar-width: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px
        }

        body,
        html {
            height: 100%
        }

        body {
            overflow-x: auto;
            overflow-y: scroll
        }

        body:not(.responsive) #site-root {
            min-width: var(--site-width);
            width: 100%
        }

        body:not([data-js-loaded]) [data-hide-prejs] {
            visibility: hidden
        }

        #SITE_CONTAINER {
            position: relative
        }

        :root {
            --one-unit: 1vw
        }

        @supports(container-type:inline-size) {
            :root {
                --one-unit: 1cqw
            }
        }
    </style>
    <style data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/main.renderer.df786773.min.css">
        a,
        abbr,
        acronym,
        address,
        applet,
        b,
        big,
        blockquote,
        button,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        dfn,
        div,
        dl,
        dt,
        em,
        fieldset,
        font,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        nav,
        object,
        ol,
        p,
        pre,
        q,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        title,
        tr,
        tt,
        u,
        ul,
        var {
            background: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }

        input,
        select,
        textarea {
            box-sizing: border-box;
            font-family: Helvetica, Arial, sans-serif
        }

        ol,
        ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        ins {
            text-decoration: none
        }

        del {
            text-decoration: line-through
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        a {
            cursor: pointer;
            text-decoration: none
        }

        .testStyles {
            overflow-y: hidden
        }

        .reset-button {
            -webkit-appearance: none;
            background: none;
            border: 0;
            color: inherit;
            font: inherit;
            line-height: normal;
            outline: 0;
            overflow: visible;
            padding: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        :focus {
            outline: none
        }

        #site-root {
            margin: 0 auto;
            min-height: 100%;
            position: relative;
            top: 10px;
        }

        #site-root img:not([src]) {
            visibility: hidden
        }

        #site-root svg img:not([src]) {
            visibility: visible
        }

        .auto-generated-link {
            color: inherit
        }

        #SCROLL_TO_BOTTOM,
        #SCROLL_TO_TOP {
            height: 0
        }

        .has-click-trigger {
            cursor: pointer
        }

        .fullScreenOverlay {
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            overflow-y: hidden;
            position: fixed;
            right: 0;
            top: -60px;
            z-index: 1005
        }

        .fullScreenOverlay>.fullScreenOverlayContent {
            bottom: 0;
            left: 0;
            margin: 0 auto;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 60px;
            transform: translateZ(0)
        }

        [data-mesh-id$=centeredContent],
        [data-mesh-id$=form],
        [data-mesh-id$=inlineContent] {
            pointer-events: none;
            position: relative
        }

        [data-mesh-id$=-gridWrapper],
        [data-mesh-id$=-rotated-wrapper] {
            pointer-events: none
        }

        [data-mesh-id$=-gridContainer]>*,
        [data-mesh-id$=-rotated-wrapper]>*,
        [data-mesh-id$=inlineContent]>:not([data-mesh-id$=-gridContainer]) {
            pointer-events: auto
        }

        .device-mobile-optimized #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID {
            grid-area: 2/1/3/2;
            -ms-grid-row: 2;
            position: relative
        }

        #masterPage.mesh-layout {
            -ms-grid-rows: max-content max-content min-content max-content;
            -ms-grid-columns: 100%;
            align-items: start;
            display: -ms-grid;
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: max-content max-content min-content max-content;
            justify-content: stretch
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #SITE_FOOTER-placeholder,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
        #masterPage.mesh-layout #SITE_HEADER-placeholder,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
        #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            -ms-grid-row-align: start;
            -ms-grid-column-align: start;
            -ms-grid-column: 1
        }

        #masterPage.mesh-layout #SITE_HEADER-placeholder,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER {
            grid-area: 1/1/2/2;
            -ms-grid-row: 1
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            grid-area: 3/1/4/2;
            -ms-grid-row: 3
        }

        #masterPage.mesh-layout #soapAfterPagesContainer,
        #masterPage.mesh-layout #soapBeforePagesContainer {
            width: 100%
        }

        #masterPage.mesh-layout #PAGES_CONTAINER {
            align-self: stretch
        }

        #masterPage.mesh-layout main#PAGES_CONTAINER {
            display: block
        }

        #masterPage.mesh-layout #SITE_FOOTER-placeholder,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER {
            grid-area: 4/1/5/2;
            -ms-grid-row: 4
        }

        #masterPage.mesh-layout #SITE_PAGES,
        #masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERcenteredContent],
        #masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERinlineContent] {
            height: 100%
        }

        #masterPage.mesh-layout.desktop>* {
            width: 100%
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #SITE_FOOTER,
        #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
        #masterPage.mesh-layout #SITE_HEADER,
        #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
        #masterPage.mesh-layout #SITE_PAGES,
        #masterPage.mesh-layout #masterPageinlineContent {
            position: relative
        }

        [data-z-counter] {
            z-index: 0
        }

        [data-z-counter="0"] {
            z-index: auto
        }

        .wixSiteProperties {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
    </style>

    <meta name="format-detection" content="telephone=no">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">






    <!--pageHtmlEmbeds.head start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.head end"></script>
    <!--pageHtmlEmbeds.head end-->


    <!-- head performance data start -->

    <!-- head performance data end -->


    <meta http-equiv="X-Wix-Meta-Site-Id" content="f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7">
    <meta http-equiv="X-Wix-Application-Instance-Id" content="bed0d4ad-2fc4-4f5c-bf69-7224c394f235">

    <meta http-equiv="X-Wix-Published-Version" content="134" />



    <meta http-equiv="etag" content="bug" />

    <!-- render-head end -->

    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap.c7f5f19a.min.css">
        .StylableButton2545352419__root {
            -archetype: box;
            border: none;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 100%;
            min-height: 10px;
            min-width: 10px;
            padding: 0;
            touch-action: manipulation;
            width: 100%
        }

        .StylableButton2545352419__root[disabled] {
            pointer-events: none
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBackgroundColor {
            background-color: var(--corvid-background-color) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderColor {
            border-color: var(--corvid-border-color) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
            border-radius: var(--corvid-border-radius) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
            border-width: var(--corvid-border-width) !important
        }

        .StylableButton2545352419__root.StylableButton2545352419--hasColor,
        .StylableButton2545352419__root.StylableButton2545352419--hasColor .StylableButton2545352419__label {
            color: var(--corvid-color) !important
        }

        .StylableButton2545352419__link {
            -archetype: box;
            box-sizing: border-box;
            color: #000;
            text-decoration: none
        }

        .StylableButton2545352419__container {
            align-items: center;
            display: flex;
            flex-basis: auto;
            flex-direction: row;
            flex-grow: 1;
            height: 100%;
            justify-content: center;
            overflow: hidden;
            transition: all .2s ease, visibility 0s;
            width: 100%
        }

        .StylableButton2545352419__label {
            -archetype: text;
            -controller-part-type: LayoutChildDisplayDropdown, LayoutFlexChildSpacing(first);
            max-width: 100%;
            min-width: 1.8em;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis;
            transition: inherit;
            white-space: nowrap
        }

        .StylableButton2545352419__root.StylableButton2545352419--isMaxContent .StylableButton2545352419__label {
            text-overflow: unset
        }

        .StylableButton2545352419__root.StylableButton2545352419--isWrapText .StylableButton2545352419__label {
            min-width: 10px;
            overflow-wrap: break-word;
            white-space: break-spaces;
            word-break: break-word
        }

        .StylableButton2545352419__icon {
            -archetype: icon;
            -controller-part-type: LayoutChildDisplayDropdown, LayoutFlexChildSpacing(last);
            flex-shrink: 0;
            height: 50px;
            min-width: 1px;
            transition: inherit
        }

        .StylableButton2545352419__icon.StylableButton2545352419--override {
            display: block !important
        }

        .StylableButton2545352419__icon svg,
        .StylableButton2545352419__icon>div {
            display: flex;
            height: inherit;
            width: inherit
        }

        .Vd6aQZ {
            overflow: hidden;
            padding: 0;
            pointer-events: none;
            white-space: nowrap
        }

        .mHZSwn {
            display: none
        }

        .nDEeB0 {
            cursor: pointer
        }

        .lvxhkV {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        .QJjwEo {
            transform: translateY(-100%);
            transition: .2s ease-in
        }

        .kdBXfh {
            transition: .2s
        }

        .MP52zt {
            opacity: 0;
            transition: .2s ease-in
        }

        .MP52zt.Bhu9m5 {
            z-index: -1 !important
        }

        .LVP8Wf {
            opacity: 1;
            transition: .2s
        }

        .VrZrC0 {
            height: auto
        }

        .VrZrC0,
        .cKxVkc {
            position: relative;
            width: 100%
        }

        :host(:not(.device-mobile-optimized)) .vlM3HR,
        body:not(.device-mobile-optimized) .vlM3HR {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width)
        }

        .AT7o0U[data-focuscycled=active] {
            outline: 1px solid transparent
        }

        .AT7o0U[data-focuscycled=active]:not(:focus-within) {
            outline: 2px solid transparent;
            transition: outline .01s ease
        }

        .AT7o0U .vlM3HR {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .WzbAF8 .mpGTIt .O6KwRn {
            display: var(--item-display);
            height: var(--item-size);
            margin: var(--item-margin);
            width: var(--item-size)
        }

        .WzbAF8 .mpGTIt .O6KwRn:last-child {
            margin: 0
        }

        .WzbAF8 .mpGTIt .O6KwRn .oRtuWN {
            display: block
        }

        .WzbAF8 .mpGTIt .O6KwRn .oRtuWN .YaS0jR {
            height: var(--item-size);
            width: var(--item-size)
        }

        .WzbAF8 .mpGTIt {
            height: 100%;
            position: absolute;
            white-space: nowrap;
            width: 100%
        }

        :host(.device-mobile-optimized) .WzbAF8 .mpGTIt,
        body.device-mobile-optimized .WzbAF8 .mpGTIt {
            white-space: normal
        }

        .sNF2R0 {
            opacity: 0
        }

        .hLoBV3 {
            transition: opacity var(--transition-duration) cubic-bezier(.37, 0, .63, 1)
        }

        .Rdf41z,
        .hLoBV3 {
            opacity: 1
        }

        .ftlZWo {
            transition: opacity var(--transition-duration) cubic-bezier(.37, 0, .63, 1)
        }

        .ATGlOr,
        .ftlZWo {
            opacity: 0
        }

        .KQSXD0 {
            transition: opacity var(--transition-duration) cubic-bezier(.64, 0, .78, 0)
        }

        .KQSXD0,
        .pagQKE {
            opacity: 1
        }

        ._6zG5H {
            opacity: 0;
            transition: opacity var(--transition-duration) cubic-bezier(.22, 1, .36, 1)
        }

        .BB49uC {
            transform: translateX(100%)
        }

        .j9xE1V {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .ICs7Rs,
        .j9xE1V {
            transform: translateX(0)
        }

        .DxijZJ {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .B5kjYq,
        .DxijZJ {
            transform: translateX(-100%)
        }

        .cJijIV {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .cJijIV,
        .hOxaWM {
            transform: translateX(0)
        }

        .T9p3fN {
            transform: translateX(100%);
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .qDxYJm {
            transform: translateY(100%)
        }

        .aA9V0P {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .YPXPAS,
        .aA9V0P {
            transform: translateY(0)
        }

        .Xf2zsA {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .Xf2zsA,
        .y7Kt7s {
            transform: translateY(-100%)
        }

        .EeUgMu {
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        .EeUgMu,
        .fdHrtm {
            transform: translateY(0)
        }

        .WIFaG4 {
            transform: translateY(100%);
            transition: transform var(--transition-duration) cubic-bezier(.87, 0, .13, 1)
        }

        body:not(.responsive) .JshATs {
            overflow-x: clip
        }

        [data-view-transition=page-transition] .JshATs {
            view-transition-name: page-group
        }

        .fcNEqv {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: 100%
        }

        .fcNEqv>div {
            align-self: stretch !important;
            justify-self: stretch !important
        }

        .u9k3ts {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .WQ4fSJ {
            cursor: pointer
        }

        .aizuI7 {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            fill: #D1B464;
            fill-opacity: var(--fill-opacity);
            stroke: var(--stroke);
            stroke-opacity: var(--stroke-opacity);
            stroke-width: var(--stroke-width);
            filter: var(--drop-shadow, none);
            opacity: var(--opacity);
            transform: var(--flip)
        }

        .aizuI7,
        .aizuI7 svg {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .aizuI7 svg {
            height: var(--svg-calculated-height, 100%);
            margin: auto;
            padding: var(--svg-calculated-padding, 0);
            width: var(--svg-calculated-width, 100%)
        }

        .TcoJIb * {
            vector-effect: non-scaling-stroke
        }

        .R8rhQA svg,
        .elfY4_ svg {
            overflow: visible !important
        }

        @supports(-webkit-hyphens:none) {
            .aizuI7.elfY4_ {
                will-change: filter
            }
        }

        ol.font_100,
        ul.font_100 {
            color: #080808;
            font-family: "Arial, Helvetica, sans-serif", serif;
            font-size: 10px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-height: normal;
            margin: 0;
            text-decoration: none
        }

        ol.font_100 li,
        ul.font_100 li {
            margin-bottom: 12px
        }

        ol.wix-list-text-align,
        ul.wix-list-text-align {
            list-style-position: inside
        }

        ol.wix-list-text-align h1,
        ol.wix-list-text-align h2,
        ol.wix-list-text-align h3,
        ol.wix-list-text-align h4,
        ol.wix-list-text-align h5,
        ol.wix-list-text-align h6,
        ol.wix-list-text-align p,
        ul.wix-list-text-align h1,
        ul.wix-list-text-align h2,
        ul.wix-list-text-align h3,
        ul.wix-list-text-align h4,
        ul.wix-list-text-align h5,
        ul.wix-list-text-align h6,
        ul.wix-list-text-align p {
            display: inline
        }

        .dZ1L9N {
            cursor: pointer
        }

        .m0paWe {
            clip: rect(0 0 0 0);
            border: 0;
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .tz5f0K [data-attr-richtext-marker=true] {
            display: block
        }

        .tz5f0K [data-attr-richtext-marker=true] table {
            border-collapse: collapse;
            margin: 15px 0;
            width: 100%
        }

        .tz5f0K [data-attr-richtext-marker=true] table td {
            padding: 12px;
            position: relative
        }

        .tz5f0K [data-attr-richtext-marker=true] table td:after {
            border-bottom: 1px solid currentColor;
            border-left: 1px solid currentColor;
            bottom: 0;
            content: "";
            left: 0;
            opacity: .2;
            position: absolute;
            right: 0;
            top: 0
        }

        .tz5f0K [data-attr-richtext-marker=true] table tr td:last-child:after {
            border-right: 1px solid currentColor
        }

        .tz5f0K [data-attr-richtext-marker=true] table tr:first-child td:after {
            border-top: 1px solid currentColor
        }

        .Mpd2QF {
            direction: var(--text-direction);
            min-height: var(--min-height);
            min-width: var(--min-width)
        }

        .Mpd2QF .RpJUy_ {
            word-wrap: break-word;
            height: 100%;
            overflow-wrap: break-word;
            position: relative;
            width: 100%
        }

        .Mpd2QF .RpJUy_ ul {
            list-style: disc inside
        }

        .Mpd2QF .RpJUy_ li {
            margin-bottom: 12px
        }

        .BaOVQ8 blockquote,
        .BaOVQ8 h1,
        .BaOVQ8 h2,
        .BaOVQ8 h3,
        .BaOVQ8 h4,
        .BaOVQ8 h5,
        .BaOVQ8 h6,
        .BaOVQ8 p {
            letter-spacing: normal;
            line-height: normal
        }

        .KriRUO {
            min-height: var(--min-height);
            min-width: var(--min-width)
        }

        .KriRUO .RpJUy_ {
            word-wrap: break-word;
            height: 100%;
            overflow-wrap: break-word;
            position: relative;
            width: 100%
        }

        .KriRUO .RpJUy_ ol,
        .KriRUO .RpJUy_ ul {
            letter-spacing: normal;
            line-height: normal;
            margin-inline-start: .5em;
            padding-inline-start: 1.3em
        }

        .KriRUO .RpJUy_ ul {
            list-style-type: disc
        }

        .KriRUO .RpJUy_ ol {
            list-style-type: decimal
        }

        .KriRUO .RpJUy_ ol ul,
        .KriRUO .RpJUy_ ul ul {
            line-height: normal;
            list-style-type: circle
        }

        .KriRUO .RpJUy_ ol ol ul,
        .KriRUO .RpJUy_ ol ul ul,
        .KriRUO .RpJUy_ ul ol ul,
        .KriRUO .RpJUy_ ul ul ul {
            line-height: normal;
            list-style-type: square
        }

        .KriRUO .RpJUy_ li {
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: normal;
            line-height: inherit
        }

        .KriRUO .RpJUy_ h1,
        .KriRUO .RpJUy_ h2,
        .KriRUO .RpJUy_ h3,
        .KriRUO .RpJUy_ h4,
        .KriRUO .RpJUy_ h5,
        .KriRUO .RpJUy_ h6,
        .KriRUO .RpJUy_ p {
            letter-spacing: normal;
            line-height: normal;
            margin-block: 0;
            margin: 0
        }

        .KriRUO .RpJUy_ a {
            color: inherit
        }

        .BaOVQ8,
        .KcpHeO {
            word-wrap: break-word;
            direction: var(--text-direction);
            min-height: var(--min-height);
            min-width: var(--min-width);
            overflow-wrap: break-word;
            pointer-events: none;
            text-align: start
        }

        .BaOVQ8>*,
        .KcpHeO>* {
            pointer-events: auto
        }

        .BaOVQ8 li,
        .KcpHeO li {
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: normal;
            line-height: inherit
        }

        .BaOVQ8 ol,
        .BaOVQ8 ul,
        .KcpHeO ol,
        .KcpHeO ul {
            letter-spacing: normal;
            line-height: normal;
            margin-inline-end: 0;
            margin-inline-start: .5em;
            padding-inline-end: 0;
            padding-inline-start: 1.3em
        }

        .BaOVQ8 ul,
        .KcpHeO ul {
            list-style-type: disc
        }

        .BaOVQ8 ol,
        .KcpHeO ol {
            list-style-type: decimal
        }

        .BaOVQ8 ol ul,
        .BaOVQ8 ul ul,
        .KcpHeO ol ul,
        .KcpHeO ul ul {
            list-style-type: circle
        }

        .BaOVQ8 ol ol ul,
        .BaOVQ8 ol ul ul,
        .BaOVQ8 ul ol ul,
        .BaOVQ8 ul ul ul,
        .KcpHeO ol ol ul,
        .KcpHeO ol ul ul,
        .KcpHeO ul ol ul,
        .KcpHeO ul ul ul {
            list-style-type: square
        }

        .BaOVQ8 blockquote,
        .BaOVQ8 h1,
        .BaOVQ8 h2,
        .BaOVQ8 h3,
        .BaOVQ8 h4,
        .BaOVQ8 h5,
        .BaOVQ8 h6,
        .BaOVQ8 p,
        .KcpHeO blockquote,
        .KcpHeO h1,
        .KcpHeO h2,
        .KcpHeO h3,
        .KcpHeO h4,
        .KcpHeO h5,
        .KcpHeO h6,
        .KcpHeO p {
            margin-block: 0;
            margin: 0
        }

        .BaOVQ8 a,
        .KcpHeO a {
            color: inherit
        }

        .big2ZD {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: calc(100% - var(--wix-ads-height));
            left: 0;
            margin-top: var(--wix-ads-height);
            position: fixed;
            top: 0;
            width: 100%
        }

        .SHHiV9,
        .big2ZD {
            pointer-events: none;
            z-index: var(--pinned-layer-in-container, var(--above-all-in-container))
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FreemiumBannerResponsive_Studio].a45a32a7.min.css">
        .NI6sSq {
            --display: flex;
            background-color: #fff;
            box-shadow: 0 2px 12px 0 rgba(164, 168, 192, .2);
            box-sizing: border-box;
            display: var(--display);
            justify-content: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: var(--above-all-z-index)
        }

        .NI6sSq.BnG1oB {
            direction: rtl
        }

        .NI6sSq.DV9Swr {
            direction: ltr
        }

        .NI6sSq.rWdkbJ {
            background-color: red;
            border: none
        }

        .NI6sSq>.IoI91y {
            align-items: center;
            display: flex;
            justify-content: center;
            width: 100%
        }

        .NI6sSq>.IoI91y>.ynPdjt {
            align-items: center;
            color: #000;
            display: flex;
            flex-shrink: 0
        }

        .NI6sSq>.IoI91y:hover>.ynPdjt {
            color: #333850
        }

        @font-face {
            font-display: swap;
            font-family: Madefor-Text;
            font-weight: 400;
            src: url(//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforTextVF_W_Wght.woff2) format("woff2-variations"), url(//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff2) format("woff2"), url(//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff) format("woff")
        }

        .IphKed {
            height: 30px;
            padding: 10px
        }

        .IphKed>.BuenfI>.sdxlGI {
            font-family: Madefor-Text, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            gap: 3px;
            line-height: 14px
        }

        .IphKed>.BuenfI>.sdxlGI>.H88SbS {
            height: 9px;
            width: 68px
        }

        .IphKed>.BuenfI:hover>.sdxlGI {
            color: #3910ed
        }

        .IphKed>.BuenfI:hover>.sdxlGI>.H88SbS path {
            fill: #3910ed
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SkipToContentButton].39deac6a.min.css">
        .LHrbPP {
            background: #fff;
            border-radius: 24px;
            color: #116dff;
            cursor: pointer;
            font-family: Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            height: 0;
            left: 50%;
            margin-left: -94px;
            opacity: 0;
            padding: 0 24px 0 24px;
            pointer-events: none;
            position: absolute;
            top: 60px;
            width: 0;
            z-index: 9999
        }

        .LHrbPP:focus {
            border: 2px solid;
            height: 40px;
            opacity: 1;
            pointer-events: auto;
            width: auto
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_SolidLineStudio].99fca456.min.css">
        .JGtLUp {
            border-top: var(--lnw, 2px) solid rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1));
            box-sizing: border-box;
            height: 0
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[VectorImage_VectorButton].a5a2039f.min.css">
        .u9k3ts {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .WQ4fSJ {
            cursor: pointer
        }

        .aizuI7 {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            fill: #D1B464;
            fill-opacity: var(--fill-opacity);
            stroke: var(--stroke);
            stroke-opacity: var(--stroke-opacity);
            stroke-width: var(--stroke-width);
            filter: var(--drop-shadow, none);
            opacity: var(--opacity);
            transform: var(--flip)
        }

        .aizuI7,
        .aizuI7 svg {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .aizuI7 svg {
            height: var(--svg-calculated-height, 100%);
            margin: auto;
            padding: var(--svg-calculated-padding, 0);
            width: var(--svg-calculated-width, 100%)
        }

        .TcoJIb * {
            vector-effect: non-scaling-stroke
        }

        .R8rhQA svg,
        .elfY4_ svg {
            overflow: visible !important
        }

        @supports(-webkit-hyphens:none) {
            .aizuI7.elfY4_ {
                will-change: filter
            }
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[ImageX].8326c3dd.min.css">
        /*! remove when this file is updated or https://github.com/wix/yoshi/issues/2689 is resolved */

        .z4Uj6S {
            position: relative
        }

        .z4Uj6S img,
        .z4Uj6S wix-image {
            display: block;
            height: 100%;
            width: 100%
        }

        .z4Uj6S img {
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100% 100%);
            mask-size: var(--mask-size, 100% 100%);
            opacity: var(--mediaOpacity, 1)
        }

        .z4Uj6S.dEA8pt img {
            -o-object-fit: var(--responsive-img-object-fit);
            object-fit: var(--responsive-img-object-fit)
        }

        .z4Uj6S .L4tPY9 {
            background-color: rgba(var(--backgroundColor, var(--color_8)), var(--alpha-backgroundColor, 1));
            border-color: rgba(var(--borderColor, var(--color_8)), var(--alpha-borderColor, 1));
            border-radius: var(--cornerRadius, 0);
            border-style: solid;
            border-width: var(--borderWidth, 0);
            bottom: 0;
            box-shadow: var(--boxShadow, none);
            box-sizing: border-box;
            left: 0;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 0
        }

        .z4Uj6S .AXsuhY {
            display: block;
            height: 100%;
            width: 100%
        }

        /*! remove when this file is updated or https://github.com/wix/yoshi/issues/2689 is resolved */

        .Byppxy {
            background-color: rgba(var(--backgroundColor, var(--color_8)), var(--alpha-backgroundColor, 1));
            border-color: rgba(var(--borderColor, var(--color_8)), var(--alpha-borderColor, 1));
            border-radius: var(--cornerRadius, 0);
            border-style: solid;
            border-width: var(--borderWidth, 0);
            box-shadow: var(--boxShadow, none);
            box-sizing: border-box;
            overflow: hidden;
            position: relative
        }

        .Byppxy:has(a:focus-visible) {
            outline: 2px solid #116dff !important;
            outline-offset: 1px
        }

        .Byppxy .L4tPY9 {
            bottom: 0;
            left: 0;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 0
        }

        .Byppxy img,
        .Byppxy wix-bg-media wix-image {
            display: block;
            height: 100%;
            width: 100%
        }

        .Byppxy img {
            opacity: var(--mediaOpacity, 1)
        }

        .Byppxy.dEA8pt img {
            -o-object-fit: var(--responsive-img-object-fit);
            object-fit: var(--responsive-img-object-fit)
        }

        .Byppxy .AXsuhY {
            display: block;
            height: 100%;
            width: 100%
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[VerticalLine_VerticalSolidLine].abefcd0b.min.css">
        .RjQ762 .gwzcAr {
            border-left: var(--lnw, 3px) solid rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1));
            height: 100%
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[Slider].f9a13b62.min.css">
        .Slider1827102434__root {
            box-sizing: border-box;
            flex-grow: 1;
            outline: none;
            position: relative;
            z-index: 0
        }

        .Slider1827102434__root * {
            box-sizing: border-box
        }

        .Slider1827102434__inner {
            align-items: center;
            display: flex;
            height: var(--thumbHeight, 0);
            justify-content: center;
            position: relative;
            top: var(--innerTop, auto);
            width: 100%
        }

        .Slider1827102434__track {
            background: var(--trackBackgroundStorybook, rgba(var(--trackBackground, var(--color_26)), var(--alpha-trackBackground, 1)));
            border: 2px solid transparent;
            border-color: var(--trackBorderColorStorybook, rgba(var(--trackBorderColor, var(--color_28)), var(--alpha-trackBorderColor, 1)));
            border-radius: var(--trackBorderRadius, 8px);
            border-width: var(--trackBorderWidth, 7);
            box-shadow: var(--trackBoxShadow, 0 1px 4px rgba(0, 0, 0, .6));
            cursor: pointer;
            direction: var(--trackDirection, inherit);
            height: var(--trackHeight, 25%);
            min-height: 1px;
            overflow: hidden;
            position: relative;
            width: 100%;
            z-index: 0
        }

        .Slider1827102434__root:hover .Slider1827102434__track,
        .Slider1827102434__rootWrapper[data-preview=hover] .Slider1827102434__track {
            background: var(--trackBackgroundHoverStorybook, rgba(var(--trackBackgroundHover, var(--color_27)), var(--alpha-trackBackgroundHover, 1)));
            border-color: var(--trackBorderColorHoverStorybook, rgba(var(--trackBorderColorHover, var(--color_29)), var(--alpha-trackBorderColorHover, 1)));
            border-width: var(--trackBorderWidthHover, 6)
        }

        .Slider1827102434__root:focus .Slider1827102434__track,
        .Slider1827102434__rootWrapper[data-preview=focus] .Slider1827102434__track {
            background: var(--trackBackgroundFocusStorybook, rgba(var(--trackBackgroundFocus, var(--color_28)), var(--alpha-trackBackgroundFocus, 1)));
            border-color: var(--trackBorderColorFocusStorybook, rgba(var(--trackBorderColorFocus, var(--color_30)), var(--alpha-trackBorderColorFocus, 1)));
            border-width: var(--trackBorderWidthFocus, 6)
        }

        .Slider1827102434__root.Slider1827102434--disabled .Slider1827102434__track,
        .Slider1827102434__rootWrapper[data-preview=disabled] .Slider1827102434__track {
            background: var(--trackBackgroundDisabledStorybook, rgba(var(--trackBackgroundDisabled, var(--color_29)), var(--alpha-trackBackgroundDisabled, 1)));
            border-color: var(--trackBorderColorDisabledStorybook, rgba(var(--trackBorderColorDisabled, var(--color_31)), var(--alpha-trackBorderColorDisabled, 1)));
            border-width: var(--trackBorderWidthDisabled, 6)
        }

        .Slider1827102434__trackFill {
            background: var(--trackFillStorybook, rgba(var(--trackFill, var(--color_22)), var(--alpha-trackFill, 1)));
            border-end-end-radius: 0;
            border-radius: var(--trackBorderRadius, 8px);
            border-start-end-radius: 0;
            height: 100%;
            inset-inline: 0;
            position: absolute;
            width: calc(var(--trackFillPercent, 0) * (100% - var(--thumbWidth, 0px)) + var(--thumbWidth, 0px) - 2px)
        }

        .Slider1827102434__root:hover .Slider1827102434__trackFill,
        .Slider1827102434__rootWrapper[data-preview=hover] .Slider1827102434__trackFill {
            background: var(--trackFillHoverStorybook, rgba(var(--trackFillHover, var(--color_23)), var(--alpha-trackFillHover, 1)))
        }

        .Slider1827102434__root:focus .Slider1827102434__trackFill,
        .Slider1827102434__rootWrapper[data-preview=focus] .Slider1827102434__trackFill {
            background: var(--trackFillFocusStorybook, rgba(var(--trackFillFocus, var(--color_24)), var(--alpha-trackFillFocus, 1)))
        }

        .Slider1827102434__root.Slider1827102434--disabled .Slider1827102434__trackFill,
        .Slider1827102434__rootWrapper[data-preview=disabled] .Slider1827102434__trackFill {
            background: var(--trackFillDisabledStorybook, rgba(var(--trackFillDisabled, var(--color_25)), var(--alpha-trackFillDisabled, 1)))
        }

        .Slider1827102434__thumb {
            cursor: pointer;
            direction: var(--trackDirection, inherit);
            height: var(--thumbHeight, 0);
            inset-inline-start: calc(var(--thumbPercent, 0) * (100% - var(--thumbWidth, 0px)));
            position: absolute;
            top: 0;
            width: var(--thumbWidth, 0);
            z-index: 2
        }

        .Slider1827102434__thumbShape {
            background: var(--thumbBackgroundStorybook, rgba(var(--thumbBackground, var(--color_25)), var(--alpha-thumbBackground, 1)));
            border-color: var(--thumbBorderColorStorybook, rgba(var(--thumbBorderColor, var(--color_22)), var(--alpha-thumbBorderColor, 1)));
            border-radius: var(--thumbBorderRadius, 8px);
            border-style: solid;
            border-width: var(--thumbBorderWidth, 4);
            box-shadow: var(--thumbBoxShadow, 0 1px 4px rgba(0, 0, 0, .6));
            height: 100%;
            width: 100%
        }

        .Slider1827102434__root:hover .Slider1827102434__thumbShape,
        .Slider1827102434__rootWrapper[data-preview=hover] .Slider1827102434__thumbShape {
            background: var(--thumbBackgroundHoverStorybook, rgba(var(--thumbBackgroundHover, var(--color_23)), var(--alpha-thumbBackgroundHover, 1)));
            border-color: var(--thumbBorderColorHoverStorybook, rgba(var(--thumbBorderColorHover, var(--color_23)), var(--alpha-thumbBorderColorHover, 1)));
            border-width: var(--thumbBorderWidthHover, 4)
        }

        .Slider1827102434__root:focus .Slider1827102434__thumbShape,
        .Slider1827102434__rootWrapper[data-preview=focus] .Slider1827102434__thumbShape {
            background: var(--thumbBackgroundFocusStorybook, rgba(var(--thumbBackgroundFocus, var(--color_22)), var(--alpha-thumbBackgroundFocus, 1)));
            border-color: var(--thumbBorderColorFocusStorybook, rgba(var(--thumbBorderColorFocus, var(--color_24)), var(--alpha-thumbBorderColorFocus, 1)));
            border-width: var(--thumbBorderWidthFocus, 4)
        }

        .Slider1827102434__root.Slider1827102434--disabled .Slider1827102434__thumbShape,
        .Slider1827102434__rootWrapper[data-preview=disabled] .Slider1827102434__thumbShape {
            background: var(--thumbBackgroundDisabledStorybook, rgba(var(--thumbBackgroundDisabled, var(--color_21)), var(--alpha-thumbBackgroundDisabled, 1)));
            border-color: var(--thumbBorderColorDisabledStorybook, rgba(var(--thumbBorderColorDisabled, var(--color_25)), var(--alpha-thumbBorderColorDisabled, 1)));
            border-width: var(--thumbBorderWidthDisabled, 4)
        }

        .Slider1827102434__tooltip {
            background: var(--tooltipBackgroundStorybook, rgba(var(--tooltipBackground, var(--color_30)), var(--alpha-tooltipBackground, 1)));
            border-radius: var(--tooltipBorderRadius, 2px);
            border-width: 0;
            box-shadow: var(--tooltipBoxShadow, initial);
            color: var(--tooltipFontColorStorybook, rgba(var(--tooltipFontColor, var(--color_1)), var(--alpha-tooltipFontColor, 1)));
            direction: var(--tooltipDirection, inherit);
            font-family: var(--tooltipFontFamily, arial);
            font-size: var(--tooltipFontSize, 14);
            left: 50%;
            line-height: 1.5;
            padding: 4px 12px;
            position: absolute;
            text-align: center;
            white-space: nowrap
        }

        .Slider1827102434__tooltip:after,
        .Slider1827102434__tooltip:before {
            border-style: solid;
            border-width: 8px;
            content: " ";
            left: 50%;
            margin-left: -8px;
            position: absolute
        }

        .Slider1827102434__tooltip:before {
            border-width: 0
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-normal {
            top: -17px;
            transform: translate(-50%, -100%)
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-across {
            bottom: -17px;
            transform: translate(-50%, 100%)
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-normal:after,
        .Slider1827102434__tooltip.Slider1827102434---position-6-normal:before {
            top: 100%
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-across:after,
        .Slider1827102434__tooltip.Slider1827102434---position-6-across:before {
            bottom: 100%
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-normal:after {
            border-color: var(--tooltipBackgroundStorybook, rgba(var(--tooltipBackground, var(--color_30)), var(--alpha-tooltipBackground, 1))) transparent transparent transparent
        }

        .Slider1827102434__tooltip.Slider1827102434---position-6-across:after {
            border-color: transparent transparent var(--tooltipBackgroundStorybook, rgba(var(--tooltipBackground, var(--color_30)), var(--alpha-tooltipBackground, 1))) transparent
        }

        .Slider1827102434__ticksWrapper {
            height: var(--ticksWrapperHeight, auto)
        }

        .Slider1827102434__tick {
            background: var(--tickMarkColorStorybook, rgba(var(--tickMarkColor, var(--color_4)), var(--alpha-tickMarkColor, 1)));
            border-radius: var(--tickBorderRadius, 0);
            bottom: var(--tickBottom, auto);
            cursor: pointer;
            display: inline-block;
            height: var(--tickHeight, auto);
            left: calc(var(--tickLeftPercent, 0) * calc(100% - var(--thumbWidth, 0px)) + var(--thumbWidth, 0px) / 2);
            position: absolute;
            top: var(--tickTop, auto);
            transform: translateX(-50%) translateY(var(--tickTranslateY, 0));
            width: var(--tickWidth, auto)
        }

        .Slider1827102434__rootWrapper {
            --display: flex;
            direction: var(--direction, inherit);
            display: var(--display);
            flex-direction: column;
            text-align: var(--align, inherit)
        }

        .Slider1827102434__label {
            color: rgba(var(--txtlbl, var(--color_15)), var(--alpha-txtlbl, 1));
            direction: var(--labelDirection, inherit);
            display: block;
            font: var(--fntlbl, var(--font_8));
            line-height: 1;
            margin-bottom: var(--labelMarginBottom, 8px);
            padding-inline-end: var(--labelPadding_end, 0);
            padding-inline-start: var(--labelPadding_start, 0);
            text-align: inherit;
            width: auto;
            word-break: break-word
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[TextInput].88d3e655.min.css">
        .KvoMHf.ErucfC[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            margin: 0
        }

        .MpKiNN {
            --display: flex;
            direction: var(--direction);
            display: var(--display);
            flex-direction: column;
            min-height: 25px;
            position: relative;
            text-align: var(--align, start)
        }

        .MpKiNN .pUnTVX {
            height: var(--inputHeight);
            position: relative
        }

        .MpKiNN .eXvLsN {
            align-items: center;
            display: flex;
            font: var(--fntprefix, normal normal normal 16px/1.4em helvetica-w01-roman);
            justify-content: center;
            left: 0;
            max-height: 100%;
            min-height: 100%;
            position: absolute;
            top: 0;
            width: 50px
        }

        .MpKiNN .KvoMHf,
        .MpKiNN .eXvLsN {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15))))
        }

        .MpKiNN .KvoMHf {
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: var(--corvid-background-color, rgba(var(--bg, 255, 255, 255), var(--alpha-bg, 1)));
            border-color: var(--corvid-border-color, rgba(var(--brd, 227, 227, 227), var(--alpha-brd, 1)));
            border-radius: var(--corvid-border-radius, var(--rd, 0));
            border-style: solid;
            border-width: var(--corvid-border-width, var(--brw, 1px));
            box-shadow: var(--shd, 0 0 0 transparent);
            box-sizing: border-box !important;
            direction: var(--inputDirection, "inherit");
            font: var(--fnt, var(--font_8));
            margin: 0;
            max-width: 100%;
            min-height: var(--inputHeight);
            padding: var(--textPadding);
            padding-inline-end: var(--textPadding_end);
            padding-inline-start: var(--textPadding_start);
            text-align: var(--inputAlign, "inherit");
            text-overflow: ellipsis;
            width: 100%
        }

        .MpKiNN .KvoMHf[type=number] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            width: 100%
        }

        .MpKiNN .KvoMHf::-moz-placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .MpKiNN .KvoMHf:-ms-input-placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .MpKiNN .KvoMHf::placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .MpKiNN .KvoMHf:hover {
            background-color: rgba(var(--bgh, 255, 255, 255), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, 163, 217, 246), var(--alpha-brdh, 1));
            border-style: solid;
            border-width: var(--brwh, 1px)
        }

        .MpKiNN .KvoMHf:disabled {
            background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
            border-color: rgba(var(--brdd, 163, 217, 246), var(--alpha-brdd, 1));
            border-style: solid;
            border-width: var(--brwd, 1px);
            color: rgb(var(--txtd, 255, 255, 255))
        }

        .MpKiNN:not(.LyB02C) .KvoMHf:focus {
            background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
            border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
            border-style: solid;
            border-width: var(--brwf, 1px)
        }

        .MpKiNN.LyB02C .KvoMHf:invalid {
            background-color: rgba(var(--bge, 255, 255, 255), var(--alpha-bge, 1));
            border-color: rgba(var(--brde, 163, 217, 246), var(--alpha-brde, 1));
            border-style: solid;
            border-width: var(--brwe, 1px)
        }

        .MpKiNN.LyB02C .KvoMHf:not(:invalid):focus {
            background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
            border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
            border-style: solid;
            border-width: var(--brwf, 1px)
        }

        .MpKiNN .wPeA6j {
            display: none
        }

        .MpKiNN.qzvPmW .wPeA6j {
            color: rgb(var(--txtlbl, var(--color_15)));
            direction: var(--labelDirection, inherit);
            display: inline-block;
            font: var(--fntlbl, var(--font_8));
            line-height: 1;
            margin-bottom: var(--labelMarginBottom);
            padding-inline-end: var(--labelPadding_end);
            padding-inline-start: var(--labelPadding_start);
            text-align: var(--labelAlign, inherit);
            word-break: break-word
        }

        .MpKiNN.qzvPmW.lPl_oN .wPeA6j:after {
            color: rgba(var(--txtlblrq, 0, 0, 0), var(--alpha-txtlblrq, 0));
            content: " *";
            display: var(--requiredIndicationDisplay, none)
        }

        .ZXdXNL {
            --display: flex;
            direction: var(--direction);
            display: var(--display);
            flex-direction: column;
            justify-content: var(--align, start);
            text-align: var(--align, start)
        }

        .ZXdXNL.Bedjyp {
            height: inherit;
            min-height: inherit
        }

        .ZXdXNL .pUnTVX {
            display: flex;
            flex: 1;
            flex-direction: column;
            position: relative
        }

        .ZXdXNL .eXvLsN {
            align-items: center;
            display: flex;
            font: var(--fntprefix, normal normal normal 16px/1.4em helvetica-w01-roman);
            justify-content: center;
            left: 0;
            max-height: 100%;
            position: absolute;
            top: 0;
            width: 50px
        }

        .ZXdXNL .KvoMHf,
        .ZXdXNL .eXvLsN {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15))));
            min-height: 100%
        }

        .ZXdXNL .KvoMHf {
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: var(--corvid-background-color, rgba(var(--bg, 255, 255, 255), var(--alpha-bg, 1)));
            /*border-color: var(--corvid-border-color, rgba(var(--brd, 227, 227, 227), var(--alpha-brd, 1)));*/
            border-radius: var(--corvid-border-radius, var(--rd, 0));
            border-style: solid;
            /*border-width: var(--corvid-border-width, var(--brw, 1px));*/
            border-width: 0;
            box-shadow: var(--shd, 0 0 0 transparent);
            box-sizing: border-box !important;
            direction: var(--inputDirection, "inherit");
            flex: 1;
            font: var(--fnt, var(--font_8));
            margin: 0;
            padding: var(--textPadding);
            padding-inline-end: var(--textPadding_end);
            padding-inline-start: var(--textPadding_start);
            text-align: var(--inputAlign, "inherit");
            text-overflow: ellipsis;
            width: 100%
        }

        .ZXdXNL .KvoMHf[type=number] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield
        }

        .ZXdXNL .KvoMHf::-moz-placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .ZXdXNL .KvoMHf:-ms-input-placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .ZXdXNL .KvoMHf::placeholder {
            color: rgb(var(--txt2, var(--color_15)))
        }

        .ZXdXNL .KvoMHf:hover {
            background-color: rgba(var(--bgh, 255, 255, 255), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, 163, 217, 246), var(--alpha-brdh, 1));
            border-style: solid;
            border-width: var(--brwh, 1px)
        }

        .ZXdXNL .KvoMHf:disabled {
            background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
            border-color: rgba(var(--brdd, 163, 217, 246), var(--alpha-brdd, 1));
            border-style: solid;
            border-width: var(--brwd, 1px);
            color: rgb(var(--txtd, 255, 255, 255))
        }

        .ZXdXNL:not(.LyB02C) .KvoMHf:focus {
            background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
            border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
            border-style: solid;
            border-width: var(--brwf, 1px)
        }

        .ZXdXNL.LyB02C .KvoMHf:invalid {
            background-color: rgba(var(--bge, 255, 255, 255), var(--alpha-bge, 1));
            border-color: rgba(var(--brde, 163, 217, 246), var(--alpha-brde, 1));
            border-style: solid;
            border-width: var(--brwe, 1px)
        }

        .ZXdXNL.LyB02C .KvoMHf:not(:invalid):focus {
            background-color: rgba(var(--bgf, 255, 255, 255), var(--alpha-bgf, 1));
            border-color: rgba(var(--brdf, 163, 217, 246), var(--alpha-brdf, 1));
            border-style: solid;
            border-width: var(--brwf, 1px)
        }

        .ZXdXNL .wPeA6j {
            display: none
        }

        .ZXdXNL.qzvPmW .wPeA6j {
            color: rgb(var(--txtlbl, var(--color_15)));
            direction: var(--labelDirection, inherit);
            display: inline-block;
            font: var(--fntlbl, var(--font_8));
            line-height: 1;
            margin-bottom: var(--labelMarginBottom);
            padding-inline-end: var(--labelPadding_end);
            padding-inline-start: var(--labelPadding_start);
            text-align: var(--labelAlign, inherit);
            word-break: break-word
        }

        .ZXdXNL.qzvPmW.lPl_oN .wPeA6j:after {
            color: rgba(var(--txtlblrq, 0, 0, 0), var(--alpha-txtlblrq, 0));
            content: " *";
            display: var(--requiredIndicationDisplay, none)
        }

        .TLWrjM {
            align-items: center;
            color: rgb(var(--errorTextColor, #ff4040));
            direction: var(--errorDirection);
            display: flex;
            flex-direction: row;
            gap: 4px;
            justify-content: var(--errorAlign, inherit);
            padding: 8px 0 0
        }

        .TLWrjM .GIPQqH {
            flex: none;
            flex-grow: 0;
            order: 0
        }

        .TLWrjM .JNgJbf {
            display: inline-block;
            flex-grow: 0;
            font: var(--errorTextFont, var(--font_8));
            line-height: 1;
            order: 1;
            word-break: break-word
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FiveGridLine_DashedLineStudio].216cd940.min.css">
        .JehXHL {
            border-top: var(--lnw, 2px) dashed rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1));
            box-sizing: border-box;
            height: 0;
            max-height: 5
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SiteButton_WrappingButton].3f2a4469.min.css">
        .zKbzSQ {
            touch-action: manipulation
        }

        .TFOeq0 {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            justify-content: var(--label-align);
            min-width: 100%;
            text-align: initial;
            width: -moz-max-content;
            width: max-content
        }

        .TFOeq0:before {
            max-width: var(--margin-start, 0)
        }

        .TFOeq0:after,
        .TFOeq0:before {
            align-self: stretch;
            content: "";
            flex-grow: 1
        }

        .TFOeq0:after {
            max-width: var(--margin-end, 0)
        }

        .gydiew {
            --display: grid;
            display: var(--display);
            grid-template-columns: minmax(0, 1fr)
        }

        .gydiew .TFOeq0 {
            border-radius: var(--corvid-border-radius, var(--rd, 0));
            box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, .6));
            padding-bottom: var(--verticalPadding, 0);
            padding-left: var(--horizontalPadding, 0);
            padding-right: var(--horizontalPadding, 0);
            padding-top: var(--verticalPadding, 0);
            position: relative;
            transition: var(--trans1, border-color .4s ease 0s, background-color .4s ease 0s);
            width: auto
        }

        .gydiew .TFOeq0:before {
            flex-shrink: 0;
            width: var(--margin-start, 0)
        }

        .gydiew .TFOeq0:after {
            flex-shrink: 0;
            width: var(--margin-end, 0)
        }

        .gydiew .kclxHl {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15))));
            font: var(--fnt, var(--font_5));
            position: relative;
            transition: var(--trans2, color .4s ease 0s)
        }

        .gydiew[aria-disabled=false] .TFOeq0 {
            background-color: var(--corvid-background-color, rgba(var(--bg, var(--color_17)), var(--alpha-bg, 1)));
            border: solid var(--corvid-border-color, rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1))) var(--corvid-border-width, var(--brw, 0));
            cursor: pointer !important
        }

        :host(.device-mobile-optimized) .gydiew[aria-disabled=false]:active .TFOeq0,
        body.device-mobile-optimized .gydiew[aria-disabled=false]:active .TFOeq0 {
            background-color: rgba(var(--bgh, var(--color_18)), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, var(--color_15)), var(--alpha-brdh, 1))
        }

        :host(.device-mobile-optimized) .gydiew[aria-disabled=false]:active .kclxHl,
        body.device-mobile-optimized .gydiew[aria-disabled=false]:active .kclxHl {
            color: rgb(var(--txth, var(--color_15)))
        }

        :host(:not(.device-mobile-optimized)) .gydiew[aria-disabled=false]:hover .TFOeq0,
        body:not(.device-mobile-optimized) .gydiew[aria-disabled=false]:hover .TFOeq0 {
            background-color: rgba(var(--bgh, var(--color_18)), var(--alpha-bgh, 1));
            border-color: rgba(var(--brdh, var(--color_15)), var(--alpha-brdh, 1))
        }

        :host(:not(.device-mobile-optimized)) .gydiew[aria-disabled=false]:hover .kclxHl,
        body:not(.device-mobile-optimized) .gydiew[aria-disabled=false]:hover .kclxHl {
            color: rgb(var(--txth, var(--color_15)))
        }

        .gydiew[aria-disabled=true] .TFOeq0 {
            background-color: rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1));
            border-color: rgba(var(--brdd, 204, 204, 204), var(--alpha-brdd, 1))
        }

        .gydiew[aria-disabled=true] .kclxHl {
            color: rgb(var(--txtd, 255, 255, 255))
        }

        .gydiew .kclxHl {
            text-align: var(--label-text-align)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt_bootstrap-responsive.9ccc3fa4.min.css">
        .R7lArd {
            overflow-x: hidden
        }

        .R7lArd .l9EQj1 {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%
        }

        .R7lArd .l9EQj1 .WNM2rt {
            flex: 1
        }

        .R7lArd .l9EQj1 .DN7syf {
            height: calc(100% - (var(--menuTotalBordersY, 0px)));
            overflow: visible;
            white-space: nowrap;
            width: calc(100% - (var(--menuTotalBordersX, 0px)))
        }

        .R7lArd .l9EQj1 .DN7syf .rqt3qI {
            display: inline-block
        }

        .R7lArd .l9EQj1 .DN7syf .d4jfwp {
            display: block;
            width: 100%
        }

        .R7lArd .JdScD2 {
            display: block;
            opacity: 1;
            z-index: 99999
        }

        .R7lArd .JdScD2 .k8K0Wj {
            display: inherit;
            overflow: visible;
            visibility: inherit;
            white-space: nowrap;
            width: auto
        }

        .R7lArd .JdScD2._3URS4 {
            transition: visibility;
            transition-delay: .2s;
            visibility: visible
        }

        .R7lArd .JdScD2 .iryznZ {
            display: inline-block
        }

        .R7lArd .BKX7vq {
            display: none
        }

        .BSjLjI>nav {
            bottom: 0;
            left: 0;
            right: 0;
            top: 0
        }

        .BSjLjI .DN7syf,
        .BSjLjI .JdScD2,
        .BSjLjI>nav {
            position: absolute
        }

        .BSjLjI .JdScD2 {
            margin-top: 7px;
            visibility: hidden
        }

        .BSjLjI .JdScD2[data-dropMode=dropUp] {
            margin-bottom: 7px;
            margin-top: 0
        }

        .BSjLjI .k8K0Wj {
            background-color: rgba(var(--bgDrop, var(--color_11)), var(--alpha-bgDrop, 1));
            border-radius: var(--rd, 0);
            box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, .6))
        }

        .RfkZFw,
        .vDnwi4 {
            box-sizing: border-box;
            height: 100%;
            overflow: visible;
            position: relative;
            width: auto
        }

        .RfkZFw[data-state~=header] a,
        .RfkZFw[data-state~=header] div,
        [data-state~=header].vDnwi4 a,
        [data-state~=header].vDnwi4 div {
            cursor: default !important
        }

        .RfkZFw .lY3Nwh,
        .vDnwi4 .lY3Nwh {
            display: inline-block;
            height: 100%;
            width: 100%
        }

        .vDnwi4 {
            --display: inline-block;
            cursor: pointer;
            display: var(--display);
            font: var(--fnt, var(--font_1))
        }

        .vDnwi4 .rBTT56 {
            padding: 0 var(--pad, 5px)
        }

        .vDnwi4 .foFAdY {
            color: rgb(var(--txt, var(--color_15)));
            display: inline-block;
            padding: 0 10px;
            transition: var(--trans, color .4s ease 0s)
        }

        .vDnwi4[data-state~=drop] {
            display: block;
            width: 100%
        }

        .vDnwi4[data-state~=drop] .foFAdY {
            padding: 0 .5em
        }

        .vDnwi4[data-state~=link]:hover .foFAdY,
        .vDnwi4[data-state~=over] .foFAdY {
            color: rgb(var(--txth, var(--color_14)));
            transition: var(--trans, color .4s ease 0s)
        }

        .vDnwi4[data-state~=selected] .foFAdY {
            color: rgb(var(--txts, var(--color_14)));
            transition: var(--trans, color .4s ease 0s)
        }

        .P0dCOY .PJ4KCX {
            background-color: rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1));
            bottom: 0;
            left: 0;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 0
        }

        .d7EBK2 {
            border-radius: var(--overflow-wrapper-border-radius)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[RefComponent].d977fc56.min.css">
        .S6Dcte {
            pointer-events: var(--ref-container-pointer-events) !important
        }

        .S6Dcte>* {
            pointer-events: auto
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[Section].f9edef56.min.css">
        .MW5IWV.N3eg0s {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .dLPlxY {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .dLPlxY img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.N3eg0s {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .VgO9Yg {
            height: 100%
        }

        .K_YxMd,
        .yK6aSC {
            opacity: var(--fill-layer-video-opacity)
        }

        .NGjcJN {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .mNGsUM {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .K_YxMd {
            height: 100%;
            position: relative;
            width: 100%
        }

        .O7Ybkb,
        .xuzjBY {
            background-color: rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1))
        }

        .V7OeEw {
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .V7OeEw.BHIo43 {
            transform: var(--scrolled-transform)
        }

        .V7OeEw.UvF1nu {
            opacity: var(--scrolled-opacity)
        }

        .V7OeEw.YzrQFb {
            transition-delay: 0s
        }

        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV.GeNLDt {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .K8pHFh {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .TaweqS {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .TaweqS img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.GeNLDt {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .yzHyNT {
            height: 100%
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .xjgrS3,
        .zBFCpO {
            opacity: var(--fill-layer-video-opacity)
        }

        .b3zSS0 {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .Wsv3ak {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .xjgrS3 {
            height: 100%;
            position: relative;
            width: 100%
        }

        .KJgt14,
        .KJgt14>.MW5IWV .LWbAav {
            background-color: var(--bg-overlay-color, rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1)));
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .VTwcX7.KJgt14,
        .VTwcX7.KJgt14>.MW5IWV .LWbAav {
            background-color: rgba(var(--bg-scrl, var(--color_11)), var(--alpha-bg-scrl, 1))
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .bX9O_S {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        .Z_wCwr,
        .bX9O_S {
            position: absolute;
            top: 0
        }

        .Jxk_UL img,
        .Z_wCwr,
        .bX9O_S {
            height: 100%;
            width: 100%
        }

        .K8MSra {
            opacity: 0
        }

        .K8MSra,
        .YTb3b4 {
            position: absolute;
            top: 0
        }

        .YTb3b4 {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .SUz0WK {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .FNxOn5,
        .SUz0WK,
        .m4khSP {
            height: 100%;
            top: 0;
            width: 100%
        }

        .FNxOn5 {
            position: absolute
        }

        .m4khSP {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .m4khSP {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        .dkukWC {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))
        }

        .dkukWC,
        .dkukWC .FRCqDF {
            left: 0;
            position: absolute;
            width: 100%
        }

        .dkukWC .FRCqDF {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))
        }

        .xnZvZH {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1))
        }

        .xnZvZH .FRCqDF {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none)
        }

        .xnZvZH .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-top-layer-1-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-top-layer-2-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-top-layer-3-display, block)
        }

        .MBOSCN {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none)
        }

        .MBOSCN .FRCqDF {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none)
        }

        .MBOSCN .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-bottom-layer-1-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-bottom-layer-2-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-bottom-layer-3-display, block)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[HeaderSection].f9edef56.min.css">
        .MW5IWV.N3eg0s {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .dLPlxY {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .dLPlxY img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.N3eg0s {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .VgO9Yg {
            height: 100%
        }

        .K_YxMd,
        .yK6aSC {
            opacity: var(--fill-layer-video-opacity)
        }

        .NGjcJN {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .mNGsUM {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .K_YxMd {
            height: 100%;
            position: relative;
            width: 100%
        }

        .O7Ybkb,
        .xuzjBY {
            background-color: rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1))
        }

        .V7OeEw {
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .V7OeEw.BHIo43 {
            transform: var(--scrolled-transform)
        }

        .V7OeEw.UvF1nu {
            opacity: var(--scrolled-opacity)
        }

        .V7OeEw.YzrQFb {
            transition-delay: 0s
        }

        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV.GeNLDt {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .K8pHFh {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .TaweqS {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .TaweqS img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.GeNLDt {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .yzHyNT {
            height: 100%
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .xjgrS3,
        .zBFCpO {
            opacity: var(--fill-layer-video-opacity)
        }

        .b3zSS0 {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .Wsv3ak {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .xjgrS3 {
            height: 100%;
            position: relative;
            width: 100%
        }

        .KJgt14,
        .KJgt14>.MW5IWV .LWbAav {
            background-color: var(--bg-overlay-color, rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1)));
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .VTwcX7.KJgt14,
        .VTwcX7.KJgt14>.MW5IWV .LWbAav {
            background-color: rgba(var(--bg-scrl, var(--color_11)), var(--alpha-bg-scrl, 1))
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .bX9O_S {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        .Z_wCwr,
        .bX9O_S {
            position: absolute;
            top: 0
        }

        .Jxk_UL img,
        .Z_wCwr,
        .bX9O_S {
            height: 100%;
            width: 100%
        }

        .K8MSra {
            opacity: 0
        }

        .K8MSra,
        .YTb3b4 {
            position: absolute;
            top: 0
        }

        .YTb3b4 {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .SUz0WK {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .FNxOn5,
        .SUz0WK,
        .m4khSP {
            height: 100%;
            top: 0;
            width: 100%
        }

        .FNxOn5 {
            position: absolute
        }

        .m4khSP {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .m4khSP {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        .dkukWC {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))
        }

        .dkukWC,
        .dkukWC .FRCqDF {
            left: 0;
            position: absolute;
            width: 100%
        }

        .dkukWC .FRCqDF {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))
        }

        .xnZvZH {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1))
        }

        .xnZvZH .FRCqDF {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none)
        }

        .xnZvZH .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-top-layer-1-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-top-layer-2-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-top-layer-3-display, block)
        }

        .MBOSCN {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none)
        }

        .MBOSCN .FRCqDF {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none)
        }

        .MBOSCN .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-bottom-layer-1-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-bottom-layer-2-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-bottom-layer-3-display, block)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[Container_ResponsiveBox].16b35c7e.min.css">
        .QOX0dS {
            --container-corvid-border-color: rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1));
            --container-corvid-border-size: var(--brw, 1px);
            --container-corvid-background-color: rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1));
            --overflow-wrapper-border-radius: var(--rd)
        }

        .JCRlLH {
            background: none !important;
            border: none !important;
            box-shadow: none !important
        }

        .MAs5Tr {
            background-color: var(--container-corvid-background-color, rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1)));
            border: var(--container-corvid-border-width, var(--brw, 1px)) solid var(--container-corvid-border-color, rgba(var(--brd, var(--color_15)), var(--alpha-brd, 1)));
            border-radius: var(--rd, 5px);
            bottom: 0;
            box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, .6));
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .AG_P7Z {
            bottom: 0 !important;
            height: unset !important;
            left: 0 !important;
            margin: 0 !important;
            max-height: unset !important;
            max-width: unset !important;
            min-height: unset !important;
            min-width: unset !important;
            padding: 0 !important;
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            width: unset !important;
            z-index: unset !important
        }

        .nDEeB0 {
            cursor: pointer
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[FooterSection].f9edef56.min.css">
        .MW5IWV.N3eg0s {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .dLPlxY {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .dLPlxY img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.N3eg0s {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .VgO9Yg {
            height: 100%
        }

        .K_YxMd,
        .yK6aSC {
            opacity: var(--fill-layer-video-opacity)
        }

        .NGjcJN {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .mNGsUM {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .K_YxMd {
            height: 100%;
            position: relative;
            width: 100%
        }

        .O7Ybkb,
        .xuzjBY {
            background-color: rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1))
        }

        .V7OeEw {
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .V7OeEw.BHIo43 {
            transform: var(--scrolled-transform)
        }

        .V7OeEw.UvF1nu {
            opacity: var(--scrolled-opacity)
        }

        .V7OeEw.YzrQFb {
            transition-delay: 0s
        }

        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV.GeNLDt {
            clip: rect(0, auto, auto, 0)
        }

        .MW5IWV .K8pHFh {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%
        }

        .MW5IWV .TaweqS {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity)
        }

        .MW5IWV .TaweqS img {
            height: 100%;
            width: 100%
        }

        @supports(-webkit-hyphens:none) {
            .MW5IWV.GeNLDt {
                clip: auto;
                -webkit-clip-path: inset(0)
            }
        }

        .yzHyNT {
            height: 100%
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
            transition: var(--inherit-transition)
        }

        .xjgrS3,
        .zBFCpO {
            opacity: var(--fill-layer-video-opacity)
        }

        .b3zSS0 {
            bottom: var(--media-padding-bottom);
            height: var(--media-padding-height);
            position: absolute;
            top: var(--media-padding-top);
            width: 100%
        }

        .Wsv3ak {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s)
        }

        .xjgrS3 {
            height: 100%;
            position: relative;
            width: 100%
        }

        .KJgt14,
        .KJgt14>.MW5IWV .LWbAav {
            background-color: var(--bg-overlay-color, rgba(var(--bg, var(--color_11)), var(--alpha-bg, 1)));
            transition-delay: var(--transition-delay);
            transition-duration: var(--transition-duration);
            transition-property: var(--transition-property);
            transition-timing-function: var(--transition-timing-function)
        }

        .VTwcX7.KJgt14,
        .VTwcX7.KJgt14>.MW5IWV .LWbAav {
            background-color: rgba(var(--bg-scrl, var(--color_11)), var(--alpha-bg-scrl, 1))
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%)
        }

        .HlRz5e[data-animate-blur] img {
            filter: blur(9px);
            transition: filter .8s ease-in
        }

        .HlRz5e[data-animate-blur] img[data-load-done] {
            filter: none
        }

        .bX9O_S {
            -webkit-clip-path: var(--fill-layer-clip);
            clip-path: var(--fill-layer-clip)
        }

        .Z_wCwr,
        .bX9O_S {
            position: absolute;
            top: 0
        }

        .Jxk_UL img,
        .Z_wCwr,
        .bX9O_S {
            height: 100%;
            width: 100%
        }

        .K8MSra {
            opacity: 0
        }

        .K8MSra,
        .YTb3b4 {
            position: absolute;
            top: 0
        }

        .YTb3b4 {
            height: 0;
            left: 0;
            overflow: hidden;
            width: 0
        }

        .SUz0WK {
            left: 0;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: var(--fill-layer-background-media-position)
        }

        .FNxOn5,
        .SUz0WK,
        .m4khSP {
            height: 100%;
            top: 0;
            width: 100%
        }

        .FNxOn5 {
            position: absolute
        }

        .m4khSP {
            background-color: var(--fill-layer-background-overlay-color);
            opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
            position: var(--fill-layer-background-overlay-position);
            transform: var(--fill-layer-background-overlay-transform)
        }

        @supports(mix-blend-mode:overlay) {
            .m4khSP {
                mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
                opacity: var(--fill-layer-background-overlay-blend-opacity, 1)
            }
        }

        .dkukWC {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))
        }

        .dkukWC,
        .dkukWC .FRCqDF {
            left: 0;
            position: absolute;
            width: 100%
        }

        .dkukWC .FRCqDF {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))
        }

        .xnZvZH {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1))
        }

        .xnZvZH .FRCqDF {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none)
        }

        .xnZvZH .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-top-layer-1-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-top-layer-2-display, block)
        }

        .xnZvZH .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-top-layer-3-display, block)
        }

        .MBOSCN {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none)
        }

        .MBOSCN .FRCqDF {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none)
        }

        .MBOSCN .FRCqDF[data-divider-layer="1"] {
            display: var(--divider-bottom-layer-1-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="2"] {
            display: var(--divider-bottom-layer-2-display, block)
        }

        .MBOSCN .FRCqDF[data-divider-layer="3"] {
            display: var(--divider-bottom-layer-3-display, block)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[MenuContainer_Responsive].1fd569a2.min.css">
        .KLO7MJ {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            opacity: 0;
            visibility: hidden
        }

        .KLO7MJ.a6BVa5 {
            opacity: 1;
            visibility: visible
        }

        .KLO7MJ[data-undisplayed=true] {
            display: none
        }

        .KLO7MJ:not([data-is-mesh]) .qNR7mP,
        .KLO7MJ:not([data-is-mesh]) .vyb81L {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .oOL4sX {
            background-color: rgba(var(--bg, var(--color_15)), var(--alpha-bg, 1));
            display: initial;
            height: 100%;
            left: 0;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%
        }

        .oOL4sX.AESkWR {
            display: none
        }

        :host(.device-mobile-optimized) .oOL4sX,
        body.device-mobile-optimized .oOL4sX {
            height: 100vh;
            left: calc((100% - var(--screen-width))/2);
            width: var(--screen-width)
        }

        :host(.device-mobile-optimized) .KLO7MJ.AESkWR,
        body.device-mobile-optimized .KLO7MJ.AESkWR {
            left: calc((100% - var(--screen-width))/2)
        }

        :host(.device-mobile-optimized) .KLO7MJ.I2F1wm,
        body.device-mobile-optimized .KLO7MJ.I2F1wm {
            height: 100vh
        }

        :host(:not(.device-mobile-optimized)) .KLO7MJ.I2F1wm,
        body:not(.device-mobile-optimized) .KLO7MJ.I2F1wm {
            height: 100vh
        }

        .asChkN.I2F1wm,
        .asChkN.I2F1wm>:first-child {
            height: calc(var(--menu-height) - var(--wix-ads-height))
        }

        .asChkN.I2F1wm>:first-child {
            margin-top: var(--wix-ads-height)
        }

        .KLO7MJ.I2F1wm {
            top: 0
        }

        .KLO7MJ.nIzsA4 {
            z-index: calc(var(--above-all-z-index) - 1)
        }

        .HKnX4d {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            opacity: 0;
            visibility: hidden
        }

        .HKnX4d.URR62M {
            opacity: 1;
            visibility: visible
        }

        .HKnX4d[data-undisplayed=true] {
            display: none
        }

        .HKnX4d:not([data-is-mesh]) .BDZcgu,
        .HKnX4d:not([data-is-mesh]) .UjpP2K {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .SaGcIp {
            background-color: rgba(var(--bg, var(--color_15)), var(--alpha-bg, 1));
            display: initial;
            height: 100%;
            left: 0;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%
        }

        .SaGcIp.naw_Hj {
            display: none
        }

        :host(.device-mobile-optimized) .SaGcIp,
        body.device-mobile-optimized .SaGcIp {
            height: 100vh;
            left: calc((100% - var(--screen-width))/2);
            width: var(--screen-width)
        }

        :host(.device-mobile-optimized) .HKnX4d.naw_Hj,
        body.device-mobile-optimized .HKnX4d.naw_Hj {
            left: calc((100% - var(--screen-width))/2)
        }

        :host(.device-mobile-optimized) .HKnX4d.Bh1f0N,
        body.device-mobile-optimized .HKnX4d.Bh1f0N {
            height: 100vh
        }

        :host(:not(.device-mobile-optimized)) .HKnX4d.Bh1f0N,
        body:not(.device-mobile-optimized) .HKnX4d.Bh1f0N {
            height: 100vh
        }

        .RcfHS8.Bh1f0N,
        .RcfHS8.Bh1f0N>:first-child {
            height: calc(var(--menu-height) - var(--wix-ads-height))
        }

        .RcfHS8.Bh1f0N>:first-child {
            margin-top: var(--wix-ads-height)
        }

        .HKnX4d.Bh1f0N {
            top: 0
        }

        .AVLx_K {
            background-color: rgba(var(--containerBackground, var(--color_11)), var(--alpha-containerBackground, 1));
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .RcfHS8 {
            height: 100%
        }

        .d7EBK2 {
            border-radius: var(--overflow-wrapper-border-radius)
        }
    </style>
    <style data-href="https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[PageSections].07863b8c.min.css">
        .c1rIl3 {
            display: contents
        }
    </style>
    <style data-href="https://static.parastorage.com/services/wix-thunderbolt/dist/group_7.bae0ce0c.chunk.min.css">
        .TWFxr5 {
            height: auto !important
        }

        .May50y {
            overflow: hidden !important
        }
    </style>
    <link rel="canonical" href="https://abhijithac1603.wixstudio.io/my-site-5" />
    <meta property="og:title" content="Home | My Site 5" />
    <meta property="og:url" content="https://abhijithac1603.wixstudio.io/my-site-5" />
    <meta property="og:site_name" content="My Site 5" />
    <meta property="og:type" content="website" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "https://abhijithac1603.wixstudio.io/my-site-5/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://abhijithac1603.wixstudio.io/my-site-5/search?q={search_term}"
                },
                "query-input": "required name=search_term"
            }
        }
    </script>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Home | My Site 5" />

</head>

<body class='responsive'>
    <script type="text/javascript">
        var bodyCacheable = true;

        var exclusionReason = {
            "shouldRender": true,
            "forced": false
        };
        var ssrInfo = {
            "cacheExclusionReason": "",
            "renderBodyTime": 728,
            "renderTimeStamp": 1706361299330
        }
    </script>





    <!--pageHtmlEmbeds.bodyStart start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
    <!--pageHtmlEmbeds.bodyStart end-->




    <script id="wix-first-paint">
        if (window.ResizeObserver &&
            (!window.PerformanceObserver || !PerformanceObserver.supportedEntryTypes || PerformanceObserver.supportedEntryTypes.indexOf('paint') === -1)) {
            new ResizeObserver(function(entries, observer) {
                entries.some(function(entry) {
                    var contentRect = entry.contentRect;
                    if (contentRect.width > 0 && contentRect.height > 0) {
                        requestAnimationFrame(function(now) {
                            window.wixFirstPaint = now;
                            dispatchEvent(new CustomEvent('wixFirstPaint'));
                        });
                        observer.disconnect();
                        return true;
                    }
                });
            }).observe(document.body);
        }
    </script>



    <script id="scroll-bar-width-calculation">
        const div = document.createElement('div')
        div.style.overflowY = 'scroll'
        div.style.width = '50px'
        div.style.height = '50px'
        div.style.visibility = 'hidden'
        document.body.appendChild(div)
        const scrollbarWidth = div.offsetWidth - div.clientWidth
        document.body.removeChild(div)
        document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)
    </script>




    <pages-css id="pages-css">
        <style id="css_masterPage">
            @font-face {
                font-family: "Madefor-Display-Bold";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforDisplayVF_W_Wght.woff2") format('woff2-variations'), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforDisplay_W_Bd.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforDisplay_W_Bd.woff") format("woff");
                font-weight: 700;
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW01-65Medi";
                font-weight: bold;
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/5b1fbd62-45dc-4433-a7df-a2b24a146411.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/050b1948-f226-4d20-a65a-15d8ed031222.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW02-65Medi";
                font-weight: bold;
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/e535ec76-8fc8-4985-94e6-9246a2c6b245.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/67da9da8-4b53-4407-9184-abce69bfc8b5.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW10-65Medi";
                font-weight: bold;
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/5393f1cf-e069-4466-bb37-f26f99fb4cf7.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/26b8484e-52e3-44ac-b958-865809934ebb.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "DIN-Next-W01-Light";
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix");
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc176270-17fa-4c78-a343-9fe52824e501.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3516f91d-ac48-42cd-acfe-1be691152cc4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d1b1e866-a411-42ba-8f75-72bf28e23694.svg#d1b1e866-a411-42ba-8f75-72bf28e23694") format("svg");
                font-display: swap;
            }

            @font-face {
                font-family: "DIN-Next-W02-Light";
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix");
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/07d62b21-8d7a-4c36-be86-d32ab1089972.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0050890-bbed-44b9-94df-2611d72dbb06.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9f774d17-c03a-418e-a375-34f3beecbc7a.svg#9f774d17-c03a-418e-a375-34f3beecbc7a") format("svg");
                font-display: swap;
            }

            @font-face {
                font-family: "DIN-Next-W10-Light";
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix");
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9e95a29-98a7-404a-90ee-1929ad09c696.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a7663fd-eae8-4e50-a67a-225271f8cceb.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58ae9be9-5d95-44b6-8b6c-e6da6a46822c.svg#58ae9be9-5d95-44b6-8b6c-e6da6a46822c") format("svg");
                font-display: swap;
            }

            @font-face {
                font-family: "Madefor-Text";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforTextVF_W_Wght.woff2") format('woff2-variations'), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff") format("woff");
                font-weight: 400;
                font-display: swap;
            }

            @font-face {
                font-family: "Madefor-Text";
                font-style: italic;
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforTextItalicVF_W_Wght.woff2") format('woff2-variations'), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_It.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_It.woff") format("woff");
                font-weight: 400;
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW01-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/3a46542f-f429-4821-9a88-62e3be54a640.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/50ac1699-f3d2-47b6-878f-67a368a17c41.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW02-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/f20b86ad-a3dc-4459-92b7-456b456d015a.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/ca003289-5ee3-45c2-94ad-36c743c35fc1.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW10-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/198fd78b-3655-4768-89c4-31caf65ea363.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/49631ce8-9201-47a8-8874-45371417c35f.woff") format("woff");
                font-display: swap;
            }

            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus,
            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus~.wixSdkShowFocusOnSibling {
                box-shadow: 0 0 0 1px #ffffff, 0 0 0 3px #116dff !important;
                z-index: 1;
            }

            :root,
            :host,
            .spxThemeOverride {
                --color_0: 255, 255, 255;
                --color_1: 255, 255, 255;
                --color_2: 0, 0, 0;
                --color_3: 237, 28, 36;
                --color_4: 0, 136, 203;
                --color_5: 255, 203, 5;
                --color_6: 114, 114, 114;
                --color_7: 176, 176, 176;
                --color_8: 255, 255, 255;
                --color_9: 114, 114, 114;
                --color_10: 176, 176, 176;
                --color_11: 255, 255, 255;
                --color_12: 238, 238, 238;
                --color_13: 148, 148, 148;
                --color_14: 79, 79, 79;
                --color_15: 0, 0, 0;
                --color_16: 220, 232, 255;
                --color_17: 149, 185, 255;
                --color_18: 26, 106, 255;
                --color_19: 9, 75, 204;
                --color_20: 8, 47, 123;
                --color_21: 243, 248, 240;
                --color_22: 210, 228, 199;
                --color_23: 146, 176, 121;
                --color_24: 97, 135, 65;
                --color_25: 57, 100, 29;
                --color_26: 242, 234, 231;
                --color_27: 229, 206, 192;
                --color_28: 169, 128, 111;
                --color_29: 139, 97, 79;
                --color_30: 99, 60, 43;
                --color_31: 255, 233, 223;
                --color_32: 255, 191, 161;
                --color_33: 250, 133, 79;
                --color_34: 234, 96, 32;
                --color_35: 201, 64, 1;
                --color_36: 255, 255, 255;
                --color_37: 0, 0, 0;
                --color_38: 227, 227, 227;
                --color_39: 151, 151, 151;
                --color_40: 79, 79, 79;
                --color_41: 56, 74, 211;
                --color_42: 0, 0, 0;
                --color_43: 151, 151, 151;
                --color_44: 255, 255, 255;
                --color_45: 0, 0, 0;
                --color_46: 0, 0, 0;
                --color_47: 79, 79, 79;
                --color_48: 56, 74, 211;
                --color_49: 56, 74, 211;
                --color_50: 255, 255, 255;
                --color_51: 255, 255, 255;
                --color_52: 56, 74, 211;
                --color_53: 56, 74, 211;
                --color_54: 151, 151, 151;
                --color_55: 151, 151, 151;
                --color_56: 255, 255, 255;
                --color_57: 255, 255, 255;
                --color_58: 56, 74, 211;
                --color_59: 56, 74, 211;
                --color_60: 56, 74, 211;
                --color_61: 56, 74, 211;
                --color_62: 255, 255, 255;
                --color_63: 255, 255, 255;
                --color_64: 151, 151, 151;
                --color_65: 151, 151, 151;
                --font_0: normal normal normal calc(72 * var(--theme-spx-ratio))/1.2em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_1: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                --font_2: normal normal normal calc(42 * var(--theme-spx-ratio))/1.3em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_3: normal normal normal calc(38 * var(--theme-spx-ratio))/1.3em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_4: normal normal normal calc(34 * var(--theme-spx-ratio))/1.3em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_5: normal normal normal calc(28 * var(--theme-spx-ratio))/1.3em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_6: normal normal normal calc(22 * var(--theme-spx-ratio))/1.4em madefor-display-bold, helveticaneuew01-65medi, helveticaneuew02-65medi, helveticaneuew10-65medi, sans-serif;
                --font_7: normal normal normal calc(18 * var(--theme-spx-ratio))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --font_8: normal normal normal calc(16 * var(--theme-spx-ratio))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --font_9: normal normal normal calc(14 * var(--theme-spx-ratio))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --font_10: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                --font_11: normal normal normal calc(10 * var(--theme-spx-ratio))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --wix-ads-height: 30px;
                --sticky-offset: 30px;
                --wix-ads-top-height: 30px;
                --site-width: 980px;
                --above-all-z-index: 100000;
                --portals-z-index: 100001;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                --minViewportSize: 320;
                --maxViewportSize: 1920;
                --theme-spx-ratio: 0.078125 * var(--one-unit);
            }

            .font_0 {
                font: var(--font_0);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_1 {
                font: var(--font_1);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .font_2 {
                font: var(--font_2);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_3 {
                font: var(--font_3);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_4 {
                font: var(--font_4);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_5 {
                font: var(--font_5);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_6 {
                font: var(--font_6);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_7 {
                font: var(--font_7);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_8 {
                font: var(--font_8);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_9 {
                font: var(--font_9);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_10 {
                font: var(--font_10);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .font_11 {
                font: var(--font_11);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .color_0 {
                color: rgb(var(--color_0));
            }

            .color_1 {
                color: rgb(var(--color_1));
            }

            .color_2 {
                color: rgb(var(--color_2));
            }

            .color_3 {
                color: rgb(var(--color_3));
            }

            .color_4 {
                color: rgb(var(--color_4));
            }

            .color_5 {
                color: rgb(var(--color_5));
            }

            .color_6 {
                color: rgb(var(--color_6));
            }

            .color_7 {
                color: rgb(var(--color_7));
            }

            .color_8 {
                color: rgb(var(--color_8));
            }

            .color_9 {
                color: rgb(var(--color_9));
            }

            .color_10 {
                color: rgb(var(--color_10));
            }

            .color_11 {
                color: rgb(var(--color_11));
            }

            .color_12 {
                color: rgb(var(--color_12));
            }

            .color_13 {
                color: rgb(var(--color_13));
            }

            .color_14 {
                color: rgb(var(--color_14));
            }

            .color_15 {
                color: rgb(var(--color_15));
            }

            .color_16 {
                color: rgb(var(--color_16));
            }

            .color_17 {
                color: rgb(var(--color_17));
            }

            .color_18 {
                color: rgb(var(--color_18));
            }

            .color_19 {
                color: rgb(var(--color_19));
            }

            .color_20 {
                color: rgb(var(--color_20));
            }

            .color_21 {
                color: rgb(var(--color_21));
            }

            .color_22 {
                color: rgb(var(--color_22));
            }

            .color_23 {
                color: rgb(var(--color_23));
            }

            .color_24 {
                color: rgb(var(--color_24));
            }

            .color_25 {
                color: rgb(var(--color_25));
            }

            .color_26 {
                color: rgb(var(--color_26));
            }

            .color_27 {
                color: rgb(var(--color_27));
            }

            .color_28 {
                color: rgb(var(--color_28));
            }

            .color_29 {
                color: rgb(var(--color_29));
            }

            .color_30 {
                color: rgb(var(--color_30));
            }

            .color_31 {
                color: rgb(var(--color_31));
            }

            .color_32 {
                color: rgb(var(--color_32));
            }

            .color_33 {
                color: rgb(var(--color_33));
            }

            .color_34 {
                color: rgb(var(--color_34));
            }

            .color_35 {
                color: rgb(var(--color_35));
            }

            .color_36 {
                color: rgb(var(--color_36));
            }

            .color_37 {
                color: rgb(var(--color_37));
            }

            .color_38 {
                color: rgb(var(--color_38));
            }

            .color_39 {
                color: rgb(var(--color_39));
            }

            .color_40 {
                color: rgb(var(--color_40));
            }

            .color_41 {
                color: rgb(var(--color_41));
            }

            .color_42 {
                color: rgb(var(--color_42));
            }

            .color_43 {
                color: rgb(var(--color_43));
            }

            .color_44 {
                color: rgb(var(--color_44));
            }

            .color_45 {
                color: rgb(var(--color_45));
            }

            .color_46 {
                color: rgb(var(--color_46));
            }

            .color_47 {
                color: rgb(var(--color_47));
            }

            .color_48 {
                color: rgb(var(--color_48));
            }

            .color_49 {
                color: rgb(var(--color_49));
            }

            .color_50 {
                color: rgb(var(--color_50));
            }

            .color_51 {
                color: rgb(var(--color_51));
            }

            .color_52 {
                color: rgb(var(--color_52));
            }

            .color_53 {
                color: rgb(var(--color_53));
            }

            .color_54 {
                color: rgb(var(--color_54));
            }

            .color_55 {
                color: rgb(var(--color_55));
            }

            .color_56 {
                color: rgb(var(--color_56));
            }

            .color_57 {
                color: rgb(var(--color_57));
            }

            .color_58 {
                color: rgb(var(--color_58));
            }

            .color_59 {
                color: rgb(var(--color_59));
            }

            .color_60 {
                color: rgb(var(--color_60));
            }

            .color_61 {
                color: rgb(var(--color_61));
            }

            .color_62 {
                color: rgb(var(--color_62));
            }

            .color_63 {
                color: rgb(var(--color_63));
            }

            .color_64 {
                color: rgb(var(--color_64));
            }

            .color_65 {
                color: rgb(var(--color_65));
            }

            .backcolor_0 {
                background-color: rgb(var(--color_0));
            }

            .backcolor_1 {
                background-color: rgb(var(--color_1));
            }

            .backcolor_2 {
                background-color: rgb(var(--color_2));
            }

            .backcolor_3 {
                background-color: rgb(var(--color_3));
            }

            .backcolor_4 {
                background-color: rgb(var(--color_4));
            }

            .backcolor_5 {
                background-color: rgb(var(--color_5));
            }

            .backcolor_6 {
                background-color: rgb(var(--color_6));
            }

            .backcolor_7 {
                background-color: rgb(var(--color_7));
            }

            .backcolor_8 {
                background-color: rgb(var(--color_8));
            }

            .backcolor_9 {
                background-color: rgb(var(--color_9));
            }

            .backcolor_10 {
                background-color: rgb(var(--color_10));
            }

            .backcolor_11 {
                background-color: rgb(var(--color_11));
            }

            .backcolor_12 {
                background-color: rgb(var(--color_12));
            }

            .backcolor_13 {
                background-color: rgb(var(--color_13));
            }

            .backcolor_14 {
                background-color: rgb(var(--color_14));
            }

            .backcolor_15 {
                background-color: rgb(var(--color_15));
            }

            .backcolor_16 {
                background-color: rgb(var(--color_16));
            }

            .backcolor_17 {
                background-color: rgb(var(--color_17));
            }

            .backcolor_18 {
                background-color: rgb(var(--color_18));
            }

            .backcolor_19 {
                background-color: rgb(var(--color_19));
            }

            .backcolor_20 {
                background-color: rgb(var(--color_20));
            }

            .backcolor_21 {
                background-color: rgb(var(--color_21));
            }

            .backcolor_22 {
                background-color: rgb(var(--color_22));
            }

            .backcolor_23 {
                background-color: rgb(var(--color_23));
            }

            .backcolor_24 {
                background-color: rgb(var(--color_24));
            }

            .backcolor_25 {
                background-color: rgb(var(--color_25));
            }

            .backcolor_26 {
                background-color: rgb(var(--color_26));
            }

            .backcolor_27 {
                background-color: rgb(var(--color_27));
            }

            .backcolor_28 {
                background-color: rgb(var(--color_28));
            }

            .backcolor_29 {
                background-color: rgb(var(--color_29));
            }

            .backcolor_30 {
                background-color: rgb(var(--color_30));
            }

            .backcolor_31 {
                background-color: rgb(var(--color_31));
            }

            .backcolor_32 {
                background-color: rgb(var(--color_32));
            }

            .backcolor_33 {
                background-color: rgb(var(--color_33));
            }

            .backcolor_34 {
                background-color: rgb(var(--color_34));
            }

            .backcolor_35 {
                background-color: rgb(var(--color_35));
            }

            .backcolor_36 {
                background-color: rgb(var(--color_36));
            }

            .backcolor_37 {
                background-color: rgb(var(--color_37));
            }

            .backcolor_38 {
                background-color: rgb(var(--color_38));
            }

            .backcolor_39 {
                background-color: rgb(var(--color_39));
            }

            .backcolor_40 {
                background-color: rgb(var(--color_40));
            }

            .backcolor_41 {
                background-color: rgb(var(--color_41));
            }

            .backcolor_42 {
                background-color: rgb(var(--color_42));
            }

            .backcolor_43 {
                background-color: rgb(var(--color_43));
            }

            .backcolor_44 {
                background-color: rgb(var(--color_44));
            }

            .backcolor_45 {
                background-color: rgb(var(--color_45));
            }

            .backcolor_46 {
                background-color: rgb(var(--color_46));
            }

            .backcolor_47 {
                background-color: rgb(var(--color_47));
            }

            .backcolor_48 {
                background-color: rgb(var(--color_48));
            }

            .backcolor_49 {
                background-color: rgb(var(--color_49));
            }

            .backcolor_50 {
                background-color: rgb(var(--color_50));
            }

            .backcolor_51 {
                background-color: rgb(var(--color_51));
            }

            .backcolor_52 {
                background-color: rgb(var(--color_52));
            }

            .backcolor_53 {
                background-color: rgb(var(--color_53));
            }

            .backcolor_54 {
                background-color: rgb(var(--color_54));
            }

            .backcolor_55 {
                background-color: rgb(var(--color_55));
            }

            .backcolor_56 {
                background-color: rgb(var(--color_56));
            }

            .backcolor_57 {
                background-color: rgb(var(--color_57));
            }

            .backcolor_58 {
                background-color: rgb(var(--color_58));
            }

            .backcolor_59 {
                background-color: rgb(var(--color_59));
            }

            .backcolor_60 {
                background-color: rgb(var(--color_60));
            }

            .backcolor_61 {
                background-color: rgb(var(--color_61));
            }

            .backcolor_62 {
                background-color: rgb(var(--color_62));
            }

            .backcolor_63 {
                background-color: rgb(var(--color_63));
            }

            .backcolor_64 {
                background-color: rgb(var(--color_64));
            }

            .backcolor_65 {
                background-color: rgb(var(--color_65));
            }

            #SITE_PAGES {
                --transition-duration: 0ms
            }

            #BACKGROUND_GROUP {
                --transition-duration: 0ms
            }
        </style>
        <style id="css_c1dmp">
            @font-face {
                font-family: "Madefor-Text";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforTextVF_W_Wght.woff2") format('woff2-variations'), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_Rg.woff") format("woff");
                font-weight: 400;
                font-display: swap;
            }

            @font-face {
                font-family: "Madefor-Text";
                font-style: italic;
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforTextItalicVF_W_Wght.woff2") format('woff2-variations'), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_It.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/WixMadefor/v3/WixMadeforText_W_It.woff") format("woff");
                font-weight: 400;
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW01-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/3a46542f-f429-4821-9a88-62e3be54a640.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/50ac1699-f3d2-47b6-878f-67a368a17c41.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW02-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/f20b86ad-a3dc-4459-92b7-456b456d015a.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/ca003289-5ee3-45c2-94ad-36c743c35fc1.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "HelveticaNeueW10-45Ligh";
                src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/198fd78b-3655-4768-89c4-31caf65ea363.woff2") format("woff2"), url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Helvetica/v2/49631ce8-9201-47a8-8874-45371417c35f.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "Helvetica-W01-Roman";
                src: url("//static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Helvetica/v3/HelveticaLTW04-Roman.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4021a3b9-f782-438b-aeb4-c008109a8b64.woff") format("woff");
                font-display: swap;
            }

            @font-face {
                font-family: "Helvetica-W02-Roman";
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix");
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b56b944e-bbe0-4450-a241-de2125d3e682.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7da02f05-ae8b-43a1-aeb9-83b3c0527c06.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/66cac56e-d017-4544-9d0c-f7d978f0c5c2.svg#66cac56e-d017-4544-9d0c-f7d978f0c5c2") format("svg");
                font-display: swap;
            }

            @font-face {
                font-family: "Helvetica-LT-W10-Roman";
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix");
                src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6f8d1983-4d34-4fa4-9110-988f6c495757.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7903ee3f-e9ab-4bdc-b7d2-d232de2da580.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0.svg#9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0") format("svg");
                font-display: swap;
            }

            #c1dmp {
                height: auto;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #c1dmp .c1dmp-overflow-wrapper {
                position: relative;
                display: grid;
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                overflow-x: clip;
                overflow-y: clip;
            }

            #c1dmp .c1dmp-container {
                position: relative;
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: auto auto auto;
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            #c1dmp:not(.c1dmp-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #c1dmp {
                --bg: var(--color_11);
                --alpha-bg: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea {
                --above-all-in-container: 49;
            }

            #PAGE_SECTIONSc1dmp {
                --above-all-in-container: 49;
            }

            #comp-kbgakxmn {
                --above-all-in-container: 49;
            }

            #comp-kd5px9q0-pinned-layer {
                z-index: 55;
                --above-all-in-container: 10000;
            }

            @media screen and (min-width: 320px) and (max-width: 2147483647px) {
                #comp-kbgakxea {
                    --above-all-in-container: 49;
                }
                #PAGE_SECTIONSc1dmp {
                    --above-all-in-container: 49;
                }
                #comp-kbgakxmn {
                    --above-all-in-container: 49;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-kbgakxea {
                    --above-all-in-container: 49;
                }
                #PAGE_SECTIONSc1dmp {
                    --above-all-in-container: 49;
                }
                #comp-kbgakxmn {
                    --above-all-in-container: 49;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-kbgakxea {
                    --above-all-in-container: 49;
                }
                #PAGE_SECTIONSc1dmp {
                    --above-all-in-container: 49;
                }
                #comp-kbgakxmn {
                    --above-all-in-container: 49;
                }
            }

            #comp-kbgakxea {
                width: auto;
                height: auto;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: 1fr;
                --container-display: grid;
            }

            #comp-kbgakxea:not(.comp-kbgakxea-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #masterPage:not(.landingPage) {
                --top-offset: 0px;
            }

            #masterPage.landingPage {
                --top-offset: 0px;
            }

            #comp-kbgakxea {
                --alpha-bg: 0;
                --bg: var(--color_11);
                --static-spx: 1px;
            }

            #comp-kbgakxea_r_comp-kbgajy18 {
                min-height: 0px;
                height: auto;
                min-width: 0px;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-kbgajy18-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((7.115 * var(--one-unit)) - (var(--scrollbar-width) * 0.07115)), auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-kbgajy18:not(.comp-kbgakxea_r_comp-kbgajy18-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-kbgajy18 {
                --bg: var(--color_11);
                --alpha-bg: 0;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-kkmqi5lg {
                width: 35px;
                height: 35px;
                --l_display: none;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 3%;
                margin-top: 0px;
                margin-bottom: 0px;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-kbgakxea_r_comp-kkmqi5lg {
                    width: 35px;
                    height: 35px;
                    --l_display: unset;
                    margin-right: 2.3427124833997346%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-kbgakxea_r_comp-kkmqi5lg {
                    width: 12px;
                    height: 12px;
                    --l_display: unset;
                    margin-right: 3.466666666666667%;
                }
            }

            #comp-kbgakxea_r_comp-kkmqi5lg {
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrrbapjo {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 6.324110671936759%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 1.8577075098814229%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-kbgakxea_r_comp-lrrbapjo {
                    margin-left: 2.122758964143426%;
                    margin-bottom: 0.0020750332005312084%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-kbgakxea_r_comp-lrrbapjo {
                    margin-left: 2.654166666666667%;
                    margin-bottom: 0%;
                }
            }

            #comp-kbgakxea_r_comp-lrrbapjo {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342sd {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 80%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrs342sd-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((5.534 * var(--one-unit)) - (var(--scrollbar-width) * 0.05534)), auto);
                grid-template-columns: minmax(0px, 1012fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrs342sd {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: 174, 239, 197;
                --rd: clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw) clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw) clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw) clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw);
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342sn {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 33.39920948616601%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: start;
                margin-left: 1.976284584980237%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.0015439723320158103%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrs342sn-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.32 * var(--one-unit)) - (var(--scrollbar-width) * 0.0332)), auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrs342sn {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw);
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrv1tpma {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.1242603550295858;
                min-width: 0px;
                width: 100%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: end;
                justify-self: start;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: -0.004615384615386472%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxea_r_comp-lrv1tpma {
                --errorTextColor: 255, 64, 64;
                --alpha-errorTextColor: 1;
                --errorTextFont: var(--font_8);
                --shd: none;
                --rd: clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw);
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --brw: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bg: 255, 255, 255;
                --txt: 0, 0, 0;
                --alpha-txt: 1;
                --brd: 0, 0, 0;
                --txt2: 157, 157, 157;
                --alpha-txt2: 1;
                --brwh: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgh: 255, 255, 255;
                --brdh: 4, 90, 255;
                --alpha-brdh: 1;
                --brwf: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgf: 255, 255, 255;
                --brdf: 4, 90, 255;
                --alpha-brdf: 1;
                --brwe: 1px;
                --bge: 255, 255, 255;
                --brde: 255, 64, 64;
                --alpha-brde: 1;
                --bgd: 255, 255, 255;
                --txtd: 56, 198, 139;
                --alpha-txtd: 1;
                --brwd: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --brdd: 225, 225, 225;
                --alpha-brdd: 1;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --txtlbl: 0, 0, 0;
                --alpha-txtlbl: 1;
                --txtlblrq: 0, 0, 0;
                --alpha-txtlblrq: 1;
                --fntprefix: normal normal normal 16px/1.4em helvetica-w01-roman, helvetica-w02-roman, helvetica-lt-w10-roman, sans-serif;
                --alpha-bgf: 1;
                --alpha-bgd: 1;
                --alpha-bge: 1;
                --labelMargin: 8spx;
                --inputHeight: 90spx;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 1;
                --boxShadowToggleOn-shd: none;
                --labelPadding: 0spx;
                --textPadding: 12spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342sq1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 14.031620553359684%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: start;
                margin-left: 36.758893280632414%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.0015439723320158103%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrs342sq1-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.32 * var(--one-unit)) - (var(--scrollbar-width) * 0.0332)), auto);
                grid-template-columns: minmax(0px, 142fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrs342sq1 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: 255, 255, 255;
                --rd: clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) 0px 0px clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw);
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342st1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 14.031620553359684%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 34.83201581027668%;
                margin-top: 0%;
                margin-bottom: 0.0015439723320158103%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrs342st1-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.32 * var(--one-unit)) - (var(--scrollbar-width) * 0.0332)), auto);
                grid-template-columns: minmax(0px, 142fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrs342st1 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: 255, 255, 255;
                --rd: 0px clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342sw1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 16.007905138339922%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 17.391304347826086%;
                margin-top: 0%;
                margin-bottom: 0.0015439723320158103%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrs342sw1-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.32 * var(--one-unit)) - (var(--scrollbar-width) * 0.0332)), auto);
                grid-template-columns: minmax(0px, 162fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrs342sw1 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: 255, 255, 255;
                --rd: clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw) clamp(0.5px, calc((0.395 * var(--one-unit)) - (var(--scrollbar-width) * 0.00395)), 100vw);
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrvv1dqf {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 38.27160493827161%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 6.172839506172839%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxea_r_comp-lrvv1dqf {
                --fontWeight: bold;
                --fontSize: 17spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 {
                min-height: 0px;
                --l_display: unset;
                height: 66.69143777212489%;
                min-width: 0px;
                width: 17.28395061728395%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: center;
                margin-left: 6.172839506172839%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.00966049382715662%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            /* END STYLABLE DIRECTIVE RULES */

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root {
                -st-extends: StylableButton;
                transition: all 0.2s ease, visibility 0s;
                background: #FFFFFF;
                padding: 0px;
                border-radius: 300px;
                border: 1px solid #C7C7C7;
                box-shadow: 0.78px 1.84px 8px 1px rgba(0, 0, 0, 0.07)
            }

            /* START STYLABLE DIRECTIVE RULES */

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:hover {
                border: 1px solid #000000;
                background: #000000;
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:hover .StylableButton2545352419__icon {
                transform: rotate(2deg);
                fill: #FFFFFF;
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:hover .StylableButton2545352419__label {
                color: #FFFFFF;
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:disabled {
                border: 0px solid #000000;
                background: #EEEEEE
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:disabled .StylableButton2545352419__label {
                color: #8D8D8D
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root:disabled .StylableButton2545352419__icon {
                fill: #8F8F8F
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root .StylableButton2545352419__container {
                transition: inherit;
                flex-direction: row-reverse;
                justify-content: center;
                align-items: center
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root .StylableButton2545352419__label {
                transition: inherit;
                letter-spacing: 0em;
                margin: 0px 0px 0px 4px;
                color: #000000;
                margin-right: 0px;
                font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                font-size: calc(16 * var(--theme-spx-ratio));
                font-weight: normal;
                font-style: normal;
                font-family: madefor-text;
                font-size: 10px;
                font-style: normal;
                font-weight: normal;
                letter-spacing: 0em;
                line-height: 1.4em;
                font-size: 16px;
                margin-left: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                display: none
            }

            #comp-kbgakxea_r_comp-lrvv6dj4 .comp-kbgakxea_r_comp-lrvv6dj4-styleId__root .StylableButton2545352419__icon {
                transition: inherit;
                margin: 0px 4px 0px 0px;
                fill: #000000;
                margin-left: 0px;
                width: 22px;
                height: 22px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-top: 0px;
                display: initial
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 {
                min-height: 0px;
                --l_display: unset;
                height: 2.1875vw;
                min-width: 0px;
                width: 2.1875vw;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 4.320987654320987%;
                margin-top: 0%;
                margin-bottom: 0.00966049382715662%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            /* END STYLABLE DIRECTIVE RULES */

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root {
                -st-extends: StylableButton;
                transition: all 0.2s ease, visibility 0s;
                background: #FFFFFF;
                padding: 0px;
                border-radius: 300px;
                border: 1px solid #C7C7C7;
                box-shadow: 0.78px 1.84px 8px 1px rgba(0, 0, 0, 0.07)
            }

            /* START STYLABLE DIRECTIVE RULES */

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:hover {
                border: 1px solid #000000;
                background: #000000;
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:hover .StylableButton2545352419__icon {
                transform: rotate(2deg);
                fill: #FFFFFF;
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:hover .StylableButton2545352419__label {
                color: #FFFFFF;
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:disabled {
                border: 0px solid #000000;
                background: #EEEEEE
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:disabled .StylableButton2545352419__label {
                color: #8D8D8D
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root:disabled .StylableButton2545352419__icon {
                fill: #8F8F8F
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root .StylableButton2545352419__container {
                transition: inherit;
                flex-direction: row-reverse;
                justify-content: center;
                align-items: center
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root .StylableButton2545352419__label {
                transition: inherit;
                letter-spacing: 0em;
                margin: 0px 0px 0px 4px;
                color: #000000;
                margin-right: 0px;
                font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                font-size: calc(16 * var(--theme-spx-ratio));
                font-weight: normal;
                font-style: normal;
                font-family: madefor-text;
                font-size: 10px;
                font-style: normal;
                font-weight: normal;
                letter-spacing: 0em;
                line-height: 1.4em;
                font-size: 16px;
                margin-left: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                display: none
            }

            #comp-kbgakxea_r_comp-lrvv8wg2 .comp-kbgakxea_r_comp-lrvv8wg2-styleId__root .StylableButton2545352419__icon {
                transition: inherit;
                margin: 0px 4px 0px 0px;
                fill: #000000;
                margin-left: 0px;
                width: 22px;
                height: 22px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-top: 0px;
                display: initial
            }

            #comp-kbgakxea_r_comp-lrvvo7jc {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 16.666666666666668%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 21.595293209876544%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxea_r_comp-lrvvo7jc-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((2.276 * var(--one-unit)) - (var(--scrollbar-width) * 0.02276)), auto);
                grid-template-columns: minmax(0px, 27fr);
                --container-display: grid;
            }

            #comp-kbgakxea_r_comp-lrvvo7jc {
                --brw: 0px;
                --brd: var(--color_15);
                --bg: var(--color_11);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 0;
                --alpha-bg: 0;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrvveus5 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 44.44444444444444%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: center;
                margin-left: 7.407407407407407%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxea_r_comp-lrvveus5 {
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lrs342sz1 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.29577464788732394;
                min-width: 0px;
                width: 14.031620553359684%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 1.976284584980237%;
                margin-top: 0%;
                margin-bottom: 0.0030879446640316205%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxea_r_comp-lrs342sz1 {
                --rd: clamp(0.5px, calc((0.391 * var(--one-unit)) - (var(--scrollbar-width) * 0.00391)), 100vw) clamp(0.5px, calc((0.391 * var(--one-unit)) - (var(--scrollbar-width) * 0.00391)), 100vw) clamp(0.5px, calc((0.391 * var(--one-unit)) - (var(--scrollbar-width) * 0.00391)), 100vw) clamp(0.5px, calc((0.391 * var(--one-unit)) - (var(--scrollbar-width) * 0.00391)), 100vw);
                --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                --shd: none;
                --horizontalPadding: 0px;
                --verticalPadding: 0px;
                --fnt: normal normal normal calc((1.094 * var(--one-unit)) - (var(--scrollbar-width) * 0.01094))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --trans2: color 0.4s ease 0s;
                --txt: 255, 255, 255;
                --bg: 24, 24, 24;
                --brd: 50, 50, 50;
                --brw: 0px;
                --bgh: 26, 106, 255;
                --brdh: 50, 50, 50;
                --txth: 255, 255, 255;
                --bgd: 238, 238, 238;
                --txtd: 141, 141, 141;
                --alpha-txtd: 1;
                --alpha-txth: 1;
                --margin: 0spx;
                --alpha-bgd: 1;
                --alpha-brdh: 1;
                --align: center;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 1;
                --boxShadowToggleOn-shd: none;
                --alpha-txt: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxea_r_comp-lruw3ml6 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 4.743083003952569%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 2.5827569169960474%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxea_r_comp-lruw3ml6 {
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgaghri {
                min-height: 0px;
                height: auto;
                min-width: 0px;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                grid-area: 2/1/3/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgaghri-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((39.525 * var(--one-unit)) - (var(--scrollbar-width) * 0.39525)), auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                .comp-kbgaghri-container {
                    grid-template-rows: minmax(calc((79.681 * var(--one-unit)) - (var(--scrollbar-width) * 0.79681)), auto);
                }
            }

            #comp-kbgaghri {
                --bg: var(--color_11);
                --alpha-bg: 0;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs3l2b0 {
                min-height: 0px;
                --l_display: unset;
                height: 100.00007500240008%;
                min-width: 0px;
                width: 76.28458498023716%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: end;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.039525691699604744%;
                margin-top: 0%;
                margin-bottom: -0.19518774703557917%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrs3l2b0-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((39.525 * var(--one-unit)) - (var(--scrollbar-width) * 0.39525)), auto);
                grid-template-columns: minmax(0px, 965fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs3l2b0 {
                    height: 100.00012600425391%;
                    width: 100%;
                    justify-self: start;
                    margin-left: -0.016600265604249667%;
                    margin-right: 0%;
                    margin-bottom: -0.19510292164674894%;
                }
                .comp-lrs3l2b0-container {
                    grid-template-columns: minmax(0px, 753.000125fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs3l2b0 {
                    height: 100.00012600425391%;
                    width: 100%;
                }
            }

            #comp-lrs3l2b0 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt4zt89 {
                min-height: 0px;
                --l_display: unset;
                height: 100.00007500240008%;
                min-width: 2px;
                width: auto;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt4zt89 {
                    --l_display: none;
                    height: 100.00007500240008%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt4zt89 {
                    --l_display: none;
                    height: 100.0000750024001%;
                }
            }

            #comp-lrt4zt89 {
                --lnw: 2px;
                --brd: var(--color_15);
                --mrg: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suuu {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 94.81865284974093%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 30px;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
                margin-left: 20px;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2) !important;
            }

            .comp-lrt6suuu-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((21.391 * var(--one-unit)) - (var(--scrollbar-width) * 0.21391)), auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suuu {
                    width: 94.68791500664011%;
                    justify-self: start;
                    margin-left: 2.6726427622841964%;
                    margin-top: 6.588230411686587%;
                }
                .comp-lrt6suuu-container {
                    grid-template-rows: minmax(calc((38.645 * var(--one-unit)) - (var(--scrollbar-width) * 0.38645)), auto);
                    grid-template-columns: minmax(0px, 712.99975fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suuu {
                    width: 94.6879150066401%;
                    justify-self: center;
                    margin-left: 0.02916666666666667%;
                    margin-top: 6.3208333333333355%;
                }
                .comp-lrt6suuu-container {
                    grid-template-rows: minmax(calc((40.267 * var(--one-unit)) - (var(--scrollbar-width) * 0.40267000000000003)), auto);
                    grid-template-columns: minmax(0px, 712.99975fr);
                }
            }

            #comp-lrt6suuu {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_11);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suwt1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 54.989754098360656%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: 1.0058060109289617%;
                margin-top: 1.3114754098360655%;
                margin-bottom: 1.3%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suwt1-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((20.158 * var(--one-unit)) - (var(--scrollbar-width) * 0.20158)), auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suwt1 {
                    height: 78.52941176470588%;
                    width: 97.47545582047685%;
                    align-self: start;
                    justify-self: start;
                    margin-left: 1.2096774193548387%;
                    margin-right: 1.2%;
                    margin-top: 1.6830294530154277%;
                    margin-bottom: 1.7%;
                }
                .comp-lrt6suwt1-container {
                    grid-template-rows: minmax(calc((35.458 * var(--one-unit)) - (var(--scrollbar-width) * 0.35458)), auto);
                    grid-template-columns: minmax(0px, 695fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suwt1 {
                    height: 92.36926076381053%;
                    width: 97.47418172908489%;
                    align-self: center;
                    justify-self: start;
                    margin-left: 1.2057209965134421%;
                    margin-right: 1.2%;
                    margin-top: 0%;
                    margin-bottom: 0%;
                }
                .comp-lrt6suwt1-container {
                    grid-template-rows: minmax(calc((39.338 * var(--one-unit)) - (var(--scrollbar-width) * 0.39338)), auto);
                    grid-template-columns: minmax(0px, 695fr);
                }
            }

            #comp-lrt6suwt1 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6sux3 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 100.00320010240328%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.006200384423824092%;
                margin-top: 11.4913374629227%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6sux3-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((2.371 * var(--one-unit)) - (var(--scrollbar-width) * 0.02371)), auto);
                grid-template-columns: minmax(0px, 500fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sux3 {
                    width: 51.798561151079134%;
                    justify-self: start;
                    margin-left: 0.06744604316546761%;
                    margin-right: 0%;
                    margin-top: 8.257643884892087%;
                }
                .comp-lrt6sux3-container {
                    grid-template-rows: minmax(calc((3.984 * var(--one-unit)) - (var(--scrollbar-width) * 0.03984)), auto);
                    grid-template-columns: minmax(0px, 360fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sux3 {
                    width: 41.9954549919964%;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 0.28881797352856486%;
                    margin-top: 22.179609602755203%;
                }
                .comp-lrt6sux3-container {
                    grid-template-rows: minmax(calc((3.984 * var(--one-unit)) - (var(--scrollbar-width) * 0.03984)), auto);
                    grid-template-columns: minmax(0px, 145.34412500000002fr);
                }
            }

            #comp-lrt6sux3 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 0.35;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suxb1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 100.00320010240328%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: start;
                margin-left: -0.006250200006400204%;
                margin-right: 0%;
                margin-top: 18.091203918525395%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suxb1-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((4.743 * var(--one-unit)) - (var(--scrollbar-width) * 0.04743)), auto);
                grid-template-columns: minmax(0px, 500fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suxb1 {
                    width: 51.798561151079134%;
                    margin-left: -0.017985611510791366%;
                    margin-top: 13.003597122302159%;
                }
                .comp-lrt6suxb1-container {
                    grid-template-rows: minmax(calc((13.015 * var(--one-unit)) - (var(--scrollbar-width) * 0.13015000000000002)), auto);
                    grid-template-columns: minmax(0px, 360fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suxb1 {
                    width: 48.00204808738506%;
                    margin-left: 4.956892192921884%;
                    margin-top: 12.333542323372118%;
                }
                .comp-lrt6suxb1-container {
                    grid-template-rows: minmax(calc((14.133 * var(--one-unit)) - (var(--scrollbar-width) * 0.14132999999999998)), auto);
                    grid-template-columns: minmax(0px, 180.00025fr);
                }
            }

            #comp-lrt6suxb1 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 0.45;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suxj {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 23.4%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: start;
                margin-left: 1.4%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suxj-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.162 * var(--one-unit)) - (var(--scrollbar-width) * 0.03162)), auto);
                grid-template-columns: minmax(0px, 117fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suxj {
                    width: 38.888888888888886%;
                    align-self: start;
                    margin-left: 7.213541666666667%;
                    margin-top: 1.6753472222222223%;
                }
                .comp-lrt6suxj-container {
                    grid-template-rows: minmax(calc((5.312 * var(--one-unit)) - (var(--scrollbar-width) * 0.05312)), auto);
                    grid-template-columns: minmax(0px, 140fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suxj {
                    width: 45.55555555555555%;
                    align-self: start;
                    margin-left: 2.7620968995418846%;
                    margin-top: 2.766419429901106%;
                }
                .comp-lrt6suxj-container {
                    grid-template-rows: minmax(calc((5.333 * var(--one-unit)) - (var(--scrollbar-width) * 0.05333)), auto);
                    grid-template-columns: minmax(0px, 82.000025fr);
                }
            }

            #comp-lrt6suxj {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suxr {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 25.641025641025642%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 4.5539529914529915%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.013376068376111596%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suxr {
                    width: 21.428571428571427%;
                    margin-left: 4.453125%;
                    margin-bottom: 0.011178571428566946%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suxr {
                    width: 19.198573730042245%;
                    margin-left: 3.409746688512711%;
                    margin-bottom: 0.010015255962537727%;
                }
            }

            #comp-lrt6suxr {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suxy1 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 61.53846153846154%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 4.700854700854701%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suxy1 {
                    width: 66.42857142857143%;
                    margin-right: 4.542410714285714%;
                    margin-bottom: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suxy1 {
                    width: 70.73170731707317%;
                    margin-right: 2.419969512195122%;
                    margin-bottom: 0.019085365853650883%;
                }
            }

            #comp-lrt6suxy1 {
                --fontSize: 10spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suxy1 {
                    --fontSize: 11spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suxy1 {
                    --fontSize: 6spx;
                }
            }

            #comp-lrt6suy92 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 23.4%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: start;
                margin-left: 26%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suy92-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.162 * var(--one-unit)) - (var(--scrollbar-width) * 0.03162)), auto);
                grid-template-columns: minmax(0px, 117fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suy92 {
                    width: 38.888888888888886%;
                    align-self: start;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 7.356770833333333%;
                    margin-top: 1.6883680555555556%;
                }
                .comp-lrt6suy92-container {
                    grid-template-rows: minmax(calc((5.312 * var(--one-unit)) - (var(--scrollbar-width) * 0.05312)), auto);
                    grid-template-columns: minmax(0px, 140fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suy92 {
                    width: 45.55555555555555%;
                    align-self: start;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 2.517361111111111%;
                    margin-top: 2.7604166666666665%;
                }
                .comp-lrt6suy92-container {
                    grid-template-rows: minmax(calc((5.333 * var(--one-unit)) - (var(--scrollbar-width) * 0.05333)), auto);
                    grid-template-columns: minmax(0px, 82.000025fr);
                }
            }

            #comp-lrt6suy92 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suyf {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 25.641025641025642%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 4.5539529914529915%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.013376068376111596%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suyf {
                    width: 21.428571428571427%;
                    margin-left: 4.441964285714286%;
                    margin-bottom: 0.011178571428566946%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suyf {
                    width: 19.197392546477914%;
                    margin-left: 3.409536905390087%;
                    margin-bottom: 0.010014639778445005%;
                }
            }

            #comp-lrt6suyf {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suyk1 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 61.53846153846154%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 4.700854700854701%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suyk1 {
                    width: 66.42857142857143%;
                    margin-right: 4.542410714285714%;
                    margin-bottom: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suyk1 {
                    width: 70.73170731707317%;
                    margin-right: 2.419969512195122%;
                    margin-bottom: 0.019085365853650883%;
                }
            }

            #comp-lrt6suyk1 {
                --fontSize: 10spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suyk1 {
                    --fontSize: 11spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suyk1 {
                    --fontSize: 6spx;
                }
            }

            #comp-lrt6suyq1 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 23.4%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 26%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suyq1-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.162 * var(--one-unit)) - (var(--scrollbar-width) * 0.03162)), auto);
                grid-template-columns: minmax(0px, 117fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suyq1 {
                    width: 38.888888888888886%;
                    align-self: start;
                    justify-self: start;
                    margin-left: 7.282986111111111%;
                    margin-right: 0%;
                    margin-top: 14.448784722222221%;
                }
                .comp-lrt6suyq1-container {
                    grid-template-rows: minmax(calc((5.312 * var(--one-unit)) - (var(--scrollbar-width) * 0.05312)), auto);
                    grid-template-columns: minmax(0px, 140fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suyq1 {
                    width: 45.55555555555555%;
                    align-self: start;
                    justify-self: start;
                    margin-left: 2.7690972222222223%;
                    margin-right: 0%;
                    margin-top: 16.571180555555557%;
                }
                .comp-lrt6suyq1-container {
                    grid-template-rows: minmax(calc((5.333 * var(--one-unit)) - (var(--scrollbar-width) * 0.05333)), auto);
                    grid-template-columns: minmax(0px, 82.000025fr);
                }
            }

            #comp-lrt6suyq1 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suyw {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 25.641025641025642%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 4.5539529914529915%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.013376068376111596%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suyw {
                    width: 21.428571428571427%;
                    margin-left: 4.441964285714286%;
                    margin-bottom: 0.011178571428607549%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suyw {
                    width: 19.197392546477914%;
                    margin-left: 3.409536905390087%;
                    margin-bottom: 0.010014639778445005%;
                }
            }

            #comp-lrt6suyw {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suz31 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 61.53846153846154%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 4.700854700854701%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suz31 {
                    width: 66.42857142857143%;
                    margin-right: 4.542410714285714%;
                    margin-bottom: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suz31 {
                    width: 70.73170731707317%;
                    margin-right: 2.419969512195122%;
                    margin-bottom: 0.019085365853650883%;
                }
            }

            #comp-lrt6suz31 {
                --fontSize: 10spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suz31 {
                    --fontSize: 11spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suz31 {
                    --fontSize: 6spx;
                }
            }

            #comp-lrt6suzc2 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 23.4%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 1.4%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suzc2-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.162 * var(--one-unit)) - (var(--scrollbar-width) * 0.03162)), auto);
                grid-template-columns: minmax(0px, 117fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suzc2 {
                    width: 38.888888888888886%;
                    align-self: start;
                    margin-right: 7.191840277777778%;
                    margin-top: 14.444444444444445%;
                }
                .comp-lrt6suzc2-container {
                    grid-template-rows: minmax(calc((5.312 * var(--one-unit)) - (var(--scrollbar-width) * 0.05312)), auto);
                    grid-template-columns: minmax(0px, 140fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suzc2 {
                    width: 45.55555555555555%;
                    align-self: start;
                    margin-right: 2.4172310007524453%;
                    margin-top: 16.506772009029344%;
                }
                .comp-lrt6suzc2-container {
                    grid-template-rows: minmax(calc((5.333 * var(--one-unit)) - (var(--scrollbar-width) * 0.05333)), auto);
                    grid-template-columns: minmax(0px, 82.000025fr);
                }
            }

            #comp-lrt6suzc2 {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suzl {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 76.92307692307692%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suzl {
                    width: 67.85714285714286%;
                    margin-bottom: 0.03350000000003612%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suzl {
                    width: 60.78874720999473%;
                }
            }

            #comp-lrt6suzl {
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suzl {
                    --fontSize: 18spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suzl {
                    --fontSize: 18spx;
                }
            }

            #comp-lrt6suzs3 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.29423415492957744;
                min-width: 0px;
                width: 28.400908829082535%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 42.5201106435406%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suzs3 {
                    --aspect-ratio: 0.2934426229508197;
                    width: 20.571043165467625%;
                    justify-self: end;
                    margin-right: 0%;
                    margin-top: 32.349370503597115%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suzs3 {
                    --aspect-ratio: 0.2952586206896552;
                    width: 18.85325951909019%;
                    justify-self: center;
                    margin-right: 0.004406126393702691%;
                    margin-top: 34.96008482876782%;
                }
            }

            #comp-lrt6suzs3 {
                --rd: 0px 0px 0px 0px;
                --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                --shd: none;
                --horizontalPadding: clamp(0.5px, calc((0.156 * var(--one-unit)) - (var(--scrollbar-width) * 0.00156)), 100vw);
                --verticalPadding: clamp(0.5px, calc((0.156 * var(--one-unit)) - (var(--scrollbar-width) * 0.00156)), 100vw);
                --fnt: normal normal normal calc((1.172 * var(--one-unit)) - (var(--scrollbar-width) * 0.01172))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --trans2: color 0.4s ease 0s;
                --txt: var(--color_11);
                --bg: var(--color_15);
                --brd: var(--color_15);
                --brw: 0px;
                --bgh: var(--color_18);
                --brdh: 50, 50, 50;
                --txth: var(--color_11);
                --bgd: 204, 204, 204;
                --alpha-bgd: 1;
                --txtd: 255, 255, 255;
                --alpha-txtd: 1;
                --alpha-txth: 1;
                --margin: 0spx;
                --alpha-brdh: 0;
                --align: center;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 1;
                --boxShadowToggleOn-shd: none;
                --alpha-txt: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suzs3 {
                    --fnt: normal normal normal calc((1.859 * var(--one-unit)) - (var(--scrollbar-width) * 0.01859))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                }
            }

            #comp-lrt6sv051 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 70.00224007168231%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: end;
                justify-self: start;
                margin-left: -0.003125100003200102%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: -0.06882720247047162%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6sv051-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.32 * var(--one-unit)) - (var(--scrollbar-width) * 0.0332)), auto);
                grid-template-columns: minmax(0px, 350fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv051 {
                    width: 51.798561151079134%;
                    align-self: start;
                    justify-self: start;
                    margin-left: 0.06744604316546761%;
                    margin-right: 0%;
                    margin-top: 32.349370503597115%;
                    margin-bottom: 0%;
                }
                .comp-lrt6sv051-container {
                    grid-template-rows: minmax(calc((5.578 * var(--one-unit)) - (var(--scrollbar-width) * 0.05578)), auto);
                    grid-template-columns: minmax(0px, 360fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv051 {
                    width: 41.923220281195285%;
                    align-self: start;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 0.23012981459597423%;
                    margin-top: 27.186161007081587%;
                    margin-bottom: 0%;
                }
                .comp-lrt6sv051-container {
                    grid-template-rows: minmax(calc((5.578 * var(--one-unit)) - (var(--scrollbar-width) * 0.05578)), auto);
                    grid-template-columns: minmax(0px, 145.09375fr);
                }
            }

            #comp-lrt6sv051 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 0.45;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6sv0b {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 57.142857142857146%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0b {
                    width: 55.833333333333336%;
                    margin-left: 0.018124206926020407%;
                    margin-bottom: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0b {
                    width: 67.62918258390829%;
                    margin-left: 0.021539671178886305%;
                    margin-bottom: -0.032326738505268245%;
                }
            }

            #comp-lrt6sv0b {
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0b {
                    --fontSize: 18spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0b {
                    --fontSize: 18spx;
                }
            }

            #comp-lrt6sv0j1 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 42.857142857142854%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 2.861607142857143%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0j1 {
                    width: 41.94444444444444%;
                    margin-right: 2.2178819444444446%;
                    margin-top: 0%;
                    margin-bottom: 0.004340277777777778%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0j1 {
                    width: 29.915951038637022%;
                    margin-right: 2.423170496367868%;
                    margin-top: 0.07539939625345896%;
                    margin-bottom: 0%;
                }
            }

            #comp-lrt6sv0j1 {
                --textDecoration: none;
                --textAlign: left;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0j1 {
                    --fontSize: 28spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0j1 {
                    --fontSize: 28spx;
                }
            }

            #comp-lrt6sv0r1 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 100.00320010240328%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.0032001024032921855%;
                margin-top: 0.018750600019200616%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0r1 {
                    width: 100.57553956834536%;
                    justify-self: start;
                    margin-left: 0.06744604316546765%;
                    margin-right: 0%;
                    margin-top: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0r1 {
                    width: 57.78776864088947%;
                    justify-self: start;
                    margin-left: 0.051918698388299135%;
                    margin-right: 0%;
                    margin-top: 3.0383725230717666%;
                }
            }

            #comp-lrt6sv0r1 {
                --textDecoration: none;
                --textAlign: left;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0r1 {
                    --textAlign: left;
                    --fontSize: 22spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0r1 {
                    --textAlign: center;
                    --fontSize: 9spx;
                }
            }

            #comp-lrt6sv0x1 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 100%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 0.003125100003200102%;
                margin-right: 0%;
                margin-top: 6.5%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0x1 {
                    width: 100.57553956834536%;
                    margin-left: -0.017985611510791373%;
                    margin-top: 4.431205035971223%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0x1 {
                    width: 57.785264179781514%;
                    margin-left: 0.04966136367576439%;
                    margin-top: 8.203154345351265%;
                }
            }

            #comp-lrt6sv0x1 {
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv0x1 {
                    --fontSize: 16spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv0x1 {
                    --fontSize: 6spx;
                    --textAlign: center;
                }
            }

            #comp-lrt6sv13 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 100.00320010240328%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.0032001024032921855%;
                margin-top: 30.669731431405815%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6sv13-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((2.371 * var(--one-unit)) - (var(--scrollbar-width) * 0.02371)), auto);
                grid-template-columns: minmax(0px, 500fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6sv13 {
                    width: 51.798561151079134%;
                    justify-self: start;
                    margin-left: -0.017985611510791366%;
                    margin-right: 0%;
                    margin-top: 27.535971223021583%;
                }
                .comp-lrt6sv13-container {
                    grid-template-rows: minmax(calc((3.984 * var(--one-unit)) - (var(--scrollbar-width) * 0.03984)), auto);
                    grid-template-columns: minmax(0px, 360.0005fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6sv13 {
                    width: 47.99996532733881%;
                    justify-self: start;
                    margin-left: 4.952592359301231%;
                    margin-right: 0%;
                    margin-top: 28.907428328719945%;
                }
                .comp-lrt6sv13-container {
                    grid-template-rows: minmax(calc((3.984 * var(--one-unit)) - (var(--scrollbar-width) * 0.03984)), auto);
                    grid-template-columns: minmax(0px, 180.00025fr);
                }
            }

            #comp-lrt6sv13 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 0.6;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suvr {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.6763383735185942;
                min-width: 0px;
                width: 41.78620218579235%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 1.0058060109289617%;
                margin-right: 0%;
                margin-top: 1.3114754098360655%;
                margin-bottom: 1.3%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suvr {
                    --aspect-ratio: 0.5159840801129796;
                    width: 44.71269290552469%;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 1.5427769985974755%;
                    margin-top: 9.668653576437588%;
                    margin-bottom: 0%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suvr {
                    --aspect-ratio: 0.5158268733850129;
                    width: 40.87130151684981%;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 1.6633317186646246%;
                    margin-top: 1.689769571756065%;
                    margin-bottom: 0%;
                }
            }

            #comp-lrt6suvr {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suw5 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 14.25204918032787%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: start;
                margin-left: 1.5829918032786885%;
                margin-right: 0%;
                margin-top: 2.6041666666666665%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt6suw5-container {
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((3.153 * var(--one-unit)) - (var(--scrollbar-width) * 0.03153)), auto);
                grid-template-columns: minmax(0px, 129.594fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suw5 {
                    width: 18.2328190743338%;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 2.2966339410939693%;
                    margin-top: 10.700823983169705%;
                }
                .comp-lrt6suw5-container {
                    grid-template-rows: minmax(calc((5.312 * var(--one-unit)) - (var(--scrollbar-width) * 0.05312)), auto);
                    grid-template-columns: minmax(0px, 130.00005fr);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt6suw5 {
                    width: 18.2328190743338%;
                    justify-self: end;
                    margin-left: 0%;
                    margin-right: 2.27939354170069%;
                    margin-top: 2.5302539160409827%;
                }
            }

            #comp-lrt6suw5 {
                --brw: 0px;
                --brd: 151, 151, 151;
                --bg: var(--color_11);
                --rd: calc((78.047 * var(--one-unit)) - (var(--scrollbar-width) * 0.78047)) calc((78.047 * var(--one-unit)) - (var(--scrollbar-width) * 0.78047)) calc((78.047 * var(--one-unit)) - (var(--scrollbar-width) * 0.78047)) calc((78.047 * var(--one-unit)) - (var(--scrollbar-width) * 0.78047));
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6suw9 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 84.89095371127814%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0.011961907113842268%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suw9 {
                    width: 85.38461538461539%;
                    margin-right: 0.005787331103410323%;
                }
            }

            #comp-lrt6suw9 {
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6suw9 {
                    --fontSize: 16spx;
                }
            }

            #comp-lrt73hqt {
                min-height: 0px;
                --l_display: none;
                height: 30.484375px;
                min-width: 0px;
                width: 103.078125px;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 6.656706507304117%;
                margin-right: 0%;
                margin-top: 4.112715803452855%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt73hqt {
                    --l_display: unset;
                    height: 5.080864656390837%;
                    width: 13.688994023904382%;
                    margin-left: 1.344621513944223%;
                    margin-top: 1.263695219123506%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt73hqt {
                    --l_display: unset;
                    height: 3.58974358974359vw;
                    width: 15.384615384615385vw;
                    margin-left: 1.3416666666666666%;
                    margin-top: 1.275%;
                }
            }

            /* END STYLABLE DIRECTIVE RULES */

            #comp-lrt73hqt .style-lrt73hr75__root {
                -st-extends: StylableButton;
                transition: all 0.2s ease, visibility 0s;
                border-radius: 50px;
                background: #000000;
                padding-right: 0px
            }

            /* START STYLABLE DIRECTIVE RULES */

            #comp-lrt73hqt .style-lrt73hr75__root:hover {
                border: 1px solid #000000;
                background: #FFFFFF;
            }

            #comp-lrt73hqt .style-lrt73hr75__root:hover .StylableButton2545352419__icon {
                transform: rotate(2deg);
                fill: #000000;
            }

            #comp-lrt73hqt .style-lrt73hr75__root:hover .StylableButton2545352419__label {
                color: #000000;
            }

            #comp-lrt73hqt .style-lrt73hr75__root:disabled {
                background: #EEEEEE
            }

            #comp-lrt73hqt .style-lrt73hr75__root:disabled .StylableButton2545352419__label {
                color: #8D8D8D
            }

            #comp-lrt73hqt .style-lrt73hr75__root:disabled .StylableButton2545352419__icon {
                fill: #8F8F8F
            }

            #comp-lrt73hqt .style-lrt73hr75__root .StylableButton2545352419__container {
                transition: inherit;
                flex-direction: row-reverse
            }

            #comp-lrt73hqt .style-lrt73hr75__root .StylableButton2545352419__label {
                transition: inherit;
                letter-spacing: 0em;
                display: inherited;
                margin: 0px 0px 0px 4px;
                color: #FFFFFF;
                margin-left: 1px;
                font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                font-size: calc(16 * var(--theme-spx-ratio));
                font-weight: normal;
                font-style: normal;
                font-family: madefor-text;
                font-size: 10px;
                font-style: normal;
                font-weight: normal;
                letter-spacing: 0em;
                line-height: 1.4em;
                font-size: 14px
            }

            #comp-lrt73hqt .style-lrt73hr75__root .StylableButton2545352419__icon {
                transition: inherit;
                display: inherited;
                width: 25px;
                height: 25px;
                margin: 0px 4px 0px 0px;
                fill: #FFFFFF;
                margin-right: 1px
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt73hqt {
                    /* START STYLABLE DIRECTIVE RULES */
                }
                /* END STYLABLE DIRECTIVE RULES */
                #comp-lrt73hqt .style-lrt73hr75__root {
                    background: rgb(26, 106, 255);
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrt73hqt .style-lrt73hr75__root .StylableButton2545352419__icon {
                    display: initial;
                    width: 14px;
                    height: 14px;
                }
                /* END STYLABLE DIRECTIVE RULES */
                /* START STYLABLE DIRECTIVE RULES */
                #comp-lrt73hqt .style-lrt73hr75__root {
                    background: rgb(26, 106, 255);
                }
                #comp-lrt73hqt .style-lrt73hr75__root .StylableButton2545352419__label {
                    font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    font-size: calc(18 * var(--theme-spx-ratio));
                }
            }

            #comp-lrs3clop {
                width: 100%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0.0012351778656126482%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-lrs3clop {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs3kjjt {
                min-height: 0px;
                --comp-display: flex;
                --l_display: unset;
                height: 100.00007500240008%;
                min-width: 0px;
                width: 23.715415019762847%;
                max-width: 99999px;
                max-height: 99999px;
                display: var(--l_display, var(--comp-display, flex));
                flex-direction: column;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                align-self: end;
                justify-self: start;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: -0.17666007905138945%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-lrs3kjjt .comp-lrs3kjjt-overflow-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                overflow-x: hidden;
                overflow-y: scroll;
                --sticky-offset: 0px;
            }

            #comp-lrs3kjjt .comp-lrs3kjjt-container {
                position: relative;
                box-sizing: border-box;
                flex-grow: 1;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((39.56 * var(--one-unit)) - (var(--scrollbar-width) * 0.3956)), auto);
                grid-template-columns: minmax(0px, 300fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs3kjjt {
                    min-height: 599.984375px;
                    --comp-display: grid;
                    grid-template-rows: 1fr;
                    grid-template-columns: minmax(0, 1fr);
                    height: auto;
                    width: 300px;
                    align-self: start;
                    position: sticky;
                    margin-top: 0.2822045152722444%;
                    margin-bottom: -0.28225431606905216%;
                    --is-sticky: 1;
                }
                #comp-lrs3kjjt .comp-lrs3kjjt-overflow-wrapper {
                    position: relative;
                }
                #comp-lrs3kjjt .comp-lrs3kjjt-container {
                    row-gap: 0px;
                    column-gap: 0px;
                    grid-template-rows: minmax(599.984375px, auto);
                    grid-template-columns: minmax(0px, 1fr);
                }
                #comp-lrs3kjjt~* {
                    will-change: opacity;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs3kjjt {
                    min-height: 599.984375px;
                    --comp-display: grid;
                    grid-template-rows: 1fr;
                    grid-template-columns: minmax(0, 1fr);
                    height: auto;
                    width: 300px;
                    align-self: start;
                    position: sticky;
                    margin-top: 0.5458333333333333%;
                    margin-bottom: -0.5459333333333234%;
                    --is-sticky: 1;
                }
                #comp-lrs3kjjt .comp-lrs3kjjt-overflow-wrapper {
                    position: relative;
                }
                #comp-lrs3kjjt~* {
                    will-change: opacity;
                }
            }

            #comp-lrs3kjjt {
                --brw: 0px;
                --brd: var(--color_15);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs47sto {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 72.66666666666667%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 6.666666666666667%;
                margin-right: 0%;
                margin-top: 3.2552083333333335%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs47sto {
                    width: 72.63157894736842%;
                    margin-left: 6.628289473684211%;
                    margin-top: 3.267543859649123%;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs47sto {
                    width: 207px;
                }
            }

            #comp-lrs47sto {
                --textDecoration: none;
                --fontSize: 28spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs47sto {
                    --fontSize: 28spx;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs47sto {
                    --fontSize: 28px;
                }
            }

            #comp-lrs49b83 {
                width: 100%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 18.776041666666668%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs49b83 {
                    margin-top: 18.843201754385966%;
                }
            }

            #comp-lrs49b83 {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs62euv {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 93.33333333333333%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: end;
                justify-self: end;
                margin-left: 0%;
                margin-right: 3.1578947368421053%;
                margin-top: 0%;
                margin-bottom: -43.20171052631578%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62euv {
                    width: 266px;
                    margin-right: 3.212719298245614%;
                    margin-bottom: -8.300570175438583%;
                }
            }

            #comp-lrs62euv {
                --textDecoration: none;
                --textAlign: left;
                --fontSize: 20spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62euv {
                    --fontSize: 20px;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs62euv {
                    --fontSize: 20px;
                }
            }

            #comp-lrs62gg0 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 93.33333333333333%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: 3.3278508771929824%;
                margin-top: 125.89364035087719%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62gg0 {
                    width: 266px;
                    margin-right: 3.31140350877193%;
                    margin-top: 125.93201754385964%;
                }
            }

            #comp-lrs62gg0 {
                --textDecoration: none;
                --textAlign: left;
                --fontSize: 20spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62gg0 {
                    --fontSize: 20px;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs62gg0 {
                    --fontSize: 20px;
                }
            }

            #comp-lrs62i6v {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 93.33333333333333%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 70.65789473684211%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62i6v {
                    width: 266px;
                    margin-top: 70.37280701754386%;
                    margin-bottom: -39099.0297368421%;
                }
            }

            #comp-lrs62i6v {
                --textDecoration: none;
                --textAlign: left;
                --fontSize: 20spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62i6v {
                    --fontSize: 20px;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs62i6v {
                    --fontSize: 20px;
                }
            }

            #comp-lrs62jj4 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 93.33333333333333%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 22.255208333333332%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62jj4 {
                    width: 266px;
                    margin-top: 22.24232456140351%;
                    margin-bottom: -1071.2501315789475%;
                }
            }

            #comp-lrs62jj4 {
                --textDecoration: none;
                --textAlign: left;
                --fontSize: 20spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs62jj4 {
                    --fontSize: 20px;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lrs62jj4 {
                    --fontSize: 20px;
                }
            }

            #comp-lrs6pyfd {
                min-height: 18px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 86.3157894736842%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: 6.842105263157895%;
                margin-top: 96.77083333333333%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6pyfd {
                    min-height: 0px;
                    width: 246px;
                    margin-right: 6.732456140350878%;
                    margin-top: 96.93530701754386%;
                }
            }

            #comp-lrs6pyfd {
                --thumbBackground: 0, 0, 0;
                --alpha-thumbBackground: 1;
                --thumbBorderColor: 65, 65, 65;
                --alpha-thumbBorderColor: 1;
                --thumbBorderWidth: 1px;
                --thumbBoxShadow: none;
                --tickMarkColor: 0, 0, 0;
                --alpha-tickMarkColor: 1;
                --tooltipFontFamily: madefor-text;
                --tooltipFontSize: 14px;
                --tooltipFontColor: var(--color_1);
                --alpha-tooltipFontColor: 1;
                --tooltipBackground: 0, 0, 0;
                --alpha-tooltipBackground: 1;
                --tooltipBorderRadius: 2px;
                --tooltipBoxShadow: none;
                --thumbBackgroundHover: 255, 255, 255;
                --alpha-thumbBackgroundHover: 1;
                --thumbBorderColorHover: 0, 0, 0;
                --thumbBorderWidthHover: 2px;
                --thumbBackgroundFocus: 255, 255, 255;
                --alpha-thumbBackgroundFocus: 1;
                --thumbBorderColorFocus: 0, 0, 0;
                --alpha-thumbBorderColorFocus: 1;
                --thumbBorderWidthFocus: 2px;
                --thumbBackgroundDisabled: 216, 216, 216;
                --alpha-thumbBackgroundDisabled: 1;
                --thumbBorderColorDisabled: 216, 216, 216;
                --alpha-thumbBorderColorDisabled: 1;
                --thumbBorderWidthDisabled: 0px;
                --trackBackground: 199, 199, 199;
                --alpha-trackBackground: 1;
                --trackBorderRadius: 8px;
                --trackBorderColor: 199, 199, 199;
                --alpha-trackBorderColor: 1;
                --trackBorderWidth: 0px;
                --trackBoxShadow: none;
                --trackFill: 0, 0, 0;
                --trackFillHover: 0, 0, 0;
                --trackFillFocus: 0, 0, 0;
                --alpha-trackFillFocus: 1;
                --trackFillDisabled: 216, 216, 216;
                --alpha-trackFillDisabled: 1;
                --trackBackgroundHover: 199, 199, 199;
                --trackBorderColorHover: 0, 0, 0;
                --trackBorderWidthHover: 0px;
                --trackBackgroundFocus: 199, 199, 199;
                --alpha-trackBackgroundFocus: 1;
                --trackBorderColorFocus: 0, 0, 0;
                --alpha-trackBorderColorFocus: 1;
                --trackBorderWidthFocus: 0px;
                --trackBackgroundDisabled: 216, 216, 216;
                --alpha-trackBackgroundDisabled: 1;
                --trackBorderColorDisabled: 216, 216, 216;
                --alpha-trackBorderColorDisabled: 1;
                --trackBorderWidthDisabled: 1px;
                --thumbBorderRadius: 8px;
                --txtlbl: var(--color_15);
                --alpha-txtlbl: 1;
                --fntlbl: normal normal normal 16px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --alpha-trackBorderColorHover: 1;
                --alpha-tooltipBorderColor: 1;
                --boxShadowToggleOn-thumbBoxShadow: none;
                --alpha-trackFill: 1;
                --boxShadowToggleOn-tooltipBoxShadow: none;
                --alpha-trackBackgroundHover: 1;
                --boxShadowToggleOn-trackBoxShadow: none;
                --tooltipBorderWidth: 0;
                --alpha-thumbBorderColorHover: 1;
                --alpha-trackFillHover: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs6pzn0 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.371773097826087;
                min-width: 0px;
                width: 32.280701754385966%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: start;
                margin-left: 3.508771929824561%;
                margin-right: 0%;
                margin-top: 105.91008771929825%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6pzn0 {
                    min-height: 34px;
                    width: 92px;
                    --aspect-ratio: auto;
                    margin-left: 3.4155701754385963%;
                    margin-top: 106.04166666666667%;
                }
            }

            #comp-lrs6pzn0 {
                --errorTextColor: 255, 64, 64;
                --alpha-errorTextColor: 1;
                --errorTextFont: var(--font_8);
                --shd: none;
                --rd: 0px;
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --brw: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bg: 255, 255, 255;
                --txt: 0, 0, 0;
                --alpha-txt: 1;
                --brd: 0, 0, 0;
                --txt2: 157, 157, 157;
                --alpha-txt2: 1;
                --brwh: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgh: 255, 255, 255;
                --brdh: 4, 90, 255;
                --alpha-brdh: 1;
                --brwf: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgf: 255, 255, 255;
                --brdf: 4, 90, 255;
                --alpha-brdf: 1;
                --brwe: 1px;
                --bge: 255, 255, 255;
                --brde: 255, 64, 64;
                --alpha-brde: 1;
                --bgd: 255, 255, 255;
                --txtd: 56, 198, 139;
                --alpha-txtd: 1;
                --brwd: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --brdd: 225, 225, 225;
                --alpha-brdd: 1;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --txtlbl: 0, 0, 0;
                --alpha-txtlbl: 1;
                --txtlblrq: 0, 0, 0;
                --alpha-txtlblrq: 1;
                --fntprefix: normal normal normal 16px/1.4em helvetica-w01-roman, helvetica-w02-roman, helvetica-lt-w10-roman, sans-serif;
                --alpha-bgf: 1;
                --alpha-bgd: 1;
                --alpha-bge: 1;
                --labelMargin: 8spx;
                --inputHeight: 90spx;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 1;
                --boxShadowToggleOn-shd: none;
                --labelPadding: 0spx;
                --textPadding: 12spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6pzn0 {
                    --fnt: normal normal normal 9px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --brw: 0.595px;
                    --brwh: 0.595px;
                    --brwf: 0.595px;
                    --brwd: 0.595px;
                    --fntlbl: normal normal normal 8px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --labelMargin: 4.762px;
                    --inputHeight: 53.573px;
                    --labelPadding: 0px;
                    --textPadding: 7.143px;
                }
            }

            #comp-lrs6q0yq {
                min-height: 2px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 26.666666666666668%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 1.2719298245614035%;
                margin-top: 111.75438596491227%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6q0yq {
                    min-height: 0px;
                    width: 76px;
                    margin-right: 0.7346491228070176%;
                    margin-top: 111.8530701754386%;
                }
            }

            #comp-lrs6q0yq {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs6q1n7 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 0.37143342391304346;
                min-width: 0px;
                width: 32.280701754385966%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                margin-left: 0%;
                margin-right: 4.418859649122807%;
                margin-top: 105.9375%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6q1n7 {
                    min-height: 34px;
                    width: 92px;
                    --aspect-ratio: auto;
                    margin-right: 4.6381578947368425%;
                    margin-top: 106.05811403508773%;
                }
            }

            #comp-lrs6q1n7 {
                --errorTextColor: 255, 64, 64;
                --alpha-errorTextColor: 1;
                --errorTextFont: var(--font_8);
                --shd: none;
                --rd: 0px;
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --brw: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bg: 255, 255, 255;
                --txt: 0, 0, 0;
                --alpha-txt: 1;
                --brd: 0, 0, 0;
                --txt2: 157, 157, 157;
                --alpha-txt2: 1;
                --brwh: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgh: 255, 255, 255;
                --brdh: 4, 90, 255;
                --alpha-brdh: 1;
                --brwf: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --bgf: 255, 255, 255;
                --brdf: 4, 90, 255;
                --alpha-brdf: 1;
                --brwe: 1px;
                --bge: 255, 255, 255;
                --brde: 255, 64, 64;
                --alpha-brde: 1;
                --bgd: 255, 255, 255;
                --txtd: 56, 198, 139;
                --alpha-txtd: 1;
                --brwd: clamp(0.5px, calc((0.079 * var(--one-unit)) - (var(--scrollbar-width) * 0.00079)), 100vw);
                --brdd: 225, 225, 225;
                --alpha-brdd: 1;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --txtlbl: 0, 0, 0;
                --alpha-txtlbl: 1;
                --txtlblrq: 0, 0, 0;
                --alpha-txtlblrq: 1;
                --fntprefix: normal normal normal 16px/1.4em helvetica-w01-roman, helvetica-w02-roman, helvetica-lt-w10-roman, sans-serif;
                --alpha-bgf: 1;
                --alpha-bgd: 1;
                --alpha-bge: 1;
                --labelMargin: 8spx;
                --inputHeight: 90spx;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --alpha-bgh: 1;
                --boxShadowToggleOn-shd: none;
                --labelPadding: 0spx;
                --textPadding: 12spx;
                --static-spx: 0.1 * var(--one-unit);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs6q1n7 {
                    --fnt: normal normal normal 9px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --brw: 0.595px;
                    --brwh: 0.595px;
                    --brwf: 0.595px;
                    --brwd: 0.595px;
                    --fntlbl: normal normal normal 8px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --labelMargin: 4.762px;
                    --inputHeight: 53.573px;
                    --labelPadding: 0px;
                    --textPadding: 7.143px;
                }
            }

            #comp-lrs7izz9 {
                width: 100%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: -457.0121052631579%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs7izz9 {
                    min-height: 0px;
                    height: auto;
                    min-width: 0px;
                    width: 285px;
                    max-width: 99999px;
                    max-height: 99999px;
                    justify-self: start;
                    margin-bottom: -421.5735964912281%;
                }
            }

            #comp-lrs7izz9 {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt55vv4 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 85.96491228070175%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 32.07236842105263%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt55vv4-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((7.905 * var(--one-unit)) - (var(--scrollbar-width) * 0.07905000000000001)), auto);
                grid-template-columns: minmax(0px, 245fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt55vv4 {
                    min-height: 99.984375px;
                    width: 245px;
                    margin-top: 32.088815789473685%;
                }
                .comp-lrt55vv4-container {
                    row-gap: 0px;
                    column-gap: 0px;
                    grid-template-rows: minmax(99.984375px, auto);
                    grid-template-columns: minmax(0px, 1fr);
                }
            }

            #comp-lrt55vv4 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6f6hp {
                width: 80%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: end;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6f6hp {
                    min-height: 0px;
                    height: auto;
                    min-width: 0px;
                    width: 196px;
                    max-width: 99999px;
                    max-height: 99999px;
                }
            }

            #comp-lrt6f6hp {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6f6hp {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1)scaleY(1)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-lrt5ej60 {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 85.96491228070175%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: end;
                justify-self: center;
                margin-left: 0.2850877192982456%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: -30.290526315789464%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt5ej60-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((15.81 * var(--one-unit)) - (var(--scrollbar-width) * 0.15810000000000002)), auto);
                grid-template-columns: minmax(0px, 245fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt5ej60 {
                    min-height: 199.984375px;
                    width: 245px;
                    margin-left: 0.15350877192982457%;
                    margin-bottom: 4.725745614035101%;
                }
                .comp-lrt5ej60-container {
                    row-gap: 0px;
                    column-gap: 0px;
                    grid-template-rows: minmax(199.984375px, auto);
                    grid-template-columns: minmax(0px, 1fr);
                }
            }

            #comp-lrt5ej60 {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6fvlp {
                width: 80%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: end;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6fvlp {
                    min-height: 0px;
                    height: auto;
                    min-width: 0px;
                    width: 196px;
                    max-width: 99999px;
                    max-height: 99999px;
                }
            }

            #comp-lrt6fvlp {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt5l5np {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 85.96491228070175%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: end;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0.3508771929824561%;
                margin-top: 0%;
                margin-bottom: -127.39578947368419%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-lrt5l5np-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((18.972 * var(--one-unit)) - (var(--scrollbar-width) * 0.18972)), auto);
                grid-template-columns: minmax(0px, 245fr);
                --container-display: grid;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt5l5np {
                    min-height: 240px;
                    width: 245px;
                    margin-right: 0.19736842105263158%;
                    margin-bottom: -92.75780701754384%;
                }
                .comp-lrt5l5np-container {
                    row-gap: 0px;
                    column-gap: 0px;
                    grid-template-rows: minmax(240px, auto);
                    grid-template-columns: minmax(0px, 1fr);
                }
            }

            #comp-lrt5l5np {
                --brw: 0px;
                --brd: var(--color_13);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrt6gh22 {
                width: 80%;
                height: 2px;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: end;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lrt6gh22 {
                    min-height: 0px;
                    height: auto;
                    min-width: 0px;
                    width: 196px;
                    max-width: 99999px;
                    max-height: 99999px;
                }
            }

            #comp-lrt6gh22 {
                --brd: var(--color_15);
                --lnw: 2px;
                --alpha-brd: 1;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lruchcey {
                min-height: 0px;
                --l_display: none;
                height: 42px;
                min-width: 0px;
                width: 42px;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: 40%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lruchcey {
                    --l_display: unset;
                    margin-right: 2.1052631578947367%;
                    margin-bottom: 191.58429824561404%;
                }
            }

            /* END STYLABLE DIRECTIVE RULES */

            #comp-lruchcey .style-lruchcfr1__root {
                -st-extends: StylableButton;
                transition: all 0.2s ease, visibility 0s;
                background: #FFFFFF;
                padding: 0px;
                border-radius: 300px;
                border: 1px solid #C7C7C7;
                box-shadow: 0.78px 1.84px 8px 1px rgba(0, 0, 0, 0.07)
            }

            /* START STYLABLE DIRECTIVE RULES */

            #comp-lruchcey .style-lruchcfr1__root:hover {
                border: 1px solid #000000;
                background: #000000;
            }

            #comp-lruchcey .style-lruchcfr1__root:hover .StylableButton2545352419__icon {
                transform: rotate(2deg);
                fill: #FFFFFF;
            }

            #comp-lruchcey .style-lruchcfr1__root:hover .StylableButton2545352419__label {
                color: #FFFFFF;
            }

            #comp-lruchcey .style-lruchcfr1__root:disabled {
                border: 0px solid #000000;
                background: #EEEEEE
            }

            #comp-lruchcey .style-lruchcfr1__root:disabled .StylableButton2545352419__label {
                color: #8D8D8D
            }

            #comp-lruchcey .style-lruchcfr1__root:disabled .StylableButton2545352419__icon {
                fill: #8F8F8F
            }

            #comp-lruchcey .style-lruchcfr1__root .StylableButton2545352419__container {
                transition: inherit;
                flex-direction: row-reverse;
                justify-content: center;
                align-items: center
            }

            #comp-lruchcey .style-lruchcfr1__root .StylableButton2545352419__label {
                transition: inherit;
                letter-spacing: 0em;
                margin: 0px 0px 0px 4px;
                color: #000000;
                margin-right: 0px;
                font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                font-size: calc(16 * var(--theme-spx-ratio));
                font-weight: normal;
                font-style: normal;
                font-family: madefor-text;
                font-size: 10px;
                font-style: normal;
                font-weight: normal;
                letter-spacing: 0em;
                line-height: 1.4em;
                font-size: 16px;
                margin-left: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                display: none
            }

            #comp-lruchcey .style-lruchcfr1__root .StylableButton2545352419__icon {
                transition: inherit;
                margin: 0px 4px 0px 0px;
                fill: #000000;
                margin-left: 0px;
                display: initial;
                width: 22px;
                height: 22px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-top: 0px
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-lruchcey {
                    /* START STYLABLE DIRECTIVE RULES */
                }
                /* END STYLABLE DIRECTIVE RULES */
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-lruchcey {
                    /* START STYLABLE DIRECTIVE RULES */
                }
                /* END STYLABLE DIRECTIVE RULES */
            }

            #comp-kbgakxmn {
                width: auto;
                height: auto;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                grid-area: 3/1/4/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxmn-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: 1fr;
                --container-display: grid;
            }

            #comp-kbgakxmn:not(.comp-kbgakxmn-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxmn {
                --alpha-bg: 0;
                --bg: var(--color_11);
                --static-spx: 1px;
            }

            #comp-kbgakxmn_r_comp-kbgakgyt {
                min-height: 90px;
                height: auto;
                min-width: 0px;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                grid-area: 3/1/4/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kbgakxmn_r_comp-kbgakgyt-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(90px, auto);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxmn_r_comp-kbgakgyt:not(.comp-kbgakxmn_r_comp-kbgakgyt-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #comp-kbgakxmn_r_comp-kbgakgyt {
                --bg: var(--color_11);
                --alpha-bg: 0;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kbgakxmn_r_comp-kd5pdf7t {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 62.5%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: center;
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kbgakxmn_r_comp-kd5pdf7t {
                --textAlign: center;
                --fontSize: 14px;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0 {
                height: auto;
                width: auto;
                --l_display: unset;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: end;
                margin-right: 0px;
                margin-top: 0px;
                grid-area: 1/1/2/2;
                pointer-events: auto;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kd5px9q0-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: 1fr;
                --container-display: grid;
            }

            #comp-kd5px9q0:not(.comp-kd5px9q0-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #comp-kd5px9q0-pinned-layer {
                position: fixed;
                left: 0;
                width: 100%;
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
                top: 0;
                bottom: unset;
                height: calc(100% - var(--wix-ads-height));
                margin-top: var(--wix-ads-height);
            }

            @media screen and (min-width: 320px) and (max-width: 1000px) {
                #comp-kd5px9q0 {
                    align-self: stretch;
                    justify-self: end;
                    margin-left: 0px;
                    margin-bottom: 0px;
                }
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-kd5px9q0 {
                    align-self: stretch;
                    justify-self: stretch;
                    margin-left: 0%;
                    margin-bottom: 0px;
                }
            }

            #comp-kd5px9q0 {
                --alpha-bg: 0;
                --bg: var(--color_11);
                --static-spx: 1px;
            }

            #comp-kd5px9q0_r_comp-kd5px9hr {
                min-height: 100vh;
                height: 100vh;
                min-width: 0px;
                width: 23.4375vw;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: stretch;
                justify-self: stretch;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-kd5px9hr .comp-kd5px9q0_r_comp-kd5px9hr-overflow-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: grid;
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                overflow-x: hidden;
                overflow-y: scroll;
                --sticky-offset: 0px;
                scrollbar-width: none;
                overflow: -moz-scrollbars-none;
                -ms-overflow-style: none;
            }

            #comp-kd5px9q0_r_comp-kd5px9hr .comp-kd5px9q0_r_comp-kd5px9hr-container {
                position: relative;
                box-sizing: border-box;
                row-gap: 0px;
                column-gap: 0px;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(0px, 1fr);
                grid-template-columns: minmax(0px, 1fr);
                --container-display: grid;
            }

            #comp-kd5px9q0_r_comp-kd5px9hr:not(.comp-kd5px9q0_r_comp-kd5px9hr-container) {
                display: var(--l_display, var(--container-display));
                grid-template-rows: 1fr;
                grid-template-columns: minmax(0, 1fr);
                --container-display: grid;
            }

            #comp-kd5px9q0_r_comp-kd5px9hr .comp-kd5px9q0_r_comp-kd5px9hr-overflow-wrapper::-webkit-scrollbar {
                width: 0;
                height: 0;
            }

            @media screen and (min-width: 320px) and (max-width: 750px) {
                #comp-kd5px9q0_r_comp-kd5px9hr {
                    width: 100vw;
                }
                #comp-kd5px9q0_r_comp-kd5px9hr .comp-kd5px9q0_r_comp-kd5px9hr-container {
                    grid-template-columns: minmax(0px, 390fr);
                }
            }

            #comp-kd5px9q0_r_comp-kd5px9hr {
                --containerBackground: var(--color_11);
                --alpha-containerBackground: 1;
                --bg: var(--color_15);
                --alpha-bg: 0.8;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-kkmqi5tc {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 6.666666666666667%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: start;
                justify-self: end;
                position: sticky;
                --top: 0px;
                margin-left: 0%;
                margin-right: 40px;
                margin-top: 40px;
                margin-bottom: 0px;
                grid-area: 1/1/2/2;
                --is-sticky: 1;
            }

            #comp-kd5px9q0_r_comp-kkmqi5tc~* {
                will-change: opacity;
            }

            #comp-kd5px9q0_r_comp-kkmqi5tc {
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv010yh {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 60%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 25vh;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kd5px9q0_r_comp-lrv010yh-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((4.743 * var(--one-unit)) - (var(--scrollbar-width) * 0.04743)), auto);
                grid-template-columns: minmax(0px, 180fr);
                --container-display: grid;
            }

            #comp-kd5px9q0_r_comp-lrv010yh {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv010yh:not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv010yh.comp-kd5px9q0_r_variants-lrv0w2o7,
            #comp-kd5px9q0_r_comp-lrv010yh.comp-kd5px9q0_r_variants-lrv0w2o7> :not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv010yh {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1)scaleY(1)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv010yh.comp-kd5px9q0_r_variants-lrv0w2o7 {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1.05)scaleY(1.05)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv02t90 {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 22.22222222222222%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 16.666666666666668%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.008694444444472538%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv02t90 {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv0339y {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 55.55555555555556%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.008680555555555556%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv0339y {
                --fontWeight: bold;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv05k5x {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 60%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 40vh;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kd5px9q0_r_comp-lrv05k5x-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((4.743 * var(--one-unit)) - (var(--scrollbar-width) * 0.04743)), auto);
                grid-template-columns: minmax(0px, 180fr);
                --container-display: grid;
            }

            #comp-kd5px9q0_r_comp-lrv05k5x {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv05k5x:not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv05k5x.comp-kd5px9q0_r_variants-lrv0yy1t,
            #comp-kd5px9q0_r_comp-lrv05k5x.comp-kd5px9q0_r_variants-lrv0yy1t> :not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv05k5x {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1)scaleY(1)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv05k5x.comp-kd5px9q0_r_variants-lrv0yy1t {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1.05)scaleY(1.05)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv08guw {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 55.55555555555556%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.008680555555555556%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv08guw {
                --fontWeight: bold;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv092mu {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 22.22222222222222%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 16.666666666666668%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.008694444444472538%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv092mu {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv0651l {
                min-height: 0px;
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 60%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                align-self: start;
                justify-self: center;
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 55vh;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            .comp-kd5px9q0_r_comp-lrv0651l-container {
                box-sizing: border-box;
                display: var(--l_display, var(--container-display));
                grid-template-rows: minmax(calc((4.743 * var(--one-unit)) - (var(--scrollbar-width) * 0.04743)), auto);
                grid-template-columns: minmax(0px, 180fr);
                --container-display: grid;
            }

            #comp-kd5px9q0_r_comp-lrv0651l {
                --brw: 0px;
                --brd: var(--color_13);
                --bg: var(--color_12);
                --rd: 0px;
                --shd: none;
                --alpha-brd: 1;
                --alpha-bg: 1;
                --boxShadowToggleOn-shd: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv0651l:not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv0651l.comp-kd5px9q0_r_variants-lrv0z963,
            #comp-kd5px9q0_r_comp-lrv0651l.comp-kd5px9q0_r_variants-lrv0z963> :not(.is-animating) {
                transition: all 0.3s ease-in-out 0s, visibility 0s;
                --transition: all 0.3s ease-in-out 0s, visibility 0s;
            }

            #comp-kd5px9q0_r_comp-lrv0651l {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1)scaleY(1)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv0651l.comp-kd5px9q0_r_variants-lrv0z963 {
                opacity: 1;
                transform: translateX(0px)translateY(0px)scaleX(1.05)scaleY(1.05)rotate(0deg)skewX(0deg)skewY(0deg);
            }

            #comp-kd5px9q0_r_comp-lrv07b6w {
                min-height: unset;
                --l_display: unset;
                height: auto;
                --aspect-ratio: 1;
                min-width: 0px;
                width: 22.22222222222222%;
                max-width: 99999px;
                max-height: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                aspect-ratio: 1/var(--aspect-ratio);
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: start;
                margin-left: 16.666666666666668%;
                margin-right: 0%;
                margin-top: 0%;
                margin-bottom: 0.008694444444472538%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv07b6w {
                --backgroundColor: 0, 0, 0;
                --borderColor: 255, 255, 255;
                --borderWidth: 0px;
                --cornerRadius: 0px;
                --boxShadow: none;
                --mediaOpacity: 1;
                --alpha-backgroundColor: 0;
                --alpha-borderColor: 0;
                --boxShadowToggleOn-boxShadow: none;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-kd5px9q0_r_comp-lrv0a5d0 {
                --l_display: unset;
                height: auto;
                min-width: 0px;
                width: 55.55555555555556%;
                max-width: 99999px;
                top: calc(var(--is-sticky) * (var(--top) + var(--sticky-offset)));
                --comp-display: unset;
                display: var(--l_display, var(--display));
                align-self: center;
                justify-self: end;
                margin-left: 0%;
                margin-right: -0.008680555555555556%;
                margin-top: 0%;
                margin-bottom: 0%;
                grid-area: 1/1/2/2;
                position: relative;
                --is-sticky: 0;
                --top: 0px;
            }

            #comp-kd5px9q0_r_comp-lrv0a5d0 {
                --fontWeight: bold;
                --static-spx: 0.1 * var(--one-unit);
            }

            #comp-lrs3clop {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-kbgakxea_r_comp-kkmqi5lg {
                --stroke-width: 0;
                --fill-opacity: 1;
                --stroke: #5E97FF;
                --stroke-opacity: 1;
                --fill: #000000;
                --undefined: undefined
            }

            #comp-kbgakxea_r_comp-lruw3ml6 {
                --stroke-width: 0;
                --fill-opacity: 1;
                --stroke: #5E97FF;
                --stroke-opacity: 1;
                --fill: #4F7934;
                --undefined: undefined
            }

            #comp-lrs49b83 {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-lrs6pyfd {
                height: auto;
                --direction: inherit;
                --labelDirection: inherit;
                --trackDirection: ltr;
                --tooltipDirection: inherit;
                --align: start;
                --labelMarginBottom: 14px;
                --trackHeight: 9%;
                --thumbBorderRadius: 50%;
                --tickTop: 50%;
                --tickTranslateY: -50%;
                --labelPadding_start: 0px;
                --labelPadding_end: 20px
            }

            #comp-lrs6pzn0 {
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --direction: inherit;
                --align: start;
                --labelDirection: inherit;
                --inputDirection: inherit;
                --errorDirection: inherit;
                --requiredIndicationDisplay: inline;
                --labelMarginBottom: clamp(0.5px, calc((0.632 * var(--one-unit)) - (var(--scrollbar-width) * 0.00632)), 100vw);
                --textPadding: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --textPadding_start: clamp(0.5px, calc((0.949 * var(--one-unit)) - (var(--scrollbar-width) * 0.00949)), 100vw);
                --textPadding_end: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --labelPadding_start: 0px;
                --labelPadding_end: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581))
            }

            #comp-lrs6q0yq {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-lrs6q1n7 {
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --direction: inherit;
                --align: start;
                --labelDirection: inherit;
                --inputDirection: inherit;
                --errorDirection: inherit;
                --requiredIndicationDisplay: inline;
                --labelMarginBottom: clamp(0.5px, calc((0.632 * var(--one-unit)) - (var(--scrollbar-width) * 0.00632)), 100vw);
                --textPadding: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --textPadding_start: clamp(0.5px, calc((0.949 * var(--one-unit)) - (var(--scrollbar-width) * 0.00949)), 100vw);
                --textPadding_end: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --labelPadding_start: 0px;
                --labelPadding_end: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581))
            }

            #comp-lrs7izz9 {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-kd5px9q0_r_comp-kkmqi5tc {
                --stroke-width: 0;
                --fill-opacity: 1;
                --stroke: #ED1566;
                --stroke-opacity: 1;
                --fill: #000000;
                --undefined: undefined
            }

            #comp-kbgakxea_r_comp-lrs342sz1 {
                --shc-mutated-brightness: 12, 12, 12;
                --margin-start: 0px;
                --margin-end: 0px;
                --fnt: normal normal normal calc((1.094 * var(--one-unit)) - (var(--scrollbar-width) * 0.01094))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --label-align: center;
                --label-text-align: center
            }

            #comp-lrt6f6hp {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-lrt6fvlp {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-lrt6gh22 {
                transform-origin: center 1px;
                height: 0 !important;
                box-sizing: content-box
            }

            #comp-kbgakxea_r_comp-lrv1tpma {
                --fnt: normal normal normal calc((1.265 * var(--one-unit)) - (var(--scrollbar-width) * 0.01265))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --fntlbl: normal normal normal calc((1.107 * var(--one-unit)) - (var(--scrollbar-width) * 0.01107))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --direction: inherit;
                --align: start;
                --labelDirection: inherit;
                --inputDirection: inherit;
                --errorDirection: inherit;
                --requiredIndicationDisplay: inline;
                --labelMarginBottom: clamp(0.5px, calc((0.632 * var(--one-unit)) - (var(--scrollbar-width) * 0.00632)), 100vw);
                --textPadding: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --textPadding_start: clamp(0.5px, calc((0.949 * var(--one-unit)) - (var(--scrollbar-width) * 0.00949)), 100vw);
                --textPadding_end: clamp(0.5px, calc((0.237 * var(--one-unit)) - (var(--scrollbar-width) * 0.0023699999999999997)), 100vw);
                --labelPadding_start: 0px;
                --labelPadding_end: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581))
            }

            #comp-lrt6suzs3 {
                --shc-mutated-brightness: 0, 0, 0;
                --margin-start: 0px;
                --margin-end: 0px;
                --fnt: normal normal normal calc((1.172 * var(--one-unit)) - (var(--scrollbar-width) * 0.01172))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                --label-align: center;
                --label-text-align: center
            }

            #c1dmp {
                --shc-mutated-brightness: 128, 128, 128
            }

            #comp-kbgaghri {
                --inherit-transition: var(--transition, none)
            }

            #comp-kbgaghri {
                --bg-overlay-color: rgb(var(--color_11));
                --bg-gradient: none
            }

            #comp-kbgakxea_r_comp-kbgajy18 {
                --inherit-transition: var(--transition, none)
            }

            #comp-kbgakxea_r_comp-kbgajy18 {
                --bg-overlay-color: rgb(var(--color_11));
                --bg-gradient: none
            }

            #comp-lrs3l2b0 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrs3kjjt {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kd5px9q0_r_comp-kd5px9hr {
                --screen-width: 100vw
            }

            #comp-kbgakxea_r_comp-lrs342sd {
                --shc-mutated-brightness: 87, 120, 99
            }

            #comp-lrt6suuu {
                --shc-mutated-brightness: 128, 128, 128
            }

            #comp-lrt55vv4 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt5ej60 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt5l5np {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-kd5px9q0_r_comp-lrv010yh {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kd5px9q0_r_comp-lrv05k5x {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kd5px9q0_r_comp-lrv0651l {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kbgakxea_r_comp-lrs342sn {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kbgakxea_r_comp-lrs342sq1 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kbgakxea_r_comp-lrs342st1 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-kbgakxea_r_comp-lrs342sw1 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrt6suwt1 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrt6suw5 {
                --shc-mutated-brightness: 128, 128, 128
            }

            #comp-kbgakxea_r_comp-lrvvo7jc {
                --shc-mutated-brightness: 128, 128, 128
            }

            #comp-lrt6sux3 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt6suxb1 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt6sv051 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt6sv13 {
                --shc-mutated-brightness: 74, 74, 74
            }

            #comp-lrt6suxj {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrt6suy92 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrt6suyq1 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrt6suzc2 {
                --shc-mutated-brightness: 119, 119, 119
            }

            #comp-lrs47sto :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: calc((2.213 * var(--one-unit)) - (var(--scrollbar-width) * 0.02213));
                text-decoration: none
            }

            #comp-lrs62euv :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581));
                text-decoration: none;
                text-align: left
            }

            #comp-lrs62gg0 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581));
                text-decoration: none;
                text-align: left
            }

            #comp-lrs62i6v :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581));
                text-decoration: none;
                text-align: left
            }

            #comp-lrs62jj4 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: calc((1.581 * var(--one-unit)) - (var(--scrollbar-width) * 0.01581));
                text-decoration: none;
                text-align: left
            }

            #comp-kbgakxmn_r_comp-kd5pdf7t :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: 14px;
                text-align: center
            }

            #comp-kd5px9q0_r_comp-lrv0339y :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-weight: bold
            }

            #comp-kd5px9q0_r_comp-lrv08guw :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-weight: bold
            }

            #comp-kd5px9q0_r_comp-lrv0a5d0 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-weight: bold
            }

            #comp-kbgakxea_r_comp-lrvv1dqf :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-weight: bold;
                font-size: calc((1.344 * var(--one-unit)) - (var(--scrollbar-width) * 0.01344))
            }

            #comp-lrt6sv0r1 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                text-decoration: none;
                text-align: left
            }

            #comp-lrt6sv0j1 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                text-decoration: none;
                text-align: left
            }

            #comp-lrt6suxy1 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw)
            }

            #comp-lrt6suyk1 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw)
            }

            #comp-lrt6suz31 :is(p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            ol,
            span[data-attr-richtext-marker]) {
                font-size: clamp(0.5px, calc((0.791 * var(--one-unit)) - (var(--scrollbar-width) * 0.00791)), 100vw)
            }

            #comp-kbgakxmn_r_comp-kbgakgyt {
                --bg-overlay-color: rgb(var(--color_11));
                --bg-gradient: none
            }

            @media (min-width: 320px) and (max-width: 1000px) {
                #comp-lrs7izz9 {
                    height: 0 !important
                }
                #comp-lrt6f6hp {
                    height: 0 !important
                }
                #comp-lrt6fvlp {
                    height: 0 !important
                }
                #comp-lrt6gh22 {
                    height: 0 !important
                }
                #comp-lrs3kjjt {
                    --shc-mutated-brightness: 119, 119, 119
                }
                #comp-lrt55vv4 {
                    --shc-mutated-brightness: 74, 74, 74
                }
                #comp-lrt5ej60 {
                    --shc-mutated-brightness: 74, 74, 74
                }
                #comp-lrt5l5np {
                    --shc-mutated-brightness: 74, 74, 74
                }
                #comp-lrt6suwt1 {
                    --shc-mutated-brightness: 119, 119, 119
                }
                #comp-lrs6pzn0 {
                    --fnt: normal normal normal 9px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --fntlbl: normal normal normal 8px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --direction: inherit;
                    --align: start;
                    --labelDirection: inherit;
                    --inputDirection: inherit;
                    --errorDirection: inherit;
                    --requiredIndicationDisplay: inline;
                    --labelMarginBottom: 4.762px;
                    --textPadding: 3px;
                    --textPadding_start: 7.143px;
                    --textPadding_end: 3px;
                    --labelPadding_start: 0px;
                    --labelPadding_end: 20px
                }
                #comp-lrs6q1n7 {
                    --fnt: normal normal normal 9px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --fntlbl: normal normal normal 8px/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif;
                    --direction: inherit;
                    --align: start;
                    --labelDirection: inherit;
                    --inputDirection: inherit;
                    --errorDirection: inherit;
                    --requiredIndicationDisplay: inline;
                    --labelMarginBottom: 4.762px;
                    --textPadding: 3px;
                    --textPadding_start: 7.143px;
                    --textPadding_end: 3px;
                    --labelPadding_start: 0px;
                    --labelPadding_end: 20px
                }
                #comp-lrt6suzs3 {
                    --fnt: normal normal normal calc((1.859 * var(--one-unit)) - (var(--scrollbar-width) * 0.01859))/1.6em madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif
                }
                #comp-lrs47sto :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((3.718 * var(--one-unit)) - (var(--scrollbar-width) * 0.03718)) !important
                }
                #comp-lrs62euv :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62gg0 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62i6v :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62jj4 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrt6sv0r1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.922 * var(--one-unit)) - (var(--scrollbar-width) * 0.029220000000000003)) !important;
                    text-align: left !important
                }
                #comp-lrt6sv0x1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.125 * var(--one-unit)) - (var(--scrollbar-width) * 0.02125)) !important
                }
                #comp-lrt6suw9 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.125 * var(--one-unit)) - (var(--scrollbar-width) * 0.02125)) !important
                }
                #comp-lrt6sv0b :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.39 * var(--one-unit)) - (var(--scrollbar-width) * 0.0239)) !important
                }
                #comp-lrt6sv0j1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((3.718 * var(--one-unit)) - (var(--scrollbar-width) * 0.03718)) !important
                }
                #comp-lrt6suxy1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.461 * var(--one-unit)) - (var(--scrollbar-width) * 0.014610000000000001)) !important
                }
                #comp-lrt6suyk1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.461 * var(--one-unit)) - (var(--scrollbar-width) * 0.014610000000000001)) !important
                }
                #comp-lrt6suz31 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.461 * var(--one-unit)) - (var(--scrollbar-width) * 0.014610000000000001)) !important
                }
                #comp-lrt6suzl :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.39 * var(--one-unit)) - (var(--scrollbar-width) * 0.0239)) !important
                }
            }

            @media (min-width: 320px) and (max-width: 750px) {
                #comp-lrs47sto :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 28px !important
                }
                #comp-lrs62euv :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62gg0 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62i6v :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrs62jj4 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: 20px !important
                }
                #comp-lrt6sv0r1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.4 * var(--one-unit)) - (var(--scrollbar-width) * 0.024)) !important;
                    text-align: center !important
                }
                #comp-lrt6sv0x1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.6 * var(--one-unit)) - (var(--scrollbar-width) * 0.016)) !important;
                    text-align: center !important
                }
                #comp-lrt6sv0b :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.39 * var(--one-unit)) - (var(--scrollbar-width) * 0.0239)) !important
                }
                #comp-lrt6sv0j1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((3.718 * var(--one-unit)) - (var(--scrollbar-width) * 0.03718)) !important
                }
                #comp-lrt6suxy1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.6 * var(--one-unit)) - (var(--scrollbar-width) * 0.016)) !important
                }
                #comp-lrt6suyk1 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.6 * var(--one-unit)) - (var(--scrollbar-width) * 0.016)) !important
                }
                #comp-lrt6suz31 :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((1.6 * var(--one-unit)) - (var(--scrollbar-width) * 0.016)) !important
                }
                #comp-lrt6suzl :is(p,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                ul,
                ol,
                span[data-attr-richtext-marker]) {
                    font-size: calc((2.39 * var(--one-unit)) - (var(--scrollbar-width) * 0.0239)) !important
                }
            }
        </style>
    </pages-css>

    <style id=wix-custom-css>
        /* Users Custom CSS code */

        /* CSS reference: https://www.wix.com/velo/reference/$w/styling-elements-with-css */

        /* These CSS styles will be applied globally to every page of this site. Write your CSS here, e.g.: */

        /*  Change button background color to red: */

        /* .button {
    background-color: red;
} */
    </style>


    <!-- initCustomElements # 1-->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/webpack-runtime.6d777a70.bundle.min.js">
        ! function() {
            "use strict";
            var e, n, r, t, o, a = {},
                i = {};

            function d(e) {
                var n = i[e];
                if (void 0 !== n) return n.exports;
                var r = i[e] = {
                    id: e,
                    loaded: !1,
                    exports: {}
                };
                return a[e].call(r.exports, r, r.exports, d), r.loaded = !0, r.exports
            }
            d.m = a, e = [], d.O = function(n, r, t, o) {
                    if (!r) {
                        var a = 1 / 0;
                        for (f = 0; f < e.length; f++) {
                            r = e[f][0], t = e[f][1], o = e[f][2];
                            for (var i = !0, c = 0; c < r.length; c++)(!1 & o || a >= o) && Object.keys(d.O).every((function(e) {
                                return d.O[e](r[c])
                            })) ? r.splice(c--, 1) : (i = !1, o < a && (a = o));
                            if (i) {
                                e.splice(f--, 1);
                                var u = t();
                                void 0 !== u && (n = u)
                            }
                        }
                        return n
                    }
                    o = o || 0;
                    for (var f = e.length; f > 0 && e[f - 1][2] > o; f--) e[f] = e[f - 1];
                    e[f] = [r, t, o]
                }, d.n = function(e) {
                    var n = e && e.__esModule ? function() {
                        return e.default
                    } : function() {
                        return e
                    };
                    return d.d(n, {
                        a: n
                    }), n
                }, r = Object.getPrototypeOf ? function(e) {
                    return Object.getPrototypeOf(e)
                } : function(e) {
                    return e.__proto__
                }, d.t = function(e, t) {
                    if (1 & t && (e = this(e)), 8 & t) return e;
                    if ("object" == typeof e && e) {
                        if (4 & t && e.__esModule) return e;
                        if (16 & t && "function" == typeof e.then) return e
                    }
                    var o = Object.create(null);
                    d.r(o);
                    var a = {};
                    n = n || [null, r({}), r([]), r(r)];
                    for (var i = 2 & t && e;
                        "object" == typeof i && !~n.indexOf(i); i = r(i)) Object.getOwnPropertyNames(i).forEach((function(n) {
                        a[n] = function() {
                            return e[n]
                        }
                    }));
                    return a.default = function() {
                        return e
                    }, d.d(o, a), o
                }, d.d = function(e, n) {
                    for (var r in n) d.o(n, r) && !d.o(e, r) && Object.defineProperty(e, r, {
                        enumerable: !0,
                        get: n[r]
                    })
                }, d.f = {}, d.e = function(e) {
                    return Promise.all(Object.keys(d.f).reduce((function(n, r) {
                        return d.f[r](e, n), n
                    }), []))
                }, d.u = function(e) {
                    return 862 === e ? "thunderbolt-commons.24e46262.bundle.min.js" : 6008 === e ? "fastdom.inline.cbb90a94.bundle.min.js" : 2081 === e ? "render-indicator.inline.3809a4a7.bundle.min.js" : ({
                        66: "protectedPages",
                        233: "group_2",
                        263: "widget",
                        306: "GhostComp",
                        446: "programs-component-index",
                        515: "gift-card-index",
                        612: "group_41",
                        613: "group_28",
                        638: "groups-post-index",
                        679: "events-page-structured-data-index",
                        687: "triggersAndReactions",
                        763: "bookings-service-index",
                        783: "video-component-index",
                        872: "componentsqaapi",
                        897: "group_19",
                        899: "group_47",
                        964: "popups",
                        991: "group_9",
                        1084: "group_29",
                        1218: "wixDomSanitizer",
                        1335: "thank-you-page-index",
                        1344: "Repeater_FluidColumns",
                        1398: "editorWixCodeSdk",
                        1407: "TPAModal",
                        1475: "tpaWidgetNativeDeadComp",
                        1711: "debug",
                        1900: "animations",
                        2044: "tpaModuleProvider",
                        2126: "wix-data-page-item-index",
                        2144: "module-executor",
                        2203: "group_40",
                        2244: "group_48",
                        2258: "RemoteRefDeadComp",
                        2262: "TPAPopup",
                        2283: "presenceApi",
                        2351: "dashboardWixCodeSdk",
                        2355: "widgetWixCodeSdk",
                        2375: "group_22",
                        2511: "reviews-component-index",
                        2945: "bookings-form-index",
                        2964: "stores-gallery-component-index",
                        3001: "group_46",
                        3071: "portfolio-projects-index",
                        3096: "customCss",
                        3133: "static-page-v2-schema-presets-index",
                        3366: "passwordProtectedPage",
                        3639: "businessManager",
                        3669: "group_20",
                        3732: "restaurants-menu-component-index",
                        3742: "blog-hashtags-index",
                        3756: "static-page-index",
                        3786: "group_7",
                        3862: "restaurants-menu-page-index",
                        3888: "group_42",
                        3948: "group_5",
                        3955: "TPAWorker",
                        3973: "Repeater_FixedColumns",
                        3987: "schedule-page-index",
                        4022: "cyclicTabbing",
                        4102: "AppPart",
                        4193: "group_45",
                        4222: "challenges-page-index",
                        4281: "qaApi",
                        4316: "group_51",
                        4323: "group_10",
                        4417: "group_30",
                        4522: "siteMembers",
                        4794: "portfolio-collections-index",
                        4825: "group_18",
                        4909: "group_0",
                        4919: "stores-product-schema-presets-index",
                        5060: "santa-platform-utils",
                        5122: "group_31",
                        5130: "motionEffects",
                        5170: "events-page-index",
                        5246: "TPAPreloaderOverlay",
                        5333: "group_27",
                        5350: "group_23",
                        5705: "group_37",
                        5776: "tpaCommons",
                        5810: "presence-lazy",
                        5831: "externalComponent",
                        5860: "group_49",
                        5918: "group_25",
                        5921: "reporter-api",
                        5989: "windowScroll",
                        6107: "group_38",
                        6121: "group_8",
                        6127: "containerSlider",
                        6144: "panorama",
                        6158: "services-component-index",
                        6161: "group_3",
                        6239: "group_21",
                        6464: "SEO_DEFAULT",
                        6499: "blog-tags-index",
                        6537: "pro-gallery-item-index",
                        6570: "group_24",
                        6670: "group_43",
                        6692: "group_4",
                        6805: "editorElementsDynamicTheme",
                        6997: "group_44",
                        7122: "seo-api-converters",
                        7212: "siteMembersWixCodeSdk",
                        7290: "breadcrumbs-component-index",
                        7514: "ByocStyles",
                        7698: "SiteStyles",
                        7699: "group_14",
                        7740: "group_35",
                        7745: "platform",
                        7802: "restaurants-order-page-index",
                        7858: "members-area-profile-index",
                        7880: "stores-product-index",
                        8009: "group_6",
                        8050: "tslib.inline",
                        8094: "blog-post-index",
                        8097: "group_13",
                        8138: "AppPart2",
                        8179: "testApi",
                        8200: "seo-api",
                        8219: "groups-page-index",
                        8317: "events-page-calculated-index",
                        8333: "routerFetch",
                        8389: "TPAUnavailableMessageOverlay",
                        8391: "dynamicPages",
                        8392: "blog-archive-index",
                        8488: "group_32",
                        8559: "forum-category-index",
                        8643: "group_36",
                        8656: "feedback",
                        8681: "environmentWixCodeSdk",
                        8693: "search-page-index",
                        8794: "searchBox",
                        8836: "group_11",
                        8860: "stores-category-index",
                        8930: "assetsLoader",
                        8945: "renderIndicator",
                        8951: "payment-page-index",
                        9040: "static-page-v2-index",
                        9110: "forum-post-index",
                        9187: "members-area-profile-tabs-index",
                        9279: "FontRulersContainer",
                        9339: "stickyToComponent",
                        9487: "bookings-calendar-index",
                        9521: "FontFaces",
                        9540: "blog-category-index",
                        9689: "group_50",
                        9895: "thunderbolt-components-registry",
                        9928: "group_39",
                        9941: "TPABaseComponent"
                    }[e] || e) + "." + {
                        66: "a187ac64",
                        233: "2eb03186",
                        263: "0f80bcd3",
                        306: "e7f6c1d0",
                        446: "a2294419",
                        515: "0cdd6de0",
                        612: "118ecc30",
                        613: "c950959a",
                        638: "6181e847",
                        679: "62ca1799",
                        687: "e918d585",
                        763: "4da9c6fb",
                        783: "3544dd57",
                        872: "18672379",
                        897: "0588ce2b",
                        899: "75577b31",
                        964: "8cf06f24",
                        991: "495ee951",
                        1084: "a0385a61",
                        1218: "e397a725",
                        1335: "d211f519",
                        1344: "487208ab",
                        1398: "f60e7a5a",
                        1407: "e7fc1582",
                        1475: "d18b09cd",
                        1602: "0b37fb55",
                        1643: "799e0c41",
                        1711: "b85fd181",
                        1900: "bd74a254",
                        1969: "4c5509c5",
                        2044: "a8427393",
                        2126: "885ef6cb",
                        2144: "b6aa54b1",
                        2203: "692897bc",
                        2244: "db8217d1",
                        2258: "0cde4608",
                        2262: "737ea906",
                        2283: "f3bd054f",
                        2351: "41da6c60",
                        2355: "0c1c2349",
                        2375: "c8746031",
                        2511: "49638f8e",
                        2945: "1bfdf84b",
                        2964: "2ccc5bd5",
                        3001: "67f8a78f",
                        3071: "babb8d8c",
                        3096: "7c005d2d",
                        3133: "d8086482",
                        3366: "bbc384b6",
                        3639: "8f1db994",
                        3669: "c4ce16d1",
                        3732: "8fb43120",
                        3742: "93a5a652",
                        3756: "c66e2cde",
                        3786: "7760a222",
                        3862: "02dad22b",
                        3888: "09baa819",
                        3948: "82ddfac0",
                        3955: "5e4f43d2",
                        3973: "6772ca92",
                        3987: "81647280",
                        4022: "706f48fd",
                        4102: "7054efbe",
                        4193: "c0f98c5b",
                        4222: "d97408c2",
                        4281: "765f27a8",
                        4316: "1452850b",
                        4323: "96f3dc38",
                        4417: "bb22fa00",
                        4522: "7b8b1967",
                        4794: "6d4ce864",
                        4825: "db0f7127",
                        4909: "fccdd87f",
                        4919: "31d95355",
                        5060: "6cf3992f",
                        5122: "abe83565",
                        5130: "b27edd21",
                        5170: "801279d2",
                        5246: "98042c29",
                        5333: "26249c24",
                        5350: "21e9fa29",
                        5705: "d874b857",
                        5776: "095c50a7",
                        5810: "eeaca04f",
                        5831: "5be0758e",
                        5860: "6bc693e1",
                        5918: "9184754f",
                        5921: "5cdad7a0",
                        5989: "7a5a9635",
                        6107: "b105f697",
                        6121: "d968fef8",
                        6127: "71489125",
                        6144: "94210094",
                        6158: "265d5903",
                        6161: "41a3ccfd",
                        6239: "c2d4c85e",
                        6464: "5130d6a8",
                        6499: "581ab8bc",
                        6537: "b6d4b31d",
                        6570: "e8e57546",
                        6670: "082f507f",
                        6692: "d18fbcf7",
                        6805: "67e0ca26",
                        6997: "91905fc0",
                        7122: "cef1d9e2",
                        7212: "b82f183f",
                        7290: "c092bb67",
                        7514: "da73f74a",
                        7698: "5d3b50d3",
                        7699: "66a39810",
                        7740: "c737bf04",
                        7745: "88789026",
                        7802: "e905ccdf",
                        7858: "d530d3a1",
                        7880: "28ea5de1",
                        8009: "3d0ee098",
                        8050: "541db4c6",
                        8094: "2c6cfe7b",
                        8097: "d5c95dc0",
                        8138: "d42dd97d",
                        8179: "76381e87",
                        8200: "e3061429",
                        8219: "104743b2",
                        8317: "8e99d927",
                        8333: "95b70b04",
                        8389: "65fd83ab",
                        8391: "cf5910de",
                        8392: "0992e55f",
                        8488: "2e3f0290",
                        8559: "997886b6",
                        8643: "b2c60d0c",
                        8656: "2aa29e68",
                        8681: "27929a11",
                        8693: "4ed32f80",
                        8794: "589beb43",
                        8836: "dd1c56bc",
                        8860: "e80dcdd5",
                        8930: "06382545",
                        8945: "5b2ea225",
                        8951: "7ca41ae0",
                        9040: "8ef18fad",
                        9110: "201d2e63",
                        9187: "f23d64cf",
                        9279: "26e807d8",
                        9339: "f0b8e2fd",
                        9487: "879f03e3",
                        9521: "1471c979",
                        9540: "24784af7",
                        9689: "3c5a8e5d",
                        9895: "1864af4b",
                        9928: "1575eb44",
                        9941: "6704fabe"
                    }[e] + ".chunk.min.js"
                }, d.miniCssF = function(e) {
                    return 2081 === e ? "render-indicator.inline.044c11cb.min.css" : {
                        1344: "Repeater_FluidColumns",
                        1407: "TPAModal",
                        1475: "tpaWidgetNativeDeadComp",
                        2262: "TPAPopup",
                        3786: "group_7",
                        3973: "Repeater_FixedColumns",
                        4102: "AppPart",
                        5246: "TPAPreloaderOverlay",
                        8138: "AppPart2",
                        8389: "TPAUnavailableMessageOverlay",
                        9279: "FontRulersContainer",
                        9941: "TPABaseComponent"
                    }[e] + "." + {
                        1344: "2b7b96dd",
                        1407: "52dc3d33",
                        1475: "edad7c2d",
                        2262: "7e7f441d",
                        3786: "bae0ce0c",
                        3973: "9abcda74",
                        4102: "34a92bc1",
                        5246: "6dbffa0c",
                        8138: "0a2601ec",
                        8389: "fb1e5320",
                        9279: "2b93f1ca",
                        9941: "0f6643a8"
                    }[e] + ".chunk.min.css"
                }, d.g = function() {
                    if ("object" == typeof globalThis) return globalThis;
                    try {
                        return this || new Function("return this")()
                    } catch (e) {
                        if ("object" == typeof window) return window
                    }
                }(), d.o = function(e, n) {
                    return Object.prototype.hasOwnProperty.call(e, n)
                }, t = {}, o = "_wix_thunderbolt_app:", d.l = function(e, n, r, a) {
                    if (t[e]) t[e].push(n);
                    else {
                        var i, c;
                        if (void 0 !== r)
                            for (var u = document.getElementsByTagName("script"), f = 0; f < u.length; f++) {
                                var s = u[f];
                                if (s.getAttribute("src") == e || s.getAttribute("data-webpack") == o + r) {
                                    i = s;
                                    break
                                }
                            }
                        i || (c = !0, (i = document.createElement("script")).charset = "utf-8", i.timeout = 120, d.nc && i.setAttribute("nonce", d.nc), i.setAttribute("data-webpack", o + r), i.src = e, 0 !== i.src.indexOf(window.location.origin + "/") && (i.crossOrigin = "anonymous")), t[e] = [n];
                        var p = function(n, r) {
                                i.onerror = i.onload = null, clearTimeout(l);
                                var o = t[e];
                                if (delete t[e], i.parentNode && i.parentNode.removeChild(i), o && o.forEach((function(e) {
                                        return e(r)
                                    })), n) return n(r)
                            },
                            l = setTimeout(p.bind(null, void 0, {
                                type: "timeout",
                                target: i
                            }), 12e4);
                        i.onerror = p.bind(null, i.onerror), i.onload = p.bind(null, i.onload), c && document.head.appendChild(i)
                    }
                }, d.r = function(e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module"
                    }), Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }, d.nmd = function(e) {
                    return e.paths = [], e.children || (e.children = []), e
                }, d.p = "https://static.parastorage.com/services/wix-thunderbolt/dist/",
                function() {
                    if ("undefined" != typeof document) {
                        var e = function(e) {
                                return new Promise((function(n, r) {
                                    var t = d.miniCssF(e),
                                        o = d.p + t;
                                    if (function(e, n) {
                                            for (var r = document.getElementsByTagName("link"), t = 0; t < r.length; t++) {
                                                var o = (i = r[t]).getAttribute("data-href") || i.getAttribute("href");
                                                if ("stylesheet" === i.rel && (o === e || o === n)) return i
                                            }
                                            var a = document.getElementsByTagName("style");
                                            for (t = 0; t < a.length; t++) {
                                                var i;
                                                if ((o = (i = a[t]).getAttribute("data-href")) === e || o === n) return i
                                            }
                                        }(t, o)) return n();
                                    ! function(e, n, r, t, o) {
                                        var a = document.createElement("link");
                                        a.rel = "stylesheet", a.type = "text/css", a.onerror = a.onload = function(r) {
                                            if (a.onerror = a.onload = null, "load" === r.type) t();
                                            else {
                                                var i = r && ("load" === r.type ? "missing" : r.type),
                                                    d = r && r.target && r.target.href || n,
                                                    c = new Error("Loading CSS chunk " + e + " failed.\n(" + d + ")");
                                                c.code = "CSS_CHUNK_LOAD_FAILED", c.type = i, c.request = d, a.parentNode && a.parentNode.removeChild(a), o(c)
                                            }
                                        }, a.href = n, 0 !== a.href.indexOf(window.location.origin + "/") && (a.crossOrigin = "anonymous"), r ? r.parentNode.insertBefore(a, r.nextSibling) : document.head.appendChild(a)
                                    }(e, o, null, n, r)
                                }))
                            },
                            n = {
                                6658: 0
                            };
                        d.f.miniCss = function(r, t) {
                            n[r] ? t.push(n[r]) : 0 !== n[r] && {
                                1344: 1,
                                1407: 1,
                                1475: 1,
                                2081: 1,
                                2262: 1,
                                3786: 1,
                                3973: 1,
                                4102: 1,
                                5246: 1,
                                8138: 1,
                                8389: 1,
                                9279: 1,
                                9941: 1
                            }[r] && t.push(n[r] = e(r).then((function() {
                                n[r] = 0
                            }), (function(e) {
                                throw delete n[r], e
                            })))
                        }
                    }
                }(),
                function() {
                    var e = {
                        6658: 0
                    };
                    d.f.j = function(n, r) {
                        var t = d.o(e, n) ? e[n] : void 0;
                        if (0 !== t)
                            if (t) r.push(t[2]);
                            else if (6658 != n) {
                            var o = new Promise((function(r, o) {
                                t = e[n] = [r, o]
                            }));
                            r.push(t[2] = o);
                            var a = d.p + d.u(n),
                                i = new Error;
                            d.l(a, (function(r) {
                                if (d.o(e, n) && (0 !== (t = e[n]) && (e[n] = void 0), t)) {
                                    var o = r && ("load" === r.type ? "missing" : r.type),
                                        a = r && r.target && r.target.src;
                                    i.message = "Loading chunk " + n + " failed.\n(" + o + ": " + a + ")", i.name = "ChunkLoadError", i.type = o, i.request = a, t[1](i)
                                }
                            }), "chunk-" + n, n)
                        } else e[n] = 0
                    }, d.O.j = function(n) {
                        return 0 === e[n]
                    };
                    var n = function(n, r) {
                            var t, o, a = r[0],
                                i = r[1],
                                c = r[2],
                                u = 0;
                            if (a.some((function(n) {
                                    return 0 !== e[n]
                                }))) {
                                for (t in i) d.o(i, t) && (d.m[t] = i[t]);
                                if (c) var f = c(d)
                            }
                            for (n && n(r); u < a.length; u++) o = a[u], d.o(e, o) && e[o] && e[o][0](), e[o] = 0;
                            return d.O(f)
                        },
                        r = self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || [];
                    r.forEach(n.bind(null, 0)), r.push = n.bind(null, r.push.bind(r))
                }()
        }();
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/webpack-runtime.6d777a70.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/fastdom.inline.cbb90a94.bundle.min.js">
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [6008], {
                96114: function(t, e, n) {
                    var i;
                    ! function(e) {
                        "use strict";
                        var r = function() {},
                            s = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.msRequestAnimationFrame || function(t) {
                                return setTimeout(t, 16)
                            };

                        function a() {
                            var t = this;
                            t.reads = [], t.writes = [], t.raf = s.bind(e), r("initialized", t)
                        }

                        function u(t) {
                            t.scheduled || (t.scheduled = !0, t.raf(o.bind(null, t)), r("flush scheduled"))
                        }

                        function o(t) {
                            r("flush");
                            var e, n = t.writes,
                                i = t.reads;
                            try {
                                r("flushing reads", i.length), t.runTasks(i), r("flushing writes", n.length), t.runTasks(n)
                            } catch (t) {
                                e = t
                            }
                            if (t.scheduled = !1, (i.length || n.length) && u(t), e) {
                                if (r("task errored", e.message), !t.catch) throw e;
                                t.catch(e)
                            }
                        }

                        function c(t, e) {
                            var n = t.indexOf(e);
                            return !!~n && !!t.splice(n, 1)
                        }
                        a.prototype = {
                            constructor: a,
                            runTasks: function(t) {
                                var e;
                                for (r("run tasks"); e = t.shift();) e()
                            },
                            measure: function(t, e) {
                                r("measure");
                                var n = e ? t.bind(e) : t;
                                return this.reads.push(n), u(this), n
                            },
                            mutate: function(t, e) {
                                r("mutate");
                                var n = e ? t.bind(e) : t;
                                return this.writes.push(n), u(this), n
                            },
                            clear: function(t) {
                                return r("clear", t), c(this.reads, t) || c(this.writes, t)
                            },
                            extend: function(t) {
                                if (r("extend", t), "object" != typeof t) throw new Error("expected object");
                                var e = Object.create(this);
                                return function(t, e) {
                                    for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n])
                                }(e, t), e.fastdom = this, e.initialize && e.initialize(), e
                            },
                            catch: null
                        };
                        var f = e.fastdom = e.fastdom || new a;
                        void 0 === (i = function() {
                            return f
                        }.call(f, n, f, t)) || (t.exports = i)
                    }("undefined" != typeof window ? window : this)
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/fastdom.inline.cbb90a94.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/custom-element-utils.inline.12d4ed1c.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [774], {
                80483: function(t, e, i) {
                    i.r(e), i.d(e, {
                        STATIC_MEDIA_URL: function() {
                            return Ht
                        },
                        alignTypes: function() {
                            return _
                        },
                        fittingTypes: function() {
                            return h
                        },
                        getData: function() {
                            return Nt
                        },
                        getPlaceholder: function() {
                            return Ft
                        },
                        htmlTag: function() {
                            return d
                        },
                        populateGlobalFeatureSupport: function() {
                            return M
                        },
                        sdk: function() {
                            return Yt
                        },
                        upscaleMethods: function() {
                            return g
                        }
                    });
                    const n = "v1",
                        a = 2,
                        r = 1920,
                        o = 1920,
                        c = 1e3,
                        s = 1e3,
                        h = {
                            SCALE_TO_FILL: "fill",
                            SCALE_TO_FIT: "fit",
                            STRETCH: "stretch",
                            ORIGINAL_SIZE: "original_size",
                            TILE: "tile",
                            TILE_HORIZONTAL: "tile_horizontal",
                            TILE_VERTICAL: "tile_vertical",
                            FIT_AND_TILE: "fit_and_tile",
                            LEGACY_STRIP_TILE: "legacy_strip_tile",
                            LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal",
                            LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical",
                            LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill",
                            LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit",
                            LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile",
                            LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size",
                            LEGACY_ORIGINAL_SIZE: "actual_size",
                            LEGACY_FIT_WIDTH: "fitWidth",
                            LEGACY_FIT_HEIGHT: "fitHeight",
                            LEGACY_FULL: "full",
                            LEGACY_BG_FIT_AND_TILE: "legacy_tile",
                            LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal",
                            LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical",
                            LEGACY_BG_NORMAL: "legacy_normal"
                        },
                        u = {
                            FIT: "fit",
                            FILL: "fill",
                            FILL_FOCAL: "fill_focal",
                            CROP: "crop",
                            LEGACY_CROP: "legacy_crop",
                            LEGACY_FILL: "legacy_fill"
                        },
                        _ = {
                            CENTER: "center",
                            TOP: "top",
                            TOP_LEFT: "top_left",
                            TOP_RIGHT: "top_right",
                            BOTTOM: "bottom",
                            BOTTOM_LEFT: "bottom_left",
                            BOTTOM_RIGHT: "bottom_right",
                            LEFT: "left",
                            RIGHT: "right"
                        },
                        T = {
                            [_.CENTER]: {
                                x: .5,
                                y: .5
                            },
                            [_.TOP_LEFT]: {
                                x: 0,
                                y: 0
                            },
                            [_.TOP_RIGHT]: {
                                x: 1,
                                y: 0
                            },
                            [_.TOP]: {
                                x: .5,
                                y: 0
                            },
                            [_.BOTTOM_LEFT]: {
                                x: 0,
                                y: 1
                            },
                            [_.BOTTOM_RIGHT]: {
                                x: 1,
                                y: 1
                            },
                            [_.BOTTOM]: {
                                x: .5,
                                y: 1
                            },
                            [_.RIGHT]: {
                                x: 1,
                                y: .5
                            },
                            [_.LEFT]: {
                                x: 0,
                                y: .5
                            }
                        },
                        l = {
                            center: "c",
                            top: "t",
                            top_left: "tl",
                            top_right: "tr",
                            bottom: "b",
                            bottom_left: "bl",
                            bottom_right: "br",
                            left: "l",
                            right: "r"
                        },
                        d = {
                            BG: "bg",
                            IMG: "img",
                            SVG: "svg"
                        },
                        g = {
                            AUTO: "auto",
                            CLASSIC: "classic",
                            SUPER: "super"
                        },
                        I = {
                            classic: 1,
                            super: 2
                        },
                        L = {
                            radius: "0.66",
                            amount: "1.00",
                            threshold: "0.01"
                        },
                        E = {
                            uri: "",
                            css: {
                                img: {},
                                container: {}
                            },
                            attr: {
                                img: {},
                                container: {}
                            },
                            transformed: !1
                        },
                        p = 25e6,
                        f = [1.5, 2, 4],
                        m = {
                            HIGH: {
                                size: 196e4,
                                quality: 90,
                                maxUpscale: 1
                            },
                            MEDIUM: {
                                size: 36e4,
                                quality: 85,
                                maxUpscale: 1
                            },
                            LOW: {
                                size: 16e4,
                                quality: 80,
                                maxUpscale: 1.2
                            },
                            TINY: {
                                size: 0,
                                quality: 80,
                                maxUpscale: 1.4
                            }
                        },
                        A = {
                            HIGH: "HIGH",
                            MEDIUM: "MEDIUM",
                            LOW: "LOW",
                            TINY: "TINY"
                        },
                        O = {
                            CONTRAST: "contrast",
                            BRIGHTNESS: "brightness",
                            SATURATION: "saturation",
                            HUE: "hue",
                            BLUR: "blur"
                        },
                        G = {
                            JPG: "jpg",
                            JPEG: "jpeg",
                            JPE: "jpe",
                            PNG: "png",
                            WEBP: "webp",
                            WIX_ICO_MP: "wix_ico_mp",
                            WIX_MP: "wix_mp",
                            GIF: "gif",
                            SVG: "svg",
                            UNRECOGNIZED: "unrecognized"
                        },
                        R = (G.JPG, G.JPEG, G.JPE, G.PNG, G.GIF, G.WEBP, {
                            isMobile: !1
                        }),
                        b = function(t) {
                            return R[t]
                        },
                        w = function(t, e) {
                            R[t] = e
                        };

                    function M() {
                        if ("undefined" != typeof window && "undefined" != typeof navigator) {
                            const t = window.matchMedia && window.matchMedia("(max-width: 767px)").matches,
                                e = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                            w("isMobile", t && e)
                        }
                    }

                    function C(t, ...e) {
                        return function(...i) {
                            const n = i[i.length - 1] || {},
                                a = [t[0]];
                            return e.forEach((function(e, r) {
                                const o = Number.isInteger(e) ? i[e] : n[e];
                                a.push(o, t[r + 1])
                            })), a.join("")
                        }
                    }

                    function F(t) {
                        return t[t.length - 1]
                    }
                    const N = [G.PNG, G.JPEG, G.JPG, G.JPE, G.WIX_ICO_MP, G.WIX_MP, G.WEBP],
                        S = [G.JPEG, G.JPG, G.JPE];

                    function P(t, e, i) {
                        return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t);
                        var n
                    }

                    function k(t, e, i) {
                        return ! function(t, e, i = !1) {
                            return x(t) && (e || !i)
                        }(t, e, i) && function(t) {
                            return N.includes($(t))
                        }(t) && !/(^https?)|(^data)|(^\/\/)/.test(t)
                    }

                    function y(t) {
                        return $(t) === G.PNG
                    }

                    function x(t) {
                        return $(t) === G.WEBP
                    }
                    const Y = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent),
                        H = ["\\.", "\\*"],
                        B = "_";

                    function U(t) {
                        return function(t) {
                            return S.includes($(t))
                        }(t) ? G.JPG : y(t) ? G.PNG : x(t) ? G.WEBP : G.UNRECOGNIZED
                    }

                    function $(t) {
                        return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase()
                    }

                    function v(t, e, i, n, a) {
                        let r;
                        return r = a === u.FILL ? function(t, e, i, n) {
                            return Math.max(i / t, n / e)
                        }(t, e, i, n) : a === u.FIT ? function(t, e, i, n) {
                            return Math.min(i / t, n / e)
                        }(t, e, i, n) : 1, r
                    }

                    function j(t, e, i, n, a, r) {
                        t = t || n.width, e = e || n.height;
                        const {
                            scaleFactor: o,
                            width: c,
                            height: s
                        } = function(t, e, i, n, a) {
                            let r, o = i,
                                c = n;
                            if (r = v(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > p) {
                                const i = Math.sqrt(p / (o * c));
                                o *= i, c *= i, r = v(t, e, o, c, a)
                            }
                            return {
                                scaleFactor: r,
                                width: o,
                                height: c
                            }
                        }(t, e, n.width * a, n.height * a, i);
                        return function(t, e, i, n, a, r, o) {
                            const {
                                optimizedScaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h
                            } = function(t, e, i, n) {
                                if ("auto" === n) return function(t, e) {
                                    const i = V(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e);
                                if ("super" === n) return function(t) {
                                    return {
                                        optimizedScaleFactor: F(f),
                                        upscaleMethodValue: I.super,
                                        forceUSM: !(f.includes(t) || t > F(f))
                                    }
                                }(i);
                                return function(t, e) {
                                    const i = V(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e)
                            }(t, e, r, a);
                            let _ = i,
                                T = n;
                            if (r <= c) return {
                                width: _,
                                height: T,
                                scaleFactor: r,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !1
                            };
                            switch (o) {
                                case u.FILL:
                                    _ = i * (c / r), T = n * (c / r);
                                    break;
                                case u.FIT:
                                    _ = t * c, T = e * c
                            }
                            return {
                                width: _,
                                height: T,
                                scaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !0
                            }
                        }(t, e, c, s, r, o, i)
                    }

                    function D(t, e, i, n) {
                        const a = Z(i) || function(t = _.CENTER) {
                            return T[t]
                        }(n);
                        return {
                            x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)),
                            y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)),
                            width: Math.min(t.width, e.width),
                            height: Math.min(t.height, e.height)
                        }
                    }

                    function z(t) {
                        return t.alignment && l[t.alignment] || l[_.CENTER]
                    }

                    function Z(t) {
                        let e;
                        return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = {
                            x: W(Math.max(0, Math.min(100, t.x)) / 100, 2),
                            y: W(Math.max(0, Math.min(100, t.y)) / 100, 2)
                        }), e
                    }

                    function V(t, e) {
                        const i = t * e;
                        return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY
                    }

                    function W(t, e) {
                        const i = Math.pow(10, e || 0);
                        return (t * i / i).toFixed(e)
                    }

                    function q(t) {
                        return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO
                    }

                    function J(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t;
                        switch (a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.STRETCH:
                                n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FILL:
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.TILE:
                            case h.LEGACY_STRIP_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"
                        }
                        switch (e.alignment) {
                            case _.CENTER:
                                n.container.backgroundPosition = "center center";
                                break;
                            case _.LEFT:
                                n.container.backgroundPosition = "left center";
                                break;
                            case _.RIGHT:
                                n.container.backgroundPosition = "right center";
                                break;
                            case _.TOP:
                                n.container.backgroundPosition = "center top";
                                break;
                            case _.BOTTOM:
                                n.container.backgroundPosition = "center bottom";
                                break;
                            case _.TOP_RIGHT:
                                n.container.backgroundPosition = "right top";
                                break;
                            case _.TOP_LEFT:
                                n.container.backgroundPosition = "left top";
                                break;
                            case _.BOTTOM_RIGHT:
                                n.container.backgroundPosition = "right bottom";
                                break;
                            case _.BOTTOM_LEFT:
                                n.container.backgroundPosition = "left bottom"
                        }
                        return i
                    }
                    const X = {
                            [_.CENTER]: "center",
                            [_.TOP]: "top",
                            [_.TOP_LEFT]: "top left",
                            [_.TOP_RIGHT]: "top right",
                            [_.BOTTOM]: "bottom",
                            [_.BOTTOM_LEFT]: "bottom left",
                            [_.BOTTOM_RIGHT]: "bottom right",
                            [_.LEFT]: "left",
                            [_.RIGHT]: "right"
                        },
                        K = {
                            position: "absolute",
                            top: "auto",
                            right: "auto",
                            bottom: "auto",
                            left: "auto"
                        };

                    function Q(t, e) {
                        const i = {
                                css: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t,
                            r = e.alignment;
                        switch (n.container.position = "relative", a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                                t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height);
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = X[r] || "unset";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = X[r] || "unset";
                                break;
                            case h.STRETCH:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill";
                                break;
                            case h.SCALE_TO_FILL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover"
                        }
                        if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) {
                            const t = Math.round((e.height - n.img.height) / 2),
                                i = Math.round((e.width - n.img.width) / 2);
                            Object.assign(n.img, K, function(t, e, i) {
                                return {
                                    [_.TOP_LEFT]: {
                                        top: 0,
                                        left: 0
                                    },
                                    [_.TOP_RIGHT]: {
                                        top: 0,
                                        right: 0
                                    },
                                    [_.TOP]: {
                                        top: 0,
                                        left: e
                                    },
                                    [_.BOTTOM_LEFT]: {
                                        bottom: 0,
                                        left: 0
                                    },
                                    [_.BOTTOM_RIGHT]: {
                                        bottom: 0,
                                        right: 0
                                    },
                                    [_.BOTTOM]: {
                                        bottom: 0,
                                        left: e
                                    },
                                    [_.RIGHT]: {
                                        top: t,
                                        right: 0
                                    },
                                    [_.LEFT]: {
                                        top: t,
                                        left: 0
                                    },
                                    [_.CENTER]: {
                                        width: i.width,
                                        height: i.height,
                                        objectFit: "none"
                                    }
                                }
                            }(t, i, e)[r])
                        }
                        return i
                    }

                    function tt(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                },
                                attr: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n,
                                attr: a
                            } = i,
                            {
                                fittingType: r
                            } = t,
                            o = e.alignment,
                            {
                                width: c,
                                height: s
                            } = t.src;
                        let T;
                        switch (n.container.position = "relative", r) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.TILE:
                                t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = "";
                                break;
                            case h.STRETCH:
                                a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none";
                                break;
                            case h.SCALE_TO_FILL:
                                k(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function(t, e, i, n, a) {
                                    const r = v(t, e, i, n, a);
                                    return {
                                        width: Math.round(t * r),
                                        height: Math.round(e * r)
                                    }
                                }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice"
                        }
                        if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) {
                            let t, i, n = 0,
                                c = 0;
                            r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height);
                            const s = Math.round(t / 2),
                                u = Math.round(i / 2);
                            switch (o) {
                                case _.TOP_LEFT:
                                    n = 0, c = 0;
                                    break;
                                case _.TOP:
                                    n = s, c = 0;
                                    break;
                                case _.TOP_RIGHT:
                                    n = t, c = 0;
                                    break;
                                case _.LEFT:
                                    n = 0, c = u;
                                    break;
                                case _.CENTER:
                                    n = s, c = u;
                                    break;
                                case _.RIGHT:
                                    n = t, c = u;
                                    break;
                                case _.BOTTOM_LEFT:
                                    n = 0, c = i;
                                    break;
                                case _.BOTTOM:
                                    n = s, c = i;
                                    break;
                                case _.BOTTOM_RIGHT:
                                    n = t, c = i
                            }
                            a.img.x = n, a.img.y = c
                        }
                        return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i
                    }

                    function et(t, e, i) {
                        let n;
                        switch (e.crop && (n = function(t, e) {
                            const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)),
                                n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y));
                            return i && n && (t.width !== i || t.height !== n) ? {
                                x: Math.max(0, e.x),
                                y: Math.max(0, e.y),
                                width: i,
                                height: n
                            } : null
                        }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(nt(n)))), t.fittingType) {
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                t.parts.push(it(t, i));
                                break;
                            case h.SCALE_TO_FILL:
                                t.parts.push(function(t, e) {
                                    const i = j(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod),
                                        n = Z(t.focalPoint);
                                    return {
                                        transformType: n ? u.FILL_FOCAL : u.FILL,
                                        width: Math.round(i.width),
                                        height: Math.round(i.height),
                                        alignment: z(e),
                                        focalPointX: n && n.x,
                                        focalPointY: n && n.y,
                                        upscale: i.scaleFactor > 1,
                                        forceUSM: i.forceUSM,
                                        scaleFactor: i.scaleFactor,
                                        cssUpscaleNeeded: i.cssUpscaleNeeded,
                                        upscaleMethodValue: i.upscaleMethodValue
                                    }
                                }(t, i));
                                break;
                            case h.STRETCH:
                                t.parts.push(function(t, e) {
                                    const i = v(t.src.width, t.src.height, e.width, e.height, u.FILL),
                                        n = Object.assign({}, e);
                                    return n.width = t.src.width * i, n.height = t.src.height * i, it(t, n)
                                }(t, i));
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.TILE_VERTICAL:
                            case h.TILE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.ORIGINAL_SIZE:
                                n = D(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(nt(n));
                                break;
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_CROP,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: z(t),
                                        upscale: !1,
                                        forceUSM: !1,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.FIT,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_FILL,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: z(t),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i))
                        }
                    }

                    function it(t, e) {
                        const i = j(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod);
                        return {
                            transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL,
                            width: Math.round(i.width),
                            height: Math.round(i.height),
                            alignment: l.center,
                            upscale: i.scaleFactor > 1,
                            forceUSM: i.forceUSM,
                            scaleFactor: i.scaleFactor,
                            cssUpscaleNeeded: i.cssUpscaleNeeded,
                            upscaleMethodValue: i.upscaleMethodValue
                        }
                    }

                    function nt(t) {
                        return {
                            transformType: u.CROP,
                            x: Math.round(t.x),
                            y: Math.round(t.y),
                            width: Math.round(t.width),
                            height: Math.round(t.height),
                            upscale: !1,
                            forceUSM: !1,
                            scaleFactor: 1,
                            cssUpscaleNeeded: !1
                        }
                    }

                    function at(t, e) {
                        var i;
                        e = e || {}, t.quality = function(t, e) {
                            const i = t.fileType === G.PNG,
                                n = t.fileType === G.JPG,
                                a = t.fileType === G.WEBP,
                                r = n || i || a;
                            if (r) {
                                const n = F(t.parts),
                                    a = (o = n.width, c = n.height, m[V(o, c)].quality);
                                let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a;
                                return r = i ? r + 5 : r, r
                            }
                            var o, c;
                            return 0
                        }(t, e), t.progressive = function(t) {
                            return !1 !== t.progressive
                        }(e), t.watermark = function(t) {
                            return t.watermark
                        }(e), t.autoEncode = null === (i = e.autoEncode) || void 0 === i || i, t.unsharpMask = function(t, e) {
                            var i, n, a;
                            if (function(t) {
                                    const e = "number" == typeof(t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500,
                                        i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10,
                                        n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255;
                                    return e && i && n
                                }(e.unsharpMask)) return {
                                radius: W(null === (i = e.unsharpMask) || void 0 === i ? void 0 : i.radius, 2),
                                amount: W(null === (n = e.unsharpMask) || void 0 === n ? void 0 : n.amount, 2),
                                threshold: W(null === (a = e.unsharpMask) || void 0 === a ? void 0 : a.threshold, 2)
                            };
                            if (("number" != typeof(r = (r = e.unsharpMask) || {}).radius || isNaN(r.radius) || 0 !== r.radius || "number" != typeof r.amount || isNaN(r.amount) || 0 !== r.amount || "number" != typeof r.threshold || isNaN(r.threshold) || 0 !== r.threshold) && function(t) {
                                    const e = F(t.parts);
                                    return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT
                                }(t)) return L;
                            var r;
                            return
                        }(t, e), t.filters = function(t) {
                            const e = t.filters || {},
                                i = {};
                            rt(e[O.CONTRAST], -100, 100) && (i[O.CONTRAST] = e[O.CONTRAST]);
                            rt(e[O.BRIGHTNESS], -100, 100) && (i[O.BRIGHTNESS] = e[O.BRIGHTNESS]);
                            rt(e[O.SATURATION], -100, 100) && (i[O.SATURATION] = e[O.SATURATION]);
                            rt(e[O.HUE], -180, 180) && (i[O.HUE] = e[O.HUE]);
                            rt(e[O.BLUR], 0, 100) && (i[O.BLUR] = e[O.BLUR]);
                            return i
                        }(e)
                    }

                    function rt(t, e, i) {
                        return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i
                    }

                    function ot(t, e, i, n) {
                        const r = function(t) {
                                var e;
                                return null !== (e = null == t ? void 0 : t.isSEOBot) && void 0 !== e && e
                            }(n),
                            o = U(e.id),
                            c = function(t, e) {
                                const i = /\.([^.]*)$/,
                                    n = new RegExp(`(${Y.concat(H).join("|")})`, "g");
                                if (e && e.length) {
                                    let t = e;
                                    const a = e.match(i);
                                    return a && N.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, B)
                                }
                                const a = t.match(/\/(.*?)$/);
                                return (a ? a[1] : t).replace(i, "")
                            }(e.id, e.name),
                            s = r ? 1 : function(t) {
                                return Math.min(t.pixelAspectRatio || 1, a)
                            }(i),
                            h = $(e.id),
                            u = h,
                            _ = k(e.id, null == n ? void 0 : n.hasAnimation, null == n ? void 0 : n.allowWEBPTransform),
                            T = {
                                fileName: c,
                                fileExtension: h,
                                fileType: o,
                                fittingType: t,
                                preferredExtension: u,
                                src: {
                                    id: e.id,
                                    width: e.width,
                                    height: e.height,
                                    isCropped: !1
                                },
                                focalPoint: {
                                    x: e.focalPoint && e.focalPoint.x,
                                    y: e.focalPoint && e.focalPoint.y
                                },
                                parts: [],
                                devicePixelRatio: s,
                                quality: 0,
                                upscaleMethod: q(n),
                                progressive: !0,
                                watermark: "",
                                unsharpMask: {},
                                filters: {},
                                transformed: _
                            };
                        return _ && (et(T, e, i), at(T, n)), T
                    }

                    function ct(t, e, i) {
                        const n = Object.assign({}, i),
                            a = b("isMobile");
                        switch (t) {
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                const t = a ? c : r,
                                    i = a ? s : o;
                                n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1
                        }
                        return n
                    }
                    const st = C `fit/w_${"width"},h_${"height"}`,
                        ht = C `fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        ut = C `fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`,
                        _t = C `crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`,
                        Tt = C `crop/w_${"width"},h_${"height"},al_${"alignment"}`,
                        lt = C `fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        dt = C `,lg_${"upscaleMethodValue"}`,
                        gt = C `,q_${"quality"}`,
                        It = C `,usm_${"radius"}_${"amount"}_${"threshold"}`,
                        Lt = C `,bl`,
                        Et = C `,wm_${"watermark"}`,
                        pt = {
                            [O.CONTRAST]: C `,con_${"contrast"}`,
                            [O.BRIGHTNESS]: C `,br_${"brightness"}`,
                            [O.SATURATION]: C `,sat_${"saturation"}`,
                            [O.HUE]: C `,hue_${"hue"}`,
                            [O.BLUR]: C `,blur_${"blur"}`
                        },
                        ft = C `,enc_auto`;

                    function mt(t, e, i, a = {}, r) {
                        return k(e.id, null == a ? void 0 : a.hasAnimation, null == a ? void 0 : a.allowWEBPTransform) ? function(t) {
                            const e = [];
                            t.parts.forEach((t => {
                                switch (t.transformType) {
                                    case u.CROP:
                                        e.push(_t(t));
                                        break;
                                    case u.LEGACY_CROP:
                                        e.push(Tt(t));
                                        break;
                                    case u.LEGACY_FILL:
                                        let i = lt(t);
                                        t.upscale && (i += dt(t)), e.push(i);
                                        break;
                                    case u.FIT:
                                        let n = st(t);
                                        t.upscale && (n += dt(t)), e.push(n);
                                        break;
                                    case u.FILL:
                                        let a = ht(t);
                                        t.upscale && (a += dt(t)), e.push(a);
                                        break;
                                    case u.FILL_FOCAL:
                                        let r = ut(t);
                                        t.upscale && (r += dt(t)), e.push(r)
                                }
                            }));
                            let i = e.join("/");
                            return t.quality && (i += gt(t)), t.unsharpMask && (i += It(t.unsharpMask)), t.progressive || (i += Lt(t)), t.watermark && (i += Et(t)), t.filters && (i += Object.keys(t.filters).map((e => pt[e](t.filters))).join("")), t.autoEncode && t.fileType !== G.GIF && (i += ft(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}`
                        }(r = r || ot(t, e, i, a)) : e.id
                    }
                    const At = {
                            [_.CENTER]: "50% 50%",
                            [_.TOP_LEFT]: "0% 0%",
                            [_.TOP_RIGHT]: "100% 0%",
                            [_.TOP]: "50% 0%",
                            [_.BOTTOM_LEFT]: "0% 100%",
                            [_.BOTTOM_RIGHT]: "100% 100%",
                            [_.BOTTOM]: "50% 100%",
                            [_.RIGHT]: "100% 50%",
                            [_.LEFT]: "0% 50%"
                        },
                        Ot = Object.entries(At).reduce(((t, [e, i]) => (t[i] = e, t)), {}),
                        Gt = [h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL],
                        Rt = [h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL];

                    function bt(t, e, {
                        width: i,
                        height: n
                    }) {
                        return t === h.TILE && e.width > i && e.height > n
                    }

                    function wt(t, e, i, n = "center") {
                        const a = {
                            img: {},
                            container: {}
                        };
                        if (t === h.SCALE_TO_FILL) {
                            const t = e.focalPoint && function(t) {
                                    const e = `${t.x}% ${t.y}%`;
                                    return Ot[e] || ""
                                }(e.focalPoint),
                                r = t || n;
                            e.focalPoint && !t ? a.img = {
                                objectPosition: Mt(e, i, e.focalPoint)
                            } : a.img = {
                                objectPosition: At[r]
                            }
                        } else [h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE].includes(t) ? a.img = {
                            objectFit: "none",
                            top: "auto",
                            left: "auto",
                            right: "auto",
                            bottom: "auto"
                        } : Gt.includes(t) && (a.container = {
                            backgroundSize: `${e.width}px ${e.height}px`
                        });
                        return a
                    }

                    function Mt(t, e, i) {
                        const {
                            width: n,
                            height: a
                        } = t, {
                            width: r,
                            height: o
                        } = e, {
                            x: c,
                            y: s
                        } = i;
                        if (!r || !o) return `${c}% ${s}%`;
                        const h = Math.max(r / n, o / a),
                            u = n * h,
                            _ = a * h,
                            T = Math.max(0, Math.min(u - r, u * (c / 100) - r / 2)),
                            l = Math.max(0, Math.min(_ - o, _ * (s / 100) - o / 2));
                        return `${T&&Math.floor(T/(u-r)*100)}% ${l&&Math.floor(l/(_-o)*100)}%`
                    }
                    const Ct = {
                        width: "100%",
                        height: "100%"
                    };

                    function Ft(t, e, i, n = {}) {
                        if (!P(t, e, i)) return E;
                        const {
                            autoEncode: a = !0,
                            isSEOBot: r,
                            shouldLoadHQImage: o,
                            hasAnimation: c,
                            allowWEBPTransform: s
                        } = n, u = k(e.id, c, s);
                        if (!u || o) return Nt(t, e, i, Object.assign(Object.assign({}, n), {
                            autoEncode: a,
                            useSrcset: u
                        }));
                        const _ = Object.assign(Object.assign({}, i), function(t, {
                                width: e,
                                height: i
                            }) {
                                if (!e || !i) {
                                    const n = e || Math.min(980, t.width),
                                        a = n / t.width;
                                    return {
                                        width: n,
                                        height: i || t.height * a
                                    }
                                }
                                return {
                                    width: e,
                                    height: i
                                }
                            }(e, i)),
                            {
                                alignment: T,
                                htmlTag: l
                            } = _,
                            d = bt(t, e, _),
                            g = function(t, e, {
                                width: i,
                                height: n
                            }, a = !1) {
                                if (a) return {
                                    width: i,
                                    height: n
                                };
                                const r = !Rt.includes(t),
                                    o = bt(t, e, {
                                        width: i,
                                        height: n
                                    }),
                                    c = !o && Gt.includes(t),
                                    s = c ? e.width : i,
                                    h = c ? e.height : n,
                                    u = r ? function(t, e) {
                                        return t > 900 ? e ? .05 : .15 : t > 500 ? e ? .1 : .18 : t > 200 ? .25 : 1
                                    }(s, y(e.id)) : 1;
                                return {
                                    width: o ? 1920 : s * u,
                                    height: h * u
                                }
                            }(t, e, _, r),
                            I = function(t, e, i) {
                                return i ? 0 : Gt.includes(e) ? 1 : t > 200 ? 2 : 3
                            }(_.width, t, r),
                            L = function(t, e) {
                                const i = Gt.includes(t) && !e;
                                return t === h.SCALE_TO_FILL || i ? h.SCALE_TO_FIT : t
                            }(t, d),
                            p = wt(t, e, i, T),
                            {
                                uri: f
                            } = Nt(L, e, Object.assign(Object.assign({}, g), {
                                alignment: T,
                                htmlTag: l
                            }), {
                                autoEncode: a,
                                filters: I ? {
                                    blur: I
                                } : {},
                                hasAnimation: c,
                                allowWEBPTransform: s
                            }),
                            {
                                attr: m = {},
                                css: A
                            } = Nt(t, e, Object.assign(Object.assign({}, _), {
                                alignment: T,
                                htmlTag: l
                            }), {});
                        return A.img = A.img || {}, A.container = A.container || {}, Object.assign(A.img, p.img, Ct), Object.assign(A.container, p.container), {
                            uri: f,
                            css: A,
                            attr: m,
                            transformed: !0
                        }
                    }

                    function Nt(t, e, i, n) {
                        let a = {};
                        if (P(t, e, i)) {
                            const r = ct(t, e, i),
                                o = ot(t, e, r, n);
                            a.uri = mt(t, e, r, n, o), (null == n ? void 0 : n.useSrcset) && (a.srcset = function(t, e, i, n, a) {
                                const r = i.pixelAspectRatio || 1;
                                return {
                                    dpr: [`${1===r?a.uri:mt(t,e,Object.assign(Object.assign({},i),{pixelAspectRatio:1}),n)} 1x`, `${2===r?a.uri:mt(t,e,Object.assign(Object.assign({},i),{pixelAspectRatio:2}),n)} 2x`]
                                }
                            }(t, e, r, n, a)), Object.assign(a, function(t, e) {
                                let i;
                                return i = e.htmlTag === d.BG ? J : e.htmlTag === d.SVG ? tt : Q, i(t, e)
                            }(o, r), {
                                transformed: o.transformed
                            })
                        } else a = E;
                        return a
                    }

                    function St(t, e, i, n) {
                        if (P(t, e, i)) {
                            const a = ct(t, e, i);
                            return {
                                uri: mt(t, e, a, n || {}, ot(t, e, a, n))
                            }
                        }
                        return {
                            uri: ""
                        }
                    }
                    const Pt = "https://static.wixstatic.com/media/",
                        kt = /^media\//i,
                        yt = "undefined" != typeof window ? window.devicePixelRatio : 1,
                        xt = (t, e) => {
                            const i = e && e.baseHostURL;
                            return i ? `${i}${t}` : (t => kt.test(t) ? `https://static.wixstatic.com/${t}` : `${Pt}${t}`)(t)
                        };
                    M(), M();
                    const Yt = {
                            getScaleToFitImageURL: function(t, e, i, n, a, r) {
                                const o = St(h.SCALE_TO_FIT, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: r && r.name
                                }, {
                                    width: n,
                                    height: a,
                                    htmlTag: d.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: yt
                                }, r);
                                return xt(o.uri, r)
                            },
                            getScaleToFillImageURL: function(t, e, i, n, a, r) {
                                const o = St(h.SCALE_TO_FILL, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: r && r.name,
                                    focalPoint: {
                                        x: r && r.focalPoint && r.focalPoint.x,
                                        y: r && r.focalPoint && r.focalPoint.y
                                    }
                                }, {
                                    width: n,
                                    height: a,
                                    htmlTag: d.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: yt
                                }, r);
                                return xt(o.uri, r)
                            },
                            getCropImageURL: function(t, e, i, n, a, r, o, c, s, u) {
                                const T = St(h.SCALE_TO_FILL, {
                                    id: t,
                                    width: e,
                                    height: i,
                                    name: u && u.name,
                                    crop: {
                                        x: n,
                                        y: a,
                                        width: r,
                                        height: o
                                    }
                                }, {
                                    width: c,
                                    height: s,
                                    htmlTag: d.IMG,
                                    alignment: _.CENTER,
                                    pixelAspectRatio: yt
                                }, u);
                                return xt(T.uri, u)
                            }
                        },
                        Ht = Pt
                },
                10718: function(t, e, i) {
                    i.d(e, {
                        Md: function() {
                            return _
                        },
                        X3: function() {
                            return h
                        },
                        Yu: function() {
                            return mt
                        }
                    });
                    const n = "v1",
                        a = 2,
                        r = 1920,
                        o = 1920,
                        c = 1e3,
                        s = 1e3,
                        h = {
                            SCALE_TO_FILL: "fill",
                            SCALE_TO_FIT: "fit",
                            STRETCH: "stretch",
                            ORIGINAL_SIZE: "original_size",
                            TILE: "tile",
                            TILE_HORIZONTAL: "tile_horizontal",
                            TILE_VERTICAL: "tile_vertical",
                            FIT_AND_TILE: "fit_and_tile",
                            LEGACY_STRIP_TILE: "legacy_strip_tile",
                            LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal",
                            LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical",
                            LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill",
                            LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit",
                            LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile",
                            LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size",
                            LEGACY_ORIGINAL_SIZE: "actual_size",
                            LEGACY_FIT_WIDTH: "fitWidth",
                            LEGACY_FIT_HEIGHT: "fitHeight",
                            LEGACY_FULL: "full",
                            LEGACY_BG_FIT_AND_TILE: "legacy_tile",
                            LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal",
                            LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical",
                            LEGACY_BG_NORMAL: "legacy_normal"
                        },
                        u = {
                            FIT: "fit",
                            FILL: "fill",
                            FILL_FOCAL: "fill_focal",
                            CROP: "crop",
                            LEGACY_CROP: "legacy_crop",
                            LEGACY_FILL: "legacy_fill"
                        },
                        _ = {
                            CENTER: "center",
                            TOP: "top",
                            TOP_LEFT: "top_left",
                            TOP_RIGHT: "top_right",
                            BOTTOM: "bottom",
                            BOTTOM_LEFT: "bottom_left",
                            BOTTOM_RIGHT: "bottom_right",
                            LEFT: "left",
                            RIGHT: "right"
                        },
                        T = {
                            [_.CENTER]: {
                                x: .5,
                                y: .5
                            },
                            [_.TOP_LEFT]: {
                                x: 0,
                                y: 0
                            },
                            [_.TOP_RIGHT]: {
                                x: 1,
                                y: 0
                            },
                            [_.TOP]: {
                                x: .5,
                                y: 0
                            },
                            [_.BOTTOM_LEFT]: {
                                x: 0,
                                y: 1
                            },
                            [_.BOTTOM_RIGHT]: {
                                x: 1,
                                y: 1
                            },
                            [_.BOTTOM]: {
                                x: .5,
                                y: 1
                            },
                            [_.RIGHT]: {
                                x: 1,
                                y: .5
                            },
                            [_.LEFT]: {
                                x: 0,
                                y: .5
                            }
                        },
                        l = {
                            center: "c",
                            top: "t",
                            top_left: "tl",
                            top_right: "tr",
                            bottom: "b",
                            bottom_left: "bl",
                            bottom_right: "br",
                            left: "l",
                            right: "r"
                        },
                        d = {
                            BG: "bg",
                            IMG: "img",
                            SVG: "svg"
                        },
                        g = {
                            AUTO: "auto",
                            CLASSIC: "classic",
                            SUPER: "super"
                        },
                        I = {
                            classic: 1,
                            super: 2
                        },
                        L = {
                            radius: "0.66",
                            amount: "1.00",
                            threshold: "0.01"
                        },
                        E = {
                            uri: "",
                            css: {
                                img: {},
                                container: {}
                            },
                            attr: {
                                img: {},
                                container: {}
                            },
                            transformed: !1
                        },
                        p = 25e6,
                        f = [1.5, 2, 4],
                        m = {
                            HIGH: {
                                size: 196e4,
                                quality: 90,
                                maxUpscale: 1
                            },
                            MEDIUM: {
                                size: 36e4,
                                quality: 85,
                                maxUpscale: 1
                            },
                            LOW: {
                                size: 16e4,
                                quality: 80,
                                maxUpscale: 1.2
                            },
                            TINY: {
                                size: 0,
                                quality: 80,
                                maxUpscale: 1.4
                            }
                        },
                        A = {
                            HIGH: "HIGH",
                            MEDIUM: "MEDIUM",
                            LOW: "LOW",
                            TINY: "TINY"
                        },
                        O = {
                            CONTRAST: "contrast",
                            BRIGHTNESS: "brightness",
                            SATURATION: "saturation",
                            HUE: "hue",
                            BLUR: "blur"
                        },
                        G = {
                            JPG: "jpg",
                            JPEG: "jpeg",
                            JPE: "jpe",
                            PNG: "png",
                            WEBP: "webp",
                            WIX_ICO_MP: "wix_ico_mp",
                            WIX_MP: "wix_mp",
                            GIF: "gif",
                            SVG: "svg",
                            UNRECOGNIZED: "unrecognized"
                        },
                        R = (G.JPG, G.JPEG, G.JPE, G.PNG, G.GIF, G.WEBP, {
                            isMobile: !1
                        }),
                        b = function(t) {
                            return R[t]
                        };

                    function w() {
                        if ("undefined" != typeof window && "undefined" != typeof navigator) {
                            const e = window.matchMedia && window.matchMedia("(max-width: 767px)").matches,
                                i = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                            t = e && i, R["isMobile"] = t
                        }
                        var t
                    }

                    function M(t, ...e) {
                        return function(...i) {
                            const n = i[i.length - 1] || {},
                                a = [t[0]];
                            return e.forEach((function(e, r) {
                                const o = Number.isInteger(e) ? i[e] : n[e];
                                a.push(o, t[r + 1])
                            })), a.join("")
                        }
                    }

                    function C(t) {
                        return t[t.length - 1]
                    }
                    const F = [G.PNG, G.JPEG, G.JPG, G.JPE, G.WIX_ICO_MP, G.WIX_MP, G.WEBP],
                        N = [G.JPEG, G.JPG, G.JPE];

                    function S(t, e, i) {
                        return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t);
                        var n
                    }

                    function P(t, e, i) {
                        return ! function(t, e, i = !1) {
                            return k(t) && (e || !i)
                        }(t, e, i) && function(t) {
                            return F.includes(B(t))
                        }(t) && !/(^https?)|(^data)|(^\/\/)/.test(t)
                    }

                    function k(t) {
                        return B(t) === G.WEBP
                    }
                    const y = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent),
                        x = ["\\.", "\\*"],
                        Y = "_";

                    function H(t) {
                        return function(t) {
                            return N.includes(B(t))
                        }(t) ? G.JPG : function(t) {
                            return B(t) === G.PNG
                        }(t) ? G.PNG : k(t) ? G.WEBP : G.UNRECOGNIZED
                    }

                    function B(t) {
                        return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase()
                    }

                    function U(t, e, i, n, a) {
                        let r;
                        return r = a === u.FILL ? function(t, e, i, n) {
                            return Math.max(i / t, n / e)
                        }(t, e, i, n) : a === u.FIT ? function(t, e, i, n) {
                            return Math.min(i / t, n / e)
                        }(t, e, i, n) : 1, r
                    }

                    function $(t, e, i, n, a, r) {
                        t = t || n.width, e = e || n.height;
                        const {
                            scaleFactor: o,
                            width: c,
                            height: s
                        } = function(t, e, i, n, a) {
                            let r, o = i,
                                c = n;
                            if (r = U(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > p) {
                                const i = Math.sqrt(p / (o * c));
                                o *= i, c *= i, r = U(t, e, o, c, a)
                            }
                            return {
                                scaleFactor: r,
                                width: o,
                                height: c
                            }
                        }(t, e, n.width * a, n.height * a, i);
                        return function(t, e, i, n, a, r, o) {
                            const {
                                optimizedScaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h
                            } = function(t, e, i, n) {
                                if ("auto" === n) return function(t, e) {
                                    const i = z(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e);
                                if ("super" === n) return function(t) {
                                    return {
                                        optimizedScaleFactor: C(f),
                                        upscaleMethodValue: I.super,
                                        forceUSM: !(f.includes(t) || t > C(f))
                                    }
                                }(i);
                                return function(t, e) {
                                    const i = z(t, e);
                                    return {
                                        optimizedScaleFactor: m[i].maxUpscale,
                                        upscaleMethodValue: I.classic,
                                        forceUSM: !1
                                    }
                                }(t, e)
                            }(t, e, r, a);
                            let _ = i,
                                T = n;
                            if (r <= c) return {
                                width: _,
                                height: T,
                                scaleFactor: r,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !1
                            };
                            switch (o) {
                                case u.FILL:
                                    _ = i * (c / r), T = n * (c / r);
                                    break;
                                case u.FIT:
                                    _ = t * c, T = e * c
                            }
                            return {
                                width: _,
                                height: T,
                                scaleFactor: c,
                                upscaleMethodValue: s,
                                forceUSM: h,
                                cssUpscaleNeeded: !0
                            }
                        }(t, e, c, s, r, o, i)
                    }

                    function v(t, e, i, n) {
                        const a = D(i) || function(t = _.CENTER) {
                            return T[t]
                        }(n);
                        return {
                            x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)),
                            y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)),
                            width: Math.min(t.width, e.width),
                            height: Math.min(t.height, e.height)
                        }
                    }

                    function j(t) {
                        return t.alignment && l[t.alignment] || l[_.CENTER]
                    }

                    function D(t) {
                        let e;
                        return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = {
                            x: Z(Math.max(0, Math.min(100, t.x)) / 100, 2),
                            y: Z(Math.max(0, Math.min(100, t.y)) / 100, 2)
                        }), e
                    }

                    function z(t, e) {
                        const i = t * e;
                        return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY
                    }

                    function Z(t, e) {
                        const i = Math.pow(10, e || 0);
                        return (t * i / i).toFixed(e)
                    }

                    function V(t) {
                        return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO
                    }

                    function W(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t;
                        switch (a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.STRETCH:
                                n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.SCALE_TO_FILL:
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat";
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.TILE:
                            case h.LEGACY_STRIP_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x";
                                break;
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"
                        }
                        switch (e.alignment) {
                            case _.CENTER:
                                n.container.backgroundPosition = "center center";
                                break;
                            case _.LEFT:
                                n.container.backgroundPosition = "left center";
                                break;
                            case _.RIGHT:
                                n.container.backgroundPosition = "right center";
                                break;
                            case _.TOP:
                                n.container.backgroundPosition = "center top";
                                break;
                            case _.BOTTOM:
                                n.container.backgroundPosition = "center bottom";
                                break;
                            case _.TOP_RIGHT:
                                n.container.backgroundPosition = "right top";
                                break;
                            case _.TOP_LEFT:
                                n.container.backgroundPosition = "left top";
                                break;
                            case _.BOTTOM_RIGHT:
                                n.container.backgroundPosition = "right bottom";
                                break;
                            case _.BOTTOM_LEFT:
                                n.container.backgroundPosition = "left bottom"
                        }
                        return i
                    }
                    const q = {
                            [_.CENTER]: "center",
                            [_.TOP]: "top",
                            [_.TOP_LEFT]: "top left",
                            [_.TOP_RIGHT]: "top right",
                            [_.BOTTOM]: "bottom",
                            [_.BOTTOM_LEFT]: "bottom left",
                            [_.BOTTOM_RIGHT]: "bottom right",
                            [_.LEFT]: "left",
                            [_.RIGHT]: "right"
                        },
                        J = {
                            position: "absolute",
                            top: "auto",
                            right: "auto",
                            bottom: "auto",
                            left: "auto"
                        };

                    function X(t, e) {
                        const i = {
                                css: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n
                            } = i,
                            {
                                fittingType: a
                            } = t,
                            r = e.alignment;
                        switch (n.container.position = "relative", a) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                                t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height);
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = q[r] || "unset";
                                break;
                            case h.LEGACY_BG_NORMAL:
                                n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = q[r] || "unset";
                                break;
                            case h.STRETCH:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill";
                                break;
                            case h.SCALE_TO_FILL:
                                n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover"
                        }
                        if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) {
                            const t = Math.round((e.height - n.img.height) / 2),
                                i = Math.round((e.width - n.img.width) / 2);
                            Object.assign(n.img, J, function(t, e, i) {
                                return {
                                    [_.TOP_LEFT]: {
                                        top: 0,
                                        left: 0
                                    },
                                    [_.TOP_RIGHT]: {
                                        top: 0,
                                        right: 0
                                    },
                                    [_.TOP]: {
                                        top: 0,
                                        left: e
                                    },
                                    [_.BOTTOM_LEFT]: {
                                        bottom: 0,
                                        left: 0
                                    },
                                    [_.BOTTOM_RIGHT]: {
                                        bottom: 0,
                                        right: 0
                                    },
                                    [_.BOTTOM]: {
                                        bottom: 0,
                                        left: e
                                    },
                                    [_.RIGHT]: {
                                        top: t,
                                        right: 0
                                    },
                                    [_.LEFT]: {
                                        top: t,
                                        left: 0
                                    },
                                    [_.CENTER]: {
                                        width: i.width,
                                        height: i.height,
                                        objectFit: "none"
                                    }
                                }
                            }(t, i, e)[r])
                        }
                        return i
                    }

                    function K(t, e) {
                        const i = {
                                css: {
                                    container: {}
                                },
                                attr: {
                                    container: {},
                                    img: {}
                                }
                            },
                            {
                                css: n,
                                attr: a
                            } = i,
                            {
                                fittingType: r
                            } = t,
                            o = e.alignment,
                            {
                                width: c,
                                height: s
                            } = t.src;
                        let T;
                        switch (n.container.position = "relative", r) {
                            case h.ORIGINAL_SIZE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.TILE:
                                t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice";
                                break;
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                                a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = "";
                                break;
                            case h.STRETCH:
                                a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none";
                                break;
                            case h.SCALE_TO_FILL:
                                P(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function(t, e, i, n, a) {
                                    const r = U(t, e, i, n, a);
                                    return {
                                        width: Math.round(t * r),
                                        height: Math.round(e * r)
                                    }
                                }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice"
                        }
                        if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) {
                            let t, i, n = 0,
                                c = 0;
                            r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height);
                            const s = Math.round(t / 2),
                                u = Math.round(i / 2);
                            switch (o) {
                                case _.TOP_LEFT:
                                    n = 0, c = 0;
                                    break;
                                case _.TOP:
                                    n = s, c = 0;
                                    break;
                                case _.TOP_RIGHT:
                                    n = t, c = 0;
                                    break;
                                case _.LEFT:
                                    n = 0, c = u;
                                    break;
                                case _.CENTER:
                                    n = s, c = u;
                                    break;
                                case _.RIGHT:
                                    n = t, c = u;
                                    break;
                                case _.BOTTOM_LEFT:
                                    n = 0, c = i;
                                    break;
                                case _.BOTTOM:
                                    n = s, c = i;
                                    break;
                                case _.BOTTOM_RIGHT:
                                    n = t, c = i
                            }
                            a.img.x = n, a.img.y = c
                        }
                        return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i
                    }

                    function Q(t, e, i) {
                        let n;
                        switch (e.crop && (n = function(t, e) {
                            const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)),
                                n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y));
                            return i && n && (t.width !== i || t.height !== n) ? {
                                x: Math.max(0, e.x),
                                y: Math.max(0, e.y),
                                width: i,
                                height: n
                            } : null
                        }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(et(n)))), t.fittingType) {
                            case h.SCALE_TO_FIT:
                            case h.LEGACY_FIT_WIDTH:
                            case h.LEGACY_FIT_HEIGHT:
                            case h.LEGACY_FULL:
                            case h.FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                t.parts.push(tt(t, i));
                                break;
                            case h.SCALE_TO_FILL:
                                t.parts.push(function(t, e) {
                                    const i = $(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod),
                                        n = D(t.focalPoint);
                                    return {
                                        transformType: n ? u.FILL_FOCAL : u.FILL,
                                        width: Math.round(i.width),
                                        height: Math.round(i.height),
                                        alignment: j(e),
                                        focalPointX: n && n.x,
                                        focalPointY: n && n.y,
                                        upscale: i.scaleFactor > 1,
                                        forceUSM: i.forceUSM,
                                        scaleFactor: i.scaleFactor,
                                        cssUpscaleNeeded: i.cssUpscaleNeeded,
                                        upscaleMethodValue: i.upscaleMethodValue
                                    }
                                }(t, i));
                                break;
                            case h.STRETCH:
                                t.parts.push(function(t, e) {
                                    const i = U(t.src.width, t.src.height, e.width, e.height, u.FILL),
                                        n = Object.assign({}, e);
                                    return n.width = t.src.width * i, n.height = t.src.height * i, tt(t, n)
                                }(t, i));
                                break;
                            case h.TILE_HORIZONTAL:
                            case h.TILE_VERTICAL:
                            case h.TILE:
                            case h.LEGACY_ORIGINAL_SIZE:
                            case h.ORIGINAL_SIZE:
                                n = v(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(et(n));
                                break;
                            case h.LEGACY_STRIP_TILE_HORIZONTAL:
                            case h.LEGACY_STRIP_TILE_VERTICAL:
                            case h.LEGACY_STRIP_TILE:
                            case h.LEGACY_STRIP_ORIGINAL_SIZE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_CROP,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: j(t),
                                        upscale: !1,
                                        forceUSM: !1,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FIT:
                            case h.LEGACY_STRIP_FIT_AND_TILE:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.FIT,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i));
                                break;
                            case h.LEGACY_STRIP_SCALE_TO_FILL:
                                t.parts.push(function(t) {
                                    return {
                                        transformType: u.LEGACY_FILL,
                                        width: Math.round(t.width),
                                        height: Math.round(t.height),
                                        alignment: j(t),
                                        upscale: !1,
                                        forceUSM: !0,
                                        scaleFactor: 1,
                                        cssUpscaleNeeded: !1
                                    }
                                }(i))
                        }
                    }

                    function tt(t, e) {
                        const i = $(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod);
                        return {
                            transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL,
                            width: Math.round(i.width),
                            height: Math.round(i.height),
                            alignment: l.center,
                            upscale: i.scaleFactor > 1,
                            forceUSM: i.forceUSM,
                            scaleFactor: i.scaleFactor,
                            cssUpscaleNeeded: i.cssUpscaleNeeded,
                            upscaleMethodValue: i.upscaleMethodValue
                        }
                    }

                    function et(t) {
                        return {
                            transformType: u.CROP,
                            x: Math.round(t.x),
                            y: Math.round(t.y),
                            width: Math.round(t.width),
                            height: Math.round(t.height),
                            upscale: !1,
                            forceUSM: !1,
                            scaleFactor: 1,
                            cssUpscaleNeeded: !1
                        }
                    }

                    function it(t, e) {
                        var i;
                        e = e || {}, t.quality = function(t, e) {
                            const i = t.fileType === G.PNG,
                                n = t.fileType === G.JPG,
                                a = t.fileType === G.WEBP,
                                r = n || i || a;
                            if (r) {
                                const n = C(t.parts),
                                    a = (o = n.width, c = n.height, m[z(o, c)].quality);
                                let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a;
                                return r = i ? r + 5 : r, r
                            }
                            var o, c;
                            return 0
                        }(t, e), t.progressive = function(t) {
                            return !1 !== t.progressive
                        }(e), t.watermark = function(t) {
                            return t.watermark
                        }(e), t.autoEncode = null === (i = e.autoEncode) || void 0 === i || i, t.unsharpMask = function(t, e) {
                            var i, n, a;
                            if (function(t) {
                                    const e = "number" == typeof(t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500,
                                        i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10,
                                        n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255;
                                    return e && i && n
                                }(e.unsharpMask)) return {
                                radius: Z(null === (i = e.unsharpMask) || void 0 === i ? void 0 : i.radius, 2),
                                amount: Z(null === (n = e.unsharpMask) || void 0 === n ? void 0 : n.amount, 2),
                                threshold: Z(null === (a = e.unsharpMask) || void 0 === a ? void 0 : a.threshold, 2)
                            };
                            if (("number" != typeof(r = (r = e.unsharpMask) || {}).radius || isNaN(r.radius) || 0 !== r.radius || "number" != typeof r.amount || isNaN(r.amount) || 0 !== r.amount || "number" != typeof r.threshold || isNaN(r.threshold) || 0 !== r.threshold) && function(t) {
                                    const e = C(t.parts);
                                    return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT
                                }(t)) return L;
                            var r;
                            return
                        }(t, e), t.filters = function(t) {
                            const e = t.filters || {},
                                i = {};
                            nt(e[O.CONTRAST], -100, 100) && (i[O.CONTRAST] = e[O.CONTRAST]);
                            nt(e[O.BRIGHTNESS], -100, 100) && (i[O.BRIGHTNESS] = e[O.BRIGHTNESS]);
                            nt(e[O.SATURATION], -100, 100) && (i[O.SATURATION] = e[O.SATURATION]);
                            nt(e[O.HUE], -180, 180) && (i[O.HUE] = e[O.HUE]);
                            nt(e[O.BLUR], 0, 100) && (i[O.BLUR] = e[O.BLUR]);
                            return i
                        }(e)
                    }

                    function nt(t, e, i) {
                        return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i
                    }

                    function at(t, e, i, n) {
                        const r = function(t) {
                                var e;
                                return null !== (e = null == t ? void 0 : t.isSEOBot) && void 0 !== e && e
                            }(n),
                            o = H(e.id),
                            c = function(t, e) {
                                const i = /\.([^.]*)$/,
                                    n = new RegExp(`(${y.concat(x).join("|")})`, "g");
                                if (e && e.length) {
                                    let t = e;
                                    const a = e.match(i);
                                    return a && F.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, Y)
                                }
                                const a = t.match(/\/(.*?)$/);
                                return (a ? a[1] : t).replace(i, "")
                            }(e.id, e.name),
                            s = r ? 1 : function(t) {
                                return Math.min(t.pixelAspectRatio || 1, a)
                            }(i),
                            h = B(e.id),
                            u = h,
                            _ = P(e.id, null == n ? void 0 : n.hasAnimation, null == n ? void 0 : n.allowWEBPTransform),
                            T = {
                                fileName: c,
                                fileExtension: h,
                                fileType: o,
                                fittingType: t,
                                preferredExtension: u,
                                src: {
                                    id: e.id,
                                    width: e.width,
                                    height: e.height,
                                    isCropped: !1
                                },
                                focalPoint: {
                                    x: e.focalPoint && e.focalPoint.x,
                                    y: e.focalPoint && e.focalPoint.y
                                },
                                parts: [],
                                devicePixelRatio: s,
                                quality: 0,
                                upscaleMethod: V(n),
                                progressive: !0,
                                watermark: "",
                                unsharpMask: {},
                                filters: {},
                                transformed: _
                            };
                        return _ && (Q(T, e, i), it(T, n)), T
                    }

                    function rt(t, e, i) {
                        const n = Object.assign({}, i),
                            a = b("isMobile");
                        switch (t) {
                            case h.LEGACY_BG_FIT_AND_TILE:
                            case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL:
                            case h.LEGACY_BG_FIT_AND_TILE_VERTICAL:
                            case h.LEGACY_BG_NORMAL:
                                const t = a ? c : r,
                                    i = a ? s : o;
                                n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1
                        }
                        return n
                    }
                    const ot = M `fit/w_${"width"},h_${"height"}`,
                        ct = M `fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        st = M `fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`,
                        ht = M `crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`,
                        ut = M `crop/w_${"width"},h_${"height"},al_${"alignment"}`,
                        _t = M `fill/w_${"width"},h_${"height"},al_${"alignment"}`,
                        Tt = M `,lg_${"upscaleMethodValue"}`,
                        lt = M `,q_${"quality"}`,
                        dt = M `,usm_${"radius"}_${"amount"}_${"threshold"}`,
                        gt = M `,bl`,
                        It = M `,wm_${"watermark"}`,
                        Lt = {
                            [O.CONTRAST]: M `,con_${"contrast"}`,
                            [O.BRIGHTNESS]: M `,br_${"brightness"}`,
                            [O.SATURATION]: M `,sat_${"saturation"}`,
                            [O.HUE]: M `,hue_${"hue"}`,
                            [O.BLUR]: M `,blur_${"blur"}`
                        },
                        Et = M `,enc_auto`;

                    function pt(t, e, i, a = {}, r) {
                        return P(e.id, null == a ? void 0 : a.hasAnimation, null == a ? void 0 : a.allowWEBPTransform) ? function(t) {
                            const e = [];
                            t.parts.forEach((t => {
                                switch (t.transformType) {
                                    case u.CROP:
                                        e.push(ht(t));
                                        break;
                                    case u.LEGACY_CROP:
                                        e.push(ut(t));
                                        break;
                                    case u.LEGACY_FILL:
                                        let i = _t(t);
                                        t.upscale && (i += Tt(t)), e.push(i);
                                        break;
                                    case u.FIT:
                                        let n = ot(t);
                                        t.upscale && (n += Tt(t)), e.push(n);
                                        break;
                                    case u.FILL:
                                        let a = ct(t);
                                        t.upscale && (a += Tt(t)), e.push(a);
                                        break;
                                    case u.FILL_FOCAL:
                                        let r = st(t);
                                        t.upscale && (r += Tt(t)), e.push(r)
                                }
                            }));
                            let i = e.join("/");
                            return t.quality && (i += lt(t)), t.unsharpMask && (i += dt(t.unsharpMask)), t.progressive || (i += gt(t)), t.watermark && (i += It(t)), t.filters && (i += Object.keys(t.filters).map((e => Lt[e](t.filters))).join("")), t.autoEncode && t.fileType !== G.GIF && (i += Et(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}`
                        }(r = r || at(t, e, i, a)) : e.id
                    }
                    const ft = {
                        [_.CENTER]: "50% 50%",
                        [_.TOP_LEFT]: "0% 0%",
                        [_.TOP_RIGHT]: "100% 0%",
                        [_.TOP]: "50% 0%",
                        [_.BOTTOM_LEFT]: "0% 100%",
                        [_.BOTTOM_RIGHT]: "100% 100%",
                        [_.BOTTOM]: "50% 100%",
                        [_.RIGHT]: "100% 50%",
                        [_.LEFT]: "0% 50%"
                    };
                    Object.entries(ft).reduce(((t, [e, i]) => (t[i] = e, t)), {}), h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL, h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL;

                    function mt(t, e, i, n) {
                        let a = {};
                        if (S(t, e, i)) {
                            const r = rt(t, e, i),
                                o = at(t, e, r, n);
                            a.uri = pt(t, e, r, n, o), (null == n ? void 0 : n.useSrcset) && (a.srcset = function(t, e, i, n, a) {
                                const r = i.pixelAspectRatio || 1;
                                return {
                                    dpr: [`${1===r?a.uri:pt(t,e,Object.assign(Object.assign({},i),{pixelAspectRatio:1}),n)} 1x`, `${2===r?a.uri:pt(t,e,Object.assign(Object.assign({},i),{pixelAspectRatio:2}),n)} 2x`]
                                }
                            }(t, e, r, n, a)), Object.assign(a, function(t, e) {
                                let i;
                                return i = e.htmlTag === d.BG ? W : e.htmlTag === d.SVG ? K : X, i(t, e)
                            }(o, r), {
                                transformed: o.transformed
                            })
                        } else a = E;
                        return a
                    }
                    "undefined" != typeof window && window.devicePixelRatio;
                    w(), w()
                },
                84240: function(t, e, i) {
                    i.d(e, {
                        A_: function() {
                            return a.A_
                        },
                        At: function() {
                            return a.At
                        },
                        BU: function() {
                            return n.BU
                        },
                        KT: function() {
                            return a.KT
                        },
                        P2: function() {
                            return a.P2
                        },
                        U2: function() {
                            return r.U2
                        },
                        pR: function() {
                            return n.pR
                        }
                    });
                    var n = i(58047),
                        a = i(65377),
                        r = i(24027)
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/custom-element-utils.inline.12d4ed1c.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.f3266527.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [3727], {
                91862: function(e, t, i) {
                    i.d(t, {
                        KK: function() {
                            return n
                        },
                        Ld: function() {
                            return o
                        },
                        TE: function() {
                            return r
                        },
                        Vl: function() {
                            return s
                        }
                    });

                    function n(e, t, i, n, r) {
                        return (r - e) * (n - i) / (t - e) + i
                    }

                    function r(e, t) {
                        let [i, n] = e, [r, s] = t;
                        return Math.sqrt((r - i) ** 2 + (s - n) ** 2)
                    }

                    function s(e) {
                        return e * Math.PI / 180
                    }

                    function o(e, t, i) {
                        void 0 === e && (e = [0, 0]), void 0 === t && (t = [0, 0]), void 0 === i && (i = 0);
                        return (360 + i + 180 * Math.atan2(t[1] - e[1], t[0] - e[0]) / Math.PI) % 360
                    }
                },
                65377: function(e, t, i) {
                    i.d(t, {
                        A_: function() {
                            return s
                        },
                        At: function() {
                            return o
                        },
                        KT: function() {
                            return r
                        },
                        P2: function() {
                            return u
                        },
                        Yu: function() {
                            return a
                        },
                        a_: function() {
                            return c
                        },
                        dL: function() {
                            return d
                        },
                        tE: function() {
                            return l
                        }
                    });
                    const n = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        r = (e, t) => e && t && Object.keys(t).forEach((i => e.setAttribute(i, t[i]))),
                        s = (e, t) => e && t && Object.keys(t).forEach((i => {
                            const r = t[i];
                            void 0 !== r ? e.style[i] = ((e, t) => "number" != typeof t || n[e] ? t : `${t}px`)(i, r) : e.style.removeProperty(i)
                        })),
                        o = (e, t) => e && t && Object.keys(t).forEach((i => {
                            e.style.setProperty(i, t[i])
                        })),
                        a = (e, t, i = !0) => {
                            return e && i ? (n = e.dataset[t]) ? "true" === n || "false" !== n && ("null" === n ? null : "" + +n === n ? +n : n) : n : e.dataset[t];
                            var n
                        },
                        c = (e, t) => e && t && Object.assign(e.dataset, t),
                        u = e => e || document.documentElement.clientHeight || window.innerHeight || 0,
                        d = () => window ? window.pageYOffset || document.documentElement.scrollTop : 0,
                        l = {
                            fit: "contain",
                            fill: "cover"
                        }
                },
                58047: function(e, t, i) {
                    i.d(t, {
                        BU: function() {
                            return r
                        },
                        F$: function() {
                            return c
                        },
                        Q4: function() {
                            return a
                        },
                        pR: function() {
                            return u
                        }
                    });
                    var n = i(80483);
                    const r = (e, t, i, r) => {
                            const {
                                targetWidth: a,
                                targetHeight: c,
                                imageData: u,
                                filters: d,
                                displayMode: l = n.fittingTypes.SCALE_TO_FILL,
                                hasAnimation: h
                            } = e;
                            if (!a || !c || !u.uri) return {
                                uri: "",
                                css: {}
                            };
                            const {
                                width: g,
                                height: m,
                                crop: f,
                                name: v,
                                focalPoint: b,
                                upscaleMethod: p,
                                quality: w,
                                devicePixelRatio: y = t.devicePixelRatio
                            } = u, E = {
                                filters: d,
                                upscaleMethod: p,
                                ...w,
                                ...r && {
                                    allowWEBPTransform: r
                                },
                                hasAnimation: h
                            }, O = o(y), S = {
                                id: u.uri,
                                width: g,
                                height: m,
                                ...f && {
                                    crop: f
                                },
                                ...b && {
                                    focalPoint: b
                                },
                                ...v && {
                                    name: v
                                }
                            }, x = {
                                width: a,
                                height: c,
                                htmlTag: i || "img",
                                pixelAspectRatio: O,
                                alignment: e.alignType || n.alignTypes.CENTER
                            }, M = (0, n.getData)(l, S, x, E);
                            return M.uri = s(M.uri, t.staticMediaUrl, t.mediaRootUrl), M
                        },
                        s = (e, t, i) => {
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e;
                            let n = `${t}/`;
                            return e && (/^micons\//.test(e) ? n = i : "ico" === /[^.]+$/.exec(e)[0] && (n = n.replace("media", "ficons"))), n + e
                        },
                        o = e => {
                            const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0].toLowerCase().includes("devicepixelratio")));
                            return (t ? Number(t[1]) : null) || e || 1
                        },
                        a = (e, t) => e.getAttribute(t ? "xlink:href" : "src");

                    function c(e) {
                        if (e) {
                            const {
                                type: t
                            } = e.dataset;
                            if (t && "ugc" !== t) {
                                if (!e.dataset.bbox) {
                                    const {
                                        x: t,
                                        y: i,
                                        width: n,
                                        height: r
                                    } = e.getBBox();
                                    return `${t} ${i} ${n} ${r}`
                                }
                            }
                        }
                        return null
                    }

                    function u(e) {
                        return e.isExperimentOpen("specs.thunderbolt.tb_stop_client_images") || e.isExperimentOpen("specs.thunderbolt.final_force_webp") || e.isExperimentOpen("specs.thunderbolt.final_force_no_webp")
                    }
                },
                97471: function(e, t, i) {
                    i.d(t, {
                        Y: function() {
                            return n
                        }
                    });
                    const n = () => {
                        const e = {
                                observedElementToRelayoutTarget: new Map,
                                getLayoutTargets(t) {
                                    const i = new Set;
                                    return t.forEach((t => i.add(e.observedElementToRelayoutTarget.get(t)))), i
                                },
                                observe: i => {
                                    e.observedElementToRelayoutTarget.set(i, i), t.observe(i)
                                },
                                unobserve: i => {
                                    e.observedElementToRelayoutTarget.delete(i), t.unobserve(i)
                                },
                                observeChild: (i, n) => {
                                    e.observedElementToRelayoutTarget.set(i, n), t.observe(i)
                                },
                                unobserveChild: i => {
                                    e.observedElementToRelayoutTarget.delete(i), t.unobserve(i)
                                }
                            },
                            t = new window.ResizeObserver((t => {
                                e.getLayoutTargets(t.map((e => e.target))).forEach((e => e.reLayout()))
                            }));
                        return e
                    }
                },
                24027: function(e, t, i) {
                    i.d(t, {
                        Ax: function() {
                            return o
                        },
                        Tw: function() {
                            return s
                        },
                        U2: function() {
                            return n
                        },
                        hr: function() {
                            return a
                        },
                        w_: function() {
                            return r
                        },
                        xn: function() {
                            return c
                        }
                    });
                    const n = (e, t, i) => {
                            const n = (Array.isArray(t) ? t : t.split(".")).reduce(((e, t) => e && void 0 !== e[t] ? e[t] : null), e);
                            return null !== n ? n : i
                        },
                        r = (e, t) => Object.keys(e).find((i => t(e[i], i))),
                        s = (e, t) => {
                            const i = e.reduce(((e, i) => (e[t(i)] = i, e)), {});
                            return Object.values(i)
                        },
                        o = e => e && e.split ? e.split(";").reduce((function(e, t) {
                            const i = t.split(":");
                            return i[0] && i[1] && (e[i[0].trim()] = i[1].trim()), e
                        }), {}) : {},
                        a = (e, t = window) => {
                            let i = !1;
                            return (...n) => {
                                i || (i = !0, t.requestAnimationFrame((() => {
                                    i = !1, e(...n)
                                })))
                            }
                        };

                    function c(...e) {
                        let t = e[0];
                        for (let i = 1; i < e.length; ++i) t = `${t.replace(/\/$/,"")}/${e[i].replace(/^\//,"")}`;
                        return t
                    }
                },
                70163: function(e, t, i) {
                    var n = {};
                    i.r(n), i.d(n, {
                        BackgroundParallax: function() {
                            return u
                        },
                        BackgroundParallaxZoom: function() {
                            return d
                        },
                        BackgroundReveal: function() {
                            return l
                        },
                        BgCloseUp: function() {
                            return h
                        },
                        BgExpand: function() {
                            return g
                        },
                        BgFabeBack: function() {
                            return m
                        },
                        BgFadeIn: function() {
                            return f
                        },
                        BgFadeOut: function() {
                            return v
                        },
                        BgFake3D: function() {
                            return b
                        },
                        BgPanLeft: function() {
                            return p
                        },
                        BgPanRight: function() {
                            return w
                        },
                        BgParallax: function() {
                            return y
                        },
                        BgPullBack: function() {
                            return E
                        },
                        BgReveal: function() {
                            return O
                        },
                        BgRotate: function() {
                            return S
                        },
                        BgShrink: function() {
                            return x
                        },
                        BgSkew: function() {
                            return M
                        },
                        BgUnwind: function() {
                            return I
                        },
                        BgZoomIn: function() {
                            return R
                        },
                        BgZoomOut: function() {
                            return L
                        },
                        ImageParallax: function() {
                            return A
                        },
                        ImageReveal: function() {
                            return C
                        }
                    });
                    var r = i(96114),
                        s = i.n(r),
                        o = i(91862);
                    const a = (e, t) => ({
                            width: e,
                            height: t
                        }),
                        c = (e, t, i) => ({
                            width: e,
                            height: Math.max(t, i)
                        });
                    const u = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        d = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        l = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        h = {
                            getMediaDimensions: a
                        },
                        g = {
                            getMediaDimensions: a
                        },
                        m = {
                            getMediaDimensions: a
                        },
                        f = {
                            getMediaDimensions: a
                        },
                        v = {
                            getMediaDimensions: a
                        },
                        b = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        p = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.2 * e,
                                height: t
                            })
                        },
                        w = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.2 * e,
                                height: t
                            })
                        },
                        y = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        E = {
                            getMediaDimensions: a
                        },
                        O = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        S = {
                            getMediaDimensions: (e, t) => function(e, t, i) {
                                const n = (0, o.Vl)(i),
                                    r = Math.hypot(e, t) / 2,
                                    s = Math.acos(e / 2 / r),
                                    a = e * Math.abs(Math.cos(n)) + t * Math.abs(Math.sin(n)),
                                    c = e * Math.abs(Math.sin(n)) + t * Math.abs(Math.cos(n));
                                return {
                                    width: Math.ceil(n < s ? a : 2 * r),
                                    height: Math.ceil(n < (0, o.Vl)(90) - s ? c : 2 * r)
                                }
                            }(e, t, 22)
                        },
                        x = {
                            getMediaDimensions: a
                        },
                        M = {
                            getMediaDimensions: (e, t) => function(e, t, i) {
                                const n = (0, o.Vl)(i);
                                return {
                                    width: e,
                                    height: e * Math.tan(n) + t
                                }
                            }(e, t, 20)
                        },
                        I = {
                            getMediaDimensions: a
                        },
                        R = {
                            hasParallax: !0,
                            getMediaDimensions: c
                        },
                        L = {
                            getMediaDimensions: (e, t) => ({
                                width: 1.15 * e,
                                height: 1.15 * t
                            })
                        },
                        A = {
                            getMediaDimensions: (e, t) => ({
                                width: e,
                                height: 1.5 * t
                            })
                        },
                        C = {
                            getMediaDimensions: (e, t, i) => ({
                                width: e,
                                height: i
                            })
                        };
                    var T = i(80483),
                        P = i(24027),
                        H = i(84240);
                    var B = function(e, t, i = window) {
                        const n = {
                            width: void 0,
                            height: void 0,
                            left: void 0
                        };
                        return class extends e {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const {
                                    containerId: e,
                                    pageId: r,
                                    useCssVars: s,
                                    bgEffectName: o
                                } = this.dataset, a = i.document.getElementById(`${e}`), c = i.document.getElementById(`${r}`), u = {};
                                t.mutationService.measure((() => {
                                    const e = "fixed" === i.getComputedStyle(this).position,
                                        n = (0, H.P2)(t.getScreenHeightOverride ? .()),
                                        r = a.getBoundingClientRect(),
                                        d = t.getMediaDimensionsByEffect(o, r.width, r.height, n),
                                        {
                                            hasParallax: l
                                        } = d,
                                        h = (i.getComputedStyle(c).transition || "").includes("transform"),
                                        {
                                            width: g,
                                            height: m
                                        } = d,
                                        f = `${g}px`,
                                        v = `${m}px`;
                                    let b = (r.width - g) / 2 + "px";
                                    if (e) {
                                        const e = i.document.documentElement.clientLeft;
                                        b = h ? a.offsetLeft - e + "px" : r.left - e + "px"
                                    }
                                    const p = e || l ? 0 : (r.height - m) / 2 + "px",
                                        w = s ? {
                                            "--containerW": f,
                                            "--containerH": v,
                                            "--containerL": b,
                                            "--screenH_val": `${n}`
                                        } : {
                                            width: f,
                                            height: v,
                                            left: b,
                                            top: p
                                        };
                                    Object.assign(u, w)
                                })), t.mutationService.mutate((() => {
                                    s ? ((0, H.A_)(this, n), (0, H.At)(this, u)) : (0, H.A_)(this, u)
                                }))
                            }
                            connectedCallback() {
                                super.connectedCallback(), t.windowResizeService.observe(this)
                            }
                            disconnectedCallback() {
                                super.disconnectedCallback(), t.windowResizeService.unobserve(this)
                            }
                            attributeChangedCallback(e, t) {
                                t && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-is-full-height", "data-container-size"]
                            }
                        }
                    };
                    var D = function(e, t = window) {
                            class i extends t.HTMLElement {
                                constructor() {
                                    super()
                                }
                                reLayout() {}
                                connectedCallback() {
                                    this.observeResize(), this.reLayout()
                                }
                                disconnectedCallback() {
                                    this.unobserveResize(), this.unobserveChildren()
                                }
                                observeResize() {
                                    e.resizeService.observe(this)
                                }
                                unobserveResize() {
                                    e.resizeService.unobserve(this)
                                }
                                observeChildren(e) {
                                    this.childListObserver || (this.childListObserver = new t.MutationObserver((() => this.reLayout()))), this.childListObserver.observe(e, {
                                        childList: !0
                                    })
                                }
                                observeChildAttributes(e, i = []) {
                                    this.childrenAttributesObservers || (this.childrenAttributesObservers = []);
                                    const n = new t.MutationObserver((() => this.reLayout()));
                                    n.observe(e, {
                                        attributeFilter: i
                                    }), this.childrenAttributesObservers.push(n)
                                }
                                observeChildResize(t) {
                                    this.childrenResizeObservers || (this.childrenResizeObservers = []), e.resizeService.observeChild(t, this), this.childrenResizeObservers.push(t)
                                }
                                unobserveChildrenResize() {
                                    this.childrenResizeObservers && (this.childrenResizeObservers.forEach((t => {
                                        e.resizeService.unobserveChild(t)
                                    })), this.childrenResizeObservers = null)
                                }
                                unobserveChildren() {
                                    if (this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null), this.childrenAttributesObservers) {
                                        for (let e of this.childrenAttributesObservers) e.disconnect(), e = null;
                                        this.childrenAttributesObservers = null
                                    }
                                    this.unobserveChildrenResize()
                                }
                            }
                            return i
                        },
                        z = i(58047);
                    const k = "scroll-css-var--scrollEffect";
                    var _ = class {
                        constructor(e, t = window) {
                            this.mutationService = e, (e => e && "IntersectionObserver" in e && "IntersectionObserverEntry" in e && "intersectionRatio" in e.IntersectionObserverEntry.prototype && "isIntersecting" in e.IntersectionObserverEntry.prototype && !(e => /Edge\/18/.test(e.navigator.userAgent))(e))(t) && (this.intersectionObserver = new t.IntersectionObserver(this.getViewPortIntersectionHandler(), {
                                rootMargin: "50% 0px"
                            }), this.scrollEffectsIntersectionObserver = new t.IntersectionObserver(this.getScrollEffectsIntersectionHandler(), {
                                rootMargin: "10% 0px"
                            }))
                        }
                        isImageInViewPort(e, t) {
                            return e.top + e.height >= 0 && e.bottom - e.height <= t
                        }
                        loadImage(e, {
                            screenHeight: t,
                            boundingRect: i,
                            withScrollEffectVars: n
                        }) {
                            !this.intersectionObserver || this.isImageInViewPort(i, t) ? this.setImageSource(e) : (this.intersectionObserver.unobserve(e), this.intersectionObserver.observe(e)), n && this.scrollEffectsIntersectionObserver && (this.scrollEffectsIntersectionObserver.unobserve(e), this.scrollEffectsIntersectionObserver.observe(e))
                        }
                        onImageDisconnected(e) {
                            this.intersectionObserver && this.intersectionObserver.unobserve(e), this.scrollEffectsIntersectionObserver && this.scrollEffectsIntersectionObserver.unobserve(e)
                        }
                        setSrcAttribute(e, t, i, n) {
                            (0, z.Q4)(e, t) !== n && (t ? e.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", n) : (e.hasAttribute("loading") && e.removeAttribute("loading"), i && e.setAttribute("srcset", n), e.setAttribute("fetchpriority", "high"), e.src = n))
                        }
                        setSourceSetAttribute(e, t) {
                            e.srcset !== t && (e.srcset = t)
                        }
                        setImageSource(e) {
                            const t = "true" === e.dataset.isSvg,
                                i = e.querySelector(t ? "image" : "img"),
                                n = i.hasAttribute("srcset"),
                                r = e.querySelector("picture");
                            this.setSrcAttribute(i, t, n, e.dataset.src), r && Array.from(r.querySelectorAll("source")).forEach((e => {
                                this.setSourceSetAttribute(e, e.dataset.srcset)
                            }))
                        }
                        getViewPortIntersectionHandler() {
                            return (e, t) => {
                                e.filter((e => e.isIntersecting)).forEach((e => {
                                    const i = e.target;
                                    this.setImageSource(i), t.unobserve(i)
                                }))
                            }
                        }
                        getScrollEffectsIntersectionHandler() {
                            return e => e.forEach((e => {
                                const t = e.target;
                                e.isIntersecting ? this.mutationService.mutate((() => t.classList.add(k))) : this.mutationService.mutate((() => t.classList.remove(k)))
                            }))
                        }
                    };
                    const j = 80;
                    var W = {
                            measure: function(e, t, i, {
                                containerElm: n,
                                isSvgImage: r,
                                isSvgMask: s,
                                mediaHeightOverrideType: o,
                                bgEffectName: a
                            }, c) {
                                const u = i.image,
                                    d = i[e],
                                    l = (0, H.P2)(c.getScreenHeightOverride ? .()),
                                    h = n && a ? n : d,
                                    {
                                        width: g,
                                        height: m
                                    } = c.getMediaDimensionsByEffect(a, h.offsetWidth, h.offsetHeight, l);
                                if (!u) return;
                                const f = (0, z.Q4)(u, r);
                                t.width = g, t.screenHeight = l, t.height = function(e, t) {
                                    return "fixed" === e || "viewport" === e ? document.documentElement.clientHeight + j : t
                                }(o, m), t.isZoomed = d.getAttribute("data-image-zoomed"), t.isSvgImage = r, t.imgSrc = f, t.renderedStyles = d.getAttribute("data-style"), t.boundingRect = d.getBoundingClientRect(), t.mediaHeightOverrideType = o, s && (t.bBox = (0, z.F$)(i.maskSvg))
                            },
                            patch: function(e, t, i, n, r, s, o, a) {
                                if (!Object.keys(t).length) return;
                                const c = (0, P.Ax)(t.renderedStyles),
                                    {
                                        imageData: u
                                    } = n;
                                a && (u.devicePixelRatio = 1);
                                const d = n.targetScale || 1,
                                    l = { ...n,
                                        ...n.skipMeasure ? {} : {
                                            targetWidth: (t.isZoomed ? u.width : t.width) * d,
                                            targetHeight: (t.isZoomed ? u.height : t.height) * d
                                        },
                                        displayMode: u.displayMode
                                    };
                                let h;
                                if (t.isSvgImage) h = (0, H.BU)(l, s, "svg"), (0, H.KT)(i.svg, t.isZoomed ? h.attr.container : {});
                                else {
                                    h = (0, H.BU)(l, s, "img");
                                    const e = (0, H.U2)(h, ["css", "img"]) || {},
                                        n = function(e, t, i, n) {
                                            const r = function(e, t = 1) {
                                                return 1 !== t ? { ...e,
                                                    width: "100%",
                                                    height: "100%"
                                                } : e
                                            }(t, n);
                                            if (!e) return r;
                                            const s = { ...r
                                            };
                                            return "fill" === i && (s.position = "absolute", s.top = 0), "fit" === i && (s.height = "100%"), "fixed" === e && (s["will-change"] = "transform"), s.objectPosition && (s.objectPosition = t.objectPosition.replace(/(center|bottom)$/, "top")), s
                                        }(t.mediaHeightOverrideType, e, u.displayMode, d);
                                    (0, H.A_)(i.image, n)
                                }
                                t.bBox && i.maskSvg && (0, H.KT)(i.maskSvg, {
                                    viewBox: t.bBox
                                });
                                const g = function(e, t) {
                                    const i = function(e) {
                                        const { ...t
                                        } = e, i = {};
                                        for (e in t) "" !== t[e] && (i[e] = t[e]);
                                        return i
                                    }(e);
                                    return "number" == typeof t && (i.opacity = t), i
                                }(c, u.opacity);
                                (0, H.A_)(i[e], g);
                                const m = (0, H.U2)(h, "uri"),
                                    f = {
                                        "data-src": m,
                                        "data-has-ssr-src": ""
                                    };
                                (0, H.KT)(i[e], f), s.disableImagesLazyLoading && (0, H.KT)(i.image, {
                                    src: m
                                }), o && r.imageLoader.loadImage(i[e], {
                                    screenHeight: t.screenHeight,
                                    boundingRect: t.boundingRect
                                })
                            }
                        },
                        U = i(65377);
                    const $ = "--compH",
                        q = "--top",
                        N = "--scroll",
                        V = {
                            parallax: "ImageParallax",
                            fixed: "ImageReveal"
                        };

                    function F(e, t, i = 1.5) {
                        return {
                            parallax: e.height * i,
                            fixed: e.screenHeight
                        }[t] || e.height
                    }
                    var K = {
                        measure: function(e, t, i) {
                            const n = i.image;
                            if (!n) return;
                            const r = (0, z.Q4)(n);
                            t.width = i[e].offsetWidth, t.height = i[e].offsetHeight, t.imgSrc = r, t.screenHeight = (0, H.P2)(), t.boundingRect = i[e].getBoundingClientRect(), t.documentScroll = (0, U.dL)()
                        },
                        patch: function(e, t, i, n, r, s, o) {
                            const {
                                imageData: a,
                                parallaxSpeed: c
                            } = n, u = !r.isExperimentOpen ? .("specs.thunderbolt.useNewImageParallax"), d = { ...n,
                                targetWidth: t.width,
                                targetHeight: u ? F(t, a.scrollEffect, c) : r.getMediaDimensionsByEffect(V[a.scrollEffect], t.width, t.height, t.screenHeight).height,
                                displayMode: a.displayMode
                            }, l = function(e) {
                                const t = {};
                                return "number" == typeof e && (t.opacity = e), t
                            }(a.opacity);
                            (0, H.A_)(i[e], l);
                            const h = r.isExperimentOpen ? .("specs.thunderbolt.allowWEBPTransformation"),
                                g = (0, H.BU)(d, s, "img", h),
                                m = (0, H.U2)(g, "uri");
                            (0, H.KT)(i[e], {
                                "data-src": m
                            });
                            const f = function(e, t = []) {
                                return "parallax" === e || t.some((e => "parallax" === e.scrollEffect))
                            }(a.scrollEffect, n.sourceSets);
                            f && (0, H.At)(i[e], function(e) {
                                return {
                                    [$]: e.height,
                                    [q]: Math.ceil(e.boundingRect.top) + e.documentScroll,
                                    [N]: e.documentScroll
                                }
                            }(t));
                            const v = function(e) {
                                const t = (0, H.U2)(e, ["css", "img"]);
                                return {
                                    width: "100%",
                                    objectFit: t ? t.objectFit : void 0
                                }
                            }(g);
                            (0, H.A_)(i.image, v), i.picture && function(e, t, i, n, r, s) {
                                const {
                                    sourceSets: o
                                } = t;
                                if (!o || !o.length) return;
                                const a = JSON.parse(JSON.stringify(t)),
                                    {
                                        parallaxSpeed: c
                                    } = a;
                                o.forEach((t => {
                                    const o = n.querySelector(`source[media='${t.mediaQuery}']`);
                                    a.imageData.crop = t.crop, a.imageData.displayMode = t.displayMode, a.imageData.focalPoint = t.focalPoint, a.targetHeight = r ? F(e, a.imageData.scrollEffect, c) : s.getMediaDimensionsByEffect(V[t.scrollEffect], e.width, e.height, e.screenHeight).height;
                                    const u = (0, H.BU)(a, i, "img");
                                    (0, H.KT)(o, {
                                        "data-srcset": (0, H.U2)(u, "uri")
                                    })
                                }))
                            }(t, d, s, i.picture, u, r), (0, H.KT)(i[e], {
                                "data-has-ssr-src": ""
                            }), o && r.imageLoader.loadImage(i[e], {
                                screenHeight: t.screenHeight,
                                boundingRect: t.boundingRect,
                                withScrollEffectVars: f
                            })
                        }
                    };
                    var Q = function(e, t, i, n = window) {
                        return t.imageLoader || (t.imageLoader = new _(t.mutationService, n)), class extends e {
                            constructor() {
                                super(), this.childListObserver = null, this.timeoutId = null
                            }
                            reLayout() {
                                if ((0, H.pR)(t)) return;
                                const e = {},
                                    r = {},
                                    s = this.getAttribute("id"),
                                    o = JSON.parse(this.dataset.imageInfo),
                                    a = "true" === this.dataset.isSvg,
                                    c = "true" === this.dataset.isSvgMask,
                                    u = "true" === this.dataset.isResponsive,
                                    {
                                        bgEffectName: d
                                    } = this.dataset;
                                e[s] = this, o.containerId && (e[o.containerId] = n.document.getElementById(`${o.containerId}`)), e.image = this.querySelector(a ? "image" : "img"), e.svg = a ? this.querySelector("svg") : null, e.picture = this.querySelector("picture");
                                const l = o.containerId && e[o.containerId],
                                    h = l && l.dataset.mediaHeightOverrideType;
                                if (c && (e.maskSvg = e.svg && e.svg.querySelector("svg")), !e.image) {
                                    const t = a && e.svg || this;
                                    return void this.observeChildren(t)
                                }
                                this.unobserveChildren(), this.observeChildren(this);
                                const g = u || e.picture ? K : W;
                                t.mutationService.measure((() => {
                                    g.measure(s, r, e, {
                                        containerElm: l,
                                        isSvg: a,
                                        isSvgMask: c,
                                        mediaHeightOverrideType: h,
                                        bgEffectName: d
                                    }, t)
                                }));
                                const m = n => {
                                    t.mutationService.mutate((() => {
                                        g.patch(s, r, e, o, t, i, n, d)
                                    }))
                                };
                                !(0, z.Q4)(e.image, a) || this.dataset.hasSsrSrc ? m(!0) : this.debounceImageLoad(m)
                            }
                            debounceImageLoad(e) {
                                clearTimeout(this.timeoutId), this.timeoutId = setTimeout((() => {
                                    e(!0)
                                }), 250), e(!1)
                            }
                            attributeChangedCallback(e, t) {
                                t && this.reLayout()
                            }
                            disconnectedCallback() {
                                super.disconnectedCallback(), t.imageLoader.onImageDisconnected(this), this.unobserveChildren()
                            }
                            static get observedAttributes() {
                                return ["data-image-info"]
                            }
                        }
                    };
                    var Z = i(97471);
                    var J = {
                            imageClientApi: T,
                            ...{
                                init: function(e, t = window) {
                                    !
                                    /**
                                     * @license
                                     * Copyright (c) 2016 The Polymer Project Authors. All rights reserved.
                                     * This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
                                     * The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
                                     * The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
                                     * Code distributed by Google as part of the polymer project is also
                                     * subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
                                     */
                                    function(e) {
                                        if (void 0 === e.Reflect || void 0 === e.customElements || e.customElements.hasOwnProperty("polyfillWrapFlushCallback")) return;
                                        const t = e.HTMLElement;
                                        e.HTMLElement = function() {
                                            return e.Reflect.construct(t, [], this.constructor)
                                        }, e.HTMLElement.prototype = t.prototype, e.HTMLElement.prototype.constructor = e.HTMLElement, e.Object.setPrototypeOf(e.HTMLElement, t), e.Object.defineProperty(e.HTMLElement, "name", {
                                            value: t.name
                                        })
                                    }(t);
                                    const i = {
                                        registry: new Set,
                                        observe(e) {
                                            i.registry.add(e)
                                        },
                                        unobserve(e) {
                                            i.registry.delete(e)
                                        }
                                    };
                                    e.windowResizeService.init((0, P.hr)((() => i.registry.forEach((e => e.reLayout())))), t);
                                    const n = (0, Z.Y)(),
                                        r = (e, i) => {
                                            void 0 === t.customElements.get(e) && t.customElements.define(e, i)
                                        },
                                        s = D({
                                            resizeService: n
                                        }, t);
                                    return t.customElementNamespace = {
                                        WixElement: s
                                    }, r("wix-element", s), {
                                        contextWindow: t,
                                        defineWixImage: (e, i) => {
                                            const n = Q(s, e, i, t);
                                            r("wix-image", n)
                                        },
                                        defineWixBgMedia: e => {
                                            const n = B(s, {
                                                windowResizeService: i,
                                                ...e
                                            }, t);
                                            r("wix-bg-media", n)
                                        }
                                    }
                                }
                            }
                        },
                        Y = i(10718);
                    const X = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        G = (e, t) => (Array.isArray(t) ? t : [t]).reduce(((t, i) => {
                            const n = e[i];
                            return void 0 !== n ? Object.assign(t, {
                                [i]: n
                            }) : t
                        }), {}),
                        ee = (e, t) => e && t && Object.keys(t).forEach((i => {
                            const n = t[i];
                            void 0 !== n ? e.style[i] = ((e, t) => "number" != typeof t || X[e] ? t : `${t}px`)(i, n) : e.style.removeProperty(i)
                        })),
                        te = (e, t, i) => {
                            var n;
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e;
                            let r = `${t}/`;
                            return e && (/^micons\//.test(e) ? r = i : "ico" === (null === (n = /[^.]+$/.exec(e)) || void 0 === n ? void 0 : n[0]) && (r = r.replace("media", "ficons"))), r + e
                        },
                        ie = e => {
                            const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0].toLowerCase().includes("devicepixelratio")));
                            return (t ? Number(t[1]) : null) || e || 1
                        },
                        ne = e => e.getAttribute("src"),
                        re = 80;

                    function se(e, t, i, n) {
                        const r = function(e, t = 1) {
                            return 1 !== t ? Object.assign(Object.assign({}, e), {
                                width: "100%",
                                height: "100%"
                            }) : e
                        }(t, n);
                        if (!e) return r;
                        const s = Object.assign({}, r);
                        return "fill" === i ? (s.position = "absolute", s.top = "0") : "fit" === i && (s.height = "100%"), "fixed" === e && (s["will-change"] = "transform"), s.objectPosition && (s.objectPosition = t.objectPosition.replace(/(center|bottom)$/, "top")), s
                    }
                    var oe = {
                        measure: function(e, t, i, {
                            containerElm: n,
                            bgEffectName: r = "none"
                        }, s) {
                            var o, a;
                            const c = i.image,
                                u = i[e],
                                d = (null === (o = s.getScreenHeightOverride) || void 0 === o ? void 0 : o.call(s)) || document.documentElement.clientHeight || window.innerHeight || 0,
                                l = null == n ? void 0 : n.dataset.mediaHeightOverrideType,
                                h = n && r && "none" !== r ? n : u,
                                {
                                    width: g,
                                    height: m
                                } = (null === (a = s.getMediaDimensionsByEffect) || void 0 === a ? void 0 : a.call(s, r, h.offsetWidth, h.offsetHeight, d)) || {
                                    width: u.offsetWidth,
                                    height: u.offsetHeight
                                };
                            if (!c) return;
                            const f = ne(c);
                            t.width = g, t.height = function(e, t) {
                                return "fixed" === t || "viewport" === t ? document.documentElement.clientHeight + re : e
                            }(m, l), t.screenHeight = d, t.imgSrc = f, t.boundingRect = u.getBoundingClientRect(), t.mediaHeightOverrideType = l
                        },
                        patch: function(e, t, i, n, r, s, o, a) {
                            var c, u;
                            if (!Object.keys(t).length) return;
                            const {
                                imageData: d
                            } = n, l = i[e], h = i.image;
                            a && (d.devicePixelRatio = 1);
                            const g = n.targetScale || 1,
                                m = ((e, t, i, n) => {
                                    if (!e.targetWidth || !e.targetHeight || !e.imageData.uri) return {
                                        uri: "",
                                        css: {},
                                        transformed: !1
                                    };
                                    const {
                                        imageData: r
                                    } = e, s = e.displayMode || Y.X3.SCALE_TO_FILL, o = Object.assign(G(r, ["upscaleMethod", "hasAnimation"]), G(e, "filters"), e.quality || r.quality, n && {
                                        allowWEBPTransform: n
                                    }), a = e.imageData.devicePixelRatio || t.devicePixelRatio, c = ie(a), u = Object.assign(G(r, ["width", "height", "crop", "name", "focalPoint"]), {
                                        id: r.uri
                                    }), d = {
                                        width: e.targetWidth,
                                        height: e.targetHeight,
                                        htmlTag: i || "img",
                                        pixelAspectRatio: c,
                                        alignment: e.alignType || Y.Md.CENTER
                                    }, l = (0, Y.Yu)(s, u, d, o);
                                    return l.uri = te(l.uri, t.staticMediaUrl, t.mediaRootUrl), l
                                })(Object.assign(Object.assign(Object.assign({}, n), !n.skipMeasure && {
                                    targetWidth: (t.width || 0) * g,
                                    targetHeight: (t.height || 0) * g
                                }), {
                                    displayMode: d.displayMode
                                }), s, "img", null === (c = r.isExperimentOpen) || void 0 === c ? void 0 : c.call(r, "specs.thunderbolt.allowWEBPTransformation")),
                                f = (null === (u = null == m ? void 0 : m.css) || void 0 === u ? void 0 : u.img) || {},
                                v = se(t.mediaHeightOverrideType, f, d.displayMode, g);
                            ee(h, v);
                            const b = (null == m ? void 0 : m.uri) || "";
                            l.setAttribute("data-src", b), l.setAttribute("data-has-ssr-src", ""), n.isLQIP && n.lqipTransition && !("transitioned" in l.dataset) && (l.dataset.transitioned = "", h.complete ? h.onload = function() {
                                h.dataset.loadDone = ""
                            } : h.onload = function() {
                                h.complete ? h.dataset.loadDone = "" : h.onload = function() {
                                    h.dataset.loadDone = ""
                                }
                            }), o && (h.setAttribute("fetchpriority", "high"), h.currentSrc !== b && h.setAttribute("src", b), h.srcset && h.srcset !== b && h.setAttribute("srcset", b))
                        }
                    };
                    var ae = function(e, t, i) {
                        return class extends i.HTMLElement {
                            constructor() {
                                super(), this.childListObserver = null, this.timeoutId = null
                            }
                            attributeChangedCallback(e, t) {
                                t && this.reLayout()
                            }
                            connectedCallback() {
                                t.disableImagesLazyLoading ? this.reLayout() : this.observeIntersect()
                            }
                            disconnectedCallback() {
                                this.unobserveResize(), this.unobserveIntersect(), this.unobserveChildren()
                            }
                            static get observedAttributes() {
                                return ["data-image-info"]
                            }
                            reLayout() {
                                const n = {},
                                    r = {},
                                    s = this.getAttribute("id"),
                                    o = JSON.parse(this.dataset.imageInfo || ""),
                                    {
                                        bgEffectName: a
                                    } = this.dataset;
                                n[s] = this, o.containerId && (n[o.containerId] = i.document.getElementById(`${o.containerId}`)), n.image = this.querySelector("img");
                                const c = o.containerId ? n[o.containerId] : void 0;
                                if (!n.image) {
                                    const e = this;
                                    return void this.observeChildren(e)
                                }
                                this.unobserveChildren(), this.observeChildren(this), e.mutationService.measure((() => {
                                    oe.measure(s, r, n, {
                                        containerElm: c,
                                        bgEffectName: a
                                    }, e)
                                }));
                                const u = i => {
                                    e.mutationService.mutate((() => {
                                        oe.patch(s, r, n, o, e, t, i, a)
                                    }))
                                };
                                !ne(n.image) || this.dataset.hasSsrSrc ? u(!0) : this.debounceImageLoad(u)
                            }
                            debounceImageLoad(e) {
                                clearTimeout(this.timeoutId), this.timeoutId = i.setTimeout((() => {
                                    e(!0)
                                }), 250), e(!1)
                            }
                            observeResize() {
                                var t;
                                null === (t = e.resizeService) || void 0 === t || t.observe(this)
                            }
                            unobserveResize() {
                                var t;
                                null === (t = e.resizeService) || void 0 === t || t.unobserve(this)
                            }
                            observeIntersect() {
                                var t;
                                null === (t = e.intersectionService) || void 0 === t || t.observe(this)
                            }
                            unobserveIntersect() {
                                var t;
                                null === (t = e.intersectionService) || void 0 === t || t.unobserve(this)
                            }
                            observeChildren(e) {
                                this.childListObserver || (this.childListObserver = new i.MutationObserver((() => {
                                    this.reLayout()
                                }))), this.childListObserver.observe(e, {
                                    childList: !0
                                })
                            }
                            unobserveChildren() {
                                this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null)
                            }
                        }
                    };

                    function ce(e = {}, t = null, i = {}) {
                        if ("undefined" == typeof window) return;
                        const n = Object.assign({
                                staticMediaUrl: "https://static.wixstatic.com/media",
                                mediaRootUrl: "https://static.wixstatic.com",
                                experiments: {},
                                devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio
                            }, i),
                            r = function(e) {
                                const t = "wow-image";
                                if (void 0 === (e = e || window).customElements.get(t)) {
                                    let i, n;
                                    return e.ResizeObserver && (i = new e.ResizeObserver((e => e.map((e => e.target.reLayout()))))), e.IntersectionObserver && (n = new IntersectionObserver(((e, t) => e.map((e => {
                                            const t = e.target;
                                            return e.isIntersecting && (t.unobserveIntersect(), t.observeResize()), e
                                        }))), {
                                            rootMargin: "50% 0px"
                                        })),
                                        function(r, s) {
                                            const o = ae(Object.assign({
                                                resizeService: i,
                                                intersectionService: n
                                            }, r), s, e);
                                            e.customElements.define(t, o)
                                        }
                                }
                            }(t);
                        r && r(Object.assign({
                            mutationService: s()
                        }, e), n)
                    }
                    const ue = () => ({
                            getSiteScale: () => {
                                const e = document.querySelector("#site-root");
                                return e ? e.getBoundingClientRect().width / e.offsetWidth : 1
                            }
                        }),
                        de = () => {
                            const e = {
                                    init: e => new ResizeObserver(e)
                                },
                                t = {
                                    init: e => window.addEventListener("resize", e)
                                },
                                i = ue();
                            return J.init({
                                resizeService: e,
                                windowResizeService: t,
                                siteService: i
                            })
                        },
                        le = (e, t, i, r) => {
                            const {
                                getMediaDimensions: s,
                                ...o
                            } = n[e] || {};
                            return s ? { ...s(t, i, r),
                                ...o
                            } : {
                                width: t,
                                height: i,
                                ...o
                            }
                        },
                        {
                            experiments: he,
                            media: ge,
                            requestUrl: me
                        } = window.viewerModel;
                    ((e, t, i, n) => {
                        const {
                            environmentConsts: r,
                            wixCustomElements: o,
                            media: a,
                            requestUrl: c,
                            mediaServices: u
                        } = ((e, t, i, n) => {
                            const r = {
                                    staticMediaUrl: e.media.staticMediaUrl,
                                    mediaRootUrl: e.media.mediaRootUrl,
                                    experiments: {},
                                    isViewerMode: !0,
                                    devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio,
                                    ...n
                                },
                                o = {
                                    mutationService: s(),
                                    isExperimentOpen: t => Boolean(e.experiments[t]),
                                    siteService: ue()
                                },
                                a = {
                                    getMediaDimensionsByEffect: le,
                                    ...o,
                                    ...i
                                };
                            return { ...e,
                                wixCustomElements: t || de(),
                                services: o,
                                environmentConsts: r,
                                mediaServices: a
                            }
                        })(e, t, i, n), d = o ? .contextWindow || window;
                        d.wixCustomElements = o, Object.assign(d.customElementNamespace, {
                            mediaServices: u,
                            environmentConsts: r,
                            requestUrl: c,
                            staticVideoUrl: a.staticVideoUrl
                        }), ce({ ...u
                        }, o.contextWindow, r), o.defineWixImage(u, r), o.defineWixBgMedia(u), window.__imageClientApi__ = J.imageClientApi
                    })({
                        experiments: he,
                        media: ge,
                        requestUrl: me
                    })
                }
            },
            function(e) {
                e.O(0, [6008, 774], (function() {
                    return t = 70163, e(e.s = t);
                    var t
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.f3266527.bundle.min.js.map
    </script>

    <!-- Page preloader-->
    <div class="page-loader">
        <div>
          <div class="page-loader-body">
            <div class="loader">
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="window"></div>
                <div class="door"></div>
                <div class="hotel-sign"><span>R</span><span>E</span><span>S</span><span>O</span><span>R</span><span>T</span></div>
            </div>
          </div>
        </div>
    </div>

    <div id="SITE_CONTAINER">
        <div id="main_MF" class="wix-global-css">
            <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region" aria-label="top of page"><span class="mHZSwn">top of page</span></div>
            <div
                id="site-root" class="site-root">
                <div id="masterPage" class="masterPage css-editing-scope">
                    <div id="SITE_PAGES" data-page-transition="none" class="JshATs SITE_PAGES">
                        <div id="c1dmp" class="P0dCOY c1dmp">
                            <div class="PJ4KCX wixui-page" data-testid="page-bg"></div>
                            <div>
                                <div class="c1dmp-overflow-wrapper" data-testid="responsive-container-overflow">
                                    <div class="c1dmp-container" data-testid="responsive-container-content" tabindex="-1">
                                        <header id="comp-kbgakxea" class="comp-kbgakxea S6Dcte comp-kbgakxea-container">
                                            <section id="comp-kbgakxea_r_comp-kbgajy18" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-kbgakxea_r_comp-kbgajy18-container comp-kbgakxea_r_comp-kbgajy18 xuzjBY wixui-header undefined" data-testid="section-container">
                                                <div id="bgLayers_comp-kbgakxea_r_comp-kbgajy18" data-hook="bgLayers" class="MW5IWV">
                                                    <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                    <div id="bgMedia_comp-kbgakxea_r_comp-kbgajy18" class="VgO9Yg"></div>
                                                </div><button id="comp-kbgakxea_r_comp-kkmqi5lg" class="comp-kbgakxea_r_comp-kkmqi5lg wixui-vector-image"><div data-testid="svgRoot-comp-kbgakxea_r_comp-kkmqi5lg" class="aizuI7 TcoJIb WQ4fSJ comp-kbgakxea_r_comp-kkmqi5lg"><?xml version="1.0" encoding="UTF-8"?>
<svg preserveAspectRatio="xMidYMid meet" data-bbox="44 64 112 72" viewBox="44 64 112 72" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img" aria-label="Open Site Navigation">
    <g>
        <path d="M156 64v6H44v-6h112z"/>
        <path d="M156 97v6H44v-6h112z"/>
        <path d="M156 130v6H44v-6h112z"/>
    </g>
</svg>
</div></button>
                                                <div id="comp-kbgakxea_r_comp-lrrbapjo" data-testid="imageX" class="z4Uj6S comp-kbgakxea_r_comp-lrrbapjo wixui-image">
                                                    <wix-image id="img-comp-kbgakxea_r_comp-lrrbapjo" data-image-info="{&quot;containerId&quot;:&quot;comp-kbgakxea_r_comp-lrrbapjo&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_dc4ace86e6294a1d9db31214408376cf~mv2.png&quot;,&quot;width&quot;:261,&quot;height&quot;:261,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;IMG_20240120_163302.png&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;width&quot;:261,&quot;height&quot;:261,&quot;svgId&quot;:&quot;&quot;,&quot;flip&quot;:&quot;none&quot;},&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                                        data-has-ssr-src="true" class="L4tPY9">
                                                        <picture><img src="../../img/logo/Zephyr.png" alt="" style="object-fit:cover;object-position:50% 50%"
                                                            /></picture>
                                                    </wix-image>
                                                </div>
                                                <div id="comp-kbgakxea_r_comp-lrs342sd" class="QOX0dS JCRlLH comp-kbgakxea_r_comp-lrs342sd-container comp-kbgakxea_r_comp-lrs342sd wixui-box">
                                                    <div id="meshbg_1" class="AG_P7Z MAs5Tr wixui-box"></div>
                                                    <div id="comp-kbgakxea_r_comp-lrs342sn" class="QOX0dS JCRlLH comp-kbgakxea_r_comp-lrs342sn-container comp-kbgakxea_r_comp-lrs342sn wixui-box">
                                                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                        <div id="comp-kbgakxea_r_comp-lrv1tpma" class="ZXdXNL comp-kbgakxea_r_comp-lrv1tpma wixui-text-input">
                                                            <style>
                                                                #place-list {
                                                                    position: absolute;
                                                                    z-index: 1;
                                                                    list-style: none;
                                                                    margin: 2px;
                                                                    padding: 0;
                                                                    top: 100%;
                                                                    width: 100%;
                                                                    border: 1px solid #ccc;
                                                                    border-radius: 10px;
                                                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                                                    display: none;
                                                                    overflow: hidden;
                                                                }

                                                                #place-list li {
                                                                    padding: 10px;
                                                                    cursor: pointer;
                                                                    background-color: #f1f1f1;
                                                                }

                                                                #place-list li:hover {
                                                                    background-color: #ddd;
                                                                }
                                                            </style>
                                                            <div class="pUnTVX">
                                                                <input name="enter-a destination or property" id="input_comp-kbgakxea_r_comp-lrv1tpma" class="KvoMHf has-custom-focus wixui-text-input__input" type="text" placeholder="Enter a destination or property"
                                                                    aria-required="false" autoComplete="off" aria-label="Enter a destination or property" oninput="showAutocompleteForPlaceList()" />
                                                                <ul id="place-list" class="rounded-1 font_9 wixui-rich-text__text"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-kbgakxea_r_comp-lrs342sq1" class="QOX0dS JCRlLH comp-kbgakxea_r_comp-lrs342sq1-container comp-kbgakxea_r_comp-lrs342sq1 wixui-box">
                                                        <div id="date-in-div" class="AG_P7Z MAs5Tr wixui-box" style="overflow: hidden;">
                                                            <div class="cell-lg-12 cell-md-4 cell-sm-6" style="padding: 0;height: 100%;overflow: hidden;">
                                                                <div style="display: flex; height: 100%; width: 100%; align-items: center;padding: 5px;">
                                                                    <img src="../../img/icons/calendar.png" style="height: 40px;margin: auto 8px auto 18px">
                                                                    <p class="font_9 wixui-rich-text__text" style="margin-top: 0;"><span id="date-in-span" class="wixui-rich-text__text">Check In</span></p>
                                                                </div>
                                                                <input class="form-input" style="height: 0px; width: 0px;" id="date-in" type="text" name="date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-kbgakxea_r_comp-lrs342st1" class="QOX0dS JCRlLH comp-kbgakxea_r_comp-lrs342st1-container comp-kbgakxea_r_comp-lrs342st1 wixui-box">
                                                        <div id="date-out-div" class="AG_P7Z MAs5Tr wixui-box"  style="overflow: hidden;">
                                                            <div class="cell-lg-12 cell-md-4 cell-sm-6" style="padding: 0;height: 100%;overflow: hidden;">
                                                                <div style="display: flex; height: 100%; width: 100%; align-items: center;padding: 5px;">
                                                                    <img src="../../img/icons/calendar.png" style="height: 40px;margin: auto 8px auto 18px">
                                                                    <p class="font_9 wixui-rich-text__text" style="margin-top: 0;"><span id="date-out-span" class="wixui-rich-text__text">Check Out</span></p>
                                                                </div>
                                                                <input class="form-input" style="height: 0px; width: 0px;" id="date-out" type="text" name="date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-kbgakxea_r_comp-lrs342sw1" class="QOX0dS JCRlLH comp-kbgakxea_r_comp-lrs342sw1-container comp-kbgakxea_r_comp-lrs342sw1 wixui-box">
                                                        <div class="AG_P7Z MAs5Tr wixui-box">
                                                            <button style="height: 100%;width: 100%;display: flex;align-items: center;justify-content: center;" onclick="showAddNofRoomBox()">
                                                                <div id="comp-kbgakxea_r_comp-lrvv1dqf" class="KcpHeO tz5f0K comp-kbgakxea_r_comp-lrvv1dqf wixui-rich-text" data-testid="richTextElement">
                                                                    <p style="display: flex;align-items: center;justify-content: center;" class="font_7 wixui-rich-text__text">
                                                                        <span id="nof-rooms-div" style="display: inline-block;vertical-align: middle;white-space: nowrap;" class="wixui-rich-text__text">1 Room</span>
                                                                        <img src="../../img/buttons/down.png" alt="" height="50px" width="50px" style="margin-top: 4px;">
                                                                    </p>
                                                                </div>
                                                            </button>
                                                            <style>
                                                                :root { 
                                                                    --ads-bg-secondary-interactive: 255,255,255; 
                                                                    --ads-bg-neutral-disabled-1: 237,240,249; 
                                                                    --ads-border-neutral-3: #c1cbe0; 
                                                                    --ads-border-neutral-disabled-1: #a8b3cb; 
                                                                    --ads-rounded-max: 999px; 
                                                                    --ads-border-s: 1px; 
                                                                    --ads-colors-primary-interactive: 107,115,136; 
                                                                    --ads-colors-neutral-disabled-1: 168,179,203; 
                                                                    --ads-spacing-s: 8px; 
                                                                    --ads-spacing-l: 16px; 
                                                                } 

                                                                .Pop-2no { 
                                                                    display: inline-block; 
                                                                    position: absolute; 
                                                                    z-index: 1;
                                                                } 

                                                                html[dir="ltr"] .Pop-2no  { 
                                                                    -webkit-transition: left .3s ease-out; 
                                                                    transition: left .3s ease-out;
                                                                } 

                                                                .Pop-2no.Seg-zb3  { 
                                                                    top: 100%;
                                                                } 

                                                                .Pop-2no.SegmentsOccupancy--ipx  { 
                                                                    left: 0;
                                                                } 

                                                                *,:after,:before { 
                                                                    -webkit-box-sizing: inherit; 
                                                                    box-sizing: inherit; 
                                                                    -webkit-box-sizing: border-box; 
                                                                    box-sizing: border-box;
                                                                } 

                                                                .Pop-2no:before { 
                                                                    border-bottom: 11px solid; 
                                                                    border-left: 11px solid transparent; 
                                                                    border-right: 11px solid transparent; 
                                                                    display: block; 
                                                                    height: 0; 
                                                                    width: 0;
                                                                    color: #FFF;
                                                                } 

                                                                .theme-agoda .Pop-2no::before { 
                                                                    border-bottom-color: #fff;
                                                                } 

                                                                .Pop-2no.Autocomplete:before,.Pop-2no.Occupancy:before,.Pop-2no.RangePicker:before,.Pop-2no.Seg-zb3:before,.Pop-2no.WideRangePicker:before { 
                                                                    content: "";
                                                                } 

                                                                html[dir="ltr"] .Pop-2no::before { 
                                                                    -webkit-transition: margin-left .3s ease-out; 
                                                                    transition: margin-left .3s ease-out;
                                                                } 

                                                                html[dir="ltr"] .Searchbox--horizontal .Pop-2no.SegmentsOccupancy--ipx::before { 
                                                                    margin-left: 95px;
                                                                } 

                                                                .content-spk { 
                                                                    border-radius: 0 8px 8px 8px; 
                                                                    -webkit-box-shadow: 0 4px 10px 0 rgba(0,0,0,.15); 
                                                                    box-shadow: 0 4px 10px 0 rgba(0,0,0,.15); 
                                                                    overflow: hidden; 
                                                                    -webkit-transition: width .3s ease-out,height .3s ease-out,max-height .3s ease-out; 
                                                                    transition: width .3s ease-out,height .3s ease-out,max-height .3s ease-out;
                                                                } 

                                                                .content-spk  { 
                                                                    background-color: #fff;
                                                                } 

                                                                .Seg-p8p { 
                                                                    display: table;
                                                                } 

                                                                .Seg-vgn { 
                                                                    display: table-cell; 
                                                                    vertical-align: top; 
                                                                    width: 315px;
                                                                } 

                                                                .Seg-vgn  { 
                                                                    background-color: #fff;
                                                                } 

                                                                .Occ-252 { 
                                                                    background-color: #fff; 
                                                                    padding: 0 10px; 
                                                                    text-align: center; 
                                                                    width: 315px;
                                                                } 

                                                                .OccupancySelector--la3 { 
                                                                    background: none;
                                                                } 

                                                                .Occ-252  { 
                                                                    background-color: #fff;
                                                                } 

                                                                .ae4e0-pb-dok { 
                                                                    padding-bottom: var(--ads-spacing-s);
                                                                } 

                                                                .ae4e0-c8a { 
                                                                    display: flex;
                                                                } 

                                                                .item-2ck { 
                                                                    align-items: center;
                                                                } 

                                                                .ae4e0-p-dtc { 
                                                                    padding: var(--ads-spacing-s);
                                                                } 

                                                                p { 
                                                                    margin: 0 0 9px;
                                                                } 

                                                                .jfU-gnq { 
                                                                    margin: 0px; 
                                                                    padding: 8px;
                                                                } 

                                                                .bud-s7s { 
                                                                    font-weight: 600; 
                                                                    text-align: left; 
                                                                    color: #000;
                                                                    line-height: calc(20.33px); 
                                                                    font-size: 16px; 
                                                                    margin-top: calc(-1.33px); 
                                                                    margin-bottom: calc(-1.33px);
                                                                } 

                                                                button { 
                                                                    font: inherit; 
                                                                    margin: 0;
                                                                } 

                                                                button { 
                                                                    overflow: visible; 
                                                                    text-transform: none; 
                                                                    -webkit-appearance: button;
                                                                } 

                                                                button { 
                                                                    font-family: inherit;
                                                                } 

                                                                button { 
                                                                    color: #666; 
                                                                    font-size: 100%; 
                                                                    line-height: inherit; 
                                                                    margin: 0;
                                                                } 

                                                                button { 
                                                                    color: inherit; 
                                                                    font: inherit;
                                                                } 

                                                                button { 
                                                                    cursor: pointer;
                                                                } 

                                                                button  { 
                                                                    font-family: mallory,Helvetica Neue,Helvetica,Arial,sans-serif;
                                                                } 

                                                                html body button { 
                                                                    font-family: mallory,Helvetica Neue,Helvetica,Arial,sans-serif;
                                                                } 

                                                                .fa-ew9 { 
                                                                    cursor: default;
                                                                } 

                                                                .col-yld { 
                                                                    flex-direction: column;
                                                                } 

                                                                .ae4e0-justify-fv1 { 
                                                                    justify-content: center;
                                                                } 

                                                                .ae4e0-rounded-gf3 { 
                                                                    border-radius: var(--ads-rounded-max);
                                                                } 

                                                                .ae4e0-border-cr8 { 
                                                                    border-width: var(--ads-border-s);
                                                                } 

                                                                .ae4e0-border-1f8 { 
                                                                    border-style: solid;
                                                                } 

                                                                .ae4e0-border-neutral-disabled-55s { 
                                                                    border-color: var(--ads-border-neutral-disabled-1);
                                                                } 

                                                                .ae4e0-bg-neutral-disabled-rl7 { 
                                                                    background: rgb(var(--ads-bg-neutral-disabled-1));
                                                                } 

                                                                .ae4e0-fill-neutral-disabled-dop { 
                                                                    fill: rgb(var(--ads-colors-neutral-disabled-1));
                                                                } 

                                                                .text-5sp { 
                                                                    color: rgb(var(--ads-colors-neutral-disabled-1));
                                                                } 

                                                                button.box-2pg { 
                                                                    font-family: inherit;
                                                                } 

                                                                .ae4e0-mx-3ab { 
                                                                    margin-left: var(--ads-spacing-l); 
                                                                    margin-right: var(--ads-spacing-l);
                                                                } 

                                                                .ae4e0-qqj { 
                                                                    display: inline;
                                                                } 

                                                                .ae4e0-ml-e37 { 
                                                                    margin-left: var(--ads-spacing-s);
                                                                } 

                                                                .ae4e0-a1l { 
                                                                    -webkit-tap-highlight-color: transparent; 
                                                                    outline-color: transparent; 
                                                                    overflow: hidden; 
                                                                    position: relative; 
                                                                    transition: background-color,outline-color .2s ease-in-out,border-color .2s ease-in-out; 
                                                                    -webkit-user-select: none; 
                                                                    -ms-user-select: none; 
                                                                    user-select: none;
                                                                } 

                                                                .ae4e0-cursor-ioq { 
                                                                    cursor: pointer;
                                                                } 

                                                                .ae4e0-border-neutral-2ts { 
                                                                    border-color: var(--ads-border-neutral-3);
                                                                } 

                                                                .ae4e0-bg-secondary-2g2 { 
                                                                    background: rgb(var(--ads-bg-secondary-interactive));
                                                                } 

                                                                .ae4e0-fill-primary-v1t { 
                                                                    fill: rgb(var(--ads-colors-primary-interactive));
                                                                } 

                                                                .text-1vo { 
                                                                    color: rgb(var(--ads-colors-primary-interactive));
                                                                } 

                                                                .ae4e0-a1l:after { 
                                                                    bottom: 0; 
                                                                    content: ""; 
                                                                    left: 0; 
                                                                    position: absolute; 
                                                                    right: 0; 
                                                                    top: 0; 
                                                                    transition: opacity .2s ease-in-out,border-color .2s ease-in-out;
                                                                } 

                                                                @media (hover: hover) and (pointer: fine){ 
                                                                .ae4e0-a1l:hover { 
                                                                    border-color: rgb(var(--interactive-color)); 
                                                                    color: rgb(var(--interactive-color));
                                                                } 

                                                                .ae4e0-a1l:hover:after { 
                                                                    background: rgb(var(--interactive-color),.08);
                                                                } 
                                                                }     

                                                                .kYDKOv { 
                                                                    min-width: 16px; 
                                                                    min-height: 16px; 
                                                                    max-width: 16px; 
                                                                    max-height: 16px;
                                                                } 

                                                                svg:not(:root) { 
                                                                    overflow: hidden;
                                                                } 

                                                                h3 { 
                                                                    line-height: 1.1;
                                                                } 

                                                                .bpo-68e { 
                                                                    margin: 0px;
                                                                } 

                                                                .gRJ-qp8 { 
                                                                    font-weight: 600; 
                                                                    font-size: clamp(18px, 17.1795px + 0.25641vw, 20px); 
                                                                    line-height: clamp(21px, 19.7692px + 0.384615vw, 24px);
                                                                } 

                                                                .KpD-o4o { 
                                                                    font-weight: 400; 
                                                                    color: rgb(107, 115, 136); 
                                                                    fill: rgb(107, 115, 136); 
                                                                    text-align: left; 
                                                                    line-height: calc(14.98px); 
                                                                    font-size: 12px; 
                                                                    margin-top: calc(-0.98px); 
                                                                    margin-bottom: calc(-0.98px);
                                                                } 


                                                                /* These were inline style tags. Uses id+class to override almost everything */
                                                                #style-5UBXn.style-5UBXn {  
                                                                width: 160px;  
                                                                }  
                                                                #style-wOoOb.style-wOoOb {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                }  
                                                                #style-gRjLf.style-gRjLf {  
                                                                width: 12px;  
                                                                }  
                                                                #style-fpw5o.style-fpw5o {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                    --interactive-color: var(--ads-colors-primary-interactive);  
                                                                    --interactive-color-primary: var(--ads-colors-primary-interactive);  
                                                                    --color-neutral-4: var(--ads-colors-neutral-4);  
                                                                }  
                                                                #style-y9fkk.style-y9fkk {  
                                                                width: 160px;  
                                                                }  
                                                                #style-eS7tR.style-eS7tR {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                    --interactive-color: var(--ads-colors-primary-interactive);  
                                                                    --interactive-color-primary: var(--ads-colors-primary-interactive);  
                                                                    --color-neutral-4: var(--ads-colors-neutral-4);  
                                                                }  
                                                                #style-BICi7.style-BICi7 {  
                                                                width: 12px;  
                                                                }  
                                                                #style-qEGmx.style-qEGmx {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                    --interactive-color: var(--ads-colors-primary-interactive);  
                                                                    --interactive-color-primary: var(--ads-colors-primary-interactive);  
                                                                    --color-neutral-4: var(--ads-colors-neutral-4);  
                                                                }  
                                                                #style-6U2Uy.style-6U2Uy {  
                                                                width: 160px;  
                                                                }  
                                                                #style-Yv9Q3.style-Yv9Q3 {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                }  
                                                                #style-bFGM7.style-bFGM7 {  
                                                                width: 12px;  
                                                                }  
                                                                #style-6JVCB.style-6JVCB {  
                                                                width: 28px;  
                                                                    height: 28px;  
                                                                    --interactive-color: var(--ads-colors-primary-interactive);  
                                                                    --interactive-color-primary: var(--ads-colors-primary-interactive);  
                                                                    --color-neutral-4: var(--ads-colors-neutral-4);  
                                                                }
                                                            </style>
                                                            <div id="nofRoomBox" class="Pop-2no Seg-zb3 SegmentsOccupancy--ipx" style="display: none;">
                                                            <div class="content-spk">
                                                            <div class="Seg-p8p">
                                                                <div class="Seg-vgn">
                                                                <div>
                                                                    <div class="Occ-252 OccupancySelector--la3">
                                                                    <div class="box-2pg ae4e0-pb-dok">
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                        <div class="box-2pg style-5UBXn" id="style-5UBXn">
                                                                            <p class="jfU-gnq bud-s7s">
                                                                            Room
                                                                            </p>
                                                                        </div>
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                            <button type="button" class="box-2pg ae4e0-bg-neutral-disabled-rl7 text-5sp ae4e0-fill-neutral-disabled-dop ae4e0-border-neutral-disabled-55s ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 fa-ew9 col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 style-wOoOb" id="style-wOoOb" onclick="minusRoom()">
                                                                                <img src="../../img/buttons/minus.svg" alt="">
                                                                            </button>
                                                                            <div class="box-2pg ae4e0-mx-3ab style-gRjLf" id="style-gRjLf">
                                                                            <h3 id="nofRooms" class="bpo-68e gRJ-qp8">
                                                                                <?php echo $rooms ?>
                                                                            </h3>
                                                                            </div>
                                                                            <div class="box-2pg ae4e0-qqj">
                                                                            <button type="button" class="box-2pg ae4e0-bg-secondary-2g2 text-1vo ae4e0-fill-primary-v1t ae4e0-border-neutral-2ts ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 ae4e0-cursor-ioq col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 ae4e0-a1l style-fpw5o" id="style-fpw5o" onclick="plusRoom()">
                                                                                <img src="../../img/buttons/plus.svg" alt="">
                                                                            </button>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                        <div class="box-2pg style-y9fkk" id="style-y9fkk">
                                                                            <p class="jfU-gnq bud-s7s">
                                                                            Adults
                                                                            </p>
                                                                            <div class="box-2pg ae4e0-c8a ae4e0-ml-e37">
                                                                            <span class="bpo-68e KpD-o4o">
                                                                                Ages 18 or above
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                            <button type="button" class="box-2pg ae4e0-bg-neutral-disabled-rl7 text-1vo ae4e0-fill-primary-v1t ae4e0-border-neutral-2ts ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 ae4e0-cursor-ioq col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 ae4e0-a1l style-eS7tR" id="style-eS7tR" onclick="minusAdult()">
                                                                                <img src="../../img/buttons/minus.svg" alt="">
                                                                            </button>
                                                                            <div class="box-2pg ae4e0-mx-3ab style-BICi7" id="style-BICi7">
                                                                            <h3 id="nofAdults" class="bpo-68e gRJ-qp8">
                                                                                <?php echo $adults ?>
                                                                            </h3>
                                                                            </div>
                                                                            <button type="button" class="box-2pg ae4e0-bg-secondary-2g2 text-1vo ae4e0-fill-primary-v1t ae4e0-border-neutral-2ts ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 ae4e0-cursor-ioq col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 ae4e0-a1l style-qEGmx" id="style-qEGmx" onclick="plusAdult()">
                                                                                <img src="../../img/buttons/plus.svg" alt="">
                                                                            </button>
                                                                        </div>
                                                                        </div>
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                        <div class="box-2pg style-6U2Uy" id="style-6U2Uy">
                                                                            <p class="jfU-gnq bud-s7s">
                                                                            Children
                                                                            </p>
                                                                            <div class="box-2pg ae4e0-c8a ae4e0-ml-e37">
                                                                            <span class="bpo-68e KpD-o4o">
                                                                                Ages 0-17
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-2pg ae4e0-c8a item-2ck ae4e0-p-dtc">
                                                                            <button type="button" class="box-2pg ae4e0-bg-neutral-disabled-rl7 text-5sp ae4e0-fill-neutral-disabled-dop ae4e0-border-neutral-disabled-55s ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 fa-ew9 col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 style-Yv9Q3" id="style-Yv9Q3" onclick="minusChild()">
                                                                                <img src="../../img/buttons/minus.svg" alt="">
                                                                            </button>
                                                                            <div class="box-2pg ae4e0-mx-3ab style-bFGM7" id="style-bFGM7">
                                                                            <h3 id="nofChildren" class="bpo-68e gRJ-qp8">
                                                                                <?php echo $children ?>
                                                                            </h3>
                                                                            </div>
                                                                            <button type="button" class="box-2pg ae4e0-bg-secondary-2g2 text-1vo ae4e0-fill-primary-v1t ae4e0-border-neutral-2ts ae4e0-border-1f8 ae4e0-c8a ae4e0-justify-fv1 ae4e0-cursor-ioq col-yld item-2ck ae4e0-rounded-gf3 ae4e0-border-cr8 ae4e0-a1l style-6JVCB" id="style-6JVCB" onclick="plusChild()">
                                                                                <img src="../../img/buttons/plus.svg" alt="">
                                                                            </button>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="comp-kbgakxea_r_comp-lrs342sz1 gydiew" id="comp-kbgakxea_r_comp-lrs342sz1" role="button" tabindex="0" aria-disabled="false">
                                                        <button data-testid="linkElement" class="TFOeq0 wixui-button zKbzSQ" aria-disabled="false" onclick="searchResort()"><span class="kclxHl wixui-button__label">Search</span></button>
                                                    </div>
                                                </div><button id="comp-kbgakxea_r_comp-lruw3ml6" class="comp-kbgakxea_r_comp-lruw3ml6 wixui-vector-image"><div data-testid="svgRoot-comp-kbgakxea_r_comp-lruw3ml6" class="aizuI7 TcoJIb WQ4fSJ comp-kbgakxea_r_comp-lruw3ml6"><svg preserveAspectRatio="xMidYMid meet" data-bbox="19.999 22.5 160.002 155" viewBox="19.999 22.5 160.002 155" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img" aria-label="Open site navigation">
    <g>
        <path d="M180.001 40.325c0-9.844-8.238-17.825-18.4-17.825H38.399c-10.162 0-18.4 7.981-18.4 17.825v119.35c0 9.844 8.238 17.825 18.4 17.825h123.202c10.162 0 18.4-7.981 18.4-17.825V40.325zm-48 84.475H67.999v-3.1H132v3.1zm0-20.15H67.999v-3.1H132v3.1zm0-20.15H67.999v-3.1H132v3.1z"/>
    </g>
</svg>
</div></button></section>
                                        </header>
                                        <main id="PAGE_SECTIONSc1dmp" class="PAGE_SECTIONSc1dmp c1rIl3" data-main-content-parent="true">
                                            <section id="comp-kbgaghri" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-kbgaghri-container comp-kbgaghri wixui-section undefined" data-testid="section-container">
                                                <div id="bgLayers_comp-kbgaghri" data-hook="bgLayers" class="MW5IWV">
                                                    <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                    <div id="bgMedia_comp-kbgaghri" class="VgO9Yg"></div>
                                                </div>
                                                <div id="comp-lrs3l2b0" class="QOX0dS JCRlLH comp-lrs3l2b0-container comp-lrs3l2b0 wixui-box">
                                                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                    <div id="cards" style="margin-left: 10px;"></div>
                                                    <!--mark-->
                                                    <div id="comp-lrt73hqt" class="comp-lrt73hqt" data-semantic-classname="button"><button type="button" class="StylableButton2545352419__root style-lrt73hr75__root wixui-button" data-testid="buttonContent" aria-label="Filter" aria-disabled="false"><div class="StylableButton2545352419__container"><span class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Filter</span><span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon"><div><?xml version="1.0" encoding="UTF-8"?>
<svg data-bbox="7.68 9.66 48.64 44.37" stroke="currentColor" stroke-width="3" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" data-type="ugc">
    <g>
        <path d="M50.69 32h5.63" fill="none"/>
        <path d="M7.68 32h31.01" fill="none"/>
        <path d="M26.54 15.97h29.78" fill="none"/>
        <path d="M7.68 15.97h6.88" fill="none"/>
        <path d="M35 48.03h21.32" fill="none"/>
        <path d="M7.68 48.03H23" fill="none"/>
        <path d="M26.55 15.66a6 6 0 1 1-12 0 6 6 0 0 1 12 0z" fill="none"/>
        <path d="M50.69 32a6 6 0 1 1-12 0 6 6 0 0 1 12 0z" fill="none"/>
        <path d="M35 48.03a6 6 0 1 1-12 0 6 6 0 0 1 12 0z" fill="none"/>
    </g>
</svg>
</div></span></div></button></div>
                                                </div>
                                                <div id="comp-lrs3clop" class="comp-lrs3clop JGtLUp wixui-horizontal-line"></div>
                                                <div id="comp-lrs3kjjt" class="QOX0dS JCRlLH comp-lrs3kjjt wixui-box">
                                                    <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                    <div class="comp-lrs3kjjt-overflow-wrapper" data-testid="responsive-container-overflow">
                                                    <div>
                                                        <div class="comp-lrs3kjjt-container" data-testid="responsive-container-content" tabindex="0">
                                                            <div id="comp-lrs47sto" class="KcpHeO tz5f0K comp-lrs47sto wixui-rich-text" data-testid="richTextElement">
                                                                <h5 class="font_5 wixui-rich-text__text"><span class="wixui-rich-text__text">Filter</span></h5>
                                                            </div>
                                                            <div id="comp-lrs49b83" class="comp-lrs49b83 JGtLUp wixui-horizontal-line"></div>
                                                            <div id="comp-lrs62euv" class="KcpHeO tz5f0K comp-lrs62euv wixui-rich-text" data-testid="richTextElement">
                                                                <h6 class="font_6 wixui-rich-text__text"><span class="wixui-rich-text__text">Facilities</span></h6>
                                                            </div>
                                                            <div id="comp-lrs62gg0" class="KcpHeO tz5f0K comp-lrs62gg0 wixui-rich-text" data-testid="richTextElement">
                                                                <h6 class="font_6 wixui-rich-text__text" style="margin-top: -30px;"><span class="wixui-rich-text__text">Star rating</span></h6>
                                                            </div>
                                                            <div id="comp-lrs62i6v" class="KcpHeO tz5f0K comp-lrs62i6v wixui-rich-text" data-testid="richTextElement">
                                                                <h6 class="font_6 wixui-rich-text__text" style="margin-top: 24px;"><span class="wixui-rich-text__text">Price</span></h6>
                                                            </div>
                                                            <div id="comp-lrs62jj4" class="KcpHeO tz5f0K comp-lrs62jj4 wixui-rich-text" data-testid="richTextElement">
                                                                <h6 class="font_6 wixui-rich-text__text"><span class="wixui-rich-text__text">Sort</span></h6>
                                                            </div>
                                                            <div id="comp-lrs6pyfd" class="comp-lrs6pyfd Slider1827102434__rootWrapper">
                                                                <style>
                                                                    .price-slider {
                                                                        position: relative; /* Set position to relative for positioning the label */
                                                                        width: 100%; /* Set the width of the slider */
                                                                    }

                                                                    .price-slider input[type="range"] {
                                                                        -webkit-appearance: none; /* Remove default styles */
                                                                        appearance: none;
                                                                        width: 100%; /* Set the width of the track */
                                                                        height: 10px; /* Set the height of the track */
                                                                        background: #ddd; /* Set the background color of the track */
                                                                        border-radius: 5px; /* Set the border radius */
                                                                        outline: none; /* Remove outline */
                                                                        margin: 0;
                                                                        padding: 0;
                                                                    }

                                                                    .price-slider input[type="range"]::-webkit-slider-thumb {
                                                                        -webkit-appearance: none; /* Remove default styles */
                                                                        appearance: none;
                                                                        width: 20px; /* Set the width of the thumb */
                                                                        height: 20px; /* Set the height of the thumb */
                                                                        background: #007bff; /* Set the background color of the thumb */
                                                                        border-radius: 50%; /* Set the border radius to make it round */
                                                                        cursor: pointer; /* Change cursor on hover */
                                                                        position: relative; /* Set position to relative for z-index to work */
                                                                        z-index: 1; /* Set a higher z-index to make sure the thumb is above the label */
                                                                    }

                                                                    .price-slider input[type="range"]::-moz-range-thumb {
                                                                        width: 20px; /* Set the width of the thumb for Firefox */
                                                                        height: 20px; /* Set the height of the thumb for Firefox */
                                                                        background: #007bff; /* Set the background color of the thumb for Firefox */
                                                                        border-radius: 50%; /* Set the border radius to make it round for Firefox */
                                                                        cursor: pointer; /* Change cursor on hover for Firefox */
                                                                        position: relative; /* Set position to relative for z-index to work */
                                                                        z-index: 1; /* Set a higher z-index to make sure the thumb is above the label */
                                                                    }

                                                                    .selected-value {
                                                                        position: absolute; /* Position the label absolutely within the slider container */
                                                                        top: -30px; /* Adjust top position as needed */
                                                                        left: 38px; /* Start from the left edge of the container */
                                                                        transform: translateX(-50%); /* Center the label horizontally */
                                                                        font-size: 16px; /* Set the font size of the label */
                                                                        z-index: 0; /* Set a lower z-index so it's behind the thumb */
                                                                    }
                                                                </style>

                                                                <div class="price-slider">
                                                                    <input type="range" min="0" max="10000" value="1000" step="10" id="priceRange">
                                                                    <div class="selected-value" id="selectedValue">50</div>
                                                                </div>

                                                                <script>
                                                                    const slider = document.getElementById('priceRange');
                                                                    const output = document.getElementById('selectedValue');

                                                                    output.textContent = slider.value; // Set initial value

                                                                    slider.oninput = function () {
                                                                        output.textContent = this.value; // Update label value on slider change
                                                                        const thumbWidth = parseFloat(window.getComputedStyle(slider).getPropertyValue('width')) * parseFloat(this.value) / parseFloat(this.max);
                                                                        output.style.left = `calc(${thumbWidth}px)`; // Move label along with the thumb
                                                                    };
                                                                </script>
                                                            </div>
                                                            <div id="comp-lrt55vv4" class="QOX0dS JCRlLH comp-lrt55vv4-container comp-lrt55vv4 wixui-box">
                                                                <div class="AG_P7Z MAs5Tr wixui-box">
                                                                    <style>
                                                                        .form-check {
                                                                            display: flex;
                                                                            align-items: center;
                                                                            margin-top: 10px;
                                                                            margin-bottom: 10px;
                                                                        }

                                                                        .form-check-input {
                                                                            width: 25px;
                                                                            height: 25px;
                                                                            margin-right: 10px;
                                                                        }

                                                                        .form-check-label {
                                                                            margin-left: 10px;
                                                                            font-size: 18px;
                                                                        }
                                                                    </style>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Popular
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            Lowest price first
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Highest rating first
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div id="comp-lrt6f6hp" class="comp-lrt6f6hp JGtLUp wixui-horizontal-line"></div>
                                                            </div>
                                                            <div id="comp-lrt5ej60" class="QOX0dS JCRlLH comp-lrt5ej60-container comp-lrt5ej60 wixui-box">
                                                                <div class="AG_P7Z MAs5Tr wixui-box">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            ⭐⭐⭐⭐⭐
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            ⭐⭐⭐⭐
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            ⭐⭐⭐
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            ⭐⭐
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            ⭐
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            No Rating
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div id="comp-lrt6fvlp" class="comp-lrt6fvlp JGtLUp wixui-horizontal-line"></div>
                                                            </div>
                                                            <div id="comp-lrt5l5np" class="QOX0dS JCRlLH comp-lrt5l5np-container comp-lrt5l5np wixui-box">
                                                                <div class="AG_P7Z MAs5Tr wixui-box">
                                                                    <div class="form-check"  style="margin-top: 16px;">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Smart TVs
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Air conditioning
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Parking
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Beauty salon
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Private beach
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Movie theater
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                        <label class="form-check-label" for="flexCheckChecked">
                                                                            Playground
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Bicycle rentals
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div id="comp-lrt6gh22" class="comp-lrt6gh22 JGtLUp wixui-horizontal-line"></div>
                                                            </div>
                                                            <div id="comp-lruchcey" class="comp-lruchcey" data-semantic-classname="button"><button type="button" class="StylableButton2545352419__root style-lruchcfr1__root wixui-button" data-testid="buttonContent" aria-label="Close"><div class="StylableButton2545352419__container"><span class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Close</span><span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon"><div><?xml version="1.0" encoding="UTF-8"?>
<svg data-bbox="4 4 12 12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20" width="20" data-type="shape">
    <g>
        <path d="M16 4.707 15.293 4 10 9.293 4.707 4 4 4.707 9.293 10 4 15.293l.707.707L10 10.707 15.293 16l.707-.707L10.707 10 16 4.707Z" clip-rule="evenodd" fill-rule="evenodd"/>
    </g>
</svg>
</div></span></div></button></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </main>
                                        <footer id="comp-kbgakxmn" class="comp-kbgakxmn S6Dcte comp-kbgakxmn-container">
                                            <section id="comp-kbgakxmn_r_comp-kbgakgyt" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-kbgakxmn_r_comp-kbgakgyt-container comp-kbgakxmn_r_comp-kbgakgyt wixui-footer undefined" data-testid="section-container">
                                                <!---Footer--->
                                            </section>
                                        </footer>
                                        <div id="comp-kd5px9q0-pinned-layer" class="comp-kd5px9q0-pinned-layer big2ZD">
                                            <div id="comp-kd5px9q0" class="comp-kd5px9q0 S6Dcte comp-kd5px9q0-container">
                                                <div id="comp-kd5px9q0_r_comp-kd5px9hr" class="KLO7MJ">
                                                    <div id="overlay-comp-kd5px9q0_r_comp-kd5px9hr" class="SaGcIp"></div>
                                                    <div id="container-comp-kd5px9q0_r_comp-kd5px9hr" class="UjpP2K">
                                                        <div class="AVLx_K"></div>
                                                        <div id="inlineContentParent-comp-kd5px9q0_r_comp-kd5px9hr" class="RcfHS8">
                                                            <div class="comp-kd5px9q0_r_comp-kd5px9hr-overflow-wrapper RcfHS8 wixui-mobile-menu" data-testid="responsive-container-overflow">
                                                                <div class="comp-kd5px9q0_r_comp-kd5px9hr-container" data-testid="responsive-container-content" tabindex="-1" role="dialog" aria-label="Site navigation"><button id="comp-kd5px9q0_r_comp-kkmqi5tc" class="comp-kd5px9q0_r_comp-kkmqi5tc wixui-vector-image"><div data-testid="svgRoot-comp-kd5px9q0_r_comp-kkmqi5tc" class="aizuI7 TcoJIb WQ4fSJ comp-kd5px9q0_r_comp-kkmqi5tc"><?xml version="1.0" encoding="UTF-8"?>
<svg preserveAspectRatio="none" data-bbox="65.35 65.35 69.3 69.3" viewBox="65.35 65.35 69.3 69.3" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img" aria-label="Close Site Navigation">
    <g>
        <path d="M134.65 128.99L105.66 100l28.99-28.99-5.66-5.66L100 94.34 71.01 65.35l-5.66 5.66L94.34 100l-28.99 28.99 5.66 5.66L100 105.66l28.99 28.99 5.66-5.66z"/>
    </g>
</svg>
</div></button>
                                                                    <div id="comp-kd5px9q0_r_comp-lrv010yh" class="QOX0dS JCRlLH comp-kd5px9q0_r_comp-lrv010yh-container comp-kd5px9q0_r_comp-lrv010yh wixui-box">
                                                                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv02t90" data-testid="imageX" class="z4Uj6S comp-kd5px9q0_r_comp-lrv02t90 wixui-image">
                                                                            <wix-image id="img-comp-kd5px9q0_r_comp-lrv02t90" data-image-info="{&quot;containerId&quot;:&quot;comp-kd5px9q0_r_comp-lrv02t90&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_c05135715db04d85be1d31c8bd2f9877~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;home.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                                                                data-has-ssr-src="true" class="L4tPY9">
                                                                                <picture><img src="https://static.wixstatic.com/media/75fa75_c05135715db04d85be1d31c8bd2f9877~mv2.png/v1/fill/w_51,h_51,al_c,q_85,usm_0.66_1.00_0.01,blur_2,enc_auto/home.png" alt=""
                                                                                        style="object-fit:cover;object-position:50% 50%" /></picture>
                                                                            </wix-image>
                                                                        </div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv0339y" class="KcpHeO tz5f0K comp-kd5px9q0_r_comp-lrv0339y wixui-rich-text" data-testid="richTextElement">
                                                                            <p class="font_7 wixui-rich-text__text">Home</p>
                                                                        </div>
                                                                    </div>
                                                                    <div id="comp-kd5px9q0_r_comp-lrv05k5x" class="QOX0dS JCRlLH comp-kd5px9q0_r_comp-lrv05k5x-container comp-kd5px9q0_r_comp-lrv05k5x wixui-box">
                                                                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv08guw" class="KcpHeO tz5f0K comp-kd5px9q0_r_comp-lrv08guw wixui-rich-text" data-testid="richTextElement">
                                                                            <p class="font_7 wixui-rich-text__text">Sign in</p>
                                                                        </div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv092mu" data-testid="imageX" class="z4Uj6S comp-kd5px9q0_r_comp-lrv092mu wixui-image">
                                                                            <wix-image id="img-comp-kd5px9q0_r_comp-lrv092mu" data-image-info="{&quot;containerId&quot;:&quot;comp-kd5px9q0_r_comp-lrv092mu&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_b85e9445b8cd415daa1603d113b3ee93~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;sign_in.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                                                                data-has-ssr-src="true" class="L4tPY9">
                                                                                <picture><img src="https://static.wixstatic.com/media/75fa75_b85e9445b8cd415daa1603d113b3ee93~mv2.png/v1/fill/w_51,h_51,al_c,q_85,usm_0.66_1.00_0.01,blur_2,enc_auto/sign_in.png" alt=""
                                                                                        style="object-fit:cover;object-position:50% 50%" /></picture>
                                                                            </wix-image>
                                                                        </div>
                                                                    </div>
                                                                    <div id="comp-kd5px9q0_r_comp-lrv0651l" class="QOX0dS JCRlLH comp-kd5px9q0_r_comp-lrv0651l-container comp-kd5px9q0_r_comp-lrv0651l wixui-box">
                                                                        <div class="AG_P7Z MAs5Tr wixui-box"></div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv07b6w" data-testid="imageX" class="z4Uj6S comp-kd5px9q0_r_comp-lrv07b6w wixui-image">
                                                                            <wix-image id="img-comp-kd5px9q0_r_comp-lrv07b6w" data-image-info="{&quot;containerId&quot;:&quot;comp-kd5px9q0_r_comp-lrv07b6w&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_9fc5c94f9b7a4bf198227a47b175568d~mv2.png&quot;,&quot;width&quot;:262,&quot;height&quot;:262,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;zephyr.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}"
                                                                                data-has-ssr-src="true" class="L4tPY9">
                                                                                <picture><img src="https://static.wixstatic.com/media/75fa75_9fc5c94f9b7a4bf198227a47b175568d~mv2.png/v1/fill/w_66,h_66,al_c,q_85,usm_0.66_1.00_0.01,blur_2,enc_auto/zephyr.png" alt=""
                                                                                        style="object-fit:cover;object-position:50% 50%" /></picture>
                                                                            </wix-image>
                                                                        </div>
                                                                        <div id="comp-kd5px9q0_r_comp-lrv0a5d0" class="KcpHeO tz5f0K comp-kd5px9q0_r_comp-lrv0a5d0 wixui-rich-text" data-testid="richTextElement">
                                                                            <p class="font_7 wixui-rich-text__text">About us</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role="region" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div>
    </div>
    </div>

    <!-- preloading pre-scripts -->


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?beckyExperiments=specs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.ghostify_hidden_comps%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.mlUtilsImport%3Atrue%2Cspecs.thunderbolt.useRefDisplayCssVar%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.fiveGridLineStudioSkins%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.2894.0&disableStaticPagesUrlHierarchy=false&editorName=Studio&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_migrateResponsiveSectionStyleItemToDesign%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fabhijithac1603.wixstudio.io%2Fmy-site-5&fileId=314f18ac.bundle.min&formFactor=desktop&freemiumBanner=true&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isResponsive=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=true&isWixCodeOnSite=true&language=en&languageResolutionMethod=QueryParam&metaSiteId=f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7&module=thunderbolt-features&originalLanguage=en&pageId=75fa75_451ef060f702871fba227d1e55719c51_134.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=bed0d4ad-2fc4-4f5c-bf69-7224c394f235&siteRevision=134&staticHTMLComponentUrl=https%3A%2F%2Fabhijithac1603-wixstudio-io.filesusr.com%2F&useSandboxInHTMLComp=true&viewMode=desktop"
        id="features_masterPage" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous"></link>


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?beckyExperiments=specs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.ghostify_hidden_comps%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.mlUtilsImport%3Atrue%2Cspecs.thunderbolt.useRefDisplayCssVar%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.fiveGridLineStudioSkins%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.2894.0&disableStaticPagesUrlHierarchy=false&editorName=Studio&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_migrateResponsiveSectionStyleItemToDesign%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fabhijithac1603.wixstudio.io%2Fmy-site-5&fileId=314f18ac.bundle.min&formFactor=desktop&freemiumBanner=true&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isResponsive=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=true&isWixCodeOnSite=true&language=en&languageResolutionMethod=QueryParam&metaSiteId=f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7&module=thunderbolt-features&originalLanguage=en&pageId=75fa75_16bbdfd6afc281192b4ad3bc15dcf1c0_126.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=bed0d4ad-2fc4-4f5c-bf69-7224c394f235&siteRevision=134&staticHTMLComponentUrl=https%3A%2F%2Fabhijithac1603-wixstudio-io.filesusr.com%2F&useSandboxInHTMLComp=true&viewMode=desktop"
        id="features_c1dmp" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous"></link>


    <link href="https://siteassets.parastorage.com/pages/pages/thunderbolt?beckyExperiments=specs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.ghostify_hidden_comps%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.mlUtilsImport%3Atrue%2Cspecs.thunderbolt.useRefDisplayCssVar%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.fiveGridLineStudioSkins%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&dfCk=6&dfVersion=1.2894.0&editorName=Studio&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_migrateResponsiveSectionStyleItemToDesign%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fabhijithac1603.wixstudio.io%2Fmy-site-5&fileId=046e1c1e.bundle.min&formFactor=desktop&freemiumBanner=true&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isResponsive=true&isUrlMigrated=true&isWixCodeOnPage=true&isWixCodeOnSite=true&language=en&metaSiteId=f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7&module=thunderbolt-platform&originalLanguage=en&pageId=75fa75_16bbdfd6afc281192b4ad3bc15dcf1c0_126.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11681.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=bed0d4ad-2fc4-4f5c-bf69-7224c394f235&siteRevision=134&staticHTMLComponentUrl=https%3A%2F%2Fabhijithac1603-wixstudio-io.filesusr.com%2F&viewMode=desktop"
        id="platform_c1dmp" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous"></link>


    <!-- Sentry -->
    <script id="sentry">
        (function(c, t, u, n, p, l, y, z, v) {
            if (c[l] && c[l].mute) {
                return;
            }

            function e(b) {
                if (!w) {
                    w = !0;
                    var d = t.getElementsByTagName(u)[0],
                        a = t.createElement(u);
                    a.src = z;
                    a.crossorigin = "anonymous";
                    a.addEventListener("load", function() {
                        try {
                            c[n] = q;
                            c[p] = r;
                            var a = c[l],
                                d = a.init;
                            a.init = function(a) {
                                for (var b in a) Object.prototype.hasOwnProperty.call(a, b) && (v[b] = a[b]);
                                d(v)
                            };
                            B(b, a)
                        } catch (A) {
                            console.error(A)
                        }
                    });
                    d.parentNode.insertBefore(a, d)
                }
            }

            function B(b, d) {
                try {
                    for (var a = 0; a < b.length; a++)
                        if ("function" === typeof b[a]) b[a]();
                    var f = m.data,
                        g = !1,
                        h = !1;
                    for (a = 0; a < f.length; a++)
                        if (f[a].f) {
                            h = !0;
                            var e = f[a];
                            !1 === g && "init" !== e.f && d.init();
                            g = !0;
                            d[e.f].apply(d, e.a)
                        }!1 === h && d.init();
                    var k = c[n],
                        l = c[p];
                    for (a = 0; a < f.length; a++) f[a].e && k ? k.apply(c, f[a].e) : f[a].p && l && l.apply(c, [f[a].p])
                } catch (C) {
                    console.error(C)
                }
            }
            for (var g = !0, x = !1, k = 0; k < document.scripts.length; k++)
                if (-1 < document.scripts[k].src.indexOf(y)) {
                    g = "no" !== document.scripts[k].getAttribute("data-lazy");
                    break
                }
            var w = !1,
                h = [],
                m = function(b) {
                    (b.e || b.p || b.f && -1 < b.f.indexOf("capture") || b.f && -1 < b.f.indexOf("showReportDialog")) && g && e(h);
                    m.data.push(b)
                };
            m.data = [];
            c[l] = {
                onLoad: function(b) {
                    h.push(b);
                    g && !x || e(h)
                },
                forceLoad: function() {
                    x = !0;
                    g && setTimeout(function() {
                        e(h)
                    })
                }
            };
            "init addBreadcrumb captureMessage captureException captureEvent configureScope withScope showReportDialog".split(" ").forEach(function(b) {
                c[l][b] = function() {
                    m({
                        f: b,
                        a: arguments
                    })
                }
            });
            var q = c[n];
            c[n] = function(b, d, a, f, e) {
                m({
                    e: [].slice.call(arguments)
                });
                q && q.apply(c, arguments)
            };
            var r = c[p];
            c[p] = function(b) {
                m({
                    p: b.reason
                });
                r && r.apply(c, arguments)
            };
            g || setTimeout(function() {
                e(h)
            })
        })(window, document, "script", "onerror", "onunhandledrejection", "Sentry", "605a7baede844d278b89dc95ae0a9123", "https://browser.sentry-cdn.com/6.18.2/bundle.min.js", {
            "dsn": "https://605a7baede844d278b89dc95ae0a9123@sentry-next.wixpress.com/68",
            "beforeBreadcrumb": function(b) {
                window.onBeforeSentryBreadcrumb && window.onBeforeSentryBreadcrumb(b)
            }
        });
    </script>

    <script>
        window.resolveExternalsRegistryPromise = null
        const externalRegistryPromise = new Promise((r) => window.resolveExternalsRegistryPromise = r)
        window.resolveExternalsRegistryModule = (name) => externalRegistryPromise.then(() => window.externalsRegistry[name].onload())
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/externals-registry.inline.0ab41269.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [58], {
                47510: function() {
                    window.__imageClientApi__ = window.__imageClientApi__ || {
                        sdk: {}
                    };
                    const {
                        lodash: e,
                        react: o,
                        reactDOM: n,
                        imageClientApi: a
                    } = window.externalsRegistry = {
                        lodash: {},
                        react: {},
                        reactDOM: {},
                        imageClientApi: {}
                    };
                    a.loaded = new Promise((e => {
                        a.onload = e
                    })), e.loaded = new Promise((o => {
                        e.onload = o
                    })), window.ReactDOM || (window.reactDOMReference = window.ReactDOM = {
                        loading: !0
                    }), n.loaded = new Promise((e => {
                        n.onload = () => {
                            Object.assign(window.reactDOMReference || {}, window.ReactDOM, {
                                loading: !1
                            }), e()
                        }
                    })), window.React || (window.reactReference = window.React = {
                        loading: !0
                    }), o.loaded = new Promise((e => {
                        o.onload = () => {
                            Object.assign(window.reactReference || {}, window.React, {
                                loading: !1
                            }), e()
                        }
                    })), window.reactAndReactDOMLoaded = Promise.all([o.loaded, n.loaded]), window.resolveExternalsRegistryPromise()
                }
            },
            function(e) {
                var o;
                o = 47510, e(e.s = o)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/externals-registry.inline.0ab41269.bundle.min.js.map
    </script>

    <!-- Add the rest of the ViewerModel -->
    <script type="application/json" id="wix-viewer-model">
        {
            "siteAssetsTestModuleVersion": "1.334.0",
            "requestUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
            "siteFeatures": ["assetsLoader", "businessLogger", "captcha", "clickHandlerRegistrar", "commonConfig", "componentsLoader", "componentsRegistry", "consentPolicy", "customCss", "cyclicTabbing", "environmentWixCodeSdk", "environment", "locationWixCodeSdk", "navigationManager", "navigationPhases", "ooi", "pages", "panorama", "renderer", "reporter", "router", "scrollRestoration", "seoWixCodeSdk", "seo", "sessionManager", "siteMembersWixCodeSdk", "siteMembers", "siteScrollBlocker", "siteWixCodeSdk", "stores", "structureApi", "thunderboltInitializer", "tpaCommons", "translations", "warmupData", "windowMessageRegistrar", "windowWixCodeSdk", "wixEmbedsApi", "componentsReact", "platform"],
            "site": {
                "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                "userId": "75fa7506-e8f4-4ca7-99d3-49c713bef2e6",
                "siteId": "bed0d4ad-2fc4-4f5c-bf69-7224c394f235",
                "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                "siteRevision": 134,
                "siteType": "UGC",
                "dc": "uw2-pub-1",
                "isResponsive": true,
                "editorName": "Studio",
                "sessionId": "20a4840f-c367-4624-85c3-e70063250e5c",
                "isSEO": false,
                "appNameForBiEvents": "wix-studio"
            },
            "isMobileDevice": false,
            "viewMode": "desktop",
            "formFactor": "desktop",
            "deviceInfo": {
                "deviceClass": "Desktop"
            },
            "media": {
                "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                "mediaRootUrl": "https:\/\/static.wixstatic.com\/",
                "staticVideoUrl": "https:\/\/video.wixstatic.com\/"
            },
            "language": {
                "userLanguage": "en",
                "userLanguageResolutionMethod": "QueryParam",
                "siteLanguage": "en",
                "isMultilingualEnabled": false,
                "directionByLanguage": "ltr"
            },
            "mode": {
                "qa": false,
                "enableTestApi": false,
                "debug": false,
                "ssrIndicator": false,
                "ssrOnly": false,
                "siteAssetsFallback": "enable"
            },
            "siteFeaturesConfigs": {
                "assetsLoader": {},
                "componentsRegistry": {
                    "librariesTopology": [{
                        "artifactId": "editor-elements",
                        "namespace": "wixui",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
                    }, {
                        "artifactId": "editor-elements",
                        "namespace": "dsgnsys",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
                    }]
                },
                "consentPolicy": {
                    "isWixSite": false
                },
                "customCss": {
                    "gridAppId": "def19857-7619-42a2-9337-35cf567f6a80"
                },
                "dataWixCodeSdk": {
                    "gridAppId": "def19857-7619-42a2-9337-35cf567f6a80",
                    "segment": "LIVE"
                },
                "elementorySupportWixCodeSdk": {
                    "baseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5\/_api\/wix-code-public-dispatcher-ng\/siteview",
                    "relativePath": "\/my-site-5\/_api\/wix-code-public-dispatcher-ng\/siteview",
                    "gridAppId": "def19857-7619-42a2-9337-35cf567f6a80",
                    "viewMode": "site",
                    "siteRevision": 134,
                    "shouldUseMainGridAppId": false
                },
                "environmentWixCodeSdk": {
                    "shouldPreloadPlatformScripts": false
                },
                "environment": {
                    "editorType": "",
                    "domain": "wixstudio.io",
                    "previewMode": false
                },
                "fedopsWixCodeSdk": {
                    "isWixSite": false
                },
                "locationWixCodeSdk": {
                    "routersConfigMap": {},
                    "urlMappings": null
                },
                "onloadCompsBehaviors": {
                    "isResponsive": true
                },
                "ooiTpaSharedConfig": {
                    "imageSpriteUrl": "https:\/\/static.parastorage.com\/services\/santa-resources\/resources\/viewer\/editorUI\/fonts.v19.png",
                    "wixStaticFontsLinks": ["https:\/\/static.parastorage.com\/services\/santa-resources\/dist\/viewer\/user-site-fonts\/v22\/languages-woff2.css", "https:\/\/static.parastorage.com\/services\/santa-resources\/dist\/viewer\/user-site-fonts\/v27\/wixMadefor.css"]
                },
                "ooi": {
                    "ooiComponentsData": {
                        "371ee199-389c-4a93-849e-e35b8a15b7ca": {
                            "sentryDsn": "https:\/\/18d2f96d279149989b95faf0a4b41882@sentry-next.wixpress.com\/1784",
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormViewerWidget.bundle.min.js",
                            "widgetId": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                            "noCssComponentUrl": "",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0",
                            "isLoadable": true,
                            "isTPACssVars": true,
                            "isModuleFederated": false
                        },
                        "44c66af6-4d25-485a-ad9d-385f5460deef": {
                            "componentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidget.bundle.min.js",
                            "widgetId": "44c66af6-4d25-485a-ad9d-385f5460deef",
                            "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidgetNoCss.bundle.min.js",
                            "staticBaseUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3542.0\/",
                            "isLoadable": true,
                            "isTPACssVars": true,
                            "isModuleFederated": false
                        }
                    },
                    "viewMode": "Site",
                    "formFactor": "Desktop",
                    "blogMobileComponentUrl": "undefinedfeed-page-mobile-viewer.bundle.min.js"
                },
                "renderer": {
                    "disabledComponents": {}
                },
                "reporter": {
                    "userId": "75fa7506-e8f4-4ca7-99d3-49c713bef2e6",
                    "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                    "isPremium": false,
                    "isFBServerEventsAppProvisioned": false,
                    "dynamicPagesIds": []
                },
                "router": {
                    "baseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                    "mainPageId": "c1dmp",
                    "pagesMap": {
                        "c1dmp": {
                            "pageId": "c1dmp",
                            "title": "Home",
                            "pageUriSEO": "home",
                            "pageJsonFileName": "75fa75_16bbdfd6afc281192b4ad3bc15dcf1c0_126"
                        },
                        "fs12m": {
                            "pageId": "fs12m",
                            "title": "Search Results",
                            "pageUriSEO": "search",
                            "pageJsonFileName": "75fa75_b371ef820d2bc4e8b60a8acfe55fb56c_123"
                        }
                    },
                    "disableStaticPagesUrlHierarchy": false,
                    "routes": {
                        ".\/home": {
                            "type": "Static",
                            "pageId": "c1dmp"
                        },
                        ".\/search": {
                            "type": "Static",
                            "pageId": "fs12m"
                        },
                        ".\/": {
                            "type": "Static",
                            "pageId": "c1dmp"
                        }
                    },
                    "pageIdToPrefix": {},
                    "isWixSite": false
                },
                "searchWixCodeSdk": {
                    "language": "en"
                },
                "seo": {
                    "context": {
                        "siteName": "My Site 5",
                        "siteUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                        "domain": "wixstudio.io",
                        "indexSite": true,
                        "defaultUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                        "currLangIsOriginal": true,
                        "homePageTitle": "Home",
                        "ogType": "article",
                        "businesLocale": "en-in",
                        "currency": "INR",
                        "experiments": {
                            "specs.seo.EnableFaqSD": "false",
                            "specs.promote-seo.search-engine-service-validate-token": "true",
                            "specs.promote-seo-patterns.ogDescriptionPlaceholder": "true",
                            "specs.promote-seo.seo-server-update-is-connected": "true"
                        },
                        "platformAppsExperiments": {
                            "1484cb44-49cd-5b39-9681-75188ab429de": {
                                "specs.siteSearch.DisableAllTabByDefault": "true",
                                "specs.siteSearch.MobileSettings": "true",
                                "specs.siteSearch.UseWarmupData": "true",
                                "specs.siteSearch.AppControllerLayoutFix": "true",
                                "specs.siteSearch.RemoveCorruptedSiteSearch": "true",
                                "specs.siteSearch.NewResultsPerPageDefaultValue": "true",
                                "specs.siteSearch.ProGallery": "false",
                                "specs.siteSearch.ResponsiveSearchBoxSkin": "true",
                                "specs.SiteSearch.CssPerBp": "true"
                            },
                            "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                                "specs.form-app.form-app-list-instead-query": "true",
                                "specs.form-app.SubmissionTrackEventEnabled": "true",
                                "specs.form-app.AiFormAssistant": "false",
                                "specs.form-app.form-app-warmup-data": "true",
                                "specs.form-app.FormsFrontendVeloApiEnabled": "true",
                                "specs.form-app.add-velo-api": "false",
                                "specs.form-app.get-component": "true"
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "specs.wixcode.ViewerExperimentTest": "false",
                                "specs.wixCode.LoadWithImportAMDModule": "true",
                                "specs.wixCode.LoadNamespacesPerPage": "false",
                                "specs.wixcode.ViewerExperimentOwnerScopeTest": "true"
                            }
                        }
                    },
                    "userPatterns": [],
                    "metaTags": [{
                        "name": "fb_admins_meta_tag",
                        "value": "",
                        "property": false
                    }],
                    "customHeadTags": "",
                    "isInSEO": false,
                    "hasBlogAmp": false,
                    "mainPageId": "c1dmp"
                },
                "sessionManager": {
                    "sessionModel": {},
                    "appsInstances": {},
                    "dynamicModelApiUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5\/_api\/v2\/dynamicmodel",
                    "expiryTimeoutOverride": 0,
                    "isRunningInDifferentSiteContext": false
                },
                "siteMembersWixCodeSdk": {
                    "isPreviewMode": false,
                    "isEditMode": false,
                    "smToken": "",
                    "smcollectionId": "5f0fc75a-965f-4e65-82ab-de2758bccca4"
                },
                "siteMembers": {
                    "collectionExposure": "Public",
                    "smcollectionId": "5f0fc75a-965f-4e65-82ab-de2758bccca4",
                    "smToken": "",
                    "protectedHomepage": false,
                    "isTemplate": false,
                    "loginSocialBarOnSite": false,
                    "isCommunityInstalled": false
                },
                "siteWixCodeSdk": {
                    "siteDisplayName": "My Site 5",
                    "siteRevision": 134,
                    "regionalSettings": "en-in",
                    "language": "en",
                    "prefetchPageResourcesEnabled": false,
                    "currency": "INR",
                    "mainPageId": "c1dmp",
                    "pageIdToPrefix": {},
                    "routerPrefixes": {},
                    "timezone": "Asia\/Kolkata",
                    "pageIdToTitle": {
                        "c1dmp": "Home",
                        "fs12m": "Search Results"
                    },
                    "urlMappings": null,
                    "viewMode": "Site"
                },
                "tpaCommons": {
                    "widgetsClientSpecMapData": {
                        "141995eb-c700-8487-6366-a482f7432e2b": {
                            "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                            "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                            "tpaWidgetId": "shoutout_feed",
                            "appPage": {},
                            "applicationId": 34,
                            "appDefinitionName": "ShoutOut (Legacy)",
                            "appDefinitionId": "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "371ee199-389c-4a93-849e-e35b8a15b7ca": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/form-app\/1.606.0\/Form",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/form-app\/1.606.0\/Form",
                            "tpaWidgetId": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                            "appPage": {},
                            "applicationId": 1635,
                            "appDefinitionName": "Wix Forms",
                            "appDefinitionId": "225dd912-7dea-4738-8688-4b8c6955ffc2",
                            "isWixTPA": true,
                            "allowScrolling": false
                        },
                        "44c66af6-4d25-485a-ad9d-385f5460deef": {
                            "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/search-app\/1.3542.0\/SearchResults",
                            "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/search-app\/1.3542.0\/SearchResults",
                            "appPage": {
                                "id": "search_results",
                                "name": "Search Results",
                                "defaultPage": "",
                                "hidden": false,
                                "multiInstanceEnabled": false,
                                "order": 1,
                                "indexable": true,
                                "fullPage": false,
                                "landingPageInMobile": false,
                                "hideFromMenu": false
                            },
                            "applicationId": 3678,
                            "appDefinitionName": "Wix Site Search",
                            "appDefinitionId": "1484cb44-49cd-5b39-9681-75188ab429de",
                            "isWixTPA": true,
                            "allowScrolling": false
                        }
                    },
                    "appsClientSpecMapByApplicationId": {
                        "34": {
                            "widgets": {
                                "141995eb-c700-8487-6366-a482f7432e2b": {
                                    "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "widgetId": "141995eb-c700-8487-6366-a482f7432e2b",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": true,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {},
                                    "tpaWidgetId": "shoutout_feed",
                                    "default": true
                                }
                            },
                            "applicationId": 34,
                            "appDefinitionName": "ShoutOut (Legacy)"
                        },
                        "1635": {
                            "widgets": {
                                "371ee199-389c-4a93-849e-e35b8a15b7ca": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/form-app\/1.606.0\/Form",
                                    "widgetId": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/form-app\/1.606.0\/Form",
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": false,
                                    "componentFields": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormController.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormViewerWidgetNoCss.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "cssPerBreakpoint": true,
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormViewerWidget.bundle.min.js",
                                        "viewer": {
                                            "errorReporting": {
                                                "url": "https:\/\/18d2f96d279149989b95faf0a4b41882@sentry-next.wixpress.com\/1784"
                                            }
                                        },
                                        "isLoadable": true,
                                        "ooiInEditor": true
                                    },
                                    "tpaWidgetId": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                                    "default": true
                                }
                            },
                            "applicationId": 1635,
                            "appDefinitionName": "Wix Forms"
                        },
                        "3678": {
                            "widgets": {
                                "44c66af6-4d25-485a-ad9d-385f5460deef": {
                                    "widgetUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/search-app\/1.3542.0\/SearchResults",
                                    "widgetId": "44c66af6-4d25-485a-ad9d-385f5460deef",
                                    "refreshOnWidthChange": true,
                                    "mobileUrl": "https:\/\/editor.wixapps.net\/render\/prod\/editor\/search-app\/1.3542.0\/SearchResults",
                                    "appPage": {
                                        "id": "search_results",
                                        "name": "Search Results",
                                        "defaultPage": "",
                                        "hidden": false,
                                        "multiInstanceEnabled": false,
                                        "order": 1,
                                        "indexable": true,
                                        "fullPage": false,
                                        "landingPageInMobile": false,
                                        "hideFromMenu": false
                                    },
                                    "published": true,
                                    "mobilePublished": true,
                                    "seoEnabled": false,
                                    "preFetch": false,
                                    "shouldBeStretchedByDefault": false,
                                    "shouldBeStretchedByDefaultMobile": true,
                                    "componentFields": {
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidget.bundle.min.js",
                                        "ssrCacheExcluded": "false",
                                        "linkable": true,
                                        "controllerUrlTemplate": "",
                                        "viewer": {
                                            "errorReporting": {
                                                "url": ""
                                            }
                                        },
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidgetNoCss.bundle.min.js",
                                        "defaultMobileHeight": 115,
                                        "mobileSettingsEnabled": true,
                                        "noCssComponentUrlTemplate": "<%=serviceUrl('search-app', 'SearchResultsViewerWidgetNoCss.bundle.min.js')%>",
                                        "isLoadable": true,
                                        "cssPerBreakpoint": true
                                    },
                                    "default": true
                                }
                            },
                            "applicationId": 3678,
                            "appDefinitionName": "Wix Site Search"
                        }
                    },
                    "appsClientSpecMapData": {
                        "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e": {
                            "applicationId": 34,
                            "appDefinitionName": "ShoutOut (Legacy)",
                            "appFields": {
                                "premiumBundle": {
                                    "parentAppId": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9",
                                    "parentAppSlug": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9"
                                },
                                "isStandalone": true,
                                "semanticVersion": "^0.64.0"
                            },
                            "isWixTPA": true
                        },
                        "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                            "applicationId": 1635,
                            "appDefinitionName": "Wix Forms",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0",
                                        "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0"
                                    },
                                    "baseUrlsTemplate": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0"
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/editorScript.bundle.min.js",
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/viewerScript.bundle.min.js",
                                    "errorReporting": {
                                        "url": "https:\/\/5d1795a2db124a268f1e1bd88f503500@sentry.wixpress.com\/4615"
                                    },
                                    "viewer": {
                                        "errorReporting": {
                                            "url": "https:\/\/5d1795a2db124a268f1e1bd88f503500@sentry.wixpress.com\/4615"
                                        }
                                    },
                                    "ooiInEditor": true
                                },
                                "isStandalone": true,
                                "semanticVersion": "^0.212.0"
                            },
                            "isWixTPA": true
                        },
                        "1484cb44-49cd-5b39-9681-75188ab429de": {
                            "applicationId": 3678,
                            "appDefinitionName": "Wix Site Search",
                            "appFields": {
                                "platform": {
                                    "baseUrls": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3542.0\/"
                                    },
                                    "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/editorScript.bundle.min.js",
                                    "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/viewerScript.bundle.min.js",
                                    "baseUrlsTemplate": {
                                        "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3542.0\/"
                                    },
                                    "margins": {
                                        "desktop": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "tablet": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        },
                                        "mobile": {
                                            "top": {},
                                            "right": {},
                                            "bottom": {},
                                            "left": {}
                                        }
                                    },
                                    "height": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "docking": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "errorReporting": {},
                                    "width": {
                                        "desktop": {},
                                        "tablet": {},
                                        "mobile": {}
                                    },
                                    "viewer": {
                                        "errorReporting": {}
                                    }
                                },
                                "isStandalone": true,
                                "semanticVersion": "^0.368.0",
                                "installedVersion": "^0.0.0"
                            },
                            "isWixTPA": true
                        }
                    },
                    "previewMode": false,
                    "siteRevision": 134,
                    "userFileDomainUrl": "filesusr.com",
                    "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                    "isPremiumDomain": false,
                    "routersConfig": {},
                    "routerByPrefix": {},
                    "pageIdToPrefix": {},
                    "viewMode": "site",
                    "editorOrSite": "site",
                    "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                    "tpaModalConfig": {
                        "wixTPAs": {
                            "13ee94c1-b635-8505-3391-97919052c16f": true,
                            "55cd9036-36bb-480b-8ddc-afda3cb2eb8d": true,
                            "35aec784-bbec-4e6e-abcb-d3d724af52cf": true,
                            "8ea9df15-9ff6-4acf-bbb8-8d3a69ae5841": true,
                            "139ef4fa-c108-8f9a-c7be-d5f492a2c939": true,
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": true,
                            "141fbfae-511e-6817-c9f0-48993a7547d1": true,
                            "d70b68e2-8d77-4e0c-9c00-c292d6e0025e": true,
                            "146c0d71-352e-4464-9a03-2e868aabe7b9": true,
                            "307ba931-689c-4b55-bb1d-6a382bad9222": true,
                            "4b10fcce-732d-4be3-9d46-801d271acda9": true,
                            "14b89688-9b25-5214-d1cb-a3fb9683618b": true,
                            "ea2821fc-7d97-40a9-9f75-772f29178430": true,
                            "9bead16f-1c73-4cda-b6c4-28cff46988db": true,
                            "1480c568-5cbd-9392-5604-1148f5faffa0": true,
                            "94bc563b-675f-41ad-a2a6-5494f211c47b": true,
                            "14e12b04-943e-fd32-456d-70b1820a2ff2": true,
                            "14bca956-e09f-f4d6-14d7-466cb3f09103": true,
                            "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e": true,
                            "150ae7ee-c74a-eecd-d3d7-2112895b988a": true,
                            "f123e8f1-4350-4c9b-b269-04adfadda977": true,
                            "9050a8e8-0fd3-4936-af2a-5ae4f84c41b8": true,
                            "225dd912-7dea-4738-8688-4b8c6955ffc2": true,
                            "1484cb44-49cd-5b39-9681-75188ab429de": true
                        }
                    },
                    "appSectionParams": {},
                    "requestUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                    "isMobileView": false,
                    "deviceType": "desktop",
                    "isMobileDevice": false,
                    "extras": {
                        "currency": "INR"
                    },
                    "tpaDebugParams": {
                        "debugApp": null,
                        "petri_ovr": null
                    },
                    "locale": "en",
                    "timeZone": "Asia\/Kolkata",
                    "shouldRenderTPAsIframe": true,
                    "debug": false,
                    "regionalLanguage": "en"
                },
                "windowWixCodeSdk": {
                    "locale": "en-in",
                    "isMobileFriendly": true,
                    "formFactor": "Desktop",
                    "pageIdToRouterAppDefinitionId": {}
                },
                "wixEmbedsApi": {
                    "isAdminPage": false
                },
                "platform": {
                    "sdksStaticPaths": {
                        "mainSdks": "mainSdks.80989a34.chunk.min.js",
                        "nonMainSdks": "nonMainSdks.f8719206.chunk.min.js"
                    },
                    "landingPageId": "c1dmp",
                    "isChancePlatformOnLandingPage": true,
                    "clientWorkerUrl": "https:\/\/static.parastorage.com\/services\/wix-thunderbolt\/dist\/clientWorker.92469024.bundle.min.js",
                    "bootstrapData": {
                        "isMobileView": false,
                        "appsSpecData": {
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                "appDefinitionId": "14ce1214-b278-a7e4-1373-00cebd1bef7c",
                                "type": "public",
                                "instanceId": "acdc815f-b4c1-4782-920a-061d3b64dbc8",
                                "appDefinitionName": "Wix Forms & Payments",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "appDefinitionId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                                "type": "siteextension",
                                "instanceId": "994b964a-3759-41db-8ec6-df473cfbb94f",
                                "isModuleFederated": false
                            },
                            "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                                "appDefinitionId": "225dd912-7dea-4738-8688-4b8c6955ffc2",
                                "type": "public",
                                "instanceId": "a6533ca3-0d6d-42e2-8315-3367dfcce022",
                                "appDefinitionName": "Wix Forms",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "1484cb44-49cd-5b39-9681-75188ab429de": {
                                "appDefinitionId": "1484cb44-49cd-5b39-9681-75188ab429de",
                                "type": "public",
                                "instanceId": "1f8aba09-c18c-4df8-8268-4536a85bcc18",
                                "appDefinitionName": "Wix Site Search",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            },
                            "dataBinding": {
                                "appDefinitionId": "dataBinding",
                                "type": "application",
                                "instanceId": "994b964a-3759-41db-8ec6-df473cfbb94f",
                                "appDefinitionName": "Data Binding",
                                "isWixTPA": true,
                                "isModuleFederated": false
                            }
                        },
                        "appsUrlData": {
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {
                                "appDefId": "14ce1214-b278-a7e4-1373-00cebd1bef7c",
                                "appDefName": "Wix Forms & Payments",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/forms-viewer\/1.864.0\/viewerScript.bundle.min.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                                "appDefId": "225dd912-7dea-4738-8688-4b8c6955ffc2",
                                "appDefName": "Wix Forms",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0",
                                    "staticsEditorBaseUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0"
                                },
                                "errorReportingUrl": "https:\/\/5d1795a2db124a268f1e1bd88f503500@sentry.wixpress.com\/4615",
                                "widgets": {
                                    "371ee199-389c-4a93-849e-e35b8a15b7ca": {
                                        "controllerUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormController.bundle.min.js",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/form-app\/1.606.0\/FormViewerWidgetNoCss.bundle.min.js",
                                        "errorReportingUrl": "https:\/\/18d2f96d279149989b95faf0a4b41882@sentry-next.wixpress.com\/1784",
                                        "widgetId": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "1484cb44-49cd-5b39-9681-75188ab429de": {
                                "appDefId": "1484cb44-49cd-5b39-9681-75188ab429de",
                                "appDefName": "Wix Site Search",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/viewerScript.bundle.min.js",
                                "baseUrls": {
                                    "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3542.0\/"
                                },
                                "widgets": {
                                    "44c66af6-4d25-485a-ad9d-385f5460deef": {
                                        "controllerUrl": "",
                                        "componentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidget.bundle.min.js",
                                        "noCssComponentUrl": "https:\/\/static.parastorage.com\/services\/search-app\/1.3545.0\/SearchResultsViewerWidgetNoCss.bundle.min.js",
                                        "widgetId": "44c66af6-4d25-485a-ad9d-385f5460deef",
                                        "cssPerBreakpoint": true
                                    }
                                }
                            },
                            "dataBinding": {
                                "appDefId": "dataBinding",
                                "appDefName": "Data Binding",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/dbsm-viewer-app\/1.7965.0\/app.js",
                                "baseUrls": {},
                                "widgets": {}
                            },
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                "appDefId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                                "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-code-viewer-app\/1.1479.707\/app.js",
                                "baseUrls": {},
                                "widgets": {}
                            }
                        },
                        "blocksBootstrapData": {
                            "blocksAppsData": {},
                            "experiments": {},
                            "experimentsQueryParams": "analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=undefined"
                        },
                        "window": {
                            "csrfToken": "1706356299|sjrudtyk6e_j"
                        },
                        "location": {
                            "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                            "isPremiumDomain": false,
                            "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                            "userFileDomainUrl": "filesusr.com"
                        },
                        "bi": {
                            "ownerId": "75fa7506-e8f4-4ca7-99d3-49c713bef2e6",
                            "isMobileFriendly": true,
                            "isPreview": false,
                            "requestId": "1706361298.483351724557122967"
                        },
                        "platformAPIData": {
                            "routersConfigMap": {}
                        },
                        "wixCodeBootstrapData": {
                            "wixCodeAppDefinitionId": "675bbcef-18d8-41f5-800e-131ec9e08762",
                            "wixCodeInstanceId": "994b964a-3759-41db-8ec6-df473cfbb94f",
                            "wixCloudBaseDomain": "wix-code.com",
                            "dbsmViewerApp": "https:\/\/static.parastorage.com\/services\/dbsm-viewer-app\/1.7965.0",
                            "wixCodePlatformBaseUrl": "https:\/\/static.parastorage.com\/services\/wix-code-platform\/1.1097.93",
                            "wixCodeModel": {
                                "appData": {
                                    "codeAppId": "def19857-7619-42a2-9337-35cf567f6a80"
                                },
                                "signedAppRenderInfo": "e27218794c5b8638544552f8abdc30054469cde5.eyJncmlkQXBwSWQiOiJkZWYxOTg1Ny03NjE5LTQyYTItOTMzNy0zNWNmNTY3ZjZhODAiLCJodG1sU2l0ZUlkIjoiYmVkMGQ0YWQtMmZjNC00ZjVjLWJmNjktNzIyNGMzOTRmMjM1IiwiZGVtb0lkIjpudWxsLCJzaWduRGF0ZSI6MTcwNjM2MTI5ODU4NH0="
                            },
                            "wixCodePageIds": {
                                "c1dmp": "https:\/\/bundler.wix-code.com\/f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7\/994b964a-3759-41db-8ec6-df473cfbb94f\/def19857-7619-42a2-9337-35cf567f6a80\/pages\/c1dmp.js?analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=false",
                                "fs12m": "https:\/\/bundler.wix-code.com\/f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7\/994b964a-3759-41db-8ec6-df473cfbb94f\/def19857-7619-42a2-9337-35cf567f6a80\/pages\/fs12m.js?analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=false",
                                "masterPage": "https:\/\/bundler.wix-code.com\/f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7\/994b964a-3759-41db-8ec6-df473cfbb94f\/def19857-7619-42a2-9337-35cf567f6a80\/pages\/masterPage.js?analyze-imported-namespaces=true&init-platform-api-provider=true&get-app-def-id-from-package-name=false&disable-yarn-pnp-mode=false"
                            },
                            "elementorySupport": {
                                "baseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5\/_api\/wix-code-public-dispatcher-ng\/siteview"
                            },
                            "codePackagesData": []
                        },
                        "autoFrontendModulesBaseUrl": "https:\/\/static.parastorage.com\/services\/auto-frontend-modules\/1.3434.0",
                        "disabledPlatformApps": {},
                        "widgetsClientSpecMapData": {
                            "14ce1214-b278-a7e4-1373-00cebd1bef7c": {},
                            "675bbcef-18d8-41f5-800e-131ec9e08762": {},
                            "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                                "371ee199-389c-4a93-849e-e35b8a15b7ca": {
                                    "widgetName": "371ee199-389c-4a93-849e-e35b8a15b7ca",
                                    "componentFields": {}
                                }
                            },
                            "1484cb44-49cd-5b39-9681-75188ab429de": {
                                "44c66af6-4d25-485a-ad9d-385f5460deef": {
                                    "widgetName": "search_results",
                                    "componentFields": {}
                                }
                            },
                            "dataBinding": {}
                        },
                        "essentials": {
                            "appsConductedExperiments": {
                                "1484cb44-49cd-5b39-9681-75188ab429de": {
                                    "specs.siteSearch.DisableAllTabByDefault": "true",
                                    "specs.siteSearch.MobileSettings": "true",
                                    "specs.siteSearch.UseWarmupData": "true",
                                    "specs.siteSearch.AppControllerLayoutFix": "true",
                                    "specs.siteSearch.RemoveCorruptedSiteSearch": "true",
                                    "specs.siteSearch.NewResultsPerPageDefaultValue": "true",
                                    "specs.siteSearch.ProGallery": "false",
                                    "specs.siteSearch.ResponsiveSearchBoxSkin": "true",
                                    "specs.SiteSearch.CssPerBp": "true"
                                },
                                "225dd912-7dea-4738-8688-4b8c6955ffc2": {
                                    "specs.form-app.form-app-list-instead-query": "true",
                                    "specs.form-app.SubmissionTrackEventEnabled": "true",
                                    "specs.form-app.AiFormAssistant": "false",
                                    "specs.form-app.form-app-warmup-data": "true",
                                    "specs.form-app.FormsFrontendVeloApiEnabled": "true",
                                    "specs.form-app.add-velo-api": "false",
                                    "specs.form-app.get-component": "true"
                                },
                                "675bbcef-18d8-41f5-800e-131ec9e08762": {
                                    "specs.wixcode.ViewerExperimentTest": "false",
                                    "specs.wixCode.LoadWithImportAMDModule": "true",
                                    "specs.wixCode.LoadNamespacesPerPage": "false",
                                    "specs.wixcode.ViewerExperimentOwnerScopeTest": "true"
                                }
                            }
                        },
                        "appsDoNotLoadSdks": [],
                        "forceEmptySdks": false
                    },
                    "appsScripts": {
                        "urls": {
                            "675bbcef-18d8-41f5-800e-131ec9e08762": ["https:\/\/static.parastorage.com\/services\/wix-code-viewer-app\/1.1479.707\/app.js"]
                        },
                        "scope": "page"
                    },
                    "debug": {
                        "disablePlatform": false,
                        "disableSnapshots": false,
                        "enableSnapshots": false
                    }
                }
            },
            "siteAssets": {
                "dataFixersParams": {
                    "experiments": {
                        "bv_remove_add_chat_viewer_fixer": "new",
                        "dm_linkTargetDefaults": true,
                        "dm_removePageDataUnderTranslations": true,
                        "dm_migrateResponsiveSectionStyleItemToDesign": true
                    },
                    "dfVersion": "1.2894.0",
                    "isHttps": true,
                    "isUrlMigrated": true,
                    "metaSiteId": "f9c3fb9c-34e2-4c3d-a136-f21f09c0d3d7",
                    "quickActionsMenuEnabled": false,
                    "siteId": "bed0d4ad-2fc4-4f5c-bf69-7224c394f235",
                    "siteRevision": 134,
                    "v": 3,
                    "cacheVersions": {
                        "dataFixer": 6
                    }
                },
                "modulesParams": {
                    "features": {
                        "moduleName": "thunderbolt-features",
                        "contentType": "application\/json",
                        "resourceType": "features",
                        "languageResolutionMethod": "QueryParam",
                        "isMultilingualEnabled": false,
                        "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                        "useSandboxInHTMLComp": true,
                        "disableStaticPagesUrlHierarchy": false,
                        "aboveTheFoldSectionsNum": null,
                        "isTrackClicksAnalyticsEnabled": false
                    },
                    "platform": {
                        "moduleName": "thunderbolt-platform",
                        "contentType": "application\/json",
                        "resourceType": "platform",
                        "externalBaseUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5",
                        "staticHTMLComponentUrl": "https:\/\/abhijithac1603-wixstudio-io.filesusr.com\/"
                    },
                    "css": {
                        "moduleName": "thunderbolt-css",
                        "contentType": "application\/json",
                        "resourceType": "css",
                        "stylableMetadataURLs": ["editor-elements-library.thunderbolt.41a2a2ab92e3f54bdf7ca8251e9ea384c42d60c5", "editor-elements-design-systems.thunderbolt.a64fa3c9cb5e7400373672c7f8ca6b7d0670dc08"],
                        "ooiVersions": "NDRjNjZhZjYtNGQyNS00ODVhLWFkOWQtMzg1ZjU0NjBkZWVmPXAuc2VhcmNoLWFwcC8xLjM1NDUuMC9TZWFyY2hSZXN1bHRzVmlld2VyV2lkZ2V0Tm9Dc3MuY3NzQ29uZmlnLmJ1bmRsZS5taW4uanM=",
                        "cssVarsOnlyWidgets": ""
                    },
                    "siteMap": {
                        "moduleName": "thunderbolt-site-map",
                        "contentType": "application\/json",
                        "resourceType": "siteMap"
                    },
                    "mobileAppBuilder": {
                        "moduleName": "thunderbolt-mobile-app-builder",
                        "resourceType": "mobileAppBuilder",
                        "contentType": "application\/json"
                    }
                },
                "clientTopology": {
                    "mediaRootUrl": "https:\/\/static.wixstatic.com",
                    "staticMediaUrl": "https:\/\/static.wixstatic.com\/media",
                    "moduleRepoUrl": "https:\/\/static.parastorage.com\/unpkg",
                    "fileRepoUrl": "https:\/\/static.parastorage.com\/services",
                    "siteAssetsUrl": "https:\/\/siteassets.parastorage.com",
                    "pageJsonServerUrls": ["https:\/\/pages.parastorage.com", "https:\/\/staticorigin.wixstatic.com", "https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],
                    "pathOfTBModulesInFileRepoForFallback": "wix-thunderbolt\/dist\/"
                },
                "siteScopeParams": {
                    "rendererType": null,
                    "wixCodePageIds": ["c1dmp", "fs12m", "masterPage"],
                    "hasTPAWorkerOnSite": false,
                    "formFactor": "desktop",
                    "viewMode": "desktop",
                    "freemiumBanner": true,
                    "coBrandingBanner": false,
                    "dayfulBanner": false,
                    "mobileActionsMenu": false,
                    "isWixSite": false,
                    "isResponsive": true,
                    "editorName": "Studio",
                    "urlFormatModel": {
                        "format": "slash",
                        "forbiddenPageUriSEOs": ["app", "apps", "_api", "robots.txt", "sitemap.xml", "feed.xml", "sites"],
                        "pageIdToResolvedUriSEO": {}
                    },
                    "pageJsonFileNames": {
                        "c1dmp": "75fa75_16bbdfd6afc281192b4ad3bc15dcf1c0_126.json",
                        "fs12m": "75fa75_b371ef820d2bc4e8b60a8acfe55fb56c_123.json",
                        "masterPage": "75fa75_451ef060f702871fba227d1e55719c51_134.json"
                    },
                    "protectedPageIds": [],
                    "routersInfo": {
                        "configMap": {}
                    },
                    "isPremiumDomain": false,
                    "disableSiteAssetsCache": false,
                    "migratingToOoiWidgetIds": "",
                    "siteRevisionConfig": {},
                    "registryLibrariesTopology": [{
                        "artifactId": "editor-elements",
                        "namespace": "wixui",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
                    }, {
                        "artifactId": "editor-elements",
                        "namespace": "dsgnsys",
                        "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
                    }],
                    "isInSeo": false,
                    "language": "en",
                    "originalLanguage": "en",
                    "appDefinitionIdToSiteRevision": {}
                },
                "beckyExperiments": {
                    "specs.thunderbolt.supportSpxInEEMappers": true,
                    "specs.thunderbolt.one_cell_grid_display_flex": true,
                    "specs.thunderbolt.MediaContainerAndPageBackgroundMapper": true,
                    "specs.thunderbolt.backgroundColorPerBreakpoint": true,
                    "specs.thunderbolt.ghostify_hidden_comps": true,
                    "specs.thunderbolt.edixIsInFirstFold": true,
                    "specs.thunderbolt.app_reflow_with_lightboxes": true,
                    "specs.thunderbolt.DatePickerPortal": true,
                    "specs.thunderbolt.mlUtilsImport": true,
                    "specs.thunderbolt.useRefDisplayCssVar": true,
                    "specs.thunderbolt.useElementoryRelativePath": true,
                    "specs.thunderbolt.enableTriggersOnDynamicMount": true,
                    "specs.thunderbolt.mesh_css_catharsis": true,
                    "specs.thunderbolt.DDMenuMigrateCssCarmiMapper": true,
                    "specs.thunderbolt.responsiveShapeDividersPublic": true,
                    "specs.thunderbolt.customElemCollapsedheight": true,
                    "specs.thunderbolt.fiveGridLineStudioSkins": true,
                    "specs.thunderbolt.displayRefComponentsAsBlock": true,
                    "specs.thunderbolt.catharsis_fontFaces": true
                },
                "manifests": {
                    "node": {
                        "modulesToHashes": {
                            "thunderbolt-features": "314f18ac.bundle.min",
                            "thunderbolt-platform": "046e1c1e.bundle.min",
                            "thunderbolt-css": "79015002.bundle.min",
                            "thunderbolt-site-map": "a7395159.bundle.min",
                            "thunderbolt-mobile-app-builder": "6d7fe6f9.bundle.min",
                            "thunderbolt-byref": "27d93d24.bundle.min"
                        }
                    },
                    "web": {
                        "modulesToHashes": {
                            "thunderbolt-features": "bea6d5af.bundle.min",
                            "thunderbolt-platform": "f77bc9f1.bundle.min",
                            "thunderbolt-css": "46e396d4.bundle.min",
                            "thunderbolt-site-map": "8f5dd6d2.bundle.min",
                            "thunderbolt-mobile-app-builder": "8283b988.bundle.min",
                            "thunderbolt-byref": "0fe988c3.bundle.min",
                            "webpack-runtime": "2d9fdeba.bundle.min"
                        },
                        "webpackRuntimeBundle": "2d9fdeba.bundle.min"
                    },
                    "webWorker": {
                        "modulesToHashes": {
                            "thunderbolt-features": "c371fed9.bundle.min",
                            "thunderbolt-platform": "51274dd4.bundle.min",
                            "thunderbolt-css": "3fbf4282.bundle.min",
                            "thunderbolt-site-map": "cba3285a.bundle.min",
                            "thunderbolt-mobile-app-builder": "65bb3121.bundle.min",
                            "thunderbolt-byref": "8f06b445.bundle.min"
                        }
                    }
                },
                "staticHTMLComponentUrl": "https:\/\/abhijithac1603-wixstudio-io.filesusr.com\/",
                "remoteWidgetStructureBuilderVersion": "1.238.0"
            },
            "experiments": {
                "specs.thunderbolt.userAsFactory": true,
                "specs.thunderbolt.simpleMaterializer": true,
                "specs.thunderbolt.getMemberDetailsFromMembersNg": true,
                "storeSanpshotOnRedis": true,
                "specs.thunderbolt.supportSpxInEEMappers": true,
                "specs.thunderbolt.siteAssetsCustomRouting": "scala",
                "specs.thunderbolt.one_cell_grid_display_flex": true,
                "specs.thunderbolt.MediaContainerAndPageBackgroundMapper": true,
                "specs.thunderbolt.readWidgetPresetsFromMasterPage": true,
                "specs.thunderbolt.catharsis_shapeIds": true,
                "specs.thunderbolt.specificTransitionsProperties": true,
                "specs.thunderbolt.backgroundColorPerBreakpoint": true,
                "specs.thunderbolt.ghostify_hidden_comps": true,
                "specs.thunderbolt.edixIsInFirstFold": true,
                "specs.thunderbolt.loafOriginTrial": true,
                "specs.thunderbolt.catharsis_theme": true,
                "specs.thunderbolt.newLoginFlowOnProtectedCollection": true,
                "specs.thunderbolt.useNewRegisterLogin": true,
                "specs.thunderbolt.changeHashBangUrlFix": true,
                "specs.thunderbolt.useNewResourceFetcher": true,
                "specs.thunderbolt.expandColorPalette": true,
                "specs.thunderbolt.app_reflow_with_lightboxes": true,
                "specs.thunderbolt.DatePickerPortal": true,
                "specs.thunderbolt.hamburgerMenuFocus": true,
                "specs.thunderbolt.ShouldUseNewIAMSocialFlow": true,
                "specs.thunderbolt.useIAMEnabledConnections": true,
                "specs.thunderbolt.mlUtilsImport": true,
                "specs.thunderbolt.VeloDocumentHeightFix": true,
                "specs.thunderbolt.useRefDisplayCssVar": true,
                "specs.thunderbolt.useElementoryRelativePath": true,
                "specs.thunderbolt.removeStickyTopVar": true,
                "specs.thunderbolt.enableTriggersOnDynamicMount": true,
                "specs.thunderbolt.iamResetPasswordFlow": true,
                "specs.thunderbolt.mesh_css_catharsis": true,
                "specs.thunderbolt.shouldLoadGoogleSdkEarly": true,
                "specs.thunderbolt.shouldUseMemberPrivacySettingsService": true,
                "specs.thunderbolt.DDMenuMigrateCssCarmiMapper": true,
                "specs.thunderbolt.responsiveShapeDividersPublic": true,
                "specs.thunderbolt.react_experimental": true,
                "specs.thunderbolt.cyclicTabbingFastDom": true,
                "specs.thunderbolt.checkIOSToAvoidBeacon": true,
                "specs.thunderbolt.enableSignUpPrivacyNoteType": true,
                "specs.thunderbolt.oneQueueForLoggers": true,
                "specs.thunderbolt.layouterNavigationConsumption": true,
                "specs.thunderbolt.veloWixMembersAmbassadorV2": true,
                "specs.thunderbolt.customElemCollapsedheight": true,
                "useTpaSeoService": true,
                "specs.promote.ar.reportEcomPlatformPurchaseEvents": true,
                "specs.thunderbolt.useIAMPlatform": true,
                "specs.thunderbolt.fiveGridLineStudioSkins": true,
                "specs.thunderbolt.useRuntimeDataSchemasV2": true,
                "specs.thunderbolt.WRichTextDefaultSpan": true,
                "specs.thunderbolt.onLinkClickHandlerAsync": true,
                "specs.thunderbolt.displayRefComponentsAsBlock": true,
                "specs.thunderbolt.loginSocialBarEnableUrlChangeListeners": true,
                "specs.thunderbolt.seoSortMetaTagProps": true,
                "specs.thunderbolt.externals_byoc_ui_libs": true,
                "specs.thunderbolt.InitPlatformApiProvider": true,
                "displayWixAdsNewVersion": true,
                "specs.thunderbolt.smModalsShouldWaitForAppDidMount": true,
                "specs.thunderbolt.ooi_css_optimization": true,
                "specs.thunderbolt.YieldToMainInFunctionPropsHandler": true,
                "specs.ShouldForceCaptchaVerificationOnSignupSpec": "Disabled",
                "specs.ShouldForceCaptchaVerificationOnLoginSpec": "Disabled",
                "specs.thunderbolt.theme_fonts_colors_catharsis": true,
                "specs.thunderbolt.catharsis_fontFaces": true,
                "specs.thunderbolt.do_not_wait_for_dom_custom_elements": true,
                "specs.thunderbolt.skipLivePreviewRefreshOnSetProps": true,
                "specs.thunderbolt.WixCodeAnalyzeImportedNamespaces": true,
                "specs.thunderbolt.noOriginalUrlFallbackOnFetch": true,
                "specs.thunderbolt.newAuthorizedPagesFlow": true,
                "specs.thunderbolt.Panorama": true,
                "specs.thunderbolt.fetchCurrentMemberFromMembersNg": true,
                "specs.thunderbolt.resourceFetcherConformToFetchApi": true
            },
            "fleetConfig": {
                "fleetName": "thunderbolt-renderer-user-code",
                "type": "GA",
                "code": 0
            },
            "dynamicModelUrl": "https:\/\/abhijithac1603.wixstudio.io\/my-site-5\/_api\/v2\/dynamicmodel",
            "rollout": {
                "siteAssetsVersionsRollout": false,
                "isDACRollout": 0,
                "isTBRollout": false
            },
            "commonConfig": {
                "brand": "studio",
                "host": "VIEWER",
                "bsi": "",
                "consentPolicy": {},
                "consentPolicyHeader": {}
            },
            "componentsLibrariesTopology": [{
                "artifactId": "editor-elements",
                "namespace": "wixui",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
            }, {
                "artifactId": "editor-elements",
                "namespace": "dsgnsys",
                "url": "https:\/\/static.parastorage.com\/services\/editor-elements\/1.11681.0"
            }],
            "anywhereConfig": {},
            "interactionSampleRatio": 0.01,
            "rendererType": null,
            "react18Compatible": true
        }
    </script>
    <script>
        window.viewerModel = JSON.parse(document.getElementById('wix-viewer-model').textContent)
    </script>
    <!-- renderIndicator -->


    <!-- Business Manager -->

    <!-- initCustomElements #2 -->

    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/lazyCustomElementWrapper.inline.84c11f58.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [9740], {
                98911: function(t, e, n) {
                    var i = function(t) {
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const t = this.querySelector("iframe");
                                if (t) {
                                    const e = t.dataset.src;
                                    e && t.src !== e && (t.src = e, t.dataset.src = "", this.dataset.src = "")
                                }
                            }
                            attributeChangedCallback(t, e, n) {
                                n && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-src"]
                            }
                        }
                    };
                    const r = (t, e, n) => {
                        void 0 === t.customElements.get(e) && t.customElements.define(e, n)
                    };
                    var o = n(24027),
                        a = n(65377),
                        c = n(84240),
                        s = n(80483),
                        u = {
                            measure(t, e, {
                                hasBgScrollEffect: n,
                                videoWidth: i,
                                videoHeight: r,
                                fittingType: c,
                                alignType: u = "center",
                                qualities: d,
                                staticVideoUrl: l,
                                videoId: f,
                                videoFormat: h,
                                focalPoint: m
                            }) {
                                const p = n ? e.offsetWidth : t.parentElement.offsetWidth,
                                    g = t.parentElement.offsetHeight,
                                    y = parseInt(i, 10),
                                    b = parseInt(r, 10),
                                    w = function(t, e, n, i) {
                                        return {
                                            wScale: t / n,
                                            hScale: e / i
                                        }
                                    }(p, g, y, b),
                                    v = function(t, e, n, i) {
                                        let r;
                                        r = t === s.fittingTypes.SCALE_TO_FIT ? Math.min(e.wScale, e.hScale) : Math.max(e.wScale, e.hScale);
                                        return {
                                            width: Math.round(n * r),
                                            height: Math.round(i * r)
                                        }
                                    }(c, w, y, b),
                                    E = function(t, {
                                        width: e,
                                        height: n
                                    }) {
                                        const i = (0, o.Tw)(t, (t => t.size)),
                                            r = i.find((t => t.size > e * n));
                                        return r || t[t.length - 1]
                                    }(d, v),
                                    x = function(t, e, n, i) {
                                        if ("mp4" === i) return t.url ? (0, o.xn)(e, t.url) : (0, o.xn)(e, n, t.quality, i, "file.mp4");
                                        return ""
                                    }(E, l, f, h),
                                    S = function(t, e) {
                                        const n = t.networkState === t.NETWORK_NO_SOURCE,
                                            i = !t.currentSrc.endsWith(e);
                                        return e && (i || n)
                                    }(t, x),
                                    _ = a.tE[c] || "cover",
                                    A = m ? function(t, e, n) {
                                        const {
                                            width: i,
                                            height: r
                                        } = t, {
                                            width: o,
                                            height: a
                                        } = e, {
                                            x: c,
                                            y: s
                                        } = n;
                                        if (!o || !a) return `${c}% ${s}%`;
                                        const u = Math.max(o / i, a / r),
                                            d = i * u,
                                            l = r * u,
                                            f = Math.max(0, Math.min(d - o, d * (c / 100) - o / 2)),
                                            h = Math.max(0, Math.min(l - a, l * (s / 100) - a / 2)),
                                            m = f && Math.floor(f / (d - o) * 100),
                                            p = h && Math.floor(h / (l - a) * 100);
                                        return `${m}% ${p}%`
                                    }(v, {
                                        width: p,
                                        height: g
                                    }, m) : "",
                                    T = u.replace("_", " ");
                                return {
                                    videoSourceUrl: x,
                                    needsSrcUpdate: S,
                                    videoStyle: {
                                        height: "100%",
                                        width: "100%",
                                        objectFit: _,
                                        objectPosition: A || T
                                    }
                                }
                            },
                            mutate(t, e, n, i, r, o, a, s, u, l, f) {
                                e ? (0, c.A_)(e, i) : (! function(t, e, n, i, r, o) {
                                        o && e.paused && (n.style.opacity = "1", e.style.opacity = "0");
                                        const a = e.paused || "" === e.currentSrc,
                                            c = t || o;
                                        if (c && a)
                                            if (e.ontimeupdate = null, e.onseeked = null, e.onplay = null, !o && r) {
                                                const t = e.muted;
                                                e.muted = !0, e.ontimeupdate = () => {
                                                    e.currentTime > 0 && (e.ontimeupdate = null, e.onseeked = () => {
                                                        e.onseeked = null, e.muted = t, d(e, n, i)
                                                    }, e.currentTime = 0)
                                                }
                                            } else e.onplay = () => {
                                                o || (e.onplay = null), d(e, n, i)
                                            }
                                    }(a, n, t, s, r, f), r ? n.setAttribute("autoplay", "") : n.removeAttribute("autoplay"), (0, c.A_)(n, i)),
                                    function(t, e, n) {
                                        t && (e.src = n, e.load())
                                    }(a, n, o), n.playbackRate = l
                            }
                        };

                    function d(t, e, n) {
                        "fade" === n && (e.style.transition = "opacity 1.6s ease-out"), e.style.opacity = "0", t.style.opacity = "1"
                    }
                    var l = function(t, e, n, i = window) {
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                const {
                                    isVideoDataExists: t,
                                    videoWidth: r,
                                    videoHeight: o,
                                    qualities: a,
                                    videoId: c,
                                    videoFormat: s,
                                    alignType: d,
                                    fittingType: l,
                                    focalPoint: f,
                                    hasBgScrollEffect: h,
                                    autoPlay: m,
                                    animatePoster: p,
                                    containerId: g,
                                    isEditorMode: y,
                                    playbackRate: b,
                                    hasAlpha: w
                                } = JSON.parse(this.dataset.videoInfo);
                                if (!t) return;
                                const v = !n.prefersReducedMotion && m,
                                    E = this.querySelector(`video[id^="${g}"]`),
                                    x = this.querySelector(`.bgVideoposter[id^="${g}"]`);
                                if (this.unobserveChildren(), !E || !x) return void this.observeChildren(this);
                                const S = i.document.getElementById(`${g}`),
                                    _ = S.querySelector(`.webglcanvas[id^="${g}"]`);
                                !(w || "true" === S.dataset.hasAlpha) || _ ? e.mutationService.measure((() => {
                                    const t = u.measure(E, S, {
                                            hasBgScrollEffect: h,
                                            videoWidth: r,
                                            videoHeight: o,
                                            fittingType: l,
                                            alignType: d,
                                            qualities: a,
                                            staticVideoUrl: n.staticVideoUrl,
                                            videoId: c,
                                            videoFormat: s,
                                            focalPoint: f
                                        }),
                                        {
                                            videoSourceUrl: i,
                                            needsSrcUpdate: m,
                                            videoStyle: g
                                        } = t;
                                    e.mutationService.mutate((() => {
                                        u.mutate(x, _, E, g, v, i, m, p, s, b, y)
                                    }))
                                })) : requestAnimationFrame((() => this.reLayout()))
                            }
                            attributeChangedCallback(t, e) {
                                e && this.reLayout()
                            }
                            static get observedAttributes() {
                                return ["data-video-info"]
                            }
                        }
                    };
                    const f = (t = window) => ({
                        measure: function(t, e, n, {
                            containerId: i,
                            bgEffectName: r
                        }, o) {
                            const a = n[t],
                                s = n[i],
                                {
                                    width: u,
                                    height: d
                                } = o.getMediaDimensionsByEffect(r, s.offsetWidth, s.offsetHeight, (0, c.P2)(o.getScreenHeightOverride ? .()));
                            e.width = u, e.height = d, e.currentSrc = a.style.backgroundImage, e.bgEffectName = a.dataset.bgEffectName
                        },
                        patch: function(e, n, i, r, o, a) {
                            const s = i[e];
                            r.targetWidth = n.width, r.targetHeight = n.height;
                            const u = a.isExperimentOpen ? .("specs.thunderbolt.allowWEBPTransformation"),
                                d = (0, c.BU)(r, o, "bg", u);
                            ! function(t = "", e) {
                                return !t.includes(e) || !!t != !!e
                            }(n.currentSrc, d.uri) ? (0, c.A_)(s, d.css.container) : function(e, n) {
                                const i = {
                                        backgroundImage: `url("${n.uri}")`,
                                        ...n.css.container
                                    },
                                    r = new t.Image;
                                r.onload = c.A_.bind(null, e, i), r.src = n.uri
                            }(s, d)
                        }
                    });
                    var h = function(t, e, n, i = window) {
                        const r = f(i);
                        return class extends t {
                            constructor() {
                                super()
                            }
                            reLayout() {
                                if ((0, c.pR)(e)) return;
                                const t = {},
                                    o = {},
                                    a = this.getAttribute("id"),
                                    s = JSON.parse(this.dataset.tiledImageInfo),
                                    {
                                        bgEffectName: u
                                    } = this.dataset,
                                    {
                                        containerId: d
                                    } = s,
                                    l = i.document.getElementById(d);
                                t[a] = this, t[d] = l, s.displayMode = s.imageData.displayMode, e.mutationService.measure((() => {
                                    r.measure(a, o, t, {
                                        containerId: d,
                                        bgEffectName: u
                                    }, e)
                                })), e.mutationService.mutate((() => {
                                    r.patch(a, o, t, s, n, e)
                                }))
                            }
                            attributeChangedCallback(t, e) {
                                e && this.reLayout()
                            }
                            disconnectedCallback() {
                                super.disconnectedCallback()
                            }
                            static get observedAttributes() {
                                return ["data-tiled-image-info"]
                            }
                        }
                    };
                    var m = n(59277);
                    ((t = window) => {
                        const {
                            WixElement: e,
                            mediaServices: n,
                            environmentConsts: o,
                            requestUrl: a,
                            staticVideoUrl: c
                        } = t.customElementNamespace;
                        ((t, e, n, i) => {
                            const o = l(t, n, i, e);
                            r(e, "wix-video", o)
                        })(e, t, n, { ...o,
                            prefersReducedMotion: (0, m.n)(window, a),
                            staticVideoUrl: c
                        }), ((t, e) => {
                            const n = i(e);
                            r(t, "wix-iframe", n)
                        })(t, e), ((t, e, n, i) => {
                            const o = h(t, n, i, e);
                            r(e, "wix-bg-image", o)
                        })(e, t, n, o)
                    })(), window.resolveExternalsRegistryModule("imageClientApi")
                },
                65377: function(t, e, n) {
                    n.d(e, {
                        A_: function() {
                            return o
                        },
                        At: function() {
                            return a
                        },
                        KT: function() {
                            return r
                        },
                        P2: function() {
                            return u
                        },
                        Yu: function() {
                            return c
                        },
                        a_: function() {
                            return s
                        },
                        dL: function() {
                            return d
                        },
                        tE: function() {
                            return l
                        }
                    });
                    const i = {
                            columnCount: 1,
                            columns: 1,
                            fontWeight: 1,
                            lineHeight: 1,
                            opacity: 1,
                            zIndex: 1,
                            zoom: 1
                        },
                        r = (t, e) => t && e && Object.keys(e).forEach((n => t.setAttribute(n, e[n]))),
                        o = (t, e) => t && e && Object.keys(e).forEach((n => {
                            const r = e[n];
                            void 0 !== r ? t.style[n] = ((t, e) => "number" != typeof e || i[t] ? e : `${e}px`)(n, r) : t.style.removeProperty(n)
                        })),
                        a = (t, e) => t && e && Object.keys(e).forEach((n => {
                            t.style.setProperty(n, e[n])
                        })),
                        c = (t, e, n = !0) => {
                            return t && n ? (i = t.dataset[e]) ? "true" === i || "false" !== i && ("null" === i ? null : "" + +i === i ? +i : i) : i : t.dataset[e];
                            var i
                        },
                        s = (t, e) => t && e && Object.assign(t.dataset, e),
                        u = t => t || document.documentElement.clientHeight || window.innerHeight || 0,
                        d = () => window ? window.pageYOffset || document.documentElement.scrollTop : 0,
                        l = {
                            fit: "contain",
                            fill: "cover"
                        }
                },
                58047: function(t, e, n) {
                    n.d(e, {
                        BU: function() {
                            return r
                        },
                        F$: function() {
                            return s
                        },
                        Q4: function() {
                            return c
                        },
                        pR: function() {
                            return u
                        }
                    });
                    var i = n(80483);
                    const r = (t, e, n, r) => {
                            const {
                                targetWidth: c,
                                targetHeight: s,
                                imageData: u,
                                filters: d,
                                displayMode: l = i.fittingTypes.SCALE_TO_FILL,
                                hasAnimation: f
                            } = t;
                            if (!c || !s || !u.uri) return {
                                uri: "",
                                css: {}
                            };
                            const {
                                width: h,
                                height: m,
                                crop: p,
                                name: g,
                                focalPoint: y,
                                upscaleMethod: b,
                                quality: w,
                                devicePixelRatio: v = e.devicePixelRatio
                            } = u, E = {
                                filters: d,
                                upscaleMethod: b,
                                ...w,
                                ...r && {
                                    allowWEBPTransform: r
                                },
                                hasAnimation: f
                            }, x = a(v), S = {
                                id: u.uri,
                                width: h,
                                height: m,
                                ...p && {
                                    crop: p
                                },
                                ...y && {
                                    focalPoint: y
                                },
                                ...g && {
                                    name: g
                                }
                            }, _ = {
                                width: c,
                                height: s,
                                htmlTag: n || "img",
                                pixelAspectRatio: x,
                                alignment: t.alignType || i.alignTypes.CENTER
                            }, A = (0, i.getData)(l, S, _, E);
                            return A.uri = o(A.uri, e.staticMediaUrl, e.mediaRootUrl), A
                        },
                        o = (t, e, n) => {
                            if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(t)) return t;
                            let i = `${e}/`;
                            return t && (/^micons\//.test(t) ? i = n : "ico" === /[^.]+$/.exec(t)[0] && (i = i.replace("media", "ficons"))), i + t
                        },
                        a = t => {
                            const e = window.location.search.split("&").map((t => t.split("="))).find((t => t[0].toLowerCase().includes("devicepixelratio")));
                            return (e ? Number(e[1]) : null) || t || 1
                        },
                        c = (t, e) => t.getAttribute(e ? "xlink:href" : "src");

                    function s(t) {
                        if (t) {
                            const {
                                type: e
                            } = t.dataset;
                            if (e && "ugc" !== e) {
                                if (!t.dataset.bbox) {
                                    const {
                                        x: e,
                                        y: n,
                                        width: i,
                                        height: r
                                    } = t.getBBox();
                                    return `${e} ${n} ${i} ${r}`
                                }
                            }
                        }
                        return null
                    }

                    function u(t) {
                        return t.isExperimentOpen("specs.thunderbolt.tb_stop_client_images") || t.isExperimentOpen("specs.thunderbolt.final_force_webp") || t.isExperimentOpen("specs.thunderbolt.final_force_no_webp")
                    }
                },
                24027: function(t, e, n) {
                    n.d(e, {
                        Ax: function() {
                            return a
                        },
                        Tw: function() {
                            return o
                        },
                        U2: function() {
                            return i
                        },
                        hr: function() {
                            return c
                        },
                        w_: function() {
                            return r
                        },
                        xn: function() {
                            return s
                        }
                    });
                    const i = (t, e, n) => {
                            const i = (Array.isArray(e) ? e : e.split(".")).reduce(((t, e) => t && void 0 !== t[e] ? t[e] : null), t);
                            return null !== i ? i : n
                        },
                        r = (t, e) => Object.keys(t).find((n => e(t[n], n))),
                        o = (t, e) => {
                            const n = t.reduce(((t, n) => (t[e(n)] = n, t)), {});
                            return Object.values(n)
                        },
                        a = t => t && t.split ? t.split(";").reduce((function(t, e) {
                            const n = e.split(":");
                            return n[0] && n[1] && (t[n[0].trim()] = n[1].trim()), t
                        }), {}) : {},
                        c = (t, e = window) => {
                            let n = !1;
                            return (...i) => {
                                n || (n = !0, e.requestAnimationFrame((() => {
                                    n = !1, t(...i)
                                })))
                            }
                        };

                    function s(...t) {
                        let e = t[0];
                        for (let n = 1; n < t.length; ++n) e = `${e.replace(/\/$/,"")}/${t[n].replace(/^\//,"")}`;
                        return e
                    }
                },
                59277: function(t, e, n) {
                    n.d(e, {
                        n: function() {
                            return i
                        }
                    });
                    const i = (t, e = "") => e.toLowerCase().includes("forcereducedmotion") || Boolean(t ? .matchMedia("(prefers-reduced-motion: reduce)").matches)
                }
            },
            function(t) {
                t.O(0, [774], (function() {
                    return e = 98911, t(t.s = e);
                    var e
                }));
                t.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/lazyCustomElementWrapper.inline.84c11f58.bundle.min.js.map
    </script>

    <!-- initial scripts -->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/createPlatformWorker.inline.e3162c62.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [5457, 7745], {
                47770: function(e, t, r) {
                    r.r(t), r.d(t, {
                        platformWorkerPromise: function() {
                            return i
                        }
                    });
                    const {
                        siteAssets: {
                            clientTopology: s
                        },
                        siteFeatures: a,
                        siteFeaturesConfigs: {
                            platform: o
                        },
                        site: {
                            externalBaseUrl: p
                        }
                    } = window.viewerModel, c = Worker && a.includes("platform"), i = c ? (async () => {
                        const e = "platform_create-worker started";
                        performance.mark(e);
                        const t = o.clientWorkerUrl,
                            r = t.startsWith("http://localhost:") || t.startsWith("https://bo.wix.com/suricate/") || document.baseURI !== location.href ? (e => {
                                const t = new Blob([`importScripts('${e}');`], {
                                    type: "application/javascript"
                                });
                                return URL.createObjectURL(t)
                            })(o.clientWorkerUrl) : t.replace(s.fileRepoUrl, `${p}/_partials`),
                            a = new Worker(r),
                            c = Object.keys(o.appsScripts.urls).filter((e => !o.bootstrapData.appsSpecData[e] ? .isModuleFederated)).reduce(((e, t) => (e[t] = o.appsScripts.urls[t], e)), {});
                        o.sdksStaticPaths && o.sdksStaticPaths.mainSdks && o.sdksStaticPaths.nonMainSdks && a.postMessage({
                            type: "preloadNamespaces",
                            sdksStaticPaths: o.sdksStaticPaths
                        }), a.postMessage({
                            type: "platformScriptsToPreload",
                            appScriptsUrls: c
                        });
                        const i = "platform_create-worker ended";
                        return performance.mark(i), performance.measure("Create Platform Web Worker", e, i), a
                    })() : Promise.resolve()
                }
            },
            function(e) {
                var t;
                t = 47770, e(e.s = t)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/createPlatformWorker.inline.e3162c62.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/windowMessageRegister.inline.fe354e74.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [9439], {
                64277: function() {
                    ! function(n) {
                        const e = new Set,
                            a = [],
                            t = n => {
                                const a = [];
                                e.forEach((e => {
                                    n.canHandleEvent(e) && a.push(e)
                                })), a.forEach((a => {
                                    e.delete(a), n.handleEvent(a)
                                }))
                            };
                        n.addEventListener("message", (n => {
                            const s = {
                                    source: n.source,
                                    data: n.data,
                                    origin: n.origin
                                },
                                d = a.find((n => n.canHandleEvent(s)));
                            d ? (t(d), d.handleEvent(s)) : e.add(s)
                        })), n._addWindowMessageHandler = n => {
                            a.push(n), t(n)
                        }
                    }(window)
                }
            },
            function(n) {
                var e;
                e = 64277, n(n.s = e)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/windowMessageRegister.inline.fe354e74.bundle.min.js.map
    </script>
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/thunderbolt-commons.24e46262.bundle.min.js"></script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/bi-common.inline.fd672f94.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [142], {
                42834: function(e, t, r) {
                    r.d(t, {
                        h: function() {
                            return o
                        }
                    });
                    var n = r(47737);
                    const i = ({
                            useBatch: e = !0,
                            publishMethod: t = n.PublishMethods.Auto,
                            endpoint: r,
                            muteBi: i = !1,
                            biStore: o,
                            sessionManager: s,
                            fetch: a,
                            factory: c
                        }) => c({
                            useBatch: e,
                            publishMethod: t,
                            endpoint: r,
                            ...o.frogUrlOverride ? {
                                host: o.frogUrlOverride.replace(/^https?:\/\//, "") + "/_frog"
                            } : {}
                        }).setMuted(i).withUoUContext({
                            msid: o.msid
                        }).withNonEssentialContext({
                            visitorId: () => s.getVisitorId(),
                            siteMemberId: () => s.getSiteMemberId()
                        }).updateDefaults({
                            vsi: o.viewerSessionId,
                            _av: `thunderbolt-${o.viewerVersion}`,
                            isb: o.is_headless,
                            ...o.is_headless && {
                                isbr: o.is_headless_reason
                            }
                        }),
                        o = {
                            createBaseBiLoggerFactory: i,
                            createBiLoggerFactoryForFedops: e => {
                                const {
                                    biStore: {
                                        session_id: t,
                                        initialTimestamp: r,
                                        initialRequestTimestamp: n,
                                        dc: o,
                                        microPop: s,
                                        is_headless: a,
                                        isCached: c,
                                        pageData: u,
                                        rolloutData: p,
                                        caching: d,
                                        checkVisibility: l = (() => ""),
                                        viewerVersion: m,
                                        requestUrl: f,
                                        st: h,
                                        isSuccessfulSSR: g
                                    },
                                    muteBi: I = !1
                                } = e;
                                return i({ ...e,
                                    muteBi: I
                                }).updateDefaults({
                                    ts: () => Date.now() - r,
                                    tsn: () => function({
                                        initialRequestTimestamp: e
                                    }) {
                                        return "undefined" == typeof window ? Math.round(performance.now() + (performance.timeOrigin - e)) : Math.round(performance.now())
                                    }({
                                        initialRequestTimestamp: n
                                    }),
                                    dc: o,
                                    microPop: s,
                                    caching: d,
                                    session_id: t,
                                    st: h,
                                    url: f || u.pageUrl,
                                    ish: a,
                                    pn: u.pageNumber,
                                    isFirstNavigation: 1 === u.pageNumber,
                                    pv: l,
                                    pageId: u.pageId,
                                    isServerSide: !1,
                                    isSuccessfulSSR: g,
                                    is_lightbox: u.isLightbox,
                                    is_cached: c,
                                    is_sav_rollout: p.siteAssetsVersionsRollout ? 1 : 0,
                                    is_dac_rollout: p.isDACRollout ? 1 : 0,
                                    v: m
                                })
                            }
                        }
                },
                16281: function(e, t, r) {
                    r.d(t, {
                        b: function() {
                            return o
                        }
                    });
                    var n = r(2687),
                        i = r(83944);
                    const o = ({
                        biLoggerFactory: e,
                        customParams: t = {},
                        phasesConfig: r = "SEND_ON_FINISH",
                        appName: o = "thunderbolt",
                        presetType: s = n.w.BOLT,
                        reportBlackbox: a = !1,
                        paramsOverrides: c = {},
                        factory: u,
                        muteThunderboltEvents: p = !1,
                        experiments: d = {}
                    }) => {
                        const l = u(o, {
                                presetType: s,
                                phasesConfig: r,
                                isPersistent: !0,
                                isServerSide: !1,
                                reportBlackbox: a,
                                customParams: t,
                                biLoggerFactory: e,
                                paramsOverrides: c,
                                enableSampleRateForAppNames: !!d["specs.thunderbolt.fedops_enableSampleRateForAppNames"] ? ? !!window ? .viewerModel ? .experiments["specs.thunderbolt.fedops_enableSampleRateForAppNames"]
                            }),
                            {
                                interactionStarted: m,
                                interactionEnded: f,
                                appLoadingPhaseStart: h,
                                appLoadingPhaseFinish: g
                            } = l,
                            I = (e, t) => {
                                const r = !!t ? .appId && !i.Fs.has(t.appId),
                                    n = i.FD.has(e),
                                    o = i.cO.has(e);
                                return n || r || !o && !p
                            };
                        return l.interactionStarted = (e, ...t) => {
                            if (I(e)) return m.call(l, e, ...t);
                            try {
                                performance.mark(`${e} started`)
                            } catch {}
                            return {
                                timeoutId: 0
                            }
                        }, l.interactionEnded = (e, ...t) => {
                            if (I(e)) f.call(l, e, ...t);
                            else try {
                                performance.mark(`${e} ended`)
                            } catch {}
                        }, l.appLoadingPhaseStart = (e, t, ...r) => {
                            if (I(e, t)) h.call(l, e, t, ...r);
                            else try {
                                performance.mark(`${e} started`)
                            } catch {}
                        }, l.appLoadingPhaseFinish = (e, t, ...r) => {
                            if (I(e, t)) g.call(l, e, t, ...r);
                            else try {
                                performance.mark(`${e} finished`)
                            } catch {}
                        }, l
                    }
                },
                12621: function(e, t, r) {
                    r.d(t, {
                        y: function() {
                            return n
                        }
                    });
                    const n = e => {
                        const t = "thunderbolt-commons";
                        return {
                            reportAsyncWithCustomKey: (r, n, i) => e.reportAsyncWithCustomKey(r, t, n, i),
                            runAsyncAndReport: (r, n) => e.runAsyncAndReport(r, t, n),
                            runAndReport: (r, n) => e.runAndReport(r, t, n),
                            reportError: r => {
                                e.captureError(r, {
                                    tags: {
                                        feature: t,
                                        clientMetricsReporterError: !0
                                    }
                                })
                            },
                            meter: t => {
                                e.meter(t)
                            },
                            histogram: (e, t) => {}
                        }
                    }
                },
                68782: function(e, t, r) {
                    r.r(t), r.d(t, {
                        createBiReporter: function() {
                            return s
                        },
                        site: function() {
                            return a
                        }
                    });
                    var n = r(54164),
                        i = r(73726);
                    const o = (...e) => console.log("[TB] ", ...e);

                    function s(e = o, t = o, r = (() => {}), n = o, i = o) {
                        return {
                            reportBI: e,
                            sendBeat: t,
                            setDynamicSessionData: r,
                            reportPageNavigation: n,
                            reportPageNavigationDone: i
                        }
                    }
                    const a = ({
                        biReporter: e,
                        wixBiSession: t,
                        viewerModel: r
                    }) => o => {
                        o(n.sK).toConstantValue(t), o(n.Li).toConstantValue(e), o(n.fi).toConstantValue((0, i.P)(r))
                    }
                },
                80459: function(e, t, r) {
                    var n, i;
                    r.d(t, {
                            $7: function() {
                                return i
                            },
                            i7: function() {
                                return o
                            },
                            sT: function() {
                                return n
                            }
                        }),
                        function(e) {
                            e[e.START = 1] = "START", e[e.VISIBLE = 2] = "VISIBLE", e[e.PAGE_FINISH = 33] = "PAGE_FINISH", e[e.FIRST_CDN_RESPONSE = 4] = "FIRST_CDN_RESPONSE", e[e.TBD = -1] = "TBD", e[e.PAGE_NAVIGATION = 101] = "PAGE_NAVIGATION", e[e.PAGE_NAVIGATION_DONE = 103] = "PAGE_NAVIGATION_DONE"
                        }(n || (n = {})),
                        function(e) {
                            e[e.NAVIGATION = 1] = "NAVIGATION", e[e.DYNAMIC_REDIRECT = 2] = "DYNAMIC_REDIRECT", e[e.INNER_ROUTE = 3] = "INNER_ROUTE", e[e.NAVIGATION_ERROR = 4] = "NAVIGATION_ERROR", e[e.CANCELED = 5] = "CANCELED"
                        }(i || (i = {}));
                    const o = {
                        1: "page-navigation",
                        2: "page-navigation-redirect",
                        3: "page-navigation-inner-route",
                        4: "navigation-error",
                        5: "navigation-canceled"
                    }
                },
                54164: function(e, t, r) {
                    r.d(t, {
                        Li: function() {
                            return n
                        },
                        fi: function() {
                            return o
                        },
                        sK: function() {
                            return i
                        }
                    });
                    const n = Symbol.for("BI"),
                        i = Symbol.for("WixBiSessionSymbol"),
                        o = Symbol.for("appName")
                }
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/bi-common.inline.fd672f94.bundle.min.js.map
    </script>
    <script async="" src="https://static.parastorage.com/services/wix-thunderbolt/dist/main.8752ee81.bundle.min.js"></script>
    <!-- lodash script -->
    <script async="" onload="resolveExternalsRegistryModule('lodash')" src="https://static.parastorage.com/unpkg/lodash@4.17.21/lodash.min.js"></script>
    <!-- react -->
    <script crossorigin="" defer="" onload="resolveExternalsRegistryModule('react')" src="https://static.parastorage.com/unpkg/react@18.2.0/umd/react.production.min.js"></script>
    <!-- react-dom -->
    <script crossorigin="" defer="" onload="resolveExternalsRegistryModule('reactDOM')" src="https://static.parastorage.com/unpkg/react-dom@18.2.0/umd/react-dom.production.min.js"></script>
    <!-- scriptTagsToPreload -->



    <!-- Old Browsers Deprecation -->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/browser-deprecation.inline.ef8f56c7.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [785], {
                70073: function(e, t, n) {
                    n(1901)
                },
                1901: function(e, t, n) {
                    var o, i, r, s;
                    Object.defineProperty(t, "__esModule", {
                        value: !0
                    });
                    var a, c, d = n(48337),
                        u = "v5",
                        l = window,
                        p = (null === (r = null === (i = null === (o = l.navigator) || void 0 === o ? void 0 : o.userAgent) || void 0 === i ? void 0 : i.toLowerCase) || void 0 === r ? void 0 : r.call(i)) || "",
                        v = !!(null === (s = l.document) || void 0 === s ? void 0 : s.documentMode),
                        m = !(!p.match(/msie\s([\d.]+)/) && !p.match(/trident\/[\d](?=[^\?]+).*rv:([0-9.].)/)),
                        x = v || m,
                        w = ["customElements", "IntersectionObserver", "ResizeObserver"],
                        f = !y() || !h() || !_() || !w.every((function(e) {
                            return e in window
                        })) || function() {
                            var e, t, n = /605\..*version\/14\.(?=.*safari)/i.test(p),
                                o = "Studio" === (null === (t = null === (e = l.viewerModel) || void 0 === e ? void 0 : e.site) || void 0 === t ? void 0 : t.editorName);
                            return n && o
                        }();

                    function b() {
                        var e, t, n;
                        (e = document.getElementById("SITE_CONTAINER")) && (e.innerHTML = ""), t = document.createElement("iframe"), n = function() {
                                var e, t = (null === (e = l.viewerModel) || void 0 === e ? void 0 : e.language.userLanguage) || "en";
                                return "https://static.parastorage.com/services/wix-thunderbolt/dist/deprecation-".concat({
                                    pt: 1,
                                    fr: 1,
                                    es: 1,
                                    de: 1,
                                    ja: 1
                                }[t] ? t : "en", ".").concat(u, ".html")
                            }(), t.setAttribute("src", n), t.setAttribute("style", "position: fixed; top: 0; left: 0; width: 100%; height: 100%"), t.onload = function() {
                                document.body.style.visibility = "visible"
                            }, document.body.appendChild(t),
                            function() {
                                var e;
                                try {
                                    e = {
                                        customElements: "customElements" in window,
                                        IntersectionObserver: "IntersectionObserver" in window,
                                        ResizeObserver: "ResizeObserver" in window,
                                        supportsCssVars: y(),
                                        supportsCssGrid: h(),
                                        supportsES2017: _(),
                                        isIE: x
                                    }
                                } catch (t) {
                                    console.error(t), e = {}
                                }(0, d.reportPhaseStarted)("browser_not_supported", "supportedFeatures=".concat(JSON.stringify(e)))
                            }()
                    }

                    function y() {
                        var e, t, n = document.createElement("style");
                        n.innerHTML = ":root { --tmp-var: bold; }", document.head.appendChild(n);
                        var o = !!(l.CSS && l.CSS.supports && l.CSS.supports("font-weight", "var(--tmp-var)"));
                        return null === (t = null === (e = n.parentNode) || void 0 === e ? void 0 : e.removeChild) || void 0 === t || t.call(e, n), o
                    }

                    function h() {
                        return "string" == typeof document.createElement("div").style.grid
                    }

                    function _() {
                        try {
                            new Function("let x = 1"), new Function("const x = `1`"), new Function("class X {}"), new Function("const x = (a = 0, ...b) => a"), new Function("const x = {...Object}"), new Function("const y = 1; const x = {y}"), new Function("const x = (function*() { yield 1; })().next().value === 1"), new Function("const x = async () => await new Promise(res => res(true))"), new Function("const objWithTrailingComma = {a: 1, b: 2,}"), new Function("const arrWithTrailingComma = [1,2,3,]"), Object.entries({}), Object.values({}), "x".padStart(3, "A").padEnd(5, "B"), Object.getOwnPropertyDescriptor({
                                a: 1,
                                b: 2
                            }, "a"), Object.fromEntries([
                                ["a", 1]
                            ])
                        } catch (e) {
                            return !1
                        }
                        return !0
                    }(x || f) && (l.__browser_deprecation__ = !0, a = document.head || document.getElementsByTagName("head")[0], (c = document.createElement("style")).setAttribute("type", "text/css"), c.appendChild(document.createTextNode("body { visibility: hidden; }")), a.appendChild(c), l.Sentry = {
                        mute: !0
                    }, "complete" === document.readyState ? b() : document.addEventListener("readystatechange", (function() {
                        "complete" === document.readyState && b()
                    })))
                },
                48337: function(e, t) {
                    Object.defineProperty(t, "__esModule", {
                        value: !0
                    }), t.reportPhaseStarted = void 0;
                    var n = window;

                    function o(e, t) {
                        void 0 === t && (t = "");
                        var o = n.fedops.data,
                            i = o.site,
                            r = o.rollout,
                            s = o.fleetConfig,
                            a = o.requestUrl,
                            c = o.frogOnUserDomain;
                        if (!a.includes("suppressbi=true")) {
                            var d = i.appNameForBiEvents,
                                u = r.isDACRollout ? 1 : 0,
                                l = r.siteAssetsVersionsRollout ? 1 : 0,
                                p = 0 === s.code || 1 === s.code ? s.code : null,
                                v = document.visibilityState,
                                m = {
                                    WixSite: 1,
                                    UGC: 2,
                                    Template: 3
                                }[i.siteType] || 0,
                                x = (c ? i.externalBaseUrl.replace(/^https?:\/\//, "") + "/_frog" : "//frog.wix.com") + "/bolt-performance?src=72&evid=" + e + "&appName=" + d + "&is_rollout=" + p + "&is_sav_rollout=" + l + "&is_dac_rollout=" + u + "&dc=" + i.dc + "&msid=" + i.metaSiteId + "&session_id=" + i.sessionId + "&vsi=" + "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function(e) {
                                    var t = 16 * Math.random() | 0;
                                    return ("x" === e ? t : 3 & t | 8).toString(16)
                                })) + "&pv=" + v + "&v=" + n.thunderboltVersion + "&url=" + a + "&st=" + m + t;
                            (new Image).src = x
                        }
                    }
                    t.reportPhaseStarted = function(e, t) {
                        var i = Date.now() - n.initialTimestamps.initialTimestamp,
                            r = Date.now() - i;
                        o(28, "&name=".concat(e, "&duration=").concat(r).concat(t ? "&" + t : ""))
                    }
                }
            },
            function(e) {
                var t;
                t = 70073, e(e.s = t)
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/browser-deprecation.inline.ef8f56c7.bundle.min.js.map
    </script>


    <!-- bi -->
    <script>
        window.clientSideRender = false;
    </script>
    <!-- bi -->
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/bi.inline.1ee043a1.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [2892], {
                70626: function(e, i, n) {
                    n.d(i, {
                        e: function() {
                            return m
                        }
                    });
                    var t = n(80459);
                    const r = e => {
                            let i = !1;
                            if (!/\(iP(hone|ad|od);/i.test(window ? .navigator ? .userAgent)) try {
                                i = navigator.sendBeacon(e)
                            } catch (e) {}
                            i || ((new Image).src = e)
                        },
                        s = null;

                    function o([e, i]) {
                        return i !== s && `${e}=${i}`
                    }

                    function a() {
                        const e = document.cookie.match(/_wixCIDX=([^;]*)/);
                        return e && e[1]
                    }

                    function c(e) {
                        if (!e) return s;
                        const i = new URL(decodeURIComponent(e));
                        return i.search = "?", encodeURIComponent(i.href)
                    }
                    var d = function(e, {
                        eventType: i,
                        ts: n,
                        tts: t,
                        extra: r = ""
                    }, d, u) {
                        const p = function(e) {
                                const i = e.split("&").reduce(((e, i) => {
                                    const [n, t] = i.split("=");
                                    return { ...e,
                                        [n]: t
                                    }
                                }), {});
                                return (e, n) => void 0 !== i[e] ? i[e] : n
                            }(r),
                            l = (m = d, e => void 0 === m[e] ? s : m[e]);
                        var m;
                        let w = !0;
                        const f = window ? .consentPolicyManager;
                        if (f) {
                            const e = f.getCurrentConsentPolicy();
                            if (e) {
                                const {
                                    policy: i
                                } = e;
                                w = !(i.functional && i.analytics)
                            }
                        }
                        const g = l("requestUrl"),
                            h = {
                                src: "29",
                                evid: "3",
                                viewer_name: l("viewerName"),
                                caching: l("caching"),
                                client_id: w ? s : a(),
                                dc: l("dc"),
                                microPop: l("microPop"),
                                et: i,
                                event_name: e ? encodeURIComponent(e) : s,
                                is_cached: l("isCached"),
                                is_platform_loaded: l("is_platform_loaded"),
                                is_rollout: l("is_rollout"),
                                ism: l("isMesh"),
                                isp: 0,
                                isjp: l("isjp"),
                                iss: l("isServerSide"),
                                ssr_fb: l("fallbackReason"),
                                ita: p("ita", d.checkVisibility() ? "1" : "0"),
                                mid: w ? s : u ? .siteMemberId || s,
                                msid: l("msId"),
                                pid: p("pid", s),
                                pn: p("pn", "1"),
                                ref: document.referrer && !w ? encodeURIComponent(document.referrer) : s,
                                sar: w ? s : p("sar", screen.availWidth ? `${screen.availWidth}x${screen.availHeight}` : s),
                                sessionId: w && f ? s : l("sessionId"),
                                siterev: d.siteRevision || d.siteCacheRevision ? `${d.siteRevision}-${d.siteCacheRevision}` : s,
                                sr: w ? s : p("sr", screen.width ? `${screen.width}x${screen.height}` : s),
                                st: l("st"),
                                ts: n,
                                tts: t,
                                url: w ? c(g) : g,
                                v: window ? .thunderboltVersion || "0.0.0",
                                vid: w ? s : u ? .visitorId || s,
                                bsi: w ? s : u ? .bsi || s,
                                vsi: l("viewerSessionId"),
                                wor: w || !window.outerWidth ? s : `${window.outerWidth}x${window.outerHeight}`,
                                wr: w ? s : p("wr", window.innerWidth ? `${window.innerWidth}x${window.innerHeight}` : s),
                                _brandId: d.commonConfig ? .brand || s,
                                nt: p("nt", s)
                            };
                        return `https://frog.wix.com/bt?${Object.entries(h).map(o).filter(Boolean).join("&")}`
                    };
                    const u = (e, i) => {
                            let n, t = "none",
                                r = e.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                            if (!r && window.PerformanceServerTiming) {
                                const e = (e => {
                                    let i, n;
                                    try {
                                        i = e()
                                    } catch (e) {
                                        i = []
                                    }
                                    const t = [];
                                    return i.forEach((e => {
                                        switch (e.name) {
                                            case "cache":
                                                t[1] = e.description;
                                                break;
                                            case "varnish":
                                                t[2] = e.description;
                                                break;
                                            case "dc":
                                                n = e.description
                                        }
                                    })), {
                                        microPop: n,
                                        matches: t
                                    }
                                })(i);
                                n = e.microPop, r = e.matches
                            }
                            if (r && r.length && (t = `${r[1]},${r[2]||"none"}`, n || (n = r[3])), "none" === t) {
                                const e = "undefined" != typeof performance ? performance.timing : null;
                                e && e.responseStart - e.requestStart == 0 && (t = "browser")
                            }
                            return {
                                caching: t,
                                isCached: 0 === t.indexOf("hit"),
                                ...n ? {
                                    microPop: n
                                } : {}
                            }
                        },
                        p = {
                            WixSite: 1,
                            UGC: 2,
                            Template: 3
                        };
                    var l = () => {
                        const {
                            fedops: e,
                            viewerModel: {
                                siteFeaturesConfigs: i,
                                requestUrl: n,
                                site: t,
                                fleetConfig: r,
                                commonConfig: s,
                                interactionSampleRatio: o
                            },
                            clientSideRender: a,
                            santaRenderingError: c
                        } = window, d = (({
                            requestUrl: e,
                            interactionSampleRatio: i
                        }) => {
                            const n = new URL(e).searchParams;
                            return n.has("sampleEvents") ? "true" === n.get("sampleEvents") : Math.random() < (i ? 1 - i : .9)
                        })({
                            requestUrl: n,
                            interactionSampleRatio: o
                        }), l = (e => {
                            const {
                                userAgent: i
                            } = e.navigator;
                            return /instagram.+google\/google/i.test(i) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(i) ? "ua" : ""
                        })(window) || (() => {
                            try {
                                if (window.self === window.top) return ""
                            } catch (e) {}
                            return "iframe"
                        })() || (() => {
                            if (!Function.prototype.bind) return "bind";
                            const {
                                document: e,
                                navigator: i
                            } = window;
                            if (!e || !i) return "document";
                            const {
                                webdriver: n,
                                userAgent: t,
                                plugins: r,
                                languages: s
                            } = i;
                            if (n) return "webdriver";
                            if (!r || Array.isArray(r)) return "plugins";
                            if (Object.getOwnPropertyDescriptor(r, "0") ? .writable) return "plugins-extra";
                            if (!t) return "userAgent";
                            if (t.indexOf("Snapchat") > 0 && e.hidden) return "Snapchat";
                            if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                            try {
                                throw Error()
                            } catch (e) {
                                if (e instanceof Error) {
                                    const {
                                        stack: i
                                    } = e;
                                    if (i && / (\(internal\/)|(\(?file:\/)/.test(i)) return "stack"
                                }
                            }
                            return ""
                        })() || (({
                            seo: e
                        }) => e ? .isInSEO ? "seo" : "")(i);
                        return {
                            suppressbi: n.includes("suppressbi=true"),
                            initialTimestamp: window.initialTimestamps.initialTimestamp,
                            initialRequestTimestamp: window.initialTimestamps.initialRequestTimestamp,
                            viewerSessionId: e.vsi,
                            viewerName: t.appNameForBiEvents,
                            siteRevision: String(t.siteRevision),
                            msId: t.metaSiteId,
                            is_rollout: 0 === r.code || 1 === r.code ? r.code : null,
                            is_platform_loaded: 0,
                            requestUrl: encodeURIComponent(n),
                            sessionId: String(t.sessionId),
                            btype: l,
                            isjp: !!l,
                            dc: t.dc,
                            siteCacheRevision: "__siteCacheRevision__",
                            checkVisibility: (() => {
                                let e = !0;

                                function i() {
                                    e = e && !0 !== document.hidden
                                }
                                return document.addEventListener("visibilitychange", i, {
                                    passive: !0
                                }), i(), () => (i(), e)
                            })(),
                            ...u(document.cookie, (() => [...performance.getEntriesByType("navigation")[0].serverTiming || []])),
                            isMesh: 1,
                            st: p[t.siteType] || 0,
                            commonConfig: s,
                            muteThunderboltEvents: d,
                            isServerSide: a ? 0 : 1,
                            isSuccessfulSSR: !a,
                            fallbackReason: c ? .errorInfo
                        }
                    };
                    const m = function() {
                        const e = l(),
                            i = {};
                        let n = 1;
                        const s = (t, s, o = {}) => {
                            const a = Date.now(),
                                c = Math.round(performance.now()),
                                u = a - e.initialTimestamp;
                            if (function(e, i) {
                                    if (i && performance.mark) {
                                        const n = `${i} (beat ${e})`;
                                        performance.mark(n)
                                    }
                                }(t, s), e.suppressbi || window.__browser_deprecation__) return;
                            const {
                                pageId: p,
                                pageNumber: l = n,
                                navigationType: m
                            } = o;
                            let w = `&pn=${l}`;
                            p && (w += `&pid=${p}`), m && (w += `&nt=${m}`);
                            const f = d(s, {
                                eventType: t,
                                ts: u,
                                tts: c,
                                extra: w
                            }, e, i);
                            r(f)
                        };
                        return {
                            sendBeat: s,
                            reportBI: function(e, i) {
                                ! function(e, i) {
                                    const n = i ? `${e} - ${i}` : e,
                                        t = "end" === i ? `${e} - start` : null;
                                    performance.mark(n), performance.measure && t && performance.measure(`\u2b50${e}`, t, n)
                                }(e, i)
                            },
                            wixBiSession: e,
                            sendBeacon: r,
                            setDynamicSessionData: ({
                                visitorId: e,
                                siteMemberId: n,
                                bsi: t
                            }) => {
                                i.visitorId = e || i.visitorId, i.siteMemberId = n || i.siteMemberId, i.bsi = t || i.bsi
                            },
                            reportPageNavigation: function(e) {
                                n += 1, s(t.sT.PAGE_NAVIGATION, "page navigation start", {
                                    pageId: e,
                                    pageNumber: n
                                })
                            },
                            reportPageNavigationDone: function(e, i) {
                                s(t.sT.PAGE_NAVIGATION_DONE, "page navigation complete", {
                                    pageId: e,
                                    pageNumber: n,
                                    navigationType: i
                                }), i !== t.$7.DYNAMIC_REDIRECT && i !== t.$7.NAVIGATION_ERROR && i !== t.$7.CANCELED || (n -= 1)
                            }
                        }
                    }();
                    window.bi = m, window.bi.wixBiSession.isServerSide = window.clientSideRender ? 0 : 1, window.bi.wixBiSession.isSuccessfulSSR = !window.clientSideRender, window.clientSideRender && (window.bi.wixBiSession.fallbackReason = window.santaRenderingError ? .errorInfo), m.sendBeat(1, "Init")
                }
            },
            function(e) {
                e.O(0, [142], (function() {
                    return i = 70626, e(e.s = i);
                    var i
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/bi.inline.1ee043a1.bundle.min.js.map
    </script>
    <script data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/sendBeat12.inline.c34a976c.bundle.min.js">
        "use strict";
        (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([
            [5950, 2892], {
                10799: function(e, i, n) {
                    n(70626).e.sendBeat(12, "Partially visible", {
                        pageId: window.firstPageId
                    })
                },
                70626: function(e, i, n) {
                    n.d(i, {
                        e: function() {
                            return m
                        }
                    });
                    var t = n(80459);
                    const r = e => {
                            let i = !1;
                            if (!/\(iP(hone|ad|od);/i.test(window ? .navigator ? .userAgent)) try {
                                i = navigator.sendBeacon(e)
                            } catch (e) {}
                            i || ((new Image).src = e)
                        },
                        s = null;

                    function o([e, i]) {
                        return i !== s && `${e}=${i}`
                    }

                    function a() {
                        const e = document.cookie.match(/_wixCIDX=([^;]*)/);
                        return e && e[1]
                    }

                    function c(e) {
                        if (!e) return s;
                        const i = new URL(decodeURIComponent(e));
                        return i.search = "?", encodeURIComponent(i.href)
                    }
                    var d = function(e, {
                        eventType: i,
                        ts: n,
                        tts: t,
                        extra: r = ""
                    }, d, u) {
                        const p = function(e) {
                                const i = e.split("&").reduce(((e, i) => {
                                    const [n, t] = i.split("=");
                                    return { ...e,
                                        [n]: t
                                    }
                                }), {});
                                return (e, n) => void 0 !== i[e] ? i[e] : n
                            }(r),
                            l = (m = d, e => void 0 === m[e] ? s : m[e]);
                        var m;
                        let w = !0;
                        const f = window ? .consentPolicyManager;
                        if (f) {
                            const e = f.getCurrentConsentPolicy();
                            if (e) {
                                const {
                                    policy: i
                                } = e;
                                w = !(i.functional && i.analytics)
                            }
                        }
                        const g = l("requestUrl"),
                            h = {
                                src: "29",
                                evid: "3",
                                viewer_name: l("viewerName"),
                                caching: l("caching"),
                                client_id: w ? s : a(),
                                dc: l("dc"),
                                microPop: l("microPop"),
                                et: i,
                                event_name: e ? encodeURIComponent(e) : s,
                                is_cached: l("isCached"),
                                is_platform_loaded: l("is_platform_loaded"),
                                is_rollout: l("is_rollout"),
                                ism: l("isMesh"),
                                isp: 0,
                                isjp: l("isjp"),
                                iss: l("isServerSide"),
                                ssr_fb: l("fallbackReason"),
                                ita: p("ita", d.checkVisibility() ? "1" : "0"),
                                mid: w ? s : u ? .siteMemberId || s,
                                msid: l("msId"),
                                pid: p("pid", s),
                                pn: p("pn", "1"),
                                ref: document.referrer && !w ? encodeURIComponent(document.referrer) : s,
                                sar: w ? s : p("sar", screen.availWidth ? `${screen.availWidth}x${screen.availHeight}` : s),
                                sessionId: w && f ? s : l("sessionId"),
                                siterev: d.siteRevision || d.siteCacheRevision ? `${d.siteRevision}-${d.siteCacheRevision}` : s,
                                sr: w ? s : p("sr", screen.width ? `${screen.width}x${screen.height}` : s),
                                st: l("st"),
                                ts: n,
                                tts: t,
                                url: w ? c(g) : g,
                                v: window ? .thunderboltVersion || "0.0.0",
                                vid: w ? s : u ? .visitorId || s,
                                bsi: w ? s : u ? .bsi || s,
                                vsi: l("viewerSessionId"),
                                wor: w || !window.outerWidth ? s : `${window.outerWidth}x${window.outerHeight}`,
                                wr: w ? s : p("wr", window.innerWidth ? `${window.innerWidth}x${window.innerHeight}` : s),
                                _brandId: d.commonConfig ? .brand || s,
                                nt: p("nt", s)
                            };
                        return `https://frog.wix.com/bt?${Object.entries(h).map(o).filter(Boolean).join("&")}`
                    };
                    const u = (e, i) => {
                            let n, t = "none",
                                r = e.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/);
                            if (!r && window.PerformanceServerTiming) {
                                const e = (e => {
                                    let i, n;
                                    try {
                                        i = e()
                                    } catch (e) {
                                        i = []
                                    }
                                    const t = [];
                                    return i.forEach((e => {
                                        switch (e.name) {
                                            case "cache":
                                                t[1] = e.description;
                                                break;
                                            case "varnish":
                                                t[2] = e.description;
                                                break;
                                            case "dc":
                                                n = e.description
                                        }
                                    })), {
                                        microPop: n,
                                        matches: t
                                    }
                                })(i);
                                n = e.microPop, r = e.matches
                            }
                            if (r && r.length && (t = `${r[1]},${r[2]||"none"}`, n || (n = r[3])), "none" === t) {
                                const e = "undefined" != typeof performance ? performance.timing : null;
                                e && e.responseStart - e.requestStart == 0 && (t = "browser")
                            }
                            return {
                                caching: t,
                                isCached: 0 === t.indexOf("hit"),
                                ...n ? {
                                    microPop: n
                                } : {}
                            }
                        },
                        p = {
                            WixSite: 1,
                            UGC: 2,
                            Template: 3
                        };
                    var l = () => {
                        const {
                            fedops: e,
                            viewerModel: {
                                siteFeaturesConfigs: i,
                                requestUrl: n,
                                site: t,
                                fleetConfig: r,
                                commonConfig: s,
                                interactionSampleRatio: o
                            },
                            clientSideRender: a,
                            santaRenderingError: c
                        } = window, d = (({
                            requestUrl: e,
                            interactionSampleRatio: i
                        }) => {
                            const n = new URL(e).searchParams;
                            return n.has("sampleEvents") ? "true" === n.get("sampleEvents") : Math.random() < (i ? 1 - i : .9)
                        })({
                            requestUrl: n,
                            interactionSampleRatio: o
                        }), l = (e => {
                            const {
                                userAgent: i
                            } = e.navigator;
                            return /instagram.+google\/google/i.test(i) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(i) ? "ua" : ""
                        })(window) || (() => {
                            try {
                                if (window.self === window.top) return ""
                            } catch (e) {}
                            return "iframe"
                        })() || (() => {
                            if (!Function.prototype.bind) return "bind";
                            const {
                                document: e,
                                navigator: i
                            } = window;
                            if (!e || !i) return "document";
                            const {
                                webdriver: n,
                                userAgent: t,
                                plugins: r,
                                languages: s
                            } = i;
                            if (n) return "webdriver";
                            if (!r || Array.isArray(r)) return "plugins";
                            if (Object.getOwnPropertyDescriptor(r, "0") ? .writable) return "plugins-extra";
                            if (!t) return "userAgent";
                            if (t.indexOf("Snapchat") > 0 && e.hidden) return "Snapchat";
                            if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages";
                            try {
                                throw Error()
                            } catch (e) {
                                if (e instanceof Error) {
                                    const {
                                        stack: i
                                    } = e;
                                    if (i && / (\(internal\/)|(\(?file:\/)/.test(i)) return "stack"
                                }
                            }
                            return ""
                        })() || (({
                            seo: e
                        }) => e ? .isInSEO ? "seo" : "")(i);
                        return {
                            suppressbi: n.includes("suppressbi=true"),
                            initialTimestamp: window.initialTimestamps.initialTimestamp,
                            initialRequestTimestamp: window.initialTimestamps.initialRequestTimestamp,
                            viewerSessionId: e.vsi,
                            viewerName: t.appNameForBiEvents,
                            siteRevision: String(t.siteRevision),
                            msId: t.metaSiteId,
                            is_rollout: 0 === r.code || 1 === r.code ? r.code : null,
                            is_platform_loaded: 0,
                            requestUrl: encodeURIComponent(n),
                            sessionId: String(t.sessionId),
                            btype: l,
                            isjp: !!l,
                            dc: t.dc,
                            siteCacheRevision: "__siteCacheRevision__",
                            checkVisibility: (() => {
                                let e = !0;

                                function i() {
                                    e = e && !0 !== document.hidden
                                }
                                return document.addEventListener("visibilitychange", i, {
                                    passive: !0
                                }), i(), () => (i(), e)
                            })(),
                            ...u(document.cookie, (() => [...performance.getEntriesByType("navigation")[0].serverTiming || []])),
                            isMesh: 1,
                            st: p[t.siteType] || 0,
                            commonConfig: s,
                            muteThunderboltEvents: d,
                            isServerSide: a ? 0 : 1,
                            isSuccessfulSSR: !a,
                            fallbackReason: c ? .errorInfo
                        }
                    };
                    const m = function() {
                        const e = l(),
                            i = {};
                        let n = 1;
                        const s = (t, s, o = {}) => {
                            const a = Date.now(),
                                c = Math.round(performance.now()),
                                u = a - e.initialTimestamp;
                            if (function(e, i) {
                                    if (i && performance.mark) {
                                        const n = `${i} (beat ${e})`;
                                        performance.mark(n)
                                    }
                                }(t, s), e.suppressbi || window.__browser_deprecation__) return;
                            const {
                                pageId: p,
                                pageNumber: l = n,
                                navigationType: m
                            } = o;
                            let w = `&pn=${l}`;
                            p && (w += `&pid=${p}`), m && (w += `&nt=${m}`);
                            const f = d(s, {
                                eventType: t,
                                ts: u,
                                tts: c,
                                extra: w
                            }, e, i);
                            r(f)
                        };
                        return {
                            sendBeat: s,
                            reportBI: function(e, i) {
                                ! function(e, i) {
                                    const n = i ? `${e} - ${i}` : e,
                                        t = "end" === i ? `${e} - start` : null;
                                    performance.mark(n), performance.measure && t && performance.measure(`\u2b50${e}`, t, n)
                                }(e, i)
                            },
                            wixBiSession: e,
                            sendBeacon: r,
                            setDynamicSessionData: ({
                                visitorId: e,
                                siteMemberId: n,
                                bsi: t
                            }) => {
                                i.visitorId = e || i.visitorId, i.siteMemberId = n || i.siteMemberId, i.bsi = t || i.bsi
                            },
                            reportPageNavigation: function(e) {
                                n += 1, s(t.sT.PAGE_NAVIGATION, "page navigation start", {
                                    pageId: e,
                                    pageNumber: n
                                })
                            },
                            reportPageNavigationDone: function(e, i) {
                                s(t.sT.PAGE_NAVIGATION_DONE, "page navigation complete", {
                                    pageId: e,
                                    pageNumber: n,
                                    navigationType: i
                                }), i !== t.$7.DYNAMIC_REDIRECT && i !== t.$7.NAVIGATION_ERROR && i !== t.$7.CANCELED || (n -= 1)
                            }
                        }
                    }();
                    window.bi = m, window.bi.wixBiSession.isServerSide = window.clientSideRender ? 0 : 1, window.bi.wixBiSession.isSuccessfulSSR = !window.clientSideRender, window.clientSideRender && (window.bi.wixBiSession.fallbackReason = window.santaRenderingError ? .errorInfo), m.sendBeat(1, "Init")
                }
            },
            function(e) {
                e.O(0, [142], (function() {
                    return i = 10799, e(e.s = i);
                    var i
                }));
                e.O()
            }
        ]);
        //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/sendBeat12.inline.c34a976c.bundle.min.js.map
    </script>
    <script>
        window.firstPageId = 'c1dmp'

        if (window.requestCloseWelcomeScreen) {
            window.requestCloseWelcomeScreen()
        }
        if (!window.__browser_deprecation__) {
            window.fedops.phaseStarted('partially_visible', {
                paramsOverrides: {
                    pageId: firstPageId,
                    isSuccessfulSSR: !clientSideRender
                }
            })
        }
    </script>


    <script defer="" src="https://static.parastorage.com/services/tag-manager-client/1.820.0/siteTags.bundle.min.js"></script>




    <script async="" id="wix-perf-measure" src="https://static.parastorage.com/services/wix-perf-measure/1.1095.0/wix-perf-measure.umd.min.js"></script>





    <!--pageHtmlEmbeds.bodyEnd start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyEnd start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyEnd end"></script>
    <!--pageHtmlEmbeds.bodyEnd end-->


    <!-- warmup data start -->
    <script type="application/json" id="wix-warmup-data">
        {
            "platform": {
                "ssrPropsUpdates": [],
                "ssrStyleUpdates": [],
                "ssrStructureUpdates": []
            },
            "appsWarmupData": {
                "675bbcef-18d8-41f5-800e-131ec9e08762": {
                    "importedNamespaces": []
                }
            },
            "ooi": {
                "failedInSsr": {}
            }
        }
    </script>
    <!-- warmup data end -->


    <script src="../../js/general/site/core.min.js"></script>
    <script src="../../js/general/site/script.js"></script>

    <!-- Date Picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    <script src="../../js/user/resorts/script_02.js"></script>
    <?php
        if (!empty($checkin) AND !empty($checkout)) {
            echo "
                <script>
                    $('#date-in').val('$checkin');
                    $('#date-in-span').html('$checkin');
                    var date = new Date('$checkin');
                    date.setDate(date.getDate() + 1);
                    var nextDay = $.datepicker.formatDate('mm/dd/yy', date);
                    $('#date-out').datepicker('option', 'minDate', nextDay);
                    $('#date-out').val('$checkout');
                    $('#date-out-span').html('$checkout');
                </script>
            ";
        }
        echo "
            <script>
                var locationInput = document.getElementById('input_comp-kbgakxea_r_comp-lrv1tpma');
                locationInput.value = locationValue;
                plusRoom();
                plusAdult();
                plusChild();
                searchResort();
            </script>
        ";
    ?>
</body>

</html>