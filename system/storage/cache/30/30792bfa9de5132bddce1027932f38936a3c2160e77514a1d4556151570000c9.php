<?php

/* extension/shipping/fedex.twig */
class __TwigTemplate_97a2709ab7e7b5d638be345792b53dbedb1e18d60f9ee3fe290b688849f6b5b2 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 29
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_key\" value=\"";
        // line 31
        echo (isset($context["shipping_fedex_key"]) ? $context["shipping_fedex_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 38
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_password\" value=\"";
        // line 40
        echo (isset($context["shipping_fedex_password"]) ? $context["shipping_fedex_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 47
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_account\" value=\"";
        // line 49
        echo (isset($context["shipping_fedex_account"]) ? $context["shipping_fedex_account"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "\" id=\"input-account\" class=\"form-control\" />
              ";
        // line 50
        if ((isset($context["error_account"]) ? $context["error_account"] : null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_account"]) ? $context["error_account"] : null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-meter\">";
        // line 56
        echo (isset($context["entry_meter"]) ? $context["entry_meter"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_meter\" value=\"";
        // line 58
        echo (isset($context["shipping_fedex_meter"]) ? $context["shipping_fedex_meter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meter"]) ? $context["entry_meter"] : null);
        echo "\" id=\"input-meter\" class=\"form-control\" />
              ";
        // line 59
        if ((isset($context["error_meter"]) ? $context["error_meter"] : null)) {
            // line 60
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_meter"]) ? $context["error_meter"] : null);
            echo "</div>
              ";
        }
        // line 62
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 65
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_postcode\" value=\"";
        // line 67
        echo (isset($context["shipping_fedex_postcode"]) ? $context["shipping_fedex_postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
              ";
        // line 68
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 74
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 77
        if ((isset($context["shipping_fedex_test"]) ? $context["shipping_fedex_test"] : null)) {
            // line 78
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 79
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 81
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"1\" />
                ";
            // line 82
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 84
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 86
        if ( !(isset($context["shipping_fedex_test"]) ? $context["shipping_fedex_test"] : null)) {
            // line 87
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 88
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 90
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"0\" />
                ";
            // line 91
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 93
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 97
        echo (isset($context["entry_service"]) ? $context["entry_service"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 101
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 103
            if (twig_in_filter($this->getAttribute($context["service"], "value", array()), (isset($context["shipping_fedex_service"]) ? $context["shipping_fedex_service"] : null))) {
                // line 104
                echo "                    <input type=\"checkbox\" name=\"fedex_service[]\" value=\"";
                echo $this->getAttribute($context["service"], "value", array());
                echo "\" checked=\"checked\" />
                    ";
                // line 105
                echo $this->getAttribute($context["service"], "text", array());
                echo "
                    ";
            } else {
                // line 107
                echo "                    <input type=\"checkbox\" name=\"fedex_service[]\" value=\"";
                echo $this->getAttribute($context["service"], "value", array());
                echo "\" />
                    ";
                // line 108
                echo $this->getAttribute($context["service"], "text", array());
                echo "
                    ";
            }
            // line 110
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 114
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 117
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_length\" value=\"";
        // line 121
        echo (isset($context["shipping_fedex_length"]) ? $context["shipping_fedex_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_width\" value=\"";
        // line 124
        echo (isset($context["shipping_fedex_width"]) ? $context["shipping_fedex_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_height\" value=\"";
        // line 127
        echo (isset($context["shipping_fedex_height"]) ? $context["shipping_fedex_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                </div>
              </div>
              ";
        // line 130
        if ((isset($context["error_dimension"]) ? $context["error_dimension"] : null)) {
            // line 131
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_dimension"]) ? $context["error_dimension"] : null);
            echo "</div>
              ";
        }
        // line 133
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-length-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 136
        echo (isset($context["help_length_class"]) ? $context["help_length_class"] : null);
        echo "\">";
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 140
            echo "                ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["shipping_fedex_length_class_id"]) ? $context["shipping_fedex_length_class_id"] : null))) {
                // line 141
                echo "                <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 143
                echo "                <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                ";
            }
            // line 145
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-dropoff-type\">";
        // line 150
        echo (isset($context["entry_dropoff_type"]) ? $context["entry_dropoff_type"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_dropoff_type\" id=\"input-dropoff-type\" class=\"form-control\">
                ";
        // line 153
        if (((isset($context["shipping_fedex_dropoff_type"]) ? $context["shipping_fedex_dropoff_type"] : null) == "REGULAR_PICKUP")) {
            // line 154
            echo "                <option value=\"REGULAR_PICKUP\" selected=\"selected\">";
            echo (isset($context["text_regular_pickup"]) ? $context["text_regular_pickup"] : null);
            echo "</option>
                ";
        } else {
            // line 156
            echo "                <option value=\"REGULAR_PICKUP\">";
            echo (isset($context["text_regular_pickup"]) ? $context["text_regular_pickup"] : null);
            echo "</option>
                ";
        }
        // line 158
        echo "                ";
        if (((isset($context["shipping_fedex_dropoff_type"]) ? $context["shipping_fedex_dropoff_type"] : null) == "REQUEST_COURIER")) {
            // line 159
            echo "                <option value=\"REQUEST_COURIER\" selected=\"selected\">";
            echo (isset($context["text_request_courier"]) ? $context["text_request_courier"] : null);
            echo "</option>
                ";
        } else {
            // line 161
            echo "                <option value=\"REQUEST_COURIER\">";
            echo (isset($context["text_request_courier"]) ? $context["text_request_courier"] : null);
            echo "</option>
                ";
        }
        // line 163
        echo "                ";
        if (((isset($context["shipping_fedex_dropoff_type"]) ? $context["shipping_fedex_dropoff_type"] : null) == "DROP_BOX")) {
            // line 164
            echo "                <option value=\"DROP_BOX\" selected=\"selected\">";
            echo (isset($context["text_drop_box"]) ? $context["text_drop_box"] : null);
            echo "</option>
                ";
        } else {
            // line 166
            echo "                <option value=\"DROP_BOX\">";
            echo (isset($context["text_drop_box"]) ? $context["text_drop_box"] : null);
            echo "</option>
                ";
        }
        // line 168
        echo "                ";
        if (((isset($context["shipping_fedex_dropoff_type"]) ? $context["shipping_fedex_dropoff_type"] : null) == "BUSINESS_SERVICE_CENTER")) {
            // line 169
            echo "                <option value=\"BUSINESS_SERVICE_CENTER\" selected=\"selected\">";
            echo (isset($context["text_business_service_center"]) ? $context["text_business_service_center"] : null);
            echo "</option>
                ";
        } else {
            // line 171
            echo "                <option value=\"BUSINESS_SERVICE_CENTER\">";
            echo (isset($context["text_business_service_center"]) ? $context["text_business_service_center"] : null);
            echo "</option>
                ";
        }
        // line 173
        echo "                ";
        if (((isset($context["shipping_fedex_dropoff_type"]) ? $context["shipping_fedex_dropoff_type"] : null) == "STATION")) {
            // line 174
            echo "                <option value=\"STATION\" selected=\"selected\">";
            echo (isset($context["text_station"]) ? $context["text_station"] : null);
            echo "</option>
                ";
        } else {
            // line 176
            echo "                <option value=\"STATION\">";
            echo (isset($context["text_station"]) ? $context["text_station"] : null);
            echo "</option>
                ";
        }
        // line 178
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">";
        // line 182
        echo (isset($context["entry_packaging_type"]) ? $context["entry_packaging_type"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_packaging_type\" id=\"input-packaging-type\" class=\"form-control\">
                ";
        // line 185
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_ENVELOPE")) {
            // line 186
            echo "                <option value=\"FEDEX_ENVELOPE\" selected=\"selected\">";
            echo (isset($context["text_fedex_envelope"]) ? $context["text_fedex_envelope"] : null);
            echo "</option>
                ";
        } else {
            // line 188
            echo "                <option value=\"FEDEX_ENVELOPE\">";
            echo (isset($context["text_fedex_envelope"]) ? $context["text_fedex_envelope"] : null);
            echo "</option>
                ";
        }
        // line 190
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_PAK")) {
            // line 191
            echo "                <option value=\"FEDEX_PAK\" selected=\"selected\">";
            echo (isset($context["text_fedex_pak"]) ? $context["text_fedex_pak"] : null);
            echo "</option>
                ";
        } else {
            // line 193
            echo "                <option value=\"FEDEX_PAK\">";
            echo (isset($context["text_fedex_pak"]) ? $context["text_fedex_pak"] : null);
            echo "</option>
                ";
        }
        // line 195
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_BOX")) {
            // line 196
            echo "                <option value=\"FEDEX_BOX\" selected=\"selected\">";
            echo (isset($context["text_fedex_box"]) ? $context["text_fedex_box"] : null);
            echo "</option>
                ";
        } else {
            // line 198
            echo "                <option value=\"FEDEX_BOX\">";
            echo (isset($context["text_fedex_box"]) ? $context["text_fedex_box"] : null);
            echo "</option>
                ";
        }
        // line 200
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_TUBE")) {
            // line 201
            echo "                <option value=\"FEDEX_TUBE\" selected=\"selected\">";
            echo (isset($context["text_fedex_tube"]) ? $context["text_fedex_tube"] : null);
            echo "</option>
                ";
        } else {
            // line 203
            echo "                <option value=\"FEDEX_TUBE\">";
            echo (isset($context["text_fedex_tube"]) ? $context["text_fedex_tube"] : null);
            echo "</option>
                ";
        }
        // line 205
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_10KG_BOX")) {
            // line 206
            echo "                <option value=\"FEDEX_10KG_BOX\" selected=\"selected\">";
            echo (isset($context["text_fedex_10kg_box"]) ? $context["text_fedex_10kg_box"] : null);
            echo "</option>
                ";
        } else {
            // line 208
            echo "                <option value=\"FEDEX_10KG_BOX\">";
            echo (isset($context["text_fedex_10kg_box"]) ? $context["text_fedex_10kg_box"] : null);
            echo "</option>
                ";
        }
        // line 210
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "FEDEX_25KG_BOX")) {
            // line 211
            echo "                <option value=\"FEDEX_25KG_BOX\" selected=\"selected\">";
            echo (isset($context["text_fedex_25kg_box"]) ? $context["text_fedex_25kg_box"] : null);
            echo "</option>
                ";
        } else {
            // line 213
            echo "                <option value=\"FEDEX_25KG_BOX\">";
            echo (isset($context["text_fedex_25kg_box"]) ? $context["text_fedex_25kg_box"] : null);
            echo "</option>
                ";
        }
        // line 215
        echo "                ";
        if (((isset($context["shipping_fedex_packaging_type"]) ? $context["shipping_fedex_packaging_type"] : null) == "YOUR_PACKAGING")) {
            // line 216
            echo "                <option value=\"YOUR_PACKAGING\" selected=\"selected\">";
            echo (isset($context["text_your_packaging"]) ? $context["text_your_packaging"] : null);
            echo "</option>
                ";
        } else {
            // line 218
            echo "                <option value=\"YOUR_PACKAGING\">";
            echo (isset($context["text_your_packaging"]) ? $context["text_your_packaging"] : null);
            echo "</option>
                ";
        }
        // line 220
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rate-type\">";
        // line 224
        echo (isset($context["entry_rate_type"]) ? $context["entry_rate_type"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_rate_type\" id=\"input-rate-type\" class=\"form-control\">
                ";
        // line 227
        if (((isset($context["shipping_fedex_rate_type"]) ? $context["shipping_fedex_rate_type"] : null) == "LIST")) {
            // line 228
            echo "                <option value=\"LIST\" selected=\"selected\">";
            echo (isset($context["text_list_rate"]) ? $context["text_list_rate"] : null);
            echo "</option>
                ";
        } else {
            // line 230
            echo "                <option value=\"LIST\">";
            echo (isset($context["text_list_rate"]) ? $context["text_list_rate"] : null);
            echo "</option>
                ";
        }
        // line 232
        echo "                ";
        if (((isset($context["shipping_fedex_rate_type"]) ? $context["shipping_fedex_rate_type"] : null) == "ACCOUNT")) {
            // line 233
            echo "                <option value=\"ACCOUNT\" selected=\"selected\">";
            echo (isset($context["text_account_rate"]) ? $context["text_account_rate"] : null);
            echo "</option>
                ";
        } else {
            // line 235
            echo "                <option value=\"ACCOUNT\">";
            echo (isset($context["text_account_rate"]) ? $context["text_account_rate"] : null);
            echo "</option>
                ";
        }
        // line 237
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 241
        echo (isset($context["help_display_time"]) ? $context["help_display_time"] : null);
        echo "\">";
        echo (isset($context["entry_display_time"]) ? $context["entry_display_time"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 244
        if ((isset($context["shipping_fedex_display_time"]) ? $context["shipping_fedex_display_time"] : null)) {
            // line 245
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"1\" checked=\"checked\" />
                ";
            // line 246
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 248
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"1\" />
                ";
            // line 249
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 251
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 253
        if ( !(isset($context["shipping_fedex_display_time"]) ? $context["shipping_fedex_display_time"] : null)) {
            // line 254
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"0\" checked=\"checked\" />
                ";
            // line 255
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 257
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"0\" />
                ";
            // line 258
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 260
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 264
        echo (isset($context["help_display_weight"]) ? $context["help_display_weight"] : null);
        echo "\">";
        echo (isset($context["entry_display_weight"]) ? $context["entry_display_weight"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 267
        if ((isset($context["shipping_fedex_display_weight"]) ? $context["shipping_fedex_display_weight"] : null)) {
            // line 268
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"1\" checked=\"checked\" />
                ";
            // line 269
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 271
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"1\" />
                ";
            // line 272
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 274
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 276
        if ( !(isset($context["shipping_fedex_display_weight"]) ? $context["shipping_fedex_display_weight"] : null)) {
            // line 277
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"0\" checked=\"checked\" />
                ";
            // line 278
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 280
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"0\" />
                ";
            // line 281
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 283
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 287
        echo (isset($context["help_weight_class"]) ? $context["help_weight_class"] : null);
        echo "\">";
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 291
            echo "                ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["shipping_fedex_weight_class_id"]) ? $context["shipping_fedex_weight_class_id"] : null))) {
                // line 292
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 294
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            }
            // line 296
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 301
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 304
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 306
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_fedex_tax_class_id"]) ? $context["shipping_fedex_tax_class_id"] : null))) {
                // line 307
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 309
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 311
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 316
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 319
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 321
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_fedex_geo_zone_id"]) ? $context["shipping_fedex_geo_zone_id"] : null))) {
                // line 322
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 324
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 326
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 331
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 334
        if ((isset($context["shipping_fedex_status"]) ? $context["shipping_fedex_status"] : null)) {
            // line 335
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 336
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 338
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 339
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 341
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 345
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_sort_order\" value=\"";
        // line 347
        echo (isset($context["shipping_fedex_sort_order"]) ? $context["shipping_fedex_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 355
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/fedex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  939 => 355,  926 => 347,  921 => 345,  915 => 341,  910 => 339,  905 => 338,  900 => 336,  895 => 335,  893 => 334,  887 => 331,  881 => 327,  875 => 326,  867 => 324,  859 => 322,  856 => 321,  852 => 320,  848 => 319,  842 => 316,  836 => 312,  830 => 311,  822 => 309,  814 => 307,  811 => 306,  807 => 305,  803 => 304,  797 => 301,  791 => 297,  785 => 296,  777 => 294,  769 => 292,  766 => 291,  762 => 290,  754 => 287,  748 => 283,  743 => 281,  740 => 280,  735 => 278,  732 => 277,  730 => 276,  726 => 274,  721 => 272,  718 => 271,  713 => 269,  710 => 268,  708 => 267,  700 => 264,  694 => 260,  689 => 258,  686 => 257,  681 => 255,  678 => 254,  676 => 253,  672 => 251,  667 => 249,  664 => 248,  659 => 246,  656 => 245,  654 => 244,  646 => 241,  640 => 237,  634 => 235,  628 => 233,  625 => 232,  619 => 230,  613 => 228,  611 => 227,  605 => 224,  599 => 220,  593 => 218,  587 => 216,  584 => 215,  578 => 213,  572 => 211,  569 => 210,  563 => 208,  557 => 206,  554 => 205,  548 => 203,  542 => 201,  539 => 200,  533 => 198,  527 => 196,  524 => 195,  518 => 193,  512 => 191,  509 => 190,  503 => 188,  497 => 186,  495 => 185,  489 => 182,  483 => 178,  477 => 176,  471 => 174,  468 => 173,  462 => 171,  456 => 169,  453 => 168,  447 => 166,  441 => 164,  438 => 163,  432 => 161,  426 => 159,  423 => 158,  417 => 156,  411 => 154,  409 => 153,  403 => 150,  397 => 146,  391 => 145,  383 => 143,  375 => 141,  372 => 140,  368 => 139,  360 => 136,  355 => 133,  349 => 131,  347 => 130,  339 => 127,  331 => 124,  323 => 121,  316 => 117,  308 => 114,  305 => 113,  297 => 110,  292 => 108,  287 => 107,  282 => 105,  277 => 104,  275 => 103,  271 => 101,  267 => 100,  261 => 97,  255 => 93,  250 => 91,  247 => 90,  242 => 88,  239 => 87,  237 => 86,  233 => 84,  228 => 82,  225 => 81,  220 => 79,  217 => 78,  215 => 77,  209 => 74,  204 => 71,  198 => 69,  196 => 68,  190 => 67,  185 => 65,  180 => 62,  174 => 60,  172 => 59,  166 => 58,  161 => 56,  156 => 53,  150 => 51,  148 => 50,  142 => 49,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-key">{{ entry_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_key" value="{{ shipping_fedex_key }}" placeholder="{{ entry_key }}" id="input-key" class="form-control" />*/
/*               {% if error_key %}*/
/*               <div class="text-danger">{{ error_key }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_password" value="{{ shipping_fedex_password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-account">{{ entry_account }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_account" value="{{ shipping_fedex_account }}" placeholder="{{ entry_account }}" id="input-account" class="form-control" />*/
/*               {% if error_account %}*/
/*               <div class="text-danger">{{ error_account }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-meter">{{ entry_meter }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_meter" value="{{ shipping_fedex_meter }}" placeholder="{{ entry_meter }}" id="input-meter" class="form-control" />*/
/*               {% if error_meter %}*/
/*               <div class="text-danger">{{ error_meter }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-postcode">{{ entry_postcode }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_postcode" value="{{ shipping_fedex_postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*               {% if error_postcode %}*/
/*               <div class="text-danger">{{ error_postcode }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_test }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_fedex_test %}*/
/*                 <input type="radio" name="shipping_fedex_test" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_test" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_fedex_test %}*/
/*                 <input type="radio" name="shipping_fedex_test" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_test" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_service }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for service in services %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     {% if service.value in shipping_fedex_service %}*/
/*                     <input type="checkbox" name="fedex_service[]" value="{{ service.value }}" checked="checked" />*/
/*                     {{ service.text }}*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="fedex_service[]" value="{{ service.value }}" />*/
/*                     {{ service.text }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="row">*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_fedex_length" value="{{ shipping_fedex_length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control" />*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_fedex_width" value="{{ shipping_fedex_width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_fedex_height" value="{{ shipping_fedex_height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% if error_dimension %}*/
/*               <div class="text-danger">{{ error_dimension }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-length-class"><span data-toggle="tooltip" title="{{ help_length_class }}">{{ entry_length_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_length_class_id" id="input-length-class" class="form-control">*/
/*                 {% for length_class in length_classes %}*/
/*                 {% if length_class.length_class_id == shipping_fedex_length_class_id %}*/
/*                 <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-dropoff-type">{{ entry_dropoff_type }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_dropoff_type" id="input-dropoff-type" class="form-control">*/
/*                 {% if shipping_fedex_dropoff_type == 'REGULAR_PICKUP' %}*/
/*                 <option value="REGULAR_PICKUP" selected="selected">{{ text_regular_pickup }}</option>*/
/*                 {% else %}*/
/*                 <option value="REGULAR_PICKUP">{{ text_regular_pickup }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_dropoff_type == 'REQUEST_COURIER' %}*/
/*                 <option value="REQUEST_COURIER" selected="selected">{{ text_request_courier }}</option>*/
/*                 {% else %}*/
/*                 <option value="REQUEST_COURIER">{{ text_request_courier }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_dropoff_type == 'DROP_BOX' %}*/
/*                 <option value="DROP_BOX" selected="selected">{{ text_drop_box }}</option>*/
/*                 {% else %}*/
/*                 <option value="DROP_BOX">{{ text_drop_box }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_dropoff_type == 'BUSINESS_SERVICE_CENTER' %}*/
/*                 <option value="BUSINESS_SERVICE_CENTER" selected="selected">{{ text_business_service_center }}</option>*/
/*                 {% else %}*/
/*                 <option value="BUSINESS_SERVICE_CENTER">{{ text_business_service_center }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_dropoff_type == 'STATION' %}*/
/*                 <option value="STATION" selected="selected">{{ text_station }}</option>*/
/*                 {% else %}*/
/*                 <option value="STATION">{{ text_station }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-packaging-type">{{ entry_packaging_type }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_packaging_type" id="input-packaging-type" class="form-control">*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_ENVELOPE' %}*/
/*                 <option value="FEDEX_ENVELOPE" selected="selected">{{ text_fedex_envelope }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_ENVELOPE">{{ text_fedex_envelope }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_PAK' %}*/
/*                 <option value="FEDEX_PAK" selected="selected">{{ text_fedex_pak }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_PAK">{{ text_fedex_pak }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_BOX' %}*/
/*                 <option value="FEDEX_BOX" selected="selected">{{ text_fedex_box }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_BOX">{{ text_fedex_box }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_TUBE' %}*/
/*                 <option value="FEDEX_TUBE" selected="selected">{{ text_fedex_tube }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_TUBE">{{ text_fedex_tube }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_10KG_BOX' %}*/
/*                 <option value="FEDEX_10KG_BOX" selected="selected">{{ text_fedex_10kg_box }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_10KG_BOX">{{ text_fedex_10kg_box }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'FEDEX_25KG_BOX' %}*/
/*                 <option value="FEDEX_25KG_BOX" selected="selected">{{ text_fedex_25kg_box }}</option>*/
/*                 {% else %}*/
/*                 <option value="FEDEX_25KG_BOX">{{ text_fedex_25kg_box }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_packaging_type == 'YOUR_PACKAGING' %}*/
/*                 <option value="YOUR_PACKAGING" selected="selected">{{ text_your_packaging }}</option>*/
/*                 {% else %}*/
/*                 <option value="YOUR_PACKAGING">{{ text_your_packaging }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-rate-type">{{ entry_rate_type }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_rate_type" id="input-rate-type" class="form-control">*/
/*                 {% if shipping_fedex_rate_type == 'LIST' %}*/
/*                 <option value="LIST" selected="selected">{{ text_list_rate }}</option>*/
/*                 {% else %}*/
/*                 <option value="LIST">{{ text_list_rate }}</option>*/
/*                 {% endif %}*/
/*                 {% if shipping_fedex_rate_type == 'ACCOUNT' %}*/
/*                 <option value="ACCOUNT" selected="selected">{{ text_account_rate }}</option>*/
/*                 {% else %}*/
/*                 <option value="ACCOUNT">{{ text_account_rate }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_display_time }}">{{ entry_display_time }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_fedex_display_time %}*/
/*                 <input type="radio" name="shipping_fedex_display_time" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_display_time" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_fedex_display_time %}*/
/*                 <input type="radio" name="shipping_fedex_display_time" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_display_time" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_display_weight }}">{{ entry_display_weight }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_fedex_display_weight %}*/
/*                 <input type="radio" name="shipping_fedex_display_weight" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_display_weight" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_fedex_display_weight %}*/
/*                 <input type="radio" name="shipping_fedex_display_weight" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_fedex_display_weight" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-weight-class"><span data-toggle="tooltip" title="{{ help_weight_class }}">{{ entry_weight_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_weight_class_id" id="input-weight-class" class="form-control">*/
/*                 {% for weight_class in weight_classes %}*/
/*                 {% if weight_class.weight_class_id == shipping_fedex_weight_class_id %}*/
/*                 <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_fedex_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_fedex_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fedex_status" id="input-status" class="form-control">*/
/*                 {% if shipping_fedex_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fedex_sort_order" value="{{ shipping_fedex_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
