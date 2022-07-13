var l=Object.defineProperty,m=Object.defineProperties;var c=Object.getOwnPropertyDescriptors;var o=Object.getOwnPropertySymbols;var u=Object.prototype.hasOwnProperty,d=Object.prototype.propertyIsEnumerable;var i=(e,t,s)=>t in e?l(e,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):e[t]=s,a=(e,t)=>{for(var s in t||(t={}))u.call(t,s)&&i(e,s,t[s]);if(o)for(var s of o(t))d.call(t,s)&&i(e,s,t[s]);return e},r=(e,t)=>m(e,c(t));import{a as _}from"./index.8900b7f9.js";import{C as S}from"./CommonSitemap.7f174e42.js";import{B as y}from"./Checkbox.5873a8d2.js";import{C as g}from"./Card.f0350b06.js";import{C as f}from"./PostTypeOptions.03448be9.js";import{C as x}from"./SettingsRow.eb71f07b.js";import{S as v}from"./External.8868c638.js";import{n as h}from"./vueComponentNormalizer.87056a83.js";import"./default-i18n.abde8d59.js";import"./isArrayLikeObject.a4a9229a.js";import"./Checkmark.e7547654.js";import"./Tooltip.3ec20ff5.js";import"./_commonjsHelpers.f40d732e.js";import"./index.652636d3.js";import"./client.94d919c5.js";import"./constants.7cd698f2.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";import"./HighlightToggle.47bdd2a8.js";import"./Radio.99a9886d.js";import"./Index.476ddbfd.js";import"./Row.13b6f3f1.js";var T=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"aioseo-rss-sitemap"},[s("core-card",{attrs:{slug:"rssSitemap","header-text":e.strings.rss}},[s("div",{staticClass:"aioseo-settings-row aioseo-section-description"},[e._v(" "+e._s(e.strings.description)+" "),s("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"rssSitemaps",!0))}})]),s("core-settings-row",{attrs:{name:e.strings.enableSitemap},scopedSlots:e._u([{key:"content",fn:function(){return[s("base-toggle",{model:{value:e.options.sitemap.rss.enable,callback:function(n){e.$set(e.options.sitemap.rss,"enable",n)},expression:"options.sitemap.rss.enable"}})]},proxy:!0}])}),e.options.sitemap.rss.enable?s("core-settings-row",{attrs:{name:e.$constants.GLOBAL_STRINGS.preview},scopedSlots:e._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-sitemap-preview"},[s("base-button",{attrs:{size:"medium",type:"blue",tag:"a",href:e.$aioseo.urls.rssSitemapUrl,target:"_blank"}},[s("svg-external"),e._v(" "+e._s(e.strings.openSitemap)+" ")],1)],1),s("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.noIndexDisplayed)+" "),s("br"),e._v(" "+e._s(e.strings.doYou404)+" "),s("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"blankSitemap",!0))}})])]},proxy:!0}],null,!1,1349901811)}):e._e()],1),e.options.sitemap.rss.enable?s("core-card",{attrs:{slug:"rssSitemapSettings","header-text":e.strings.sitemapSettings}},[s("core-settings-row",{attrs:{name:e.strings.linksPerSitemap},scopedSlots:e._u([{key:"content",fn:function(){return[s("base-input",{staticClass:"aioseo-links-per-site",attrs:{type:"number",size:"medium",min:1,max:5e4},on:{keyup:e.validateLinksPerIndex},model:{value:e.options.sitemap.rss.linksPerIndex,callback:function(n){e.$set(e.options.sitemap.rss,"linksPerIndex",n)},expression:"options.sitemap.rss.linksPerIndex"}}),s("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.maxLinks)+" "),s("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"maxLinksRss",!0))}})])]},proxy:!0}],null,!1,266830765)}),s("core-settings-row",{attrs:{name:e.strings.postTypes},scopedSlots:e._u([{key:"content",fn:function(){return[s("base-checkbox",{attrs:{size:"medium"},model:{value:e.options.sitemap.rss.postTypes.all,callback:function(n){e.$set(e.options.sitemap.rss.postTypes,"all",n)},expression:"options.sitemap.rss.postTypes.all"}},[e._v(" "+e._s(e.strings.includeAllPostTypes)+" ")]),e.options.sitemap.rss.postTypes.all?e._e():s("core-post-type-options",{attrs:{options:e.options.sitemap.rss,type:"postTypes",excluded:e.getExcludedPostTypes}}),s("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.selectPostTypes)+" "),s("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"selectPostTypesRss",!0))}})])]},proxy:!0}],null,!1,1249404784)})],1):e._e()],1)},b=[];const k={components:{BaseCheckbox:y,CoreCard:g,CorePostTypeOptions:f,CoreSettingsRow:x,SvgExternal:v},mixins:[S],data(){return{pagePostOptions:[],strings:{rss:"RSS Sitemap",description:"This option will generate a separate RSS Sitemap which can be submitted to Google, Bing and any other search engines that support this type of sitemap. The RSS Sitemap contains an RSS feed of the latest updates to your site content. It is not a full sitemap of all your content.",enableSitemap:"Enable Sitemap",sitemapSettings:"Sitemap Settings",enableSitemapIndexes:"Enable Sitemap Indexes",sitemapIndexes:"Organize sitemap entries into distinct files in your sitemap. We recommend you enable this setting if your sitemap contains more than 1,000 URLs.",linksPerSitemap:"Number of Posts",noIndexDisplayed:"Noindexed content will not be displayed in your sitemap.",doYou404:"Do you get a blank sitemap or 404 error?",openSitemap:"Open RSS Sitemap",maxLinks:"Allows you to specify the maximum number of posts for the RSS Sitemap. We recommend an amount of 50 posts.",automaticallyPingSearchEngines:"Automatically Ping Search Engines",postTypes:"Post Types",taxonomies:"Taxonomies",dateArchiveSitemap:"Date Archive Sitemap",includeDateArchives:"Include Date Archives in your sitemap.",authorSitemap:"Author Sitemap",includeAuthorArchives:"Include Author Archives in your sitemap.",includeAllPostTypes:"Include All Post Types",selectPostTypes:"Select which Post Types appear in your sitemap.",includeAllTaxonomies:"Include All Taxonomies",selectTaxonomies:"Select which Taxonomies appear in your sitemap."}}},computed:r(a({},_(["options"])),{getExcludedPostTypes(){return["attachment"]}})},p={};var P=h(k,T,b,!1,L,null,null,null);function L(e){for(let t in p)this[t]=p[t]}var Q=function(){return P.exports}();export{Q as default};
