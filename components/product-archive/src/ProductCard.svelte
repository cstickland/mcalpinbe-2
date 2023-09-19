<script>
    export let product;

    const skuCount = product.skus.length;
</script>

<div class="product-card">
    <div class="product-block-image">
        <img src={product.image_url} alt="" />
        <div class="product-title">{@html product.title}</div>
        <div class="sku-count">
            {skuCount}
            {#if skuCount == 1} sku{/if}{#if skuCount > 1} skus{/if}
        </div>
        <a class="product-card-link" href={product.link}>></a>
    </div>
    <div class="sku-list-container">
        <div class="sku-list">
            {#each product.skus as sku, index}
                <span>
                    {sku}{#if index + 1 < skuCount}, {/if}
                </span>
            {/each}
        </div>
        <div class="product-title">{@html product.title}</div>
        <div class="sku-count">
            {skuCount}
            {#if skuCount == 1} sku{/if}{#if skuCount > 1} skus{/if}
        </div>
        <a class="product-card-link" href={product.link}>></a>
    </div>
</div>
