<?php

/* list_content_out.view.tmpl */
class __TwigTemplate_087eaa53878cc6c8d531d8b49e2b84e666c6215ae255928de752c52fc08206a2 extends Twig_Template
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
        if (((isset($context["aha"]) ? $context["aha"] : null) == "0")) {
            // line 2
            echo "<div class=\"well well-large well-transparent lead\">
                <center>
                    ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "
                </center>
            </div>

";
        }
        // line 9
        if (((isset($context["aha"]) ? $context["aha"] : null) != "0")) {
            // line 10
            echo "<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_out"]) ? $context["get_total_pages_out"] : null), "html", null, true);
            echo "\" id=\"val_menu\">

<div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\" style=\" font-size: 14px; \">
                <thead>
                <tr>
                    <th><center>

                    <a href=\"#\" style=\"color: black;\" value=\"id\" id=\"make_sort\"> ";
            // line 18
            echo (isset($context["sort_type_start_id"]) ? $context["sort_type_start_id"] : null);
            echo "#";
            echo (isset($context["sort_type_stop_id"]) ? $context["sort_type_stop_id"] : null);
            echo "
                    </a>
                    </center></th>
                    <th><center>
                    <a href=\"#\" style=\"color: black;\" value=\"prio\" id=\"make_sort\"> 
                    ";
            // line 23
            echo (isset($context["sort_type_start_prio"]) ? $context["sort_type_start_prio"] : null);
            echo "
                    <i class=\"fa fa-info-circle\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["t_LIST_prio"]) ? $context["t_LIST_prio"] : null), "html", null, true);
            echo "\"></i>
                    ";
            // line 25
            echo (isset($context["sort_type_stop_prio"]) ? $context["sort_type_stop_prio"] : null);
            echo "
                    </a></center></th>
                    <th><center>
                    <a href=\"#\" style=\"color: black;\" value=\"subj\" id=\"make_sort\"> 
                    ";
            // line 29
            echo (isset($context["sort_type_start_subj"]) ? $context["sort_type_start_subj"] : null);
            echo "
                    ";
            // line 30
            echo (isset($context["t_LIST_subj"]) ? $context["t_LIST_subj"] : null);
            echo "
                    ";
            // line 31
            echo (isset($context["sort_type_stop_subj"]) ? $context["sort_type_stop_subj"] : null);
            echo "
                    </a></center></th>
                    <th><center>
                    <a href=\"#\" style=\"color: black;\" value=\"client_id\" id=\"make_sort\"> 
                    ";
            // line 35
            echo (isset($context["sort_type_start_client_id"]) ? $context["sort_type_start_client_id"] : null);
            echo "
                    ";
            // line 36
            echo (isset($context["t_LIST_worker"]) ? $context["t_LIST_worker"] : null);
            echo "
                    ";
            // line 37
            echo (isset($context["sort_type_stop_client_id"]) ? $context["sort_type_stop_client_id"] : null);
            echo "
                    </a>
                    </center></th>
                    <th><center>
<a href=\"#\" style=\"color: black;\" value=\"date_create\" id=\"make_sort\"> 
";
            // line 42
            echo (isset($context["sort_type_start_date_create"]) ? $context["sort_type_start_date_create"] : null);
            echo "
";
            // line 43
            echo (isset($context["t_LIST_create"]) ? $context["t_LIST_create"] : null);
            echo "
";
            // line 44
            echo (isset($context["sort_type_stop_date_create"]) ? $context["sort_type_stop_date_create"] : null);
            echo "
</a></center></th>
                    <th><center>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["t_LIST_ago"]) ? $context["t_LIST_ago"] : null), "html", null, true);
            echo "</center></th>
                    <th><center>
                        <a href=\"#\" style=\"color: black;\" value=\"user_init_id\" id=\"make_sort\"> 
                    
                    ";
            // line 50
            echo (isset($context["sort_type_start_user_init_id"]) ? $context["sort_type_start_user_init_id"] : null);
            echo "
                    ";
            // line 51
            echo (isset($context["t_LIST_init"]) ? $context["t_LIST_init"] : null);
            echo "
                    ";
            // line 52
            echo (isset($context["sort_type_stop_user_init_id"]) ? $context["sort_type_stop_user_init_id"] : null);
            echo "

                    </a></center></th>
                    <th><center>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["t_LIST_to"]) ? $context["t_LIST_to"] : null), "html", null, true);
            echo "</center></th>
                    <th><center>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["t_LIST_status"]) ? $context["t_LIST_status"] : null), "html", null, true);
            echo "</center></th>
                    
                </tr>
                </thead>
                <tbody>






";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ar_res"]) ? $context["ar_res"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "

<tr id=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "style", array()), "html", null, true);
                echo "\">
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</center></small></td>
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 72
                echo $this->getAttribute($context["item"], "prio", array());
                echo "</center></small></td>
                        <td style=\" vertical-align: middle; \"><a class=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo " pops\"  
                    title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo "\"
                    data-content=\"<small>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "msg", array()), "html", null, true);
                echo "</small>\" 
                    
                    
                    href=\"ticket?";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hashname", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cut_subj", array()), "html", null, true);
                echo "</a></td>
                        <td style=\" vertical-align: middle; \"><small>
                        <a href=\"view_user?";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_user_hash_by_id_client", array()), "html", null, true);
                echo "\">
                        ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "client", array()), "html", null, true);
                echo "
                        </a>
                        </small></td>
                        <td style=\" vertical-align: middle; \"><small><center><time id=\"c\" datetime=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_create", array()), "html", null, true);
                echo "\"></time></center></small></td>
                        <td style=\" vertical-align: middle; \"><small><center><time id=\"a\" datetime=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_ago", array()), "html", null, true);
                echo "\"></time>

                        ";
                // line 87
                echo $this->getAttribute($context["item"], "get_deadline_label", array());
                echo "</center></small></td>


<td style=\" vertical-align: middle; \"><small class=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "name_of_user_ret", array());
                echo "</small></td>


                        <td style=\" vertical-align: middle; \">
                            <small>";
                // line 94
                echo $this->getAttribute($context["item"], "to_text", array());
                echo "</small>
                            
                        </td>
                        
                        
                        <td style=\" vertical-align: middle; \"><small><center>";
                // line 99
                echo $this->getAttribute($context["item"], "st", array());
                echo "</center>
                            </small></td>
                        
                    </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "

                </tbody>
            </table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "list_content_out.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 105,  240 => 99,  232 => 94,  223 => 90,  217 => 87,  212 => 85,  208 => 84,  202 => 81,  198 => 80,  191 => 78,  185 => 75,  181 => 74,  177 => 73,  173 => 72,  169 => 71,  163 => 70,  159 => 68,  155 => 67,  141 => 56,  137 => 55,  131 => 52,  127 => 51,  123 => 50,  116 => 46,  111 => 44,  107 => 43,  103 => 42,  95 => 37,  91 => 36,  87 => 35,  80 => 31,  76 => 30,  72 => 29,  65 => 25,  61 => 24,  57 => 23,  47 => 18,  35 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
