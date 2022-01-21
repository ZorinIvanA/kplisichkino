<?php

/* client.new.view.tmpl */
class __TwigTemplate_880fccefbe6b2f06a4c92443878383777e82c8efae92fe8a348324e5189cda80 extends Twig_Template
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
            <div class=\"col-md-8 col-md-offset-2\">   

<div class=\"box box-solid\">
                                
                                <div class=\"box-body\">
                                
                                
                                
                                
                                
                                <div class=\"\" id=\"div_new\">
";
        // line 27
        if (((isset($context["ok_msg"]) ? $context["ok_msg"] : null) == true)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        <strong><i class=\"fa fa-check\"></i> ";
            // line 30
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
            // line 31
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "print_ticket?";
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "\"target=\"_blank\"> ";
            echo twig_escape_filter($this->env, (isset($context["NEW_ok_4"]) ? $context["NEW_ok_4"] : null), "html", null, true);
            echo "</a>.
    </div>
";
        }
        // line 34
        echo "

<div class=\"\" style=\"padding:20px;\">
<div class=\"panel-body\">

<div class=\"form-horizontal\" id=\"main_form\" novalidate=\"\" action=\"\" method=\"post\">


<div class=\"control-group\">



";
        // line 46
        if (((isset($context["def_unit_id"]) ? $context["def_unit_id"] : null) != "0")) {
            // line 47
            echo "

<div class=\"form-group\" id=\"for_to\">
        <label for=\"to\" class=\"col-md-2 control-label\" ><small>";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
            echo ": </small></label>
        <div class=\"col-md-6\">
            <select data-placeholder=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control\" id=\"to\" name=\"unit_id\" disabled>
                <option value=\"0\"></option>
                ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_unit_list"]) ? $context["to_unit_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "
                            <option value=\"";
                // line 56
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
            // line 59
            echo "
            </select>
        </div>




        <div class=\"col-md-4\" style=\"\" id=\"dsd\">
    
    
    <select data-placeholder=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["NEW_to_user"]) ? $context["NEW_to_user"] : null), "html", null, true);
            echo "\" id=\"users_do\" name=\"unit_id\" class=\"form-control input-sm\" multiple disabled>
        <option></option>


";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_user_list"]) ? $context["to_user_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
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
            // line 77
            echo "    </select>
            

        </div>

    </div>

";
        }
        // line 85
        echo "

 

";
        // line 89
        if (((isset($context["def_unit_id"]) ? $context["def_unit_id"] : null) == "0")) {
            // line 90
            echo "



    <div class=\"form-group\" id=\"for_to\">
        <label for=\"to\" class=\"col-md-2 control-label\" ><small>";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
            echo ": </small></label>
        <div class=\"col-md-6\">
            <select data-placeholder=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control\" id=\"to\" name=\"unit_id\">
                <option value=\"0\"></option>
                ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_unit_list"]) ? $context["to_unit_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "
<option value=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</option>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
                

            </select>
        </div>




        <div class=\"col-md-4\" style=\"\" id=\"dsd\" >
    
    
    <select data-placeholder=\"";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["NEW_to_user"]) ? $context["NEW_to_user"] : null), "html", null, true);
            echo "\" id=\"users_do\" name=\"unit_id\" class=\"form-control input-sm\" multiple>
        <option></option>
";
            // line 118
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["to_user_list"]) ? $context["to_user_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 119
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
            // line 122
            echo "    </select>
            

        </div>

    </div>

";
        }
        // line 130
        echo "</div>




<div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"><small>";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["NEW_prio"]) ? $context["NEW_prio"] : null), "html", null, true);
        echo ": </small></label>
            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

                <div class=\"btn-group btn-group-justified\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs\" id=\"prio_low\"><i id=\"lprio_low\" class=\"\"></i>";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_low"]) ? $context["NEW_prio_low"] : null), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-info btn-xs active\" id=\"prio_normal\"><i id=\"lprio_norm\" class=\"fa fa-check\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_norm"]) ? $context["NEW_prio_norm"] : null), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_high_desc"]) ? $context["NEW_prio_high_desc"] : null), "html", null, true);
        echo "\" id=\"prio_high\"><i id=\"lprio_high\" class=\"\"></i>";
        echo twig_escape_filter($this->env, (isset($context["NEW_prio_high"]) ? $context["NEW_prio_high"] : null), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div></div></div></div>
";
        // line 153
        if (((isset($context["sla_system"]) ? $context["sla_system"] : null) == "true")) {
            // line 154
            echo "        


<div class=\"control-group \" >
    <div class=\"controls\">
        <div class=\"form-group \" id=\"for_subj\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
            echo "</small>\">
            <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
            echo ": </small></label>
            <div class=\"col-sm-10 \" style=\"\">
                <select data-placeholder=\"";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["NEW_subj_det"]) ? $context["NEW_subj_det"] : null), "html", null, true);
            echo "\" class=\"chosen-select form-control input-sm \" id=\"subj\" name=\"subj\">
               
                    <option value=\"0\"></option>
                    ";
            // line 165
            echo (isset($context["get_sla_view_select_box"]) ? $context["get_sla_view_select_box"] : null);
            echo "
                    
                </select>
            </div>
        </div>

    </div>
</div>

";
        }
        // line 175
        echo "

";
        // line 177
        if (((isset($context["sla_system"]) ? $context["sla_system"] : null) == "false")) {
            // line 178
            echo "
";
            // line 179
            if (((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "false")) {
                // line 180
                echo "<div class=\"control-group\" id=\"for_subj\">
        <div class=\"controls\">
          <div class=\"form-group\">
    <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
                // line 183
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo ": </small></label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control input-sm\" name=\"subj\" id=\"subj\" placeholder=\"";
                // line 185
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo "\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
                echo "</small>\" >
    </div>
  </div></div></div>
";
            }
            // line 189
            if ((((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "true") || ((isset($context["fix_subj"]) ? $context["fix_subj"] : null) == "true_multiple"))) {
                // line 190
                echo "

<div class=\"control-group \" >
    <div class=\"controls\">
        <div class=\"form-group \" id=\"for_subj\" data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
                // line 194
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_msg"]) ? $context["NEW_subj_msg"] : null), "html", null, true);
                echo "</small>\">
            <label for=\"subj\" class=\"col-sm-2 control-label\"><small>";
                // line 195
                echo twig_escape_filter($this->env, (isset($context["NEW_subj"]) ? $context["NEW_subj"] : null), "html", null, true);
                echo ": </small></label>
            <div class=\"col-sm-10 \" style=\"\">
                <select data-placeholder=\"";
                // line 197
                echo twig_escape_filter($this->env, (isset($context["NEW_subj_det"]) ? $context["NEW_subj_det"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control input-sm \" id=\"subj\" name=\"subj\" ";
                echo twig_escape_filter($this->env, (isset($context["mut"]) ? $context["mut"] : null), "html", null, true);
                echo ">
                    <option value=\"0\"></option>
                    ";
                // line 199
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["subj_list"]) ? $context["subj_list"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 200
                    echo "
                        <option value=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "                   


                </select>
            </div>
        </div>

    </div>
</div>
";
            }
            // line 213
            echo "


";
        }
        // line 217
        echo "




<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\" id=\"for_msg\">
            <label for=\"msg\" class=\"col-sm-2 control-label\"><small>";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["NEW_MSG"]) ? $context["NEW_MSG"] : null), "html", null, true);
        echo ":</small></label>
            <div class=\"col-sm-10\">
                <textarea data-toggle=\"popover\" data-html=\"true\" data-trigger=\"manual\" data-placement=\"right\" data-content=\"<small>";
        // line 227
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
        // line 239
        if ((((isset($context["sla_system"]) ? $context["sla_system"] : null) == "false") && ((isset($context["ticket_last_time"]) ? $context["ticket_last_time"] : null) == "true"))) {
            // line 240
            echo "   
            
                      <div class=\"control-group\" id=\"for_prio\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"d_finish\" class=\"col-sm-2 control-label\"><small>";
            // line 245
            echo twig_escape_filter($this->env, (isset($context["TICKET_deadline_text"]) ? $context["TICKET_deadline_text"] : null), "html", null, true);
            echo ": </small></label>

            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">

<div class='input-group date' id='date_finish'>

                    <input id=\"d_finish\" type='text' class=\"form-control input-sm\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" value=\"";
            // line 251
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
        // line 263
        echo "     
            
            <!--######### INPUT FOR DATE-FINISH ############## -->

";
        // line 267
        if (((isset($context["file_uploads"]) ? $context["file_uploads"] : null) == "true")) {
            // line 268
            echo "   




<div class=\"control-group\">
    <div class=\"controls\">
    <div class=\"form-group\">
    
    <label for=\"\" class=\"col-sm-2 control-label\"><small>";
            // line 277
            echo twig_escape_filter($this->env, (isset($context["TICKET_file_add"]) ? $context["TICKET_file_add"] : null), "html", null, true);
            echo ":</small></label>

    <div class=\"col-sm-10\">
<div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
  <div class=\"dz-message\" data-dz-message>
<center class=\"text-muted\">";
            // line 282
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
        // line 323
        echo "




<!--######### ADDITIONAL FIELDS ############## -->

<form id=\"add_field_form\">
    <div >


";
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["add_fields_forms"]) ? $context["add_fields_forms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 335
            echo "


                      <div class=\"control-group\" id=\"\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
            echo "\" class=\"col-sm-2 control-label\"><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo ": </small></label>

            <div class=\"col-sm-10\" style=\" padding-top: 5px; \">
 ";
            // line 344
            if (($this->getAttribute($context["item"], "t_type", array()) == "text")) {
                // line 345
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
            // line 347
            echo "

 ";
            // line 349
            if (($this->getAttribute($context["item"], "t_type", array()) == "textarea")) {
                // line 350
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
            // line 352
            echo "

 ";
            // line 354
            if (($this->getAttribute($context["item"], "t_type", array()) == "select")) {
                // line 355
                echo "
<select data-placeholder=\"";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\">

";
                // line 358
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemv"]) {
                    // line 359
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
                // line 361
                echo "                            
                
                        
            </select>
";
            }
            // line 366
            echo "
 ";
            // line 367
            if (($this->getAttribute($context["item"], "t_type", array()) == "multiselect")) {
                // line 368
                echo "




<select data-placeholder=\"";
                // line 373
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" class=\"multi_field\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "[]\" multiple=\"multiple\" >



                         ";
                // line 377
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemv"]) {
                    // line 378
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
                // line 379
                echo "  
                
                        
            </select>
";
            }
            // line 384
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
        // line 395
        echo "</div>
    </form>
    
<!--######### ADDITIONAL FIELDS ############## -->






<div class=\"col-md-2\"></div>
<div class=\"col-md-10\" id=\"processing\">
    <div class=\"btn-group btn-group-justified\">
        <div class=\"btn-group\">
            <button id=\"enter_ticket_client\" class=\"btn btn-success\" type=\"button\"><i class=\"fa fa-check-circle-o\"></i> ";
        // line 409
        echo twig_escape_filter($this->env, (isset($context["NEW_button_create"]) ? $context["NEW_button_create"] : null), "html", null, true);
        echo "</button>
        </div>
        <div class=\"btn-group\">
            <button id=\"reset_ticket\" class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-eraser\"></i> ";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["NEW_button_reset"]) ? $context["NEW_button_reset"] : null), "html", null, true);
        echo "</button>
        </div>
    </div>
    <div id=\"res\"></div>
    <input type=\"hidden\" id=\"file_array\" value=\"\">
    <input type=\"hidden\" id=\"client_id_param\" value=\"\">
    <input type=\"hidden\" id=\"hashname\" value=\"";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["hashname"]) ? $context["hashname"] : null), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"status_action\" value=\"\">
    <input type=\"hidden\" id=\"prio\" value=\"1\">
    <input type=\"hidden\" id=\"d_finish_val\" value=\"NULL\">
    <input type=\"hidden\" value=\"";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["user_init_id"]) ? $context["user_init_id"] : null), "html", null, true);
        echo "\" id=\"user_init_id\">
    <input type=\"hidden\" id=\"user_name_login\" value=\"";
        // line 423
        echo twig_escape_filter($this->env, (isset($context["user_name_login"]) ? $context["user_name_login"] : null), "html", null, true);
        echo "\">

<input type=\"hidden\" id=\"file_types\" value=\"";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["ftypes"]) ? $context["ftypes"] : null), "html", null, true);
        echo "\">
<input type=\"hidden\" id=\"file_size\" value=\"";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["file_size"]) ? $context["file_size"] : null), "html", null, true);
        echo "\">





</div>


</div>
</div>
</div>

    <br>

</div>
                                
                                
                                
                                
                                
                                
                                </div>
</div>



            </div>
</div>
                </section>












";
    }

    public function getTemplateName()
    {
        return "client.new.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  798 => 426,  794 => 425,  789 => 423,  785 => 422,  778 => 418,  769 => 412,  763 => 409,  747 => 395,  731 => 384,  724 => 379,  713 => 378,  709 => 377,  698 => 373,  691 => 368,  689 => 367,  686 => 366,  679 => 361,  668 => 359,  664 => 358,  655 => 356,  652 => 355,  650 => 354,  646 => 352,  634 => 350,  632 => 349,  628 => 347,  616 => 345,  614 => 344,  606 => 341,  598 => 335,  594 => 334,  581 => 323,  537 => 282,  529 => 277,  518 => 268,  516 => 267,  510 => 263,  495 => 251,  486 => 245,  479 => 240,  477 => 239,  458 => 227,  453 => 225,  443 => 217,  437 => 213,  425 => 203,  415 => 201,  412 => 200,  408 => 199,  401 => 197,  396 => 195,  392 => 194,  386 => 190,  384 => 189,  375 => 185,  370 => 183,  365 => 180,  363 => 179,  360 => 178,  358 => 177,  354 => 175,  341 => 165,  335 => 162,  330 => 160,  326 => 159,  319 => 154,  317 => 153,  308 => 149,  302 => 146,  296 => 143,  288 => 138,  278 => 130,  268 => 122,  254 => 119,  250 => 118,  245 => 116,  231 => 104,  220 => 101,  217 => 100,  213 => 99,  208 => 97,  203 => 95,  196 => 90,  194 => 89,  188 => 85,  178 => 77,  162 => 74,  158 => 73,  151 => 69,  139 => 59,  126 => 56,  123 => 55,  119 => 54,  114 => 52,  109 => 50,  104 => 47,  102 => 46,  88 => 34,  78 => 31,  64 => 30,  60 => 28,  58 => 27,  36 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
