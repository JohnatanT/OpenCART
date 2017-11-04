<?php

/* extension/payment/pagseguro.twig */
class __TwigTemplate_4664b3574d7f15f6d969ba4fc7df60274999df016df51e6966a477c3e9ab4582 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">

  <!-- Page Header -->
  <div class=\"page-header\">
    <div class=\"container-fluid\">

      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-moip\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"#\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>\t
      </div>

      <h1>";
        // line 14
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "name", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>

  <!-- Container -->
  <div class=\"container-fluid\">

    <!-- Error -->
    ";
        // line 28
        if ((isset($context["warning"]) ? $context["warning"] : null)) {
            // line 29
            echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 30
            echo (isset($context["warning"]) ? $context["warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 34
        echo "
    <!-- Panel -->
    <div class=\"panel panel-default\">

      <!-- Title -->
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 40
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>

      <!-- Body -->
      <div class=\"panel-body\">

        <!-- Nav -->
        <ul class=\"nav nav-tabs\">
          <li><a data-toggle=\"tab\" href=\"#config\">";
        // line 48
        echo (isset($context["tab_config"]) ? $context["tab_config"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#discount\">";
        // line 49
        echo (isset($context["tab_desconto"]) ? $context["tab_desconto"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#payment-status\">";
        // line 50
        echo (isset($context["tab_status_pagamento"]) ? $context["tab_status_pagamento"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#area\">";
        // line 51
        echo (isset($context["tab_geo_zone"]) ? $context["tab_geo_zone"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#plots\">";
        // line 52
        echo (isset($context["tab_parcelas"]) ? $context["tab_parcelas"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#payment-method\">";
        // line 53
        echo (isset($context["tab_formas_de_pagamento"]) ? $context["tab_formas_de_pagamento"] : null);
        echo "</a></li>
          <li><a data-toggle=\"tab\" href=\"#debug\">";
        // line 54
        echo (isset($context["tab_debug"]) ? $context["tab_debug"] : null);
        echo "</a></li>
        </ul>

        <!-- Form -->
        <form action=\"";
        // line 58
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-moip\" class=\"form-horizontal\">
          <div class=\"tab-content\">
\t
            <!-- Tab Config -->
            <div class=\"tab-pane\" id=\"config\">

              <!-- Status -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 66
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_status\" class=\"form-control\">
                  ";
        // line 69
        if ((isset($context["payment_pagseguro_status"]) ? $context["payment_pagseguro_status"] : null)) {
            // line 70
            echo "                  <option value=\"1\" selected>";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 72
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 74
        echo "                  
                  ";
        // line 75
        if ( !(isset($context["payment_pagseguro_status"]) ? $context["payment_pagseguro_status"] : null)) {
            // line 76
            echo "                  <option value=\"0\" selected>";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 78
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 80
        echo "                  </select>
                </div>
              </div>

              <!-- Email -->
              <div class=\"form-group required\">
               <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 86
        echo (isset($context["help_email"]) ? $context["help_email"] : null);
        echo "\">";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input name=\"payment_pagseguro_email\" type=\"text\" class=\"form-control\" value=\"";
        // line 88
        echo (isset($context["payment_pagseguro_email"]) ? $context["payment_pagseguro_email"] : null);
        echo "\" />
                  ";
        // line 89
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 90
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 92
        echo "                </div>
              </div>

              <!-- Token -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 97
        echo (isset($context["help_token"]) ? $context["help_token"] : null);
        echo "\">";
        echo (isset($context["entry_token"]) ? $context["entry_token"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input name=\"payment_pagseguro_token\" type=\"text\" class=\"form-control\" value=\"";
        // line 99
        echo (isset($context["payment_pagseguro_token"]) ? $context["payment_pagseguro_token"] : null);
        echo "\" />
                  ";
        // line 100
        if ((isset($context["error_token"]) ? $context["error_token"] : null)) {
            // line 101
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_token"]) ? $context["error_token"] : null);
            echo "</div>
                  ";
        }
        // line 103
        echo "                </div>
              </div>

              <!-- Modo Teste -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 108
        echo (isset($context["help_modo_teste"]) ? $context["help_modo_teste"] : null);
        echo "\">";
        echo (isset($context["entry_modo_teste"]) ? $context["entry_modo_teste"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_modo_teste\" class=\"form-control\">
                    ";
        // line 111
        if ((isset($context["payment_pagseguro_modo_teste"]) ? $context["payment_pagseguro_modo_teste"] : null)) {
            // line 112
            echo "                    <option value=\"1\" selected>";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        } else {
            // line 114
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        }
        // line 116
        echo "                    
                    
                    ";
        // line 118
        if ( !(isset($context["payment_pagseguro_modo_teste"]) ? $context["payment_pagseguro_modo_teste"] : null)) {
            // line 119
            echo "                    <option value=\"0\" selected>";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 121
            echo "                    <option value=\"0\">";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 123
        echo "                  </select>
                </div>
              </div>

              <!-- Debug -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 129
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_debug\" class=\"form-control\">
                    ";
        // line 132
        if ((isset($context["payment_pagseguro_debug"]) ? $context["payment_pagseguro_debug"] : null)) {
            // line 133
            echo "                    <option value=\"1\" selected>";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        } else {
            // line 135
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        }
        // line 137
        echo "                    
                    
                    ";
        // line 139
        if ( !(isset($context["payment_pagseguro_debug"]) ? $context["payment_pagseguro_debug"] : null)) {
            // line 140
            echo "                    <option value=\"0\" selected>";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 142
            echo "                    <option value=\"0\">";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 144
        echo "                  </select>
                </div>
              </div>

              <!-- Notificar Cliente -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 150
        echo (isset($context["help_notificar_cliente"]) ? $context["help_notificar_cliente"] : null);
        echo "\">";
        echo (isset($context["entry_notificar_cliente"]) ? $context["entry_notificar_cliente"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_notificar_cliente\" class=\"form-control\">
                    ";
        // line 153
        if ((isset($context["payment_pagseguro_notificar_cliente"]) ? $context["payment_pagseguro_notificar_cliente"] : null)) {
            // line 154
            echo "                    <option value=\"1\" selected>";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        } else {
            // line 156
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    ";
        }
        // line 158
        echo "                    
                    
                    ";
        // line 160
        if ( !(isset($context["payment_pagseguro_notificar_cliente"]) ? $context["payment_pagseguro_notificar_cliente"] : null)) {
            // line 161
            echo "                    <option value=\"0\" selected>";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 163
            echo "                    <option value=\"0\">";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 165
        echo "                  </select>
                </div>
              </div>

              <!-- Custom Field (Número) -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 171
        echo (isset($context["help_numero"]) ? $context["help_numero"] : null);
        echo "\">";
        echo (isset($context["entry_numero"]) ? $context["entry_numero"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <span class=\"input-group\">
                    <select name=\"payment_pagseguro_numero_residencia\" class=\"form-control\">
                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 176
            echo "                    ";
            if (($this->getAttribute($context["custom_field"], "custom_field_id", array()) == (isset($context["payment_pagseguro_numero_residencia"]) ? $context["payment_pagseguro_numero_residencia"] : null))) {
                // line 177
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 179
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            }
            // line 181
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                    </select>
                    
                    <span class=\"input-group-btn\">
                      <a href=\"";
        // line 185
        echo (isset($context["link_custom_field"]) ? $context["link_custom_field"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["text_custom_field"]) ? $context["text_custom_field"] : null);
        echo "</a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- Custom Field (Data de Nascimento) -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 193
        echo (isset($context["help_data_nascimento"]) ? $context["help_data_nascimento"] : null);
        echo "\">";
        echo (isset($context["entry_data_nascimento"]) ? $context["entry_data_nascimento"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <span class=\"input-group\">
                    <select name=\"payment_pagseguro_data_nascimento\" class=\"form-control\">
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 198
            echo "                    ";
            if (($this->getAttribute($context["custom_field"], "custom_field_id", array()) == (isset($context["payment_pagseguro_data_nascimento"]) ? $context["payment_pagseguro_data_nascimento"] : null))) {
                // line 199
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 201
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            }
            // line 203
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                    </select>
                    
                    <span class=\"input-group-btn\">
                      <a href=\"";
        // line 207
        echo (isset($context["link_custom_field"]) ? $context["link_custom_field"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["text_custom_field"]) ? $context["text_custom_field"] : null);
        echo "</a>
                    </span>
                  </span>
                </div>
              </div>

              <!-- Custom Field (CPF) -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 215
        echo (isset($context["help_cpf"]) ? $context["help_cpf"] : null);
        echo "\">";
        echo (isset($context["entry_cpf"]) ? $context["entry_cpf"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <span class=\"input-group\">
                    <select name=\"payment_pagseguro_cpf\" class=\"form-control\">
                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 220
            echo "                    ";
            if (($this->getAttribute($context["custom_field"], "custom_field_id", array()) == (isset($context["payment_pagseguro_cpf"]) ? $context["payment_pagseguro_cpf"] : null))) {
                // line 221
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 223
                echo "                    <option value=\"";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</option>
                    ";
            }
            // line 225
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                    </select>
                    
                    <span class=\"input-group-btn\">
                      <a href=\"";
        // line 229
        echo (isset($context["link_custom_field"]) ? $context["link_custom_field"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["text_custom_field"]) ? $context["text_custom_field"] : null);
        echo "</a>
                    </span>
                  </span>
                </div>
              </div>
\t\t\t  
              <!-- URL de Retorno -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 237
        echo (isset($context["entry_url_retorno"]) ? $context["entry_url_retorno"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" disabled value=\"https://www.MYSTORE.com.br/index.php?route=payment/pagseguro/callback\" class=\"form-control\" />
                </div>
              </div>
            </div>

            <!-- Tab Discount -->
            <div class=\"tab-pane\" id=\"discount\">

              <!-- Descontos -->
              <fieldset>
                <legend>";
        // line 249
        echo (isset($context["text_desconto"]) ? $context["text_desconto"] : null);
        echo "</legend>

                <!-- Boleto -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 253
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_desconto_boleto"]) ? $context["entry_desconto_boleto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_desconto_boleto\" value=\"";
        // line 255
        echo (isset($context["payment_pagseguro_desconto_boleto"]) ? $context["payment_pagseguro_desconto_boleto"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>

                <!-- Cartão de Crédito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 261
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_desconto_cartao"]) ? $context["entry_desconto_cartao"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_desconto_cartao\" value=\"";
        // line 263
        echo (isset($context["payment_pagseguro_desconto_cartao"]) ? $context["payment_pagseguro_desconto_cartao"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>

                <!-- Débito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 269
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_desconto_debito"]) ? $context["entry_desconto_debito"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_desconto_debito\" value=\"";
        // line 271
        echo (isset($context["payment_pagseguro_desconto_debito"]) ? $context["payment_pagseguro_desconto_debito"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>

              <!-- Acréscimo -->
              <fieldset>
                <legend>";
        // line 278
        echo (isset($context["text_acrescimo"]) ? $context["text_acrescimo"] : null);
        echo "</legend>

                <!-- Boleto -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 282
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_acrescimo_boleto"]) ? $context["entry_acrescimo_boleto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_acrescimo_boleto\" value=\"";
        // line 284
        echo (isset($context["payment_pagseguro_acrescimo_boleto"]) ? $context["payment_pagseguro_acrescimo_boleto"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>

                <!-- Cartão -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 290
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_acrescimo_cartao"]) ? $context["entry_acrescimo_cartao"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_acrescimo_cartao\" value=\"";
        // line 292
        echo (isset($context["payment_pagseguro_acrescimo_cartao"]) ? $context["payment_pagseguro_acrescimo_cartao"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>

                <!-- Débito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 298
        echo (isset($context["help_exemplo_desconto"]) ? $context["help_exemplo_desconto"] : null);
        echo "\">";
        echo (isset($context["entry_acrescimo_debito"]) ? $context["entry_acrescimo_debito"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_acrescimo_debito\" value=\"";
        // line 300
        echo (isset($context["payment_pagseguro_acrescimo_debito"]) ? $context["payment_pagseguro_acrescimo_debito"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
            </div>

            <!-- Tab Status de Pagamento -->
            <div class=\"tab-pane\" id=\"payment-status\">
            
              <!-- Aguardando Pagamento -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 311
        echo (isset($context["help_aguardando_pagamento"]) ? $context["help_aguardando_pagamento"] : null);
        echo "\">";
        echo (isset($context["entry_aguardando_pagamento"]) ? $context["entry_aguardando_pagamento"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_aguardando_pagamento\" class=\"form-control\">
                  ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 315
            echo "                  ";
            if (((isset($context["payment_pagseguro_aguardando_pagamento"]) ? $context["payment_pagseguro_aguardando_pagamento"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 316
                echo "                  <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 318
                echo "                  <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                  ";
            }
            // line 320
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                  </select>
                </div>
              </div>
              
              <!-- Em Análise -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 327
        echo (isset($context["help_analise"]) ? $context["help_analise"] : null);
        echo "\">";
        echo (isset($context["entry_analise"]) ? $context["entry_analise"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_analise\" class=\"form-control\">
                    ";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 331
            echo "                    ";
            if (((isset($context["payment_pagseguro_analise"]) ? $context["payment_pagseguro_analise"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 332
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 334
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            }
            // line 336
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                  </select>
                </div>
              </div>
              
              <!-- Pago -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 343
        echo (isset($context["help_pago"]) ? $context["help_pago"] : null);
        echo "\">";
        echo (isset($context["entry_pago"]) ? $context["entry_pago"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_paga\" class=\"form-control\">
                    ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 347
            echo "                    ";
            if (((isset($context["payment_pagseguro_paga"]) ? $context["payment_pagseguro_paga"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 348
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 350
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            }
            // line 352
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                  </select>
                </div>
              </div>
              
              <!-- Disponível -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 359
        echo (isset($context["help_disponivel"]) ? $context["help_disponivel"] : null);
        echo "\">";
        echo (isset($context["entry_disponivel"]) ? $context["entry_disponivel"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_disponivel\" class=\"form-control\">
                    ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 363
            echo "                    ";
            if (((isset($context["payment_pagseguro_disponivel"]) ? $context["payment_pagseguro_disponivel"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 364
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 366
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            }
            // line 368
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "                  </select>
                </div>
              </div>
              
              <!-- Disputa -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 375
        echo (isset($context["help_disputa"]) ? $context["help_disputa"] : null);
        echo "\">";
        echo (isset($context["entry_disputa"]) ? $context["entry_disputa"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_disputa\" class=\"form-control\">
                    ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 379
            echo "                    ";
            if (((isset($context["payment_pagseguro_disputa"]) ? $context["payment_pagseguro_disputa"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 380
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 382
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            }
            // line 384
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        echo "                  </select>
                </div>
              </div>
              
              <!-- Devolvida -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 391
        echo (isset($context["help_devolvida"]) ? $context["help_devolvida"] : null);
        echo "\">";
        echo (isset($context["entry_devolvido"]) ? $context["entry_devolvido"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_devolvida\" class=\"form-control\">
                    ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 395
            echo "                    ";
            if (((isset($context["payment_pagseguro_devolvida"]) ? $context["payment_pagseguro_devolvida"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 396
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 398
                echo "                    <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                    ";
            }
            // line 400
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "                  </select>
                </div>
              </div>
              
              <!-- Cancelada -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 407
        echo (isset($context["entry_cancelada"]) ? $context["entry_cancelada"] : null);
        echo "\">";
        echo (isset($context["entry_cancelada"]) ? $context["entry_cancelada"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_cancelada\" class=\"form-control\">
                   ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 411
            echo "                   ";
            if (((isset($context["payment_pagseguro_cancelada"]) ? $context["payment_pagseguro_cancelada"] : null) == $this->getAttribute($context["status"], "order_status_id", array()))) {
                // line 412
                echo "                   <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                   ";
            } else {
                // line 414
                echo "                   <option value=\"";
                echo $this->getAttribute($context["status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["status"], "name", array());
                echo "</option>
                   ";
            }
            // line 416
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "                  </select>
                </div>
              </div>
            </div>

            <!-- Tab Área Geográfica e Ordem -->
            <div class=\"tab-pane\" id=\"area\">
            
              <!-- Zona Geográfica -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 427
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_geo_zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 430
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                    ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 432
            echo "                    ";
            if (((isset($context["payment_pagseguro_geo_zone"]) ? $context["payment_pagseguro_geo_zone"] : null) == $this->getAttribute($context["zone"], "geo_zone_id", array()))) {
                // line 433
                echo "                    <option value=\"";
                echo $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "geo_zone_id", array());
                echo "\" selected>";
                echo $this->getAttribute($context["zone"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 435
                echo "                    <option value=\"";
                echo $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["zone"], "name", array());
                echo "</option>
                    ";
            }
            // line 437
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                  </select>
                </div>
              </div>
            
              <!-- Sort Order -->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 444
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_sort_order\" value=\"";
        // line 446
        echo (isset($context["payment_pagseguro_sort_order"]) ? $context["payment_pagseguro_sort_order"] : null);
        echo "\" class=\"form-control\" />
                </div>
              </div>
            </div>

            <!-- Tab Parcelas -->
            <div class=\"tab-pane\" id=\"plots\">
            
              <!-- Quantidade Total de Parcelas -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 456
        echo (isset($context["help_exemplo_parcela"]) ? $context["help_exemplo_parcela"] : null);
        echo "\">";
        echo (isset($context["entry_qnt_parcelas"]) ? $context["entry_qnt_parcelas"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_qnt_parcelas\" value=\"";
        // line 458
        echo (isset($context["payment_pagseguro_qnt_parcelas"]) ? $context["payment_pagseguro_qnt_parcelas"] : null);
        echo "\" class=\"form-control\" />
                  ";
        // line 459
        if ((isset($context["error_qnt_parcela"]) ? $context["error_qnt_parcela"] : null)) {
            // line 460
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_qnt_parcela"]) ? $context["error_qnt_parcela"] : null);
            echo "</div>
                  ";
        }
        // line 462
        echo "                </div>
              </div>
              
              <!-- Quantidade de Parcelas sem Juros -->
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 467
        echo (isset($context["help_parcela_sem_juros"]) ? $context["help_parcela_sem_juros"] : null);
        echo "\">";
        echo (isset($context["entry_parcelas_sem_juros"]) ? $context["entry_parcelas_sem_juros"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_parcelas_sem_juros\" value=\"";
        // line 469
        echo (isset($context["payment_pagseguro_parcelas_sem_juros"]) ? $context["payment_pagseguro_parcelas_sem_juros"] : null);
        echo "\" class=\"form-control\" />
                  ";
        // line 470
        if ((isset($context["error_parcelas_sem_juros"]) ? $context["error_parcelas_sem_juros"] : null)) {
            // line 471
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_parcelas_sem_juros"]) ? $context["error_parcelas_sem_juros"] : null);
            echo "</div>
                  ";
        }
        // line 473
        echo "                </div>
              </div>
            </div>

            <!-- Tab Métodos de Pagamento -->
            <div class=\"tab-pane\" id=\"payment-method\">
            
              <!-- Boleto -->
              <fieldset>
                <legend>";
        // line 482
        echo (isset($context["text_boleto"]) ? $context["text_boleto"] : null);
        echo "</legend>
                
                
                <!-- Status Boleto -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 487
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pagseguro_boleto_status\" class=\"form-control\">
                      ";
        // line 490
        if ((isset($context["payment_pagseguro_boleto_status"]) ? $context["payment_pagseguro_boleto_status"] : null)) {
            // line 491
            echo "                      <option value=\"1\" selected>";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 493
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        }
        // line 495
        echo "                      
                      
                      ";
        // line 497
        if ( !(isset($context["payment_pagseguro_boleto_status"]) ? $context["payment_pagseguro_boleto_status"] : null)) {
            // line 498
            echo "                      <option value=\"0\" selected>";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 500
            echo "                      <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        }
        // line 502
        echo "                    </select>
                  </div>
                </div>
                
                <!-- Valor Mínimo para Boleto -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 508
        echo (isset($context["entry_valor_minimo"]) ? $context["entry_valor_minimo"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_valor_minimo_boleto\" value=\"";
        // line 510
        echo (isset($context["payment_pagseguro_valor_minimo_boleto"]) ? $context["payment_pagseguro_valor_minimo_boleto"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
            
              <!-- Cartão de Crédito -->
              <fieldset>
                <legend>";
        // line 517
        echo (isset($context["text_cartao"]) ? $context["text_cartao"] : null);
        echo "</legend>
                
                <!-- Status Cartão de Crédito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 521
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pagseguro_cartao_status\" class=\"form-control\">
                      ";
        // line 524
        if ((isset($context["payment_pagseguro_cartao_status"]) ? $context["payment_pagseguro_cartao_status"] : null)) {
            // line 525
            echo "                      <option value=\"1\" selected>";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 527
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        }
        // line 529
        echo "                      
                      
                      ";
        // line 531
        if ( !(isset($context["payment_pagseguro_cartao_status"]) ? $context["payment_pagseguro_cartao_status"] : null)) {
            // line 532
            echo "                      <option value=\"0\" selected>";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 534
            echo "                      <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        }
        // line 536
        echo "                    </select>
                  </div>
                </div>
            
                <!-- Valor mínimo para cartão de crédito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 542
        echo (isset($context["entry_valor_minimo"]) ? $context["entry_valor_minimo"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_valor_minimo_cartao\" value=\"";
        // line 544
        echo (isset($context["payment_pagseguro_valor_minimo_cartao"]) ? $context["payment_pagseguro_valor_minimo_cartao"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
            
              <!-- Débito -->
              <fieldset>
                <legend>";
        // line 551
        echo (isset($context["text_debito"]) ? $context["text_debito"] : null);
        echo "</legend>
              
                <!-- Status débito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 555
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pagseguro_debito_status\" class=\"form-control\">
                      ";
        // line 558
        if ((isset($context["payment_pagseguro_debito_status"]) ? $context["payment_pagseguro_debito_status"] : null)) {
            // line 559
            echo "                      <option value=\"1\" selected>";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 561
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      ";
        }
        // line 563
        echo "                      
                      
                      ";
        // line 565
        if ( !(isset($context["payment_pagseguro_debito_status"]) ? $context["payment_pagseguro_debito_status"] : null)) {
            // line 566
            echo "                      <option value=\"0\" selected>";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 568
            echo "                      <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        }
        // line 570
        echo "                    </select>
                  </div>
                </div>
              
                <!-- Valor mínimo para débito -->
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 576
        echo (isset($context["entry_valor_minimo"]) ? $context["entry_valor_minimo"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pagseguro_valor_minimo_debito\" value=\"";
        // line 578
        echo (isset($context["payment_pagseguro_valor_minimo_debito"]) ? $context["payment_pagseguro_valor_minimo_debito"] : null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset> <!-- /Fieldset Débito -->
            </div> <!-- /#payment-method -->
          
            <!-- Tab Debug -->
            <div class=\"tab-pane\" id=\"debug\">
              <div class=\"alert alert-info\">
                <h3>Erros Comuns</h3>
                <p>http://forum.pagseguro.uol.com.br/t/8514331/msg-de-erro-como-pagseguroserviceexception-http-401---unauthorized</p>
                <p>http://forum.pagseguro.uol.com.br/t/9454406/checkout-transparente-forbidden</p>
                <p>http://forum.pagseguro.uol.com.br/t/11286061/erro-ao-finalizar-pedido---forbidden</p>
                <p>http://forum.pagseguro.uol.com.br/t/10184598/forbidden-ao-tentar-autenticar-na-api</p>
                <p>http://forum.pagseguro.uol.com.br/t/9391115/erro-no-retorno-da-consulta-por-transacao</p>
                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
              </div>
              <div class=\"well\" style=\"min-height:150px\">
                ";
        // line 596
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["debug"]) ? $context["debug"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 597
            echo "                    ";
            echo twig_escape_filter($this->env, $context["value"], "html");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "              </div>
            </div>
          </div><!-- /.tab-content -->
        </form> <!-- /Form -->
      </div><!-- /.panel-body -->
    </div><!-- /.panel.panel-default -->
  </div><!-- /.container-fluid -->
</div><!-- /#content -->

<script type=\"text/javascript\">
\$('fieldset legend').css('cursor', 'pointer');
\$('fieldset').css('margin-bottom', 30);

\$('.nav-tabs li:first').addClass('active');
\$('.tab-content div:first').addClass('active');

\$('fieldset legend').click(function(){
\t\$(this).parent().find('div').slideToggle('slow');
});
</script>

";
        // line 620
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/pagseguro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1381 => 620,  1358 => 599,  1349 => 597,  1345 => 596,  1324 => 578,  1319 => 576,  1311 => 570,  1305 => 568,  1299 => 566,  1297 => 565,  1293 => 563,  1287 => 561,  1281 => 559,  1279 => 558,  1273 => 555,  1266 => 551,  1256 => 544,  1251 => 542,  1243 => 536,  1237 => 534,  1231 => 532,  1229 => 531,  1225 => 529,  1219 => 527,  1213 => 525,  1211 => 524,  1205 => 521,  1198 => 517,  1188 => 510,  1183 => 508,  1175 => 502,  1169 => 500,  1163 => 498,  1161 => 497,  1157 => 495,  1151 => 493,  1145 => 491,  1143 => 490,  1137 => 487,  1129 => 482,  1118 => 473,  1112 => 471,  1110 => 470,  1106 => 469,  1099 => 467,  1092 => 462,  1086 => 460,  1084 => 459,  1080 => 458,  1073 => 456,  1060 => 446,  1055 => 444,  1047 => 438,  1041 => 437,  1033 => 435,  1025 => 433,  1022 => 432,  1018 => 431,  1014 => 430,  1008 => 427,  996 => 417,  990 => 416,  982 => 414,  974 => 412,  971 => 411,  967 => 410,  959 => 407,  951 => 401,  945 => 400,  937 => 398,  929 => 396,  926 => 395,  922 => 394,  914 => 391,  906 => 385,  900 => 384,  892 => 382,  884 => 380,  881 => 379,  877 => 378,  869 => 375,  861 => 369,  855 => 368,  847 => 366,  839 => 364,  836 => 363,  832 => 362,  824 => 359,  816 => 353,  810 => 352,  802 => 350,  794 => 348,  791 => 347,  787 => 346,  779 => 343,  771 => 337,  765 => 336,  757 => 334,  749 => 332,  746 => 331,  742 => 330,  734 => 327,  726 => 321,  720 => 320,  712 => 318,  704 => 316,  701 => 315,  697 => 314,  689 => 311,  675 => 300,  668 => 298,  659 => 292,  652 => 290,  643 => 284,  636 => 282,  629 => 278,  619 => 271,  612 => 269,  603 => 263,  596 => 261,  587 => 255,  580 => 253,  573 => 249,  558 => 237,  545 => 229,  540 => 226,  534 => 225,  526 => 223,  518 => 221,  515 => 220,  511 => 219,  502 => 215,  489 => 207,  484 => 204,  478 => 203,  470 => 201,  462 => 199,  459 => 198,  455 => 197,  446 => 193,  433 => 185,  428 => 182,  422 => 181,  414 => 179,  406 => 177,  403 => 176,  399 => 175,  390 => 171,  382 => 165,  376 => 163,  370 => 161,  368 => 160,  364 => 158,  358 => 156,  352 => 154,  350 => 153,  342 => 150,  334 => 144,  328 => 142,  322 => 140,  320 => 139,  316 => 137,  310 => 135,  304 => 133,  302 => 132,  294 => 129,  286 => 123,  280 => 121,  274 => 119,  272 => 118,  268 => 116,  262 => 114,  256 => 112,  254 => 111,  246 => 108,  239 => 103,  233 => 101,  231 => 100,  227 => 99,  220 => 97,  213 => 92,  207 => 90,  205 => 89,  201 => 88,  194 => 86,  186 => 80,  180 => 78,  174 => 76,  172 => 75,  169 => 74,  163 => 72,  157 => 70,  155 => 69,  147 => 66,  136 => 58,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  94 => 40,  86 => 34,  79 => 30,  76 => 29,  74 => 28,  64 => 20,  53 => 18,  49 => 17,  43 => 14,  37 => 11,  33 => 10,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* */
/* <div id="content">*/
/* */
/*   <!-- Page Header -->*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/* */
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-moip" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="#" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>	*/
/*       </div>*/
/* */
/*       <h1>{{ heading_title }}</h1>*/
/*       */
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.name }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <!-- Container -->*/
/*   <div class="container-fluid">*/
/* */
/*     <!-- Error -->*/
/*     {% if warning %}*/
/*     <div class="alert alert-danger">*/
/*       <i class="fa fa-exclamation-circle"></i> {{ warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <!-- Panel -->*/
/*     <div class="panel panel-default">*/
/* */
/*       <!-- Title -->*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/* */
/*       <!-- Body -->*/
/*       <div class="panel-body">*/
/* */
/*         <!-- Nav -->*/
/*         <ul class="nav nav-tabs">*/
/*           <li><a data-toggle="tab" href="#config">{{ tab_config }}</a></li>*/
/*           <li><a data-toggle="tab" href="#discount">{{ tab_desconto }}</a></li>*/
/*           <li><a data-toggle="tab" href="#payment-status">{{ tab_status_pagamento }}</a></li>*/
/*           <li><a data-toggle="tab" href="#area">{{ tab_geo_zone }}</a></li>*/
/*           <li><a data-toggle="tab" href="#plots">{{ tab_parcelas }}</a></li>*/
/*           <li><a data-toggle="tab" href="#payment-method">{{ tab_formas_de_pagamento }}</a></li>*/
/*           <li><a data-toggle="tab" href="#debug">{{ tab_debug }}</a></li>*/
/*         </ul>*/
/* */
/*         <!-- Form -->*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-moip" class="form-horizontal">*/
/*           <div class="tab-content">*/
/* 	*/
/*             <!-- Tab Config -->*/
/*             <div class="tab-pane" id="config">*/
/* */
/*               <!-- Status -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_status }}">{{ entry_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_status" class="form-control">*/
/*                   {% if payment_pagseguro_status %}*/
/*                   <option value="1" selected>{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   */
/*                   {% if not payment_pagseguro_status %}*/
/*                   <option value="0" selected>{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Email -->*/
/*               <div class="form-group required">*/
/*                <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_email }}">{{ entry_email }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="payment_pagseguro_email" type="text" class="form-control" value="{{ payment_pagseguro_email }}" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Token -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_token }}">{{ entry_token }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input name="payment_pagseguro_token" type="text" class="form-control" value="{{ payment_pagseguro_token }}" />*/
/*                   {% if error_token %}*/
/*                   <div class="text-danger">{{ error_token }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Modo Teste -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_modo_teste }}">{{ entry_modo_teste }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_modo_teste" class="form-control">*/
/*                     {% if payment_pagseguro_modo_teste %}*/
/*                     <option value="1" selected>{{ text_yes }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     {% endif %}*/
/*                     */
/*                     */
/*                     {% if not payment_pagseguro_modo_teste %}*/
/*                     <option value="0" selected>{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Debug -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_debug }}">{{ entry_debug }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_debug" class="form-control">*/
/*                     {% if payment_pagseguro_debug %}*/
/*                     <option value="1" selected>{{ text_yes }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     {% endif %}*/
/*                     */
/*                     */
/*                     {% if not payment_pagseguro_debug %}*/
/*                     <option value="0" selected>{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Notificar Cliente -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_notificar_cliente }}">{{ entry_notificar_cliente }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_notificar_cliente" class="form-control">*/
/*                     {% if payment_pagseguro_notificar_cliente %}*/
/*                     <option value="1" selected>{{ text_yes }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     {% endif %}*/
/*                     */
/*                     */
/*                     {% if not payment_pagseguro_notificar_cliente %}*/
/*                     <option value="0" selected>{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Custom Field (Número) -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_numero }}">{{ entry_numero }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <span class="input-group">*/
/*                     <select name="payment_pagseguro_numero_residencia" class="form-control">*/
/*                     {% for custom_field in custom_fields %}*/
/*                     {% if custom_field.custom_field_id == payment_pagseguro_numero_residencia %}*/
/*                     <option value="{{ custom_field.custom_field_id }}" selected>{{ custom_field.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field.custom_field_id }}">{{ custom_field.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                     */
/*                     <span class="input-group-btn">*/
/*                       <a href="{{ link_custom_field }}" class="btn btn-primary">{{ text_custom_field }}</a>*/
/*                     </span>*/
/*                   </span>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Custom Field (Data de Nascimento) -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_data_nascimento }}">{{ entry_data_nascimento }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <span class="input-group">*/
/*                     <select name="payment_pagseguro_data_nascimento" class="form-control">*/
/*                     {% for custom_field in custom_fields %}*/
/*                     {% if custom_field.custom_field_id == payment_pagseguro_data_nascimento %}*/
/*                     <option value="{{ custom_field.custom_field_id }}" selected>{{ custom_field.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field.custom_field_id }}">{{ custom_field.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                     */
/*                     <span class="input-group-btn">*/
/*                       <a href="{{ link_custom_field }}" class="btn btn-primary">{{ text_custom_field }}</a>*/
/*                     </span>*/
/*                   </span>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <!-- Custom Field (CPF) -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_cpf }}">{{ entry_cpf }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <span class="input-group">*/
/*                     <select name="payment_pagseguro_cpf" class="form-control">*/
/*                     {% for custom_field in custom_fields %}*/
/*                     {% if custom_field.custom_field_id == payment_pagseguro_cpf %}*/
/*                     <option value="{{ custom_field.custom_field_id }}" selected>{{ custom_field.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field.custom_field_id }}">{{ custom_field.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                     */
/*                     <span class="input-group-btn">*/
/*                       <a href="{{ link_custom_field }}" class="btn btn-primary">{{ text_custom_field }}</a>*/
/*                     </span>*/
/*                   </span>*/
/*                 </div>*/
/*               </div>*/
/* 			  */
/*               <!-- URL de Retorno -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_url_retorno }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" disabled value="https://www.MYSTORE.com.br/index.php?route=payment/pagseguro/callback" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- Tab Discount -->*/
/*             <div class="tab-pane" id="discount">*/
/* */
/*               <!-- Descontos -->*/
/*               <fieldset>*/
/*                 <legend>{{ text_desconto }}</legend>*/
/* */
/*                 <!-- Boleto -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_desconto_boleto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_desconto_boleto" value="{{ payment_pagseguro_desconto_boleto }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <!-- Cartão de Crédito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_desconto_cartao }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_desconto_cartao" value="{{ payment_pagseguro_desconto_cartao }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <!-- Débito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_desconto_debito }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_desconto_debito" value="{{ payment_pagseguro_desconto_debito }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/* */
/*               <!-- Acréscimo -->*/
/*               <fieldset>*/
/*                 <legend>{{ text_acrescimo }}</legend>*/
/* */
/*                 <!-- Boleto -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_acrescimo_boleto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_acrescimo_boleto" value="{{ payment_pagseguro_acrescimo_boleto }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <!-- Cartão -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_acrescimo_cartao }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_acrescimo_cartao" value="{{ payment_pagseguro_acrescimo_cartao }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <!-- Débito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_desconto }}">{{ entry_acrescimo_debito }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_acrescimo_debito" value="{{ payment_pagseguro_acrescimo_debito }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/* */
/*             <!-- Tab Status de Pagamento -->*/
/*             <div class="tab-pane" id="payment-status">*/
/*             */
/*               <!-- Aguardando Pagamento -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_aguardando_pagamento }}">{{ entry_aguardando_pagamento }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_aguardando_pagamento" class="form-control">*/
/*                   {% for status in statuses %}*/
/*                   {% if payment_pagseguro_aguardando_pagamento == status.order_status_id %}*/
/*                   <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Em Análise -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_analise }}">{{ entry_analise }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_analise" class="form-control">*/
/*                     {% for status in statuses %}*/
/*                     {% if payment_pagseguro_analise == status.order_status_id %}*/
/*                     <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Pago -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_pago }}">{{ entry_pago }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_paga" class="form-control">*/
/*                     {% for status in statuses %}*/
/*                     {% if payment_pagseguro_paga == status.order_status_id %}*/
/*                     <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Disponível -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_disponivel }}">{{ entry_disponivel }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_disponivel" class="form-control">*/
/*                     {% for status in statuses %}*/
/*                     {% if payment_pagseguro_disponivel == status.order_status_id %}*/
/*                     <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Disputa -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_disputa }}">{{ entry_disputa }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_disputa" class="form-control">*/
/*                     {% for status in statuses %}*/
/*                     {% if payment_pagseguro_disputa == status.order_status_id %}*/
/*                     <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Devolvida -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_devolvida }}">{{ entry_devolvido }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_devolvida" class="form-control">*/
/*                     {% for status in statuses %}*/
/*                     {% if payment_pagseguro_devolvida == status.order_status_id %}*/
/*                     <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Cancelada -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ entry_cancelada }}">{{ entry_cancelada }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_cancelada" class="form-control">*/
/*                    {% for status in statuses %}*/
/*                    {% if payment_pagseguro_cancelada == status.order_status_id %}*/
/*                    <option value="{{ status.order_status_id }}" selected>{{ status.name }}</option>*/
/*                    {% else %}*/
/*                    <option value="{{ status.order_status_id }}">{{ status.name }}</option>*/
/*                    {% endif %}*/
/*                    {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- Tab Área Geográfica e Ordem -->*/
/*             <div class="tab-pane" id="area">*/
/*             */
/*               <!-- Zona Geográfica -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_geo_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pagseguro_geo_zone" class="form-control">*/
/*                     <option value="0">{{ text_all_zones }}</option>*/
/*                     {% for zone in zones %}*/
/*                     {% if payment_pagseguro_geo_zone == zone.geo_zone_id %}*/
/*                     <option value="{{ status.geo_zone_id }}" selected>{{ zone.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ status.geo_zone_id }}">{{ zone.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             */
/*               <!-- Sort Order -->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pagseguro_sort_order" value="{{ payment_pagseguro_sort_order }}" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- Tab Parcelas -->*/
/*             <div class="tab-pane" id="plots">*/
/*             */
/*               <!-- Quantidade Total de Parcelas -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_exemplo_parcela }}">{{ entry_qnt_parcelas }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pagseguro_qnt_parcelas" value="{{ payment_pagseguro_qnt_parcelas }}" class="form-control" />*/
/*                   {% if error_qnt_parcela %}*/
/*                   <div class="text-danger">{{ error_qnt_parcela }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <!-- Quantidade de Parcelas sem Juros -->*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-html="true" title="{{ help_parcela_sem_juros }}">{{ entry_parcelas_sem_juros }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pagseguro_parcelas_sem_juros" value="{{ payment_pagseguro_parcelas_sem_juros }}" class="form-control" />*/
/*                   {% if error_parcelas_sem_juros %}*/
/*                   <div class="text-danger">{{ error_parcelas_sem_juros }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- Tab Métodos de Pagamento -->*/
/*             <div class="tab-pane" id="payment-method">*/
/*             */
/*               <!-- Boleto -->*/
/*               <fieldset>*/
/*                 <legend>{{ text_boleto }}</legend>*/
/*                 */
/*                 */
/*                 <!-- Status Boleto -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pagseguro_boleto_status" class="form-control">*/
/*                       {% if payment_pagseguro_boleto_status %}*/
/*                       <option value="1" selected>{{ text_enabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       {% endif %}*/
/*                       */
/*                       */
/*                       {% if not payment_pagseguro_boleto_status %}*/
/*                       <option value="0" selected>{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 */
/*                 <!-- Valor Mínimo para Boleto -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_valor_minimo }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_valor_minimo_boleto" value="{{ payment_pagseguro_valor_minimo_boleto }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             */
/*               <!-- Cartão de Crédito -->*/
/*               <fieldset>*/
/*                 <legend>{{ text_cartao }}</legend>*/
/*                 */
/*                 <!-- Status Cartão de Crédito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pagseguro_cartao_status" class="form-control">*/
/*                       {% if payment_pagseguro_cartao_status %}*/
/*                       <option value="1" selected>{{ text_enabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       {% endif %}*/
/*                       */
/*                       */
/*                       {% if not payment_pagseguro_cartao_status %}*/
/*                       <option value="0" selected>{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*             */
/*                 <!-- Valor mínimo para cartão de crédito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_valor_minimo }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_valor_minimo_cartao" value="{{ payment_pagseguro_valor_minimo_cartao }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             */
/*               <!-- Débito -->*/
/*               <fieldset>*/
/*                 <legend>{{ text_debito }}</legend>*/
/*               */
/*                 <!-- Status débito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pagseguro_debito_status" class="form-control">*/
/*                       {% if payment_pagseguro_debito_status %}*/
/*                       <option value="1" selected>{{ text_enabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       {% endif %}*/
/*                       */
/*                       */
/*                       {% if not payment_pagseguro_debito_status %}*/
/*                       <option value="0" selected>{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               */
/*                 <!-- Valor mínimo para débito -->*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_valor_minimo }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pagseguro_valor_minimo_debito" value="{{ payment_pagseguro_valor_minimo_debito }}" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset> <!-- /Fieldset Débito -->*/
/*             </div> <!-- /#payment-method -->*/
/*           */
/*             <!-- Tab Debug -->*/
/*             <div class="tab-pane" id="debug">*/
/*               <div class="alert alert-info">*/
/*                 <h3>Erros Comuns</h3>*/
/*                 <p>http://forum.pagseguro.uol.com.br/t/8514331/msg-de-erro-como-pagseguroserviceexception-http-401---unauthorized</p>*/
/*                 <p>http://forum.pagseguro.uol.com.br/t/9454406/checkout-transparente-forbidden</p>*/
/*                 <p>http://forum.pagseguro.uol.com.br/t/11286061/erro-ao-finalizar-pedido---forbidden</p>*/
/*                 <p>http://forum.pagseguro.uol.com.br/t/10184598/forbidden-ao-tentar-autenticar-na-api</p>*/
/*                 <p>http://forum.pagseguro.uol.com.br/t/9391115/erro-no-retorno-da-consulta-por-transacao</p>*/
/*                 <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*               </div>*/
/*               <div class="well" style="min-height:150px">*/
/*                 {% for value in debug %}*/
/*                     {{ value|escape('html') }}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div><!-- /.tab-content -->*/
/*         </form> <!-- /Form -->*/
/*       </div><!-- /.panel-body -->*/
/*     </div><!-- /.panel.panel-default -->*/
/*   </div><!-- /.container-fluid -->*/
/* </div><!-- /#content -->*/
/* */
/* <script type="text/javascript">*/
/* $('fieldset legend').css('cursor', 'pointer');*/
/* $('fieldset').css('margin-bottom', 30);*/
/* */
/* $('.nav-tabs li:first').addClass('active');*/
/* $('.tab-content div:first').addClass('active');*/
/* */
/* $('fieldset legend').click(function(){*/
/* 	$(this).parent().find('div').slideToggle('slow');*/
/* });*/
/* </script>*/
/* */
/* {{ footer }}*/
