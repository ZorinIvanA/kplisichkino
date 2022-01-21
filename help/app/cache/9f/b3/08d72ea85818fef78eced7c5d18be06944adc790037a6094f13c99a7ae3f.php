<?php

/* profile.view.tmpl */
class __TwigTemplate_9fb308d72ea85818fef78eced7c5d18be06944adc790037a6094f13c99a7ae3f extends Twig_Template
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
<section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-user\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "
                        <small>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile_ext"]) ? $context["NAVBAR_profile_ext"] : null), "html", null, true);
        echo "</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                       <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "index.php\"><span class=\"icon-svg\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "</a></li>
                        <li class=\"active\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>



<input type=\"hidden\" id=\"main_last_new_ticket\" value=\"";
        // line 15
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
        // line 36
        echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
        echo "<br><small>
                                    ";
        // line 37
        echo (isset($context["get_user_val_posada"]) ? $context["get_user_val_posada"] : null);
        echo "


                                    </small></h4>

                                </div>
                                <div class=\"box-body\">
                                  
                        <center>
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["get_user_img"]) ? $context["get_user_img"] : null), "html", null, true);
        echo "\" class=\"img-rounded img-responsive\" alt=\"User Image\">
                        </center><br>
                        
                        
                                <form action=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "action\" method=\"post\" id=\"form_avatar\" enctype=\"multipart/form-data\"> 
             
             <span class=\"file-input btn btn-block btn-default btn-file\" style=\"width:100%\">
                ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["PROFILE_select_image"]) ? $context["PROFILE_select_image"] : null), "html", null, true);
        echo " 
                <input id=\"file_avatar\" type=\"file\" name=\"file\">
                <input type=\"hidden\" name=\"mode\" value=\"set_user_avatar\">
            </span>
            <button id=\"del_profile_img\" class=\"btn btn-block bg-maroon\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["PROFILE_del_image"]) ? $context["PROFILE_del_image"] : null), "html", null, true);
        echo "</button>



        </form>
        
        
       
        
                           
                                    
                                    
                                </div><!-- /.box-body -->
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                          
  </div>
  <div class=\"col-md-12\">      
  
  
  
  <div class=\"box box-info\">
                                
                                <div class=\"box-body\">
                                    
                                    <strong ><small>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["PROFILE_priv"]) ? $context["PROFILE_priv"] : null), "html", null, true);
        echo ":</small></strong><br>
                  <small>";
        // line 91
        echo (isset($context["priv_status_name"]) ? $context["priv_status_name"] : null);
        echo "</small>
                                    <hr>
                                    <strong><small>";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["PROFILE_priv_unit"]) ? $context["PROFILE_priv_unit"] : null), "html", null, true);
        echo ":</small></strong>
                                    <p><small>";
        // line 94
        echo (isset($context["units_u"]) ? $context["units_u"] : null);
        echo "</small></p>
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
        // line 116
        echo twig_escape_filter($this->env, (isset($context["P_main"]) ? $context["P_main"] : null), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    
                                    
     
      <div class=\"panel-body\">
      


      
      <form class=\"form-horizontal\" role=\"form\">
      

  
      <div class=\"form-group\" id=\"fio_user_grp\">
    <label for=\"fio\" class=\"col-sm-4 control-label\"><small>";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["WORKER_fio"]) ? $context["WORKER_fio"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"fio\" type=\"text\" class=\"form-control input-sm\" id=\"fio\" placeholder=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["WORKER_fio"]) ? $context["WORKER_fio"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["fio"]) ? $context["fio"] : null), "html", null, true);
        echo "\">
        </div>
  </div>
  
  
    <div class=\"form-group\">
    <label for=\"mail\" class=\"col-sm-4 control-label\"><small>";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["P_mail"]) ? $context["P_mail"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"mail\" type=\"text\" class=\"form-control input-sm\" id=\"mail\" placeholder=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["P_mail"]) ? $context["P_mail"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
    <p class=\"help-block\"><small>";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["P_mail_desc"]) ? $context["P_mail_desc"] : null), "html", null, true);
        echo "</small></p>
        </div>
  </div>

        <div class=\"form-group\">
    <label for=\"pb\" class=\"col-sm-4 control-label\"><small>Pushbullet</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"push\" type=\"text\" class=\"form-control input-sm\" id=\"pb\" placeholder=\"push\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["push"]) ? $context["push"] : null), "html", null, true);
        echo "\">
        </div>
  </div>
  
      <div class=\"form-group\">
    <label for=\"tel\" class=\"col-sm-4 control-label\"><small>";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["WORKER_tel_full"]) ? $context["WORKER_tel_full"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"tel\" type=\"text\" class=\"form-control input-sm\" id=\"tel\" placeholder=\"";
        // line 157
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
        // line 165
        echo twig_escape_filter($this->env, (isset($context["skype"]) ? $context["skype"] : null), "html", null, true);
        echo "\">
    
        </div>
  </div>
  
          <div class=\"form-group\">
    <label for=\"adr\" class=\"col-sm-4 control-label\"><small>";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"adr\" type=\"text\" class=\"form-control input-sm\" id=\"adr\" placeholder=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["APPROVE_adr"]) ? $context["APPROVE_adr"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["adr"]) ? $context["adr"] : null), "html", null, true);
        echo "\">
    
        </div>
  </div>
  
  
  
  
     <div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"form-group\">
            <label for=\"posada\" class=\"col-sm-4 control-label\"><small>";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
        echo ": </small></label>
            <div class=\"col-sm-8\" style=\"\">
                <select name=\"posada\" id=\"posada\" data-placeholder=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["WORKER_posada"]) ? $context["WORKER_posada"] : null), "html", null, true);
        echo "\" class=\"chosen-select form-control input-sm\">
                    <option value=\"0\"></option>
   

";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pos_arr"]) ? $context["pos_arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 191
            echo "
                        <option ";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "se", array()), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
                </select>
            </div>
        </div>

    </div>
</div>

                                
 
  
  
  
  
          <div class=\"form-group\">
    <label for=\"lang\" class=\"col-sm-4 control-label\"><small>";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["SYSTEM_lang"]) ? $context["SYSTEM_lang"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["SYSTEM_lang"]) ? $context["SYSTEM_lang"] : null), "html", null, true);
        echo "\" class=\"chosen-select form-control input-sm\" id=\"lang\" name=\"lang\">
                    <option value=\"0\"></option>
                    
                        <option ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["status_lang_en"]) ? $context["status_lang_en"] : null), "html", null, true);
        echo " value=\"en\">English</option>
                        <option ";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["status_lang_ru"]) ? $context["status_lang_ru"] : null), "html", null, true);
        echo " value=\"ru\">Русский</option>
                        <option ";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["status_lang_ua"]) ? $context["status_lang_ua"] : null), "html", null, true);
        echo " value=\"ua\">Українська</option>
</select>
        </div>
  </div>


            <div class=\"form-group\">
    <label for=\"noty\" class=\"col-sm-4 control-label\"><small>";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["NOTY_layot"]) ? $context["NOTY_layot"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["NOTY_layot"]) ? $context["NOTY_layot"] : null), "html", null, true);
        echo "\" class=\"chosen-select form-control input-sm\" id=\"noty\" name=\"noty\">
                    <option value=\"0\"></option>
                    
                        <option ";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_top"]) ? $context["check_user_noty_layot_top"] : null), "html", null, true);
        echo "value=\"top\">Top</option>
                        <option ";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_topLeft"]) ? $context["check_user_noty_layot_topLeft"] : null), "html", null, true);
        echo " value=\"topLeft\">TopLeft</option>
                        <option ";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_topCenter"]) ? $context["check_user_noty_layot_topCenter"] : null), "html", null, true);
        echo " value=\"topCenter\">TopCenter</option>
                        <option ";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_topRight"]) ? $context["check_user_noty_layot_topRight"] : null), "html", null, true);
        echo " value=\"topRight\">TopRight</option>         

                        <option ";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_centerLeft"]) ? $context["check_user_noty_layot_centerLeft"] : null), "html", null, true);
        echo " value=\"centerLeft\">CenterLeft</option>                        
                        <option ";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_center"]) ? $context["check_user_noty_layot_center"] : null), "html", null, true);
        echo " value=\"center\">Center</option>                        
                        <option ";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_centerRight"]) ? $context["check_user_noty_layot_centerRight"] : null), "html", null, true);
        echo " value=\"centerRight\">CenterRight</option>    

                        <option ";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_bottomLeft"]) ? $context["check_user_noty_layot_bottomLeft"] : null), "html", null, true);
        echo " value=\"bottomLeft\">BottomLeft</option>       
                        <option ";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_bottomCenter"]) ? $context["check_user_noty_layot_bottomCenter"] : null), "html", null, true);
        echo " value=\"bottomCenter\">BottomCenter</option> 
                        <option ";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_bottomRight"]) ? $context["check_user_noty_layot_bottomRight"] : null), "html", null, true);
        echo " value=\"bottomRight\">BottomRight</option> 
                        <option ";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["check_user_noty_layot_bottom"]) ? $context["check_user_noty_layot_bottom"] : null), "html", null, true);
        echo " value=\"bottom\">Bottom</option>                  
</select>
        </div>
  </div>


  
  
    <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_main\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["usid"]) ? $context["usid"] : null), "html", null, true);
        echo "\"
     class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i> ";
        // line 252
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
        // line 276
        if (((isset($context["ufields"]) ? $context["ufields"] : null) == true)) {
            // line 277
            echo "
<div class=\"col-md-12\">
<div class=\"box box-solid\">
<div class=\"box-header\">
<h3 class=\"box-title\"><i class=\"fa fa-bookmark-o\"></i> ";
            // line 281
            echo twig_escape_filter($this->env, (isset($context["FIELD_add_title"]) ? $context["FIELD_add_title"] : null), "html", null, true);
            echo "</h3>

</div>
      <div class=\"box-body\">
      <div class=\"panel-body\">
      
 <!--######### ADDITIONAL FIELDS ############## -->

<form id=\"add_field_form\" class=\"form-horizontal\" role=\"form\">
    <div >
";
            // line 291
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields_arr"]) ? $context["fields_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 292
                echo "
                      <div class=\"\" id=\"\">
    <div class=\"\">
        <div class=\"form-group\">
            <label for=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                echo "\" class=\"col-sm-4 control-label\"><small>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo ": </small></label>

            <div class=\"col-sm-8\" style=\" padding-top: 5px; \">

";
                // line 300
                if (($this->getAttribute($context["item"], "t_type", array()) == "date")) {
                    // line 301
                    echo "<div class='input-group date' id='date_finish'>

                    <input id=\"";
                    // line 303
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" type='text' class=\"form-control input-sm d_finish\" data-date-format=\"YYYY-MM-DD\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
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
                // line 309
                echo "
";
                // line 310
                if (($this->getAttribute($context["item"], "t_type", array()) == "text")) {
                    // line 311
                    echo "<input type=\"text\" class=\"form-control input-sm\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" value='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                    echo "'>

";
                }
                // line 314
                echo "
";
                // line 315
                if (($this->getAttribute($context["item"], "t_type", array()) == "textarea")) {
                    // line 316
                    echo "<textarea rows=\"3\" class=\"form-control input-sm animated\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                    echo "</textarea>
";
                }
                // line 318
                echo "

";
                // line 320
                if (($this->getAttribute($context["item"], "t_type", array()) == "select")) {
                    // line 321
                    echo "<select data-placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" class=\"chosen-select form-control\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\">

";
                    // line 323
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "v", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                        // line 324
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "value", array()), "html", null, true);
                        echo "\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "sc", array()), "html", null, true);
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "value", array()), "html", null, true);
                        echo "</option>

                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 327
                    echo "                
                        
            </select>
";
                }
                // line 331
                if (($this->getAttribute($context["item"], "t_type", array()) == "multiselect")) {
                    // line 332
                    echo "




<select data-placeholder=\"";
                    // line 337
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                    echo "\" class=\"multi_field\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hash", array()), "html", null, true);
                    echo "[]\" multiple >

";
                    // line 339
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "v", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["items2"]) {
                        // line 340
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items2"], "value", array()), "html", null, true);
                        echo "\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items2"], "sc", array()), "html", null, true);
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["items2"], "value", array()), "html", null, true);
                        echo "</option>

                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 343
                    echo "                
                        
            </select>
";
                }
                // line 347
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
            // line 355
            echo "    
</div>
    </form>
    





<!--######### ADDITIONAL FIELDS ############## -->
    <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_ad_f\" value=\"";
            // line 367
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
        // line 376
        echo "
";
        // line 377
        if (((isset($context["tfiles"]) ? $context["tfiles"] : null) == true)) {
            // line 378
            echo "<div class=\"col-md-12\">
<div class=\"box box-solid\">
<div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-file\"></i> ";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["TICKET_file_list"]) ? $context["TICKET_file_list"] : null), "html", null, true);
            echo "</h3>
                                </div><!-- /.box-header -->
<div class=\"box-body\">

                    
                        <div class=\"row\" style=\"padding:10px;\">

                        <div class=\"col-md-12\">
                            <table class=\"table table-hover\">
                                    <tbody>
                                
                          ";
            // line 392
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tfiles_arr"]) ? $context["tfiles_arr"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "          
                                    
                                    
                    <tr>
                        <td style=\"width:20px;\"><small>";
                // line 396
                echo $this->getAttribute($context["item"], "ic", array());
                echo "</small></td>
                        <td><small>";
                // line 397
                echo $this->getAttribute($context["item"], "ct", array());
                echo "</small></td>
                        <td><small>";
                // line 398
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true);
                echo " Mb</small></td>
                    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                                    </tbody>
                            </table>

                        </div>
                        
                        
                        
                        
                        
                        
                    </div>


</div>
</div>
</div>
";
        }
        // line 418
        echo "
<div class=\"col-md-12\">
<div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-bell\"></i> ";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["PROFILE_perf_notify"]) ? $context["PROFILE_perf_notify"] : null), "html", null, true);
        echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                <div class=\"panel-body\">

<form class=\"form-horizontal\" role=\"form\">


              <div class=\"form-group\">
    <label for=\"mail_nf\" class=\"col-sm-4 control-label\"><small>";
        // line 431
        echo twig_escape_filter($this->env, (isset($context["CONF_mail_status"]) ? $context["CONF_mail_status"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 433
        echo twig_escape_filter($this->env, (isset($context["CONF_mail_status"]) ? $context["CONF_mail_status"] : null), "html", null, true);
        echo "\" class=\"multi_field\" id=\"mail_nf\" name=\"mail_nf[]\" multiple=\"multiple\" >

";
        // line 435
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mailnf_arr"]) ? $context["mailnf_arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 436
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
        // line 439
        echo "  
                        
            </select>
        </div>
  </div>


              <div class=\"form-group\">
    <label for=\"sms_nf\" class=\"col-sm-4 control-label\"><small>";
        // line 447
        echo twig_escape_filter($this->env, (isset($context["EXT_sms_noti"]) ? $context["EXT_sms_noti"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">
    <select data-placeholder=\"";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["EXT_sms_noti"]) ? $context["EXT_sms_noti"] : null), "html", null, true);
        echo "\" class=\"multi_field\" id=\"sms_nf\" name=\"sms_nf[]\" multiple=\"multiple\" >

";
        // line 451
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smsc_arr"]) ? $context["smsc_arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 452
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
        // line 455
        echo "  
                        
            </select>
        </div>
  </div>

          <div class=\"form-group\">
    <label for=\"mob\" class=\"col-sm-4 control-label\"><small>";
        // line 462
        echo twig_escape_filter($this->env, (isset($context["EXT_SMS_noti_mob"]) ? $context["EXT_SMS_noti_mob"] : null), "html", null, true);
        echo "</small></label>
        <div class=\"col-sm-8\">

<div class=\"input-group\">
    <span class=\"input-group-addon\"><small>+</small></span>
      
   


    <input autocomplete=\"off\" name=\"mob\" type=\"text\" class=\"form-control input-sm\" id=\"mob\" placeholder=\"Ex. 380501234567\" value=\"";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["mob"]) ? $context["mob"] : null), "html", null, true);
        echo "\">
    </div>
        </div>
  </div>

  <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_nf\" value=\"";
        // line 478
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
        // line 492
        if (((isset($context["check_ldap_user"]) ? $context["check_ldap_user"] : null) == true)) {
            // line 493
            echo "
                       <div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-key\"></i> ";
            // line 496
            echo twig_escape_filter($this->env, (isset($context["P_passedit"]) ? $context["P_passedit"] : null), "html", null, true);
            echo "</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                <div class=\"panel-body\">
      <form class=\"form-horizontal\" role=\"form\">
      
              <div class=\"form-group\">
    <label for=\"old_pass\" class=\"col-sm-4 control-label\"><small>";
            // line 503
            echo twig_escape_filter($this->env, (isset($context["P_pass_old"]) ? $context["P_pass_old"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"old_pass\" type=\"password\" class=\"form-control input-sm\" id=\"old_pass\" placeholder=\"";
            // line 505
            echo twig_escape_filter($this->env, (isset($context["P_pass_old2"]) ? $context["P_pass_old2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
      
      
        <div class=\"form-group\">
    <label for=\"new_pass\" class=\"col-sm-4 control-label\"><small>";
            // line 511
            echo twig_escape_filter($this->env, (isset($context["P_pass_new"]) ? $context["P_pass_new"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"new_pass\" type=\"password\" class=\"form-control input-sm\" id=\"new_pass\" placeholder=\"";
            // line 513
            echo twig_escape_filter($this->env, (isset($context["P_pass_new2"]) ? $context["P_pass_new2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  
          <div class=\"form-group\">
    <label for=\"new_pass2\" class=\"col-sm-4 control-label\"><small>";
            // line 518
            echo twig_escape_filter($this->env, (isset($context["P_pass_new_re"]) ? $context["P_pass_new_re"] : null), "html", null, true);
            echo "</small></label>
        <div class=\"col-sm-8\">
    <input autocomplete=\"off\" name=\"new_pass2\" type=\"password\" class=\"form-control input-sm\" id=\"new_pass2\" placeholder=\"";
            // line 520
            echo twig_escape_filter($this->env, (isset($context["P_pass_new_re2"]) ? $context["P_pass_new_re2"] : null), "html", null, true);
            echo "\">
        </div>
  </div>
  <div class=\"col-md-offset-3 col-md-6\">
<center>
    <button type=\"submit\" id=\"edit_profile_pass\" value=\"";
            // line 525
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
        // line 540
        echo "</div>

<div class=\"col-md-12\">
";
        // line 543
        if (((isset($context["api_status"]) ? $context["api_status"] : null) == true)) {
            // line 544
            echo "

<div class=\"box box-solid\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\"><i class=\"fa fa-key\"></i> API code</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                <div class=\"panel-body\">
                                <pre><strong id=\"api_code\">";
            // line 552
            echo twig_escape_filter($this->env, (isset($context["api_key"]) ? $context["api_key"] : null), "html", null, true);
            echo "</strong> <button class=\"pull-right btn btn-default btn-xs\" id=\"gen_new_api\"><i class=\"fa fa-refresh\"></i></button></pre>
                                </div>
                                </div>


";
        }
        // line 558
        echo "</div>
</div>


</div>


</div>


                    
                    
                    
                    
                    
                    
                    
                    
                    </div>

                    </section>";
    }

    public function getTemplateName()
    {
        return "profile.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  997 => 558,  988 => 552,  978 => 544,  976 => 543,  971 => 540,  951 => 525,  943 => 520,  938 => 518,  930 => 513,  925 => 511,  916 => 505,  911 => 503,  901 => 496,  896 => 493,  894 => 492,  875 => 478,  865 => 471,  853 => 462,  844 => 455,  829 => 452,  825 => 451,  820 => 449,  815 => 447,  805 => 439,  790 => 436,  786 => 435,  781 => 433,  776 => 431,  764 => 422,  758 => 418,  739 => 401,  730 => 398,  726 => 397,  722 => 396,  713 => 392,  699 => 381,  694 => 378,  692 => 377,  689 => 376,  675 => 367,  661 => 355,  648 => 347,  642 => 343,  628 => 340,  624 => 339,  615 => 337,  608 => 332,  606 => 331,  600 => 327,  586 => 324,  582 => 323,  572 => 321,  570 => 320,  566 => 318,  554 => 316,  552 => 315,  549 => 314,  536 => 311,  534 => 310,  531 => 309,  516 => 303,  512 => 301,  510 => 300,  501 => 296,  495 => 292,  491 => 291,  478 => 281,  472 => 277,  470 => 276,  443 => 252,  439 => 251,  426 => 241,  422 => 240,  418 => 239,  414 => 238,  409 => 236,  405 => 235,  401 => 234,  396 => 232,  392 => 231,  388 => 230,  384 => 229,  378 => 226,  373 => 224,  363 => 217,  359 => 216,  355 => 215,  349 => 212,  344 => 210,  327 => 195,  314 => 192,  311 => 191,  307 => 190,  300 => 186,  295 => 184,  279 => 173,  274 => 171,  265 => 165,  252 => 157,  247 => 155,  239 => 150,  229 => 143,  223 => 142,  218 => 140,  207 => 134,  202 => 132,  183 => 116,  158 => 94,  154 => 93,  149 => 91,  145 => 90,  109 => 57,  102 => 53,  96 => 50,  89 => 46,  77 => 37,  73 => 36,  49 => 15,  40 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
