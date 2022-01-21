<?php

/* helper.view.tmpl */
class __TwigTemplate_053bb1d6766d45e4441994da1aef854f13e1894b97830d50b300a07d086b644c extends Twig_Template
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
        // line 5
        if (((isset($context["h_check"]) ? $context["h_check"] : null) == true)) {
            // line 6
            echo "    ";
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "edit")) {
                // line 7
                echo "

        <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                       <li><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper \">";
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</a></li>
                       <li class=\"active\"><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?cat=";
                echo twig_escape_filter($this->env, (isset($context["cat_id"]) ? $context["cat_id"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["get_helper_cat_name"]) ? $context["get_helper_cat_name"] : null), "html", null, true);
                echo "</a></li>
                        
                    </ol>
                </section>
                
                 
                
            <section class=\"content\">


<div class=\"row\">
   
    <div class=\"col-md-12\">

            <div class=\"box box-solid\">
            <div class=\"box-body\">
            <form class=\"form-horizontal\" role=\"form\">


                <div class=\"form-group\">
                    <label for=\"u\" class=\"col-md-2 control-label\"><small>";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["HELPER_cat"]) ? $context["HELPER_cat"] : null), "html", null, true);
                echo ": </small></label>
                    <div class=\"col-md-10\">
                        <select style=\"height: 34px;\" data-placeholder=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["HELPER_cat"]) ? $context["HELPER_cat"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"cat\" name=\"cat_id\">
                            
";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cat_id_arr"]) ? $context["cat_id_arr"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "
                                <option value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sel_cat", array()), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</option>

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "
                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"u\" class=\"col-md-2 control-label\"><small>";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
                echo ": </small></label>
                    <div class=\"col-md-10\">
                        
                        <select data-placeholder=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"u\" name=\"unit_id\" multiple>
                            
                        <option value=\"0\" ";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["ar_n"]) ? $context["ar_n"] : null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["HELP_all"]) ? $context["HELP_all"] : null), "html", null, true);
                echo "</option>
                            ";
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["u_arr"]) ? $context["u_arr"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 59
                    echo "
                                <option ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "opt_sel", array()), "html", null, true);
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</option>
 
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "
                        </select>
                    </div>
                </div>
                <div class=\"\">
                    <div class=\"\">
                        <div class=\"form-group\">

                            <label for=\"t\" class=\"col-sm-2 control-label\"><small>";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["HELP_desc"]) ? $context["HELP_desc"] : null), "html", null, true);
                echo ": </small></label>

                            <div class=\"col-sm-10\">


                                <input  type=\"text\" name=\"fio\" class=\"form-control input-sm\" id=\"t\" placeholder=\"";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["HELP_desc"]) ? $context["HELP_desc"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["fio_title"]) ? $context["fio_title"] : null), "html", null, true);
                echo "\">



                            </div>



                        </div></div>
                        
                        
                        <div class=\"form-group\">
  <label for=\"is_client\" class=\"col-sm-2 control-label\"><small>";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["EXT_for_clients"]) ? $context["EXT_for_clients"] : null), "html", null, true);
                echo "</small></label>
  <div class=\"col-sm-10\">
  
  
  
      <div class=\"col-sm-10\">
      <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" id=\"is_client\" ";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["isclient_status"]) ? $context["isclient_status"] : null), "html", null, true);
                echo "> <?php echo lang('CONF_true'); ?>
      <p class=\"help-block\"><small>";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["EXT_for_clients_ext"]) ? $context["EXT_for_clients_ext"] : null), "html", null, true);
                echo "</small></p>
    </label>
  </div>
      </div>
  </div>
    </div>
    
    
                        
                    <div class=\"form-group\">

                        <label for=\"t2\" class=\"col-sm-2 control-label\"><small>";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["HELP_do"]) ? $context["HELP_do"] : null), "html", null, true);
                echo ": </small></label>

                        <div class=\"col-sm-10\">


                            <div id=\"summernote_help\">";
                // line 113
                echo (isset($context["fio_message"]) ? $context["fio_message"] : null);
                echo "</div>





<div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
  <div class=\"dz-message\" data-dz-message>
<center class=\"text-muted\">";
                // line 121
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



                        </div>
                        <div class=\"col-md-12\"><hr>


";
                // line 163
                if (((isset($context["files_res"]) ? $context["files_res"] : null) == true)) {
                    // line 164
                    echo "                    
                        <div class=\"row\" style=\"padding:10px;\">
                        <div class=\"col-md-3\">
                            <center><small><strong>";
                    // line 167
                    echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
                    echo ":</strong></small></center>
                        </div>
                        <div class=\"col-md-9\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                ";
                    // line 172
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["files_arr"]) ? $context["files_arr"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 173
                        echo "                                    
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                        // line 177
                        echo $this->getAttribute($context["item"], "ic", array());
                        echo "</small></td>
                        <td><small>";
                        // line 178
                        echo $this->getAttribute($context["item"], "ct", array());
                        echo "</small></td>
                        <td><small>";
                        // line 179
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fm", array()), "html", null, true);
                        echo " Mb</small></td>
                    <td><button class=\"btn btn-xs btn-danger delete\" id=\"delete_edited_manual_file\" value=\"";
                        // line 180
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fhash", array()), "html", null, true);
                        echo "\">delete</button></td>
                    </tr>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>


                ";
                }
                // line 197
                echo "
                </div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-10\">
                            <div class=\"btn-group btn-group-justified\">
                                <div class=\"btn-group\">
                                    <button id=\"do_save_help\" value=\"";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
                echo "\" class=\"btn btn-success\" type=\"submit\"><i class=\"fa fa-check-circle-o\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["HELP_save"]) ? $context["HELP_save"] : null), "html", null, true);
                echo "</button>
                                </div>
                                <input type=\"hidden\" id=\"manual_hash\" value=\"";
                // line 205
                echo twig_escape_filter($this->env, (isset($context["hn"]) ? $context["hn"] : null), "html", null, true);
                echo "\">
                                <div class=\"btn-group\">
                                    <a href=\"helper\" class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-reply\"></i> ";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["HELP_back"]) ? $context["HELP_back"] : null), "html", null, true);
                echo "</a>
                                </div>
                            </div>


                        </div>
            </form>
            </div></div></form></div></div></div></div></section>



";
            }
            // line 219
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "no_edit")) {
                // line 220
                echo "


        <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 225
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                        <li><a href=\"";
                // line 230
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper \">";
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</a></li>
                       <li class=\"active\"><a href=\"";
                // line 231
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?cat=";
                echo twig_escape_filter($this->env, (isset($context["cat_id"]) ? $context["cat_id"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["get_helper_cat_name"]) ? $context["get_helper_cat_name"] : null), "html", null, true);
                echo "</a></li>
                        
                    </ol>
                </section>
                
                
                
            <section class=\"content\">


<div class=\"row\">
    <div class=\"col-md-1\">
        <a id=\"go_back\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa fa-reply\"></i> ";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["HELPER_back"]) ? $context["HELPER_back"] : null), "html", null, true);
                echo "</a>
    </div>
    
    
    <div class=\"col-md-11\">
        <div class=\"box box-solid\">
            <div class=\"box-body\">
            <h3 style=\" margin-top: 0px; \">";
                // line 250
                echo (isset($context["fio_t"]) ? $context["fio_t"] : null);
                echo "</h3>
    <p>";
                // line 251
                echo (isset($context["fio_m"]) ? $context["fio_m"] : null);
                echo "</p>





";
                // line 257
                if (((isset($context["files_res"]) ? $context["files_res"] : null) == true)) {
                    // line 258
                    echo "                    <hr style=\"margin:0px;\">
                        <div class=\"row\" style=\"padding:10px;\">
                        <div class=\"col-md-3\">
                            <center><small><strong>";
                    // line 261
                    echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
                    echo ":</strong></small></center>
                        </div>
                        <div class=\"col-md-9\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                ";
                    // line 266
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["files_arr"]) ? $context["files_arr"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 267
                        echo "                                    
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                        // line 271
                        echo $this->getAttribute($context["item"], "ic", array());
                        echo "</small></td>
                        <td><small>";
                        // line 272
                        echo $this->getAttribute($context["item"], "ct", array());
                        echo "</small></td>
                        <td><small>";
                        // line 273
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fm", array()), "html", null, true);
                        echo " Mb</small></td>
                    </tr>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 276
                    echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>


            ";
                }
                // line 290
                echo "    <hr>
    
    <p class=\"text-right\"><small class=\"text-muted\">";
                // line 292
                echo twig_escape_filter($this->env, (isset($context["HELPER_pub"]) ? $context["HELPER_pub"] : null), "html", null, true);
                echo ": ";
                echo (isset($context["fio_init"]) ? $context["fio_init"] : null);
                echo "</small><br><small class=\"text-muted\"> <time id=\"c\" datetime=\"";
                echo twig_escape_filter($this->env, (isset($context["fio_dt"]) ? $context["fio_dt"] : null), "html", null, true);
                echo "\"</time>
<br>

";
                // line 295
                if (((isset($context["some_check"]) ? $context["some_check"] : null) == true)) {
                    // line 296
                    echo twig_escape_filter($this->env, (isset($context["TICKET_t_last_up"]) ? $context["TICKET_t_last_up"] : null), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, (isset($context["fio_editu"]) ? $context["fio_editu"] : null), "html", null, true);
                    echo "
";
                }
                // line 298
                echo "

    </small>
    <br>
";
                // line 302
                if (((isset($context["priv_h"]) ? $context["priv_h"] : null) == "yes")) {
                    // line 303
                    echo "                                 
            <div class=\"btn-group pull-right\">
            <a id=\"print_t\" class=\"btn btn-default btn-xs\"> <i class=\"fa fa-print\"></i> ";
                    // line 305
                    echo twig_escape_filter($this->env, (isset($context["HELPER_print"]) ? $context["HELPER_print"] : null), "html", null, true);
                    echo "</a>
            <a href=\"";
                    // line 306
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "helper?h=";
                    echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
                    echo "&edit\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["CONF_act_edit"]) ? $context["CONF_act_edit"] : null), "html", null, true);
                    echo " </a>
            <button id=\"del_helper\" value=\"";
                    // line 307
                    echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
                    echo "\" type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            
                            
                            ";
                }
                // line 312
                echo "                            <br>
        </p>
            </div>
        </div>
    </div>
</div>
            </section>
    
    
    
    
    
";
            }
            // line 325
            echo "    ";
        }
        // line 326
        echo "    ";
        if (((isset($context["h_check"]) ? $context["h_check"] : null) == false)) {
            // line 327
            echo "        ";
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "edit_cats")) {
                // line 328
                echo "
    <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 331
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        <small>";
                // line 332
                echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 335
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\"><a href=\"helper\">";
                // line 336
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\">";
                // line 337
                echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                echo "</li>
                    </ol>
                </section>
                
                
                
            <section class=\"content\">







                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <a href=\"";
                // line 360
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?add\" class=\"btn btn-success btn-sm btn-block\"><i class=\"fa fa-file-o\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["HELPER_create"]) ? $context["HELPER_create"] : null), "html", null, true);
                echo "</a>
                    

                    ";
                // line 363
                if (((isset($context["sc"]) ? $context["sc"] : null) == true)) {
                    // line 364
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "helper?edit_cats\" class=\"btn btn-default btn-sm btn-block\"><i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                    echo " </a>
                    ";
                }
                // line 366
                echo "<br>
                    <div class=\"callout \">
                                        
                                        <small> <i class=\"fa fa-info-circle\"></i> 
";
                // line 370
                echo twig_escape_filter($this->env, (isset($context["HELPER_cats_info"]) ? $context["HELPER_cats_info"] : null), "html", null, true);
                echo "
         </small>
                                    </div>
                        </div>
                        <div class=\"col-md-12\">
                            






                        </div>
                    </div>
                    
                                    
                                    
                                    
                    
                    
                    
                    </div>

                    
                    <div class=\"col-md-9\">
                         <div class=\"box box-solid\">
            <div class=\"\">
            
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
            margin: 0 0;
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


<div class=\"\">
                                <div class=\"box-header\">
                                    
                                    <h3 class=\"box-title\">";
                // line 551
                echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                echo "</h3>

                                </div><!-- /.box-header -->
                                <div class=\"box-body\">




<div id=\"content_items\"> 


";
                // line 562
                echo (isset($context["showMenu_helper"]) ? $context["showMenu_helper"] : null);
                echo "


</div>

                                </div><!-- /.box-body -->
                                <div class=\"box-footer clearfix no-border\">
                                    <button id=\"add_helper_item\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> ";
                // line 569
                echo twig_escape_filter($this->env, (isset($context["NOTES_create"]) ? $context["NOTES_create"] : null), "html", null, true);
                echo "</button>
                                </div>
                            </div>
            </div></div>
                    </div>
                    
                    
                    
                    </div>
            </section>    

";
            }
            // line 581
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "cat")) {
                // line 582
                echo "

 <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 586
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        <small>";
                // line 587
                echo twig_escape_filter($this->env, (isset($context["rname"]) ? $context["rname"] : null), "html", null, true);
                echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 590
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\"><a href=\"helper\">";
                // line 591
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\">";
                // line 592
                echo twig_escape_filter($this->env, (isset($context["rname"]) ? $context["rname"] : null), "html", null, true);
                echo "</li>
                    </ol>
</section>
                
                
                
            <section class=\"content\">







                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <a href=\"";
                // line 615
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?add\" class=\"btn btn-success btn-sm btn-block\"><i class=\"fa fa-file-o\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["HELPER_create"]) ? $context["HELPER_create"] : null), "html", null, true);
                echo "</a>
                    ";
                // line 616
                if (((isset($context["sc2"]) ? $context["sc2"] : null) == true)) {
                    // line 617
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "helper?edit_cats\" class=\"btn btn-default btn-sm btn-block\"><i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                    echo " </a>
                    ";
                }
                // line 619
                echo "<br>

                        </div>
                        <div class=\"col-md-12\">
                            
                            <div class=\"box box-solid\">
                                                                <div class=\"box-header\">
                                    
                                    <h3 class=\"box-title\">";
                // line 627
                echo twig_escape_filter($this->env, (isset($context["HELPER_cats"]) ? $context["HELPER_cats"] : null), "html", null, true);
                echo "</h3>

                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                ";
                // line 631
                echo (isset($context["show_items_helper"]) ? $context["show_items_helper"] : null);
                echo "
                            </div>
                            </div>





                        </div>
                    </div>
                    
                                    
                                    
                                    
                    
                    
                    
                    </div>

                    
                    <div class=\"col-md-9\">
                         <div class=\"box box-solid\">


                                <div class=\"\">
                                   ";
                // line 656
                echo (isset($context["show_item_helper_cat"]) ? $context["show_item_helper_cat"] : null);
                echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




";
            }
            // line 667
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "add")) {
                // line 668
                echo "
                <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 671
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        <small>";
                // line 672
                echo twig_escape_filter($this->env, (isset($context["HELPER_add"]) ? $context["HELPER_add"] : null), "html", null, true);
                echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 675
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\"><a href=\"helper\">";
                // line 676
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\">";
                // line 677
                echo twig_escape_filter($this->env, (isset($context["HELPER_add"]) ? $context["HELPER_add"] : null), "html", null, true);
                echo "</li>
                    </ol>
                </section>
                
                
                
            <section class=\"content\">







                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <a href=\"";
                // line 700
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?add\"  class=\"btn btn-success btn-sm btn-block\"><i class=\"fa fa-file-o\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["HELPER_create"]) ? $context["HELPER_create"] : null), "html", null, true);
                echo "</a>
                    ";
                // line 701
                if (((isset($context["sc"]) ? $context["sc"] : null) == true)) {
                    // line 702
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "helper?edit_cats\" class=\"btn btn-default btn-sm btn-block\"><i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                    echo " </a>
                    ";
                }
                // line 704
                echo "<br>
                    <div class=\"callout \">
                                        
                                        <small> <i class=\"fa fa-info-circle\"></i> 
";
                // line 708
                echo twig_escape_filter($this->env, (isset($context["HELPER_add_info"]) ? $context["HELPER_add_info"] : null), "html", null, true);
                echo "
         </small>
                                    </div>
                        </div>
                        <div class=\"col-md-12\">
                            






                        </div>
                    </div>
                    
                                    
                                    
                                    
                    
                    
                    
                    </div>
                    
                    <div class=\"col-md-9\" id=\"\">
            <div class=\"box box-solid\">
            <div class=\"box-body\">
            <form class=\"form-horizontal\" role=\"form\">

                <div class=\"form-group\">
                    <label for=\"u\" class=\"col-md-2 control-label\"><small>";
                // line 737
                echo twig_escape_filter($this->env, (isset($context["HELPER_cat"]) ? $context["HELPER_cat"] : null), "html", null, true);
                echo ": </small></label>
                    <div class=\"col-md-10\">
                        <select style=\"height: 34px;\" data-placeholder=\"";
                // line 739
                echo twig_escape_filter($this->env, (isset($context["HELPER_cat"]) ? $context["HELPER_cat"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"cat\" name=\"cat_id\">
                            
";
                // line 741
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["catlist"]) ? $context["catlist"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 742
                    echo "
                                <option value=\"";
                    // line 743
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</option>

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 746
                echo "
                        </select>
                    </div>
                </div>



                <div class=\"form-group\">
                    <label for=\"u\" class=\"col-md-2 control-label\"><small>";
                // line 754
                echo twig_escape_filter($this->env, (isset($context["NEW_to"]) ? $context["NEW_to"] : null), "html", null, true);
                echo ": </small></label>
                    <div class=\"col-md-10\">
                        <select style=\"height: 34px;\" data-placeholder=\"";
                // line 756
                echo twig_escape_filter($this->env, (isset($context["NEW_to_unit"]) ? $context["NEW_to_unit"] : null), "html", null, true);
                echo "\" class=\"chosen-select form-control\" id=\"u\" name=\"unit_id\" multiple>
                            <option value=\"0\">";
                // line 757
                echo twig_escape_filter($this->env, (isset($context["HELP_all"]) ? $context["HELP_all"] : null), "html", null, true);
                echo "</option>
                            ";
                // line 758
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tolist"]) ? $context["tolist"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 759
                    echo "
                                <option value=\"";
                    // line 760
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</option>

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 763
                echo "
                        </select>
                    </div>
                </div>
                <div class=\"\">
                    <div class=\"\">
                        <div class=\"form-group\">

                            <label for=\"t\" class=\"col-sm-2 control-label\"><small>";
                // line 771
                echo twig_escape_filter($this->env, (isset($context["HELP_desc"]) ? $context["HELP_desc"] : null), "html", null, true);
                echo ": </small></label>

                            <div class=\"col-sm-10\">


                                <input  type=\"text\" name=\"fio\" class=\"form-control input-sm\" id=\"t\" placeholder=\"";
                // line 776
                echo twig_escape_filter($this->env, (isset($context["HELP_desc"]) ? $context["HELP_desc"] : null), "html", null, true);
                echo "\">



                            </div>



                        </div>






                    </div>
                        
                        
                        
                        <div class=\"form-group\">
  <label for=\"is_client\" class=\"col-sm-2 control-label\"><small>";
                // line 796
                echo twig_escape_filter($this->env, (isset($context["EXT_for_clients"]) ? $context["EXT_for_clients"] : null), "html", null, true);
                echo "</small></label>
  <div class=\"col-sm-10\">
  
  
  
      <div class=\"col-sm-10\">
      <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" id=\"is_client\"> ";
                // line 804
                echo twig_escape_filter($this->env, (isset($context["CONF_true"]) ? $context["CONF_true"] : null), "html", null, true);
                echo "
      <p class=\"help-block\"><small>";
                // line 805
                echo twig_escape_filter($this->env, (isset($context["EXT_for_clients_ext"]) ? $context["EXT_for_clients_ext"] : null), "html", null, true);
                echo "</small></p>
    </label>
  </div>
      </div>
  </div>
    </div>
                        
                        
                    <div class=\"form-group\">

                        <label for=\"t2\" class=\"col-sm-2 control-label\"><small>";
                // line 815
                echo twig_escape_filter($this->env, (isset($context["HELP_do"]) ? $context["HELP_do"] : null), "html", null, true);
                echo ": </small></label>

                        <div class=\"col-sm-10\">


                            <div id=\"summernote_help\"></div>
<div class=\"text-muted well well-sm no-shadow\" id=\"myid\" >
  <div class=\"dz-message\" data-dz-message>
<center class=\"text-muted\">";
                // line 823
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


                        </div>
                        <div class=\"col-md-12\"><hr></div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-10\">
                            <div class=\"btn-group btn-group-justified\">
                                <div class=\"btn-group\">
                                    <button id=\"do_create_help\" class=\"btn btn-success\" type=\"submit\"><i class=\"fa fa-check-circle-o\"></i> ";
                // line 866
                echo twig_escape_filter($this->env, (isset($context["HELP_create"]) ? $context["HELP_create"] : null), "html", null, true);
                echo "</button>
                                </div>
                                <input type=\"hidden\" id=\"manual_hash\" value=\"";
                // line 868
                echo twig_escape_filter($this->env, (isset($context["mdtime"]) ? $context["mdtime"] : null), "html", null, true);
                echo "\">
                                <div class=\"btn-group\">
                                    <a href=\"helper\" class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-reply\"></i> ";
                // line 870
                echo twig_escape_filter($this->env, (isset($context["HELP_back"]) ? $context["HELP_back"] : null), "html", null, true);
                echo "</a>
                                </div>
                            </div>


                        </div>
            </form>
            </div></div> </div></div> 
                
            </section>
            ";
            }
            // line 881
            if (((isset($context["h_check_type"]) ? $context["h_check_type"] : null) == "else")) {
                // line 882
                echo "

    <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-globe\"></i> ";
                // line 886
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "
                        <small>";
                // line 887
                echo twig_escape_filter($this->env, (isset($context["HELPER_title_ext"]) ? $context["HELPER_title_ext"] : null), "html", null, true);
                echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
                // line 890
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "index.php\"><span class=\"icon-svg\"></span> ";
                echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
                echo "</a></li>
                        <li class=\"active\">";
                // line 891
                echo twig_escape_filter($this->env, (isset($context["HELPER_title"]) ? $context["HELPER_title"] : null), "html", null, true);
                echo "</li>
                    </ol>
                </section>
                
                
                
            <section class=\"content\">


<div class=\"row\">
    
    <div class=\"col-md-12\">
        <div class=\"box box-solid\">
            <div class=\"box-body\"><div class=\"input-group\">
                        <input type=\"text\" class=\"form-control input-sm\" id=\"find_helper\" autofocus placeholder=\"";
                // line 905
                echo twig_escape_filter($this->env, (isset($context["HELPER_desc"]) ? $context["HELPER_desc"] : null), "html", null, true);
                echo "\">
      <span class=\"input-group-btn\">
        <button id=\"\" class=\"btn btn-default btn-sm\" type=\"submit\"><i class=\"fa fa-search\"></i> ";
                // line 907
                echo twig_escape_filter($this->env, (isset($context["HELPER_find"]) ? $context["HELPER_find"] : null), "html", null, true);
                echo "</button>
      </span>
                    </div>
            </div>
        </div>
    </div>
</div>




                    <!-- row -->
                    <div class=\"row\">
                    
                    
                    
                                        <div class=\"col-md-3\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <a href=\"";
                // line 927
                echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                echo "helper?add\"  class=\"btn btn-success btn-sm btn-block\"><i class=\"fa fa-file-o\"></i> ";
                echo twig_escape_filter($this->env, (isset($context["HELPER_create"]) ? $context["HELPER_create"] : null), "html", null, true);
                echo "</a>
                    ";
                // line 928
                if (((isset($context["sc4"]) ? $context["sc4"] : null) == true)) {
                    // line 929
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
                    echo "helper?edit_cats\" class=\"btn btn-default btn-sm btn-block\"><i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["HELP_cats_title"]) ? $context["HELP_cats_title"] : null), "html", null, true);
                    echo " </a>
                    ";
                }
                // line 931
                echo "<br>
                    <div class=\"callout \">
                                        
                                        <small> <i class=\"fa fa-info-circle\"></i> 
";
                // line 935
                echo twig_escape_filter($this->env, (isset($context["HELPER_info"]) ? $context["HELPER_info"] : null), "html", null, true);
                echo "
         </small>
                                    </div>
                        </div>
                        <div class=\"col-md-12\">
                            






                        </div>
                    </div>
                    
                                    
                                    
                                    
                    
                    
                    
                    </div>
                    
                    <div class=\"col-md-9\" id=\"help_content\">
                    
                    </div>
                    
                    
                    
                    
                    
                    </div>
            </section>    
                
                
                
                ";
            }
            // line 972
            echo "
                

 ";
        }
        // line 976
        echo "        
";
    }

    public function getTemplateName()
    {
        return "helper.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1479 => 976,  1473 => 972,  1433 => 935,  1427 => 931,  1419 => 929,  1417 => 928,  1411 => 927,  1388 => 907,  1383 => 905,  1366 => 891,  1360 => 890,  1354 => 887,  1350 => 886,  1344 => 882,  1342 => 881,  1328 => 870,  1323 => 868,  1318 => 866,  1272 => 823,  1261 => 815,  1248 => 805,  1244 => 804,  1233 => 796,  1210 => 776,  1202 => 771,  1192 => 763,  1181 => 760,  1178 => 759,  1174 => 758,  1170 => 757,  1166 => 756,  1161 => 754,  1151 => 746,  1140 => 743,  1137 => 742,  1133 => 741,  1128 => 739,  1123 => 737,  1091 => 708,  1085 => 704,  1077 => 702,  1075 => 701,  1069 => 700,  1043 => 677,  1039 => 676,  1033 => 675,  1027 => 672,  1023 => 671,  1018 => 668,  1016 => 667,  1002 => 656,  974 => 631,  967 => 627,  957 => 619,  949 => 617,  947 => 616,  941 => 615,  915 => 592,  911 => 591,  905 => 590,  899 => 587,  895 => 586,  889 => 582,  887 => 581,  872 => 569,  862 => 562,  848 => 551,  664 => 370,  658 => 366,  650 => 364,  648 => 363,  640 => 360,  614 => 337,  610 => 336,  604 => 335,  598 => 332,  594 => 331,  589 => 328,  586 => 327,  583 => 326,  580 => 325,  565 => 312,  557 => 307,  549 => 306,  545 => 305,  541 => 303,  539 => 302,  533 => 298,  526 => 296,  524 => 295,  514 => 292,  510 => 290,  494 => 276,  485 => 273,  481 => 272,  477 => 271,  471 => 267,  467 => 266,  459 => 261,  454 => 258,  452 => 257,  443 => 251,  439 => 250,  429 => 243,  410 => 231,  404 => 230,  398 => 229,  391 => 225,  384 => 220,  382 => 219,  367 => 207,  362 => 205,  355 => 203,  347 => 197,  331 => 183,  322 => 180,  318 => 179,  314 => 178,  310 => 177,  304 => 173,  300 => 172,  292 => 167,  287 => 164,  285 => 163,  240 => 121,  229 => 113,  221 => 108,  207 => 97,  203 => 96,  192 => 88,  175 => 76,  167 => 71,  157 => 63,  144 => 60,  141 => 59,  137 => 58,  131 => 57,  126 => 55,  120 => 52,  112 => 46,  99 => 43,  96 => 42,  92 => 41,  87 => 39,  82 => 37,  55 => 17,  49 => 16,  43 => 15,  36 => 11,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
