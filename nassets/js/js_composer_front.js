function vc_js(){vc_toggleBehaviour(),vc_tabsBehaviour(),vc_accordionBehaviour(),vc_teaserGrid(),vc_carouselBehaviour(),vc_slidersBehaviour(),vc_prettyPhoto(),vc_googleplus(),vc_pinterest(),vc_progress_bar(),vc_plugin_flexslider(),vc_google_fonts(),vc_gridBehaviour(),vc_rowBehaviour(),vc_prepareHoverBox(),vc_googleMapsPointer(),vc_ttaActivation(),jQuery(document).trigger("vc_js"),window.setTimeout(vc_waypoints,500)}function getSizeName(){var e=jQuery(window).width();return e>1170?"desktop_wide":e>960&&1169>e?"desktop":e>768&&959>e?"tablet":e>300&&767>e?"mobile":300>e?"mobile_portrait":""}function loadScript(e,t,i){var o=document.createElement("script");o.type="text/javascript",o.readyState&&(o.onreadystatechange=function(){"loaded"!==o.readyState&&"complete"!==o.readyState||(o.onreadystatechange=null,i())}),o.src=e,t.get(0).appendChild(o)}function vc_ttaActivation(){jQuery("[data-vc-accordion]").on("show.vc.accordion",function(e){var t=window.jQuery,i={};i.newPanel=t(this).data("vc.accordion").getTarget(),window.wpb_prepare_tab_content(e,i)})}function vc_accordionActivate(e,t){if(t.newPanel.length&&t.newHeader.length){var i=t.newPanel.find(".vc_pie_chart:not(.vc_ready)"),o=t.newPanel.find(".vc_round-chart"),n=t.newPanel.find(".vc_line-chart"),a=t.newPanel.find('[data-ride="vc_carousel"]');void 0!==jQuery.fn.isotope&&t.newPanel.find(".isotope, .wpb_image_grid_ul").isotope("layout"),t.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&t.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var e=jQuery(this).data("vcGrid");e&&e.gridBuilder&&e.gridBuilder.setMasonry&&e.gridBuilder.setMasonry()}),vc_carouselBehaviour(t.newPanel),vc_plugin_flexslider(t.newPanel),i.length&&jQuery.fn.vcChat&&i.vcChat(),o.length&&jQuery.fn.vcRoundChart&&o.vcRoundChart({reload:!1}),n.length&&jQuery.fn.vcLineChart&&n.vcLineChart({reload:!1}),a.length&&jQuery.fn.carousel&&a.carousel("resizeAction"),t.newPanel.parents(".isotope").length&&t.newPanel.parents(".isotope").each(function(){jQuery(this).isotope("layout")})}}function initVideoBackgrounds(){return window.console&&window.console.warn&&window.console.warn("this function is deprecated use vc_initVideoBackgrounds"),vc_initVideoBackgrounds()}function vc_initVideoBackgrounds(){jQuery("[data-vc-video-bg]").each(function(){var e,t,i=jQuery(this);i.data("vcVideoBg")?(e=i.data("vcVideoBg"),t=vcExtractYoutubeId(e),t&&(i.find(".vc_video-bg").remove(),insertYoutubeVideoAsBackground(i,t)),jQuery(window).on("grid:items:added",function(e,t){i.has(t).length&&vcResizeVideoBackground(i)})):i.find(".vc_video-bg").remove()})}function insertYoutubeVideoAsBackground(e,t,i){if("undefined"==typeof YT||void 0===YT.Player)return 100<(i=void 0===i?0:i)?void console.warn("Too many attempts to load YouTube api"):void setTimeout(function(){insertYoutubeVideoAsBackground(e,t,i++)},100);var o=e.prepend('<div class="vc_video-bg vc_hidden-xs"><div class="inner"></div></div>').find(".inner");new YT.Player(o[0],{width:"100%",height:"100%",videoId:t,playerVars:{playlist:t,iv_load_policy:3,enablejsapi:1,disablekb:1,autoplay:1,controls:0,showinfo:0,rel:0,loop:1,wmode:"transparent"},events:{onReady:function(e){e.target.mute().setLoop(!0)}}}),vcResizeVideoBackground(e),jQuery(window).bind("resize",function(){vcResizeVideoBackground(e)})}function vcResizeVideoBackground(e){var t,i,o,n,a=e.innerWidth(),r=e.innerHeight();16/9>a/r?(t=r*(16/9),i=r,o=-Math.round((t-a)/2)+"px",n=-Math.round((i-r)/2)+"px",t+="px",i+="px"):(t=a,i=a*(9/16),n=-Math.round((i-r)/2)+"px",o=-Math.round((t-a)/2)+"px",t+="px",i+="px"),e.find(".vc_video-bg iframe").css({maxWidth:"1000%",marginLeft:o,marginTop:n,width:t,height:i})}function vcExtractYoutubeId(e){if(void 0===e)return!1;var t=e.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);return null!==t&&t[1]}function vc_googleMapsPointer(){var e=window.jQuery,t=e(".wpb_gmaps_widget");t.click(function(){e("iframe",this).css("pointer-events","auto")}),t.mouseleave(function(){e("iframe",this).css("pointer-events","none")}),e(".wpb_gmaps_widget iframe").css("pointer-events","none")}function vc_setHoverBoxPerspective(e){e.each(function(){var e=jQuery(this),t=e.width(),i=4*t+"px";e.css("perspective",i)})}function vc_setHoverBoxHeight(e){e.each(function(){var e=jQuery(this),t=e.find(".vc-hoverbox-inner");t.css("min-height",0);var i=e.find(".vc-hoverbox-front-inner").outerHeight(),o=e.find(".vc-hoverbox-back-inner").outerHeight(),n=i>o?i:o;250>n&&(n=250),t.css("min-height",n+"px")})}function vc_prepareHoverBox(){var e=jQuery(".vc-hoverbox");vc_setHoverBoxHeight(e),vc_setHoverBoxPerspective(e)}document.documentElement.className+=" js_active ",document.documentElement.className+="ontouchstart"in document.documentElement?" vc_mobile ":" vc_desktop ",function(){for(var e=["-webkit-","-moz-","-ms-","-o-",""],t=0;t<e.length;t++)e[t]+"transform"in document.documentElement.style&&(document.documentElement.className+=" vc_transform ")}(),"function"!=typeof window.vc_plugin_flexslider&&(window.vc_plugin_flexslider=function(e){(e?e.find(".wpb_flexslider"):jQuery(".wpb_flexslider")).each(function(){var e=jQuery(this),t=1e3*parseInt(e.attr("data-interval")),i=e.attr("data-flex_fx"),o=!0;0===t&&(o=!1),e.is(":visible")&&e.flexslider({animation:i,slideshow:o,slideshowSpeed:t,sliderSpeed:800,smoothHeight:!0})})}),"function"!=typeof window.vc_googleplus&&(window.vc_googleplus=function(){0<jQuery(".wpb_googleplus").length&&function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//apis.google.com/js/plusone.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}()}),"function"!=typeof window.vc_pinterest&&(window.vc_pinterest=function(){0<jQuery(".wpb_pinterest").length&&function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//assets.pinterest.com/js/pinit.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}()}),"function"!=typeof window.vc_progress_bar&&(window.vc_progress_bar=function(){void 0!==jQuery.fn.waypoint&&jQuery(".vc_progress_bar").waypoint(function(){jQuery(this).find(".vc_single_bar").each(function(e){var t=jQuery(this),i=t.find(".vc_bar"),o=i.data("percentage-value");setTimeout(function(){i.css({width:o+"%"})},200*e)})},{offset:"85%"})}),"function"!=typeof window.vc_waypoints&&(window.vc_waypoints=function(){void 0!==jQuery.fn.waypoint&&jQuery(".wpb_animate_when_almost_visible:not(.wpb_start_animation)").waypoint(function(){jQuery(this).addClass("wpb_start_animation animated")},{offset:"85%"})}),"function"!=typeof window.vc_toggleBehaviour&&(window.vc_toggleBehaviour=function(e){function t(e){e&&e.preventDefault&&e.preventDefault();var t=jQuery(this),i=t.closest(".vc_toggle"),o=i.find(".vc_toggle_content");i.hasClass("vc_toggle_active")?o.slideUp({duration:300,complete:function(){i.removeClass("vc_toggle_active")}}):o.slideDown({duration:300,complete:function(){i.addClass("vc_toggle_active")}})}e?e.hasClass("vc_toggle_title")?e.unbind("click").click(t):e.find(".vc_toggle_title").unbind("click").click(t):jQuery(".vc_toggle_title").unbind("click").on("click",t)}),"function"!=typeof window.vc_tabsBehaviour&&(window.vc_tabsBehaviour=function(e){if(jQuery.ui){var t=e||jQuery(".wpb_tabs, .wpb_tour"),i=jQuery.ui&&jQuery.ui.version?jQuery.ui.version.split("."):"1.10",o=1===parseInt(i[0])&&9>parseInt(i[1]);t.each(function(e){var t,i=jQuery(this).attr("data-interval"),n=[];if(t=jQuery(this).find(".wpb_tour_tabs_wrapper").tabs({show:function(e,t){wpb_prepare_tab_content(e,t)},beforeActivate:function(e,t){1!==t.newPanel.index()&&t.newPanel.find(".vc_pie_chart:not(.vc_ready)")},activate:function(e,t){wpb_prepare_tab_content(e,t)}}),i&&i>0)try{t.tabs("rotate",1e3*i)}catch(a){window.console&&window.console.log&&console.log(a)}jQuery(this).find(".wpb_tab").each(function(){n.push(this.id)}),jQuery(this).find(".wpb_tabs_nav li").click(function(e){return e.preventDefault(),o?t.tabs("select",jQuery("a",this).attr("href")):t.tabs("option","active",jQuery(this).index()),!1}),jQuery(this).find(".wpb_prev_slide a, .wpb_next_slide a").click(function(e){if(e.preventDefault(),o){var i=t.tabs("option","selected");jQuery(this).parent().hasClass("wpb_next_slide")?i++:i--,0>i?i=t.tabs("length")-1:i>=t.tabs("length")&&(i=0),t.tabs("select",i)}else{var i=t.tabs("option","active"),n=t.find(".wpb_tab").length;i=jQuery(this).parent().hasClass("wpb_next_slide")?i+1>=n?0:i+1:0>i-1?n-1:i-1,t.tabs("option","active",i)}})})}}),"function"!=typeof window.vc_accordionBehaviour&&(window.vc_accordionBehaviour=function(){jQuery(".wpb_accordion").each(function(e){var t,i=jQuery(this),o=(i.attr("data-interval"),!isNaN(jQuery(this).data("active-tab"))&&0<parseInt(i.data("active-tab"))&&parseInt(i.data("active-tab"))-1),n=!1===o||"yes"===i.data("collapsible");t=i.find(".wpb_accordion_wrapper").accordion({header:"> div > h3",autoHeight:!1,heightStyle:"content",active:o,collapsible:n,navigation:!0,activate:vc_accordionActivate,change:function(e,t){void 0!==jQuery.fn.isotope&&t.newContent.find(".isotope").isotope("layout"),vc_carouselBehaviour(t.newPanel)}}),!0===i.data("vcDisableKeydown")&&(t.data("uiAccordion")._keydown=function(){})})}),"function"!=typeof window.vc_teaserGrid&&(window.vc_teaserGrid=function(){var e={fitrows:"fitRows",masonry:"masonry"};jQuery(".wpb_grid .teaser_grid_container:not(.wpb_carousel), .wpb_filtered_grid .teaser_grid_container:not(.wpb_carousel)").each(function(){var t=jQuery(this),i=t.find(".wpb_thumbnails"),o=i.attr("data-layout-mode");i.isotope({itemSelector:".isotope-item",layoutMode:void 0===e[o]?"fitRows":e[o]}),t.find(".categories_filter a").data("isotope",i).click(function(e){e.preventDefault();var t=jQuery(this).data("isotope");jQuery(this).parent().parent().find(".active").removeClass("active"),jQuery(this).parent().addClass("active"),t.isotope({filter:jQuery(this).attr("data-filter")})}),jQuery(window).bind("load resize",function(){i.isotope("layout")})})}),"function"!=typeof window.vc_carouselBehaviour&&(window.vc_carouselBehaviour=function(e){(e?e.find(".wpb_carousel"):jQuery(".wpb_carousel")).each(function(){var e=jQuery(this);if(!0!==e.data("carousel_enabled")&&e.is(":visible")){e.data("carousel_enabled",!0),getColumnsCount(jQuery(this)),jQuery(this).hasClass("columns_count_1");var t=jQuery(this).find(".wpb_thumbnails-fluid li");t.css({"margin-right":t.css("margin-left"),"margin-left":0});var i=jQuery(this).find("ul.wpb_thumbnails-fluid");i.width(i.width()+300),jQuery(window).resize(function(){var e=screen_size;screen_size=getSizeName(),e!=screen_size&&window.setTimeout("location.reload()",20)})}})}),"function"!=typeof window.vc_slidersBehaviour&&(window.vc_slidersBehaviour=function(){jQuery(".wpb_gallery_slides").each(function(e){var t,i=jQuery(this);if(i.hasClass("wpb_slider_nivo")){var o=1e3*i.attr("data-interval");0===o&&(o=9999999999),i.find(".nivoSlider").nivoSlider({effect:"boxRainGrow,boxRain,boxRainReverse,boxRainGrowReverse",slices:15,boxCols:8,boxRows:4,animSpeed:800,pauseTime:o,startSlide:0,directionNav:!0,directionNavHide:!0,controlNav:!0,keyboardNav:!1,pauseOnHover:!0,manualAdvance:!1,prevText:"Prev",nextText:"Next"})}else i.hasClass("wpb_image_grid")&&(jQuery.fn.imagesLoaded?t=i.find(".wpb_image_grid_ul").imagesLoaded(function(){t.isotope({itemSelector:".isotope-item",layoutMode:"fitRows"})}):i.find(".wpb_image_grid_ul").isotope({itemSelector:".isotope-item",layoutMode:"fitRows"}))})}),"function"!=typeof window.vc_prettyPhoto&&(window.vc_prettyPhoto=function(){try{jQuery&&jQuery.fn&&jQuery.fn.prettyPhoto&&jQuery('a.prettyphoto, .gallery-icon a[href*=".jpg"]').prettyPhoto({animationSpeed:"normal",hook:"data-rel",padding:15,opacity:.7,showTitle:!0,allowresize:!0,counter_separator_label:"/",hideflash:!1,deeplinking:!1,modal:!1,callback:function(){location.href.indexOf("#!prettyPhoto")>-1&&(location.hash="")},social_tools:""})}catch(e){window.console&&window.console.log&&console.log(e)}}),"function"!=typeof window.vc_google_fonts&&(window.vc_google_fonts=function(){return!1}),window.vcParallaxSkroll=!1,"function"!=typeof window.vc_rowBehaviour&&(window.vc_rowBehaviour=function(){function e(){var e=i('[data-vc-full-width="true"]');i.each(e,function(e,t){var o=i(this);o.addClass("vc_hidden");var n=o.next(".vc_row-full-width");if(n.length||(n=o.parent().next(".vc_row-full-width")),n.length){var a=parseInt(o.css("margin-left"),10),r=parseInt(o.css("margin-right"),10),c=0-n.offset().left-a,s=i(window).width();if(i("body").hasClass("rtl")){if(o.css({position:"relative",right:c,"box-sizing":"border-box",width:i(window).width()}),!o.data("vcStretchContent")){var d=-1*c;0>d&&(d=0);var l=s-d-n.width()+a+r;0>l&&(l=0),o.css({"padding-right":d+"px","padding-left":l+"px"})}}else if(o.css({position:"relative",left:c,"box-sizing":"border-box",width:i(window).width()}),!o.data("vcStretchContent")){var d=-1*c;0>d&&(d=0);var l=s-d-n.width()+a+r;0>l&&(l=0),o.css({"padding-left":d+"px","padding-right":l+"px"})}o.attr("data-vc-full-width-init","true"),o.removeClass("vc_hidden"),i(document).trigger("vc-full-width-row-single",{el:o,offset:c,marginLeft:a,marginRight:r,elFull:n,width:s})}}),i(document).trigger("vc-full-width-row",e)}function t(){var e=i(".vc_row-o-full-height:first");if(e.length){var t,o,n,a;t=i(window),o=t.height(),n=e.offset().top,o>n&&(a=100-n/(o/100),e.css("min-height",a+"vh"))}i(document).trigger("vc-full-height-row",e)}var i=window.jQuery;i(window).off("resize.vcRowBehaviour").on("resize.vcRowBehaviour",e).on("resize.vcRowBehaviour",t),e(),t(),function(){(window.navigator.userAgent.indexOf("MSIE ")>0||navigator.userAgent.match(/Trident.*rv\:11\./))&&i(".vc_row-o-full-height").each(function(){"flex"===i(this).css("display")&&i(this).wrap('<div class="vc_ie-flexbox-fixer"></div>')})}(),vc_initVideoBackgrounds(),function(){var e,t=!1;window.vcParallaxSkroll&&window.vcParallaxSkroll.destroy(),i(".vc_parallax-inner").remove(),i("[data-5p-top-bottom]").removeAttr("data-5p-top-bottom data-30p-top-bottom"),i("[data-vc-parallax]").each(function(){var e,o,n,a,r,c,s;t=!0,"on"===i(this).data("vcParallaxOFade")&&i(this).children().attr("data-5p-top-bottom","opacity:0;").attr("data-30p-top-bottom","opacity:1;"),o=100*i(this).data("vcParallax"),r=i("<div />").addClass("vc_parallax-inner").appendTo(i(this)),r.height(o+"%"),c=i(this).data("vcParallaxImage"),s=vcExtractYoutubeId(c),s?insertYoutubeVideoAsBackground(r,s):void 0!==c&&r.css("background-image","url("+c+")"),e=o-100,n=-e,a=0,r.attr("data-bottom-top","top: "+n+"%;").attr("data-top-bottom","top: "+a+"%;")}),!(!t||!window.skrollr)&&(e={forceHeight:!1,smoothScrolling:!1,mobileCheck:function(){return!1}},window.vcParallaxSkroll=skrollr.init(e),window.vcParallaxSkroll)}()}),"function"!=typeof window.vc_gridBehaviour&&(window.vc_gridBehaviour=function(){jQuery.fn.vcGrid&&jQuery("[data-vc-grid]").vcGrid()}),"function"!=typeof window.getColumnsCount&&(window.getColumnsCount=function(e){for(var t=!1,i=1;!1===t;){if(e.hasClass("columns_count_"+i))return t=!0,i;i++}});var screen_size=getSizeName();"function"!=typeof window.wpb_prepare_tab_content&&(window.wpb_prepare_tab_content=function(e,t){var i,o,n=t.panel||t.newPanel,a=n.find(".vc_pie_chart:not(.vc_ready)"),r=n.find(".vc_round-chart"),c=n.find(".vc_line-chart"),s=n.find('[data-ride="vc_carousel"]');if(vc_carouselBehaviour(),vc_plugin_flexslider(n),t.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&t.newPanel.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var e=jQuery(this).data("vcGrid");e&&e.gridBuilder&&e.gridBuilder.setMasonry&&e.gridBuilder.setMasonry()}),n.find(".vc_masonry_media_grid, .vc_masonry_grid").length&&n.find(".vc_masonry_media_grid, .vc_masonry_grid").each(function(){var e=jQuery(this).data("vcGrid");e&&e.gridBuilder&&e.gridBuilder.setMasonry&&e.gridBuilder.setMasonry()}),a.length&&jQuery.fn.vcChat&&a.vcChat(),r.length&&jQuery.fn.vcRoundChart&&r.vcRoundChart({reload:!1}),c.length&&jQuery.fn.vcLineChart&&c.vcLineChart({reload:!1}),s.length&&jQuery.fn.carousel&&s.carousel("resizeAction"),i=n.find(".isotope, .wpb_image_grid_ul"),o=n.find(".wpb_gmaps_widget"),0<i.length&&i.isotope("layout"),o.length&&!o.is(".map_ready")){var d=o.find("iframe");d.attr("src",d.attr("src")),o.addClass("map_ready")}n.parents(".isotope").length&&n.parents(".isotope").each(function(){jQuery(this).isotope("layout")})}),window.vc_googleMapsPointer,jQuery(document).ready(vc_prepareHoverBox),jQuery(window).resize(vc_prepareHoverBox),jQuery(document).ready(function(e){window.vc_js()});