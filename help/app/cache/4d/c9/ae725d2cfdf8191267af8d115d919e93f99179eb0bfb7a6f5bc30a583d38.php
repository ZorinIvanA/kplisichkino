<?php

/* new.view.tmpl */
class __TwigTemplate_4dc9ae725d2cfdf8191267af8d115d919e93f99179eb0bfb7a6f5bc30a583d38 extends Twig_Template
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
                        <i class=\"fa fa-tag\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["NEW_title"]) ? $context["NEW_title"] : null), "html", null, true);
        echo "
                        
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "\"><span class=\"icon-svg\"></span>  ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["NEW_title"]) ? $context["NEW_title"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>
                
                 
                <section class=\"content\">

<div class=\"row\">
            <div class=\"col-md-12\">                      
                                
                            
                                    
                                   
                                                                   
                            
                            
                            
                            
<div class=\"\" id=\"form_add\">

<div class=\"row\" style=\"padding-bottom:20px;\">


                            
                            
                            
                            
                            
                            
<div class=\"col-md-8\" id=\"div_new\">
<div class=\"box box-solid\">
                                
                                <div class=\"box-body\">


";
        // line 43
        if (((isset($context["ok_msg"]) ? $context["ok_msg"] : null) == true)) {
            // line 44
            echo "
    <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        <strong><i class=\"fa fa-check\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["NEW_ok"]) ? $context["NEW_ok"] : null), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["NEW_ok_1"]) ? $context["NEW_ok_1"] : null), "html", null, true);
            echo " <a class=\"\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "ticket?";
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["NEW_ok_2"]) ? $context["NEW_ok_2"] : null), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, (isset($context["NEW_ok_3"]) ? $context["NEW_ok_3"] : null), "html", null, true);
            echo "
        <a class=\"\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "print_ticket?";
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "\"target=\"_blank\"> ";
            echo twig_escape_filter($this->env, (isset($context["NEW_ok_4"]) ? $context["NEW_ok_4"] : null), "html", null, true);
            echo "</a>.
    </div>
";
        }
        // line 51
        echo "
<div class=\"\" style=\"padding:20px;\">
<div class=\"\">

<div class=\"form-horizontal\" id=\"main_form\" novalidate=\"\" action=\"\" method=\"post\">

 
<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_fio\">

            <label for=\"fio\" class=\"col-sm-2 control-label\"><small>";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["NEW_from"]) ? $context["NEW_from"] : null), "html", null, true);
        echo ": </small></label>

            <div class=\"col-sm-10\"data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["NEW_from_desc"]) ? $context["NEW_from_desc"] : null), "html", null, true);
        echo "\">

                <div class=\"input-group\">
                <input  type=\"text\" name=\"fio\" class=\"form-control input-sm\" id=\"fio\" placeholder=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["NEW_fio"]) ? $context["NEW_fio"] : null), "html", null, true);
        echo "\" autofocus data-toggle=\"popover\" data-trigger=\"manual\" data-html=\"true\" data-placement=\"right\" data-content=\"<small>";
        echo twig_escape_filter($this->env, (isset($context["NEW_fio_desc"]) ? $context["NEW_fio_desc"] : null), "html", null, true);
        echo "</small>\">
                <a id=\"select_init_user\" param-hash=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["uniq_id"]) ? $context["uniq_id"] : null), "html", null, true);
        echo "\" href='#' class=\"input-group-addon\">";
        echo twig_escape_filter($this->env, (isset($context["CREATE_TICKET_ME"]) ? $context["CREATE_TICKET_ME"] : null), "html", null, true);
        echo "</a>
                </div>


            </div>



        </div></div>

    <hr>
<div data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["NEW_to_desc"]) ? $context["NEW_to_desc"] : null), "html", null, true);
        echo "\">



";
        // line 83
        if (((isset($context["def_unit_id"]) ? $context["def_unit_id"] : null) != "0")) {
            // line 84
            echo "

<div class=\"form-group\" id=\"for_to\">
        <label for=\"to\" class=\"col-md-2 control-label\" ><small>";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
            echo ": </small></label>
        <div class=\"col-md-6\">
            <select data-placeholder=\"";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control\" id=\"to\" name=\"unit_id\" disabled>
                <option value=\"0\"></option>
                ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_unit_list"]) ? $context["to_unit_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 92
                echo "
                            <option value=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sel", array()), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</option>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
            </select>
        </div>




        <div class=\"col-md-4\" style=\"\" id=\"dsd\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit_desc"]) ? $context["NEW_to_unit_desc"] : null), "html", null, true);
            echo "\">
    
    
    <select data-placeholder=\"";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["NEW_to_user"]) ? $context["NEW_to_user"] : null), "html", null, true);
            echo "\" id=\"users_do\" name=\"unit_id\" class=\"form-control input-sm\" multiple disabled>
        <option></option>


";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_user_list"]) ? $context["to_user_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 111
                echo "                    <option data-foo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "df", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "st_sel", array()), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo " </option>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "    </select>
            

        </div>

    </div>

";
        }
        // line 122
        echo "




";
        // line 127
        if (((isset($context["def_unit_id"]) ? $context["def_unit_id"] : null) == "0")) {
            // line 128
            echo "



    <div class=\"form-group\" id=\"for_to\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\">


    
        <label for=\"to\" class=\"col-md-2 control-label\" ><small>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
            echo ": </small></label>
        <div class=\"col-md-6\">
            <select data-placeholder=\"";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control\" id=\"to\" name=\"unit_id\">
                <option value=\"0\"></option>
                ";
            // line 140
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_unit_list"]) ? $context["to_unit_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 141
                echo "
<option value=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</option>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "
                

            </select>
        </div>




        <div class=\"col-md-4\" style=\"\" id=\"dsd\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
            // line 154
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit_desc"]) ? $context["NEW_to_unit_desc"] : null), "html", null, true);
            echo "</small>\">
    
    
    <select data-placeholder=\"";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["NEW_to_user"]) ? $context["NEW_to_user"] : null), "html", null, true);
            echo "\" id=\"users_do\" name=\"unit_id\" class=\"form-control input-sm\" multiple>
        <option></option>
";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_user_list"]) ? $context["to_user_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 160
                echo "                    <option data-foo=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "df", array()), "html", null, true);
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
            // line 163
            echo "    </select>
            

        </div>

    </div>

";
        }
        // line 171
        echo "

</div>



</div>




<div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"><small>";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["NEW_prio"]) ? $context["NEW_prio"] : null), "html", null, true);
        echo ": </small></label>
            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

                <div class=\"btn-group btn-group-justified\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs\" id=\"prio_low\"><i id=\"lprio_low\" class=\"\"></i>";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_low"]) ? $context["NEW_prio_low"] : null), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-info btn-xs active\" id=\"prio_normal\"><i id=\"lprio_norm\" class=\"fa fa-check\"></i> ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_norm"]) ? $context["NEW_prio_norm"] : null), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_high_desc"]) ? $context["NEW_prio_high_desc"] : null), "html", null, true);
        echo "\" id=\"prio_high\"><i id=\"lprio_high\" class=\"\"></i>";
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_high"]) ? $context["NEW_prio_high"] : null), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div></div></div></div>

";
        // line 201
        if (((isset($context["sla_system"]) ? $context["sla_system"] : null) == "true")) {
            // line 202
            echo "        


<div class=\"control-group \" >
    <div class=\"controls\">
        <div class=\"form-group \" id=\"for_subj\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
            // line 207
            echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
            echo "</small>\">
            <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
            echo ": </small></label>
            <div class=\"col-sm-10 \" style=\"\">
                <select data-placeholder=\"";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["NEW_subj_det"]) ? $context["NEW_subj_det"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm \" id=\"subj\" name=\"subj\">
               
                    <option value=\"0\"></option>
                    ";
            // line 213
            echo (isset($context["get_sla_view_select_box"]) ? $context["get_sla_view_select_box"] : null);
            echo "
                    
                </select>
            </div>
        </div>

    </div>
</div>

";
        }
        // line 223
        if (((isset($context["sla_system"]) ? $context["sla_system"] : null) == "false")) {
            // line 224
            echo "
";
            // line 225
            if (((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "false")) {
                // line 226
                echo "<div class=\"control-group\" id=\"for_subj\">
        <div class=\"controls\">
          <div class=\"form-group\">
    <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo ": </small></label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control input-sm\" name=\"subj\" id=\"subj\" placeholder=\"";
                // line 231
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo "\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
                echo "</small>\" >
    </div>
  </div></div></div>
";
            }
            // line 235
            if ((((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "true") || ((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "true_multiple"))) {
                // line 236
                echo "

<div class=\"control-group \" >
    <div class=\"controls\">
        <div class=\"form-group \" id=\"for_subj\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
                echo "</small>\">
            <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
                // line 241
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo ": </small></label>
            <div class=\"col-sm-10 \" style=\"\">
                <select data-placeholder=\"";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_det"]) ? $context["NEW_subj_det"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control input-sm \" id=\"subj\" name=\"subj\" ";
                echo twig_escape_filter($this->env, (isset($context["mut"]) ? $context["mut"] : null), "html", null, true);
                echo ">
                    <option value=\"0\"></option>
                    ";
                // line 245
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["subj_list"]) ? $context["subj_list"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 246
                    echo "
                        <option value=\"";
                    // line 247
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "                   


                </select>
            </div>
        </div>

    </div>
</div>
";
            }
            // line 259
            echo "


";
        }
        // line 263
        echo "




<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_msg\">
            <label for=\"msg\" class=\"col-sm-2 control-label\"><small>";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["NEW_MSG"]) ? $context["NEW_MSG"] : null), "html", null, true);
        echo ":</small></label>
            <div class=\"col-sm-10\">
                <textarea data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["NEW_MSG_msg"]) ? $context["NEW_MSG_msg"] : null), "html", null, true);
        echo "</small>\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["NEW_MSG_ph"]) ? $context["NEW_MSG_ph"] : null), "html", null, true);
        echo "\" class=\"form-control input-sm animated\" name=\"msg\" id=\"msg\" rows=\"3\" required=\"\" data-validation-required-message=\"";
        echo twig_escape_filter($this->env, (isset($context["EXT_fill_msg"]) ? $context["EXT_fill_msg"] : null), "html", null, true);
        echo "\" aria-invalid=\"false\"></textarea>
            </div>
        </div>
        <div class=\"help-block\"></div></div></div>




            <!--######### INPUT FOR DATE-FINISH ############## -->
";
        // line 282
        if ((((isset($context["sla_system"]) ? $context["sla_system"] : null) == "false") && ((isset($context["ticket_last_time"]) ? $context["ticket_last_time"] : null) == "true"))) {
            // line 283
            echo "   
            
                      <div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"d_finish\" class=\"col-sm-2 control-label\"><small>";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["TICKET_deadline_text"]) ? $context["TICKET_deadline_text"] : null), "html", null, true);
            echo ": </small></label>

            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

<div class='input-group date' id='date_finish'>

                    <input id=\"d_finish\" type='text' class=\"form-control input-sm\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" value=\"";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["date_dl"]) ? $context["date_dl"] : null), "html", null, true);
            echo "\" />
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
                
            </div>
            
        </div>
    </div>
    
    </div>  
            ";
        }
        // line 306
        echo "
                
            <!--######### INPUT FOR DATE-FINISH ############## -->






 ";
        // line 315
        if (((isset($context["file_uploads"]) ? $context["file_uploads"] : null) == "true")) {
            // line 316
            echo "   




<div class=\"control-group\">
    <div class=\"controls\">
    <div class=\"form-group\">
    
    <label for=\"\" class=\"col-sm-2 control-label\"><small>";
            // line 325
            echo twig_escape_filter($this->env, (isset($context["TICKET_file_add"]) ? $context["TICKET_file_add"] : null), "html", null, true);
            echo ":</small></label>

    <div class=\"col-sm-10\">
<div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
  <div class=\"dz-message\" data-dz-message>
<center class=\"text-muted\">";
            // line 330
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
                    <td style=\"width:50%\"><small><p class=\"name\" data-dz-name></p> </small></td>
                    <td><small class=\"text-muted\"><p class=\"size\" data-dz-size></p></small></td>
                    <td style=\"width:30%\"><div class=\"progress progress-striped progress-sm\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\">
          <div class=\"progress-bar progress-bar-success progress-sm\" style=\"width:0%;\" data-dz-uploadprogress></div>
        </div></td>
                    <td class=\"pull-right\"><button data-dz-remove class=\"btn btn-xs btn-danger delete\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        <span>Delete</span>
      </button></td>
                  </tr>

                </tbody></table>

</div>
  </div>
 
</div>

</div></div></div></div>



";
        }
        // line 371
        echo "




<!--######### ADDITIONAL FIELDS ############## -->

<form id=\"add_field_form\">
    <div >


";
        // line 382
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["add_fields_forms"]) ? $context["add_fields_forms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 383
            echo "


                      <div class=\"control-group\" id=\"\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
            echo "\" class=\"col-sm-2 control-label\"><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo ": </small></label>

            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">
 ";
            // line 392
            if (($this->getAttribute($context["item"], "t_type", array()) == "text")) {
                // line 393
                echo "<input type=\"text\" class=\"form-control input-sm\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "'>
";
            }
            // line 395
            echo "

 ";
            // line 397
            if (($this->getAttribute($context["item"], "t_type", array()) == "textarea")) {
                // line 398
                echo "<textarea rows=\"3\" class=\"form-control input-sm animated\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "</textarea>
";
            }
            // line 400
            echo "

 ";
            // line 402
            if (($this->getAttribute($context["item"], "t_type", array()) == "select")) {
                // line 403
                echo "
<select data-placeholder=\"";
                // line 404
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\">

";
                // line 406
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemv"]) {
                    // line 407
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["itemv"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["itemv"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                echo "                            
                
                        
            </select>
";
            }
            // line 414
            echo "
 ";
            // line 415
            if (($this->getAttribute($context["item"], "t_type", array()) == "multiselect")) {
                // line 416
                echo "




<select data-placeholder=\"";
                // line 421
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" class=\"multi_field\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "[]\" multiple=\"multiple\" >



                         ";
                // line 425
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemv"]) {
                    // line 426
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["itemv"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["itemv"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 427
                echo "  
                
                        
            </select>
";
            }
            // line 432
            echo "                
            </div>
            
        </div>
    </div>
    
    </div> 



    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "</div>
    </form>
    
<!--######### ADDITIONAL FIELDS ############## -->






<div class=\"col-md-2\"></div>
<div class=\"col-md-10\" id=\"processing\">
    <div class=\"btn-group btn-group-justified\">
        <div class=\"btn-group\">
            <button id=\"enter_ticket\" class=\"btn btn-success\" type=\"button\"><i class=\"fa fa-check-circle-o\"></i> ";
        // line 457
        echo twig_escape_filter($this->env, (isset($context["NEW_button_create"]) ? $context["NEW_button_create"] : null), "html", null, true);
        echo "</button>
        </div>
        <div class=\"btn-group\">
            <button id=\"reset_ticket\" class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-eraser\"></i> ";
        // line 460
        echo twig_escape_filter($this->env, (isset($context["NEW_button_reset"]) ? $context["NEW_button_reset"] : null), "html", null, true);
        echo "</button>
        </div>
    </div>
    <div id=\"res\"></div>
    <input type=\"hidden\" id=\"file_array\" value=\"\">
    <input type=\"hidden\" id=\"client_id_param\" value=\"\">
    <input type=\"hidden\" id=\"hashname\" value=\"";
        // line 466
        echo twig_escape_filter($this->env, (isset($context["hashname"]) ? $context["hashname"] : null), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"status_action\" value=\"\">
    <input type=\"hidden\" id=\"prio\" value=\"1\">
    <input type=\"hidden\" id=\"d_finish_val\" value=\"NULL\">
    <input type=\"hidden\" value=\"";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["user_init_id"]) ? $context["user_init_id"] : null), "html", null, true);
        echo "\" id=\"user_init_id\">
    <input type=\"hidden\" id=\"user_name_login\" value=\"";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["user_name_login"]) ? $context["user_name_login"] : null), "html", null, true);
        echo "\">

<input type=\"hidden\" id=\"file_types\" value=\"";
        // line 473
        echo twig_escape_filter($this->env, (isset($context["ftypes"]) ? $context["ftypes"] : null), "html", null, true);
        echo "\">
<input type=\"hidden\" id=\"file_size\" value=\"";
        // line 474
        echo twig_escape_filter($this->env, (isset($context["file_size"]) ? $context["file_size"] : null), "html", null, true);
        echo "\">





</div>


</div>
</div>
</div>

    <br>


                                </div><!-- /.box-body -->
                            </div>


</div>
<div id=\"alert_add\">
    </div>
<div class=\"col-md-4\" id=\"user_info\">

                            
                            
                            
                            





</div>
    


</div>




</div><!-- /.box-body -->
                            
                            
                            
                            
                            
                            
                            
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
</div>


</section>
";
    }

    public function getTemplateName()
    {
        return "new.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 474,  865 => 473,  860 => 471,  856 => 470,  849 => 466,  840 => 460,  834 => 457,  818 => 443,  802 => 432,  795 => 427,  784 => 426,  780 => 425,  769 => 421,  762 => 416,  760 => 415,  757 => 414,  750 => 409,  739 => 407,  735 => 406,  726 => 404,  723 => 403,  721 => 402,  717 => 400,  705 => 398,  703 => 397,  699 => 395,  687 => 393,  685 => 392,  677 => 389,  669 => 383,  665 => 382,  652 => 371,  608 => 330,  600 => 325,  589 => 316,  587 => 315,  576 => 306,  561 => 294,  552 => 288,  545 => 283,  543 => 282,  527 => 273,  522 => 271,  512 => 263,  506 => 259,  494 => 249,  484 => 247,  481 => 246,  477 => 245,  470 => 243,  465 => 241,  461 => 240,  455 => 236,  453 => 235,  444 => 231,  439 => 229,  434 => 226,  432 => 225,  429 => 224,  427 => 223,  414 => 213,  408 => 210,  403 => 208,  399 => 207,  392 => 202,  390 => 201,  380 => 196,  374 => 193,  368 => 190,  360 => 185,  344 => 171,  334 => 163,  320 => 160,  316 => 159,  311 => 157,  305 => 154,  294 => 145,  283 => 142,  280 => 141,  276 => 140,  271 => 138,  266 => 136,  256 => 128,  254 => 127,  247 => 122,  237 => 114,  221 => 111,  217 => 110,  210 => 106,  204 => 103,  195 => 96,  182 => 93,  179 => 92,  175 => 91,  170 => 89,  165 => 87,  160 => 84,  158 => 83,  151 => 79,  135 => 68,  129 => 67,  123 => 64,  118 => 62,  105 => 51,  95 => 48,  81 => 47,  76 => 44,  74 => 43,  36 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
