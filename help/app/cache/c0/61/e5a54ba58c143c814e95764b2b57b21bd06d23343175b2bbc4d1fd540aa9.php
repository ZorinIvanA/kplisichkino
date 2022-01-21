<?php

/* client.dashboard.view.tmpl */
class __TwigTemplate_c061e5a54ba58c143c814e95764b2b57b21bd06d23343175b2bbc4d1fd540aa9 extends Twig_Template
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
                    
                        <i class=\"fa fa-tachometer\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_TITLE"]) ? $context["DASHBOARD_TITLE"] : null), "html", null, true);
        echo "
                        <small>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_title_ext"]) ? $context["DASHBOARD_title_ext"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_TITLE"]) ? $context["DASHBOARD_TITLE"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



<section class=\"content\">

    
    <div class=\"row\">
  
<div class=\"col-md-12\">


    <div class=\"row\">



";
        // line 27
        if (((isset($context["view_right"]) ? $context["view_right"] : null) == true)) {
            // line 28
            echo "<div class=\"col-md-12\">
<div class=\"alert alert-";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["global_msg_type"]) ? $context["global_msg_type"] : null), "html", null, true);
            echo " alert-dismissable\">
                                        <i class=\"fa fa-";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["gm_type"]) ? $context["gm_type"] : null), "html", null, true);
            echo "\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                        ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["global_msg_data"]) ? $context["global_msg_data"] : null), "html", null, true);
            echo "
                                    </div>
</div>
";
        }
        // line 36
        echo "</div>
</div>

  <div class=\"col-md-6\">
      <div class=\"row\">
          <div class=\"col-lg-4 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-aqua\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["get_total_client_tickets_out"]) ? $context["get_total_client_tickets_out"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["STATS_create"]) ? $context["STATS_create"] : null), "html", null, true);
        echo "
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"fa fa-upload\"></i>
                                </div>
                                <a href=\"list?out\" class=\"small-box-footer\">
                                    ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div>
          <div class=\"col-lg-4 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-yellow\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["get_total_client_tickets_lock"]) ? $context["get_total_client_tickets_lock"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["STATS_lock_o"]) ? $context["STATS_lock_o"] : null), "html", null, true);
        echo "
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"fa fa-lock\"></i>
                                </div>
                                <a href=\"list?in\" class=\"small-box-footer\">
                                    ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class=\"col-lg-4 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-green\">
                                <div class=\"inner\">
                                    <h3>
                                        ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["get_total_client_tickets_ok"]) ? $context["get_total_client_tickets_ok"] : null), "html", null, true);
        echo "
                                    </h3>
                                    <p>
                                        ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["STATS_ok_o"]) ? $context["STATS_ok_o"] : null), "html", null, true);
        echo "
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"fa fa-check\"></i>
                                </div>
                                <a href=\"list?in\" class=\"small-box-footer\">
                                    ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div>
      </div>
      
  </div>
  <div class=\"col-md-6\">
    <div class=\"box\">
    <div class=\"box-header\"><h3 class=\"box-title\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_messages"]) ? $context["DASHBOARD_messages"] : null), "html", null, true);
        echo "</h3></div>
    <div class=\"box-body\">
        
     <div class=\"callout callout-";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["style_msg"]) ? $context["style_msg"] : null), "html", null, true);
        echo "\">
                                        <h4>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["messages_title"]) ? $context["messages_title"] : null), "html", null, true);
        echo "</h4>
                                        <p>";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "</p>
                                    </div>
    
    </div>
    
    </div>
    </div>
  
  
                        
                        
                        

    </div>
    
    
    
    <div class=\"row\">
    
    
    <div class=\"col-md-6\">
    <div class=\"box\">
    <div class=\"box-header\"><h3 class=\"box-title\"><i class=\"fa fa-bullhorn\"></i> ";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_last_news"]) ? $context["DASHBOARD_last_news"] : null), "html", null, true);
        echo "</h3></div>
    <div class=\"box-body\">
    
<div id=\"last_news\" style=\"max-height: 135px;
scroll-behavior: initial;
overflow-y: scroll;\"></div>
    
    </div>
    
    </div>
    </div>
    
   <div class=\"col-md-6\">
    <div class=\"box\">
    <div class=\"box-header\"><h3 class=\"box-title\"><a href=\"helper\"><i class=\"fa fa-globe\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_last_help"]) ? $context["DASHBOARD_last_help"] : null), "html", null, true);
        echo "</a></h3></div>
    <div class=\"box-body\">
    
    ";
        // line 149
        echo (isset($context["get_client_helper"]) ? $context["get_client_helper"] : null);
        echo "
    
    </div>
    
    </div>
    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
    </div>
    

    
  
    
    

       
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "client.dashboard.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 149,  236 => 146,  219 => 132,  194 => 110,  190 => 109,  186 => 108,  180 => 105,  168 => 96,  158 => 89,  152 => 86,  138 => 75,  128 => 68,  122 => 65,  110 => 56,  100 => 49,  94 => 46,  82 => 36,  75 => 32,  70 => 30,  66 => 29,  63 => 28,  61 => 27,  40 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
