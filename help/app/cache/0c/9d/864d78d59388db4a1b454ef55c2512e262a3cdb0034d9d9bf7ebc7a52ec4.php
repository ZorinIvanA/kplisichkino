<?php

/* ticket.view.tmpl */
class __TwigTemplate_0c9d864d78d59388db4a1b454ef55c2512e262a3cdb0034d9d9bf7ebc7a52ec4 extends Twig_Template
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
        echo "
";
        // line 2
        if (((isset($context["t_true"]) ? $context["t_true"] : null) == true)) {
            // line 3
            echo "
<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-ticket\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["TICKET_name"]) ? $context["TICKET_name"] : null), "html", null, true);
            echo " <strong>#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</strong>
                        <small>
                            ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
            echo "
                        </small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "index.php\"><span class=\"icon-svg\"></span> ";
            echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
            echo "</a></li>
                        <li class=\"active\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["TICKET_name"]) ? $context["TICKET_name"] : null), "html", null, true);
            echo " #";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</li>
                    </ol>
                </section>
            
            
            
            
            
            
            
             
            
            <section class=\"content\">
                    <!-- title row -->
                    
                    
                    
                                <div class=\"row\">

            <div class=\"col-md-8\">
";
            // line 33
            if (((isset($context["refresh"]) ? $context["refresh"] : null) == true)) {
                // line 34
                echo "                <div class=\"alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    <i class=\"fa fa-refresh\"></i> ";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["TICKET_msg_updated"]) ? $context["TICKET_msg_updated"] : null), "html", null, true);
                echo "</div>
";
            }
            // line 38
            echo "            </div>
            </div>
                    
                    
                    
<div class=\"row\">
<div class=\"col-md-8\">
    <div class=\"row\">
    <div class=\"col-md-12\">
                    <div class=\"box\">
                                <div class=\"box-header\">
                                <h3 class=\"box-title\">
                                    
                                    
                                ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
            echo "
                                </h3>
                                <small class=\"text-muted\">
                                ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["gt_ir"]) ? $context["gt_ir"] : null), "html", null, true);
            echo "
                                </small>
                                <small class=\"box-tools pull-right text-muted\">
                                
                                <i class=\"fa fa-clock-o\"></i>
                                <time id=\"c\" datetime=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["date_create"]) ? $context["date_create"] : null), "html", null, true);
            echo "\"></time> ";
            echo (isset($context["get_deadline_label"]) ? $context["get_deadline_label"] : null);
            echo "</small>
                                
                                </div>
                                <div class=\"box-body\">
                                <table class=\"table table-bordered\">
                <tbody>
                <tr style=\"width:50%\">
                    <td ><small class=\"text-muted\">";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_from"]) ? $context["TICKET_t_from"] : null), "html", null, true);
            echo ": </small></td>
                    <td><small>";
            // line 68
            echo (isset($context["user_init"]) ? $context["user_init"] : null);
            echo " </small></td>
                    
                    <td><small class=\"text-muted\">";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_prio"]) ? $context["TICKET_t_prio"] : null), "html", null, true);
            echo ":</small>
                    </td>
                    <td><small>";
            // line 72
            echo (isset($context["prio"]) ? $context["prio"] : null);
            echo "</small>
                    </td>
                </tr>
                <tr>
                    <td ><small class=\"text-muted\">";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_to"]) ? $context["TICKET_t_to"] : null), "html", null, true);
            echo ": </small></td>
                    <td><small>";
            // line 77
            echo (isset($context["to_text"]) ? $context["to_text"] : null);
            echo " </small></td>
                    <td><small class=\"text-muted\" >";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_status"]) ? $context["TICKET_t_status"] : null), "html", null, true);
            echo ":</small>
                    </td>
                    <td><small>";
            // line 80
            echo (isset($context["st"]) ? $context["st"] : null);
            echo "</small></td>
                </tr>



                </tbody>
            </table>

";
            // line 88
            if (((isset($context["tdata"]) ? $context["tdata"] : null) == true)) {
                echo "<br>
<small class=\"text-muted\">";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["FIELD_add_title"]) ? $context["FIELD_add_title"] : null), "html", null, true);
                echo ": </small>
<table class=\"table table-bordered\">
                <tbody>
";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tdata_arr"]) ? $context["tdata_arr"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 93
                    echo "
        <tr>
                    <td style=\"width:150px\"><small class=\"text-muted\">
                    ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_name", array()), "html", null, true);
                    echo ": </small></td>
                    <td><small>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_val", array()), "html", null, true);
                    echo " </small></td>
                    
                    
                </tr>


";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo " </tbody>
            </table>
";
            }
            // line 107
            echo "
            <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;   background-color: #FDFDFD;  word-wrap: break-word;\">
                                ";
            // line 109
            echo (isset($context["msg"]) ? $context["msg"] : null);
            echo "
                            </div>
                            
                            <div class=\"row\"><div class=\"col-md-12\">
                            <small class=\"text-muted\" >
                                ";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["get_ticket_info"]) ? $context["get_ticket_info"] : null), "html", null, true);
            echo "
                            </small>
                                <a href=\"print_ticket?";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs pull-right\"><i class=\"fa fa-print\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["TICKET_print"]) ? $context["TICKET_print"] : null), "html", null, true);
            echo "</a>
                            ";
            // line 117
            if (((isset($context["can_edit"]) ? $context["can_edit"] : null) == true)) {
                // line 118
                echo "
            <button type=\"button\" class=\"btn btn-default btn-xs pull-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-pencil\"></i>  ";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["CONF_act_edit"]) ? $context["CONF_act_edit"] : null), "html", null, true);
                echo "</button> ";
            }
            // line 120
            echo "                            </div>
                            </div>                            


                            ";
            // line 124
            if (((isset($context["tfiles"]) ? $context["tfiles"] : null) == true)) {
                // line 125
                echo "                    <hr style=\"margin:0px;\">
                        <div class=\"row\" style=\"padding:10px;\">
                        <div class=\"col-md-3\">
                            <center><small><strong>";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
                echo ":</strong></small></center>
                        </div>
                        <div class=\"col-md-9\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                
                          ";
                // line 134
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tfiles_arr"]) ? $context["tfiles_arr"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo "          
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                    // line 138
                    echo $this->getAttribute($context["item"], "ic", array());
                    echo "</small></td>
                        <td><small>";
                    // line 139
                    echo $this->getAttribute($context["item"], "ct", array());
                    echo "</small></td>
                        <td><small>";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true);
                    echo " Mb</small></td>
                    </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>

";
            }
            // line 156
            echo "
                            


                                </div>
                    </div>
                    
                    
                    </div>
    </div>
    

    
    <div class=\"row\">
    <div class=\"col-md-12\">
<style>
.info-box {
  display: block;
  min-height: 90px;
  background: #fff;
  width: 100%;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  border-radius: 2px;
  margin-bottom: 15px;
}
.info-box-icon {
  border-top-left-radius: 2px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 2px;
  display: block;
  float: left;
  height: 90px;
  width: 90px;
  text-align: center;
  font-size: 45px;
  line-height: 90px;
  background: rgba(0,0,0,0.2);
}
.info-box-content {
  padding: 5px 10px;
  margin-left: 90px;
}
.info-box-text {
  text-transform: uppercase;
}
.progress-description, .info-box-text {
  display: block;
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.info-box-number {
  display: block;
  font-weight: bold;
  font-size: 17px;
}
.info-box .progress, .info-box .progress .progress-bar {
  border-radius: 0;
}
.info-box .progress {
  background: rgba(0,0,0,0.2);
  margin: 5px -10px 5px -10px;
  height: 2px;
}
.progress-description {
  margin: 0;
}
.progress-description, .info-box-text {
  display: block;
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.info-box .progress .progress-bar {
  background: #fff;
}
.info-box .progress, .info-box .progress .progress-bar {
  border-radius: 0;
}
</style>




    </div>







    <div class=\"col-md-12\">
    
    <div class=\"box box-danger\">
                                
                                <div class=\"box-body\">
                                   


                <div class=\"btn-group btn-group-justified\">
                    <div class=\"btn-group\">
                        <button ";
            // line 261
            echo twig_escape_filter($this->env, (isset($context["get_button_act_status_refer"]) ? $context["get_button_act_status_refer"] : null), "html", null, true);
            echo " id=\"action_refer_to\" value=\"0\" type=\"button\" class=\"btn btn btn-danger\"><i class=\"fa fa-share\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_refer"]) ? $context["TICKET_t_refer"] : null), "html", null, true);
            echo "</button>
                    </div>



                    <div class=\"btn-group\">
                        <button ";
            // line 267
            echo twig_escape_filter($this->env, (isset($context["get_button_act_status_lock"]) ? $context["get_button_act_status_lock"] : null), "html", null, true);
            echo " id=\"action_lock\" status=\"";
            echo twig_escape_filter($this->env, (isset($context["lock_status"]) ? $context["lock_status"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["helpdesk_user_id"]) ? $context["helpdesk_user_id"] : null), "html", null, true);
            echo "\" tid=\"";
            echo twig_escape_filter($this->env, (isset($context["tid"]) ? $context["tid"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn btn-danger\"> ";
            echo (isset($context["lock_text"]) ? $context["lock_text"] : null);
            echo "</button>
                    </div><div class=\"btn-group\">
                        <button ";
            // line 269
            echo twig_escape_filter($this->env, (isset($context["get_button_act_status_ok"]) ? $context["get_button_act_status_ok"] : null), "html", null, true);
            echo " id=\"action_ok\" status=\"";
            echo twig_escape_filter($this->env, (isset($context["status_ok_status"]) ? $context["status_ok_status"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["helpdesk_user_id"]) ? $context["helpdesk_user_id"] : null), "html", null, true);
            echo "\" tid=\"";
            echo twig_escape_filter($this->env, (isset($context["tid"]) ? $context["tid"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn btn-danger\">";
            echo (isset($context["status_ok_text"]) ? $context["status_ok_text"] : null);
            echo " </button>
                    </div>
                </div>
                </div><!-- /.box-body -->
                            </div>


            
            <div id=\"refer_to\" class=\"col-md-12 box box-danger\" style=\"padding-bottom:10px;\">

<div class=\"box-body\">















                <div class=\"form-group\" id=\"t_for_to\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit_desc"]) ? $context["NEW_to_unit_desc"] : null), "html", null, true);
            echo "</small>\">
                    <label for=\"t_to\" class=\"col-sm-3 control-label\"><small>";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_refer_to"]) ? $context["TICKET_t_refer_to"] : null), "html", null, true);
            echo ": </small></label>
                    <div class=\"col-sm-5\" style=\"\">
                        <select ";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["lock_disabled"]) ? $context["lock_disabled"] : null), "html", null, true);
            echo " data-placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm\" id=\"t_to\" name=\"unit_id\">
                            <option value=\"0\"></option>
                            ";
            // line 300
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unit_arr"]) ? $context["unit_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 301
                echo "
                                <option value=\"";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</option>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                        </select>
                    </div>



                    <div class=\"col-sm-3\" style=\"\">


    <select data-placeholder=\"";
            // line 313
            echo twig_escape_filter($this->env, (isset($context["NEW_to_user"]) ? $context["NEW_to_user"] : null), "html", null, true);
            echo "\"  id=\"t_users_do\" name=\"unit_id\" class=\"form-control input-sm\" multiple>
        <option></option>


";
            // line 317
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_arr"]) ? $context["user_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 318
                echo "                    <option data-foo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "s", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo " </option>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "    </select>
    
    

                       
                        
                        <p class=\"help-block\"><small style=\"padding-left:30px;\">";
            // line 327
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_opt"]) ? $context["TICKET_t_opt"] : null), "html", null, true);
            echo "</small></p>

                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class=\"col-sm-1\" style=\"\">
                        <button id=\"ref_ticket\" value=\"";
            // line 339
            echo twig_escape_filter($this->env, (isset($context["tid"]) ? $context["tid"] : null), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-sm\" ";
            echo twig_escape_filter($this->env, (isset($context["lock_disabled"]) ? $context["lock_disabled"] : null), "html", null, true);
            echo "><i class=\"fa fa-check\"></i></button>
                    </div>
                    <div class=\"col-md-12\" style=\"\">
                        <textarea placeholder=\"";
            // line 342
            echo twig_escape_filter($this->env, (isset($context["NEW_MSG_ph_1"]) ? $context["NEW_MSG_ph_1"] : null), "html", null, true);
            echo "\" class=\"form-control input-sm animated\" name=\"msg1\" id=\"msg1\" rows=\"3\"></textarea>
                    </div>

                </div>
</div>



            
                                
            
            
            
            
            
    </div>




    </div>


    



    </div>
    
    <div class=\"row\">
    <div class=\"col-md-12\">
    
<div id=\"msg\"></div>
<div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\"><i class=\"fa fa-comments-o\"></i> ";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_comment"]) ? $context["TICKET_t_comment"] : null), "html", null, true);
            echo "</a></li>
                                    <li class=\"\"><a href=\"#tab_2\" data-toggle=\"tab\" id=\"get_new_log\">";
            // line 378
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_history"]) ? $context["TICKET_t_history"] : null), "html", null, true);
            echo "</a></li>
                                    
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1\">
                                        <div class=\"box box-solid\" >
                                <div class=\"box-header\">
                                    
                                    
                                </div>
                                <div class=\"box-body chat\" id=\"comment_content\">
                                ";
            // line 389
            echo (isset($context["view_comment"]) ? $context["view_comment"] : null);
            echo "
                                    <!-- chat item -->
                                    
                                </div><!-- /.chat -->
                                <div class=\"box-footer\">
                                    <div class=\"row\" id=\"for_msg\">
                                        <div class=\"col-md-12\">


<textarea id=\"msg\" name=\"msg\" class=\"form-control\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"top\" data-content=\"&lt;small&gt;";
            // line 398
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_det_ticket"]) ? $context["TICKET_t_det_ticket"] : null), "html", null, true);
            echo "&lt;/small&gt;\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_comm_ph"]) ? $context["TICKET_t_comm_ph"] : null), "html", null, true);
            echo "\"></textarea>
 <div class=\"text-muted well well-sm no-shadow\" id=\"myid\" style=\"margin-bottom: 0px;\">

                          <div class=\"dz-message\" data-dz-message>
                            <center class=\"text-muted\"><small>";
            // line 402
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
                        </div><div style=\"height: 30px;\" class=\"\">
                        <div class=\"btn-group pull-right\">
                                            <button value=\"";
            // line 433
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\" id=\"do_comment\" class=\"btn btn-success btn-sm\"><i class=\"fa fa-comment\"></i></button>

                                          
                                            
  <!--input type=\"file\" id=\"do_comment_file\" value=\"";
            // line 437
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\" class=\"file-inputs\" title=\"+\"-->
                                            
                                            
                                            </div>

                                        
                                       
                                    </div>
                        </div>

</div>
        
                      
                                </div>
                            </div>
                                    </div><!-- /.tab-pane -->
                                    <div class=\"tab-pane\" id=\"tab_2\">
                                        ";
            // line 454
            echo (isset($context["view_log"]) ? $context["view_log"] : null);
            echo "
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div>





    

    </div></div>
    
    
    
</div>
<div class=\"col-md-4\">

<div class=\"row\">
    
    <div class=\"col-md-12\">
    ";
            // line 475
            echo (isset($context["get_client_info_ticket"]) ? $context["get_client_info_ticket"] : null);
            echo "
    </div>
    
</div>




";
            // line 483
            if (((isset($context["slshow"]) ? $context["slshow"] : null) == true)) {
                // line 484
                echo "

<div class=\"row\">
    
    <div class=\"col-md-12\">
<div class=\"info-box bg-aqua\">
                <span class=\"info-box-icon\"><i class=\"fa fa-bolt\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">";
                // line 492
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_reaction"]) ? $context["SLA_perf_reaction"] : null), "html", null, true);
                echo "</span>
                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\">
";
                // line 494
                echo (isset($context["get_ticket_time_reaction"]) ? $context["get_ticket_time_reaction"] : null);
                echo "
                  </span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: ";
                // line 497
                echo twig_escape_filter($this->env, (isset($context["per"]) ? $context["per"] : null), "html", null, true);
                echo "%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 500
                echo twig_escape_filter($this->env, (isset($context["SLA_REGLAMENT"]) ? $context["SLA_REGLAMENT"] : null), "html", null, true);
                echo ": ";
                echo (isset($context["sla_react"]) ? $context["sla_react"] : null);
                echo "
                  </span>
                </div><!-- /.info-box-content -->
              </div>


<div class=\"info-box bg-yellow\">
                <span class=\"info-box-icon\"><i class=\"fa fa-lock\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">";
                // line 509
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_work_a"]) ? $context["SLA_perf_work_a"] : null), "html", null, true);
                echo "</span>

                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\" id=\"work_timer\" value=\"";
                // line 511
                echo twig_escape_filter($this->env, (isset($context["sl"]) ? $context["sl"] : null), "html", null, true);
                echo "\">";
                echo (isset($context["get_ticket_time_lock"]) ? $context["get_ticket_time_lock"] : null);
                echo "</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: {perw}%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 516
                echo twig_escape_filter($this->env, (isset($context["SLA_REGLAMENT"]) ? $context["SLA_REGLAMENT"] : null), "html", null, true);
                echo ": ";
                echo (isset($context["sla_work"]) ? $context["sla_work"] : null);
                echo "
                  </span>
                </div><!-- /.info-box-content -->
              </div>
 



<div class=\"info-box bg-orange \" style=\"background-color: #D81B60 !important;\">
                <span class=\"info-box-icon\"><i class=\"fa fa-check-square\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">";
                // line 527
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_deadline_short"]) ? $context["SLA_perf_deadline_short"] : null), "html", null, true);
                echo "</span>
                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\" id=\"deadline_timer\" value=\"";
                // line 528
                echo twig_escape_filter($this->env, (isset($context["ls"]) ? $context["ls"] : null), "html", null, true);
                echo "\">";
                echo (isset($context["left_secr"]) ? $context["left_secr"] : null);
                echo "
                  </span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: ";
                // line 531
                echo twig_escape_filter($this->env, (isset($context["perd"]) ? $context["perd"] : null), "html", null, true);
                echo "%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 534
                echo twig_escape_filter($this->env, (isset($context["SLA_REGLAMENT"]) ? $context["SLA_REGLAMENT"] : null), "html", null, true);
                echo ": <time id=\"f\" datetime=\"";
                echo (isset($context["sla_deadline"]) ? $context["sla_deadline"] : null);
                echo "\"></time>
                  </span>
                </div><!-- /.info-box-content -->
              </div>




</div>
</div>
";
            }
            // line 545
            if (((isset($context["val_admin"]) ? $context["val_admin"] : null) == true)) {
                // line 546
                echo "
<div class=\"row\">
    
    <div class=\"col-md-12\">
<div class=\"box box-danger\" >
<div class=\"box-body\">


<button id=\"del_ticket\" type=\"button\" class=\"btn bg-maroon btn-flat btn-block pops2\" data-content=\"<small>";
                // line 554
                echo twig_escape_filter($this->env, (isset($context["TICKET_action_delete_info"]) ? $context["TICKET_action_delete_info"] : null), "html", null, true);
                echo "</small>\" ><i class=\"fa fa-trash\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["TICKET_action_delete"]) ? $context["TICKET_action_delete"] : null), "html", null, true);
                echo "</button>
</div>
</div>
    </div>
</div>

";
            }
            // line 561
            echo "





<div class=\"row\">
    
    <div class=\"col-md-12\">












                ";
            // line 582
            if (((isset($context["arch"]) ? $context["arch"] : null) == 1)) {
                // line 583
                echo "<div class=\"callout bg-gray color-palette\">
                                        <h4>";
                // line 584
                echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                echo "</h4>
                                        <p>";
                // line 585
                echo twig_escape_filter($this->env, (isset($context["TICKET_t_in_arch"]) ? $context["TICKET_t_in_arch"] : null), "html", null, true);
                echo "</p>
                                    </div>
                            
                            
                            
                
                
                
                
                
";
            }
            // line 596
            if (((isset($context["arch"]) ? $context["arch"] : null) == 0)) {
                // line 597
                echo "            
";
                // line 598
                if (((isset($context["status_ok"]) ? $context["status_ok"] : null) == 1)) {
                    // line 599
                    echo "<div class=\"callout callout-warning\">
                                        <h4>";
                    // line 600
                    echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                    echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                    // line 601
                    echo twig_escape_filter($this->env, (isset($context["TICKET_t_ok"]) ? $context["TICKET_t_ok"] : null), "html", null, true);
                    echo " <strong> ";
                    echo (isset($context["ok_by_fio"]) ? $context["ok_by_fio"] : null);
                    echo "</strong> ";
                    echo twig_escape_filter($this->env, (isset($context["ok_date"]) ? $context["ok_date"] : null), "html", null, true);
                    echo ".<br> ";
                    echo twig_escape_filter($this->env, (isset($context["TICKET_t_ok_1"]) ? $context["TICKET_t_ok_1"] : null), "html", null, true);
                    echo "</p>
                                    </div>


";
                }
                // line 606
                if (((isset($context["status_ok"]) ? $context["status_ok"] : null) == 0)) {
                    // line 607
                    echo "               
                    ";
                    // line 608
                    if (((isset($context["lock_by"]) ? $context["lock_by"] : null) != 0)) {
                        echo "       
                        ";
                        // line 609
                        if (((isset($context["status_lock"]) ? $context["status_lock"] : null) == "you")) {
                            echo "   
                            <div class=\"callout callout-warning\">
                                        <h4>";
                            // line 611
                            echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                            echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                            // line 612
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock"]) ? $context["TICKET_t_lock"] : null), "html", null, true);
                            echo " <strong> ";
                            echo (isset($context["lock_by_fio"]) ? $context["lock_by_fio"] : null);
                            echo "</strong> .<br> ";
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock_1"]) ? $context["TICKET_t_lock_1"] : null), "html", null, true);
                            echo "</p>
                                    </div>
                                    
                                    
                                    
                            
                            
                            
                           ";
                        }
                        // line 621
                        echo "                           ";
                        if (((isset($context["status_lock"]) ? $context["status_lock"] : null) == "me")) {
                            echo " 
                        
                            
                            
                            
                            <div class=\"callout callout-warning\">
                                        <h4>";
                            // line 627
                            echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                            echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                            // line 628
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock_i"]) ? $context["TICKET_t_lock_i"] : null), "html", null, true);
                            echo "</p>
                                    </div>
                                    
                                    
                            
                            
                            ";
                        }
                        // line 635
                        echo "                        
";
                    }
                }
            }
            // line 639
            echo "    </div>
    
</div>

</div>

</div>












                                        
                    

                </section>
            
            
            
            
                <input type=\"hidden\" id=\"prio\" value=\"";
            // line 666
            echo twig_escape_filter($this->env, (isset($context["pr"]) ? $context["pr"] : null), "html", null, true);
            echo "\">

            <input type=\"hidden\" id=\"ticket_hash\" value=\"";
            // line 668
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"ticket_id\" value=\"";
            // line 669
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"ticket_total\" value=\"0\">
            <div class=\"container\">











<link rel=\"stylesheet\" href=\"css/ticket_style.css\">


";
            // line 686
            if (((isset($context["can_edit"]) ? $context["can_edit"] : null) == true)) {
                // line 687
                echo "<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">";
                // line 692
                echo twig_escape_filter($this->env, (isset($context["P_title"]) ? $context["P_title"] : null), "html", null, true);
                echo "</h4>
      </div>
      <div class=\"modal-body\">
        
        
       <form class=\"form-horizontal\" role=\"form\">
       
  <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_msg\">
            <label for=\"msg\" class=\"col-sm-2 control-label\"><small>";
                // line 702
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo ":</small></label>
            <div class=\"col-sm-10\">
                <input class=\"form-control input-sm\" value=\"";
                // line 704
                echo twig_escape_filter($this->env, (isset($context["subj"]) ? $context["subj"] : null), "html", null, true);
                echo "\" id=\"edit_subj\">
            </div>
        </div>
        <div class=\"help-block\"></div></div></div>


<div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"><small>";
                // line 713
                echo twig_escape_filter($this->env, (isset($context["NEW_prio"]) ? $context["NEW_prio"] : null), "html", null, true);
                echo ": </small></label>
            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

                <div class=\"btn-group btn-group-justified\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs ";
                // line 718
                echo twig_escape_filter($this->env, (isset($context["prio_style_low"]) ? $context["prio_style_low"] : null), "html", null, true);
                echo "\" id=\"prio_low\"><i id=\"lprio_low\" class=\"\"></i>";
                echo (isset($context["NEW_prio_low"]) ? $context["NEW_prio_low"] : null);
                echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-info btn-xs prio_style_normal\" id=\"prio_normal\"><i id=\"lprio_norm\" class=\"\"></i> ";
                // line 721
                echo (isset($context["NEW_prio_norm"]) ? $context["NEW_prio_norm"] : null);
                echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-danger btn-xs prio_style_high\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" id=\"prio_high\"><i id=\"lprio_high\" class=\"\"></i>";
                // line 724
                echo (isset($context["NEW_prio_high"]) ? $context["NEW_prio_high"] : null);
                echo "</button>
                    </div>
                </div>
            </div></div></div></div>
            
            





  <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_msg\">
            <label for=\"msg\" class=\"col-sm-2 control-label\"><small>";
                // line 738
                echo twig_escape_filter($this->env, (isset($context["NEW_MSG"]) ? $context["NEW_MSG"] : null), "html", null, true);
                echo ":</small></label>
            <div class=\"col-sm-10\">
                <textarea data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                // line 740
                echo twig_escape_filter($this->env, (isset($context["NEW_MSG_msg"]) ? $context["NEW_MSG_msg"] : null), "html", null, true);
                echo "</small>\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["NEW_MSG_ph"]) ? $context["NEW_MSG_ph"] : null), "html", null, true);
                echo "\" class=\"form-control input-sm animated\" name=\"msg\" id=\"msg_up\" rows=\"3\" required=\"\" data-validation-required-message=\"";
                echo twig_escape_filter($this->env, (isset($context["EXT_fill_msg"]) ? $context["EXT_fill_msg"] : null), "html", null, true);
                echo "\" aria-invalid=\"false\">";
                echo twig_escape_filter($this->env, (isset($context["ms"]) ? $context["ms"] : null), "html", null, true);
                echo "</textarea>
            </div>
        </div>
        <div class=\"help-block\"></div></div></div>
       
       
       
       
       
       
       </form> 
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default btn-sm\" data-dismiss=\"modal\">";
                // line 754
                echo twig_escape_filter($this->env, (isset($context["TICKET_file_notupload_one"]) ? $context["TICKET_file_notupload_one"] : null), "html", null, true);
                echo "</button>
        <button type=\"button\" id=\"save_edit_ticket\" class=\"btn btn-primary btn-sm\">";
                // line 755
                echo twig_escape_filter($this->env, (isset($context["JS_save"]) ? $context["JS_save"] : null), "html", null, true);
                echo "</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
            }
            // line 762
            echo "
           

            




            










            

            </div>
            ";
        }
        // line 785
        echo "       ";
        if (((isset($context["t_true"]) ? $context["t_true"] : null) == false)) {
            // line 786
            echo "       <section class=\"content-header\">
       </section>
            
            
            
            
            
            
            
            
            
            <section class=\"content\">
        <div class=\"well well-large well-transparent lead\">
            <center>";
            // line 799
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_no"]) ? $context["TICKET_t_no"] : null), "html", null, true);
            echo "</center>
        </div>
        </section>

        ";
        }
        // line 804
        echo "   ";
    }

    public function getTemplateName()
    {
        return "ticket.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1248 => 804,  1240 => 799,  1225 => 786,  1222 => 785,  1197 => 762,  1187 => 755,  1183 => 754,  1160 => 740,  1155 => 738,  1138 => 724,  1132 => 721,  1124 => 718,  1116 => 713,  1104 => 704,  1099 => 702,  1086 => 692,  1079 => 687,  1077 => 686,  1057 => 669,  1053 => 668,  1048 => 666,  1019 => 639,  1013 => 635,  1003 => 628,  999 => 627,  989 => 621,  973 => 612,  969 => 611,  964 => 609,  960 => 608,  957 => 607,  955 => 606,  941 => 601,  937 => 600,  934 => 599,  932 => 598,  929 => 597,  927 => 596,  913 => 585,  909 => 584,  906 => 583,  904 => 582,  881 => 561,  869 => 554,  859 => 546,  857 => 545,  841 => 534,  835 => 531,  827 => 528,  823 => 527,  807 => 516,  797 => 511,  792 => 509,  778 => 500,  772 => 497,  766 => 494,  761 => 492,  751 => 484,  749 => 483,  738 => 475,  714 => 454,  694 => 437,  687 => 433,  653 => 402,  644 => 398,  632 => 389,  618 => 378,  614 => 377,  576 => 342,  568 => 339,  553 => 327,  545 => 321,  531 => 318,  527 => 317,  520 => 313,  510 => 305,  499 => 302,  496 => 301,  492 => 300,  485 => 298,  480 => 296,  476 => 295,  439 => 269,  426 => 267,  415 => 261,  308 => 156,  293 => 143,  284 => 140,  280 => 139,  276 => 138,  267 => 134,  258 => 128,  253 => 125,  251 => 124,  245 => 120,  241 => 119,  238 => 118,  236 => 117,  230 => 116,  225 => 114,  217 => 109,  213 => 107,  208 => 104,  195 => 97,  191 => 96,  186 => 93,  182 => 92,  176 => 89,  172 => 88,  161 => 80,  156 => 78,  152 => 77,  148 => 76,  141 => 72,  136 => 70,  131 => 68,  127 => 67,  115 => 60,  107 => 55,  101 => 52,  85 => 38,  80 => 36,  76 => 34,  74 => 33,  49 => 13,  43 => 12,  36 => 8,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
