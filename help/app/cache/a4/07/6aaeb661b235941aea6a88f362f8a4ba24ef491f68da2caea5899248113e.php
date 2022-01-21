<?php

/* list.view.tmpl */
class __TwigTemplate_a4076aaeb661b235941aea6a88f362f8a4ba24ef491f68da2caea5899248113e extends Twig_Template
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
                        <small>
                            ";
        // line 5
        if (((isset($context["priv_val"]) ? $context["priv_val"] : null) != "2")) {
            // line 6
            echo "                            
                                <span data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["LIST_pin"]) ? $context["LIST_pin"] : null), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["c_text"]) ? $context["c_text"] : null), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 10
        if (((isset($context["priv_val"]) ? $context["priv_val"] : null) == "2")) {
            // line 11
            echo "                               
        ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
    
    ";
        }
        // line 15
        echo "                            
                        </small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><span class=\"icon-svg\"></span> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["LIST_title"]) ? $context["LIST_title"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>
                
<section class=\"content\">
<div class=\"row\">
<div class=\"col-md-12\">
    
    
    <div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    
                                    <div class=\"box-tools\">
                                    
                                    <div class=\"pull-left\" >


";
        // line 37
        echo (isset($context["cur_sort"]) ? $context["cur_sort"] : null);
        echo "
";
        // line 38
        echo (isset($context["cur_sort_p"]) ? $context["cur_sort_p"] : null);
        echo "

                                    </div>

                                    
                                    
                                    
                                        
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
    <input type=\"hidden\" id=\"main_last_new_ticket\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["get_last_ticket_new"]) ? $context["get_last_ticket_new"] : null), "html", null, true);
        echo "\">
    <div class=\"\">
        
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default btn-sm btn-flat ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["status_in"]) ? $context["status_in"] : null), "html", null, true);
        echo " \" role=\"button\" href=\"list?in\"><i
                    class=\"fa fa-download\"></i> ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["LIST_in"]) ? $context["LIST_in"] : null), "html", null, true);
        echo " <span
                    id=\"label_list_in\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["newtickets"]) ? $context["newtickets"] : null), "html", null, true);
        echo " </span></a>
            <a class=\"btn btn-default btn-sm btn-flat ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["status_out"]) ? $context["status_out"] : null), "html", null, true);
        echo "\" role=\"button\" id=\"link_out\" href=\"list?out\"><i
                    class=\"fa fa-upload\"></i> ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["LIST_out"]) ? $context["LIST_out"] : null), "html", null, true);
        echo " <span
                    id=\"label_list_out\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["out_tickets"]) ? $context["out_tickets"] : null), "html", null, true);
        echo "</span> </a>
            <a class=\"btn btn-default btn-sm btn-flat ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["status_arch"]) ? $context["status_arch"] : null), "html", null, true);
        echo "\" role=\"button\" href=\"list?arch\"><i
                    class=\"fa fa-archive\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["LIST_arch"]) ? $context["LIST_arch"] : null), "html", null, true);
        echo "</a>
        </div>




        <br>

        <div id=\"spinner\" class=\"well well-large well-transparent lead\">
            <center>
                <i class=\"fa fa-spinner fa-spin icon-2x\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["LIST_loading"]) ? $context["LIST_loading"] : null), "html", null, true);
        echo " ...
            </center>
        </div>
        <div id=\"content\">


";
        // line 76
        echo (isset($context["list_tables"]) ? $context["list_tables"] : null);
        echo "


        </div>

        <div id=\"alert-content\"></div>
    </div>
</div>
    
                <div class=\"box-footer clearfix\">

    

                                
               ";
        // line 90
        if (((isset($context["r"]) ? $context["r"] : null) == "in")) {
            echo "                 
        
                                
                    
                    <div class=\"pull-left\">
                    
<div class=\"btn-group btn-group-xs\">
  
  <button  id=\"sort_list\" value=\"main\" type=\"button\" class=\"btn btn-primary ";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["button_sort_in_main"]) ? $context["button_sort_in_main"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_def"]) ? $context["ticket_sort_def"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-home\"></i> </button>
  
    <button  id=\"sort_list\" value=\"free\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["STATS_t_free"]) ? $context["STATS_t_free"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-info ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_in_free"]) ? $context["button_sort_in_free"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-circle-thin\"></i> </button>
    
  <button  id=\"sort_list\" value=\"ok\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_ok"]) ? $context["ticket_sort_ok"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_in_ok"]) ? $context["button_sort_in_ok"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-check-circle\"></i> </button>
  
  <button  id=\"sort_list\" value=\"ilock\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_ilock"]) ? $context["ticket_sort_ilock"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_in_ilock"]) ? $context["button_sort_in_ilock"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-gavel\"></i> </button>
  
  <button  id=\"sort_list\" value=\"lock\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_lock"]) ? $context["ticket_sort_lock"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_in_lock"]) ? $context["button_sort_in_lock"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-gavel\"></i> </button>

</div>
                    
                    
                    
                                        </div>
                    <div class=\"text-center\">
                        
                    
                        
                        <ul id=\"example_in\" class=\"pagination pagination-sm\"></ul>
                        <div class=\"pull-right\">
                            
                            <div class=\"btn-group btn-group-xs\">
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["ac_10"]) ? $context["ac_10"] : null), "html", null, true);
            echo "\">10</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["ac_15"]) ? $context["ac_15"] : null), "html", null, true);
            echo "\">15</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["ac_20"]) ? $context["ac_20"] : null), "html", null, true);
            echo "\">20</button>
</div>
                            
                        </div>
                    </div></div>
                
";
        }
        // line 130
        if (((isset($context["r"]) ? $context["r"] : null) == "out")) {
            echo " 
                
                    <div class=\"pull-left\">
                    
<div class=\"btn-group btn-group-xs\">
  
  <button id=\"sort_list\" value=\"main\" type=\"button\" class=\"btn btn-primary ";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["button_sort_out_main"]) ? $context["button_sort_out_main"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_def"]) ? $context["ticket_sort_def"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-home\"></i> </button>
  
        <button  id=\"sort_list\" value=\"free\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["STATS_t_free"]) ? $context["STATS_t_free"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-info ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_out_free"]) ? $context["button_sort_out_free"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-circle-thin\"></i> </button>
        
  <button id=\"sort_list\" value=\"ok\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_ok"]) ? $context["ticket_sort_ok"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_out_ok"]) ? $context["button_sort_out_ok"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-check-circle\"></i> </button>
  
  <button id=\"sort_list\" value=\"ilock\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_ilock"]) ? $context["ticket_sort_ilock"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_out_ilock"]) ? $context["button_sort_out_ilock"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-gavel\"></i> </button>
  
  <button id=\"sort_list\" value=\"lock\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["ticket_sort_lock"]) ? $context["ticket_sort_lock"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default ";
            echo twig_escape_filter($this->env, (isset($context["button_sort_out_lock"]) ? $context["button_sort_out_lock"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-gavel\"></i> </button>

</div>
                    
                    
                    
                                        </div>



                                        
                <div class=\"text-center\">
                                                        
                    <ul id=\"example_out\" class=\"pagination pagination-sm\"></ul>
                                            <div class=\"pull-right\">
                            
                            <div class=\"btn-group btn-group-xs\">
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["ac_10"]) ? $context["ac_10"] : null), "html", null, true);
            echo "\">10</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["ac_15"]) ? $context["ac_15"] : null), "html", null, true);
            echo "\">15</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["ac_20"]) ? $context["ac_20"] : null), "html", null, true);
            echo "\">20</button>
</div>
                            
                        </div>
                        
                </div>
 
                            ";
        }
        // line 171
        if (((isset($context["r"]) ? $context["r"] : null) == "arch")) {
            echo " 
              
                <div class=\"text-center\">
                                                        <ul id=\"example_arch\" class=\"pagination pagination-sm\"></ul>
                    
                                            <div class=\"pull-right\">
                                            <div class=\"btn-group btn-group-xs\">
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["ac_10"]) ? $context["ac_10"] : null), "html", null, true);
            echo "\">10</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["ac_15"]) ? $context["ac_15"] : null), "html", null, true);
            echo "\">15</button>
  <button id=\"list_set_ticket\" type=\"button\" class=\"btn btn-default ";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["ac_20"]) ? $context["ac_20"] : null), "html", null, true);
            echo "\">20</button>
</div></div>


                </div>

";
        }
        // line 186
        echo " 

";
        // line 188
        if (((isset($context["nn"]) ? $context["nn"] : null) == "0")) {
            // line 189
            echo "            <input type=\"hidden\" id=\"curent_page\" value=\"null\">
            <input type=\"hidden\" id=\"page_type\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
            echo "\">
";
        }
        // line 192
        if (((isset($context["nn"]) ? $context["nn"] : null) != "0")) {
            // line 193
            echo "
            <input type=\"hidden\" id=\"page_type\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["r"]) ? $context["r"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"curent_page\" value=\"1\">
            <input type=\"hidden\" id=\"cur_page\" value=\"1\">


            <input type=\"hidden\" id=\"total_pages\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_menu"]) ? $context["get_total_pages_menu"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"last_ticket\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["last_ticket"]) ? $context["last_ticket"] : null), "html", null, true);
            echo "\">

";
        }
        // line 203
        echo "


                            
                            
                            
                            
                            
    






</div>
</div>
    </section>";
    }

    public function getTemplateName()
    {
        return "list.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 203,  390 => 200,  386 => 199,  378 => 194,  375 => 193,  373 => 192,  368 => 190,  365 => 189,  363 => 188,  359 => 186,  349 => 180,  345 => 179,  341 => 178,  331 => 171,  320 => 163,  316 => 162,  312 => 161,  290 => 144,  283 => 142,  276 => 140,  269 => 138,  262 => 136,  253 => 130,  243 => 123,  239 => 122,  235 => 121,  215 => 106,  208 => 104,  201 => 102,  194 => 100,  187 => 98,  176 => 90,  159 => 76,  150 => 70,  137 => 60,  133 => 59,  129 => 58,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  102 => 49,  88 => 38,  84 => 37,  64 => 20,  60 => 19,  54 => 15,  48 => 12,  45 => 11,  43 => 10,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
