(()=>{"use strict";const r=window.wp.blocks,i=window.wp.i18n;[{name:"gallery-grid",title:(0,i.__)("Gallery Grid","tvlr"),description:(0,i.__)("Arrange images in a grid.","tvlr"),icon:"grid-view",attributes:{namespace:"tvlr/group",className:"grid",layout:{type:"grid"}},scope:["block","inserter","transform"],isActive:r=>"grid"===r.layout?.type}].forEach((i=>{(0,r.registerBlockVariation)("core/gallery",i)})),[{name:"group-grid",title:(0,i.__)("Grid","tvlr"),description:(0,i.__)("Arrange blocks in a grid.","tvlr"),icon:"grid-view",attributes:{namespace:"tvlr/group",className:"grid",layout:{type:"grid"}},scope:["block","inserter","transform"],isActive:r=>"grid"===r.layout?.type}].forEach((i=>{(0,r.registerBlockVariation)("core/group",i)}))})();