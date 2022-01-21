<?php

/* version.view.tmpl */
class __TwigTemplate_fa3daeb05e1ebe899a26e99f64cf470950d0864a3a064c71a0385332cfeb55b0 extends Twig_Template
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
            echo "                    ";
            if (((isset($context["hnparam"]) ? $context["hnparam"] : null) == "new_feed")) {
                // line 9
                echo "                    ";
                if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                    // line 10
                    echo "                    <div class=\"box box-default\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
                    // line 12
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_new_msg"]) ? $context["PORTAL_new_msg"] : null), "html", null, true);
                    echo "</h3>
                            <div class=\"box-tools pull-right\">
                                <h4> <i class=\"fa fa-leaf\"></i></h4>
                            </div>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"\">
                                    <form class=\"form-horizontal\">
                                        <div class=\"form-group\">

                                            <div class=\"col-sm-9\">
                                                <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
                    echo "\" value=\"\">
                                            </div>
                                            <div class=\"col-sm-3\">

                                            </div>
                                            <div class=\"col-sm-12\"><br>
                                                <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"";
                    // line 29
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_t"]) ? $context["PORTAL_t"] : null), "html", null, true);
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
                                                <button class=\"btn btn-block btn-info\" id=\"make_new_version\" >";
                    // line 43
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_news_create"]) ? $context["PORTAL_news_create"] : null), "html", null, true);
                    echo "</button>
                                                <input type=\"hidden\" value=\"";
                    // line 44
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
                // line 52
                echo "                            ";
            }
            // line 53
            echo "                            ";
            if (((isset($context["hnparam"]) ? $context["hnparam"] : null) == "no_new_feed")) {
                // line 54
                echo "                            ";
                if (((isset($context["hnget"]) ? $context["hnget"] : null) == "edit_feed")) {
                    // line 55
                    echo "                            ";
                    if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                        // line 56
                        echo "                            <div class=\"box box-default\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
                        // line 58
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_new_msg"]) ? $context["PORTAL_new_msg"] : null), "html", null, true);
                        echo "</h3>
                                    <div class=\"box-tools pull-right\">
                                        <h4> <i class=\"fa fa-leaf\"></i></h4>
                                    </div>
                                    </div><!-- /.box-header -->
                                    <div class=\"box-body\">
                                        <div class=\"\">
                                            <form class=\"form-horizontal\">
                                                <div class=\"form-group\">

                                                    <div class=\"col-sm-9\">
                                                        <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                        // line 69
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
                        echo "\">
                                                    </div>
                                                    <div class=\"col-sm-3\">

                                                    </div>
                                                    <div class=\"col-sm-12\"><br>
                                                        <input type=\"text\" class=\"form-control\" id=\"title\" placeholder=\"";
                        // line 75
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_t"]) ? $context["PORTAL_t"] : null), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">

                                                    <div class=\"col-sm-12\">
                                                        <div id=\"note\">";
                        // line 81
                        echo (isset($context["msg"]) ? $context["msg"] : null);
                        echo "</div>
                                                    </div>
                                                    <div class=\"col-sm-12\" >
                                                    </div>
                                                    <div class=\"col-sm-12\" id=\"post_res\">
                                                    </div>
                                                    <div class=\"col-sm-6 col-sm-offset-3\">
                                                        <br>
                                                        <button class=\"btn btn-block btn-info\" id=\"make_edit_version\" >";
                        // line 89
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_news_save"]) ? $context["PORTAL_news_save"] : null), "html", null, true);
                        echo "</button>
                                                        <input type=\"hidden\" value=\"";
                        // line 90
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
                    // line 98
                    echo "                                    ";
                }
                // line 99
                echo "                                    ";
                if (((isset($context["hnget"]) ? $context["hnget"] : null) == "no_edit_feed")) {
                    // line 100
                    echo "                                    <div class=\"box box-default\">
                                        <div class=\"box-header with-border\">
                                            <h3 class=\"box-title\">";
                    // line 102
                    echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
                    echo "</h3>
                                            <div class=\"box-tools pull-right\">
                                                <h4> <i class=\"fa fa-leaf\"></i></h4>
                                            </div>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                <p class=\"text-muted\">";
                    // line 108
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "</p>
                                                ";
                    // line 109
                    echo (isset($context["msg"]) ? $context["msg"] : null);
                    echo "
                                            </div>
                                            <div class=\"box-footer\">
                                                <a style=\"width:25px;\" class=\"btn btn-xs btn-twitter\" href=\"http://twitter.com/share?text=";
                    // line 112
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "&url=";
                    echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                    echo "\" title=\"Share on Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                                                <a style=\"width:25px;\" class=\"btn btn-xs btn-facebook\"
                                                href=\"http://www.facebook.com/sharer/sharer.php?s=100&p[url]=";
                    // line 114
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
                    // line 116
                    echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                    echo "\"><i class=\"fa fa-google-plus\"></i></a>
                                                <a style=\"width:25px;\" class=\"btn btn-xs btn-github\" href=\"mailto:?subject=&body=";
                    // line 117
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, (isset($context["REQUEST_URI"]) ? $context["REQUEST_URI"] : null), "html", null, true);
                    echo "\"><i class=\"fa fa-envelope\"></i></a>
                                                <br>
                                                <small class=\"text-muted\">
                                                <time id=\"c\" datetime=\"";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
                    echo "\"></time>
                                                </small>
                                                <small class=\"text-muted pull-right\">
                                                ";
                    // line 123
                    echo twig_escape_filter($this->env, (isset($context["nameshort"]) ? $context["nameshort"] : null), "html", null, true);
                    echo "
                                                ";
                    // line 124
                    if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                        // line 125
                        echo "                                                <div class=\"btn-group \">
                                                    <button class=\"btn btn-xs bg-maroon\" id=\"delete_version\" value=\"";
                        // line 126
                        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_act_del"]) ? $context["PORTAL_act_del"] : null), "html", null, true);
                        echo "</button>
                                                    <a class=\"btn btn-xs bg-orange btn-flat\" href=\"version?";
                        // line 127
                        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                        echo "&edit_feed\">";
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_act_edit"]) ? $context["PORTAL_act_edit"] : null), "html", null, true);
                        echo "</a>
                                                </div>
                                                ";
                    }
                    // line 130
                    echo "                                                </small>
                                            </div>
                                        </div>
                                        ";
                }
                // line 134
                echo "                                        ";
            }
            // line 135
            echo "                                        ";
        }
        // line 136
        echo "                                        ";
        if (((isset($context["hnset"]) ? $context["hnset"] : null) == false)) {
            // line 137
            echo "                                        ";
            if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                // line 138
                echo "                                        <div class=\"box box-primary\">
                                            <div class=\"box-header with-border\">
                                                <h3 class=\"box-title\">";
                // line 140
                echo twig_escape_filter($this->env, (isset($context["PORTAL_version_box_title"]) ? $context["PORTAL_version_box_title"] : null), "html", null, true);
                echo "</h3>
                                                </div><!-- /.box-header -->
                                                <div class=\"box-body\">

                                                    <form class=\"form-horizontal\" role=\"form\">
                                                        <div class=\"form-group\">
                                                            <label for=\"file_size\" class=\"col-sm-4 control-label\"><small>";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["PORTAL_t"]) ? $context["PORTAL_t"] : null), "html", null, true);
                echo "</small></label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control input-sm\" id=\"portal_box_version_n\" placeholder=\"";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["PORTAL_t"]) ? $context["PORTAL_t"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["portal_box_version_n"]) ? $context["portal_box_version_n"] : null), "html", null, true);
                echo "\">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label for=\"file_size\" class=\"col-sm-4 control-label\"><small>";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["FIELD_type_text"]) ? $context["FIELD_type_text"] : null), "html", null, true);
                echo "</small></label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control input-sm\" id=\"portal_box_version_text\" placeholder=\"";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["FIELD_type_text"]) ? $context["FIELD_type_text"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["portal_box_version_text"]) ? $context["portal_box_version_text"] : null), "html", null, true);
                echo "\">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label for=\"file_size\" class=\"col-sm-4 control-label\"><small>";
                // line 158
                echo twig_escape_filter($this->env, (isset($context["PORTAL_icon"]) ? $context["PORTAL_icon"] : null), "html", null, true);
                echo "</small></label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" class=\"form-control input-sm\" id=\"portal_box_version_icon\" placeholder=\"";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["PORTAL_icon"]) ? $context["PORTAL_icon"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["portal_box_version_icon"]) ? $context["portal_box_version_icon"] : null), "html", null, true);
                echo "\">
                                                            </div>
                                                        </div>
                                                        <center>
                                                        <button type=\"submit\" id=\"conf_edit_version_banner\" class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["JS_save"]) ? $context["JS_save"] : null), "html", null, true);
                echo "</button>

                                                        </center>
                                                    </form>
                                                </div>
                                                <div id=\"conf_edit_version_banner_res\"></div>
                                            </div>
                                            <div class=\"box box-primary\">
                                                <div class=\"box-header with-border\">
                                                    <h3 class=\"box-title\">";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["PORTAL_todo_1"]) ? $context["PORTAL_todo_1"] : null), "html", null, true);
                echo "</h3>
                                                    </div><!-- /.box-header -->
                                                    <div class=\"box-body\">

                                                        <style type=\"text/css\">

                                                        pre, code {
                                                        font-size: 12px;
                                                        }
                                                        pre {
                                                        width: 100%;
                                                        overflow: auto;
                                                        }
                                                        small {
                                                        font-size: 90%;
                                                        }
                                                        small code {
                                                        font-size: 11px;
                                                        }
                                                        .placeholder {
                                                        outline: 1px dashed #4183C4;
                                                        /*-webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        margin: -1px;*/
                                                        height: 20px;
                                                        }
                                                        .mjs-nestedSortable-error {
                                                        background: #fbe3e4;
                                                        border-color: transparent;
                                                        }
                                                        ul {
                                                        margin: 0;
                                                        padding: 0;
                                                        padding-left: 30px;
                                                        }
                                                        ul.sortable, ul.sortable ul {
                                                        margin: 0 0 0 25px;
                                                        padding: 0;
                                                        list-style-type: none;
                                                        }
                                                        ul.sortable {
                                                        margin: 4em 0;
                                                        }
                                                        .sortable li {
                                                        margin: 5px 0 0 0;
                                                        padding: 0;
                                                        }
                                                        .sortable li div  {
                                                        /*
                                                        border: 1px solid #d4d4d4;
                                                        -webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        border-color: #D4D4D4 #D4D4D4 #BCBCBC;
                                                        padding: 6px;
                                                        margin: 0;
                                                        cursor: move;
                                                        background: #f6f6f6;
                                                        background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%);
                                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed));
                                                        background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
                                                        background: -o-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
                                                        background: -ms-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
                                                        background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
                                                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
                                                        */
                                                        }
                                                        .sortable li.mjs-nestedSortable-branch div {
                                                        /* background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #f0ece9 100%);
                                                        background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#f0ece9 100%);
                                                        */
                                                        list-style-type: none;
                                                        }
                                                        .sortable li.mjs-nestedSortable-leaf div {
                                                        }
                                                        li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
                                                        border-color: #999;
                                                        background: #fafafa;
                                                        }
                                                        .disclose {
                                                        cursor: pointer;
                                                        width: 10px;
                                                        display: none;
                                                        }
                                                        .sortable li.mjs-nestedSortable-collapsed > ul {
                                                        display: none;
                                                        }
                                                        .sortable li.mjs-nestedSortable-branch > div > .disclose {
                                                        display: inline-block;
                                                        }
                                                        .sortable li.mjs-nestedSortable-collapsed > div > .disclose > span:before {
                                                        content: '+ ';
                                                        }
                                                        .sortable li.mjs-nestedSortable-expanded > div > .disclose > span:before {
                                                        content: '- ';
                                                        }

                                                        p, ol, ul, pre, form {
                                                        margin-top: 0;
                                                        margin-bottom: 1em;
                                                        }
                                                        dl {
                                                        margin: 0;
                                                        }
                                                        dd {
                                                        margin: 0;
                                                        padding: 0 0 0 1.5em;
                                                        }
                                                        code {
                                                        background: #e5e5e5;
                                                        }
                                                        input {
                                                        vertical-align: text-bottom;
                                                        }
                                                        .notice {
                                                        color: #c33;
                                                        }
                                                        </style>
                                                        <div id=\"content_items\">
                                                            ";
                // line 293
                echo (isset($context["showMenu_todo"]) ? $context["showMenu_todo"] : null);
                echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"box-footer clearfix no-border\">
                                                        <button id=\"add_todo_item\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> ";
                // line 297
                echo twig_escape_filter($this->env, (isset($context["NOTES_create"]) ? $context["NOTES_create"] : null), "html", null, true);
                echo "</button>


                                                    </div>
                                                </div>
                                                ";
            }
            // line 303
            echo "                                                <div class=\"box box-primary\">
                                                    <div class=\"box-header with-border\">
                                                        <h3 class=\"box-title\">";
            // line 305
            echo twig_escape_filter($this->env, (isset($context["PORTAL_todo_2"]) ? $context["PORTAL_todo_2"] : null), "html", null, true);
            echo "</h3>
                                                        </div><!-- /.box-header -->
                                                        <div class=\"box-body\">
                                                            <div class=\"\">
                                                                ";
            // line 309
            echo (isset($context["get_main_todo"]) ? $context["get_main_todo"] : null);
            echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"box box-default\">
                                                        <div class=\"box-header with-border\">
                                                            <h3 class=\"box-title\">";
            // line 315
            echo twig_escape_filter($this->env, (isset($context["PORTAL_versions"]) ? $context["PORTAL_versions"] : null), "html", null, true);
            echo "</h3>
                                                            <div class=\"box-tools pull-right\">
                                                                <h4> <i class=\"fa fa-leaf\"></i></h4>
                                                            </div>
                                                            </div><!-- /.box-header -->
                                                            <div class=\"box-body\">
                                                                <div class=\"\">
                                                                    <ul class=\"products-list product-list-in-box \">
                                                                        ";
            // line 323
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["getna"]) ? $context["getna"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 324
                echo "                                                                        <li class=\"item\">

                                                                            <div class=\"product-info\" style=\"margin-left:0px;\">
                                                                                <a href=\"version?";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_id", array()), "html", null, true);
                echo "\" class=\"product-title\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                echo "</h4> </a>
                                                                                <span class=\"product-description\">
                                                                                ";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                                                                </span>
                                                                                <small class=\"text-muted pull-right\">
                                                                                <i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 332
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
            // line 337
            echo "

                                                                        </ul>
                                                                        </div><!-- /.footer -->
                                                                    </div>
                                                                </div>
                                                                ";
        }
        // line 344
        echo "                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                ";
        // line 346
        if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
            // line 347
            echo "                                                                <div class=\"box\">
                                                                    <div class=\"box-header\">
                                                                        <h3 class=\"box-title\">";
            // line 349
            echo twig_escape_filter($this->env, (isset($context["PORTAL_admin_menu"]) ? $context["PORTAL_admin_menu"] : null), "html", null, true);
            echo "</h3>
                                                                    </div>
                                                                    <div class=\"box-body\">
                                                                        <a href=\"version?new_feed\" class=\"btn btn-default btn-block\">";
            // line 352
            echo twig_escape_filter($this->env, (isset($context["PORTAL_news_create"]) ? $context["PORTAL_news_create"] : null), "html", null, true);
            echo "</a>
                                                                    </div>
                                                                </div>
                                                                ";
        }
        // line 356
        echo "                                                                ";
        echo (isset($context["view_release_bar"]) ? $context["view_release_bar"] : null);
        echo "
                                                                ";
        // line 357
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
        return "version.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 357,  580 => 356,  573 => 352,  567 => 349,  563 => 347,  561 => 346,  557 => 344,  548 => 337,  537 => 332,  531 => 329,  524 => 327,  519 => 324,  515 => 323,  504 => 315,  495 => 309,  488 => 305,  484 => 303,  475 => 297,  468 => 293,  345 => 173,  333 => 164,  324 => 160,  319 => 158,  310 => 154,  305 => 152,  296 => 148,  291 => 146,  282 => 140,  278 => 138,  275 => 137,  272 => 136,  269 => 135,  266 => 134,  260 => 130,  252 => 127,  246 => 126,  243 => 125,  241 => 124,  237 => 123,  231 => 120,  223 => 117,  219 => 116,  208 => 114,  201 => 112,  195 => 109,  191 => 108,  182 => 102,  178 => 100,  175 => 99,  172 => 98,  161 => 90,  157 => 89,  146 => 81,  135 => 75,  124 => 69,  110 => 58,  106 => 56,  103 => 55,  100 => 54,  97 => 53,  94 => 52,  83 => 44,  79 => 43,  62 => 29,  53 => 23,  39 => 12,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
