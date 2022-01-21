<?php

/* clients.view.tmpl */
class __TwigTemplate_37b1933614a00cb20d5fd095b84b643aa06f88089d67116c802b42b259d7a9c1 extends Twig_Template
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
        echo "<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-users\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["USERS_list"]) ? $context["USERS_list"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["UNITS_title_ext"]) ? $context["UNITS_title_ext"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["USERS_list"]) ? $context["USERS_list"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>
                
                
<section class=\"content\">


<div class=\"row\">

<div class=\"col-md-3\">


<div class=\"row\">

<div class=\"col-md-12\">
\t<div class=\"box box-solid\">
\t<div class=\"box-body\">

";
        // line 27
        if (((isset($context["priv_add_client"]) ? $context["priv_add_client"] : null) == true)) {
            // line 28
            echo "
\t
\t<a href=\"clients?add\" class=\"btn btn-success btn-block\"><i class=\"fa fa-male\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["USERS_create"]) ? $context["USERS_create"] : null), "html", null, true);
            echo "</a>
\t";
        }
        // line 32
        echo "\t<a href=\"clients?list\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list-alt\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["USERS_list"]) ? $context["USERS_list"] : null), "html", null, true);
        echo "</a>
\t
\t

\t</div>
\t</div>
</div>
<div class=\"col-md-12\">
                    

                    <div class=\"callout \">
                                        
                                        <small> <i class=\"fa fa-info-circle\"></i> 
";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["WORKERS_info"]) ? $context["WORKERS_info"] : null), "html", null, true);
        echo "
\t     </small>
                                    </div>
                                    
                                    
                                    
                    
                    
                    
                    </div>
                    
                    
</div>
</div>





<div class=\"col-md-9\">

<div class=\"row\">
\t";
        // line 67
        if (((isset($context["ae"]) ? $context["ae"] : null) == true)) {
            // line 68
            echo "<div class=\"col-md-12\">
\t<div class=\"box box-solid\">
\t<div class=\"box-body\">
\t
\t<input type=\"text\" class=\"form-control input-sm\" id=\"fio_find_admin\" autofocus placeholder=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["NEW_fio"]) ? $context["NEW_fio"] : null), "html", null, true);
            echo "\">
\t

\t</div>
\t</div>
</div>
";
        }
        // line 79
        echo "\t
<div class=\"col-md-12\">
\t
\t
";
        // line 83
        if (((isset($context["get_menu"]) ? $context["get_menu"] : null) == "add")) {
            // line 84
            echo (isset($context["clients_inc"]) ? $context["clients_inc"] : null);
            echo "
";
        }
        // line 86
        echo "

";
        // line 88
        if (((isset($context["get_menu"]) ? $context["get_menu"] : null) == "list")) {
            // line 89
            echo "\t 
\t\t<div id=\"content_clients\">
\t\t";
            // line 91
            echo (isset($context["clients_inc"]) ? $context["clients_inc"] : null);
            echo "
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div class=\"text-center\"><ul id=\"example_clients\" class=\"pagination pagination-sm\"></ul></div>
                    <input type=\"hidden\" id=\"cur_page\" value=\"1\">
                    <input type=\"hidden\" id=\"total_pages\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_clients"]) ? $context["get_total_pages_clients"] : null), "html", null, true);
            echo "\">
\t";
        }
        // line 100
        echo "
";
        // line 101
        if (((isset($context["get_menu"]) ? $context["get_menu"] : null) == "edit")) {
            // line 102
            echo "
\t\t";
            // line 103
            echo (isset($context["clients_inc"]) ? $context["clients_inc"] : null);
            echo "

";
        }
        // line 106
        echo "
";
        // line 107
        if (((isset($context["get_menu"]) ? $context["get_menu"] : null) == "else")) {
            // line 108
            echo "   
\t\t<div id=\"content_clients\">
\t\t";
            // line 110
            echo (isset($context["clients_inc"]) ? $context["clients_inc"] : null);
            echo "
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div class=\"text-center\"><ul id=\"example_clients\" class=\"pagination pagination-sm\"></ul></div>
                    <input type=\"hidden\" id=\"cur_page\" value=\"1\">
                    <input type=\"hidden\" id=\"total_pages\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_clients"]) ? $context["get_total_pages_clients"] : null), "html", null, true);
            echo "\">
\t
";
        }
        // line 120
        echo "\t
\t</div>
</div>





</div>
</section>";
    }

    public function getTemplateName()
    {
        return "clients.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 120,  203 => 117,  193 => 110,  189 => 108,  187 => 107,  184 => 106,  178 => 103,  175 => 102,  173 => 101,  170 => 100,  165 => 98,  155 => 91,  151 => 89,  149 => 88,  145 => 86,  140 => 84,  138 => 83,  132 => 79,  122 => 72,  116 => 68,  114 => 67,  89 => 45,  72 => 32,  67 => 30,  63 => 28,  61 => 27,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
