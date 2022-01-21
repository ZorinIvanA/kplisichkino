<?php

/* dashboard.view.tmpl */
class __TwigTemplate_d34dcc6696da560bf8bd5535c21e2f7f441641f76d974e7e5146a273bbcd365e extends Twig_Template
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
        ";
        // line 16
        if (((isset($context["view_right"]) ? $context["view_right"] : null) == true)) {
            // line 17
            echo "        <div class=\"col-md-12\">
            <div class=\"alert alert-";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["global_msg_type"]) ? $context["global_msg_type"] : null), "html", null, true);
            echo " alert-dismissable\">
                <i class=\"fa fa-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["gm_type"]) ? $context["gm_type"] : null), "html", null, true);
            echo "\"></i>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                ";
            // line 21
            echo (isset($context["global_msg_data"]) ? $context["global_msg_data"] : null);
            echo "
            </div>
        </div>
        ";
        }
        // line 25
        echo "        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->

            <div class=\"small-box bg-red\">
                <div class=\"inner\">
                    <h3 id=\"tool_1\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["get_total_tickets_free"]) ? $context["get_total_tickets_free"] : null), "html", null, true);
        echo "
                    </h3>
                    <p>
                    ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_ticket_in"]) ? $context["DASHBOARD_ticket_in"] : null), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-download\"></i>
                </div>
                <a href=\"list?in\" class=\"small-box-footer\">
                ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                    <h3 id=\"tool_2\">
                    ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["get_total_tickets_lock"]) ? $context["get_total_tickets_lock"] : null), "html", null, true);
        echo "
                    </h3>
                    <p>
                    ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_ticket_lock"]) ? $context["DASHBOARD_ticket_lock"] : null), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-lock\"></i>
                </div>
                <a href=\"list?in\" class=\"small-box-footer\">
                ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                    <h3 id=\"tool_3\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["get_total_tickets_out_and_success"]) ? $context["get_total_tickets_out_and_success"] : null), "html", null, true);
        echo "
                    </h3>
                    <p>
                    ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_ticket_out"]) ? $context["DASHBOARD_ticket_out"] : null), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-upload\"></i>
                </div>
                <a href=\"list?out\" class=\"small-box-footer\">
                ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>

        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"small-box bg-green\">
                <div class=\"inner\">
                    <h3 id=\"tool_4\">
                    ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["get_total_tickets_ok"]) ? $context["get_total_tickets_ok"] : null), "html", null, true);
        echo "
                    </h3>
                    <p>
                    ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["LIST_ok_t"]) ? $context["LIST_ok_t"] : null), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-check\"></i>
                </div>
                <a href=\"list?in\" class=\"small-box-footer\">
                ";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["EXT_more_info"]) ? $context["EXT_more_info"] : null), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>


    </div>



    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box\">
                <div class=\"box-header\"><h3 class=\"box-title\"><a href=\"helper\"><i class=\"fa fa-globe\"></i> ";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_last_help"]) ? $context["DASHBOARD_last_help"] : null), "html", null, true);
        echo "</a></h3></div>
                <div class=\"box-body\">


                    ";
        // line 116
        echo (isset($context["get_helper"]) ? $context["get_helper"] : null);
        echo "

                </div>

            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box\">
                <div class=\"box-header\"><h3 class=\"box-title\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_messages"]) ? $context["DASHBOARD_messages"] : null), "html", null, true);
        echo "</h3></div>
                <div class=\"box-body\">
                    <div class=\"callout callout-";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["style_msg"]) ? $context["style_msg"] : null), "html", null, true);
        echo "\">
                        <h4>";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["messages_title"]) ? $context["messages_title"] : null), "html", null, true);
        echo "</h4>
                        <p>";
        // line 129
        echo (isset($context["messages"]) ? $context["messages"] : null);
        echo "</p>
                    </div>

                </div>

            </div>
        </div>










    </div>


    <div class=\"row\">


        <div class=\"col-md-12\">
            <div class=\"box\">



                <div class=\"box-header\">
                    <h3 class=\"box-title\"><a href=\"list?in\"><i class=\"fa fa-list-alt\"></i> ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_last_in"]) ? $context["DASHBOARD_last_in"] : null), "html", null, true);
        echo "</a></h3>
                    <div class=\"box-tools\">
                        <div class=\"btn-group btn-group-xs pull-right\">
                            <button id=\"dashboard_set_ticket\" type=\"button\" class=\"btn btn-default\">5</button>
                            <button id=\"dashboard_set_ticket\" type=\"button\" class=\"btn btn-default\">10</button>
                            <button id=\"dashboard_set_ticket\" type=\"button\" class=\"btn btn-default\">15</button>
                        </div>
                    </div>
                </div>





                <div class=\"box-body\">




                    <div id=\"spinner\" class=\"well well-large well-transparent lead\">
                        <center><i class=\"fa fa-spinner fa-spin icon-2x\"></i> ";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["LIST_loading"]) ? $context["LIST_loading"] : null), "html", null, true);
        echo " ...</center>
                    </div>
                    <div id=\"dashboard_t\"></div>




                    </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>





            </div>



        </section>";
    }

    public function getTemplateName()
    {
        return "dashboard.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 178,  260 => 158,  228 => 129,  224 => 128,  220 => 127,  215 => 125,  203 => 116,  196 => 112,  180 => 99,  170 => 92,  164 => 89,  151 => 79,  141 => 72,  135 => 69,  123 => 60,  113 => 53,  107 => 50,  95 => 41,  85 => 34,  79 => 31,  71 => 25,  64 => 21,  59 => 19,  55 => 18,  52 => 17,  50 => 16,  40 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
