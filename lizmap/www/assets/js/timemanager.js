lizMap.events.on({uicreated:function(e){var t,a=lizMap.config,i=(lizMap.layers,!1),n=0;if(!("timemanagerLayers"in a))return-1;t=Object.keys(lizMap.config.timemanagerLayers).length,$("#timemanager-menu button.btn-timemanager-clear").click((function(){$("#button-timemanager").click()})),lizMap.events.on({minidockopened:function(e){"timemanager"==e.id&&(i||($("#timemanager-menu").show(),function(){var e=1/0,i=-1/0;for(l in a.timemanagerLayers)tmLayerConfig=a.timemanagerLayers[l],d(tmLayerConfig,(function(r,s){a.timemanagerLayers[l].min=r,a.timemanagerLayers[l].max=s;var c=moment(r).startOf(f.slice(0,-1)),g=moment(s).endOf(f.slice(0,-1));c&&c<e&&(e=c),g&&g>i&&(i=g),o=moment(e),u=moment(i),m=moment(o),$("#tmCurrentValue").html(D(o,f)),$("#tmNextValue").html(D(u,f)),M(),$("#tmSlider").slider({min:o.valueOf(),max:u.startOf(f.slice(0,-1)).valueOf(),value:o.valueOf()}),v((n+=1)==t)}));h()}(),i=!0))},minidockclosed:function(e){"timemanager"==e.id&&i&&(x(!0),$("#timemanager-menu").hide(),i=!1,function(){for(var e in lizMap.config.timemanagerLayers)lizMap.deactivateMaplayerFilter(e),lizMap.config.layers[e].request_params.filtertoken=null,lizMap.events.triggerEvent("layerFilterParamChanged",{featureType:e,filter:null,updateDrawing:!1})}())}}),$("#tmSlider").slider();var r,m,s=null,o=-1/0,u=1/0,c=a.options.tmTimeFrameSize,f=a.options.tmTimeFrameType,g=a.options.tmAnimationFrameLength;function d(e,t){var a=e.startAttribute;if(e.endAttribute&&""!=e.endAttribute&&e.endAttribute!=e.startAttribute&&(a+=","+e.endAttribute),"min_timestamp"in e&&e.min_timestamp&&""!=e.min_timestamp&&"max_timestamp"in e&&e.max_timestamp&&""!=e.max_timestamp){var i=e.min_timestamp,n=e.max_timestamp;return t(i,n),!0}var r={request:"getMinAndMaxValues",layerId:e.layerId,fieldname:a,filter:""};$.get(filterConfigData.url,r,(function(e){if(!e)return!1;if("status"in e&&"error"==e.status)return console.log(e.title+": "+e.detail),!1;var a=null,i=null;for(var n in e){var r=e[n];a=r.min,i=r.max}t(a,i)}),"json")}function p(e,t,a,i,n){var r=moment(e).startOf(a),m=i*c*n;return r.add(m,a),r}function v(e){if(!e)return!0;h()}function y(e,t,i){var n=[];if(t==e.min&&i==e.max)return a.timemanagerLayers[l].filter=null,!0;var r=e.startAttribute,m=e.endAttribute,s=e.attributeResolution;if(t&&Date.parse(t)){var o='( "'+r+"\" >= '"+D(t,s)+"'";m&&""!=m&&m!=r&&(o+=' OR  "'+m+"\" >= '"+D(t,s)+"'"),o+=" )",n.push(o)}else t=null;i&&Date.parse(i)?(o='( "'+r+"\" <= '"+D(i,s)+"'",m&&""!=m&&m!=r&&(o+=' OR  "'+m+"\" <= '"+D(i,s)+"'"),o+=" )",n.push(o)):i=null;var u=null;n.length&&(u=" ( ",u+=n.join(" AND "),u+=" ) "),a.timemanagerLayers[l].data={min_date:t,max_date:i},a.timemanagerLayers[l].filter=u}function Y(){var e=p(m,0,f,1,1);e.startOf(f.slice(0,-1))<=u.startOf(f.slice(0,-1))?b(e,p(m,0,f,2,1)):(x(!0),h())}function M(){var e=$("#tmCurrentValue").text()==$("#tmNextValue").text();$("#tmNextValue").toggle(!e),$("#tmNextValue").prev("span").toggle(!e)}function b(e,t){!function(e,t){for(l in t.subtract(1,"milliseconds"),a.timemanagerLayers)y(a.timemanagerLayers[l],e,t),s=a.timemanagerLayers[l].filter,a.timemanagerLayers[l].filter=s,lizMap.triggerLayerFilter(l,s)}(e,t),m=moment(e),$("#tmCurrentValue").html(D(m,f)),$("#tmNextValue").html(D(moment(t),f)),M(),$("#tmSlider").slider("option","value",m.valueOf())}function h(){var e=$("#tmSlider").slider("option","value"),t=moment(e);b(t=t.startOf(f.slice(0,-1)),p(t,0,f,1,1))}function x(e){if(window.clearInterval(r),r=null,$("#tmTogglePlay").html(lizDict["timemanager.toolbar.play"]),!0===e){m=moment(o),$("#tmCurrentValue").html(D(m,f)),$("#tmSlider").slider("option","value",m.valueOf());var t=p(m,0,f,1,1);$("#tmNextValue").html(D(t,f)),M()}}function D(e,t){myDate=moment(e);var a=null;switch(t){case"milliseconds":case"seconds":a="YYYY-MM-DD HH:mm:ss";break;case"minutes":a="YYYY-MM-DD HH:mm:00";break;case"hours":a="YYYY-MM-DD HH:00";break;case"days":case"weeks":a="YYYY-MM-DD";break;case"months":a="YYYY-MM";break;case"years":a="YYYY"}return myDate.format(a)}g<1e3&&(g=1e3),$("#tmSlider").on("slide",(function(e,t){$("#tmSlider").slider("option","value")})),$("#tmSlider").on("slidestop",(function(e,t){h()})),$("#tmTogglePlay").click((function(){$(this).html()==lizDict["timemanager.toolbar.play"]?function(){r&&x(!0),$("#tmTogglePlay").html(lizDict["timemanager.toolbar.pause"]),m||(m=o);r=window.setInterval((function(){Y()}),g)}():x()})),$("#tmPrev").click((function(){var e;x(!1),(e=p(m,0,f,1,-1)).startOf(f.slice(0,-1))>=o.startOf(f.slice(0,-1))?b(e,moment(m)):(x(!0),h())})),$("#tmNext").click((function(){x(!1),Y()}))}});
//# sourceMappingURL=timemanager.js.map