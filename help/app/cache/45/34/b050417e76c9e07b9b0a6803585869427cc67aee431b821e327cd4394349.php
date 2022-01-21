<?php

/* forgot.view.tmpl */
class __TwigTemplate_4534b050417e76c9e07b9b0a6803585869427cc67aee431b821e327cd4394349 extends Twig_Template
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
        echo "<style type=\"text/css\" media=\"screen\">
.c {
background: url(img/login_bg.jpg) no-repeat center center fixed; 
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
</style>



";
        // line 85
        if (((isset($context["allow_forgot"]) ? $context["allow_forgot"] : null) == true)) {
            // line 86
            echo "
  ";
            // line 87
            if (((isset($context["get"]) ? $context["get"] : null) == true)) {
                // line 88
                echo "



";
                // line 92
                if (((isset($context["ct"]) ? $context["ct"] : null) == true)) {
                    // line 93
                    echo "    


<body class=\"bg-navy\">

        <div class=\"form-box\" id=\"login-box\">
            <div class=\"header bg-light-blue\" style=\"\">
            <center><img src=\"";
                    // line 100
                    echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
                    echo "\" width=\"128\"></center>
            ";
                    // line 101
                    echo twig_escape_filter($this->env, (isset($context["MAIN_TITLE"]) ? $context["MAIN_TITLE"] : null), "html", null, true);
                    echo "</div>
            <form class=\"form-signin\" autocomplete=\"off\" id=\"main_form_register\">
                <div class=\"body bg-blues\">
                <div id=\"error_result\"></div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" name=\"pass_new\" class=\"form-control\" placeholder=\"";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["P_pass_new"]) ? $context["P_pass_new"] : null), "html", null, true);
                    echo "\" id=\"pass_new\">
                    </div>
                                        <div class=\"form-group has-feedback\">
                        <input type=\"password\" name=\"pass_new2\" class=\"form-control\" placeholder=\"";
                    // line 110
                    echo twig_escape_filter($this->env, (isset($context["P_pass_new_re"]) ? $context["P_pass_new_re"] : null), "html", null, true);
                    echo "\" id=\"pass_new2\">
                    </div>

                </div>
                <div class=\"footer bg-blues\">                                                               
                    <button id=\"change_pw\" class=\"btn btn-success btn-block\"><i class=\"fa fa-check-circle\"></i>  ";
                    // line 115
                    echo twig_escape_filter($this->env, (isset($context["P_do_edit_pass"]) ? $context["P_do_edit_pass"] : null), "html", null, true);
                    echo "</button>  
                   
                    <!--p>Используйте Ваши LDAP-учётные данные для входа</p-->
                    ";
                    // line 118
                    if (((isset($context["va"]) ? $context["va"] : null) == "error")) {
                        // line 119
                        echo "            <div class=\"alert alert-danger\">
                <center>";
                        // line 120
                        echo twig_escape_filter($this->env, (isset($context["error_auth"]) ? $context["error_auth"] : null), "html", null, true);
                        echo "</center>
            </div> ";
                    }
                    // line 122
                    echo "                    
                </div>
                <input type=\"hidden\" name=\"req_url\" value=\"";
                    // line 124
                    echo twig_escape_filter($this->env, (isset($context["req"]) ? $context["req"] : null), "html", null, true);
                    echo "\">
            </form>

            
        </div>















</div>

<script src=\"";
                    // line 146
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "js/jquery-1.11.0.min.js\"></script>
<script src=\"";
                    // line 147
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "js/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "js/app.js\"></script>
<script>
\$(document).ready(function() {
            \$('body').on('click', 'button#change_pw', function(event) {
            event.preventDefault();
            \$('button#change_pw').prop('disabled', true);
                \$.ajax({
                    type: \"POST\",
                    url: \"action\",
                    dataType: \"json\",
                    data: \"mode=forgot_pass_change\"+
                        \"&p1=\"+\$('#pass_new').val()+
                        \"&p2=\"+\$('#pass_new2').val()+
                        \"&uc=\"+'";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["uc"]) ? $context["uc"] : null), "html", null, true);
                    echo "'+
                        \"&ph=\"+'";
                    // line 162
                    echo twig_escape_filter($this->env, (isset($context["ph"]) ? $context["ph"] : null), "html", null, true);
                    echo "',
                    success: function(html){
                        
                        if (html) {
                             \$.each(html, function(i, item) {
                                if (item.check_error == \"true\") {
                                    \$(\"#error_result\").html(item.msg);
                                    \$('#pass_new').prop('disabled', true);
                                    \$('#pass_new2').prop('disabled', true);
                                    setTimeout(function() {window.location = \"./\";}, 5000);
                                }
                                else if (item.check_error == \"false\") {
                                    \$(\"#error_result\").html(item.msg);
                                    \$('button#change_pw').prop('disabled', false);
                                }
                            });
                            
                            }

                             }
                    });
        
        });
});
</script>



";
                }
            }
            // line 192
            if (((isset($context["get"]) ? $context["get"] : null) == false)) {
                // line 193
                echo "<body class=\"bg-navy\">

        <div class=\"form-box\" id=\"login-box\">
            <div class=\"header bg-light-blue\" style=\"\">
            <center><img src=\"";
                // line 197
                echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
                echo "\" width=\"128\"></center>
            ";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["MAIN_TITLE"]) ? $context["MAIN_TITLE"] : null), "html", null, true);
                echo "</div>
            <form class=\"form-signin\" autocomplete=\"off\" id=\"main_form_register\">
                <div class=\"body bg-blues\">
                <div id=\"error_result\"></div>
                                        <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["USERS_login"]) ? $context["USERS_login"] : null), "html", null, true);
                echo "\" id=\"login_name\">
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"userid\" class=\"form-control\" placeholder=\"E-mail\" id=\"login_mail\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>

                </div>
                <div class=\"footer bg-blues\">                                                               
                    <button id=\"forgot\" class=\"btn btn-success btn-block\"><i class=\"fa fa-check-circle\"></i>  ";
                // line 213
                echo twig_escape_filter($this->env, (isset($context["FORGOT_button"]) ? $context["FORGOT_button"] : null), "html", null, true);
                echo "</button>  
                   <center> <a href=\"index.php\" class=\"text-center\">";
                // line 214
                echo twig_escape_filter($this->env, (isset($context["REG_already"]) ? $context["REG_already"] : null), "html", null, true);
                echo "</a></center>
                    <!--p>Используйте Ваши LDAP-учётные данные для входа</p-->
                     ";
                // line 216
                if (((isset($context["va"]) ? $context["va"] : null) == "error")) {
                    // line 217
                    echo "            <div class=\"alert alert-danger\">
                <center>";
                    // line 218
                    echo twig_escape_filter($this->env, (isset($context["error_auth"]) ? $context["error_auth"] : null), "html", null, true);
                    echo "</center>
            </div> ";
                }
                // line 220
                echo "                    
                </div>
                <input type=\"hidden\" name=\"req_url\" value=\"";
                // line 222
                echo twig_escape_filter($this->env, (isset($context["req"]) ? $context["req"] : null), "html", null, true);
                echo "\">
            </form>

            
        </div>















</div>

<script src=\"";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "js/jquery-1.11.0.min.js\"></script>
<script src=\"";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "js/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"";
                // line 246
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "js/app.js\"></script>
<script>
\$(document).ready(function() {
            \$('body').on('click', 'button#forgot', function(event) {
            event.preventDefault();

            \$('button#forgot').prop('disabled', true);
                \$.ajax({
                    type: \"POST\",
                    url: \"action\",
                    dataType: \"json\",
                    data: \"mode=forgot_pass\"+
                        \"&login=\"+\$('#login_name').val()+
                        \"&mail=\"+\$('#login_mail').val(),
                    success: function(html){
                        
                        if (html) {
                             \$.each(html, function(i, item) {
                                if (item.check_error == \"true\") {
                                    \$(\"#error_result\").html(item.msg);
                                    \$('#login_name').prop('disabled', true);
                                    \$('#login_mail').prop('disabled', true);
                                    setTimeout(function() {window.location = \"./\";}, 5000);
                                }
                                else if (item.check_error == \"false\") {
                                    \$(\"#error_result\").html(item.msg);
                                    \$('button#forgot').prop('disabled',false);
                                }
                            });
                            
                            }

                             }
                    });
        
        });
});
</script>
";
            }
            // line 285
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "forgot.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 285,  351 => 246,  347 => 245,  343 => 244,  318 => 222,  314 => 220,  309 => 218,  306 => 217,  304 => 216,  299 => 214,  295 => 213,  282 => 203,  274 => 198,  270 => 197,  264 => 193,  262 => 192,  229 => 162,  225 => 161,  209 => 148,  205 => 147,  201 => 146,  176 => 124,  172 => 122,  167 => 120,  164 => 119,  162 => 118,  156 => 115,  148 => 110,  142 => 107,  133 => 101,  129 => 100,  120 => 93,  118 => 92,  112 => 88,  110 => 87,  107 => 86,  105 => 85,  19 => 1,);
    }
}
