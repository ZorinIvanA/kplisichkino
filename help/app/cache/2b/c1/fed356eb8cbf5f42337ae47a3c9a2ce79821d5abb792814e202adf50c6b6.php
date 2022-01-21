<?php

/* client.list.view.tmpl */
class __TwigTemplate_2bc1fed356eb8cbf5f42337ae47a3c9a2ce79821d5abb792814e202adf50c6b6 extends Twig_Template
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
                        <i class=\"fa fa-list-alt\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["LIST_title"]) ? $context["LIST_title"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["unit_name"]) ? $context["unit_name"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><span class=\"icon-svg\"></span> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["LIST_title"]) ? $context["LIST_title"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>
                
<section class=\"content\">
<div class=\"row\">
<div class=\"col-md-12\">
    
    
    <div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    

                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
    <input type=\"hidden\" id=\"main_last_new_ticket\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["get_last_ticket_new"]) ? $context["get_last_ticket_new"] : null), "html", null, true);
        echo "\">
    <div class=\"\">
        


        <div id=\"spinner\" class=\"well well-large well-transparent lead\">
            <center>
                <i class=\"fa fa-spinner fa-spin icon-2x\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["LIST_loading"]) ? $context["LIST_loading"] : null), "html", null, true);
        echo " ...
            </center>
        </div>
        <div id=\"content\">



            

";
        // line 39
        if (((isset($context["get_out"]) ? $context["get_out"] : null) == true)) {
            // line 40
            echo (isset($context["client_list_page"]) ? $context["client_list_page"] : null);
            echo "
";
        }
        // line 42
        echo "


</div>

        <div id=\"alert-content\"></div>
    </div>
</div>
    
                <div class=\"box-footer clearfix\">
";
        // line 52
        if (((isset($context["get_out"]) ? $context["get_out"] : null) == true)) {
            // line 53
            echo "
                
                                                            
                                        
                <div class=\"text-center\">
                                                        
                    <ul id=\"client_example_out\" class=\"pagination pagination-sm\"></ul>
                                            <div class=\"pull-right\">
                            
                            <div class=\"btn-group btn-group-xs\">
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["ac_10"]) ? $context["ac_10"] : null), "html", null, true);
            echo "\">10</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["ac_15"]) ? $context["ac_15"] : null), "html", null, true);
            echo "\">15</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["ac_20"]) ? $context["ac_20"] : null), "html", null, true);
            echo "\">20</button>
</div>
                            
                        </div>
                        
                </div>            
";
        }
        // line 72
        if (((isset($context["nn"]) ? $context["nn"] : null) == 0)) {
            // line 73
            echo "            <input type=\"hidden\" id=\"curent_page\" value=\"null\">
            <input type=\"hidden\" id=\"page_type\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
            echo "\">
            ";
        }
        // line 76
        if (((isset($context["nn"]) ? $context["nn"] : null) != 0)) {
            // line 77
            echo "

            <input type=\"hidden\" id=\"page_type\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["r"]) ? $context["r"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"curent_page\" value=\"1\">
            <input type=\"hidden\" id=\"cur_page\" value=\"1\">


            <input type=\"hidden\" id=\"total_pages\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["get_total_pages"]) ? $context["get_total_pages"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"last_ticket\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["get_last_ticket"]) ? $context["get_last_ticket"] : null), "html", null, true);
            echo "\">

        ";
        }
        // line 88
        echo "
</div>
</div>
    </section>";
    }

    public function getTemplateName()
    {
        return "client.list.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 88,  156 => 85,  152 => 84,  144 => 79,  140 => 77,  138 => 76,  133 => 74,  130 => 73,  128 => 72,  118 => 65,  114 => 64,  110 => 63,  98 => 53,  96 => 52,  84 => 42,  79 => 40,  77 => 39,  65 => 30,  55 => 23,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
