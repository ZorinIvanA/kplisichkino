<?php

/* news.view.tmpl */
class __TwigTemplate_e164ec5a43063513af945f1c1b872d3e401aa598b22b2e6e33bf58112855bf01 extends Twig_Template
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
        echo " <section class=\"content-header\">
                    <h1>
                        <i class=\"fa fa-bullhorn\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_news"]) ? $context["NAVBAR_news"] : null), "html", null, true);
        echo "
                        <small>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_last_news"]) ? $context["DASHBOARD_last_news"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_news"]) ? $context["NAVBAR_news"] : null), "html", null, true);
        echo "</li>
                    </ol>
                </section>
                
                
                
<section class=\"content\">

                    <!-- row -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                        
                        

                        
                            <!-- The time line -->
                            <ul class=\"timeline\">








";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_arr"]) ? $context["news_arr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                    
                                <li class=\"time-label\" style=\" font-size: 10px; \">
                                    <span class=\"bg-blue\">
                                    

            ";
            // line 39
            if (($this->getAttribute($context["item"], "today", array()) == $this->getAttribute($context["item"], "re_date", array()))) {
                // line 40
                echo "
                ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_today", array()), "html", null, true);
                echo " (<time id=\"d\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_op", array()), "html", null, true);
                echo "\"></time>)
           ";
            }
            // line 43
            echo "            ";
            if (($this->getAttribute($context["item"], "today", array()) != $this->getAttribute($context["item"], "re_date", array()))) {
                // line 44
                echo "                <time id=\"d\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_op", array()), "html", null, true);
                echo " \"></time>
            ";
            }
            // line 46
            echo "
                                    
                                    </span>
                                </li>
                               
                    
        
       
";
            // line 54
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_lock")) {
                // line 55
                echo "                    <li>
                                    <i class=\"fa fa-lock bg-yellow\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> 
                                        <time id=\"c\" datetime=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
                                        <h3 class=\"timeline-header\"><a href=\"view_user?";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a> 
                                        ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_lock", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a></h3>
<div class=\"timeline-body\">


                                ";
                // line 65
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
                                    </div>
                                </li>
                                ";
            }
            // line 72
            echo "


";
            // line 75
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_unlock")) {
                // line 76
                echo "                    <li>
                                    <i class=\"fa fa-unlock bg-maroon\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
                                        <h3 class=\"timeline-header\"><a href=\"view_user?";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_unlock", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a></h3>
<div class=\"timeline-body\">


                                ";
                // line 87
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
<div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-maroon\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </li>
                                
                                
                                
                                
                                
                                ";
            }
            // line 102
            echo "                                ";
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_ok")) {
                // line 103
                echo "                    
                    <li>
                                    <i class=\"fa fa-check-circle-o bg-green\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
                                        <h3 class=\"timeline-header\"><a href=\"view_user?";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_ok", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a></h3>
                                         
                                         <div class=\"timeline-body\">


                                ";
                // line 116
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
                                        <div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-green\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </li>
                               
";
            }
            // line 126
            echo "                                
";
            // line 127
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_no_ok")) {
                // line 128
                echo "                    <li>
                                    <i class=\"fa fa-circle-o bg-red\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
                                        <h3 class=\"timeline-header\"><a href=\"view_user?";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_no_ok", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a>, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_no_ok2", array()), "html", null, true);
                echo "</h3>
                                         <div class=\"timeline-body\">


                                ";
                // line 139
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
                                         
                                         
                                        <div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                         
                                    </div>
                                </li>
                                
                                
                                
                                
                                
  ";
            }
            // line 156
            echo "                                
";
            // line 157
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_refer")) {
                echo "                              
                                
                    
                    <li>
                                    <i class=\"fa fa fa-share bg-blue\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
                                        <h3 class=\"timeline-header\"><a href=\"view_user?";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 167
                echo $this->getAttribute($context["item"], "NEWS_action_refer", array());
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mail_msg_ticket_to_ext", array()), "html", null, true);
                echo " ";
                echo $this->getAttribute($context["item"], "to_text", array());
                echo " </h3>
                                        <div class=\"timeline-body\">


                               ";
                // line 171
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
                                        
                                    </div>
                     </li>
                                
                                
                                
                                
                                
                                
                                
";
            }
            // line 185
            echo "                                
";
            // line 186
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_comment")) {
                echo " 

                    <li>
                                    <i class=\"fa fa-comments bg-purple\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> <time id=\"c\" datetime=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small></span>
<h3 class=\"timeline-header \"><a href=\"view_user?";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_comment", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a></h3>
                                         <div class=\"timeline-body\">


                                ";
                // line 199
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            <br><br>
                            
                            


                                           <div class=\"callout\" style=\" margin: 0px; padding-bottom: 5px; padding-top: 5px;\">
                                        <small class=\"text-muted\"><em>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_text_comment", array()), "html", null, true);
                echo ":</em></small>
                                        <small><p>
                                            
                                            ";
                // line 209
                echo $this->getAttribute($context["item"], "ct", array());
                echo "
                                            
                                            
                                            
                                            </p></small>
                                    </div>
                                        
                                           
                                        </div>
                                        <div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-purple\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </li>
";
            }
            // line 223
            echo "                                
";
            // line 224
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_create")) {
                echo "    
                    
                    <li>
                                    <i class=\"fa fa-tag bg-aqua\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> 
                                        <time id=\"c\" datetime=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small>
                                        </span>
                                        <h3 class=\"timeline-header \"><a href=\"view_user?";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "initUserHash", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "initUserName", array());
                echo "</a>
                                        
                                        
                                         ";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_create", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a></h3>
                                        <div class=\"timeline-body\">


                                ";
                // line 239
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
 <div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-aqua\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </li>
                                
                                
                                
                                
                                
";
            }
            // line 253
            echo "                                
";
            // line 254
            if (($this->getAttribute($context["item"], "msg", array()) == "ticket_arch")) {
                echo "         
                    
                    <li>
                                    <i class=\"fa fa-archive bg-gray\"></i>
                                    <div class=\"timeline-item\">
                                        <span class=\"time\"><small><i class=\"fa fa-clock-o\"></i> 
                                        <time id=\"c\" datetime=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "t_dc", array()), "html", null, true);
                echo "\"></time></small>
                                        </span>
                                        <h3 class=\"timeline-header \">
                                        
                                        
                                         ";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "FILES_ticket", array()), "html", null, true);
                echo " <a href=\"ticket?";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketID", array()), "html", null, true);
                echo "</a> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "NEWS_action_ticket_arch", array()), "html", null, true);
                echo "</h3>
                                        <div class=\"timeline-body\">


                                 ";
                // line 269
                echo $this->getAttribute($context["item"], "htmlMSG", array());
                echo "...
                            
                                           
                                        </div>
 <div class=\"timeline-footer\">
                                            <a href=\"ticket?";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ticketHash", array()), "html", null, true);
                echo "\" class=\"btn btn-xs bg-gray\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "EXT_news_view_t", array()), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </li>
";
            }
            // line 278
            echo "  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "







                                <li>
                                    <i class=\"fa fa-clock-o\"></i>
                                </li>
                            </ul>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    

                </section>";
    }

    public function getTemplateName()
    {
        return "news.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 280,  559 => 278,  549 => 274,  541 => 269,  528 => 265,  520 => 260,  511 => 254,  508 => 253,  493 => 244,  485 => 239,  474 => 235,  466 => 232,  461 => 230,  452 => 224,  449 => 223,  439 => 219,  426 => 209,  420 => 206,  410 => 199,  399 => 195,  391 => 192,  387 => 191,  379 => 186,  376 => 185,  358 => 171,  343 => 167,  335 => 164,  331 => 163,  322 => 157,  319 => 156,  303 => 146,  293 => 139,  280 => 135,  272 => 132,  268 => 131,  263 => 128,  261 => 127,  258 => 126,  247 => 121,  239 => 116,  227 => 111,  219 => 108,  215 => 107,  209 => 103,  206 => 102,  191 => 92,  183 => 87,  172 => 83,  164 => 80,  160 => 79,  155 => 76,  153 => 75,  148 => 72,  138 => 65,  127 => 61,  121 => 60,  117 => 59,  111 => 55,  109 => 54,  99 => 46,  93 => 44,  90 => 43,  83 => 41,  80 => 40,  78 => 39,  71 => 34,  67 => 33,  39 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
