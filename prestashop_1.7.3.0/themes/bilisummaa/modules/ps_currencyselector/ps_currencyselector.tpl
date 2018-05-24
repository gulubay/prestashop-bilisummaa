{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="nav-options">   
<div class="col-lg-6 col-md-6 mobile-col">
<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown col-lg-12">
<!--    <span id="currency-selector-label">{l s='Currency:' d='Shop.Theme.Global'}</span>-->
    <button data-target="#" data-toggle="dropdown" class="btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Currency dropdown' d='Shop.Theme.Global'}">
      <span class="expand-more _gray-darker mobile-font-curr"><span class="hidden-sm-down"><span class="hidden-md-down">{$current_currency.iso_code}</span> {$current_currency.sign}</span> </span>
        <img class="currency-selector-label" src="themes/bilisummaa/assets/img/{$current_currency.iso_code}.jpg"/>
      <i class="material-icons expand-more">&#xE5C5;</i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="currency-selector-label">
      {foreach from=$currencies item=currency}
        <li {if $currency.current} class="current" {/if}>
          <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code} {$currency.sign} <img class="currency-flags select-flag" style="margin-left:15px;" src="themes/bilisummaa/assets/img/{$currency.iso_code}.jpg"/></a>
        </li>
      {/foreach}
    </ul>
    <!-- 
    <select class="link hidden-md-up" aria-labelledby="currency-selector-label">
      {foreach from=$currencies item=currency}
        <option value="{$currency.url}"{if $currency.current} selected="selected"{/if}>{$currency.iso_code} {$currency.sign}</option>
      {/foreach}
    </select> -->

    <!-- <button data-target="#" data-toggle="dropdown" class="hidden-md-up btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Currency dropdown' d='Shop.Theme.Global'}">
      <span class="expand-more _gray-darker">{$current_currency.iso_code}</span>
        <img class="currency-selector-label" src="themes/bilisummaa/assets/img/{$current_currency.iso_code}.jpg"/>
      <i class="material-icons expand-more">&#xE5C5;</i>
    </button>
    <ul class="dropdown-menu hidden-md-up" aria-labelledby="currency-selector-label">
      {foreach from=$currencies item=currency}
        <li {if $currency.current} class="current" {/if}>
          <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code} {$currency.sign} <img class="currency-flags select-flag" style="margin-left:15px;" src="themes/bilisummaa/assets/img/{$currency.iso_code}.jpg"/></a>
        </li>
      {/foreach}
    </ul> -->
  </div>
</div>
