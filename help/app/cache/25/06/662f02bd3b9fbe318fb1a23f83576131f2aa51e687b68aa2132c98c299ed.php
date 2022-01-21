<?php

/* auth.view.tmpl */
class __TwigTemplate_2506662f02bd3b9fbe318fb1a23f83576131f2aa51e687b68aa2132c98c299ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
 
<style type=\"text/css\" media=\"screen\">
.c {
background: url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "img/login_bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  }
body {
background-color: transparent;
}
.form-box {
  width: 360px;
  margin: 90px auto 0 auto;
}
.form-box .header {
  -webkit-border-top-left-radius: 4px;
  -webkit-border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 0;
  -webkit-border-bottom-left-radius: 0;
  -moz-border-radius-topleft: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-bottomright: 0;
  -moz-border-radius-bottomleft: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #3d9970;
  box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.2);
  padding: 20px 10px;
  text-align: center;
  font-size: 26px;
  font-weight: 300;
  color: #fff;
}
.form-box .body,
.form-box .footer {
  padding: 10px 20px;
  background: #fff;
  color: #444;
}
.form-box .body > .form-group,
.form-box .footer > .form-group {
  margin-top: 20px;
}
.form-box .body > .form-group > input,
.form-box .footer > .form-group > input {
  border: #fff;
}
.form-box .body > .btn,
.form-box .footer > .btn {
  margin-bottom: 10px;
}
.form-box .footer {
  -webkit-border-top-left-radius: 0;
  -webkit-border-top-right-radius: 0;
  -webkit-border-bottom-right-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-topleft: 0;
  -moz-border-radius-topright: 0;
  -moz-border-radius-bottomright: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
@media (max-width: 767px) {
  .form-box {
    width: 90%;
  }
}
  /*
body {
background: url(img/login_bg.jpg);
background-size: 100% 100% auto;
background-repeat: no-repeat;
}   */ 

 /*!
 * iCheck v1.0.1, http://git.io/arlzeA
 * =================================
 * Powerful jQuery and Zepto plugin for checkboxes and radio buttons customization
 *
 * (c) 2013 Damir Sultanov, http://fronteed.com
 * MIT Licensed
 */
/* iCheck plugin Minimal skin, black
----------------------------------- */
.icheckbox_minimal,
.iradio_minimal {
  display: inline-block;
  *display: inline;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  width: 18px;
  height: 18px;
  background: rgba(255, 255, 255, 0.7) url(css/iCheck/minimal/minimal.png) no-repeat;
  border: none;
  cursor: pointer;
}
.icheckbox_minimal {
  background-position: 0 0;
}
.icheckbox_minimal.hover {
  background-position: -20px 0;
}
.icheckbox_minimal.checked {
  background-position: -40px 0;
}
.icheckbox_minimal.disabled {
  background-position: -60px 0;
  cursor: default;
}
.icheckbox_minimal.checked.disabled {
  background-position: -80px 0;
}
.iradio_minimal {
  background-position: -100px 0;
}
.iradio_minimal.hover {
  background-position: -120px 0;
}
.iradio_minimal.checked {
  background-position: -140px 0;
}
.iradio_minimal.disabled {
  background-position: -160px 0;
  cursor: default;
}
.iradio_minimal.checked.disabled {
  background-position: -180px 0;
}
/* Retina support */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5) {
  .icheckbox_minimal,
  .iradio_minimal {
    background-image: url('css/iCheck/minimal/minimal@2x.png');
    -webkit-background-size: 200px 20px;
    background-size: 200px 20px;
  }
}


</style>


<body class=\"bg-navy\">






";
        // line 160
        if (((isset($context["login_form"]) ? $context["login_form"] : null) == false)) {
            // line 161
            echo "<div class=\"form-box\" id=\"login-box\">
<div class=\"alert alert-warning alert-dismissable\">
                    
                    <h4><i class=\"icon fa fa-warning\"></i> ";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["LOGIN_ERROR_title"]) ? $context["LOGIN_ERROR_title"] : null), "html", null, true);
            echo "!</h4>
                    ";
            // line 165
            echo (isset($context["LOGIN_ERROR_desc"]) ? $context["LOGIN_ERROR_desc"] : null);
            echo "
                  </div>
                  </div>

";
        }
        // line 170
        if (((isset($context["login_form"]) ? $context["login_form"] : null) == true)) {
            // line 171
            echo "        <div class=\"form-box\" id=\"login-box\">
            <div class=\"header bg-light-blue\" style=\"\">
            <center><img src=\"";
            // line 173
            echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
            echo "\" width=\"128\"></center>
            ";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["MAIN_TITLE"]) ? $context["MAIN_TITLE"] : null), "html", null, true);
            echo "</div>
            <form class=\"form-signin\" action=\"";
            // line 175
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\" method=\"POST\" autocomplete=\"off\">
                <div class=\"body bg-blues\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"login\" autocomplete=\"off\" autocapitalize=\"off\" autocorrect=\"off\" class=\"form-control\" placeholder=\"";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : null), "html", null, true);
            echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>          

                </div>
                <div class=\"footer bg-blues\">         
                                                                     
                    <button type=\"submit\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in\"></i>  ";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["log_in"]) ? $context["log_in"] : null), "html", null, true);
            echo "</button>  <center>

                                        <div class=\"form-group\">
                        <div class=\"checkbox\">
                <center><label>
                
                    <input id=\"mc\" name=\"remember_me\" value=\"1\" type=\"checkbox\"> ";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["remember_me"]) ? $context["remember_me"] : null), "html", null, true);
            echo "
                
                </label></center>
            </div>
                    </div>
                    <small>
                    ";
            // line 201
            if (((isset($context["allow_register"]) ? $context["allow_register"] : null) == true)) {
                // line 202
                echo "                     <a href=\"register\" class=\"text-center\">";
                echo twig_escape_filter($this->env, (isset($context["REG_new"]) ? $context["REG_new"] : null), "html", null, true);
                echo "</a> 
                    ";
            }
            // line 204
            echo "                    ";
            if (((isset($context["allow_forgot"]) ? $context["allow_forgot"] : null) == true)) {
                // line 205
                echo "                     | <a href=\"forgot\" class=\"text-center\">";
                echo twig_escape_filter($this->env, (isset($context["Forgot_pass_me"]) ? $context["Forgot_pass_me"] : null), "html", null, true);
                echo "</a> 
                    ";
            }
            // line 207
            echo "                    </small>
                    </center>
                    <!--p>Используйте Ваши LDAP-учётные данные для входа</p-->
                    ";
            // line 210
            if (((isset($context["va"]) ? $context["va"] : null) == "error")) {
                // line 211
                echo "                    <br>
            <div class=\"alert alert-danger\">
                <center>";
                // line 213
                echo (isset($context["error_auth"]) ? $context["error_auth"] : null);
                echo "</center>
            </div> ";
            }
            // line 215
            echo "                </div>
                <input type=\"hidden\" name=\"req_url\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, (isset($context["req"]) ? $context["req"] : null), "html", null, true);
            echo "\">
            </form>

            
        </div>

";
        }
        // line 223
        echo "

<div style=\"color:white; position: fixed; bottom: 0; width:100%; text-align: right;\">
<right>
<h4></h4>
<p style=\" margin-right: 20px; \"> ";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo " (c) ";
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
        echo "</p>
</right></div>














    

 


";
        // line 249
        if (((isset($context["htf"]) ? $context["htf"] : null) == false)) {
            // line 250
            echo "

    <div class=\"alert alert-danger\" role=\"alert\">.htaccess error: <em>";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
            echo "</em> file not exist</div>
    ";
        }
        // line 254
        echo "

";
        // line 256
        if (((isset($context["upw"]) ? $context["upw"] : null) == false)) {
            // line 257
            echo "    <div class=\"alert alert-danger\" role=\"alert\">Permission-error: <em>";
            echo twig_escape_filter($this->env, (isset($context["filename3"]) ? $context["filename3"] : null), "html", null, true);
            echo "</em> is not writable. <br> Add access to write.</a></div>
    ";
        }
        // line 259
        echo "</div>

<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "js/jquery-1.11.0.min.js\"></script>
<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "js/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "js/icheck.min.js?\"></script>
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "js/app.js\"></script>
<script>
\$(document).ready(function() {

      \$(\"input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)\").iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal'
    });
\$(\"html\").css(\"display\", \"none\");
\$(\"body\").css(\"display\", \"none\");
\$(\"html\").fadeIn(800);
\$(\"body\").fadeIn(800);
});
</script>";
    }

    public function getTemplateName()
    {
        return "auth.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 264,  372 => 263,  368 => 262,  364 => 261,  360 => 259,  354 => 257,  352 => 256,  348 => 254,  343 => 252,  339 => 250,  337 => 249,  311 => 228,  304 => 223,  294 => 216,  291 => 215,  286 => 213,  282 => 211,  280 => 210,  275 => 207,  269 => 205,  266 => 204,  260 => 202,  258 => 201,  249 => 195,  240 => 189,  230 => 182,  223 => 178,  216 => 175,  212 => 174,  208 => 173,  204 => 171,  202 => 170,  194 => 165,  190 => 164,  185 => 161,  183 => 160,  25 => 5,  19 => 1,);
    }
}
