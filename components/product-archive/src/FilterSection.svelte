<script>
    export let categories = [];
    export let filters = [];
    export let title = "title";
    export let currentPage;
    export let isParent;
    export let childFilters;

    $: if (filters.length) {
        currentPage = 1;
    }

    $: if (isParent && filters.length) {
        childFilters = [];
    }

    let openCategory = false;
</script>

<ul class="product-archive-filters-section">
    <button
        class="filter-category-title"
        on:click={() => {
            openCategory = !openCategory;
        }}
    >
        <h4>{title}</h4>
        {#if openCategory}
            <span>-</span>
        {:else}
            <span>+</span>
        {/if}
    </button>
    {#if openCategory}
        {#each categories as category}
            <li>
                <input
                    type="checkbox"
                    bind:group={filters}
                    name={category.name}
                    value={category.id}
                />
                {@html category.name}
            </li>
        {/each}
    {/if}
</ul>
