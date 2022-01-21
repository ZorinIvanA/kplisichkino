<?php

/* client.profile.view.tmpl */
class __TwigTemplate_276945de7619762892b313aeb178cd23589d65f4006ee3845d79a841494fcdb3 extends Twig_Template
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
                        <i class=\"fa fa-user\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile_ext"]) ? $context["NAVBAR_profile_ext"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



<input type=\"hidden\" id=\"main_last_new_ticket\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["get_last_ticket_new"]) ? $context["get_last_ticket_new"] : null), "html", null, true);
        echo "\">


<section class=\"content\">



<div class=\"row\">


<div class=\"col-md-3\">

<div class=\"row\">
  <div class=\"col-md-12\">
                            <div class=\"box box-warning\" >
                                <div class=\"box-header\" >
                                
                                    <h4 style=\"text-align:center;\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
        echo "<br><small>";
        echo twig_escape_filter($this->env, (isset($context["posada"]) ? $context["posada"] : null), "html", null, true);
        echo "</small></h4>

                                </div>
                                <div class=\"box-body\">
                                  
                        <center>
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["get_user_img"]) ? $context["get_user_img"] : null), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"User Image\">
                        </center><br>
                        
                        
                                <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "action\" method=\"post\" id=\"form_avatar\" enctype=\"multipart/form-data\"> 
             <input type=\"hidden\" name=\"mode\" value=\"set_user_avatar\">
             <span class=\"file-input btn btn-block btn-default btn-file\" style=\"width:100%\">
                ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["PROFILE_select_image"]) ? $context["PROFILE_select_image"] : null), "html", null, true);
        echo " <input id=\"file_avatar\" type=\"file\" name=\"file\">
            </span>
            <button id=\"del_profile_img\" class=\"btn btn-block bg-maroon\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["PROFILE_del_image"]) ? $context["PROFILE_del_image"] : null), "html", null, true);
        echo "</button>



        </form>
        
        
       
        
                           
                                    
                                    
                                </div><!-- /.box-body -->
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                          
  </div>
  
      
      
</div>


</div>

<div class=\"col-md-9\">


<div class=\"row\">

<div class=\"col-md-12\">
                            <div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-user\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["P_main"]) ? $context["P_main"] : null), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    
                                    
     
      <div class=\"panel-body\">
      


      
      <form class=\"form-horizontal\" role=\"form\">
      
          <div class=\"form-group\">
    <label for=\"fio\" class=\"col-sm-4 control-label\"><small>";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["WORKER_fio"]) ? $context["WORKER_fio"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"fio\" type=\"text\" class=\"form-control input-sm\" id=\"fio\" placeholder=\"fio\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
        echo "\">
        </div>
  </div>
  
  
  
  
    <div class=\"form-group\">
    <label for=\"mail\" class=\"col-sm-4 control-label\"><small>";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["P_mail"]) ? $context["P_mail"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"mail\" type=\"text\" class=\"form-control input-sm\" id=\"mail\" placeholder=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["P_mail"]) ? $context["P_mail"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
    <p class=\"help-block\"><small>";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["P_mail_desc"]) ? $context["P_mail_desc"] : null), "html", null, true);
        echo "</small></p>
        </div>
  </div>



        <div class=\"form-group\">
    <label for=\"pb\" class=\"col-sm-4 control-label\"><small>Pushbullet</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"push\" type=\"text\" class=\"form-control input-sm\" id=\"pb\" placeholder=\"push\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["push"]) ? $context["push"] : null), "html", null, true);
        echo "\">
        </div>
  </div>


  
      <div class=\"form-group\">
    <label for=\"tel\" class=\"col-sm-4 control-label\"><small>";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["WORKER_tel_full"]) ? $context["WORKER_tel_full"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"tel\" type=\"text\" class=\"form-control input-sm\" id=\"tel\" placeholder=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["WORKER_tel_full"]) ? $context["WORKER_tel_full"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "\">
    
        </div>
  </div>
  
        <div class=\"form-group\">
    <label for=\"skype\" class=\"col-sm-4 control-label\"><small>Skype</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"skype\" type=\"text\" class=\"form-control input-sm\" id=\"skype\" placeholder=\"skype\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["skype"]) ? $context["skype"] : null), "html", null, true);
        echo "\">
    
        </div>
  </div>
  
            <div class=\"form-group\">
    <label for=\"adr\" class=\"col-sm-4 control-label\"><small>";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"adr\" type=\"text\" class=\"form-control input-sm\" id=\"adr\" placeholder=\"adr\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["adr"]) ? $context["adr"] : null), "html", null, true);
        echo "\">
    
        </div>
  </div>
  
  
  
          <div class=\"form-group\">
    <label for=\"lang\" class=\"col-sm-4 control-label\"><small>";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["SYSTEM_lang"]) ? $context["SYSTEM_lang"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["SYSTEM_lang"]) ? $context["SYSTEM_lang"] : null), "html", null, true);
        echo "\" class=\"chosen-select form-control input-sm\" id=\"lang\" name=\"lang\">
                    <option value=\"0\"></option>
                    
                        <option ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["status_lang_en"]) ? $context["status_lang_en"] : null), "html", null, true);
        echo " value=\"en\">English</option>
                        <option ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["status_lang_ru"]) ? $context["status_lang_ru"] : null), "html", null, true);
        echo " value=\"ru\">Русский</option>
                        <option ";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["status_lang_ua"]) ? $context["status_lang_ua"] : null), "html", null, true);
        echo " value=\"ua\">Українська</option>
</select>
        </div>
  </div>
  
  
    <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_main_client\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["P_edit"]) ? $context["P_edit"] : null), "html", null, true);
        echo "</button>
</center>
</div>
      </form>
      
      
      
      
      
      </div>
      
      <div id=\"m_info\"></div>
                                </div><!-- /.box-body -->
                            </div>
                            
                            
                            
                            
                            
                            
                          
</div>



";
        // line 196
        if (((isset($context["ad_fields"]) ? $context["ad_fields"] : null) == true)) {
            // line 197
            echo "
<div class=\"col-md-12\">
<div class=\"box box-solid\">
<div class=\"box-header\">
<h3 class=\"box-title\"><i class=\"fa fa-bookmark-o\"></i> ";
            // line 201
            echo twig_escape_filter($this->env, (isset($context["FIELD_add_title"]) ? $context["FIELD_add_title"] : null), "html", null, true);
            echo "</h3>

</div>
      <div class=\"box-body\">
      <div class=\"panel-body\">
      
 <!--######### ADDITIONAL FIELDS ############## -->

<form id=\"add_field_form\" class=\"form-horizontal\" role=\"form\">
    <div >

";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ad_fields_arr"]) ? $context["ad_fields_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 213
                echo "                      <div class=\"\" id=\"\">
    <div class=\"\">
        <div class=\"form-group\">
            <label for=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" class=\"col-sm-4 control-label\"><small>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo ": </small></label>

            <div class=\"col-sm-8\" style=\" padding-top: 5px; \">
";
                // line 219
                if (($this->getAttribute($context["item"], "t_type", array()) == "date")) {
                    // line 220
                    echo "


<div class='input-group date' id='date_finish'>

                    <input id=\"";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" type='text' class=\"form-control input-sm d_finish\" data-date-format=\"YYYY-MM-DD\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vr", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" />
                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>



";
                }
                // line 233
                echo "
";
                // line 234
                if (($this->getAttribute($context["item"], "t_type", array()) == "text")) {
                    // line 235
                    echo "
<input type=\"text\" class=\"form-control input-sm\" name=\"";
                    // line 236
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" value='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vr", array()), "html", null, true);
                    echo "'>
";
                }
                // line 238
                if (($this->getAttribute($context["item"], "t_type", array()) == "textarea")) {
                    // line 239
                    echo "

<textarea rows=\"3\" class=\"form-control input-sm animated\" name=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vr", array()), "html", null, true);
                    echo "</textarea>
";
                }
                // line 243
                if (($this->getAttribute($context["item"], "t_type", array()) == "select")) {
                    // line 244
                    echo "<select data-placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" class=\"chosen-select form-control\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\">

";
                    // line 246
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "vr", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemf"]) {
                        // line 247
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "value", array()), "html", null, true);
                        echo "\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "sc", array()), "html", null, true);
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "value", array()), "html", null, true);
                        echo "</option>

                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemf'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 250
                    echo "                
                        
            </select>
";
                }
                // line 254
                if (($this->getAttribute($context["item"], "t_type", array()) == "multiselect")) {
                    // line 255
                    echo "




<select data-placeholder=\"";
                    // line 260
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" class=\"multi_field\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "[]\" multiple=\"multiple\" >

";
                    // line 262
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "vr", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemf"]) {
                        // line 263
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "value", array()), "html", null, true);
                        echo "\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "sc", array()), "html", null, true);
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemf"], "value", array()), "html", null, true);
                        echo "</option>

                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemf'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 266
                    echo "                
                        
            </select>
";
                }
                // line 270
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
            // line 279
            echo "</div>
    </form>
    
<!--######### ADDITIONAL FIELDS ############## -->
    <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_ad_f\" value=\"";
            // line 285
            echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["P_edit"]) ? $context["P_edit"] : null), "html", null, true);
            echo "</button>
</center>
</div>
</div><div id=\"ad_f_res\"></div>

      </div>
      </div>
      </div>

";
        }
        // line 295
        echo "

";
        // line 297
        if (((isset($context["tfiles"]) ? $context["tfiles"] : null) == true)) {
            // line 298
            echo "<div class=\"col-md-12\">
<div class=\"box box-solid\">
<div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-file\"></i> ";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
            echo "</h3>
                                </div><!-- /.box-header -->
<div class=\"box-body\">

                    
                        <div class=\"row\" style=\"padding:10px;\">

                        <div class=\"col-md-12\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                
                          ";
            // line 312
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tfiles_arr"]) ? $context["tfiles_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "          
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                // line 316
                echo $this->getAttribute($context["item"], "ic", array());
                echo "</small></td>
                        <td><small>";
                // line 317
                echo $this->getAttribute($context["item"], "ct", array());
                echo "</small></td>
                        <td><small>";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true);
                echo " Mb</small></td>
                        
                    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>


</div>
</div>
</div>
";
        }
        // line 339
        echo "

<div class=\"col-md-12\">
<div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-bell\"></i> ";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["PROFILE_perf_notify"]) ? $context["PROFILE_perf_notify"] : null), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                <div class=\"panel-body\">

<form class=\"form-horizontal\" role=\"form\">


              <div class=\"form-group\">
    <label for=\"mail_nf\" class=\"col-sm-4 control-label\"><small>";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["CONF_mail_status"]) ? $context["CONF_mail_status"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 355
        echo twig_escape_filter($this->env, (isset($context["CONF_mail_status"]) ? $context["CONF_mail_status"] : null), "html", null, true);
        echo "\" class=\"multi_field\" id=\"mail_nf\" name=\"mail_nf[]\" multiple=\"multiple\" >

";
        // line 357
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_arr"]) ? $context["mail_arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 358
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sc", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
            echo "</option>


              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "                        
            </select>
        </div>
  </div>



  

  <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_nf\" value=\"";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["P_edit"]) ? $context["P_edit"] : null), "html", null, true);
        echo "</button>
</center>
</div>
</form>
                                </div>
<div id=\"nf_info\"></div>



                                </div>
                                </div>
</div>


<div class=\"col-md-12\">
";
        // line 388
        if (((isset($context["canChangePw"]) ? $context["canChangePw"] : null) == true)) {
            // line 389
            echo "
                       <div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-key\"></i> ";
            // line 392
            echo twig_escape_filter($this->env, (isset($context["P_passedit"]) ? $context["P_passedit"] : null), "html", null, true);
            echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                <div class=\"panel-body\">
      <form class=\"form-horizontal\" role=\"form\">
      
              <div class=\"form-group\">
    <label for=\"old_pass\" class=\"col-sm-4 control-label\"><small>";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["P_pass_old"]) ? $context["P_pass_old"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"old_pass\" type=\"password\" class=\"form-control input-sm\" id=\"old_pass\" placeholder=\"";
            // line 401
            echo twig_escape_filter($this->env, (isset($context["P_pass_old2"]) ? $context["P_pass_old2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
      
      
        <div class=\"form-group\">
    <label for=\"new_pass\" class=\"col-sm-4 control-label\"><small>";
            // line 407
            echo twig_escape_filter($this->env, (isset($context["P_pass_new"]) ? $context["P_pass_new"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"new_pass\" type=\"password\" class=\"form-control input-sm\" id=\"new_pass\" placeholder=\"";
            // line 409
            echo twig_escape_filter($this->env, (isset($context["P_pass_new2"]) ? $context["P_pass_new2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
          <div class=\"form-group\">
    <label for=\"new_pass2\" class=\"col-sm-4 control-label\"><small>";
            // line 414
            echo twig_escape_filter($this->env, (isset($context["P_pass_new_re"]) ? $context["P_pass_new_re"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"new_pass2\" type=\"password\" class=\"form-control input-sm\" id=\"new_pass2\" placeholder=\"";
            // line 416
            echo twig_escape_filter($this->env, (isset($context["P_pass_new_re2"]) ? $context["P_pass_new_re2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_pass\" value=\"";
            // line 421
            echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["P_do_edit_pass"]) ? $context["P_do_edit_pass"] : null), "html", null, true);
            echo "</button>
</center>
</div>
  
  
      </form>
  
      </div>
      <div id=\"p_info\"></div>
                                </div>
                       </div>
                                
                     

";
        }
        // line 436
        echo "</div>
</div>


</div>


</div>


                    
                    
                    </section>
                    
                    
                    
                    
                    
                    ";
    }

    public function getTemplateName()
    {
        return "client.profile.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 436,  735 => 421,  727 => 416,  722 => 414,  714 => 409,  709 => 407,  700 => 401,  695 => 399,  685 => 392,  680 => 389,  678 => 388,  658 => 373,  645 => 362,  630 => 358,  626 => 357,  621 => 355,  616 => 353,  604 => 344,  597 => 339,  578 => 322,  568 => 318,  564 => 317,  560 => 316,  551 => 312,  537 => 301,  532 => 298,  530 => 297,  526 => 295,  511 => 285,  503 => 279,  489 => 270,  483 => 266,  469 => 263,  465 => 262,  456 => 260,  449 => 255,  447 => 254,  441 => 250,  427 => 247,  423 => 246,  413 => 244,  411 => 243,  400 => 241,  396 => 239,  394 => 238,  383 => 236,  380 => 235,  378 => 234,  375 => 233,  358 => 225,  351 => 220,  349 => 219,  341 => 216,  336 => 213,  332 => 212,  318 => 201,  312 => 197,  310 => 196,  280 => 171,  269 => 163,  265 => 162,  261 => 161,  255 => 158,  250 => 156,  239 => 148,  234 => 146,  225 => 140,  212 => 132,  207 => 130,  197 => 123,  185 => 114,  179 => 113,  174 => 111,  163 => 103,  158 => 101,  141 => 87,  97 => 46,  92 => 44,  86 => 41,  79 => 37,  68 => 31,  48 => 14,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
