<?php

/* auth.view.tmpl */
class __TwigTemplate_890efce6b7d83bf7aa26b5de084d1ed913f035d8d5d27d9162ff7b8a33528577 extends Twig_Template
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
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <section class=\"invoice\">
      <!-- title row -->
      <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
          <div class=\"box box-default\">
            <div class=\"box-header with-border\">
              <center><h3 class=\"box-title\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["PORTAL_auth"]) ? $context["PORTAL_auth"] : null), "html", null, true);
        echo "</h3></center>
              <div class=\"box-tools pull-right\">
              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\">
                <div class=\"row\">
                  <div class=\"col-sm-12\">
                    <center><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
        echo "\" width=\"128\"></center><br><hr>
                  </div>
                  ";
        // line 18
        if (((isset($context["login_form"]) ? $context["login_form"] : null) == false)) {
            // line 19
            echo "                  <div class=\"col-sm-12\">
                    <br>
                    <div class=\"form-box\" id=\"login-box\">
                      <div class=\"alert alert-warning alert-dismissable\">
                        <h4><i class=\"icon fa fa-warning\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["LOGIN_ERROR_title"]) ? $context["LOGIN_ERROR_title"] : null), "html", null, true);
            echo "!</h4>
                        ";
            // line 24
            echo (isset($context["LOGIN_ERROR_desc"]) ? $context["LOGIN_ERROR_desc"] : null);
            echo "
                      </div>
                    </div>
                  </div>
                  ";
        }
        // line 29
        echo "                  ";
        if (((isset($context["login_form"]) ? $context["login_form"] : null) == true)) {
            // line 30
            echo "                  <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\" method=\"POST\" autocomplete=\"off\">
                    <div class=\"col-sm-12\">
                      <input type=\"text\" name=\"login\" autocomplete=\"off\" autocapitalize=\"off\" autocorrect=\"off\" class=\"form-control input-lg\" placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo "\"/><br>
                    </div>
                    <div class=\"col-sm-12\">
                      <input type=\"password\" name=\"password\" class=\"form-control input-lg\" placeholder=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : null), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"col-sm-12\">
                      <div class=\"form-group\">
                        <div class=\"checkbox\">
                          <center><label>
                            <input id=\"mc\" name=\"remember_me\" value=\"1\" type=\"checkbox\"> ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["remember_me"]) ? $context["remember_me"] : null), "html", null, true);
            echo "
                          </label></center>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-sm-12\">
                      <button class=\"btn btn-block btn-success btn-lg\"><i class=\"fa fa-sign-in\"></i>  ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["log_in"]) ? $context["log_in"] : null), "html", null, true);
            echo " </button>
                    </div>
                    <div class=\"col-sm-12\">
                      <br>
                      <center>
                      <small>
                      ";
            // line 53
            if (((isset($context["allow_register"]) ? $context["allow_register"] : null) == "true")) {
                // line 54
                echo "                      <a href=\"register\" class=\"text-center\">";
                echo twig_escape_filter($this->env, (isset($context["REG_new"]) ? $context["REG_new"] : null), "html", null, true);
                echo "</a>
                      ";
            }
            // line 56
            echo "                      ";
            if (((isset($context["allow_forgot"]) ? $context["allow_forgot"] : null) == "true")) {
                // line 57
                echo "                      | <a href=\"forgot\" class=\"text-center\">";
                echo twig_escape_filter($this->env, (isset($context["Forgot_pass_me"]) ? $context["Forgot_pass_me"] : null), "html", null, true);
                echo "</a>
                      ";
            }
            // line 59
            echo "                      </small>
                      </center>
                    </div>
                    <div class=\"col-sm-12\" id=\"error_result\">
                      ";
            // line 63
            if (((isset($context["va"]) ? $context["va"] : null) == "error")) {
                // line 64
                echo "                      <div class=\"alert alert-danger\" style=\"margin:20px;\">
                        <center>";
                // line 65
                echo (isset($context["error_auth"]) ? $context["error_auth"] : null);
                echo "</center>
                      </div>
                      ";
            }
            // line 68
            echo "                    </div>
                  </div>
                  <input type=\"hidden\" name=\"req_url\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
            echo "\">
                </form>
                ";
        }
        // line 73
        echo "                </div><!-- /.footer -->
              </div>
            </div>
          </div>
        </div>
        <!-- info row -->
      </section>
    </section>
  </div>";
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
        return array (  151 => 73,  145 => 70,  141 => 68,  135 => 65,  132 => 64,  130 => 63,  124 => 59,  118 => 57,  115 => 56,  109 => 54,  107 => 53,  98 => 47,  89 => 41,  80 => 35,  74 => 32,  67 => 30,  64 => 29,  56 => 24,  52 => 23,  46 => 19,  44 => 18,  39 => 16,  29 => 9,  19 => 1,);
    }
}
