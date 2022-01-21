<?php

/* client.ticket.view.tmpl */
class __TwigTemplate_0ea34a846e2622721792ae300542edf7bc85b8f6236345ed1e5ea5d6d5be8704 extends Twig_Template
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
            // line 106
            echo " 

            <div class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;   background-color: #FDFDFD;\">
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







    


    



    </div>
    
    <div class=\"row\">
    <div class=\"col-md-12\">
    
<div id=\"msg\"></div>
<div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\"><i class=\"fa fa-comments-o\"></i> ";
            // line 266
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_comment"]) ? $context["TICKET_t_comment"] : null), "html", null, true);
            echo "</a></li>
                                    <li class=\"\"><a href=\"#tab_2\" data-toggle=\"tab\" id=\"get_new_log\">";
            // line 267
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
            // line 278
            echo (isset($context["view_comment"]) ? $context["view_comment"] : null);
            echo "
                                    <!-- chat item -->
                                    
                                </div><!-- /.chat -->
                                <div class=\"box-footer\">
                                    <div class=\"row\" id=\"for_msg\">
                                        <div class=\"col-md-12\">


<textarea id=\"msg\" name=\"msg\" class=\"form-control\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"top\" data-content=\"&lt;small&gt;";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_det_ticket"]) ? $context["TICKET_t_det_ticket"] : null), "html", null, true);
            echo "&lt;/small&gt;\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_comm_ph"]) ? $context["TICKET_t_comm_ph"] : null), "html", null, true);
            echo "\"></textarea>
 <div class=\"text-muted well well-sm no-shadow\" id=\"myid\" style=\"margin-bottom: 0px;\">

                          <div class=\"dz-message\" data-dz-message>
                            <center class=\"text-muted\"><small>";
            // line 291
            echo twig_escape_filter($this->env, (isset($context["PORTAL_fileplace"]) ? $context["PORTAL_fileplace"] : null), "html", null, true);
            echo "</small></center>
                          </div>

                          <style type=\"text/css\">
                          .note-editor .note-dropzone { opacity: 0 !important; }
                          </style>

                          <form action=\"#\" class=\"\"></form>

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
            // line 320
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\" id=\"do_comment\" class=\"btn btn-success btn-sm\"><i class=\"fa fa-comment\"></i></button>

                                          
                                            
  <!--input type=\"file\" id=\"do_comment_file\" value=\"";
            // line 324
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
            // line 341
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
            // line 362
            echo (isset($context["get_client_info_ticket"]) ? $context["get_client_info_ticket"] : null);
            echo "
    </div>
    
</div>




";
            // line 370
            if (((isset($context["slshow"]) ? $context["slshow"] : null) == true)) {
                // line 371
                echo "

<div class=\"row\">
    
    <div class=\"col-md-12\">
<div class=\"info-box bg-aqua\">
                <span class=\"info-box-icon\"><i class=\"fa fa-bolt\"></i></span>
                <div class=\"info-box-content\">
                  <span class=\"info-box-text\">";
                // line 379
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_reaction"]) ? $context["SLA_perf_reaction"] : null), "html", null, true);
                echo "</span>
                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\">
";
                // line 381
                echo (isset($context["get_ticket_time_reaction"]) ? $context["get_ticket_time_reaction"] : null);
                echo "
                  </span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: ";
                // line 384
                echo twig_escape_filter($this->env, (isset($context["per"]) ? $context["per"] : null), "html", null, true);
                echo "%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 387
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
                // line 396
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_work_a"]) ? $context["SLA_perf_work_a"] : null), "html", null, true);
                echo "</span>

                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\" id=\"work_timer\" value=\"";
                // line 398
                echo twig_escape_filter($this->env, (isset($context["sl"]) ? $context["sl"] : null), "html", null, true);
                echo "\">";
                echo (isset($context["get_ticket_time_lock"]) ? $context["get_ticket_time_lock"] : null);
                echo "</span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: {perw}%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 403
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
                // line 414
                echo twig_escape_filter($this->env, (isset($context["SLA_perf_deadline_short"]) ? $context["SLA_perf_deadline_short"] : null), "html", null, true);
                echo "</span>
                  <span class=\"info-box-number\" style=\"white-space: nowrap;  overflow: hidden; text-overflow: ellipsis;\" id=\"deadline_timer\" value=\"";
                // line 415
                echo twig_escape_filter($this->env, (isset($context["ls"]) ? $context["ls"] : null), "html", null, true);
                echo "\">";
                echo (isset($context["left_secr"]) ? $context["left_secr"] : null);
                echo "
                  </span>
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: ";
                // line 418
                echo twig_escape_filter($this->env, (isset($context["perd"]) ? $context["perd"] : null), "html", null, true);
                echo "%\"></div>
                  </div>
                  <span class=\"progress-description\">
                    ";
                // line 421
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
            // line 432
            echo "






<div class=\"row\">
    
    <div class=\"col-md-12\">












                ";
            // line 454
            if (((isset($context["arch"]) ? $context["arch"] : null) == 1)) {
                // line 455
                echo "<div class=\"callout bg-gray color-palette\">
                                        <h4>";
                // line 456
                echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                echo "</h4>
                                        <p>";
                // line 457
                echo twig_escape_filter($this->env, (isset($context["TICKET_t_in_arch"]) ? $context["TICKET_t_in_arch"] : null), "html", null, true);
                echo "</p>
                                    </div>
                            
                            
                            
                
                
                
                
                
";
            }
            // line 468
            if (((isset($context["arch"]) ? $context["arch"] : null) == 0)) {
                // line 469
                echo "            
";
                // line 470
                if (((isset($context["status_ok"]) ? $context["status_ok"] : null) == 1)) {
                    // line 471
                    echo "<div class=\"callout callout-warning\">
                                        <h4>";
                    // line 472
                    echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                    echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                    // line 473
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
                // line 478
                if (((isset($context["status_ok"]) ? $context["status_ok"] : null) == 0)) {
                    // line 479
                    echo "               
                    ";
                    // line 480
                    if (((isset($context["lock_by"]) ? $context["lock_by"] : null) != 0)) {
                        echo "       
                        ";
                        // line 481
                        if (((isset($context["status_lock"]) ? $context["status_lock"] : null) == "you")) {
                            echo "   
                            <div class=\"callout callout-warning\">
                                        <h4>";
                            // line 483
                            echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                            echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                            // line 484
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock"]) ? $context["TICKET_t_lock"] : null), "html", null, true);
                            echo " <strong> ";
                            echo (isset($context["lock_by_fio"]) ? $context["lock_by_fio"] : null);
                            echo "</strong> .<br> ";
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock_1"]) ? $context["TICKET_t_lock_1"] : null), "html", null, true);
                            echo "</p>
                                    </div>
                                    
                                    
                                    
                            
                            
                            
                           ";
                        }
                        // line 493
                        echo "                           ";
                        if (((isset($context["status_lock"]) ? $context["status_lock"] : null) == "me")) {
                            echo " 
                        
                            
                            
                            
                            <div class=\"callout callout-warning\">
                                        <h4>";
                            // line 499
                            echo twig_escape_filter($this->env, (isset($context["MAIN_attention"]) ? $context["MAIN_attention"] : null), "html", null, true);
                            echo "</h4>
                                        <p><i class=\"fa fa-check-circle\"></i> ";
                            // line 500
                            echo twig_escape_filter($this->env, (isset($context["TICKET_t_lock_i"]) ? $context["TICKET_t_lock_i"] : null), "html", null, true);
                            echo "</p>
                                    </div>
                                    
                                    
                            
                            
                            ";
                        }
                        // line 507
                        echo "                        
";
                    }
                }
            }
            // line 511
            echo "    </div>
    
</div>

</div>

</div>












                                        
                    

                </section>
            
            
            
            
                <input type=\"hidden\" id=\"prio\" value=\"";
            // line 538
            echo twig_escape_filter($this->env, (isset($context["pr"]) ? $context["pr"] : null), "html", null, true);
            echo "\">

            <input type=\"hidden\" id=\"ticket_hash\" value=\"";
            // line 540
            echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"ticket_id\" value=\"";
            // line 541
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            <input type=\"hidden\" id=\"ticket_total\" value=\"0\">
            <div class=\"container\">











<link rel=\"stylesheet\" href=\"css/ticket_style.css\">


";
            // line 558
            if (((isset($context["can_edit"]) ? $context["can_edit"] : null) == true)) {
                // line 559
                echo "<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">";
                // line 564
                echo twig_escape_filter($this->env, (isset($context["P_title"]) ? $context["P_title"] : null), "html", null, true);
                echo "</h4>
      </div>
      <div class=\"modal-body\">
        
        
       <form class=\"form-horizontal\" role=\"form\">
       



<div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"><small>";
                // line 577
                echo twig_escape_filter($this->env, (isset($context["NEW_prio"]) ? $context["NEW_prio"] : null), "html", null, true);
                echo ": </small></label>
            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

                <div class=\"btn-group btn-group-justified\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs ";
                // line 582
                echo twig_escape_filter($this->env, (isset($context["prio_style_low"]) ? $context["prio_style_low"] : null), "html", null, true);
                echo "\" id=\"prio_low\"><i id=\"lprio_low\" class=\"\"></i>";
                echo (isset($context["NEW_prio_low"]) ? $context["NEW_prio_low"] : null);
                echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-info btn-xs prio_style_normal\" id=\"prio_normal\"><i id=\"lprio_norm\" class=\"\"></i> ";
                // line 585
                echo (isset($context["NEW_prio_norm"]) ? $context["NEW_prio_norm"] : null);
                echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-danger btn-xs prio_style_high\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" id=\"prio_high\"><i id=\"lprio_high\" class=\"\"></i>";
                // line 588
                echo (isset($context["NEW_prio_high"]) ? $context["NEW_prio_high"] : null);
                echo "</button>
                    </div>
                </div>
            </div></div></div></div>
            
            





  <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_msg\">
            <label for=\"msg\" class=\"col-sm-2 control-label\"><small>";
                // line 602
                echo twig_escape_filter($this->env, (isset($context["NEW_MSG"]) ? $context["NEW_MSG"] : null), "html", null, true);
                echo ":</small></label>
            <div class=\"col-sm-10\">
                <textarea data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                // line 604
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
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
                // line 618
                echo twig_escape_filter($this->env, (isset($context["TICKET_file_notupload_one"]) ? $context["TICKET_file_notupload_one"] : null), "html", null, true);
                echo "</button>
        <button type=\"button\" id=\"save_edit_ticket\" class=\"btn btn-primary\">";
                // line 619
                echo twig_escape_filter($this->env, (isset($context["JS_save"]) ? $context["JS_save"] : null), "html", null, true);
                echo "</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
            }
            // line 626
            echo "
           

            




            










            

            </div>
            ";
        }
        // line 649
        echo "       ";
        if (((isset($context["t_true"]) ? $context["t_true"] : null) == false)) {
            // line 650
            echo "       <section class=\"content-header\">
       </section>
            
            
            
            
            
            
            
            
            
            <section class=\"content\">
        <div class=\"well well-large well-transparent lead\">
            <center>";
            // line 663
            echo twig_escape_filter($this->env, (isset($context["TICKET_t_no"]) ? $context["TICKET_t_no"] : null), "html", null, true);
            echo "</center>
        </div>
        </section>

        ";
        }
    }

    public function getTemplateName()
    {
        return "client.ticket.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 663,  988 => 650,  985 => 649,  960 => 626,  950 => 619,  946 => 618,  923 => 604,  918 => 602,  901 => 588,  895 => 585,  887 => 582,  879 => 577,  863 => 564,  856 => 559,  854 => 558,  834 => 541,  830 => 540,  825 => 538,  796 => 511,  790 => 507,  780 => 500,  776 => 499,  766 => 493,  750 => 484,  746 => 483,  741 => 481,  737 => 480,  734 => 479,  732 => 478,  718 => 473,  714 => 472,  711 => 471,  709 => 470,  706 => 469,  704 => 468,  690 => 457,  686 => 456,  683 => 455,  681 => 454,  657 => 432,  641 => 421,  635 => 418,  627 => 415,  623 => 414,  607 => 403,  597 => 398,  592 => 396,  578 => 387,  572 => 384,  566 => 381,  561 => 379,  551 => 371,  549 => 370,  538 => 362,  514 => 341,  494 => 324,  487 => 320,  455 => 291,  446 => 287,  434 => 278,  420 => 267,  416 => 266,  304 => 156,  289 => 143,  280 => 140,  276 => 139,  272 => 138,  263 => 134,  254 => 128,  249 => 125,  247 => 124,  241 => 120,  237 => 119,  234 => 118,  232 => 117,  226 => 114,  218 => 109,  213 => 106,  208 => 104,  195 => 97,  191 => 96,  186 => 93,  182 => 92,  176 => 89,  172 => 88,  161 => 80,  156 => 78,  152 => 77,  148 => 76,  141 => 72,  136 => 70,  131 => 68,  127 => 67,  115 => 60,  107 => 55,  101 => 52,  85 => 38,  80 => 36,  76 => 34,  74 => 33,  49 => 13,  43 => 12,  36 => 8,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
