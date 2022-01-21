<?php

/* navbar.view.tmpl */
class __TwigTemplate_dcd5b7f79e3840d55ee9046c6fa98f820c2e94e3385f3e387f4e93b90ed613e0 extends Twig_Template
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
        echo "<header class=\"main-header\">
  <nav class=\"navbar navbar-static-top\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\" style=\"border-right: 1px solid #eee;\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\" class=\"logo\" style=\"
        color: black;
        \">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["get_logo_img"]) ? $context["get_logo_img"] : null), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "
        </a>
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
        <i class=\"fa fa-bars\"></i>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
        <ul class=\"nav navbar-nav\">
          <li ";
        // line 17
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "feed")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "feed\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_news"]) ? $context["PORTAL_news"] : null), "html", null, true);
        echo " </a></li>
          <li ";
        // line 18
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "version")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "version\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_versions"]) ? $context["PORTAL_versions"] : null), "html", null, true);
        echo " </a></li>
          <li ";
        // line 19
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "manual")) {
            echo " class=\"active\" ";
        }
        echo "> <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "manual\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_help_center"]) ? $context["PORTAL_help_center"] : null), "html", null, true);
        echo "</a></li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["PORTAL_cats"]) ? $context["PORTAL_cats"] : null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?1\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_idea"]) ? $context["PORTAL_idea"] : null), "html", null, true);
        echo "</a></li>
              <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?2\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble"]) ? $context["PORTAL_trouble"] : null), "html", null, true);
        echo "</a></li>
              <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?3\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_question"]) ? $context["PORTAL_question"] : null), "html", null, true);
        echo "</a></li>
              <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?4\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_thank"]) ? $context["PORTAL_thank"] : null), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>
        <form class=\"navbar-form navbar-left\" role=\"search\" method=\"get\" action=\"manual\">
          <div class=\"form-group\">
            <input type=\"text\" name=\"find\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["PORTAL_find"]) ? $context["PORTAL_find"] : null), "html", null, true);
        echo "\"><button id=\"find_in_manual\" class=\"\" style=\"display:none;\" type=\"submit\"></button>
          </div>
        </form>
        <ul class=\"nav navbar-nav navbar-right\">
          ";
        // line 36
        if (((isset($context["validate"]) ? $context["validate"] : null) == true)) {
            // line 37
            echo "          <li class=\"\">
            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "dashboard\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_helpdesk"]) ? $context["PORTAL_helpdesk"] : null), "html", null, true);
            echo "</a>
          </li>
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["get_user_img"]) ? $context["get_user_img"] : null), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
            <span>";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
            echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header \">
                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["get_user_img"]) ? $context["get_user_img"] : null), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                <p>
                ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
            echo "
                <small>";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["posada"]) ? $context["posada"] : null), "html", null, true);
            echo "</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "profile\" class=\"btn btn-default btn-flat\"> <i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
            echo "</a></a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "logout\" class=\"btn btn-default btn-flat\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_logout"]) ? $context["PORTAL_logout"] : null), "html", null, true);
            echo "</a>
                </div>
              </li>
            </ul>
          </li>
          ";
        }
        // line 67
        echo "          ";
        if (((isset($context["validate"]) ? $context["validate"] : null) == false)) {
            // line 68
            echo "          <li><a href=\"auth\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_login"]) ? $context["PORTAL_login"] : null), "html", null, true);
            echo "</a></li>
          ";
            // line 69
            if (((isset($context["allow_register"]) ? $context["allow_register"] : null) == "true")) {
                // line 70
                echo "          <li><a href=\"register\"><i class=\"fa fa-user\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["PORTAL_register"]) ? $context["PORTAL_register"] : null), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 72
            echo "          ";
        }
        // line 73
        echo "

        </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>";
    }

    public function getTemplateName()
    {
        return "navbar.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 73,  197 => 72,  191 => 70,  189 => 69,  184 => 68,  181 => 67,  170 => 61,  162 => 58,  152 => 51,  148 => 50,  143 => 48,  135 => 43,  131 => 42,  122 => 38,  119 => 37,  117 => 36,  110 => 32,  99 => 26,  93 => 25,  87 => 24,  81 => 23,  76 => 21,  65 => 19,  55 => 18,  45 => 17,  31 => 8,  25 => 5,  19 => 1,);
    }
}
