import{v as a,c as h,C as f,l as n,b as c,o as d,x as _,t as g,a as y,k as R,Y as C}from"./js/runtime-dom.esm-bundler.CWn9hmRK.js";import{l as w}from"./js/index.B287AVaz.js";import{l as A}from"./js/index.vo0_cz49.js";import{u as k,C as S,l as v}from"./js/links.w575jfOL.js";/* empty css                */import{a as x}from"./js/addons.CJ8lJt9v.js";import{C as E}from"./js/Index.Sx0bRfob.js";import{C as L}from"./js/Index.APm3Im3B.js";import{_ as b}from"./js/_plugin-vue_export-helper.BN1snXvA.js";import{i as H}from"./js/isEmpty.CR7CQK4F.js";import"./js/default-i18n.DXRQgkn2.js";import"./js/constants.Ct0G2N2t.js";import"./js/Caret.B8YmKvEY.js";import"./js/helpers.CXsRrhc8.js";import"./js/upperFirst.yVnsg4QL.js";import"./js/_stringToArray.DnK4tKcY.js";import"./js/toString.zLSwYOtv.js";import"./js/JsonValues.D25FTfEu.js";import"./js/ProBadge.CeTQI5Mm.js";import"./js/External.BpvgQygW.js";import"./js/escapeRegExp.D4cfHJVO.js";import"./js/Exclamation.SlOpu0r6.js";import"./js/Checkbox.dOnSakMX.js";import"./js/Checkmark.CZaciSER.js";import"./js/Gear.BX0imWnw.js";import"./js/Slide.DwUOEoDg.js";import"./js/Date.DuGsSEmw.js";import"./js/DatePicker.EC4dtefp.js";import"./js/Calendar.Ch9ZELBO.js";import"./js/pick.E0dwuk96.js";import"./js/_baseSet.rYV3oc6X.js";import"./js/_getTag.BWQxgJie.js";import"./js/debounce.CMPzYXJX.js";import"./js/toNumber.BAPajc32.js";import"./js/_baseTrim.BYZhh0MR.js";import"./js/isEqual.DkU1ezAe.js";import"./js/_baseIsEqual.MNbeg0L2.js";import"./js/Tooltip.u2Cos2P_.js";import"./js/Plus.B44fv6Ya.js";const $={setup(){return{rootStore:k()}},components:{CoreModal:E,CoreAddRedirection:L},data(){return{addons:x,urls:[],display:!1,target:null,loading:!1,strings:{modalHeader:this.$t.__("Add a Redirect",this.$td),redirectAdded:this.$t.sprintf(this.$t.__('%2$sYour redirect was added and you may edit it <a href="%1$s" target="_blank">here</a>.%3$s',this.$td),this.rootStore.aioseo.urls.aio.redirects,"<strong>","</strong>")},watchClasses:["aioseo-redirects-slug-changed","aioseo-redirects-trashed-post"]}},computed:{classSelectors(){return"."+this.watchClasses.join(", .")}},methods:{reload(){var e,o;this.display=!1;const t=(o=(e=this.target)==null?void 0:e.parentElement)==null?void 0:o.parentElement;if(t&&(t.classList.contains("components-notice__content")||t.classList.contains("notice"))){t.innerHTML="<p>"+this.strings.redirectAdded+"</p>";return}this.target.outerHTML=this.strings.redirectAdded},loadRedirect(t){this.loading=!0,S.get(this.$links.restUrl("redirects/manual-redirects/"+t)).then(e=>{this.urls=e.body.redirects,this.loading=!1}).catch(e=>console.error("Redirect modal failed to load the redirect data.",e))},preloadRedirect(){const t=document.querySelector(this.classSelectors);if(t){const e=this.getElementRedirectHash(t);if(!e)return;this.loadRedirect(e)}},watchClicks(){document.body.onclick=t=>{var o;if(!((o=t.target)!=null&&o.classList))return;let e=!1;this.watchClasses.forEach(i=>{t.target.classList.contains(i)&&(e=!0)}),e&&(t.preventDefault(),this.target=t.target,this.display=!0,H(this.urls)&&this.loadRedirect(this.getElementRedirectHash(this.target)))}},getElementRedirectHash(t){return new URLSearchParams(t.href).get("aioseo-manual-urls")}},async created(){this.preloadRedirect(),this.watchClicks(),window.aioseoBus.$on("wp-core-notice-created",()=>{this.$nextTick(()=>{this.preloadRedirect()})})}},B={key:0,class:"aioseo-redirects-add-redirect-standalone"},T={class:"bd"};function N(t,e,o,i,r,p){const m=a("core-add-redirection"),u=a("core-modal");return r.addons.isActive("aioseo-redirects")?(d(),h("div",B,[f(u,{show:r.display,classes:["aioseo-redirects"],onClose:e[0]||(e[0]=U=>r.display=!1),"allow-overflow":""},{headerTitle:n(()=>[_(g(r.strings.modalHeader),1)]),body:n(()=>[y("div",T,[r.loading?c("",!0):(d(),R(m,{key:0,urls:r.urls,target:r.urls[0].target?r.urls[0].target:"/",disableSource:!0,onAddedRedirect:p.reload},null,8,["urls","target","onAddedRedirect"]))])]),_:1},8,["show"])])):c("",!0)}const P=b($,[["render",N]]),l=document.createElement("div");l.id="aioseo-redirects-add-redirect-standalone";document.body.appendChild(l);let s=C({...P,name:"Standalone/Redirects/AddRedirect"});s=w(s);s=A(s);v(s);s.mount("#aioseo-redirects-add-redirect-standalone");