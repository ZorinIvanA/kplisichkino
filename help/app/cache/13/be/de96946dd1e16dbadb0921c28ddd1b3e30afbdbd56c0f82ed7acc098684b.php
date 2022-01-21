<?php

/* list_content_in.view.tmpl */
class __TwigTemplate_13bede96946dd1e16dbadb0921c28ddd1b3e30afbdbd56c0f82ed7acc098684b extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_in"]) ? $context["get_total_pages_in"] : null), "html", null, true);
            echo "\" id=\"val_menu\">
            <input type=\"hidden\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
            echo "\" id=\"user_id\">
            <input type=\"hidden\" value=\"\" id=\"total_tickets\">
            <input type=\"hidden\" value=\"\" id=\"last_total_tickets\">

<div class=\"table-responsive\">
 <table class=\"table table-bordered table-hover \" style=\" font-size: 14px; \">
            <thead>
            <tr>
                <th><center><div id=\"sort_id\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["helpdesk_sort_id"]) ? $context["helpdesk_sort_id"] : null), "html", null, true);
            echo "\">
<a href=\"#\" style=\"color: black;\" value=\"id\" id=\"make_sort\"> 
";
            // line 21
            echo (isset($context["sort_type_start_id"]) ? $context["sort_type_start_id"] : null);
            echo "
                #";
            // line 22
            echo (isset($context["id_icon"]) ? $context["id_icon"] : null);
            echo "
";
            // line 23
            echo (isset($context["sort_type_stop_id"]) ? $context["sort_type_stop_id"] : null);
            echo "
</a>

                </div></center></th>
                <th><center><div id=\"sort_prio\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["helpdesk_sort_prio"]) ? $context["helpdesk_sort_prio"] : null), "html", null, true);
            echo "\">

                    <a href=\"#\" style=\"color: black;\" value=\"prio\" id=\"make_sort\"> 
                    ";
            // line 30
            echo (isset($context["sort_type_start_prio"]) ? $context["sort_type_start_prio"] : null);
            echo "
                <i class=\"fa fa-info-circle\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["t_LIST_prio"]) ? $context["t_LIST_prio"] : null), "html", null, true);
            echo "\"></i>
                ";
            // line 32
            echo (isset($context["sort_type_stop_prio"]) ? $context["sort_type_stop_prio"] : null);
            echo "
                </a>
                ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["prio_icon"]) ? $context["prio_icon"] : null), "html", null, true);
            echo "</div></center></th>


                <th><center><div id=\"sort_subj\" action=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["helpdesk_sort_subj"]) ? $context["helpdesk_sort_subj"] : null), "html", null, true);
            echo "\">

                <a href=\"#\" style=\"color: black;\" value=\"subj\" id=\"make_sort\">
";
            // line 40
            echo (isset($context["sort_type_start_subj"]) ? $context["sort_type_start_subj"] : null);
            echo "
                ";
            // line 41
            echo (isset($context["t_LIST_subj"]) ? $context["t_LIST_subj"] : null);
            echo "
";
            // line 42
            echo (isset($context["sort_type_stop_subj"]) ? $context["sort_type_stop_subj"] : null);
            echo "
</a>
                ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["subj_icon"]) ? $context["subj_icon"] : null), "html", null, true);
            echo "

                </div></center></th>
                <th><center><div id=\"sort_cli\" action=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["helpdesk_sort_clientid"]) ? $context["helpdesk_sort_clientid"] : null), "html", null, true);
            echo "\">
                    <a href=\"#\" style=\"color: black;\" value=\"client_id\" id=\"make_sort\">
                    ";
            // line 49
            echo (isset($context["sort_type_start_client_id"]) ? $context["sort_type_start_client_id"] : null);
            echo "
                ";
            // line 50
            echo (isset($context["t_LIST_worker"]) ? $context["t_LIST_worker"] : null);
            echo "
                ";
            // line 51
            echo (isset($context["sort_type_stop_client_id"]) ? $context["sort_type_stop_client_id"] : null);
            echo "
                    </a>
               

                ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["cli_icon"]) ? $context["cli_icon"] : null), "html", null, true);
            echo "</div></center></th>
                <th><center>
                <a href=\"#\" style=\"color: black;\" value=\"date_create\" id=\"make_sort\">

";
            // line 59
            echo (isset($context["sort_type_start_date_create"]) ? $context["sort_type_start_date_create"] : null);
            echo "
";
            // line 60
            echo (isset($context["t_LIST_create"]) ? $context["t_LIST_create"] : null);
            echo "
";
            // line 61
            echo (isset($context["sort_type_stop_date_create"]) ? $context["sort_type_stop_date_create"] : null);
            echo "              
                
                
                </a>
                </center></th>
                <th><center>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["t_LIST_ago"]) ? $context["t_LIST_ago"] : null), "html", null, true);
            echo "</center></th>
                <th><center><div id=\"sort_init\" action=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["helpdesk_sort_userinitid"]) ? $context["helpdesk_sort_userinitid"] : null), "html", null, true);
            echo "\">
<a href=\"#\" style=\"color: black;\" value=\"user_init_id\" id=\"make_sort\">

";
            // line 70
            echo (isset($context["sort_type_start_user_init_id"]) ? $context["sort_type_start_user_init_id"] : null);
            echo "
";
            // line 71
            echo (isset($context["t_LIST_init"]) ? $context["t_LIST_init"] : null);
            echo "
";
            // line 72
            echo (isset($context["sort_type_stop_user_init_id"]) ? $context["sort_type_stop_user_init_id"] : null);
            echo "

</a>

                ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["init_icon"]) ? $context["init_icon"] : null), "html", null, true);
            echo "</div></center></th>
                <th><center>";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["t_LIST_to"]) ? $context["t_LIST_to"] : null), "html", null, true);
            echo "</center></th>
                <th><center>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["t_LIST_status"]) ? $context["t_LIST_status"] : null), "html", null, true);
            echo "</center></th>
                <th style=\"width:60px;\"><center>";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["t_LIST_action"]) ? $context["t_LIST_action"] : null), "html", null, true);
            echo "</center></th>
            </tr>
            </thead>
            <tbody>




";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ar_res"]) ? $context["ar_res"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 88
                echo "
<tr id=\"tr_";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "style", array()), "html", null, true);
                echo "\">
                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\"><center>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</center></small></td>
                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\"><center>";
                echo $this->getAttribute($context["item"], "prio", array());
                echo "</center></small></td>
                    <td style=\" vertical-align: middle; \"><a class=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo " pops\"  
                    title=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo "\"
                    data-content=\"<small>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "msg", array()), "html", null, true);
                echo "</small>\" 
                    
                    
                    href=\"ticket?";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hashname", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "cut_subj", array());
                echo "</a></td>
                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\">
                    <a href=\"view_user?";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_user_hash_by_id_client", array()), "html", null, true);
                echo "\">
                    ";
                // line 100
                echo $this->getAttribute($context["item"], "client", array());
                echo "
                    </a>
                    
                    </small></td>
                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\"><center><time id=\"c\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_create", array()), "html", null, true);
                echo "\"></time></center></small></td>
                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\"><center><time id=\"a\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_ago", array()), "html", null, true);
                echo "\"></time>

                    ";
                // line 107
                echo $this->getAttribute($context["item"], "get_deadline_label", array());
                echo "

                    </center></small></td>

                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\">
                    <a href=\"view_user?";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "init_hash", array()), "html", null, true);
                echo "\">
                    ";
                // line 113
                echo $this->getAttribute($context["item"], "init_fio", array());
                echo "
                    </a>
                    </small></td>

                    <td style=\" vertical-align: middle; \"><small class=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "muclass", array()), "html", null, true);
                echo "\">
                            ";
                // line 118
                echo $this->getAttribute($context["item"], "to_text", array());
                echo "
                        </small></td>
                    <td style=\" vertical-align: middle; \"><small><center>
                                ";
                // line 121
                echo $this->getAttribute($context["item"], "st", array());
                echo " </center>
                        </small></td>
                    <td style=\" vertical-align: middle; \">
                        <center>
                            <div class=\"btn-group btn-group-xs actions \">
                                <button ";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_b_lb", array()), "html", null, true);
                echo "
                                 data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lb_tooltip", array()), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-warning ela_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" user=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" id=\"action_list_lock\" status=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lb_status", array()), "html", null, true);
                echo "\">
                                 ";
                // line 128
                echo $this->getAttribute($context["item"], "lb_text", array());
                echo "</button>

                                <button ";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_b_ob", array()), "html", null, true);
                echo " data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ob_tooltip", array()), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-success elb_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" user=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" id=\"action_list_ok\" status=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ob_status", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "ob_text", array());
                echo "</button>
                            </div>
                        </center>
                    </td>
                </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "

                </tbody>
            </table>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "list_content_in.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 137,  346 => 130,  341 => 128,  329 => 127,  325 => 126,  317 => 121,  311 => 118,  307 => 117,  300 => 113,  296 => 112,  292 => 111,  285 => 107,  278 => 105,  272 => 104,  265 => 100,  261 => 99,  257 => 98,  251 => 97,  245 => 94,  241 => 93,  237 => 92,  231 => 91,  225 => 90,  219 => 89,  216 => 88,  212 => 87,  201 => 79,  197 => 78,  193 => 77,  189 => 76,  182 => 72,  178 => 71,  174 => 70,  168 => 67,  164 => 66,  156 => 61,  152 => 60,  148 => 59,  141 => 55,  134 => 51,  130 => 50,  126 => 49,  121 => 47,  115 => 44,  110 => 42,  106 => 41,  102 => 40,  96 => 37,  90 => 34,  85 => 32,  81 => 31,  77 => 30,  71 => 27,  64 => 23,  60 => 22,  56 => 21,  51 => 19,  40 => 11,  35 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
