<?php

/* client.messages.view.tmpl */
class __TwigTemplate_7f23d755283e5cd879ed2482d85fe4825972129c6dfe32828d4fd38d1d491fc4 extends Twig_Template
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
                        <i class=\"fa fa-comments\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_us"]) ? $context["MESSAGES_us"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_us_ext"]) ? $context["MESSAGES_us_ext"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_us"]) ? $context["MESSAGES_us"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



<section class=\"content\">


<div class=\"row\">








<div class=\"col-md-12\">
\t\t
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\"><div class=\"box box-primary\" style=\"margin-bottom: 2px; height:100%;\">
                                <div class=\"box-header\">
                                    <h3 id=\"title_chat\" class=\"box-title\">
                                    
                                    ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["mwith"]) ? $context["mwith"] : null), "html", null, true);
        echo "
                                    
                                    </h3>

                                </div>
                                <div class=\"box-body\" >
\t                                

                                    <div class=\"box-body chat\" id=\"content_chat_client\" style=\" min-height: 350px; max-height: 350px; scroll-behavior: initial; overflow-y: scroll;\">
                                   


";
        // line 46
        echo (isset($context["chat_msgs"]) ? $context["chat_msgs"] : null);
        echo "



                                    </div>
                                    
                                                                   </div><!-- /.box-body -->\t                                
                                    <div class=\"loading1 \"></div>
\t                                <div class=\"loading2 \"></div>
                            </div></div>
\t\t\t<div class=\"col-md-12\"><div class=\"box box-solid\">
                                
                                <div class=\"box-body\">
\t                                
\t                                
                                   <div class=\"input-group\" id=\"for_msg\">
                                        <input name=\"msg\" id=\"msg\" class=\"form-control\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"top\" data-content=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_sel_text"]) ? $context["MESSAGES_sel_text"] : null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_sel_text"]) ? $context["MESSAGES_sel_text"] : null), "html", null, true);
        echo "\">
                                        <div class=\"input-group-btn\">
                                            <button value=\"\" id=\"do_commentClient\" class=\"btn btn-success\"><i class=\"fa fa-comment\"></i></button>
                                            
                                            ";
        // line 66
        if (((isset($context["tget"]) ? $context["tget"] : null) == true)) {
            // line 67
            echo "                                   <input type=\"hidden\" id=\"target_user\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["get_user_val_by_hash"]) ? $context["get_user_val_by_hash"] : null), "html", null, true);
            echo "\">
                                   <input type=\"hidden\" id=\"total_msgs_main\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["get_total_msgs_main"]) ? $context["get_total_msgs_main"] : null), "html", null, true);
            echo "\">
                                   <input type=\"hidden\" id=\"client_part\" value=\"true\">
\t\t\t\t\t\t\t\t\t   
";
        } else {
            // line 72
            echo "<input type=\"hidden\" id=\"target_user\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["active_chat"]) ? $context["active_chat"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"total_msgs_main\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["get_total_msgs_main"]) ? $context["get_total_msgs_main"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"client_part\" value=\"true\">
";
        }
        // line 76
        echo "                                            
                                            
                                            

                                            
                                            
                                            
                                        </div>
                                    </div>
                                    
                                                                   </div><!-- /.box-body -->
                            </div></div>
\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t</div>











</div>



</section>";
    }

    public function getTemplateName()
    {
        return "client.messages.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 76,  130 => 73,  125 => 72,  118 => 68,  113 => 67,  111 => 66,  102 => 62,  83 => 46,  68 => 34,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
