<h4>{Configuration::get('NOHCL_titulo')}</h4>
<ul>
	{foreach from=$pr item=product name=myLoop}
		<li>{$smarty.foreach.myLoop.iteration}. <a href="{$link->getProductLink($product->id)}" title=""><span>{$product->name[1]}</span></a> <span>{displayPrice price=$product->getPriceStatic($product->id) currency=$order->id_currency}</span></li>
	{/foreach}
</ul>