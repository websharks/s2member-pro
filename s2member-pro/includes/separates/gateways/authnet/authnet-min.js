jQuery(document).ready(function(w){var d,n,g,j,m,F,u,t={"aria-required":"true"},a={"aria-required":"false"},x={disabled:"disabled"},f={"aria-required":"false",disabled:"disabled"};u=new Image(),u.src='<?php echo $vars["i"]; ?>/ajax-loader.gif';if(w("form.s2member-pro-authnet-registration-form").length>1||w("form.s2member-pro-authnet-checkout-form").length>1||w("form.s2member-pro-authnet-sp-checkout-form").length>1){return alert("Detected more than one s2Member® Pro Form.\n\nPlease use only ONE s2Member® Pro Form Shortcode on each Post/Page. Attempting to serve more than one Pro Form on each Post/Page (even w/ DHTML) may result in unexpected/broken functionality.")}if((d=w("form#s2member-pro-authnet-cancellation-form")).length===1){var I="div#s2member-pro-authnet-cancellation-form-captcha-section",k="div#s2member-pro-authnet-cancellation-form-submission-section",s=w(k+" input#s2member-pro-authnet-cancellation-submit");ws_plugin__s2member_animateProcessing(s,"reset"),s.removeAttr("disabled");d.submit(function(){var O=this,M="",L="",P="";var N=w(I+" input#recaptcha_response_field");w(":input",O).each(function(){var Q=w.trim(w(this).attr("id")).replace(/---[0-9]+$/g,"");if(Q&&(M=w.trim(w('label[for="'+Q+'"]',O).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(L=ws_plugin__s2member_validationErrors(M,this,O)){P+=L+"\n\n"}}});if(P=w.trim(P)){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+P);return false}else{if(N.length&&!N.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}s.attr(x),ws_plugin__s2member_animateProcessing(s);return true})}else{if((n=w("form#s2member-pro-authnet-update-form")).length===1){var q,r="div#s2member-pro-authnet-update-form-billing-method-section",C="div#s2member-pro-authnet-update-form-billing-address-section",i=r+' input[name="s2member_pro_authnet_update[card_type]"]',I="div#s2member-pro-authnet-update-form-captcha-section",k="div#s2member-pro-authnet-update-form-submission-section",s=w(k+" input#s2member-pro-authnet-update-submit");ws_plugin__s2member_animateProcessing(s,"reset"),s.removeAttr("disabled");(q=function(L){var M=w(i+":checked").val();if(w.inArray(M,["Visa","MasterCard","Amex","Discover"])!==-1){w(r+" > div.s2member-pro-authnet-update-form-div").show();w(r+" > div.s2member-pro-authnet-update-form-div :input").attr(t);w(r+" > div#s2member-pro-authnet-update-form-card-start-date-issue-number-div").hide();w(r+" > div#s2member-pro-authnet-update-form-card-start-date-issue-number-div :input").attr(a);w(C+" > div.s2member-pro-authnet-update-form-div").show();w(C+" > div.s2member-pro-authnet-update-form-div :input").attr(t);w(C).show(),(L)?w(r+" input#s2member-pro-authnet-update-card-number").focus():null}else{if(w.inArray(M,["Maestro","Solo"])!==-1){w(r+" > div.s2member-pro-authnet-update-form-div").show();w(r+" > div.s2member-pro-authnet-update-form-div :input").attr(t);w(C+" > div.s2member-pro-authnet-update-form-div").show();w(C+" > div.s2member-pro-authnet-update-form-div :input").attr(t);w(C).show(),(L)?w(r+" input#s2member-pro-authnet-update-card-number").focus():null}else{if(!M){w(r+" > div.s2member-pro-authnet-update-form-div").hide();w(r+" > div.s2member-pro-authnet-update-form-div :input").attr(a);w(r+" > div#s2member-pro-authnet-update-form-card-type-div").show();w(r+" > div#s2member-pro-authnet-update-form-card-type-div :input").attr(t);w(C+" > div.s2member-pro-authnet-update-form-div").hide();w(C+" > div.s2member-pro-authnet-update-form-div :input").attr(a);w(C).hide(),(L)?w(k+" input#s2member-pro-authnet-update-submit").focus():null}}}})();w(i).click(q).change(q);n.submit(function(){var O=this,M="",L="",P="";var N=w(I+" input#recaptcha_response_field");if(!w(i+":checked").val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Please choose a Billing Method.", "s2member-front", "s2member")); ?>');return false}w(":input",O).each(function(){var Q=w.trim(w(this).attr("id")).replace(/---[0-9]+$/g,"");if(Q&&(M=w.trim(w('label[for="'+Q+'"]',O).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(L=ws_plugin__s2member_validationErrors(M,this,O)){P+=L+"\n\n"}}});if(P=w.trim(P)){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+P);return false}else{if(N.length&&!N.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}s.attr(x),ws_plugin__s2member_animateProcessing(s);return true})}else{if((g=w("form#s2member-pro-authnet-registration-form")).length===1){var G,o,H="div#s2member-pro-authnet-registration-form-registration-section",I="div#s2member-pro-authnet-registration-form-captcha-section",k="div#s2member-pro-authnet-registration-form-submission-section",s=w(k+" input#s2member-pro-authnet-registration-submit");ws_plugin__s2member_animateProcessing(s,"reset"),s.removeAttr("disabled");(G=function(L){if(w(k+" input#s2member-pro-authnet-registration-names-not-required-or-not-possible").length){w(H+" > div#s2member-pro-authnet-registration-form-first-name-div").hide();w(H+" > div#s2member-pro-authnet-registration-form-first-name-div :input").attr(f);w(H+" > div#s2member-pro-authnet-registration-form-last-name-div").hide();w(H+" > div#s2member-pro-authnet-registration-form-last-name-div :input").attr(f)}})();(o=function(L){if(w(k+" input#s2member-pro-authnet-registration-password-not-required-or-not-possible").length){w(H+" > div#s2member-pro-authnet-registration-form-password-div").hide();w(H+" > div#s2member-pro-authnet-registration-form-password-div :input").attr(f)}})();w(H+" > div#s2member-pro-authnet-registration-form-password-div :input").keyup(function(){ws_plugin__s2member_passwordStrength(w(H+" input#s2member-pro-authnet-registration-username"),w(H+" input#s2member-pro-authnet-registration-password1"),w(H+" input#s2member-pro-authnet-registration-password2"),w(H+" div#s2member-pro-authnet-registration-form-password-strength"))});g.submit(function(){var O=this,M="",L="",R="";var N=w(I+" input#recaptcha_response_field");var Q=w(H+' input#s2member-pro-authnet-registration-password1[aria-required="true"]');var P=w(H+" input#s2member-pro-authnet-registration-password2");w(":input",O).each(function(){var S=w.trim(w(this).attr("id")).replace(/---[0-9]+$/g,"");if(S&&(M=w.trim(w('label[for="'+S+'"]',O).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(L=ws_plugin__s2member_validationErrors(M,this,O)){R+=L+"\n\n"}}});if(R=w.trim(R)){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+R);return false}else{if(Q.length&&w.trim(Q.val())!==w.trim(P.val())){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Passwords do not match up. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(Q.length&&w.trim(Q.val()).length<6){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Password MUST be at least 6 characters. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(N.length&&!N.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}}}s.attr(x),ws_plugin__s2member_animateProcessing(s);return true})}else{if((j=w("form#s2member-pro-authnet-sp-checkout-form")).length===1){var A,E,p=true,D,l,e,y,b,z,q,B="div#s2member-pro-authnet-sp-checkout-form-coupon-section",J=B+" input#s2member-pro-authnet-sp-checkout-coupon-apply",H="div#s2member-pro-authnet-sp-checkout-form-registration-section",r="div#s2member-pro-authnet-sp-checkout-form-billing-method-section",i=r+' input[name="s2member_pro_authnet_sp_checkout[card_type]"]',C="div#s2member-pro-authnet-sp-checkout-form-billing-address-section",v=w(C+" > div#s2member-pro-authnet-sp-checkout-form-ajax-tax-div"),I="div#s2member-pro-authnet-sp-checkout-form-captcha-section",k="div#s2member-pro-authnet-sp-checkout-form-submission-section",h=k+" input#s2member-pro-authnet-sp-checkout-nonce",c=k+" input#s2member-pro-authnet-sp-checkout-submit";ws_plugin__s2member_animateProcessing(w(c),"reset"),w(c).removeAttr("disabled"),w(J).removeAttr("disabled");(A=function(L){if(w(k+" input#s2member-pro-authnet-sp-checkout-coupons-not-required-or-not-possible").length){w(B).hide()}else{w(B).show()}})();(E=function(L){if(w(k+" input#s2member-pro-authnet-sp-checkout-tax-not-required-or-not-possible").length){v.hide(),p=false}})();(D=function(M){if(p&&!(M&&M.interval&&document.activeElement.id==="s2member-pro-authnet-sp-checkout-country")){var L=w(k+" input#s2member-pro-authnet-sp-checkout-attr").val();var P=w.trim(w(C+" input#s2member-pro-authnet-sp-checkout-state").val());var Q=w(C+" select#s2member-pro-authnet-sp-checkout-country").val();var O=w.trim(w(C+" input#s2member-pro-authnet-sp-checkout-zip").val());var N=P+"|"+Q+"|"+O;if(P&&Q&&O&&N&&(!b||b!==N)&&(b=N)){(y)?y.abort():null,clearTimeout(e),e=null;v.html('<div><img src="<?php echo $vars["i"]; ?>/ajax-loader.gif" alt="<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (esc_attr (_x ("Calculating Sales Tax...", "s2member-front", "s2member"))); ?>" /> <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("calculating sales tax...", "s2member-front", "s2member")); ?></div>');e=setTimeout(function(){y=w.post('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (admin_url ("/admin-ajax.php")); ?>',{action:"ws_plugin__s2member_pro_authnet_ajax_tax",ws_plugin__s2member_pro_authnet_ajax_tax:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (c_ws_plugin__s2member_utils_encryption::encrypt ("ws-plugin--s2member-pro-authnet-ajax-tax")); ?>',"ws_plugin__s2member_pro_authnet_ajax_tax_vars[attr]":L,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[state]":P,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[country]":Q,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[zip]":O},function(R){clearTimeout(e),e=null;try{v.html("<div>"+w.sprintf('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("<strong>Sales Tax%s:</strong> %s<br /><strong>— Total%s:</strong> %s", "s2member-front", "s2member")); ?>',((R.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Today", "s2member-front", "s2member")); ?>':""),((R.tax_per)?"<em>"+R.tax_per+"</em> ( "+R.cur_symbol+""+R.tax+" )":R.cur_symbol+""+R.tax),((R.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Today", "s2member-front", "s2member")); ?>':""),R.cur_symbol+""+R.total)+"</div>")}catch(S){}},"json")},((M&&M.keyCode)?1000:100))}else{if(!P||!Q||!O||!N){v.html(""),b=null}}}})();l=function(L){setTimeout(function(){D(L)},10)};w(C+" input#s2member-pro-authnet-sp-checkout-state").bind("keyup blur",D).bind("cut paste",l);w(C+" input#s2member-pro-authnet-sp-checkout-zip").bind("keyup blur",D).bind("cut paste",l);w(C+" select#s2member-pro-authnet-sp-checkout-country").bind("change",D);setInterval(function(){D({interval:true})},1000);(z=function(L){if(S2MEMBER_CURRENT_USER_IS_LOGGED_IN){w(H+" input#s2member-pro-authnet-sp-checkout-first-name").each(function(){var M=w(this),N=M.val();(!N)?M.val(S2MEMBER_CURRENT_USER_FIRST_NAME):null});w(H+" input#s2member-pro-authnet-sp-checkout-last-name").each(function(){var M=w(this),N=M.val();(!N)?M.val(S2MEMBER_CURRENT_USER_LAST_NAME):null});w(H+" input#s2member-pro-authnet-sp-checkout-email").each(function(){var M=w(this),N=M.val();(!N)?M.val(S2MEMBER_CURRENT_USER_EMAIL):null})}})();(q=function(L){var M=w(i+":checked").val();if(w.inArray(M,["Visa","MasterCard","Amex","Discover"])!==-1){w(r+" > div.s2member-pro-authnet-sp-checkout-form-div").show();w(r+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(t);w(r+" > div#s2member-pro-authnet-sp-checkout-form-card-start-date-issue-number-div").hide();w(r+" > div#s2member-pro-authnet-sp-checkout-form-card-start-date-issue-number-div :input").attr(a);w(C+" > div.s2member-pro-authnet-sp-checkout-form-div").show();w(C+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(t);(!p)?v.hide():null;w(C).show(),(L)?w(r+" input#s2member-pro-authnet-sp-checkout-card-number").focus():null}else{if(w.inArray(M,["Maestro","Solo"])!==-1){w(r+" > div.s2member-pro-authnet-sp-checkout-form-div").show();w(r+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(t);w(C+" > div.s2member-pro-authnet-sp-checkout-form-div").show();w(C+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(t);(!p)?v.hide():null;w(C).show(),(L)?w(r+" input#s2member-pro-authnet-sp-checkout-card-number").focus():null}else{if(!M){w(r+" > div.s2member-pro-authnet-sp-checkout-form-div").hide();w(r+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(a);w(r+" > div#s2member-pro-authnet-sp-checkout-form-card-type-div").show();w(r+" > div#s2member-pro-authnet-sp-checkout-form-card-type-div :input").attr(t);w(C+" > div.s2member-pro-authnet-sp-checkout-form-div").hide();w(C+" > div.s2member-pro-authnet-sp-checkout-form-div :input").attr(a);(!p)?v.hide():null;w(C).hide(),(L)?w(k+" input#s2member-pro-authnet-sp-checkout-submit").focus():null}}}E()})();w(i).click(q).change(q);w(J).click(function(){w(h).val("apply-coupon"),j.submit()});j.submit(function(){if(w(h).val()!=="apply-coupon"){var O=this,M="",L="",P="";var N=w(I+" input#recaptcha_response_field");if(!w(i+":checked").val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Please choose a Billing Method.", "s2member-front", "s2member")); ?>');return false}w(":input",O).each(function(){var Q=w.trim(w(this).attr("id")).replace(/---[0-9]+$/g,"");if(Q&&(M=w.trim(w('label[for="'+Q+'"]',O).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(L=ws_plugin__s2member_validationErrors(M,this,O)){P+=L+"\n\n"}}});if(P=w.trim(P)){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+P);return false}else{if(N.length&&!N.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}}w(c).attr(x),ws_plugin__s2member_animateProcessing(w(c)),w(J).attr(x);return true})}else{if((m=w("form#s2member-pro-authnet-checkout-form")).length===1){var A,E,p=true,D,l,e,y,b,o,q,z,B="div#s2member-pro-authnet-checkout-form-coupon-section",J=B+" input#s2member-pro-authnet-checkout-coupon-apply",H="div#s2member-pro-authnet-checkout-form-registration-section",K="div#s2member-pro-authnet-checkout-form-custom-fields-section",r="div#s2member-pro-authnet-checkout-form-billing-method-section",i=r+' input[name="s2member_pro_authnet_checkout[card_type]"]',C="div#s2member-pro-authnet-checkout-form-billing-address-section",v=w(C+" > div#s2member-pro-authnet-checkout-form-ajax-tax-div"),I="div#s2member-pro-authnet-checkout-form-captcha-section",k="div#s2member-pro-authnet-checkout-form-submission-section",h=k+" input#s2member-pro-authnet-checkout-nonce",c=k+" input#s2member-pro-authnet-checkout-submit";ws_plugin__s2member_animateProcessing(w(c),"reset"),w(c).removeAttr("disabled"),w(J).removeAttr("disabled");(A=function(L){if(w(k+" input#s2member-pro-authnet-checkout-coupons-not-required-or-not-possible").length){w(B).hide()}else{w(B).show()}})();(E=function(L){if(w(k+" input#s2member-pro-authnet-checkout-tax-not-required-or-not-possible").length){v.hide(),p=false}})();(D=function(M){if(p&&!(M&&M.interval&&document.activeElement.id==="s2member-pro-authnet-checkout-country")){var L=w(k+" input#s2member-pro-authnet-checkout-attr").val();var P=w.trim(w(C+" input#s2member-pro-authnet-checkout-state").val());var Q=w(C+" select#s2member-pro-authnet-checkout-country").val();var O=w.trim(w(C+" input#s2member-pro-authnet-checkout-zip").val());var N=P+"|"+Q+"|"+O;if(P&&Q&&O&&N&&(!b||b!==N)&&(b=N)){(y)?y.abort():null,clearTimeout(e),e=null;v.html('<div><img src="<?php echo $vars["i"]; ?>/ajax-loader.gif" alt="<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (esc_attr (_x ("Calculating Sales Tax...", "s2member-front", "s2member"))); ?>" /> <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("calculating sales tax...", "s2member-front", "s2member")); ?></div>');e=setTimeout(function(){y=w.post('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (admin_url ("/admin-ajax.php")); ?>',{action:"ws_plugin__s2member_pro_authnet_ajax_tax",ws_plugin__s2member_pro_authnet_ajax_tax:'<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (c_ws_plugin__s2member_utils_encryption::encrypt ("ws-plugin--s2member-pro-authnet-ajax-tax")); ?>',"ws_plugin__s2member_pro_authnet_ajax_tax_vars[attr]":L,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[state]":P,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[country]":Q,"ws_plugin__s2member_pro_authnet_ajax_tax_vars[zip]":O},function(R,T){clearTimeout(e),e=null;try{v.html("<div>"+w.sprintf('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("<strong>Sales Tax%s:</strong> %s<br /><strong>— Total%s:</strong> %s", "s2member-front", "s2member")); ?>',((R.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Today", "s2member-front", "s2member")); ?>':""),((R.tax_per)?"<em>"+R.tax_per+"</em> ( "+R.cur_symbol+""+R.tax+" )":R.cur_symbol+""+R.tax),((R.trial)?' <?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Today", "s2member-front", "s2member")); ?>':""),R.cur_symbol+""+R.total)+"</div>")}catch(S){}},"json")},((M&&M.keyCode)?1000:100))}else{if(!P||!Q||!O||!N){v.html(""),b=null}}}})();l=function(L){setTimeout(function(){D(L)},10)};w(C+" input#s2member-pro-authnet-checkout-state").bind("keyup blur",D).bind("cut paste",l);w(C+" input#s2member-pro-authnet-checkout-zip").bind("keyup blur",D).bind("cut paste",l);w(C+" select#s2member-pro-authnet-checkout-country").bind("change",D);setInterval(function(){D({interval:true})},1000);(o=function(L){if(w(k+" input#s2member-pro-authnet-checkout-password-not-required-or-not-possible").length){w(H+" > div#s2member-pro-authnet-checkout-form-password-div").hide();w(H+" > div#s2member-pro-authnet-checkout-form-password-div :input").attr(f)}})();(z=function(L){if(S2MEMBER_CURRENT_USER_IS_LOGGED_IN){w(H+" input#s2member-pro-authnet-checkout-first-name").each(function(){var M=w(this),N=M.val();(!N)?M.val(S2MEMBER_CURRENT_USER_FIRST_NAME):null});w(H+" input#s2member-pro-authnet-checkout-last-name").each(function(){var M=w(this),N=M.val();(!N)?M.val(S2MEMBER_CURRENT_USER_LAST_NAME):null});w(H+" input#s2member-pro-authnet-checkout-email").val(S2MEMBER_CURRENT_USER_EMAIL).attr(f);w(H+" input#s2member-pro-authnet-checkout-username").val(S2MEMBER_CURRENT_USER_LOGIN).attr(f);w(H+" > div#s2member-pro-authnet-checkout-form-password-div").hide();w(H+" > div#s2member-pro-authnet-checkout-form-password-div :input").attr(f);if(w.trim(w(H+" > div#s2member-pro-authnet-checkout-form-registration-section-title").html())==='<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Create Profile", "s2member-front", "s2member")); ?>'){w(H+" > div#s2member-pro-authnet-checkout-form-registration-section-title").html('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Your Profile", "s2member-front", "s2member")); ?>')}w(K).hide(),w(K+" :input").attr(f)}})();(q=function(L){var M=w(i+":checked").val();if(w.inArray(M,["Visa","MasterCard","Amex","Discover"])!==-1){w(r+" > div.s2member-pro-authnet-checkout-form-div").show();w(r+" > div.s2member-pro-authnet-checkout-form-div :input").attr(t);w(r+" > div#s2member-pro-authnet-checkout-form-card-start-date-issue-number-div").hide();w(r+" > div#s2member-pro-authnet-checkout-form-card-start-date-issue-number-div :input").attr(a);w(C+" > div.s2member-pro-authnet-checkout-form-div").show();w(C+" > div.s2member-pro-authnet-checkout-form-div :input").attr(t);(!p)?v.hide():null;w(C).show(),(L)?w(r+" input#s2member-pro-authnet-checkout-card-number").focus():null}else{if(w.inArray(M,["Maestro","Solo"])!==-1){w(r+" > div.s2member-pro-authnet-checkout-form-div").show();w(r+" > div.s2member-pro-authnet-checkout-form-div :input").attr(t);w(C+" > div.s2member-pro-authnet-checkout-form-div").show();w(C+" > div.s2member-pro-authnet-checkout-form-div :input").attr(t);(!p)?v.hide():null;w(C).show(),(L)?w(r+" input#s2member-pro-authnet-checkout-card-number").focus():null}else{if(!M){w(r+" > div.s2member-pro-authnet-checkout-form-div").hide();w(r+" > div.s2member-pro-authnet-checkout-form-div :input").attr(a);w(r+" > div#s2member-pro-authnet-checkout-form-card-type-div").show();w(r+" > div#s2member-pro-authnet-checkout-form-card-type-div :input").attr(t);w(C+" > div.s2member-pro-authnet-checkout-form-div").hide();w(C+" > div.s2member-pro-authnet-checkout-form-div :input").attr(a);(!p)?v.hide():null;w(C).hide(),(L)?w(k+" input#s2member-pro-authnet-checkout-submit").focus():null}}}})();w(i).click(q).change(q);w(J).click(function(){w(h).val("apply-coupon"),m.submit()});w(H+" > div#s2member-pro-authnet-checkout-form-password-div :input").keyup(function(){ws_plugin__s2member_passwordStrength(w(H+" input#s2member-pro-authnet-checkout-username"),w(H+" input#s2member-pro-authnet-checkout-password1"),w(H+" input#s2member-pro-authnet-checkout-password2"),w(H+" div#s2member-pro-authnet-checkout-form-password-strength"))});m.submit(function(){if(w(h).val()!=="apply-coupon"){var O=this,M="",L="",R="";var N=w(I+" input#recaptcha_response_field");var Q=w(H+' input#s2member-pro-authnet-checkout-password1[aria-required="true"]');var P=w(H+" input#s2member-pro-authnet-checkout-password2");if(!w(i+":checked").val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Please choose a Billing Method.", "s2member-front", "s2member")); ?>');return false}w(":input",O).each(function(){var S=w.trim(w(this).attr("id")).replace(/---[0-9]+$/g,"");if(S&&(M=w.trim(w('label[for="'+S+'"]',O).first().children("span").first().text().replace(/[\r\n\t]+/g," ")))){if(L=ws_plugin__s2member_validationErrors(M,this,O)){R+=L+"\n\n"}}});if(R=w.trim(R)){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n'+R);return false}else{if(Q.length&&w.trim(Q.val())!==w.trim(P.val())){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Passwords do not match up. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(Q.length&&w.trim(Q.val()).length<6){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Password MUST be at least 6 characters. Please try again.", "s2member-front", "s2member")); ?>');return false}else{if(N.length&&!N.val()){alert('<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("— Oops, you missed something: —", "s2member-front", "s2member")); ?>\n\n<?php echo c_ws_plugin__s2member_utils_strings::esc_js_sq (_x ("Security Code missing. Please try again.", "s2member-front", "s2member")); ?>');return false}}}}}w(c).attr(x),ws_plugin__s2member_animateProcessing(w(c)),w(J).attr(x);return true})}}}}}(F=function(){w("div#s2member-pro-authnet-form-response").each(function(){var L=w(this).offset();window.scrollTo(0,L.top-100)})})()});