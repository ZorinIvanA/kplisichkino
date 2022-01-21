<?php

/* register.view.tmpl */
class __TwigTemplate_c5101c9f1a8017e8664f51845f8a5437fde1ef3c0235de3ebdf691be8f60291f extends Twig_Template
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
        // line 82
        if (((isset($context["allow_register"]) ? $context["allow_register"] : null) == true)) {
            // line 83
            echo "<body class=\"bg-navy\">

        <div class=\"form-box\" id=\"login-box\">
            <div class=\"header bg-light-blue\" style=\"\">
            <center><img src=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
            echo "\" width=\"128\"></center>
            ";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["MAIN_TITLE"]) ? $context["MAIN_TITLE"] : null), "html", null, true);
            echo "</div>
            <form class=\"form-signin\" autocomplete=\"off\" id=\"main_form_register\">
                <div class=\"body bg-blues\">
                <div id=\"error_result\"></div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["USERS_fio_full"]) ? $context["USERS_fio_full"] : null), "html", null, true);
            echo "\" id=\"login_fio\">
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                                        <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["USERS_login"]) ? $context["USERS_login"] : null), "html", null, true);
            echo "\" id=\"login_name\">
                        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" name=\"userid\" class=\"form-control\" placeholder=\"E-mail\" id=\"login_mail\">
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>

                </div>
                <div class=\"footer bg-blues\">                                                               
                    <button id=\"register_new\" class=\"btn btn-danger btn-block\"><i class=\"fa fa-check-circle\"></i>  ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["REG_button"]) ? $context["REG_button"] : null), "html", null, true);
            echo "</button>  
                   <center> <a href=\"index.php\" class=\"text-center\"><small>";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["REG_already"]) ? $context["REG_already"] : null), "html", null, true);
            echo "</small></a></center>
                    <!--p>Используйте Ваши LDAP-учётные данные для входа</p-->
                    ";
            // line 110
            if (((isset($context["va"]) ? $context["va"] : null) == "error")) {
                // line 111
                echo "            <div class=\"alert alert-danger\">
                <center>";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["error_auth"]) ? $context["error_auth"] : null), "html", null, true);
                echo "</center>
            </div> ";
            }
            // line 114
            echo "                    
                </div>
                <input type=\"hidden\" name=\"req_url\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["req"]) ? $context["req"] : null), "html", null, true);
            echo "\">
            </form>

            
        </div>















</div>

<script src=\"";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "js/jquery-1.11.0.min.js\"></script>
<script src=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "js/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "js/app.js\"></script>
<script>
\$(document).ready(function() {
            \$('body').on('click', 'button#register_new', function(event) {
            event.preventDefault();
                \$.ajax({
                    type: \"POST\",
                    url: \"action\",
                    dataType: \"json\",
                    data: \"mode=register_new\"+
                        \"&fio=\"+\$('#login_fio').val()+
                        \"&login=\"+\$('#login_name').val()+
                        \"&mail=\"+\$('#login_mail').val(),
                    success: function(html){
                        
                        if (html) {
                             \$.each(html, function(i, item) {
                                if (item.check_error == \"true\") {
                                    \$(\"#main_form_register\").html(item.msg);
                                    setTimeout(function() {window.location = \"./\";}, 5000);
                                }
                                else if (item.check_error == \"false\") {
                                    \$(\"#error_result\").html(item.msg);
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

    public function getTemplateName()
    {
        return "register.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 140,  194 => 139,  190 => 138,  165 => 116,  161 => 114,  156 => 112,  153 => 111,  151 => 110,  146 => 108,  142 => 107,  129 => 97,  122 => 93,  114 => 88,  110 => 87,  104 => 83,  102 => 82,  19 => 1,);
    }
}
