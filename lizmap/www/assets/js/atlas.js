lizMap.events.on({uicreated:function(){var e;if("atlasEnabled"in lizMap.config.options&&"True"===lizMap.config.options.atlasEnabled){var a=lizMap.config.options,t={};t[a.atlasLayer]={atlasDuration:a.atlasDuration,atlasFeatureLabel:a.atlasFeatureLabel,atlasZoom:a.atlasZoom,atlasPrimaryKey:a.atlasPrimaryKey,atlasTriggerFilter:a.atlasTriggerFilter,atlasHighlightGeometry:a.atlasHighlightGeometry,atlasDisplayLayerDescription:a.atlasDisplayLayerDescription,atlasDisplayPopup:a.atlasDisplayPopup,atlasSortField:a.atlasSortField},e={layerOptions:t,globalOptions:{atlasShowAtStartup:a.atlasShowAtStartup,atlasAutoPlay:a.atlasAutoPlay}}}else if("atlas"in lizMap.config&&"layers"in lizMap.config.atlas&&Array.isArray(lizMap.config.atlas.layers)&&lizMap.config.atlas.layers.length>0){for(var l={},i=0;i<lizMap.config.atlas.layers.length;i++)l[(d=lizMap.config.atlas.layers[i]).layer]={atlasDuration:d.duration,atlasFeatureLabel:d.featureLabel,atlasZoom:d.zoom,atlasPrimaryKey:d.primaryKey,atlasTriggerFilter:d.triggerFilter,atlasHighlightGeometry:d.highlightGeometry,atlasDisplayLayerDescription:d.displayLayerDescription,atlasDisplayPopup:d.displayPopup,atlasSortField:d.sortField};e={layerOptions:l,globalOptions:{atlasShowAtStartup:lizMap.config.options.atlasShowAtStartup,atlasAutoPlay:lizMap.config.options.atlasAutoPlay}}}if(e){var r=Object.keys(e.layerOptions).length,n=0,s=e.globalOptions,o={showAtStartup:"True"==s.atlasShowAtStartup,autoPlay:"True"==s.atlasAutoPlay},p=[],u=0;for(var y in e.layerOptions){var c=lizMap.getLayerConfigById(y);if(c){var d=c[1],g=c[0],f=e.layerOptions[y],v=""!=f.atlasPrimaryKey?f.atlasPrimaryKey:null;if(!v)return;var z=""!=f.atlasFeatureLabel?f.atlasFeatureLabel:null;if(!z)return;var m,h=""!=f.atlasSortField?f.atlasSortField:z,b={layername:g,layerId:d.id,displayLayerDescription:"True"==f.atlasDisplayLayerDescription,primaryKey:v,titleField:z,sortField:h,duration:f.atlasDuration,drawFeatureGeom:"True"==f.atlasHighlightGeometry,atlasDisplayPopup:"True"==f.atlasDisplayPopup,triggerFilter:"True"==f.atlasTriggerFilter,zoom:""!=f.atlasZoom&&f.atlasZoom};M(b,u),u++}else r--}}function M(e,a){var t=e.layername;lizMap.getFeatureData(t,t+":",null,"geom",!1,null,null,(function(l,i,s,u){return e.features=s,e.featureType=t,D(e),p[a]=e,++n===r&&T(p,o),$("body").css("cursor","auto"),!1}))}function F(){lizMap.getFeatureData(b.featureType,b.featureType+":",null,"geom",!1,null,null,(function(e,a,t,l){b.features=t,D(b);var i='<option value="-1"> --- </option>';for(var r in b.primaryKey,b.features_sorted)i+='<option value="'+r+'">',i+=b.features_sorted[r][b.titleField],i+="</option>";var n=$("#liz-atlas-select").val();return $("#liz-atlas-select").html(i),$("#liz-atlas-select").val(n),$("#liz-atlas-select").change(),!1}))}function D(e){e.features_with_pkey={};var a=[],t=e.primaryKey,l=e.sortField;for(var i in l||(l=t),e.features){var r=e.features[i],n=(r.id.split(".").pop(),r.properties[t]);e.features_with_pkey[n]=r,a.push(r.properties)}a.sort((function(e,a){var t=e[l],i=a[l];return"string"!=typeof t&&"string"!=typeof i||(t=t?t.toUpperCase():"",i=i?i.toUpperCase():""),t<i?-1:t>i?1:0})),e.features_sorted=a}function T(e,a){let t="";if(e.length>1){t='<i class="icon-globe icon-white" style="margin-right: 4px;vertical-align: baseline;"></i><select id="select-atlas-layer">';for(let a=0;a<e.length;a++)t+='<option value="'+e[a].layerId+'">'+lizMap.config.layers[e[a].layername].title+"</option>";t+="</select>"}else t+='<h3><i class="icon-globe icon-white" style="margin-right: 4px;"></i>'+lizMap.config.layers[e[0].layername].title+"</h3>";t+='<div id="atlas-content" style="border-top: #F0F0F0 dashed 1px;padding-top: 5px;"></div>',lizMap.addDock("atlas",lizDict["atlas.toolbar.title"],"right-dock",t,"icon-globe"),e.length>1?($("#select-atlas-layer").change((function(){P();for(var a=$(this).val(),t=0;t<e.length;t++)a===e[t].layerId&&(b=e[t],w());return lizMap.events.triggerEvent("atlasready",b),!1})),$("#select-atlas-layer").change()):(b=e[0],w()),a.autoPlay&&!lizMap.checkMobile()&&$("button.liz-atlas-run").click(),a.showAtStartup&&!lizMap.checkMobile()&&($("#mapmenu li.atlas:not(.active) a").click(),$("#mapmenu li.switcher.active a").click()),lizMap.events.on({rightdockopened:function(e){"atlas"==e.id&&($("#content").addClass("atlas-visible"),lizMap.updateContentSize())},rightdockclosed:function(e){"atlas"==e.id&&($("#content").removeClass("atlas-visible"),lizMap.updateContentSize(),P())}})}function w(){var e=function(e){var a="";for(var t in e.displayLayerDescription&&""!=lizMap.config.layers[e.layername].abstract&&(a+='<p id="liz-atlas-item-layer-abstract">'+lizMap.config.layers[e.layername].abstract+"</p>"),a+='<p style="padding:0px 10px;">',a+='<select id="liz-atlas-select">',a+='<option value="-1"> --- </option>',e.primaryKey,e.features_sorted)a+='<option value="'+t+'">',a+=e.features_sorted[t][e.titleField],a+="</option>";return a+="</select>",a+="<br><span>",a+='<button class="btn btn-mini btn-primary liz-atlas-item" value="-1">'+lizDict["atlas.toolbar.prev"]+"</button>",a+="&nbsp;",a+='<button class="btn btn-mini btn-primary liz-atlas-item" value="1">'+lizDict["atlas.toolbar.next"]+"</button>",a+="&nbsp;",a+='<button class="btn btn-mini btn-wanrning liz-atlas-run" value="1">'+lizDict["atlas.toolbar.play"]+"</button>",a+="&nbsp;",a+="</span>",a+="</span>",a+="</br>",a+="</p>",a+='<div id="liz-atlas-item-detail" style="display:none;">',a+="</div>",a+="</div>",e.home=a,a}(b);$("#atlas-content").html(e),$("#liz-atlas-select").change((function(){var e=$(this).val(),a=b.features_sorted.length;if(-1==e)return P(),!1;if(e&&e>=0&&e<a){var t=b.features_sorted[e],l=b.primaryKey;t[l]in b.features_with_pkey?function(e){var a=new OpenLayers.Format.GeoJSON({ignoreExtraDims:!0}).read(e)[0].clone(),t=lizMap.config.layers[b.layername].featureCrs;if(a.geometry.transform(t,lizMap.map.getProjection()),b.zoom)if("center"==b.zoom.toLowerCase()){var l=a.geometry.getBounds().getCenterLonLat();lizMap.map.setCenter(l)}else lizMap.map.zoomToExtent(a.geometry.getBounds());var i=lizMap.map.getLayersByName("locatelayer");if(b.drawFeatureGeom&&i.length>0&&(alayer=i[0],alayer.destroyFeatures(),alayer.addFeatures([a])),b.atlasDisplayPopup&&lizMap.getFeaturePopupContent(b.featureType,e,(function(e){var a="liz-atlas-item-detail",t=new RegExp("lizmapPopupTable","g"),l='<div class="lizmapPopupContent">'+(l=e.replace(t,"table table-condensed lizmapPopupTable"))+"</div>",i=new RegExp("<h4>.+</h4>");l=l.replace(i,""),$("#"+a).html(l).show(),lizMap.events.triggerEvent("lizmappopupdisplayed",{popup:null,containerId:a}),lizMap.addChildrenFeatureInfo(e,a),lizMap.addChildrenDatavizFilteredByPopupFeature(e,a)})),b.triggerFilter){var r=e.id.split(".").pop();lizMap.events.triggerEvent("layerfeatureselected",{featureType:b.featureType,fid:r,updateDrawing:!1}),lizMap.events.triggerEvent("layerfeaturefilterselected",{featureType:b.featureType})}}(b.features_with_pkey[t[l]]):console.log("no feature found")}return!1})),$("#atlas div.menu-content button.liz-atlas-item").click((function(){var e=parseInt($(this).val())+parseInt($("#liz-atlas-select").val()),a=b.features_sorted.length;return e>=a&&(e=0),e>=0&&e<a&&$("#liz-atlas-select").val(e).change(),!1})),$("#atlas div.menu-content button.liz-atlas-run").click((function(){var e=$(this).val(),a=b.duration;parseInt(a)>0||(a=5);var t=1e3*parseInt(a);(t<2||t>6e4)&&(t=5e3),"1"==e?($('button.liz-atlas-item[value="1"]').click(),$(this).val(0),$(this).text(lizDict["atlas.toolbar.stop"]).addClass("btn-danger"),m=setInterval((function(){$('button.liz-atlas-item[value="1"]').click()}),t)):P()})),0!=b.features.length&&b.triggerFilter&&b.hideFeaturesAtStratup&&(lizMap.events.triggerEvent("layerfeatureselected",{featureType:b.featureType,fid:-99999,updateDrawing:!1}),lizMap.events.triggerEvent("layerfeaturefilterselected",{featureType:b.featureType})),lizMap.events.triggerEvent("uiatlascreated",b),lizMap.events.on({lizmapeditionfeaturecreated:function(e){e.layerId==b.layerId&&F()},lizmapeditionfeaturemodified:function(e){e.layerId==b.layerId&&F()},lizmapeditionfeaturedeleted:function(e){e.layerId==b.layerId&&F()}})}function P(){if(m){var e=$("#atlas div.menu-content button.liz-atlas-run");e.val(1),e.text(lizDict["atlas.toolbar.play"]).removeClass("btn-danger"),clearInterval(m),m=null}b.drawFeatureGeom&&lizMap.clearDrawLayer("locatelayer"),b.triggerFilter&&lizMap.lizmapLayerFilterActive&&(b.hideFeaturesAtStratup?(lizMap.events.triggerEvent("layerfeatureselected",{featureType:b.featureType,fid:-99999,updateDrawing:!1}),lizMap.events.triggerEvent("layerfeaturefilterselected",{featureType:b.featureType})):lizMap.events.triggerEvent("layerfeatureremovefilter",{featureType:b.featureType})),$("#liz-atlas-item-detail").hide()}}});
//# sourceMappingURL=atlas.js.map