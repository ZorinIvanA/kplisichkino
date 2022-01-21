<?php

/* post.view.tmpl */
class __TwigTemplate_e97320d9071f307416b2210e18b46486e43cceea44d64948dd6a112cd6ed1ed9 extends Twig_Template
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
          <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\"> ";
        // line 9
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
        echo "</h3>
              <div class=\"box-tools pull-right\">
                <h4 style=\"  margin-top: 0px;\"> ";
        // line 11
        echo (isset($context["get_post_status"]) ? $context["get_post_status"] : null);
        echo " </h4>
              </div>
              </div><!-- /.box-header -->
              <div class=\"box-body\" style=\"
                line-height: 23px;
                font-size: 15px;
                padding: 10px 20px;
                \">
                <div id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
        echo "\" value=\"post\">
                  <div class=\"editable_text\">
                    ";
        // line 21
        echo (isset($context["msg"]) ? $context["msg"] : null);
        echo "
                  </div>
                  ";
        // line 23
        echo (isset($context["view_attach_files_main"]) ? $context["view_attach_files_main"] : null);
        echo "
                  ";
        // line 24
        if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
            // line 25
            echo "                  <div class=\"edit-bar\" style=\"display: none;\">
                    <div class=\"btn-group \">
                      <button class=\"btn btn-xs btn-primary main-cancel-edit\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_cancel"]) ? $context["PORTAL_cancel"] : null), "html", null, true);
            echo "</button>
                      <button class=\"btn btn-xs btn-success main-save-edit\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_save"]) ? $context["PORTAL_save"] : null), "html", null, true);
            echo "</button>
                    </div>
                  </div>
                  ";
        }
        // line 32
        echo "                  <div class=\"comment-bar\"> <small class=\"subclass\" style=\"display: none;\">
                  </small></div>
                </div>
              </div>
              <div class=\"box-footer\">
                <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
        echo "\"></time> <a style=\"padding-left:20px;\" href=\"#";
        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i> ";
        echo (isset($context["PORTAL_adr"]) ? $context["PORTAL_adr"] : null);
        echo " </a> </small> <small style=\"padding-left:20px;\"> ";
        echo (isset($context["get_post_rate_post"]) ? $context["get_post_rate_post"] : null);
        echo "</small>
                <small class=\"text-muted pull-right\">
                ";
        // line 39
        if (((isset($context["validate"]) ? $context["validate"] : null) == true)) {
            // line 40
            echo "                ";
            echo (isset($context["view_likes_button"]) ? $context["view_likes_button"] : null);
            echo "
                ";
        }
        // line 41
        echo " </small>
              </div>
            </div>
            ";
        // line 44
        if (((isset($context["official_status"]) ? $context["official_status"] : null) == true)) {
            // line 45
            echo "            <div class=\"box box-success box-solid direct-chat direct-chat-primary\">
              <div class=\"box-header with-border\">
                <h4 class=\"box-title\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["PORTAL_oa"]) ? $context["PORTAL_oa"] : null), "html", null, true);
            echo "</h4>
                <div class=\"box-tools pull-right\">
                </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\" style=\"display: block;\">
                  <!-- Conversations are loaded here -->
                  <div class=\"direct-chat-messages\">
                    <!-- Message. Default to the left -->
                    ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["official_arr"]) ? $context["official_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "                    <div class=\"direct-chat-msg\">
                      <div class=\"direct-chat-info clearfix\">
                        <span class=\"direct-chat-name pull-left\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nameshort", array()), "html", null, true);
                echo "</span>
                        <span class=\"direct-chat-timestamp pull-right\"></span>
                        </div><!-- /.direct-chat-info -->
                        <img class=\"direct-chat-img\" src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_user_img_by_id", array()), "html", null, true);
                echo "\" alt=\"message user image\"><!-- /.direct-chat-img -->
                        <div class=\"direct-chat-text\" style=\"  background: #FCFCFC;
                          border: 1px solid #FCFCFC;  margin-bottom: 15px;\">
                          <div id=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                echo "\" value=\"comment\">
                            <div class=\"editable_text\">
                              ";
                // line 66
                echo $this->getAttribute($context["item"], "comment_text", array());
                echo "
                            </div>
                            ";
                // line 68
                echo $this->getAttribute($context["item"], "view_attach_files", array());
                echo "
                            <br>
                            ";
                // line 70
                if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                    // line 71
                    echo "                            <div class=\"edit-bar\" style=\"display: none;\">
                              <div class=\"btn-group \">
                                <button class=\"btn btn-xs btn-primary cancel-edit\" value=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_cancel", array()), "html", null, true);
                    echo "</button>
                                <button class=\"btn btn-xs btn-success save-edit\" value=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_save", array()), "html", null, true);
                    echo "</button>
                              </div>
                            </div>
                            ";
                }
                // line 78
                echo "                            <div class=\"comment-bar\"> <small class=\"subclass\" style=\"display: none;\">
                              ";
                // line 79
                if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                    // line 80
                    echo "                              <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-xs bg-maroon post-del\" value=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_act_del", array()), "html", null, true);
                    echo "</button>
                                <button class=\"btn btn-xs bg-orange btn-flat post-edit\" value=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_act_edit", array()), "html", null, true);
                    echo "</button>
                              </div>
                              ";
                }
                // line 85
                echo "                            </small></div>
                          </div>
                          </div><!-- /.direct-chat-text -->
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </div><!--/.direct-chat-messages-->
                      </div>
                      <div class=\"box-footer\">
                        <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i>
                        <time id=\"c\" datetime=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["ro_dt"]) ? $context["ro_dt"] : null), "html", null, true);
            echo "\"></time>
                        </small><small style=\"padding-left:20px;\"><a href=\"#";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["ro_uh"]) ? $context["ro_uh"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_adr"]) ? $context["PORTAL_adr"] : null), "html", null, true);
            echo " </a></small>
                      </div>
                    </div>
                    ";
        }
        // line 99
        echo "                    ";
        if (((isset($context["no_official_status"]) ? $context["no_official_status"] : null) == true)) {
            // line 100
            echo "                    <div class=\"box box-default direct-chat direct-chat-primary\">
                      <div class=\"box-header with-border\">
                        <h4 class=\"box-title\">";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["PORTAL_com"]) ? $context["PORTAL_com"] : null), "html", null, true);
            echo "</h4>
                        <div class=\"box-tools pull-right\">
                        </div>
                        </div><!-- /.box-header -->
                        <div class=\"box-body\" style=\"display: block;\">
                          <!-- Conversations are loaded here -->
                          <div class=\"direct-chat-messages\">
                            <!-- Message. Default to the left -->
                            ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["no_official_arr"]) ? $context["no_official_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 111
                echo "                            <div class=\"direct-chat-msg\">
                              <a name=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                echo "\"></a>
                              <div class=\"direct-chat-info clearfix\">
                                <span class=\"direct-chat-name pull-left\">";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nameshort", array()), "html", null, true);
                echo "</span>
                                <span class=\"direct-chat-timestamp pull-right\">
                                <small><a href=\"#";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                echo "\"><i class=\"fa fa-link\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["PORTAL_adr"]) ? $context["PORTAL_adr"] : null), "html", null, true);
                echo " </a></small>
                                <small style=\"padding-left:10px;\" class=\"text-muted\"><i class=\"fa fa-clock-o\"></i>
                                <time id=\"c\" datetime=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dt", array()), "html", null, true);
                echo "\"></time>
                                </small>
                                </span>
                                </div><!-- /.direct-chat-info -->
                                <img class=\"direct-chat-img\" src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_user_img_by_id", array()), "html", null, true);
                echo "\" alt=\"message user image\"><!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\" style=\"  background: #FCFCFC;
                                  border: 1px solid #FCFCFC;  margin-bottom: 15px;\">
                                  <div id=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                echo "\" value=\"comment\">
                                    <div class=\"editable_text\">
                                      ";
                // line 127
                echo $this->getAttribute($context["item"], "comment_text", array());
                echo "
                                    </div>
                                    ";
                // line 129
                echo $this->getAttribute($context["item"], "view_attach_files", array());
                echo "
                                    <br>
                                    ";
                // line 131
                if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                    // line 132
                    echo "                                    <div class=\"edit-bar\" style=\"display: none;\">
                                      <div class=\"btn-group \">
                                        <button class=\"btn btn-xs btn-primary cancel-edit\" value=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_cancel", array()), "html", null, true);
                    echo "</button>
                                        <button class=\"btn btn-xs btn-success save-edit\" value=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_save", array()), "html", null, true);
                    echo "</button>
                                      </div>
                                    </div>
                                    ";
                }
                // line 139
                echo "                                    <div class=\"comment-bar\"> <small class=\"subclass\" style=\"display: none;\">
                                      ";
                // line 140
                if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                    // line 141
                    echo "                                      <div class=\"btn-group pull-right\">
                                        <button class=\"btn btn-xs bg-maroon post-del\" value=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_act_del", array()), "html", null, true);
                    echo "</button>
                                        <button class=\"btn btn-xs bg-orange btn-flat post-edit\" value=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "uniq_hash", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "PORTAL_act_edit", array()), "html", null, true);
                    echo "</button>
                                      </div>
                                      ";
                }
                // line 146
                echo "                                    </small></div>
                                  </div>
                                  </div><!-- /.direct-chat-text -->
                                  </div><!-- /.direct-chat-msg -->
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                                  </div><!--/.direct-chat-messages-->
                                </div>
                                <div class=\"box-footer\">
                                  <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                      <ul class=\"nav nav-pills nav-stacked\">
                                        <li class=\"pull-right\">
                                        <ul id=\"comm_pages\" class=\"pagination pagination-sm pull-right no-margin \"></ul>
                                      </li>
                                    </ul>
                                    <input type=\"hidden\" id=\"curent_page\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" id=\"cur_page\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" id=\"post\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" id=\"total_pages\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["get_total_pages_comments"]) ? $context["get_total_pages_comments"] : null), "html", null, true);
            echo "\">
                                    </div><!-- /.col -->
                                    </div><!-- /.row -->
                                  </div>
                                </div>
                                ";
        }
        // line 170
        echo "                                ";
        if (((isset($context["validate"]) ? $context["validate"] : null) == false)) {
            // line 171
            echo "                                <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">
                                <center>";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["PORTAL_must_reg"]) ? $context["PORTAL_must_reg"] : null), "html", null, true);
            echo "</center></div>
                                ";
        }
        // line 174
        echo "                                ";
        if (((isset($context["validate"]) ? $context["validate"] : null) == true)) {
            // line 175
            echo "                                <div class=\"box box-default\">
                                  <div class=\"box-header with-border\">
                                    <h4 class=\"box-title\">";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["PORTAL_add_comm"]) ? $context["PORTAL_add_comm"] : null), "html", null, true);
            echo "</h4>
                                    <div class=\"box-tools pull-right\">
                                    </div>
                                    </div><!-- /.box-header -->
                                    <div class=\"box-body\">
                                      <div class=\"row\">
                                        <div class=\"col-md-2\" style=\"
                                          padding-right: 0px;
                                          \">
                                          <center>
                                          <img class=\"img-rounded\"  src=\"";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["get_user_img"]) ? $context["get_user_img"] : null), "html", null, true);
            echo "\" alt=\"\" height=\"120\"><p>
                                          <small> ";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
            echo " </small>
                                          </p>
                                          </center>
                                          <hr>
                                          ";
            // line 192
            if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
                // line 193
                echo "                                          <div class=\"checkbox\">
                                            <center><label>
                                              <input id=\"mc\" name=\"remember_me\" value=\"1\" type=\"checkbox\"> <br>";
                // line 195
                echo twig_escape_filter($this->env, (isset($context["PORTAL_oa"]) ? $context["PORTAL_oa"] : null), "html", null, true);
                echo "
                                            </label></center>
                                          </div>
                                          ";
            }
            // line 199
            echo "                                          ";
            if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == false)) {
                // line 200
                echo "                                          <input id=\"mc\" name=\"remember_me\" value=\"0\" type=\"hidden\">
                                          ";
            }
            // line 202
            echo "                                        </div>
                                        <div class=\"col-md-10\" style=\"
                                          padding-left: 0px;
                                          \">
                                          <div class=\"col-md-12\">
                                            <div id=\"notes\"></div>
                                          </div>
                                          <div class=\"col-sm-12\" >
                                            <div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
                                              <div class=\"dz-message\" data-dz-message>
                                                <center class=\"text-muted\">";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["PORTAL_fileplace"]) ? $context["PORTAL_fileplace"] : null), "html", null, true);
            echo "</center>
                                              </div>
                                              <style type=\"text/css\">
                                              .note-editor .note-dropzone { opacity: 0 !important; }
                                              </style>
                                            <form action=\"#\" class=\"\"></form>
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
                                        <div class=\"col-md-12\">
                                          <br>
                                          <input type=\"hidden\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
            echo "\" id=\"comment_hash\">
                                          <input type=\"hidden\" value=\"";
            // line 241
            echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
            echo "\" id=\"post_hash\">
                                          <button class=\"btn btn-block btn-info\" id=\"add_comment\">";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["PORTAL_stay_comm"]) ? $context["PORTAL_stay_comm"] : null), "html", null, true);
            echo "</button>
                                          <div id=\"post_res\"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                ";
        }
        // line 250
        echo "                              </div>
                              <div class=\"col-md-3\">
                                <div class=\"box box-default\">
                                  <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["PORTAL_author"]) ? $context["PORTAL_author"] : null), "html", null, true);
        echo "</h3>
                                    </div><!-- /.box-header -->
                                    <div class=\"box-body\">
                                      <div class=\"row\">
                                        <div class=\"col-md-12\">
                                          <div class=\"row\">
                                            <div class=\"col-md-4\"><img class=\"img-rounded\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["get_user_img_by_id"]) ? $context["get_user_img_by_id"] : null), "html", null, true);
        echo "\" height=\"60\"></div>
                                            <div class=\"col-md-8\">
                                              <center> <h4>";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["author_id_fio"]) ? $context["author_id_fio"] : null), "html", null, true);
        echo "<br><small>";
        echo twig_escape_filter($this->env, (isset($context["author_id_posada"]) ? $context["author_id_posada"] : null), "html", null, true);
        echo "</small>
                                              </h4>
                                              </center>
                                            </div>
                                          </div>
                                          </div><!-- /.col -->
                                        </div>
                                        </div><!-- /.box-body -->
                                      </div>
                                      ";
        // line 271
        if (((isset($context["validate_user"]) ? $context["validate_user"] : null) == true)) {
            // line 272
            echo "                                      ";
            echo (isset($context["view_admin_menu"]) ? $context["view_admin_menu"] : null);
            echo "
                                      ";
        }
        // line 274
        echo "                                      ";
        echo (isset($context["view_maybe_block"]) ? $context["view_maybe_block"] : null);
        echo "
                                      ";
        // line 275
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
        return "post.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 275,  559 => 274,  553 => 272,  551 => 271,  537 => 262,  532 => 260,  523 => 254,  517 => 250,  506 => 242,  502 => 241,  498 => 240,  467 => 212,  455 => 202,  451 => 200,  448 => 199,  441 => 195,  437 => 193,  435 => 192,  428 => 188,  424 => 187,  411 => 177,  407 => 175,  404 => 174,  399 => 172,  396 => 171,  393 => 170,  384 => 164,  380 => 163,  376 => 162,  372 => 161,  360 => 151,  350 => 146,  342 => 143,  336 => 142,  333 => 141,  331 => 140,  328 => 139,  319 => 135,  313 => 134,  309 => 132,  307 => 131,  302 => 129,  297 => 127,  292 => 125,  286 => 122,  279 => 118,  272 => 116,  267 => 114,  262 => 112,  259 => 111,  255 => 110,  244 => 102,  240 => 100,  237 => 99,  228 => 95,  224 => 94,  218 => 90,  208 => 85,  200 => 82,  194 => 81,  191 => 80,  189 => 79,  186 => 78,  177 => 74,  171 => 73,  167 => 71,  165 => 70,  160 => 68,  155 => 66,  150 => 64,  144 => 61,  138 => 58,  134 => 56,  130 => 55,  119 => 47,  115 => 45,  113 => 44,  108 => 41,  102 => 40,  100 => 39,  89 => 37,  82 => 32,  73 => 28,  67 => 27,  63 => 25,  61 => 24,  57 => 23,  52 => 21,  47 => 19,  36 => 11,  29 => 9,  19 => 1,);
    }
}
