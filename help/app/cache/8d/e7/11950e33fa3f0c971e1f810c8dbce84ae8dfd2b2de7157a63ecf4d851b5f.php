<?php

/* client.helper.view.tmpl */
class __TwigTemplate_8de711950e33fa3f0c971e1f810c8dbce84ae8dfd2b2de7157a63ecf4d851b5f extends Twig_Template
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
";
        // line 2
        if (((isset($context["get_type"]) ? $context["get_type"] : null) == "h")) {
            // line 3
            echo "

<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "
                        
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "index.php\"><span class=\"icon-svg\"></span> ";
            echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
            echo "</a></li>
                        <li class=\"active\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "</li>
                    </ol>
                </section>
                
                
                
            <section class=\"content\">


<div class=\"row\">
    <div class=\"col-md-1\">
        <a id=\"go_back\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa fa-reply\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["HELPER_back"]) ? $context["HELPER_back"] : null), "html", null, true);
            echo "</a>
    </div>
    
    
    <div class=\"col-md-10\">
        <div class=\"box box-solid\">
            <div class=\"box-body\">
            <h3 style=\" margin-top: 0px; \">";
            // line 30
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
    <p>";
            // line 31
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</p>
    <hr>
    
    <p class=\"text-right\"><small class=\"text-muted\">";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["HELPER_pub"]) ? $context["HELPER_pub"] : null), "html", null, true);
            echo ": ";
            echo (isset($context["user_init_id"]) ? $context["user_init_id"] : null);
            echo "</small><br><small class=\"text-muted\"> <time id=\"c\" datetime=\"";
            echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
            echo "\"></time></small>
    <br><a id=\"print_t\" class=\"btn btn-default btn-xs\"> <i class=\"fa fa-print\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["HELPER_print"]) ? $context["HELPER_print"] : null), "html", null, true);
            echo "</a>
        </p>
            </div>
        </div>
    </div>
</div>
            </section>

";
        }
        // line 44
        echo "



";
        // line 48
        if (((isset($context["get_type"]) ? $context["get_type"] : null) == "cat")) {
            // line 49
            echo "<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "
                        <small>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "index.php\"><span class=\"icon-svg\"></span> ";
            echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
            echo "</a></li>
                        <li class=\"active\"><a href=\"helper\">";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "</a></li>
                        <li class=\"active\">";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "</li>
                    </ol>
</section>
                
                
                
            <section class=\"content\">







                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    

                    <div class=\"col-md-12\" id=\"help_content\">
                    
                    </div>
                                    
                                    
                                    
                    
                    
                    
                    </div>

                    
                    <div class=\"col-md-9\">
                         <div class=\"box box-solid\">


                                <div class=\"\">
                                   ";
            // line 96
            echo (isset($context["show_item_helper_cat"]) ? $context["show_item_helper_cat"] : null);
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

";
        }
        // line 104
        echo "





";
        // line 110
        if (((isset($context["get_type"]) ? $context["get_type"] : null) == "else")) {
            // line 111
            echo " <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "
                        <small>";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["HELPER_title_ext"]) ? $context["HELPER_title_ext"] : null), "html", null, true);
            echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "index.php\"><span class=\"icon-svg\"></span> ";
            echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
            echo "</a></li>
                        <li class=\"active\">";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
            echo "</li>
                    </ol>
                </section>
                
                
                
            <section class=\"content\">


<div class=\"row\">
    
    <div class=\"col-md-12\">
        <div class=\"box box-solid\">
            <div class=\"box-body\"><div class=\"input-group\">
                        <input type=\"text\" class=\"form-control input-sm\" id=\"find_helper\" autofocus placeholder=\"";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["HELPER_desc"]) ? $context["HELPER_desc"] : null), "html", null, true);
            echo "\">
      <span class=\"input-group-btn\">
        <button id=\"\" class=\"btn btn-default btn-sm\" type=\"submit\"><i class=\"fa fa-search\"></i> ";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["HELPER_find"]) ? $context["HELPER_find"] : null), "html", null, true);
            echo "</button>
      </span>
                    </div>
            </div>
        </div>
    </div>
</div>



                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    <div class=\"callout callout-info\">
                                        
                                        <small> <i class=\"fa fa-info-circle\"></i> 
";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["HELPER_info"]) ? $context["HELPER_info"] : null), "html", null, true);
            echo "
         </small>
                                    </div>
                                    
                                    
                                    
                    
                    
                    
                    </div>
                    
                    <div class=\"col-md-9\" id=\"help_content\">
                    
                    </div>
                    
                    
                    
                    
                    
                    </div>
            </section>    
";
        }
        // line 175
        echo "
";
    }

    public function getTemplateName()
    {
        return "client.helper.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 175,  256 => 153,  234 => 134,  229 => 132,  212 => 118,  206 => 117,  200 => 114,  196 => 113,  192 => 111,  190 => 110,  182 => 104,  171 => 96,  129 => 57,  125 => 56,  119 => 55,  113 => 52,  109 => 51,  105 => 49,  103 => 48,  97 => 44,  85 => 35,  77 => 34,  71 => 31,  67 => 30,  57 => 23,  43 => 12,  37 => 11,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
