<?php

/* register.view.tmpl */
class __TwigTemplate_89a021283796e482627f5efe4f4166381cd5f5ed3950984d1c1bd4f5b2ee6ae9 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["PORTAL_reg_user"]) ? $context["PORTAL_reg_user"] : null), "html", null, true);
        echo "</h3></center>
              <div class=\"box-tools pull-right\">

              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\">
                <div class=\"row\">
                  <div class=\"col-sm-6 col-sm-offset-3\">
                    <center><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
        echo "\" width=\"128\"></center><br><hr>
                  </div>
                  <form class=\"form-horizontal\" id=\"main_form_register\">
                    <div class=\"col-sm-12\">
                      <input id=\"login_fio\" class=\"form-control input-lg\" type=\"text\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["PORTAL_fio"]) ? $context["PORTAL_fio"] : null), "html", null, true);
        echo "\"><br>
                    </div>
                    <div class=\"col-sm-12\">
                      <input id=\"login_name\" class=\"form-control input-lg\" type=\"text\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["PORTAL_login_name"]) ? $context["PORTAL_login_name"] : null), "html", null, true);
        echo "\"><br>
                    </div>
                    <div class=\"col-sm-12\">
                      <input id=\"login_mail\" class=\"form-control input-lg\" type=\"text\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["PORTAL_email"]) ? $context["PORTAL_email"] : null), "html", null, true);
        echo "\"><br>
                    </div>
                    <div class=\"col-sm-12\">
                      <button class=\"btn btn-block btn-success btn-lg\" id=\"register_new\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["PORTAL_reg"]) ? $context["PORTAL_reg"] : null), "html", null, true);
        echo " </button>
                    </div>
                    <div class=\"col-sm-12\"><br><br></div>
                    <div class=\"col-sm-12\" id=\"error_result\">
                    </div>
                  </form>
                  </div><!-- /.footer -->
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
        return "register.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  59 => 27,  53 => 24,  47 => 21,  40 => 17,  29 => 9,  19 => 1,);
    }
}
