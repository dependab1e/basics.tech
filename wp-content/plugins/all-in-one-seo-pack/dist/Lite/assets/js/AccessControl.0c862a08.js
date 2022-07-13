var _=Object.defineProperty;var n=Object.getOwnPropertySymbols;var p=Object.prototype.hasOwnProperty,m=Object.prototype.propertyIsEnumerable;var s=(t,o,r)=>o in t?_(t,o,{enumerable:!0,configurable:!0,writable:!0,value:r}):t[o]=r,l=(t,o)=>{for(var r in o||(o={}))p.call(o,r)&&s(t,r,o[r]);if(n)for(var r of n(o))m.call(o,r)&&s(t,r,o[r]);return t};import{b as f}from"./index.8900b7f9.js";import{A as d}from"./WebmasterTools.7e793510.js";import{C as g}from"./Blur.8490ecd2.js";import{C as v}from"./Card.f0350b06.js";import{C}from"./ProBadge.7c0de2f7.js";import{C as y}from"./SettingsRow.eb71f07b.js";import{C as x}from"./Index.abdfd585.js";import{n as u}from"./vueComponentNormalizer.87056a83.js";import"./default-i18n.abde8d59.js";import"./isArrayLikeObject.a4a9229a.js";import"./ToolsSettings.a9d9524e.js";import"./context.04ada340.js";import"./MetaTag.ceacc375.js";import"./Tooltip.3ec20ff5.js";import"./_commonjsHelpers.f40d732e.js";import"./index.652636d3.js";import"./client.94d919c5.js";import"./constants.7cd698f2.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";import"./Row.13b6f3f1.js";import"./Index.476ddbfd.js";var R=function(){var t=this,o=t.$createElement,r=t._self._c||o;return r("div",{staticClass:"aioseo-access-control-lite"},[r("core-card",{attrs:{slug:"accessControl"},scopedSlots:t._u([{key:"header",fn:function(){return[t._v(" "+t._s(t.strings.accessControl)+" "),r("core-pro-badge")]},proxy:!0},{key:"tooltip",fn:function(){return[t._v(" "+t._s(t.strings.tooltip)+" ")]},proxy:!0}])},[r("core-blur",[t._l(t.getRoles,function(e){return[r("core-settings-row",{key:e.name,attrs:{name:e.label},scopedSlots:t._u([{key:"content",fn:function(){return[r("div",{staticClass:"toggle"},[r("base-toggle",{attrs:{disabled:!0,value:!0}},[t._v(" "+t._s(t.strings.useDefaultSettings)+" ")])],1)]},proxy:!0}],null,!0)})]})],2),r("cta",{attrs:{"feature-list":[t.strings.granularControl,t.strings.wpRoles,t.strings.seoManagerRole,t.strings.seoEditorRole],"cta-link":t.$links.getPricingUrl("access-control","access-control-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("access-control",null,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.tooltip)+" ")]},proxy:!0}])})],1)],1)},$=[];const A={components:{CoreBlur:g,CoreCard:v,CoreProBadge:C,CoreSettingsRow:y,Cta:x},mixins:[d],data(){return{strings:{wpRoles:"WP Roles (Editor, Author)",seoManagerRole:"SEO Manager Role",seoEditorRole:"SEO Editor Role",defaultSettings:"Default settings that just work",granularControl:"Granular controls per role",ctaButtonText:"Upgrade to Pro and Unlock Access Control",ctaHeader:this.$t.sprintf("Access Control is only available for licensed %1$s %2$s users.","AIOSEO","Pro")}}}},c={};var h=u(A,R,$,!1,k,null,null,null);function k(t){for(let o in c)this[o]=c[o]}var a=function(){return h.exports}(),S=function(){var t=this,o=t.$createElement,r=t._self._c||o;return r("div",{staticClass:"aioseo-access-control"},[t.isUnlicensed?t._e():r("access-control"),t.isUnlicensed?r("access-control-lite"):t._e()],1)},E=[];const U={components:{AccessControl:a,AccessControlLite:a},computed:l({},f(["isUnlicensed"]))},i={};var b=u(U,S,E,!1,P,null,null,null);function P(t){for(let o in i)this[o]=i[o]}var tt=function(){return b.exports}();export{tt as default};