var immer_c79c10d09a9a2ddee5ce=function(R){var p={};function f(u){if(p[u])return p[u].exports;var d=p[u]={i:u,l:!1,exports:{}};return R[u].call(d.exports,d,d.exports,f),d.l=!0,d.exports}return f.m=R,f.c=p,f.d=function(u,d,P){f.o(u,d)||Object.defineProperty(u,d,{enumerable:!0,get:P})},f.r=function(u){typeof Symbol!="undefined"&&Symbol.toStringTag&&Object.defineProperty(u,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(u,"__esModule",{value:!0})},f.t=function(u,d){if(d&1&&(u=f(u)),d&8||d&4&&typeof u=="object"&&u&&u.__esModule)return u;var P=Object.create(null);if(f.r(P),Object.defineProperty(P,"default",{enumerable:!0,value:u}),d&2&&typeof u!="string")for(var T in u)f.d(P,T,function(v){return u[v]}.bind(null,T));return P},f.n=function(u){var d=u&&u.__esModule?function(){return u.default}:function(){return u};return f.d(d,"a",d),d},f.o=function(u,d){return Object.prototype.hasOwnProperty.call(u,d)},f.p="",f(f.s=0)}([function(R,p,f){R.exports=f},function(R,p,f){"use strict";f.r(p),function(u){f.d(p,"Immer",function(){return j}),f.d(p,"applyPatches",function(){return Ee}),f.d(p,"createDraft",function(){return Se}),f.d(p,"finishDraft",function(){return Fe}),f.d(p,"immerable",function(){return T}),f.d(p,"isDraft",function(){return I}),f.d(p,"isDraftable",function(){return m}),f.d(p,"nothing",function(){return P}),f.d(p,"original",function(){return E}),f.d(p,"produce",function(){return ie}),f.d(p,"produceWithPatches",function(){return je}),f.d(p,"setAutoFreeze",function(){return Te}),f.d(p,"setUseProxies",function(){return De});var d,P=typeof Symbol!="undefined"?Symbol("immer-nothing"):(d={},d["immer-nothing"]=!0,d),T=typeof Symbol!="undefined"&&Symbol.for?Symbol.for("immer-draftable"):"__$immer_draftable",v=typeof Symbol!="undefined"&&Symbol.for?Symbol.for("immer-state"):"__$immer_state";function I(e){return!!e&&!!e[v]}function m(e){return e?x(e)||!!e[T]||!!e.constructor[T]:!1}function x(e){if(!e||typeof e!="object")return!1;if(Array.isArray(e))return!0;var r=Object.getPrototypeOf(e);return!r||r===Object.prototype}function E(e){if(e&&e[v])return e[v].base}var C=Object.assign||function(r,n){for(var t in n)y(n,t)&&(r[t]=n[t]);return r},$=typeof Reflect!="undefined"&&Reflect.ownKeys?Reflect.ownKeys:typeof Object.getOwnPropertySymbols!="undefined"?function(e){return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))}:Object.getOwnPropertyNames;function M(e,r){if(r===void 0&&(r=!1),Array.isArray(e))return e.slice();var n=Object.create(Object.getPrototypeOf(e));return $(e).forEach(function(t){if(t!==v){var o=Object.getOwnPropertyDescriptor(e,t),i=o.value;if(o.get){if(!r)throw new Error("Immer drafts cannot have computed properties");i=o.get.call(e)}o.enumerable?n[t]=i:Object.defineProperty(n,t,{value:i,writable:!0,configurable:!0})}}),n}function S(e,r){if(Array.isArray(e))for(var n=0;n<e.length;n++)r(n,e[n],e);else $(e).forEach(function(t){return r(t,e[t],e)})}function A(e,r){var n=Object.getOwnPropertyDescriptor(e,r);return!!n&&n.enumerable}function y(e,r){return Object.prototype.hasOwnProperty.call(e,r)}function b(e,r){return e===r?e!==0||1/e==1/r:e!==e&&r!==r}function D(e){if(!m(e))return e;if(Array.isArray(e))return e.map(D);var r=Object.create(Object.getPrototypeOf(e));for(var n in e)r[n]=D(e[n]);return r}var z=function(r){this.drafts=[],this.parent=r,this.canAutoFreeze=!0,this.patches=null};z.prototype.usePatches=function(r){r&&(this.patches=[],this.inversePatches=[],this.patchListener=r)},z.prototype.revoke=function(){this.leave(),this.drafts.forEach(oe),this.drafts=null},z.prototype.leave=function(){this===z.current&&(z.current=this.parent)},z.current=null,z.enter=function(){return this.current=new z(this.current)};function oe(e){e[v].revoke()}var G={};function fe(e,r,n){e.drafts.forEach(function(t){t[v].finalizing=!0}),n?I(r)&&r[v].scope===e&&ee(e.drafts):(e.patches&&X(e.drafts[0]),ee(e.drafts))}function V(e,r){var n=Array.isArray(e),t=k(e);S(t,function(c){se(t,c,n||A(e,c))});var o=r?r.scope:z.current,i={scope:o,modified:!1,finalizing:!1,finalized:!1,assigned:{},parent:r,base:e,draft:t,copy:null,revoke:ae,revoked:!1};return de(t,v,i),o.drafts.push(t),t}function ae(){this.revoked=!0}function B(e){return e.copy||e.base}function J(e,r){var n=e[v];if(n&&!n.finalizing){n.finalizing=!0;var t=e[r];return n.finalizing=!1,t}return e[r]}function ue(e,r){_(e);var n=J(B(e),r);return e.finalizing?n:n===J(e.base,r)&&m(n)?(q(e),e.copy[r]=V(n,e)):n}function ce(e,r,n){if(_(e),e.assigned[r]=!0,!e.modified){if(b(n,J(B(e),r)))return;N(e),q(e)}e.copy[r]=n}function N(e){e.modified||(e.modified=!0,e.parent&&N(e.parent))}function q(e){e.copy||(e.copy=k(e.base))}function k(e){var r=e&&e[v];if(r){r.finalizing=!0;var n=M(r.draft,!0);return r.finalizing=!1,n}return M(e)}function se(e,r,n){var t=G[r];t?t.enumerable=n:G[r]=t={configurable:!0,enumerable:n,get:function(){return ue(this[v],r)},set:function(i){ce(this[v],r,i)}},Object.defineProperty(e,r,t)}function _(e){if(e.revoked===!0)throw new Error("Cannot use a proxy that has been revoked. Did you pass an object from inside an immer function to an async process? "+JSON.stringify(B(e)))}function ee(e){for(var r=e.length-1;r>=0;r--){var n=e[r][v];n.modified||(Array.isArray(n.base)?re(n)&&N(n):le(n)&&N(n))}}function X(e){if(!(!e||typeof e!="object")){var r=e[v];if(!!r){var n=r.base,t=r.draft,o=r.assigned;if(!Array.isArray(e))Object.keys(t).forEach(function(a){n[a]===void 0&&!y(n,a)?(o[a]=!0,N(r)):o[a]||X(t[a])}),Object.keys(n).forEach(function(a){t[a]===void 0&&!y(t,a)&&(o[a]=!1,N(r))});else if(re(r)){if(N(r),o.length=!0,t.length<n.length)for(var i=t.length;i<n.length;i++)o[i]=!1;else for(var c=n.length;c<t.length;c++)o[c]=!0;for(var s=0;s<t.length;s++)o[s]===void 0&&X(t[s])}}}}function le(e){for(var r=e.base,n=e.draft,t=Object.keys(n),o=t.length-1;o>=0;o--){var i=t[o],c=r[i];if(c===void 0&&!y(r,i))return!0;var s=n[i],a=s&&s[v];if(a?a.base!==c:!b(s,c))return!0}return t.length!==Object.keys(r).length}function re(e){var r=e.draft;if(r.length!==e.base.length)return!0;var n=Object.getOwnPropertyDescriptor(r,r.length-1);return!!(n&&!n.get)}function de(e,r,n){Object.defineProperty(e,r,{value:n,enumerable:!1,writable:!0})}var he=Object.freeze({willFinalize:fe,createProxy:V});function ye(){}function ne(e,r){var n=r?r.scope:z.current,t={scope:n,modified:!1,finalized:!1,assigned:{},parent:r,base:e,draft:null,drafts:{},copy:null,revoke:null},o=Array.isArray(e)?Proxy.revocable([t],K):Proxy.revocable(t,W),i=o.revoke,c=o.proxy;return t.draft=c,t.revoke=i,n.drafts.push(c),c}var W={get:ve,has:function(r,n){return n in U(r)},ownKeys:function(r){return Reflect.ownKeys(U(r))},set:ge,deleteProperty:pe,getOwnPropertyDescriptor:me,defineProperty:function(){throw new Error("Object.defineProperty() cannot be used on an Immer draft")},getPrototypeOf:function(r){return Object.getPrototypeOf(r.base)},setPrototypeOf:function(){throw new Error("Object.setPrototypeOf() cannot be used on an Immer draft")}},K={};S(W,function(e,r){K[e]=function(){return arguments[0]=arguments[0][0],r.apply(this,arguments)}}),K.deleteProperty=function(e,r){if(isNaN(parseInt(r)))throw new Error("Immer only supports deleting array indices");return W.deleteProperty.call(this,e[0],r)},K.set=function(e,r,n){if(r!=="length"&&isNaN(parseInt(r)))throw new Error("Immer only supports setting array indices and the 'length' property");return W.set.call(this,e[0],r,n)};function U(e){return e.copy||e.base}function Y(e,r){var n=e[v],t=Reflect.getOwnPropertyDescriptor(n?U(n):e,r);return t&&t.value}function ve(e,r){if(r===v)return e;var n=e.drafts;if(!e.modified&&y(n,r))return n[r];var t=U(e)[r];if(e.finalized||!m(t))return t;if(e.modified){if(t!==Y(e.base,r))return t;n=e.copy}return n[r]=ne(t,e)}function ge(e,r,n){if(!e.modified){var t=Y(e.base,r),o=n?b(t,n)||n===e.drafts[r]:b(t,n)&&r in e.base;if(o)return!0;Z(e)}return e.assigned[r]=!0,e.copy[r]=n,!0}function pe(e,r){return Y(e.base,r)!==void 0||r in e.base?(e.assigned[r]=!1,Z(e)):e.assigned[r]&&delete e.assigned[r],e.copy&&delete e.copy[r],!0}function me(e,r){var n=U(e),t=Reflect.getOwnPropertyDescriptor(n,r);return t&&(t.writable=!0,t.configurable=!Array.isArray(n)||r!=="length"),t}function Z(e){e.modified||(e.modified=!0,e.copy=C(M(e.base),e.drafts),e.drafts=null,e.parent&&Z(e.parent))}var Pe=Object.freeze({willFinalize:ye,createProxy:ne});function be(e,r,n,t){Array.isArray(e.base)?Oe(e,r,n,t):we(e,r,n,t)}function Oe(e,r,n,t){var o,i,c=e.base,s=e.copy,a=e.assigned;s.length<c.length&&(o=[s,c],c=o[0],s=o[1],i=[t,n],n=i[0],t=i[1]);for(var h=s.length-c.length,l=0;c[l]===s[l]&&l<c.length;)++l;for(var g=c.length;g>l&&c[g-1]===s[g+h-1];)--g;for(var O=l;O<g;++O)if(a[O]&&s[O]!==c[O]){var L=r.concat([O]);n.push({op:"replace",path:L,value:s[O]}),t.push({op:"replace",path:L,value:c[O]})}for(var H=n.length,F=g+h-1;F>=g;--F){var Q=r.concat([F]);n[H+F-g]={op:"add",path:Q,value:s[F]},t.push({op:"remove",path:Q})}}function we(e,r,n,t){var o=e.base,i=e.copy;S(e.assigned,function(c,s){var a=o[c],h=i[c],l=s?c in o?"replace":"add":"remove";if(!(a===h&&l==="replace")){var g=r.concat(c);n.push(l==="remove"?{op:l,path:g}:{op:l,path:g,value:h}),t.push(l==="add"?{op:"remove",path:g}:l==="remove"?{op:"add",path:g,value:a}:{op:"replace",path:g,value:a})}})}var te=function(e,r){for(var n=0,t=r;n<t.length;n+=1){var o=t[n],i=o.path,c=o.op,s=D(o.value);if(!i.length)throw new Error("Illegal state");for(var a=e,h=0;h<i.length-1;h++)if(a=a[i[h]],!a||typeof a!="object")throw new Error("Cannot apply patch, path doesn't resolve: "+i.join("/"));var l=i[i.length-1];switch(c){case"replace":a[l]=s;break;case"add":Array.isArray(a)?a.splice(l,0,s):a[l]=s;break;case"remove":Array.isArray(a)?a.splice(l,1):delete a[l];break;default:throw new Error("Unsupported patch operation: "+c)}}return e};function Ae(){}var ze={useProxies:typeof Proxy!="undefined"&&typeof Reflect!="undefined",autoFreeze:typeof u!="undefined"?!1:Ae.name==="verifyMinified",onAssign:null,onDelete:null,onCopy:null},j=function(r){C(this,ze,r),this.setUseProxies(this.useProxies),this.produce=this.produce.bind(this)};j.prototype.produce=function(r,n,t){var o=this;if(typeof r=="function"&&typeof n!="function"){var i=n;n=r;var c=this;return function(O){var L=this;O===void 0&&(O=i);for(var H=[],F=arguments.length-1;F-- >0;)H[F]=arguments[F+1];return c.produce(O,function(Q){return n.call.apply(n,[L,Q].concat(H))})}}{if(typeof n!="function")throw new Error("The first or second argument to `produce` must be a function");if(t!==void 0&&typeof t!="function")throw new Error("The third argument to `produce` must be a function or undefined")}var s;if(m(r)){var a=z.enter(),h=this.createProxy(r),l=!0;try{s=n(h),l=!1}finally{l?a.revoke():a.leave()}return s instanceof Promise?s.then(function(g){return a.usePatches(t),o.processResult(g,a)},function(g){throw a.revoke(),g}):(a.usePatches(t),this.processResult(s,a))}else return s=n(r),s===void 0?r:s!==P?s:void 0},j.prototype.produceWithPatches=function(r,n,t){var o=this;if(typeof r=="function")return function(a){for(var h=[],l=arguments.length-1;l-- >0;)h[l]=arguments[l+1];return o.produceWithPatches(a,function(g){return r.apply(void 0,[g].concat(h))})};if(t)throw new Error("A patch listener cannot be passed to produceWithPatches");var i,c,s=this.produce(r,n,function(a,h){i=a,c=h});return[s,i,c]},j.prototype.createDraft=function(r){if(!m(r))throw new Error("First argument to `createDraft` must be a plain object, an array, or an immerable object");var n=z.enter(),t=this.createProxy(r);return t[v].isManual=!0,n.leave(),t},j.prototype.finishDraft=function(r,n){var t=r&&r[v];if(!t||!t.isManual)throw new Error("First argument to `finishDraft` must be a draft returned by `createDraft`");if(t.finalized)throw new Error("The given draft is already finalized");var o=t.scope;return o.usePatches(n),this.processResult(void 0,o)},j.prototype.setAutoFreeze=function(r){this.autoFreeze=r},j.prototype.setUseProxies=function(r){this.useProxies=r,C(this,r?Pe:he)},j.prototype.applyPatches=function(r,n){var t;for(t=n.length-1;t>=0;t--){var o=n[t];if(o.path.length===0&&o.op==="replace"){r=o.value;break}}return I(r)?te(r,n):this.produce(r,function(i){return te(i,n.slice(t+1))})},j.prototype.processResult=function(r,n){var t=n.drafts[0],o=r!==void 0&&r!==t;if(this.willFinalize(n,r,o),o){if(t[v].modified)throw n.revoke(),new Error("An immer producer returned a new value *and* modified its draft. Either return a new value *or* modify the draft.");m(r)&&(r=this.finalize(r,null,n)),n.patches&&(n.patches.push({op:"replace",path:[],value:r}),n.inversePatches.push({op:"replace",path:[],value:t[v].base}))}else r=this.finalize(t,[],n);return n.revoke(),n.patches&&n.patchListener(n.patches,n.inversePatches),r!==P?r:void 0},j.prototype.finalize=function(r,n,t){var o=this,i=r[v];if(!i)return Object.isFrozen(r)?r:this.finalizeTree(r,null,t);if(i.scope!==t)return r;if(!i.modified)return i.base;if(!i.finalized){if(i.finalized=!0,this.finalizeTree(i.draft,n,t),this.onDelete)if(this.useProxies){var c=i.assigned;for(var s in c)c[s]||this.onDelete(i,s)}else{var a=i.base,h=i.copy;S(a,function(l){y(h,l)||o.onDelete(i,l)})}this.onCopy&&this.onCopy(i),this.autoFreeze&&t.canAutoFreeze&&Object.freeze(i.copy),n&&t.patches&&be(i,n,t.patches,t.inversePatches)}return i.copy},j.prototype.finalizeTree=function(r,n,t){var o=this,i=r[v];i&&(this.useProxies||(i.copy=M(i.draft,!0)),r=i.copy);var c=!!n&&!!t.patches,s=function(a,h,l){if(h===l)throw Error("Immer forbids circular references");var g=!!i&&l===r;if(I(h)){var O=g&&c&&!i.assigned[a]?n.concat(a):null;if(h=o.finalize(h,O,t),I(h)&&(t.canAutoFreeze=!1),Array.isArray(l)||A(l,a)?l[a]=h:Object.defineProperty(l,a,{value:h}),g&&h===i.base[a])return}else{if(g&&b(h,i.base[a]))return;m(h)&&!Object.isFrozen(h)&&S(h,s)}g&&o.onAssign&&o.onAssign(i,a,h)};return S(r,s),r};var w=new j,ie=w.produce,je=w.produceWithPatches.bind(w),Te=w.setAutoFreeze.bind(w),De=w.setUseProxies.bind(w),Ee=w.applyPatches.bind(w),Se=w.createDraft.bind(w),Fe=w.finishDraft.bind(w);p.default=ie}.call(this,f(2))},function(R,p){var f=R.exports={},u,d;function P(){throw new Error("setTimeout has not been defined")}function T(){throw new Error("clearTimeout has not been defined")}(function(){try{typeof setTimeout=="function"?u=setTimeout:u=P}catch(y){u=P}try{typeof clearTimeout=="function"?d=clearTimeout:d=T}catch(y){d=T}})();function v(y){if(u===setTimeout)return setTimeout(y,0);if((u===P||!u)&&setTimeout)return u=setTimeout,setTimeout(y,0);try{return u(y,0)}catch(b){try{return u.call(null,y,0)}catch(D){return u.call(this,y,0)}}}function I(y){if(d===clearTimeout)return clearTimeout(y);if((d===T||!d)&&clearTimeout)return d=clearTimeout,clearTimeout(y);try{return d(y)}catch(b){try{return d.call(null,y)}catch(D){return d.call(this,y)}}}var m=[],x=!1,E,C=-1;function $(){!x||!E||(x=!1,E.length?m=E.concat(m):C=-1,m.length&&M())}function M(){if(!x){var y=v($);x=!0;for(var b=m.length;b;){for(E=m,m=[];++C<b;)E&&E[C].run();C=-1,b=m.length}E=null,x=!1,I(y)}}f.nextTick=function(y){var b=new Array(arguments.length-1);if(arguments.length>1)for(var D=1;D<arguments.length;D++)b[D-1]=arguments[D];m.push(new S(y,b)),m.length===1&&!x&&v(M)};function S(y,b){this.fun=y,this.array=b}S.prototype.run=function(){this.fun.apply(null,this.array)},f.title="browser",f.browser=!0,f.env={},f.argv=[],f.version="",f.versions={};function A(){}f.on=A,f.addListener=A,f.once=A,f.off=A,f.removeListener=A,f.removeAllListeners=A,f.emit=A,f.prependListener=A,f.prependOnceListener=A,f.listeners=function(y){return[]},f.binding=function(y){throw new Error("process.binding is not supported")},f.cwd=function(){return"/"},f.chdir=function(y){throw new Error("process.chdir is not supported")},f.umask=function(){return 0}}]);
