/*! bdtUIkit 2.27.1 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
!function(e){var s;window.bdtUIkit&&(s=e(bdtUIkit)),"function"==typeof define&&define.amd&&define("uikit-search",["uikit"],function(){return s||e(bdtUIkit)})}(function(e){"use strict";e.component("search",{defaults:{msgResultsHeader:"Search Results",msgMoreResults:"More Results",msgNoResults:"No results found",template:'<ul class="bdt-nav bdt-nav-search bdt-autocomplete-results">                                      {{#msgResultsHeader}}<li class="bdt-nav-header bdt-skip">{{msgResultsHeader}}</li>{{/msgResultsHeader}}                                      {{#items && items.length}}                                          {{~items}}                                          <li data-url="{{!$item.url}}">                                              <a href="{{!$item.url}}">                                                  {{{$item.title}}}                                                  {{#$item.text}}<div>{{{$item.text}}}</div>{{/$item.text}}                                              </a>                                          </li>                                          {{/items}}                                          {{#msgMoreResults}}                                              <li class="bdt-nav-divider bdt-skip"></li>                                              <li class="bdt-search-moreresults" data-moreresults="true"><a href="#" onclick="jQuery(this).closest(\'form\').submit();">{{msgMoreResults}}</a></li>                                          {{/msgMoreResults}}                                      {{/end}}                                      {{^items.length}}                                        {{#msgNoResults}}<li class="bdt-skip"><a>{{msgNoResults}}</a></li>{{/msgNoResults}}                                      {{/end}}                                  </ul>',renderer:function(e){var s=this.options;this.dropdown.append(this.template({items:e.results||[],msgResultsHeader:s.msgResultsHeader,msgMoreResults:s.msgMoreResults,msgNoResults:s.msgNoResults})),this.show()}},boot:function(){e.$html.on("focus.search.uikit","[data-bdt-search]",function(){var s=e.$(this);s.data("search")||e.search(s,e.Utils.options(s.attr("data-bdt-search")))})},init:function(){var s=this;this.autocomplete=e.autocomplete(this.element,this.options),this.autocomplete.dropdown.addClass("bdt-dropdown-search"),this.autocomplete.input.on("keyup",function(){s.element[s.autocomplete.input.val()?"addClass":"removeClass"]("bdt-active")}).closest("form").on("reset",function(){s.value="",s.element.removeClass("bdt-active")}),this.on("selectitem.uk.autocomplete",function(e,t){t.url?location.href=t.url:t.moreresults&&s.autocomplete.input.closest("form").submit()}),this.element.data("search",this)}})});