<?php

/* messages.view.tmpl */
class __TwigTemplate_ae257ed17e182845a898a56c04b2b67f3aeda55da245d9dec23980fce9b22576 extends Twig_Template
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







<div class=\"col-md-3\">
\t<div class=\"row\">
\t\t
\t\t<div class=\"col-md-12\">
\t\t\t<a id=\"select_main_chat\" class=\"btn btn-block btn-primary\" >";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_main"]) ? $context["MESSAGES_main"] : null), "html", null, true);
        echo "</a>
\t\t\t<br>
\t\t</div>
\t\t
\t\t<div class=\"col-md-12\">
\t\t
\t\t<div class=\"box box-info\">

                                <div class=\"box-body\">

                                
\t                                <input class=\"form-control input-sm\" id=\"find_user\" type=\"text\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_fio"]) ? $context["MESSAGES_fio"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["ufio"]) ? $context["ufio"] : null), "html", null, true);
        echo "\">
                                   
                                    
                                            <div id=\"user_list\" style=\"margin-top: 15px;\">
                                                <ul class=\"nav nav-pills nav-stacked\">
\t                                                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uarr"]) ? $context["uarr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "

                                                    ";
            // line 48
            if (($this->getAttribute($context["item"], "tuid", array()) == $this->getAttribute($context["item"], "uniq_id", array()))) {
                // line 49
                echo "                                                    <li class=\"user_li active\" user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                                    <a href=\"#\">
\t                                                    <img style=\"width: 25px;
height: 25px;\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "usr_img", array()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
                                                     ";
                // line 53
                echo $this->getAttribute($context["item"], "name_user", array());
                echo "
                                                     
                                                     ";
                // line 55
                echo $this->getAttribute($context["item"], "tt", array());
                echo "
                                                     </a>
                                                     </li>
                                                    ";
            }
            // line 59
            echo "               
               ";
            // line 60
            if (($this->getAttribute($context["item"], "get_act", array()) == false)) {
                // line 61
                echo "                                                    <li class=\"user_li\" user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                                    <a href=\"#\">
\t                                                    <img style=\"width: 25px;height: 25px;\" src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "usr_img", array()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
                                                     ";
                // line 64
                echo $this->getAttribute($context["item"], "name_user", array());
                echo "
                                                     
                                                     ";
                // line 66
                echo $this->getAttribute($context["item"], "tt", array());
                echo "
                                                     </a>
                                                     </li>

                                                     ";
            }
            // line 71
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                                    
                                                    
                                                </ul>
                                            </div>    
                                    
                                    
                                                                    </div><!-- /.box-body -->
                            </div>

";
        // line 81
        if (((isset($context["req_clients_status"]) ? $context["req_clients_status"] : null) == true)) {
            // line 82
            echo "<div class=\"box box-danger\">
                                <div class=\"box-header\">
                                    <h3 id=\"\" class=\"box-title\">
                                    
                                    ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["chat_rq"]) ? $context["chat_rq"] : null), "html", null, true);
            echo "
                                    
                                    </h3>

                                </div>

<div class=\"box-body\">
<ul class=\"nav nav-pills nav-stacked\">

";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rc"]) ? $context["rc"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 96
                echo "                        <li class=\"user_li\" user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
                echo "\">
                                                    <a href=\"#\">
                                                        <img style=\"width: 25px;height: 25px;\" src=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "img", array()), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array()), "html", null, true);
                echo "
                                                     </a>
                                                     </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "

</ul>
</div>


</div>
";
        }
        // line 111
        echo "
\t\t
\t</div>
\t\t
\t</div>
\t
</div>
<div class=\"col-md-9\">
\t\t
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\"><div class=\"box box-primary\" style=\"margin-bottom: 2px; height:100%;\">
                                <div class=\"box-header\">
                                    <h3 id=\"title_chat\" class=\"box-title\">
                                    
                                    ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["mwith"]) ? $context["mwith"] : null), "html", null, true);
        echo "
                                    
                                    </h3>

                                </div>
                                <div class=\"box-body\" >
\t                                

                                    <div class=\"box-body chat\" id=\"content_chat\" style=\" min-height: 350px; max-height: 350px; scroll-behavior: initial; overflow-y: scroll;\">
                                   ";
        // line 135
        echo (isset($context["view_messages"]) ? $context["view_messages"] : null);
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
        // line 148
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_sel_text"]) ? $context["MESSAGES_sel_text"] : null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_sel_text"]) ? $context["MESSAGES_sel_text"] : null), "html", null, true);
        echo "\">
                                        <div class=\"input-group-btn\">
                                            <button value=\"\" id=\"do_comment\" class=\"btn btn-success\"><i class=\"fa fa-comment\"></i></button>
                                            
                                            ";
        // line 152
        if (((isset($context["tget"]) ? $context["tget"] : null) == true)) {
            // line 153
            echo "                                   <input type=\"hidden\" id=\"target_user\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["get_user_val_by_hash"]) ? $context["get_user_val_by_hash"] : null), "html", null, true);
            echo "\">
                                   <input type=\"hidden\" id=\"total_msgs_main\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, (isset($context["get_total_msgs_main"]) ? $context["get_total_msgs_main"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t   
";
        } else {
            // line 157
            echo "<input type=\"hidden\" id=\"target_user\" value=\"main\">
<input type=\"hidden\" id=\"total_msgs_main\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["get_total_msgs_main"]) ? $context["get_total_msgs_main"] : null), "html", null, true);
            echo "\">
";
        }
        // line 160
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
        return "messages.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 160,  289 => 158,  286 => 157,  280 => 154,  275 => 153,  273 => 152,  264 => 148,  248 => 135,  236 => 126,  219 => 111,  209 => 103,  199 => 99,  195 => 98,  189 => 96,  185 => 95,  173 => 86,  167 => 82,  165 => 81,  154 => 72,  148 => 71,  140 => 66,  135 => 64,  131 => 63,  125 => 61,  123 => 60,  120 => 59,  113 => 55,  108 => 53,  104 => 52,  97 => 49,  95 => 48,  91 => 46,  87 => 45,  77 => 40,  63 => 29,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
