<?php

/* feed.view.tmpl */
class __TwigTemplate_93b4c189cb39e947d93c46bee6da9a9ab02c7d92c91aaea340a39d178857c0f7 extends Twig_Template
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
          ";
        // line 7
        if (((isset($context["hnset"]) ? $context["hnset"] : null) == true)) {
            // line 8
            echo "          ";
            if (((isset($context["hn"]) ? $context["hn"] : null) == "new_feed")) {
                // line 9
                echo "          ";
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 10
                    echo "          <div class=\"box box-default\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">";
                    // line 12
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_new_msg"]) ? $context["PORTAL_new_msg"] : null), "html", null, true);
                    echo "</h3>
              <div class=\"box-tools pull-right\">
                <h4> <i class=\"fa fa-comment\"></i></h4>
              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\">
                <div class=\"\">
                  <form class=\"form-horizontal\">
                    <div class=\"form-group\">
                      <div class=\"col-sm-9\">
                        <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                    // line 22
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
                    echo "\" value=\"\">
                      </div>
                      <div class=\"col-sm-3\">
                      </div>
                      <div class=\"col-sm-12\"><br>
                        <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"";
                    // line 27
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_ann"]) ? $context["PORTAL_ann"] : null), "html", null, true);
                    echo "\" value=\"\">
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-sm-12\">
                        <div id=\"note\"></div>
                      </div>
                      <div class=\"col-sm-12\" >
                      </div>
                      <div class=\"col-sm-12\" id=\"post_res\">
                      </div>
                      <div class=\"col-sm-6 col-sm-offset-3\">
                        <br>
                        <button class=\"btn btn-block btn-info\" id=\"make_new_feed\" >";
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_news_create"]) ? $context["PORTAL_news_create"] : null), "html", null, true);
                    echo "</button>
                        <input type=\"hidden\" value=\"";
                    // line 41
                    echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
                    echo "\" id=\"news_hash\">
                      </div>
                    </div>
                  </form>
                  </div><!-- /.footer -->
                </div>
              </div>
              ";
                }
                // line 49
                echo "              ";
            }
            // line 50
            echo "              ";
            if (((isset($context["hn"]) ? $context["hn"] : null) == "edit_feed")) {
                // line 51
                echo "              ";
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 52
                    echo "              <div class=\"box box-default\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_new_msg"]) ? $context["PORTAL_new_msg"] : null), "html", null, true);
                    echo "</h3>
                  <div class=\"box-tools pull-right\">
                    <h4> <i class=\"fa fa-comment\"></i></h4>
                  </div>
                  </div><!-- /.box-header -->
                  <div class=\"box-body\">
                    <div class=\"\">
                      <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                          <div class=\"col-sm-9\">
                            <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                    // line 64
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
                    echo "\">
                          </div>
                          <div class=\"col-sm-3\">
                          </div>
                          <div class=\"col-sm-12\"><br>
                            <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"";
                    // line 69
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_ann"]) ? $context["PORTAL_ann"] : null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "\">
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <div class=\"col-sm-12\">
                            <div id=\"note\">";
                    // line 74
                    echo (isset($context["msg"]) ? $context["msg"] : null);
                    echo "</div>
                          </div>
                          <div class=\"col-sm-12\" >
                          </div>
                          <div class=\"col-sm-12\" id=\"post_res\">
                          </div>
                          <div class=\"col-sm-6 col-sm-offset-3\">
                            <br>
                            <button class=\"btn btn-block btn-info\" id=\"make_edit_feed\" >";
                    // line 82
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_news_save"]) ? $context["PORTAL_news_save"] : null), "html", null, true);
                    echo "</button>
                            <input type=\"hidden\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                    echo "\" id=\"news_hash\">
                          </div>
                        </div>
                      </form>
                      </div><!-- /.footer -->
                    </div>
                  </div>
                  ";
                }
                // line 91
                echo "                  ";
            }
            // line 92
            echo "                  ";
            if (((isset($context["hn"]) ? $context["hn"] : null) == "else")) {
                // line 93
                echo "                  <div class=\"box box-default\">
                    <div class=\"box-header with-border\">
                      <h3 class=\"box-title\">";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
                echo "</h3>
                      <div class=\"box-tools pull-right\">
                        <h4> <i class=\"fa fa-newspaper-o\"></i></h4>
                      </div>
                      </div><!-- /.box-header -->
                      <div class=\"box-body\">
                        <p class=\"text-muted\">";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</p>
                        ";
                // line 102
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
                      </div>
                      <div class=\"box-footer\">
                        <a style=\"width:25px;\" class=\"btn btn-xs btn-twitter\" href=\"http://twitter.com/share?text=";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo ">&url=";
                echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                echo "\" title=\"Share on Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                        <a style=\"width:25px;\" class=\"btn btn-xs btn-facebook\"
                        href=\"http://www.facebook.com/sharer/sharer.php?s=100&p[url]=";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                echo "&p[title]=";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "&p[summary]=";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "&p[images][0]=";
                echo twig_escape_filter($this->env, (isset($context["logo_img"]) ? $context["logo_img"] : null), "html", null, true);
                echo "\"
                        ><i class=\"fa fa-facebook\"></i></a>
                        <a style=\"width:25px;\" class=\"btn btn-xs btn-google-plus\" href=\"https://plus.google.com/share?url=";
                // line 109
                echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                echo "\"><i class=\"fa fa-google-plus\"></i></a>
                        <a style=\"width:25px;\" class=\"btn btn-xs btn-github\" href=\"mailto:?subject=&body=";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i></a>
                        <br>
                        <small class=\"text-muted\">
                        <time id=\"c\" datetime=\"";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
                echo "\"></time>
                        </small>
                        <small class=\"text-muted pull-right\">
                        ";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["nameshort"]) ? $context["nameshort"] : null), "html", null, true);
                echo "
                        ";
                // line 117
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 118
                    echo "                        <div class=\"btn-group \">
                          <button class=\"btn btn-xs bg-maroon\" id=\"delete_news\" value=\"";
                    // line 119
                    echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_act_del"]) ? $context["PORTAL_act_del"] : null), "html", null, true);
                    echo "</button>
                          <a class=\"btn btn-xs bg-orange btn-flat\" href=\"feed?";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                    echo "&edit_feed\">";
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_act_edit"]) ? $context["PORTAL_act_edit"] : null), "html", null, true);
                    echo "</a>
                        </div>
                        ";
                }
                // line 123
                echo "                        </small>
                      </div>
                    </div>
                    ";
            }
            // line 127
            echo "                    ";
        }
        // line 128
        echo "                    ";
        if (((isset($context["hnset"]) ? $context["hnset"] : null) == false)) {
            // line 129
            echo "                    <div class=\"box box-default\">
                      <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["PORTAL_news"]) ? $context["PORTAL_news"] : null), "html", null, true);
            echo "</h3>
                        <div class=\"box-tools pull-right\">
                          <h4> <i class=\"fa fa-newspaper-o\"></i> </h4>
                        </div>
                        </div><!-- /.box-header -->
                        <div class=\"box-body\">
                          <div class=\"\">
                            <ul class=\"products-list product-list-in-box \">
                              ";
            // line 139
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news_arr"]) ? $context["news_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 140
                echo "                              <li class=\"item\">
                                <div class=\"product-info\" style=\"margin-left:0px;\">
                                  <a href=\"feed?";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\" class=\"product-title\">
                                  <h4>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo " </h4>
                                  </a>
                                  <span class=\"product-description\">
                                  ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                  </span>
                                  <small class=\"text-muted pull-right\">
                                  <i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dt", array()), "html", null, true);
                echo "\"></time>
                                  </small>
                                </div>
                                </li><!-- /.item -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                              </ul>
                              </div><!-- /.footer -->
                            </div>
                          </div>
                          ";
        }
        // line 159
        echo "                        </div>
                        <div class=\"col-md-3\">
                          ";
        // line 161
        if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
            // line 162
            echo "                          <div class=\"box\">
                            <div class=\"box-header\">
                              <h3 class=\"box-title\">";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["PORTAL_admin_menu"]) ? $context["PORTAL_admin_menu"] : null), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"box-body\">
                              <a href=\"feed?new_feed\" class=\"btn btn-default btn-block\">";
            // line 167
            echo twig_escape_filter($this->env, (isset($context["PORTAL_news_create"]) ? $context["PORTAL_news_create"] : null), "html", null, true);
            echo "</a>
                            </div>
                          </div>
                          ";
        }
        // line 171
        echo "                          ";
        echo (isset($context["view_release_bar"]) ? $context["view_release_bar"] : null);
        echo "
                          ";
        // line 172
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
        return "feed.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 172,  343 => 171,  336 => 167,  330 => 164,  326 => 162,  324 => 161,  320 => 159,  313 => 154,  302 => 149,  296 => 146,  290 => 143,  286 => 142,  282 => 140,  278 => 139,  267 => 131,  263 => 129,  260 => 128,  257 => 127,  251 => 123,  243 => 120,  237 => 119,  234 => 118,  232 => 117,  228 => 116,  222 => 113,  214 => 110,  210 => 109,  199 => 107,  192 => 105,  186 => 102,  182 => 101,  173 => 95,  169 => 93,  166 => 92,  163 => 91,  152 => 83,  148 => 82,  137 => 74,  127 => 69,  117 => 64,  104 => 54,  100 => 52,  97 => 51,  94 => 50,  91 => 49,  80 => 41,  76 => 40,  60 => 27,  52 => 22,  39 => 12,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
