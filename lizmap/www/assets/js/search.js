!function(){var e=null,r=null;function t(){0!=$("#search-query").val().length?($("#lizmap-search .items li > a").unbind("click"),$("#lizmap-search .items").html('<li class="start"><ul><li>'+lizDict["externalsearch.search"]+"</li></ul></li>"),$("#lizmap-search, #lizmap-search-close").addClass("open")):lizMap.addMessage(lizDict["externalsearch.noquery"],"info",!0).attr("id","lizmap-search-message")}function a(e){if(0!=$("#search-query").val().length){var t=new OpenLayers.Projection("EPSG:4326");$("#lizmap-search .items li > a").unbind("click"),0!=$("#lizmap-search .items li.start").length?$("#lizmap-search .items").html(e):$("#lizmap-search .items").append(e),$("#lizmap-search, #lizmap-search-close").addClass("open"),$("#lizmap-search .items li > a").click((function(){var e=$(this).attr("href").replace("#","");(e=OpenLayers.Bounds.fromString(e)).transform(t,r.getProjectionObject()),r.zoomToExtent(e);var a=new OpenLayers.Feature.Vector(e.toGeometry().getCentroid()),n=$(this).attr("data");if(n){var s=OpenLayers.Geometry.fromWKT(n);s.transform(t,r.getProjectionObject()),a=new OpenLayers.Feature.Vector(s)}var o=r.getLayersByName("locatelayer");return 0!=o.length&&((o=o[0]).destroyFeatures(),o.setVisibility(!0),o.addFeatures([a])),$("#lizmap-search, #lizmap-search-close").removeClass("open"),lizMap.events.triggerEvent("lizmapexternalsearchitemselected",{feature:a}),!1})),$("#lizmap-search-close button").click((function(){return $("#lizmap-search, #lizmap-search-close").removeClass("open"),!1}))}}function n(){var e=$("#search-query").val().split(" "),r=[],t="(";for(var a in e){var n=e[a].trim();""!=n&&(r.push(n),n!=lizMap.cleanName(n)&&r.push(lizMap.cleanName(n)))}return t+=r.join("|"),t+=")",new RegExp(t,"ig")}function s(e){if("externalSearch"==e.type)return!1;if(!1 in e)return!1;var s=new OpenLayers.Projection("EPSG:4326"),o=new OpenLayers.Bounds(r.maxExtent.toArray());return o.transform(r.getProjection(),s),$("#nominatim-search").submit((function(){t();var r=n();return $.get(e.url,{repository:lizUrls.params.repository,project:lizUrls.params.project,query:$("#search-query").val(),bbox:o.toBBOX()},(function(e){var t="",n=0;for(var s in e){var i=e[s];t+="<li><b>"+i.search_name+"</b>",t+="<ul>";for(var l=0,c=i.features.length;l<c;l++){var u=i.features[l],m=OpenLayers.Geometry.fromWKT(u.geometry);"EPSG:4326"!=i.srid&&m.transform(i.srid,"EPSG:4326");var p=m.getBounds();if(o.intersectsBounds(p)){var h=u.label.replace(r,'<b style="color:#0094D6;">$1</b>');t+='<li><a href="#'+p.toBBOX()+'" data="'+m.toString()+'">'+h+"</a></li>",n++}}t+="</ul></li>"}a(0!=n&&""!=t?t:"<li><b>"+lizDict["externalsearch.mapdata"]+"</b><ul><li>"+lizDict["externalsearch.notfound"]+"</li></ul></li>")}),"json"),!1})),!0}function o(e){if("externalSearch"!=e.type)return!1;var s=new OpenLayers.Projection("EPSG:4326"),o=new OpenLayers.Bounds(r.maxExtent.toArray());o.transform(r.getProjection(),s);var i=null;switch(e.service){case"nominatim":"url"in e&&(i=OpenLayers.Util.urlAppend(e.url,OpenLayers.Util.getParameterString(lizUrls.params)));break;case"ign":i="https://wxs.ign.fr/essentiels/geoportail/ols?";break;case"google":google&&"maps"in google&&"Geocoder"in google.maps&&(i=new google.maps.Geocoder)}return null!=i&&($("#nominatim-search").submit((function(){t();var r=n();switch(e.service){case"nominatim":$.get(i,{query:$("#search-query").val(),bbox:o.toBBOX()},(function(e){var t="",n=0;$.each(e,(function(e,a){if(n>9)return!1;if(!a.boundingbox)return!0;var s=[a.boundingbox[2],a.boundingbox[0],a.boundingbox[3],a.boundingbox[1]];if(s=new OpenLayers.Bounds(s),o.intersectsBounds(s)){var i=a.display_name.replace(r,'<b style="color:#0094D6;">$1</b>');t+='<li><a href="#'+s.toBBOX()+'">'+i+"</a></li>",n++}})),0!=n&&""!=t||(t="<li>"+lizDict["externalsearch.notfound"]+"</li>"),a("<li><b>OpenStreetMap</b><ul>"+t+"</ul></li>")}),"json");break;case"ign":var s='<?xml version="1.0" encoding="UTF-8"?>';s+="<XLS ",s+='xmlns:gml="http://www.opengis.net/gml" ',s+='xmlns="http://www.opengis.net/xls" ',s+='xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" version="1.2" ',s+='xsi:schemaLocation="http://www.opengis.net/xls http://schemas.opengis.net/ols/1.2/olsAll.xsd">',s+='<RequestHeader srsName="epsg:4326"/>',s+='<Request maximumResponses="10" methodName="GeocodeRequest" requestID="uid42" version="1.2">',s+='<GeocodeRequest returnFreeForm="false">',s+='<Address countryCode="StreetAddress">',s+="<freeFormAddress>"+$("#search-query").val()+"</freeFormAddress>",s+="</Address>",s+="</GeocodeRequest>",s+="</Request>",s+="</XLS>",$.get(encodeURI(i+"xls="+s),(function(e){var t="",n=0;$(e).find("GeocodedAddress").each((function(){if(n>9)return!1;var e=$(this).find("Place[type=Bbox]").text().split(";"),a=$(this).find("Building").attr("number"),s=$(this).find("Street").text(),i=$(this).find("Place[type=Municipality]").text(),l=$(this).find("Place[type=Departement]").text(),c="";if(a&&""!==a&&(c+=a+" "),""!==s&&(c+=s+", "),""!==i&&(c+=i+", "),""!==l&&(c+=l),e=new OpenLayers.Bounds(e),o.intersectsBounds(e)){var u=c.replace(r,'<b style="color:#0094D6;">$1</b>');t+='<li><a href="#'+e.toBBOX()+'">'+u+"</a></li>",n++}})),0!=n&&""!=t||(t="<li>"+lizDict["externalsearch.notfound"]+"</li>"),a("<li><b>IGN</b><ul>"+t+"</ul></li>")}));break;case"google":i.geocode({address:$("#search-query").val(),bounds:new google.maps.LatLngBounds(new google.maps.LatLng(o.top,o.left),new google.maps.LatLng(o.bottom,o.right))},(function(e,t){if(t==google.maps.GeocoderStatus.OK){var n="",s=0;$.each(e,(function(e,t){if(s>9)return!1;var a=[];if(t.geometry.viewport?a=[t.geometry.viewport.getSouthWest().lng(),t.geometry.viewport.getSouthWest().lat(),t.geometry.viewport.getNorthEast().lng(),t.geometry.viewport.getNorthEast().lat()]:t.geometry.bounds&&(a=[t.geometry.bounds.getSouthWest().lng(),t.geometry.bounds.getSouthWest().lat(),t.geometry.bounds.getNorthEast().lng(),t.geometry.bounds.getNorthEast().lat()]),4!=a.length)return!1;if(a=new OpenLayers.Bounds(a),o.intersectsBounds(a)){var i=t.formatted_address.replace(r,'<b style="color:#0094D6;">$1</b>');n+='<li><a href="#'+a.toBBOX()+'">'+i+"</a></li>",s++}})),0!=s&&""!=n||(n="<li>"+lizDict["externalsearch.notfound"]+"</li>"),a("<li><b>Google</b><ul>"+n+"</ul></li>")}else a("<li><b>Google</b><ul><li>"+lizDict["externalsearch.notfound"]+"</li></ul></li>")}))}return!1})),!0)}lizMap.events.on({toolbarcreated:function(t){e=lizMap.config,r=lizMap.map;var a=e.options;"searches"in a&&a.searches.length>0?function(){var r=e.options;if("searches"in r&&0!=r.searches.length){for(var t=e.options.searches,a=!1,n=0,i=t.length;n<i;n++){var l,c=t[n];l="externalSearch"==c.type?o(c):s(c),a=a||l}a||($("#nominatim-search").remove(),$("#lizmap-search, #lizmap-search-close").remove())}}():($("#nominatim-search").remove(),$("#lizmap-search, #lizmap-search-close").remove())}})}();
//# sourceMappingURL=search.js.map