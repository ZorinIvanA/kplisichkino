<?php

/* manual.view.tmpl */
class __TwigTemplate_4c41e881add4549a30da982119ae50320aff79f75432d93569e22e5d677a6681 extends Twig_Template
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
        if (((isset($context["hn_set"]) ? $context["hn_set"] : null) == true)) {
            // line 8
            echo "                    ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "edit_some_qa")) {
                // line 9
                echo "                    ";
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 10
                    echo "                    <div class=\"box box-default\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
                    // line 12
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_edit_qa"]) ? $context["PORTAL_edit_qa"] : null), "html", null, true);
                    echo "</h3>
                            <div class=\"box-tools pull-right\">
                                <h4> <i class=\"fa fa-file-text-o\"></i></h4>
                            </div>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"\">
                                    <form class=\"form-horizontal\">
                                        <div class=\"form-group\">

                                            <div class=\"col-sm-12\">
                                                <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_q"]) ? $context["PORTAL_q"] : null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : null), "html", null, true);
                    echo "\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">

                                            <div class=\"col-sm-12\">
                                                <div id=\"note\">";
                    // line 29
                    echo (isset($context["answer"]) ? $context["answer"] : null);
                    echo "</div>
                                            </div>
                                            <div class=\"col-sm-12\" >
                                            </div>
                                            <div class=\"col-sm-12\" id=\"post_res\">
                                            </div>
                                            <div class=\"col-sm-6 col-sm-offset-3\">
                                                <br>
                                                <button class=\"btn btn-block btn-info\" id=\"make_edit_manual_qa\" >";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_news_save"]) ? $context["PORTAL_news_save"] : null), "html", null, true);
                    echo "</button>
                                                <input type=\"hidden\" value=\"";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                    echo "\" id=\"manual_hash\">
                                            </div>
                                        </div>
                                    </form>
                                    </div><!-- /.footer -->
                                </div>
                            </div>
                            ";
                }
                // line 46
                echo "                            ";
            }
            // line 47
            echo "                            ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "edit_qa")) {
                // line 48
                echo "                            ";
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 49
                    echo "                            <style type=\"text/css\">

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

                            }
                            .sortable li.mjs-nestedSortable-branch div {

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
                            <div class=\"box box-default\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
                    // line 147
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_q_manag"]) ? $context["PORTAL_q_manag"] : null), "html", null, true);
                    echo "</h3>
                                    <div class=\"box-tools pull-right\">
                                        <h4> <i class=\"fa fa-file-text-o\"></i></h4>
                                    </div>
                                    </div><!-- /.box-header -->
                                    <div class=\"box-body\">
                                        <div id=\"content_items\">
                                            ";
                    // line 154
                    echo (isset($context["showMenu_qa"]) ? $context["showMenu_qa"] : null);
                    echo "
                                        </div>
                                    </div>
                                    <div class=\"box-footer clearfix no-border\">
                                        <button id=\"add_qa_item\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> ";
                    // line 158
                    echo twig_escape_filter($this->env, (isset($context["NOTES_create"]) ? $context["NOTES_create"] : null), "html", null, true);
                    echo "</button>
                                    </div>
                                </div>
                                ";
                }
                // line 162
                echo "                                ";
            }
            // line 163
            echo "                                ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "edit_cat")) {
                // line 164
                echo "                                ";
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 165
                    echo "                                <style type=\"text/css\">

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

                                }
                                .sortable li.mjs-nestedSortable-branch div {

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
                                <div class=\"box box-default\">
                                    <div class=\"box-header with-border\">
                                        <h3 class=\"box-title\">";
                    // line 259
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_cat_manag"]) ? $context["PORTAL_cat_manag"] : null), "html", null, true);
                    echo "</h3>
                                        <div class=\"box-tools pull-right\">
                                            <h4> <i class=\"fa fa-file-text-o\"></i></h4>
                                        </div>
                                        </div><!-- /.box-header -->
                                        <div class=\"box-body\">
                                            <div id=\"content_items\">
                                                ";
                    // line 266
                    echo (isset($context["showMenu_manual"]) ? $context["showMenu_manual"] : null);
                    echo "
                                            </div>
                                        </div>
                                        <div class=\"box-footer clearfix no-border\">
                                            <button id=\"add_manual_item\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> ";
                    // line 270
                    echo twig_escape_filter($this->env, (isset($context["NOTES_create"]) ? $context["NOTES_create"] : null), "html", null, true);
                    echo "</button>
                                        </div>
                                    </div>
                                    ";
                }
                // line 274
                echo "                                    ";
            }
            // line 275
            echo "                                    ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "qa")) {
                // line 276
                echo "                                    <div class=\"box box-default\">
                                        <div class=\"box-header with-border\">
                                            <h3 class=\"box-title\">";
                // line 278
                echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : null), "html", null, true);
                echo "</h3>
                                            <div class=\"box-tools pull-right\">
                                                <h4> </h4>
                                            </div>
                                            </div><!-- /.box-header -->
                                            <div class=\"box-body\">
                                                ";
                // line 284
                echo (isset($context["answer"]) ? $context["answer"] : null);
                echo "
                                            </div>
                                            <div class=\"box-footer\">
                                                <small class=\"text-muted\">
                                                <time id=\"c\" datetime=\"";
                // line 288
                echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
                echo "\"></time>
                                                </small>
                                                <small class=\"text-muted pull-right\">
                                                ";
                // line 291
                echo twig_escape_filter($this->env, (isset($context["author_id"]) ? $context["author_id"] : null), "html", null, true);
                echo "
                                                </small>
                                            </div>
                                        </div>
                                        ";
            }
            // line 296
            echo "                                        ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "find")) {
                // line 297
                echo "                                        <div class=\"box box-default\">
                                            <div class=\"box-header with-border\">
                                                <h3 class=\"box-title\">";
                // line 299
                echo twig_escape_filter($this->env, (isset($context["PORTAL_s_res"]) ? $context["PORTAL_s_res"] : null), "html", null, true);
                echo "</h3>
                                                <div class=\"box-tools pull-right\">
                                                    <h4> </h4>
                                                </div>
                                                </div><!-- /.box-header -->
                                                <div class=\"box-body\">
                                                    ";
                // line 305
                echo (isset($context["find_res"]) ? $context["find_res"] : null);
                echo "
                                                </div>
                                            </div>
                                            ";
            }
            // line 309
            echo "                                            ";
            if (((isset($context["hn_param"]) ? $context["hn_param"] : null) == "no_new_manual")) {
                // line 310
                echo "                                            ";
                if (((isset($context["get_param"]) ? $context["get_param"] : null) == "edit_manual")) {
                    // line 311
                    echo "                                            ";
                    if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                        // line 312
                        echo "                                            <div class=\"box box-default\">
                                                <div class=\"box-header with-border\">
                                                    <h3 class=\"box-title\">";
                        // line 314
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_edit_n"]) ? $context["PORTAL_edit_n"] : null), "html", null, true);
                        echo "</h3>
                                                    <div class=\"box-tools pull-right\">
                                                        <h4> <i class=\"fa fa-file-text-o\"></i></h4>
                                                    </div>
                                                    </div><!-- /.box-header -->
                                                    <div class=\"box-body\">
                                                        <div class=\"\">
                                                            <form class=\"form-horizontal\">
                                                                <div class=\"form-group\">

                                                                    <div class=\"col-sm-9\">
                                                                        <input type=\"text\" class=\"form-control\" id=\"subj\" placeholder=\"";
                        // line 325
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_subj"]) ? $context["PORTAL_subj"] : null), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "\">
                                                                    </div>
                                                                    <div class=\"col-sm-3\">

                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group\">

                                                                    <div class=\"col-sm-12\">
                                                                        <div id=\"note\">";
                        // line 334
                        echo (isset($context["msg"]) ? $context["msg"] : null);
                        echo "</div>
                                                                    </div>
                                                                    <div class=\"col-sm-12\" >
                                                                        <div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
                                                                            <div class=\"dz-message\" data-dz-message>
                                                                                <center class=\"text-muted\">";
                        // line 339
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_fileplace"]) ? $context["PORTAL_fileplace"] : null), "html", null, true);
                        echo "</center>
                                                                            </div>
                                                                        <form action=\"#\" class=\"dropzone\"></form>
                                                                        <div class=\"table table-striped\" class=\"files\" id=\"previews\">

                                                                            <div id=\"template\" class=\"file-row\">
                                                                                <!-- This is used as the file preview template -->
                                                                                <table class=\"table\" style=\"margin-bottom: 0px;\">
                                                                                    <tbody><tr>
                                                                                        <th style=\"width:50%\"><p class=\"name\" data-dz-name></p> </th>
                                                                                        <td><small class=\"text-muted\"><p class=\"size\" data-dz-size></p></small></td>
                                                                                        <td style=\"width:30%\"><div class=\"progress progress-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\">
                                                                                            <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\" data-dz-uploadprogress></div>
                                                                                        </div></td>
                                                                                        <td class=\"pull-right\"><button data-dz-remove class=\"btn btn-sm btn-danger delete\">
                                                                                            <i class=\"glyphicon glyphicon-trash\"></i>
                                                                                            <span>Delete</span>
                                                                                        </button></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-12\" >
                                                                </div>
                                                                <div class=\"col-sm-12\" id=\"post_res\">
                                                                </div>
                                                                <div class=\"col-sm-6 col-sm-offset-3\">
                                                                    <br>
                                                                    <button class=\"btn btn-block btn-info\" id=\"make_edit_manual\" >";
                        // line 370
                        echo twig_escape_filter($this->env, (isset($context["PORTAL_news_save"]) ? $context["PORTAL_news_save"] : null), "html", null, true);
                        echo "</button>
                                                                    <input type=\"hidden\" value=\"";
                        // line 371
                        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                        echo "\" id=\"manual_hash\">
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div><!-- /.footer -->
                                                    </div>
                                                    ";
                    }
                    // line 378
                    echo "                                                </div>
                                                ";
                }
                // line 380
                echo "                                                ";
            }
            // line 381
            echo "                                                ";
            if (((isset($context["get_param"]) ? $context["get_param"] : null) == "no_edit_manual")) {
                // line 382
                echo "                                                <div class=\"box box-default\">
                                                    <div class=\"box-header with-border\">
                                                        <h3 class=\"box-title\">";
                // line 384
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "</h3>
                                                        <div class=\"box-tools pull-right\">
                                                            <h4> <i class=\"fa fa-file-text-o\"></i></h4>
                                                        </div>
                                                        </div><!-- /.box-header -->
                                                        <div class=\"box-body\">
                                                            <p class=\"text-muted\">";
                // line 390
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</p>
                                                            ";
                // line 391
                echo (isset($context["msg"]) ? $context["msg"] : null);
                echo "
                                                        ";
                // line 392
                echo (isset($context["view_attach_files"]) ? $context["view_attach_files"] : null);
                echo "</div>
                                                        <div class=\"box-footer\">
                                                            <small class=\"text-muted\">
                                                            <time id=\"c\" datetime=\"";
                // line 395
                echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
                echo "\"></time>
                                                            </small>
                                                            <small class=\"text-muted pull-right\">
                                                            ";
                // line 398
                echo (isset($context["author_id"]) ? $context["author_id"] : null);
                echo "
                                                            ";
                // line 399
                if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
                    // line 400
                    echo "                                                            <div class=\"btn-group \">
                                                                <button class=\"btn btn-xs bg-maroon\" id=\"delete_manual\" value=\"";
                    // line 401
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_act_del"]) ? $context["PORTAL_act_del"] : null), "html", null, true);
                    echo "</button>
                                                                <a class=\"btn btn-xs bg-orange btn-flat\" href=\"manual?";
                    // line 402
                    echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                    echo "&edit_manual\">";
                    echo twig_escape_filter($this->env, (isset($context["PORTAL_act_edit"]) ? $context["PORTAL_act_edit"] : null), "html", null, true);
                    echo "</a>
                                                            </div>
                                                            ";
                }
                // line 405
                echo "                                                            </small>
                                                        </div>
                                                    </div>
                                                    ";
            }
            // line 409
            echo "                                                    ";
        }
        // line 410
        echo "                                                    ";
        if (((isset($context["hn_set"]) ? $context["hn_set"] : null) == false)) {
            // line 411
            echo "                                                    <div class=\"box box-primary\">
                                                        <div class=\"box-header with-border\">
                                                            <h3 class=\"box-title\">";
            // line 413
            echo twig_escape_filter($this->env, (isset($context["PORTAL_findby_h"]) ? $context["PORTAL_findby_h"] : null), "html", null, true);
            echo "</h3>
                                                            <div class=\"box-tools pull-right\">
                                                                <h4> <i class=\"fa fa-search\"></i></h4>
                                                            </div>
                                                            </div><!-- /.box-header -->
                                                            <div class=\"box-body\">

                                                                <form method=\"get\" action=\"manual\">
                                                                    <div class=\"input-group input-group-lg\">
                                                                        <input type=\"text\" class=\"form-control\" name=\"find\" id=\"navbar-search-input\" placeholder=\"";
            // line 422
            echo twig_escape_filter($this->env, (isset($context["PORTAL_sel_text"]) ? $context["PORTAL_sel_text"] : null), "html", null, true);
            echo "\">
                                                                        <span class=\"input-group-btn\">
                                                                        <button id=\"find_in_manual\" class=\"btn btn-info btn-flat\" type=\"submit\">";
            // line 424
            echo twig_escape_filter($this->env, (isset($context["PORTAL_find_act"]) ? $context["PORTAL_find_act"] : null), "html", null, true);
            echo "</button>
                                                                        </span>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class=\"box box-info\">
                                                            <div class=\"box-header with-border\">
                                                                <h3 class=\"box-title\">";
            // line 432
            echo twig_escape_filter($this->env, (isset($context["PORTAL_help_center"]) ? $context["PORTAL_help_center"] : null), "html", null, true);
            echo "</h3>
                                                                <div class=\"box-tools pull-right\">
                                                                    <h4> <i class=\"fa fa-graduation-cap\"></i></h4>
                                                                </div>
                                                                </div><!-- /.box-header -->
                                                                <div class=\"box-body\">
                                                                    <div class=\"row\">
                                                                        ";
            // line 439
            echo (isset($context["get_main_manual"]) ? $context["get_main_manual"] : null);
            echo "
                                                                    </div>
                                                                    </div><!-- /.box-body -->
                                                                </div>
                                                                <div class=\"box box-info\">
                                                                    <div class=\"box-header with-border\">
                                                                        <h3 class=\"box-title\">";
            // line 445
            echo twig_escape_filter($this->env, (isset($context["PORTAL_qa"]) ? $context["PORTAL_qa"] : null), "html", null, true);
            echo "</h3>
                                                                        <div class=\"box-tools pull-right\">
                                                                            <h4> <i class=\"fa fa-graduation-cap\"></i></h4>
                                                                        </div>
                                                                        </div><!-- /.box-header -->
                                                                        <div class=\"box-body\">";
            // line 450
            echo (isset($context["show_qa_manual"]) ? $context["show_qa_manual"] : null);
            echo "
                                                                            </div><!-- /.box-body -->
                                                                        </div>
                                                                        ";
        }
        // line 454
        echo "                                                                    </div>
                                                                    <div class=\"col-md-3\">
                                                                        ";
        // line 456
        if (((isset($context["val_user"]) ? $context["val_user"] : null) == true)) {
            // line 457
            echo "                                                                        <div class=\"box\">
                                                                            <div class=\"box-header\">
                                                                                <h3 class=\"box-title\">";
            // line 459
            echo twig_escape_filter($this->env, (isset($context["PORTAL_admin_menu"]) ? $context["PORTAL_admin_menu"] : null), "html", null, true);
            echo "</h3>
                                                                            </div>
                                                                            <div class=\"box-body\">
                                                                                <a href=\"manual?edit_cat\" class=\"btn btn-default btn-block\">";
            // line 462
            echo twig_escape_filter($this->env, (isset($context["PORTAL_cat_n_manag"]) ? $context["PORTAL_cat_n_manag"] : null), "html", null, true);
            echo "</a>
                                                                                <!--a href=\"manual?new_manual\" class=\"btn btn-default btn-block\">Создать статью</a-->
                                                                                <a href=\"manual?edit_qa\" class=\"btn btn-default btn-block\">";
            // line 464
            echo twig_escape_filter($this->env, (isset($context["PORTAL_q_manag"]) ? $context["PORTAL_q_manag"] : null), "html", null, true);
            echo "</a>

                                                                            </div>
                                                                        </div>
                                                                        ";
        }
        // line 469
        echo "                                                                        <div class=\"box\">
                                                                            <div class=\"box-header\">
                                                                                <h3 class=\"box-title\">";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["PORTAL_cat_list"]) ? $context["PORTAL_cat_list"] : null), "html", null, true);
        echo "</h3>
                                                                            </div>
                                                                            <div class=\"box-body\">
                                                                                ";
        // line 474
        echo (isset($context["show_all_manual"]) ? $context["show_all_manual"] : null);
        echo "
                                                                            </div>
                                                                        </div>
                                                                        ";
        // line 477
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
        return "manual.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  701 => 477,  695 => 474,  689 => 471,  685 => 469,  677 => 464,  672 => 462,  666 => 459,  662 => 457,  660 => 456,  656 => 454,  649 => 450,  641 => 445,  632 => 439,  622 => 432,  611 => 424,  606 => 422,  594 => 413,  590 => 411,  587 => 410,  584 => 409,  578 => 405,  570 => 402,  564 => 401,  561 => 400,  559 => 399,  555 => 398,  549 => 395,  543 => 392,  539 => 391,  535 => 390,  526 => 384,  522 => 382,  519 => 381,  516 => 380,  512 => 378,  502 => 371,  498 => 370,  464 => 339,  456 => 334,  442 => 325,  428 => 314,  424 => 312,  421 => 311,  418 => 310,  415 => 309,  408 => 305,  399 => 299,  395 => 297,  392 => 296,  384 => 291,  378 => 288,  371 => 284,  362 => 278,  358 => 276,  355 => 275,  352 => 274,  345 => 270,  338 => 266,  328 => 259,  232 => 165,  229 => 164,  226 => 163,  223 => 162,  216 => 158,  209 => 154,  199 => 147,  99 => 49,  96 => 48,  93 => 47,  90 => 46,  79 => 38,  75 => 37,  64 => 29,  53 => 23,  39 => 12,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
