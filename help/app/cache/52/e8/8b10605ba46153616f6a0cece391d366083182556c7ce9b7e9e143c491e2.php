<?php

/* cat.view.tmpl */
class __TwigTemplate_52e88b10605ba46153616f6a0cece391d366083182556c7ce9b7e9e143c491e2 extends Twig_Template
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
        echo "<div class=\"content-wrapper\">
  <section class=\"content\">
    <section class=\"invoice\">
      <!-- title row -->
      <div class=\"row\">
        <div class=\"col-md-9\">
          <div class=\"box ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo "\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
        echo "</h3>
              <div class=\"box-tools pull-right\">
                <h4> ";
        // line 11
        echo (isset($context["get_cat_icon"]) ? $context["get_cat_icon"] : null);
        echo "</h4>
              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\">
                <div class=\"box-footer no-padding\">
                  ";
        // line 16
        if (((isset($context["sel_status"]) ? $context["sel_status"] : null) == true)) {
            // line 17
            echo "                  <ul class=\"nav nav-pills nav-stacked\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sel_arr"]) ? $context["sel_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "                    <li>
                      <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "thread?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                      <strong style=\"
                      font-size: 16px;
                      \">";
                // line 23
                echo $this->getAttribute($context["item"], "type", array());
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </strong>
                      ";
                // line 24
                echo $this->getAttribute($context["item"], "get_post_rate", array());
                echo "
                      <br>
                      <small class=\"text-muted\">
                      ";
                // line 27
                echo $this->getAttribute($context["item"], "get_post_status", array());
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_comments", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_count_comments", array()), "html", null, true);
                echo " ● ";
                echo $this->getAttribute($context["item"], "get_official_comments", array());
                echo "</small>
                    </a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    <li>
                      <br>
                      <li class=\"pull-right\">
                      <ul id=\"cat_post\" class=\"pagination pagination-sm pull-right no-margin \"></ul>
                    </li>
                  </ul>
                  <input type=\"hidden\" id=\"curent_page\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "\">
                  <input type=\"hidden\" id=\"cur_page\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "\">
                  <input type=\"hidden\" id=\"cat\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\">
                  ";
            // line 39
            if (((isset($context["status_sel"]) ? $context["status_sel"] : null) == true)) {
                // line 40
                echo "                  <input type=\"hidden\" id=\"total_pages\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["get_total_pages_posts_status"]) ? $context["get_total_pages_posts_status"] : null), "html", null, true);
                echo "\">
                  <input type=\"hidden\" id=\"st_str\" value=\"?status=";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
                echo "\">
                  ";
            }
            // line 43
            echo "                  ";
            if (((isset($context["status_sel"]) ? $context["status_sel"] : null) == false)) {
                // line 44
                echo "                  <input type=\"hidden\" id=\"total_pages\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["get_total_pages_posts"]) ? $context["get_total_pages_posts"] : null), "html", null, true);
                echo "\">
                  <input type=\"hidden\" id=\"st_str\" value=\"\">
                  ";
            }
            // line 47
            echo "                  ";
        }
        // line 48
        echo "                  ";
        if (((isset($context["sel_status"]) ? $context["sel_status"] : null) == false)) {
            // line 49
            echo "                  <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                  <center>";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center></div>
                  ";
        }
        // line 52
        echo "                  </div><!-- /.footer -->
                  </div><!-- /.box-body -->
                </div>
              </div>
              <div class=\"col-md-3\">
                <style type=\"text/css\">
                .active-text-cat {
                color: white;
                }
                </style>
                <?php
                if (\$hn == \"1\") {
                ?>
                ";
        // line 65
        if (((isset($context["hn"]) ? $context["hn"] : null) == "1")) {
            // line 66
            echo "                <div class=\"list-group\">
                  <a href=\"cat?1\" class=\"list-group-item ";
            // line 67
            echo (isset($context["status_label_def"]) ? $context["status_label_def"] : null);
            echo "\">
                  ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["PORTAL_idea_all"]) ? $context["PORTAL_idea_all"] : null), "html", null, true);
            echo "
                  </a>
                  <a href=\"cat?1&status=0\" class=\"list-group-item ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["status_label_0"]) ? $context["status_label_0"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_1_0"]) ? $context["get_count_post_1_0"] : null);
            echo "<span class=\"\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_1"]) ? $context["PORTAL_status_1"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?1&status=1\" class=\"list-group-item ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["status_label_1"]) ? $context["status_label_1"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_1_1"]) ? $context["get_count_post_1_1"] : null);
            echo "<span class=\"text-warning ";
            echo twig_escape_filter($this->env, (isset($context["status_text_1"]) ? $context["status_text_1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_2"]) ? $context["PORTAL_status_2"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?1&status=2\" class=\"list-group-item ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["status_label_2"]) ? $context["status_label_2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_1_2"]) ? $context["get_count_post_1_2"] : null);
            echo "<span class=\"text-success ";
            echo twig_escape_filter($this->env, (isset($context["status_text_2"]) ? $context["status_text_2"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_3"]) ? $context["PORTAL_status_3"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?1&status=3\" class=\"list-group-item ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["status_label_3"]) ? $context["status_label_3"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_1_3"]) ? $context["get_count_post_1_3"] : null);
            echo "<span class=\"text-danger ";
            echo twig_escape_filter($this->env, (isset($context["status_text_3"]) ? $context["status_text_3"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_4"]) ? $context["PORTAL_status_4"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?1&status=4\" class=\"list-group-item ";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["status_label_4"]) ? $context["status_label_4"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_1_4"]) ? $context["get_count_post_1_4"] : null);
            echo "<span class=\"text-primary ";
            echo twig_escape_filter($this->env, (isset($context["status_text_4"]) ? $context["status_text_4"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_5"]) ? $context["PORTAL_status_5"] : null), "html", null, true);
            echo "</span></a>
                </div>
                ";
        }
        // line 77
        echo "                ";
        if (((isset($context["hn"]) ? $context["hn"] : null) == "2")) {
            // line 78
            echo "                <div class=\"list-group\">
                  <a href=\"cat?2\" class=\"list-group-item ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["status_label_def"]) ? $context["status_label_def"] : null), "html", null, true);
            echo "\">
                  ";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble_all"]) ? $context["PORTAL_trouble_all"] : null), "html", null, true);
            echo "
                  </a>
                  <a href=\"cat?2&status=0\" class=\"list-group-item ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["status_label_0"]) ? $context["status_label_0"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_2_0"]) ? $context["get_count_post_2_0"] : null);
            echo "<span class=\"\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_1"]) ? $context["PORTAL_status_1"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?2&status=1\" class=\"list-group-item ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["status_label_1"]) ? $context["status_label_1"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_2_1"]) ? $context["get_count_post_2_1"] : null);
            echo "<span class=\"text-warning ";
            echo twig_escape_filter($this->env, (isset($context["status_text_1"]) ? $context["status_text_1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_2"]) ? $context["PORTAL_status_2"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?2&status=2\" class=\"list-group-item ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["status_label_2"]) ? $context["status_label_2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_2_2"]) ? $context["get_count_post_2_2"] : null);
            echo "<span class=\"text-success ";
            echo twig_escape_filter($this->env, (isset($context["status_text_2"]) ? $context["status_text_2"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_6"]) ? $context["PORTAL_status_6"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?2&status=3\" class=\"list-group-item ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["status_label_3"]) ? $context["status_label_3"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_2_3"]) ? $context["get_count_post_2_3"] : null);
            echo "<span class=\"text-danger ";
            echo twig_escape_filter($this->env, (isset($context["status_text_3"]) ? $context["status_text_3"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_7"]) ? $context["PORTAL_status_7"] : null), "html", null, true);
            echo "</span></a>
                  <a href=\"cat?2&status=4\" class=\"list-group-item ";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["status_label_4"]) ? $context["status_label_4"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["get_count_post_2_4"]) ? $context["get_count_post_2_4"] : null);
            echo "<span class=\"text-primary ";
            echo twig_escape_filter($this->env, (isset($context["status_text_4"]) ? $context["status_text_4"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_status_5"]) ? $context["PORTAL_status_5"] : null), "html", null, true);
            echo "</span></a>
                </div>
                ";
        }
        // line 89
        echo "                ";
        echo (isset($context["view_top_news_bar"]) ? $context["view_top_news_bar"] : null);
        echo "
                ";
        // line 90
        echo (isset($context["view_stat_cat"]) ? $context["view_stat_cat"] : null);
        echo "
              </div>
            </div>
            <!-- info row -->
          </section>
        </section>
      </div>";
    }

    public function getTemplateName()
    {
        return "cat.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 90,  292 => 89,  280 => 86,  270 => 85,  260 => 84,  250 => 83,  242 => 82,  237 => 80,  233 => 79,  230 => 78,  227 => 77,  215 => 74,  205 => 73,  195 => 72,  185 => 71,  177 => 70,  172 => 68,  168 => 67,  165 => 66,  163 => 65,  148 => 52,  143 => 50,  140 => 49,  137 => 48,  134 => 47,  127 => 44,  124 => 43,  119 => 41,  114 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  92 => 30,  77 => 27,  71 => 24,  65 => 23,  57 => 20,  54 => 19,  50 => 18,  47 => 17,  45 => 16,  37 => 11,  32 => 9,  27 => 7,  19 => 1,);
    }
}
