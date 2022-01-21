<?php

/* index.view.tmpl */
class __TwigTemplate_b32e782b06a15a21fd6167fb5d8a0408379453224c8831328dcded1392f2ad59 extends Twig_Template
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
    ";
        // line 3
        if (((isset($context["portal_msg_status"]) ? $context["portal_msg_status"] : null) == true)) {
            // line 4
            echo "    <div class=\"pad margin no-print\">
      <div class=\"callout ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["ic"]) ? $context["ic"] : null), "html", null, true);
            echo "\" style=\"margin-bottom: 0!important;\">
        <h4><i class=\"fa ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["ic1"]) ? $context["ic1"] : null), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["portal_msg_title"]) ? $context["portal_msg_title"] : null), "html", null, true);
            echo "</h4>
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["portal_msg_text"]) ? $context["portal_msg_text"] : null), "html", null, true);
            echo "
      </div>
    </div>
    ";
        }
        // line 11
        echo "    <section class=\"invoice\">
      <!-- title row -->
      <div class=\"row\">
        <div class=\"col-md-9\">
          <div class=\"nav-tabs-custom\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a class=\"text-success\" href=\"#tab_1\" data-toggle=\"tab\" aria-expanded=\"true\"> <i class=\"fa fa-lightbulb-o\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["PORTAL_idea_one"]) ? $context["PORTAL_idea_one"] : null), "html", null, true);
        echo "</a></li>
              <li class=\"\"><a class=\"text-red\" href=\"#tab_2\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble_one"]) ? $context["PORTAL_trouble_one"] : null), "html", null, true);
        echo "</a></li>
              <li class=\"\"><a class=\"text-primary\"  href=\"#tab_3\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-question-circle\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["PORTAL_question_one"]) ? $context["PORTAL_question_one"] : null), "html", null, true);
        echo "</a></li>
              <li class=\"\"><a class=\"text-orange\" href=\"#tab_4\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-heart\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["PORTAL_thank_one"]) ? $context["PORTAL_thank_one"] : null), "html", null, true);
        echo "</a></li>

            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab_1\">
                <div class=\"input-group input-group-lg\">
                  <input type=\"text\" class=\"form-control\" id=\"text_idea\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["PORTAL_idea_you"]) ? $context["PORTAL_idea_you"] : null), "html", null, true);
        echo "\">
                  <span class=\"input-group-btn\">
                  <button id=\"make_new_post_idea\" class=\"btn btn-info btn-flat\" type=\"button\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["PORTAL_next"]) ? $context["PORTAL_next"] : null), "html", null, true);
        echo "</button>
                  </span>
                </div>
                </div><!-- /.tab-pane -->
                <div class=\"tab-pane fade\" id=\"tab_2\">
                  <div class=\"input-group input-group-lg\">
                    <input type=\"text\" class=\"form-control\" id=\"text_problem\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble_you"]) ? $context["PORTAL_trouble_you"] : null), "html", null, true);
        echo "\">
                    <span class=\"input-group-btn\">
                    <button id=\"make_new_post_problem\" class=\"btn btn-info btn-flat\" type=\"button\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["PORTAL_next"]) ? $context["PORTAL_next"] : null), "html", null, true);
        echo "</button>
                    </span>
                  </div>
                  </div><!-- /.tab-pane -->
                  <div class=\"tab-pane fade\" id=\"tab_3\">
                    <div class=\"input-group input-group-lg\">
                      <input type=\"text\" class=\"form-control\" id=\"text_quest\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["PORTAL_question_you"]) ? $context["PORTAL_question_you"] : null), "html", null, true);
        echo "\">
                      <span class=\"input-group-btn\">
                      <button id=\"make_new_post_quest\" class=\"btn btn-info btn-flat\" type=\"button\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["PORTAL_next"]) ? $context["PORTAL_next"] : null), "html", null, true);
        echo "</button>
                      </span>
                    </div>
                    </div><!-- /.tab-pane -->
                    <div class=\"tab-pane fade\" id=\"tab_4\">
                      <div class=\"input-group input-group-lg\">
                        <input type=\"text\" class=\"form-control\" id=\"text_review\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["PORTAL_thank_you"]) ? $context["PORTAL_thank_you"] : null), "html", null, true);
        echo "\">
                        <span class=\"input-group-btn\">
                        <button id=\"make_new_post_review\" class=\"btn btn-info btn-flat\" type=\"button\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["PORTAL_next"]) ? $context["PORTAL_next"] : null), "html", null, true);
        echo "</button>
                        </span>
                      </div>
                      </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->

                    </div>
                    <div class=\"box box-default\" id=\"maybe\" style=\"display:none;\">
                      <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["PORTAL_maybe"]) ? $context["PORTAL_maybe"] : null), "html", null, true);
        echo "</h3>
                        </div><!-- /.box-header -->
                        <div class=\"box-body\">
                          <div class=\"row\">
                            <div class=\"col-md-6\" id=\"maybe_res\">

                            </div>
                            <div class=\"col-md-6\"><button class=\"btn btn-block btn-info btn-lg\" id=\"new_post_page\" value=\"1\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["PORTAL_now_new_post"]) ? $context["PORTAL_now_new_post"] : null), "html", null, true);
        echo "</button></div>
                          </div>
                        </div>
                      </div>
                      <div class=\"box box-info\">
                        <div class=\"box-header with-border\">
                          <h3 class=\"box-title\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["PORTAL_help_center"]) ? $context["PORTAL_help_center"] : null), "html", null, true);
        echo "</h3>
                          <div class=\"box-tools pull-right\">
                            <h4> <i class=\"fa fa-graduation-cap\"></i></h4>
                          </div>
                          </div><!-- /.box-header -->
                          <div class=\"box-body\">
                            <div class=\"row\">
                              ";
        // line 81
        echo (isset($context["get_main_manual"]) ? $context["get_main_manual"] : null);
        echo "
                            </div>
                            </div><!-- /.box-body -->
                          </div>
                          <div class=\"box box-success\">
                            <div class=\"box-header with-border\">
                              <h3 class=\"box-title\"><a class=\"text-success\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?1\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_idea"]) ? $context["PORTAL_idea"] : null), "html", null, true);
        echo "</a></h3>
                              <div class=\"box-tools pull-right\">
                                <h4> <i class=\"fa fa-lightbulb-o\"></i></h4>
                              </div>
                              </div><!-- /.box-header -->
                              <div class=\"box-body\">

                                <div class=\"box-footer no-padding\">
                                  ";
        // line 95
        if (((isset($context["portal_posts_status"]) ? $context["portal_posts_status"] : null) == true)) {
            // line 96
            echo "                                  <ul class=\"nav nav-pills nav-stacked\">
                                    ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["portal_posts_status_arr"]) ? $context["portal_posts_status_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 98
                echo "                                    <li>
                                      <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "thread?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                      <strong style=\"
                                      font-size: 16px;
                                      \"><i class=\"fa fa-lightbulb-o\"></i> ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </strong>

                                      ";
                // line 104
                echo $this->getAttribute($context["item"], "get_post_rate", array());
                echo "
                                      <br>
                                      <small class=\"text-muted\">
                                      ";
                // line 107
                echo $this->getAttribute($context["item"], "get_post_status", array());
                echo "  <!--● Чат поддержки-->  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_comments", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_count_comments", array()), "html", null, true);
                echo " ● ";
                echo $this->getAttribute($context["item"], "get_official_comments", array());
                echo "</small><!--small class=\"pull-right text-muted\">рейтинг</small-->
                                    </a></li>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                    <li>

                                      <li><small class=\"text-muted\"><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "cat?1\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_idea_all"]) ? $context["PORTAL_idea_all"] : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["get_total_posts_by_type1"]) ? $context["get_total_posts_by_type1"] : null), "html", null, true);
            echo ")</a></small></li>
                                    </ul>
                                    ";
        }
        // line 116
        echo "                                    ";
        if (((isset($context["portal_posts_status"]) ? $context["portal_posts_status"] : null) == false)) {
            // line 117
            echo "                                    <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                                    <center>";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center></div>
                                    ";
        }
        // line 120
        echo "                                    </div><!-- /.footer -->
                                    </div><!-- /.box-body -->
                                  </div>
                                  <div class=\"box box-danger\">
                                    <div class=\"box-header with-border\">
                                      <h3 class=\"box-title\"><a class=\"text-danger\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?2\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble"]) ? $context["PORTAL_trouble"] : null), "html", null, true);
        echo "</a></h3>
                                      <div class=\"box-tools pull-right\">
                                        <h4> <i class=\"fa fa-exclamation-triangle\"></i></h4>
                                      </div>
                                      </div><!-- /.box-header -->
                                      <div class=\"box-body\">
                                        <div class=\"box-footer no-padding\">
                                          ";
        // line 132
        if (((isset($context["portal_posts_status2"]) ? $context["portal_posts_status2"] : null) == true)) {
            // line 133
            echo "                                          <ul class=\"nav nav-pills nav-stacked\">
                                            ";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["portal_posts_status_arr2"]) ? $context["portal_posts_status_arr2"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 135
                echo "                                            <li>
                                              <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "thread?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                              <strong style=\"
                                              font-size: 16px;
                                              \"><i class=\"fa fa-exclamation-triangle\"></i> ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </strong>

                                              ";
                // line 141
                echo $this->getAttribute($context["item"], "get_post_rate", array());
                echo "
                                              <br>
                                              <small class=\"text-muted\">
                                              ";
                // line 144
                echo $this->getAttribute($context["item"], "get_post_status", array());
                echo "  <!--● Чат поддержки-->  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_comments", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_count_comments", array()), "html", null, true);
                echo " ● ";
                echo $this->getAttribute($context["item"], "get_official_comments", array());
                echo "</small><!--small class=\"pull-right text-muted\">рейтинг</small-->
                                            </a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                            <li>

                                              <li><small class=\"text-muted\"><a href=\"";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "cat?2\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_trouble_all"]) ? $context["PORTAL_trouble_all"] : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["get_total_posts_by_type2"]) ? $context["get_total_posts_by_type2"] : null), "html", null, true);
            echo ")</a></small></li>
                                            </ul>
                                            ";
        }
        // line 152
        echo "                                            ";
        if (((isset($context["portal_posts_status2"]) ? $context["portal_posts_status2"] : null) == false)) {
            // line 153
            echo "
                                            <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                                            <center>";
            // line 155
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center></div>
                                            ";
        }
        // line 157
        echo "                                            </div><!-- /.footer -->
                                            </div><!-- /.box-body -->
                                          </div>
                                          <div class=\"box box-info\">
                                            <div class=\"box-header with-border\">
                                              <h3 class=\"box-title\"><a class=\"text-info\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?3\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_question"]) ? $context["PORTAL_question"] : null), "html", null, true);
        echo "</a></h3>
                                              <div class=\"box-tools pull-right\">
                                                <h4> <i class=\"fa fa-question-circle\"></i></h4>
                                              </div>
                                              </div><!-- /.box-header -->
                                              <div class=\"box-body\">
                                                <div class=\"box-footer no-padding\">
                                                  ";
        // line 169
        if (((isset($context["portal_posts_status3"]) ? $context["portal_posts_status3"] : null) == true)) {
            // line 170
            echo "                                                  <ul class=\"nav nav-pills nav-stacked\">
                                                    ";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["portal_posts_status_arr3"]) ? $context["portal_posts_status_arr3"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 172
                echo "                                                    <li>
                                                      <a href=\"";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "thread?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                                      <strong style=\"
                                                      font-size: 16px;
                                                      \"><i class=\"fa fa-question-circle\"></i> ";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </strong>

                                                      ";
                // line 178
                echo $this->getAttribute($context["item"], "get_post_rate", array());
                echo "
                                                      <br>
                                                      <small class=\"text-muted\">
                                                      ";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_comments", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_count_comments", array()), "html", null, true);
                echo " ● ";
                echo $this->getAttribute($context["item"], "get_official_comments", array());
                echo "</small><!--small class=\"pull-right text-muted\">рейтинг</small-->
                                                    </a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                                                    <li>

                                                      <li><small class=\"text-muted\"><a href=\"";
            // line 186
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "cat?3\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_question_all"]) ? $context["PORTAL_question_all"] : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["get_total_posts_by_type3"]) ? $context["get_total_posts_by_type3"] : null), "html", null, true);
            echo ")</a></small></li>
                                                    </ul>
                                                    ";
        }
        // line 189
        echo "                                                    ";
        if (((isset($context["portal_posts_status3"]) ? $context["portal_posts_status3"] : null) == false)) {
            // line 190
            echo "
                                                    <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                                                    <center>";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center></div>
                                                    ";
        }
        // line 194
        echo "                                                    </div><!-- /.footer -->
                                                    </div><!-- /.box-body -->
                                                  </div>
                                                  <div class=\"box box-warning\">
                                                    <div class=\"box-header with-border\">
                                                      <h3 class=\"box-title\"><a class=\"text-warning\" href=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "cat?4\">";
        echo twig_escape_filter($this->env, (isset($context["PORTAL_thank"]) ? $context["PORTAL_thank"] : null), "html", null, true);
        echo "</a></h3>
                                                      <div class=\"box-tools pull-right\">
                                                        <h4> <i class=\"fa fa-heart\"></i></h4>
                                                      </div>
                                                      </div><!-- /.box-header -->
                                                      <div class=\"box-body\">
                                                        <div class=\"box-footer no-padding\">
                                                          ";
        // line 206
        if (((isset($context["portal_posts_status4"]) ? $context["portal_posts_status4"] : null) == true)) {
            // line 207
            echo "                                                          <ul class=\"nav nav-pills nav-stacked\">
                                                            ";
            // line 208
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["portal_posts_status_arr4"]) ? $context["portal_posts_status_arr4"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 209
                echo "                                                            <li>
                                                              <a href=\"";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "thread?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\">
                                                              <strong style=\"
                                                              font-size: 16px;
                                                              \"><i class=\"fa fa-heart\"></i> ";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </strong>

                                                              ";
                // line 215
                echo $this->getAttribute($context["item"], "get_post_rate", array());
                echo "
                                                              <br>
                                                              <small class=\"text-muted\">
                                                              ";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_comments", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_count_comments", array()), "html", null, true);
                echo " ● ";
                echo $this->getAttribute($context["item"], "get_official_comments", array());
                echo "</small><!--small class=\"pull-right text-muted\">рейтинг</small-->
                                                            </a></li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                                            <li>

                                                              <li><small class=\"text-muted\"><a href=\"";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "cat?4\" class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_thank_all"]) ? $context["PORTAL_thank_all"] : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (isset($context["get_total_posts_by_type4"]) ? $context["get_total_posts_by_type4"] : null), "html", null, true);
            echo ")</a></small></li>
                                                            </ul>
                                                            ";
        }
        // line 226
        echo "                                                            ";
        if (((isset($context["portal_posts_status4"]) ? $context["portal_posts_status4"] : null) == false)) {
            // line 227
            echo "                                                            <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                                                            <center>";
            // line 228
            echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
            echo "</center></div>
                                                            ";
        }
        // line 230
        echo "                                                            </div><!-- /.footer -->
                                                            </div><!-- /.box-body -->
                                                          </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                          ";
        // line 235
        echo (isset($context["view_release_bar"]) ? $context["view_release_bar"] : null);
        echo "
                                                          ";
        // line 236
        echo (isset($context["view_top_news_bar"]) ? $context["view_top_news_bar"] : null);
        echo "
                                                          ";
        // line 237
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
        return "index.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 237,  535 => 236,  531 => 235,  524 => 230,  519 => 228,  516 => 227,  513 => 226,  503 => 223,  499 => 221,  486 => 218,  480 => 215,  475 => 213,  467 => 210,  464 => 209,  460 => 208,  457 => 207,  455 => 206,  443 => 199,  436 => 194,  431 => 192,  427 => 190,  424 => 189,  414 => 186,  410 => 184,  397 => 181,  391 => 178,  386 => 176,  378 => 173,  375 => 172,  371 => 171,  368 => 170,  366 => 169,  354 => 162,  347 => 157,  342 => 155,  338 => 153,  335 => 152,  325 => 149,  321 => 147,  306 => 144,  300 => 141,  295 => 139,  287 => 136,  284 => 135,  280 => 134,  277 => 133,  275 => 132,  263 => 125,  256 => 120,  251 => 118,  248 => 117,  245 => 116,  235 => 113,  231 => 111,  215 => 107,  209 => 104,  204 => 102,  196 => 99,  193 => 98,  189 => 97,  186 => 96,  184 => 95,  171 => 87,  162 => 81,  152 => 74,  143 => 68,  133 => 61,  121 => 52,  116 => 50,  107 => 44,  102 => 42,  93 => 36,  88 => 34,  79 => 28,  74 => 26,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  45 => 11,  38 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
