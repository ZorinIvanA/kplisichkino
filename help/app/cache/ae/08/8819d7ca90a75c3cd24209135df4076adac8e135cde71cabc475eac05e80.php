<?php

/* client.list_content.view.tmpl */
class __TwigTemplate_ae088819d7ca90a75c3cd24209135df4076adac8e135cde71cabc475eac05e80 extends Twig_Template
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
        // line 3
        if (((isset($context["aha"]) ? $context["aha"] : null) == "0")) {
            // line 4
            echo "
<div id=\"spinner\" class=\"well well-large well-transparent lead\">
                <center>";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center>
            </div>
";
        }
        // line 9
        echo "




 


";
        // line 17
        if (((isset($context["aha"]) ? $context["aha"] : null) != "0")) {
            // line 18
            echo "
            <input type=\"hidden\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["get_total_pages"]) ? $context["get_total_pages"] : null), "html", null, true);
            echo "\" id=\"val_menu\">


            <table class=\"table table-bordered table-hover\" style=\" font-size: 14px; \">
                <thead>
                <tr>
                    <th><center>#</center></th>
                    <th><center><i class=\"fa fa-info-circle\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["t_LIST_prio"]) ? $context["t_LIST_prio"] : null), "html", null, true);
            echo "\"></i></center></th>
                    <th><center>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["t_LIST_subj"]) ? $context["t_LIST_subj"] : null), "html", null, true);
            echo "</center></th>
                    <th><center>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["t_LIST_create"]) ? $context["t_LIST_create"] : null), "html", null, true);
            echo "</center></th>
                    ";
            // line 29
            if (((isset($context["mu_status"]) ? $context["mu_status"] : null) == true)) {
                // line 30
                echo "                    <th><center>
                    ";
                // line 31
                echo (isset($context["t_LIST_init"]) ? $context["t_LIST_init"] : null);
                echo "
                    </center></th>
                    ";
            }
            // line 34
            echo "                    ";
            if (((isset($context["mu_status"]) ? $context["mu_status"] : null) == true)) {
                // line 35
                echo "                    <th><center>
                    ";
                // line 36
                echo (isset($context["t_LIST_worker"]) ? $context["t_LIST_worker"] : null);
                echo "
                    </center></th>
                    ";
            }
            // line 39
            echo "                    <th><center>";
            echo twig_escape_filter($this->env, (isset($context["t_LIST_ago"]) ? $context["t_LIST_ago"] : null), "html", null, true);
            echo "</center></th>
                    <th><center>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["t_LIST_to"]) ? $context["t_LIST_to"] : null), "html", null, true);
            echo "</center></th>
                    <th><center>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["t_LIST_status"]) ? $context["t_LIST_status"] : null), "html", null, true);
            echo "</center></th>
                </tr>
                </thead>
                <tbody>


";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticket_arr"]) ? $context["ticket_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "
<tr id=\"tr_";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "style", array()), "html", null, true);
                echo "\">
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</center></small></td>
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 51
                echo $this->getAttribute($context["item"], "prio", array());
                echo "</center></small></td>
                        <td style=\" vertical-align: middle; \"><a class=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo " pops\"  
                    title=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo "\"
                    data-content=\"<small>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "msg", array()), "html", null, true);
                echo "</small>\" 
                    
                    
                    href=\"ticket?";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash_name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj_cut", array()), "html", null, true);
                echo "</a></td>


                        <td style=\" vertical-align: middle; \"><small><center><time id=\"c\" datetime=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_create", array()), "html", null, true);
                echo "\"></time></center></small></td>
                    ";
                // line 61
                if (((isset($context["mu_status"]) ? $context["mu_status"] : null) == true)) {
                    // line 62
                    echo "                    <td style=\" vertical-align: middle; \">
                    ";
                    // line 63
                    echo $this->getAttribute($context["item"], "init_fio", array());
                    echo "
                    </td>
                    ";
                }
                // line 66
                echo "                    ";
                if (((isset($context["mu_status"]) ? $context["mu_status"] : null) == true)) {
                    // line 67
                    echo "                    <td style=\" vertical-align: middle; \">
                    ";
                    // line 68
                    echo $this->getAttribute($context["item"], "client", array());
                    echo "
                    </td>
                    ";
                }
                // line 71
                echo "                        <td style=\" vertical-align: middle; \"><small><center><time id=\"a\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_ago", array()), "html", null, true);
                echo "\"></time></center></small></td>
                        <td style=\" vertical-align: middle; \">
                            <small>";
                // line 73
                echo $this->getAttribute($context["item"], "to_text", array());
                echo "</small>
                            
                        </td>
                        
                        
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 78
                echo $this->getAttribute($context["item"], "st", array());
                echo "</center>
                            </small></td>
                            
                            
                       
                    </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "

</tbody>
            </table>




";
        }
    }

    public function getTemplateName()
    {
        return "client.list_content.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 86,  197 => 78,  189 => 73,  183 => 71,  177 => 68,  174 => 67,  171 => 66,  165 => 63,  162 => 62,  160 => 61,  156 => 60,  148 => 57,  142 => 54,  138 => 53,  134 => 52,  130 => 51,  126 => 50,  120 => 49,  117 => 48,  113 => 47,  104 => 41,  100 => 40,  95 => 39,  89 => 36,  86 => 35,  83 => 34,  77 => 31,  74 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  50 => 19,  47 => 18,  45 => 17,  35 => 9,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
