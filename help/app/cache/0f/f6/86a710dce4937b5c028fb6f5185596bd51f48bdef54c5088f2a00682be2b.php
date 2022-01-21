<?php

/* view_user.view.tmpl */
class __TwigTemplate_0ff686a710dce4937b5c028fb6f5185596bd51f48bdef54c5088f2a00682be2b extends Twig_Template
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
    <i class=\"fa fa-bullhorn\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["VIEWUSER_title"]) ? $context["VIEWUSER_title"] : null), "html", null, true);
        echo "
    <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["VIEWUSER_title_ext"]) ? $context["VIEWUSER_title_ext"] : null), "html", null, true);
        echo "</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["VIEWUSER_title"]) ? $context["VIEWUSER_title"] : null), "html", null, true);
        echo "</li>
    </ol>
</section>
";
        // line 11
        if (((isset($context["find_user"]) ? $context["find_user"] : null) == false)) {
            // line 12
            echo "<div class=\"well well-large well-transparent lead\">
    <center>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_no"]) ? $context["TICKET_t_no"] : null), "html", null, true);
            echo "</center>
</div>
";
        }
        // line 16
        echo "<section class=\"content\">
    ";
        // line 17
        if (((isset($context["user_status"]) ? $context["user_status"] : null) == "2")) {
            // line 18
            echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-warning\">
                <div class=\"box-header\">
                    <h4 style=\"text-align:center;\">";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["user_fio"]) ? $context["user_fio"] : null), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"box-body\">
                    <center>
                    <img  src=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["user_img"]) ? $context["user_img"] : null), "html", null, true);
            echo "\" class=\"img-rounded img-responsive\" alt=\"User Image\">
                    </center>
                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-12\"><div class=\"box box-solid\">
                        <div class=\"box-body\">
                            <div class=\"panel-body\">
                                <section class=\"content\">
                                    <div class=\"error-page\">
                                        <div class=\"\">
                                            <h3><i class=\"fa fa-warning text-red\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["USER_DEL_main"]) ? $context["USER_DEL_main"] : null), "html", null, true);
            echo "</h3>
                                            <p>
                                            ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["USER_DEL_info"]) ? $context["USER_DEL_info"] : null), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                        </div><!-- /.error-page -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 54
        echo "        ";
        if (((isset($context["user_status"]) ? $context["user_status"] : null) != "2")) {
            // line 55
            echo "        <!-- row -->
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"box box-warning\">
                    <div class=\"box-header\">
                        <h4 style=\"text-align:center;\">";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["user_fio"]) ? $context["user_fio"] : null), "html", null, true);
            echo "<br><small>";
            echo twig_escape_filter($this->env, (isset($context["user_posada"]) ? $context["user_posada"] : null), "html", null, true);
            echo "</small></h4>
                    </div>
                    <div class=\"box-body\">
                        <center>
                        <img  src=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["user_img"]) ? $context["user_img"] : null), "html", null, true);
            echo "\" class=\"img-rounded img-responsive\" alt=\"User Image\">
                        </center>
                        ";
            // line 66
            if (((isset($context["user_last_time_status"]) ? $context["user_last_time_status"] : null) == true)) {
                // line 67
                echo "                        <center>
                    <small>";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["stats_last_time"]) ? $context["stats_last_time"] : null), "html", null, true);
                echo " <br><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                echo twig_escape_filter($this->env, (isset($context["user_last_time"]) ? $context["user_last_time"] : null), "html", null, true);
                echo "\"></time></small>
                    </center>
                    ";
            }
            // line 71
            echo "                    ";
            if (((isset($context["canWriteMessage"]) ? $context["canWriteMessage"] : null) == true)) {
                // line 72
                echo "                    <br> <a href=\"messages?to=";
                echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block btn-xs\"><i class=\"fa fa-comments\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["EXT_do_write_message"]) ? $context["EXT_do_write_message"] : null), "html", null, true);
                echo "</a>
                    ";
            }
            // line 74
            echo "                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-12\"><div class=\"box box-solid\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\"><i class=\"fa fa-user\"></i> ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["P_main"]) ? $context["P_main"] : null), "html", null, true);
            echo "</h3>
                            <div class=\"box-tools pull-right\">
                                ";
            // line 83
            echo (isset($context["get_user_status"]) ? $context["get_user_status"] : null);
            echo "
                            </div>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"panel-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            <div class=\"row\">
                                                ";
            // line 91
            if (((isset($context["uViewAdr"]) ? $context["uViewAdr"] : null) == true)) {
                // line 92
                echo "                                                <div class=\"col-md-3\"><small class=\"text-muted\">";
                echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
                echo ":</small></div>
                                                <div class=\"col-md-9\"> <small>";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["user_adr"]) ? $context["user_adr"] : null), "html", null, true);
                echo "</small>
                                                    <small>";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["user_unit"]) ? $context["user_unit"] : null), "html", null, true);
                echo "</small>
                                                </div>
                                                ";
            }
            // line 97
            echo "                                                ";
            if (((isset($context["canUserSkype"]) ? $context["canUserSkype"] : null) == true)) {
                // line 98
                echo "                                                <div class=\"col-md-3\"><small class=\"text-muted\">Skype:</small></div>
                                                <div class=\"col-md-9\"><small>";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["user_skype"]) ? $context["user_skype"] : null), "html", null, true);
                echo "</small></div>
                                                ";
            }
            // line 101
            echo "                                                ";
            if ( !twig_test_empty((isset($context["user_tel"]) ? $context["user_tel"] : null))) {
                // line 102
                echo "                                                <div class=\"col-md-3\"><small class=\"text-muted\">";
                echo twig_escape_filter($this->env, (isset($context["APPROVE_tel"]) ? $context["APPROVE_tel"] : null), "html", null, true);
                echo ":</small></div>
                                                <div class=\"col-md-9\"><small>";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["user_tel"]) ? $context["user_tel"] : null), "html", null, true);
                echo "</small></div>
                                                ";
            }
            // line 105
            echo "                                                ";
            if ( !twig_test_empty((isset($context["user_mail"]) ? $context["user_mail"] : null))) {
                // line 106
                echo "                                                <div class=\"col-md-3\"><small class=\"text-muted\">";
                echo twig_escape_filter($this->env, (isset($context["APPROVE_mail"]) ? $context["APPROVE_mail"] : null), "html", null, true);
                echo ":</small></div>
                                                <div class=\"col-md-9\"><small>";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["user_mail"]) ? $context["user_mail"] : null), "html", null, true);
                echo "</small></div>";
            }
            // line 108
            echo "                                                ";
            if (((isset($context["ufieldsStatus"]) ? $context["ufieldsStatus"] : null) == true)) {
                // line 109
                echo "                                                <br><br><br>
                                                <center>
                                                ";
                // line 111
                echo twig_escape_filter($this->env, (isset($context["FIELD_add_title"]) ? $context["FIELD_add_title"] : null), "html", null, true);
                echo "</center>
                                                <table class=\"table  \">
                                                    <tbody>
                                                        ";
                // line 114
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ufields"]) ? $context["ufields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 115
                    echo "                                                        <tr>
                                                            <td style=\" width: 30px; \"><small>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "udfn", array()), "html", null, true);
                    echo ":</small></td>
                                                            <td><small>";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "udf", array()), "html", null, true);
                    echo "</small></td>
                                                        </tr>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                                                    </tbody>
                                                </table>
                                                ";
            }
            // line 123
            echo "                                                ";
            if (((isset($context["ufieldsStatus2"]) ? $context["ufieldsStatus2"] : null) == true)) {
                // line 124
                echo "                                                <br>
                                                <table class=\"table  \">
                                                    <tbody>
                                                        ";
                // line 127
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ufields2"]) ? $context["ufields2"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 128
                    echo "                                                        <tr>
                                                            <td style=\" width: 30px; \"><small>";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "udfn", array()), "html", null, true);
                    echo ":</small></td>
                                                            <td><small>";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "udf", array()), "html", null, true);
                    echo "</small></td>
                                                        </tr>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                                                    </tbody>
                                                </table>
                                                ";
            }
            // line 136
            echo "                                            </div>
                                        </div>
                                        <div class=\"col-md-7\">
                                            <div class=\"row \">
                                                <div class=\"col-xs-4 pull-right\"
                                                    ";
            // line 141
            if (((isset($context["is_client"]) ? $context["is_client"] : null) == "0")) {
                // line 142
                echo "                                                    style=\"border-right: 1px solid #f4f4f4\"
                                                    ";
            }
            // line 144
            echo "                                                    >
                                                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["get_total_tickets_out"]) ? $context["get_total_tickets_out"] : null), "html", null, true);
            echo "\" data-width=\"100\" data-height=\"100\" data-max=\"";
            echo twig_escape_filter($this->env, (isset($context["get_total_tickets_count"]) ? $context["get_total_tickets_count"] : null), "html", null, true);
            echo "\" data-fgColor=\"#39CCCC\"/>
                                                    <div class=\"knob-label\">";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["EXT_t_created"]) ? $context["EXT_t_created"] : null), "html", null, true);
            echo "</div>
                                                    </div><!-- ./col -->
                                                    ";
            // line 148
            if (((isset($context["is_client"]) ? $context["is_client"] : null) == "0")) {
                // line 149
                echo "                                                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"";
                // line 150
                echo twig_escape_filter($this->env, (isset($context["get_total_tickets_lock"]) ? $context["get_total_tickets_lock"] : null), "html", null, true);
                echo "\" data-width=\"100\" data-height=\"100\" data-max=\"50\" data-max=\"";
                echo twig_escape_filter($this->env, (isset($context["get_total_tickets_count"]) ? $context["get_total_tickets_count"] : null), "html", null, true);
                echo "\" data-fgColor=\"#F4C01B\"/>
                                                        <div class=\"knob-label\">";
                // line 151
                echo twig_escape_filter($this->env, (isset($context["EXT_t_locked"]) ? $context["EXT_t_locked"] : null), "html", null, true);
                echo "</div>
                                                        </div><!-- ./col -->
                                                        <div class=\"col-xs-4 text-center\">
                                                            <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["get_total_tickets_ok"]) ? $context["get_total_tickets_ok"] : null), "html", null, true);
                echo "\" data-width=\"100\" data-height=\"100\" data-max=\"50\" data-max=\"";
                echo twig_escape_filter($this->env, (isset($context["get_total_tickets_count"]) ? $context["get_total_tickets_count"] : null), "html", null, true);
                echo "\" data-fgColor=\"#39CC57\"/>
                                                            <div class=\"knob-label\">";
                // line 155
                echo twig_escape_filter($this->env, (isset($context["EXT_t_oked"]) ? $context["EXT_t_oked"] : null), "html", null, true);
                echo "</div>
                                                            </div><!-- ./col -->
                                                            ";
            }
            // line 158
            echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div><!-- /.box-body -->
                                            <div class=\"col-md-12\">

                                                ";
            // line 165
            if (((isset($context["is_client"]) ? $context["is_client"] : null) == "1")) {
                // line 166
                echo "
<div class=\"row\">
                                                    <br>
                                                    <div class=\"col-md-12\">


 

<div class=\"box box-solid\">
<div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-file\"></i> ";
                // line 176
                echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
                echo "</h3>
                                </div><!-- /.box-header -->
<div class=\"box-body\">

                    ";
                // line 180
                if (((isset($context["tfiles"]) ? $context["tfiles"] : null) == true)) {
                    // line 181
                    echo "                        <div class=\"row\" style=\"padding:10px;\">

                        <div class=\"col-md-12\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                
                          ";
                    // line 187
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tfiles_arr"]) ? $context["tfiles_arr"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        echo "          
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                        // line 191
                        echo $this->getAttribute($context["item"], "ic", array());
                        echo "</small></td>
                        <td><small>";
                        // line 192
                        echo $this->getAttribute($context["item"], "ct", array());
                        echo "</small></td>
                        <td><small>";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true);
                        echo " Mb</small></td>
                                                <td>
                            <button type=\"button\" id=\"delete_user_file_vu\" value=\"";
                        // line 195
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filehash", array()), "html", null, true);
                        echo "\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-trash-o\"></i></button>
                        </td>
                    </tr>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
";
                }
                // line 211
                echo "
<input type=\"hidden\" id=\"user_id\" value=\"";
                // line 212
                echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
                echo "\">
<div class=\"text-muted well well-sm no-shadow\" id=\"myid\" style=\"margin-bottom: 0px;\">

                          <div class=\"dz-message\" data-dz-message>
                            <center class=\"text-muted\"><small>";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["PORTAL_fileplace"]) ? $context["PORTAL_fileplace"] : null), "html", null, true);
                echo "</small></center>
                          </div>

                          <style type=\"text/css\">
                          .note-editor .note-dropzone { opacity: 0 !important; }
                          </style>

                          <form action=\"#\" class=\"\">
                            <input type=\"hidden\" name=\"mode\" value=\"upload_drop_file\">
                          </form>

                        <div class=\"table table-striped\" class=\"files\" id=\"previews\" style=\"margin-bottom: 0px;\">
                          <div id=\"template\" class=\"file-row\">

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
</div>




                                                    </div>
                                                    </div>
                                                ";
            }
            // line 259
            echo "


                                                ";
            // line 262
            if (((isset($context["check_admin_user_priv"]) ? $context["check_admin_user_priv"] : null) == true)) {
                // line 263
                echo "                                                <div class=\"row\">
                                                    <br>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"box\" style=\"min-height: 10px; max-height: 400px; scroll-behavior: initial; overflow-y: scroll;\">
                                                            <div class=\"box-header\">
                                                                <h3 class=\"box-title\"><i class=\"fa fa-lock\"></i> ";
                // line 268
                echo twig_escape_filter($this->env, (isset($context["PROFILE_tickets_lock"]) ? $context["PROFILE_tickets_lock"] : null), "html", null, true);
                echo "</h3>
                                                                </div><!-- /.box-header -->
                                                                ";
                // line 270
                if (((isset($context["someStatStatus_one"]) ? $context["someStatStatus_one"] : null) == false)) {
                    // line 271
                    echo "                                                                <div class=\"box-body \">
                                                                    <div id=\"\" class=\"well well-large well-transparent lead\">
                                                                        <center>
                                                                        ";
                    // line 274
                    echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
                    echo "
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                                ";
                }
                // line 279
                echo "                                                                ";
                if (((isset($context["someStatStatus_one"]) ? $context["someStatStatus_one"] : null) == true)) {
                    // line 280
                    echo "                                                                <div class=\"box-body \">
                                                                    <table class=\"table table-condensed\">
                                                                        <tbody><tr>
                                                                            <th style=\"width: 50px\">#</th>
                                                                            <th>";
                    // line 284
                    echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                    echo "</th>
                                                                            <th>";
                    // line 285
                    echo twig_escape_filter($this->env, (isset($context["TICKET_t_date"]) ? $context["TICKET_t_date"] : null), "html", null, true);
                    echo "</th>
                                                                        </tr>
                                                                        ";
                    // line 287
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["someStatStatus_arr"]) ? $context["someStatStatus_arr"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 288
                        echo "                                                                        <tr>
                                                                            <td style=\"width: 50px\"><small><a href=\"ticket?";
                        // line 289
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash_name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                        echo "</a></small></td>
                                                                            <td><small>";
                        // line 290
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                        echo "</small></td>
                                                                            <td><small><time id=\"c\" datetime=\"";
                        // line 291
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_create", array()), "html", null, true);
                        echo "\"></time></small></td>
                                                                        </tr>
                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 294
                    echo "                                                                    </tbody></table>
                                                                    </div><!-- /.box-body -->
                                                                    ";
                }
                // line 297
                echo "                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <div class=\"box\" style=\"min-height: 10px; max-height: 400px; scroll-behavior: initial; overflow-y: scroll;\">
                                                                    <div class=\"box-header\">
                                                                        <h3 class=\"box-title\"><i class=\"fa fa-circle-o\"></i> ";
                // line 302
                echo twig_escape_filter($this->env, (isset($context["PROFILE_tickets_free"]) ? $context["PROFILE_tickets_free"] : null), "html", null, true);
                echo "</h3>
                                                                        </div><!-- /.box-header -->
                                                                        ";
                // line 304
                if (((isset($context["someStatStatus_two"]) ? $context["someStatStatus_two"] : null) == false)) {
                    // line 305
                    echo "                                                                        <div class=\"box-body\">
                                                                            <div id=\"\" class=\"well well-large well-transparent lead\">
                                                                                <center>
                                                                                ";
                    // line 308
                    echo twig_escape_filter($this->env, (isset($context["MSG_no_records"]) ? $context["MSG_no_records"] : null), "html", null, true);
                    echo "
                                                                                </center>
                                                                            </div>
                                                                        </div>
                                                                        ";
                }
                // line 313
                echo "                                                                        ";
                if (((isset($context["someStatStatus_two"]) ? $context["someStatStatus_two"] : null) == true)) {
                    // line 314
                    echo "                                                                        <div class=\"box-body\">
                                                                            <table class=\"table table-condensed\">
                                                                                <tbody><tr>
                                                                                    <th style=\"width: 50px\">#</th>
                                                                                    <th>";
                    // line 318
                    echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                    echo "</th>
                                                                                    <th>";
                    // line 319
                    echo twig_escape_filter($this->env, (isset($context["TICKET_t_date"]) ? $context["TICKET_t_date"] : null), "html", null, true);
                    echo "</th>
                                                                                </tr>
                                                                                ";
                    // line 321
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["someStatStatus_arr_two"]) ? $context["someStatStatus_arr_two"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 322
                        echo "                                                                                <tr>
                                                                                    <td style=\"width: 50px\"><small><a href=\"ticket?";
                        // line 323
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash_name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                        echo "</a></small></td>
                                                                                    <td><small>";
                        // line 324
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subj", array()), "html", null, true);
                        echo "</small></td>
                                                                                    <td><small><time id=\"c\" datetime=\"";
                        // line 325
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_create", array()), "html", null, true);
                        echo "\"></time></small></td>
                                                                                </tr>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 328
                    echo "                                                                            </tbody></table>
                                                                            </div><!-- /.box-body -->";
                }
                // line 330
                echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            // line 333
            echo "</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        }
        // line 339
        echo "                                        </section>";
    }

    public function getTemplateName()
    {
        return "view_user.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 339,  670 => 333,  664 => 330,  660 => 328,  651 => 325,  647 => 324,  641 => 323,  638 => 322,  634 => 321,  629 => 319,  625 => 318,  619 => 314,  616 => 313,  608 => 308,  603 => 305,  601 => 304,  596 => 302,  589 => 297,  584 => 294,  575 => 291,  571 => 290,  565 => 289,  562 => 288,  558 => 287,  553 => 285,  549 => 284,  543 => 280,  540 => 279,  532 => 274,  527 => 271,  525 => 270,  520 => 268,  513 => 263,  511 => 262,  506 => 259,  460 => 216,  453 => 212,  450 => 211,  436 => 199,  426 => 195,  421 => 193,  417 => 192,  413 => 191,  404 => 187,  396 => 181,  394 => 180,  387 => 176,  375 => 166,  373 => 165,  364 => 158,  358 => 155,  352 => 154,  346 => 151,  340 => 150,  337 => 149,  335 => 148,  330 => 146,  324 => 145,  321 => 144,  317 => 142,  315 => 141,  308 => 136,  303 => 133,  294 => 130,  290 => 129,  287 => 128,  283 => 127,  278 => 124,  275 => 123,  270 => 120,  261 => 117,  257 => 116,  254 => 115,  250 => 114,  244 => 111,  240 => 109,  237 => 108,  233 => 107,  228 => 106,  225 => 105,  220 => 103,  215 => 102,  212 => 101,  207 => 99,  204 => 98,  201 => 97,  195 => 94,  191 => 93,  186 => 92,  184 => 91,  173 => 83,  168 => 81,  159 => 74,  151 => 72,  148 => 71,  140 => 68,  137 => 67,  135 => 66,  130 => 64,  121 => 60,  114 => 55,  111 => 54,  95 => 41,  90 => 39,  74 => 26,  67 => 22,  61 => 18,  59 => 17,  56 => 16,  50 => 13,  47 => 12,  45 => 11,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
