(function () {
    "use strict";
    // Set variables
    var allScripts = document.getElementsByTagName('script'),
        scriptElement = document.currentScript ? document.currentScript : allScripts[allScripts.length - 1],
        loginWrapper = document.createElement("span"),
        loginHTML = '<form class="login-form-wrap" action="private/auth.php" method="post" autocomplete="off" autocapitalize="off" spellcheck="false"> <ul class="login-form"> <li class="login-form-username-wrap"> <label class="login-form-label login-form-label-username" for="username">Username<span class="login-form-required">*</span></label> <input required name="username" type="text" value="" id="username" class="login-form-username-input" tabindex="2" placeholder="Username" autocomplete="off" autocapitalize="off" spellcheck="false"> </li><li class="login-form-username-wrap"> <label class="login-form-label login-form-label-username" for="username">Password<span class="login-form-required">*</span></label> <input required name="Password" type="password" value="" id="Password" class="login-form-username-input" tabindex="2" placeholder="Password" autocomplete="off" autocapitalize="off" spellcheck="false"> </li><li class="login-form-button-wrap"> <input type="submit" class="login-form-button button" value="Secure Login" tabindex="4" name="Submit"> </li></ul></form>';
    // Insert login code
    loginWrapper.setAttribute('class', 'PS_LoginWrapper');
    loginWrapper.innerHTML = loginHTML;
    scriptElement.parentNode.insertBefore(loginWrapper, scriptElement);
}());
