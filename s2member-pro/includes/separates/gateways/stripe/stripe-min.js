jQuery(document).ready(function(c){var a=function(){if(window.StripeCheckout){clearInterval(d),b()}},d=setInterval(a,100);c.ajax({cache:true,dataType:"script",url:"https://checkout.stripe.com/checkout.js"});var b=function(){var C,l,w,p,s,v,B={"aria-required":"true"},i={"aria-required":"false"},o={"aria-required":"false",disabled:"disabled"},D={disabled:"disabled"},x=true,I,t,m,E,j,J,g,h,F,G,M,K,N,A,z,n,y,f,r,H,L,u,k,q;C=new Image(),C.src='<?php echo $vars["i"]; ?>/ajax-loader.gif';if(c("form.s2member-pro-stripe-cancellation-form").length>1||c("form.s2member-pro-stripe-registration-form").length>1||c("form.s2member-pro-stripe-update-form").length>1||c("form.s2member-pro-stripe-sp-checkout-form").length>1||c("form.s2member-pro-stripe-checkout-form").length>1){return alert("Detected more than one s2Member Pro Form.\n\nPlease use only ONE s2Member Pro Form Shortcode on each Post/Page. Attempting to serve more than one Pro Form on each Post/Page (even w/ DHTML) may result in unexpected/broken functionality.")}if((l=c("form#s2member-pro-stripe-cancellation-form")).length===1){L="div#s2member-pro-stripe-cancellation-form-captcha-section",u="div#s2member-pro-stripe-cancellation-form-submission-section",k=u+" button#s2member-pro-stripe-cancellation-submit";c(k).removeAttr("disabled"),ws_plugin__s2member_animateProcessing(c(k),"reset");l.on("submit",function(){var R=this,P="",O="",S="",Q=c(L+" input#recaptcha_response_field");c(":input",R).each(function(){var T=c.trim(c(this).attr("id")).replace(/---[0-9]+$/g,"");if(T&&(P=c.trim(c('label[for="'+T+'"]',R).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(O=ws_plugin__s2member_validationErrors(P,this,R)){S+=O+"\n\n"}}});if((S=c.trim(S))){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+S);return false}else{if(Q.length&&!Q.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}c(k).attr(D),ws_plugin__s2member_animateProcessing(c(k));return true})}else{if((p=c("form#s2member-pro-stripe-registration-form")).length===1){g="div#s2member-pro-stripe-registration-form-options-section",h=g+" select#s2member-pro-stripe-registration-options",F="div#s2member-pro-stripe-registration-form-description-section",K="div#s2member-pro-stripe-registration-form-registration-section",L="div#s2member-pro-stripe-registration-form-captcha-section",u="div#s2member-pro-stripe-registration-form-submission-section",k=u+" button#s2member-pro-stripe-registration-submit",q=u+" input#s2member-pro-stripe-registration-nonce";c(k).removeAttr("disabled"),ws_plugin__s2member_animateProcessing(c(k),"reset");if(!c(h+" option").length){c(g).hide(),c(F).show()}else{c(g).show(),c(F).hide(),c(h).on("change",function(){c(q).val("option"),p.attr("action",p.attr("action").replace(/#.*$/,"")+"#s2p-form"),p.submit()})}if(c(u+" input#s2member-pro-stripe-registration-names-not-required-or-not-possible").length){c(K+" > div#s2member-pro-stripe-registration-form-first-name-div").hide(),c(K+" > div#s2member-pro-stripe-registration-form-first-name-div :input").attr(o);c(K+" > div#s2member-pro-stripe-registration-form-last-name-div").hide(),c(K+" > div#s2member-pro-stripe-registration-form-last-name-div :input").attr(o)}if(c(u+" input#s2member-pro-stripe-registration-password-not-required-or-not-possible").length){c(K+" > div#s2member-pro-stripe-registration-form-password-div").hide(),c(K+" > div#s2member-pro-stripe-registration-form-password-div :input").attr(o)}c(K+" > div#s2member-pro-stripe-registration-form-password-div :input").on("keyup",function(){ws_plugin__s2member_passwordStrength(c(K+" input#s2member-pro-stripe-registration-username"),c(K+" input#s2member-pro-stripe-registration-password1"),c(K+" input#s2member-pro-stripe-registration-password2"),c(K+" div#s2member-pro-stripe-registration-form-password-strength"))});p.on("submit",function(){if(c.inArray(c(q).val(),["option"])===-1){var R=this,P="",O="",U="",Q=c(L+" input#recaptcha_response_field"),T=c(K+' input#s2member-pro-stripe-registration-password1[aria-required="true"]'),S=c(K+" input#s2member-pro-stripe-registration-password2");c(":input",R).each(function(){var V=c.trim(c(this).attr("id")).replace(/---[0-9]+$/g,"");if(V&&(P=c.trim(c('label[for="'+V+'"]',R).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(O=ws_plugin__s2member_validationErrors(P,this,R)){U+=O+"\n\n"}}});if((U=c.trim(U))){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+U);return false}else{if(T.length&&c.trim(T.val())!==c.trim(S.val())){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Passwords do not match up. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(T.length&&c.trim(T.val()).length<6){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Password MUST be at least 6 characters. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(Q.length&&!Q.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}}}c(h).attr(D)}c(k).attr(D),ws_plugin__s2member_animateProcessing(c(k));return true})}else{if((w=c("form#s2member-pro-stripe-update-form")).length===1){A="div#s2member-pro-stripe-update-form-billing-method-section",n=A+" button#s2member-pro-stripe-update-form-source-token-button",y=A+" div#s2member-pro-stripe-update-form-source-token-summary",H="div#s2member-pro-stripe-update-form-billing-address-section",L="div#s2member-pro-stripe-update-form-captcha-section",u="div#s2member-pro-stripe-update-form-submission-section",f=u+' input[name="'+ws_plugin__s2member_escjQAttr("s2member_pro_stripe_update[source_token]")+'"]',r=u+' input[name="'+ws_plugin__s2member_escjQAttr("s2member_pro_stripe_update[source_token_summary]")+'"]',k=u+" button#s2member-pro-stripe-update-submit";c(k).removeAttr("disabled"),ws_plugin__s2member_animateProcessing(c(k),"reset");z=function(P){var O=c(f).val();if(O){c(A).show(),c(A+" > div.s2member-pro-stripe-update-form-div").show(),c(A+" > div.s2member-pro-stripe-update-form-div :input").attr(B);if(x){c(H).show(),c(H+" > div.s2member-pro-stripe-update-form-div").show(),c(H+" > div.s2member-pro-stripe-update-form-div :input").attr(B)}else{c(H).hide(),c(H+" > div.s2member-pro-stripe-update-form-div").hide(),c(H+" > div.s2member-pro-stripe-update-form-div :input").attr(i)}if(P){c(u+" button#s2member-pro-stripe-update-submit").focus()}}else{if(!O){c(A).show(),c(A+" > div.s2member-pro-stripe-update-form-div").show(),c(A+" > div.s2member-pro-stripe-update-form-div :input").attr(B);c(H).hide(),c(H+" > div.s2member-pro-stripe-update-form-div").hide(),c(H+" > div.s2member-pro-stripe-update-form-div :input").attr(i)}}};z();c(n).on("click",function(){var O=StripeCheckout.configure({key:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_publishable_key"]); ?>',zipCode:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_validate_zipcode"]); ?>'=="1",image:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_image"]); ?>',panelLabel:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Add", "s2member-front", "s2member")); ?>',email:typeof S2MEMBER_CURRENT_USER_EMAIL==="string"?S2MEMBER_CURRENT_USER_EMAIL:"",allowRememberMe:true,token:function(P){c(f).val(P.id),c(r).val(e(P)),c(y).html(ws_plugin__s2member_escHtml(e(P))),z()}});O.open()});w.on("submit",function(){var R=this,P="",O="",S="",Q=c(L+" input#recaptcha_response_field");if(!c(f).val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("No Billing Method; please try again.", "s2member-front", "s2member")); ?>');return false}c(":input",R).each(function(){var T=c.trim(c(this).attr("id")).replace(/---[0-9]+$/g,"");if(T&&(P=c.trim(c('label[for="'+T.replace(/-(month|year)/,"")+'"]',R).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(O=ws_plugin__s2member_validationErrors(P,this,R)){S+=O+"\n\n"}}});if((S=c.trim(S))){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+S);return false}else{if(Q.length&&!Q.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}c(k).attr(D),ws_plugin__s2member_animateProcessing(c(k));return true})}else{if((v=c("form#s2member-pro-stripe-sp-checkout-form")).length===1||(v=c("form#s2member-pro-stripe-checkout-form")).length===1){(function(P){var Q=P[0].id.replace(/^s2member\-pro\-stripe\-/,"").replace(/\-form$/,""),O=Q.replace(/[^a-z0-9]/gi,"_");g="div#s2member-pro-stripe-"+Q+"-form-options-section",h=g+" select#s2member-pro-stripe-"+Q+"-options",F="div#s2member-pro-stripe-"+Q+"-form-description-section",G="div#s2member-pro-stripe-"+Q+"-form-coupon-section",M=G+" input#s2member-pro-stripe-"+Q+"-coupon-apply",K="div#s2member-pro-stripe-"+Q+"-form-registration-section",N="div#s2member-pro-stripe-"+Q+"-form-custom-fields-section",A="div#s2member-pro-stripe-"+Q+"-form-billing-method-section",n=A+" button#s2member-pro-stripe-"+Q+"-form-source-token-button",y=A+" div#s2member-pro-stripe-"+Q+"-form-source-token-summary",H="div#s2member-pro-stripe-"+Q+"-form-billing-address-section",J=H+" > div#s2member-pro-stripe-"+Q+"-form-ajax-tax-div",L="div#s2member-pro-stripe-"+Q+"-form-captcha-section",u="div#s2member-pro-stripe-"+Q+"-form-submission-section",f=u+' input[name="'+ws_plugin__s2member_escjQAttr("s2member_pro_stripe_"+O+"[source_token]")+'"]',r=u+' input[name="'+ws_plugin__s2member_escjQAttr("s2member_pro_stripe_"+O+"[source_token_summary]")+'"]',q=u+" input#s2member-pro-stripe-"+Q+"-nonce",k=u+" button#s2member-pro-stripe-"+Q+"-submit";c(h).removeAttr("disabled"),c(M).removeAttr("disabled"),c(k).removeAttr("disabled"),ws_plugin__s2member_animateProcessing(c(k),"reset");if(!c(h+" option").length){c(g).hide(),c(F).show()}else{c(g).show(),c(F).hide(),c(h).on("change",function(){c(q).val("option"),P.attr("action",P.attr("action").replace(/#.*$/,"")+"#s2p-form"),P.submit()})}if(c(u+" input#s2member-pro-stripe-"+Q+"-coupons-not-required-or-not-possible").length){c(G).hide()}else{c(G).show(),c(M).on("click",function(){c(q).val("apply-coupon"),P.submit()})}if(S2MEMBER_CURRENT_USER_IS_LOGGED_IN){c(K+" input#s2member-pro-stripe-"+Q+"-first-name").each(function(){var R=c(this),S=R.val();if(!S){R.val(S2MEMBER_CURRENT_USER_FIRST_NAME)}});c(K+" input#s2member-pro-stripe-"+Q+"-last-name").each(function(){var R=c(this),S=R.val();if(!S){R.val(S2MEMBER_CURRENT_USER_LAST_NAME)}});c(K+" input#s2member-pro-stripe-"+Q+"-email").val(S2MEMBER_CURRENT_USER_EMAIL).attr(o),c(K+" input#s2member-pro-stripe-"+Q+"-username").val(S2MEMBER_CURRENT_USER_LOGIN).attr(o);c(K+" > div#s2member-pro-stripe-"+Q+"-form-password-div").hide(),c(K+" > div#s2member-pro-stripe-"+Q+"-form-password-div :input").attr(o);if(c.trim(c(K+" > div#s2member-pro-stripe-"+Q+"-form-registration-section-title").html())==='<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Create Profile", "s2member-front", "s2member")); ?>'){c(K+" > div#s2member-pro-stripe-"+Q+"-form-registration-section-title").html('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Your Profile", "s2member-front", "s2member")); ?>')}c(N).hide(),c(N+" :input").attr(o)}if(c(u+" input#s2member-pro-stripe-"+Q+"-password-not-required-or-not-possible").length){c(K+" > div#s2member-pro-stripe-"+Q+"-form-password-div").hide(),c(K+" > div#s2member-pro-stripe-"+Q+"-form-password-div :input").attr(o)}else{c(K+" > div#s2member-pro-stripe-"+Q+"-form-password-div :input").on("keyup",function(){ws_plugin__s2member_passwordStrength(c(K+" input#s2member-pro-stripe-"+Q+"-username"),c(K+" input#s2member-pro-stripe-"+Q+"-password1"),c(K+" input#s2member-pro-stripe-"+Q+"-password2"),c(K+" div#s2member-pro-stripe-"+Q+"-form-password-strength"))})}if(c(u+" input#s2member-pro-stripe-"+Q+"-tax-not-required-or-not-possible").length){c(J).hide(),x=false}else{t=function(R){setTimeout(function(){I(R)},10)};I=function(V){if(!x){return}if(V&&V.interval&&document.activeElement&&document.activeElement.id==="s2member-pro-stripe-"+Q+"-country"){return}var W=c(u+" input#s2member-pro-stripe-"+Q+"-attr").val(),R=c.trim(c(H+" input#s2member-pro-stripe-"+Q+"-state").val()),T=c.trim(c(H+" select#s2member-pro-stripe-"+Q+"-country").val()),S=c.trim(c(H+" input#s2member-pro-stripe-"+Q+"-zip").val()),U=R+"|"+T+"|"+S;if(R&&T&&S&&U&&(!j||j!==U)){clearTimeout(m),m=0,j=U;if(E){E.abort()}var X='<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(c_ws_plugin__s2member_utils_encryption::encrypt("ws-plugin--s2member-pro-stripe-ajax-tax")); ?>',Z='<div><img src="'+ws_plugin__s2member_escAttr(C.src)+'" alt="" /> <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("calculating sales tax...", "s2member-front", "s2member")); ?></div>',Y=function(){E=c.post('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(admin_url("/admin-ajax.php")); ?>',{action:"ws_plugin__s2member_pro_stripe_ajax_tax",ws_plugin__s2member_pro_stripe_ajax_tax:X,"ws_plugin__s2member_pro_stripe_ajax_tax_vars[attr]":W,"ws_plugin__s2member_pro_stripe_ajax_tax_vars[state]":R,"ws_plugin__s2member_pro_stripe_ajax_tax_vars[country]":T,"ws_plugin__s2member_pro_stripe_ajax_tax_vars[zip]":S},function(aa,ab){clearTimeout(m),m=0;if(typeof aa==="object"&&aa.hasOwnProperty("tax")){c(J).html("<div>"+c.sprintf('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("<strong>Sales Tax%s:</strong> %s<br /><strong>— Total%s:</strong> %s", "s2member-front", "s2member")); ?>',((aa.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Today", "s2member-front", "s2member")); ?>':""),((aa.tax_per)?"<em>"+aa.tax_per+"</em> ( "+aa.cur_symbol+""+aa.tax+" )":aa.cur_symbol+""+aa.tax),((aa.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Today", "s2member-front", "s2member")); ?>':""),aa.cur_symbol+""+aa.total)+"</div>")}},"json")};c(J).html(Z),m=setTimeout(Y,((V&&V.keyCode)?1000:100))}else{if(!R||!T||!S||!U){clearTimeout(m),m=0,j="";if(E){E.abort()}c(J).html("")}}};setInterval(function(){I({interval:true})},1000),c(H+" input#s2member-pro-stripe-"+Q+"-state").on("keyup blur",I).on("cut paste",t),c(H+" input#s2member-pro-stripe-"+Q+"-zip").on("keyup blur",I).on("cut paste",t),c(H+" select#s2member-pro-stripe-"+Q+"-country").on("change",I),I()}z=function(S){if(c(u+" input#s2member-pro-stripe-"+Q+"-payment-not-required-or-not-possible").length){c(f).val("free")}var R=c(f).val();if(R){if(R==="free"){c(A).hide(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div").hide(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(i)}else{c(A).show(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div").show(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(B)}if(R!=="free"&&x){c(H).show(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div").show(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(B)}else{c(H).hide(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div").hide(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(i)}if(S){c(u+" button#s2member-pro-stripe-"+Q+"-submit").focus()}}else{if(!R){c(A).show(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div").show(),c(A+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(B);c(H).hide(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div").hide(),c(H+" > div.s2member-pro-stripe-"+Q+"-form-div :input").attr(i)}}};z();c(n).on("click",function(){var R=StripeCheckout.configure({key:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_publishable_key"]); ?>',bitcoin:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_accept_bitcoin"]); ?>'=="1",zipCode:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_validate_zipcode"]); ?>'=="1",image:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq($GLOBALS["WS_PLUGIN__"]["s2member"]["o"]["pro_stripe_api_image"]); ?>',panelLabel:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Add", "s2member-front", "s2member")); ?>',email:c(K+" input#s2member-pro-stripe-"+Q+"-email").val(),allowRememberMe:true,token:function(S){c(f).val(S.id),c(r).val(e(S)),c(y).html(ws_plugin__s2member_escHtml(e(S))),z()}});R.open()});P.on("submit",function(){if(c.inArray(c(q).val(),["option","apply-coupon"])===-1){var U=this,S="",R="",X="",T=c(L+" input#recaptcha_response_field"),W=c(K+" input#s2member-pro-stripe-"+Q+'-password1[aria-required="true"]'),V=c(K+" input#s2member-pro-stripe-"+Q+"-password2");if(!c(f).val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("No Billing Method; please try again.", "s2member-front", "s2member")); ?>');return false}c(":input",U).each(function(){var Y=c.trim(c(this).attr("id")).replace(/---[0-9]+$/g,"");if(Y&&(S=c.trim(c('label[for="'+Y.replace(/-(month|year)/,"")+'"]',U).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(R=ws_plugin__s2member_validationErrors(S,this,U)){X+=R+"\n\n"}}});if((X=c.trim(X))){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+X);return false}else{if(W.length&&c.trim(W.val())!==c.trim(V.val())){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Passwords do not match up. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(W.length&&c.trim(W.val()).length<6){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Password MUST be at least 6 characters. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(T.length&&!T.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq(_x("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}}}c(h).attr(D)}c(M).attr(D),c(k).attr(D),ws_plugin__s2member_animateProcessing(c(k));return true})})(v)}}}}var e=function(O){if(typeof O!=="object"){return""}if(O.type==="bank_account"&&O.bank_account){return O.bank_account.bank_name+": xxxx..."+O.bank_account.last4}if(O.type==="card"&&O.card){return O.card.brand+": xxxx-xxxx-xxxx-"+O.card.last4}console.log(O);return"Token: "+O.id};c("div#s2member-pro-stripe-form-response").each(function(){scrollTo(0,c(this).offset().top-100)})}});